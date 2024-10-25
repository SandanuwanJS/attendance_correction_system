<?php
class Excel_Model extends CI_Model{

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    
// ******************** Create function to view monthly_attendance table ********************
    function getExcel() {
        $query = $this->db->select('*');
        $this->db->from('`monthly_attendance`');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }


// ******************** Create function to view main_table ********************
    function getMain() {
        $mainquery = $this->db->select('*');
        $this->db->from('`main_table`');
        $mainquery = $this->db->get();
        $mainResult = $mainquery->result_array();
        return $mainResult;
    }


    // function get_personId($type='Person ID') {
    //     for($i = 4; $i <= 36; $i= $i+11) {
    //         $this->db->select('monthly_attendance.8, departments.department_name');
    //         $this->db->from('monthly_attendance');
    //         $this->db->where('type', $type);
    //         $this->db->join('departments', 'monthly_attendance.15 = departments.department_name', 'inner');
    //         $subQueryDe1 = $this->db->get();

    //         // $this->db->select('monthly_attendance.8, departments.department_name');
    //         // $this->db->from('departments');
    //         // $this->db->where('type', $type);
    //         // $this->db->join('monthly_attendance', 'monthly_attendance.15 = departments.department_name', 'right');
    //         // $subQueryDe2 = $this->db->get_compiled_select();

    //         // $queryDe = $this->db->query("($subQueryDe1) UNION ($subQueryDe2)");
        
    //         $resultDateArray = $subQueryDe1->result_array();
    //         foreach($resultDateArray as $row) {
    //             // echo '*** : ';
    //             print_r($row);
    //             // echo '<br>';

    //         }
    //     }
         
