<?php
class Configuration_Model extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
}
?>