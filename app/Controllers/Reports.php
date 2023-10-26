<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Reports extends BaseController
{
    public function index()
    {
        return view('reports/index');
    }

    public function create()
    {
        return view('reports/create'); 
    }
}
