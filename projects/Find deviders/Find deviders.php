<?php

	$sum = 0;
	$alarm = 0;

	for ($i=25; $i<=45; $i++) {

		$num = $i / 5;

		if (gettype($num) == integer) {
			$sum += $num;
			echo "sum is: " . $sum . "<br>"; 
		}

		$alarm += 1;
		if ($alarm > 100) {
			exit();
		}

	}

?>