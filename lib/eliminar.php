<?php
$fname='nuevo.php';
unlink($fname);
$mensaje = 'se elimino el archivo';
header('location:../index7.php?msg='.$mensaje);
?> 