<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php


include("db/dbconfig.php");
include("db/dbopen.php");
// SELECT STATEMENT NOT FINISHED
$query = "SELECT message,username ";
$query .= "FROM chat ";

$preparedquery = $dblink->prepare($query);
$preparedquery->execute();

$id = $_GET['id'];

if ($_GET['id'] == "button1") {
  $message = "In de fille";
}

if ($_GET['id'] == "button2") {
  $message = "In de trein";
}

if ($_GET['id'] == "button3") {
  $message = "Ik ben over 15 minuten thuis";
}

if ($_GET['id'] == "button4") {
  $message = "Ik ben onderweg.";
}

if ($_GET['id'] == "button5") {
  $message = "Alles is oke.";
}

if ($_GET['id'] == "button6") {
  $message = "Bedankt";
}

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
            echo '<span>' .$message.'</span>';



            echo " <br>";
        };
    }
}
include("db/dbclose.php");

?>
    <div class="buttons">
      <form  action="new-chat.php" method="POST">
      <button type="button" id="button1">In file</button>
      <button type="button" id="button2">In trein</button>
      <button type="button" id="button3">15 min thuis</button><br>
      <button type="button" id="button4">Onderweg</button>
      <button type="button" id="button5">Alles oke</button>
      <button type="button" id="button6">Bedankt</button>
      <input type="submit" value="Verzenden">
  </div>
  </body>
</html>
