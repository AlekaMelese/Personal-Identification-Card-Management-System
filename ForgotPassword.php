<?php

$con = mysqli_connect("localhost", "root", "","picms");

if($con) mysqli_select_db($con,'picms') or die("Could not select database");
 if (isset($_POST['Email']) && ($_POST['Email']!="")) {
  # code...
  $email=trim($_POST['Email']); // get email address from user form
  $code=md5(uniqid(true)); // random alphernumeric character store in $code variable
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

   $checkmail=$db->query("SELECT Email FROM login WHERE Email='$email' ") or die(mysqli_error('Run time error...'));
   $count=mysqli_num_rows($checkmail); // check if user is on our data base

   if ($count==1) { // if email is stored in our database update lost password field with random code for reset
    # code...s
    $inserted=$db->query("UPDATE login SET lost='$code' WHERE Email='$email' ");
      // update our table users with unique random code
      /* Send a link to reset password */
      $to = $email;
      $subject = "reset password link";
      $header = "By codexpress";
      $body = "here is your link to reset your password
      For active your account, visit the link below to complete : 
      http://www.thewallclone.com/updatepassword.php?email=$email&code=$code";

      $sent=mail($to,$subject,$body,$header);
      
       # code...
    if ($inserted) { /* update is successfull */
     # code...
     echo("Check your mail we have sent you reset link to change your password! <br>");

    }
   }
   else
   {
     echo("Oops! Sorry, $email dose not belong to any account!");
   }

  } else {
    echo("$email is not a valid email address");
  }
 }

 ?>
 <?php

$con = mysqli_connect("localhost", "root", "","picms");

if($con) mysqli_select_db($con,'picms') or die("Could not select database");
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>How to create forget password recovery procedure in PHP by Codepress</title>
</head>
<body>
<?php
 if (isset($_GET['email']) && ($_GET['code']!="")) {
  # code...
  $code=$_GET['code'];
  $email=$_GET['email'];

  $checkmail=$db->query("SELECT Email FROM login WHERE email='$email' AND lost='$code' AND lost!='' ") 
  or die(mysqli_error('Run time error...'));
  $count=mysqli_num_rows($checkmail);
  if ($count) {
   if (isset($_POST['password']) AND ($_POST['password']!="")){

     $password=md5($_POST['password']);
     $repassword=md5($_POST['repassword']);
     if ($password===$repassword) {
      # code...
      $inserted=$db->query("UPDATE login SET lost='', password='$password' WHERE Email='$email' ");
       // insert into our table users with new password
      if ($inserted) {
       # code...
       echo "<h1>Successfully changed!</h1>
       <a href='index.php'>Return home</a>";
      }

     }
     else
     {
      echo "Password do not match!";
     }

   }
   # code...
  

  }
  else
  {
   echo "<h2>Error occure! <a href='index.php'>Return</a></h2>";
  }

  
 }

 ?>
 <h2>Create New Password</h2>
    <form method="post" action="">
          <p><label>New Password: </label><input type="text" name="password" /></p>
          <p><label>Retype New Password: </label><input type="text" name="repassword" /></p>
          <p><input type="submit" name="create" value="Submit"/></p>
      </form>
</body>
</html>