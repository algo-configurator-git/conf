<?php

namespace App\Controllers;

use App\Models\CoreConfigData;
use App\Models\Product;

class ProductController extends BaseController
{
    public function index($type = null)
    {
        $productModel = new Product();

        $search = $this->request->getGet('search');
        $minPrice = $this->request->getGet('min_price');
        $maxPrice = $this->request->getGet('max_price');

        $builder = $productModel
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
        if ($type) {
            $builder->where('category_ram', $type);
        }

        $products = $builder->paginate(50, 'products');

        foreach($products as &$product){
            $product['price'] = $this->converPrice($product['price']);
            $product['discount_price'] = $this->converPrice($product['discount_price']);
            $product['image'] = $this->getImageUrl($product['image']);
        }
        unset($product);

        $pager = \Config\Services::pager();

        return $this->response->setJSON([
            'products' => $products,
            'pager' => $pager,
            'filters' => [
                'search' => $search,
                'min_price' => $minPrice,
                'max_price' => $maxPrice
            ]
        ]);
    }

    public function store($sku)
    {
        $session = \Config\Services::session();

        $category = $this->getProductCategory($sku);

        $products = $session->get('config') ?? [];

        if (!isset($products[$category]) || !is_array($products[$category])) {
            $products[$category] = [];
        }

        $products[$category][] = $sku;

        $session->set('config', $products);
    }

    public function getProductCategory($sku)
    {
        $productModel = new Product();

        $product = $productModel->select('category_ram')->find($sku);

        return $product['category_ram'];
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