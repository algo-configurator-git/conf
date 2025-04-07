<?php

namespace App\Services;

use App\Models\Assembly;
use App\Models\Review;
use App\Repositories\AssemblyRepository;

class AssemblyService
{
    protected AssemblyRepository $assemblyRepository;
    protected AssemblyItemsService $assemblyItemsService;
    protected ProductService $productService;

    public function __construct()
    {
        $this->assemblyRepository = service('assemblyRepository');
        $this->assemblyItemsService = service('assemblyItemsService');
        $this->productService = service('productService');
    }

    public function getAssembliesByType(string $type, string $orderBy)
    {
        if ($type === 'all') {
            $assemblies = $this->assemblyRepository->getAssemblies($orderBy);
        } else {
            $assemblies = $this->assemblyRepository->getAssembliesByType($type, $orderBy);
        }

        $assemblyIds = array_column($assemblies, 'id');

        foreach ($assemblyIds as $key => $assemblyId) {
            $assemblyData = $this->getAssemblyById((int) $assemblyId);

            if (empty($assemblyData)) {
                continue;
            }
            $assemblyData["items"] = $this->assemblyItemsService->getAssemblyItemsWithProductsGrouped($assemblyId);
            $assemblyData["total_price"] = $this->calculateTotalPrice($assemblyData["items"]);
            $assemblyData["total_discount_price"] = $this->calculateTotalDiscountPrice($assemblyData["items"]);
            $assemblyData["average_rating"] = $assemblies[$key]["average_rating"];
            $assemblyData["created_at"] = $assemblies[$key]["created_at"];

            $assemblies[$key] = $assemblyData;
        }

        return $assemblies;
    }


    public function getTop6PopularAssemblies()
    {
        $popularAssembliesIds = $this->assemblyRepository->getPopularAssembliesIds(6);
        foreach ($popularAssembliesIds as $key => $assembly) {
            $assemblyData = $this->getAssemblyById($assembly["id"]);
            if (empty($assemblyData)) {
                continue;
            }
            $assemblyData["items"] = $this->assemblyItemsService->getAssemblyItemsWithProductsGrouped($assembly["id"]);

            $assemblyData["total_price"] = $this->calculateTotalPrice($assemblyData["items"]);
            $assemblyData["total_discount_price"] = $this->calculateTotalDiscountPrice($assemblyData["items"]);

            $popularAssembliesIds[$key] = $assemblyData;
        }

        return $popularAssembliesIds;
    }

    public function getAssemblyById(int $id)
    {
        $assembly = $this->assemblyRepository->getAssemblyById($id);
        $assembly["items"] = $this->assemblyItemsService->getAssemblyItemsWithProductsGrouped($assembly["id"]);

        return $assembly;
    }

    /**
     * Рассчитывает общую цену всех товаров в сборке.
     */
    private function calculateTotalPrice($items)
    {
        $totalPrice = 0;

        foreach ($items as $products) {
            foreach ($products as $product) {
                $totalPrice += (float) $product['price'];
            }
        }

        return $totalPrice;
    }

    private function calculateTotalDiscountPrice($items)
    {
        $totalPrice = 0;

        foreach ($items as $item) {
            foreach ($item as $product) {
                if ($product["discount_price"] === "0,00") {
                    $totalPrice += (float) $product["price"];
                } else {
                    $totalPrice += (float) $product["discount_price"];
                }
            }
        }

        return $totalPrice;
    }

    public function recalculateRating(int $assemblyId): void
    {
        $reviewModel = new Review();
        $avgRatingResult = $reviewModel
            ->select('ROUND(AVG(rating), 1) as avg_rating')
            ->where('assembly_id', $assemblyId)
            ->where('status', 'approved')
            ->get() // Выполняем запрос
            ->getRowArray();

        if ($avgRatingResult && isset($avgRatingResult['avg_rating'])) {
            $avgRating = $avgRatingResult['avg_rating'];

            // Обновляем рейтинг для сборки
            $assemblyModel = new Assembly();
            $assemblyModel->update($assemblyId, ['rating' => $avgRating]);
        }
    }
}