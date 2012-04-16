<?php
    foreach (scandir('.',1) as $f) {                // go through all files and folders in this directory in reverse alphabetic order
        if (is_dir($f) && substr($f,0,1)=='2') {    // if it is a directory and starts with '2'
            break;                                  // save the link to it
        }
    }
    if (!isset($_COOKIE['lang'])) 
        setcookie('lang', 'en');
    header('Location: '.$f);
?>