<?php
 require_once "../PHP/setValidUser.php";
?>
<!DOCTYPE html>
 <html lang="de">
 <?php include '../PHP/head.php';?>
 <title>CGI-Getränkemanager</title>
 <link rel="stylesheet" type="text/css" href="CSS/style.css?v=1" /> 
 <script type="text/javascript" src="JS/jquery.validate.js"></script>
</head>
 <body>
   <?php include "../PHP/menu.php"; ?>
 <form  onsubmit="Evaluate(); return false;" method="post">
   <table id="tb1">
     <thead>
       <tr>
         <th>Sorte</th>
         <th>Menge Kästen/Pakete</th>
         <th><button id="add" type="button">Hinzufügen</button></th>
       </tr>
     </thead>
     <tbody>
       <tr class="row">
         <td>
           <select name="flavour" class="flavour">
           <?php include "../PHP/options.php";?>
         </select>
         </td>
         <td>
           <select name="number" class="number">
             <option>1</option>
             <option>2</option>
             <option>3</option>
             <option>4</option>
           </select>
         </td>
         <td></td>
       </tr>
     </tbody>
   </table>
   <button type="submit" id="submit" name="button">Absenden</button>
 </form>
 </body> 

 </html>
