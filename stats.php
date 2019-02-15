<?php


error_reporting(0);

function searchMonth($ende){

  $start = substr($end, 0, 6) . "01";


  require "db.php";

  $query = $mysqli->query("SELECT * FROM Bestellungen WHERE date BETWEEN :start and :ende");
  $query->bindValue(":start", $start);
  $query->bindValue(":ende", $ende);
  if(!$query->execute()){
    echo "Invalid date";
    $query->closeCursor();
    $query = null;
    $mysqli = null;
    return false;
  }
  $data = $query->fetchAll(PDO::FETCH_NUM);
  $query->closeCursor();
  $query = null;
  $mysqli=null;

  $sum = [];
  foreach ($data as $set) {
    $sum[$set[1]] += $set[2];
  }

  $check = array_keys($sum);
  $values = array_values($sum);

  $liste = [];

  for ($i=0; $i < count($sum); $i++) {
    $liste[$i] = array($check[$i], $values[$i]);
  }


  for ($i=0; $i < count($liste); $i++) {
    echo "[";
    echo "\"";
    echo $liste[$i][0];
    echo "\"";
    echo ", ";
    echo $liste[$i][1];
    echo "],";
  }


  return $liste;
}






function searchYear($year){

  require "db.php";

  $start = $year. "0101";
  $ende = $year. "1231";

  $query = $mysqli->prepare("SELECT * FROM `Bestellungen` WHERE `date` BETWEEN :start AND :ende");
  $query->bindValue(":start", $start);
  $query->bindValue(":ende", $ende);
  if(!$query->execute()){
    echo "Invalid date";
    $query->closeCursor();
    $query = null;
    $mysqli = null;
    return false;
  }
  $data = $query->fetchAll(PDO::FETCH_NUM);
  $sum = [];

  foreach($data as $set){
    $sum[$set[1]] += $set[2];
  }

  $check = array_keys($sum);
  $values = array_values($sum);

  $liste = [];

  for ($i=0; $i < count($sum); $i++) {
    $liste[$i] = array($check[$i], $values[$i]);
  }


  for ($i=0; $i < count($liste); $i++) {
    echo "[";
    echo "\"";
    echo $liste[$i][0];
    echo "\"";
    echo ", ";
    echo $liste[$i][1];
    echo "],";
  }


  return $liste;
}












if($action) &&  !empty($action)){
  $time = getdate();
  $month = $time['mon'];
  $year = $time['year'];

  if($month == 2){
    $b2 = $year."0228";
  }
  elseif($month > 9){
    if($month == 11){
      $b2 = $year.$month."30";
    }
    else{
      $b2 = $year.$month."31";
    }
  }
  elseif(in_array($month, [1, 3, 5, 7, 8])){
    $b2 = $year."0$month"."31";
  }
  else{
    $b2 = $year."0$month"."30";
  }

  switch ($action) {
    case 'month':

      searchMonth($b2);
      break;


    case 'year':
      searchYear($year);
      break;

    case 'user':
      searchUser();
      break;


    default:
      echo "[]";
      break;
  }
}

?>
