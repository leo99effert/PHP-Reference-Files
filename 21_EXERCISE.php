<?php
            //STRINGS EXERCISE

/*
(1) Write 'multiline text' that will store the html code below.
Store the year '1994' in a variable and make sure the variable will be evaluated.
   
   <h1>PHP</h1>
   <p>Php is a server-side scripting language.<p/>
   <p>It was concieved in 1994 by Rasmus Lerdorf<p/>
*/

$year = 1994;
$text = <<< HEREDOC
<h1>PHP</h1>
<p>Php is a server-side scripting language.<p/>
<p>It was concieved in $year by Rasmus Lerdorf<p/>
HEREDOC;
echo $text.'<br>';

/* 
(2) Format the amount of 5679.6791 .The amount must have 2 decimal places ,a thousand seperator of ',' and a decimal seperator of "." . Display the amount in Indian rupees.
*/

$amount = 5679.6791;
echo '&#8377;'.number_format($amount,2,'.',',');
 
