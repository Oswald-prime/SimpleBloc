<?php
$archivo = 'texto1.php';

$file = fopen($archivo, "w+") or die("error al intentar crear su archivo");

$asunto = $_REQUEST['asunto'];
$contenido = $_REQUEST['contenido'];

fwrite($file, $asunto);
fwrite($file,"\n");
fwrite($file, $contenido);

echo "su archivo fue creado";
?>
<a href="/inicio8.html"></a>