<?php

namespace App\Controllers;

use App\Models\Review;
use App\Services\ReviewService;
use CodeIgniter\Controller;

class ModerateController extends Controller
{
    protected ReviewService $reviewService;

    public function __construct()
    {
        $this->reviewService = service('reviewService');
    }
    public function index()
    {
        $pendingReviews = $this->reviewService->getPendingReviews();

        return view('moderate', ['reviews' => $pendingReviews]);
    }

    public function approve($reviewId)
    {
        $reviewModel = new Review();
        $review = $reviewModel->find($reviewId);

        if (!$review) {
            return redirect()->to('/7b2c6e04fe9dbd399e6a1f2c83d85c5fda5a3de5');
        }

        $reviewModel->update($reviewId, ['status' => 'approved']);

        if ($review['type'] === 'assembly-rating')
        {
            $assemblyService = service('assemblyService');
            $assemblyService->recalculateRating($review['assembly_id']);
        }

        return $this->response->setJSON(['success' => true]);;
    }

    public function reject($reviewId)
    {
        return 1;
    }
}