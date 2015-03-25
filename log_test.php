<?php

	// link to the Log class
	require_once 'Log.php';

// Prior to __construct() and __destruct() being included in the Log class
	// Create an instance of the Log class
	// $logEntry = new Log();

	// Call the methods (a.k.a. functions within the class using this insance)
	// $logEntry->logInfo("This is a test of the logInfo function");
	// $logEntry->logError('This is a test of the logError function');

// After __construc() and __destruct() are included in the Log class
	// Create an instance of the Log class
	$newEntry = new Log('client');
	$newEntry->logInfo('This is a test of the logInfo() function along with the __construct() function');
	$newEntry->logError('This is a test of the logError() function along with the __construct() function');
	$newEntry->logInfo("Don't worry, the __destruct() function closed the file for us");
	// Check if default $prefix works if not parameter is passed for a new object
	$anotherEntry = new Log();
	$anotherEntry->logInfo("Did not passing a parameter default to a 'log' prefix on the filename?");

?>

