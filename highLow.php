<?php
	//Global variable that will break the loop when user guesses correctly
	//And another that keeps track of the number of guesses
	$play = true;
	$tries = 1;

	//Generate random number
	$rand = mt_rand(1, 100);

	// Prompt the user
	fwrite(STDOUT, "I've chosen a random number between 1 and 100.\nCan you guess it?\n");

	// Get the input from user
	// Note that if they enter a string, (int) will equate their guess to 0
	$guess = (int) fgets(STDIN);
	// $guess = trim(is_numeric(fgets(STDIN)));	//would have also worked

	// Conditionals dependent on user input
	// Loop through until they guess the correct number
	while($play){
		if ($guess == $rand){
			fwrite(STDOUT, "GOOD GUESS! You got it in $tries guesses!\n");
			$play = false;
		} else if ($guess > $rand){
			fwrite(STDOUT, "LOWER\n");
			$guess = fgets(STDIN);
			$tries++;
		} else if ($guess < $rand && $guess != 0){	//the last part is in case they enter a string
			fwrite(STDOUT, "HIGHER\n");
			$guess = fgets(STDIN);
			$tries++;
		} else {
			fwrite(STDOUT, "I didn't catch that, please guess again.\n");
			$guess = fgets(STDIN);
		}
	}
?>