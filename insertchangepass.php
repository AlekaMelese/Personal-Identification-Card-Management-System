
<html>
<head>

<style type="text/css">
</style>
</head>
<body>


<table align="center">
<tr>
<td>
 
</td>
</tr>
<tr>
<td>
<div id="Layer1">
</div>
<?php
$name = $_POST['txtusername'];
$oldpassword = $_POST["txtoldpassword"];
$newpassword= $_POST["txtnewpassword"];
//$confirmpassword=sha1($_POST["txtconfirmpass"]);
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("adigrat");
//$flag='0';
$result = mysql_query("SELECT * FROM login where username='$name'");
while($row = mysql_fetch_array($result))
  {
  $password=$row['password'];
  }
   if($password==$oldpassword)
 {
  $f=mysql_query("UPDATE login SET password = '$newpassword'
WHERE password = '$oldpassword' AND username = '$name'");
    if($f)
	 include("changepassword.php");
echo '<center><strong>Password is changed succesfully</strong></center>';
     }  
else{
include("changepassword.php");
echo '<center><strong>The old password is not correct</strong></center>';
}
?>
</td>
</tr>

</table>

</body>
</html>

