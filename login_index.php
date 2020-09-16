<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Movement</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
		<link rel="icon" type="images/icon.svg" href="images/icon.svg" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"> 
<!--===============================================================================================-->
</head>
<body>

                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

	<div class="container-contact100" style="margin-top: -40px;">
		<div class="wrap-contact100" style="margin-top: -10px;">
			<form class="contact100-form validate-form" action="login.php" method="POST">
				<span class="contact100-form-title" style="font-family:  Montserrat; margin-top: 10px;" >
					Login
				</span>


				<div class="wrap-input100 validate-input" data-validate="Email é obrigatório">
					<label class="label-input100" for="name"  style="font-family:  Montserrat;">Email</label>
					<input id="email" class="input100" type="text" name="email" placeholder="Digite seu email...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Senha é obrigatório">
					<label class="label-input100" for="name"  style="font-family:  Montserrat;">Senha</label>
					<input id="senha" class="input100" type="password" name="senha" placeholder="Digite sua senha...">
					<span class="focus-input100"></span>
				</div>

				<a href="cadastroUsuario.php" style="font-size: 20px;">Não é cadastradado?</a>
			</br>
			</br>
			

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Entrar
					</button>
				</div>

			</form>



			<div class="contact100-more flex-col-c-m" style="background-image: url('images/foto4.jpg'); height: 750px; margin-top: -10px; ">
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
