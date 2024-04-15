<?php
$host = "localhost";
$user = "root";
$pass = "";
//$database = "hosy_sasa";

$conn = mysqli_connect($host,$user,$pass,$database);
if(!$conn){
 die('Could not connect:'. mysqli_connect_error());
}
echo "Connected Successfully";
mysqli_close($conn);

?>