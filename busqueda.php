<?php
	$datos=array();
	$cliente= new SoapClient(null, array(
			'uri'=>'http://localhost/',
			'location'=>'https://javidupmhweb.000webhostapp.com/EasyPark/servicioweb/servicioweb.php'));
	$buscae=htmlspecialchars($_POST['bsc']);
	$datos= $cliente->mostrarbusqueda($buscae);
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
							<h2>Busqueda</h2>
							
						</header>
						<section class="wrapper style5">
							<div class="inner">

									
											
      </center> 
</form>

<center>


<?php
    echo"</br>";
    echo"</br>";
		echo "<div class='caja'>";
		for($rr=0;$rr<count($datos);$rr++){
			
		echo "<center>";
			echo "<label>AUTO</label>";
			echo "<h2>".$datos[$rr]["AUTO"]."</h2>";
			echo "</div>";
		echo "</center>";
		
		echo "<center>";
			echo "<label>LUGAR</label>";
			echo "<h2>".$datos[$rr]["LUGAR"]."</h2>";
			echo "</div>";
        echo "</center>";
        
        echo "<center>";
			echo "<label>FECHA</label>";
			echo "<h2>".$datos[$rr]["FECHA"]."</h2>";
			echo "</div>";
		echo "</center>";
			
		echo "<center>";
			echo "<label>SUBTOTAL</label>";
			echo "<h2>".$datos[$rr]["SUBTOTAL"]."</h2>";
			echo "</div>";
			echo"</div>";
		echo "</center>";
			
		echo "<center>";
			echo "<label>IMPORTE</label>";
			echo "<h2>".$datos[$rr]["IMPORTE"]."</h2>";
			echo "</div>";
			echo"</div>";
		echo "</center>";
		
		echo "<center>";
			echo "<label>ESTATUS</label>";
			echo "<h2>".$datos[$rr]["ESTATUS"]."</h2>";
			echo "</div>";
			echo"</div>";
			echo "</center>";
		}
		
?>
											
</div>
</center> 
</form>
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