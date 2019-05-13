$(document).ready( function() {

alert('Stranica se uspjesno ucitala');
console.log('Stranica ucitana');



$("#btn1").click(function(){

    $("#anes1").append("JS");

});



        $("#submit1").on("click", function(){
        var a = parseInt($('#number1').val());
        var b = parseInt($('#number2').val());
           var sum = a + b;


           $("#rezultat").val(sum);
            /*alert(sum);*/
            /*$('#rezultat').text(sum);*/

        });



    $("#aki77").on("click", function(){

    var x = $('#klix1').val();
    var y = $('#klix2').val();



    if(x=="" && y ==""){

    $("#eresult").text("Unesite x i y");

    $("#eresult").css({"color": "red"});

    }

    else if(x==""){

    $("#eresult").text("Unesite x");
    $("#eresult").css({"color": "red"});

    }

    else if (y==""){

      $("#eresult").text("Unesite y");
      $("#eresult").css({"color": "red"});

    }

    else if (y=="0"){

    $("#eresult").text("Unesite tacne godine");
    $("#eresult").css({"color": "red"});

    }

    else{

      $("#eresult").text("Hvala");

      $("#eresult").css({"color": "green"});

      setTimeout(function() {

      $('#eresult').hide();
      $("#klix5")[0].reset();


    }, 3000);

/*
    setTimeout(function() {

    $("#klix5")[0].reset();

  }, 3000);
*/
    }

    });



$('#show_hide').on('click', function(){

var passwordField = $('#password');
var passwordFieldType = passwordField.attr('type');
if(passwordFieldType == 'password')

{

passwordField.attr('type', 'text');
$(this).text('Prikazi');

}

 else

 {

    passwordField.attr('type', 'password');
    $(this).text('Sakrij');

 }

});

});
