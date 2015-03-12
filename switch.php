 <?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 // See php documentation for explanations of 'flags' that can be passed into date()
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
         // Output Monday
     	echo "Monday\n";
     	break;
     case 2:
         // Output Tuesday
     	echo "Tuesday\n";
     	break;
     case 3:
     	echo "Wednesday\n";
     	break;
     case 4:
     	echo "Thursday\n";
     	break;
     case 5:
     	echo "Friday\n";
     	break;
     case 6:
     	echo "Saturday\n";
     	break;
     case 7:
     	echo "Sunday\n";
     	break;
     default:
     	echo date('l');
 }
