<?php

namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'sku';
    protected $allowedFields = [];

    protected $DBGroup = 'remote';
}
