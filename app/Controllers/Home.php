<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'isi' => 'V_dashboard',
        ];

        echo view('layout/V_header');
        echo view('layout/V_sidebar');
        echo view('V_dashboard');
        echo view('layout/V_footer');
    }
}
