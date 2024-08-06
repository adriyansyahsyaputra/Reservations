<?php

class Dashboard extends Controller {

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['products'] = $this->model('Product_model')->getProductWisata();
        $data['galery'] = $this->model('Galery_model')->getGalery();
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

    public function tambahWisata()
    {
        if( $this->model('Product_model')->tambahDataWisata($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan','success');
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan','danger');
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
    }

    // Hapus data product
    public function hapus($id)
    {
        if( $this->model('Product_model')->hapusDataWisata($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus','success');
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus','danger');
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
    }



    public function tambahGalery()
    {
        if( $this->model('Galery_model')->tambahDataGalery($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
    }

    // Hapus data galery
    public function hapusGalery($id)
    {
        if( $this->model('Galery_model')->hapusDataGalery($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus','success');
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus','danger');
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
    }

}