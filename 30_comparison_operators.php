<?php

# ==,!=,===,!===,>,>=,<,<=,<=>

echo '1 == \'1\'<br>';
var_dump(1=='1');
echo '<br>';

echo '1 === \'1\'<br>';
var_dump(1==='1');
echo '<br>';

echo '1 > \'1\'<br>';
var_dump(1 >= '1');
echo '<br>';

echo '1 > \'1\'<br>';
var_dump(1 <=> '1'); // left: 1, right: -1, neither: 0
echo '<br>';