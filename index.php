<?php 
require 'survey/connect.php';
$query1 = mysql_query("select* from questions;");
$m=0;
while ($arra1 = mysql_fetch_array($query1)) {
		$qn[$m]=$arra1['question'];	
		$m++;
}

$name=$_POST['name'];
$email=$_POST['email'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];
$c6=$_POST['c6'];

if ($name!='') {
		$dia=date('d');
		$mes=date('m');
		$ano=date('Y');
		$hora=date('h:i:s');
		$ampm=date('A');

mysql_query("insert into results (name, email, q1, q2, q3, q4, q5, q6, c1, c2, c3, c5) values ('$name','$email','$q1','$q2','$q3','$q4','$q5','$q6','$c1','$c2','$c3','$c5')");
		

	$empresa="MK Vision Center";
	$correoEmpresa="contact@mottoptical.com";
	
	$mime_boundary = "----erttrtrt----".md5(time());
	
	$message .= "--$mime_boundary\r\n";
	$message .= "Content-Type: text/html; charset=UTF-8\r\n";
	$message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
	
	$headers = "From: $empresa <$correoEmpresa>\r\n"; //headers
	$headers .= "Reply-To: $empresa <$correoEmpresa>\r\n"; //headers
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\r\n";
	
	$asunto = "Some one answer the poll  $"; //asunto
	$mensajeCliente = "<html><body>Hi $nombre, <br>Thank you for make your post. Te estaremos respondiendo lo m�s pronto posible. <br>Comercial Department<br>MK Vision<br><br>This message has been automatically generated from mottoptical.com</body></html>"; //mensaje cliente
	
	//mensaje a Cliente para decirle que fue recibido el mensaje
	//mail($correo,$asunto,$message.$mensajeCliente,$headers);
	
	$mensajeNotificacion="<html><body>
							A visitor just post in $empresa
							<br> 
							<br> Data:
							<br> Name: $nombre 
							<br> E-mail: $correo 
							<br> Comment: $comentario
							<br> This message has been automatically generated from mottoptical.com			
						</body></html>";
	
	//mensaje a empresa notificandoles que una persona nueva se contacto con ellos
	 
	//mail("info@iodec.net","Contact MK Vision ",$message.$mensajeNotificacion,$headers);
	//mail("jair3d@hotmail.com","Contact MK Vision",$message.$mensajeNotificacion,$headers);

}

?>
<html>
<head>
<title>HOME - Chinatown Optical Group (Since 1979): Chinatown Optical, Inc., Hunter visison Center, Inc., Brooklyn Optical, Inc.</title>
<link rel="stylesheet" type="text/css" href="preview.css"/>
	<link rel="stylesheet" type="text/css" href="wt-rotator.css"/>
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>

    <script type="text/javascript" src="js/jquery.wt-rotator.min.js"></script>    
	<script type="text/javascript" src="js/preview.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
@import url("nav_bar/nav_menu.css");

@import url("nav_bar/nav_bar.css");

