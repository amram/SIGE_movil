<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIGE Móvil</title>
<meta name="viewport" content="width-device-width, initial-scale=1" />
<!-- librerias css -->
<link href="css/jquery.mobile-1.4.4.min.css" rel="stylesheet">
<link href="css/jquery.mobile.theme-1.4.4.min.css" rel="stylesheet">
</head>

<body>

<div data-role="page" id="home" style="background:#FBDC04; background-image:url(css/images/white.png)";>

	<div data-role="header" style="background-color:#C00">
		<h1><font color="#FFFFFF">SIGE Móvil</font></h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<center>
  
		<object data="http://50.62.9.206/~srealms/sige_movil/login.php" width="100%" height="900">
    Error: Comprueba tu conexión a internet.
</object>
        </center>
	</div><!-- /content -->




<div data-role="footer" data-position="fixed" data-theme="b" style="background-color:#C00">
		<div data-role="navbar" data-theme="b" style="background-color:#C00">
    		<ul>
        		<li><a href="#nosotros" data-icon="alert" style="background-color:#C00">Info</a></li>
        		<li><a href="#priv" data-icon="eye" style="background-color:#C00">Reportar</a></li>
                <li><a href="#reg" data-icon="camera" style="background-color:#C00">Actas</a></li>
    		</ul>
</div><!-- /navbar -->
	</div><!-- /footer -->



</div><!-- /page -->






<div data-role="page" id="nosotros">

	<div data-role="header">
		<h1>Nosotros</h1>
        <a href="#" data-rel="back">Atras</a>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<p style="text-align:justify">¡Consiga su cuenta de WebEx y empiece ya mismo a organizar sus propias reuniones!
Ventajas:
Antes y después de su reunión, comparta su agenda, notas, archivos y comentarios de la reunión.
Cargue, cree y comparta archivos que sean accesibles desde cualquier lugar, y haga comentarios sobre las actividades.
Vea la disponibilidad de los contactos, envíe mensajes instantáneos e inicie reuniones instantáneamente a partir de sesiones de chat.</p>
	</div><!-- /content -->

    
</div><!-- /page -->









<div data-role="page" id="nr1">

	<div data-role="header">
		<h1>Nueva Reserva</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<ul data-role="listview" data-inset="true">
        <li data-theme="b">Seleccione tipo de habitación</li>
   		 <li><a href="#">Sencilla</a></li>
   		 <li><a href="#">Doble</a></li>
   		 <li><a href="#">Triple</a></li>
		</ul>
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-theme="b">
		<div data-role="navbar" data-theme="b">
    		<ul>
        		<li><a href="#" data-rel="back" style="background-color:#aa0000;">Cancelar</a></li>
        		<li><a href="#">Siguiente</a></li>
    		</ul>
</div><!-- /navbar -->
	</div><!-- /footer -->
    
</div><!-- /page -->











<div data-role="page" id="priv">

	<div data-role="header">
		<h1>Privacidad</h1>
        <a href="#" data-rel="back">Atras</a>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<p style="text-align:justify">¡Consiga su cuenta de WebEx y empiece ya mismo a organizar sus propias reuniones!
Ventajas:
Antes y después de su reunión, comparta su agenda, notas, archivos y comentarios de la reunión.
Cargue, cree y comparta archivos que sean accesibles desde cualquier lugar, y haga comentarios sobre las actividades.
Vea la disponibilidad de los contactos, envíe mensajes instantáneos e inicie reuniones instantáneamente a partir de sesiones de chat.</p>
	</div><!-- /content -->

    
</div><!-- /page -->








<div data-role="page" id="reg">

	<div data-role="header" style="background-color:#C00">
		<h1><font color="#FFFFFF">Registro de actas</font></h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<ul data-role="listview">
        	<li data-theme="b">Datos de usuario</li>
            <li><input type="text" placeholder="Usuario" id="regName"></li>
            <li><input type="password" placeholder="Password" id="regMail"></li>
            <li data-theme="b">Datos del acta</li>
            <li><input type="text" placeholder="Descripción" id="regTel"></li>
            <li><a href="#" id="regTake">Tomar Foto</a></li>
            <li id="foto"></li>
            <li><a href="#" id="regSend" data-role="button" style="text-align:center;" data-theme="b">Registrar</a></li>
        </ul>
	</div><!-- /content -->


<div data-role="footer" data-position="fixed" data-theme="b" style="background-color:#C00">
		<div data-role="navbar" data-theme="b" style="background-color:#C00">
    		<ul>
        		<li><a href="#nosotros" data-icon="alert" style="background-color:#C00">Info</a></li>
        		<li><a href="#priv" data-icon="tag" style="background-color:#C00">Privacidad</a></li>
                <li><a href="#" data-rel="back" data-icon="back" style="background-color:#C00">Atras</a></li>
    		</ul>
</div><!-- /navbar -->
	</div><!-- /footer -->
    
</div><!-- /page -->









<!-- librerias js -->
<script src="phonegap.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.mobile-1.4.4.min.js"></script>
<script src="js/actions.js"></script>
<!-- librerias Phonegap -->
<script src="js/API/capture.js"></script>
<script src="js/API/fileTransfer.js"></script>
<script src="js/API/network-info.js"></script>
<script src="js/API/websql.js"></script>

</body>
</html>
