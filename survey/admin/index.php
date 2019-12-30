<?php require_once('../Connections/db396663784.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_db396663784, $db396663784);
$query_Recordset1 = "SELECT `user`.username, `user`.password FROM `user`";
$Recordset1 = mysql_query($query_Recordset1, $db396663784) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "admin.php";
  $MM_redirectLoginFailed = "failure.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_db396663784, $db396663784);
  
  $LoginRS__query=sprintf("SELECT username, password FROM `user` WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $db396663784) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
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
			document.form1.action="index.php";
			document.form1.submit();
	}

</script>

</head>

<body>
<table width="1023" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1023" height="476" valign="top" style="background-image:url(../bg2.jpg); background-repeat:no-repeat">

      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="219" valign="top"><br />
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="100%" height="118" valign="top"><table width="992" border="0" cellspacing="0" cellpadding="0">
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
              </table></td>
            </tr>
          </table>
            <br />
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="27">&nbsp;</td>
                <td width="94%"><table width="903" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="739"><font style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold">CONTROL PANEL</font></td>
                    <td width="164" style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold">Please Log In</td>
                  </tr>
                </table></td>
              </tr>
            </table>
          <p>&nbsp;</p></td>
        </tr>
      </table>
    <br />
    <br />
    <table width="295" border="0" align="center">
      <tr>
        <td width="289"><form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
          <table width="289" border="0">
            <tr>
              <td width="112" height="38" align="right" style><font style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold">USERNAME:</font></td>
              <td width="167" align="left"><label for="username2"></label>
                <input type="text" name="username" id="username2" /></td>
            </tr>
            <tr>
              <td height="42" align="right"><font style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold">PASSWORD:</font></td>
              <td align="left"><label for="password"></label>
                <input type="password" name="password" id="password" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td width="167"><table width="128" border="0" align="left">
                <tr>
                  <td width="68">&nbsp;</td>
                  <td width="50"><input type="submit" name="login" id="login" value="Login" /></td>
                </tr>
              </table></td>
            </tr>
          </table>
        </form></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="115" valign="top" style="background-image:url(../footer.jpg); background-repeat:no-repeat">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
