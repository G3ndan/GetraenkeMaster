<?php


//function sendMail(){
error_reporting(0);
include "Mail.php";



  $time = getdate();
  $month = $time['month'];
  $year = $time['year'];

  $from =  "soc.etage5@gmail.com";
  $to = "kag53945@zwoho.com";
  $subject = "Getränke Etage 5 $month-$year";

  $body = "Hallo,\n\nDiesen Monat haben wir ";



  ob_start();
  require "statfuncs.php";
  $time = getdate();
  $month = $time['mon'];
  $year = $time['year'];



  if($month == 2){
    $ende = $year."0228";
  }
  elseif($month > 9){
    if($month == 11){
      $ende = $year.$month."30";
    }
    else{
      $ende = $year.$month."31";
    }
  }
  elseif(in_array($month, [1, 3, 5, 7, 8])){
    $ende = $year."0$month"."31";
  }
  else{
    $ende = $year."0$month"."30";
  }

  $list = searchMonth($ende);
  ob_end_clean();


  for ($i=0; $i < count($list) ; $i++) {
    if($i == count($list)-1){
      $body .= $list[$i][1] . " Kästen " . $list[$i][0] . " " ;
    }
    else if($list[$i][1] == 1){
      $body .= "einen Kasten " . $list[$i][0] . ", " ;
    }
    else{
      $body .= $list[$i][1] . " Kästen " . $list[$i][0] . ", " ;
    }
  }
  $body .= "geholt";



  $host = "ssl://smtp.gmail.com";
  $port = "465";
  $username = "soc.etage5@gmail.com";
  $password = "qC@iVdW%z6^g";


  $headers = array (
  'From' => $from,
  'To' => $to,
  'Subject' => $subject);
  $smtp = Mail::factory('smtp', array (
  'host' => $host,
  'port' => $port,
  'auth' => true,
  'username' => $username,
  'password' => $password));
  $mail = $smtp->send($to, $headers, $body);
//}

?>
