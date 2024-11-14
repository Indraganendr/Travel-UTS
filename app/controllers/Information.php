<?php
class Information extends Controller {
    public function index()
    {
        $userModel = $this->model('User_model')->getData();
        $data['info'] = $userModel[2];
        $data['infodesk'] = $userModel[3];
        $data['judul'] = 'Destination Information';
        $data['inf'] = $this->model('Information_model')->getAllInformation();
        $this->view('templates/header', $data);
        $this->view('information/index', $data);
        $this->view('templates/footer');
    }
}   