<?php
	include('mime.php');
	include('email.php');	
	
	$name=$_POST['name'];
	$email=$_POST['email'];





	
	$msgbody='<html><body><table width="100%"><tr><td><img src="http://www.copticalgroup.com/site/images/chinatown_logo_formemail.jpg"></td></tr><tr><td><p class="BodyTextWhite"><br>
<br>
</p>
<p class="BodyTextSmall">Chinatown Optical Group <br>
  40 Mott Street, New York, NY 10013 <br>
  Phone: 212-267-1260 <br>
  </p></td></tr><tr>
  <td valign="top"><table width="100%" border="1" style="BORDER-COLLAPSE: collapse" bordercolor="#111111">
    <tr>
      <td colspan="3" bgcolor="#1F2A58" align="center"><font color="#FFFFFF"><strong>CHINATOWN OPTICAL GROUP SIGN UP REQUEST FORM</strong></font></td>
    </tr>
    <tr>
      <td width="35%" valign="top">Name :</td>
      <td width="64%" valign="top"><font color="#3300CC">'.$name.'</font></td>
    </tr>
    <tr>
      <td valign="top"><span class="BodyTextWhite">E-Mail :</span></td>
      <td valign="top"><font color="#3300CC">'.$email.'</font></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" valign="top"><font color="#3300CC"></font><font color="#3300CC"></font></td>
      </tr>
  </table>  
</body></html>';
	
	
	$subject='CopticalGroup.com Sign Up';
	$mimemessage = new email(array('X-Mailer: CopticalGroup.com'));		
	$mimemessage->add_html($msgbody);
	$mimemessage->build_message();
	$mimemessage->send('CopticalGroup', 'chinatownoptical@gmail.com', 'CopticalGroup.com', 'chinatownoptical@gmail.com', $subject);
//$mimemessage->send('CopticalGroup', 'chinatownoptical@gmail.com', 'CopticalGroup.com', 'chinatownoptical@gmail.com', $subject);

	header('location:thanks.html');
?>
		