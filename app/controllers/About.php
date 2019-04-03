<?php

class About extends Controller {
    public function index($judul = 'About', $nama = 'Izu', $pekerjaan = 'Mahasiswa', $umur = '20')
    {
        $data['judul'] = $judul;
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }
    public function page($judul = 'Page')
    {
        $data['judul'] = $judul;
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}