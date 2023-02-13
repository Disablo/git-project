<html>

	<body>

		<form action="/" method="get">

			<input type='text' placeholder='Enter your degree...' name='time'><br>

			<input type='submit'><br>

		</form>

	</body>

</html>


<?php

	$time = $_GET['time'];

	if (($time >= 345) || ($time <= 15)) {
		echo "Now 12";
	} else if (($time > 15) && ($time <= 30)) {
		echo "Now 1";
	} else if (($time > 30) && ($time <= 75)) {
		echo "Now 2";
	} else if (($time > 75) && ($time <= 105)) {
		echo "Now 3";
	} else if (($time > 105) && ($time <= 135)) {
		echo "Now 4";
	} else if (($time > 135) && ($time <= 165)) {
		echo "Now 5";
	} else if (($time > 165) && ($time <= 195)) {
		echo "Now 6";
	} else if (($time > 195) && ($time <= 225)) {
		echo "Now 7";
	} else if (($time > 225) && ($time <= 255)) {
		echo "Now 8";
	} else if (($time > 255) && ($time <= 285)) {
		echo "Now 9";
	} else if (($time > 285) && ($time <= 315)) {
		echo "Now 10";
	} else if (($time > 315) && ($time <= 345)) {
		echo "Now 11";
	}

?>