<?php

namespace App\Controllers;

use App\models\BukuModel;

class Admin extends BaseController
{
    protected $BukuModel;
    protected $db, $builder;

    public function __construct()
    {
        $this->BukuModel = new BukuModel();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('buku');
    }

    public function index()
    {
        $this->builder->selectCount('id');
        $query = $this->builder->get();
        $data['count'] = $query->getResultArray();
        // dd($data['count'][0]['id']);

        return view('admin/index', $data);
    }

    public function list_buku()
    {

        $data = [
            'title' => 'Daftar buku',
            'buku' => $this->BukuModel->getBuku()
        ];
        dd($data);
        return view('admin/buku/list_buku', $data);
    }
    public function detailbuku($id)
    {

        $data = [
            'title' => 'Detail buku',
            'buku' => $this->BukuModel->getBuku($id),


        ];

        return view('admin/buku/detailbuku', $data);
    }
}
