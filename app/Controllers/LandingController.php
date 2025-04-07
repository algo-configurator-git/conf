<?php

namespace App\Controllers;

use App\Services\AssemblyService;
use App\Services\ReviewService;
use CodeIgniter\Controller;

class LandingController extends Controller
{
    protected ReviewService $reviewService;
    protected AssemblyService $assemblyService;

    public function __construct()
    {
        $this->reviewService = service('reviewService');
        $this->assemblyService = service('assemblyService');
    }

    public function index()
    {
        $reviews = $this->reviewService
            ->getLast6Reviews();
        $assemblies = $this->assemblyService
            ->getTop6PopularAssemblies();

        return view('landing', ['reviews' => $reviews, 'assemblies' => $assemblies]);
    }
}