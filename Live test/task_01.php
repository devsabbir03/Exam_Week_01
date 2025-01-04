<?php

// Given array of random strings
$randomStrings = ["Apple", "banana", "Apricot", "grape", "avocado", "Mango", "almond"];

// Filter strings that start with the letter A (case-insensitive)
$filteredArray = array_filter($randomStrings, function($string) {
    return stripos($string, 'A') === 0;
});

// Convert all the strings in the filtered array to uppercase
$upperCaseArray = array_map('strtoupper', $filteredArray);

// Display the resulting array
print_r($upperCaseArray);

?>
