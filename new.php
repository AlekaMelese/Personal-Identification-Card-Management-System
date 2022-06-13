    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
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
    <div id="header" style="background-image: url(images/header.PNG);">
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
		  <li class="current"><a href="index.php">Home</a></li>
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

<body>  
<div id="main">
			<?php
			session_start();
$db = mysqli_connect("localhost", "root", "","picms");
$old_password!="";
 $password!="" ;
 $confirm_pwd!="";
if($db) mysqli_select_db($db,'picms') or die("Could not select database");
  if(isset($_POST['submit'])){
  extract($_POST);
  if($old_password!="" && $password!="" && $confirm_pwd!="");
  //$user_id = '1';// sesssion id
  $old_pwd=md5(mysqli_real_escape_string($db,$_POST['old_password']));
  $pwd=md5(mysqli_real_escape_string($db,$_POST['password']));
  $c_pwd=md5(mysqli_real_escape_string($db,$_POST['confirm_pwd']));
  if($pwd == $c_pwd) 
  if($pwd!=$old_pwd)
    $sql="SELECT * FROM login WHERE `username`='".$_SESSION['username']."' AND `password` ='".$old_pwd."'";
    $db_check=$db->query($sql);
    $count=mysqli_num_rows($db_check);
  if($count==1){
    $fetch=$db->query("UPDATE login SET `password` = '$pwd' WHERE `username`='".$_SESSION['username']."'");
    $old_password=''; $password =''; $confirm_pwd = '';
    $msg_sucess = "Your new password update successfully.";
  }
  else
    echo  "Old password new password same Please try again."
  }
?> 
				

					<form method="post" name="contact" action="new.php">
					
						Old Password:<input type="password" class="validate-subject required input_field" name="cur_pwd" style="width: 170px;margin-left:65px;"/> 
						<div class="cleaner h20"></div>    
						
						New Password:<input type="password" class="validate-subject required input_field" name="password" style="width: 170px;margin-left:60px;"/> 
						<div class="cleaner h20"></div>
						
						Verify New Password:<input type="password" class="validate-subject required input_field" name="confirm_pwd" style="width: 170px;margin-left:5px;"/> 
						<div class="cleaner h20"></div>
						
						<input type="submit" style=" border-top-right-radius: 25px;border-top-left-radius: 25px;border-bottom-right-radius: 25px;border-bottom-left-radius: 25px;margin-left:150px;"value="Change" name="submit" class="submit_btn float_l" />
                        <button type="button" onclick="history.back();">Back</button>						
						
						</form>
            </div>  
                
            <div class="cleaner"></div>
            </fieldset>
			</div><!--close site_content--> 
  </div><!--close main-->
  <div id="footer_container"> 
    <div id="footer">
	<p>&copy All Right Reserved</p>
    </div><!--close footer-->  
  </div><!--close footer_container--> 	
</body>
</html>
