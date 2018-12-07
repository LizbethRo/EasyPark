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
							<h2>Selecciona tu mejor lugar</h2>
							
						</header>
						<section class="wrapper style5">
							<div class="inner">

							
		<h2>Tienes sólo 10 minutos para seleccionar tú lugar, los cajones en rojo estan ocupados y en verde disponible</h2>
</div>


	<form action="" method="POST">
									    	<select id="car" name="cars" onchange="funci();">
														<option value="0">SELECCIONA</option>
														<?php
															for($r=0;$r<count($datosd);$r++){
  																echo "<option value='".$datosd[$r]["PLACA"]."'>".$datosd[$r]["MODELO"]."</option>";
  															}	
														?>
														
											</select>
											<br>
											<br>
											<table class="alt">
												<?php
												echo "<tbody>";
												echo "<tr>";
												if ($datos[0]["ESTATUS"]==2) {
															echo "<td style='background-color: #FF0000'>";
															echo "<center>";
															echo "<input type='submit' value='OCUPADO' disabled=''/>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<input type='radio' name='lugar' value='".$datos[0]["CLAVE"]."'>";
															echo "<label for='demo-priority-low'>L-".$datos[0]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												if ($datos[1]["ESTATUS"]==2) {
															echo "<td style='background-color: #FF0000'>";
															echo "<center>";
															echo "<input type='submit' value='OCUPADO' disabled=''/>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<input type='radio' name='lugar' value='".$datos[1]["CLAVE"]."'>";
															echo "<label for='demo-priority-low'>L-".$datos[1]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												if ($datos[2]["ESTATUS"]==2) {
															echo "<td style='background-color: #FF0000'>";
															echo "<center>";
															echo "<input type='submit' value='OCUPADO' disabled=''/>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<input type='radio' name='lugar' value='".$datos[2]["CLAVE"]."'>";
															echo "<label for='demo-priority-low'>L-".$datos[2]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												echo "</tr>";
												echo "<tr>";
												if ($datos[3]["ESTATUS"]==2) {
															echo "<td style='background-color: #FF0000'>";
															echo "<center>";
															echo "<input type='submit' value='OCUPADO' disabled=''/>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<input type='radio' name='lugar' value='".$datos[3]["CLAVE"]."'>";
															echo "<label for='demo-priority-low'>L-".$datos[3]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												if ($datos[4]["ESTATUS"]==2) {
															echo "<td style='background-color: #FF0000'>";
															echo "<center>";
															echo "<input type='submit' value='OCUPADO' disabled=''/>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<input type='radio' name='lugar' value='".$datos[4]["CLAVE"]."'>";
															echo "<label for='demo-priority-low'>L-".$datos[4]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												if ($datos[5]["ESTATUS"]==2) {
															echo "<td style='background-color: #FF0000'>";
															echo "<center>";
															echo "<input type='submit' value='OCUPADO' disabled=''/>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<th style='background-color: #35D81F'>";
															
															echo "<center>";
															echo "<input name='estado' type='radio' value='".$datos[5]["CLAVE"]."'>";
															echo "<label>L-".$datos[5]["CLAVE"]."</label>";
															echo "</center>";
															echo"</th>";
												}
												
												echo "</tr>";
												echo "</tbody>";
												?>
											
											</table>
											<input type="submit" name="btnSL" value="SELECCIONAR LUGAR">
											</form>

							
							
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