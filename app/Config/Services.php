<?php

namespace Config;

use App\Repositories\AssemblyItemsRepository;
use App\Repositories\AssemblyRepository;
use App\Repositories\AttributeRepository;
use App\Repositories\ProductRepository;
use App\Repositories\ReviewRepository;
use App\Services\AssemblyItemsService;
use App\Services\AssemblyService;
use App\Services\CategoryService;
use App\Services\ProductService;
use App\Services\ReviewService;
use CodeIgniter\Config\BaseService;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends BaseService
{
    /*
     * public static function example($getShared = true)
     * {
     *     if ($getShared) {
     *         return static::getSharedInstance('example');
     *     }
     *
     *     return new \CodeIgniter\Example();
     * }
     */
    public static function reviewService()
    {
        return new ReviewService();
    }
    public static function reviewRepository()
    {
        return new ReviewRepository();
    }

    public static function assemblyService()
    {
        return new AssemblyService();
    }

    public static function assemblyRepository()
    {
        return new AssemblyRepository();
    }

    public static function productService()
    {
        return new ProductService();
    }

    public static function categoryService()
    {
        return new CategoryService();
    }

    public static function attributeRepository()
    {
        return new AttributeRepository();
    }

    public static function productRepository()
    {
        return new ProductRepository();
    }

    public static function assemblyItemsService()
    {
        return new AssemblyItemsService();
    }

    public static function assemblyItemsRepository()
    {
        return new AssemblyItemsRepository();
    }
}
