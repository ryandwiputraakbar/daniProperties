<?php

namespace App\Controllers;

class Property extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Property | Dani Properties - Consultant Property'
        ];
        return view('pages/property', $data);
    }
}
