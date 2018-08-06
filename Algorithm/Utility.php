<?php
class Utility{
  //Taking input from user in string form

    public  static function inputString(){
          fscanf(STDIN ,"%s\n",$String);

          return $String;
    }
    public static function inputNumber()
    {
        fscanf(STDIN ,"%s\n",$number);
        if (filter_var($number, FILTER_VALIDATE_INT))
        return $number;
        else
        echo "enter integer value";
    }
    public static function stringnumerinput()
    {
        fscanf(STDIN,"%s\n",$string);
        return $string;
    }

   // No 1 Program For Anagram String  
  public static function Anagram($pharse1,$pharse2)
    {
        $status = false;
        
        if($pharse1 !="")
        {
            if(  $pharse2 !="")
            {
                $pharse1=strtolower(str_replace(" ","", $pharse1));
                $pharse2=strtolower(str_replace(" ","", $pharse2));
                $pharse1 = str_split($pharse1);
                $pharse2 = str_split($pharse2);
                sort($pharse1);
                sort($pharse2);
                if($pharse1 === $pharse2)
                {
                $status = true;
                echo "strings are anagram";
                } 
                else{
                    echo "strings are not anagram";
                }
            }         
        }    
    }
    // program of prime number
    // No 2 program for prime number range
    public static function PrimeRange($number)
    {
  	$flag=0;
		for($j=2;$j<$number;$j++)
		{ 
			if($number%$j==0)
			{
				$flag=1;//satisfy 
				break;	
			}

		}
		//enters in when number is prime.
		if($flag==0)
		{
			return true;
        }
        return false;
    }

    //No 11 days of week
    public static function DayOfWeeks($m,$d,$y)
    {
    $yo=$y-(14-$m)/12;
	 echo($yo);
	
	$x=$yo+$yo/4-$yo/100+$yo/400;
	echo($x);
	
	 $mo= $m+12*((14-$m)/12)-2;
	 echo($mo);
	
	$do1=(($d+$x+31*$mo)/12)% 7;
	 echo($do1);
    }
    // no program of bubble sort
    public static function BubbleSort($arr)
    {   $n=count($arr);
        echo $n;
        for( $i=0;$i<$n;$i++)
	    {
		for( $j=0;$j<$n-1;$j++)
		    {
			if($arr[$j]>$arr[$j+1])
			    {
			        $temp=$arr[$j+1];
			        $arr[$j+1]=$arr[$j];
			        $arr[$j]=$temp;
			    }
			
            }
        }
        
        echo " sorted elements are";

        for( $i=0;$i<$n;$i++)
        {
            echo"\n ".$arr[$i];
        }
    }  

    // No 12 Program for temperature Conversion
    public static function CelsiusToFraherint($c)
    {
            echo "\n ".(($c*9/5)+32);

    } 
    public static function FrahrenitToCelsius($f)
    {
        echo "\n".(($f-32)*5/9);

    }

    //No 14 Program for Square Root 
    public static function Squareroot($c)
    {
        $t=$c;
        $epsilon=1e-15;

        echo"\n=:".($epsilon*$t);
      while(abs($t - $c/$t) > $epsilon*$t)
         {
            $t=($c/$t+$t)/2;
         }
         echo "\n = : ".$t;

    }
    // No 13 Program for Monthly Payment
    public static function Payment($P,$n,$r)
    {
        $PM=(($P*$r)/(1-(pow((1+$r),(-$n)))));
         echo" Monthy Payment is :".$PM." Rs";

    }
    // No 15 program to convert number to binary
    public static function Binary($number)
    {
        $index = 0;
        $binary = array();
       
        while($number>0)
        {
            $binary[$index]=$number%2;
            $number=$number/2;
            $number1 = explode('.',$number);
            $number =(int)$number1[0];
            $index++;
            

        }
        for($i=$index-1;$i>=0;$i--)
        {
            echo $binary[$i];
        }

       
    }


