<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	function __construct () {
		parent::__construct();
		$this->load->model('Dash_Model');
		$this->load->database();
	}


// ******************** Create function to veiw excel submit page ********************
    function index($sub_page_id=null,$result=null){    
         
        $page1 = $this->Dash_Model->getSubPages($sub_page_id,$result);
        // print_r($page1); die();
        

        // ******************** Create condition to check if the controller(get from the db) is match to the correct contraller
        if(isset($page1[0]['controller']) && $page1[0]['controller'] === 'Dashboard') {
            $this->load->view('dashboard');
        } else {
            echo "Controller does not match.";
        }        
       
    }
}
