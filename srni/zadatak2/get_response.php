<!DOCTYPE html>
<html>
<head>
	<title>resultat</title>
</head>
<body>
	<?php
		require 'connection/connection.php';
        $sql = "SELECT * FROM zadatak2";
        $result = $dbc->query($sql);
        $count = $result->num_rows;
        if ($count > 0) {
            while ($row = $result->fetch_assoc()) {
               echo '<div>' . $row[" "] . '</div>';
            }
        }
    ?>
</body>
</html>