body {
	background-image: url(file:///C|/Users/JAIR/Desktop/copticalgroup.com_backup/images/chinatown_optical_group_bkground.jpg);
	background-repeat:repeat-x;
	background-color: #8A8A8A;
	text-align: center;
}
.test {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-weight: bold;
	color: #FFF;
}
a:link {
	color: #202020;
}
a:visited {
	color: #202020;
}
a:hover {
	color: #202020;
}
a:active {
	color: #202020;
}
.style1 {
	font-size: 10px;
	font-weight: bold;
}
	

-->
</style>
<script src="file:///C|/Users/JAIR/Desktop/copticalgroup.com_backup/Scripts/swfobject_modified.js" type="text/javascript"></script>
<script language="JavaScript1.2" type="text/javascript" src="nav_bar/mm_css_menu.js"></script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('nav_bar/nav_menu_r1_c1_s3.gif','nav_bar/nav_menu_r1_c1_s2.gif','nav_bar/nav_menu_r1_c1_s4.gif','nav_bar/nav_menu_r1_c2_s3.gif','nav_bar/nav_menu_r1_c2_s2.gif','nav_bar/nav_menu_r1_c2_s4.gif','nav_bar/nav_menu_r1_c3_s3.gif','nav_bar/nav_menu_r1_c3_s2.gif','nav_bar/nav_menu_r1_c3_s4.gif','nav_bar/nav_menu_r1_c4_s3.gif','nav_bar/nav_menu_r1_c4_s2.gif','nav_bar/nav_menu_r1_c4_s4.gif','nav_bar/nav_menu_r1_c5_s3.gif','nav_bar/nav_menu_r1_c5_s2.gif','nav_bar/nav_menu_r1_c5_s4.gif','nav_bar/nav_menu_r1_c6_s3.gif','nav_bar/nav_menu_r1_c6_s2.gif','nav_bar/nav_menu_r1_c6_s4.gif','nav_bar/nav_menu_r1_c7_s3.gif','nav_bar/nav_menu_r1_c7_s2.gif','nav_bar/nav_menu_r1_c7_s4.gif','nav_bar/nav_menu_r1_c8_s3.gif','nav_bar/nav_menu_r1_c8_s2.gif','nav_bar/nav_menu_r1_c8_s4.gif')">
<!-- Save for Web Slices (chinatownopticalNY_home.psd) -->
<table width="1000" height="677" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
  <tr>
    <td colspan="11">
    <table id="Table_" width="1000" height="104" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="753" valign="bottom" bgcolor="#104C2A"><img src="images/chinatown_optical_home_top_01.jpg" alt="" width="753" height="104" border="0" usemap="#Map2">
          <map name="Map2">
            <area shape="rect" coords="14,7,367,48" href="index.html">
            <area shape="rect" coords="81,53,299,69" href="chinatown_optical_chinatown.html">
            <area shape="rect" coords="307,53,533,68" href="chinatown_optical_hunter.html">
            <area shape="rect" coords="545,54,742,69" href="chinatown_optical_brooklyn.html">
          </map></td>
        <td width="247" valign="top" bgcolor="#124B2A" class="test"><center><p>SIGN UP FOR NEWSLETTER & PROMOTIONS</p></center>
        
            <form name="form1" action="file:///C|/Users/JAIR/Desktop/copticalgroup.com_backup/form_copticalgroup.php" method="post">
    <table width="200" border="0" align="center" cellspacing="3">
        <tr>
          <td class="test"><div align="center">
            <input name="name" type="text" id="name" value="LAST NAME, FIRST NAME" size="30">
          </div></td>
        </tr>
        
        <tr>
          <td><div align="center">
            <input name="email" type="text" id="email" value="E-MAIL" size="30">
          </div></td>
        </tr>
        <tr>
          <td><div align="center">
            <input type="submit" name="button2" id="button2" value="Submit">
            <input type="reset" name="Reset" id="button" value="Reset">
          </div></td>
        </tr>
    </table></form><p></p>    </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="11" bgcolor="#104C2A"><div id="FWTableContainer1543766624">
      <table style="display: inline-table;" border="0" cellpadding="0" cellspacing="0" width="1000">
        <!-- fwtable fwsrc="navigation bar 3.png" fwpage="Page 1" fwbase="nav_menu.gif" fwstyle="Dreamweaver" fwdocid = "1543766624" fwnested="0" -->
        <tr>
          <td><img src="nav_bar/spacer.gif" alt="" name="undefined_2" width="66" height="1" border="0" /></td>
          <td><img src="nav_bar/spacer.gif" alt="" name="undefined_2" width="138" height="1" border="0" /></td>
          <td><img src="nav_bar/spacer.gif" alt="" name="undefined_2" width="138" height="1" border="0" /></td>
          <td><img src="nav_bar/spacer.gif" alt="" name="undefined_2" width="201" height="1" border="0" /></td>
          <td><img src="nav_bar/spacer.gif" alt="" name="undefined_2" width="127" height="1" border="0" /></td>
          <td><img src="nav_bar/spacer.gif" alt="" name="undefined_2" width="66" height="1" border="0" /></td>
          <td><img src="nav_bar/spacer.gif" alt="" name="undefined_2" width="104" height="1" border="0" /></td>
          <td><img src="nav_bar/spacer.gif" alt="" name="undefined_2" width="160" height="1" border="0" /></td>
          <td><img src="nav_bar/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0" /></td>
        </tr>
        <tr>
          <td><a href="index.html" target="_top" onClick="MM_nbGroup('down','navbar1','nav_menu_r1_c1_s1','nav_bar/nav_menu_r1_c1_s3.gif',1);" onMouseOver="MM_nbGroup('over','nav_menu_r1_c1_s1','nav_bar/nav_menu_r1_c1_s2.gif','nav_bar/nav_menu_r1_c1_s4.gif',1);" onMouseOut="MM_nbGroup('out');"><img name="nav_menu_r1_c1_s1" src="nav_bar/nav_menu_r1_c1_s1.gif" width="66" height="26" border="0" id="nav_menu_r1_c1_s1" alt="" /></a></td>
          <td><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','nav_menu_r1_c2_s1','nav_bar/nav_menu_r1_c2_s3.gif',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0714231102_0', 'MMMenu0714231102_0',0,26,'nav_menu_r1_c2_s1');MM_nbGroup('over','nav_menu_r1_c2_s1','nav_bar/nav_menu_r1_c2_s2.gif','nav_bar/nav_menu_r1_c2_s4.gif',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(100);"><img name="nav_menu_r1_c2_s1" src="nav_bar/nav_menu_r1_c2_s1.gif" width="138" height="26" border="0" id="nav_menu_r1_c2_s1" alt="" /></a></td>
          <td><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','nav_menu_r1_c3_s1','nav_bar/nav_menu_r1_c3_s3.gif',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0714234752_1', 'MMMenu0714234752_1',0,26,'nav_menu_r1_c3_s1');MM_nbGroup('over','nav_menu_r1_c3_s1','nav_bar/nav_menu_r1_c3_s2.gif','nav_bar/nav_menu_r1_c3_s4.gif',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(100);"><img name="nav_menu_r1_c3_s1" src="nav_bar/nav_menu_r1_c3_s1.gif" width="138" height="26" border="0" id="nav_menu_r1_c3_s1" alt="" /></a></td>
          <td><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','nav_menu_r1_c4_s1','nav_bar/nav_menu_r1_c4_s3.gif',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0714235314_2', 'MMMenu0714235314_2',0,26,'nav_menu_r1_c4_s1');MM_nbGroup('over','nav_menu_r1_c4_s1','nav_bar/nav_menu_r1_c4_s2.gif','nav_bar/nav_menu_r1_c4_s4.gif',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(100);"><img name="nav_menu_r1_c4_s1" src="nav_bar/nav_menu_r1_c4_s1.gif" width="201" height="26" border="0" id="nav_menu_r1_c4_s1" alt="" /></a></td>
          <td><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','nav_menu_r1_c5_s1','nav_bar/nav_menu_r1_c5_s3.gif',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0714235735_3', 'MMMenu0714235735_3',0,26,'nav_menu_r1_c5_s1');MM_nbGroup('over','nav_menu_r1_c5_s1','nav_bar/nav_menu_r1_c5_s2.gif','nav_bar/nav_menu_r1_c5_s4.gif',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(100);"><img name="nav_menu_r1_c5_s1" src="nav_bar/nav_menu_r1_c5_s1.gif" width="127" height="26" border="0" id="nav_menu_r1_c5_s1" alt="" /></a></td>
          <td><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','nav_menu_r1_c6_s1','nav_bar/nav_menu_r1_c6_s3.gif',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0714235820_4', 'MMMenu0714235820_4',0,26,'nav_menu_r1_c6_s1');MM_nbGroup('over','nav_menu_r1_c6_s1','nav_bar/nav_menu_r1_c6_s2.gif','nav_bar/nav_menu_r1_c6_s4.gif',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(100);"><img name="nav_menu_r1_c6_s1" src="nav_bar/nav_menu_r1_c6_s1.gif" width="66" height="26" border="0" id="nav_menu_r1_c6_s1" alt="" /></a></td>
          <td><a href="chinatown_optical_charity.html" target="_top" onClick="MM_nbGroup('down','navbar1','nav_menu_r1_c7_s1','nav_bar/nav_menu_r1_c7_s3.gif',1);" onMouseOver="MM_nbGroup('over','nav_menu_r1_c7_s1','nav_bar/nav_menu_r1_c7_s2.gif','nav_bar/nav_menu_r1_c7_s4.gif',1);" onMouseOut="MM_nbGroup('out');"><img name="nav_menu_r1_c7_s1" src="nav_bar/nav_menu_r1_c7_s1.gif" width="104" height="26" border="0" id="nav_menu_r1_c7_s1" alt="" /></a></td>
          <td><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','nav_menu_r1_c8_s1','nav_bar/nav_menu_r1_c8_s3.gif',1);" onMouseOver="MM_menuShowMenu('MMMenuContainer0714235909_5', 'MMMenu0714235909_5',0,26,'nav_menu_r1_c8_s1');MM_nbGroup('over','nav_menu_r1_c8_s1','nav_bar/nav_menu_r1_c8_s2.gif','nav_bar/nav_menu_r1_c8_s4.gif',1);" onMouseOut="MM_nbGroup('out');MM_menuStartTimeout(100);"><img name="nav_menu_r1_c8_s1" src="nav_bar/nav_menu_r1_c8_s1.gif" width="160" height="26" border="0" id="nav_menu_r1_c8_s1" alt="" /></a></td>
          <td><img src="nav_bar/spacer.gif" alt="" name="undefined_2" width="1" height="26" border="0" /></td>
        </tr>
      </table>
      <div id="MMMenuContainer0714231102_0">
        <div id="MMMenu0714231102_0" onMouseOut="MM_menuStartTimeout(100);" onMouseOver="MM_menuResetTimeout();"> <a href="chinatown_optical_philosophy.html" target="_self" id="MMMenu0714231102_0_Item_0" class="MMMIFVStyleMMMenu0714231102_0" onMouseOver="MM_menuOverMenuItem('MMMenu0714231102_0');"> PHILOSOPHY </a> <a href="chinatown_optical_gallery.html" target="_self" id="MMMenu0714231102_0_Item_1" class="MMMIVStyleMMMenu0714231102_0" onMouseOver="MM_menuOverMenuItem('MMMenu0714231102_0');"> STORE&nbsp;GALLERY </a> <a href="chinatown_optical_career.html" target="_self" id="MMMenu0714231102_0_Item_2" class="MMMIVStyleMMMenu0714231102_0" onMouseOver="MM_menuOverMenuItem('MMMenu0714231102_0');"> CAREER </a> </div>
      </div>
      <div id="MMMenuContainer0714234752_1">
        <div id="MMMenu0714234752_1" onMouseOut="MM_menuStartTimeout(100);" onMouseOver="MM_menuResetTimeout();"> <a href="chinatown_optical_eyewear.html" target="_self" id="MMMenu0714234752_1_Item_0" class="MMMIFVStyleMMMenu0714234752_1" onMouseOver="MM_menuOverMenuItem('MMMenu0714234752_1');"> EYEWEAR&nbsp;BRANDS </a> <a href="chinatown_optical_eyeweargallery.html" target="_self" id="MMMenu0714234752_1_Item_1" class="MMMIVStyleMMMenu0714234752_1" onMouseOver="MM_menuOverMenuItem('MMMenu0714234752_1');"> EYEWEAR&nbsp;GALLERY&nbsp; </a> </div>
      </div>
      <div id="MMMenuContainer0714235314_2">
        <div id="MMMenu0714235314_2" onMouseOut="MM_menuStartTimeout(100);" onMouseOver="MM_menuResetTimeout();"> <a href="chinatown_optical_exam.html" target="_self" id="MMMenu0714235314_2_Item_0" class="MMMIFVStyleMMMenu0714235314_2" onMouseOver="MM_menuOverMenuItem('MMMenu0714235314_2');"> EYE&nbsp;EXAM </a> <a href="chinatown_optical_contactlens.html" target="_self" id="MMMenu0714235314_2_Item_1" class="MMMIVStyleMMMenu0714235314_2" onMouseOver="MM_menuOverMenuItem('MMMenu0714235314_2');"> CONTACT&nbsp;LENSES </a> <a href="chinatown_optical_insurance.html" target="_self" id="MMMenu0714235314_2_Item_2" class="MMMIVStyleMMMenu0714235314_2" onMouseOver="MM_menuOverMenuItem('MMMenu0714235314_2');"> INSURANCE </a> <a href="chinatown_optical_spending.html" target="_self" id="MMMenu0714235314_2_Item_3" class="MMMIVStyleMMMenu0714235314_2" onMouseOver="MM_menuOverMenuItem('MMMenu0714235314_2');"> FLEXIBLE&nbsp;SPENDING </a> <a href="chinatown_optical_childrensframes.html" target="_self" id="MMMenu0714235314_2_Item_4" class="MMMIVStyleMMMenu0714235314_2" onMouseOver="MM_menuOverMenuItem('MMMenu0714235314_2');"> CHILDREN'S&nbsp;FRAMES </a> </div>
      </div>
      <div id="MMMenuContainer0714235735_3">
        <div id="MMMenu0714235735_3" onMouseOut="MM_menuStartTimeout(100);" onMouseOver="MM_menuResetTimeout();"> <a href="chinatown_optical_newsletter.html" target="_self" id="MMMenu0714235735_3_Item_0" class="MMMIFVStyleMMMenu0714235735_3" onMouseOver="MM_menuOverMenuItem('MMMenu0714235735_3');"> C&nbsp;GROUP </a> <a href="http://chinatownoptical.blogspot.com" target="_blank" id="MMMenu0714235735_3_Item_1" class="MMMIVStyleMMMenu0714235735_3" onMouseOver="MM_menuOverMenuItem('MMMenu0714235735_3');"> BLOG </a> </div>
      </div>
      <div id="MMMenuContainer0714235820_4">
        <div id="MMMenu0714235820_4" onMouseOut="MM_menuStartTimeout(100);" onMouseOver="MM_menuResetTimeout();"> <a href="chinatown_optical_press.html" target="_parent" id="MMMenu0714235820_4_Item_0" class="MMMIFVStyleMMMenu0714235820_4" onMouseOver="MM_menuOverMenuItem('MMMenu0714235820_4');"> ADS&nbsp;&amp;&nbsp;PRESS </a> <a href="chinatown_optical_testimonials.html" target="_self" id="MMMenu0714235820_4_Item_1" class="MMMIVStyleMMMenu0714235820_4" onMouseOver="MM_menuOverMenuItem('MMMenu0714235820_4');"> TESTIMONIALS </a> </div>
      </div>
      <div id="MMMenuContainer0714235909_5">
        <div id="MMMenu0714235909_5" onMouseOut="MM_menuStartTimeout(100);" onMouseOver="MM_menuResetTimeout();"> <a href="chinatown_optical_chinatown.html" target="_self" id="MMMenu0714235909_5_Item_0" class="MMMIFVStyleMMMenu0714235909_5" onMouseOver="MM_menuOverMenuItem('MMMenu0714235909_5');"> CHINATOWN&nbsp;OPTICAL </a> <a href="chinatown_optical_hunter.html" target="_self" id="MMMenu0714235909_5_Item_1" class="MMMIVStyleMMMenu0714235909_5" onMouseOver="MM_menuOverMenuItem('MMMenu0714235909_5');"> HUNTER&nbsp;VISION&nbsp;CENTER </a> <a href="chinatown_optical_brooklyn.html" target="_self" id="MMMenu0714235909_5_Item_2" class="MMMIVStyleMMMenu0714235909_5" onMouseOver="MM_menuOverMenuItem('MMMenu0714235909_5');"> BROOKLYN&nbsp;OPTICAL </a> <a href="chinatown_optical_survey.html" target="_self" id="MMMenu0714235909_5_Item_3" class="MMMIVStyleMMMenu0714235909_5" onMouseOver="MM_menuOverMenuItem('MMMenu0714235909_5');"> SATISFACTION&nbsp;SURVEY </a> <a href="https://webmailcluster.perfora.net/xml/webmail/Login;jsessionid=1B0A305D6A4475895B2B26EB703BF4D1.TC137b?__reuse=1253115511362" target="_blank" id="MMMenu0714235909_5_Item_4" class="MMMIVStyleMMMenu0714235909_5" onMouseOver="MM_menuOverMenuItem('MMMenu0714235909_5');"> WEBMAIL </a> </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <td colspan="11"><div class="container">
        <div class="wt-rotator">
            <div class="screen">

                <noscript><img src="images_rotator/1.jpg" width="1000" height="432"/>
                </noscript>
            </div>
            <div class="c-panel">
                <div class="buttons">
                    <div class="prev-btn"></div>
                    <div class="play-btn"></div>    
                    <div class="next-btn"></div>               
                </div>
                <div class="thumbnails">

                    <ul>
                        <li>
                            <a href="images_rotator/1.jpg" title="3D abstract art"><img src="images_rotator/thumbs/1.jpg"/></a>
                                                    
                           
                        </li>
                        <li>

                            <a href="images_rotator/2.jpg" title="san francisco"><img src="images_rotator/thumbs/2.jpg"/></a>
                            
                                                         	
                        </li>
                        <li>
                            <a href="images_rotator/3.jpg" title="3D abstract art"><img src="images_rotator/thumbs/3.jpg"/></a>   
                            

                                                                               	                   
                        </li>
                        <li>
                            <a href="images_rotator/4.jpg" title="rainbow bridge"><img src="images_rotator/thumbs/4.jpg"/></a>                  
                            
                                                      	                          
                        </li>
                        <li>
                            <a href="images_rotator/5.jpg" title="lion"><img src="images_rotator/thumbs/5.jpg"/></a>        
                            
                                                                                              
                        </li>     
                        <li>

                            <a href="images_rotator/6.jpg" title="highway"><img src="images_rotator/thumbs/6.jpg"/></a>                    
                            
                                        	                           
                        </li>
                        <li>
                            <a href="images_rotator/7.jpg" title="hong kong"><img src="images_rotator/thumbs/7.jpg"/></a>                    
                            
                                      	                           
                        </li>
                        <li>
                            <a href="images_rotator/8.jpg" title="aquarium"><img src="images_rotator/thumbs/8.jpg"/></a>                    
                            
                              	                           
                        </li>     
                    </ul>

                </div>     
      </div>&nbsp;</td>
  </tr>
  
  <tr>
    <td>
    
   </span><img src="images/chinatown_optical_rollover_20.jpg" width="291" height="117"></td>
    <td colspan="10"><img src="images/chinatown_optical_home_21.jpg" width="709" height="117" border="0" usemap="#Map">
      <map name="Map"><area shape="rect" coords="521,62,553,92" href="http://www.facebook.com/pages/Chinatown-Optical-Group/128207157199250" target="_blank">
        <area shape="rect" coords="573,62,602,91" href=" https://twitter.com/COpticalgroup" target="_blank">
        <area shape="rect" coords="619,62,683,91" href="http://www.yelp.com/biz/chinatown-optical-co-new-york-2" target="_blank">
    </map></td>
  </tr>
</table>
</script>
<!-- Start of Google Analytics code -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("UA-15117361-1");
pageTracker._trackPageview();
} catch(err) {}
</script>
<!-- End of Google Analytics code -->
</body>
</html>