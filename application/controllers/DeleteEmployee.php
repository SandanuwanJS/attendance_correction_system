<?php 

class DeleteEmployee extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('DeleteEmployee_Model');
    }


// ******************** Create function to load employee deletion page ********************
    function index($sub_page_id = null) {
        $page1 = $this->DeleteEmployee_Model->getSubPages($sub_page_id);

        if (isset($page1[0]['controller']) && ($page1[0]['controller'] == 'DeleteEmployee')) {

            // ******************** Create condition to check if the controller(get from the db) is match to the correct contraller
            $data['userRecords'] = $this->DeleteEmployee_Model->getEmployees();
            $this->load->view('deleteEmployee', $data); 
        } else {
            echo "Controller does not match";
        }
    }


// ******************** Create function to load employee deletion page(use for redirect) ********************
    function linkIndex() {
        $data['userRecords'] = $this->DeleteEmployee_Model->getEmployees(); 
        $this->load->view('deleteEmployee', $data);
    }


// ******************** Create function to load employee list ********************
    // function employeeViewList() {
    //     $data['userRecords'] = $this->DeleteEmployee_Model->getEmployees();  
    //     $this->load->view('deleteEmployee', $data);  
    // }


// ******************** Create function to delete employees from the database ********************
    public function delete_employee($emp_id) {
        $this->DeleteEmployee_Model->delete_employee($emp_id);

        // Redirect to view list page after deletion
        redirect(base_url('DeleteEmployee/linkIndex'));
    }
}

?>