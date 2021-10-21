<?php
//comenzamos recogiendo los datos
function recogeDato($campo){
    return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
} //la función recogeDatos comprueba si se ha recibido un dato y recoge su valor
//si no se ha recibido, le asigna un valor vacío.

$nombre = recogeDato('nombre');
$direccion = recogeDato('direccion');
$email = recogeDato('email1');
$contra = recogeDato('contra');
$contra1 = recogeDato('contra1');
$fecha = recogeDato('fecha');
$sexo = recogeDato('Sexo');
$interes = recogeDato('opcion1');
$aficion = recogeDato('aficion');
echo  $nombre. "<BR>\n";
echo  $direccion. "<BR>\n";
echo  $email. "<BR>\n";
echo  $contra. "<BR>\n";
echo  $fecha. "<BR>\n";
echo  $sexo. "<BR>\n";
echo  $aficion. "<BR>\n";
?>
