<?php
include('Utility.php');
include('Queue.php');
// echo" Enter the size of Queue ";
// $size=Utility::inputstring();
echo"Enter the number of people in queue \n ";
$people=Utility::inputstring();
 $bankbalance=100000;
//echo"\n Banking Cash Counter";
//$count=0;
$queue=new Queue;
//while($count<$people)
//{
    while($choice!=7){
echo"\n 1.Deposit ";
echo"\n 2.Withdraw";
echo"\n 3.check current balance";
echo"\n 4.Number of person in Queue ";
echo"\n 5.Dequeue";
echo"\n 6.Enqueue";
echo"\n Enter your choice  :-";
$choice=Utility::inputstring();



   switch($choice)
  {
  case 1:
   echo"\n Enter the amount you want to deposit ";
   $money=Utility::inputstring();
   $bankbalance= $bankbalance+$money;
   $queue->enqueue($bankbalance);
   echo"\n balance ".$bankbalance;
   break;

   case 2:
   echo"\n Enter the amont of money you want to withdraw ";
   $withdraw=Utility::inputstring();
   if($withdraw>$bankbalance)
   {
       echo "\n Insufficientbalance";

   }
   else
   {
         $bankbalance=$bankbalance-$withdraw;
         $queue->dequeue();
         echo"\n balance after withdraw is =".$bankbalance;

   }
   break;
    case 3:
    echo "\n Current balance is ".$bankbalance;
    break;  

    case 4:
    $Noofpeople=$queue->Noofpeople;
   
    $people=$queue->Noofpeople();
    echo "\n no of people".$Noofpeople;
    echo "$people";
    break;

    case 5:
    $queue->dequeue();
    $Noofpeople=$queue>Noofpeople;
    echo"\n no of people are".$Noofpeople;
    break;

    case 6:
    $queue->enqueue();
    $Noofpeople=$queue->Noofpeople;
    echo"\n no of people are ".$Noofpeople;
    break;

    default:
    echo"\n Invalid choice";

    }
}

?>