<?php

namespace App\Controllers;

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
            ->select(['sku', 'name', 'price', 'discount_price'])
            ->where(['is_in_stock' => 1, 'enabled' => 1]);

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

        $products = $builder->paginate(50, 'products');
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
}