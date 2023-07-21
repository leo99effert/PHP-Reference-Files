<?php

$lost = [4,8,15,16,23,42];
$digits = [0,1,2,3,4,5,6,7,8,9];

echo '<pre>';

print_r(array_diff($lost,$digits)); // which values in a is not in b


// which values is not exactly same (same value and index)
print_r(array_diff_assoc($lost,$digits)); 

