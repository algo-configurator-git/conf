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
        $pager = Services::pager();

        $sort = $this->request->getGet('sort');
        $page = $this->request->getGet('page') ?? 1;
        $perPage = $this->request->getGet('perPage') ?? 10;

        $assemblies = $assemblyService->getAssembliesByType($type, $sort, $page, $perPage) ?? [];

        $popularAssemblies = $assemblyService->getTop6PopularAssemblies();

        return view('catalog', [
            'assemblies' => $assemblies,
            'popularAssemblies' => $popularAssemblies,
            'type' => $type,
            'sort' => $sort,
            'page' => $pager->getCurrentPage('assemblies'),
            'perPage' => $pager->getPerPage('assemblies'),
            'total' => $pager->getTotal('assemblies'),
            'totalPages' => $pager->getPageCount('assemblies'),
        ]);
    }
}