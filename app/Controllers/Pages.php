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

        $data['page'] = $page;
        return view('templates/header', $data)
            . view('templates/sidebar')
            . view('pages/' . $page)
            . view('templates/footer');
    }
}
