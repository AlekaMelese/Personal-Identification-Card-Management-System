
<?php
	
	
 session_start();
if(isset($_SESSION['username']))
 {
  $mail=$_SESSION['username'];
 } 
 else 
 {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">
</head>
<body>
<table align=center width=1000px  border=1 bgcolor="#ffebcd">
<tr>
<td height=20px  colspan=4>

<img src="logo.GIF" width="1000px" height="140" >
</td>

</tr>
<tr>
<td  height=20px colspan=3 bgcolor=tan >
  <div id="dropdown">
   <li><a href="index.php">Home</a></li>
   <li><a href="#">Departments</a>
      <ul>
	        <li><a href="#">Civil Engineering</a>
		<li><a href="#">&nbsp;Information Technology</a>
		<li><a href="#">&nbsp;&nbsp;Accounting</a>
		<li><a href="#">&nbsp;&nbsp;Economics</a></li>
		<li><a href="#">&nbsp;&nbsp;Management</a>
		<li><a href="#">&nbsp;&nbsp;Nursing</a>
		<li><a href="#">&nbsp;&nbsp;English</a>
        <li><a href="#">&nbsp;&nbsp;Chemistry</a>
        <li><a href="#">&nbsp;&nbsp;Biology</a>

	  </ul>
	</li>
	
	
	<li><a href="feedback.php">Feed Back</a>
	</li>
	<li><a href="new.php">News</a>
	</li>
	</li>
	
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 <font size="2"><a href="logout.php" id="login">Logout</a>
	 </font>
	  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp;
	 </div>
</td>
</tr>
<tr>
<td  height=500px width=150px bgcolor=black valign=top>
<table   bgcolor="#2F4F4F" border="0"  width="200" height="900" class="menu-bar" align="center">




<tr>
 <td width="150" height="20">
 <a href="changepassword.php" id="drop"><b>Change password</b></a></td>
</tr> 
 

  
<tr>
<td>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

    </td>
   </tr>
   </table>
</td>
<td  valign="top">
<!--------body  --->
<br><br>
<form action="u1.php" method="post" onsubmit='return formValidation()'>
<fieldset style="background-color:white">
<p align="center"><img src="changepass.GIF" height="150" width="350"></p>
<p><font size="4px">Old Password:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" id='old'placeholder='OldPassword'><br><br>
<p><font size="4px">New Password:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass" id='new' placeholder='NewPassword'><br><br>
<p><font size="4px">Confirm New password:</font>&nbsp;<input type="password" name="rpass" id='confi' placeholder='ConfrimPassword'><br>
<p align="center"><input type="submit" name="update" value="update" Onclick="return check(this.form);"/>&nbsp;&nbsp;
<input type='reset' value='Reset'></p><br><br>

</fieldset>
</form>	
	<?php
	$conn = mysqli_connect("localhost", "root", "","picms");

if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
if(isset($_POST['update']))
{
$password = $_POST['password'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];
 $user=$_SESSION['username'];
define("db_pass","");
//define("db_name","epcsdb");

$query="SELECT * FROM login  where password='".$password."' ";
$result=mysqli_query($conn,$query);
if(!$result){
die("query faile".mysqli_error($conn));
}
if(mysqli_num_rows($result)==1){
if($pass==$rpass){
$query="UPDATE login SET password='".$pass."' 	where password='".$password."' ";
$result=mysqli_query($conn,$query);
}
else{
echo"<script language='javascript'>";
echo"alert('New Password AND Confirm Password Not Match!')";
echo"</script>";
}
if(!$result)
{
die("Query update is failed" .mysqli_error($conn));
}
else
{
echo"<script language='javascript'>";
echo"alert('Update password is succesfull!')";
echo"</script>";

}
}
else
{
echo"<script language='javascript'>";
echo"alert('Wrong Old Password')";
echo"</script>";
}
}
?>
</div>
</td>
<td width=150px>
<table border=0 width=150px height=500px>
<tr>
<td valign=top bgcolor=gray>
<h2><center>
<font color="black" face="monotype corsiva" size="5">DBU Continuing and distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><img src="tot1.jpg" width="100"><a></center></h2>
<font color="black" face="arial" class="just">
<p style="padding:5px;">DBU Continuing and distance Office plays a great role 
in producing a well knowledgeable citizen
 for the development of our country.</font>
</td>
</tr>
<tr>
<td >

<marquee direction="up"><font face="Lucida Calligraphy" color="black" size="4">
<center>DBU CDE OFFICE!!!</center></font></marquee></td></tr>
<tr>
<td bgcolor="white"><img src="DSC01924.JPG" width="200" height="260"></font></h3>




</td>
</tr>
</table>

</td>
</tr>
<tr>
<td colspan=3 bgcolor=gray>
<table align="center"><tr><td><font face="Times New Roman" color="blue" size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DBU CDE OFFICE &copy; 2006 E.C.
 &nbsp; &nbsp; &nbsp; &nbsp;

</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>