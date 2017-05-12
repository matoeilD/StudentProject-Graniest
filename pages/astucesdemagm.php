<?php

function connecterbdd($nomgm,$agegm,$astucegm) {
		
	$user='root';
	$pass='';
	

		$dbh = new PDO ( 'mysql:host=localhost;dbname=mamie', $user, $pass );
				
		$stmt = $dbh->prepare("INSERT INTO grandmere(nomgm, agegm, astucegm) VALUES (:value1, :value2, :value3)");
		$stmt->bindParam(':value1',$nomgm);
		$stmt->bindParam(':value2', $agegm);
		$stmt->bindParam(':value3', $astucegm);
	
		
		$stmt->execute();

		
	}


?>

<html>
	<head>
		<title>GRANIEST - Les astuces de votre grand-mère</title>
		<link rel="stylesheet" href="../css/style.css"/>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	
	<body class="formulaire">

	</body>
</html>