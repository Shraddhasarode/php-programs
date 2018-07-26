<?php
include ('Utility.php');

$text="hello <<user name>> how are you";
echo "Enter the string";
$string=Utility::inputString();
Utility::UserString($string,$text);
?>
