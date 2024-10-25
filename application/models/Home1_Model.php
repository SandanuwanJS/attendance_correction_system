<?php
class Home1_Model extends CI_Model {
    function __construct() {
        parent :: __construct();
    }


    //Create function to get controller name from the database
    function getSubPages($sub_page_id=null, $result=null) {
        $query = $this->db->select('`controller`');
        $this->db->from('`subpages`');
        $this->db->where('`id`',$sub_page_id);
        $query = $this->db->get();
        $result = $query->result_array();
        // print_r($result);
        
        return $result;
    }

    function submitRegisterCustomer ($title=null, $fname=null, $lname=null, $ad1=null, $ad2=null, $ad3=null, $phone=null, $email=null) {

        // create a array to store data from registration form
        $array = array(
        
            // '`column name of database`' => variable name 
            '`title`' => $title,
            '`first_name`' => $fname,
            '`last_name`' => $lname,
            '`address_1`' => $ad1,
            '`address_2`' => $ad2,
            '`address_3`' => $ad3,
            '`telenum`' => $phone,
            '`email`' => $email

        );

        $IsInserted = 1;


        $this->db->trans_begin();
        $this->db->insert('customer_registration', $array); // Insert the database


        if ($this->db->trans_status() === FALSE) {
            $IsInserted = 0;
        }


        if ($IsInserted == 1) {
            $this->db->trans_commit();  // trans_commit is the key word use to commit the data into to the database

            return 1;
        }
        
        else {
            $this->db->trans_rollback();
            return 0;
        }
    }


    //Create function to get details of registered customers
    function getUsers(){
        $query = $this->db->select('`customer_registration`.*');
        $this->db->from('`customer_registration`');
        $query = $this->db->get();
        $result = $query->result_array();
        //echo $this->db->last_query();die();
        return $result;
    }


    //Create function to get registered customer details for update purpose
    function getUpdateUsers($id=null){
        $query = $this->db->select('`customer_registration`.*');
        $this->db->from('`customer_registration`');
        $this->db->where('`id`',$id);
        $query = $this->db->get();
        $result = $query->result_array();    
        return $result;
    
    }


    //Create function to update changed user details
    function update_customer($user_id, $data) {
        $this->db->where('id', $user_id);
        $this->db->update('customer_registration', $data);
    }


     // Create function to delete customer
     function delete_customer($user_id) {
        $this->db->where('id', $user_id);
        $this->db->delete('customer_registration');
    }
}
?>