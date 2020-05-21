<style>
.pokaz_dati_calendarya{
	width: 145px;
	background-color: #4baf4b;
	text-align: center;
	font-size: 18px;
	cursor: pointer;
	color: #FFFFFF;
	float: left;
	position: relative;
	display: block;
	}
.pokaz_dati_calendarya:hover{
	color:#FFF;
	}

.img_kal{
	width:32px;
	height:37px;
	cursor: pointer;
	margin-top:1px;
	background-image: url("/imguser/kal.png");
	}
.test{
	background-color: #6f9097;
	}

.calendar{
  width: 225px;
  background-color: #FFFFFF;
  float: left;  
  margin-left: 0;
  padding-right:0;
  z-index: 100;
  height: auto;
  display: block;
  padding-left: 20px;
  text-align:center;
  padding-bottom:2px;
  border: 1px groove #666999;
	}
.menu_calendar{
	width: 220px;
	background-color: #FFF;
	padding-top: 0px;
	text-align: left;
	padding-left: 0;
	}
.widch100calendar{
	width: 220px;
	height:10px;
	}
.clos_calendar{
	width: 30px;
	height:20px;
	margin-right:13px;
	background-color: #FFFFFF;
	padding-top: 0px;
	text-align: left;
	background-image:url(/imguser/closecal2.png);
	float:right;
	cursor:pointer;
	}
.clos_calendar:hover{
	background-image:url(/imguser/closecal3.png);
	
	}

.cal_dni_nedeli{
	width: 210px;
	background-color: #CCC;
	padding-top: 1px;
	padding-bottom: 1px;
	text-align: center;
	}


.opis_dn{
	width: 30px;
	height: 20px;
	background-color: #feeccf;
	float: left;
	text-align: center;
	font-size: 15px;
	color: #333;
	}
.opis_dn_v{
	width: 30px;
	height: 20px;
	background-color: #feeccf;
	float: left;
	text-align: center;
	font-size: 15px;
	color: #F00;
	}
.sami_dni{
	width: 30px;
	height: 20px;
	background-color: #FFF;
	float: left;
	text-align: center;
	font-size: 15px;
	color: #000;	
	font-weight: normal;
	}
.sami_dni2{
	width: 30px;
	height: 20px;
	background-color: #4baf4b;
	float: left;
	text-align: center;
	font-size: 15px;
	color: #FFFFFF;	
	font-weight: normal;
	}
.style_dn2{
	text-align: center;
	font-size: 16px;
	color: #FFFFFF;
	text-decoration: none;
	}
.style_dn{
	background-color: #FFF;
	text-align: center;
	font-size: 16px;
	color: #333;
	text-decoration: none;
	}
.style_dn:hover{
	color: #00C;
	font-size: 16px;
	font-weight: bold;
	text-decoration: underline;
	}
.cal_body{
	width: 210px;
	background-color: #FFF;
	padding-top: 5px;
	padding-bottom: 5px;
	text-align: center;
	}

.cal_fut{
	width: 210px;
	background-color: #FFF;
	padding-top: 10px;
	text-align: center;
	padding-bottom:15px;
	}
.cfunk{
	color: #000;
	font-size: 17px;
	text-decoration: none;
	}
.cfunk:hover{
	font-size: 17px;
	text-decoration: underline;
	}

.closek{
	float: right;
	width:210px;	
	background-size:auto;
	resize: vertical;
	cursor:pointer;
	margin-right:15px;
	margin-bottom:15px;
	cursor:pointer;	
	height:58px;
	font-size:27px;
	background-color:#CCC;
	padding-top:5px;
	}
	
.m_close{
	width: 220px;
	height:5px;
	background-color:#FFF;
	text-align:right;
	}
		
.close_img{
width:38px;
cursor:pointer;
margin-right:-15px;
margin-top:-15px;
}



.data0{
	width:250px;
	height:25px;
	float:left;
	margin-right:78px;
	position:fixed;
	z-index:4;
	 
	}
.data0_f{
	width:250px;
	position:fixed;
	bottom: 0;
	right:0;
	}

.data1{
	width: 50px;
	height: 25px;
	background-color: #4baf4b;
	float: left;
	text-align: center;
	padding-top: 5px;
	cursor:pointer;
	}
.data1:hover{
	background-color: #6f9097;
	}


