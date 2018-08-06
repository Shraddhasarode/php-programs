<?php
include('Utility.php');
//echo"Given quadratic euation is in form "+"$a*$x*$x+$b*$x+$c";
echo "Enter the value of a";
$a=Utility::inputNumber();
echo "Enter the value of b";
$b=Utility::inputNumber();
echo "Enter the value of c";
$c=Utility::inputNumber();
Utility::QuaraticEq($a,$b,$c);

?>