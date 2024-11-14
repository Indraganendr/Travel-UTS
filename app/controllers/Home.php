<?php

class Home extends Controller {
    public function index()
    {
        $userModel = $this->model('User_model')->getData();
        $data['nama'] = $userModel[0];
        $data['desk'] = $userModel[1];
        $data['judul'] = 'RSK Tours';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}