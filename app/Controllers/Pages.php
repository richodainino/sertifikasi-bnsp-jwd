<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function view($page = 'home')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);

        $data['page'] = 'home';
        return view('templates/header', $data)
            . view('templates/sidebar')
            . view('pages/home')
            . view('templates/footer');
    }
}
