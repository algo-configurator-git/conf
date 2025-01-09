<?php

namespace App\Controllers;

use App\Models\Collection;
use App\Models\CollectionItem;
use CodeIgniter\Exceptions\PageNotFoundException;

class CollectionController extends BaseController
{
    protected $collectionModel;
    protected $collectionItems;

    public function __construct()
    {
        $this->collectionModel = new Collection();
        $this->collectionItems = new CollectionItem();
    }

    public function index()
    {
        $data['collections'] = $this->collectionModel->findAll();
        return view('collections/index_collections', $data);
    }

    public function create()
    {
        return view('collections/create_collection');
    }

    public function store()
    {
        $this->validateCollection(); // Проверка данных

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ];

        $this->collectionModel->save($data);

        return redirect()->to('/collections');
    }

    public function show($id)
    {
        $data['collection'] = $this->collectionModel->find($id);

        if (!$data['collection']) {
            throw PageNotFoundException::forPageNotFound();
        }

        $data['collection_items'] = $this->collectionItems->where('collection_id', $id)->findAll();

        return view('collections/show_collection', $data);
    }

    public function edit($id)
    {
        if ($this->request->getMethod() === 'POST') {
            $this->validateCollection();

            $data = [
                'name' => $this->request->getPost('name'),
                'description' => $this->request->getPost('description'),
            ];

            $this->collectionModel->update($id, $data);
            return redirect()->to('/collections');
        }

        $data['collection'] = $this->collectionModel->find($id);

        if (!$data['collection']) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('collections/edit_collection', $data);
    }

    public function delete($id)
    {
        if (!$this->collectionModel->find($id)) {
            throw PageNotFoundException::forPageNotFound();
        }

        $this->collectionModel->delete($id);
        return redirect()->to('/collections');
    }

    private function validateCollection()
    {
        if (!$this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
            'description' => 'permit_empty|max_length[255]',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }
}