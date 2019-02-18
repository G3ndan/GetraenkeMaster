<?php

function searchMonth($ende){

  $start = substr($ende, 0, 6) . "01";

  include "db.php";


  $query = $mysqli->prepare("SELECT * FROM Bestellungen WHERE date BETWEEN :start and :ende");
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

}



function searchUser($year, $uid){

  require "db.php";

  for ($month=1; $month < 13; $month++) {

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

    $start = substr($ende, 0, 6) . "01";

    $queryMonth = $mysqli->prepare("SELECT * FROM `Bestellungen` WHERE `date` BETWEEN :start AND :ende");
    $queryMonth->bindValue(":start", $start);
    $queryMonth->bindValue(":ende", $ende);
    if(!$queryMonth->execute()){
      echo "Invalid date";
      $queryMonth->closeCursor();
      $queryMonth = null;
      echo "[$month, 0, 0]";
      continue;
    }
    $dataMonth = $queryMonth->fetchAll(PDO::FETCH_NUM);
    $queryMonth->closeCursor();
    $queryMonth = null;


    $queryUser = $mysqli->prepare("SELECT * FROM `Bestellungen` WHERE `user_id` = :uid AND `date` BETWEEN :start AND :ende");
    $queryUser->bindValue(":uid", $uid);
    $queryUser->bindValue(":start", $start);
    $queryUser->bindValue(":ende", $ende);
    if(!$queryUser->execute()){
      echo "Invalid User";
      $queryUser->closeCursor();
      $queryUser = null;
      $mysqli = null;
      return false;
    }
    $dataUser = $queryUser->fetchAll(PDO::FETCH_NUM);
    $queryUser->closeCursor();
    $queryUser = null;


    $sumMonth = 0;
    foreach ($dataMonth as $setMonth) {
      $sumMonth += $setMonth[2];
    }


    $sumUser = 0;
    foreach ($dataUser as $setUser) {
      $sumUser += $setUser[2];
    }



    $liste = array($month, $sumMonth, $sumUser);

    echo "[";
    echo "\"";
    echo $liste[0];
    echo "\"";
    echo ", ";
    echo $liste[1];
    echo ", ";
    if($liste[2] == null){
      echo (int)0;
    }
    else{
      echo $liste[2];
    }
    echo "],";

  }
}

?>
