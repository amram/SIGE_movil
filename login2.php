<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login2</title>
</head>

<body>
<?php
$conn=mysql_connect("localhost", "srealms_sp", "Pipmytrade123") or die (mysql_error($conn));
mysql_select_db("srealms_u220879526_sige", $conn) or die (mysql_error($conn));
 
 $usuario = $_POST["usuario"]; 
 $password = $_POST["password"]; 

$query="SELECT * FROM wp_users WHERE user_login = '$usuario' AND mobile_pass = '$password'";
$res=mysql_query($query, $conn) or die (mysql_error($conn));

$validacion = 0;
While ($row = mysql_fetch_array($res)){
$id_usuario = $row["ID"];
$nombre_usuario = $row["display_name"];
$validacion = 1;
}

if($validacion == "0"){
	?>
    <center>
    <h2><font color="#CC0000" face="Verdana, Geneva, sans-serif">USUARIO O CONTRASEÑA INCORRECTOS, INTENTE DE NUEVO</font></h2>
    <img src="http://50.62.9.206/~srealms/sige_movil/fail.png" width="100" /><br /><br />
    <a href="login.php"><img src="enviar.png" width="100" /></a>
    </center>
    <?php
}
else{
	?>
	<script>location.href='menu.php?id_usuario=<?php echo $id_usuario;?>&nombre_usuario=<?php echo $nombre_usuario;?>'</script>
<?php
}

?>
</body>
</html>