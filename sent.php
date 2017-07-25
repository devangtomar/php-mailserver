<h1 align="center">Sent</h1>
<?php
include_once('connection.php');

$id=$_SESSION['sid'];


$sql="SELECT * FROM usermail where sen_id='$id'";
$dd=mysql_query($sql);

echo "<div style='margin-left:10px;width:640px;height:auto;border:2px solid red;'>";

	echo "<table border='1' width='500'>";
	echo "<tr><th>Check </th><th>Sender </th><th>Subject </th><th>Date</th></tr>";
while(list($mid,$rid,$sid,$s,$m,$a,$d)=mysql_fetch_array($dd))
{
	echo "<tr>";
	echo "<form>";
	echo "<td><input type='checkbox' name='ch[]' value='$mid'/></td>";
	echo "<td>".$rid."</td>";
	echo "<td><a href='HomePage.php?consent=$mid'>".$s."</a></td>";
	echo "<td>".$d."</td>";
	echo "</tr>";	
	}
	echo "</table>";
	
	
/*$ch=$_GET['ch'];
foreach($ch as $v)
{

}*/
	
echo "<input type='submit' value='Delete' name='delete'/>";
echo "</div>";
	
echo "</form>";

?>
