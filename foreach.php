<?php

	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, 12 + 7, false, (string) 11);

	foreach($things as $element){
		if(is_integer($element)){
			echo "$element is an integer ";
		} elseif(is_float($element)){
			echo "$element is a float ";
		} elseif(is_bool($element)){
			echo "$element is a boolean ";
		} elseif(is_array($element)){
			echo "\$element is an array, whose elements are: ".implode($element, ", ").PHP_EOL;
			// Or instead of .implode(), you can use a nested foreach loop:
			// foreach($element as $innerArray){
			// 	echo $innerArray.PHP_EOL;
			// }
			
		} elseif (is_null($element)){
			echo "$element is null ";
		} elseif(is_string($element)){
			echo "$element is a string ";
		}
		if(is_scalar($element)){
			echo "and is also scalar.\n";
		} else {
			echo "and is also a non-scalar element of this array.\n";
		}
	}
?>