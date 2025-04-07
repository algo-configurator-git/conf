<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductImage extends Model
{
    protected $table = 'products_images';
    protected $primaryKey = 'id_product_image';
    protected $allowedFields = ['sku', 'image'];

    protected $DBGroup = 'remote';
}
