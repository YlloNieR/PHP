<?php require("[templates]/header.php"); ?>

<div id="content">
	<h1>Personen Datenbank</h1>
	<p>Hier sind die Personen:</p>
	
<?php 
	require('[templates]/connectDB.php');
	$db_results = mysqli_query($db_link, "SELECT Vorname, Nachname, `Alter` FROM personen") 
		or die("Fehler: " . mysqli_error($db_link));
	
	echo('<table>');
	while($row = mysqli_fetch_array($db_results))
	{
		echo('<tr>');
		echo('<td>' . $row['Vorname'] . '</td>');
		echo('<td>' . $row['Nachname'] . '</td>');
		echo('<td>' . $row['Alter'] . '</td>');
		echo('</tr>');
	}
	echo('</table>');
	
?>

</div>
	
<?php require("[templates]/footer.php"); ?>