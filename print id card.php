<?php
session_start();
if(!isset($_SESSION['username']))
		{
			header('Location: index.php');			
		}
?>
<!DOCTYPE html>
<?php
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
?>
<html>
<body>
<fieldset style="border-radius:10px 10px 10px 10px; max-width:25%;margin:2% 0% 0% 2%; background-color:#f0bee3;">
<table style="border-radius:0 0 10px 10px" border="0" width="480" height="330">
<form>
<?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="update resident set Status='Recived' WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	
	}
	
?>
<?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="update pay set Status='Recived and payed' WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	
	}
	
?>

<tr>
<?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){	
	 
	 }
else{
	echo "NOT Registered";	
}	
	}
?>
<td><div align="left"><img src="<?php echo $row["image_name"];?>" width="100" height="80px"/></div></td>
<center>

<td><div align="center">Amhara<br> BahirDar <br><u><i> Kebele 14 IDCard</i></u> </div></td></center>
</tr>
<tr>
<td>FullName:
<b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $IdNo=$row["FirstName"];	}
	else{
	echo "NOT Registered";	
}}	
?>
</b>

    <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $IdNo=$row["LastName"];	}
	else{
	echo "NOT Registered";	
}}	
?></b>
 <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $GrandFatherName=$row["GrandFatherName"];	}
	else{
	echo "NOT Registered";	
}}	
?></b>
  </td>
  

  <td>Id Number:
    <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $IdNo=$row["IdNo"];	}
	else{
	echo "NOT Registered";	
}}	
?></b>
  </td></tr>
  </tr>

  <tr>
  <td>Sex: 
     <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);	
	if($row=mysqli_fetch_array($result)){
	echo $Sex=$row["Sex"];	}else{
	echo "NOT Registered";	
}}	
?></b>
  <td> Age:
  <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $Age=$row["Age"];	}else{
	echo "NOT Registered";	
}}	
?></b>
  </tr>
  
    <tr>
    <td>Nationality:
        <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $Nationality=$row["Nationality"];	}else{
	echo "NOT Registered";	
}}	
?></b>
    <td>Place of Birth:
   <b>   <u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $PlaceOfBirth=$row["PlaceOfBirth"];	}else{
	echo "NOT Registered";	
}}	
?></b>
  </tr>
  
<tr>
  <td>Region:
      <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $Region=$row["Region"];	}else{
	echo "NOT Registered";	
}}	
?></b>
<td>Zone:
     <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $Zone=$row["Zone"];	}else{
	echo "NOT Registered";	
}}	
?></b>
</tr>

<tr>
  <td>Wereda:
     <b> <u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $Wereda=$row["Wereda"];	}else{
	echo "NOT Registered";	
}}	
?></b>
<td>Kebele:
     <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $Kebele=$row["Kebele"];	}else{
	echo "NOT Registered";	
}}	
?></b>
</tr>

<tr>
  <td>Date of Birth:
<b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $dob=$row["dob"];	}else{
	echo "NOT Registered";	
}}	
?></b>
	
</b>
  </td>
 

<td>House No:
      <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $HouseNo=$row["HouseNo"];	}else{
	echo "NOT Registered";	
}}	
?></b>
</tr>

<tr>
  <td>Job:
      <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $Job=$row["Job"];	}else{
	echo "NOT Registered";	
}}	
?></b>
<td>Chairman's Sign:___________</td>
</tr>

<tr>
    <td>Date of Given:
      <b><u><?php
if(isset($_GET["search"])){
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	$text=$_GET["text"];
	$sql="SELECT * FROM `resident` WHERE IdNo='$text' ";
	$result = mysqli_query($conn, $sql);
	echo mysqli_error($conn);
	if($row=mysqli_fetch_array($result)){
	echo $dor=$row["dor"];	}else{
	echo "NOT Registered";	
}}	
?></b>
	<td>Resident's Sign:____________</td>
  </td>
</tr>
</form>
</table>
</fieldset><br><br><br><br>
<tr><input name="button" type="button" class="btn btn-info" onClick="window.print()" value="Print" /></td></tr>
</body>
</html>
