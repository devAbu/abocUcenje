<!DOCTYPE html>
<html>
<head>
	<title>zadatak 2</title>
</head>
<body>
        <form name="forma" method="post">
	        <label for="juhu">juhu</label>
	        <input type="text" name="juhu" id="juhu">
	        <label for="ime">ime</label>
	        <input type="text" name="ime" id="ime">
	        <input type="submit" name="submit" value="Submit">
	    </form>	

	    	<?php require 'connection/connection.php';
	    		$ime = $_POST['ime'];
	    		$juhu = $_POST['juhu'];
		        $sql = "INSERT INTO zadatak2( juhu, ime) VALUES( '$juhu','$ime')";
		        $result = $dbc->query($sql);

		        $sql = " SELECT * FROM zadatak2 order by broj desc ";
		        $result = $dbc->query($sql);
		        $count = $result->num_rows;
		        echo "<ul>";
		        if ($count > 0) {
		           $row = $result->fetch_assoc() ;
					echo "<li>" . $row["broj"]. "</li> <li>" . $row["juhu"]. "</li> <li> " . $row["ime"]. "</li>";		            
				}
		        
		        echo "</ul>";
        	 ?>
    
</body>
</html>
