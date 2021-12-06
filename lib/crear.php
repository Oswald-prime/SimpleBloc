<?php 

$fname= 'nuevo.php';
$file= fopen($fname, 'w+');
$mensaje = 'se creo el archivo';
header('location:../index7.php?msg='.$mensaje);

fwrite($file,'hello world');
?>