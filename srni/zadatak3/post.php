			<?php 
				require 'connection/connection.php';
	    		$ime = $_POST['mail'];
	    		$juhu = $_POST['godina'];
		        $sql = "INSERT INTO postt( mail, godina) VALUES( '$mail','$godina')";
		        $result = $dbc->query($sql);
        	 ?>