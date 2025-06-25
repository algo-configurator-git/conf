<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductImage;

class ProductRepository
{
    protected Product $productModel;
    protected ProductImage $productImageModel;

    public function __construct()
    {
        $this->productModel = new Product();
        $this->productImageModel = new ProductImage();
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
        $builder = $this->productModel
            ->select([
                'products.sku',
                'products.name',
                'products.price',
                'products.discount_price',
                'products_images.image',
            ])
            ->join('products_images', 'products_images.sku = products.sku')
            ->where([
                'products_images.main' => 1,
                'products.is_in_stock' => 1,
                'products.enabled' => 1,
            ]);

        if ($search) {
            $builder->groupStart()
                ->like('name', $search)
                ->orLike('sku', $search)
                ->groupEnd();
        }

        if ($minPrice) {
            $builder->where('price >=', $minPrice);
        }
        if ($maxPrice) {
            $builder->where('price <=', $maxPrice);
        }
        if ($categoryId) {
            $builder->join('products_categories', 'products_categories.sku = products.sku')
                ->where('id_category', $categoryId);
        }

        return $builder->paginate($perPage, 'products', $page);
    }

    public function getProductsByCategory($categoryId)
    {
        return $this->productModel
            ->join('products_categories', 'products_categories.sku = products.sku')
            ->where('products_categories.id_category', $categoryId)
            ->where('products.price', '!=', '0.00')
            ->select('products.sku')
            ->select('products.price')
            ->select('products.name')
            ->select('products.discount_price')
            ->findAll();
    }

    public function getProductBySku($sku)
    {
        $product = $this->productModel
            ->select('products.sku')
            ->select('products.price')
            ->select('products.name')
            ->select('products.discount_price')
            ->select('products_categories.id_category')
            ->join('products_categories', 'products_categories.sku = products.sku')
            ->where('products.sku', $sku)
            ->first();

        if (!$product) {
            return null;
        }

        $product['image'] = $this->getProductImage($sku);

        return $product;
    }


    public function getProductsImage(array $productsSkus): array
    {
        return $this->productImageModel
            ->select(['image', 'sku'])
            ->whereIn('sku', $productsSkus)
            ->where('main', 1)
            ->get()
            ->getResultArray();
    }

    public function getProductsBySkus(array $skus): array
    {
        return $this->productModel
            ->select([
                'products.sku',
                'products.name',
                'products.price',
                'products.discount_price'
            ])
            ->whereIn('sku', $skus)
            ->findAll();
    }
}