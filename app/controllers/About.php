<?php

class About extends Controller {

    public function index() {

        $data['judul'] = 'About';
        $this->view('templates/user/header', $data);
        $this->view('about/index');
        $this->view('templates/user/footer');

    }

}