<?php
    include_once "../back/connect_back.php"
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Devil's</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body class="bg-primary container-fluid justify-content-center">
		<section class="container">
			<div class="d-flex mt-5 w-100  justify-content-center bg-white mb-3">
				<div class="card-body ">
					<div class="card-header text-center bg-white border-1" style="font-family: DejaVu Sans Mono, monospace;">
						<p class="" style="color: #ff00ff;">Register</p>
					</div>
					<div class="card-body">
						<form method="post" class="was-validated" action="">
							<div class="form-group">
								<label for="uname">Username :</label><br/>
								<input type="text" id="uname" name="uname" class="form-control mt-1 border-right-0 border-left-0 border-top-0" placeholder="Votre nom d'utilisateur" required>
							    <div class="valid-feedback">Valid.</div>
							    <div class="invalid-feedback">Champs vide.</div>
							</div>

							<div class="form-group">
								<label for="mail" class="mt-1">Mail :</label><br/>
								<input type="mail" id="mail" name="mail" class="ml-n1 form-control mt-1 border-right-0 border-left-0 border-top-0" placeholder="Votre Mail" required>
							    <div class="valid-feedback">Valid.</div>
							    <div class="invalid-feedback">Champs vide.</div>
							</div>

							<div class="form-group">
								<label for="pwd" class="mt-1">Password:</label><br/>
								<input type="password" id="pwd" name="pwd" class="ml-n1 form-control mt-1 border-right-0 border-left-0 border-top-0" placeholder="Votre Mots de passe" required>
							    <div class="valid-feedback">Valid.</div>
							    <div class="invalid-feedback">Champs vide.</div>
							</div>

							<div class="form-group">
							  	<label for="birthday" class="col-form-label">Date</label><br/>
							  	<input class="form-control border-right-0 border-left-0 border-top-0" type="date" value="<?php date('Y-M-D') ?>" id="birthday" name="birthday" required>
							    <div class="valid-feedback">Valid.</div>
							    <div class="invalid-feedback">Champs vide.</div>
							</div>

							<p class="text-secondary text-center"> En vous inscrivant vous acceptée notre condition d'utilisation et notre politque de confidentialité</p>

							<div class="form-group text-centert">
								<input type="submit" name="submit_confirm_register" class="btn form-control border-0" style="background-color: #ff00ff;">
                                <?php
                                    if (isset($_POST["submit_confirm_register"])) {
                                        $error = sign_in($_POST["mail"], $_POST["pwd"], $_POST["uname"], $_POST["birthday"]);
                                        if (isset($error))
                                            echo $error;
                                    }
                                    ?>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>


		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</body>
</html>