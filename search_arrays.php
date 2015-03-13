<?php

	// first names
	$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Bill', 'George'];

	$otherNames = ['Amy', 'Dean', 'Mel', 'Tina', 'George', 'Michael'];

	// Create a function that returns TRUE or FALSE if an array value is found. 
	function search($person, $array){
		$key = array_search($person, $array);
		echo "\$key is $key\n";
		//use is_numeric(), otherwise a key of zero will return false
		if(is_numeric($key)){
			// return 'TRUE';
			return $key;
		} else {
			// return 'FALSE';
			return;
		}
	}

	// echo search('Tina', $names).PHP_EOL;
	// echo search('Bob', $names).PHP_EOL;
	// echo search('Tito', $names).PHP_EOL;
	// echo search('Mike', $names).PHP_EOL;
	// echo search('Mike', $otherNames).PHP_EOL;
	// echo search('Amy', $otherNames).PHP_EOL;
	
	// Create a function to compare 2 arrays that returns the number of values in common.
	function comparison($array1, $array2){
		$numInCommon = 0;
		foreach($array1 as $person){
			echo "{$person}'s ";
			$key = search("$person", $array2);
			if(is_numeric($key)){
				$numInCommon++;
			}
		}
		return $numInCommon;
	}

	echo "Names in common: " . comparison($names, $otherNames).PHP_EOL;




