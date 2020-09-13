<?php
	$db_link = mysqli_connect('localhost', 'root', '', 'tutorial');
	
	if($db_link)
	{
		echo('<p>Verbindung hergestellt!</p>');	
	}
	else{
		echo('<p>Fehler beim Verbinden mit der Datenbank</p>');
	}
?>