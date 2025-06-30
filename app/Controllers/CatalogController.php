<?php

namespace App\Controllers;

use App\Services\AssemblyService;
use Config\Services;

class CatalogController extends BaseController
{
    public function index($type)
    {
        $validTypes = ['all', 'home', 'office', 'gamer', 'developer', 'designer'];

        if (!in_array($type, $validTypes)) {
            return redirect()->to('/catalog/all'); // Редирект, если тип неверный
        }

        $assemblyService = service('assemblyService');

        $sort = $this->request->getGet('sort');

        $orderBy = match ($sort) {
            'rating' => 'average_rating DESC',
            'new' => 'created_at DESC',
            'price' => 'total_price ASC',
            default => 'average_rating DESC',
        };

        $page = $this->request->getGet('page') ?? 1;
        $perPage = $this->request->getGet('perPage') ?? 10;

        [$assemblies, $total] = $assemblyService->getAssembliesByType($type, $orderBy, $page, $perPage) ?? [];

        $popularAssemblies = $assemblyService->getTop6PopularAssemblies();

        return view('catalog', [
            'assemblies' => $assemblies,
            'popularAssemblies' => $popularAssemblies,
            'type' => $type,
            'sort' => $sort,
            'page' => (int)$page,
            'perPage' => (int)$perPage,
            'total' => $total,
            'totalPages' => ceil($total /  $perPage),
        ]);
    }
}