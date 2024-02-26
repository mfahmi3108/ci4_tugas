<?php

namespace App\Controllers;

use App\Models\KosanModel;

class kosan extends BaseController
{
    protected $kosanModel;
    public function __construct()
    {
        $this->kosanModel = new KosanModel();
    }
    public function index()
    {
        $kosan = $this->kosanModel->findAll();

        $data = [
            'title' => 'Daftar Kosan',
            'kosan' => $kosan
        ];

        return view('kosan/index', $data);
    }
}
