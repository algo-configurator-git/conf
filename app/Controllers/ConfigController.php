<?php

namespace App\Controllers;

class ConfigController extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();

        return view('config_page');
    }
}