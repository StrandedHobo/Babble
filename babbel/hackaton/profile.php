<?php
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Homepage</title>
 <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="profile">
 <b id="welcome">Welkom : <i><?php echo $login_session; ?></i></b>
 <b id="logout"><a href="logout.php">Log uit</a></b>
 </div>
</body>
</html>