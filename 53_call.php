<?php

// copy all the code from another file
require_once '52_fn.php';

example();

#               require vs include
// require cancels the program if the file is missing
// include just gives a warning


#               include_once vs include
// include creates the risk of copying the code multiple times
// wich will brake the program