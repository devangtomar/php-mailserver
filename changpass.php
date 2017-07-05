<?php
include('connectivity.php');
error_reporting(1);
if(isset($_POST['pwdchg']))
{
	if($_POST['op']=="" || $_POST['np']=="" || $_POST['cp']=="")
	{
	$err="fill related field first";
	}
	else
	{
		$r=mysql_query("SELECT * FROM stuinfo where userName='{$_SESSION['sname']}'");
		$row=mysql_fetch_object($r);
		if($row->pass==$_POST['op'])
		{
			if($_POST['np']==$_POST['cp'])
			{
			$upd=mysql_query("UPDATE stuinfo SET pass='{$_POST['np']}' where userName='{$_SESSION['sname']}'");
			echo "pass updated";
			}
			else
			{
			$err="confirm pass doesn't match";
			}
		  
		  }
		  else
		   {
		   $err="old passwrod doesn't exists";
		   }
		
		
	}
}

?>
<form method="post">
<table width="403" border="1">
<font color="#FF0000"><?php echo $err; ?></font>
  <tr>
    <td width="173">Enter Your old password</td>
    <td width="214">
		<input type="password" name="op"  />
	</td>
  </tr>
  <tr>
    <td>Enter Your New Password </td>
    <td>
	<input type="password" name="np"  />
	</td>
  </tr>
  <tr>
    <td>Enter Your confirm passwrod </td>
    <td>
	<input type="password" name="cp"  />
	</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="pwdchg" value="Update Password"/>
	</td>
  </tr>
</table>
</form>