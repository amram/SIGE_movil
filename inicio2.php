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
<table>  
        	<tr>
            	<td><img src="css/images/banner_transformando.png" width="100%" \></td>
            </tr>
            <tr>
            <td align="right">
            <img src="css/images/logo.png" width="120"\>
            </td>
            </tr>
            </table>
	<div role="main" class="ui-content">
		
        <div role="main" class="ui-content">
		<ul data-role="listview" data-inset="true">
        <li><a href="#reg">Apertura de casilla</a></li>
   		 <li><a href="#nr1">Jornada electoral</a></li>
   		 <li><a href="#historial" id="verHistorial">Cierre de jornada</a></li>
		</ul>
	</div><!-- /content -->

	
<div data-role="footer" data-position="fixed" data-theme="b" style="background-color:#C00">
		<div data-role="navbar" data-theme="b" style="background-color:#C00">
    		<ul>
        		<li><a href="#nosotros" data-icon="info" style="background-color:#C00">Info</a></li>
        		<li><a href="#priv" data-icon="lock" style="background-color:#C00">Privacidad</a></li>
                <li><a href="#" data-icon="star" style="background-color:#C00">Objetivo</a></li>
    		</ul>
</div><!-- /navbar -->
	</div><!-- /footer -->
    
	</div><!-- /content -->




</div><!-- /page -->






<div data-role="page" id="nosotros" style="background:#FBDC04; background-image:url(css/images/white.png)";>

	<div data-role="header" style="background-color:#C00">
		<h1><font color="#FFFFFF">Nosotros</font></h1>
        <a href="#" data-rel="back">Atras</a>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<p style="text-align:justify">
        <img src="css/images/logo.png" width="300" />
        </p>
	</div><!-- /content -->    
</div><!-- /page -->






<div data-role="page" id="priv" style="background:#FBDC04; background-image:url(css/images/white.png)";>

	<div data-role="header" style="background-color:#C00">
		<h1><font color="#FFFFFF">Privacidad</font></h1>
        <a href="#" data-rel="back">Atras</a>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<p style="text-align:justify"><img src="css/images/logo.png" width="300" /></p>
	</div><!-- /content -->

    
</div><!-- /page -->








<div data-role="page" id="reg">
	<div data-role="header" style="background-color:#C00">
		<h1><font color="#FFFFFF">Apertura de casilla</font></h1>
	</div><!-- /header -->
<table>  
        	<tr>
            	<td><img src="css/images/banner_transformando.png" width="100%" \></td>
            </tr>
            <tr>
            <td align="right">
            <img src="css/images/logo.png" width="120"\>
            </td>
            </tr>
            </table>

	<div role="main" class="ui-content">
		<ul data-role="listview">
        	<li data-theme="b">Datos de usuario</li>
            <li><input type="text" placeholder="Usuario" id="regusr"></li>
            <li><input type="password" placeholder="Password" id="regpass"></li>
            </ul>
            </div>
             <div data-role="footer" data-position="fixed" data-theme="b">
                <div data-role="navbar" data-theme="b">
                    <ul>
                        <li><a href="#" data-rel="back" style="background-color:#aa0000;">Cancelar</a></li>
                        <li><a href="#nr1">Siguiente</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div><!-- /footer -->
        </div><!-- /page -->
            
          









<div data-role="page" id="nr1">

	<div data-role="header" style="background-color:#C00">
		<h1><font color="#FFFFFF">Apertura de casilla</font></h1>
	</div><!-- /header -->
<table>  
        	<tr>
            	<td><img src="css/images/banner_transformando.png" width="100%" \></td>
            </tr>
            <tr>
            <td align="right">
            <img src="css/images/logo.png" width="120"\>
            </td>
            </tr>
            </table>
<div role="main" class="ui-content">
  <ul data-role="listview" data-inset="true">
        <li data-theme="b">Funcionarios presentes</li>
   		 <li><a href="#">SI</a></li>
   		 <li><a href="#">NO</a></li>
         </ul>
          </div>
             <div data-role="footer" data-position="fixed" data-theme="b">
                <div data-role="navbar" data-theme="b">
                    <ul>
                        <li><a href="#" data-rel="back" style="background-color:#aa0000;">Atras</a></li>
                        <li><a href="#nr2">Siguiente</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div><!-- /footer -->
        </div><!-- /page -->
            
            
            
            
            <div data-role="page" id="nr2">

	<div data-role="header" style="background-color:#C00">
		<h1><font color="#FFFFFF">Apertura de casilla</font></h1>
	</div><!-- /header -->
<table>  
        	<tr>
            	<td><img src="css/images/banner_transformando.png" width="100%" \></td>
            </tr>
            <tr>
            <td align="right">
            <img src="css/images/logo.png" width="120"\>
            </td>
            </tr>
            </table>
<div role="main" class="ui-content">
  <ul data-role="listview" data-inset="true">
         <li data-theme="b">Propaganda cerca</li>
   		 <li><a href="#">SI</a></li>
   		 <li><a href="#">NO</a></li>
          </ul>
           </div>
             <div data-role="footer" data-position="fixed" data-theme="b">
                <div data-role="navbar" data-theme="b">
                    <ul>
                        <li><a href="#" data-rel="back" style="background-color:#aa0000;">Atras</a></li>
                        <li><a href="#nr3">Siguiente</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div><!-- /footer -->
        </div><!-- /page -->
            
            
            
            
            
            <div data-role="page" id="nr3">

	<div data-role="header" style="background-color:#C00">
		<h1><font color="#FFFFFF">Apertura de casilla</font></h1>
	</div><!-- /header -->
<table>  
        	<tr>
            	<td><img src="css/images/banner_transformando.png" width="100%" \></td>
            </tr>
            <tr>
            <td align="right">
            <img src="css/images/logo.png" width="120"\>
            </td>
            </tr>
            </table>
<div role="main" class="ui-content">
  <ul data-role="listview" data-inset="true">
          <li data-theme="b">Abrieron puntualmente</li>
   		 <li><a href="#">SI</a></li>
   		 <li><a href="#">NO</a></li>
		</ul>
         </div>
             <div data-role="footer" data-position="fixed" data-theme="b">
                <div data-role="navbar" data-theme="b">
                    <ul>
                        <li><a href="#" data-rel="back" style="background-color:#aa0000;">Atras</a></li>
                        <li><a href="#nr4">Siguiente</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div><!-- /footer -->
        </div><!-- /page -->
            
            
            
            
            
            <div data-role="page" id="nr4">

	<div data-role="header" style="background-color:#C00">
		<h1><font color="#FFFFFF">Apertura de casilla</font></h1>
	</div><!-- /header -->
<table>  
        	<tr>
            	<td><img src="css/images/banner_transformando.png" width="100%" \></td>
            </tr>
            <tr>
            <td align="right">
            <img src="css/images/logo.png" width="120"\>
            </td>
            </tr>
            </table>
<div role="main" class="ui-content">
  <ul data-role="listview" data-inset="true">
            <li data-theme="b"><a href="#" id="regTake">Tomar Foto</a></li>
            <li id="foto"></li>
             <li><input type="text" placeholder="Notas" id="regnot"></li>
           
        </ul>
	</div><!-- /content -->
             <div data-role="footer" data-position="fixed"  data-theme="b" style="background-color:#C00">
             
              <div data-role="navbar" data-theme="b">
                    <ul>
                        <li><a href="#" data-rel="back" style="background-color:#aa0000;">Atras</a></li>
                        <li><a href="#" id="regSend" data-role="button" style="text-align:center; background-color:#090" data-theme="b">Enviar</a></li>
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
