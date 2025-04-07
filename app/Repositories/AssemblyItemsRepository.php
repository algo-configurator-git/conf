<?php

namespace App\Repositories;

use App\Models\AssemblyItems;

class AssemblyItemsRepository
{
    protected $assemblyItemsModel;

    public function __construct()
    {
        $this->assemblyItemsModel = new AssemblyItems();
    }

    public function getAssemblyItems($assembly_id): array
    {
        return $this->assemblyItemsModel
            ->select([
                'assembly_items.product_id',
                'assembly_items.type',
            ])
            ->where('assembly_id', $assembly_id)
            ->asArray()
            ->findAll();
    }

    public function getProductSku($id)
    {
        return $this->assemblyItemsModel
            ->select('product_id')
            ->find($id);
    }
}