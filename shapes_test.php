<?php

	require_once 'rectangle.php';
	require_once 'square.php';

	// $newRectangle = new Rectangle(4, 5);
	// echo "The area of a rectangle of height " . $newRectangle->height 
	// 					. " units and width " . $newRectangle->width . " units, is: " 
	// 					. $newRectangle->area() . " units^2" . PHP_EOL;

	$newSquare = new Square(2.5);
	echo "Height: " . $newSquare->height . PHP_EOL;
	echo "Width: " . $newSquare->width . PHP_EOL;
	echo "Area: " . $newSquare->area() . PHP_EOL;
	echo "Perimeter: " . $newSquare->perimeter() . PHP_EOL;