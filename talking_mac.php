<?php

	//Make your Mac talk
	$d = 2;

	while ($d > 0){
		echo `say this computer will self-destruct in $d seconds`;
		$d--;
	}

	if ($d == 0){
		echo `say kaboom!`;
	}

	echo `say happy birthday to you`;
	usleep(2000);
	echo `say happy birthday to you`;
	usleep(2000);
	echo `say happy birthday dear Benny`;
	usleep(2000);
	echo `say happy birthday to you`;

?>