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

    public function getAssemblies($orderBy)
    {
        return $this->assemblyModel
            ->select('assemblies.*, ROUND(AVG(reviews.rating), 1) as average_rating')
            ->join('reviews', 'reviews.assembly_id = assemblies.id AND reviews.status = \'approved\'', 'left')
            ->orderBy($orderBy)
            ->groupBy('assemblies.id')
            ->findAll();
    }

    public function getAssemblyById($assemblyId)
    {
        return $this->assemblyModel
            ->select('assemblies.id')
            ->select('assemblies.name')
            ->select('assemblies.type')
            ->find($assemblyId);
    }

    public function getAssembliesByType(string $type, string $orderBy)
    {
        return $this->assemblyModel
            ->select('assemblies.*, ROUND(AVG(reviews.rating), 1) as average_rating')
            ->join('reviews', 'reviews.assembly_id = assemblies.id AND reviews.status = \'approved\'', 'left')
            ->where('assemblies.type', $type)
            ->orderBy($orderBy)
            ->groupBy('assemblies.id')
            ->findAll();
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
}