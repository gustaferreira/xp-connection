<?php
include("autentica.php");
$login = $_SESSION["login"];
$nivel = $_SESSION["nivel"];

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
						<li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
					</ul>
			    </div>
			   
			    <ul class="button-navbar">
			    	<li><a class="button button2" href="logado.php">Olá, <?=$login?> / Nivel: <?=$nivel?></a></li>
			    </ul>
			</div>
		</div>
		</header>

		<main>

		<div id="servicos" class="servicos">
			<div class="container">
				<h2>CONFIRA SEUS SERVIÇOS DISPONÍVEIS</h2>
				<div class="row gx-3">
					<div class="col-md-4">
						<div class="caixa">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg>
							<h4>Configuração de Conta/Acesso</h4>
							<p>Foi desenvolvido para auxiliar os funcionários a recuperarem o acesso às suas contas e sistemas internos, caso tenham perdido suas credenciais de login, enfrentado bloqueios de conta ou tenham dificuldades para acessar os recursos necessários para realizar suas atividades de trabalho.</p>
							<button class="button">Acessar</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="caixa">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
							<h4>Solicitar Manutenção</h4>
							<p>Foi desenvolvido para oferecer aos funcionários uma maneira conveniente e eficiente de relatar e solicitar serviços de manutenção para suas instalações de trabalho. 
Utilizado quando o computador estiver lento precisando de uma manutenção preventiva.</p>
							<button class="button">Acessar</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="caixa">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
							<h4>Treinamento</h4>
							<p>Quando o funcionário constatar instabilidade na internet, ele poderá utilizar esse serviço para solicitar o suporte a TI.</p>
							<button class="button">Acessar</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="caixa">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M576 0c17.7 0 32 14.3 32 32V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V32c0-17.7 14.3-32 32-32zM448 96c17.7 0 32 14.3 32 32V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V128c0-17.7 14.3-32 32-32zM352 224V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V224c0-17.7 14.3-32 32-32s32 14.3 32 32zM192 288c17.7 0 32 14.3 32 32V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V320c0-17.7 14.3-32 32-32zM96 416v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V416c0-17.7 14.3-32 32-32s32 14.3 32 32z"/></svg>
							<h4>Inoperação da rede</h4>
							<p>Quando o funcionário constatar instabilidade na internet, ele poderá utilizar esse serviço para solicitar o suporte a TI.</p>
							<button class="button">Acessar</button>
						</div>
					</div>
				   <!-- ADMIN SUPREMO -->
				   <?php if($_SESSION["nivel"] == '1'){ ?>
				   <div class="col-md-4">
						<div class="caixa">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 480H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H288c-10.1 0-19.6-4.7-25.6-12.8L243.2 57.6C231.1 41.5 212.1 32 192 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64z"/></svg>
							<h4>Solicitar um relatório</h4>
							<p>Os funcionários têm a capacidade de solicitar diversos tipos de relatórios, desde relatórios de desempenho individual até relatórios de projetos, análises de vendas, relatórios financeiros, entre outros.</p>
							<button class="button">Acessar</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="caixa">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M448 80v48c0 44.2-100.3 80-224 80S0 172.2 0 128V80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6V288c0 44.2-100.3 80-224 80S0 332.2 0 288V186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6V432c0 44.2-100.3 80-224 80S0 476.2 0 432V346.1z"/></svg>
							<h4>Recuperação de dados</h4>
							<p>É dedicado a auxiliar os funcionários a recuperarem informações importantes que foram perdidas devido a falhas de hardware, erros acidentais, exclusões inadvertidas ou outros incidentes imprevistos. </p>
							<button class="button">Acessar</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="caixa">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M62.6 2.3C46.2-4.3 27.6 3.6 20.9 20C7.4 53.4 0 89.9 0 128s7.4 74.6 20.9 108c6.6 16.4 25.3 24.3 41.7 17.7S86.9 228.4 80.3 212C69.8 186.1 64 157.8 64 128s5.8-58.1 16.3-84C86.9 27.6 79 9 62.6 2.3zm450.8 0C497 9 489.1 27.6 495.7 44C506.2 69.9 512 98.2 512 128s-5.8 58.1-16.3 84c-6.6 16.4 1.3 35 17.7 41.7s35-1.3 41.7-17.7c13.5-33.4 20.9-69.9 20.9-108s-7.4-74.6-20.9-108C548.4 3.6 529.8-4.3 513.4 2.3zM340.1 165.2c7.5-10.5 11.9-23.3 11.9-37.2c0-35.3-28.7-64-64-64s-64 28.7-64 64c0 13.9 4.4 26.7 11.9 37.2L98.9 466.8c-7.3 16.1-.2 35.1 15.9 42.4s35.1 .2 42.4-15.9L177.7 448H398.3l20.6 45.2c7.3 16.1 26.3 23.2 42.4 15.9s23.2-26.3 15.9-42.4L340.1 165.2zM369.2 384H206.8l14.5-32H354.7l14.5 32zM288 205.3L325.6 288H250.4L288 205.3zM163.3 73.6c5.3-12.1-.2-26.3-12.4-31.6s-26.3 .2-31.6 12.4C109.5 77 104 101.9 104 128s5.5 51 15.3 73.6c5.3 12.1 19.5 17.7 31.6 12.4s17.7-19.5 12.4-31.6C156 165.8 152 147.4 152 128s4-37.8 11.3-54.4zM456.7 54.4c-5.3-12.1-19.5-17.7-31.6-12.4s-17.7 19.5-12.4 31.6C420 90.2 424 108.6 424 128s-4 37.8-11.3 54.4c-5.3 12.1 .2 26.3 12.4 31.6s26.3-.2 31.6-12.4C466.5 179 472 154.1 472 128s-5.5-51-15.3-73.6z"/></svg>
							<h4>Serviços de infraestrutura</h4>
							<p>Quando o funcionário constatar algum defeito no ambiente de trabalho como cabos Rj45 quebrados, ele pode solicitar esse serviço.</p>
							<button class="button">Acessar</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="caixa">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 144c0-44.2 35.8-80 80-80c31.9 0 59.4 18.6 72.3 45.7c7.6 16 26.7 22.8 42.6 15.2s22.8-26.7 15.2-42.6C331 33.7 281.5 0 224 0C144.5 0 80 64.5 80 144v48H64c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H144V144z"/></svg>
							<h4>Bloqueio de acesso</h4>
							<p>Quando for identificado funcionários acessando sites duvidosos (perigosos) que podem afetar a rede da empresa, essa função pode ser solicitada para tomar precauções necessárias.</p>
							<button class="button">Acessar</button>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		
		<!-- contato -->
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
							<li><a href="#avaliacoes">Avaliacoes</a></li>
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