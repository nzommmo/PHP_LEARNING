<?php
$script = array();
$script[10] = "ASP";
$script[11] = "ColdFusion Markup Language";
$script[12] = "Java via JavaServer Pages";
$script[13] = "Javascript using Server Side Javascript";
$script[14] = "PHP";
$script[15] = "Perl";
$script[16] = "SMX";
$script[17] = "Python";
$script[18] = "Ruby";
$script[19] = "Lasso";
$script[20] = "WebDNA";
echo "<p><b>Server-side Scripting Languages </b></p><ul>";
foreach ($script as $val )
{
echo "<li>$val</li>";
}
echo "</ul>";
?>