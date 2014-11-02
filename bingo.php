<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bingo digital</title>
</head>

<body style="background:url(http://50.62.9.206/~srealms/sige_movil/white.png)">
<?php
$id_usuario = $_GET["id_usuario"]; 
$nombre_usuario = $_GET["nombre_usuario"]; 
?>
<img src="http://50.62.9.206/~srealms/sige_movil/banner_transformando.png" width="100%" />
<font size="-1" face="Verdana, Geneva, sans-serif"><?php echo $nombre_usuario;?></font></p>
<br /><br />
<form action="#" method="post" id="login" name="login">
<p align="right"><font face="Verdana, Geneva, sans-serif" color="#CC0000">Afiliado: </font><p align="right"><input type="text" id="afiliado" name="afiliado" />
<p align="right"><font face="Verdana, Geneva, sans-serif" color="#CC0000">Asistencia: </font><p align="right"><input type="checkbox" name="asistencia" value="1">

<p align="right"><input type=image src="enviar.png" width="100">
</form>
</body>
</html>