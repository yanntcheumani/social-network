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
		<!--affichage pour les ecrans extra large-->
		<section class="bg-black m-0 p-0 d-none d-xl-block">
			<nav class="navbar navbar-expand-xl navbar-dark bg-info">
			      <a class="navbar-brand" style="color: #ff00ff" href="#">Devil's</a>
			      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="navbar-toggler-icon"></span>
			      </button>

			      <div class="collapse navbar-collapse" id="navbarsExample06">
			        <ul class="navbar-nav mr-auto">

			          <li class="nav-item">
			            <a class="nav-link text-white" href="#">profil</a>
			          </li>

			          	<li class="nav-item dropdown">
			            	<a class="nav-link dropdown-toggle text-white" href="http://example.com" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notificaton</a>
			            	<div class="dropdown-menu" aria-labelledby="dropdown06">
			             	 	<a class="dropdown-item" href="#">
			             	 		
				              		<!--div notif lessage-->
									<div class="media border-0 ">
									  <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
									  <div class="media-body">
									    <h6>John Doe <small><i>February 19</i></small></h6>
									    <p class="text-truncate w-75">jon doe a aimé votre publiczton</p>
									  </div>
									</div>
									<!-- end div-->

			             	 	</a>
			              		<a class="dropdown-item" href="#">Another action</a>
			              		<a class="dropdown-item" href="#">Something else here</a>
			            	</div>
			          	</li>

			          	<li class="nav-item dropdown">
				            <a class="nav-link dropdown-toggle text-white" href="http://example.com" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Message <span class="badge badge-danger">4</span></a>
				            <div class="dropdown-menu" aria-labelledby="dropdown06">
				              	<a class="dropdown-item bg-light" href="#">

				              		<!--div notif lessage-->
									<div class="media border-0 w-100">
									  <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
									  <div class="media-body ">
									    <h6>John Doe <small><i>February 19</i></small></h6>
									    <p class="text-truncate w-50">Salut mec moi c'est John Doe j'aime lire manger écrire jouer regarder netflix X) et j'ai 14 ans bref si tu veut en savoir plus vient me parler X) mdr bon a++ dans lbus</p>
									  </div>
									</div>
									<!-- end div-->

				              	</a>
				              <a class="dropdown-item" href="#">Another action</a>
				              <a class="dropdown-item border-top" href="#">Tout voir</a>
				            </div>
			          	</li>

			        </ul>
			        <form class="form-inline my-2 my-md-0">
			          <input class="form-control" style="width: 500px;" type="text" placeholder="Search">
			        </form>
			      </div>
			</nav>

			<div class="row mt-1 m-0">


				<!--Start profil status-->				
				<div class="col-3">

					<div class="card bg-white">
						
						<div class="card-header bg-white border-bottom-0">
							<div class="row">
								<div class="card-image col-3">
									<img src="../man.png" class="rounded-circle" width="75">
								</div>
								<div class="col-5 text-center mt-4 ml-2 card-title">
									John Doe
								</div>
								<div class="col-3 mt-4 float-right ml-2">

									<a class="text-dark" href="" id="dropdown_param_user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v"></i>
									</a>
					            	<div class="dropdown-menu" aria-labelledby="dropdown_param_user">
					             	 	<div>
					             	 		<a class="dropdown-item" href="#">
					             	 			Signaler
					             	 		</a>

					             	 	</div>
					              		<a class="dropdown-item" href="#">Bloquer</a>
					              		<a class="dropdown-item" href="#">Envoyer un message</a>
					            	</div>

								</div>
							</div>
						</div>


						<div class="card-body bg-white">
							<!--<div class="row">
								<div class="col-4">
									<div class="m-0 card-title text-center" data-toggle="modal" data-target="#list_follower">
										<strong style="font-size: 15px;">Follower</strong>
										500
									</div>
								</div>


								<!--Model for the followers
								<div class="modal" id="list_follower">
								  <div class="modal-dialog">
								    <div class="modal-content">

									    <!-- Modal Header 
									    <div class="modal-header">
										    <h4 class="modal-title">Followers</h4>
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									    </div>

									    <!-- Modal body 
									    <div class="modal-body scroll">
											<!--one followers

											<div class="card-header row m-1">

												<div class="card-image  mb-1 col-3">
													<img src="../female-user.png" class="rounded-circle" width="75">
												</div>
												<div class="card-text col-6 mt-3">
													John Doe
												</div>
												<div class="card-text col-3 mt-3">
													<button class="btn bg-primary">followers</button>
												</div>
												
											</div>    
											<!--end list

											
									    </div>

									    <!-- Modal footer 
									    <div class="modal-footer">
									        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									    </div>

								    </div>
								  </div>
								</div>
								<!-- end Modal for followers

								<div class="col-4">
									<div class="m-0 card-title text-center" data-toggle="modal" data-target="#list_following">
										<strong style="font-size: 15px;">following</strong>
										500
									</div>
								</div>


								<!--Model for the following
								<div class="modal" id="list_following">
								  <div class="modal-dialog">
								    <div class="modal-content">

								      <!-- Modal Header 
								      <div class="modal-header">
								        <h4 class="modal-title">Followng</h4>
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								      </div>

								      <!-- Modal body 
								      <div class="modal-body scroll">

											<!--one followers

											<div class="card-header row m-1">

												<div class="card-image  mb-1 col-3">
													<img src="../female-user.png" class="rounded-circle" width="75">
												</div>
												<div class="card-text col-6 mt-3">
													John Doe
												</div>
												<div class="card-text col-3 mt-3">
													<button class="btn" style="background-color: #ff00ff">follow</button>
												</div>
												
											</div>    
											<!--end list
											



								      </div>

								      <!-- Modal footer 
								      <div class="modal-footer">
								        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								      </div>

								    </div>
								  </div>
								</div>
								<!--end Modal for following


								<div class="col-4">
									<div class="m-0 card-title text-center">
										<strong style="font-size: 15px;">Post</strong></br>
										500
									</div>
								</div>
							</div>-->
							<div class="card-text">
								<p style="font-size: 15px; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in </p>
							</div>
						</div>

					</div>

					<!-- div followers -->
					<div class="card mt-2">
						<div class="card-header text-center bg-white" style="font-size: 15px;"> 
							<strong>Followers</strong>
						</div>
						<div class="card-body bg-white scroll">
							<ul class="w-100 list-group">
							  	<li class="border-bottom pb-1" style="list-style-type: none; ">
							  		<div class="row">
								  		<div class="col-4 mb-1">
								  			<img src="../female-user.png" class="rounded-circle" width="75">
								  		</div>
										<div class="col-4 mt-3 mb-1">John Doe</div>
							  			<div class="col-4 mt-2">
							  				<button class="btn bg-primary mb-1">follow</button>
							  			</div>
							  		</div>
							  	</li>
							  	<li class="border-bottom pt-2" style="list-style-type: none; ">
							  		<div class="row">
								  		<div class="col-4 mb-1">
								  			<img src="../female-user.png" class="rounded-circle" width="75">
								  		</div>
										<div class="col-4 mt-3 mb-1">John Doe</div>
							  			<div class="col-4 mt-2">
							  				<button class="btn bg-primary mb-1">follow</button>
							  			</div>
							  		</div>
							  	</li>
							  	<li class="border-bottom pb-1" style="list-style-type: none; ">
							  		<div class="row">
								  		<div class="col-4 mb-1">
								  			<img src="../female-user.png" class="rounded-circle" width="75">
								  		</div>
										<div class="col-4 mt-3 mb-1">John Doe</div>
							  			<div class="col-4 mt-2">
							  				<button class="btn bg-primary mb-1">follow</button>
							  			</div>
							  		</div>
							  	</li>
							  	<li class="border-bottom pt-2" style="list-style-type: none; ">
							  		<div class="row">
								  		<div class="col-4 mb-1">
								  			<img src="../female-user.png" class="rounded-circle" width="75">
								  		</div>
										<div class="col-4 mt-3 mb-1">John Doe</div>
							  			<div class="col-4 mt-2">
							  				<button class="btn bg-primary mb-1">follow</button>
							  			</div>
							  		</div>
							  	</li>
							</ul>
						</div>
					</div>
					<!-- end  div following -->


					<!-- div following -->
					<div class="card mt-2">
						<div class="card-header text-center bg-white" style="font-size: 15px;"> 
							<strong>following</strong>
						</div>
						<div class="card-body bg-white scroll">
							<ul class="w-100 list-group">
							  	<li class="border-bottom pb-1" style="list-style-type: none; ">
							  		<div class="row">
								  		<div class="col-4 mb-1">
								  			<img src="../female-user.png" class="rounded-circle" width="75">
								  		</div>
										<div class="col-4 mt-3 mb-1">John Doe</div>
							  			<div class="col-4 mt-2">
							  				<button class="btn bg-primary mb-1">follow</button>
							  			</div>
							  		</div>
							  	</li>
							  	<li class="border-bottom pt-2" style="list-style-type: none; ">
							  		<div class="row">
								  		<div class="col-4 mb-1">
								  			<img src="../female-user.png" class="rounded-circle" width="75">
								  		</div>
										<div class="col-4 mt-3 mb-1">John Doe</div>
							  			<div class="col-4 mt-2">
							  				<button class="btn bg-primary mb-1">follow</button>
							  			</div>
							  		</div>
							  	</li>
							</ul>
						</div>
					</div>
					<!-- end div following -->

					<div class="bg-primary mt-2" style="height: 390px;">PUB</div>

				</div>
				<!--end profil status-->


				<div class="col-9 ">

					<!-- form publication-->
					<div class="card row">
						<div class="card-header bg-white">
							<i class="fa fa-pen"></i>Post
						</div>
						<div class="card-body">
							<form action="" method="post">
								<textarea class="form-control" rows="3" placeholder="Tapez quelque chose.."></textarea>

							  	<div class="form-group">
							    	<label for="exampleFormControlFile1">Image 1</label>
							    	<input type="file" class="form-control-file" id="exampleFormControlFile1" required>
							  	</div>
								<button class="btn bg-primary float-right mt-1">Publier</button>
							</form>
						</div>
					</div>
					<!--end form publication-->

					<div class="card mt-2">
						<div class="card-header border-0 bg-white">
							<!--<div class="row">
								<div class="col-1 card-image">
									<img src="../man.png" class="rounded-circle" width="75">
								</div>
								<div class="card-text ml-3">
									<strong>John Doe</strong><br/>
									<p class="text-muted">Il y a 5minute</p>
									<i class="fa fa-ellipsis-v text-right"></i> 
								</div>
							</div>-->

							<!--div header publication-->
							<div class="media p-3">
								<img src="../man.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" width="75">
								<div class="media-body">
									<h4>John Doe <small></br><i>Posted on February 19, 2016</i></small></h4>
								</div>
							  	<div class="float-right">

				            		<a class="nav-link text-dark" href="http://example.com" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				            			<i class="fa fa-ellipsis-v"></i>
				            		</a>
				            		<div class="dropdown-menu" aria-labelledby="dropdown06">
				             	 		<a class="dropdown-item" href="#">
				             	 			signaler la publication
				             	 		</a>
				              			<a class="dropdown-item" href="#">
				              				bloquer
				              			</a>
				              			<a class="dropdown-item" href="#"></a>
				            		</div>
							  </div>
							</div>
							<!--end  header div publication-->
							<div class="card-body">
								<img src="../logo_php.png" width="900" style="max-width: 950px;">
								<div class="row border-top">
									<div class="col-1">
										<i class="far fa-heart mt-2" style="font-size: 30px;"></i>
									</div>

									<div class="col-1">
										<label for="comment">
											<i class="far fa-comment mt-2" style="font-size: 30px;"></i>
										</label>
									</div>

									<div class="col-4">
										<i class="far fa-paper-plane mt-2" style="font-size: 30px;"></i>
									</div>
								</div>
							</div>
							<div class="card-footer bg-white">
								<div class="media border-bottom p-3">
									<img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" width="75">
								  	<div class="media-body">
								    	<h4>John Doe <small><i>Posted on February 19</i></small></h4>
								    	<p>voci le commentaire</p>
								  	</div>
								</div>

								<div class="scroll">
									<div class="media border-bottom p-3">
										<img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" width="75">
									  	<div class="media-body">
									    	<h4>John Doe <small><i>Posted on February 19</i></small></h4>
									    	<p>voci le commentaire</p>
									  	</div>
									</div>

									<div class="media border-bottom p-3">
										<img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" width="75">
									  	<div class="media-body">
									    	<h4>John Doe <small><i>Posted on February 19</i></small></h4>
									    	<p>voci le commentaire</p>
									  	</div>
									</div>

									<div class="media border-bottom p-3">
										<img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" width="75">
									  	<div class="media-body">
									    	<h4>John Doe <small><i>Posted on February 19</i></small></h4>
									    	<p>voci le commentaire</p>
									  	</div>
									</div>

									<div class="media border-bottom p-3">
										<img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" width="75">
									  	<div class="media-body">
									    	<h4>John Doe <small><i>Posted on February 19</i></small></h4>
									    	<p>voci le commentaire</p>
									  	</div>
									</div>

								</div>
								<form method="post" action="" class="mt-4">
									<div class="row">								
										<input id="comment" type="text" name="" placeholder="écrvez votre commentaire" class="border-bottom form-control col-10">

										<button class="btn bg-success col-1 ml-3">valider</button>
								</form>
							</div>
						</div>
					</div>


				</div>

			</div>
		</section>

		<!-- affichage pour les ecrans large-->
		<section class=" d-none d-lg-block d-xl-none">

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

			<!--div card profil-->
			<div class="card">
				<div class="card-header bg-white">
					<!--image and stat profil button follow-->
					<div class="row pb-1">
						<div class="ml-5 col-4 card-image">
							<img src="../man.png"/ width="75" class="rounded-circle">
						</div>
						<div class="col-6 text-center">
							<div class="row">
								<div class="col-4">
									<div class="m-0 card-title text-center" data-toggle="modal" data-target="#list_follower">
										500<br/>
										<strong style="font-size: 15px;">Follower</strong>
									</div>
								</div>


								<!--Model for the followers-->
								<div class="modal" id="list_follower">
								  <div class="modal-dialog">
								    <div class="modal-content">

									    <!-- Modal Header -->
									    <div class="modal-header">
										    <h4 class="modal-title">Followers</h4>
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									    </div>

									    <!-- Modal body -->
									    <div class="modal-body scroll">
											<!--one followers-->

											<div class="card-header row m-1">

												<div class="card-image  mb-1 col-3">
													<img src="../female-user.png" class="rounded-circle" width="75">
												</div>
												<div class="card-text col-6 mt-3">
													John Doe
												</div>
												<div class="card-text col-3 mt-3">
													<button class="btn bg-primary">followers</button>
												</div>
												
											</div>    
											<!--end list-->

											
									    </div>

									    <!-- Modal footer -->
									    <div class="modal-footer">
									        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									    </div>

								    </div>
								  </div>
								</div>
								<!-- end Modal for followers-->

								<div class="col-4">
									<a href="#" class="text-dark" style="text-decoration-line: none;">
										<div class="m-0 card-title text-center" data-toggle="modal" data-target="#list_following">
											500</br>
											<strong style="font-size: 15px;">following</strong>
										</div>
									</a>
								</div>


								<!--Model for the following-->
								<div class="modal" id="list_following">
								  <div class="modal-dialog">
								    <div class="modal-content">

								      <!-- Modal Header -->
								      <div class="modal-header">
								        <h4 class="modal-title">Followng</h4>
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								      </div>

								      <!-- Modal body -->
								      <div class="modal-body scroll">

											<!--one followers-->

											<div class="card-header row m-1">

												<div class="card-image  mb-1 col-3">
													<img src="../female-user.png" class="rounded-circle" width="75">
												</div>
												<div class="card-text col-6 mt-3">
													John Doe
												</div>
												<div class="card-text col-3 mt-3">
													<button class="btn" style="background-color: #ff00ff">follow</button>
												</div>
												
											</div>    
											<!--end list-->
											



								      </div>

								      <!-- Modal footer -->
								      <div class="modal-footer">
								        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								      </div>

								    </div>
								  </div>
								</div>
								<!--end Modal for following-->


								<div class="col-4">
									<div class="m-0 card-title text-center">
										500</br>
										<strong style="font-size: 15px;">Post</strong>
										
									</div>
								</div>


							</div>
						</div>
						<div class="col-1">
							<div class="row">
								<div class="col-9 ">
									<button class="btn btn-outline-primary mb-1">Modifier profil</button>
								</div>
							</div>
						</div>
					</div>

					<div class="card-text">
						<strong class="ml-5 pl-2">Yann T</strong>
						<p class="ml-5 pl-2 text-muted" style="font-size: 15px;">blog personnel</p>
						<p class="ml-5 mt-n3 pl-2">
							17years old</br>
							back-end developer
							create a social network @devil.sofficiel
							i put my tic tact toe in my github the link
						</p>
					</div>
				</div>


				<div class="card-body">
					<div class="row mb-5">
						<div class="col-4 pb-2 w-100">
							<a href="publication.php">
								<img src="../logo_php.png" style="max-width: 500px; max-height: 300px;">
							</a>
						</div>
						<div class="col-4 pb-2">
							<a href="publication.php">
								<img src="../logo_php.png" style="width: auto; max-width: 500px; max-height: 300px;">
							</a>
						</div>
						<div class="col-4 pb-2">
							<a href="publication.php">
								<img src="../man.png" style=" width:auto ;max-width: 300px; max-height: 300px;">
							</a>
						</div>
					</div>
				</div>

			</div>

			<!--end div card profl-->

		</section>

		<!-- affichage pour les écrans médium-->
		<section class="m-0 p-0 d-none d-md-block d-lg-none">
			
			<nav class="navbar navbar-expand-sm bg-white navbar-dark fixed-bottom" style="border-top: 1px solid black ">
			  	<div class="row w-100 text-center">
			  		<li class="col-3" style=" border-right: 1px solid black; list-style-type: none;">
			  			<a href="Acceuil.php" class="text-dark" >
			  				<i class="fas fa-home" style="font-size: 30px;"></i>
			  			</a>
			  		</li>

			  		<li class="col-3" style=" border-right: 1px solid black; list-style-type: none;">
			  			<a href="Acceuil.php" class="text-dark" >
			  				<i class="fas fa-search" style="font-size: 30px;"></i>
			  			</a>
			  		</li>

			  		<li class="col-3" style=" border-right: 1px solid black; list-style-type: none;">
			  			<a href="Acceuil.php" class="text-dark" >
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

			<!--div card profil-->
			<div class="card">
				<div class="card-header bg-white">
					<!--image and stat profil button follow-->
					<div class="row pb-1">
						<div class="ml-5 col-4 card-image">
							<img src="../man.png"/ width="75" class="rounded-circle">
						</div>
						<div class="col-6 text-center">
							<div class="row">
								<div class="col-4">
									<div class="m-0 card-title text-center" data-toggle="modal" data-target="#list_follower">
										500<br/>
										<strong style="font-size: 15px;">Follower</strong>
									</div>
								</div>


								<!--Model for the followers-->
								<div class="modal" id="list_follower">
								  <div class="modal-dialog">
								    <div class="modal-content">

									    <!-- Modal Header -->
									    <div class="modal-header">
										    <h4 class="modal-title">Followers</h4>
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									    </div>

									    <!-- Modal body -->
									    <div class="modal-body scroll">
											<!--one followers-->

											<div class="card-header row m-1">

												<div class="card-image  mb-1 col-3">
													<img src="../female-user.png" class="rounded-circle" width="75">
												</div>
												<div class="card-text col-6 mt-3">
													John Doe
												</div>
												<div class="card-text col-3 mt-3">
													<button class="btn bg-primary">followers</button>
												</div>
												
											</div>    
											<!--end list-->

											
									    </div>

									    <!-- Modal footer -->
									    <div class="modal-footer">
									        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									    </div>

								    </div>
								  </div>
								</div>
								<!-- end Modal for followers-->

								<div class="col-4">
									<a href="#" class="text-dark" style="text-decoration-line: none;">
										<div class="m-0 card-title text-center" data-toggle="modal" data-target="#list_following">
											500</br>
											<strong style="font-size: 15px;">following</strong>
										</div>
									</a>
								</div>


								<!--Model for the following-->
								<div class="modal" id="list_following">
								  <div class="modal-dialog">
								    <div class="modal-content">

								      <!-- Modal Header -->
								      <div class="modal-header">
								        <h4 class="modal-title">Followng</h4>
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								      </div>

								      <!-- Modal body -->
								      <div class="modal-body scroll">

											<!--one followers-->

											<div class="card-header row m-1">

												<div class="card-image  mb-1 col-3">
													<img src="../female-user.png" class="rounded-circle" width="75">
												</div>
												<div class="card-text col-6 mt-3">
													John Doe
												</div>
												<div class="card-text col-3 mt-3">
													<button class="btn" style="background-color: #ff00ff">follow</button>
												</div>
												
											</div>    
											<!--end list-->
											



								      </div>

								      <!-- Modal footer -->
								      <div class="modal-footer">
								        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								      </div>

								    </div>
								  </div>
								</div>
								<!--end Modal for following-->


								<div class="col-4">
									<div class="m-0 card-title text-center">
										500</br>
										<strong style="font-size: 15px;">Post</strong>
										
									</div>
								</div>


							</div>
						</div>
						<div class="col-1">
							<div class="row">
								<div class="col-9 ">
									<button class="btn btn-outline-primary mb-1">Modifier profil</button>
								</div>
							</div>
						</div>
					</div>

					<div class="card-text">
						<strong class="ml-5 pl-2">Yann T</strong>
						<p class="ml-5 pl-2 text-muted" style="font-size: 15px;">blog personnel</p>
						<p class="ml-5 mt-n3 pl-2">
							17years old</br>
							back-end developer
							create a social network @devil.sofficiel
							i put my tic tact toe in my github the link
						</p>
					</div>
				</div>


				<div class="card-body">
					<div class="row mb-5">
						<div class="col-4 pb-2 w-100">
							<a href="publication.php">
								<img src="../logo_php.png" style="max-width: 500px; max-height: 300px;">
							</a>
						</div>
						<div class="col-4 pb-2">
							<a href="publication.php">
								<img src="../logo_php.png" style="width: auto; max-width: 500px; max-height: 300px;">
							</a>
						</div>
						<div class="col-4 pb-2">
							<a href="publication.php">
								<img src="../man.png" style=" width:auto ;max-width: 300px; max-height: 300px;">
							</a>
						</div>
					</div>
				</div>

			</div>

			<!--end div card profl-->
		</section>

		<section class="bg-success d-none d-sm-block d-md-none">
			<nav class="navbar navbar-expand-sm bg-white navbar-dark fixed-bottom" style="border-top: 1px solid black ">
			  	<div class="row w-100 text-center">
			  		<li class="col-3" style=" border-right: 1px solid black; list-style-type: none;">
			  			<a href="Acceuil.php" class="text-dark" >
			  				<i class="fas fa-home" style="font-size: 30px;"></i>
			  			</a>
			  		</li>

			  		<li class="col-3" style=" border-right: 1px solid black; list-style-type: none;">
			  			<a href="Acceuil.php" class="text-dark" >
			  				<i class="fas fa-search" style="font-size: 30px;"></i>
			  			</a>
			  		</li>

			  		<li class="col-3" style=" border-right: 1px solid black; list-style-type: none;">
			  			<a href="Acceuil.php" class="text-dark" >
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

			<!--div card profil-->
			<div class="card">
				<div class="card-header bg-white">
					<!--image and stat profil button follow-->
					<div class="row pb-1">
						<div class="ml-5 col-4 card-image">
							<img src="../man.png"/ width="75" class="rounded-circle">
						</div>
						<div class="col-6 text-center">
							<div class="row">
								<div class="col-4">
									<div class="m-0 card-title text-center" data-toggle="modal" data-target="#list_follower">
										500<br/>
										<strong style="font-size: 15px;">Follower</strong>
									</div>
								</div>


								<!--Model for the followers-->
								<div class="modal" id="list_follower">
								  <div class="modal-dialog">
								    <div class="modal-content">

									    <!-- Modal Header -->
									    <div class="modal-header">
										    <h4 class="modal-title">Followers</h4>
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									    </div>

									    <!-- Modal body -->
									    <div class="modal-body scroll">
											<!--one followers-->

											<div class="card-header row m-1">

												<div class="card-image  mb-1 col-3">
													<img src="../female-user.png" class="rounded-circle" width="75">
												</div>
												<div class="card-text col-6 mt-3">
													John Doe
												</div>
												<div class="card-text col-3 mt-3">
													<button class="btn bg-primary">followers</button>
												</div>
												
											</div>    
											<!--end list-->

											
									    </div>

									    <!-- Modal footer -->
									    <div class="modal-footer">
									        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									    </div>

								    </div>
								  </div>
								</div>
								<!-- end Modal for followers-->

								<div class="col-4">
									<a href="#" class="text-dark" style="text-decoration-line: none;">
										<div class="m-0 card-title text-center" data-toggle="modal" data-target="#list_following">
											500</br>
											<strong style="font-size: 15px;">following</strong>
										</div>
									</a>
								</div>


								<!--Model for the following-->
								<div class="modal" id="list_following">
								  <div class="modal-dialog">
								    <div class="modal-content">

								      <!-- Modal Header -->
								      <div class="modal-header">
								        <h4 class="modal-title">Followng</h4>
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								      </div>

								      <!-- Modal body -->
								      <div class="modal-body scroll">

											<!--one followers-->

											<div class="card-header row m-1">

												<div class="card-image  mb-1 col-3">
													<img src="../female-user.png" class="rounded-circle" width="75">
												</div>
												<div class="card-text col-6 mt-3">
													John Doe
												</div>
												<div class="card-text col-3 mt-3">
													<button class="btn" style="background-color: #ff00ff">follow</button>
												</div>
												
											</div>    
											<!--end list-->
											



								      </div>

								      <!-- Modal footer -->
								      <div class="modal-footer">
								        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								      </div>

								    </div>
								  </div>
								</div>
								<!--end Modal for following-->


								<div class="col-4">
									<div class="m-0 card-title text-center">
										500</br>
										<strong style="font-size: 15px;">Post</strong>
										
									</div>
								</div>


							</div>
						</div>
						<div class="col-1">
							<div class="row">
								<div class="col-9 ">
									<button class="btn btn-outline-primary mb-1">Modifier profil</button>
								</div>
							</div>
						</div>
					</div>

					<div class="card-text">
						<strong class="ml-5 pl-2">Yann T</strong>
						<p class="ml-5 pl-2 text-muted" style="font-size: 15px;">blog personnel</p>
						<p class="ml-5 mt-n3 pl-2">
							17years old</br>
							back-end developer
							create a social network @devil.sofficiel
							i put my tic tact toe in my github the link
						</p>
					</div>
				</div>


				<div class="card-body">
					<div class="row mb-5">
						<div class="col-4 pb-2 w-100">
							<a href="publication.php">
								<img src="../logo_php.png" style="max-width: 500px; max-height: 300px;">
							</a>
						</div>
						<div class="col-4 pb-2">
							<a href="publication.php">
								<img src="../logo_php.png" style="width: auto; max-width: 500px; max-height: 300px;">
							</a>
						</div>
						<div class="col-4 pb-2">
							<a href="publication.php">
								<img src="../man.png" style=" width:auto ;max-width: 300px; max-height: 300px;">
							</a>
						</div>
					</div>
				</div>

			</div>

			<!--end div card profl-->
		</section>


		<section class="bg-success d-none d-sm-none">
			<nav class="navbar navbar-expand-sm bg-white navbar-dark fixed-bottom" style="border-top: 1px solid black ">
			  	<div class="row w-100 text-center">
			  		<li class="col-3" style=" border-right: 1px solid black; list-style-type: none;">
			  			<a href="Acceuil.php" class="text-dark" >
			  				<i class="fas fa-home" style="font-size: 30px;"></i>
			  			</a>
			  		</li>

			  		<li class="col-3" style=" border-right: 1px solid black; list-style-type: none;">
			  			<a href="Acceuil.php" class="text-dark" >
			  				<i class="fas fa-search" style="font-size: 30px;"></i>
			  			</a>
			  		</li>

			  		<li class="col-3" style=" border-right: 1px solid black; list-style-type: none;">
			  			<a href="Acceuil.php" class="text-dark" >
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

			<!--div card profil-->
			<div class="card">
				<div class="card-header bg-white">
					<!--image and stat profil button follow-->
					<div class="row pb-1">
						<div class="ml-5 col-4 card-image">
							<img src="../man.png"/ width="75" class="rounded-circle">
						</div>
						<div class="col-6 text-center">
							<div class="row">
								<div class="col-4">
									<div class="m-0 card-title text-center" data-toggle="modal" data-target="#list_follower">
										500<br/>
										<strong style="font-size: 15px;">Follower</strong>
									</div>
								</div>


								<!--Model for the followers-->
								<div class="modal" id="list_follower">
								  <div class="modal-dialog">
								    <div class="modal-content">

									    <!-- Modal Header -->
									    <div class="modal-header">
										    <h4 class="modal-title">Followers</h4>
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									    </div>

									    <!-- Modal body -->
									    <div class="modal-body scroll">
											<!--one followers-->

											<div class="card-header row m-1">

												<div class="card-image  mb-1 col-3">
													<img src="../female-user.png" class="rounded-circle" width="75">
												</div>
												<div class="card-text col-6 mt-3">
													John Doe
												</div>
												<div class="card-text col-3 mt-3">
													<button class="btn bg-primary">followers</button>
												</div>
												
											</div>    
											<!--end list-->

											
									    </div>

									    <!-- Modal footer -->
									    <div class="modal-footer">
									        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									    </div>

								    </div>
								  </div>
								</div>
								<!-- end Modal for followers-->

								<div class="col-4">
									<a href="#" class="text-dark" style="text-decoration-line: none;">
										<div class="m-0 card-title text-center" data-toggle="modal" data-target="#list_following">
											500</br>
											<strong style="font-size: 15px;">following</strong>
										</div>
									</a>
								</div>


								<!--Model for the following-->
								<div class="modal" id="list_following">
								  <div class="modal-dialog">
								    <div class="modal-content">

								      <!-- Modal Header -->
								      <div class="modal-header">
								        <h4 class="modal-title">Followng</h4>
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								      </div>

								      <!-- Modal body -->
								      <div class="modal-body scroll">

											<!--one followers-->

											<div class="card-header row m-1">

												<div class="card-image  mb-1 col-3">
													<img src="../female-user.png" class="rounded-circle" width="75">
												</div>
												<div class="card-text col-6 mt-3">
													John Doe
												</div>
												<div class="card-text col-3 mt-3">
													<button class="btn" style="background-color: #ff00ff">follow</button>
												</div>
												
											</div>    
											<!--end list-->
											



								      </div>

								      <!-- Modal footer -->
								      <div class="modal-footer">
								        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								      </div>

								    </div>
								  </div>
								</div>
								<!--end Modal for following-->


								<div class="col-4">
									<div class="m-0 card-title text-center">
										500</br>
										<strong style="font-size: 15px;">Post</strong>
										
									</div>
								</div>


							</div>
						</div>
						<div class="col-1">
							<div class="row">
								<div class="col-9 ">
									<button class="btn btn-outline-primary mb-1">Modifier profil</button>
								</div>
							</div>
						</div>
					</div>

					<div class="card-text">
						<strong class="ml-5 pl-2">Yann T</strong>
						<p class="ml-5 pl-2 text-muted" style="font-size: 15px;">blog personnel</p>
						<p class="ml-5 mt-n3 pl-2">
							17years old</br>
							back-end developer
							create a social network @devil.sofficiel
							i put my tic tact toe in my github the link
						</p>
					</div>
				</div>


				<div class="card-body">
					<div class="row mb-5">
						<div class="col-4 pb-2 w-100">
							<a href="publication.php">
								<img src="../logo_php.png" style="max-width: 500px; max-height: 300px;">
							</a>
						</div>
						<div class="col-4 pb-2">
							<a href="publication.php">
								<img src="../logo_php.png" style="width: auto; max-width: 500px; max-height: 300px;">
							</a>
						</div>
						<div class="col-4 pb-2">
							<a href="publication.php">
								<img src="../man.png" style=" width:auto ;max-width: 300px; max-height: 300px;">
							</a>
						</div>
					</div>
				</div>

			</div>

			<!--end div card profl-->
		</section>

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</body>
</html>


<!-- put that for icon downoald !!!!!!!!
<div>Icons made by <a href="https://www.flaticon.com/authors/iconnice" title="Iconnice">Iconnice</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>--->