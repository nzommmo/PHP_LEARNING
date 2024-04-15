<?php
$num  = 189;
if($num < 100){
    echo "$num is less than 100";
}elseif($num > 100){
    echo "$num is larger than 100";
}else{
    echo "$num is equal to 100";
}

echo "</br>";
echo "</br>";

// if and if 

$age = 89;
$nationality = "Kenyan";
if ($nationality == "Kenyan"){
    if ($age >= 18){
        echo "Eligible to vote";
    }else{
        echo "Not eligible to vote";
    }
}else{
    echo "Not within jurisdiction";
}

echo "</br>";
echo "</br>";


?>