$(function(){
    //Add, Save, Edit and Delete functions code
    $("#add").bind("click", Add);
    $(".del").bind("click", Delete);
});
function Add(){
    $("#tb1 tbody").append(
        "<tr class='row'>"+
        "<td>"+
        "<select class='flavour'>" +
        $.ajax({
             type: "POST",
             data: { p : "options"},
             url: "../handler.php",
             success: function(data) {
                  var x = document.getElementsByClassName('flavour');
                  for (var i = 0; i < x.length; i++) {
                   x[i].innerHTML = data;
                  }
             },
             error: function(){
               alert("failed");
             }
          }) +
      "</select></td>"+
        "<td>"+
        "<select class='number'>"+
          "<option>1</option>"+
          "<option>2</option>"+
          "<option>3</option>"+
          "<option>4</option>"+
        "</select>"+
        "</td>"+
        "<td>"+
          "<button class='del' type='button'>Remove</button>"+
        "</td>"+
        "</tr>");

        $(".del").bind("click", Delete);
};
function Delete(){
  var par = $(this).closest('tr'); //tr
  par.remove();
};

function Evaluate(){
  var values = [];
  var i = 0;
  $("#tb1 tr.row").each(function() {
    var v1 = $(this).find("select.flavour").val();
    var v2 = $(this).find("select.number").val();
    values[i][0] = v1;
    values[i][1] = v2;
    i++;
  });


var jsonString = JSON.stringify( values );
  $.ajax({
       type: "POST",
       url: "../handler.php",
       data: {
         p : "form" ,
         valuesArray : jsonString },
       success: function(){
         console.log(jsonString);
       },
       error: function(){
         alert("Failed");
       }
    });
    return false;
}
