<?php
include"conecta.php";
include"querys.php";
$id_user=$GET['id_Usuario']
$consulta="SELECT * FROM Usuarios ORDER BY Nombre ASC";
$q = $conecta -> query($consulta);
$contar=$q -> num_rows;
?>