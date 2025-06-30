<?php

namespace App\Services;

use App\Repositories\AttributeRepository;
use App\Repositories\ProductRepository;
use Config\Services;

class CategoryService
{
    protected AttributeRepository $attributeRepository;
    protected ProductRepository $productRepository;

    public function __construct()
    {
        $this->attributeRepository = service('attributeRepository');;
        $this->productRepository = service('productRepository');;
    }

    public function getCategoryFilters(int $categoryId): array
    {
        $attributes = $this->attributeRepository->getAttributesByCategoryId($categoryId);
        $filtersInfo = $this->groupAttributes($attributes);

        $filters = [$this->buildPriceFilter($categoryId)];

        foreach ($filtersInfo as $attributeId => $info) {
            $filters[] = $this->buildAttributeFilter($attributeId, $info);
        }

        return $filters;
    }


    private function groupAttributes(array $attributes): array
    {
        $filtersInfo = [];

        foreach ($attributes as $attribute) {
            $attributeId = $attribute['id_attribute'];

            if (!isset($filtersInfo[$attributeId])) {
                $filtersInfo[$attributeId] = [
                    'title' => $attribute['name'],
                    'values' => [],
                ];
            }

            $filtersInfo[$attributeId]['values'][] = [
                'name' => $attribute['text'],
                'qnt' => $attribute['count'],
                'id' => $attribute['id_attribute_value'],
            ];
        }

        return $filtersInfo;
    }

    private function buildPriceFilter(int $categoryId): array
    {
        $priceRange = $this->productRepository->getMinMaxProductsPriceByCategoryId($categoryId);
        $productService = Services::productService();

        return [
            'title' => 'Цена',
            'type' => 'slider',
            'key' => 'price',
            'values' => [
                'step' => 0.01,
                'min' => $productService->converPrice($priceRange['min']),
                'max' => $productService->converPrice($priceRange['max']),
                'currentMin' => $productService->converPrice($priceRange['min']),
                'currentMax' => $productService->converPrice($priceRange['max']),
            ],
        ];
    }

    private function buildAttributeFilter(int $attributeId, array $info): array
    {
        return [
            'title' => $info['title'],
            'key' => $attributeId,
            'type' => count($info['values']) > 20 ? 'SearchCheckbox' : 'checkbox',
            'values' => $info['values'],
        ];
    }
}