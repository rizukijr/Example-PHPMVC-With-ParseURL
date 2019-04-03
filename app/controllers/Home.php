<?php

class Home extends Controller{
    
    public function index($judul = 'Home')
    {
        $data['judul'] = $judul;
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}