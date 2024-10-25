<?php
use PhpOffice\PhpSpreadsheet\IOFactory;

class ExcelForm extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Excel_Model');
        $this->load->database();
        
    }


// ******************** Create function to veiw excel submit page ********************
    function index($sub_page_id=null,$result=null){    
         
        $page1 = $this->Excel_Model->getSubPages($sub_page_id,$result);
        // print_r($page1); die();
        

        // ******************** Create condition to check if the controller(get from the db) is match to the correct contraller
        if(isset($page1[0]['controller']) && $page1[0]['controller'] === 'ExcelForm') {
            $this->load->view('excelreg');
        } else {
            echo "Controller does not match.";
        }        
       
    }


// ******************** Create function to load excel submit page through buttons ********************
    function linkIndex() {
        $this->load->view('excelreg');
    }


// ******************** Create controller function to view the list of insereted pdf ********************
    function excel_viewlist() {
        $result = $allData['excelData'] = $this->Excel_Model->getExcel();
        // print_r($result); die();
        $this->load->view('excelViewList', $allData);
    }


// ******************** Create function to load "View Details" page ********************
    function excel_departments() {
        $this->load->view('departments');
    }



// ******************** Create function to call all employees related to relavent departments ******************** 
    function EmployeeN($selectedText = null) {
        $selectedText= $_POST['selectedText'];
        // echo $selectedText;
        $this->Excel_Model->EmployeeN($selectedText);
    }


 // ******************** Create function to get all details relevant to selected employee ********************
    function getDetails($selectedText = null) {
        $selectedText = $_POST['selectedText'];
        // echo $selectedText;
        $this->Excel_Model->getDetails($selectedText);
    }


 // ******************** Create function to get all details relevant to selected date range ********************
    function getDate($startDate = null, $endDate = null, $selectedText = null) { 
       
            $selectedText = $_POST['selectedText'];
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];
            // echo $startDate;

            $this->Excel_Model->getDate($startDate, $endDate, $selectedText);
       
    }



// ******************** Create controller to upload the excel ********************
    function uploadExcel($msg = null, $dateMonth = null) {
        // echo "Date Month: ";
        // print_r($dateMonth);

        require 'vendor/autoload.php';
        
        $data['title'] = 'Title names';
        $data['pagetitle'] = 'Upload Excel';
        $data['msg'] = $msg;
        // $data['modules'] = $this->Excel_Model->getMainModule();
        // $data['menu'] = $this->Excel_Model->getMenuList();
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileInput"])) {

            $file = $_FILES["fileInput"];

            // ******************** Check if the file is an Excel file ********************
            $fileInfo = pathinfo($file["name"]);
            if ($fileInfo["extension"] != "xlsx") {
                echo "Only .xlsx files are allowed.";
                exit();
            }


            // ******************** Move the uploaded file to a location on your server ********************
            $targetDir = "excelFiles/";
            $targetFile = $targetDir . basename($file["name"]);

            if (move_uploaded_file($file["tmp_name"], $targetFile)) {


                // ******************** Read the Excel file ********************
                $spreadsheet = IOFactory::load($targetFile);


                // ******************** Get all sheet names ********************
                $sheetNames = $spreadsheet->getSheetNames();
                

                // ******************** Iterate through each sheet ********************
                $allData = [];
                foreach ($sheetNames as $sheetName) {
                    $sheet = $spreadsheet->getSheetByName($sheetName);

                    
                    // ******************** Iterate through rows and columns ********************
                    $sheetData = [];
                    foreach ($sheet->getRowIterator() as $row) {
                        $rowData = [];
                        $cellIterator = $row->getCellIterator();
                        $cellIterator->setIterateOnlyExistingCells(FALSE);
                        foreach ($cellIterator as $cell) {
                            $rowData[] = $cell->getValue();

                        }
                        $sheetData[] = $rowData;

                    }
                    $allData[$sheetName] = $sheetData;

                }
                // print_r($allData);
                // die();
               
                $uploadDate    = $_POST['date'];
                $uploadRemark  = $_POST['remark'];


                $result = $this->Excel_Model->saveExcel($allData,$uploadDate,$uploadRemark,$sheetNames);

            } else {
                echo "Failed to upload file.";
            }


            // ******************** If the excel sheet was uploaded successfully load the excel registration page ********************
            if ($result==1) {
                $this->load->view('excelreg');
            }

        }
    }

    function incomplete_Employee_List() {
        // $this->load->view('excelreg');
        // echo ('abc');
        // print_r($result); die();

        $employeeList = $allEmployee['incompleteData'] = $this->Excel_Model->getIncompleteEmployee();
        

    }
   
}
