<?php

class About extends Controller {
    public function index ()
    {
        $userModel = $this->model('User_model')->getData();
        $data['who'] = $userModel[4];
        $data['whoinfo'] = $userModel[5];
        $data['why'] = $userModel[6];
        $data['whyinfo'] = $userModel[7];
        $data['judul'] = 'About Us';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}