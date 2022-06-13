
<?php
session_start(); $username = $password = $userError = $passError = '';
if(isset($_POST['sub'])){
  $username = $_POST['username']; $password = $_POST['password'];
  if($username === 'admin' && $password === 'password'){
    $_SESSION['login'] = true; header('LOCATION:admin.php'); die();
  }
  if($username !== 'admin')$userError = 'Invalid Username';
  if($password !== 'password')$passError = 'Invalid Password';
}?>

<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <title>Login</title>
     <style type='text.css'>
       @import common.css;
     </style>
   </head>
<body>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username"  type="text"><br><br>
<label>Password :</label>
<input id="password" name="password"  type="password"><br>
<input name="submit" type="submit" value=" Login ">
</form>
  <script type='text/javascript' src='common.js'></script>
</body>
</html>";
