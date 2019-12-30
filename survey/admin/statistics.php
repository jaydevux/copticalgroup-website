<?php 
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}

require '../connect.php';

$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];

if ($q1!='') {
	mysql_query("update questions set question='$q1' where id='1'");
}
if ($q2!='') {
	mysql_query("update questions set question='$q2' where id='2'");
}
if ($q3!='') {
	mysql_query("update questions set question='$q3' where id='3'");
}
if ($q4!='') {
	mysql_query("update questions set question='$q4' where id='4'");
}
if ($q5!='') {
	mysql_query("update questions set question='$q5' where id='5'");
}
if ($q6!='') {
	mysql_query("update questions set question='$q6' where id='6'");
}

$query1 = mysql_query("select* from questions;");
$m=0;
while ($arra1 = mysql_fetch_array($query1)) {
		$qn[$m]=$arra1['question'];	
		$m++;
}

 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SURVEY - Chinatown Optical Group (Since 1979): Chinatown Optical, Inc., Hunter visison Center, Inc., Brooklyn Optical, Inc.</title>
<style type="text/css">
body {
	background-image: url(../chinatown_optical_group_bkground.jpg);
	background-repeat: repeat-x;
	background-color: #8A8A8A;
}
.radio1 {font-size: 12px; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif;}
</style>
<script>
function send() {
			alert("Your questions have been saved.");
			document.form1.action="questions.php";
			document.form1.submit();
	}

</script>

</head>

