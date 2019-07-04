<?php


include("db/dbconfig.php");
include("db/dbopen.php");

$id = 0;
$message =$_POST["message"];
$user = "jan";

$query = "INSERT INTO chat ";
$query .= "VALUES (?,?,?) ";

 $preparedquery = $dblink->prepare($query);
 $preparedquery->bind_param("iss", $chatID,$message,$user);
 $result = $preparedquery->execute();

 if (($result===false) || ($preparedquery -> errno)) {
   echo "<div class=\"alert alert-danger\" role=\"alert\">Fout met de database, probeer later opnieuw.</div>";
   mysqli_rollback($dblink);
   $preparedquery->close();
   return;
 } else {
    mysqli_commit($dblink);
    header('Location: chat.php');
    exit;
 }



 $preparedquery->close();



 include("db/dbclose.php");

 


?>
     
?>