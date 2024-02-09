<?php

    class UserController extends Controller
    {
        public function index()
        {
            // $user = $this->model('User');
            // $user->username = "ram";
            // $user->email = "ram@gmail.com";
            // $user->password = "ram123";
            // $user->role = "admin";
            // $result = $this->executeQuery("INSERT INTO users(username, email, password, role) VALUES(?, ?, ?, ?)", [$user->username, $user->email, $user->password, $user->role]);
            $this->view('user/index');
        }
    }