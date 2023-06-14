<?php
    $login = $senha = "";
    if(isset($_COOKIE["login"])){
        $login = $_COOKIE["login"];
    }
    if(isset($_COOKIE["senha"])){
        $senha = $_COOKIE["senha"];
    }
?>


<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" caixa="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="">
		<title>XP CONNECTION</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/fakeLoader.css">
		<link rel="stylesheet" href="css/line-awesome.min.css">
		<link rel="stylesheet" href="css/swiper.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		
		
		<div class="fakeLoader"></div>
		


		<header>
			<div id="navbar" class="navbar navbar-expand-lg justify-caixa-center align-items-center">
				<div class="container">
				<a href="index.php" class="navbar-brand"><img src="img/icon-white-2.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedcaixa" aria-controls="navbarSupportedcaixa" aria-expanded="false" aria-label="Toggle navigation">
						<i class="la la-bars"></i>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedcaixa">
						<ul class="navbar-nav nav">
							<li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
							<li class="nav-item"><a class="nav-link" href="logado.php"><i class="la la-user"></i></a></li>
						</ul>
					</div>
				
					<ul class="button-navbar">
					<li><a href="index.php#planos"> <button class="button button2">Assinar já!</button></a></li>
					</ul>
				</div>
			</div>
		</header>
		
		<main>
			<div id="login" class="box-login-admin container">
				<h2>Login</h2>
				<form action="process_login.php" method="post" class="needs-validation" novalidate>
					<div class="formulario form-row">
						<input class="form-control" type="login" name="login" id="validationCustom03" placeholder="Enter login.."  value="<?= $login ?>" required>
						<div class="invalid-feedback">
							Campo inválido ou usuário não existe!
						</div>
					</div>
					
					<div class="formulario form-row">
						<input class="form-control" type="password" name="senha" id="senha" placeholder="Enter password.." value="<?= $senha ?>" required>
						<div class="invalid-feedback">
							Senha incorreta!
						</div>
					</div>
					
					<input id="entrar" type="submit" value="Entrar">
				</form>
			</div>

			<div id="contato" class="contato">
			<div class="container">
				<div class="caixa-box">
				<div class="row gx-5 align-items-center">
					<div class="col-md-3">
						<div class="caixa">
							<div class="icon">
								<i class="la la-phone"></i>
							</div>
							<div class="text">
								<h5>TEL:</h5>
								<span> +55 (18)99798-2799 ou +55 (18)3251-4669 </span>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="caixa">
							<div class="icon">
								<i class="la la-envelope"></i>
							</div>
							<div class="text">
								<h5>Email</h5>
								<span> notify@experienceconnection.com.br </span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="caixa">
							<div class="icon">
								<i class="la la-map"></i>
							</div>
							<div class="text">
								<h5>Endereço</h5>
								<span>AV Washington Luiz, N° 2400 Bairro Jardim das Rosas em Presidente Prudente/SP - CEP: 19010-100</span>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>


    </main>

		<!-- footer -->
		<footer>
			<div class="container">
				<div class="row">
					
				<div class="col-md col-sm col-12">
						<img src="img/icon-white-2.png" alt="" style="width: 250px;">
					</div>
					<div class="col-md col-sm col-12 nav-footer">
						<ul>
							<li><a href="#inicio">Início</a></li>
							<li><a href="#sobre">Sobre</a></li>
							<li><a href="#promo">Promoções</a></li>
							<li><a href="#planos">Planos</a></li>
							<li><a href="#avaliacoes">Avaliações</a></li>
							<li><a href="#servicos">Servicos</a></li>
							<li><a href="#contato">Contato</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md col-sm col-12 text-cop">
					Copyright © Todos direitos reservados XP Connection
					<ul>
						<li><a href=""><i class="la la-facebook"></i></a></li>
						<li><a href=""><i class="la la-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</footer>

		<!-- fim footer -->

		<script src="js/jquery.min.js"></script>
		<script src="js/fakeLoader.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/jquery.filterizr.min.js"></script>
		<script src="js/swiper.min.js"></script>
		<script src="js/main.js"></script>
		
		
	</body>
</html>