<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>
		<? php
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

	<? php
		$variable = 'platon atlantide est belle';

		echo "$variable" . '<br>';

		echo strlen($variable) . "<br>";

		echo 42 . "<br>";

		echo "42" . "<br>";

		echo 'l\'éléphant devant l\'enveloppe illuminé d\'une carte postale joyeuse' . "<br>";

	?>

	<? php

	 $var1= true;
	 echo gettype($var1) . "\n";

	 ?>

	 <? php // exo 9
	 	$mouchoir ='sale';
	 	$sale = 'mouchoir';
	 	$temporaire = &$mouchoir;
	 	$mouchoir = &$sale;
	 	$sale = &$temporaire;

	 	echo "<br>";

	 	echo $mouchoir;
	 	echo $sale;
	 ?>

	 <? php // exo 10
	 	

	 ?>

	
</body>
</html>