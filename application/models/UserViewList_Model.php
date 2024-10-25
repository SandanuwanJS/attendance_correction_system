<?php
class UserViewList_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }


// ******************** Create function to get controller name from 'subpages' table ********************
    function getSubPages($sub_page_id=null, $result=null) {
        $query = $this->db->select('`controller`');
        $this->db->from('`subpages`');
        $this->db->where('`id`',$sub_page_id);
        $query = $this->db->get();
        $result = $query->result_array();
        // print_r($result);die();
        
        return $result;
    }


// ******************** Create function to get all registered users ********************
    function getUsers() {
        $query = $this->db->select('`mst_user`.*');
        $this->db->from('`mst_user`');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }
}
?>