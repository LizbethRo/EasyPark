<?php
session_start();
	$lugar="";
	$estatus="";
	$datost=array();

	$clientet= new SoapClient(null, array(
			'uri'=>'http://localhost/',
			'location'=>'https://javidupmhweb.000webhostapp.com/EasyPark/servicioweb/servicioweb.php'));
	if(!empty($_POST['lugar' ])){
    $lugar=htmlspecialchars($_POST['lugar']);
	$estatus=2;
	if(!isset($_SESSION['car'])){
        $_SESSION['car']=htmlspecialchars($_POST['cars']); 
    }
    if(!isset($_SESSION['lugari'])){
        $_SESSION['lugari']=htmlspecialchars($_POST['lugar']);
    }
 	$datost=$clientet->selugar($lugar,$estatus);
 	if((int)$datost[0]['CLAVE']!= 0){
        //envia a la pagina principal de administrar
        echo '<script language="javascript">alert("NO SE PUDO REGISTRAR");</script>';
    }
    else{
        //NO encuentra al usuario
           $datost[0]=0;
           echo '<script language="javascript">alert("LUGAR SELECCIONADO");</script >';
    
	}
	}



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
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" type="image/png" href="images/logotipo.png" />
	</head>
	<body class=" is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.php">EasyPark</a></h1>
						
					</header>

				<article id="main">
						<header>
							<h2>MI LUGAR</h2>
							
                    </header>
						<section class="wrapper style5">
							<div class="inner">

							
		<h2>¡Aqui se muestra tu lugar en fondo AZUL!</h2>
</div>

                            <div class="wrapper table">
	                                    
	                                            
											<BR>
											<table class="alt" width="80%" align="center">
												<?php
												echo "<tbody>";
												echo "<tr>";
												if ($datos[0]["ESTATUS"]==2) {
													if ($datos[0]["CLAVE"]==$_POST['lugar']) {
														echo "<td style='background-color: #008FFF'>";
														echo "<center>";
															echo "<label for='demo-priority-low'>MI LUGAR: L-".$datos[0]["CLAVE"]."</label>";
													}else{
														echo "<td style='background-color: #FF0000'>";
														echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[0]["CLAVE"]."</label>";
													}
															
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<label for='demo-priority-low'>DISPONIBLE: L-".$datos[0]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												if ($datos[1]["ESTATUS"]==2) {
													if ($datos[1]["CLAVE"]==$_POST['lugar']) {
														echo "<td style='background-color: #008FFF'>";
														echo "<center>";
															echo "<label for='demo-priority-low'>MI LUGAR: L-".$datos[1]["CLAVE"]."</label>";
													}else{
														echo "<td style='background-color: #FF0000'>";
														echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[1]["CLAVE"]."</label>";
													}
															echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[1]["CLAVE"]."</label>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<label for='demo-priority-low'>DISPONIBLE: L-".$datos[1]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												if ($datos[2]["ESTATUS"]==2) {
													if ($datos[2]["CLAVE"]==$_POST['lugar']) {
														echo "<td style='background-color: #008FFF'>";
														echo "<center>";
															echo "<label for='demo-priority-low'>MI LUGAR: L-".$datos[2]["CLAVE"]."</label>";
													}else{
														echo "<td style='background-color: #FF0000'>";
														echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[2]["CLAVE"]."</label>";
													}
															echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[2]["CLAVE"]."</label>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<label for='demo-priority-low'>DISPONIBLE: L-".$datos[2]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												echo "</tr>";
												echo "<tr>";
												if ($datos[3]["ESTATUS"]==2) {
													if ($datos[3]["CLAVE"]==$_POST['lugar']) {
														echo "<td style='background-color: #008FFF'>";
														echo "<center>";
															echo "<label for='demo-priority-low'>MI LUGAR: L-".$datos[3]["CLAVE"]."</label>";
													}else{
														echo "<td style='background-color: #FF0000'>";
														echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[3]["CLAVE"]."</label>";
													}
															echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[3]["CLAVE"]."</label>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<label for='demo-priority-low'>DISPONIBLE: L-".$datos[3]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												if ($datos[4]["ESTATUS"]==2) {
													if ($datos[4]["CLAVE"]==$_POST['lugar']) {
														echo "<td style='background-color: #008FFF'>";
														echo "<center>";
															echo "<label for='demo-priority-low'>MI LUGAR: L-".$datos[4]["CLAVE"]."</label>";
													}else{
														echo "<td style='background-color: #FF0000'>";
														echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[4]["CLAVE"]."</label>";
													}
															echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[4]["CLAVE"]."</label>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<label for='demo-priority-low'>DISPONIBLE: L-".$datos[4]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												if ($datos[5]["ESTATUS"]==2) {
													if ($datos[5]["CLAVE"]==$_POST['lugar']) {
														echo "<td style='background-color: #008FFF'>";
														echo "<center>";
															echo "<label for='demo-priority-low'>MI LUGAR: L-".$datos[5]["CLAVE"]."</label>";
													}else{
														echo "<td style='background-color: #FF0000'>";
														echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[5]["CLAVE"]."</label>";
													}
															echo "<center>";
															echo "<label for='demo-priority-low'>OCUPADO: L-".$datos[5]["CLAVE"]."</label>";
															echo "</center>";
															echo"</td>";
												}else{
															echo "<td style='background-color: #35D81F'>";
															echo "<div class='col-4 col-12-small'>";
															echo "<center>";
															echo "<label for='demo-priority-low'>DISPONIBLE: L-".$datos[5]["CLAVE"]."</label>";
															echo "</center>";
															echo "</div>";
															echo"</td>";
												}
												
												echo "</tr>";
												echo "</tbody>";
												?>
											
											
											
											</table>
											

							</div>
							<div class="alt" width="80%" align="center">
							    <section id="one" class="wrapper style1 special" style="background-color:#D1D1D1;">
	                                            <div class="inner">
							    <form action="ticket.php" method="POST">
												<?php
													echo "<label>USUARIO:</label><input type='text' style='background-color: #02C7CA' name='usua' value='".$_SESSION['nomUsuario']."' disabled=''>";
													echo "<label>AUTO:</label><input type='text' style='background-color: #02C7CA' name='carrito' value='".$_SESSION['car']."'>";
													echo "<label>LUGAR:</label><input type='text' style='background-color: #02C7CA' name='lugarcito' value='".$_SESSION['lugari']."'>";
												?>
												
								                <br>
												<input style="background-color: #00CED1" id="button" type="submit" value="PAGAR">
											</form>
											</div>
											</section>
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