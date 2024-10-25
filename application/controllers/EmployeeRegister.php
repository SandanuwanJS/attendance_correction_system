<?php 

class EmployeeRegister extends CI_Controller {
    
    function __construct() {
        parent:: __construct();
        $this->load->model('EmployeeModel');
    }

// ******************** Create function to load new employee registration page ********************
    function index($sub_page_id = null, $result = null) {
        $page1 = $this->EmployeeModel->getSubPages($sub_page_id,$result);
        // print_r($page1); die();

        // ******************** Create condition to check if the controller(get from the db) is match to the correct controller
        if (isset($page1[0]['controller']) && $page1[0]['controller'] === 'EmployeeRegister') {
            $this->load->view('employeeRegistration');
        } else {
            echo "Controller does not match.";
        }
    }

    function linkIndex() {
        $this->load->view('employeeRegistration');
    }


// ******************** Create function to register new employee ********************
    function registerEmployee() {
        $pid = $_POST['pid'];
        $nameIni = $_POST['nameI'];
        $nameFinger = $_POST['nameinfinger'];
        $nic = $_POST['nic'];
        $telenum = $_POST['telenum'];
        $gender = $_POST['gender'];
        $department = $_POST['mainDepartments'];
        $mp_company = $_POST['manpower'];
        
        $employeeSubmit = $this->EmployeeModel->employeeRegister($pid, $nameIni, $nameFinger, $nic, $telenum, $gender, $department, $mp_company);

        if ($employeeSubmit) {
            $_SESSION['submition'] = 'success';
            $this->load->view('employeeRegistration');
        }
        else {
            $_SESSION['submition'] = 'error';
            $this->load->view('employeeRegistration');
        }
    }


// ******************** Create function to load employee list ********************
    function employeeViewList() {
        $data['userRecords'] =$this->EmployeeModel->getEmployees();       
        $this->load->view('employeeViewList',$data);
    }


   
}

?>