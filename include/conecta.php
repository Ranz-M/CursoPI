<?php
include"conecta.php";
include"querys.php";
$Servidor="localhost";
$Usuario="root";
$Password="";
$BD="dlyp07";
$Conexion=mysqli_connect($Servidor,$Usuario,$Password,$BD);
    if ($Conexion-->Connect_enrow) {
        die('Error al conectar la base de datos.$Conexion-->Connect_enrow')
        else {
            echo("Se conecto la base de datos exitosamente")
        }
    }
?>