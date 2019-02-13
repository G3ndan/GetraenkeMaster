<?php
/*

function sendMail(){
  $time = getdate();
  $month = $time['month'];
  $year = $time['year'];

  $from =  "getraenkemaster@dood.com";
  $to = "Backoffice";
  $subject = "Getränke Etage 5 $month-$year";

*/error_reporting(0);
  $body = "Diesen Monat haben wir ";

  $_GET['stat'] = "get";

  ob_start();
  include "stats.php";
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

  echo $body;

/*
  $host = "ssl://";
  $port = "465";
  $username = "";
  $password = "";


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
}
*/
?>
