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
  <title>Resident Resgitration Page:</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
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
  min-width: 180px;
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
		<li><a href="Create Account.php">CreateAccount</a></li>
		  
		  <li><a href="id.php">Print IDCard</a></li>	
		  <div class="dropdown">
  <button class="dropbtn"> Search &#9662;</button>
  <div class="dropdown-content">   
   <a href="Searching_residentA.php">ID Recived Resident </a>
    <a href="Searching_residentIDUnRecivedA.php">ID UnRecived Resident </a>
	
  </div>
  
</div>	
         <div class="dropdown">
  <button class="dropbtn"> Report By &#9662;</button>
  <div class="dropdown-content">
    <a href="report.php">Name/ID</a>
    <a href="ReportbyYear.php">Year </a>
    <a href="ReportbySex.php">Gender </a>
  </div>
  
</div>
 <div class="dropdown">
  <button class="dropbtn"> <i class="fa fa-cog" aria-hidden="true"></i> Setting &#9662; </button>
  <div class="dropdown-content">   
    <a href="change password.php">Change Password </a>
    <a href="ViewFeedBack.php">View FeedBack </a>
	<a href="logout.php">Log Out </a>
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
       </div><!--close sidebar_container-->	
	  <!-- <img width="680" height="100"src="images/reg.png" style="border-radius:10px 10px 10px 10px">-->

      <div id="content">
	
	
<?php
//require("connection.php");
$id =@$_REQUEST['ID'];
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
$result = mysqli_query($conn,"SELECT FirstName,FatherName,GrandFatherName,Sex,Email,PhoneNumber,Status,username,Role FROM login WHERE ID  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
//$Status=stripslashes(trim(@$_POST['Status']));
             //  $IdNo=$test['IdNo'] ;
				$FirstName=$test['FirstName'] ;
				$FatherName=$test['FatherName'] ;
				$GrandFatherName=$test['GrandFatherName'] ;
				//$Sex= $test['Sex'] ;					
				$Email=$test['Email'] ;
				$PhoneNumber=$test['PhoneNumber'] ;
				$Status=$test['Status'] ;
				$username= $test['username'] ;	
//$password= $test['password'] ;				
				$Role=$test['Role'] ;
				

if(isset($_POST['Submit']))
{	
	            $FirstName=$test['FirstName'] ;
				$FatherName=$_POST['FatherName'] ;
				$GrandFatherName=$_POST['GrandFatherName'] ;
				//$Sex= $_POST['Sex'] ;					
				$Email=$_POST['Email'] ;
				$PhoneNumber=$_POST['PhoneNumber'] ;
				$Status=$_POST['Status'] ;
				$username= $_POST['username'] ;					
				$Role=$_POST['Role'] ;
$conn = mysqli_connect("localhost", "root", "");
if($conn) mysqli_select_db($conn,'picms') or die("Could not select database");
	mysqli_query($conn,"UPDATE login SET FirstName ='$FirstName', FatherName ='$FatherName',GrandFatherName ='$GrandFatherName',
		 Email ='$Email',PhoneNumber ='$PhoneNumber',Status ='$Status',username ='$username',Role ='$Role' WHERE ID = '$id'")
				or die(mysqli_error($conn)); 
	echo "Successfully Updated and Saved!";
	
	//header("Location: Payment.php");			
}
mysqli_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<fieldset style="max-width:80%;margin:2% 5% 4% 20%;">
<legend align="center"> <b> Update Create Account:</b></legend> 

<body>  
<div id="main">


	  <!-- <h1>Create Account</h1>-->
     
   <p><u><b>Please enter your details below to Create Account:-</b></u></p>
     
    <form method="post"  >

        <table  border="0" >
	
	<tr>
		<td> ID:</td>
		<td><input type="text" name="title" value="<?php echo $id ?>"/></td>
	</tr>
<tr><td>First Name:</td>
		  <td><input name="FirstName"  type="text" id="FirstName"  placeholder="" 
		  value="<?php echo $FirstName;?>"> </td></tr>
		
         <tr><td>Middle Name:</td>
		 <td><input name="FatherName" type="text" id="FatherName"  placeholder=""   value="<?php echo $FatherName;?>"> </td></tr>
		  <tr><td>Last Name:</td>
		 <td><input name="GrandFatherName" type="text" id="GrandFatherName"  placeholder=""   value="<?php echo $GrandFatherName;?>"> </td></tr>
		 
		  <tr><td>Email:</td>
		 <td><input name="Email" type="text" id="Email"  placeholder=""   value="<?php echo $Email;?>"> </td></tr>
		 
		  <tr><td>PhoneNumber:</td>
		 <td><input name="PhoneNumber" type="text" id="PhoneNumber"  placeholder=""   value="<?php echo $PhoneNumber;?>"> </td></tr>
		 
		  <tr><td>Status: </td><td>
		 <input type="radio" name="Status" id="Active" value="Active" checked="true" value="<?php echo $Status;?>" >Active
		  <input type="radio" name="Status" id="NotActive" value="NotActive"  value="<?php echo $Status;?>" >NotActive
		 
		  </td></tr>
		 
		 
		 
<tr><td>UserName:</td>
		  <td><input name="username"  type="text" id="username"  Required="True"   placeholder=""   value="<?php echo $FirstName;?>"> </td></tr>
		
        
		<tr><td>Role:</td> 
		  <td style="font size:12pt;"><select name="Role" type="text" id="Role"   value="<?php echo $Role;?>">
		  <option selected="" >Please Select UserType </option>	
		  <option selected="true">DataClerk</option>
		  <option>Admin</option></select> 
		 
          </td></tr>
		
		
	
			<tr>
			<td>&nbsp;</td>
        <td><input align="left" type="submit" name="Submit" value="Update"  formnovalidate class="btn btn-success" onClick="Submit" align="left"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<button type="button"class="btn btn-danger" onclick="history.back();">Back</button></td>
		
        <td>	
		<span class="style5"> </span>                            
		</td></tr>
</table>
</fieldset>
</body>
</html>
</div><!--close content-->	

	</div><!--close site_content--> 
  </div><!--close main-->
	</div><!--close content-->   
	</div><!--close site_content--> 
  </div><!--close main-->
  
  <div id="footer_container">
    <div id="footer">
	  <p>&copy All Right Reserved</p>
    </div><!--close footer-->  
  </div><!--close footer_container--> 	
  
</body>
</html>
