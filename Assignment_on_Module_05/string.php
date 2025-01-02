<?php
    $strings = ["Hello", "World", "PHP", "Programming"];

    foreach ($strings as $string) { 
        $vowel_count = preg_match_all('/[aeiouAEIOU]/', $string);

        $reversed_string = strrev($string);

        echo "Original String: $string, Vowel Count: $vowel_count, Reversed String: $reversed_string <br>";
    }
?>
