<?php
$data = json_decode($_POST['valuesArray']);
$uid = "2";

function checkArray($test, $sorten){
  for($i=0; $i < count($test); $i++){
    for($j=0; $j < count($sorten); $j++){
      if($test[$i][0] == $sorten[$j][0]){
        break;
      }
      if($j == count($sorten)-1){
        return false;
      }
    }
  }
  return true;
}

require_once "db.php";

$result = $mysqli->query("SELECT * FROM Sorte");
$sorten = $result->fetchAll(PDO::FETCH_NUM);
$result->closeCursor();
$result = null;


if(checkArray($data, $sorten)){
  $query = $mysqli->prepare("INSERT INTO `Bestellungen`(`sorte`, `anzahl`, `user_id`, `date`) VALUES (:flav, :menge, :uid, CURRENT_DATE())");

  for ($i=0; $i < count($data); $i++) {
    $query->bindValue(":flav", $data[$i][0]);
    $query->bindValue(":menge", $data[$i][1]);
    $query->bindValue(":uid", $uid);
    $query->execute();
  }
  echo "Added successfully";
}
else {
  echo "Invalid Input";
}

$mysqli=null;
?>
