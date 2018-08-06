<?php
include('Utility.php');
echo"Enter the range to print prime and pallidrome  ";
$range=Utility::inputNumber();

for($i=2;$i<$range;$i++)
{
    // echo "";
   // $result=Utility::PrimeRange($i);


    if(Utility::PrimeRange($i) && Utility::PrimeNoPallidrome($i))
   {    
    
         echo"\n".$i;

    }
   

}


?>