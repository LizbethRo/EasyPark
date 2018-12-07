<?php
session_start();
	
	$datosd=array();
	$cliented= new SoapClient(null, array(
			'uri'=>'http://localhost/',
			'location'=>'https://javidupmhweb.000webhostapp.com/EasyPark/servicioweb/servicioweb.php'));
	$datosd= $cliented->autosp($_SESSION['cveUsuario']);

	$datos=array();
	$cliente= new SoapClient(null, array(
			'uri'=>'http://localhost/',
			'location'=>'https://javidupmhweb.000webhostapp.com/EasyPark/servicioweb/servicioweb.php'));
	$datos= $cliente->lugares();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>EasyPark</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/esta.css" />
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

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Selecciona tu mejor lugar</h2>
							
						</header>
						<section class="wrapper style5">
							<div class="inner">

							
		
</div>

                            <div class="wrapper table">
                                <center>
                                    <h2>ESTACIONAMIENTO</h2>
                                </center>
	                                    <form action="lugarse.php" method="POST">
	                                        <section id="one" class="wrapper style1 special" style="background-color:#FFFFFF;">
	                                            <div class="inner">
	                                                <label>Selecciona el auto que estás utilizando y elige el lugar que más te guste, recuerda que los lugares disponibles se encuentran en color VERDE</label><br>
									    	<label>SELECCIONA TU AUTO:</label><select style="background-color:#0D95FF  ;" id="car" name="cars" width="60%" required="">
														<option>--MIS AUTOS--</option>
														<?php
															for($r=0;$r<count($datosd);$r++){
  																echo "<option value='".$datosd[$r]["PLACA"]."'>".$datosd[$r]["MODELO"]."</option>";
  															}	
														?>
														
											</select>
											</div>
											</section>
											<br>
											<center>
											   <label>SELECCIONA UN LUGAR</label> 
											</center>
											
											<table class="alt" width="80%" align="center" style="border: 3px solid #929292;">
												<?php
												echo "<tbody>";
												echo "<tr>";
												if ($datos[0]["ESTATUS"]==2) {
															echo "<td style='background-color: #FF0000'>";
															echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[0]["CLAVE"]."</label>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<input type='radio' name='lugar' value='".$datos[0]["CLAVE"]."'>";
															echo "<label for='demo-priority-low'>DISPONIBLE L-".$datos[0]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												if ($datos[1]["ESTATUS"]==2) {
															echo "<td style='background-color: #FF0000'>";
															echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[1]["CLAVE"]."</label>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<input type='radio' name='lugar' value='".$datos[1]["CLAVE"]."'>";
															echo "<label for='demo-priority-low'>DISPONIBLE L-".$datos[1]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												if ($datos[2]["ESTATUS"]==2) {
															echo "<td style='background-color: #FF0000'>";
															echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[2]["CLAVE"]."</label>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<input type='radio' name='lugar' value='".$datos[2]["CLAVE"]."'>";
															echo "<label for='demo-priority-low'>DISPONIBLE L-".$datos[2]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												echo "</tr>";
												echo "<tr>";
												if ($datos[3]["ESTATUS"]==2) {
															echo "<td style='background-color: #FF0000'>";
															echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[3]["CLAVE"]."</label>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<input type='radio' name='lugar' value='".$datos[3]["CLAVE"]."'>";
															echo "<label for='demo-priority-low'>DISPONIBLE L-".$datos[3]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												if ($datos[4]["ESTATUS"]==2) {
															echo "<td style='background-color: #FF0000'>";
															echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[4]["CLAVE"]."</label>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<input type='radio' name='lugar' value='".$datos[4]["CLAVE"]."'>";
															echo "<label for='demo-priority-low'>DISPONIBLE L-".$datos[4]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												if ($datos[5]["ESTATUS"]==2) {
															echo "<td style='background-color: #FF0000'>";
															echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[5]["CLAVE"]."</label>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<th style='background-color: #35D81F'>";
															
															echo "<center>";
															echo "<input name='lugar' type='radio' value='".$datos[5]["CLAVE"]."'>";
															echo "<label>DISPONIBLE L-".$datos[5]["CLAVE"]."</label>";
															echo "</center>";
															echo"</th>";
												}
												
												echo "</tr>";
												echo "</tbody>";
												?>
											
											</table>
											<br>

											<input style="background-color: #00CED1"  type="submit" id="button" value="OK">
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