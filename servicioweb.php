<?php

include 'clsep.class.php';

$soap = new SoapServer(null,array('uri'=>'http://localhost/'));

$soap -> setClass('clsep');
$soap -> handle();

?>