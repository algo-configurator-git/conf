<?php

namespace App\Models;

use CodeIgniter\Model;

class CoreConfigData extends Model
{
    protected $table = 'core_config_data';
    protected $primaryKey = 'id';
    protected $allowedFields = ['attribute', 'value'];

    protected $DBGroup = 'remote';

    /**
     * Получает курс валюты из базы данных
     */
    public function getCurrencyRate(): float
    {
        $result = $this->where('attribute', 'currency_rate')->first();
        return (float) $result['value'];
    }
}
