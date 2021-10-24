$(document).ready(function () {
   var valschoolsname = false;
   var valschoolnameabr = false;
   var valipn = false;
   var valcity = false;
   var valaddress = false;
   var valschoolphone = false;
   var valdirname = false;
   var valdirphone = false;
   var valemail = false;


   $("form").submit(function (event) {
      event.preventDefault();

      var schoolsname = $("#schoolsname").val();
      var schoolnameabr = $("#schoolnameabr").val();
      var ipn = $("#ipn").val();
      var city = $("#city").val();
      var address = $("#address").val();
      var schoolphone = $("#schoolphone").val();
      var dirname = $("#dirname").val();
      var dirphone = $("#dirphone").val();
      var email = $("#email").val();

      if (schoolsname == "") {
         $("#schoolsname").parent().css("box-shadow", " 0 0 5px red");
      } else {
         $("#schoolsname").parent().css("box-shadow", " 0 0 5px green");

      }


      if (schoolnameabr == "") {
         $("#schoolnameabr").parent().css("box-shadow", " 0 0 5px red");
      } else {
         $("#schoolnameabr").parent().css("box-shadow", " 0 0 5px green");

      }


      if (ipn == "") {
         $("#ipn").parent().css("box-shadow", " 0 0 5px red");
      } else {
         $("#ipn").parent().css("box-shadow", " 0 0 5px green");

      }


      if (city == "") {
         $("#city").parent().css("box-shadow", " 0 0 5px red");
      } else {
         $("#city").parent().css("box-shadow", " 0 0 5px green");
      }


      if (address == "") {
         $("#address").parent().css("box-shadow", " 0 0 5px red");
      } else {
         $("#address").parent().css("box-shadow", " 0 0 5px green");

      }


      if (schoolphone == "") {
         $("#schoolphone").parent().css("box-shadow", " 0 0 5px red");
      } else {
         $("#schoolphone").parent().css("box-shadow", " 0 0 5px green");

      }



      if (dirname == "") {
         $("#dirname").parent().css("box-shadow", " 0 0 5px red");
      } else {
         $("#dirname").parent().css("box-shadow", " 0 0 5px green");

      }


      if (dirphone == "") {
         $("#dirphone").parent().css("box-shadow", " 0 0 5px red");
      } else {
         $("#dirphone").parent().css("box-shadow", " 0 0 5px green");

      }

      if (email == "") {
         $("#email").parent().css("box-shadow", " 0 0 5px red");
      } else {
         $("#email").parent().css("box-shadow", " 0 0 5px green");

      }



      if (valschoolsname == true &&
         valschoolnameabr == true &&
         valipn == true &&
         valcity == true &&
         valaddress == true &&
         valschoolphone == true &&
         valdirname == true &&
         valdirphone == true &&
         valemail == true) {
         $("form").unbind('submit').submit();
      }

   });
});



$("#email").keyup(function () {
   if (validateEmail()) {
      $("#email").parent().css("box-shadow", " 0 0 5px green");
   } else {
      $("#email").parent().css("box-shadow", " 0 0 5px red");
   }
   buttonState();
});




function validateEmail() {
   var email = $("#email").val();
   var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
   if (reg.test(email)) {
      return true;
   } else {
      return false;
   }

}





$('#city ').on('input', function () {
   $(this).val($(this).val().replace(/[0-9-A-z/.,?<>:|+-_()#@!$%^&*`~ЁёэЭЫыъЪ₴№№'";{}]/, ''))
});


$('#dirname').on('input', function () {
   $(this).val($(this).val().replace(/[0-9-A-z/.,?<>:|+-_()#@!$%^&*`~ЁёэЭЫыъЪ₴№№'";{}]/, ''))
});

$('#email').on('input', function () {
   $(this).val($(this).val().replace(/[іІїЇА-я/,?<>:|+()#!$%^&*`~₴№№'";{}]/, ''))
});