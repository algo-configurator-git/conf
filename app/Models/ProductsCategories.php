<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsCategories extends Model
{
    protected $table = 'products_categories';
    protected $primaryKey = 'sku';
    protected $allowedFields = [];

    protected $DBGroup = 'remote';
}
