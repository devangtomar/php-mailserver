<?php
include_once('connection.php');
error_reporting(1);
$id=$_SESSION['sid'];
$op=$_POST['op'];
$np=$_POST['np'];
$cp=$_POST['cp'];
if(isset($_POST['chngP']))
{
	if($op=="" || $np=="" || $cp=="")
	{
	$err="Fill all the fields first";
	}
	else
	{
		$sql="select * from userinfo where user_name ='$id'";
		$d=mysql_query($sql);
		list($a,$b,$c)=mysql_fetch_array($d);
		if($c==$op)
		{
			if($np==$cp)
			{
			$sql="update userinfo set password='$np' where user_name='$id'";
		$d=mysql_query($sql);
		echo "pass updated...";
			}
			
			else
			{
			echo "new pass doesn't match to confirm pass";
			}
		}
		else
		{
		echo "wrong old password";
		}
	}
		
}
?>
<body>
<form method="post">
<table width="365" border="1">
  <tr>
  <?php echo $err; ?>
    <th width="173" scope="row">Old Pass </th>
    <td width="176">
		<input type="password" name="op"/>
	</td>
  </tr>
  <tr>
    <th scope="row">New Password </th>
    <td>
			<input type="password" name="np"/>
	</td>
  </tr>
  <tr>
      <th scope="row">Confirm Pass </th>
    <td><input type="password" name="cp"/></td>
  </tr>
<tr>
    <td colspan="2" align="center">
	<input type="submit" name="chngP" value="Change Password"/></td>
  </tr>
  
</table>
</form>
</body>
