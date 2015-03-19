<?php

$inputFile  = 'movies.txt';
$outputFile = 'sorted_movies.txt';

/**
 * Read in a file, return contents as an array
 **/
function readLines($inputFile)
{
	$filename = $inputFile;
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contentsArray = explode("\n", $contents);
	fclose($handle)
	return $contentsArray;
}

/**
 * Write contents of an array to a file
 **/
function writeLines($outputFile, $moviesArray)
{
	$filename = $outputFile;
	$handle = fopen($filename, 'w+');
	$moviesList = implode("\n", $moviesArray);
	fwrite($handle, $moviesList);
	fclose($handle)
}

// /**
//  * Pick a random movie from an array
//  **/
function randomMovie($movies)
{
	$randomKey = array_rand($movies);
	return $movies[$randomKey];
}

$movies = readLines($inputFile);		// movies is an unsorted array at this point 
$randomMovie = randomMovie($movies);

echo "Let's watch " . $randomMovie . "!\n";
echo "But " . $randomMovie . " really sucks!\n";

sort($movies);	// Alphabetizes the movies array before writing it to a new file:
writeLines($outputFile, $movies);