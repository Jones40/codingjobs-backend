<?php


// Maximum tries
$tries = 3;

while ($tries > 0) {
    $answer = readline('Enter file name : ');

    try {
        // Check if the file exists
        if (!file_exists($answer)) {
            // If not, throw an exception
            throw new Exception('file dosnt exists');
        }

        // Open and read the file
        $fHandle = fopen($answer, 'r');

        while (!feof($fHandle)) {
            echo fgets($fHandle) . "\n";
        }

        fclose($fHandle);

        // No more chances, we opened the file
        $tries = 0;
    } catch (Exception $e) {
        echo "File doesnt exists. One more chance.\n";
        /* File doesnt exists.
        We're removing one chance on the user trials */
        $tries--;

        // If he failed all 3 trials :
        if ($tries == 0)
            echo 'Too much trials';
    }
}







/*

	For this exercise, you should use PHP in console.
	You can use readline() function to expect an input from the user.
	https://www.php.net/manual/fr/function.readline.php

	- Part 1

		A program asks the user for a file name.
		For now, the program does nothing else.

	- Part 2

		Now, when the user enters the name of the file, the program will read this file and then display the contents of it.

		You must handle the case where the file does not exist.

	- Part 3

		In case the file does not exist, give the user an additional chance to enter a new file name.
		The user has 3 chances for enter a valid filename.
*/