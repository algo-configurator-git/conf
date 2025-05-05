<?php

namespace App\Controllers;

use App\Repositories\ReviewRepository;
use CodeIgniter\Controller;

class ReviewsController extends Controller
{
    protected ReviewRepository $reviewRepository;

    public function __construct()
    {
        $this->reviewRepository = service('reviewRepository');
    }

    public function index()
    {
        $reviews = $this->reviewRepository->all();

        return view('reviews', ['reviews' => $reviews]);
    }

    public function getReview()
    {

    }

    public function store()
    {

    }
}