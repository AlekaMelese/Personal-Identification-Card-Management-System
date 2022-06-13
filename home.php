<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MTUOSRS </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<script src="css/ac_activex.js" type="text/javascript"></script>
<link href="css/template_css.css" rel="stylesheet" type="text/css" />
<link href="css/css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="screen"type="text/css" href="css/formstyles.css" >
</head>
<body id="bd" class="auto fs3">
<div id="ja-wrapper">
<div id="ja-wrapper-inner">
<!-- BEGIN: HEADER -->
<div id="ja-headerwrap">
	<div id="ja-header" class="clearfix" height="10">
		<h1>
				<img src="image/bb.png" width="100%" height="100" alt="online registration"align="top" />
				
				
		
		</h1>
	</div>
</div>

<!-- END: HEADER -->
<!-- BEGIN: MAIN NAVIGATION -->




<div id='cssmenu'>
<ul>
   <li class='active'><a href='slide.html' target="iframe1"><span>Home</span></a></li>
  <li class='has-sub'><a href='#'><span>Background of MTU Registrar</span></a> <ul>
	     <li><a href='vission.php' target="iframe1"><span>Vission</span></a></li>
         <li><a href='mission.php'target="iframe1"><span>Mission</span></a></li>
 
      </ul></li>
 
   
   </li>
   <li class='has-sub'><a href='Viewnews.php' target="iframe1"><span>News</span></a></li>
   
   <li class='has-sub'><a href='#'><span>Help</span></a>
      <ul>
       
         <li><a href='help.php'target="iframe1"><span>Help</span></a></li>
		   <li><a href='demo.php'target="iframe1"><span>Glary</span></a></li>
      </ul>
   </li>
    <li class='has-sub'><a href='Admission.php' target="iframe1"><span>Admission of New Student</span></a></li>
    <li class='has-sub'><a href='contact-us.php' target="iframe1"><span>Contact-us</span></a></li>
   </ul></div>
   

<div id="ja-containerwrap">
  <div id="ja-container" class="clearfix">
		<!-- BEGIN: CONTENT -->
		<div id="ja-mainbody">
		<div id="ja-contentwrap">
			<div id="ja-content">
				<!--<div id="ja-pathway">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<strong>Online Registration System</strong></div>-->
                
				<iframe name="iframe1" width="800" height="600" src="slide.html" scrolling="auto" frameborder="0"></iframe>  
                        																		
             </div>
		</div>
<!-- BEGIN: RIGHT COLUMN -->

		<div id="ja-rightcol">
		<div id="ja-rightcol-inner">
		<div class="module">
		<h3>Time:</h3>
							<script src="css/time.js" language="javascript" type="text/javascript"></script>
							<body  onLoad="yourClock()", onUnload="stopClock(); return true"> 
					       <form name="the_clock">
						   <table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr align="left"><td><a class="mainlevel">Time:&nbsp;&nbsp;<input type="text" name="the_time" size="10" style="padding-bottom:5px;" align = "top"></a></td></tr>
							<tr align="left"><td><br/></td></tr><br/>
	                    </table>
	                 </form>  
     <br/><br/>

	  <script src="css/calander.js" language="javascript" type="text/javascript"></script> 
        
	   <br/><br/>
	   
	   
	<!--<h3>Vidio About MTU</h3>
	  <embed src="mtu.mp4" width='200'height='200' autostart="False" loop="False"></embed>-->


	   </div>
    </div>
  </div>
</div>
		<!-- END: RIGHT COLUMN -->	
</div>
		<!-- END: CONTENT -->
		<!-- BEGIN: LEFT COLUMN -->
<div id="ja-leftcol"><div class="moduletable">
<h3><font style size=5>&nbsp;&nbsp;Login Form</font></h3>			
<form action="login1.php" method="post" name="contact_form"class="contact_form">
	<table>
		
        
        <tr><td>Your ID:</td></tr>
            <tr><td><input type="text" name="IdNo" placeholder="001" id="IdNo" required /><span id="idno" class="error" ></span></td></tr>
        
		 
           <tr><td> Password:</td>
            <tr><td><input type="password"name="Password"  placeholder="*****" required /><span id="password" class="error" ></span></td></tr>
       
		<tr><td> <br/></td></tr>
			<tr><td>Remember?
	       <input type="checkbox" name="remember" value="yes" class="submit"align="left" /></td></tr>
	
       <tr><td> <br/></td></tr>
	
        	<tr><td><button class="submit" type="submit">Login</button></td></tr>
     
	</table>
	<br/>
    
		<p><a href="Newaccount.php" target="iframe1">
		Create an account</a>
	</p>
</div>	
				
      <div class="moduletable"><h3>Registrar office</h3>	
	  <?php
   mysql_connect("localhost","root","") or die("Unable to connect");
     mysql_select_db('mtu') or die("Unable to select db");
	  $select=mysql_query("select * from office");
	      $row= mysql_fetch_array($select);
	       ?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr align="left"><td><a class="mainlevel" ><?php echo $row['0'];?><br/>P.O. <?php echo $row['1'];?>,<br/><?php echo $row['2'];?><br/><?php echo $row['3'];?></a></td></tr>
		<tr align="left"><td><a class="mainlevel" >Fax: <?php echo $row['4'];?><br/>phone: <?php echo $row['5'];?><br/></a></td></tr>
		</table></div></div><br/>
<!-- END: LEFT COLUMN -->
</div></div>
<!-- BEGIN: FOOTER -->
<div id="ja-footerwrap">
 <div id="ja-footer">
    <div id="ja-sublogo"></div>
         <p id="ja-bottomline">
		 <table width="100%" align="center" border="0" cellspacing="0">
         <tr><td width="80%" color="green" >Copyright &copy; <?php echo(Date("Y"));?> MTU. </td></tr>
         </table>
	     </p>
	     <div id="ja-cert"></div>	
		 
   </div>
</div>
<!-- END: FOOTER -->
</div>
</div>
</body>
</html>

 <li><a href="resident.php">Register</a></li>
          <li><a href="pay.php">ID Payment</a></li>
		  <li><a href="id.php">Print ID Card</a></li>	
          <li><a href="certificate.php">Certificate</a></li>
		  <li><a href="report.php">Report</a></li>
