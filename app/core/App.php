<?php

class App {
    protected $controller = 'Home';
    protected $method = 'index';


    public function __construct()
    {
        $url = $this->parseURL();
        
        //Controller
        if (isset($url[0])) {
            if(file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = $url [0];
                unset($url[0]);
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;


        //Method
        if( isset($url[1]) ) {
            if( method_exists($this->controller, $url[1]) ) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //Jalankan Controller dan Method
        call_user_func([$this->controller, $this->method]);
    }

    public function parseURL()
    {
        if( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/'); //Menghapus tanda /
            $url = filter_var($url, FILTER_SANITIZE_URL); //Membersihkan kata kata aneh
            $url = explode('/', $url); //Memisahkan URL menjadi array
            return $url;
        }
    }
}