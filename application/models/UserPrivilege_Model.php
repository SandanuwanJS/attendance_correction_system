<?php
class UserPrivilege_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }


// ******************** Create function to get controller name from 'subpages' table ********************
    function getSubPages($sub_page_id=null, $result=null) {
        $query = $this->db->select('`controller`');
        $this->db->from('`subpages`');
        $this->db->where('`id`',$sub_page_id);
        $query = $this->db->get();
        $result = $query->result_array();
        // print_r($result);die();
        
        return $result;
    }


// ******************** Create function to view user list to give user privileges ********************
    function getUsers($options = null) {
        // $query = $this->db->query("SELECT mst_user.fname, mst_user.email
        // FROM mst_user");

        $query = $this->db->select('`mst_user.fname`,`mst_user.lname`,`mst_user.userName`, `mst_user.email`, `mst_user.isact`, `mst_user.id`');
        $this->db->from('`mst_user`');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;


        
    }


// ******************** Create function to view user privileges related to selected user
    function viewPrivilege($id) {
        $query = $this->db->select('`mst_user.fname`, `mst_user.lname`, `mst_user.email`, `mst_user`.id');
        $this->db->from('`mst_user`');
        $this->db->where('`mst_user.id`' , $id);
        $query = $this->db->get();
        $result = $query->result_array();
        // echo $id;
        // print_r($result);
        return $result;

    }


// ****************** Create function to save user privileges into the database ******************
    function savePrivilege($selectedPrivileges = null) {
        // print_r($selectedPrivileges);
        $priviID = $selectedPrivileges[0];
        $priviIDArray = explode(',', $priviID);
        $UID_Privilage = $priviIDArray[3];
        // echo $UID_Privilage;
        // echo '<br>';
        // print_r($selectedPrivileges); die();
        $this->db->where('`user_id`', $UID_Privilage);
        $this->db->delete('privileges');

        $count = 0;
        if (!empty($selectedPrivileges)) {

            $size = sizeof($selectedPrivileges);
            // echo $size;
            // echo '<br>'; die();
            for ($i = 0; $i<$size; $i++) {

                $indexes = $selectedPrivileges[$i];
                // echo( $indexes);
                // echo '<br>'; 
                // die();
                $indexArray = explode(',', $indexes);
                
                $subpageID = $indexArray[0];
                $subpsgeName = $indexArray[1];
                $mainpageID = $indexArray[2];
                $userID = $indexArray[3];
                // print_r($indexArray);
                // echo '<br>';
                // echo $i;
                // echo '<br>';
                // $this->db->where('`user_id`', $userID);
                // $this->db->delete('privileges');

                if ($count <= $i) {
                    date_default_timezone_set('Asia/Colombo');
                    $array = array(
                        '`user_id`' => $userID,
                        '`main_page_id`' => $mainpageID,
                        '`sub_page_id`' => $subpageID,
                        '`sub_page_name`' => $subpsgeName,
                        '`privi_given_date`' => date('Y-m-d'),
                        '`privi_given_time`' => date('H:i:s'),
                        '`isact`' => 1
                    );
                    // print_r($array); 
                    // echo '<br>';
                    // echo $count;
                    // echo '<br>';
                

                    $IsInserted = 1;

                    // if ($count1 < $size) {

                        $this->db->trans_begin();
                        // print_r($array);
                        $this->db->insert('privileges', $array);

                        if ($this->db->trans_status() === FALSE) {
                            $IsInserted = 0;
                        }
                        
                        if ($IsInserted = 1) {
                            $this->db->trans_commit();
                            // echo $this->db->last_query();die();
                            // return 1;
                        }
                    // }
                }
                $count++;
                echo "Inside for loop".$count;
                echo '<br>';
                echo "Inside I = ".$i;
                echo '<br>';

                // if ($count > $i) {
                //     redirect('UserPrivilege/linkIndex');
                // }
                
            }
            
            echo $IsInserted;
            echo '<br>';
            echo "Outside for loop".$count;
            echo '<br>';
            echo "Outside I = ".$i;
            echo '<br>';
            if ($IsInserted === 1) {
                $this->load->view('home');
                // return;
            }
            
            // if ($IsInserted == 1) {
            //     redirect('UserPrivilege/linkIndex');
            // } 
            // else {
            //     echo "Failed to insert Privileges.";
            // }
                
           
           
        } else {
            echo "Nothing";
        } 
        // die();
        // // print_r($selectedValues);die();
        // for ($i=0; $i<$size; $i++) {
        //     $array = array(
        //         '`user_id`' => $userID,
        //         '`main_page_id`' => $mainpageID,
        //         '`sub_page_id`' => $subpageID,
        //         '`sub_page_name`' => $subpsgeName,
        //         '`isact`' => 1
        //     );
        //     print_r($array);
        //     echo '<br>'; 
        //     echo $size;
        //     echo '<br>';
        //     echo $i;
        //     echo 'END';
        //     echo '<br>';
        //     $this->UserPrivilege->savePrivilege();
        // }
        // die();
        // $IsInserted = 1;

        // $this->db->trans_begin();
        // $this->db->insert('privileges', $array);

        // if ($this->db->trans_status() === FALSE) {
        //     $IsInserted = 0;
        // }

        // if ($IsInserted = 1) {
        //     $this->db->trans_commit();
        //     echo $this->db->last_query();die();
        //     return 1;
        // }
    }
    


}
?>