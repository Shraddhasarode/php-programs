<?php 
include('Utility.php');
echo"Enter the size of array  ";
$size=Utility::inputNumber();
$elem =array();
echo"Enter the array elements ";
for ($x = 1; $x <= $size; $x++)
{
    $elem[] = Utility::stringnumerinput();
}
Utility::BubbleSort($elem)

?>