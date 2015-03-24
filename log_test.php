<?php

	date_default_timezone_set('America/Chicago');
	$date = date('Y-m-d');

	// link to the Log class
	require_once 'Log.php';

	// Instantiate the Log class
	$logEntry = new Log();

	// Assign a file to the filename property inside the instance of the Log class
	$logEntry->filename = "log {$date}.log";

	// Call the methods (a.k.a. functions within the class using this insance)
	$logEntry->logInfo("This is a test of the logInfo function");
	$logEntry->logError('This is a test of the logError function');

?>

