<?php
class Excel_Model extends CI_Model{

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    

    
    //Create functio to view database table
    function getExcel() {
        $query = $this->db->select('`monthly_attendance`.*');
        $this->db->from('`monthly_attendance`');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }


    //Create function to save excel data into the database table
    function saveExcel($allData=null, $uploadDate=null, $uploadRemark=null) {
        
        // $idNo     = null;
        // $fname  = null;
        // $lname  = null;
        // $status = null;
        // $type_pid = null;


        $IsInserted = 1;

        $this->db->trans_begin();
        
        $dateArr = explode('-', $uploadDate);

        $dateMonth = $dateArr[0]."-".$dateArr[1];
        
        // print_r($dateMonth);
        // echo $uploadRemark; die();

        //Add date into the database
        $this->db->where('`entered_date`', $dateMonth);

        //Add remark into the database
        $this->db->where('`remark`',$uploadRemark);

        
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
            $person     = '';
$checkin    = '';
$checkout   = '';
$ot         = '';
$late       = '';
$earlyL     = '';
$attended   = '';
$break      = '';
$status     = '';
$summary    = '';
$date       = '';
$day1       = '';
$day2       = '';
$day3       = '';
$day4       = '';
$day5       = '';
$day6       = '';
$day7       = '';
$day8       = '';
$day9       = '';
$day10      = '';
$day11      = '';
$day12      = '';
$day13      = '';
$day14      = '';
$day15      = '';
$day16      = '';
$day17      = '';
$day18      = '';
$day19      = '';
$day20      = '';
$day21      = '';
$day22      = '';
$day23      = '';
$day24      = '';
$day25      = '';
$day26      = '';
$day27      = '';
$day28      = '';
$day29      = '';
$day30      = '';
$day31      = '';
$id             = '';
$emp            = '';
$name           = '';
$department     = '';
$dname          = '';
$joiningdate    = '';
$jdate          = '';
$position       = '';
$pname          = '';
            
           
            $count = 0;
            $statrtIndex = 5;
            $endIndex= 13;

            foreach($data as $row) {
                $arrayIn = array(
                    '`user_id`'=> 129,
                    '`type`'=>0, 
                    '`1`'=>1, 
                    '`2`'=>2, 
                    '`3`'=>3, 
                    '`4`'=>4, 
                    '`5`'=>5, 
                    '`6`'=>6, 
                    '`7`'=>7, 
                    '`8`'=>8, 
                    '`9`'=>9, 
                    '`10`'=>10, 
                    '`11`'=>11, 
                    '`12`'=>12, 
                    '`13`'=>13, 
                    '`14`'=>14, 
                    '`15`'=>15, 
                    '`16`'=>16, 
                    '`17`'=>17, 
                    '`18`'=>18, 
                    '`19`'=>19, 
                    '`20`'=>20, 
                    '`21`'=>21, 
                    '`22`'=>22, 
                    '`23`'=>23, 
                    '`24`'=>24, 
                    '`25`'=>25, 
                    '`26`'=>26, 
                    '`27`'=>27, 
                    '`28`'=>28, 
                    '`29`'=>29, 
                    '`30`'=>30, 
                    '`31`'=>31, 
                    '`remark`'=>$uploadRemark, 
                    '`entered_date`'=>$uploadDate, 
                    '`actual_date`'=>date('Y-m-d'), 
                    '`actual_time`'=>date('H:i:s')
                );
                if ($count >= $statrtIndex && $count <=$endIndex) {
                    $this->db->insert('monthly_attendance',$arrayIn);

                    if ($this->db->trans_status() === FALSE) {
                        $IsInserted = 0;
                    }
                   
                    // print_r($row);
                } 
                $count++;
                
            $b=1;
            $arrayIn = [];
            
                foreach ($row as $cell) {
                    if($a>4) {
                        

// ******************************* If condition for get all Persson Id rows *******************************


                        if($a==$personC){ 
                            // if ($b == 1 && $cell != "") {
                            //     $arrayIn['type'] = $cell;
                            // }

                            // for ($i = 1; $i <=32; $i++) {
                            //     if ($b == $i && $cell != "") {
                            //         $arrayIn[$i] = $cell;
                            //     }
                            // }
                            // echo $cell."[".$a."] [".$b."] <br>";
                            if($b==1 && $a==$personC && $cell!= ""){
                                $person =  $cell;
                                // echo $person.",".$a.",".$b;
                            }
                            if ($b==2 && $a==$personC && $cell!= "") {
                                $id = $cell;
                                // echo $id;
                            }
                            if($b==6 && $a==$personC && $cell!= ""){
                                $emp = $cell;  
                            }
                            if($b==9 && $a==$personC && $cell!= "") {
                                $name = $cell;
                            }
                            if ($b==13 && $a==$personC && $cell!= "") {
                                $department = $cell;
                            }
                            if ($b==16 && $a==$personC && $cell!= "") {
                                $dname = $cell;
                            }
                            if ($b==20 && $a==$personC && $cell!= "") {
                                $joiningdate = $cell;
                            }
                            if ($b==23 && $a==$personC && $cell!= "") {
                                $jdate = $cell;
                            }
                            if ($b==27 && $a==$personC && $cell!= "") {
                                $position = $cell;
                            }
                            if ($b==30 && $a==$personC && $cell!= "") {
                                $pname = $cell;
                            }

                            if ($person!=''){
                                // echo $person.",".$a.",".$b;
                                // echo "ID: ".$id."[".$a.",".$b."]";
                                $arrayIn = array(
                                    'type' => $person
                                );
                            }
                            if ($id != '') {
                                $arrayIn = array(
                                    '1' => $day1
                                );
                            }
                            if ($emp != '') {
                                $arrayIn = array(
                                    '5' => $day5
                                );
                            }
                            if ($name != '') {
                                $arrayIn = array(
                                    '8' => $day8
                                );
                            }
                            if ($department != '') {
                                $arrayIn = array(
                                    '12' => $day12
                                );
                            }
                            if ($dname != '') {
                                $arrayIn = array(
                                    '15' => $day15
                                );
                            }
                            if ($joiningdate != '') {
                                $arrayIn = array(
                                    '19' => $day19
                                );
                            }
                            if ($jdate != '') {
                                $arrayIn = array(
                                    '22' => $day22
                                );
                            }
                            if ($position != '') {
                                $arrayIn = array(
                                    '26' => $day26
                                );
                            }
                            if ($pname != '') {
                                $arrayIn = array(
                                    '29' => $day29
                                );
                            }
                            // print_r($arrayIn); 
                            
                        }
                        

                        if($a==$personC && $b==32){
                            $personC = $personC+11;
                        }

// ******************************* If condition for get all Date rows *******************************
                


                        if ($a==$dateC) {
                            // if ($b == 1 && $cell != "") {
                            //     $arrayIn['type'] = $cell;
                            // }

                            // for ($i = 1; $i <=32; $i++) {
                            //     if ($b == $i && $cell != "") {
                            //         $arrayIn[$i] = $cell;
                            //     }
                            // }

                            if($b==1 && $a==$dateC && $cell!= ""){
                                $date =  $cell;
                                // echo $checkin.",".$a.",".$b;
                            }
                            if ($b==2 && $a==$dateC && $cell!= "") {
                                $day1 = $cell;
                                // echo $day1."[".$a.",".$b."]";
                            }
                            if ($b==3 && $a==$dateC && $cell!= "") {
                                $day2 = $cell;
                                // echo $day2."[".$a.",".$b."]";
                            }
                            if ($b==4 && $a==$dateC && $cell!= "") {
                                $day3 = $cell;
                                // echo $day3."[".$a.",".$b."]";
                            }
                            if ($b==5 && $a==$dateC && $cell!= "") {
                                $day4 = $cell;
                                // echo $day4."[".$a.",".$b."]";
                            }
                            if ($b==6 && $a==$dateC && $cell!= "") {
                                $day5 = $cell;
                                // echo $day5."[".$a.",".$b."]";
                            }
                            if ($b==7 && $a==$dateC && $cell!= "") {
                                $day6 = $cell;
                                // echo $day6."[".$a.",".$b."]";
                            }
                            if ($b==8 && $a==$dateC && $cell!= "") {
                                $day7 = $cell;
                                // echo $day7."[".$a.",".$b."]";
                            }
                            if ($b==9 && $a==$dateC && $cell!= "") {
                                $day8 = $cell;
                                // echo $day8."[".$a.",".$b."]";
                            }
                            if ($b==10 && $a==$dateC && $cell!= "") {
                                $day9 = $cell;
                                // echo $day9."[".$a.",".$b."]";
                            }
                            if ($b==11 && $a==$dateC && $cell!= "") {
                                $day10 = $cell;
                                // echo $day10."[".$a.",".$b."]";
                            }
                            if ($b==12 && $a==$dateC && $cell!= "") {
                                $day11 = $cell;
                                // echo $day11."[".$a.",".$b."]";
                            }
                            if ($b==13 && $a==$dateC && $cell!= "") {
                                $day12 = $cell;
                                // echo $day12."[".$a.",".$b."]";
                            }
                            if ($b==14 && $a==$dateC && $cell!= "") {
                                $day13 = $cell;
                                // echo $day13."[".$a.",".$b."]";
                            }
                            if ($b==15 && $a==$dateC && $cell!= "") {
                                $day14 = $cell;
                                // echo $day14."[".$a.",".$b."]";
                            }
                            if ($b==16 && $a==$dateC && $cell!= "") {
                                $day15 = $cell;
                                // echo $day15."[".$a.",".$b."]";
                            }
                            if ($b==17 && $a==$dateC && $cell!= "") {
                                $day16 = $cell;
                                // echo $day16."[".$a.",".$b."]";
                            }
                            if ($b==18 && $a==$dateC && $cell!= "") {
                                $day17 = $cell;
                                // echo $day17."[".$a.",".$b."]";
                            }
                            if ($b==19 && $a==$dateC && $cell!= "") {
                                $day18 = $cell;
                                // echo $day18."[".$a.",".$b."]";
                            }
                            if ($b==20 && $a==$dateC && $cell!= "") {
                                $day19 = $cell;
                                // echo $day19."[".$a.",".$b."]";
                            }
                            if ($b==21 && $a==$dateC && $cell!= "") {
                                $day20 = $cell;
                                // echo $day20."[".$a.",".$b."]";
                            }
                            if ($b==22 && $a==$dateC && $cell!= "") {
                                $day21 = $cell;
                                // echo $day21."[".$a.",".$b."]";
                            }
                            if ($b==23 && $a==$dateC && $cell!= "") {
                                $day22 = $cell;
                                // echo $day22."[".$a.",".$b."]";
                            }
                            if ($b==24 && $a==$dateC && $cell!= "") {
                                $day23 = $cell;
                                // echo $day23."[".$a.",".$b."]";
                            }
                            if ($b==25 && $a==$dateC && $cell!= "") {
                                $day24 = $cell;
                                // echo $day24."[".$a.",".$b."]";
                            }
                            if ($b==26 && $a==$dateC && $cell!= "") {
                                $day25 = $cell;
                                // echo $day25."[".$a.",".$b."]";
                            }
                            if ($b==27 && $a==$dateC && $cell!= "") {
                                $day26 = $cell;
                                // echo $day26."[".$a.",".$b."]";
                            }
                            if ($b==28 && $a==$dateC && $cell!= "") {
                                $day27 = $cell;
                                // echo $day27."[".$a.",".$b."]";
                            }
                            if ($b==29 && $a==$dateC && $cell!= "") {
                                $day28 = $cell;
                                // echo $day28."[".$a.",".$b."]";
                            }
                            if ($b==30 && $a==$dateC && $cell!= "") {
                                $day29 = $cell;
                                // echo $day29."[".$a.",".$b."]";
                            }
                            if ($b==31 && $a==$dateC && $cell!= "") {
                                $day30 = $cell;
                                // echo $day30."[".$a.",".$b."]";
                            }
                            if ($b==32 && $a==$dateC && $cell!= "") {
                                $day31 = $cell;
                                // echo $day31."[".$a.",".$b."]";
                            }

                            if ($date!=''){
                                // echo $person.",".$a.",".$b;
                                // echo "ID: ".$id."[".$a.",".$b."]";
                                $arrayIn = array(
                                    'type' => $date
                                );
                            }
                            if ($day1 != '') {
                                $arrayIn = array(
                                    '1' => $day1
                                );
                            }
                            if ($day2 != '') {
                                $arrayIn = array(
                                    '2' => $day2
                                );
                            }
                            if ($day3 != '') {
                                $arrayIn = array(
                                    '3' => $day3
                                );
                            }
                            if ($day4 != '') {
                                $arrayIn = array(
                                    '4' => $day4
                                );
                            }
                            if ($day5 != '') {
                                $arrayIn = array(
                                    '5' => $day5
                                );
                            }
                            if ($day6 != '') {
                                $arrayIn = array(
                                    '6' => $day6
                                );
                            }
                            if ($day7 != '') {
                                $arrayIn = array(
                                    '7' => $day7
                                );
                            }
                            if ($day8 != '') {
                                $arrayIn = array(
                                    '8' => $day8
                                );
                            }
                            if ($day9 != '') {
                                $arrayIn = array(
                                    '9' => $day9
                                );
                            }
                            if ($day10 != '') {
                                $arrayIn = array(
                                    '10' => $day10
                                );
                            }
                            if ($day11 != '') {
                                $arrayIn = array(
                                    '11' => $day11
                                );
                            }
                            if ($day12 != '') {
                                $arrayIn = array(
                                    '12' => $day12
                                );
                            }
                            if ($day13 != '') {
                                $arrayIn = array(
                                    '13' => $day13
                                );
                            }
                            if ($day14 != '') {
                                $arrayIn = array(
                                    '14' => $day14
                                );
                            }
                            if ($day15 != '') {
                                $arrayIn = array(
                                    '15' => $day15
                                );
                            }
                            if ($day16 != '') {
                                $arrayIn = array(
                                    '16' => $day16
                                );
                            }
                            if ($day17 != '') {
                                $arrayIn = array(
                                    '17' => $day17
                                );
                            }
                            if ($day18 != '') {
                                $arrayIn = array(
                                    '18' => $day18
                                );
                            }
                            if ($day19 != '') {
                                $arrayIn = array(
                                    '19' => $day19
                                );
                            }
                            if ($day20 != '') {
                                $arrayIn = array(
                                    '20' => $day20
                                );
                            }
                            if ($day21 != '') {
                                $arrayIn = array(
                                    '21' => $day21
                                );
                            }
                            if ($day22 != '') {
                                $arrayIn = array(
                                    '22' => $day22
                                );
                            }
                            if ($day23 != '') {
                                $arrayIn = array(
                                    '23' => $day23
                                );
                            }
                            if ($day24 != '') {
                                $arrayIn = array(
                                    '24' => $day24
                                );
                            }
                            if ($day25 != '') {
                                $arrayIn = array(
                                    '25' => $day25
                                );
                            }
                            if ($day26 != '') {
                                $arrayIn = array(
                                    '26' => $day26
                                );
                            }
                            if ($day27 != '') {
                                $arrayIn = array(
                                    '27' => $day27
                                );
                            }
                            if ($day28 != '') {
                                $arrayIn = array(
                                    '28' => $day28
                                );
                            }
                            if ($day29 != '') {
                                $arrayIn = array(
                                    '29' => $day29
                                );
                            }
                            if ($day30 != '') {
                                $arrayIn = array(
                                    '30' => $day30
                                );
                            }
                            if ($day31 != '') {
                                $arrayIn = array(
                                    '31' => $day31
                                );
                            }
                            // print_r($arrayIn);

                        } 
                        if ($a==$dateC && $b==32) {
                            $dateC = $dateC+11;
                        }

                        

// ******************************* If condition for get all check-in rows *******************************

                        if ($a==$checkinC) {
                            // if ($b == 1 && $cell != "") {
                            //     $arrayIn['type'] = $cell;
                            // }

                            // for ($i = 1; $i <=32; $i++) {
                            //     if ($b == $i && $cell != "") {
                            //         $arrayIn[$i] = $cell;
                            //     }
                            // }
                            if($b==1 && $a==$checkinC && $cell!= ""){
                                $checkin =  $cell;
                                // echo $checkin.",".$a.",".$b;
                            }
                            if ($b==2 && $a==$checkinC && $cell!= "") {
                                $day1 = $cell;
                                // echo $day1."[".$a.",".$b."]";
                            }
                            if ($b==3 && $a==$checkinC && $cell!= "") {
                                $day2 = $cell;
                                // echo $day2."[".$a.",".$b."]";
                            }
                            if ($b==4 && $a==$checkinC && $cell!= "") {
                                $day3 = $cell;
                                // echo $day3."[".$a.",".$b."]";
                            }
                            if ($b==5 && $a==$checkinC && $cell!= "") {
                                $day4 = $cell;
                                // echo $day4."[".$a.",".$b."]";
                            }
                            if ($b==6 && $a==$checkinC && $cell!= "") {
                                $day5 = $cell;
                                // echo $day5."[".$a.",".$b."]";
                            }
                            if ($b==7 && $a==$checkinC && $cell!= "") {
                                $day6 = $cell;
                                // echo $day6."[".$a.",".$b."]";
                            }
                            if ($b==8 && $a==$checkinC && $cell!= "") {
                                $day7 = $cell;
                                // echo $day7."[".$a.",".$b."]";
                            }
                            if ($b==9 && $a==$checkinC && $cell!= "") {
                                $day8 = $cell;
                                // echo $day8."[".$a.",".$b."]";
                            }
                            if ($b==10 && $a==$checkinC && $cell!= "") {
                                $day9 = $cell;
                                // echo $day9."[".$a.",".$b."]";
                            }
                            if ($b==11 && $a==$checkinC && $cell!= "") {
                                $day10 = $cell;
                                // echo $day10."[".$a.",".$b."]";
                            }
                            if ($b==12 && $a==$checkinC && $cell!= "") {
                                $day11 = $cell;
                                // echo $day11."[".$a.",".$b."]";
                            }
                            if ($b==13 && $a==$checkinC && $cell!= "") {
                                $day12 = $cell;
                                // echo $day12."[".$a.",".$b."]";
                            }
                            if ($b==14 && $a==$checkinC && $cell!= "") {
                                $day13 = $cell;
                                // echo $day13."[".$a.",".$b."]";
                            }
                            if ($b==15 && $a==$checkinC && $cell!= "") {
                                $day14 = $cell;
                                // echo $day14."[".$a.",".$b."]";
                            }
                            if ($b==16 && $a==$checkinC && $cell!= "") {
                                $day15 = $cell;
                                // echo $day15."[".$a.",".$b."]";
                            }
                            if ($b==17 && $a==$checkinC && $cell!= "") {
                                $day16 = $cell;
                                // echo $day16."[".$a.",".$b."]";
                            }
                            if ($b==18 && $a==$checkinC && $cell!= "") {
                                $day17 = $cell;
                                // echo $day17."[".$a.",".$b."]";
                            }
                            if ($b==19 && $a==$checkinC && $cell!= "") {
                                $day18 = $cell;
                                // echo $day18."[".$a.",".$b."]";
                            }
                            if ($b==20 && $a==$checkinC && $cell!= "") {
                                $day19 = $cell;
                                // echo $day19."[".$a.",".$b."]";
                            }
                            if ($b==21 && $a==$checkinC && $cell!= "") {
                                $day20 = $cell;
                                // echo $day20."[".$a.",".$b."]";
                            }
                            if ($b==22 && $a==$checkinC && $cell!= "") {
                                $day21 = $cell;
                                // echo $day21."[".$a.",".$b."]";
                            }
                            if ($b==23 && $a==$checkinC && $cell!= "") {
                                $day22 = $cell;
                                // echo $day22."[".$a.",".$b."]";
                            }
                            if ($b==24 && $a==$checkinC && $cell!= "") {
                                $day23 = $cell;
                                // echo $day23."[".$a.",".$b."]";
                            }
                            if ($b==25 && $a==$checkinC && $cell!= "") {
                                $day24 = $cell;
                                // echo $day24."[".$a.",".$b."]";
                            }
                            if ($b==26 && $a==$checkinC && $cell!= "") {
                                $day25 = $cell;
                                // echo $day25."[".$a.",".$b."]";
                            }
                            if ($b==27 && $a==$checkinC && $cell!= "") {
                                $day26 = $cell;
                                // echo $day26."[".$a.",".$b."]";
                            }
                            if ($b==28 && $a==$checkinC && $cell!= "") {
                                $day27 = $cell;
                                // echo $day27."[".$a.",".$b."]";
                            }
                            if ($b==29 && $a==$checkinC && $cell!= "") {
                                $day28 = $cell;
                                // echo $day28."[".$a.",".$b."]";
                            }
                            if ($b==30 && $a==$checkinC && $cell!= "") {
                                $day29 = $cell;
                                // echo $day29."[".$a.",".$b."]";
                            }
                            if ($b==31 && $a==$checkinC && $cell!= "") {
                                $day30 = $cell;
                                // echo $day30."[".$a.",".$b."]";
                            }
                            if ($b==32 && $a==$checkinC && $cell!= "") {
                                $day31 = $cell;
                                // echo $day31."[".$a.",".$b."]";
                            }

                            if ($checkin!=''){
                                // echo $person.",".$a.",".$b;
                                // echo "ID: ".$id."[".$a.",".$b."]";
                                $arrayIn = array(
                                    'type' => $checkin
                                );
                            }
                            if ($day1 != '') {
                                $arrayIn = array(
                                    '1' => $day1
                                );
                            }
                            if ($day2 != '') {
                                $arrayIn = array(
                                    '2' => $day2
                                );
                            }
                            if ($day3 != '') {
                                $arrayIn = array(
                                    '3' => $day3
                                );
                            }
                            if ($day4 != '') {
                                $arrayIn = array(
                                    '4' => $day4
                                );
                            }
                            if ($day5 != '') {
                                $arrayIn = array(
                                    '5' => $day5
                                );
                            }
                            if ($day6 != '') {
                                $arrayIn = array(
                                    '6' => $day6
                                );
                            }
                            if ($day7 != '') {
                                $arrayIn = array(
                                    '7' => $day7
                                );
                            }
                            if ($day8 != '') {
                                $arrayIn = array(
                                    '8' => $day8
                                );
                            }
                            if ($day9 != '') {
                                $arrayIn = array(
                                    '9' => $day9
                                );
                            }
                            if ($day10 != '') {
                                $arrayIn = array(
                                    '10' => $day10
                                );
                            }
                            if ($day11 != '') {
                                $arrayIn = array(
                                    '11' => $day11
                                );
                            }
                            if ($day12 != '') {
                                $arrayIn = array(
                                    '12' => $day12
                                );
                            }
                            if ($day13 != '') {
                                $arrayIn = array(
                                    '13' => $day13
                                );
                            }
                            if ($day14 != '') {
                                $arrayIn = array(
                                    '14' => $day14
                                );
                            }
                            if ($day15 != '') {
                                $arrayIn = array(
                                    '15' => $day15
                                );
                            }
                            if ($day16 != '') {
                                $arrayIn = array(
                                    '16' => $day16
                                );
                            }
                            if ($day17 != '') {
                                $arrayIn = array(
                                    '17' => $day17
                                );
                            }
                            if ($day18 != '') {
                                $arrayIn = array(
                                    '18' => $day18
                                );
                            }
                            if ($day19 != '') {
                                $arrayIn = array(
                                    '19' => $day19
                                );
                            }
                            if ($day20 != '') {
                                $arrayIn = array(
                                    '20' => $day20
                                );
                            }
                            if ($day21 != '') {
                                $arrayIn = array(
                                    '21' => $day21
                                );
                            }
                            if ($day22 != '') {
                                $arrayIn = array(
                                    '22' => $day22
                                );
                            }
                            if ($day23 != '') {
                                $arrayIn = array(
                                    '23' => $day23
                                );
                            }
                            if ($day24 != '') {
                                $arrayIn = array(
                                    '24' => $day24
                                );
                            }
                            if ($day25 != '') {
                                $arrayIn = array(
                                    '25' => $day25
                                );
                            }
                            if ($day26 != '') {
                                $arrayIn = array(
                                    '26' => $day26
                                );
                            }
                            if ($day27 != '') {
                                $arrayIn = array(
                                    '27' => $day27
                                );
                            }
                            if ($day28 != '') {
                                $arrayIn = array(
                                    '28' => $day28
                                );
                            }
                            if ($day29 != '') {
                                $arrayIn = array(
                                    '29' => $day29
                                );
                            }
                            if ($day30 != '') {
                                $arrayIn = array(
                                    '30' => $day30
                                );
                            }
                            if ($day31 != '') {
                                $arrayIn = array(
                                    '31' => $day31
                                );
                            }
                            // print_r($arrayIn);
                        }
                        if ($a==$checkinC && $b==32) {
                            $checkinC = $checkinC+11;
                        }


// ******************************* If condition for get all check-out rows *******************************                 
                        if ($a == $checkoutC) {
                            // if ($b == 1 && $cell != "") {
                            //     $arrayIn['type'] = $cell;
                            // }
                            
                            // for ($i = 1; $i <= 32; $i++) {
                            //     if ($b == $i && $cell != "") {
                            //         $arrayIn[$i] = $cell;
                            //     }
                            // }
                            if($b==1 && $a==$checkoutC && $cell!= ""){
                                $checkout =  $cell;
                                // echo $checkout.",".$a.",".$b;
                            }
                            if ($b==2 && $a==$checkoutC && $cell!= "") {
                                $day1 = $cell;
                                // echo $day1."[".$a.",".$b."]";
                            }
                            if ($b==3 && $a==$checkoutC && $cell!= "") {
                                $day2 = $cell;
                                // echo $day2."[".$a.",".$b."]";
                            }
                            if ($b==4 && $a==$checkoutC && $cell!= "") {
                                $day3 = $cell;
                                // echo $day3."[".$a.",".$b."]";
                            }
                            if ($b==5 && $a==$checkoutC && $cell!= "") {
                                $day4 = $cell;
                                // echo $day4."[".$a.",".$b."]";
                            }
                            if ($b==6 && $a==$checkoutC && $cell!= "") {
                                $day5 = $cell;
                                // echo $day5."[".$a.",".$b."]";
                            }
                            if ($b==7 && $a==$checkoutC && $cell!= "") {
                                $day6 = $cell;
                                // echo $day6."[".$a.",".$b."]";
                            }
                            if ($b==8 && $a==$checkoutC && $cell!= "") {
                                $day7 = $cell;
                                // echo $day7."[".$a.",".$b."]";
                            }
                            if ($b==9 && $a==$checkoutC && $cell!= "") {
                                $day8 = $cell;
                                // echo $day8."[".$a.",".$b."]";
                            }
                            if ($b==10 && $a==$checkoutC && $cell!= "") {
                                $day9 = $cell;
                                // echo $day9."[".$a.",".$b."]";
                            }
                            if ($b==11 && $a==$checkoutC && $cell!= "") {
                                $day10 = $cell;
                                // echo $day10."[".$a.",".$b."]";
                            }
                            if ($b==12 && $a==$checkoutC && $cell!= "") {
                                $day11 = $cell;
                                // echo $day11."[".$a.",".$b."]";
                            }
                            if ($b==13 && $a==$checkoutC && $cell!= "") {
                                $day12 = $cell;
                                // echo $day12."[".$a.",".$b."]";
                            }
                            if ($b==14 && $a==$checkoutC && $cell!= "") {
                                $day13 = $cell;
                                // echo $day13."[".$a.",".$b."]";
                            }
                            if ($b==15 && $a==$checkoutC && $cell!= "") {
                                $day14 = $cell;
                                // echo $day14."[".$a.",".$b."]";
                            }
                            if ($b==16 && $a==$checkoutC && $cell!= "") {
                                $day15 = $cell;
                                // echo $day15."[".$a.",".$b."]";
                            }
                            if ($b==17 && $a==$checkoutC && $cell!= "") {
                                $day16 = $cell;
                                // echo $day16."[".$a.",".$b."]";
                            }
                            if ($b==18 && $a==$checkoutC && $cell!= "") {
                                $day17 = $cell;
                                // echo $day17."[".$a.",".$b."]";
                            }
                            if ($b==19 && $a==$checkoutC && $cell!= "") {
                                $day18 = $cell;
                                // echo $day18."[".$a.",".$b."]";
                            }
                            if ($b==20 && $a==$checkoutC && $cell!= "") {
                                $day19 = $cell;
                                // echo $day19."[".$a.",".$b."]";
                            }
                            if ($b==21 && $a==$checkoutC && $cell!= "") {
                                $day20 = $cell;
                                // echo $day20."[".$a.",".$b."]";
                            }
                            if ($b==22 && $a==$checkoutC && $cell!= "") {
                                $day21 = $cell;
                                // echo $day21."[".$a.",".$b."]";
                            }
                            if ($b==23 && $a==$checkoutC && $cell!= "") {
                                $day22 = $cell;
                                // echo $day22."[".$a.",".$b."]";
                            }
                            if ($b==24 && $a==$checkoutC && $cell!= "") {
                                $day23 = $cell;
                                // echo $day23."[".$a.",".$b."]";
                            }
                            if ($b==25 && $a==$checkoutC && $cell!= "") {
                                $day24 = $cell;
                                // echo $day24."[".$a.",".$b."]";
                            }
                            if ($b==26 && $a==$checkoutC && $cell!= "") {
                                $day25 = $cell;
                                // echo $day25."[".$a.",".$b."]";
                            }
                            if ($b==27 && $a==$checkoutC && $cell!= "") {
                                $day26 = $cell;
                                // echo $day26."[".$a.",".$b."]";
                            }
                            if ($b==28 && $a==$checkoutC && $cell!= "") {
                                $day27 = $cell;
                                // echo $day27."[".$a.",".$b."]";
                            }
                            if ($b==29 && $a==$checkoutC && $cell!= "") {
                                $day28 = $cell;
                                // echo $day28."[".$a.",".$b."]";
                            }
                            if ($b==30 && $a==$checkoutC && $cell!= "") {
                                $day29 = $cell;
                                // echo $day29."[".$a.",".$b."]";
                            }
                            if ($b==31 && $a==$checkoutC && $cell!= "") {
                                $day30 = $cell;
                                // echo $day30."[".$a.",".$b."]";
                            }
                            if ($b==32 && $a==$checkoutC && $cell!= "") {
                                $day31 = $cell;
                                // echo $day31."[".$a.",".$b."]";
                            }

                            if ($checkout!=''){
                                // echo $person.",".$a.",".$b;
                                // echo "ID: ".$id."[".$a.",".$b."]";
                                $arrayIn = array(
                                    'type' => $checkout
                                );
                            }
                            if ($day1 != '') {
                                $arrayIn = array(
                                    '1' => $day1
                                );
                            }
                            if ($day2 != '') {
                                $arrayIn = array(
                                    '2' => $day2
                                );
                            }
                            if ($day3 != '') {
                                $arrayIn = array(
                                    '3' => $day3
                                );
                            }
                            if ($day4 != '') {
                                $arrayIn = array(
                                    '4' => $day4
                                );
                            }
                            if ($day5 != '') {
                                $arrayIn = array(
                                    '5' => $day5
                                );
                            }
                            if ($day6 != '') {
                                $arrayIn = array(
                                    '6' => $day6
                                );
                            }
                            if ($day7 != '') {
                                $arrayIn = array(
                                    '7' => $day7
                                );
                            }
                            if ($day8 != '') {
                                $arrayIn = array(
                                    '8' => $day8
                                );
                            }
                            if ($day9 != '') {
                                $arrayIn = array(
                                    '9' => $day9
                                );
                            }
                            if ($day10 != '') {
                                $arrayIn = array(
                                    '10' => $day10
                                );
                            }
                            if ($day11 != '') {
                                $arrayIn = array(
                                    '11' => $day11
                                );
                            }
                            if ($day12 != '') {
                                $arrayIn = array(
                                    '12' => $day12
                                );
                            }
                            if ($day13 != '') {
                                $arrayIn = array(
                                    '13' => $day13
                                );
                            }
                            if ($day14 != '') {
                                $arrayIn = array(
                                    '14' => $day14
                                );
                            }
                            if ($day15 != '') {
                                $arrayIn = array(
                                    '15' => $day15
                                );
                            }
                            if ($day16 != '') {
                                $arrayIn = array(
                                    '16' => $day16
                                );
                            }
                            if ($day17 != '') {
                                $arrayIn = array(
                                    '17' => $day17
                                );
                            }
                            if ($day18 != '') {
                                $arrayIn = array(
                                    '18' => $day18
                                );
                            }
                            if ($day19 != '') {
                                $arrayIn = array(
                                    '19' => $day19
                                );
                            }
                            if ($day20 != '') {
                                $arrayIn = array(
                                    '20' => $day20
                                );
                            }
                            if ($day21 != '') {
                                $arrayIn = array(
                                    '21' => $day21
                                );
                            }
                            if ($day22 != '') {
                                $arrayIn = array(
                                    '22' => $day22
                                );
                            }
                            if ($day23 != '') {
                                $arrayIn = array(
                                    '23' => $day23
                                );
                            }
                            if ($day24 != '') {
                                $arrayIn = array(
                                    '24' => $day24
                                );
                            }
                            if ($day25 != '') {
                                $arrayIn = array(
                                    '25' => $day25
                                );
                            }
                            if ($day26 != '') {
                                $arrayIn = array(
                                    '26' => $day26
                                );
                            }
                            if ($day27 != '') {
                                $arrayIn = array(
                                    '27' => $day27
                                );
                            }
                            if ($day28 != '') {
                                $arrayIn = array(
                                    '28' => $day28
                                );
                            }
                            if ($day29 != '') {
                                $arrayIn = array(
                                    '29' => $day29
                                );
                            }
                            if ($day30 != '') {
                                $arrayIn = array(
                                    '30' => $day30
                                );
                            }
                            if ($day31 != '') {
                                $arrayIn = array(
                                    '31' => $day31
                                );
                            }
                            // print_r( $arrayIn);
                            
                        }
                        if ($a==$checkoutC && $b==32) {
                            $checkoutC = $checkoutC+11;
                        }
                        
                        

// ******************************* If condition for get all OT rows *******************************
                        if ($a==$otC) {
                            // if ($b == 1 && $cell != "") {
                            //     $arrayIn['type'] = $cell;
                            // }

                            // for ($i = 1; $i <=32; $i++) {
                            //     if ($b == $i && $cell != "") {
                            //         $arrayIn[$i] = $cell;
                            //     }
                            // }

                            if($b==1 && $a==$otC && $cell!= ""){
                                $ot =  $cell;
                                // echo $checkout.",".$a.",".$b;
                            }
                            if ($b==2 && $a==$otC && $cell!= "") {
                                $day1 = $cell;
                                // echo $day1."[".$a.",".$b."]";
                            }
                            if ($b==3 && $a==$otC && $cell!= "") {
                                $day2 = $cell;
                                // echo $day2."[".$a.",".$b."]";
                            }
                            if ($b==4 && $a==$otC && $cell!= "") {
                                $day3 = $cell;
                                // echo $day3."[".$a.",".$b."]";
                            }
                            if ($b==5 && $a==$otC && $cell!= "") {
                                $day4 = $cell;
                                // echo $day4."[".$a.",".$b."]";
                            }
                            if ($b==6 && $a==$otC && $cell!= "") {
                                $day5 = $cell;
                                // echo $day5."[".$a.",".$b."]";
                            }
                            if ($b==7 && $a==$otC && $cell!= "") {
                                $day6 = $cell;
                                // echo $day6."[".$a.",".$b."]";
                            }
                            if ($b==8 && $a==$otC && $cell!= "") {
                                $day7 = $cell;
                                // echo $day7."[".$a.",".$b."]";
                            }
                            if ($b==9 && $a==$otC && $cell!= "") {
                                $day8 = $cell;
                                // echo $day8."[".$a.",".$b."]";
                            }
                            if ($b==10 && $a==$otC && $cell!= "") {
                                $day9 = $cell;
                                // echo $day9."[".$a.",".$b."]";
                            }
                            if ($b==11 && $a==$otC && $cell!= "") {
                                $day10 = $cell;
                                // echo $day10."[".$a.",".$b."]";
                            }
                            if ($b==12 && $a==$otC && $cell!= "") {
                                $day11 = $cell;
                                // echo $day11."[".$a.",".$b."]";
                            }
                            if ($b==13 && $a==$otC && $cell!= "") {
                                $day12 = $cell;
                                // echo $day12."[".$a.",".$b."]";
                            }
                            if ($b==14 && $a==$otC && $cell!= "") {
                                $day13 = $cell;
                                // echo $day13."[".$a.",".$b."]";
                            }
                            if ($b==15 && $a==$otC && $cell!= "") {
                                $day14 = $cell;
                                // echo $day14."[".$a.",".$b."]";
                            }
                            if ($b==16 && $a==$otC && $cell!= "") {
                                $day15 = $cell;
                                // echo $day15."[".$a.",".$b."]";
                            }
                            if ($b==17 && $a==$otC && $cell!= "") {
                                $day16 = $cell;
                                // echo $day16."[".$a.",".$b."]";
                            }
                            if ($b==18 && $a==$otC && $cell!= "") {
                                $day17 = $cell;
                                // echo $day17."[".$a.",".$b."]";
                            }
                            if ($b==19 && $a==$otC && $cell!= "") {
                                $day18 = $cell;
                                // echo $day18."[".$a.",".$b."]";
                            }
                            if ($b==20 && $a==$otC && $cell!= "") {
                                $day19 = $cell;
                                // echo $day19."[".$a.",".$b."]";
                            }
                            if ($b==21 && $a==$otC && $cell!= "") {
                                $day20 = $cell;
                                // echo $day20."[".$a.",".$b."]";
                            }
                            if ($b==22 && $a==$otC && $cell!= "") {
                                $day21 = $cell;
                                // echo $day21."[".$a.",".$b."]";
                            }
                            if ($b==23 && $a==$otC && $cell!= "") {
                                $day22 = $cell;
                                // echo $day22."[".$a.",".$b."]";
                            }
                            if ($b==24 && $a==$otC && $cell!= "") {
                                $day23 = $cell;
                                // echo $day23."[".$a.",".$b."]";
                            }
                            if ($b==25 && $a==$otC && $cell!= "") {
                                $day24 = $cell;
                                // echo $day24."[".$a.",".$b."]";
                            }
                            if ($b==26 && $a==$otC && $cell!= "") {
                                $day25 = $cell;
                                // echo $day25."[".$a.",".$b."]";
                            }
                            if ($b==27 && $a==$otC && $cell!= "") {
                                $day26 = $cell;
                                // echo $day26."[".$a.",".$b."]";
                            }
                            if ($b==28 && $a==$otC && $cell!= "") {
                                $day27 = $cell;
                                // echo $day27."[".$a.",".$b."]";
                            }
                            if ($b==29 && $a==$otC && $cell!= "") {
                                $day28 = $cell;
                                // echo $day28."[".$a.",".$b."]";
                            }
                            if ($b==30 && $a==$otC && $cell!= "") {
                                $day29 = $cell;
                                // echo $day29."[".$a.",".$b."]";
                            }
                            if ($b==31 && $a==$otC && $cell!= "") {
                                $day30 = $cell;
                                // echo $day30."[".$a.",".$b."]";
                            }
                            if ($b==32 && $a==$otC && $cell!= "") {
                                $day31 = $cell;
                                // echo $day31."[".$a.",".$b."]";
                            }

                            if ($ot!=''){
                                // echo $person.",".$a.",".$b;
                                // echo "ID: ".$id."[".$a.",".$b."]";
                                $arrayIn = array(
                                    'type' => $ot
                                );
                            }
                            if ($day1 != '') {
                                $arrayIn = array(
                                    '1' => $day1
                                );
                            }
                            if ($day2 != '') {
                                $arrayIn = array(
                                    '2' => $day2
                                );
                            }
                            if ($day3 != '') {
                                $arrayIn = array(
                                    '3' => $day3
                                );
                            }
                            if ($day4 != '') {
                                $arrayIn = array(
                                    '4' => $day4
                                );
                            }
                            if ($day5 != '') {
                                $arrayIn = array(
                                    '5' => $day5
                                );
                            }
                            if ($day6 != '') {
                                $arrayIn = array(
                                    '6' => $day6
                                );
                            }
                            if ($day7 != '') {
                                $arrayIn = array(
                                    '7' => $day7
                                );
                            }
                            if ($day8 != '') {
                                $arrayIn = array(
                                    '8' => $day8
                                );
                            }
                            if ($day9 != '') {
                                $arrayIn = array(
                                    '9' => $day9
                                );
                            }
                            if ($day10 != '') {
                                $arrayIn = array(
                                    '10' => $day10
                                );
                            }
                            if ($day11 != '') {
                                $arrayIn = array(
                                    '11' => $day11
                                );
                            }
                            if ($day12 != '') {
                                $arrayIn = array(
                                    '12' => $day12
                                );
                            }
                            if ($day13 != '') {
                                $arrayIn = array(
                                    '13' => $day13
                                );
                            }
                            if ($day14 != '') {
                                $arrayIn = array(
                                    '14' => $day14
                                );
                            }
                            if ($day15 != '') {
                                $arrayIn = array(
                                    '15' => $day15
                                );
                            }
                            if ($day16 != '') {
                                $arrayIn = array(
                                    '16' => $day16
                                );
                            }
                            if ($day17 != '') {
                                $arrayIn = array(
                                    '17' => $day17
                                );
                            }
                            if ($day18 != '') {
                                $arrayIn = array(
                                    '18' => $day18
                                );
                            }
                            if ($day19 != '') {
                                $arrayIn = array(
                                    '19' => $day19
                                );
                            }
                            if ($day20 != '') {
                                $arrayIn = array(
                                    '20' => $day20
                                );
                            }
                            if ($day21 != '') {
                                $arrayIn = array(
                                    '21' => $day21
                                );
                            }
                            if ($day22 != '') {
                                $arrayIn = array(
                                    '22' => $day22
                                );
                            }
                            if ($day23 != '') {
                                $arrayIn = array(
                                    '23' => $day23
                                );
                            }
                            if ($day24 != '') {
                                $arrayIn = array(
                                    '24' => $day24
                                );
                            }
                            if ($day25 != '') {
                                $arrayIn = array(
                                    '25' => $day25
                                );
                            }
                            if ($day26 != '') {
                                $arrayIn = array(
                                    '26' => $day26
                                );
                            }
                            if ($day27 != '') {
                                $arrayIn = array(
                                    '27' => $day27
                                );
                            }
                            if ($day28 != '') {
                                $arrayIn = array(
                                    '28' => $day28
                                );
                            }
                            if ($day29 != '') {
                                $arrayIn = array(
                                    '29' => $day29
                                );
                            }
                            if ($day30 != '') {
                                $arrayIn = array(
                                    '30' => $day30
                                );
                            }
                            if ($day31 != '') {
                                $arrayIn = array(
                                    '31' => $day31
                                );
                            }
                            // print_r( $arrayIn);
                        }
                        if ($a==$otC && $b==32) {
                            $otC = $otC+11;
                        }


// ******************************* If condition for get all Late rows *******************************
                        if ($a==$lateC) {
                            // if ($b == 1 && $cell != "") {
                            //     $arrayIn['type'] = $cell;
                            // }
                            
                            // for ($i = 1; $i <= 32; $i++) {
                            //     if ($b == $i && $cell != "") {
                            //         $arrayIn[$i] = $cell;
                            //     }
                            // }

                            if($b==1 && $a==$lateC && $cell!= ""){
                                $late =  $cell;
                                // echo $checkout.",".$a.",".$b;
                            }
                            if ($b==2 && $a==$lateC && $cell!= "") {
                                $day1 = $cell;
                                // echo $day1."[".$a.",".$b."]";
                            }
                            if ($b==3 && $a==$lateC && $cell!= "") {
                                $day2 = $cell;
                                // echo $day2."[".$a.",".$b."]";
                            }
                            if ($b==4 && $a==$lateC && $cell!= "") {
                                $day3 = $cell;
                                // echo $day3."[".$a.",".$b."]";
                            }
                            if ($b==5 && $a==$lateC && $cell!= "") {
                                $day4 = $cell;
                                // echo $day4."[".$a.",".$b."]";
                            }
                            if ($b==6 && $a==$lateC && $cell!= "") {
                                $day5 = $cell;
                                // echo $day5."[".$a.",".$b."]";
                            }
                            if ($b==7 && $a==$lateC && $cell!= "") {
                                $day6 = $cell;
                                // echo $day6."[".$a.",".$b."]";
                            }
                            if ($b==8 && $a==$lateC && $cell!= "") {
                                $day7 = $cell;
                                // echo $day7."[".$a.",".$b."]";
                            }
                            if ($b==9 && $a==$lateC && $cell!= "") {
                                $day8 = $cell;
                                // echo $day8."[".$a.",".$b."]";
                            }
                            if ($b==10 && $a==$lateC && $cell!= "") {
                                $day9 = $cell;
                                // echo $day9."[".$a.",".$b."]";
                            }
                            if ($b==11 && $a==$lateC && $cell!= "") {
                                $day10 = $cell;
                                // echo $day10."[".$a.",".$b."]";
                            }
                            if ($b==12 && $a==$lateC && $cell!= "") {
                                $day11 = $cell;
                                // echo $day11."[".$a.",".$b."]";
                            }
                            if ($b==13 && $a==$lateC && $cell!= "") {
                                $day12 = $cell;
                                // echo $day12."[".$a.",".$b."]";
                            }
                            if ($b==14 && $a==$lateC && $cell!= "") {
                                $day13 = $cell;
                                // echo $day13."[".$a.",".$b."]";
                            }
                            if ($b==15 && $a==$lateC && $cell!= "") {
                                $day14 = $cell;
                                // echo $day14."[".$a.",".$b."]";
                            }
                            if ($b==16 && $a==$lateC && $cell!= "") {
                                $day15 = $cell;
                                // echo $day15."[".$a.",".$b."]";
                            }
                            if ($b==17 && $a==$lateC && $cell!= "") {
                                $day16 = $cell;
                                // echo $day16."[".$a.",".$b."]";
                            }
                            if ($b==18 && $a==$lateC && $cell!= "") {
                                $day17 = $cell;
                                // echo $day17."[".$a.",".$b."]";
                            }
                            if ($b==19 && $a==$lateC && $cell!= "") {
                                $day18 = $cell;
                                // echo $day18."[".$a.",".$b."]";
                            }
                            if ($b==20 && $a==$lateC && $cell!= "") {
                                $day19 = $cell;
                                // echo $day19."[".$a.",".$b."]";
                            }
                            if ($b==21 && $a==$lateC && $cell!= "") {
                                $day20 = $cell;
                                // echo $day20."[".$a.",".$b."]";
                            }
                            if ($b==22 && $a==$lateC && $cell!= "") {
                                $day21 = $cell;
                                // echo $day21."[".$a.",".$b."]";
                            }
                            if ($b==23 && $a==$lateC && $cell!= "") {
                                $day22 = $cell;
                                // echo $day22."[".$a.",".$b."]";
                            }
                            if ($b==24 && $a==$lateC && $cell!= "") {
                                $day23 = $cell;
                                // echo $day23."[".$a.",".$b."]";
                            }
                            if ($b==25 && $a==$lateC && $cell!= "") {
                                $day24 = $cell;
                                // echo $day24."[".$a.",".$b."]";
                            }
                            if ($b==26 && $a==$lateC && $cell!= "") {
                                $day25 = $cell;
                                // echo $day25."[".$a.",".$b."]";
                            }
                            if ($b==27 && $a==$lateC && $cell!= "") {
                                $day26 = $cell;
                                // echo $day26."[".$a.",".$b."]";
                            }
                            if ($b==28 && $a==$lateC && $cell!= "") {
                                $day27 = $cell;
                                // echo $day27."[".$a.",".$b."]";
                            }
                            if ($b==29 && $a==$lateC && $cell!= "") {
                                $day28 = $cell;
                                // echo $day28."[".$a.",".$b."]";
                            }
                            if ($b==30 && $a==$lateC && $cell!= "") {
                                $day29 = $cell;
                                // echo $day29."[".$a.",".$b."]";
                            }
                            if ($b==31 && $a==$lateC && $cell!= "") {
                                $day30 = $cell;
                                // echo $day30."[".$a.",".$b."]";
                            }
                            if ($b==32 && $a==$lateC && $cell!= "") {
                                $day31 = $cell;
                                // echo $day31."[".$a.",".$b."]";
                            }

                            if ($late!=''){
                                // echo $person.",".$a.",".$b;
                                // echo "ID: ".$id."[".$a.",".$b."]";
                                $arrayIn = array(
                                    'type' => $late
                                );
                            }
                            if ($day1 != '') {
                                $arrayIn = array(
                                    '1' => $day1
                                );
                            }
                            if ($day2 != '') {
                                $arrayIn = array(
                                    '2' => $day2
                                );
                            }
                            if ($day3 != '') {
                                $arrayIn = array(
                                    '3' => $day3
                                );
                            }
                            if ($day4 != '') {
                                $arrayIn = array(
                                    '4' => $day4
                                );
                            }
                            if ($day5 != '') {
                                $arrayIn = array(
                                    '5' => $day5
                                );
                            }
                            if ($day6 != '') {
                                $arrayIn = array(
                                    '6' => $day6
                                );
                            }
                            if ($day7 != '') {
                                $arrayIn = array(
                                    '7' => $day7
                                );
                            }
                            if ($day8 != '') {
                                $arrayIn = array(
                                    '8' => $day8
                                );
                            }
                            if ($day9 != '') {
                                $arrayIn = array(
                                    '9' => $day9
                                );
                            }
                            if ($day10 != '') {
                                $arrayIn = array(
                                    '10' => $day10
                                );
                            }
                            if ($day11 != '') {
                                $arrayIn = array(
                                    '11' => $day11
                                );
                            }
                            if ($day12 != '') {
                                $arrayIn = array(
                                    '12' => $day12
                                );
                            }
                            if ($day13 != '') {
                                $arrayIn = array(
                                    '13' => $day13
                                );
                            }
                            if ($day14 != '') {
                                $arrayIn = array(
                                    '14' => $day14
                                );
                            }
                            if ($day15 != '') {
                                $arrayIn = array(
                                    '15' => $day15
                                );
                            }
                            if ($day16 != '') {
                                $arrayIn = array(
                                    '16' => $day16
                                );
                            }
                            if ($day17 != '') {
                                $arrayIn = array(
                                    '17' => $day17
                                );
                            }
                            if ($day18 != '') {
                                $arrayIn = array(
                                    '18' => $day18
                                );
                            }
                            if ($day19 != '') {
                                $arrayIn = array(
                                    '19' => $day19
                                );
                            }
                            if ($day20 != '') {
                                $arrayIn = array(
                                    '20' => $day20
                                );
                            }
                            if ($day21 != '') {
                                $arrayIn = array(
                                    '21' => $day21
                                );
                            }
                            if ($day22 != '') {
                                $arrayIn = array(
                                    '22' => $day22
                                );
                            }
                            if ($day23 != '') {
                                $arrayIn = array(
                                    '23' => $day23
                                );
                            }
                            if ($day24 != '') {
                                $arrayIn = array(
                                    '24' => $day24
                                );
                            }
                            if ($day25 != '') {
                                $arrayIn = array(
                                    '25' => $day25
                                );
                            }
                            if ($day26 != '') {
                                $arrayIn = array(
                                    '26' => $day26
                                );
                            }
                            if ($day27 != '') {
                                $arrayIn = array(
                                    '27' => $day27
                                );
                            }
                            if ($day28 != '') {
                                $arrayIn = array(
                                    '28' => $day28
                                );
                            }
                            if ($day29 != '') {
                                $arrayIn = array(
                                    '29' => $day29
                                );
                            }
                            if ($day30 != '') {
                                $arrayIn = array(
                                    '30' => $day30
                                );
                            }
                            if ($day31 != '') {
                                $arrayIn = array(
                                    '31' => $day31
                                );
                            }
                            // print_r( $arrayIn);
                        }
                        if ($a==$lateC && $b==32) {
                            $lateC = $lateC+11;
                        }


// ******************************* If condition for get all Early Leave rows *******************************
                        if ($a==$earlyLC) {
                            // if ($b == 1 && $cell != "") {
                            //     $arrayIn['type'] = $cell;
                            // }
                            
                            // for ($i = 1; $i <= 32; $i++) {
                            //     if ($b == $i && $cell != "") {
                            //         $arrayIn[$i] = $cell;
                            //     }
                            // }

                            if($b==1 && $a==$earlyLC && $cell!= ""){
                                $earlyL =  $cell;
                                // echo $checkin.",".$a.",".$b;
                            }
                            if ($b==2 && $a==$earlyLC && $cell!= "") {
                                $day1 = $cell;
                                // echo $day1."[".$a.",".$b."]";
                            }
                            if ($b==3 && $a==$earlyLC && $cell!= "") {
                                $day2 = $cell;
                                // echo $day2."[".$a.",".$b."]";
                            }
                            if ($b==4 && $a==$earlyLC && $cell!= "") {
                                $day3 = $cell;
                                // echo $day3."[".$a.",".$b."]";
                            }
                            if ($b==5 && $a==$earlyLC && $cell!= "") {
                                $day4 = $cell;
                                // echo $day4."[".$a.",".$b."]";
                            }
                            if ($b==6 && $a==$earlyLC && $cell!= "") {
                                $day5 = $cell;
                                // echo $day5."[".$a.",".$b."]";
                            }
                            if ($b==7 && $a==$earlyLC && $cell!= "") {
                                $day6 = $cell;
                                // echo $day6."[".$a.",".$b."]";
                            }
                            if ($b==8 && $a==$earlyLC && $cell!= "") {
                                $day7 = $cell;
                                // echo $day7."[".$a.",".$b."]";
                            }
                            if ($b==9 && $a==$earlyLC && $cell!= "") {
                                $day8 = $cell;
                                // echo $day8."[".$a.",".$b."]";
                            }
                            if ($b==10 && $a==$earlyLC && $cell!= "") {
                                $day9 = $cell;
                                // echo $day9."[".$a.",".$b."]";
                            }
                            if ($b==11 && $a==$earlyLC && $cell!= "") {
                                $day10 = $cell;
                                // echo $day10."[".$a.",".$b."]";
                            }
                            if ($b==12 && $a==$earlyLC && $cell!= "") {
                                $day11 = $cell;
                                // echo $day11."[".$a.",".$b."]";
                            }
                            if ($b==13 && $a==$earlyLC && $cell!= "") {
                                $day12 = $cell;
                                // echo $day12."[".$a.",".$b."]";
                            }
                            if ($b==14 && $a==$earlyLC && $cell!= "") {
                                $day13 = $cell;
                                // echo $day13."[".$a.",".$b."]";
                            }
                            if ($b==15 && $a==$earlyLC && $cell!= "") {
                                $day14 = $cell;
                                // echo $day14."[".$a.",".$b."]";
                            }
                            if ($b==16 && $a==$earlyLC && $cell!= "") {
                                $day15 = $cell;
                                // echo $day15."[".$a.",".$b."]";
                            }
                            if ($b==17 && $a==$earlyLC && $cell!= "") {
                                $day16 = $cell;
                                // echo $day16."[".$a.",".$b."]";
                            }
                            if ($b==18 && $a==$earlyLC && $cell!= "") {
                                $day17 = $cell;
                                // echo $day17."[".$a.",".$b."]";
                            }
                            if ($b==19 && $a==$earlyLC && $cell!= "") {
                                $day18 = $cell;
                                // echo $day18."[".$a.",".$b."]";
                            }
                            if ($b==20 && $a==$earlyLC && $cell!= "") {
                                $day19 = $cell;
                                // echo $day19."[".$a.",".$b."]";
                            }
                            if ($b==21 && $a==$earlyLC && $cell!= "") {
                                $day20 = $cell;
                                // echo $day20."[".$a.",".$b."]";
                            }
                            if ($b==22 && $a==$earlyLC && $cell!= "") {
                                $day21 = $cell;
                                // echo $day21."[".$a.",".$b."]";
                            }
                            if ($b==23 && $a==$earlyLC && $cell!= "") {
                                $day22 = $cell;
                                // echo $day22."[".$a.",".$b."]";
                            }
                            if ($b==24 && $a==$earlyLC && $cell!= "") {
                                $day23 = $cell;
                                // echo $day23."[".$a.",".$b."]";
                            }
                            if ($b==25 && $a==$earlyLC && $cell!= "") {
                                $day24 = $cell;
                                // echo $day24."[".$a.",".$b."]";
                            }
                            if ($b==26 && $a==$earlyLC && $cell!= "") {
                                $day25 = $cell;
                                // echo $day25."[".$a.",".$b."]";
                            }
                            if ($b==27 && $a==$earlyLC && $cell!= "") {
                                $day26 = $cell;
                                // echo $day26."[".$a.",".$b."]";
                            }
                            if ($b==28 && $a==$earlyLC && $cell!= "") {
                                $day27 = $cell;
                                // echo $day27."[".$a.",".$b."]";
                            }
                            if ($b==29 && $a==$earlyLC && $cell!= "") {
                                $day28 = $cell;
                                // echo $day28."[".$a.",".$b."]";
                            }
                            if ($b==30 && $a==$earlyLC && $cell!= "") {
                                $day29 = $cell;
                                // echo $day29."[".$a.",".$b."]";
                            }
                            if ($b==31 && $a==$earlyLC && $cell!= "") {
                                $day30 = $cell;
                                // echo $day30."[".$a.",".$b."]";
                            }
                            if ($b==32 && $a==$earlyLC && $cell!= "") {
                                $day31 = $cell;
                                // echo $day31."[".$a.",".$b."]";
                            }

                            if ($earlyL!=''){
                                // echo $person.",".$a.",".$b;
                                // echo "ID: ".$id."[".$a.",".$b."]";
                                $arrayIn = array(
                                    'type' => $earlyL
                                );
                            }
                            if ($day1 != '') {
                                $arrayIn = array(
                                    '1' => $day1
                                );
                            }
                            if ($day2 != '') {
                                $arrayIn = array(
                                    '2' => $day2
                                );
                            }
                            if ($day3 != '') {
                                $arrayIn = array(
                                    '3' => $day3
                                );
                            }
                            if ($day4 != '') {
                                $arrayIn = array(
                                    '4' => $day4
                                );
                            }
                            if ($day5 != '') {
                                $arrayIn = array(
                                    '5' => $day5
                                );
                            }
                            if ($day6 != '') {
                                $arrayIn = array(
                                    '6' => $day6
                                );
                            }
                            if ($day7 != '') {
                                $arrayIn = array(
                                    '7' => $day7
                                );
                            }
                            if ($day8 != '') {
                                $arrayIn = array(
                                    '8' => $day8
                                );
                            }
                            if ($day9 != '') {
                                $arrayIn = array(
                                    '9' => $day9
                                );
                            }
                            if ($day10 != '') {
                                $arrayIn = array(
                                    '10' => $day10
                                );
                            }
                            if ($day11 != '') {
                                $arrayIn = array(
                                    '11' => $day11
                                );
                            }
                            if ($day12 != '') {
                                $arrayIn = array(
                                    '12' => $day12
                                );
                            }
                            if ($day13 != '') {
                                $arrayIn = array(
                                    '13' => $day13
                                );
                            }
                            if ($day14 != '') {
                                $arrayIn = array(
                                    '14' => $day14
                                );
                            }
                            if ($day15 != '') {
                                $arrayIn = array(
                                    '15' => $day15
                                );
                            }
                            if ($day16 != '') {
                                $arrayIn = array(
                                    '16' => $day16
                                );
                            }
                            if ($day17 != '') {
                                $arrayIn = array(
                                    '17' => $day17
                                );
                            }
                            if ($day18 != '') {
                                $arrayIn = array(
                                    '18' => $day18
                                );
                            }
                            if ($day19 != '') {
                                $arrayIn = array(
                                    '19' => $day19
                                );
                            }
                            if ($day20 != '') {
                                $arrayIn = array(
                                    '20' => $day20
                                );
                            }
                            if ($day21 != '') {
                                $arrayIn = array(
                                    '21' => $day21
                                );
                            }
                            if ($day22 != '') {
                                $arrayIn = array(
                                    '22' => $day22
                                );
                            }
                            if ($day23 != '') {
                                $arrayIn = array(
                                    '23' => $day23
                                );
                            }
                            if ($day24 != '') {
                                $arrayIn = array(
                                    '24' => $day24
                                );
                            }
                            if ($day25 != '') {
                                $arrayIn = array(
                                    '25' => $day25
                                );
                            }
                            if ($day26 != '') {
                                $arrayIn = array(
                                    '26' => $day26
                                );
                            }
                            if ($day27 != '') {
                                $arrayIn = array(
                                    '27' => $day27
                                );
                            }
                            if ($day28 != '') {
                                $arrayIn = array(
                                    '28' => $day28
                                );
                            }
                            if ($day29 != '') {
                                $arrayIn = array(
                                    '29' => $day29
                                );
                            }
                            if ($day30 != '') {
                                $arrayIn = array(
                                    '30' => $day30
                                );
                            }
                            if ($day31 != '') {
                                $arrayIn = array(
                                    '31' => $day31
                                );
                            }
                            // print_r( $arrayIn);
                        }
                        if ($a==$earlyLC && $b==32) {
                            $earlyLC = $earlyLC+11;
                        }


// ******************************* If condition for get all Attended rows *******************************
                        if ($a==$attendedC) {
                            // if ($b == 1 && $cell != "") {
                            //     $arrayIn['type'] = $cell;
                            // }
                            
                            // for ($i = 1; $i <= 32; $i++) {
                            //     if ($b == $i && $cell != "") {
                            //         $arrayIn[$i] = $cell;
                            //     }
                            // }

                            if($b==1 && $a==$attendedC && $cell!= ""){
                                $attended =  $cell;
                                // echo $checkin.",".$a.",".$b;
                            }
                            if ($b==2 && $a==$attendedC && $cell!= "") {
                                $day1 = $cell;
                                // echo $day1."[".$a.",".$b."]";
                            }
                            if ($b==3 && $a==$attendedC && $cell!= "") {
                                $day2 = $cell;
                                // echo $day2."[".$a.",".$b."]";
                            }
                            if ($b==4 && $a==$attendedC && $cell!= "") {
                                $day3 = $cell;
                                // echo $day3."[".$a.",".$b."]";
                            }
                            if ($b==5 && $a==$attendedC && $cell!= "") {
                                $day4 = $cell;
                                // echo $day4."[".$a.",".$b."]";
                            }
                            if ($b==6 && $a==$attendedC && $cell!= "") {
                                $day5 = $cell;
                                // echo $day5."[".$a.",".$b."]";
                            }
                            if ($b==7 && $a==$attendedC && $cell!= "") {
                                $day6 = $cell;
                                // echo $day6."[".$a.",".$b."]";
                            }
                            if ($b==8 && $a==$attendedC && $cell!= "") {
                                $day7 = $cell;
                                // echo $day7."[".$a.",".$b."]";
                            }
                            if ($b==9 && $a==$attendedC && $cell!= "") {
                                $day8 = $cell;
                                // echo $day8."[".$a.",".$b."]";
                            }
                            if ($b==10 && $a==$attendedC && $cell!= "") {
                                $day9 = $cell;
                                // echo $day9."[".$a.",".$b."]";
                            }
                            if ($b==11 && $a==$attendedC && $cell!= "") {
                                $day10 = $cell;
                                // echo $day10."[".$a.",".$b."]";
                            }
                            if ($b==12 && $a==$attendedC && $cell!= "") {
                                $day11 = $cell;
                                // echo $day11."[".$a.",".$b."]";
                            }
                            if ($b==13 && $a==$attendedC && $cell!= "") {
                                $day12 = $cell;
                                // echo $day12."[".$a.",".$b."]";
                            }
                            if ($b==14 && $a==$attendedC && $cell!= "") {
                                $day13 = $cell;
                                // echo $day13."[".$a.",".$b."]";
                            }
                            if ($b==15 && $a==$attendedC && $cell!= "") {
                                $day14 = $cell;
                                // echo $day14."[".$a.",".$b."]";
                            }
                            if ($b==16 && $a==$attendedC && $cell!= "") {
                                $day15 = $cell;
                                // echo $day15."[".$a.",".$b."]";
                            }
                            if ($b==17 && $a==$attendedC && $cell!= "") {
                                $day16 = $cell;
                                // echo $day16."[".$a.",".$b."]";
                            }
                            if ($b==18 && $a==$attendedC && $cell!= "") {
                                $day17 = $cell;
                                // echo $day17."[".$a.",".$b."]";
                            }
                            if ($b==19 && $a==$attendedC && $cell!= "") {
                                $day18 = $cell;
                                // echo $day18."[".$a.",".$b."]";
                            }
                            if ($b==20 && $a==$attendedC && $cell!= "") {
                                $day19 = $cell;
                                // echo $day19."[".$a.",".$b."]";
                            }
                            if ($b==21 && $a==$attendedC && $cell!= "") {
                                $day20 = $cell;
                                // echo $day20."[".$a.",".$b."]";
                            }
                            if ($b==22 && $a==$attendedC && $cell!= "") {
                                $day21 = $cell;
                                // echo $day21."[".$a.",".$b."]";
                            }
                            if ($b==23 && $a==$attendedC && $cell!= "") {
                                $day22 = $cell;
                                // echo $day22."[".$a.",".$b."]";
                            }
                            if ($b==24 && $a==$attendedC && $cell!= "") {
                                $day23 = $cell;
                                // echo $day23."[".$a.",".$b."]";
                            }
                            if ($b==25 && $a==$attendedC && $cell!= "") {
                                $day24 = $cell;
                                // echo $day24."[".$a.",".$b."]";
                            }
                            if ($b==26 && $a==$attendedC && $cell!= "") {
                                $day25 = $cell;
                                // echo $day25."[".$a.",".$b."]";
                            }
                            if ($b==27 && $a==$attendedC && $cell!= "") {
                                $day26 = $cell;
                                // echo $day26."[".$a.",".$b."]";
                            }
                            if ($b==28 && $a==$attendedC && $cell!= "") {
                                $day27 = $cell;
                                // echo $day27."[".$a.",".$b."]";
                            }
                            if ($b==29 && $a==$attendedC && $cell!= "") {
                                $day28 = $cell;
                                // echo $day28."[".$a.",".$b."]";
                            }
                            if ($b==30 && $a==$attendedC && $cell!= "") {
                                $day29 = $cell;
                                // echo $day29."[".$a.",".$b."]";
                            }
                            if ($b==31 && $a==$attendedC && $cell!= "") {
                                $day30 = $cell;
                                // echo $day30."[".$a.",".$b."]";
                            }
                            if ($b==32 && $a==$attendedC && $cell!= "") {
                                $day31 = $cell;
                                // echo $day31."[".$a.",".$b."]";
                            }

                            if ($attended!=''){
                                // echo $person.",".$a.",".$b;
                                // echo "ID: ".$id."[".$a.",".$b."]";
                                $arrayIn = array(
                                    'type' => $attended
                                );
                            }
                            if ($day1 != '') {
                                $arrayIn = array(
                                    '1' => $day1
                                );
                            }
                            if ($day2 != '') {
                                $arrayIn = array(
                                    '2' => $day2
                                );
                            }
                            if ($day3 != '') {
                                $arrayIn = array(
                                    '3' => $day3
                                );
                            }
                            if ($day4 != '') {
                                $arrayIn = array(
                                    '4' => $day4
                                );
                            }
                            if ($day5 != '') {
                                $arrayIn = array(
                                    '5' => $day5
                                );
                            }
                            if ($day6 != '') {
                                $arrayIn = array(
                                    '6' => $day6
                                );
                            }
                            if ($day7 != '') {
                                $arrayIn = array(
                                    '7' => $day7
                                );
                            }
                            if ($day8 != '') {
                                $arrayIn = array(
                                    '8' => $day8
                                );
                            }
                            if ($day9 != '') {
                                $arrayIn = array(
                                    '9' => $day9
                                );
                            }
                            if ($day10 != '') {
                                $arrayIn = array(
                                    '10' => $day10
                                );
                            }
                            if ($day11 != '') {
                                $arrayIn = array(
                                    '11' => $day11
                                );
                            }
                            if ($day12 != '') {
                                $arrayIn = array(
                                    '12' => $day12
                                );
                            }
                            if ($day13 != '') {
                                $arrayIn = array(
                                    '13' => $day13
                                );
                            }
                            if ($day14 != '') {
                                $arrayIn = array(
                                    '14' => $day14
                                );
                            }
                            if ($day15 != '') {
                                $arrayIn = array(
                                    '15' => $day15
                                );
                            }
                            if ($day16 != '') {
                                $arrayIn = array(
                                    '16' => $day16
                                );
                            }
                            if ($day17 != '') {
                                $arrayIn = array(
                                    '17' => $day17
                                );
                            }
                            if ($day18 != '') {
                                $arrayIn = array(
                                    '18' => $day18
                                );
                            }
                            if ($day19 != '') {
                                $arrayIn = array(
                                    '19' => $day19
                                );
                            }
                            if ($day20 != '') {
                                $arrayIn = array(
                                    '20' => $day20
                                );
                            }
                            if ($day21 != '') {
                                $arrayIn = array(
                                    '21' => $day21
                                );
                            }
                            if ($day22 != '') {
                                $arrayIn = array(
                                    '22' => $day22
                                );
                            }
                            if ($day23 != '') {
                                $arrayIn = array(
                                    '23' => $day23
                                );
                            }
                            if ($day24 != '') {
                                $arrayIn = array(
                                    '24' => $day24
                                );
                            }
                            if ($day25 != '') {
                                $arrayIn = array(
                                    '25' => $day25
                                );
                            }
                            if ($day26 != '') {
                                $arrayIn = array(
                                    '26' => $day26
                                );
                            }
                            if ($day27 != '') {
                                $arrayIn = array(
                                    '27' => $day27
                                );
                            }
                            if ($day28 != '') {
                                $arrayIn = array(
                                    '28' => $day28
                                );
                            }
                            if ($day29 != '') {
                                $arrayIn = array(
                                    '29' => $day29
                                );
                            }
                            if ($day30 != '') {
                                $arrayIn = array(
                                    '30' => $day30
                                );
                            }
                            if ($day31 != '') {
                                $arrayIn = array(
                                    '31' => $day31
                                );
                            }
                            // print_r( $arrayIn);
                        }
                        if ($a==$attendedC && $b==32) {
                            $attendedC = $attendedC+11;
                        }


// ******************************* If condition for get all Break rows *******************************
                        if ($a==$breakC) {
                            // if ($b == 1 && $cell != "") {
                            //     $arrayIn['type'] = $cell;
                            // }
                            
                            // for ($i = 1; $i <= 32; $i++) {
                            //     if ($b == $i && $cell != "") {
                            //         $arrayIn[$i] = $cell;
                            //     }
                            // }

                            if($b==1 && $a==$breakC && $cell!= ""){
                                $break =  $cell;
                                // echo $checkin.",".$a.",".$b;
                            }
                            if ($b==2 && $a==$breakC && $cell!= "") {
                                $day1 = $cell;
                                // echo $day1."[".$a.",".$b."]";
                            }
                            if ($b==3 && $a==$breakC && $cell!= "") {
                                $day2 = $cell;
                                // echo $day2."[".$a.",".$b."]";
                            }
                            if ($b==4 && $a==$breakC && $cell!= "") {
                                $day3 = $cell;
                                // echo $day3."[".$a.",".$b."]";
                            }
                            if ($b==5 && $a==$breakC && $cell!= "") {
                                $day4 = $cell;
                                // echo $day4."[".$a.",".$b."]";
                            }
                            if ($b==6 && $a==$breakC && $cell!= "") {
                                $day5 = $cell;
                                // echo $day5."[".$a.",".$b."]";
                            }
                            if ($b==7 && $a==$breakC && $cell!= "") {
                                $day6 = $cell;
                                // echo $day6."[".$a.",".$b."]";
                            }
                            if ($b==8 && $a==$breakC && $cell!= "") {
                                $day7 = $cell;
                                // echo $day7."[".$a.",".$b."]";
                            }
                            if ($b==9 && $a==$breakC && $cell!= "") {
                                $day8 = $cell;
                                // echo $day8."[".$a.",".$b."]";
                            }
                            if ($b==10 && $a==$breakC && $cell!= "") {
                                $day9 = $cell;
                                // echo $day9."[".$a.",".$b."]";
                            }
                            if ($b==11 && $a==$breakC && $cell!= "") {
                                $day10 = $cell;
                                // echo $day10."[".$a.",".$b."]";
                            }
                            if ($b==12 && $a==$breakC && $cell!= "") {
                                $day11 = $cell;
                                // echo $day11."[".$a.",".$b."]";
                            }
                            if ($b==13 && $a==$breakC && $cell!= "") {
                                $day12 = $cell;
                                // echo $day12."[".$a.",".$b."]";
                            }
                            if ($b==14 && $a==$breakC && $cell!= "") {
                                $day13 = $cell;
                                // echo $day13."[".$a.",".$b."]";
                            }
                            if ($b==15 && $a==$breakC && $cell!= "") {
                                $day14 = $cell;
                                // echo $day14."[".$a.",".$b."]";
                            }
                            if ($b==16 && $a==$breakC && $cell!= "") {
                                $day15 = $cell;
                                // echo $day15."[".$a.",".$b."]";
                            }
                            if ($b==17 && $a==$breakC && $cell!= "") {
                                $day16 = $cell;
                                // echo $day16."[".$a.",".$b."]";
                            }
                            if ($b==18 && $a==$breakC && $cell!= "") {
                                $day17 = $cell;
                                // echo $day17."[".$a.",".$b."]";
                            }
                            if ($b==19 && $a==$breakC && $cell!= "") {
                                $day18 = $cell;
                                // echo $day18."[".$a.",".$b."]";
                            }
                            if ($b==20 && $a==$breakC && $cell!= "") {
                                $day19 = $cell;
                                // echo $day19."[".$a.",".$b."]";
                            }
                            if ($b==21 && $a==$breakC && $cell!= "") {
                                $day20 = $cell;
                                // echo $day20."[".$a.",".$b."]";
                            }
                            if ($b==22 && $a==$breakC && $cell!= "") {
                                $day21 = $cell;
                                // echo $day21."[".$a.",".$b."]";
                            }
                            if ($b==23 && $a==$breakC && $cell!= "") {
                                $day22 = $cell;
                                // echo $day22."[".$a.",".$b."]";
                            }
                            if ($b==24 && $a==$breakC && $cell!= "") {
                                $day23 = $cell;
                                // echo $day23."[".$a.",".$b."]";
                            }
                            if ($b==25 && $a==$breakC && $cell!= "") {
                                $day24 = $cell;
                                // echo $day24."[".$a.",".$b."]";
                            }
                            if ($b==26 && $a==$breakC && $cell!= "") {
                                $day25 = $cell;
                                // echo $day25."[".$a.",".$b."]";
                            }
                            if ($b==27 && $a==$breakC && $cell!= "") {
                                $day26 = $cell;
                                // echo $day26."[".$a.",".$b."]";
                            }
                            if ($b==28 && $a==$breakC && $cell!= "") {
                                $day27 = $cell;
                                // echo $day27."[".$a.",".$b."]";
                            }
                            if ($b==29 && $a==$breakC && $cell!= "") {
                                $day28 = $cell;
                                // echo $day28."[".$a.",".$b."]";
                            }
                            if ($b==30 && $a==$breakC && $cell!= "") {
                                $day29 = $cell;
                                // echo $day29."[".$a.",".$b."]";
                            }
                            if ($b==31 && $a==$breakC && $cell!= "") {
                                $day30 = $cell;
                                // echo $day30."[".$a.",".$b."]";
                            }
                            if ($b==32 && $a==$breakC && $cell!= "") {
                                $day31 = $cell;
                                // echo $day31."[".$a.",".$b."]";
                            }

                            if ($break!=''){
                                // echo $person.",".$a.",".$b;
                                // echo "ID: ".$id."[".$a.",".$b."]";
                                $arrayIn = array(
                                    'type' => $break
                                );
                            }
                            if ($day1 != '') {
                                $arrayIn = array(
                                    '1' => $day1
                                );
                            }
                            if ($day2 != '') {
                                $arrayIn = array(
                                    '2' => $day2
                                );
                            }
                            if ($day3 != '') {
                                $arrayIn = array(
                                    '3' => $day3
                                );
                            }
                            if ($day4 != '') {
                                $arrayIn = array(
                                    '4' => $day4
                                );
                            }
                            if ($day5 != '') {
                                $arrayIn = array(
                                    '5' => $day5
                                );
                            }
                            if ($day6 != '') {
                                $arrayIn = array(
                                    '6' => $day6
                                );
                            }
                            if ($day7 != '') {
                                $arrayIn = array(
                                    '7' => $day7
                                );
                            }
                            if ($day8 != '') {
                                $arrayIn = array(
                                    '8' => $day8
                                );
                            }
                            if ($day9 != '') {
                                $arrayIn = array(
                                    '9' => $day9
                                );
                            }
                            if ($day10 != '') {
                                $arrayIn = array(
                                    '10' => $day10
                                );
                            }
                            if ($day11 != '') {
                                $arrayIn = array(
                                    '11' => $day11
                                );
                            }
                            if ($day12 != '') {
                                $arrayIn = array(
                                    '12' => $day12
                                );
                            }
                            if ($day13 != '') {
                                $arrayIn = array(
                                    '13' => $day13
                                );
                            }
                            if ($day14 != '') {
                                $arrayIn = array(
                                    '14' => $day14
                                );
                            }
                            if ($day15 != '') {
                                $arrayIn = array(
                                    '15' => $day15
                                );
                            }
                            if ($day16 != '') {
                                $arrayIn = array(
                                    '16' => $day16
                                );
                            }
                            if ($day17 != '') {
                                $arrayIn = array(
                                    '17' => $day17
                                );
                            }
                            if ($day18 != '') {
                                $arrayIn = array(
                                    '18' => $day18
                                );
                            }
                            if ($day19 != '') {
                                $arrayIn = array(
                                    '19' => $day19
                                );
                            }
                            if ($day20 != '') {
                                $arrayIn = array(
                                    '20' => $day20
                                );
                            }
                            if ($day21 != '') {
                                $arrayIn = array(
                                    '21' => $day21
                                );
                            }
                            if ($day22 != '') {
                                $arrayIn = array(
                                    '22' => $day22
                                );
                            }
                            if ($day23 != '') {
                                $arrayIn = array(
                                    '23' => $day23
                                );
                            }
                            if ($day24 != '') {
                                $arrayIn = array(
                                    '24' => $day24
                                );
                            }
                            if ($day25 != '') {
                                $arrayIn = array(
                                    '25' => $day25
                                );
                            }
                            if ($day26 != '') {
                                $arrayIn = array(
                                    '26' => $day26
                                );
                            }
                            if ($day27 != '') {
                                $arrayIn = array(
                                    '27' => $day27
                                );
                            }
                            if ($day28 != '') {
                                $arrayIn = array(
                                    '28' => $day28
                                );
                            }
                            if ($day29 != '') {
                                $arrayIn = array(
                                    '29' => $day29
                                );
                            }
                            if ($day30 != '') {
                                $arrayIn = array(
                                    '30' => $day30
                                );
                            }
                            if ($day31 != '') {
                                $arrayIn = array(
                                    '31' => $day31
                                );
                            }
                            // print_r( $arrayIn);
                        }
                        if ($a==$breakC && $b==32) {
                            $breakC = $breakC+11;
                        }


// ******************************* If condition for get all Status rows *******************************
                        if ($a==$statusC) {
                            // if ($b == 1 && $cell != "") {
                            //     $arrayIn['type'] = $cell;
                            // }
                            
                            // for ($i = 1; $i <= 32; $i++) {
                            //     if ($b == $i && $cell != "") {
                            //         $arrayIn[$i] = $cell;
                            //     }
                            // }

                            if($b==1 && $a==$statusC && $cell!= ""){
                                $status =  $cell;
                                // echo $checkin.",".$a.",".$b;
                            }
                            if ($b==2 && $a==$statusC && $cell!= "") {
                                $day1 = $cell;
                                // echo $day1."[".$a.",".$b."]";
                            }
                            if ($b==3 && $a==$statusC && $cell!= "") {
                                $day2 = $cell;
                                // echo $day2."[".$a.",".$b."]";
                            }
                            if ($b==4 && $a==$statusC && $cell!= "") {
                                $day3 = $cell;
                                // echo $day3."[".$a.",".$b."]";
                            }
                            if ($b==5 && $a==$statusC && $cell!= "") {
                                $day4 = $cell;
                                // echo $day4."[".$a.",".$b."]";
                            }
                            if ($b==6 && $a==$statusC && $cell!= "") {
                                $day5 = $cell;
                                // echo $day5."[".$a.",".$b."]";
                            }
                            if ($b==7 && $a==$statusC && $cell!= "") {
                                $day6 = $cell;
                                // echo $day6."[".$a.",".$b."]";
                            }
                            if ($b==8 && $a==$statusC && $cell!= "") {
                                $day7 = $cell;
                                // echo $day7."[".$a.",".$b."]";
                            }
                            if ($b==9 && $a==$statusC && $cell!= "") {
                                $day8 = $cell;
                                // echo $day8."[".$a.",".$b."]";
                            }
                            if ($b==10 && $a==$statusC && $cell!= "") {
                                $day9 = $cell;
                                // echo $day9."[".$a.",".$b."]";
                            }
                            if ($b==11 && $a==$statusC && $cell!= "") {
                                $day10 = $cell;
                                // echo $day10."[".$a.",".$b."]";
                            }
                            if ($b==12 && $a==$statusC && $cell!= "") {
                                $day11 = $cell;
                                // echo $day11."[".$a.",".$b."]";
                            }
                            if ($b==13 && $a==$statusC && $cell!= "") {
                                $day12 = $cell;
                                // echo $day12."[".$a.",".$b."]";
                            }
                            if ($b==14 && $a==$statusC && $cell!= "") {
                                $day13 = $cell;
                                // echo $day13."[".$a.",".$b."]";
                            }
                            if ($b==15 && $a==$statusC && $cell!= "") {
                                $day14 = $cell;
                                // echo $day14."[".$a.",".$b."]";
                            }
                            if ($b==16 && $a==$statusC && $cell!= "") {
                                $day15 = $cell;
                                // echo $day15."[".$a.",".$b."]";
                            }
                            if ($b==17 && $a==$statusC && $cell!= "") {
                                $day16 = $cell;
                                // echo $day16."[".$a.",".$b."]";
                            }
                            if ($b==18 && $a==$statusC && $cell!= "") {
                                $day17 = $cell;
                                // echo $day17."[".$a.",".$b."]";
                            }
                            if ($b==19 && $a==$statusC && $cell!= "") {
                                $day18 = $cell;
                                // echo $day18."[".$a.",".$b."]";
                            }
                            if ($b==20 && $a==$statusC && $cell!= "") {
                                $day19 = $cell;
                                // echo $day19."[".$a.",".$b."]";
                            }
                            if ($b==21 && $a==$statusC && $cell!= "") {
                                $day20 = $cell;
                                // echo $day20."[".$a.",".$b."]";
                            }
                            if ($b==22 && $a==$statusC && $cell!= "") {
                                $day21 = $cell;
                                // echo $day21."[".$a.",".$b."]";
                            }
                            if ($b==23 && $a==$statusC && $cell!= "") {
                                $day22 = $cell;
                                // echo $day22."[".$a.",".$b."]";
                            }
                            if ($b==24 && $a==$statusC && $cell!= "") {
                                $day23 = $cell;
                                // echo $day23."[".$a.",".$b."]";
                            }
                            if ($b==25 && $a==$statusC && $cell!= "") {
                                $day24 = $cell;
                                // echo $day24."[".$a.",".$b."]";
                            }
                            if ($b==26 && $a==$statusC && $cell!= "") {
                                $day25 = $cell;
                                // echo $day25."[".$a.",".$b."]";
                            }
                            if ($b==27 && $a==$statusC && $cell!= "") {
                                $day26 = $cell;
                                // echo $day26."[".$a.",".$b."]";
                            }
                            if ($b==28 && $a==$statusC && $cell!= "") {
                                $day27 = $cell;
                                // echo $day27."[".$a.",".$b."]";
                            }
                            if ($b==29 && $a==$statusC && $cell!= "") {
                                $day28 = $cell;
                                // echo $day28."[".$a.",".$b."]";
                            }
                            if ($b==30 && $a==$statusC && $cell!= "") {
                                $day29 = $cell;
                                // echo $day29."[".$a.",".$b."]";
                            }
                            if ($b==31 && $a==$statusC && $cell!= "") {
                                $day30 = $cell;
                                // echo $day30."[".$a.",".$b."]";
                            }
                            if ($b==32 && $a==$statusC && $cell!= "") {
                                $day31 = $cell;
                                // echo $day31."[".$a.",".$b."]";
                            }

                            if ($status!=''){
                                // echo $person.",".$a.",".$b;
                                // echo "ID: ".$id."[".$a.",".$b."]";
                                $arrayIn = array(
                                    'type' => $status
                                );
                            }
                            if ($day1 != '') {
                                $arrayIn = array(
                                    '1' => $day1
                                );
                            }
                            if ($day2 != '') {
                                $arrayIn = array(
                                    '2' => $day2
                                );
                            }
                            if ($day3 != '') {
                                $arrayIn = array(
                                    '3' => $day3
                                );
                            }
                            if ($day4 != '') {
                                $arrayIn = array(
                                    '4' => $day4
                                );
                            }
                            if ($day5 != '') {
                                $arrayIn = array(
                                    '5' => $day5
                                );
                            }
                            if ($day6 != '') {
                                $arrayIn = array(
                                    '6' => $day6
                                );
                            }
                            if ($day7 != '') {
                                $arrayIn = array(
                                    '7' => $day7
                                );
                            }
                            if ($day8 != '') {
                                $arrayIn = array(
                                    '8' => $day8
                                );
                            }
                            if ($day9 != '') {
                                $arrayIn = array(
                                    '9' => $day9
                                );
                            }
                            if ($day10 != '') {
                                $arrayIn = array(
                                    '10' => $day10
                                );
                            }
                            if ($day11 != '') {
                                $arrayIn = array(
                                    '11' => $day11
                                );
                            }
                            if ($day12 != '') {
                                $arrayIn = array(
                                    '12' => $day12
                                );
                            }
                            if ($day13 != '') {
                                $arrayIn = array(
                                    '13' => $day13
                                );
                            }
                            if ($day14 != '') {
                                $arrayIn = array(
                                    '14' => $day14
                                );
                            }
                            if ($day15 != '') {
                                $arrayIn = array(
                                    '15' => $day15
                                );
                            }
                            if ($day16 != '') {
                                $arrayIn = array(
                                    '16' => $day16
                                );
                            }
                            if ($day17 != '') {
                                $arrayIn = array(
                                    '17' => $day17
                                );
                            }
                            if ($day18 != '') {
                                $arrayIn = array(
                                    '18' => $day18
                                );
                            }
                            if ($day19 != '') {
                                $arrayIn = array(
                                    '19' => $day19
                                );
                            }
                            if ($day20 != '') {
                                $arrayIn = array(
                                    '20' => $day20
                                );
                            }
                            if ($day21 != '') {
                                $arrayIn = array(
                                    '21' => $day21
                                );
                            }
                            if ($day22 != '') {
                                $arrayIn = array(
                                    '22' => $day22
                                );
                            }
                            if ($day23 != '') {
                                $arrayIn = array(
                                    '23' => $day23
                                );
                            }
                            if ($day24 != '') {
                                $arrayIn = array(
                                    '24' => $day24
                                );
                            }
                            if ($day25 != '') {
                                $arrayIn = array(
                                    '25' => $day25
                                );
                            }
                            if ($day26 != '') {
                                $arrayIn = array(
                                    '26' => $day26
                                );
                            }
                            if ($day27 != '') {
                                $arrayIn = array(
                                    '27' => $day27
                                );
                            }
                            if ($day28 != '') {
                                $arrayIn = array(
                                    '28' => $day28
                                );
                            }
                            if ($day29 != '') {
                                $arrayIn = array(
                                    '29' => $day29
                                );
                            }
                            if ($day30 != '') {
                                $arrayIn = array(
                                    '30' => $day30
                                );
                            }
                            if ($day31 != '') {
                                $arrayIn = array(
                                    '31' => $day31
                                );
                            }
                            // print_r( $arrayIn);
                        }
                        if ($a==$statusC && $b==32) {
                            $statusC = $statusC+11;
                        }

// ******************************* If condition for get all Summary rows *******************************
                        // if ($a==$summaryC) {
                        //     // if ($b == 1 && $cell != "") {
                        //     //     $arrayIn['type'] = $cell;
                        //     // }
                            
                        //     // for ($i = 1; $i <= 32; $i++) {
                        //     //     if ($b == $i && $cell != "") {
                        //     //         $arrayIn[$i] = $cell;
                        //     //     }
                        //     // }

                        //     if($b==1 && $a==$summaryC && $cell!= ""){
                        //         $summary =  $cell;
                        //         // echo $checkin.",".$a.",".$b;
                        //     }
                        //     if ($b==2 && $a==$summaryC && $cell!= "") {
                        //         $day1 = $cell;
                        //         // echo $day1."[".$a.",".$b."]";
                        //     }
                            

                        //     if ($summary!=''){
                        //         // echo $summary.",".$a.",".$b;
                        //         // echo "ID: ".$id."[".$a.",".$b."]";
                        //         $arrayIn = array(
                        //             'type' => $summary
                        //         );
                        //     }
                        //     if ($day1 != '') {
                        //         $arrayIn = array(
                        //             '1' => $day1
                        //         );
                        //     }
                            
                        //     print_r( $arrayIn);
                            
                        // }
                        // if ($a==$summaryC && $b==32) {
                        //     $summaryC = $summaryC+11;
                        // }
                        $b++;
                        // print_r( $arrayIn);

                        
                        
                
                    } 
                           
                }
                // if($person!='' && $id!='' && $emp!='' && $name!='' && $department!='' && $dname!='') {
                // echo $person."- ".$id."- ".$emp."- ".$name."- ".$department."- ".$dname."- ".$joiningdate."- ".$jdate."- ".$position."- ".$pname ;
                // }
                // echo $person."- " ;
                
                

                $a++;
                $arrayIn = array(
                    'type'  => $person,
                    // 'type' => $date,
                    // 'type' => $checkin,
                    // 'type' => $checkout,
                    // 'type' => $ot,
                    // 'type' => $late,
                    // 'type' => $earlyL,
                    // 'type' => $attended,
                    // 'type' => $break,
                    // 'type' => $status,
                    '1'     => $day1,
                    '2'     => $day2,
                    '3'     => $day3,
                    '4'     => $day4,
                    '5'     => $day5,
                    '6'     => $day6,
                    '7'     => $day7,
                    '8'     => $day8,
                    '9'     => $day9,
                    '10'    => $day10,
                    '11'    => $day11,
                    '12'    => $day12,
                    '13'    => $day13,
                    '14'    => $day14,
                    '15'    => $day15,
                    '16'    => $day16,
                    '17'    => $day17,
                    '18'    => $day18,
                    '19'    => $day19,
                    '20'    => $day20,
                    '21'    => $day21,
                    '22'    => $day22,
                    '23'    => $day23,
                    '24'    => $day24,
                    '25'    => $day25,
                    '26'    => $day26,
                    '27'    => $day27,
                    '28'    => $day28,
                    '29'    => $day29,
                    '30'    => $day30,
                    '31'    => $day31
                );
                //print_r($arrayIn);

                // $arrayInP = array(
                //     'type'  => $person,
                //     '1'     => $id,
                //     '6'     => $emp,
                //     '9'     => $name,
                //     '13'    => $department,
                //     '16'    => $dname,
                //     '20'    => $joiningdate,
                //     '23'    => $jdate,
                //     '27'    => $position,
                //     '30'    => $pname,
                   
                // );
                // print_r($arrayInP);


                // $arrayInD = array(
                //     'type' => $date,
                //     '1'     => $day1,
                //     '2'     => $day2,
                //     '3'     => $day3,
                //     '4'     => $day4,
                //     '5'     => $day5,
                //     '6'     => $day6,
                //     '7'     => $day7,
                //     '8'     => $day8,
                //     '9'     => $day9,
                //     '10'    => $day10,
                //     '11'    => $day11,
                //     '12'    => $day12,
                //     '13'    => $day13,
                //     '14'    => $day14,
                //     '15'    => $day15,
                //     '16'    => $day16,
                //     '17'    => $day17,
                //     '18'    => $day18,
                //     '19'    => $day19,
                //     '20'    => $day20,
                //     '21'    => $day21,
                //     '22'    => $day22,
                //     '23'    => $day23,
                //     '24'    => $day24,
                //     '25'    => $day25,
                //     '26'    => $day26,
                //     '27'    => $day27,
                //     '28'    => $day28,
                //     '29'    => $day29,
                //     '30'    => $day30,
                //     '31'    => $day31
                // );
                // print_r($arrayInD);

                
                // print_r($arrayIn);
                // $this->db->insert('monthly_attendance',$arrayIn);

                // if ($this->db->trans_status() === FALSE) {
                //     $IsInserted = 0;
                //     $this->db->trans_rollback();
                // } else {
                //     $IsInserted = 1;
                //     $this->db->trans_commit();
                // }
            
                


                // if ($dateC!= "" ) {
                //     // echo "[".$a."][".$b."] ".$sheetName." - ".$dateC." - <br>";

                //     $arrayIn = array(
                //         'date' => $dateC,
                        
                //     );
                    // print_r($arrayIn);
                     
                //     $this->db->insert('monthly_attendance',$arrayIn);

                //     if ($this->db->trans_status() === FALSE) {
                //         $IsInserted = 0;
                //         $this->db->trans_rollback();
                //     } else {
                //         $IsInserted = 1;
                //         $this->db->trans_commit();
                //     }
                // }



                // $fibo++; 
                
            // }

            // }

            
            }
            if ($IsInserted ==1) {
                $this->db->trans_commit();
            } else {
                $this->db->trans_rollback();
            }
        
        // return $IsInserted;

         
            
        }

   }
}

?>