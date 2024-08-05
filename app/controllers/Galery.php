<?php

class Galery extends Controller {

    public function index() {

        $data['judul'] = 'Galery';
        $this->view('templates/user/header', $data);
        $this->view('galery/index');
        $this->view('templates/user/footer');

    }

}