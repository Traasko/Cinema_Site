<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page d'inscription</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../designInscription/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../designInscription/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../designInscription/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../designInscription/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../designInscription/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../designInscription/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../designInscription/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../designInscription/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../designInscription/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../designInscription/css/util.css">
	<link rel="stylesheet" type="text/css" href="../designInscription/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../designInscription/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form"  method="POST" action="../traitement/inscription_traitement.php">
					<span class="login100-form-title p-b-49">
						S'inscrire
					</span>


          <div class="wrap-input100 validate-input m-b-23" data-validate = "Entrez un nom">
						<span class="label-input100">Nom</span>
						<input class="input100" type="text" name="nom" id="nom" placeholder="Entrez votre nom">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Entrez un prénom">
						<span class="label-input100">Prénom</span>
						<input class="input100" type="text" name="prenom" id="prenom"  placeholder="Entrez votre prénom">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Entrez un pseudo">
						<span class="label-input100">Âge</span>
						<input class="input100" type="text" name="age" id="age" placeholder="Entrez votre pseudo">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Entrez un mot de passe">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="mdp" id="mdp" placeholder="Entrez votre mot de passe">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<br/>

        </br/>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								S'inscrire
							</button>
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="../designInscription/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../designInscription/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../designInscription/vendor/bootstrap/js/popper.js"></script>
	<script src="../designInscription/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../designInscription/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../designInscription/vendor/daterangepicker/moment.min.js"></script>
	<script src="../designInscription/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../designInscription/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../designInscription/js/main.js"></script>

</body>
</html>
