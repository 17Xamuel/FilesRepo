<?php
function pre_r($aray){
    echo '<pre>';
    print_r($aray);
    echo '</pre>';
}


// scandir();
// opendir() and readdir()

$local_dir = 'C:\xampp\htdocs\academic\users\assets\uploads\papers';
$files = scandir($local_dir);

// array_diff()
$files = array_diff($files,array('.','..'));

// array values to reset it to begin from 1
$files = array_values($files);
pre_r($files);
