<?php
	$db_link = mysqli_connect('localhost', 'root', '', 'tutorial');
	
	if(!$db_link)
	{
		die("<p>Nicht hergestellt</p>");
	}	
?>