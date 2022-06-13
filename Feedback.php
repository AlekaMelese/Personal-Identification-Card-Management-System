
<!DOCTYPE html>
<html>
<head>
  <title>Certificate Giving Page</title>
  <meta name="description" content="AKMS" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <meta charset="utf-8">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
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
		 <li><a href="Homepage.php">Home</a></li>
		   <li><a href="About.php">About</a></li>
		
		  <!--<li><a href="developer.php">Developers</a></li>-->	
		    <li><a href="Contactus.php">Contact Us</a></li>
		   <li><a href="Feedback.php">FeedBack</a></li>
        <li><a href="index.php">Login</a></li>   
		
        </ul>
		
      </div><!--close menubar-->	
	  
	</div><!--close menu_container-->
	</nav>
  
<div id="site_content">

	  	  <div class="sidebar_container"><br>
		
		 
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
          <div class="sidebar_item"><br><br><br>
		  
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->

	 
		<div id="content">
		 <form  action="Feedback.php" method="post"><br>
		 
	 <?php
	 $FirstName=$FirstNameE=$Subject=$SubjectE=$Email=$EmailE="";
			
if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				if(empty($_POST["FirstName"])) 
				{
					$FirstNameE="Name is required";
				}else{
					if(!preg_match("/^[a-zA-Z ]+$/",$_POST["FirstName"])){
						$FirstNameE = "Please  Enter only Characters!";
					}else{
						$FirstName= $_POST["FirstName"];
					}
				}
												
				
				if(empty(trim($_POST["Subject"])) )
				{
					$SubjectE="Subject is required";
				}else{
					if(!preg_match("/^[a-zA-Z0-9 ]+$/",$_POST["Subject"])){
						$SubjectE = "Please  Enter only Characters!";
					}else{
						$Subject= trim($_POST["Subject"]);
					}
				}
				if(empty(trim($_POST["Email"])))
				{
					$EmailE="Email is required";
				}else if(!preg_match("/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/",trim($_POST["Email"]))){
						$EmailE = "Please Enter a Valid Email";
						$CheckOk=0;
					}else{
						$Email= trim($_POST["Email"]);
					}
												
				
				
					
			}

		?>
	
		 <fieldset style="margin:2% 0% 0% 18%;">
         <legend align ="center">Please Give Your FeedBack Below:</legend><br>
		 <table>
		 <tr><td>Name:</td>
        <td><input name="FirstName"  type="text" id="FirstName"  placeholder="Name" 
		  value="<?php echo $FirstNameE;?>"> <span class="message" style="color:red;">*<?php echo $FirstNameE; ?></span></td></tr>
		 <tr><td>Email:</td>
		 <td><input name="Email" type="text" id="Email"  placeholder="Email" required> <span class="message" style="color:red;">*<?php echo $EmailE; ?></span></td></tr>
		 <tr>
		 <td >Subject:</td>
		 <td><textarea style="margin: 0px; width: 442px; height: 150px;" name="Subject" value="Subject" 
		  placeholder="Write Your Comment here..."></textarea>
		  <span class="message" style="color:red;">*<?php echo $SubjectE; ?></span></td>
		 </tr>
		<tr><td>
		<td>
        <input type="submit" name="btnSubmit" formnovalidate value="Register" class="btn btn-success"  align="left"/>&nbsp;
		<input type="reset" name="Clear" value="Clear" class="btn btn-danger" /></td>	
		 </tr>
		 
            </table>
	       
	      </form>	  

<?php

$conn= mysqli_connect("localhost","root","") or die("Unable to connect");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
if(isset($_POST["btnSubmit"])){
$name=@$_POST['FirstName'];
$Email=@$_POST['Email'];
$Subject=@$_POST['Subject'];
$FeedBackDate=date("Y").'-'.date("m").'-'.date("d");
//$IdNo=@$_POST['IdNo'];

	
$result=mysqli_query($conn,"INSERT INTO feedback(name,Email,comment,FeedBackDate)VALUES
('$FirstName','$Email','$Subject','$FeedBackDate')");
if($result)
{
	echo"Thanks for Your Feedback.";
}
else
{
echo"Error".mysqli_error($conn);
}
}
?>
 </fieldset>


</div><!--close content-->
	</div><!--close site_content-->   
  </div><!--close main-->
  <div id="footer_container">
    <div id="footer">
	  <p> &copy All Right Reserved</p></div>
    </div><!--close footer-->  
  </div><!--close footer_container-->  
  
</body>
</html>