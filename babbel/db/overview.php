
<?php
include("db/dbconfig.php");
include("db/dbopen.php");
$query = "SELECT name FROM user ";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result)){
    $stringTest = $row['balance'];
    echo $stringTest;
}
 include("db/dbclose.php");
?>