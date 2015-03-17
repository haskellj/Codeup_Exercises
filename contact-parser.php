<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    // echo $contents;
    
    // Create an inital array of the contents by exploding based on the end of a line
    $contentsArray = explode("\n", $contents);
    // print_r($contentsArray);

    // Create smaller arrays within the large array by exploding each element at the pipes "|"
    // Delete old elements and replace them with the new small arrays
    foreach ($contentsArray as $element) {
    	$contentsArray[] = explode('|', $element);
    	array_shift($contentsArray);	
    }
    // Change the numeric key values to strings by combining an array of strings with each small array
    // Reformat phone numbers to include hyphen ###-###-####
    $key = array("name", "number");
    foreach ($contentsArray as $innerArray) {
	    $contact = array_combine($key, $innerArray);
	    $contact["number"] = substr($contact["number"], 0, 3)."-".substr($contact["number"], 3, 3)."-".substr($contact["number"], 6);
		$contacts[] = $contact;
    }
    
    fclose($handle);
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));


// Another option for changing the keys to strings and formatting the phone number
foreach($contentsArray as $key => $innerArray){
	$contact = explode("|", $innerArray);
	$newArray[$key]['name'] = $contact[0];	// name

	$contact[1] = substr($contact["number"], 0, 3)."-".substr($contact["number"], 3, 3)."-".substr($contact["number"], 6);	//format the phone number

	$newArray[$key]['phone'] = $contact[1];	// phone number
}










