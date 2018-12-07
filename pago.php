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
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" >
						<h1><a href="index.php">EasyPark</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="priusu.php">Inicio</a></li>
											<li><a href="park.php">Estacionarme!</a></li>
                                            <li><a href="registroauto.php">Registrar Auto</a></li>
											<li><a href="pago.php">Pagar</a></li>
                                            	<li><a href="historial.php">Historial</a></li>
                                            <li><a href="editar.php">Mi perfil</a></li>
                                            <li><a href="index.php">Salir</a>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

					
               <article id="main">
						<header>
							<h2>Pago</h2>
							
					</header>	
	<section align="center" class="wrapper style5">
						<div class="inner">
								
	<center>
			
	           <br> <label id="forlab">Numero de tarjeta:</label>
               <br> <input type="text" name="tarjeta"  placeholder="Numero de tarjeta"/><br/></br>

               <br> <label id="forlab"> Nombre del titular de la tarjeta:</label>
                <br><input type="text" name="nombre" placeholder="Titular de la tarjeta"/><br/></br>

                <br> <label id="forlab">Fecha De Expiracion:</label>
                <br><input type="text" name="fecha" placeholder="Dia/Mes/Año"/><br/></br>

                <br> <label id="forlab"> Numero de seguridad:</label>
                <br><input type="text" name="numero" placeholder="CC/VV"/><br/><br>


             <input style="background-color: #AFEEEE" id="button" type="button" value="Pagar Paypal">


            <br> <br><input style="background-color: #AFEEEE"  id="button" type="button" value="Pagar">
                   <br>
       
           <br>
           <br> 
		</center>
                            		
						</div>
					</section>
					
					</article>

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