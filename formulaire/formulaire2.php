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


<head>
	<title>Qui est votre mamie ?</title>
	<link rel="stylesheet" href="../css/style.css"/>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body class="formulaire">
	<form action="" method="post">
		<fieldset>
		<legend> Ta grand-mère </legend>
			<p>Le petit nom de ta grand-mère ? : <input type="text" name="nomgm" value=""/> </p> </br> 
			<p> Son age ?  <input type="text" name="agegm" value=""/> </p> </br> 
			<p> Sa meilleure astuce ? <input type="text" name="astucegm" value=""/>  </p> </br> 
		</fieldset>
		<input type="submit" name="Envoyer" value="Valider la meilleure astuce de ma grand-mère"/>
		
	</form>
</body>
</html>

<?php

if (isset($_POST['nomgm']) && isset($_POST['agegm']) && isset($_POST['astucegm'])) {
	
	connecterbdd($_POST['nomgm'],$_POST['agegm'],$_POST['astucegm']);	
	
}


			if (isset($_POST['nomgm']) && isset($_POST['agegm']) && isset($_POST['astucegm'])) {
			header('location: ../index.php');
			exit;   }	




?>