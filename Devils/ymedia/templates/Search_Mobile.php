<!DOCTYPE html>
<html>
	<head>
		<title>Devil's</title>
		<!-- Latest compiled and minified CSS --->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<!--<link rel="stylesheet" type="text/css" href="public/navbar_profil_publication.css">

		<!-- link for icon-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


	</head>
	<style type="text/css">
		.scroll{
			overflow-y: auto;
			max-height: 250px;
		}
	</style>
	<body class="bg-white" style="margin: 0px;">

		<nav class="navbar navbar-expand-sm bg-white navbar-dark fixed-bottom" style="border-top: 1px solid black ">
		  	<div class="row w-100 text-center">
			  	<li class="col-3" style=" border-right: 1px solid black; list-style-type: none;">
			  		<a href="Acceuil.php" class="text-dark" >
		 				<i class="fas fa-home" style="font-size: 30px;"></i>
		 			</a>
		  		</li>

			  	<li class="col-3" style=" border-right: 1px solid black; list-style-type: none;">
			  		<a href="Search_Mobile.php" class="text-dark" >
						<i class="fas fa-search" style="font-size: 30px;"></i>
		  			</a>
		  		</li>

			  	<li class="col-3" style=" border-right: 1px solid black; list-style-type: none;">
			  		<a href="Notification_Mobile.php" class="text-dark" >
						<i class="far fa-heart" style="font-size: 30px;"></i>
		  			</a>
			  	</li>

			  	<li class="col-3" style=" list-style-type: none;">
			  		<a href="profil.php" class="text-dark" >				
			  			<img src="../man.png" width="30" class="rounded-circle">
			  		</a>
			  	</li>
			  </div>
		</nav>

		<div class="row w-100">
			<input type="text" placeholder="Rechercher" class=" form-control  border-bottom col-11" name="">
			<i class="fa fa-search mt-1 ml-1" style="font-size: 25px;"></i>
		</div>
		<div id="result_search"></div>
		<div class="mt-3 mb-2">
			<strong class=""> Résultat</strong>
		</div>

		<ul class="list-group mb-3">
			<li class="list-group-item">
				<a class="text-dark" href="#">
					<div class="row">

						<div class="col-1">
							<img src="../logo_php.png" height="500" class="rounded-circle" style="max-width: 100px; max-height: 100px;">
						</div>
						<div class="col-10 ml-3">
							<p class=""><strong >John Doe</strong></p>
							<p class="text-truncate">Bonjouor je m'appelle yann-arthur Tcheumani</br>je suis actuellement en terminale et je sus entrain de créer mon propre réseaux social rester avec mo pour connaître mes parpaissit X)</p> 
						</div>
					</div>
				</a>
		  	</li>
			<li class="list-group-item">
				<div class="row">

					<div class="col-1">
						<img src="../logo_php.png" height="500" class="rounded-circle" style="max-width: 100px; max-height: 100px;">
					</div>
					<div class="col-10 ml-3">
						<p class=""><strong >John Doe</strong></p>
						<p class="text-truncate">Bonjouor je m'appelle yann-arthur Tcheumani</br>je suis actuellement en terminale et je sus entrain de créer mon propre réseaux social rester avec mo pour connaître mes parpaissit X)</p> 
					</div>
				</div>
		  	</li>
			<li class="list-group-item">
				<div class="row">

					<div class="col-1">
						<img src="../logo_php.png" height="500" class="rounded-circle" style="max-width: 100px; max-height: 100px;">
					</div>
					<div class="col-10 ml-3">
						<p><strong >John Doe</strong></p>
						<p class="text-truncate">Bonjouor je m'appelle yann-arthur Tcheumani</br>je suis actuellement en terminale et je sus entrain de créer mon propre réseaux social rester avec mo pour connaître mes parpaissit X)</p> 
					</div>
				</div>
		  	</li>
		</ul>
	</body>
</html>