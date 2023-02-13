<html>

	<body>

		<form action="/" method="post">

		<p>Program calculate sum how many times number catch 
			in number that you'll input</p>

			Input numbers <input type="text" name="nums"> <br>
			Number to find <input type="text" name="find"> <br>
			<input type="submit">

		</form>

	</body>

</html>

<?php

	$nums = $_POST['nums'];
	$find = $_POST['find'];

	$times = 0;

	for($i=0; $i<=strlen($nums); $i++){

		if ($nums[$i] == $find) {
			$times += 1;
		} 

	}
	
	echo "<br>" . "Number " . $find . " catches " . $times . " times";

?>