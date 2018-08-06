<?php
include('Utility.php');

$time_start = microtime(true);
   usleep(100);
   
   $time_end = microtime(true);
   $time = $time_end - $time_start;
   
   echo "Did nothing in $time seconds\n";

?>