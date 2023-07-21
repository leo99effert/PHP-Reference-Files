<?php

// printf - format and print
printf('The name is %s, the age is %d','Leo',24);
echo '<br>'.'<br>';

// sprintf - format without print
echo sprintf('%f',123);
echo '<br>'.'<br>';

// str_pad - format with padding
echo str_pad(777,10,'0',STR_PAD_LEFT);
echo '<br>';
echo str_pad(13,10,'0',STR_PAD_LEFT);
echo '<br>'.'<br>';

// number_format 
$amount = 1000000;
echo '&euro;'.number_format($amount,2,',',' ');
echo '<br>';
echo '&#163;'.number_format($amount);
echo '<br>';
echo '&#36;'.number_format($amount,2,'.');
echo '<br>';
echo number_format($amount,2,'.','');