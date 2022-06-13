
<!DOCTYPE html>
<head>
  <title>kebele home page</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
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
		  <li><a href="Homepage.php">Homepage</a></li>
		  <li><a href="photo.php">Photo Gallery</a></li> 
		  <li><a href="developer.php">Developers</a></li>
		  
		 
        <li><a href="loginpage.php">Login</a></li> 		  
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
       </div><!--close sidebar_container-->	<br>	<br>      
<br><br>
<fieldset style="max-width:40%;margin:0% 0% 0% 15%;">
<legend align="center"><img width="100" height="60" src="images/admin.png"></legend> <br>
<form  method="post">
      <table border ="0" width="350" height="130" style="max-width:75%;margin:2% 0% 0% 10%;">
	  <?php
			$username=$password
			=$usernameE=$passwordE="";
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				if(empty($_POST["username"])) 
				{
					$usernameE="FullName is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["username"])){
						$usernameE = "only letters are  allowed";
					}else{
						$username= $_POST["username"];
					}
				}									
				if(empty($_POST["password"])) 
				{
					$passwordE="password is required";
				}else{
					if(!preg_match("/^[a-zA-Z|0-9|*|#|.|?|!|@|%|&|-]+$/",$_POST["password"])){
						$passwordE = "Letters, number and Special character are allowed(it is invalid)";
					}else{
						$password= $_POST["password"];
					}
				}
				}
				?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">	
		
			
	  
	  
<tr><td>UserName:</td>

		 <td><input name="username" type="text" id="username" color="blue" placeholder="username" required> <span class="message">*<?php echo $usernameE; ?></span></td></tr>
         <tr><td>Password:</td>
		<td><input name="password" type="password" id="password" placeholder="password" required> <span class="message">* <?php echo $passwordE;?></span></td></tr>
<center><img width="50" height="40" src="images/kkk.gif">
<tr><td></td><td>
<input name="submit" class="btn btn-success"type="submit" value=" Login " align="center"/>&nbsp;&nbsp;&nbsp;&nbsp;
<input name="Cancel" class="btn btn-danger" type="reset" value=" Cancel "/></center></td></tr>
<tr><td></td><td><p> <a href="Account2.php">Create account</a><p>
<p><a href="change password.php"> Change Password</a></p></td></tr>
</table>
</form>
</fieldset><br>
<?php
$conn = @mysqli_connect('localhost', 'root', '') or die("Could not connect database");

if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST['submit']))
{
	$username =$_POST['username'];
    $password =md5($_POST['password']);
	if($username == "" || $password == ""){
		echo "Either username or password field is empty.";
	}
	else
	{
		$sql = "SELECT * FROM login where username='".$username."' and password='".$password."' ";
		   $result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	
		if(is_array($row) && !empty($row))
		{
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
		}
		else
		{
			echo "Invalid username or password.";
			
		}
		if(isset($_SESSION['valid']))
		{
			header('Location: admin2.php');			
		}
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
</body>
</html>
