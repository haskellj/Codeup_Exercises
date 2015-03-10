<?php
//print all numbers from 1 to 100.
//For any multiples of 3, replace with "fizz".
//For any multiples of 5, replace with "buzz".
//For any multiples of 3 AND 5 (i.e. 15), replace with "fizzbuzz".

//Very succinct ternary, but hard to read version:
for($i = 1; $i <= 100; $i++){
	//modulus == 0 would result to a "false" boolean
	echo ($i%15)? ($i%3)? ($i%5)? "$i\n":"BUZZ\n":"FIZZ\n":"FizzBuzz\n";
}

//Easier to read (non-ternary) version:
$x = 1;
while($x <= 100){
	if ($x % 15 == 0){
		echo "FizzBuzz" . PHP_EOL;
	} else if ($x % 3 == 0){
		echo "Fizz" . PHP_EOL;
	} else if ($x % 5 == 0){
		echo "Buzz" . PHP_EOL;
	} else {
		echo $x . PHP_EOL;
	}
	$x++;
}



?>