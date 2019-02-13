<?php

if(isset($_POST['p']) && !empty($_POST['p'])){
  $page = $_POST['p'];
  include "../PHP/list.php";
  if(in_array($page, $list)){
    include "../PHP/$page".".php";
  }
  else{
    echo "Invalid Request";
  }
}
else{
  include "index.php";
}


?>
