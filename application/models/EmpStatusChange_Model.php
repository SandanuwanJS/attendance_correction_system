<?php

class EmpStatusChange_Model extends CI_Model {

    function __construct(){
        parent::__construct();
    }


// ******************** Create function to get controller name from 'subpages' table ********************
    function getSubPages($sub_page_id = null) {
        $this->db->select('controller');
        $this->db->from('subpages');
        $this->db->where('id', $sub_page_id);
        $query = $this->db->get();
        return $query->result_array();
    }


// ******************** Create function to get employee records from the database ********************
    function getEmployees() {
        $this->db->select('employee_registration.person_id, employee_registration.name_in_finger, employee_registration.gender,
                           employee_registration.department, employee_registration.manpower_company, employee_registration.date,
                           employee_registration.isact');
        $this->db->from('employee_registration');
        $query = $this->db->get();
        return $query->result_array();  
    }


// ******************** Create function to change user status(active or disable) ********************
    function changeStatus($user, $stat) {
        $this->db->trans_begin();
        if (!empty($user)) {
            $upValue = array('isact' => ($stat == 1) ? 0 : 1);
            $this->db->where('person_id', $user);
            $this->db->update('employee_registration', $upValue);
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }
}
?>
