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
					<header id="header">
						<h1><a href="index.php">EasyPark</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="priadmin.php">Inicio</a></li>
											<li><a href="buscar.php">Consultar</a></li>            
                                            <li><a href="index.php">Salir</a>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Consultar</h2>
							
						</header>
						<section class="wrapper style5">
							<div class="inner">

								

									<h3>Autos Registrados</h3>
									
									
                                <?php
    echo"</br>";
    echo"</br>";
		echo "<div class='caja'>";
		for($rr=0;$rr<count($datos);$rr++){
			echo "<div class='tarjeta uni'>";
			echo "<div class='destino'>";
			echo "<label>USUARIO</label>";
			echo "<h2>".$datos[$rr]["CLAVE"]."</h2>";
			echo "</div>";
			echo "<div class='hora'>";
			echo "<label>Nombre</label>";
			echo "<h2>".$datos[$rr]["MODELO"]."</h2>";
			echo "</div>";
			echo "<div class='asientos'>";
			echo "<label>Apellido Paterno</label>";
			echo "<h2>".$datos[$rr]["MARCA"]."</h2>";
			echo "</div>";
			echo "<div class='chofer'>";
			echo "<label>Auto</label>";
			echo "<h2>".$datos[$rr]["DESCRIPCION"]."</h2>";
			echo "</div>";
			echo "<div class='carrera'>";
			echo "<label>Placa</label>";
			echo "<h2>".$datos[$rr]["PLAN"]."</h2>";
			echo "</div>";
			echo "<div class='asientd'>";
			echo "<label>Rol</label>";
			echo "<h2>".$datos[$rr]["PRECIO"]."</h2>";
			echo "</div>";
			echo "<div class='asientt'>";
			echo "<label>Fecha</label>";
			echo "<h2>".$datos[$rr]["TIPO"]."</h2>";
			echo "</div>";
			echo"</div>";
			
		}
		echo"</div>";
?>
                                
							
							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
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