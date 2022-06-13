<?php
session_start();
if(!isset($_SESSION['username']))
		{
			header('Location: index.php');			
		}
?>
<!DOCTYPE html>
<html>
<body>
<fieldset style="max-width:32%;margin:2% 0% 0% 6%;">
<table border="0" width="440" height="440">
<tr>
<td>
<img align="left" src="images/et.jpg" height="75"/>
<img align="right" src="images/tg.png" height="70"/><br>
<b><center>Ethiopian Revenues and Customs Authority.</b><br>
<b>Amhara Region</b><br>
<b>Bahirdar City Administration Branch </center></b></td>
</tr>
<tr><td align="right">Date: <b><u><?php echo date("Y").'-'.date("m").'-'.date("d");?></u></b></td></tr><br>

<?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="update pay set Status='payed' WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	
	}
	
?>

</td>
</tr>
<tr> <td align="center"><b><u>Income Collection Receipt:</u></b></td></tr>
<tr>
<td>Payer's Name:
<b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");

if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $FirstName=$row["FirstName"]; echo" ";
	echo $LastName=$row["LastName"];}
	}
	else {
		echo"there is no such FirstName!!";
		 }
?></u></b>
</td>
</tr>
<tr><td>Amount (Birr):
<u><b><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `pay` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $Amount=$row["Amount"]; echo" ";}}
?></b></u><br>
</td>
</tr>
<tr><td>Acountant Name:
<b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `pay` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $Reason=$row["Reason"]; echo" ";}}
?></u></b>
</td>
</tr>
<tr>
<td>Reason of Payment:
<b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `pay` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $Accountant=$row["Accountant"]; 
	}}
?></u></b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign _______
</td>
</tr>
</table>
</fieldset>
<tr><input name="Print" type="button" onClick="window.print()" value="Print " /></td></tr>
</body>
</html>