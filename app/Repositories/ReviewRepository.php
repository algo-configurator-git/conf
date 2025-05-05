<?php

namespace App\Repositories;

use App\Models\Review;

class ReviewRepository
{
    protected Review $reviewModel;

    public function __construct()
    {
        $this->reviewModel = new Review();
    }

    public function all(): array
    {
        return $this->reviewModel
            ->findAll();
    }

    public function store(array $data): ?int
    {
        try {
            $this->reviewModel->insert($data);
            return $this->reviewModel->insertID();
        } catch (\ReflectionException $e) {
            return null;
        }
    }

    public function getLast6Reviews(): array
    {
        return $this->reviewModel
            ->where('assembly_id', null)
            ->where('status', 'approved')
            ->orderBy('created_at', 'DESC')
            ->findAll(6);
    }

    public function getPendingReviews(): array
    {
        return $this->reviewModel
            ->where('status', 'pending')
            ->orderBy('created_at', 'DESC')
            ->findAll();
    }
}