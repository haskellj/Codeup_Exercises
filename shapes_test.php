<?php

	require_once 'rectangle.php';
	require_once 'square.php';

	$newRectangle = new Rectangle(4, 5);
	echo "The area of a rectangle of height " . $newRectangle->getHeight() 
						. " units and width " . $newRectangle->getWidth() . " units, is: " 
						. $newRectangle->area() . " units^2" . PHP_EOL;

	$newSquare = new Square(2.5);
	echo "Height: " . $newSquare->getHeight() . PHP_EOL;
	echo "Width: " . $newSquare->getWidth() . PHP_EOL;
	echo "Area: " . $newSquare->area() . PHP_EOL;
	echo "Perimeter: " . $newSquare->perimeter() . PHP_EOL;