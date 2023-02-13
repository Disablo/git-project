<html>

	<body>

		<form action="/" method="get">

			<input type='text' name='name'><br>
			<input type='text' name='second_name'><br>
			<input type='text' name='surname'><br>

			<input type='submit'><br>

		</form>

	</body>

</html>


<?php

	$name = $_GET['name'];
	$s_name = $_GET['second_name'];
	$surname = $_GET['surname'];

	if (!empty($_GET)) {
		echo "Hello, " . $name . " " . $s_name[0] . ". " . $surname[0] . ". "; //Simply than use substr()
	}

?>