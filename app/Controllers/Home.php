<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home'; // Capitalize the first letter

        $data['page'] = 'home';
        return view('templates/header', $data) 
            . view('templates/sidebar') 
            . view('pages/home') 
            . view('templates/footer');
    }
}
