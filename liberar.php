<?php
session_start();
	$lugar="";
	$estatus="";
	$datost=array();
	$clientet= new SoapClient(null, array(
			'uri'=>'http://localhost/',
			'location'=>'https://javidupmhweb.000webhostapp.com/EasyPark/servicioweb/servicioweb.php'));
    $lugar=$_SESSION['lugari'];
	$estatus=1;
 	$datost=$clientet->selugar($lugar,$estatus);
 	if((int)$datost[0]['CLAVE']!= 0){
        //envia a la pagina principal de administrar
        echo '<script language="javascript">alert("NO SE PUDO REGISTRAR");</script>';
    }
    else{
        //NO encuentra al usuario
           $datost[0]=0;
           if (isset ($_SESSION ['lugari'])){
                unset($_SESSION['lugari']); //libera la variable de sesion
           }
       
            if  (isset ($_SESSION ['car'])){
                unset($_SESSION['car']); 
            }
           echo '<script language="javascript">alert("PAGADO"); document.location.href= "priusu.php" </script>';
    
	}
	
?>