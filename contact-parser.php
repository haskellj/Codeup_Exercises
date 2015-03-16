<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    $handler = fopen($filename, 'r');
    $contents = fread($handler, filesize($filename));
    echo $contents;
    // Create an inital array of the contents by exploding based on the end of a line
    $contentsArray = explode("\n", $contents);
    print_r($contentsArray);

    // Create smaller arrays within the large array by exploding each element at the pipes "|"
    // Delete old elements and replace them with the new small arrays
    foreach ($contentsArray as $element) {
    	$contentsArray[] = explode('|', $element);
    	array_shift($contentsArray);	
    }
    // Change the numeric key values to strings by combining an array of strings with each small array
    $key = array("name", "number");
    foreach ($contentsArray as $element) {
    	$contacts[] = array_combine($key, $element);
    }
    foreach($contacts as $element){
    	$element["number"] = substr($element["number"], 0, 3)."-".substr($element["number"], 3, 3)."-".substr($element["number"], 6);
    	var_dump($element);
    }

    fclose($handler);
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));



// foreach ($element as $key => $value) {
//     		if($key == 0){
//     			$newInnerArrays[] = "name" 
//     		} elseif ($key == 1){

//     		}
