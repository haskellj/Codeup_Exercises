<?php

// Open, read, save the contents, then close the file
	$filename = 'report.txt';
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	fclose($handle);

// TODO: Output should be:
// Ordered by sales units (high to low)
// Columns should appear as: Sales Units | Full Name | Employee Number

// Create a function that parses txt file into an array by exploding each line into an array element
	$contentsArray = explode("\n", $contents);
// Delete the line dividers
	$equalsLineDivider = "===================================================";
	$asteriskLineDivider = "***************************************************";
	$oldHeader = "Employee Number, First Name, Last Name, Sales Units";
	$dividers = array($equalsLineDivider, $asteriskLineDivider, $oldHeader);
	$contentsArray = array_diff($contentsArray, $dividers);
	// print_r($contentsArray);
// Separate first 3 elements (to get rid of unnecessary top content) into their own array for later use
	$reportHeaderArray = array_slice($contentsArray, 0, 3);
	$contentsArray = array_slice($contentsArray, 3);
	// print_r($reportHeaderArray);
	// print_r($contentsArray);
// foreach loop through each line and explode on the commas, creating smaller arrays containing 3 elements each
// Change the numeric indices to strings by pushing onto a new empty array with predefined indices at each pass of the loop
	foreach($contentsArray as $key => $eachEmployeeData){
		$employeeStats = explode(', ', $eachEmployeeData);
		$parentArray[$key]['Employee Number'] = $employeeStats[0];	// Renames the 0 index to 'Employee Numeber'
		$parentArray[$key]['First Name'] = $employeeStats[1];	//Renames the 1 index to 'First Name'
		$parentArray[$key]['Last Name'] = $employeeStats[2];	//Renames the 2 index to 'Last Name'
		$parentArray[$key]['Unit Sales'] = $employeeStats[3];	//Renames the 3 index to 'Unit Sales'
	}
	// print_r($parentArray);


// Then sort this new array by "Sales Units"
	// The following function was found on PHP.net under the 'sort' documentation
	function array_sort($array, $on, $order=SORT_ASC)
	{
	    $new_array = array();
	    $sortable_array = array();

	    if (count($array) > 0) {
	        foreach ($array as $k => $v) {
	            if (is_array($v)) {
	                foreach ($v as $k2 => $v2) {
	                    if ($k2 == $on) {
	                        $sortable_array[$k] = $v2;
	                    }
	                }
	            } else {
	                $sortable_array[$k] = $v;
	            }
	        }

	        switch ($order) {
	            case SORT_ASC:
	                asort($sortable_array);
	            break;
	            case SORT_DESC:
	                arsort($sortable_array);
	            break;
	        }

	        foreach ($sortable_array as $k => $v) {
	            $new_array[$k] = $array[$k];
	        }
	    }

	    return $new_array;
	}

	$sortedBySalesArray = array_sort($parentArray, 'Unit Sales', SORT_DESC); // Sort decending order: highest to lowest
	// print_r($sortedBySalesArray); 


// Echo the Header information
	echo $asteriskLineDivider."**************************".PHP_EOL;
	echo "$reportHeaderArray[2]	|	$reportHeaderArray[1]	|	$reportHeaderArray[0]".PHP_EOL;
	echo $equalsLineDivider."==========================".PHP_EOL;
	echo "Sales Units 	|	Employee Name 		|	Employee Number".PHP_EOL;
	echo "_____________________________________________________________________________".PHP_EOL;
// Create a function that foreach loops through the new global array, and: 
// echo "$Array[$key]['Sales Units'] 		|	$Array[$key]['First Name'] $Array[$key]['Last Name'] 		|	$Array[$key]['Employee Number']";
	foreach($sortedBySalesArray as $employee){
		// echo "\t".$employee['Unit Sales']."\t\t".$employee['First Name']." ".$employee['Last Name']."\t\t\t".$employee['Employee Number'].PHP_EOL;
		$sales = $employee['Unit Sales'];
		$name = $employee['First Name']." ".$employee['Last Name'];
		$employeeNum = $employee['Employee Number'];
		
		// One formatting option:
		// printf("%' 8d%' 32s%' 25u\n", $sales, $name, $employeeNum);

		// Nicer formatting option:
		 $format = str_pad($sales, 15, " ", STR_PAD_BOTH);
		 $format .= str_pad($name, 35, " ", STR_PAD_BOTH);
		 $format .= str_pad($employeeNum, 25, " ", STR_PAD_BOTH).PHP_EOL;
		 echo $format;
	}










