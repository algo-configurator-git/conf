<?php

namespace App\Services;

use App\Models\CoreConfigData;
use App\Repositories\ProductRepository;
use App\Repositories\ReviewRepository;

class ProductService
{
    protected ProductRepository $productRepository;

    public function __construct()
    {
        $this->productRepository = service('productRepository');
    }

    public function getProductsByCategory($category)
    {
        return $this->productRepository->getProductsByCategory($this->getCategoryId($category));
    }

    private function getCategoryId($category)
    {
        $categoryCast = [
            "cpu" => 8,
            "cooler" => 18,
            "motherboard" => 9,
            "ram" => 17,
            "gpu" => 15,
            "hdd" => 90,
            "ssd" => 253,
            "case" => 53,
            "power_supply" => 54,
            "headphones" => 38,
            "keyboard" => 42,
            "mouse" => 43,
            "monitor" => 6,
            "acoustic" => 37,
            "os" => 158,
        ];

        return $categoryCast[$category];
    }

    public function getProductsBySkus(array $skus): array
    {
        $products = $this->productRepository->getProductsBySkus($skus);

        $productsSkus = array_column($products, 'sku');

        $images = $this->productRepository->getProductsImage($productsSkus);

        $imagesBySku = [];
        foreach ($images as $image) {
            $imagesBySku[$image['sku']] = env('IMAGE_BASE_URL') . $image['image'] ?? null;
        }

        foreach ($products as &$product) {
            $product['image'] = $imagesBySku[$product['sku']] ?? null;
        }

        return $products;
    }

    public function getProductsByFilters(
        ?string $search,
        ?float $minPrice,
        ?float $maxPrice,
        ?int $categoryId,
        int $perPage,
        int $page
    ): array
    {
        $products = $this->productRepository->getProductsByFilters(
            search: $search,
            minPrice: $minPrice,
            maxPrice: $maxPrice,
            categoryId: $categoryId,
            perPage: $perPage,
            page: $page
        );


        foreach($products as &$product){
            $product['price'] = $this->converPrice($product['price']);
            $product['discount_price'] = $this->converPrice($product['discount_price']);
            $product['image'] = $this->getImageUrl($product['image']);
        }

        return $products;
    }

    public function converPrice($price)
    {
        $config = new CoreConfigData();
        $currencyRate = $config->getCurrencyRate();

        return round($price * $currencyRate / 10000, 2);
    }

    public function getImageUrl($image)
    {
        return env('IMAGE_BASE_URL') . $image;
    }
}