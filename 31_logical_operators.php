<?php

# && and 
var_dump(true and true); // both must be true
var_dump(true && true);
echo '<br>';

# || or
var_dump(true or false); // one or two must be true
var_dump(true || true);
echo '<br>';

# ^ xor
var_dump(true xor false); // one must be true and one must be false
var_dump(false ^ true);
echo '<br>';

# !
var_dump(!false); // reverse result
echo '<br>';

# symbols happen before words
var_dump(true && false or false); // false or false
var_dump(true and false || true); // true and true