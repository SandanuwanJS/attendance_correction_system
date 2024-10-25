<?php

class EmpStatusChange extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('EmpStatusChange_Model');
    }


// ******************** Create function to load employee status change page ********************
    function index($sub_page_id = null) {
        $page1 = $this->EmpStatusChange_Model->getSubPages($sub_page_id);

        if (isset($page1[0]['controller']) && ($page1[0]['controller'] == 'empStatusChange')) {

            // ******************** Create condition to check if the controller(get from the db) is match to the correct contraller
            $data['userRecords'] = $this->EmpStatusChange_Model->getEmployees();
            $this->load->view('empstatuschange', $data); 
        } else {
            echo "Controller does not match";
        }
    }


// ******************** Create function to load employee list ********************
    function employeeViewList() {
        $data['userRecords'] = $this->EmpStatusChange_Model->getEmployees();  
        $this->load->view('empstatuschange', $data);  
    }
    

// ******************** Create function to active/de-active employees ********************
    function activate($user = null, $stat = null) {
        if ($user === null || $stat === null) {
            show_error('Missing parameters', 400);
            return;
        }

        $result = $this->EmpStatusChange_Model->changeStatus($user, $stat);
        if ($result == 1) {
            header('Location:' . base_url('EmpStatusChange/employeeViewList'));
        }
    }
}
?>
