<?php
include('login.php'); 
if(isset($_SESSION['login_user'])){
header("location: home.php");   
}
?> 
<!DOCTYPE html>
<html>
<head>
  <title>Inlogscherm</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="login">
  <h2>Babbel Inlogscherm</h2>
  <form action="" method="post">
   <label>Email :</label>
   <input id="name" name="username" placeholder="Email" type="text">
   <label>Wachtwoord :</label>
   <input id="password" name="password" placeholder="**********" type="password"><br><br>
   <input name="submit" type="submit" value=" Login ">
   <span><?php echo $error; ?></span>
  </form>
  <a href="index1.php"><input name="submit" type="submit" value=" Maak nieuwe gebruiker aan ">
 </div>
</body>
</html>