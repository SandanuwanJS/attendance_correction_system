<?php

class User extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }


// ******************** Create function to load new user registration page ********************
    function index($sub_page_id=null,$result=null){    
         
        $page1 = $this->UserModel->getSubPages($sub_page_id,$result);
        // print_r($page1); die();

        // ******************** Create condition to check if the controller(get from the db) is match to the correct contraller
        if(isset($page1[0]['controller']) && $page1[0]['controller'] === 'User') {
            $this->load->view('userRegister');
        } else {
            echo "Controller does not match.";
        }        
        
    }


    function linkIndex() {
        $this->load->view('userRegister');
    }
    

// ******************** Create function to register a new user ********************
    function registerUser() {

        $designation = $_POST['designation'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $password = $_POST['password1'];
        
        $userSubmit = $this->UserModel->registerUser($designation,$fname, $lname, $email,$uname,$password);
        
        if($userSubmit) {
            $_SESSION['submition'] = 'success';
            $this->load->view ('userRegister'); 

        } else {
            $_SESSION['submition'] = 'error';
            $this->load->view('userRegister');
        }

    }
    

// ******************** Create function to load user viewlist page ********************
    function userViewList() {
        
        $data['userRecords'] =$this->UserModel->getUsers();       
        $this->load->view('userViewList',$data);
    }
    

// ******************** Create function to active/de-active users ********************
    function activate($user = null, $stat = null) {
        if ($user === null || $stat === null) {
            // Handle the case where parameters are missing
            show_error('Missing parameters', 400);
            return;

        }

        $result = $this->UserModel->changeStatus($user, $stat);

        if ($result == 1) {
            header('Location:' . base_url('user/userViewList'));
        }

    }

} 

?>
