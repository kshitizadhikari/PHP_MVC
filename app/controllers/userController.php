<?php

    class UserController extends Controller
    {
        public function index()
        {
            // $user = new User;
            // $user->username = "sam";
            // $user->email = "sam@gmail.com";
            // $user->password = "sam123";
            // $user->role = "user";
            
            $userMapper = new GenericMapper($this->db, 'users');
            // $userMapper->save($user);

            $result = $userMapper->findById(1);

            $this->view('user/index', ['result' => $result]); 
        }
    }