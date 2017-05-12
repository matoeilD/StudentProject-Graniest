<?php

function connecterbdd($prenom,$pseudo,$sexe,$naissance,$mail,$interet) {
		
	$user='root';
	$pass='';
	

		$dbh = new PDO ( 'mysql:host=localhost;dbname=mamie', $user, $pass );
				
		$stmt = $dbh->prepare("INSERT INTO user(prenom, pseudo, sexe, naissance, mail, interet) VALUES (:value1, :value2, :value3, :value4, :value5, :value6)");
		$stmt->bindParam(':value1',$prenom);
		$stmt->bindParam(':value2', $pseudo);
		$stmt->bindParam(':value3', $sexe);
		$stmt->bindParam(':value4', $naissance);
		$stmt->bindParam(':value5', $mail);
		$stmt->bindParam(':value6', $interet);
		
		$stmt->execute();

		
	}


?>


<html>
	<head>
		<title>GRANIEST - Votre profil</title>
		<link rel="stylesheet" href="../css/style.css"/>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	
	<body class="formulaire">

	</body>
</html>