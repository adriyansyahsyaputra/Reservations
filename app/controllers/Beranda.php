<?php

class Beranda extends Controller
{
    public function index()
    {
        $data['judul'] = 'Beranda';
        $this->view('templates/user/header', $data);
        $this->view('beranda/index');
        $this->view('templates/user/footer');
    }
}
 