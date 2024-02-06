<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;
	$tax = $gross * 0.22;
    $newwage = $gross - $tax;
    echo $newwage;
?>
</body>
</html>
