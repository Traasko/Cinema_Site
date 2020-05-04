<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="designConnexion/image/png" href="../designConnexion/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../designConnexion/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../designConnexion/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../designConnexion/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../designConnexion/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../designConnexion/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../designConnexion/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../designConnexion/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../designConnexion/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../designConnexion/css/util.css">
	<link rel="stylesheet" type="text/css" href="../designConnexion/css/main.css">
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../designConnexion/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="form-connexion" method="POST" action="../traitement/traitement_connexion.php">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Connexion
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Entrez votre nom">
						<input class="input100" type="text" id="pseudo" name="pseudo" placeholder="Nom">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Entrez votre mot de passe">
						<input class="input100" type="password" id="mdp1" name="mdp"  placeholder="Mot de passe">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Se souvenir de moi
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="inscription.php">
							Nouveau ici ? Inscivez-vous
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<script src="../designConnexion/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../designConnexion/vendor/animsition/js/animsition.min.js"></script>
	<script src="../designConnexion/vendor/bootstrap/js/popper.js"></script>
	<script src="../designConnexion/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../designConnexion/vendor/select2/select2.min.js"></script>
	<script src="../designConnexion/vendor/daterangepicker/moment.min.js"></script>
	<script src="../designConnexion/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="../designConnexion/vendor/countdowntime/countdowntime.js"></script>
	<script src="../designConnexion/js/main.js"></script>

</body>
</html>
