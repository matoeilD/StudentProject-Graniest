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
		<title>Bienvenue sur Graniest !</title>
		<link rel="stylesheet" href="../css/style.css"/>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>

	<body class="formulaire">
	
		<div class="logotype">	
			<img src="../images/logo.png" />
		</div>
		
		<span>
			<p class="inscristoi"> Rejoins la communauté Graniest, inscris-toi ! </p></br>
			<p class="slogan">" l'astuce, c'est de partager "</p>
		</span>
		
		<form action="" method="post">
			<fieldset>
			<legend>Ton profil</legend>
				<p>Ton prénom : <input type="text" name="prenom" value=""/> </p> </br> 
				<p> Ton pseudo :  <input type="text" name="pseudo" value=""/> </p> </br> 
				<p> Fille ou Garçon? <input type="text" name="sexe" value="F ou G"/>  </p> </br> 
				<p>Quelle est ta date de naissance ? <input type="date" name="naissance" value=""/>  </p> </br> 
				<p>Ta petite adresse e-mail ?  <input type="email" name="mail" value="exemple@gmail.com"/>  </p> </br> 
				<p>Tu es plutôt...  <input type="text" name="interet" value="Beauté ou Maison ?"/>  </p> </br> 
			</fieldset>
			
			<input type="submit" name="Envoyer" value="C'est parti !"/>
			
			
		</form>
	</body>
</html>

<?php

if (isset($_POST['prenom']) && isset($_POST['pseudo']) && isset($_POST['sexe'])  && isset($_POST['naissance'])  && isset($_POST['mail'])  && isset($_POST['interet'])) {
	
	connecterbdd($_POST['prenom'],$_POST['pseudo'],$_POST['sexe'],$_POST['naissance'],$_POST['mail'],$_POST['interet']);	
	
}

			if (isset($_POST['prenom']) && isset($_POST['pseudo']) && isset($_POST['sexe'])  && isset($_POST['naissance'])  && isset($_POST['mail'])  && isset($_POST['interet'])) {
			header('location: formulaire2.php');
			exit;   }	




?>