<?php

// Create array to hold list of todo items
$items = array();
    
    //Implement sorting options when called by loop
    function sort_menu($bull)
    {
        //Show menu options
        echo "(A)-Z, (Z)-A, (O)riginal order, (R)everse original order: ";
        //Get user input, using trim() to remove special characters, and strtoupper() to uppercase user input
        $type = trim(fgets(STDIN));
        $type = strtoupper($type);

        //Take action based on input
        if($type == 'A'){
            asort($bull);
        } elseif($type == 'Z'){
            arsort($bull);
        } elseif($type == 'O'){
            ksort($bull);
        } elseif($type == 'R'){
            krsort($bull);
        }
        
        return $bull;
    }

// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline, starting with 1 instead of zero
        $key++;
        echo "[{$key}] {$item}\n";
    }

    // Show the menu options
    echo '(N)ew item, (R)emove specific item, (S)ort list, (Q)uit: ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = trim(fgets(STDIN));
    // Use strtoupper() to make all input upper case
    $input = strtoupper($input);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $newItem = trim(fgets(STDIN));
        // Give them an option to add it to the front or end of array
        echo "(B)eginning or (E)nd of the list? ";
        $where = strtoupper(trim(fgets(STDIN)));
        if($where == 'B'){
            array_unshift($items, "$newItem");
        } elseif ($where == 'E'){
            array_push($items, "$newItem");     // does the same thing as the last 'else', just different syntax
        } else {
            $items[] = $newItem;
        }

    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key, subtract one because the zero key was skipped (see $key++ in foreach loop)
        $key = trim(fgets(STDIN));
        $key--;
        // Remove from array
        unset($items[$key]);
    } elseif ($input == 'S'){
        $items = sort_menu($items);
    } elseif ($input == 'F'){
        array_shift($items);
    } elseif ($input == 'L'){
        array_pop($items);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);