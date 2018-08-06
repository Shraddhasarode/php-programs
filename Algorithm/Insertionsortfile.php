<?php
include('Utility.php');

$path="/var/www/html/Algorithm/Insert.txt";
$handle = fopen($path, "r");

    while (($line = fgets($handle)) !== false) 
    {
        
        $word_arr = explode(" ", $line); //return word array
        foreach($word_arr as $word){
            echo $word."\n"; // required output
        }
    }
    fclose($handle);
    echo "After sorting  \n ";
     Utility::InsertSort($word_arr);

?>