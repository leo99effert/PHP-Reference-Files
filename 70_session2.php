<?php

// phpinfo();

session_start(); // resuming session

if(isset($_SESSION['id'])){
    echo $_SESSION['id'];
}

if(isset($_SESSION['user'])){
    echo $_SESSION['user'];
}

// unset($_SESSION['id']); // remove one session

// session_unset(); // remove all sessions

// session_destroy(); // remove session file

echo count($_SESSION); // get number of session 