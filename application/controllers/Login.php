<?php

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }


// ******************** Create function to load the login page first ********************
    function index() {
        $this->load->view('index');
    }
    

// ******************** Create function to check login credentials ********************
    function checkLogin() {
        
        if (!empty($_POST['userName']) && isset($_POST['userName']) && !empty($_POST['password']) && isset($_POST['password'])) {
            
            $data['userData'] = $this->UserModel->authenticateMe($_POST['userName'],$_POST['password']);
                //    print_r(!empty($data['userData']));
            if(!empty($data['userData']) && isset($data['userData'])) {


                // ******************** User loging details stored session array ********************
                $_SESSION['userdata'] = $data;


                // ******************** Create separate session variables to store user login details ********************
                
                $_SESSION['id'] = $data['userData'][0]['id'];
                $_SESSION['fname'] = $data['userData'][0]['fname'];
                $_SESSION['userName'] = $data['userData'][0]['userName'];
                $_SESSION['email'] = $data['userData'][0]['email'];

                $userLog = $this->UserModel->userLogIn($_SESSION['id'],$_SESSION['fname'],$_SESSION['userName'],$_SESSION['email']);
                $_SESSION['loginCheck'] = 'ok';
                
                //$this->load->view('aaaa');    
                header('Location:' . base_url('home/'));


            // ******************** If loging details are incorrect load the error massage and load login page again ********************
            } else {
                $_SESSION['loginCheck'] = 'err';
                //$this->load->view('index');
                header('Location:' . base_url('login/'));
            }

        }

    }
    

// ******************** Create function to logout ********************
    function logOut() {
        
        $userLog = $this->UserModel->userLogOut($_SESSION['id'],$_SESSION['fname'],$_SESSION['userName'],$_SESSION['email']);
        session_destroy(); 
        header('Location:' . base_url('login/'));

    }
   
}

?>