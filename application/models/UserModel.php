<?php

class UserModel extends CI_Model {

    function __construct() {
        parent::__construct();
        //$this->mssql = $this->load->database('MSSQL', TRUE); 
    }


    // ******************** Create function to get controller name from 'subpages' table ********************
    function getSubPages($sub_page_id=null, $result=null) {
        $query = $this->db->select('`controller`');
        $this->db->from('`subpages`');
        $this->db->where('`id`',$sub_page_id);
        $query = $this->db->get();
        $result = $query->result_array();
        // print_r($result);
        
        return $result;
    }
    

// ******************** Create function to authenticate loging credentials ********************
    function authenticateMe($email = null, $password = null) {
        
        $this->db->select('*');
        $this->db->from('mst_user');
        $this->db->where('`mst_user`.`email`',$email);
        $this->db->where('`mst_user`.`password`',$password);
        $this->db->where('`mst_user`.`isact`' , '1');
        $queryData = $this->db->get();
        $resultData = $queryData->result_array();
        // print_r($resultData);
        //echo $this->db->last_query().'<br>';
        return $resultData;
    }
    

// ******************** Create function register new users ********************
    function registerUser($designation=null,$fname=null,$lname=null,$email=null,$uname=null,$password=null) {
        
        // ******************** Check the e-mail and identify the user is already registered or not ********************
        $query = $this->db->query("SELECT mst_user.email
        FROM mst_user 
        WHERE mst_user.email = '$email'");
        $result = $query->result_array();
        if (!empty($result)) {
            // echo "Array is Full";
            $designation = null;
            $fname = null;
            $lname = null;
            $email = null;
            $uname = null;
            $password = null;
            
        // ******************** If it is new user then register in to the system ********************
        } else {
        // print_r($result);

            date_default_timezone_set("Asia/Colombo");

            // ******************** Define the array ********************
            $arr = array(
                '`designation`' => $designation,
                '`fname`' => $fname,
                '`lname`' => $lname,
                '`userName`' => $uname,
                '`password`' => $password,
                '`email`' => $email,
                '`date`' => date('Y-m-d'),
                '`time`' => date('H:i:s'),
                '`isact`' => 1
            );
            
            $IsInserted = 1;
            
            $this->db->trans_begin();
            $this->db->insert('mst_user', $arr);
            
            if ($this->db->trans_status() === FALSE) {
                $IsInserted = 0;
            }

            if ($IsInserted == 1) {
                $this->db->trans_commit();
                //echo $this->db->last_query();die();
                return 1;

            } else {
                $this->db->trans_rollback();
                return 0;

            }

        }
        
    }
    

 // ******************** Create function to get all registered users ********************
    function getUsers() {
        $query = $this->db->select('`mst_user`.*');
        $this->db->from('`mst_user`');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }
    

// ******************** Create function to change user status(active or disable) ********************
    function changeStatus($user,$stat) {
        $this->db->trans_begin();
        if(!empty($user) && isset($user)) {
            if($stat==1) {
                $upValue = array(
                    'isact' => 0
                );
                $this->db->where('id', $user);
                $this->db->update('`mst_user`',$upValue); 

            } else { 
                $upValue = array(
                    'isact' => 1
                );
                $this->db->where('id', $user);
                $this->db->update('`mst_user`',$upValue);

            }

        }
        
        $IsInserted = 1;
        
        
        if ($this->db->trans_status() === FALSE) {
            $IsInserted = 0;
            $this->db->trans_rollback();
        } else {
            $IsInserted = 1;
            $this->db->trans_commit();
        }        
                
        return $IsInserted;
    }


// ******************** Create function to submit userlog(log-In) in to the database ********************
    function userLogIn() {

        date_default_timezone_set("Asia/Colombo");

        $loginDate = date('Y-m-d');
        $loginTime = date('H:i:s');
       

        $array = array(
            '`userID`' => $_SESSION['id'],
            '`first_name`' => $_SESSION['fname'],
            '`userName`' => $_SESSION['userName'],
            '`email`' => $_SESSION['email'],
            '`status`' => "Log In",
            '`date`' => $loginDate,
            '`time`' => $loginTime
        );
        // print_r($array);

        $IsInserted = 1;
            
        $this->db->trans_begin();
        $this->db->insert('user_log', $array);
        
        if ($this->db->trans_status() === FALSE) {
            $IsInserted = 0;
        }

        if ($IsInserted == 1) {
            $this->db->trans_commit();
            return 1;
        } else {
            $this->db->trans_rollback();
            return 0;
        }

    }


// ******************** Create function to submit userlog(log-Out) in to the database ********************
    function userLogOut() {

        date_default_timezone_set("Asia/Colombo");

        $logoutDate = date('Y-m-d');
        $logoutTime= date('H:i:s');

        $array = array(
            '`userID`' => $_SESSION['id'],
            '`first_name`' => $_SESSION['fname'],
            '`userName`' => $_SESSION['userName'],
            '`email`' => $_SESSION['email'],
            '`status`' => "Log Out",
            '`date`' => $logoutDate,
            '`time`' => $logoutTime
        );
        // print_r($array);

        $IsInserted = 1;
            
        $this->db->trans_begin();
        $this->db->insert('user_log', $array);
        
        if ($this->db->trans_status() === FALSE) {
            $IsInserted = 0;
        }

        if ($IsInserted == 1) {
            $this->db->trans_commit();
            return 1;
        } else {
            $this->db->trans_rollback();
            return 0;
        }

    }
   
}

?>