<?php

$greeting = 'good morning';

echo $greeting;
echo '<br><br>';
echo 'Words: '.str_word_count($greeting);
echo '<br>';
echo 'Length: '.strlen($greeting);
echo '<br>';
echo 'Substring: '.substr($greeting,5);
echo '<br>';
echo 'Substring: '.substr($greeting,5,3);
echo '<br>';
echo 'Search for \'in\': '.strpos($greeting,'in');
echo '<br>';
echo 'Search for \'o\' after index 3: '.strpos($greeting,'o',3);
echo '<br>';
echo 'Search for the last \'g\': '.strrpos($greeting,'g');
echo '<br>';
echo 'Search for \'D\' and ignoring case: '.stripos($greeting,'D');
echo '<br>';
echo 'replace part of string: '.str_replace('morning','evening',$greeting);
echo '<br>';
echo 'String contains \'mo\': '.str_contains($greeting,'mo');
echo '<br>';
echo 'String starts with \'go\': '.str_starts_with($greeting,'go');
echo '<br>';
echo 'String ends with \'morning\': '.str_ends_with($greeting,'morning');
echo '<br>';
echo strtoupper($greeting).' '.strtolower($greeting);
echo '<br>';
echo 'starts with uppercase: '.ucfirst($greeting);
echo '<br>';
echo 'starts with lowercase: '.lcfirst($greeting);
echo '<br>';
echo 'all words starts with uppercase: '.ucwords($greeting);