<?php
session_start();
$data = json_decode($_POST['valuesArray']);
$uid = $_SESSION['id'];
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


if(empty($_SESSION['last']) || (time() - $_SESSION['last'] > 30)) {

  require "db.php";

  $result = $mysqli->query("SELECT * FROM Sorte");
  $sorten = $result->fetchAll(PDO::FETCH_NUM);
  $result->closeCursor();
  $result = null;

  if(checkArray($data, $sorten)){
    $query = $mysqli->prepare("INSERT INTO `Bestellungen`(`sorte`, `anzahl`, `user_id`, `date`) VALUES (:flav, :menge, :uid, CURRENT_DATE())");

    for ($i=0; $i < count($data); $i++) {
      if($data[$i][1] > 4){
        break;
      }
      $query->bindValue(":flav", $data[$i][0]);
      $query->bindValue(":menge", $data[$i][1]);
      $query->bindValue(":uid", $uid);
      $query->execute();
    }
    $query->closeCursor();
    $query = null;
  }
  $mysqli=null;
  echo "Daten erfolgreich abgeschickt";
}
else{
  echo "Bitte warten Sie ein wenig, bevor Sie weitere Daten verschicken";
}
$_SESSION['last'] = time();
?>
