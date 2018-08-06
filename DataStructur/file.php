<?php
$file = "/var/www/html/DataStructur/Unorderd.txt";
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "John Smith hhhjjjj\n";
// Write the contents back to the file
file_put_contents($file, $current);
?>