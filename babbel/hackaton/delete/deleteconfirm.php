<?php

include("../../dbase/config.php");
include("../../dbase/opendb.php");

$query = "SELECT id, firstname, surname ";
$query .= "FROM members ";
$query .= "WHERE id=? ";

$preparedquery = $dbaselink->prepare($query);

$id = $_GET["id"];
$preparedquery->bind_param("i", $id);
$preparedquery->execute();

if($preparedquery->errno) {
  echo "Fout bij het uitvoeren van commando";
} else {
  $result = $preparedquery->get_result();
  
  if($result->num_rows === 0) {
    echo "Geen rijen gevonden";
  } else {
    while($row = $result->fetch_assoc()) {
      echo "weet u zeker dat u de persooon met <br><br>";
      echo "id=" . $row["id"] . "<br> firstname=" . $row["firstname"] . "<br>surname=" . $row["surname"] . "<br>" . "<br>";
      echo "wilt verwijderen ? <br>";

      echo "<a href=\"./deleteresult.php?id=" . $row["id"] . "\">" . "<button>ja</button>" . "</a>" . "<br>";
      echo "<a href=\"../html/overview.php\">" . "<button>nee</button>" . "</a>" . "<br>";
    }
  }
}

$preparedquery->close();
echo "<br><br>";
echo "<a href=\"../../index.html\"><button>Home</button></a>";
include("../../dbase/closedb.php");


?>