

<!DOCTYPE html>
<head>
  <title>kebele home page</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</head>

<body>
  <div id="main">
    <div id="header" style="background-image: url(images/header11.PNG);">
	  <div id="banner">
	    <div id="welcome" >
	  </div><!--close welcome-->
	    <div id="welcome_slogan">
	    </div><!--close welcome_slogan-->	
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="menu_container">
	  <div id="menubar">
        <ul id="menu"><center>
		 <li><a href="Homepage.php">Home</a></li>
		   <li><a href="About.php">About</a></li>
		    <li><a href="Contactus.php">Contact Us</a></li>
		   <li><a href="Feedback.php">FeedBack</a></li>
         <!-- <li><a href="loginpage.php">Login</a></li> -->		  
        </ul></center>
      </div><!--close menubar-->	
	</div><!--close menu_container-->	
	
	<div id="site_content">	

	  <div class="sidebar_container">       
		<div class="sidebar"><br><br>
          <div class="sidebar_item">
		
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
		  
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
             
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">
          
		  </div><!--close sidebar_item--> 
		  
        </div><!--close sidebar-->  		
       </div><!--close sidebar_container-->	<br>	 
<fieldset style="max-width:54%;margin:0% 0% 6% 15%;">
<legend align="center"><img width="100" height="40" src="images/admin.png"></legend> 
<form  method="post">
      <table border ="0" style="margin:2% 0% 0% 10%;">
	<!--<b><i>	<?php
$t=time();
//echo($t . "<br />");
echo(date("D F d Y",$t));
?></b></i>-->
	        
			
			<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<body bgcolor="" >
      <script type="text/javascript">
     
      </script>

<title>home</title>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
<style type="text/css">
<!--
.style59 {color: #000066}
.style60 {font-size: 36px}
.style61 {font-style: italic; font-size: 14px;}
-->
</style>

		
<?php
			$username=$password
			=$usernameE=$passwordE="";
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				if(empty($_POST["username"])) 
				{
					$usernameE= "Username is Required.";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["username"])){
						$usernameE = "only letters are  allowed";
					}else{
						$username= $_POST["username"];
					}
				}									
				if(empty($_POST["password"])) 
				{
					$passwordE="Password is Required.";
				}else{
					if(!preg_match("/^[a-zA-Z|0-9|*|#|.|?|!|@|%|&|-]+$/",$_POST["password"])){
						$passwordE = "Letters, number and Special character are allowed(it is invalid)";
					}else{
						$password= $_POST["password"];
					}
				}
				}
				?>
					<form method="post" novalidate action="<?php echo $_SERVER["PHP_SELF"];?>">	
		
		<tr><img width="80" height="90" src="images/user.png" style="margin-left: 200px;">	
<tr><td><b>UserName:</b></td><td>
<i class="fa fa-user fa-1.7x cute" aria-hidden="true"></i>

 <input name="username" type="text" id="username" color="red" placeholder="Username" required >
 <span class="message" style="color:red;">*<?php echo $usernameE; ?></span></td></tr>
         <tr><td><b>Password: </b></td><td>
		<i class="fa fa-lock fa-1.7x cute" aria-hidden="true"></i>
		<input name="password" type="password" id="password" placeholder="Password" required> <span class="message" style="color:red;">* <?php echo $passwordE;?></span></td></tr>

<tr><td></td><td>   <input name="submit" style="margin-left: 20px;" class="btn btn-success"type="submit" formnovalidate value=" Login " align="center"/>&nbsp;&nbsp;&nbsp;&nbsp;
<input name="Cancel" class="btn btn-danger" type="reset" value=" Cancel "/></td></tr>


<tr><td></td><td>  <br> </br> </td></tr>
<tr><td></td>
<td> <br> </br></td></tr>

</table>
</form>




<br>
	
<?php

$dbhost= 'localhost';
$dbuser= 'root';
$dbpass= '';
$database= 'picms';
$conn= mysqli_connect($dbhost,$dbuser, $dbpass,$database);
if(!$conn)
{ 
die('Could not connect: ' . mysqli_error());
}
//echo 'Connected successfully <br/>';
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST['submit']))
{
	$username =$_POST['username'];
    $password =md5($_POST['password']);
	//$Status =$_POST['Status'];
	//if($username!= username || $password != password){
		//echo "Either username or password field is empty.";
	//}
	//else
	//{
		$sql ="SELECT * FROM login where username='".$username."' and password='".$password."' and Status='Active' ";
		  $result = mysqli_query($conn, $sql);
		$row=mysqli_fetch_assoc($result);
$count=mysqli_num_rows($result);
session_start();
if(is_array($row) && !empty($row))
		{
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
		}
   if($count==1){
   $_SESSION['username']=array(
   'username'=>$row['username'],
   'password'=>$row['password'],
   'Role'=>$row['Role']
   );
  $role=$_SESSION['username']['Role'];
    //$role=$_SESSION['username'];
   //Redirecting User Based on Role
    switch($role){
		case 'Admin':
 header('Location: admin.php');	
  break;
  case 'DataClerk':
  header('Location: admin2.php');	
  break;
  
  
 }
 }
 else{
echo "Your Password or Username is not Found";

 }
	
	}
}

?>
	</div><!--close site_content--> 
  </div><!--close main-->
  <div id="footer_container"> 
    <div id="footer">
	<p>&copy All Right Reserved</p>
    </div><!--close footer-->  
  </div><!--close footer_container--> 	
  </fieldset>
</body>
</html>
