<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Dani Properties - Consultant Property'
        ];
        echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    }

    public function property()
    {
        $data = [
            'title' => 'Property | Dani Properties - Consultant Property'
        ];
        echo view('layout/header', $data);
        echo view('pages/property');
        echo view('layout/footer');
    }
}
