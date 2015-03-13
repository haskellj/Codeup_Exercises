<?php

	$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

	$physicistsArray = explode(', ', $physicistsString);
	// print_r($physicistsArray);
	$removed = array_pop($physicistsArray);
	// echo $removed;

	$addedBack = array_push($physicistsArray, "and $removed");

	$famousFakePhysicists = implode(', ', $physicistsArray);


	 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

?>