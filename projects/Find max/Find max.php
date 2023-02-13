<?php

    /*

		Task: 
		Create array and push into random values. Thean find Min and Max values.
		And in the last we must replace Min and Max

	*/

    //Prepare array and push into them random int values 
	$zoo = [];

	for ($i=0; $i<=10; $i++) {

		array_push($zoo, rand(1, 100));

	}


	//Block for finding Max int value
	$max = 0;
	for ($i=0; $i<=10; $i++) {

		if ($zoo[$i] > $max) {
			$max = $zoo[$i];
			$index_max = $i;
		}

	}


	//Block for finding Min in value
	$min = $max;
	for ($i=0; $i<=10; $i++) {

		if ($zoo[$i] < $min) {
			$min = $zoo[$i];
			$index_min = $i;
		}

	}

	//Replace Min and Max values
	$zoo[$index_min] = $max;
	$zoo[$index_max] = $min;

?>