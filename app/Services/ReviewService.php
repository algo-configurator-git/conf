<?php

namespace App\Services;

use App\Repositories\ReviewRepository;

class ReviewService
{
    protected ReviewRepository $reviewRepository;

    public function __construct()
    {
        $this->reviewRepository = service('reviewRepository');
    }

    public function getLast6Reviews()
    {
        $reviews = $this->reviewRepository->getLast6Reviews();

        $fmt = new \IntlDateFormatter(
            'ru_RU',
            \IntlDateFormatter::LONG,
            \IntlDateFormatter::NONE
        );

        $fmt->setPattern('d MMMM yyyy');

        foreach ($reviews as &$review) {
            $date = new \DateTime($review['created_at']);
            $formattedDate = $fmt->format($date);
            $review['created_at'] = mb_convert_case($formattedDate, MB_CASE_TITLE, "UTF-8");
        }

        return $reviews;
    }

    public function store()
    {

    }

    public function getPendingReviews(): array
    {
        return $this->reviewRepository->getPendingReviews();
    }
}