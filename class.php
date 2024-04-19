<?php
class bike{
    function model(){
        $model_name = "Honda";
        echo "Bike Model:" .$model_name;
    }
}

$obj =  new bike();
$obj -> model(); 

echo "<br/>";
$marks = array(20,45,67);
$sorted = rsort($marks);
foreach($marks as $sorted){
    echo "$sorted,";
}

echo "<br/>";
echo "hello";

$host = "localhost";
$user = "root";
$pass = "";
$database = "hosy_sasa";

$conn = mysqli_connect($host,$user,$pass,$database);
if(!$conn){
    die("Could not connect:".mysqli_connect_error());
}
echo "Connected Successfully";
mysqli_close($conn);

?>