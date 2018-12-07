<?php
session_start();
$placa="";
$modelo="";
$marca="";
$color="";
$descripcion="";
$user=htmlspecialchars($_SESSION['cveUsuario']);
$datos=array();

$cliente=new SoapClient(null, array(
 'uri' => 'http://localhost/',
 'location'=> 'https://javidupmhweb.000webhostapp.com/EasyPark/servicioweb/servicioweb.php'));

if( !empty($_POST['placa' ]) && !empty($_POST['modelo']) && !empty($_POST['marca']) && !empty($_POST['color']) && !empty($_POST['desc'])){
    
    
    $placa=htmlspecialchars($_POST['placa']);
    $modelo=htmlspecialchars($_POST['modelo']);
    $marca=htmlspecialchars($_POST['marca']);
    $color=htmlspecialchars($_POST['color']);
    $descripcion=htmlspecialchars($_POST['desc']);  
 $datos=$cliente->agregarauto($placa,$modelo,$marca,$color,$descripcion,$user);
 
 if((int)$datos[0]['CLAVE']!= 0){
        //envia a la pagina principal de administrar
        echo '<script language="javascript">alert("NO SE PUDO REGISTRAR");</script>';
    }
    else{
        //NO encuentra al usuario
           $datos[0]=0;
           echo '<script language="javascript">alert("AUTO REGISTRADO"); document.location.href= "priusu.php" </script >';
    
}
}
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
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menú</span></a>
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

				<article id="main">
						<header>
							<h2>Registrar</h2>
							
                    </header>
						<section id="wa" class="wrapper style1 special">
						<div class="inner">
								
							<center>
		
                                
                                
        	<h3 id="tit">Datos del automovil</h3><br>
        	<form id="auto" method="POST" action="registroauto.php">
           		<label id="forlab">Modelo de Automovil</label>
                <input type="text" name="modelo" placeholder="Modelo de Automovil" maxlength="13" min="1"/><br><br>
                <label id="forlab">Marca</label>
                <input type="text" name="marca" placeholder="Marca" maxlength="13" min="1"/><br><br>
                <label id="forlab">Placa</label>
                <input type="text" name="placa" placeholder="Placa" maxlength="13" min="1"/><br><br>
                <label id="forlab">Color</label>
                <input type="text" name="color" placeholder="Color" maxlength="13" min="1"/><br><br>
                <label id="forlab">Descripcion</label><br>
             	<textarea name="desc" rows="5" cols="40"></textarea><br><br>
               <input style="background-color: #00CED1" type="submit" id="button" value="Registrar">
		</form><br><br>
		</center>
                            		
						</div>
					</section>
					
					</article>
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
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