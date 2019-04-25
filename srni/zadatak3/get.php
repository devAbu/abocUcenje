
			<?php 
				require 'connection/connection.php';
	    		$ime = $_GET['ime'];
	    		$juhu = $_GET['juhu'];
		        $sql = "INSERT INTO gett(juhu, ime) VALUES( '$juhu','$ime')";
		        $result = $dbc->query($sql);

		        if ($result) {
		        	echo('sent');
		        }
        	 ?>