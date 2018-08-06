<?php
include('Utility.php');
echo "\n Enter the Size of array ";
$arraysize=Utility::inputNumber();

//echo"\n Enter the array Elements string or numeric";
 echo" 1 for string \n 2 for numeric \n ";
// $user=Utility::inputString();
    echo"Enter the choice no";
    $no=Utility::inputNumber();
   switch($no)
   {
     case 1:
     echo"\n enter string  \n ";

   $arrayelement=array();
   for($i=0;$i<$arraysize;$i++)
    {
      array_push($arrayelement,Utility::stringnumerinput());
    }
   break;
  case 2:
  
     echo "\n enter number  \n";
     echo"\n enter the array elements  ";

     $arrayelement=array();
     for($i=0;$i<$arraysize;$i++)
     {
       array_push($arrayelement,Utility::stringnumerinput());

     }

     print_r($arrayelement);
     break;
    
     default: echo "Inavalid choice";
    
  }
  //echo"\n enter the array elements";

//print_r($arrayelement);
echo "\n1.BinarySearch method for integer and
        \n BinarySearch method for String
        \n2.InsertionSort method for integer and
        \n InsertionSort method for String
        \n3.BubbleSort method for integer and
        \nBubbleSort method for String
        \nEnter the choice is : ";

        $choice=Utility::inputNumber();

        switch($choice)
        {
          case 1:
          $starttime=microtime();
          sort($arrayelement);
          print_r($arrayelement);
          echo "\n Enter the element to find ";
          $element=Utility::stringnumerinput();
          $arraysize=count($arrayelement)-1;
          $result=Utility::BinarySearch($arrayelement,0,$arraysize,$element);
          if($result!=-1)
          {
            echo"\n Element is found at the position $result ";
          }
          else
          {
             echo"\n Element is not found $result";
          }
       
          Utility::elapsedTime($starttime);
          break;

         case 2:
         $starttime=microtime();
         echo"\n Insertion sort method";
         Utility::InsertSort($arrayelement);

         Utility::elapsedTime($starttime);
         break;

         case 3:
         $starttime=microtime();
         echo "\n Bubble sort Method";
         Utility::bubblesortMethod($arrayelement);
         $stoptime=microtime();
         Utility::elapsedTime($starttime);
         break;


      default:
       echo"\n Invalid choice";

        }





?>
