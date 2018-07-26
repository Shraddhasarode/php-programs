<?php
include ('Utility.php');
echo "Enter the year ";
$year=Utility::inputNumber();
if($year/1000>0)
{
    Utility::CheckYear($year);
}
else
{
    echo "Enter the valid four digit number";

}
?>