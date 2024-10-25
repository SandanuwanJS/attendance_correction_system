<?php 

class DeleteEmployee_Model extends CI_Model {

    function __construct() {
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
                           employee_registration.department, employee_registration.manpower_company, employee_registration.date');
        $this->db->from('employee_registration');
        $query = $this->db->get();
        return $query->result_array();  
    }


// ******************** Create function to delete employees from the database ********************
    function delete_employee($emp_id) {
        $this->db->where('person_id', $emp_id);
        $this->db->delete('employee_registration');
    }
}

?>