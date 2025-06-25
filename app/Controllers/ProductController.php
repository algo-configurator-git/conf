<?php

namespace App\Controllers;

use App\Models\CoreConfigData;
use App\Models\Product;
use Config\Services;

class ProductController extends BaseController
{
    public function index($categoryId = null)
    {
        $productService = Services::productService();
        $pager = Services::pager();

        $page = $this->request->getGet('page') ?? 1;
        $perPage = $this->request->getGet('perPage') ?? 20;
        $search = $this->request->getGet('search');
        $minPrice = $this->request->getGet('min_price');
        $maxPrice = $this->request->getGet('max_price');


        $products = $productService->getProductsByFilters(
            search: $search,
            minPrice: $minPrice,
            maxPrice: $maxPrice,
            categoryId: $categoryId,
            perPage: $perPage,
            page: $page
        );

        return $this->response->setJSON([
            'products' => $products,
            'totalPages' => $pager->getPageCount('products'),
            'currentPage' => $pager->getCurrentPage('products'),
            'perPage' => $perPage,
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
}