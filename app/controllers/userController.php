<?php

    class UserController extends Controller
    {
        public function index()
        {
            // $user = new User;
            // $user->username = "hari";
            // $user->email = "hari@gmail.com";
            // $user->password = "hari123";
            // $user->role = "user";
            
            $userMapper = new GenericMapper($this->db, 'users');

            // create new user
            // $userMapper->save($user);

            $result = $userMapper->findById(1);

            $this->view('user/index', ['result' => $result]); 
        }
    }