<?php

// Create a do-while loop that will count by 2's starting with 0 and ending at 100. 
//Follow each number with a newline.
	$a = 0;

	do {
		echo "\$a is now: $a\n";
		$a += 2;
	} while ($a <= 100);

// Alter your loop to count backwards by 5's from 100 to -10.
	$b = 100;

	do {
		echo "\$b is now: $b\n";
		$b -= 5;
	} while ($b >= -10);

// Create a do-while loop that starts at 2, and displays the result $a * $a on each 
//line while $a is less than 1,000,000.
	$c = 2;

	do {
		$t = $c * $c;
		echo "$c squared = $t\n";
		$c = $t;
		// echo $c . PHP_EOL;
		// $c *= $c;
	} while ($c < 1000000);



?>