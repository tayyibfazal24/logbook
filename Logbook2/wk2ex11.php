<?php
$total = 0;
$mymarks["CO551"] = 40;
$mymarks["CO453"] = 45;
$mymarks["CO559"] = 47;
$mymarks["CO558"] = 60;
$mymarks["CO554"] = 49;
$mymarks["CO553"] = 70;

$average = $total/6;

foreach ($mymarks as $index => $value)
{
    echo "for  $index  my grade was  $value <br/>";
}

$total = $total + $mymarks[$index];

echo "My average mark was $total <br/>";

?>