<?php
	// Loop through the lyrics, counting down one at a time
	// say bottle (singular) when there is only 1 bottle
	// say No more bottles when there are 0 bottles 
	for($b = 3; $b >= 0; $b--){
		if($b == 1){
			echo `say $b bottle of beer on the wall, `;
			echo `say $b bottle of beer. `;
			echo `say Take one down, pass it around, `;
			echo `say No more bottles of beer on the wall. `;
			usleep(500000);
		} elseif($b == 0){
			echo `say No more bottles of beer on the wall, `;
			echo `say No more bottles of beer. `;
			echo `say Go to the store and buy some more, `;
			echo `say 99 bottles of beer on the wall. `;
			usleep(500000);
		} else {
			echo `say $b bottles of beer on the wall, `;
			echo `say $b bottles of beer. `;
			echo `say Take one down, pass it around, `;
			if ($b == 2){
				echo `say 1 bottle of beer on the wall. `;
				usleep(500000);
			} else {
				$c = $b - 1;
				echo $c. `say $c bottles of beer on the wall. `;
				usleep(500000);
			}
		}
	}



?>