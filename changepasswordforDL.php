<?php
session_start();
if(!isset($_SESSION['username']))
		{
			header('Location: index.php');			
		}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Resident Resgitration Page</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/x.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>  
<style>
    ul{
        padding: 0;
        list-style: none;
        background: Bulu;
    }
    ul li{
        display: inline-block;
        position: relative;
       
        text-align: left;
		text-decoration: none;
    }
    ul li a{
        display: block;
       
     color: #fff; 
   border-radius: 7px 7px 7px 7px;
  -moz-border-radius: 7px 7px 7px 7px;
  -webkit-border: 7px 7px 7px 7px;
        text-decoration: none;
		 height: 24px;
  margin: 10px 0 0 10px;
  text-shadow: 0px -1px 0px #000;
  padding: 3px 20px 0 20px;
    }
    ul li a:hover{
     color: #1D1D1D; 
  background: pink;     
    }
    ul li ul.dropdown{
     background: pink;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li:hover ul.dropdown{
        display: block; /* Display the dropdown */
		
    }
    ul li ul.dropdown li{
        display: block;	
		    
    }
	
	
	
/* Dropdown Button */
.dropbtn {
  background-color: #6B9BC3;
  color: white;
  padding: 14px;
  font-weight: bold;
  border: none;

   border-radius: 7px 7px 7px 7px;
  -moz-border-radius: 7px 7px 7px 7px;
  -webkit-border: 7px 7px 7px 7px;
   text-decoration: none;
		 height: 24px;
  margin: 10px 0 0 10px;
  text-shadow: 0px -1px 0px #000;
  padding: 0px 8px 0 20px;

}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
  
  
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff1f1;
  min-width: 165px;
  box-shadow: 0px 8px 16px 0px rgba(15,0,0,0.2);
  

  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41; color: black;}
</style>  
</head>
<body>
<div>
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
        <ul id="menu">
		 <li><a href="Keb_Reg.php">Register</a></li>
          <li><a href="Payment.php">Payment</a></li>		  
	<li><a href="update_resident.php"><b>Update Resident</a></li>
          <li><a href="certificate.php">Certificate</a></li>
		 <div class="dropdown">
  <button class="dropbtn"> Report By &#9662;</button>
  <div class="dropdown-content">
    <a href="ReportbyNameforDL.php">Name/ID</a>
    <a href="ReportByYearforDL.php">Year </a>
    <a href="ReportBySexforDL.php">Gender </a>
  </div>
  
</div>
 <div class="dropdown">
  <button class="dropbtn"> <i class="fa fa-cog" aria-hidden="true"></i> Setting &#9662; </button>
  <div class="dropdown-content">   
    <a href="changepasswordforDL.php">Change Password </a>
    <a href="ViewFeedBackDL.php">View FeedBack </a>
	<a href="index.php">Log Out </a>
  </div>
  </div>
        </ul>
      </div><!--close menubar-->	
	</div><!--close menu_container-->
    
	<div id="site_content">		
	  	  <div class="sidebar_container"><br>
		   
		<!--<img width="200" height="100" src="images/ad.jpg">-->
		
		<div class="sidebar">
          <div class="sidebar_item"><br><br>
            
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
        <div class="sidebar">
          <div class="sidebar_item"><br><br><br><br><br>
	
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	<br>
	   <!-- <img width="680" height="100"src="images/reg.png" style="border-radius:10px 10px 10px 10px">

-->



<body>  
<div id="main">

 
				
					<form method="post" name="contact" action="changepasswordforDL.php">
					<fieldset style="max-width:54%;margin:0% 0% 6% 15%;">

