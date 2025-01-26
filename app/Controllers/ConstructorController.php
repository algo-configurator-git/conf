<?php

namespace App\Controllers;

use App\Models\Collection;

class ConstructorController extends BaseController
{
    public function index()
    {
        return view('main');
    }

    public function test()
    {
        Collection::testConnection();
    }
}