<?php
//Define the color array
$colors = array('white','green','red');

//Display colors in ascending order
echo "Colors in ascending order: ";
sort($colors);
foreach($colors as $color){
    echo "$color, ";
}
echo "<br>";

//Display colors in ascending order
echo "Colors in descending order: ";
rsort($colors);
foreach($colors as $color){
    echo "$color,";
}

?>