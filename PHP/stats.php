<?php


error_reporting(0);

function searchTime($mysqli, $year, $month){
# set border1
  $month = (int)$month;
  if($month < 10){
    $b1 = $year."0$month"."01";
  }
  else{
    $b1 = $year.$month."01";
  }

# set border2
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

  if((strlen($b1) != 8) || (strlen($b2) != 8 )){
    echo "Invalid Input";
    return false;
  }

  require_once "db.php";

  $result = $mysqli->query("SELECT * FROM Bestellungen WHERE date BETWEEN $b1 and $b2");
  if($result == NULL){
    echo "Invalid date";
    $result->closeCursor();
    $result = NULL;
    $mysqli = NULL;
    return false;
  }
  $data = $result->fetchAll(PDO::FETCH_NUM);
  $result->closeCursor();
  $result = null;

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

if(isset($_POST['date']) && !empty($_POST['date'])) {
  $date = $_POST['date'];
  $year = substr($date, 0, 4);
  $month = substr($date, 4, 2);

  searchTime($mysqli, $year, $month);
}
else if($get === true){
  $time = getdate();
  $month = $time['mon'];
  $year = $time['year'];

  $list = searchTime($mysqli, $year, $month);
}
else{
  $time = getdate();
  $month = $time['mon'];
  $year = $time['year'];

  searchTime($mysqli, $year, $month);
}

$mysqli=null;
?>
