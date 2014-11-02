<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>menú</title>
</head>

<body>
<?php
$id_usuario = $_GET["id_usuario"]; 
$nombre_usuario = $_GET["nombre_usuario"]; 
?>
<img src="http://50.62.9.206/~srealms/sige_movil/banner_transformando.png" width="100%" />
<p align="right"><font size="+1" face="Verdana, Geneva, sans-serif">Bienvenido</font> <br /><font size="-1" face="Verdana, Geneva, sans-serif"><?php echo $nombre_usuario;?></font></p>

<center>
   		 <a href="#"><img src="http://50.62.9.206/~srealms/sige_movil/distritos.png" width="250" /></a><br /><br />
   		 <a href="http://50.62.9.206/~srealms/sige_movil/bingo.php?id_usuario=<?php echo $id_usuario;?>&nombre_usuario=<?php echo $nombre_usuario;?>" id="verHistorial"><img src="http://50.62.9.206/~srealms/sige_movil/bingo.png" width="250" /></a>
		</center>
</body>
</html>