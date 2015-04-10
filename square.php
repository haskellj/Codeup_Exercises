<?php

	require_once 'rectangle.php';

	class Square extends Rectangle
	{
		public function __construct($sideLength)
		{
			parent::__construct($sideLength, $sideLength);
		}

		public function perimeter()
		{
			return 4 * ($this->getWidth());
		}

	}

	// The Square class inherits the height and width construction from the Rectangle class