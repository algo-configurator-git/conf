<?php

namespace App\Services;

use App\Models\CoreConfigData;
use App\Repositories\AssemblyItemsRepository;

class AssemblyItemsService
{
    protected AssemblyItemsRepository $assemblyItemsRepository;
    protected ProductService $productService;
    protected $currencyRate;

    public function __construct()
    {
        $this->assemblyItemsRepository = service('assemblyItemsRepository');
        $this->productService = service('productService');
        $coreConfigData = new CoreConfigData();
        $this->currencyRate = $coreConfigData->getCurrencyRate();
    }

    public function getAssemblyItems($assembly_id)
    {
        return $this->assemblyItemsRepository->getAssemblyItems($assembly_id);
    }

    public function getAssemblyItemsWithProductsGrouped(int $assemblyId): array
    {
        $assemblyItems = $this->getAssemblyItems($assemblyId);

        if (empty($assemblyItems)) {
            return [];
        }

        $productIds = array_column($assemblyItems, 'product_id');

        $products = $this->productService->getProductsBySkus($productIds);

        $indexedProducts = [];
        foreach ($products as $product) {
            $indexedProducts[$product['sku']] = $product;
        }

        $grouped = [];

        foreach ($assemblyItems as $item) {
            $sku = $item['product_id'];
            if (isset($indexedProducts[$sku])) {
                $product = $indexedProducts[$sku];
                $this->convertPrice($product['price']);
                $this->convertPrice($product['discount_price']);
                $grouped[$item['type']][] = $product;
            }
        }

        return $grouped;
    }

    public function getProductSku($assemblyItemId)
    {
        return $this->assemblyItemsRepository->getProductSku($assemblyItemId);
    }

    public function convertPrice(&$price)
    {
        $convertedPrice = ceil(($price * $this->currencyRate / 100) / 100);
        $price = number_format($convertedPrice, 2, ',', '');
    }
}