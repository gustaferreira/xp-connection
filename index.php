<?php
include("conecta.php");

if(!isset($_SESSION)) session_start();

if(isset($_SESSION["id_usuario"])){
    $id = $_SESSION["id_usuario"];
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
						<li class="nav-item"><a class="nav-link" href="#inicio">Início</a></li>
						<li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
						<li class="nav-item"><a class="nav-link" href="#promo">Promoções</a></li>
						<li class="nav-item"><a class="nav-link" href="#planos">Planos</a></li>
						<li class="nav-item"><a class="nav-link" href="#avaliacoes">Avaliações</a></li>
						<li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
						<li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
						<li class="nav-item"><a class="nav-link" href="logado.php"><i class="la la-user"></i></a></li>
					</ul>
			    </div>
			   
			    <ul class="button-navbar">
			    	<li><a href="#planos"> <button class="button button2">Assinar já!</button></a></li>
			    </ul>
			</div>
		</div>
		</header>

		<main>
		<!-- banner -->
		<div id="inicio" class="banner">
			<div class="container">
				<div class="caixa-box">
					<div class="row gx-5 align-items-center">
						<div class="col-md">
							<div class="caixa-left">
								<h1>Melhor provedora de internet de P. Prudente e região!</h1>
								<p>Nossa missão de fornecer suporte e internet de alta qualidade para grandes cidades e 
								áreas mais afastadas, contribuindo com a inclusão digital.</p>
							<ul>
								<li><button class="button button2">Assinar já</button></li>
								<li><button class="button button3">Contato</button></li>
							</ul>
							<p class="bold">mais de <span>500</span>Mbps de Velocidade</p>
							</div>
						</div>
						<div class="col-md">
							<div class="caixa-image">
								<img src="img/680x700.jpeg" alt="">
							</div>
							<div class="caixa-entrada">
								<div class="caixa">
									<div class="icon">
										<i class="la la-wifi"></i>
									</div>
									<div class="text">
										<h6>Estável</h6>
										<span>Sem Problemas</span>
									</div>
								</div>
								<div class="caixa">
									<div class="icon">
										<i class="la la-rocket"></i>
									</div>
									<div class="text">
										<h6>Rápida</h6>
										<span>500Mbps</span>
									</div>
								</div>
								<div class="caixa">
									<div class="icon">
										<i class="la la-signal"></i>
									</div>
									<div class="text">
										<h6>Ilimitada</h6>
										<span>Ilimitada</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<!-- sobre -->
		<div id="sobre" class="sobre">
			<div class="container">
				<div class="row gx-5 align-items-center">
					<div class="col-md">
						<img src="img/logo-motion.gif" style="width: 600px;">
					</div>
					<div class="col-md">
						<div class="caixa">
							<h2>Conheça mais sobre a
								</br>XP CONNECTION:</h2>
							<p>Empresa provedora de internet há 2 anos no mercado, iniciamos em 2021 com um pequeno projeto entre amigos e hoje 
								dentro da nossa empresa prezamos o trabalho em equipe, credibilidade e foco no cliente acima de tudo.</p>
							<div class="row">
								<div class="col">
									<ul>
										<li><i class="la la-check-circle"></i> Conexão Ilimitada</li>
										<li><i class="la la-check-circle"></i> Conexão Rápida</li>
										<li><i class="la la-check-circle"></i> Suporte por Telefone</li>
										<li><i class="la la-check-circle"></i> 500Mbps Download</li>
									</ul>
								</div>
								<div class="col">
									<ul>
										<li><i class="la la-check-circle"></i> 100Mbps Upload</li>
										<li><i class="la la-check-circle"></i> Sem Problemas</li>
										<li><i class="la la-check-circle"></i> Conexão Estavel</li>
										<li><i class="la la-check-circle"></i> Suporte</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<!-- um pouco sobre a xp -->
		<div class="empresa">
			<div class="container">
				<div class="caixa">
					<div class="row">
						<div class="col-md col-sm-6">
							
							 <h2><span  class="number-counter">100</span>mil+</h2>
							 <p>Assinaturas</p>
						</div>
						<div class="col-md col-sm-6">
							 
							 <h2><span  class="number-counter">50</span>+</h2>
							 <p>Cidades</p>
						</div>
						<div class="col-md col-sm-6">
							 
							 <h2><span  class="number-counter">5</span>+</h2>
							 <p>Anos</p>
						</div>
						<div class="col-md col-sm-6">
							
							 <h2><span  class="number-counter">99</span>%</h2>
							 <p>Clientes satisfeitos</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
		

		<!-- promo -->
		<div id="promo" class="promo">
			<div class="container">
				<div class="caixa">
					<div class="row align-items-center">
						<div class="col-md-4">
							<div class="entrada">
								<h2>Na primeira assinatura ganhe <span>50% de desconto</span></h2>
							<button class="button">Assinar já!</button>
							</div>
						</div>
						<div class="col-md-8">
							<img src="img/611x404.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<!-- planos -->
		<div id="planos" class="planos">
			<div class="container">
				<h2>CONFIRA NOSSA <br> TABELA DE PLANOS</h2>
				<div class="row gx-3">
				<div class="col-md-4">
						<div class="caixa">
							<h4>EXPERIENCE SOLO</h4>
							<p class="bold"><span>150</span>Mbps</p>
							<ul>
								<li><i class="la la-check-circle"></i> Roteador Comodato - Incluso</li>
								<li><i class="la la-check-circle"></i> Taxa de instalação: R$99</li>
								<li><i class="la la-check-circle"></i> Para quem utiliza sozinho!</li>
							</ul>
							<h2>R$69,99 / MÊS</h2>
							<button class="button">Assinar já!</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="caixa">
							<h4>EXPERIENCE FAMILY</h4>
							<p class="bold"><span>350</span>Mbps</p>
							<ul>
								<li><i class="la la-check-circle"></i> Roteador Comodato - Incluso</li>
								<li><i class="la la-check-circle"></i> Taxa de instalação: R$99</li>
								<li><i class="la la-check-circle"></i> Para quem usa com a família!</li>
							</ul>
							<h2>R$83,99 / MÊS</h2>
							<button class="button">Assinar já!</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="caixa caixa-roxa">
							<h4>EXPERIENCE HOMEWORK</h4>
							<p class="bold"><span>480</span>Mbps</p>
							<ul>
								<li><i class="la la-check-circle"></i> Roteador Comodato - Incluso</li>
								<li><i class="la la-check-circle"></i> Taxa de instalação gratuita!</li>
								<li><i class="la la-check-circle"></i> Para quem utiliza trabalha de casa!</li>
							</ul>
							<h2>R$97,99 / MÊS</h2>
							<button class="button button3">Assinar já!</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="caixa">
							<h4>EXPERIENCE JUMBO</h4>
							<p class="bold"><span>615</span>Mbps</p>
							<ul>
								<li><i class="la la-check-circle"></i> Roteador Comodato - Incluso</li>
								<li><i class="la la-check-circle"></i> Taxa de instalação gratuita!</li>
								<li><i class="la la-check-circle"></i> Para quem gosta de streaming!</li>
							</ul>
							<h2>R$119,99 / MÊS</h2>
							<button class="button">Assinar já!</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="caixa">
							<h4>EXPERIENCE XP</h4>
							<p class="bold"><span>710</span>Mbps</p>
							<ul>
								<li><i class="la la-check-circle"></i> Roteador Comodato - Incluso</li>
								<li><i class="la la-check-circle"></i> Taxa de instalação gratuita!</li>
								<li><i class="la la-check-circle"></i> Para quem joga sem parar!</li>
							</ul>
							<h2>R$139,99 / MÊS</h2>
							<button class="button">Assinar já!</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- avaliacoes -->
		<div id="avaliacoes" class="avaliacoes">
			<div class="container">
				<div class="caixa">
					<div class="row gx-5">
						<div class="col-md-6">
							<img src="img/680x589.jpg" alt="">
						</div>
						<div class="col-md-6">
							<div class="entrada">
								<h2>Veja o que <br>Nossos clientes pensam:</h2>
								<button class="button">Avaliar</button>
							</div>
							<div class="swiper mySwiper">
								<i class="la la-quote-left"></i>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="caixa">
											<p> Velocidade Incrivel!! Suporte de duvidas super atencioso e rapido,
												agora posso ouvir minhas musicas no Spotify sem travaaaaar S2. </p>
											<div class="text">
												<h5>Kurt Cobain</h5>
												<span>Colecionador</span>
												<p id="redeid">@KurtToBem</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="caixa">
											<p> Uou, com certeza a melhor provedora que já tive!! 
												Agora posso fazer meus Uploads e Deploys sem me preocupar porque além de rápida, não oscila!!! </p>
											<div class="text">
												<h5>Dione Mercedes</h5>
												<span>Desenvolvedor IOS</span>
												<p id="redeid">@DionaodoPHP</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="caixa">
											<p> Ótimo atendimento e são muito prestativos. minha internet melhorou muito, especialmente para dar aulas online  </p>
											<div class="text">
												<h5>Melina Guedes</h5>
												<span>Professora</span>
												<p id="redeid">@MelinaGuedes11</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="caixa">
											<p> Ajudou muito instalar ela no templo, pega longe no cemiterio. </p>
											<div class="text">
												<h5>Juscelino Musseque</h5>
												<span>Coveiro</span>
												<p id="redeid">@JMvasco</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="caixa">
											<p> Vale a pena investir um pouco a mais financeiramente para um pacote maior, internet muito rápida </p>
											<div class="text">
												<h5>Joana Luz</h5>
												<span>Repórter</span>
												<p id="redeid">@JoanaLight</p>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="servicos" class="servicos">
			<div class="container">
				<h2>CONFIRA NOSSOS SERVIÇOS</h2>
				<div class="row gx-5">
					<div class="col-md">
						<div class="caixa">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/></svg>
							<h4>Boleto por email</h4>
							<button class="button">Conferir!</button>
						</div>
					</div>
					<div class="col-md">
						<div class="caixa">
							<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
							<h4>Contratação Online</h4>
							<button class="button">Conferir!</button>
						</div>
					</div>
					<div class="col-md">
						<div class="caixa">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>							<h4>Forma de pagamento</h4>
							<button class="button">Conferir!</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		


		<!-- contato -->
		<div id="contato" class="contato">
			<div class="container">
				<div class="caixa-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d237073.48211564342!2d-51.72950699669626!3d-21.80837438223155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smaps!5e0!3m2!1spt-BR!2sbr!4v1683630906376!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
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