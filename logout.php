<?php
session_start();
//se debe siempre verificar si las variables de sesion exiten para evitar errores 
if (isset ($_SESSION ['nomUsuario']))
unset($_SESSION['nomUsuario']); //libera la variable de sesion

if (isset ($_SESSION ['cveUsuario']))
unset($_SESSION['cveUsuario']); 

if (isset ($_SESSION ['nRol']))
unset($_SESSION['nRol']);

session_destroy(); //destruye toda la sesion completa
echo "<script> document.location.href='index.php';</script>";

exit;

?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 
 
 </body>
 </html>