<legend align="center"> <b> Change Password:</b></legend> <br>
<table>
<?php
	 $OldPassword=$NewPassword=$ConfirmPassword=$OldPasswordE=$NewPasswordE=$ConfirmPasswordE="";
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				if(empty($_POST["OldPassword"])) 
				{
					$OldPasswordE="OldPassword is required";
				}else{
					if(!preg_match("/^[a-zA-Z0-9 ]+$/",$_POST["OldPassword"])){
						$OldPasswordE = "Please only Enter Characters!";
					}else{
						$OldPassword= $_POST["OldPassword"];
					}
				}	

				if(empty($_POST["NewPassword"])) 
				{
					$NewPasswordE="NewPassword is required";
				}else{
					if(!preg_match("/^[a-zA-Z0-9 ]+$/",$_POST["NewPassword"])){
						$NewPasswordE = "Please only Enter Characters!";
					}else{
						$NewPassword= $_POST["NewPassword"];
					}
				}	
				if(empty($_POST["ConfirmPassword"])) 
				{
					$ConfirmPasswordE="ConfirmPassword is required";
				}else{
					//if($NewPassword!=$ConfirmPassword){
						if($_POST['NewPassword'] != $_POST['ConfirmPassword']){
						$ConfirmPasswordE = "Password is Mismathed!";
					}else{
						$ConfirmPassword= $_POST["ConfirmPassword"];
					}
			}}	



?>
					<tr><td>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">	
						Old Password:</td><td> <input type="password" name="OldPassword" ID="OldPassword">  
						<span class="message" style="color:red;">*<?php echo $OldPasswordE; ?></span>
						</td></tr>
						<tr><td>
						New Password:</td><td><input type="password" name="NewPassword"  ID="NewPassword"> 
						<span class="message" style="color:red;">*<?php echo $NewPasswordE; ?></span>
						</td></tr><tr><td>
						Verify New Password:</td><td><input type="password"   name="ConfirmPassword" ID="ConfirmPassword"> 
						<span class="message" style="color:red;">*<?php echo $ConfirmPasswordE; ?></span>
						</td></tr><tr><td></td><td>
						<input type="submit" value="Change" name="submit" class="submit_btn float_l" />
                        <button type="button" onclick="history.back();">Back</button>						
						</td></tr>
						
            </div>  
                
            
        </table>    </fieldset> </form>
		
			<?php 


$user = @$_SESSION['username'];

$con = mysqli_connect("localhost", "root", "","picms");

if($con) mysqli_select_db($con,'picms') or die("Could not select database");
if (isSet($_POST['submit']) && isSet($_POST['newPass']) && isSet($_POST['newPass2']) && isSet($_POST['curPass']) 
	&& $_POST['curPass'] != '' && $_POST['newPass'] != '' && $_POST['newPass2'] != '') {
	$new = $_POST['newPass'];
	$new2 = $_POST['newPass2'];
	if ($new == $new2) {
		$new = md5($new);
		$cur = $_POST['curPass'];
		$cur = md5($cur);
		$user = $_SESSION['username'];
		$q = mysqli_query($con, "SELECT * FROM login WHERE  password='".$cur."' ");
		if (mysqli_num_rows($q) > 0) {
			$info = mysqli_fetch_array($q);
			//echo $info['password'].' : '.$cur;
			if ($info['password'] == $cur) {
				$qq = mysqli_query($con, "UPDATE login SET password='".$new."' WHERE  password='".$cur."'") or die(mysql_error($con));
				if ($qq) {
					
					echo"<script language='javascript'>";
echo"alert('Update password is succesfull!')";
				}else
					echo"<script language='javascript'>";
					echo 'Failed to update your password.';
				
			}else
				echo"<script language='javascript'>";
				echo 'Your entered current password was not correct. Please try again.';
		}else
			echo 'Your username was not found in our users database!';
	}else
		echo 'The two new passwords did not match.';
 
}
?>
		<div class="cleaner"></div>
			</div><!--close site_content--> 
  </div><!--close main-->
  <div id="footer_container"> 
    <div id="footer">
	<p>&copy All Right Reserved</p>
    </div><!--close footer-->  
  </div><!--close footer_container--> 	
</body>
</html>
