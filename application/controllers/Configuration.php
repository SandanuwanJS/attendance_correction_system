<?php
use PhpOffice\PhpSpreadsheet\IOFactory;

class Configuration extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('UserModel');
        $this->load->model('Excel_Model');
        $this->load->model('Configuration_Model');
    }

    function uploadExcel($msg = null) {
        require 'vendor/autoload.php';
        
        $data['title'] = 'Title names';
        $data['pagetitle'] = 'Upload Excel';
        $data['msg'] = $msg;
        $data['modules'] = $this->Excel_Model->getMainModule();
        $data['menu'] = $this->Excel_Model->getMenuList();

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["excel_file"])) {
            $file = $_FILES["excel_file"];

            //Check the file extension
            $fileInfo = pathinfo($file["name"]);
            if ($fileInfo["extension"] != "xlsx") || ($fileInfo["extension"] != "xls") {
                echo ".xlsx and .xls files are only allowed.";
                exit();
            }

            $targetDir = "excelFiles/";
            $targetFile = $targetDir.basename($file["name"]);
        }

        
    }
}
?>