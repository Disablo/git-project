<?php

    /*

		Task: 
		Create array with random numbers in range 1-100. Find a product of all
		nums that have index like 55, 88, 11. At last, show all nums that have
		not paired index.

	*/

	$paired = [];
	$product = [];

	for ($i=0; $i<=100; $i++) {

		array_push($paired, rand(1, 100));

	}


	$index = 0;
	$index2 = 1;

	for ($i=0; $i<=8; $i++) {

		$index++;
		$index = ($index * 10) + $index2;

		array_push($product, $paired[$index]);

		$index = $index2; //for simplifing. Clear reverse operation on 28 line
		$index2++;

	}


	//Multiplying

	for ($i=0; $i<=count($product); $i++) {

		$total = $product[0] * $product[1];
		$product[1] = $total;
		
		array_shift($product);

	}

	print_r($product); //product of all this nums bigger then int. Use long int

?>