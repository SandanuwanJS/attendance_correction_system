<?php 

class EmployeeModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }


// ******************** Create function to get controller name form 'subPages' table ********************
    function getSubPages($sub_page_id = null, $result = null) {
        $query = $this->db->select('`controller`');
        $this->db->from('`subpages`');
        $this->db->where('`id`', $sub_page_id);
        $query = $this->db->get();
        $result = $query->result_array();
        // print_r($result); die();

        return $result;
        
    }


// ******************** Create function to register an employee ********************
    function employeeRegister($pid=null, $nameIni=null, $nameFinger=null, $nic=null, $telenum=null, $gender=null, $department=null, $mp_company=null) {
        $query = $this->db->query("SELECT employee_registration.person_id
        FROM employee_registration
        WHERE employee_registration.person_id = '$pid'");
        $result = $query->result_array();
        if (!empty($result)) {
            $pid        = null;
            $nameIni    = null;
            $nameFinger = null;
            $nic        = null;
            $telenum    = null;
            $gender     = null;
            $department = null;
            $mp_company = null;
        }
        else {
            date_default_timezone_set("Asia/Colombo");

            $arr = array(
                '`person_id`'           => $pid,
                '`name_initial`'        => $nameIni,
                '`name_in_finger`'      => $nameFinger,
                '`nic_num`'             => $nic,
                '`tele_num`'            => $telenum,
                '`gender`'              => $gender,
                '`department`'          => $department,
                '`manpower_company`'    => $mp_company,
                '`date`'                => date('Y-m-d'),
                '`time`'                => date('H:i:s'),
                '`isact`'               => 1
            );

            // print_r($arr);
            // die();

            $IsInserted = 1;

            $this->db->trans_begin();
            $this->db->insert('employee_registration', $arr);

            if ($this->db->trans_status() === FALSE) {
                $IsInserted = 0;
            }

            if ($IsInserted == 1) {
                $this->db->trans_commit();
                return 1;
            }
            else {
                $this->db->trans_rollback();
                return 0;
            }
        }
    }


// ******************** Create function to get employee list ********************
    function getEmployees() {
        $query = $this->db->select('`employee_registration.person_id`, `employee_registration.name_in_finger`, `employee_registration.gender`,
        `employee_registration.department`, `employee_registration.manpower_company`, `employee_registration.isact`');
        $this->db->from('employee_registration'); 
        $query = $this->db->get();
        $result = $query->result_array();
        // print_r($result); die();
        
        return $result;

    }


    
}

?>