<?php

	$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
	$physicistsArray = explode(', ', $physicistsString);
	// print_r($physicistsArray);

	function humanizedList($passedArray, $sort = false){
		//Alphabetize the list by first name if user passes a 'true' as 2nd argument
		if($sort){
			asort($passedArray);
		}
		// Remove the last person from the list
		$removed = array_pop($passedArray);
		// echo $removed;
		// Add the last person back with 'and' in front of them
		array_push($passedArray, "and $removed");
		return $humanizedArray = implode(', ', $passedArray);
	}

	$famousFakePhysicists = humanizedList($physicistsArray);
	echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";

	$famousFakePhysicists = humanizedList($physicistsArray, true);
	echo "The same list in alphabetical order is: {$famousFakePhysicists}.\n";
?>