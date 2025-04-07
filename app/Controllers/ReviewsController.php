<?php

namespace App\Controllers;

use App\Models\Review;
use App\Services\ReviewService;
use CodeIgniter\Controller;

class ReviewsController extends Controller
{
    protected ReviewService $reviewService;

    public function __construct()
    {
        $this->reviewService = service('reviewService');
    }

    public function index()
    {
        $reviews = $this->reviewService->findAll();

        return view('reviews', ['reviews' => $reviews]);
    }

    public function getReview()
    {
        return $this->reviewService->getReview();
    }

    public function store()
    {
        dd($this->request->getVar());
    }
}