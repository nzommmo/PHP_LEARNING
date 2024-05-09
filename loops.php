<?php
for($n=1;$n<=10;$n++){
    echo "$n<br/>";
}

//FOR EACH IN ARRAYS
$Season = array("Summer","Winter","Spring","Autumn");
foreach($Season as $arr){
    echo "Season is: $arr <br/>";
}

echo "Memory Limit: " . ini_get('memory_limit');



?>