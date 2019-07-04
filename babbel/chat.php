<?php 

include("db/dbconfig.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
    <div class="chat">
    <?php


include("db/dbconfig.php");
include("db/dbopen.php");
// SELECT STATEMENT NOT FINISHED
$query = "SELECT message,username ";
$query .= "FROM chat ";

$preparedquery = $dblink->prepare($query);
$preparedquery->execute();

if ($preparedquery->errno) {
    echo "error occurred while executing command";
} else {
    $result = $preparedquery->get_result();

    if ($result->num_rows === 0) {
        echo "no members found";
    } else {
        while ($row = $result->fetch_assoc()) {
            // link to every complaint by ID
            echo $row["username"] .":   ";
            echo '<span>' .$row["message"].'</span>';

           

            echo " <br>";
        };
    }
}
include("db/dbclose.php");

?>
    </div>
   
    <div class="text">
    <form  action="new-chat.php" method="POST">
    <input id="text" name="message" type="text" placeholder="Hier je bericht" ><br>
    <input type="submit" value="Verzenden">
    </div>
    </form>
  
</div>
</body>
</html>