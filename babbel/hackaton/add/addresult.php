<?php

include("../../dbase/config.php");
include("../../dbase/opendb.php");

if ((!isset($_POST["firstname"])) || (!isset($_POST["surname"]))) {
  echo "Vul alle waardes in";
  echo "<a href=\"./addform.html\">Voeg het nieuwe lid opnieuw toe</a>";
  exit();
}

if (empty($_POST["firstname"]) || (empty($_POST["surname"]))) {
  echo "Vul alle waardes in";
  echo "<a href=\"./addform.html\">Voeg het nieuwe lid opnieuw toe</a>";
  exit();
}

$query = "SELECT max(id) AS maxid ";
$query .= "FROM members ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->execute();

if ($preparedquery->errno) {
  echo "Er is een fout opgetreden";
} else {
  $result = $preparedquery->get_result();
  if ($result->num_rows === 0 ) {
    $id = 0;
  } else {
      $row = $result->fetch_assoc();
      $id = $row["maxid"];
  }
}

$preparedquery->close();

$id++;

$firstname = $_POST["firstname"];
$surname = $_POST["surname"];

$query = "INSERT INTO members ";
$query .= "VALUES (?,?,?) ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("iss", $id, $firstname, $surname);
$result = $preparedquery->execute();

if (($result===false) || ($preparedquery->errno)) {
  echo "Er is een fout opgetreden";
} else {
  echo "Lid toegevoegd.<br>";
  echo "<a href=\"../../index.html\"><button>Home</button></a>";
}

$preparedquery->close();

include("../../dbase/closedb.php");

?>