    //     // print_r($resultDateArray);                                                         
    //     // return $resultDateArray;
    //     // echo $this->db->last_query();     
    // }






// ******************** Create function to call all employees related to relavent departments ********************
    function casual($selectedText = null) {
        // echo $selectedText;
        // die();
        $query = $this->db->query("SELECT monthly_attendance.8, departments.department_name, monthly_attendance.user_id, monthly_attendance.entered_date
        FROM monthly_attendance
        INNER JOIN departments
        ON departments.department_name = '".$selectedText."'
        WHERE monthly_attendance.type = 'Person ID' AND monthly_attendance.15 LIKE '%".$selectedText."'");

        $options='<option>Please select</option>';
        $result = $query->result_array();
        foreach ($result as $row) {
            // print_r($row);
            $options.= '<option>'.$row[8].'/'.$row['user_id'].'/'.$row['entered_date'].'</option>';
        }
        echo $options; 
        // print_r( $options);
    }


 // ******************** Create function to get all details relevant to selected employee ********************
    function getDetails($selectedText = null) {
        // echo $selectedText; 
        $idArray = explode('/', $selectedText);
        $userIdArray = $idArray[1];

        $query = $this->db->query("SELECT monthly_attendance.type, monthly_attendance.1, monthly_attendance.2, monthly_attendance.3,
        monthly_attendance.4, monthly_attendance.5, monthly_attendance.6, monthly_attendance.7, monthly_attendance.8,
        monthly_attendance.9, monthly_attendance.10, monthly_attendance.11, monthly_attendance.12, monthly_attendance.13,
        monthly_attendance.14, monthly_attendance.15, monthly_attendance.16, monthly_attendance.17, monthly_attendance.18,
        monthly_attendance.19, monthly_attendance.20, monthly_attendance.21, monthly_attendance.22, monthly_attendance.23,
        monthly_attendance.24, monthly_attendance.25, monthly_attendance.26, monthly_attendance.27, monthly_attendance.28,
        monthly_attendance.29, monthly_attendance.30, monthly_attendance.31
        FROM monthly_attendance
        WHERE monthly_attendance.user_id = $userIdArray");

        $tblTr = '';
        $result1 = $query->result_array(); 
        foreach ($result1 as $row) {
            // print_r($row);
            $tblTr .= "<tr>
            <td> ". $row['type'] ."</td>
            <td> ". $row['1'] ."</td>
            <td> ". $row['2'] ."</td>
            <td> ". $row['3'] ."</td>
            <td> ". $row['4'] ."</td>
            <td> ". $row['5'] ."</td>
            <td> ". $row['6'] ."</td>
            <td> ". $row['7'] ."</td>
            <td> ". $row['8'] ."</td>
            <td> ". $row['9'] ."</td>
            <td> ". $row['10'] ."</td>
            <td> ". $row['11'] ."</td>
            <td> ". $row['12'] ."</td>
            <td> ". $row['13'] ."</td>
            <td> ". $row['14'] ."</td>
            <td> ". $row['15'] ."</td>
            <td> ". $row['16'] ."</td>
            <td> ". $row['17'] ."</td>
            <td> ". $row['18'] ."</td>
            <td> ". $row['19'] ."</td>
            <td> ". $row['20'] ."</td>
            <td> ". $row['21'] ."</td>
            <td> ". $row['22'] ."</td>
            <td> ". $row['23'] ."</td>
            <td> ". $row['24'] ."</td>
            <td> ". $row['25'] ."</td>
            <td> ". $row['26'] ."</td>
            <td> ". $row['27'] ."</td>
            <td> ". $row['28'] ."</td>
            <td> ". $row['29'] ."</td>
            <td> ". $row['30'] ."</td>
            <td> ". $row['31'] ."</td>";
                                         
        }
        echo $tblTr;   
    }

    function getDate($startDate = null, $endDate = null, $selectedText=null) {
        // echo $selectedText;
        // $idArray = explode('/', $selectedText);
        // $userIdArray = $idArray[1];
        // echo $userIdArray;
        echo $startDate;
        echo $endDate;

        $query = $this->db->query("SELECT monthly_attendance.type, monthly_attendance.1, monthly_attendance.2, monthly_attendance.3,
        monthly_attendance.4, monthly_attendance.5, monthly_attendance.6, monthly_attendance.7, monthly_attendance.8,
        monthly_attendance.9, monthly_attendance.10, monthly_attendance.11, monthly_attendance.12, monthly_attendance.13,
        monthly_attendance.14, monthly_attendance.15, monthly_attendance.16, monthly_attendance.17, monthly_attendance.18,
        monthly_attendance.19, monthly_attendance.20, monthly_attendance.21, monthly_attendance.22, monthly_attendance.23,
        monthly_attendance.24, monthly_attendance.25, monthly_attendance.26, monthly_attendance.27, monthly_attendance.28,
        monthly_attendance.29, monthly_attendance.30, monthly_attendance.31
        FROM monthly_attendance
        WHERE monthly_attendance.actual_date BETWEEN '$startDate' AND '$endDate'");
       
        $tableRow = '';
        $result2 = $query->result_array();
        foreach ($result2 as $row) {
            // print_r($row);
        
            $tableRow .="<tr>
            <td>". $row['type'] ."</td>
            <td>". $row['1'] ."</td>
            <td>". $row['2'] ."</td>
            <td>". $row['3'] ."</td>
            <td>". $row['4'] ."</td>
            <td>". $row['5'] ."</td>
            <td>". $row['6'] ."</td>
            <td>". $row['7'] ."</td>
            <td>". $row['8'] ."</td>
            <td>". $row['9'] ."</td>
            <td>". $row['10'] ."</td>
            <td>". $row['11'] ."</td>
            <td>". $row['12'] ."</td>
            <td>". $row['13'] ."</td>
            <td>". $row['14'] ."</td>
            <td>". $row['15'] ."</td>
            <td>". $row['16'] ."</td>
            <td>". $row['17'] ."</td>
            <td>". $row['18'] ."</td>
            <td>". $row['19'] ."</td>
            <td>". $row['20'] ."</td>
            <td>". $row['21'] ."</td>
            <td>". $row['22'] ."</td>
            <td>". $row['23'] ."</td>
            <td>". $row['24'] ."</td>
            <td>". $row['25'] ."</td>
            <td>". $row['26'] ."</td>
            <td>". $row['27'] ."</td>
            <td>". $row['28'] ."</td>
            <td>". $row['29'] ."</td>
            <td>". $row['30'] ."</td>
            <td>". $row['31'] ."</td>";
        }
        // echo $tableRow;

        
    }


// ******************** Create function to get year and month from entered date ********************
    function check_month($dbMonth = null) {
        $this->db->select('*');
        $this->db->from('monthly_attendance');
        $this->db->where('`monthly_attendance`.`entered_date`', $dbMonth);
        $query = $this->db->get();
        $result_month = $query->result_array();
        // print_r($result_month);
        // return $result_month;
    }



// ******************** Create function to save excel data into the monthly_attendance table ********************
    function saveExcel($allData=null, $uploadDate=null, $uploadRemark=null, $sheetNames=null) {

        $IsInserted = 1;

        $this->db->trans_begin();
        
        $dateArr = explode('-', $uploadDate);

        $dateMonth = $dateArr[0]."-".$dateArr[1];
        // print_r($dateMonth);
        $this->check_month();
        
        
        // Add date into the database
        // $this->db->where('`entered_date`', $dateMonth);

        //Add remark into the database
        // $this->db->where('`remark`',$uploadRemark);
        
        
        $personC    = 5;
        $dateC      = 6;
        $checkinC   = 7;
        $checkoutC  = 8;
        $otC        = 9;
        $lateC      = 10;
        $earlyLC    = 11;
        $attendedC  = 12;
        $breakC     = 13;
        $statusC    = 14;
        $summaryC   = 15;

        
        
        foreach ($allData as $sheetName =>$data) {

            $a=1;
            $person         = '';
            $checkin        = '';
            $checkout       = '';
            $ot             = '';
            $late           = '';
            $earlyL         = '';
            $attended       = '';
            $break          = '';
            $status         = '';
            $summary        = '';
            $date           = '';
            $day1           = '';
            $day2           = '';
            $day3           = '';
            $day4           = '';
            $day5           = '';
            $day6           = '';
            $day7           = '';
            $day8           = '';
            $day9           = '';
            $day10          = '';
            $day11          = '';
            $day12          = '';
            $day13          = '';
            $day14          = '';
            $day15          = '';
            $day16          = '';
            $day17          = '';
            $day18          = '';
            $day19          = '';
            $day20          = '';
            $day21          = '';
            $day22          = '';
            $day23          = '';
            $day24          = '';
            $day25          = '';
            $day26          = '';
            $day27          = '';
            $day28          = '';
            $day29          = '';
            $day30          = '';
            $day31          = '';
            $id             = '';
            $emp            = '';
            $name           = '';
            $department     = '';
            $dname          = '';
            $joiningdate    = '';
            $jdate          = '';
            $position       = '';
            $pname          = '';
            $count          = 0;
            $statrtIndex    = 4;
            $endIndex       = 13;
        
                foreach($data as $row) {

                    date_default_timezone_set("Asia/Colombo");

// ******************** Define the array ********************
                    $arrayIn = array(
                        '`user_id`'     => $statrtIndex, 
                        '`type`'        =>!empty($row[0]) ? $row[0] : '-', 
                        '`1`'           =>!empty($row[1]) ? $row[1] : '-', 
                        '`2`'           =>!empty($row[2]) ? $row[2] : '-', 
                        '`3`'           =>!empty($row[3]) ? $row[3] : '-', 
                        '`4`'           =>!empty($row[4]) ? $row[4] : '-', 
                        '`5`'           =>!empty($row[5]) ? $row[5] : '-', 
                        '`6`'           =>!empty($row[6]) ? $row[6] : '-', 
                        '`7`'           =>!empty($row[7]) ? $row[7] : '-', 
                        '`8`'           =>!empty($row[8]) ? $row[8] : '-', 
                        '`9`'           =>!empty($row[9]) ? $row[9] : '-', 
                        '`10`'          =>!empty($row[10]) ? $row[10] : '-', 
                        '`11`'          =>!empty($row[11]) ? $row[11] : '-', 
                        '`12`'          =>!empty($row[12]) ? $row[12] : '-', 
                        '`13`'          =>!empty($row[13]) ? $row[13] : '-', 
                        '`14`'          =>!empty($row[14]) ? $row[14] : '-', 
                        '`15`'          =>!empty($row[15]) ? $row[15] : '-', 
                        '`16`'          =>!empty($row[16]) ? $row[16] : '-', 
                        '`17`'          =>!empty($row[17]) ? $row[17] : '-', 
                        '`18`'          =>!empty($row[18]) ? $row[18] : '-', 
                        '`19`'          =>!empty($row[19]) ? $row[19] : '-', 
                        '`20`'          =>!empty($row[20]) ? $row[20] : '-', 
                        '`21`'          =>!empty($row[21]) ? $row[21] : '-', 
                        '`22`'          =>!empty($row[22]) ? $row[22] : '-', 
                        '`23`'          =>!empty($row[23]) ? $row[23] : '-', 
                        '`24`'          =>!empty($row[24]) ? $row[24] : '-', 
                        '`25`'          =>!empty($row[25]) ? $row[25] : '-', 
                        '`26`'          =>!empty($row[26]) ? $row[26] : '-', 
                        '`27`'          =>!empty($row[27]) ? $row[27] : '-', 
                        '`28`'          =>!empty($row[28]) ? $row[28] : '-', 
                        '`29`'          =>!empty($row[29]) ? $row[29] : '-', 
                        '`30`'          =>!empty($row[30]) ? $row[30] : '-', 
                        '`31`'          =>!empty($row[31]) ? $row[31] : '-', 
                        '`entered_date`'=>$dateMonth, 
                        '`remark`'      =>$uploadRemark, 
                        '`actual_date`' =>date('Y-m-d'), 
                        '`actual_time`' =>date('H:i:s')
                    );
            
                    
// ******************** Insert the table of the database (monthly_attendance table) ********************
                    if ($count >= $statrtIndex && $count <=$endIndex) {
                        $this->db->insert('monthly_attendance',$arrayIn);

                        if ($this->db->trans_status() === FALSE) {
                            $IsInserted = 0;
                        }
                    
                        // print_r($row);
                    } 
                    if ($endIndex == $count) {
                        $statrtIndex = $endIndex+2;
                        $endIndex = $statrtIndex+9;
                    }

                    $count++;
                }
                
            
// ******************** Commit the array in to the monthly_attendance table in the database ********************
            if ($IsInserted ==1) {
                $this->db->trans_commit();
            } else {
                $this->db->trans_rollback();
            }


// ******************** Check if $sheetNames and $dateMonth are arrays ********************
            // if (is_array($sheetNames)) {
            //     echo 'name1: '.print_r($sheetNames, true).'<br>';
            // } else {
            //     echo 'name2: '.$sheetNames.'<br>';
            // }

            // if (is_array($dateMonth)) {
            //     echo 'month: '.print_r($dateMonth, true).'<br>';
            // } else {
            //     echo 'month: '.$dateMonth.'<br>';
            // }

            // echo 'remark: '.$uploadRemark.'<br>';
            // die();
            
            

// ******************** Create function to save excel details into the main_table ********************
            $userid = 4;
            date_default_timezone_set("Asia/Colombo");
            $arr = array(
                '`user_id`' => $userid,
                // '`sheet_name`' => $sheetNames,
                '`sheet_name`' => $uploadRemark,
                '`entered_date`' => $dateMonth,
                '`actual_date`' => date('Y-m-d'),
                '`actual_time`' => date('H:i:s')

            );
            // print_r($arr);die();


// ******************** Insert the table of the database (main_table) ********************
            if ($userid != null && $dateMonth != null){
                $this->db->insert('main_table',$arr);

                if ($this->db->trans_status() === FALSE) {
                    $IsInserted = 0;
                }
            }


// ******************** Commit the array in to the main_table in the database ********************
            if ($IsInserted == 1) {
                $this->db->trans_commit();
            }
            else {
                $this->db->trans_rollback();
            }
            // print_r($IsInserted);
 
        return $IsInserted;  
            
        }

   }
}

?>