<?php
	include_once 'dbconnection.php';
?>
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
	<body>
		<header>
			Gallerie d'arte
		</header>
		<ul>
				<li><a href="index.php"><Strong><i class="fa fa-fw fa-home"></i> Home</Strong></a></li>
				<li><a href="wagner.php">Collezione Wagner(1872-1889)</a></li>
				<li><a href="dubois.php">Collezione Dubois(1890-1910)</a></li>
				<li><a href="bariano.php">Collezione Bariano(1911-1943)</a></li>
				<li id="info"><a href="info.php"><i class="fa fa-fw fa-info"></i> Info</a></li>
		</ul>
	
	<?php
		echo "<br>";
		
		$sql = "SELECT * FROM view_all WHERE nome_collezione = 'Sammlung Wagner' ORDER BY cognome_autore;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0){
			
			while($row = mysqli_fetch_assoc($result)){
				//scala 15:1
				if($row["percorso_immagine"] == "images/dali_la_persistenza_della_memoria.jpg"){
					echo "<img src = $row[percorso_immagine] height=360 width=495 >"."<br>"."Dimensioni: 24x33";
				}
				//scala 6:1
				if($row["percorso_immagine"] == "images/manet_bar.jpg"){
					echo "<img src = $row[percorso_immagine] height=576 width=780>"."<br>"."Dimensioni: 96x130";
				}
				//scala 6:1
				if($row["percorso_immagine"] == "images/monet_armonia_verde.jpg"){
					echo "<img src = $row[percorso_immagine]  height=534 width=600>"."<br>"."Dimensioni: 89x100";
				}
				//scala 7:1
				if($row["percorso_immagine"] == "images/monet_levar_del_sole.jpg"){
					echo "<img src = $row[percorso_immagine] height=336 width=441>"."<br>"."Dimensioni: 48x63";
				}
				//scala 4:1
				if($row["percorso_immagine"] == "images/munch_danza.jpg"){
					echo "<img src = $row[percorso_immagine] height=500 width=764>"."<br>"."Dimensioni: 125x191";
				}
				//scala 5:1
				if($row["percorso_immagine"] == "images/munch_urlo.jpg"){
					echo "<img src = $row[percorso_immagine] height=455 width=365>"."<br>"."Dimensioni: 91x73";
				}
				//scala 2:1
				if($row["percorso_immagine"] == "images/picasso_demoiselles.jpg"){
					echo "<img src = $row[percorso_immagine] height=486 width=466>"."<br>"."Dimensioni: 243x233";
				}
				//scala 1:1
				if($row["percorso_immagine"] == "images/picasso_guernica.jpg"){
					echo "<img src = $row[percorso_immagine] height=349 width=777>"."<br>"."Dimensioni: 349x777";
				}
				//scala 5:1
				if($row["percorso_immagine"] == "images/pollock_lupa.jpg"){
					echo "<img src = $row[percorso_immagine] height=410 width=670>"."<br>"."Dimensioni: 41x67";
				}
				//scala 1:1
				if($row["percorso_immagine"] == "images/pollock_murale.jpg"){
					echo "<img src = $row[percorso_immagine] height=400 width=600>"."<br>"."Dimensioni: 400x600";
				}
				//scala 3:1
				if($row["percorso_immagine"] == "images/seurat_domenica_pomeriggio.jpg"){
					echo "<img src = $row[percorso_immagine] height=624 width=924>"."<br>"."Dimensioni: 208x308";
				}
				//scala 17:1
				if($row["percorso_immagine"] == "images/seurat_tour_eiffel.jpg"){
					echo "<img src = $row[percorso_immagine] height=408 width=255 >"."<br>"."Dimensioni: 24x15";
				}
				//scala 36:1
				if($row["percorso_immagine"] == "images/signac_le_port_de.jpg"){
					echo "<img src = $row[percorso_immagine] height=390 width=486>"."<br>"."Dimensioni: 65x81";
				}
				//scala 8:1
				if($row["percorso_immagine"] == "images/vincent_campo_grano.jpg"){
					echo "<img src = $row[percorso_immagine] height=400 width=800>"."<br>"."Dimensioni: 50x100";
				}
				//scala 6:1
				if($row["percorso_immagine"] == "images/vincent_notte_stellata.jpg"){
					echo "<img src = $row[percorso_immagine] height=444 width=552>"."<br>"."Dimensioni: 74x92";
				}
				//scala 10:1
				if($row["percorso_immagine"] == "images/dali_giraffa_in_fiamme.jpg"){
					echo "<img src = $row[percorso_immagine] height=350 width=270>"."<br>"."Dimensioni: 35x27";
				};
				
				
				/*"<img src = $row[percorso_immagine] width=660 height=400>".*/
				echo "<br>".$row["nome_dipinto"].
				", ".$row["nome_autore"]." ".$row["cognome_autore"]."<br>"."Anno uscita: ".$row["anno_uscita"]."<br>".
				"Corrente artistica: "." ".$row["stile_artistico"]."<br>"."<br>"."<br>";
				
			}
		}
	?>
	<footer>
	  <p>Elaborato individuale Sansone Robert - contatto: robert.sansone001@gmail.com<br>
	</footer>
	</body>
</html>