.data2{
	width: 146px;
	height: 25px;
	color: #CCC;
	background-color: #4baf4b;
	float: left;
	padding-top: 5px;
	text-align: center;
	border-style: dashed;
	border-width:thin;
	border-left-width:0;
	border-right-width:0;
	border-top-width:0;
	border-bottom-width:1px;
	cursor:pointer;
	}

.data3{
	width:50px;
	height:25px;
	background-color:#4baf4b;
	float: left;
	padding-top:5px;
	text-align:center;
	cursor:pointer;
	}
.data3:hover{
	background-color: #6f9097;
	}
.data_calbody{
	width:250px;
	background-color:#FFF;
	float: right;
	right: -250px;
	bottom:0;
	margin-bottom:30px;
	position: fixed;
	 -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -webkit-border-radius: 0 5px 0 0;
    -moz-border-radius: 0 5px 0 0;
	z-index:50;
	}

.atriug{
	color: #FFFFFF;
	font-size: 20px;
	text-decoration: none;
	}







</style>

<div class="data0">
<div class="data0_f">




<!---->





<div class="data_calbody" id="dcbody">

<div id="calendar" class="calendar">

<div class="widch100calendar"></div> 

<div id="menu_calendar" class="menu_calendar">



<form action="" method="get">
<select id="mes" name="mes" onChange="cheksel()">
<option value="1" <?php if($date_mes==1){echo "selected";} ?>>январь
<option value="2" <?php if($date_mes==2){echo "selected";} ?>>февраль
<option value="3" <?php if($date_mes==3){echo "selected";} ?>>март
<option value="4" <?php if($date_mes==4){echo "selected";} ?>>апрель
<option value="5" <?php if($date_mes==5){echo "selected";} ?>>май
<option value="6" <?php if($date_mes==6){echo "selected";} ?>>июнь
<option value="7" <?php if($date_mes==7){echo "selected";} ?>>июль
<option value="8" <?php if($date_mes==8){echo "selected";} ?>>август
<option value="9" <?php if($date_mes==9){echo "selected";} ?>>сентябрь
<option value="10" <?php if($date_mes==10){echo "selected";} ?>>октябрь
<option value="11" <?php if($date_mes==11){echo "selected";} ?>>ноябрь
<option value="12" <?php if($date_mes==12){echo "selected";} ?>>декабрь
</select>

<select id="god" name="god" onChange="cheksel()">

<?php

$date_god_beg=2013;	
$date_god_end=date("Y")+1;
	

for ($i = $date_god_beg; $i <= $date_god_end; $i++) {

echo "<option value=".$i."";
 if($i==$date_god){echo " selected ";} 
echo ">".$i;


 }
 ?>
 </select>
 

<div id="clos_calendar" class="clos_calendar" onclick="hid_calendarya()"></div>  
 
 <div class="widch100calendar"></div> 

</div> 

<div class="cal_dni_nedeli">

<div class="opis_dn">Пн</div>
<div class="opis_dn">Вт</div>
<div class="opis_dn">Ср</div>
<div class="opis_dn">Чт</div>
<div class="opis_dn">Пт</div>
<div class="opis_dn_v">Сб</div>
<div class="opis_dn_v">Вс</div>

</div> 

<div id="cal_body" class="cal_body">
<?php

//$den_1ned_otstup = date('w', mktime(0, 0, 0, $date_mes, $day_count, $date_god));

//$d_v=$date_den+1;

$den_1ned_otstup = date('w', mktime(0, 0, 0, $date_mes, $date_den, $date_god));
$den_kol = date("t", strtotime($date_god . "-" . $date_mes . "-01"));

$den_segodnya = date("j");
$mes_segodnya = date("n");

for ($i = 0; $i < $den_1ned_otstup; $i++) { 
echo "<div class=\"sami_dni\"></div>";
}
for ($i = 1; $i <= $den_kol; $i++) { 

if($den_segodnya == $i && $date_mes==$mes_segodnya){
echo "<div class=\"sami_dni2\"><a class=\"style_dn2\" ";}
else
{echo "<div class=\"sami_dni\"><a class=\"style_dn\" ";}


echo "href=\"/user/spreadsheet/?";
echo "d=".$i;
echo "&m=".$date_mes;
echo "&g=".$date_god;
echo "\">".$i."</a></div>";
}
?>
</div> 



<div class="cal_fut">

<?php
$d_vh= (int)date("d", (time()-86400));
$m_vh= (int)date("n", (time()-86400));
$g_vh= (int)date("Y", (time()-86400));

$d_s= (int)date("d");
$m_s= (int)date("n");
$g_s= (int)date("Y");

