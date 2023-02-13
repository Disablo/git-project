<html>

	<body>

		<form action="/" method="post">

			<p>Program calculate sum of numbers that you'll input</p>

			Input numbers <input type="text" name="nums"> <br>
			<input type="submit">
		</form>

	</body>

</html>

<?php

	$nums = $_POST['nums'];
	$sum = 0;

	for($i=0; $i<=strlen($nums); $i++){

		$sum = $sum + intval($nums[$i]);

	}
	
	echo "<br>" . $sum;

?>