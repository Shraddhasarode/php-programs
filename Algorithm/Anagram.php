<?php
include('Utility.php');

echo "Enter the first String";
$str1=Utility::inputString();
echo "Enter the second string";
$str2=Utility::inputString();
Utility::Anagram($str1,$str2);

?>