<?php

class Dashboard extends Controller {

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->view('templates/admin/header', $data);
        $this->view('dashboard/index');
        $this->view('templates/admin/footer');
    }

    public function orders()
    {
        $data['judul'] = 'Orders';
        $this->view('templates/admin/header', $data);
        $this->view('dashboard/orders');
        $this->view('templates/admin/footer');
    }

    public function tamu()
    {
        $data['judul'] = 'Buku Tamu';
        $this->view('templates/admin/header', $data);
        $this->view('dashboard/tamu');
        $this->view('templates/admin/footer');
    }

}