    // no 5 Program for Binary search of a number
    public static function BinaryNo($low,$high)
    { 
        if($low==$high)
        {
            echo" \n enter number is : ".$low;
            echo" \n your enter number  is : ".($low-1). " and ".($high+1);

        }
        $mid=floor(($low+$high)/2);
        //echo $mid;
        $choice;
        echo "\n press 1: ".$low. " - " .$mid;
        echo "\n press 2  : ".($mid+1) ." -  " . $high."\n ";
        $choice=self::inputNumber();
       
        if($choice==1)
        {
           self:: BinaryNo($low,$mid);
        }
        else if($choice==2)
        {
           self:: BinaryNo($mid+1,$high);
        }
        else{
            echo"\n enter number is wrong";

        }


    }

    //No  10  Program for Vending machine
    public static function CalculateMoney($money,$a,$i)
   {
       $rem;
       $total=0;
       if($money==0)
       {
           return;
       }
       else
       {
           if($money>=$a[$i])
           {
               $calNotes=floor($money/$a[$i]);
               $rem=$money% $a[$i];
               $money=$rem;
               $total=$calNotes;
               echo $a[$i]." notes are .......> ".$calNotes."\n";
           }
           $i++;
           self::CalculateMoney($money,$a,$i);
       }
   }

 // no 4 program for all sorting operations
 public static function inputIntegerArray($size)
 {
  //  $range=Utility::inputNumber();
   $array=[];
for($i=0;$i<$size;$i++)
{
   $array[$i]=Utility::inputNumber();
}
 }


 public static function elapsedTime($starttime)
 {
    $stoptime=microtime();
    $elpasedtime=$stoptime-$starttime;
    
    echo "\n elapsed Time: $elpasedtime ";

}

//   Program for Binary Search Integer in Search sort 
public static function BinarySearch($arrayelement,$first,$arraysize,$element)
  { 
    
    // if (count($arrayelement) == 0) {
    //     echo "Inside if"; 
    //     return -1;
    // }

        //echo "Inside else";
      $first=0;
      $last=$arraysize;
      while($first<$last)
      {
         // echo "Inside while";
          $mid=floor(($first+$last)/2);
        
          if($element<$arrayelement[$mid])
              $last=$mid;
          else if ($element>$arrayelement[$mid])
               $first=$mid+1;
          else 
              return $mid;
      }
      return -1;
    }
 

public static function InsertSort($arrayelement)

{   $key=0;
    for($i=1;$i<count($arrayelement);$i++)
    {
        $key=$arrayelement[$i];
        $j=$i-1;
   
        while($j>=0 && ($arrayelement[$j]>$key))
        {
            $arrayelement[$j+1]=$arrayelement[$j];
          $j=$j-1;
        }
        $arrayelement[$j+1]=$key;
        
    }
    

    for($index=0;$index<count($arrayelement);$index++) {
        echo "\t".$arrayelement[$index];
    }
    
}
//Bubble sort Method of search sort 
    public static function bubblesortMethod($arrayelement)
    { $n=count($arrayelement);
        echo $n;
        for( $i=0;$i<$n;$i++)
	    {
		for( $j=0;$j<$n-1;$j++)
		    {
			if($arrayelement[$j]>$arrayelement[$j+1])
			    {
			        $temp=$arrayelement[$j+1];
			        $arrayelement[$j+1]=$arrayelement[$j];
			        $arrayelement[$j]=$temp;
			    }
			
            }
        }
       
        echo " sorted elements are";

        for( $i=0;$i<$n;$i++)
        {
            echo"\n ".$arrayelement[$i];
        }
    }
    
    //..No 3 Program of  Prime no Pallidriome ....................................................................//
    public static function PrimeNoPallidrome($number)
    {
     $sum=0;
	 $rem;
	$temp=$number;
	while($number!=0)
	{
		$rem=$number%10;
		$sum=$sum*10+$rem;
		$number=floor($number/10);
	}
	if($temp==$sum)
	{
		return true;		
	}
	return false;
    }
  
  

}

