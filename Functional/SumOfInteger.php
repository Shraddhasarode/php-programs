<?php
include('Utility.php');
echo "Enter the size of array";
$size=Utility::inputNumber();
$elem =array();
for ($x = 1; $x <= $size; $x++)
{
    $elem[] = Utility::inputNumber();
}
Utility::Sumofthree($size,$elem);

?>