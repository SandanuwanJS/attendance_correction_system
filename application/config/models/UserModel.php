<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class UserModel extends CI_Model {

    function __construct() {
        parent::__construct();
        //$this->mssql = $this->load->database('MSSQL', TRUE); 
    }
    
    function authenticateMe($email = null,$password = null){
        
        $this->db->select('*');
        $this->db->from('mst_user');
        $this->db->where('`mst_user`.`email`',$email);
        $this->db->where('`mst_user`.`password`',$password);
        $queryData = $this->db->get();
        $resultData = $queryData->result_array();
        //echo $this->db->last_query().'<br>';
        return $resultData;
    }
    
    function registerUser($designation=null,$fname=null,$lname=null,$email=null,$uname=null,$password=null){
//        $this->db->trans_begin();
        

        date_default_timezone_set("Asia/Colombo");

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
//             echo $this->db->last_query();die();
            return 1;
        } else {
            $this->db->trans_rollback();
            return 0;
        }
        
    }
    
    function getUsers(){
        $query = $this->db->select('`mst_user`.*');
        $this->db->from('`mst_user`');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }
    
    function changeStatus($user,$stat){
        $this->db->trans_begin();
        if(!empty($user) && isset($user)){
            if($stat==1){
                $upValue = array(
                    'isact' => 0
                );
                $this->db->where('id', $user);
                $this->db->update('`mst_user`',$upValue);
            }else{
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

   
    
    
}