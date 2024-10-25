<?php
class Home1_Con extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('Home1_Model');
    }


    //Create function to load Home Sub 1 page
    function viewHomeSub1($sub_page_id=null,$result=null){
        
        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     $page_id = $this->input->post('id');
        //     echo ($page_id);
        // }  
        $page1 = $this->Home1_Model->getSubPages($sub_page_id,$result);
        // print_r($page1);

        if(isset($page1[0]['controller']) && $page1[0]['controller'] === 'Homesub1') {
            $this->load->view('home1/homesub1');
        } else {
            echo "Controller does not match.";
        }        
       
    }


    //Create function to register a customer
    function register() {

        // Create if condition to check if the fields are empty
        if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['ad1']) 
         && !empty($_POST['phone']) && !empty($_POST['email'])) 
        {
            $result = $data['userData'] = $this->Home1_Model->submitRegisterCustomer(
                $_POST['title'], 
                $_POST['fname'], 
                $_POST['lname'], 
                $_POST['ad1'], 
                $_POST['ad2'], 
                $_POST['ad3'],
                $_POST['phone'],
                $_POST['email'] 
            );

            
            if($result==1){
                $this->load->view('home1/homesub1');

            }


        } 

    }


    //Create function to load registration form
    function add_new_customer() {
        $this->load->view('home1/homesub1');
    }


    //Create function to view registred customet list
    function customer_viewlist() {
        $result = $data['userRecords'] =$this->Home1_Model->getUsers();  
        // print_r ($result);  die();  
        $this->load->view('home1/homesub1_viewlist',$data);
    }


    // Create function to delete user details
    public function delete_customer($user_id) {
        // Delete user data
        $this->Home1_Model->delete_customer($user_id);

        // Redirect to view list page after deletion
        redirect(base_url('Home1_Con/customer_viewlist'));
    }


    //Create function to update registered customer
    public function registration_update($id = null) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_id = $this->input->post('id');
            $data = array(
                'title' => $this->input->post('title'),
                'first_name' => $this->input->post('fname'),
                'last_name' => $this->input->post('lname'),
                'telenum' => $this->input->post('phone'),
                'address_1' => $this->input->post('ad1'),
                'address_2' => $this->input->post('ad2'),
                'address_3' => $this->input->post('ad3'),
                'email' => $this->input->post('email'),
            );
            $this->Home1_Model->update_customer($user_id, $data);
            redirect('Home1_Con/customer_viewlist');
        } else {
            $res = $this->Home1_Model->getUpdateUsers($id);
            if (empty($res)) {
                show_404();
            }
            $data['user'] = $res[0];
            $this->load->view('home1/homesub1_update_details', $data);
        }
    }

}
?>