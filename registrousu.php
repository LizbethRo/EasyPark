<?php


$nombre="";
$ap="";
$am="";
$correo="";
$contra="";
$telefono="";
$user="";
$datos=array();

$cliente=new SoapClient(null, array(
 'uri' => 'http://localhost/',
 'location'=> 'https://javidupmhweb.000webhostapp.com/EasyPark/servicioweb/servicioweb.php'));

if( !empty($_POST['txtnombre' ]) && !empty($_POST['txtap']) && !empty($_POST['txtam']) && !empty($_POST['txtcorreo']) && !empty($_POST['txtcontra']) && !empty($_POST['txttel']) && !empty($_POST['txtuser'])){
    
    
    $nombre=htmlspecialchars($_POST['txtnombre']);
    $ap=htmlspecialchars($_POST['txtap']);
    $am=htmlspecialchars($_POST['txtam']);
    $correo=htmlspecialchars($_POST['txtcorreo']);
    $contra=htmlspecialchars($_POST['txtcontra']);
    $telefono=htmlspecialchars($_POST['txttel']);
    $user=htmlspecialchars($_POST['txtuser']);    
 $datos=$cliente->agregarusu($nombre,$ap,$am,$correo,$contra,$telefono,$user);
 
 if((int)$datos[0]['CLAVE']!= 0){
        //envia a la pagina principal de administrar
        echo '<script language="javascript">alert("NO SE PUDO REGISTRAR");</script>';
    }
    else{
        //NO encuentra al usuario
           $datos[0]=0;
           echo '<script language="javascript">alert("USUARIO REGISTRADO"); document.location.href= "index.php" </script >';
    
}
}
  ?>
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
											<li><a href="index.php">Inicio</a></li>
											<li><a href="registrousu.php">Registro</a></li>
										
											<li><a href="index.php">Nosotros</a></li>
											<li><a href="contacto.php">Contáctanos</a></li>
											<li><a href="terminos.php">Términos y Condiciones</a>
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
			<h3 id="tit">Datos de usuario</h3><br>
			<form action="registrousu.php" method="POST">
                <label id="forlab">Nombre:</label>
                <input type="text" name="txtnombre" placeholder="Nombre" required="" /><br><br>
                
                
                <label id="forlab">Apellido Paterno:</label>
                <input type="text" name="txtap" placeholder="Apellido Paterno" required="" /><br><br>
                
                
                <label id="forlab">Apellido Materno:</label>
                 <input type="text" name="txtam" placeholder="Apellido Materno" required="" /><br><br>
                
                
                <label id="forlab">E-mail:</label>
                <input type="text" name="txtcorreo" placeholder="E-mail" required="" /><br><br>
                
                <label id="forlab">Usuario:</label>
                <input type="text" name="txtuser" placeholder="Usuario" required="" /><br><br>
                
                <label id="forlab">Contraseña:</label>
                 <input type="password" name="txtcontra" placeholder="Contraseña" required="" /><br><br>

                <label id="forlab">R.Contraseña:</label>
                <input type="password" name="rcontra" placeholder="R.Contraseña" required="" /><br><br>

                <label id="forlab">Teléfono:</label>
                <input type="text" name="txttel" placeholder="Teléfono" required="" /><br><br>

               
                
                
                <input style="background-color: #00CED1"  type="submit" id="button" value="Registrar">
                
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