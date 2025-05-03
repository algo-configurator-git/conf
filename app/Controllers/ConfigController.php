<?php

namespace App\Controllers;

class ConfigController extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();

        return view('config_page');
    }

    public function store()
    {
        $session = \Config\Services::session();

        $session = $session->get('config');
        dd($session);
    }
}