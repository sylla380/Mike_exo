<?php
  if (!empty ($_POST)){ // le ! c'est pour le contraire

	  $mike = explode(" ", rtrim($_POST["Mike"])); //explode sert a couper une chaine de caractére

	  if (count ($mike) < 3)

	  	echo "Nombre de paramétres pas assez important";
		else if (count ($mike) > 3)
			echo "Nombre de paramétres trop important";
			else if ($mike [0] != "Mike")
			echo "Premier valeur incorrect";
			else if (!ctype_digit($mike[1]))
                echo "Votre paramétre $mike[1] n'ai pas correct";
            else if (!ctype_digit($mike[2]))
                echo "Votre parametre $mike[2] n'ai pas correct";
            else{
				if($mike[1]%2);
                echo "Votre parametre est impaire";
                else
                echo "Votre parametre est paire";
			}
}
 ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title> Piscine </title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form method="post">
					<div class="form-group">
						<label for="text">Entre votre valeur:</label>
						<input type="text" class="form-control" id="Mike" name="Mike">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</body>
</html>
