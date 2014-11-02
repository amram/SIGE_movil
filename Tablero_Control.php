<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv=Content-Type>



<title>Tablero de Control</title>
<script language="JavaScript" src="FusionCharts.js"></script>
<script language="JavaScript" src="PowerMap.js"></script>
<link rel="STYLESHEET" type="text/css" href="estilo_imprimir.css" media="print"> 
<style type="text/css">
<!--
.Estilo10 {	font-family: ARIAL;
	font-size: 14px;
	font-weight: bold;
}
.Estilo3 {font-family: ARIAL}
.Estilo1 {	font-family: ARIAL;
	font-size: 13px;
	font-weight: bold;
}
.Estilo22 {color: #333333}
.Estilo26 {font-family: ARIAL; font-size: 11px; }
.Estilo4 {font-size: 12px}
.Estilo38 {
	font-size: 12px;
	font-family: ARIAL;
	color: #000000;
}
.Estilo39 {color: #F5F5F5}
.Estilo47 {font-family: ARIAL; font-size: 16px; font-weight: bold; color: #710000; }
.Estilo49 {font-size: 12px; color: #000000; }
.Estilo52 {
	color: #FFE6E6;
	font-weight: bold;
	font-size: 12px;
}
.Estilo53 {font-family: ARIAL; font-size: 13px; font-weight: bold; color: #710000; }
.Estilo56 {
	font-family: ARIAL;
	font-size: 20px;
	font-weight: bold;
	color: #AD0000;
}
.Estilo58 {color: #AD0000}
.Estilo60 {
	font-size: 11px
}
.Estilo61 {font-family: ARIAL; font-size: 12px; font-weight: bold; color: #710000; }
.Estilo62 {
	font-family: Arial;
	font-weight: bold;
	font-size: 12px;
}
.Estilo63 {color: #FFFFFF}
.Estilo65 {
	color: #000000;
	font-weight: bold;
	font-size: 11px;
}
.Estilo71 {
	font-family: Arial;
	font-size: 13px;
	color: #C00000;
}
.Estilo73 {font-family: Arial; font-weight: bold; font-size: 13px; color: #C00000; }
.Estilo75 {font-family: Arial; font-weight: bold; font-size: 13px; }
.Estilo76 {
	font-family: Arial;
	font-size: 13px;
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo77 {font-family: Arial; font-size: 13px; color: #FFFFFF; }
.Estilo78 {
	color: #FFE6E6;
	font-weight: bold;
}
.Estilo82 {font-family: ARIAL; font-size: 11px; font-weight: bold; color: #FFFFFF; }
.Estilo83 {font-family: ARIAL; font-size: 11px; font-weight: bold; color: #710000; }
.Estilo84 {font-family: ARIAL; font-size: 11px; font-weight: bold; color: #FFE6E6; }
.Estilo85 {font-family: ARIAL; font-size: 12px; font-weight: bold; color: #FFE6E6; }
.Estilo87 {font-size: 19px}
.Estilo88 {
	font-family: Arial;
	font-size: 11px;
	font-weight: bold;
}
.Estilo90 {color: #000000; font-weight: bold; font-size: 11px; font-family: Arial; }
.Estilo91 {
	color: #9C0000;
	font-weight: bold;
}
.Estilo93 {
	font-size: 19px;
	color: #710000;
	font-weight: bold;
	font-family: ARIAL;
}
.Estilo95 {
	color: #9C0000;
	font-weight: bold;
	font-family: ARIAL;
	font-size: 11px;
}
.Estilo99 {color: #9C0000; font-weight: bold; font-size: 11px; }
-->
</style>
<SCRIPT LANGUAGE="Javascript" SRC="FC_Dashboard/FusionCharts.js"></SCRIPT>





</head>

<body>
<?php include("conectar4.php"); ?>

<?php

//Global $clave, $cd_eje, $ds_eje, $nombre_programa, $id_proceso, $mt_asignado, $ds_proceso, $ferd, $feit, $id_responsable, $nombre_responsable, $seccion, $aplica, $inic2, $finl2;

$id_grupo = $_GET["id_grupo"]; 



?>


<center>

<!--Tabla General-->
<table width="999" border="0">
  <tr>
    <th scope="col">
    <!--Encabezado-->
    <table width="999" border="0" id="Encabezado">
      <tr>
        <td width="212"><div align="left"><img width="995" src="http://50.62.9.206/~srealms/sige/wp-content/uploads/2014/04/NuevoEncabezado4.jpg"/></div></td>
       

      </tr>
    </table>
    <!--Fin Encabezado-->
     <!--Linea roja-->
      


      <!--Fin LÃ­nea Roja-->    </th>
  </tr>
  <tr>
    <td height="882">
    <!--TÃ­tulo-->
    



<!--Fin TÃ­tulo-->
      <table width="999" border="0">
        <tr>
          <th scope="col">&nbsp;</th>
        </tr>
      </table>
   <!--Resumen Gral del Programa-->
   <table width="999" border="1" cellpadding="2" cellspacing="0" bordercolor="#C9C9C9" id="Info_Gral">
<tr class="tab">
       <td width="319" bordercolor="#FFFFFF" bgcolor="#FFE6E6"><div align="center"><span class="Estilo73"><font face="Arial">Clave</font></span></div></td>
       

<?php


$query="SELECT * FROM m_programas WHERE WPCD_GRUPO = '$id_grupo'";
$res=mysql_query($query, $conn) or die (mysql_error($conn));




////////////////////////////////////////////////////////////////////////////////////////////////////////////77
While ($row = mysql_fetch_array($res)){

$clave = $row["CD_PROGRAMA"];
$cd_eje = $row["CD_EJE"];
$ds_eje = $row["DS_EJE"];
$nombre_programa = $row["DS_PROGRAMA"];
$resumen = $row["DS_RESUMEN"];
$id_status = $row["ST_PROGRAMA"];
 $id_proceso = $row["CD_PROCESO"];
$ds_proceso = $row["DS_PROCESO"];
$tppr2 = $row["TP_PROGRAMA"];
$feit = $row["FE_PROX_INFO_TRIM"];
$ferd = $row["FE_RADICACION"];
$mt_asignado = $row["MT_PPTO_OTORGADO"];
  $id_responsable = $row["WPCD_USRLIDER"];
 $seccion = $row["DS_SECCION"];
 

//$fecha_info_trim=date("d-m-Y",strtotime($feit));
//$fe_rad=date("d-m-Y",strtotime($ferd));


}


echo ("<td width='95' bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div align='center'><font face='Arial' size='2'>$clave</font></div></td>");



 echo("<td width='72' rowspan='3' bordercolor='#FFFFFF' bgcolor='#FFE6E6'><div align='center'><strong><span class='Estilo71'>Eje $cd_eje</span></strong></div></td>" .
          "<td width='135' rowspan='3' bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div align='center'><font face='Arial' size='1.8'>$ds_eje</font></div></td>" .
          "<td colspan='3' rowspan='2' bordercolor='#FFFFFF' bgcolor='#FF8000'><div align='center' class='Estilo76'>Administración y finanzas</div></td><td colspan='1' rowspan='6'><div>"); 
		  ?>
          
          <td height="36" colspan="0" rowspan="6" bordercolor="#EAEFF4" bgcolor="#FFE6E6"><div align="center" class="Estilo53 Estilo60">Ejercicio del presupuesto</div>
         
        <table width="100%" height="104" border="1" cellpadding="2" cellspacing="0" bordercolor="#EAEFF4">
            <tr>
              <td rowspan="1" colspan="2" bgcolor="#ffffff"><div id="chart3" align="center"></div>
                  <?php 
$x8 = $_GET["medidorpresupuesto"]; 

?>
                  <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/AngularGauge.swf", "chart3", "300", "150", "0", "0");
				     <?php echo("myChart.setDataURL('$x8');"); ?>
				    myChart.render("chart3");
			    </script>              </td>
            </tr>
            
            <tr>
              <td width="251" bgcolor="#FFE6E6"><div align="center" class="Estilo22">
                  <div align="left" class="Estilo73">Monto Ejercido</div>
              </div></td>
          <td width="60" bgcolor="#E9E9E9"><div align="center">
                  <?php

$res4=mysql_query("select MT_LIQUIDADO from m_gastos WHERE WPCD_GRUPO = '$id_grupo'");


$mt_ej_t = 0;
While ($row4 = mysql_fetch_array($res4)){

$mt_ejercido=$row4["MT_LIQUIDADO"];

$mt_ej_t=$mt_ej_t + $mt_ejercido;

 }

$res3e=mysql_query("select MT_ENTREGADO from m_gastos WHERE WPCD_GRUPO = '$id_grupo'");
 while($row3e=mysql_fetch_assoc($res3e)){
 $mt_ej_t= $mt_ej_t + $row3e['MT_ENTREGADO'];
 }

$mt_ej_t22 =number_format($mt_ej_t,2);
echo("<p><font face='Arial'>$$mt_ej_t22</font></p>");
                
?>
              </div></td>
</tr>
          </table>
          
          
          
          <?php
		  echo("</div></td>" .
        "</tr>"); ?>
		
        <?php
echo("<tr class='tab'>" .
 "<td colspan='2' bordercolor='#FFFFFF' bgcolor='#FFE6E6'><div align='center'><span class='Estilo73'>Programa :</span></div></td>" .
       "</tr>");
?>
     </tr>
     <tr class="tab">
       <?php
         echo ("<td height='26' colspan='2' bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div align='center'><strong><font face='Arial' size='2'>$nombre_programa</font></strong></div></td>");
?>
       <td  bordercolor="#FFFFFF" bgcolor="#710000" class="Estilo71"><div align="center" class="Estilo78 Estilo4">Fecha Redicación</div></td>
       <td  bordercolor="#FFFFFF" bgcolor="#710000" class="Estilo71"><div align="center" class="Estilo78 Estilo4">Monto Otorgado</div></td>
       <td bordercolor="#FFFFFF" bgcolor="#710000" class="Estilo71"><div align="center" class="Estilo78 Estilo4">Fecha Info. Trimestral</div></td>
     
     </tr>
     <tr class="tab">
       <td colspan="2" rowspan="1" bordercolor="#FFFFFF" bgcolor="#FFE6E6"><div align="center"><span class="Estilo73">Responsable :</span></div></td>
       <?php
          echo("<td width='72' rowspan='3' bordercolor='#FFFFFF' bgcolor='#FFE6E6'><div align='center' class='Estilo71'><strong>Proceso $id_proceso: </strong></div></td>");
 
$mt_asignado2 =number_format($mt_asignado,2);

echo ("<td width='135' rowspan='3' bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div align='center'><span class='Estilo75'><font size='2'> $ds_proceso</font></span></div></td>" .
          "<td width='87' rowspan='3' bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div align='center'><font face='Arial' size='2'>$ferd</font></div></td>" .
          "<td width='79' rowspan='3' bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div align='center'>" .
            "<p><font face='Arial' size='2'>$$mt_asignado2</font></p>" . 
          "</div></td>" .
          "<td width='90' rowspan='3' bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div align='center'><font face='Arial' size='2'> $feit </font></div></td>");
     
  
?>




       
     </tr>
     <tr class="tab"></center>
       <?php
      

//////////////////////////////////////////////////////////////////////////////////////////////////////////////7

      
	

$query3="SELECT * FROM wp_users WHERE ID = '$id_responsable'";
$res3=mysql_query($query3, $conn) or die (mysql_error($conn));

While ($row3 = mysql_fetch_array($res3)){

        $nombre_responsable = $row3["display_name"];
	}

$query3xxx="SELECT * FROM m_programas WHERE WPCD_GRUPO = '$id_grupo'";
$res3xxx=mysql_query($query3xxx, $conn) or die (mysql_error($conn));

While ($row3xxx = mysql_fetch_array($res3xxx)){

        $cd_tp = $row3xxx["TP_PROGRAMA"];

$query3xxx2="SELECT * FROM t_tipo_programa WHERE TP_PROGRAMA = '$cd_tp'";
$res3xxx2=mysql_query($query3xxx2, $conn) or die (mysql_error($conn));

While ($row3xxx2 = mysql_fetch_array($res3xxx2)){

        $tipo_programa = $row3xxx2["DS_TIPO"];
}
	}

    echo("<td colspan='2' bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div align='center'><font face='Arial' size='2'>$nombre_responsable</font></div></td>" .
        "</tr>" .
        "<tr class='tab'>" .
        "<td height='22' bordercolor='#FFFFFF' bgcolor='#FFE6E6'><div align='center'><span class='Estilo73'>Sección :</span></div></td>" .
        "<td width='95' bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div align='center'><span class='Estilo62'>$seccion</span></div> </td>" .
   "</tr></table>");
      echo("<p>      </p>"); 






///
///////////////////
//////////////////////////////
////////////////////////////////////////////////////////////////////////////////POA
?>
       <p>
         <?php


$queryp0="SELECT * FROM m_programas WHERE WPCD_GRUPO = '$id_grupo'";
$resp0=mysql_query($queryp0, $conn) or die (mysql_error($conn));

While ($rowp0 = mysql_fetch_array($resp0)){

 $aplica = $rowp0["SW_APLICA_POA"];
}
if ($aplica != 0){


$queryp1="SELECT * FROM m_prog_poa WHERE WPCD_GRUPO = '$id_grupo'";
$resp1=mysql_query($queryp1, $conn) or die (mysql_error($conn));
$anio=2012;
While ($rowp1 = mysql_fetch_array($resp1)){

        $anio = $rowp1["NU_ANIO_POA"];

	}


echo("<table width='999' border='1' cellpadding='2' cellspacing='.5' bordercolor='#C9C9C9' id='POA'><tr>".
            "<td width='999' colspan='7' bordercolor='#FFFFFF' bgcolor='#FF8000'>".
"<div align='center' class='Estilo76'>Programa Operativo Anual $anio</div></td></tr>");
?>
       </p>
     </tr>
     <tr>
       <td width="319" rowspan="2" bordercolor="#FFFFFF" bgcolor="#FFE6E6"><div align="center" class="Estilo73">Descripción</div></td>
       <td width="81" rowspan="2" bordercolor="#FFFFFF" bgcolor="#FFE6E6"><div align="center" class="Estilo73">Meta programada</div></td>
       <td width="84" rowspan="2" bordercolor="#FFFFFF" bgcolor="#FFE6E6"><div align="center" class="Estilo73">Avance de meta</div></td>
       <td width="79" rowspan="2" bordercolor="#FFFFFF" bgcolor="#FFE6E6"><div align="center" class="Estilo73">Avance</div></td>
       <td colspan="2" bordercolor="#FFFFFF" bgcolor="#9C0000"><div align="center" class="Estilo85">Impacto</div></td>
       <td width="155" rowspan="2" bordercolor="#FFFFFF" bgcolor="#FFE6E6"><div align="center" class="Estilo73">Comentarios</div></td>
     </tr>
     <tr>
       <td width="81" bordercolor="#FFFFFF" bgcolor="#FFE6E6"><div align="center" class="Estilo73">Cuantitativo</div></td>
       <td width="156" bordercolor="#FFFFFF" bgcolor="#FFE6E6"><div align="center" class="Estilo73">
         <p>Cualitativo       </p>
       </div></td>
     </tr>
    <?php

//</table> 
//<table width="999" border="1" cellpadding="2" cellspacing=".5" bordercolor="#C9C9C9" id="POA_DATOS">

$queryp2="SELECT * FROM m_prog_poa WHERE WPCD_GRUPO = '$id_grupo'";
$resp2=mysql_query($queryp2, $conn) or die (mysql_error($conn));

$cont = 0;
While ($rowp2 = mysql_fetch_array($resp2)){
$cont++;
        $anio = $rowp2["NU_ANIO_POA"];
$cd_tp_meta = $rowp2["CD_TP_META"];
$nu_meta = $rowp2["NU_META"];
$nu_avance_meta = $rowp2["NU_AVANCE_META"];
$ds_impacto_cuanti = $rowp2["DS_IMPACTO_CUANTI"];
$ds_impacto_cuali = $rowp2["DS_IMPACTO_CUALI"];
$ds_meta = $rowp2["DS_META"];
$ds_observaciones = $rowp2["DS_OBSERVACIONES"];


$queryp21="SELECT * FROM t_tp_meta WHERE CD_TP_META = '$cd_tp_meta'";
$resp21=mysql_query($queryp21, $conn) or die (mysql_error($conn));


While ($rowp21 = mysql_fetch_array($resp21)){

        $dsmeta = $rowp21["DS_CD_TP_META"];
}

$nu_meta2 = $nu_meta." ".$dsmeta;
$nu_avance_meta2 = $nu_avance_meta." ".$dsmeta;
      echo("<tr>".
        "<td bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div align='justify' class='Estilo90'>$ds_meta</div></td>".
        "<td bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div align='center' class='Estilo90'>$nu_meta2</div></td>".
        "<td bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div align='center' class='Estilo90'>$nu_avance_meta2</div></td>".
        "<td bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div id='chart192.$cont' align='center'>");


$x77 = date("Y-m-d-H-i-s"); 
$st77 = "Data/Summary/".$cont.$x77."medidorPOA.xml";
$my_file77 = "Data/Summary/".$cont.$x77."medidorPOA.xml";
$handle77 = fopen($my_file77, 'w77') or die('Cannot open file: '.$my_file77);

$pjavan = ($nu_avance_meta * 100)/ $nu_meta;




$data77 = "
-<chart gaugeFillRatio='50,50' gaugeFillMix='{color},{FFFFFF}' baseFontColor='000000' gaugeBorderThickness='3' pointerBorderColor='000000' pointerBgColor='FFFFFF' showShadow='0' majorTMHeight='8' minorTMHeight='4' minorTMNumber='4' majorTMNumber='3' majorTMColor='000000' pointerRadius='5' valuePadding='-2' tickMarkDistance='3' ticksBelowGauge='1' lowerLimit='0' upperLimit='100' chartBottomMargin='0' chartTopMargin='0' borderColor='DCCEA1' bgColor='FFFFFF'> <colorRange> <color borderColor='B40001' label='% de Avance POA' code='B40001' maxValue='60' minValue='0'/> <color label=' ' code='5C8F0E' maxValue='100' minValue='0'/> </colorRange> <value>$pjavan</value> <styles> <definition> <style bold='1' type='Font' name='limitFont'/> <style bold='1' type='Font' name='labelFont' color='FFFFFF' size='10'/> </definition> <application> <apply styles='labelFont' toObject='GAUGELABELS'/> <apply styles='limitFont' toObject='LIMITVALUES'/> </application> </styles> </chart>";
fwrite($handle77, $data77);


  echo("<script type='text/javascript'>".
				    "var myChart = new FusionCharts('Charts/HLinearGauge.swf?XMLLoadingText=Calculando porcentaje de avance...', 'chart192.$cont', '250', '80', '0', '1');".  
 					"myChart.setDataURL('$st77');".
				    "myChart.render('chart192.$cont');".
		    "</script>");    
  

echo("</div></td>".
        "<td bordercolor='#FFFFFF' bgcolor='#E9E9E9' class='Estilo90'><div align='center'>$ds_impacto_cuanti</div></td>".
        "<td bordercolor='#FFFFFF' bgcolor='#E9E9E9' class='Estilo90'><div align='center'>$ds_impacto_cuali</div></td>".
        "<td bordercolor='#FFFFFF' bgcolor='#E9E9E9'><div align='center' class='Estilo90'>$ds_observaciones</div></td>".
        "</tr>");
}

echo("</table><p>");
}
$hoy2 = date('d-m-Y');

$queryfechas="SELECT * FROM m_programas WHERE WPCD_GRUPO = '$id_grupo'";
$respfechas=mysql_query($queryfechas, $conn) or die (mysql_error($conn));

While ($rowpfechas = mysql_fetch_array($respfechas)){
        $inic2 = $rowpfechas["FE_INICIO"];
		$finl2 = $rowpfechas["FE_FINAL"];
}

$inic=date("d-m-Y",strtotime($inic2));
$finl=date("d-m-Y",strtotime($finl2));


?>        <table width='999' height='196' border='1' cellpadding='1' cellspacing='1' bordercolor='#C9C9C9' id='tablero01'>
        <tr bgcolor='#9C0000'>
   


  <td colspan="7" bgcolor="#FFE6E6" class="Estilo3"><div align="center" class="Estilo53">Riesgos y Origen de riesgos</div></td>
  </tr>
  
   
  
   
    <!--Zona de SemÃ¡foros-->
    <td width="142" align="center" bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22">Representación Electoral</div>
        <table width="81" height="49" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <?php 
$x1 = $_GET["semaforore"]; 





?>
            <td width="75"><div id="chart8" align="center">
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb.swf", "chart8", "70", "90", "0", "0");
				    <?php echo("myChart.setDataURL('$x1');"); ?>
				    myChart.render("chart8");
  </script>
            </div></td>
          </tr>
          <tr bgcolor="#EAEFF4">
            <?php


$query4xx="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '1'";
$res4xx=mysql_query($query4xx, $conn) or die (mysql_error($conn));

$switch = 0;
While ($row4xx = mysql_fetch_array($res4xx)){
$switch = 1;
        $cd_i = $row4xx["CD_IMPACTO"];
$sw_int_ext = $row4xx["SW_INTERNO_EXTERNO"];



if($sw_int_ext == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}
}
if($switch == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}




                 ?>
          
      </table></td>






    <td width="142" align="center" bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22">Activismo, Promoción, Movilización</div>
        <table width="74" height="49" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <?php 
$x2 = $_GET["semaforoapm"]; 

?>
            <td><div id="chart9" align="center">
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb.swf", "chart9", "70", "90", "0", "0");
				     <?php echo("myChart.setDataURL('$x2');"); ?>
				    myChart.render("chart9");
			  </script>
            </div></td>
          </tr>
          <tr>
            <?php


$query4xx2="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '2'";
$res4xx2=mysql_query($query4xx2, $conn) or die (mysql_error($conn));

$switch2 = 0;
While ($row4xx2 = mysql_fetch_array($res4xx2)){
$switch2 = 1;
        $cd_i2 = $row4xx2["CD_IMPACTO"];
$sw_int_ext2 = $row4xx2["SW_INTERNO_EXTERNO"];



if($sw_int_ext2 == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext2 == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}
}

if($switch2 == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}



                 ?>
          </tr>
      </table></td>
      
      
      
      
      
      
      
      
      
      
      
    <td width="142" align="center" bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22 Estilo60">Contraloría</div>
        <table width="68" height="49" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <?php 
$x3 = $_GET["semaforocontr"]; 

?>
            <td><div id="chart10" align="center">
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb.swf", "chart10", "70", "90", "0", "0");
				    <?php echo("myChart.setDataURL('$x3');"); ?>

				    myChart.render("chart10");
			  </script>
            </div></td>
          </tr>
          <tr>
            <?php



$query4xx3="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '3'";
$res4xx3=mysql_query($query4xx3, $conn) or die (mysql_error($conn));

$switch3 = 0;
While ($row4xx3 = mysql_fetch_array($res4xx3)){
$switch2 = 1;
        $cd_i3 = $row4xx3["CD_IMPACTO"];
$sw_int_ext3 = $row4xx3["SW_INTERNO_EXTERNO"];



if($sw_int_ext3 == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext3 == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}

}


if($switch3 == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}


                 ?>
          </tr>
      </table></td>
      
      
      
      
      
      
      
      
      
    <td width="142" bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22">Informática</div>
        <table align="center" width="80" height="51" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <td><div id="chart11" align="center">
                <?php 
$x4 = $_GET["semaforoinfo"]; 

?>
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb3.swf", "chart11", "70", "90", "0", "0");
				    <?php echo("myChart.setDataURL('$x4');"); ?>
				    myChart.render("chart11");
			  </script>
            </div></td>
          </tr>
          <tr>
            <?php


$query4xx4="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '4'";
$res4xx4=mysql_query($query4xx4, $conn) or die (mysql_error($conn));

$switch4 = 0;
While ($row4xx4 = mysql_fetch_array($res4xx4)){
$switch4 = 1;
        $cd_i4 = $row4xx4["CD_IMPACTO"];
$sw_int_ext4 = $row4xx4["SW_INTERNO_EXTERNO"];



if($sw_int_ext4 == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext4 == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}

}


if($switch4 == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}


//$query4x4="SELECT MAX(CD_IMPACTO) FROM M_RIESGOS WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = 4";
//$res4x4=mysql_query($query4x4, $conn) or die (mysql_error($conn));

 
//While ($row4x4 = mysql_fetch_array($res4x4)){

  //      $sw_int_ext4 = $row4x4["SW_INTERNO_EXTERNO"];

//}
//$query5x4="SELECT * FROM t_int_ext WHERE tp_int_ext = '$sw_int_ext4'";
//$res5x4=mysql_query($query5x4, $conn) or die (mysql_error($conn));

//$exist4 = 0;
//While ($row5x4 = mysql_fetch_array($res5x4)){

//$exist4 = 1;
  //      $ds_int_ext4 = $row5x4["ds_int_ext"];

//}
//if(exist4 == 0){
 //echo("<td bgcolor='#F5F5F5'><div align='center'>NORMAL</div></td>");
//}
//else{
//echo("<td bgcolor='#F5F5F5'><div align='center'>$ds_int_ext4</div></td>");
//}
                 ?>
          </tr>
      </table></td>
      
      
      
      
      
      
       <td width="142" align="center" bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22">Capacitación y Motivación</div>
        <table width="81" height="49" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <?php 
$x1 = $_GET["semaforocym"]; 





?>
            <td width="75"><div id="chart84" align="center">
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb.swf", "chart84", "70", "90", "0", "0");
				    <?php echo("myChart.setDataURL('$x1');"); ?>
				    myChart.render("chart84");
  </script>
            </div></td>
          </tr>
          <tr bgcolor="#EAEFF4">
            <?php


$query4xx="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '5'";
$res4xx=mysql_query($query4xx, $conn) or die (mysql_error($conn));

$switch = 0;
While ($row4xx = mysql_fetch_array($res4xx)){
$switch = 1;
        $cd_i = $row4xx["CD_IMPACTO"];
$sw_int_ext = $row4xx["SW_INTERNO_EXTERNO"];



if($sw_int_ext == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}
}
if($switch == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}




                 ?>
          
      </table></td>










 <td width="142" align="center" bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22">Seguimiento y Evaluación</div>
        <table width="81" height="49" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <?php 
$x1 = $_GET["semaforosye"]; 





?>
            <td width="75"><div id="chart83" align="center">
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb.swf", "chart83", "70", "90", "0", "0");
				    <?php echo("myChart.setDataURL('$x1');"); ?>
				    myChart.render("chart83");
  </script>
            </div></td>
          </tr>
          <tr bgcolor="#EAEFF4">
            <?php


$query4xx="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '6'";
$res4xx=mysql_query($query4xx, $conn) or die (mysql_error($conn));

$switch = 0;
While ($row4xx = mysql_fetch_array($res4xx)){
$switch = 1;
        $cd_i = $row4xx["CD_IMPACTO"];
$sw_int_ext = $row4xx["SW_INTERNO_EXTERNO"];



if($sw_int_ext == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}
}
if($switch == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}




                 ?>
          
      </table></td>













 <td width="142" align="center" bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22">Comunicacion Estratégica</div>
        <table width="81" height="49" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <?php 
$x1 = $_GET["semaforoce"]; 





?>
            <td width="75"><div id="chart82" align="center">
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb.swf", "chart82", "70", "90", "0", "0");
				    <?php echo("myChart.setDataURL('$x1');"); ?>
				    myChart.render("chart82");
  </script>
            </div></td>
          </tr>
          <tr bgcolor="#EAEFF4">
            <?php


$query4xx="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '7'";
$res4xx=mysql_query($query4xx, $conn) or die (mysql_error($conn));

$switch = 0;
While ($row4xx = mysql_fetch_array($res4xx)){
$switch = 1;
        $cd_i = $row4xx["CD_IMPACTO"];
$sw_int_ext = $row4xx["SW_INTERNO_EXTERNO"];



if($sw_int_ext == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}
}
if($switch == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}




                 ?>
          
      </table></td>




      
      
      
      
      
      
      
      
      
      
    
    </tr>
      
      
  <!--                                         SEGUNDA FILA DE SEMAFOROS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->
  
  
   </tr>
  
   
  
   
    <!--Zona de SemÃ¡foros-->
    <td  align="center" bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22">Operación Política</div>
        <table width="81" height="49" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <?php 
$x1 = $_GET["semaforoop"]; 





?>
            <td width="75"><div id="chart8_2" align="center">
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb.swf", "chart8_2", "70", "90", "0", "0");
				    <?php echo("myChart.setDataURL('$x1');"); ?>
				    myChart.render("chart8_2");
  </script>
            </div></td>
          </tr>
          <tr bgcolor="#EAEFF4">
            <?php


$query4xx="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '8'";
$res4xx=mysql_query($query4xx, $conn) or die (mysql_error($conn));

$switch = 0;
While ($row4xx = mysql_fetch_array($res4xx)){
$switch = 1;
        $cd_i = $row4xx["CD_IMPACTO"];
$sw_int_ext = $row4xx["SW_INTERNO_EXTERNO"];



if($sw_int_ext == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}
}
if($switch == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}




                 ?>
          
      </table></td>






    <td align="center" bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22">Finanzas</div>
        <table width="74" height="49" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <?php 
$x2 = $_GET["semaforofin"]; 

?>
            <td><div id="chart92" align="center">
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb.swf", "chart92", "70", "90", "0", "0");
				     <?php echo("myChart.setDataURL('$x2');"); ?>
				    myChart.render("chart92");
			  </script>
            </div></td>
          </tr>
          <tr>
            <?php


$query4xx2="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '9'";
$res4xx2=mysql_query($query4xx2, $conn) or die (mysql_error($conn));

$switch2 = 0;
While ($row4xx2 = mysql_fetch_array($res4xx2)){
$switch2 = 1;
        $cd_i2 = $row4xx2["CD_IMPACTO"];
$sw_int_ext2 = $row4xx2["SW_INTERNO_EXTERNO"];



if($sw_int_ext2 == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext2 == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}
}

if($switch2 == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}



                 ?>
          </tr>
      </table></td>
      
      
      
      
      
      
      
      
      
      
      
    <td align="center" bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22 Estilo60">Gestión Social</div>
        <table width="68" height="49" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <?php 
$x3 = $_GET["semaforogs"]; 

?>
            <td><div id="chart102" align="center">
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb.swf", "chart102", "70", "90", "0", "0");
				    <?php echo("myChart.setDataURL('$x3');"); ?>

				    myChart.render("chart102");
			  </script>
            </div></td>
          </tr>
          <tr>
            <?php



$query4xx3="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '10'";
$res4xx3=mysql_query($query4xx3, $conn) or die (mysql_error($conn));

$switch3 = 0;
While ($row4xx3 = mysql_fetch_array($res4xx3)){
$switch2 = 1;
        $cd_i3 = $row4xx3["CD_IMPACTO"];
$sw_int_ext3 = $row4xx3["SW_INTERNO_EXTERNO"];



if($sw_int_ext3 == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext3 == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}

}


if($switch3 == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}


                 ?>
          </tr>
      </table></td>
      
      
      
      
      
      
      
      
      
    <td bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22">Giras</div>
        <table align="center" width="80" height="51" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <td><div id="chart112" align="center">
                <?php 
$x4 = $_GET["semaforogir"]; 

?>
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb3.swf", "chart112", "70", "90", "0", "0");
				    <?php echo("myChart.setDataURL('$x4');"); ?>
				    myChart.render("chart112");
			  </script>
            </div></td>
          </tr>
          <tr>
            <?php


$query4xx4="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '11'";
$res4xx4=mysql_query($query4xx4, $conn) or die (mysql_error($conn));

$switch4 = 0;
While ($row4xx4 = mysql_fetch_array($res4xx4)){
$switch4 = 1;
        $cd_i4 = $row4xx4["CD_IMPACTO"];
$sw_int_ext4 = $row4xx4["SW_INTERNO_EXTERNO"];



if($sw_int_ext4 == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext4 == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}

}


if($switch4 == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}


//$query4x4="SELECT MAX(CD_IMPACTO) FROM M_RIESGOS WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = 4";
//$res4x4=mysql_query($query4x4, $conn) or die (mysql_error($conn));

 
//While ($row4x4 = mysql_fetch_array($res4x4)){

  //      $sw_int_ext4 = $row4x4["SW_INTERNO_EXTERNO"];

//}
//$query5x4="SELECT * FROM t_int_ext WHERE tp_int_ext = '$sw_int_ext4'";
//$res5x4=mysql_query($query5x4, $conn) or die (mysql_error($conn));

//$exist4 = 0;
//While ($row5x4 = mysql_fetch_array($res5x4)){

//$exist4 = 1;
  //      $ds_int_ext4 = $row5x4["ds_int_ext"];

//}
//if(exist4 == 0){
 //echo("<td bgcolor='#F5F5F5'><div align='center'>NORMAL</div></td>");
//}
//else{
//echo("<td bgcolor='#F5F5F5'><div align='center'>$ds_int_ext4</div></td>");
//}
                 ?>
          </tr>
      </table></td>
      
      
      
      
      
      
       <td align="center" bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22">Foros de Consulta Popular</div>
        <table width="81" height="49" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <?php 
$x1 = $_GET["semaforofdcp"]; 





?>
            <td width="75"><div id="chart842" align="center">
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb.swf", "chart842", "70", "90", "0", "0");
				    <?php echo("myChart.setDataURL('$x1');"); ?>
				    myChart.render("chart842");
  </script>
            </div></td>
          </tr>
          <tr bgcolor="#EAEFF4">
            <?php


$query4xx="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '12'";
$res4xx=mysql_query($query4xx, $conn) or die (mysql_error($conn));

$switch = 0;
While ($row4xx = mysql_fetch_array($res4xx)){
$switch = 1;
        $cd_i = $row4xx["CD_IMPACTO"];
$sw_int_ext = $row4xx["SW_INTERNO_EXTERNO"];



if($sw_int_ext == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}
}
if($switch == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}




                 ?>
          
      </table></td>










 <td align="center" bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22">Relaciones Públicas</div>
        <table width="81" height="49" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <?php 
$x1 = $_GET["semafororp"]; 





?>
            <td width="75"><div id="chart832" align="center">
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb.swf", "chart832", "70", "90", "0", "0");
				    <?php echo("myChart.setDataURL('$x1');"); ?>
				    myChart.render("chart832");
  </script>
            </div></td>
          </tr>
          <tr bgcolor="#EAEFF4">
            <?php


$query4xx="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '13'";
$res4xx=mysql_query($query4xx, $conn) or die (mysql_error($conn));

$switch = 0;
While ($row4xx = mysql_fetch_array($res4xx)){
$switch = 1;
        $cd_i = $row4xx["CD_IMPACTO"];
$sw_int_ext = $row4xx["SW_INTERNO_EXTERNO"];



if($sw_int_ext == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}
}
if($switch == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}




                 ?>
          
      </table></td>













 <td align="center" bgcolor="#E9E9E9" class="Estilo1"><div align="center" class="Estilo22">Seguridad y blindaje en la jornada</div>
        <table width="81" height="49" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
          <tr>
            <?php 
$x1 = $_GET["semaforosybelj"]; 





?>
            <td width="75"><div id="chart822" align="center">
                <script type="text/javascript">
				    var myChart = new FusionCharts("Charts/Bulb.swf", "chart822", "70", "90", "0", "0");
				    <?php echo("myChart.setDataURL('$x1');"); ?>
				    myChart.render("chart822");
  </script>
            </div></td>
          </tr>
          <tr bgcolor="#EAEFF4">
            <?php


$query4xx="SELECT * FROM m_riesgos WHERE WPCD_GRUPO = '$id_grupo' AND TP_RIESGO = '14'";
$res4xx=mysql_query($query4xx, $conn) or die (mysql_error($conn));

$switch = 0;
While ($row4xx = mysql_fetch_array($res4xx)){
$switch = 1;
        $cd_i = $row4xx["CD_IMPACTO"];
$sw_int_ext = $row4xx["SW_INTERNO_EXTERNO"];



if($sw_int_ext == 1){
 echo("<td bgcolor='#F5F5F5'><div align='center'>Interno</div></td>");
}
if($sw_int_ext == 2){
echo("<td bgcolor='#F5F5F5'><div align='center'>Externo</div></td>");
}
}
if($switch == '0'){
echo("<td bgcolor='#F5F5F5'><div align='center'>Normal</div></td>");
}




                 ?>
          
      </table></td>




      
      
      
      
      
      
      
      
      
      
    
    </tr>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    
       </table>
   <!--Fin Tabla SemÃ¡foros-->
<p>
        <!--Tabla Subtitulo -->

<table width="999" height="25" border="0">
        <tr>
          <td><div align="left" class="Estilo47">
            <div align="left" class="Estilo87">Plan de Trabajo</div>
          </div></td>
        </tr>





<?php 
$x6 = $_GET["gantt"]; 
?> 


<?php

$querygantt="SELECT COUNT(CD_ACCION) FROM m_acciones WHERE WPCD_GRUPO = '$id_grupo'";
$resgantt=mysql_query($querygantt, $conn) or die (mysql_error($conn));

 
While ($rowgantt = mysql_fetch_array($resgantt)){

        $lineas = $rowgantt["COUNT(CD_ACCION)"];

}

$querygantt2="SELECT COUNT(CD_COMPONENTE) FROM m_componentes WHERE WPCD_GRUPO = '$id_grupo'";
$resgantt2=mysql_query($querygantt2, $conn) or die (mysql_error($conn));

While ($rowgantt2 = mysql_fetch_array($resgantt2)){

        $lineas2 = $rowgantt2["COUNT(CD_COMPONENTE)"];

}

$total_lineas = $lineas + $lineas2;
if($total_lineas >= 10 && $total_lineas <= 18){
$wg = 470;
}
else{
if($total_lineas < 10){
$wg = 290;
}
else{
if($total_lineas > 18 && $total_lineas <= 30){
$wg = 780;
}
else{
if($total_lineas > 30 && $total_lineas <= 50){
$wg = 960;
}
else{
if($total_lineas > 50 && $total_lineas <= 100){
$wg = 1860;
}
else{
if($total_lineas > 100 && $total_lineas <= 150){
$wg = 2860;
}
else{
if($total_lineas > 150 && $total_lineas <= 200){
$wg = 3960;
}
else{
if($total_lineas > 200 && $total_lineas <= 250){
$wg = 4360;
}
else{
if($total_lineas > 250 && $total_lineas <= 300){
$wg = 4660;
}
else{
if($total_lineas > 300 && $total_lineas <= 350){
$wg = 4960;
}
else{
if($total_lineas > 350){
$wg = 5860;
}
}
}
}
}
}
}
}
}
}
}





          echo("<td width='999' height='59'><div id='chart1' align='center'></div>".
          "<script type='text/javascript'>".
				    "var myChart = new FusionCharts('Charts/Gantt_2.swf?InvalidXMLText=Error al leer archivo XML', 'chart1', '999', '$wg', '0', '0');");
	?>			   
     <?php echo("myChart.setDataURL('$x6');"); ?>
				    myChart.render("chart1");
			    </script>          </td>
        </tr>
      







  
<p>
        <!--Fin Tabla Gantt-->
        
  </p>
      <p>&nbsp;</p>
   
     <center> 
 
 
 

 <tr><td>
      <?php
      echo("<center><iframe border='0' frameborder='0' width='1050' height='1200' bgcolor='#c7c7c7' src='http://sharingpips.com/sige/Aplicaciones_scriptcase/TABLERO_C/TABLERO_C.php?wpcd_grupo=$id_grupo' ></iframe></center>");
?>
</td>
   </tr>
   
   
   
   
   </center>
 
</table>

</body>
</html>

