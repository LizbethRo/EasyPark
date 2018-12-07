<!DOCTYPE HTML>

<html>
	<head>
		<title>EasyPark</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/esta2.css" />
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
							<h2>Lugar seleccionado</h2>
							
						</header>
						<section class="wrapper style5">
							<div class="inner">

							<center>   
<div class="texto_saludo">
		<h2>Cuando finalice su estancia de click en pagar,toma en cuenta que solo tiene 10min para salir.</h2>
		<h3>Tome sus precauciones</h3>
</div>


<form method="POST" action=""  target="resultado">      
    <div class="table-responsive">
    
   <table class="tab" style="height: 183px;" width="376"  border align="center">
<tbody>
<tr>
<th class="esta1" style="background-color: red"><input name="estado" type="radio" value="1" /></th>
<th class="esta2" style="background-color: red"><input name="estado" type="radio" value="1" /></th>
<th class="esta3" style="background-color: red"><input name="estado" type="radio" value="1" /></th>
</tr>
<tr>
<td class="esta4" style="background-color: yellow"><input name="estado" type="radio" value="1" /></td>
<td class="esta5" style="background-color: red"><input name="estado" type="radio" value="1" /></td>
<td class="esta6" style="background-color: red"><input name="estado" type="radio" value="1" /></td>
</tr>
</tbody>
</table>
    </div>

      <a href="pago.php" > <input type="submit" value="Pagar" /> </a> 
    </form>

                                </center>	
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