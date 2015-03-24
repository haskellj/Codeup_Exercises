<?php

	// link to the Log class
	require_once 'Log.php';

	// Create an instance of the Log class
	$logEntry = new Log();

	// Call the methods (a.k.a. functions within the class using this insance)
	$logEntry->logInfo("This is a test of the logInfo function");
	$logEntry->logError('This is a test of the logError function');

?>

