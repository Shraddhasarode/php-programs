<?php
include ('Utility.php');

$text="hello <<user name>> how are you";
echo "Enter the string";
try{
    $string=Utility::inputString();
Utility::UserString($string,$text);
}
catch(Exception $e)
    {
      echo "Enter the string value only ";
    }

?>
