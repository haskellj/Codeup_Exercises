<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function check($variable, $variable_name){
	if(isset($variable)){
		echo "$variable_name is SET\n";
	} elseif(empty($variable)){
		echo "$variable_name is EMPTY\n";
	} 
}

// TEST: If var $nothing is set, display '$nothing is SET'
check(!$nothing, '!$nothing');

// TEST: If var $nothing is empty, display '$nothing is EMPTY'
check($nothing, '$nothing');

// TEST: If var $something is set, display '$something is SET'
check($something, '$something');

// TEST: If var $something is empty, display '$something is EMPTY'
check(!$something, '!$something');

// Serialize the array $array, and output the results
echo $serializedArray = serialize($array).PHP_EOL;

// Unserialize the array $array, and output the results
$unserializedArray = unserialize($serializedArray);
print_r($unserializedArray).PHP_EOL;