<?php

namespace App\Controllers;

use App\Services\AssemblyService;
use App\Services\ProductService;
use CodeIgniter\Controller;

class AssemblyController extends Controller
{
    protected AssemblyService $assemblyService;
    protected ProductService $productService;

    public function __construct()
    {
        $this->assemblyService = service('assemblyService');
        $this->productService = service('productService');
    }

    public function getAssembliesByType($type)
    {
//        $this->assemblyService->getAssembliesByType($type);
    }
}