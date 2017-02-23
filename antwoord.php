
<!DOCTYPE html>
<html>
<head>
	<title>madlips</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form action="process.php" method="" ="POST">

		<h1>MadLips</h1>
	<ul>
	<li>
		<a href="madlips.php">er heerst paniek....</a>
		<a href="onkunde.php">onkunde</a>
	</li>
	</ul>

		<p>Er heerst paniek in het koningkrijk <?php echo $_POST['land'] ?>.
			</p><br>
			<p>
				Koning <?php echo $_POST['docent']?> is ten einde raad en als koning <?php echo $_POST['docent']?> ten einde raad is, dan roep hij zijn ten-einde-raadsheer <?php echo $_POST['naam']?>
			</p><br> 
			<p>
				"<?php echo $_POST['naam']?>! Het is een ramp! Het is een schande! "
			</p><br>
			<p>
				"Sire, Majesteit, Uwe Luidurchtigheid, wat is er aan de hand?"
			</p><br>
			<p>
				"Mijn <?php echo $_POST['dier']?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net Lego voor hem gekocht!"
			</p><br>
			<p>
				"Majesteit, uw <?php echo $_POST['dier']?> komt vast vanzelf terug?"
			</p><br>
			<p>
				"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['bezig']?> leren?"
			</p><br>
			<p>
				"Maar Sire, daar kunt u toch uw <?php echo $_POST['buy']?> voor gebruiken"
			</p><br>
			<p>
				"<?php echo $_POST['naam']?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
			</p><br>
			<p>
				" <?php echo $_POST['activiteit']?>, Sire "
			</p><br>

			</div>
		</div>

	<div id="footer">
		<p>deze website is gemaakt door: Thomas Vink</p>

	</div>
		</form>
			</body>
				</html>
