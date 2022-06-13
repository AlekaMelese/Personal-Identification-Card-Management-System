
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
 
<title>User Management System (Yibaltal Tamyalew)</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>  
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
    <div id="header" style="background-image: url(images/header1.PNG);">
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
		  <li><a href="document.php">Audio/Video</a></li> 
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
		   <img width= "230" height="300" src="images/arrow.png">
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

<body>  
<div id="main">
<?php
$conn = @mysqli_connect('localhost', 'root', '','picms') or die("Could not connect database");

if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
if(!empty($_POST['username']) && !empty($_POST['password']))
{
    $user=@$_POST['username'];
    $pass=md5($_POST['password']);
     $aa=@$_POST['ID'];
    $bb=@$_POST['FirstName'];
     $cc=@$_POST['LastName'];
     $checkusername = "SELECT * FROM login1 where username='".$user."' and password='".$pass."' ";
      
   $result = mysqli_query($conn, $checkusername);
           //mysqli_store_result($conn);
         $numrows = mysqli_num_rows($result);
		            if($numrows >0){
     //   echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
     }
     else
     {
        $sql = "INSERT INTO login1(username, password, ID, FirstName, LastName) VALUES('".$user."', '".$pass."','".$aa."','".$bb."','".$cc."')";
        if (mysqli_query($conn, $sql)) 
        {
           // echo "<h1>Success</h1>";
            echo "<p>Your account was successfully created. Please <a href=\"index2.php\">click here to login1</a>.</p>";
        }
        else
        {
            echo "<h1>Error</h1>";
            echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
        }       
     }
}
else
{
    ?>
     
   <h1>Create Account</h1>
     
   <p>Please enter your details below to Create Account.</p>
     
    <form method="post" action="Account2.php" name="registerform" id="registerform">
    <fieldset>
        <table border ="0" width="350" height="130" style="max-width:75%;margin:2% 0% 0% 10%;">
<tr><td>UserName:</td>
		 <td><input name="username" type="text" id="username" pattern="[a-zA-Z\s]+"> </td></tr>
         <tr><td>Password:</td>
		 <td><input name="password" type="password" id="password" pattern="[a-zA-Z\s]+"></td></tr>
		 <tr><td>ID:</td>
		 <td><input name="ID" type="number" id="ID" > </td></tr>
		 <tr><td>FirstName:</td>
		 <td><input name="FirstName" type="text" id="FirstName" pattern="[a-zA-Z\s]+"> </td></tr>
		 <tr><td>LastName:</td>
		 <td><input name="LastName" type="text" id="LastName" pattern="[a-zA-Z\s]+"> </td></tr>
        <tr><td></td><td><input type="submit" name="Account2" id="Account2" value="Account2" />
		<button type="button" onclick="history.back();">Back</button></td></tr>
		</table>
    </fieldset>
    </form>
     
    <?php
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