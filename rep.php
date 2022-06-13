<?php
session_start();
?>
<?php
$conn = mysqli_connect ("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
?>
<html>
<body>
<fieldset style="border-radius:10px 10px 10px 10px; max-width:25%;margin:2% 0% 0% 2%; background-color:#f0bee3;">
<table border="0" >
<form><center/>
<tr>
<td><h3 align="left"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u><b>Kebele 14 Bahirdar City Residents Report</b></u></h3>
</td></tr>

<tr>
<?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){	
		
	 }	
}
?>

</tr>
<tr>
<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Full Name:
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
	echo $LastName=$row["LastName"];echo" ";
	echo $GrandFatherName=$row["GrandFatherName"];
	}	}
?></b>
</td></tr>
<tr>
  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Id Number:
    <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);	while($row=mysqli_fetch_array($result)){
	echo $IdNo=$row["IdNo"];	}}	
?></b>
  </td></tr><tr>
  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sex: 
     <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);	while($row=mysqli_fetch_array($result)){
	echo $Sex=$row["Sex"];	}}	
?></b></td></tr>
<tr>
  <td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Age:
  <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $Age=$row["Age"];	}}	
?></b></td></tr><tr>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nationality:
        <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $Nationality=$row["Nationality"];	}}	
?></b></td>
</tr>
<tr>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Place of Birth:
   <b>   <u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $PlaceOfBirth=$row["PlaceOfBirth"];	}}	
?></b></td></tr><tr>
  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Region:
      <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $Region=$row["Region"];	}}	
?></b></td></tr>
<tr><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Zone:
     <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $Zone=$row["Zone"];	}}	
?></b></td></tr><tr>
  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wereda:
     <b> <u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);	while($row=mysqli_fetch_array($result)){
	echo $Wereda=$row["Wereda"];	}}	
?></b></td></tr>
<tr>
<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kebele:
     <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);	while($row=mysqli_fetch_array($result)){
	echo $Kebele=$row["Kebele"];	}}	
?></b></td></tr><tr>
  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Birth:
<b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $dob=$row["dob"];	}}	
?></b></td></tr><tr>
<tr>
<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; House No:
      <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);	
	while($row=mysqli_fetch_array($result)){
	echo $HouseNo=$row["HouseNo"];	}}	
?></b></td></tr>
<tr>
  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Job:
      <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $Job=$row["Job"];	}}	
?></b>
</tr>
<tr>
  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Report Date:
      <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	while($row=mysqli_fetch_array($result)){
	echo $dor=$row["dor"];	}}	
?></b>
</tr>
</form>
</table>
</fieldset><br><br><br><br>
<tr><input name="button" type="button" class="btn btn-info" onClick="window.print()" value="Print" /></td></tr>
</body>
</html>
