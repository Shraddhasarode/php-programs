<?php
include('Utility.php');

$path="/var/www/html/Algorithm/Insert.txt";
$handle = fopen($path, "r");

    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $word_arr = explode(" ", $line); //return word array
        foreach($word_arr as $word){
            echo $word."\n"; // required output
        }
    }
   
    echo "\n Enter the element to find ";
          $element=Utility::stringnumerinput();
          $arraysize=count($word_arr)-1;
          $result=Utility::BinarySearch($word_arr,0,$arraysize,$element);
          if($result!=-1)
          {
            echo"\n Element is found at the position $result ";
          }
          else
          {
             echo"\n Element is not found $result";
          }

          fclose($handle);   

?>