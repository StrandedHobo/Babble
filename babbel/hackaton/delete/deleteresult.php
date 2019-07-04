<?php

include("../../dbase/config.php");
include("../../dbase/opendb.php");

$query = "DELETE FROM members ";
$query .= "WHERE id=? ";
$query .= "LIMIT 1 ";

$preparedquery = $dbaselink->prepare($query);

$id = $_GET["id"];
$preparedquery->bind_param("i", $id);
$result = $preparedquery->execute();


echo "deze persoon is verwijderd";
echo "<br>";
echo "<a href=\"../../index.html\"><button>Home</button></a>";


$preparedquery->close();

include("../../dbase/closedb.php");

?>