<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    $handler = fopen($filename, 'r');
    $contents = fread($handler, filesize($filename));
    // Test:
        // echo $contents;

    // Create an inital array of the contents by exploding based on the end of a line
    $contentsArray = explode("\n", $contents);
    // Test:
        // print_r($contentsArray);

    // Create smaller arrays within the large array by exploding each element at the pipes "|"
    // Delete old elements, one at a time, from the front and replace them with the new small arrays
    // from the back.
    foreach ($contentsArray as $element) {
    	$contentsArray[] = explode('|', $element);
    	array_shift($contentsArray);	
    }
    // Test:
    //     print_r($contentsArray);

    // Change the numeric key values to strings by combining an array of strings with each small array
    $key = array("name", "number");
    foreach ($contentsArray as $innerArray) {
    	$newKeysArray[] = array_combine($key, $innerArray);
    }
    // Test:
        // print_r($newKeysArray);

    // Format the phone numbers to include hyphens: ###-###-####
    foreach($newKeysArray as $eachInnerArray){
    	$eachInnerArray["number"] = substr($eachInnerArray["number"], 0, 3)."-".substr($eachInnerArray["number"], 3, 3)."-".substr($eachInnerArray["number"], 6);
        $contacts[] = $eachInnerArray;
    }

    fclose($handler);
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));

