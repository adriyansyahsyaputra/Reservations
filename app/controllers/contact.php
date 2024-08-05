<?php

class Contact extends Controller{

    public function index()
    {
        $data['judul'] = 'Contact';
        $this->view('templates/user/header');
        $this->view('contact/index');
        $this->view('templates/user/footer');
    }

}