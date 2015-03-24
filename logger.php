<?php

function logMessage($logLevel, $message)
{
	date_default_timezone_set('America/Chicago');
	$date = date('Y-m-d');

    // Create a new log file each day, with the date in the filename
    $filename = "log {$date}.txt";
    $handle = fopen($filename, 'a+');
    fwrite($handle, PHP_EOL.date("Y-m-d H:i:s") . " [$logLevel] $message");
    fclose($handle);
}

function logInfo($message){
	logMessage("INFO", $message);
}

function logError($message){
	logMessage("ERROR", $message);
}

logInfo("This is an informational message.");
logError("An error has occurred.");