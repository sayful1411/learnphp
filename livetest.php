<?php 
/**
 * Module 3
*/
// Write a function that takes an array of integers and a target sum as input, and returns a boolean indicating whether there exists a pair of integers in the array that add up to the target sum. You can assume the array has at least two elements and all elements are unique. Use a loop in your solution.
function hasPairWithSum($array, $sum) {
    $num_elements = count($array);
    for ($i = 0; $i < $num_elements; $i++) {
        for ($j = $i + 1; $j < $num_elements; $j++) {
            if ($array[$i] + $array[$j] == $sum) {
                return true;
            }
        }
    }
    return false;
}

echo hasPairWithSum([5, 7, 1, 2, 8, 4, 3], 8);

/**
  * Module 2
*/
// Write a program to check student grades based on the marks.
//If marks are 60% or more, the grade will be First Division.
//If marks are between 45% to 59%, the grade will be Second Division.
//If marks are between 33% to 44%, the grade will be Third Division.
//If marks are less than 33%, the student will  Fail.
    $marks = 82;
    if ($marks >= 60 && $marks <= 100) {
        echo "First Division";
    } elseif ($marks >= 45 && $marks < 60) {
        echo "Second Division";
    } elseif ($marks >= 33 && $marks < 45) {
        echo "Third Division";
    } else {
        echo "Fail";
    }

/**
 * Module 4
 */
// Write a PHP function to find the longest word in a string?

function findLongestWord($string) {
    // Split the string into an array of words
    $words = explode(" ", $string);
  
    // Initialize the longest word variable
    $longestWord = "";
  
    // Loop through each word and compare its length to the length of the longest word
    foreach ($words as $word) {
      if (strlen($word) > strlen($longestWord)) {
        $longestWord = $word;
      }
    }
  
    // Return the longest word
    return $longestWord;
}
  
echo findLongestWord("The quick brown fox jumped over the lazy dog");  