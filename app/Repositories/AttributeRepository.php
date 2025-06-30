<?php

namespace App\Repositories;

use App\Models\ProductsCategories;

class AttributeRepository
{
    protected ProductsCategories $productsCategoriesModel;

    public function __construct()
    {
        $this->productsCategoriesModel = new ProductsCategories();
    }

    public function getAttributesByCategoryId(int $categoryId): array
    {
        return $this->productsCategoriesModel
            ->join('products_filters', 'products_filters.sku = products_categories.sku')
            ->join('attributes', 'attributes.id_attribute = products_filters.id_attribute_new')
            ->join('attributes_values', 'attributes_values.id_attribute_value = products_filters.id_attribute_value')
            ->join('products', 'products.sku = products_categories.sku')
            ->where([
                'products.is_in_stock' => 1,
                'products.enabled' => 1,
                'products_categories.id_category' => $categoryId
            ])
            ->select('attributes.name')
            ->select('attributes_values.text')
            ->select('attributes.id_attribute')
            ->select('products_filters.id_attribute_value')
            ->selectCount('products_filters.id_attribute_value', 'count')
            ->groupBy('products_filters.id_attribute_value')
            ->findAll();
    }
}