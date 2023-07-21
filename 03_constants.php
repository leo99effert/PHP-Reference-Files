<?php

// constants is created with define()
define('GRADE', 'A+'); // constans names are in capital letters (and without $)

echo defined('GRADE').'<br>';

echo PHP_INT_MAX.'<br>';
echo PHP_INT_MIN.'<br>';

// "magic constants" (pre defined constants)
echo __LINE__.'<br>';
echo __DIR__.'<br>';
echo __FILE__;



