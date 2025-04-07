<?php

namespace App\Controllers;

use App\Repositories\ProductRepository;
use App\Services\AssemblyService;
use App\Services\ProductService;
use CodeIgniter\Controller;

class ConfiguratorController extends Controller
{
    protected AssemblyService $assemblyService;
    protected ProductService $productService;

    public function __construct()
    {
        $this->assemblyService = service('assemblyService');
        $this->productService = service('productService');
    }

    public function index()
    {
        $session = session();
        $assembly = $session->get("assembly") ?? [
            "cpu" => [],
            "cooler" => [],
            "motherboard" => [],
            "ram" => [],
            "gpu" => [],
            "hdd" => [],
            "ssd" => [],
            "case" => [],
            "power_supply" => [],
            "headphones" => [],
            "keyboard" => [],
            "mouse" => [],
            "monitor" => [],
            "acoustic" => [],
            "os" => [],
        ];

        return view('configurator', ['assembly' => $assembly]);
    }

    /**
     * Метод для просмотра сборки в конфигураторе
     * @param $id
     * @return void
     */
    public function show($id)
    {
        $assembly = $this->assemblyService->getAssemblyById($id);
    }

    public function clear(): void
    {
        $session = session();
        $session->set("assembly", [
            "cpu" => [],
            "cooler" => [],
            "motherboard" => [],
            "ram" => [],
            "gpu" => [],
            "hdd" => [],
            "ssd" => [],
            "case" => [],
            "power_supply" => [],
            "headphones" => [],
            "keyboard" => [],
            "mouse" => [],
            "monitor" => [],
            "acoustic" => [],
            "os" => [],
        ]);
    }

    public function showProductsByCategory(int $category): array
    {
        return $this->productService->getProductsByCategory($category);
    }
}