<?php

namespace App\Controllers;

use App\Services\AssemblyService;

class CatalogController extends BaseController
{
    protected AssemblyService $assemblyService;

    public function __construct()
    {
        $this->assemblyService = service('assemblyService');
    }
    public function index($type)
    {
        $validTypes = ['all', 'home', 'office', 'gamer', 'developer', 'designer'];

        if (!in_array($type, $validTypes)) {
            return redirect()->to('/catalog/all'); // Редирект, если тип неверный
        }

        $sort = $this->request->getGet('sort');

        $orderBy = match ($sort) {
            'rating' => 'average_rating DESC',
            'new' => 'created_at DESC',
            'price' => 'total_price ASC',
            default => 'average_rating DESC',
        };

        $page = $this->request->getGet('page') ?? 1;
        $perPage = $this->request->getGet('per_page') ?? 10;

        [$assemblies, $total] = $this->assemblyService->getAssembliesByType($type, $orderBy, $page, $perPage) ?? [];

        $popularAssemblies = $this->assemblyService->getTop6PopularAssemblies();

        return view('catalog', [
            'assemblies' => $assemblies,
            'popularAssemblies' => $popularAssemblies,
            'type' => $type,
            'sort' => $sort,
            'page' => (int)$page,
            'per_page' => (int)$perPage,
            'total_pages' => ceil($total /  $perPage),
        ]);
    }
}