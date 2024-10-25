<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainTable extends CI_Controller {

	
	function __construct () {
		parent::__construct();
		$this->load->model('MainTable_Model');
        // $this->load->model('Excel_Model');
		$this->load->database();
	}


// ******************** Create function to veiw excel submit page ********************
    function index($sub_page_id=null,$result=null){    
         
        $page1 = $this->MainTable_Model->getSubPages($sub_page_id,$result);
        // print_r($page1); die();
        

        // ******************** Create condition to check if the controller(get from the db) is match to the correct contraller
        if(isset($page1[0]['controller']) && $page1[0]['controller'] === 'MainTable') {
            $mainResult = $allData['excelData'] = $this->MainTable_Model->getMain();
            // print_r($mainResult); die();
            $this->load->view('excelMainTable', $allData);
            
        } else {
            echo "Controller does not match.";
        }        
       
    }


    
}
