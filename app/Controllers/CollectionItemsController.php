<?php

namespace App\Controllers;

use App\Models\CollectionItem;

class CollectionItemsController extends BaseController
{
    protected $collectionItemModel;

    public function __construct()
    {
        $this->collectionItemModel = new CollectionItem();
    }

    public function create($id)
    {
        return view('collections/create_collection', ['collection_id' => $id]);
    }

    public function store($id)
    {
        $this->validateCollectionItem();

        $data = [
            'collection_id' => $id,
            'product_sku' => $this->request->getPost('product_sku'),
        ];

        $this->collectionItemModel->save($data);
        return redirect()->to('/collections');
    }
}