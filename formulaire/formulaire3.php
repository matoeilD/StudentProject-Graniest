<?php

function connecterbdd($titre,$description,$media) {
		
	$user='root';
	$pass='';
	

		$dbh = new PDO ( 'mysql:host=localhost;dbname=mamie', $user, $pass );
				
		$stmt = $dbh->prepare("INSERT INTO astucebeaute(titre, description, media) VALUES (:value1, :value2, :value3)");
		$stmt->bindParam(':value1',$titre);
		$stmt->bindParam(':value2', $description);
		$stmt->bindParam(':value3', $media);
	
		
		$stmt->execute();

		
	}


?>


<html>
	<head>
		<title>GRANIEST - Postez votre astuce</title>
		<link rel="stylesheet" href="../css/style.css"/>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	
<html>
	<head>
		<title>GRANNIEST - Postez votre astuce</title>
		<link rel="stylesheet" href="css/style.css"/>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	
	<body class="formulaire">
		<form action="" method="post">
			<fieldset>
				<legend> Mon astuce </legend>
				<p> Titre de mon astuce beauté : <input type="text" name="titre" value=""/> </p> </br> 
				<p> Mon astuce : <input type="text" name="description" value=""/> </p> </br> 
				
				<p> <form enctype="multipart/form-data" action="fileupload.php" method="post">
			  <input type="hidden" name="media" value="100000" />
			  Ajouter une photo ou une vidéo :  <input type="file" name="monfichier" />
			</fieldset>

			<input type="submit" name="Envoyer" value="Valider mon astuce"//>
	
		</form>

	</body>



<?php

if (isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['media'])) {
	
	connecterbdd($_POST['titre'],$_POST['description'],$_POST['media']);	
	
}
	 
			if (isset($_POST['titre']) && isset($_POST['description']) ) {
			header('location:../index.php');
			exit;   }	



?>