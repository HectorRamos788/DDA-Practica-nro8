<?php
if ($_REQUEST['valor3'] >= 2019)
{
    echo "Usted no pagara su pasaje";
}
if ($_REQUEST['radio3']>= 2004)
{
    echo "Usted tiene un descuento del 75 %";
}
if ($_REQUEST['radio3']<= 2003)
{
    echo "Usted debe pagar el boleto completo";
}

?>
