$(function(){
  $('.form1').validate({
         // initialize the plugin
         rules: {
             email: {
                 required: true,
                 email: true
             },
             password: {
                 required: true,
                 minlength: 5
             },
             pwOld: {
               required: true,
               minlength: 7
             },
             pwNew1:{
               required: true,
               minlength: 7
             },
             pwNew2: {
               required: true,
               minlength: 7,
               equalTo: "#pwNew1"
             }
         },
         messages: {
           email: {
              email: "Keine korrekte Form einer Email Adresse!",
              required: "Dieses Feld muss ausgefüllt werden!"
           },
           password:{
               minlength: "Passwort muss min. 7 Stellen haben!",
               required: "Dieses Feld muss ausgefüllt werden!"
           },
           pwOld:{
             minlength: "Passwort muss min. 7 Stellen haben!",
             required: "Dieses Feld muss ausgefüllt werden!"
           },
           pwNew1:{
             minlength: "Passwort muss min. 7 Stellen haben!",
             required: "Dieses Feld muss ausgefüllt werden!"
           },
           pwNew2: {
             required: "Dieses Feld muss ausgefüllt werden!",
             minlength: "Passwort muss min. 7 Stellen haben!",
             equalTo:   "Passwörter müssen identisch sein!"
           }
         }
     });
     return true;
});
