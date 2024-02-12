    <?php

        class UserController extends Controller
        {
            
            public function index()
            {
                $userMapper = new GenericMapper($this->db, 'users');
                
                // $user = new User;
                // $user->username = "hari";
                // $user->email = "hari@gmail.com";
                // $user->password = "hari123";
                // $user->role = "user";
                

                // create new user
                // $userMapper->save($user);

                // Find user by id
                // $result = $userMapper->findById(1);

                // Find all users
                $result =  $userMapper->findAll(); 

                $this->view('user/index', ['result' => $result]); 
            }

            public function edit($id)
            {
                $userMapper = new GenericMapper($this->db, 'users');
                $user = $userMapper->findById($id);
                if(!$user){
                    echo "User not found";
                }
                $this->view('user/edit', ['user' => $user]);
            }

            public function editUser()
            {
                $userMapper = new GenericMapper($this->db, 'users');
                $user = new User;
                $user->id = $_POST['id'];
                $user->username = $_POST['username'];
                $user->email = $_POST['email'];
                $user->password = $_POST['password'];
                $userMapper->update($user);
                
                header("Location: /MVC/public/user/index");

            }
            
        }