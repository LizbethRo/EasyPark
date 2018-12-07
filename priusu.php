<?php 
session_start();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>EasyPark</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" type="image/png" href="images/logotipo.png" />
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.php">EasyPark</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="priusu.php">Inicio</a></li>
											<li><a href="historial.php">Estacionarme!</a></li>
                                            <li><a href="registroauto.php">Registrar Auto</a></li>
                                     
                                            <li><a href="editar.php">Mi perfil</a></li>
                                            <li><a href="logout.php">Salir</a
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							
							<img src="images/logotipo.png" width="70%" height="10%"/>
                            
                            <header>
                                <?php
                                echo"<h2>¡Bienvenido ".$_SESSION['nomUsuario']."!</h2>";
                                ?>
							
							
						</header>
						</div>
						
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
					
                        <section class="spotlight">
							<center><div class="image"><img src="images/fondo.jpg" alt="" /></div>
                                 
                       
                            <div class="image"><img src="images/fondos.jpg" alt="" /></div>     </center>
                                
                            
						</section>
                  
                            </section>


				

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/" target="_blank"class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; EasyPark</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>