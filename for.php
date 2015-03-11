<?php
	
	// Prompt the user
	fwrite(STDOUT, "Choose a starting number.\n");

	// Capture user input (Note: trim() is necessary because fgets parses into a string and 
	// registers the ENTER keypress as a part of that string)
	$choice1 = trim(fgets(STDIN));

	if(!is_numeric($choice1)){
		echo "Integers only please.\n";
		$choice1 = trim(fgets(STDIN));
	}

	// Prompt user again (Note: trim() cuts off unecessary spaces and ENTER keypresses)
	fwrite(STDOUT, "Choose an ending number.\n");

	// Capture user input
	$choice2 = trim(fgets(STDIN));

	if(!is_numeric($choice2)){
		echo "Integers only please.\n";
		$choice2 = trim(fgets(STDIN));
	}

	// Prompt user again (Note: trim() cuts off unecessary spaces and ENTER keypresses)
	fwrite(STDOUT, "How much would you like me to increment by each time?\nIncrement by: ");

	// Capture user input
	// $choice3 = 1;	//if the user does not choose
	$choice3 = trim(fgets(STDIN));

	if(!is_numeric($choice3)){
		echo "Integers only please.\n";
		$choice3 = trim(fgets(STDIN));
	}


	echo "Here are all the numbers from $choice1 to $choice2, incrementing by $choice3:\n";

	for ($i = $choice1; $i <= $choice2; $i += $choice3){
		echo $i.PHP_EOL;
	}



?>