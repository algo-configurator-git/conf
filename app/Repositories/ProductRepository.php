<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductsCategories;
use function Symfony\Component\String\b;

class ProductRepository
{
    protected Product $productModel;
    protected ProductImage $productImageModel;
    protected ProductsCategories $productsCategoriesModel;

    public function __construct()
    {
        $this->productModel = new Product();
        $this->productImageModel = new ProductImage();
        $this->productsCategoriesModel = new ProductsCategories();
    }

    public function getProductsByFilters(
        ?string $search,
        ?int $categoryId,
        int $perPage,
        int $page,
        int $sort,
        bool $saleOnly,
        array $filters
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
                ->like('products.name', $search)
                ->orLike('products.sku', $search)
                ->groupEnd();
        }

        if ($saleOnly) {
            $builder->where('products.discount', 1);
        }

        if ($filters['minPrice']) {
            $builder->where('price >=', $filters['minPrice']);
        }
        if ($filters['maxPrice']) {
            $builder->where('price <=', $filters['maxPrice']);
        }
        if ($categoryId) {
            $builder->join('products_categories', 'products_categories.sku = products.sku')
                ->where('id_category', $categoryId);
        }

        if ($filters['values']) {
            $builder->join('products_filters', 'products_filters.sku = products.sku')
                ->whereIn('products_filters.id_attribute_value', $filters['values']);
        }

        switch ($sort) {
            case 0:
                $builder
                    ->join('products_popularity', 'products_popularity.sku = products.sku', 'LEFT')
                    ->groupBy('products.sku')
                    ->selectSum('products_popularity.count' , 'popularity')
                    ->orderBy('popularity', 'DESC');
                break;
            case 1:
                $builder->orderBy('products.date', 'DESC');
                break;
            case 2:
                $builder->orderBy('products.price', 'ASC');
                break;
        }

        return $builder->paginate($perPage, 'products', $page);
    }

    public function getProductsCountByCategoryIds(array $categoryIds): array
    {
        return $this->productModel
            ->select('products_categories.id_category')
            ->selectCount('products.sku', 'count')
            ->join('products_images', 'products_images.sku = products.sku')
            ->join('products_categories', 'products_categories.sku = products.sku')
            ->groupBy('products_categories.id_category')
            ->whereIn('products_categories.id_category', $categoryIds)
            ->where([
                'products_images.main' => 1,
                'products.is_in_stock' => 1,
                'products.enabled' => 1,
            ])
            ->findAll();
    }

    public function getMinMaxProductsPriceByCategoryId(int $categoryId): array
    {
        return $this->productModel
            ->selectMin('price', 'min')
            ->selectMax('price', 'max')
            ->join('products_categories', 'products_categories.sku = products.sku')
            ->where([
                'products_categories.id_category' => $categoryId,
                'products.is_in_stock' => 1,
                'products.enabled' => 1,
            ])
            ->first();
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