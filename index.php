
<!DOCTYPE html>
<html>
	<head>
		<Title> Elaborato Individuale Sansone Robert </Title>
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Arbutus+Slab&display=swap" rel="stylesheet">
	</head>
	<body id = "bodyinfo">
		<header>
			Gallerie d'arte
		</header>
		<nav>
			<ul>
				<li><a href="index.php"><Strong><i class="fa fa-fw fa-home"></i> Home</Strong></a></li>
				<li><a href="wagner.php">Collezione Wagner(1872-1889)</a></li>
				<li><a href="dubois.php">Collezione Dubois(1890-1910)</a></li>
				<li><a href="bariano.php">Collezione Bariano(1911-1943)</a></li>
				<li id="info"><a href="info.php"><i class="fa fa-fw fa-info"></i> Info</a></li>
		</ul>
		</nav>
		<?php
		echo "<p id=homeP>Benvenuti nella home page!"."<br>".
			"<p id=parag> In questo sito sarà possibile visionare alcune opere,<br>"
			."<img id= homeimg src= images/picasso_guernica.jpg>"."
			famose per essere simbolo di stili artistici, tra i quali:"."<br><br>".
			"-Espressionismo,<br>
			-Cubismo,<br>
			-Puntinismo,<br>"."
			-Impressionismo,<br>
			-Surrealismo<br><br>
			Usa la barra di navigazione situata in alto per cominciare ad esplorare!";
			
		?>
		<footer id="hominfo">
			<p>Elaborato individuale Sansone Robert - contatto: robert.sansone001@gmail.com<br>
		</footer>
	</body>
</html>
