<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>
		<?php
		$variable = "platon \"atlantide\" est belle";
		$phraseTest = "l'éléphant devant l'enveloppe illuminé d'une carte postale joyeuse";

		echo "$variable" . '<br>';

		echo strlen($variable) . "<br>";

		echo 42 . "<br>";

		echo "42" . "<br>";

		echo "l'éléphant devant l'enveloppe illuminé d'une carte postale joyeuse";

		echo "$phraseTest";

	?>
	</p>

	<?php
		$variable = 'platon atlantide est belle';

		echo "$variable" . '<br>';

		echo strlen($variable) . "<br>";

		echo 42 . "<br>";

		echo "42" . "<br>";

		echo 'l\'éléphant devant l\'enveloppe illuminé d\'une carte postale joyeuse' . "<br>";

	?>

	<?php // exo 8

	 $var1= true;
	 echo gettype($var1) . "\n";

	 ?>

	 <br>

	 <?php // exo 9
	 	$mouchoir ='sale';
	 	$sale = 'mouchoir';
	 	$temporaire = &$mouchoir;
	 	$mouchoir = &$sale;
	 	$sale = &$temporaire;

	 	echo "<br>";

	 	echo $mouchoir;
	 	echo $sale;
	 ?>

	 <br>

	 <?php //exo 10
	 	echo 'Prenez ce' . __FILE__ . '<br>';
	 	echo 'Numéro de ligne' . __LINE__ . '<br>';
	 	echo 'Le chemin du dossier contenu le script actif' . __DIR__;
	 ?>

	 <br>

	 <?php //exo 11
		$argent = true;

		if($argent === true)
		{
  			echo "je vis bien";
		}
		else
		{
			echo "je suis mal";
		}
	 ?>
	 <br>

	 <?php //exo 12
	 	$argent = true;
	 	$jeNeVisPasDansUnePoubelle = true;


		if($argent === true)
		{
  			echo "je vis bien";

  			if($jeNeVisPasDansUnePoubelle === false)
  			{
  				echo "je me sens heureux";
  			}
		}

		else
		{
			echo "la vie est triste" . "<br>" . "<br>";
		}

	 ?>
		<?php
	  	// exo 13 // 
	  	//= est utilisé pour l'assignation, genre $variable = 0;
		//== est utilisé pour les comparaisons de valeur.
		//=== est utilisé pour les comparaison de valeur et de type.
		?>

		<?php

		$vivreBien = "je vis bien";
		$argent = 1;

		echo $vivreBien = ($argent >= 1) ? true : false; // poser la question à Aleksander et savoir si on peut mettre une echo dans la ternaire
		
		?>

		
		<br>
		

		<?php
		$i = "je suis née en France"; //exo 18

		switch ($i) {
    			case "je suis née en France":
        			echo "je suis Française";
        			break;
    			case "je suis née en Espagne":
        			echo "je suis Espagnole";
        			break;
    			case "je suis née au Portugal":
        			echo "je suis Portugaise";
        			break;
        		case "je suis née en Allemagne":
        			echo "je suis Allemande";
        			break;
    			case "je suis née en Suisse":
        			echo "je suis Suisse";
        			break;
				}
		?>


		<br>


		<?php // exo 20

		echo date('d/m/Y :H:i:s');

		?>


		<br>


		<?php // exo 21
			$phrase = substr("Lorizzle ipsum bling bling sit amizzle, consectetuer adipiscing elit. Nizzle sapien velizzle, bling bling volutpat, suscipit , gravida vel, arcu. Check it out hizzle that's the shizzle. We gonna chung erizzle. Fo izzle dolor fo turpis tempizzle tempor. Gangsta boom shackalack mofo et turpizzle. Sizzle izzle tortor. Pellentesque uhuh ... yih!", -50);    // retourne "f"
			echo $phrase;
			
		?>


		<br>


		<?php // exo 22
			$nb = "Une cuillère c'est mieux qu'une cuillère";
			echo strlen($nb);
		?>


		<br>


		<?php //exo 23
			$a = 'oui';
					
			if (isset($a)) {
    			echo 'C\'est cool';
			}
			else{
				echo 'C\'est pas cool';
			}

		?>


		<br>


		<?php // exo 24
			$a = 'oui';
					
			if (empty($a)) {
    			echo 'C\'est cool';
			}
			else{
				echo 'C\'est moins cool';
			}
		?>
		<br>
		<?php // exo 5
		      $var10 = 'l\'éléphant';
		      echo '<p>'. $var10 . '</p>';
		?>


	

	
</body>
</html>