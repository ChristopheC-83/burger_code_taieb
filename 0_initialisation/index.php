<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page PHP</title>
</head>

<body>
	<h1>Page en PHP</h1>

	<?php include 'menu.php' ?>
	
	<h2>J'introduis php qui nous dit
		<?php
		echo "coucou";
		?>
	</h2>

	<?php
	$nom = "kiki";
	$tableau = [
		"lundi",
		"mardi",
		"mercredi"
	];
	var_dump($GLOBALS);
	?>

	<h3><?php echo $nom ?> apprend le php</h3>
	<h3><?php echo $nom  . " apprend le php" ?></h3>
	<h3><?php echo "$nom  apprend le php" ?></h3>
	<h3><?php echo '$nom  apprend le php' ?></h3>
	<h3><?php echo $tableau[0] ?></h3>
	<h3><?php echo strlen($tableau[0]) ?></h3>
	<h3><?php echo str_word_count("$tableau[0] $tableau[1]") ?></h3>
	<h3><?php echo strrev("$tableau[0] $tableau[1]") ?></h3>
	<h3><?php echo strpos($tableau[1],  "mardi") ?></h3>


	

</body>

</html>