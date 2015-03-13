<?php

// Create array to hold list of todo items
$items = array();

//Implement sorting options
    function sort_menu($bull)
    {
        //Show menu options
        echo "(A)-Z, (Z)-A, (O)riginal order, (R)everse original order: ";
        //Get user input
        $type = trim(fgets(STDIN));

        //Take action base on input
        if($type == 'A'){
            asort($bull);
            return $bull;
        } elseif($type == 'Z'){
            arsort($bull);
            return $bull;
        } elseif($type == 'O'){
            ksort($bull);
            return $bull;
        } elseif($type == 'R'){
            krsort($bull);
            return $bull;
        } else {
            return;
        }
    }

// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline
        echo "[{$key}] {$item}\n";
    }

    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort list, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = trim(fgets(STDIN));

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key]);
    } elseif ($input == 'S'){
        $items = sort_menu($items);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);