<?php 
session_start();
$usuario="";
$contra="";

$datos=array();


if (!empty($_POST['txtUsuario']) && !empty($_POST['txtContrasena'])) {

    $usuario=htmlspecialchars($_POST['txtUsuario']);
    $contra=htmlspecialchars($_POST['txtContrasena']);

    $cliente = new SoapClient(null,array('uri' => 'localhost', 'location' =>'https://javidupmhweb.000webhostapp.com/EasyPark/servicioweb/servicioweb.php'));

    $datos=$cliente->acceso($usuario,$contra);
    

    if ((int)$datos[0]["CLAVE"]!=null) {
        
    //ISSET--> VERIFICA SI EXISTEN LAS VARIABLES DE SESIÓN SI NO LAS CREA
    if(!isset($_SESSION['cveUsuario'])){
        $_SESSION['cveUsuario']=$datos[0]["CLAVE"]; 
    }
    if(!isset($_SESSION['nomUsuario'])){
        $_SESSION['nomUsuario']=$datos[1]["USUARIO"];
    }
    if(!isset($_SESSION['nRol'])){
        $_SESSION['nRol']=$datos[2]["TIPO"];
    }

    if ($datos[2]["TIPO"]=="USUARIO") {
        echo '<script language="javascript">alert("Bienvenido al sistema'.$_SESSION['nomUsuario'].',estas accediendo como'.$_SESSION['nRol'].'"); document.location.href= "priusu.php" </script>';
    }else{
        echo '<script language="javascript">alert("Bienvenido al sistema'.$_SESSION['nomUsuario'].',estas accediendo como'.$_SESSION['nRol'].'"); document.location.href= "priadmin.php" </script>';
    }

    
 
   }else{
    $datos[0]=0; 
    echo '<script language="javascript">alert("Aceso denegado, los datos son incorrectos")</script>';
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
											<li><a href="index.php">Inicio</a></li>
											<li><a href="registrousu.php">Registro</a></li>
											
											<li><a href="#two">Nosotros</a></li>
											<li><a href="contacto.php">Contáctanos</a></li>
											<li><a href="terminos.php">Términos y Condiciones</a></li>
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
							<h2>¡Explora las opciones y encuentra tu lugar ideal!</h2>
						</div>
						<a href="#one" class="more scrolly">¡Iniciar sesión!</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								
						<h2 align="Center">Iniciar Sesión</h2>
					<div class="col-6 col-12-xsmall">
					    <form action="" method="POST">
                        <H4>Usuario:</H4>
								<input type="text" name="txtUsuario" placeholder="Usuario" required=""/><br/><br/>
								</div>
                                <H4>Contraseña:</H4>
								<div class="col-6 col-12-xsmall">
									<input type="password" name="txtContrasena" placeholder="Contraseña" required=""/>
								</div>
											</div>
                	           <div class="col-12" >
												
												<input style="background-color: #00CED1"  type="submit" id="button" value="LOGIN">

												
													<button style="background-color: #00CED1" id="Facebook">Entrar con Facebook</button>
											
                       </form>
											</div>


<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBVb93rzTO8H0IN-6cqHMOQbmB0Cf35Ljc",
    authDomain: "easypark-5b1d0.firebaseapp.com",
    databaseURL: "https://easypark-5b1d0.firebaseio.com",
    projectId: "easypark-5b1d0",
    storageBucket: "easypark-5b1d0.appspot.com",
    messagingSenderId: "632434765933"
  };
  firebase.initializeApp(config);

  document.getElementById("Facebook").addEventListener("click",
  	function(){
  		var provider = new firebase.auth.FacebookAuthProvider();

  		firebase.auth().signInWithPopup(provider).then(function(result){
  			alert("Exito");
  			console.log(result);
  		}).catch(function(error){
  			alert("Error");
  			console.log(error);
  		})
  	})
</script>
				

				
							</header>
							
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/carrito.png" alt="" /></div><div class="content">
								<h2>NOSOTROS</h2>
								<p>Es una herramienta que permite encontrar lugar de estacionamiento de una manera más rapida,muestra los lugares disponibles y te alerta sobre los lugares que no lo están, además permite apartar tu lugar y realizar el pago del servicio desde tu celular.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/park.jpg" alt="" /></div><div class="content">
								<h2>EasyPark</h2>
								<p>Usa el servicio Parkeo desde el sitio web o la aplicación móvil.</p>
							</div>
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
