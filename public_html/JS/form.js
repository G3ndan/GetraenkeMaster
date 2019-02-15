$(function(){
  $('.form1').validate({
         // initialize the plugin
         rules: {
             email: {
                 required: true,
                 email: true,
             },
             password: {
                 required: true,
                 minlength: 5,
             },
         },
         messages: {
           email: "Keine korrekte Form einer Email Adresse",
           password: "Passwort muss min. 7 Stellen haben",
         }
     });
     return true;
});
