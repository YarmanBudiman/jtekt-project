<?php

class App {
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL()
    {
        if(isset($_GET['url'])){
            $url = trim($_GET['url'],'/');
            $url = filter_var($url_ FILTER_SANITIZE_URL);
            $url = explode('/')
            return $url;
        }

    }
}