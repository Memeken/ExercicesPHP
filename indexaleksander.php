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
		<br>

		<?php  /// exo 26 :déclaration d'une fonction

			function Tva($nombre){ // la fonction s'appelle TVA (variable qui contiendra le nombre appelé par l'echo)

			    return $nombre*1.2; // return est l'application est traduit comme égal, $variable qu'on connait pas encore multiplié par 1.2

			}
			// exécution de la fonction
			echo Tva(20) . "<br>"; 
			echo Tva(10);
			// on demande la fonction TVA pour le nombre 10 par exemple = 12
		?>
		<br>

		<?php  /// exo 27 :déclaration d'une fonction

			function cTva($nb, $tva)
			{ // la fonction s'appelle TVA (variable qui contiendra le nombre appelé par l'echo)

			    return $nb*$tva; // return est l'application est traduit comme égal, $variable qu'on connait pas encore multiplié par 1.2
			}

			// exécution de la fonction
			echo cTva(500 , 1.055) . "<br>";
			echo cTva(1000, 1.20) . "<br>"; // on demande la fonction TVA pour le nombre 10 par exemple = 12
		?>

		<?php  /// exo 28

			function emptyTva($nb, $tva)
			{ // la fonction s'appelle TVA (variable qui contiendra le nombre appelé par l'echo)
				$tva = 1.2;
			    return $nb*$tva; // return est l'application est traduit comme égal, $variable qu'on connait pas encore multiplié par 1.2

				 
			}

			// exécution de la fonction
			echo emptyTva(500 , "") . "<br>";
			$tva=1.055; // voir lionel marche pas
			echo emptyTva(1000 , ""); // on demande la fonction TVA pour le nombre 10 par exemple = 12
		?>
		<br>

		<?php //exo 29
			
				function Meteo($argument1,$argument2) {
					$degres="degrés";
    			
	    			if ($argument2==1 || $argument2==0){
	    				$degres= "degré";
					} 
					else{
						$degres="degrés";
					}

					echo "Nous sommes en $argument1 et il fait $argument2 $degres";
					
				}

				Meteo("hiver",1);
				echo "<br>";
				Meteo("été",30); 
				echo "<br>";
				Meteo("hiver",0);
				echo "<br>";
				Meteo("hiver",-3);
				echo "<br>";
				Meteo(30,"été"); // exo 30 probleme dans l'ordre d'affichage		
		?>
		<br>

		<?php //exo 33

			$a=10;
			$b=2;
			
			echo $a + $b . "<br>";
			echo $a - $b . "<br>";
			echo $a * $b . "<br>";
			echo $a / $b . "<br>";
			echo $a % $b . "<br>";
			echo $a += $b . "<br>";
			echo $a -= $b . "<br>"; // exo 34 = 10
		?>
		<br>
		<?php 
			echo "<table><tr>";
				for($i = 0; $i < 10; $i++) {
					
   					echo "<tr>$i</tr>";

				}
				echo "</tr></table>";
			


			
		?>

		



	

	
</body>
</html>