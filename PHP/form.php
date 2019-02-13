<?php
$data = json_decode($_POST['valuesArray']);
$uid = "2";

include "db.php";

function checkArray($test, $sorten){
  for($i=0; $i < count($test); $i += 2){
    for($j=0; $j < count($sorten); $j++){
      if($test[$i] == $sorten[$j][0]){
        break;
      }
      if($j == count($sorten)-1){
        return FALSE;
      }
    }
  }
  return TRUE;
}


$result = $mysqli->query("SELECT * FROM Sorte");
$sorten = $result->fetchAll();
$result->closeCursor();
$result = null;


if(checkArray($data, $sorten)){
  $query = $mysqli->prepare("INSERT INTO `Bestellungen`(`sorte`, `anzahl`, `user_id`, `date`) VALUES (:flav, :menge, :uid, CURRENT_DATE())");

  for ($i=0; $i < count($data); $i++) {
    $query->bindValue(":flav", $data[$i]);
    $i++;
    $query->bindValue(":menge", $data[$i]);
    $query->bindValue(":uid", $uid);
    $query->execute();
  }
}
else {
  echo "Invalid Input";
}

$mysqli=null;
?>
