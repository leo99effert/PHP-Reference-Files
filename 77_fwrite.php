<?php

//$handle = fopen('log.txt','w'); // delete content and then write

$handle = fopen('log.txt','a'); // append

fwrite($handle,'abcd'); 

fclose($handle);