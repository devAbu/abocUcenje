function myFunction() {

  alert("Stranica se ucitala");
   console.log('stranica se ucitala');

}



function submit1(){

                 var a = document.getElementById("number1").value;
                  var b = document.getElementById("number2").value;
                   //var c = parseInt(a) + parseInt(b);

                      document.getElementById('rezultat').value = parseInt(a) + parseInt(b);

                  }




function f1(){

x=document.frm1.user.value;
y=document.frm1.pass.value;


if(x=="" && y ==""){
  document.getElementById("eresult").innerHTML = "Niste nista unijeli";
  return false;
}

else if(x==""){
  document.getElementById("eresult").innerHTML = "Ispuni x";
  return false;
  }

else if (y==""){

  document.getElementById("eresult").innerHTML = "Ispuni y";
  return false;

  }
else if (y=="0"){
  document.getElementById("eresult").innerHTML = "Unesite tacne godine";
  return false;
}
else{

  document.getElementById("eresult").innerHTML = "<span style='color: green;'>Hvala</span>";
  /*return true;*/


  setTimeout(function(){

           document.getElementById("eresult").style.display = "none";
          /*document.getElementById("eresult").style.visibility = "hidden".reset();*/
          /*document.getElementById("eresult").style.display = "none".innerHTML = "<span style='color: green;'>Hvala</span>";*/

           },3000);
/*return false;*/


setTimeout(function(){

        var input = document.getElementById("klix5").reset();/*.style.display = "none";*/
      },3000);

}
}


function mySunce() {

  document.getElementById("demo").innerHTML = "Ucimo JS";

}


function Toggle() {

    var temp = document.getElementById("typepass");
    if (temp.type === "password") {

        temp.type = "text";

    }
    else {

        temp.type = "password";

    }
}
