<?php
include('Utility.php');
echo " \n  enter the number  ";
$number=Utility::inputNumber();
$range= pow(2,$number);
Utility::BinaryNo(0,$range);

?>