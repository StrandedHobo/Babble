<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="home.css">
    <title>Homepagina On the move</title>
</head>
<body>


  <?php
  include('session.php'); 
  if(!isset($_SESSION['login_user'])){ 
    header("location: index.php"); // Redirecting To Home Page 
  }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  <title>Your Home Page</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <div id="profile">
  <b id="welcome">Welkom : <i><?php echo $login_session; ?></i></b>
  <b id="logout"><a href="logout.php">Log Out</a></b>
  </div>





</body>
</html>