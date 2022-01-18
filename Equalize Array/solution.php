<?php
$arr =  [3, 3, 2, 1, 3];
$arr_length = count($arr);
$max_value_count = max(array_count_values($arr));
$min_deletion = $arr_length - $max_value_count;
return $min_deletion;
