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
function add($a, $b) {
	if(is_numeric($a) && is_numeric($b)){
    	echo $a + $b . PHP_EOL;
    } else {
    	error($a, $b);
    }
}

function subtract($a, $b) {
    if(is_numeric($a) && is_numeric($b)){
    	echo $a - $b . PHP_EOL;
    } else {
    	error($a, $b);
    }
}

function multiply($a, $b) {
	if(is_numeric($a) && is_numeric($b)){
    	echo $a * $b . PHP_EOL;
    } else {
    	error($a, $b);
    }
}

function divide($a, $b) {
	if(is_numeric($a) && is_numeric($b) && $b != 0){
    	echo $a / $b . PHP_EOL;
    } else {
    	error($a, $b);
    }
}

function modulus($a, $b) {
	if(is_numeric($a) && is_numeric($b) && $b != 0){
    	echo $a % $b . PHP_EOL;
    } else {
    	error($a, $b);
    }
}

function error($a, $b){
	if($b == 0){
    	echo "Warning: cannot divide by zero: ";
    	echo "$a % $b\n";
    } else {
    	echo "ERROR: Both arguments must be numbers\n";
    }
}

add(3, 9);
subtract(3, 9);
multiply(3, 9);
divide(3, 0);
modulus(3, 0);
add(array(1,2,3), true);

?>