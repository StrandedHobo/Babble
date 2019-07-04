<?php
include("db/dbconfig.php");
include("db/dbopen.php");

$id = 0;
$name =$_POST["name"];
$email =$_POST["email"];
$password =$_POST["password"];



echo "<br>";


$query = "INSERT INTO users ";
$query .= "VALUES (?,?,?,?) ";

echo $query;

 $preparedquery = $dblink->prepare($query);
 $preparedquery->bind_param("isss", $id,$name, $email, $password);
 $result = $preparedquery->execute();

 if (($result===false) || ($preparedquery -> errno)) {
   echo "<div class=\"alert alert-danger\" role=\"alert\">Fout met de database, probeer later opnieuw.</div>";
   mysqli_rollback($dblink);
   $preparedquery->close();
 } else {
   echo "<div class=\"alert alert-success\" role=\"alert\">Uw account is aangemaakt</div>";
 }



 $preparedquery->close();

 mysqli_commit($dblink);

 include("db/dbclose.php");


?>