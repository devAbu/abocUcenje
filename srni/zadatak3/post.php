			<?php 
				require 'connection/connection.php';
	    		$mail = $_POST['mail'];
	    		$godina = $_POST['godina'];
		        $sql = "INSERT INTO postt( mail, godina) VALUES( '$mail','$godina')";
		        $result = $dbc->query($sql);

		        if ($result) {
		        	echo('sent');
		        }
        	 ?>