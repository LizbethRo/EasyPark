<?php
session_start();
    $importe="";
	$estatus="";
	$subt="";
	$auto="";
	$lugar="";
	$datos=array();
    	$cliente= new SoapClient(null, array(
			'uri'=>'http://localhost/',
			'location'=>'https://javidupmhweb.000webhostapp.com/EasyPark/servicioweb/servicioweb.php'));
	if( (!empty($_POST['lugarcito' ]))&&(!empty($_POST['carrito' ]))){
    $lugar=$_SESSION['lugari'];
	$auto=$_SESSION['car'];
	$subt=10;
	$importe=$subt*1;
	$estatus=1;
	$time = time();

    $dia=date("d-m-Y", $time);
	$datos=$cliente->cticket($auto,$lugar,$importe,$estatus,$subt);
 	if((int)$datos[0]['CLAVE']!= 0){
        //envia a la pagina principal de administrar
        echo '<script language="javascript">alert("NO SE PUDO REGISTRAR");</script>';
    }
    else{
        //NO encuentra al usuario
         
           $datos[0]=0;
           echo '<script language="javascript">alert("TICKET CREADO");</script >';
    
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
						<h1><a href="#">EasyPark</a></h1>
					</header>

				<article id="main">
						<header>
							<h2>TICKET</h2>
							
                    </header>
						<section id="wa" class="wrapper style1 special">
						<div class="inner">
								
							<center>
		
                                
                                
        	<h3 id="tit">DATOS</h3><br>
        	<form id="auto" method="POST" action="liberar.php">
        	    <?php
        	        echo"<label id='forlab'>AUTO:</label><input type='text' name='modelo'value='".$_SESSION['car']."' disabled=''/><br><br>";
        	        echo"<label id='forlab'>LUGAR:</label><input type='text' name='lugar' value='".$_SESSION['lugari']."' disabled=''/><br><br>";
        	        echo"<label id='forlab'>IMPORTE:</label><input type='text' name='modelo'value='10 pesos' disabled=''/><br><br>";
        	        echo"<label id='forlab'>FECHA:</label><input type='text' name='modelo'value='".$dia."' disabled=''/><br><br>";
        	    ?>
               <input style="background-color: #00CED1" type="submit" id="button" value="OK">
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


