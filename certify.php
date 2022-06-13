<?php
session_start();
if(!isset($_SESSION['valid']))
		{
			header('Location: index.php');
		}
?>
<!DOCTYPE html>
<html>
<body>
<fieldset style="border-radius:10px 10px 10px 10px; max-width:25%;margin:2% 0% 0% 2%; background-color:;">
<table style="border-radius:0 0 10px 10px" border="0" width="800" height="500">
<tr>
<td>
<img align="left" src="images/images1.jpg" height="50"/>
<img align="right" src="images/tg.png" height="50"/><br>
<center><u><b>Federal Democratic Republic of Ethiopia
Amhara Bahirdar  <i>Kebele 14</b></i> </u></center>
</td>
</tr>
<tr><td align="right"> Date: <u><b><?php echo date("Y").'-'.date("m").'-'.date("d");?></b></u></td></tr>
<tr><td align="center"> <h3><u> <b> Certificate </b></u></h3></td></tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>To:</b>
<u><b><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `certificate` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $FirstName=$row["FirstName"]; echo" ";
	echo $LastName=$row["LastName"];}
	}
	else {
		echo"there is no such FirstName!!";
	}
?></b></u>
</td>
</tr>
<tr><td>
<?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `certificate` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $Subject=$row["Subject"]; echo" ";}}
?><br>
</td>
</tr>
<tr>
<td align ="right"><b>Chairman's Name:________________</b><br>
<b>Sign:________________</b></td>
</tr>
</table>
</fieldset><br><br>
<tr><input name="button" type="button" onClick="window.print()" value="Print " /></td></tr>
</body>
</html>