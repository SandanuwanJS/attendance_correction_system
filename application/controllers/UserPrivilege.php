<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserPrivilege extends CI_Controller {

	
	function __construct () {
		parent::__construct();
		$this->load->model('UserPrivilege_Model');
        // $this->load->model('Excel_Model');
		$this->load->database();
	}


// ******************** Create function to veiw User Privilege page(for side pannel) ********************
    function index($sub_page_id=null,$result=null){    
         
        $page1 = $this->UserPrivilege_Model->getSubPages($sub_page_id,$result);
        // print_r($page1); die();
        

        // ******************** Create condition to check if the controller(get from the db) is match to the correct contraller
        if(isset($page1[0]['controller']) && $page1[0]['controller'] === 'UserPrivilege') {
            $data['userRecords'] =$this->UserPrivilege_Model->getUsers(); 
            $this->load->view('userPrivilege', $data);
        } else {
            echo "Controller does not match.";
        }        
       
    }


// ******************** Create function to veiw User Privilege page(for buttons) ********************
    function linkIndex($sub_page_id=null,$result=null) {
        $data['userRecords'] =$this->UserPrivilege_Model->getUsers(); 
        $this->load->view('userPrivilege', $data);
    }


// ******************** Create function to veiw Privileges related to selected user ********************
    function viewPrivilege($id = null, $result = null) {
        $data['userRecords'] = $this->UserPrivilege_Model->viewPrivilege($id);
        // print_r($data);
        $this->load->view('viewPrivilege',$data);  
        
    }


// ******************** Create function to save user privileges in to the table ********************
    function savePrivilege() {  
        //    print_r($_POST); die();
        $checkId = $_POST['loopCount']; 
        
        $selectedPrivileges = [];
        for($x=1;$x<=$checkId-1;$x++){
            $selectedPrivileges[] = $this->input->post('selected'.$x);
            // print_r($selectedPrivileges); die();
            // echo $UID; die();
                
        }
        // print_r($selectedPrivileges); die();
        $selectedPrivilege = $this->UserPrivilege_Model->savePrivilege($selectedPrivileges);


        // if ($selectedPrivilege == 1) {
        //     $data['userRecords'] =$this->UserPrivilege_Model->getUsers(); 
        //     $this->load->view('userPrivilege', $data);
        // }
        // else {
        //     echo "Can't load";
        // }
        
    }
}

?>