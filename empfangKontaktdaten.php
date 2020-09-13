<?php require("[templates]/header.php"); ?>
<div id="content">
	<h1>empfangene Kontaktdaten</h1>
<?php
	// hier kommt das If Statement
	if(!empty($_GET["userName"]) && !empty($_GET["message"]))
	{
		// mail("asd@gmail.de", "Eine neue NAchricht von deiner Homepage von" . $_POST["userName"], $_POST["message"]);
		echo "<p>Vielen Dank, " . $_GET["userName"] . $_GET["userName"] . "! Deine Nachricht wurde gesendet!</p>";		
	}
?>
	<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/nShlloNgM2E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<?php require("[templates]/footer.php"); ?>