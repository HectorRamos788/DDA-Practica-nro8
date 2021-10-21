<?php
use CommonMark\Node;
$aleatorio = rand(1,10);
$ejeX = range( 1, $aleatorio);
$ejeY = range( 1, $aleatorio );
$mensaje = 'No es un matriz perfecta';
foreach ( $ejeY as $y ) {

  foreach ( $ejeX as $x ) {
    // Aquí creamos los ejes con un valor aleatorio
    $ejesYX[ $y ][ $x ] = rand( 1, 100 );
  }
}

// Creamos la tabla
$html = '<table border>';
$html .= '<th></th>';

// Para crear las columnas X ( $ejeX = 1 a 10 )
foreach ( $ejeX as $col_X ) {

  $html .= '<th>'.$col_X.'</th>';
}

foreach ( $ejesYX as $col_Y => $valores ) {

  $html .= '<tr>';
  // Para crear las columnas Y ( $ejeY = 1 a 10 )
  $html .= '<td><b>'.$col_Y.'</b></td>';

  foreach ( $valores as $val ) {
    // Creamos los campos de los valores
    $html .= '<td>'.$val.'</td>';
  }

  $html .= '</tr>';
}

$html .= '</table>';

echo $html;
echo $mensaje;
