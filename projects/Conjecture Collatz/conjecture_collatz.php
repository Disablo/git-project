<html lang="ru">
	<head>
	  <title>Conjecture Collatz</title>
	</head>

	<body>
	
	  <p>
	    The Collatz conjecture is a conjecture in mathematics that concerns 
		a sequence defined as follows:<br> start with any positive integer n. 
		Then each term is obtained from the previous term as follows:<br> 
		if the previous term is even, the next term is one half the previous term.<br> 
		If the previous term is odd, the next term is 3 times the previous term 
		plus 1.<br> The conjecture is that no matter what value of n, the sequence 
		will always reach 1.
	  </p>
	  
	  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	    
		<span>Enter the number and I show you that is truth<span><br>
		<input type="text" name="num" placeholder="Write here your number">
		<input type="submit" value="Calculate">
		<input type="reset" value="Reset">
		<br><br>
		
	  </form>
	  
	  <?php
	    $i = 0; //limiter for test
		$num = $_POST["num"];
		
		if (is_numeric($num)) {
		  
		  while (true) {
			
			if ($num == 1) {
			  break;
			}
			
		    $a = $num % 2;
			
		      if ($a == 0) {
	            $num /= 2; 
			    echo "$num <br>"; 
		      } else {
			    $num = ($num * 3) + 1;	
			    echo "$num <br>";
		      }
			
			$i++; // start block of limiting
			if ($i == 1000) {
				echo "oversize";
				break;
			} // end of block limiting 
		  }
		  
		} else {
		  
		    echo "You inputed something wrong. Maybe inputing numbers will be better? :)"; 
		}
		 
		
	  ?>
	
	</body>
</html>