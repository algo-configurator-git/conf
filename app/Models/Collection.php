<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class Collection extends Model
{
    protected $table            = 'product_collections';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'description', 'created_at', 'updated_at'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [
        'id'          => 'integer',
        'created_at'  => 'datetime',
        'updated_at'  => 'datetime',
    ];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [
        'name'        => 'required|string|min_length[3]|max_length[255]',
        'description' => 'permit_empty|string',
    ];
    protected $validationMessages   = [
        'name' => [
            'required'   => 'Название обязательно.',
            'min_length' => 'Название должно содержать минимум 3 символа.',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = ['beforeInsert'];
    protected $afterInsert  = [];
    protected $beforeUpdate = ['beforeUpdate'];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function beforeInsert(array $data): array
    {
        return $this->formatData($data);
    }

    protected function beforeUpdate(array $data): array
    {
        return $this->formatData($data);
    }

    private function formatData(array $data): array
    {
        if (isset($data['data']['name'])) {
            $data['data']['name'] = ucfirst(strtolower($data['data']['name']));
        }
        return $data;
    }

    public static function testConnection()
    {
        $remote = Database::connect('remote');

        $query = $remote->query("SELECT * FROM products LIMIT 100");

        $data = $query->getResultArray();

        print_r($data);
    }
}
