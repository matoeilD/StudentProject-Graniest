
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>GRANIEST</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/style.css"/>
	</head>


	
	<body class="index">
	
	<!-- Les astuces à gauches -->
		<div class="col-md-2 gauche">
			<div class="colonne">
				<h1>Ajouter une astuce :</h1>
				<ul>
				
					<li><a href="formulaire/formulaire4.php">Maison</a></li>
					<li><a href="formulaire/formulaire3.php">Beaute</a></li>

				</ul>
			</div>
		</div>


		<div class="col-md-8">

				<div class="logo">
					<a href="index.php">
						<img src="images/logo.png" />
					</a>
				</div>

				<div class="bs-example">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Carousel -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>   
						<!-- Le carousel items -->
						<div class="carousel-inner">
			
						   <div class="item active">
								<img src="images/beaute1.jpg" alt="First Slide">
							</div>
							<div class="item">
								<img src="images/beaute2.jpg" alt="FPO Image"" alt="Second Slide">
							</div>
							  <div class="item">
								<img src="images/beaute3.png" alt="FPO Image"" alt="Second Slide">
							</div>
													 
						</div>
						<!-- Carousel contrôle -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
				
				<div class="bs-example">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Carousel indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>   
						<!-- Wrapper for carousel items -->
						<div class="carousel-inner">
			
						   <div class="item active">
								<img src="images/maison1.jpg" alt="First Slide">
							</div>
							<div class="item">
								<img src="images/maison2.jpg" alt="FPO Image"" alt="Second Slide">
							</div>
							  <div class="item">
								<img src="images/maison3.jpg" alt="FPO Image"" alt="Second Slide">
							</div>
													 
						</div>
						<!-- Carousel controls -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
		</div>

		<div class="col-md-2 droite">
		
			<!-- Le profil  -->
		
			<div class="profil">
				<span class="photouser"><img src="images/photouser.jpg" /></span>
				<span class="pseudo"> <a href="pages/profil.php"> <p>Mon<br>compte</p> </a> </span> <!-- -->
			</div>
			
	<!-- Les astuces de ma grand mere  -->
			<div class="mesastuces">
				<a href="pages/astucesdemagm.php"> <p>Les astuces <br> de ma grand-mere </p> </a>
			</div>			
			
			
	<!-- Les astuces les plus populaires  -->
			
			<div class="colonne">
				<div class="boite1">
					<h1>Les astuces les plus vues</h1>
				</div>
				
				<div class="boite2">
					<ul>
						<li><a href="images/ficheastuce1.jpg"> Masque maison au curcuma </a> </li>
							<li><a href="images/ficheastuce2.jpg"> Creme hydratante maison </a> </li>
						<li><a href="images/ficheastuce3.jpg"> Creme anti-ride  </a> </li>
					</ul>
				</div>
			</div>
			
		</div>
	</body>

</html>                                        

 