<body>
<table width="1023" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1023" height="530" valign="top" style="background-image:url(../bg3.jpg); background-repeat:no-repeat">
    <form  name="form1" id="form1" method="post">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="219" valign="top"><br />
            <table width="992" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="988" height="113"><table width="943" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="63">&nbsp;</td>
                  <td width="846"><img src="../header_buttons.jpg" alt="" width="809" height="94" border="0" usemap="#Map3" /></td>
                  <td width="26">&nbsp;</td>
                </tr>
                <tr>
                  <td height="19">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
                <map name="Map3" id="Map3">
                  <area shape="rect" coords="16,11,295,45" href="http://www.copticalgroup.com/" target="_blank" />
                  <area shape="rect" coords="81,62,295,83" href="http://www.copticalgroup.com/chinatown_optical_chinatown.html" target="_blank" />
                  <area shape="rect" coords="317,62,558,82" href="http://www.copticalgroup.com/chinatown_optical_hunter.html" />
                  <area shape="rect" coords="590,61,797,82" href="http://www.copticalgroup.com/chinatown_optical_brooklyn.html" />
                </map></td>
            </tr>
          </table>
            <br />
            <table width="100%" border="0" cellspacing="0" cellpadding="0">

            <tr>
              <td width="6%" height="27">&nbsp;</td>
              <td width="94%"><table width="949" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="691"><font style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold">GENERAL STATISTICS</font></td>
                  <td width="170"><a href="admin.php" style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Back to Control Panel</a></td>
                  <td width="88"><a href="<?php echo $logoutAction ?>" style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Log Out</a>&nbsp;</td>
                </tr>
              </table></td>
            </tr>
        </table></td>
        </tr>
        <tr>
          <td height="55" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Total Voters:</td>
              <td valign="top">
			  <?php 
			  	$result = mysql_query("SELECT * FROM results");
				$total = mysql_num_rows($result);
				echo $total;
				?>
			</td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Question 1:</td>
              <td valign="top"><?php echo $qn[0];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td width="6%" height="109" valign="top">&nbsp;</td>
              <td width="9%" valign="top">Results</td>
              <td width="71%" valign="top">1: <?php 
				$result = mysql_query("SELECT * FROM results where q1='1' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
                <br />
                2: 
                  <?php 
				$result = mysql_query("SELECT * FROM results where q1='2' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
                  <br />
                  3:

                <?php 
				$result = mysql_query("SELECT * FROM results where q1='3' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
                <br />
                4:

                <?php 
				$result = mysql_query("SELECT * FROM results where q1='4' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
                <br />
                5:
<?php 
				$result = mysql_query("SELECT * FROM results where q1='5' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?></td>
              <td width="14%" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="2" valign="top"></td>
              <td colspan="2" valign="top" bgcolor="#CCCCCC"></td>
              <td valign="top"></td>
            </tr>
            <tr>
              <td height="12" valign="top"></td>
              <td colspan="2" valign="top"></td>
              <td valign="top"></td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Question 2:</td>
              <td valign="top"><?php echo $qn[1];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="112" valign="top">&nbsp;</td>
              <td valign="top">Results</td>
              <td width="71%" valign="top">1:
                <?php 
				$result = mysql_query("SELECT * FROM results where q2='1' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
                <br />
                2:
  <?php 
				$result = mysql_query("SELECT * FROM results where q2='2' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
  <br />
                3:
  <?php 
				$result = mysql_query("SELECT * FROM results where q2='3' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
  <br />
                4:
  <?php 
				$result = mysql_query("SELECT * FROM results where q2='4' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
  <br />
                5:
  <?php 
				$result = mysql_query("SELECT * FROM results where q2='5' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="2" valign="top"></td>
              <td colspan="2" valign="top" bgcolor="#CCCCCC"></td>
              <td valign="top"></td>
            </tr>
            <tr>
              <td height="12" valign="top"></td>
              <td colspan="2" valign="top"></td>
              <td valign="top"></td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Question 3:</td>
              <td valign="top"><?php echo $qn[2];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="114" valign="top">&nbsp;</td>
              <td valign="top">Results</td>
              <td width="71%" valign="top">1:
                <?php 
				$result = mysql_query("SELECT * FROM results where q3='1' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
                <br />
                2:
  <?php 
				$result = mysql_query("SELECT * FROM results where q3='2' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
  <br />
                3:
  <?php 
				$result = mysql_query("SELECT * FROM results where q3='3' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
  <br />
                4:
  <?php 
				$result = mysql_query("SELECT * FROM results where q3='4' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
  <br />
                5:
  <?php 
				$result = mysql_query("SELECT * FROM results where q3='5' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="2" valign="top"></td>
              <td colspan="2" valign="top" bgcolor="#CCCCCC"></td>
              <td valign="top"></td>
            </tr>
            <tr>
              <td height="12" valign="top"></td>
              <td colspan="2" valign="top"></td>
              <td valign="top"></td>
            </tr>
            <tr>
              <td height="33" valign="top">&nbsp;</td>
              <td valign="top">Question 4:</td>
              <td valign="top"><?php echo $qn[3];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="52" valign="top">&nbsp;</td>
              <td valign="top">Results</td>
              <td width="71%" valign="top">yes:
                <?php 
				$result = mysql_query("SELECT * FROM results where q4='yes' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
                <br />
                no:
                <?php 
				$result = mysql_query("SELECT * FROM results where q4='no' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="2" valign="top"></td>
              <td colspan="2" valign="top" bgcolor="#CCCCCC"></td>
              <td valign="top"></td>
            </tr>
            <tr>
              <td height="12" valign="top"></td>
              <td colspan="2" valign="top"></td>
              <td valign="top"></td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Question 5:</td>
              <td valign="top"><?php echo $qn[4];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Results</td>
              <td valign="top">Search Engines:
                <?php 
				$result = mysql_query("SELECT * FROM results where q5='search' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
                <br />
Magazines:
<?php 
				$result = mysql_query("SELECT * FROM results where q5='magazines' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
<br />
Family or Friend:
<?php 
				$result = mysql_query("SELECT * FROM results where q5='family' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
<br />
Facebook:
<?php 
				$result = mysql_query("SELECT * FROM results where q5='facebook' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
<br />
Twitter:
<?php 
				$result = mysql_query("SELECT * FROM results where q5='twitter' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
<br />
<br /></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="2" valign="top"></td>
              <td colspan="2" valign="top" bgcolor="#CCCCCC"></td>
              <td valign="top"></td>
            </tr>
            <tr>
              <td height="12" valign="top"></td>
              <td colspan="2" valign="top"></td>
              <td valign="top"></td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Question 6:</td>
              <td valign="top"><?php echo $qn[5];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="50" valign="top">&nbsp;</td>
              <td valign="top">Results</td>
              <td width="71%" valign="top">yes:
                <?php 
				$result = mysql_query("SELECT * FROM results where q6='yes' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?>
                <br />
                no:
  <?php 
				$result = mysql_query("SELECT * FROM results where q6='no' ");
				$votes = mysql_num_rows($result);
				$per=$votes/$total*100;
				$per= round($per,1);
				if ($votes==1) $var='vote'; else $var='votes';
				echo $votes.' '.$var.' ('. $per .'%)';
				
				?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            </table></td>
        </tr>
        <tr>
          <td height="158" valign="top"><table width="185" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><a href="javascript:print();"><img src="../prin_statisticst.jpg" alt="" width="185" height="27" /></a></td>
            </tr>
          </table></td>
        </tr>
      </table>
    </form>
    </td>
  </tr>
</table>


<map name="Map" id="Map">
  <area shape="rect" coords="-130,2,77,28" href="javascript:print();" />
</map>
</body>
</html>
