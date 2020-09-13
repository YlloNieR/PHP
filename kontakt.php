<?php require("[templates]/header.php"); ?>
			<div id ="content">
				<h1>Kontakt</h1>
				<p>hier kannst du Kontakt aufnehmen:</p>
				<form action="empfangKontaktdaten.php" method="GET">
					<label>Name</label>
					<input name="userName" type="text"/><br />
					<textarea name="message"></textarea><br />
					<input name="messageSubmit" value="Nachricht senden" type="submit"/>
				</form>
			</div>
<?php require("[templates]/footer.php"); ?>