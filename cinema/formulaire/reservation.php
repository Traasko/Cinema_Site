<!DOCTYPE html>
<html lang="en">
<head>
	<title>Réservation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../designInscription/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../designInscription/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../designInscription/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../designInscription/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../designInscription/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../designInscription/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../designInscription/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../designInscription/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../designInscription/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../designInscription/css/util.css">
	<link rel="stylesheet" type="text/css" href="../designInscription/css/main.css">
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../designInscription/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form"  method="POST" action="../traitement/traitement_reservation.php">
					<span class="login100-form-title p-b-49">
						Réserver
					</span>


          <div class="wrap-input100 validate-input m-b-23" data-validate = "Entrez un nom">
						<span class="label-input100">Nom</span>
						<input class="input100" type="text" name="nom" placeholder="Entrez votre nom">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Entrez une Date">
						<span class="label-input100">Date</span>
						<input class="input100" type="date" name="date" placeholder="Entrez une Date">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Entrez une heur">
						<span class="label-input100">Heur</span>
						<input class="input100" type="time" name="heur" placeholder="Entrez une heur">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Entrez un film">
						<span class="label-input100">Film</span>
						<input class="input100" type="text" name="film" placeholder="Entrez un film">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<br/>

        </br/>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Réserver
							</button>
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<script src="../designInscription/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../designInscription/vendor/animsition/js/animsition.min.js"></script>
	<script src="../designInscription/vendor/bootstrap/js/popper.js"></script>
	<script src="../designInscription/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../designInscription/vendor/select2/select2.min.js"></script>
	<script src="../designInscription/vendor/daterangepicker/moment.min.js"></script>
	<script src="../designInscription/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="../designInscription/vendor/countdowntime/countdowntime.js"></script>
	<script src="../designInscription/js/main.js"></script>

</body>
</html>
