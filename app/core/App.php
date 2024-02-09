<?php

    class App {

        protected $contoller = 'homeController';
        protected $method = 'index';
        protected $params = [];

        public function __construct()
        {
            $url = $this->parseUrl();

        }   

        public function parseUrl() {
            if(isset($_GET['url'])) {
                return $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            }
        }
    }