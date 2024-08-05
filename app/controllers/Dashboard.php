<?php

class Dashboard extends Controller {

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['products'] = $this->model('Product_model')->getProductWisata();
        $data['images'] = $this->model('Product_model')->getGalery();
        $this->view('templates/admin/header', $data);
        $this->view('dashboard/index', $data);
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

    public function tambah()
    {
        if( $this->model('Product_model')->tambahDataWisata($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
    }

}