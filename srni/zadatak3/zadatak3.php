<!DOCTYPE html>
<html>
<head>
	<title>zadatak 3</title>
</head>
<body>
        <form name="forma1" id="forma1" method="get">
	        <label for="juhu">juhu</label>
	        <input type="text" name="juhu" id="juhu">
	        <label for="ime">ime</label>
	        <input type="text" name="ime" id="ime">
	        <input type="submit" name="submit" value="Submit">
	    </form>	

	    <form name="forma2" id="forma2" method="post">
	        <label for="mail">mail</label>
	        <input type="text" name="mail" id="mail">
	        <label for="godina">godina</label>
	        <input type="number" name="godina" id="godina">
	        <input type="submit" name="submit" value="Submit">
	    </form>

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
      $(function () {
        $('#forma1').on('submit', function (e) {

          e.preventDefault();
          var juhu = $('#juhu').val();
          var ime = $('#ime').val();

          $.ajax({
            type: 'get',
            url: 'get.php',
            data: $('#forma1').serialize(),
            success: function (data) {
              if (data.indexOf('sent')) {
                alert('dobro je');  
              } else{
                alert('nije dobar get')
              }
              
            },
            error: function(err){
              alert('nije dobro'); 
            }
          });
             

        });
      });

       $(function () {
        $('#forma2').on('submit', function (e) {

          e.preventDefault();
          var mail = $('#mail').val();
          var godina = $('#godina').val();

          $.ajax({
            type: 'post',
            url: 'post.php',
            data: $('#forma2').serialize(),
            success: function (data) {
              if (data.indexOf('sent')) {
                alert('dobro je');  
              } else{
                alert('nije dobar post')
              }
              
            },
            error: function(err){
              alert('nije dobro')
            }
          });
         });
      });
    </script>   
</body>


</html>
