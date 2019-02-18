<?php
error_reporting(0);

session_start();
if(isset($action) && !empty($action)){
//if(isset($_POST['action']) &&  !empty($_POST['action'])){
//  $action = $_POST['action'];
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

  switch ($action) {
    case 'month':
      searchMonth($ende);
      break;


    case 'year':
      searchYear($year);
      break;

    case 'user':
      //$uid = 1;
      $uid = $_SESSION['id'];
      searchUser($year, $uid);
      break;


    default:
      echo "[]";
      break;
  }
}

?>
