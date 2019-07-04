<?php
session_start(); 
$error = ''; 
if (isset($_POST['submit'])) { 
  if (empty($_POST['username']) || empty($_POST['password'])) {
     
    $error = "Username or Password is invalid"; 
  } 
  else{ 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $conn = mysqli_connect("localhost", "root", "", "company"); 
     
    $query = "SELECT username, password from login where username=? AND password=? LIMIT 1"; 
    
    $stmt = $conn->prepare($query); 
    $stmt->bind_param("ss", $username, $password); 
    $stmt->execute(); 
    $stmt->bind_result($username, $password); 
    $stmt->store_result(); 
    if($stmt->fetch()) //fetching the contents of the row { 
      $_SESSION['login_user'] = $username; // Initializing Session 
    header("location: profile.php"); // Redirecting To Profile Page 
  } 
  mysqli_close($conn); // Closing Connection 
} 
?>