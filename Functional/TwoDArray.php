<?php
include('Utility.php');
echo "Enter the the number of row for 2Darray \n";
 $row=Utility::inputNumber();
 echo "Enter the the number of column for 2Darray \n";
 $col=Utility::inputNumber();
 $a1=array(array(),array());
 echo "Enter 1 for IntegerArray \n";
 echo "Enter 2 for String Array \n";
 
 $n=Utility::inputNumber();
 if($n==1)
 {
   Utility::integerArray($row,$col,$a1);
 }
else if($n==2)
 {
     stringArray($row,$col,$a1);
 }
 else
{
   echo "You have selected wrong option";
 }

?>