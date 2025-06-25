<?php

namespace App\Repositories;

use App\Models\Assembly;

class AssemblyRepository
{
    protected Assembly $assemblyModel;
    public function __construct()
    {
        $this->assemblyModel = new Assembly();
    }

    public function getAssemblies(string $orderBy, int $page, int $perPage): array
    {
        $query = $this->assemblyModel
            ->select('assemblies.id')
            ->orderBy($orderBy)
            ->groupBy('assemblies.id');

        $total = $query->countAllResults();

        $items = $query
            ->select('assemblies.*, ROUND(AVG(reviews.rating), 1) as average_rating')
            ->join('reviews', 'reviews.assembly_id = assemblies.id AND reviews.status = \'approved\'', 'left')
            ->orderBy($orderBy)
            ->groupBy('assemblies.id')
            ->findAll($perPage, ($page - 1) * $perPage);

        return [$items, $total];
    }

    public function getAssemblyById($assemblyId)
    {
        return $this->assemblyModel
            ->select('assemblies.id')
            ->select('assemblies.name')
            ->select('assemblies.type')
            ->find($assemblyId);
    }

    public function getAssembliesByType(string $type, string $orderBy, int $page, int $perPage): array
    {
        $query = $this->assemblyModel
            ->select('assemblies.id')
            ->where('assemblies.type', $type)
            ->orderBy($orderBy)
            ->groupBy('assemblies.id');

            $total = $query->countAllResults();

            $items = $query
                ->select('assemblies.*, ROUND(AVG(reviews.rating), 1) as average_rating')
                ->join('reviews', 'reviews.assembly_id = assemblies.id AND reviews.status = \'approved\'', 'left')
                ->where('assemblies.type', $type)
                ->orderBy($orderBy)
                ->groupBy('assemblies.id')
                ->findAll($perPage, ($page - 1) * $perPage);

            return [$items, $total];
    }

    public function getPopularAssembliesIds($count): array
    {
        return $this->assemblyModel
            ->select([
                'assemblies.id',
                'IFNULL(SUM(reviews.rating) / NULLIF(COUNT(reviews.rating), 0), 0) as rating',
            ])
            ->join('reviews', 'reviews.assembly_id = assemblies.id AND reviews.status = "approved"', 'left')
            ->groupBy('assemblies.id')
            ->orderBy('rating', 'DESC')
            ->limit($count)
            ->findAll();
    }

    public function getPopularAssemblies($count): array
    {
        return $this->assemblyModel
            ->select([
                'assemblies.id',
                'assemblies.name',
                'IFNULL(SUM(reviews.rating) / NULLIF(COUNT(reviews.rating), 0), 0) as rating',
            ])
            ->join('assembly_items', 'assembly_items.assembly_id = assemblies.id')
            ->join('reviews', 'reviews.assembly_id = assemblies.id AND reviews.status = "approved"', 'left')
            ->groupBy('assemblies.id')
            ->orderBy('rating', 'DESC')
            ->limit($count)
            ->asArray()
            ->findAll();
    }

    /**
     * @param int $page
     * @param int $perPage
     * @return float|int
     */
    public function getF(int $page, int $perPage): int|float
    {
        return ($page - 1) * $perPage;
    }
}