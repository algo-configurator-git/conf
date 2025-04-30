<?php

namespace App\Controllers;

class CatalogController extends BaseController
{
    public function index()
    {
        return view('catalog');
    }
}