$d_z= (int)date("d", (time()+86400));
$m_z= (int)date("n", (time()+86400));
$g_z= (int)date("Y", (time()+86400));





echo "<a class=\"cfunk\" href=\"/user/spreadsheet/?d=".$d_vh."&m=".$m_vh."&g=".$g_vh."\">вчера</a>";

echo "&nbsp;";

echo "<a class=\"cfunk\" href=\"/user/spreadsheet/?d=".$d_s."&m=".$m_s."&g=".$g_s."\">Сегодня</a>";

echo "&nbsp;";

echo "<a class=\"cfunk\" href=\"/user/spreadsheet/?d=".$d_z."&m=".$m_z."&g=".$g_z."\">завтра</a>";

echo "&nbsp;";

?>



</div> <!--cal_fut end-->


</form>



</div> <!--calendar end-->



<!--/////////////data_calbody end///////////////-->


</div>

<!---->




<?php



if ($date_den-1<1) { 


if ($date_mes-1<1) {$d_n=31; $m_n=12; $g_n=$date_god-1;
}else{
	$num_days_in_month = cal_days_in_month(CAL_GREGORIAN, $date_mes-1, $date_god);
	  
	 $d_n = $num_days_in_month;	
	 $m_n=$date_mes-1;
	 $g_n=$date_god;
	 }



}else{
	$d_n=$date_den-1;
	$m_n=$date_mes;
	$g_n=$date_god;
}






echo "<a class=\"atriug\" id=\"adata1\" href='/user/spreadsheet/";
echo "?d=";
echo $d_n;
echo "&m=";
echo $m_n;
echo "&g=";
echo $g_n;

echo "'><div class='data1' id='data1'>";

echo "&#9668;</div></a>";













?>




<div class="data2" id="datacolor1">
<div class="pokaz_dati_calendarya" id="datacolor2" onclick="pokaz_calendarya();" >
<!--<a href="cal.php"><img src="imguser/kal.png" width="20px;" style="padding-top:5px;" /></a> &nbsp;-->
<?php
$mesyaci = array(1 => "января", 2 => "февраля", 3 => "марта", 4 => "апреля", 5 => "мая", 6 => "июня", 7 => "июля", 8 => "августа", 9 => "сентября", 10 => "октября", 11 => "ноября", 12 => "декабря", );
$datapokaz=$date_den." ".$mesyaci[$date_mes]." ".$date_god;
echo $datapokaz;
?>
</div>
</div><!--data2 end-->







<?php


$num_days_in_month = cal_days_in_month(CAL_GREGORIAN, $date_mes, $date_god);
//return $num_days_in_month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31);

if ($date_den+1>$num_days_in_month) { 

$d_v = 1;
if ($date_mes+1>12) {$m_v=1; $g_v=$date_god+1;}else{ $m_v=$date_mes+1; $g_v=$date_god;}



}else{
	$d_v=$date_den+1;
	$m_v=$date_mes;
	$g_v=$date_god;
}
//////////////////////////// data3 /////////////




echo "<a class=\"atriug\" href='/user/spreadsheet/";
echo "?d=";
echo $d_v;
echo "&m=";
echo $m_v;
echo "&g=";
echo $g_v;


echo "'><div class='data3' id='data3'>";

echo "&#9658;</div></a>";


?>













</div><!--0f-->

</div><!--0-->










<?php

$mesprover = date("n");
$denprover = date("j");
$godprover = date("Y");	

if($date_den == $denprover && $date_mes == $mesprover && $date_god==$godprover){

echo "<script>";
echo "document.getElementById('datacolor1').style.backgroundColor='#4baf4b'";
echo "</script>";

}else{
	
echo "<script>";

echo "document.getElementById('datacolor2').style.backgroundColor='#6f9097'; ";

echo "document.getElementById('data1').style.backgroundColor='#6f9097'; ";
echo "document.getElementById('data3').style.backgroundColor='#6f9097'; ";
echo "document.getElementById('datacolor1').style.backgroundColor='#6f9097'; ";
echo "document.getElementById('adata1').style.backgroundColor='#6f9097'; ";
echo "document.getElementById('adata3').style.backgroundColor='#6f9097'; ";

echo "document.getElementById('datacolor2').style.color='#000000'; ";
echo "document.getElementById('adata1').style.color='#6f9097'; ";
echo "document.getElementById('adata3').style.color='#6f9097'; ";


echo "</script>";

}




?>

<script>
var x=0;
</script>




