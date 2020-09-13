<?php require("[templates]/header.php"); ?>

<div id="content">
	<h1>neue Person</h1>
	<p>Person zur Datenbank hinzufügen:</p>





<form action="addPersonenDB.php" method="post">
 <p>Ihr Vorname: <input type="text" name="vorname" /></p>
 <p>Ihr Nachname: <input type="text" name="nachname" /></p>
 <p>Ihr Alter: <input type="text" name="alter" /></p>
 <p><input type="submit" /></p>
</form>


<?php 
	if ($_POST) {
		$vorname = htmlspecialchars($_POST['vorname']);	
		$nachname = htmlspecialchars($_POST['nachname']);	
		$alter = (int)$_POST['alter']; 
		echo $vorname;
		echo $nachname;
		echo $alter;
	
		require('[templates]/connectDB.php');
		$db_results = mysqli_query($db_link, "SELECT Vorname, Nachname, `Alter` FROM personen") 
			or die("Fehler: " . mysqli_error($db_link));
			
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "tutorial";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO personen (Vorname, Nachname, `Alter`)	VALUES ('$vorname', '$nachname', '$alter')";

		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>

</div>
	
<?php require("[templates]/footer.php"); ?>