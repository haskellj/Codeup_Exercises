<?php
//Un-verified versions of arithmetic functions
// function add($a, $b) {
//     echo $a + $b . PHP_EOL;
// }

// function subtract($a, $b) {
//     echo $a - $b . PHP_EOL;
// }

// function multiply($a, $b) {
// 	echo $a * $b . PHP_EOL;
// }

// function divide($a, $b) {
// 	echo $a / $b . PHP_EOL;
// }

// function modulus($a, $b) {
// 	echo $a % $b . PHP_EOL;
// }

// add(3, 9);
// subtract(3, 9);
// multiply(3, 9);
// divide(3, 9);
// modulus(3, 9);
// add(array(1,2,3), true);


//Verified versions of arithmetic functions
// function add($a, $b) {
// 	if(is_numeric($a) && is_numeric($b)){
//     	echo $a + $b . PHP_EOL;
//     } else {
//     	echo "ERROR: Both arguments must be numbers\n";
//     }
// }

// function subtract($a, $b) {
//     if(is_numeric($a) && is_numeric($b)){
//     	echo $a - $b . PHP_EOL;
//     } else {
//     	echo "ERROR: Both arguments must be numbers\n";
//     }
// }

// function multiply($a, $b) {
// 	if(is_numeric($a) && is_numeric($b)){
//     	echo $a * $b . PHP_EOL;
//     } else {
//     	echo "ERROR: Both arguments must be numbers\n";
//     }
// }

// function divide($a, $b) {
// 	if(is_numeric($a) && is_numeric($b) && $b != 0){
//     	echo $a / $b . PHP_EOL;
//     } else if ($b == 0){
//     	echo "Warning: cannot divide by zero: ";
//     	echo "$a / $b\n";
//     } else {
//     	echo "ERROR: Both arguments must be numbers\n";
//     }
// }

// function modulus($a, $b) {
// 	if(is_numeric($a) && is_numeric($b) && $b != 0){
//     	echo $a % $b . PHP_EOL;
//     } elseif($b == 0){
//     	echo "Warning: cannot divide by zero: ";
//     	echo "$a % $b\n";
//     } else {
//     	echo "ERROR: Both arguments must be numbers\n";
//     }
// }



// add(3, 9);
// subtract(3, 9);
// multiply(3, 9);
// divide(3, 0);
// modulus(3, 0);
// add(array(1,2,3), true);


//Verified versions that call an error function
// function add($a, $b) {
// 	if(is_numeric($a) && is_numeric($b)){
//     	echo $a + $b . PHP_EOL;
//     } else {
//     	error($a, $b);
//     }
// }

// function subtract($a, $b) {
//     if(is_numeric($a) && is_numeric($b)){
//     	echo $a - $b . PHP_EOL;
//     } else {
//     	error($a, $b);
//     }
// }

// function multiply($a, $b) {
// 	if(is_numeric($a) && is_numeric($b)){
//     	echo $a * $b . PHP_EOL;
//     } else {
//     	error($a, $b);
//     }
// }

// function divide($a, $b) {
// 	if(is_numeric($a) && is_numeric($b) && $b != 0){
//     	echo $a / $b . PHP_EOL;
//     } else {
//     	error($a, $b);
//     }
// }

// function modulus($a, $b) {
// 	if(is_numeric($a) && is_numeric($b) && $b != 0){
//     	echo $a % $b . PHP_EOL;
//     } else {
//     	error($a, $b);
//     }
// }

// function error($a, $b){
// 	if($b == 0){
//     	echo "Warning: cannot divide by zero: ";
//     } else {
//     	echo "ERROR: Both arguments must be numbers\n";
//     }
// }

// add(3, 9);
// subtract(3, 9);
// multiply(3, 9);
// divide(3, 0);
// modulus(3, 0);
// add(array(1,2,3), true);


// Refactored functions that return results, rather than explicitly echoing them
function add($a, $b) {
	if(is_numeric($a) && is_numeric($b)){
    	return $a + $b;
    } else {
    	error($a, $b);
    }
}

function subtract($a, $b) {
    if(is_numeric($a) && is_numeric($b)){
    	return $a - $b;
    } else {
    	error($a, $b);
    }
}

function multiply($a, $b) {
	if(is_numeric($a) && is_numeric($b)){
    	return $a * $b;
    } else {
    	error($a, $b);
    }
}

function divide($a, $b) {
	if(is_numeric($a) && is_numeric($b) && $b != 0){
    	return $a / $b;
    } else {
    	error($a, $b);
    }
}

function modulus($a, $b) {
	if(is_numeric($a) && is_numeric($b) && $b != 0){
    	return $a % $b;
    } else {
    	error($a, $b);
    }
}

function error($a, $b){
	if($b == 0){
    	echo "Warning: cannot divide by zero";
    } else {
    	echo "ERROR: Both arguments must be numbers\n";
    }
}

$sum = add(3, 9);
echo "The sum of 3 and 9 is $sum\n";
$difference = subtract(3, 9);
echo "The difference between 3 and 9 is $difference\n";
$product = multiply(3, 9);
echo "The product of 3 and 9 is $product\n";
echo "The quotient of 3 and 0 is $quotient\n";
$quotient = divide(3, 0);
echo "The remainder when 3 is divided by 0 is $remainder\n";
$remainder = modulus(3, 0);
echo "When you try to add an array with a boolean you get $summError\n";
$summError = add(array(1,2,3), true);

?>