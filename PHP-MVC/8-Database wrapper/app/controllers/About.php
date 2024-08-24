<?php

class About extends Controller
{
    public function index($nama = 'User', $pekerjaan = 'Mahasiswa')
    {
        $data["judul"] = "About Me";
        $data['nama'] = $this->model('User_model')->getUser();
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data["judul"] = "Pages";
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
