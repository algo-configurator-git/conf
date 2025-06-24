<?php

namespace App\Controllers;

use App\Models\CoreConfigData;
use App\Models\Product;
use App\Models\ProductsCategories;
use Config\Assembly;


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

        $productsCategoriesModel = new ProductsCategories();
        $categoryItemsCounts = $productsCategoriesModel
            ->select('id_category')
            ->selectCount('*', 'count')
            ->groupBy('id_category')
            ->whereIn('id_category', $categoryIds)
            ->findAll();

        return view('config_page', [
            'componentListData' => $componentListData,
            'categoryItemsCounts' => $categoryItemsCounts
        ]);
    }

    public function store()
    {
        $session = \Config\Services::session();

        $config = $session->get('config');
        dd($config);
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