<?php

$handle = fopen('log.txt','r'); // read

$content = fread($handle,filesize('log.txt'));

echo $content;

fclose($handle);