<?php
// $birds_array =  [1, "hello", 1, "world", "hello", 1, 'world', 'world', 'world'];

#1 Read contents from file
$file = file_get_contents('./birds_array.php');

#2 Convert to array
$birds_array = explode(" ", $file);

#3 Sort array in ascending order
sort($birds_array);

#4 Use the array_count_values function to get the number of duplicate values of each element in the array
$count_birds = array_count_values($birds_array);

// print_r($count_birds);
#5 Return the key of the element in array which appears most
echo array_search(max($count_birds), $count_birds);
