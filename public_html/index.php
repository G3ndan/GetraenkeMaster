<!DOCTYPE html>
 <html lang="de">
 <head> 
 <title>Getränkemanager</title>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" type="text/css" href="CSS/style.css?v=1" />
 <script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="JS/functions.js"></script>
 </head> 

 <body>

 <h1>Getränkemanager</h1>

 <form  onsubmit="Evaluate(); return false;" method="post">
   <table id="tb1">
     <thead>
       <tr>
         <th>Sorte</th>
         <th>Menge Kästen/Pakete</th>
         <th><button id="add" type="button">Add</button></th>
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
       </tr>
     </tbody>
   </table>
   <button type="submit" id="submit" name="button">Sumbit</button>
 </form>
 </body> 

 </html>
