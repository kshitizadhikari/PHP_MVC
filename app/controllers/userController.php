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

            // Find user by id
            // $result = $userMapper->findById(1);

            // Find all users
            $result =  $userMapper->findAll(); 

            $this->view('user/index', ['result' => $result]); 
        }
    }