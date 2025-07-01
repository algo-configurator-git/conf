<?php

namespace App\Controllers;

use App\Models\CoreConfigData;
use App\Models\Product;
use App\Models\ProductsCategories;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Assembly;
use Config\Services;


class ConfigController extends BaseController
{
    public function index()
    {
        $assemblyConfig = new Assembly();
        $componentListData = $assemblyConfig->componentListData;

        $categoryIds = [];
        foreach ($componentListData as $group) {
            foreach ($group['components'] as $component) {
                $categoryIds[] = $component['id'];
            }
        }

        $productRepository = Services::productRepository();
        $categoryItemsCounts = $productRepository->getProductsCountByCategoryIds($categoryIds);

        return view('config_page', [
            'componentListData' => $componentListData,
            'categoryItemsCounts' => $categoryItemsCounts
        ]);
    }

    public function filters($categoryId = null)
    {
        $categoryService = Services::categoryService();

        $filters = $categoryService->getCategoryFilters($categoryId);

        return $this->response->setJSON($filters);
    }

    public function saveConfig(): void
    {
        $session = \Config\Services::session();
        $assembly = $this->request->getBody();
        $session->set('config', $assembly);
    }

    public function getConfig(): ResponseInterface
    {
        $session = \Config\Services::session();
        $assembly = $session->get('config');

        return $assembly ? $this->response->setBody($assembly) : $this->response->setJSON([]);
    }

    public function getConfigProducts()
    {
        $productModel = new Product();
        $session = \Config\Services::session();
        $config = $session->get('config');

        $productsSku = !empty($config) ? call_user_func_array('array_merge', array_values($config)) : [];

        $configWithProducts = [];

        if(!empty($productsSku)){
            $products = $productModel
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
                ])
                ->whereIn('products.sku', $productsSku)
                ->findAll();

            foreach($products as &$product){
                $product['price'] = $this->converPrice($product['price']);
                $product['discount_price'] = $this->converPrice($product['discount_price']);
                $product['image'] = $this->getImageUrl($product['image']);
            }
            unset($product);

            $productsAssoc = [];
            foreach ($products as $product) {
                $productsAssoc[$product['sku']] = $product;
            }

            $configWithProducts = [];
            foreach ($config as $category => $skuList) {
                foreach ($skuList as $sku) {
                    if (isset($productsAssoc[$sku])) {
                        $configWithProducts[$category][] = $productsAssoc[$sku];
                    }
                }
            }
        }


        return $this->response->setJSON([$configWithProducts]);
    }

    public function converPrice($price): float
    {
        $config = new CoreConfigData();
        $currencyRate = $config->getCurrencyRate();

        return round($price * $currencyRate / 10000, 2);
    }

    public function getImageUrl($image): string
    {
        return env('IMAGE_BASE_URL') . $image;
    }
}