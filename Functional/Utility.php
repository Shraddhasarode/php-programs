<?php
class Utility{
  //Taking input from user in string form
    public  static function inputString(){
          fscanf(STDIN ,"%s\n",$String);
          if(is_numeric($String))
          {
            throw new Exception("Enter string values only");
          }
          else
          return $String;
    }
    
    public static function inputNumber()
    {
        fscanf(STDIN ,"%s\n",$number);
        if (filter_var($number, FILTER_VALIDATE_INT)) {

            return $number;
        }
        else{
            throw new Exception("Enter integer values only");
           
        }
    }

    public static function floatNumber()
    {
        fscanf(STDIN ,"%s\n",$number);
        if (filter_var($number, FILTER_VALIDATE_FLOAT)) {

            return $number;
        }
        else{
            throw new Exception("Enter float values only");
           
        }
    }

    //No.1 Program for UserString
    public static function UserString($stringl,$text)
    {
        if(strlen($stringl)>3)
        {
        echo str_replace("<<user name>>",$stringl,$text);
        }
    else
    {
    echo "length should be greater  than 3";
     }
    }

  // No 2.Program for FlipFlop coin 
  public static function CoinFlip($count)
  {
      $head = 0;
      $tail = 0;
      $beat=0;
      for($i=0; $i<=$count; $i++)
      {
      $beat++;
        if((rand(0,1))<0.5)
        { 
            $head++;
        }
        else
        {
            $tail++;
        }
        
      }
      $percenthead=($head *100)/$beat;
      echo "\nNo of head is".$percenthead;
      $percenttail=($tail *100)/$beat;
      echo "\nNo of tail is".$percenttail;
      }
      
      //No3.Program for leap year
      public static function CheckYear($year)
      {
      $leap=false;
	if($year%4 ==0)
		{ 
			if($year%100==0)
			{
				if($year%400==0)
					$leap=true;
				else 
					$leap=false;
				
			}
			else $leap=true;
			
		}else $leap=false;
			
		if($leap)
			echo"Is a leap year";
		else
		    echo "Is not a leap year";
		return $leap;

      }
      //No.4 Power of two
      public static function Poweroftwo($range)
      { 
        $power=1;
        for($i=1;$i<=$range;$i++)
        {   $power=$power*2;    
            echo "\n power of 2^".$i." : ".$power;
        }
      }
      //No 5 Harmonic series 
      
      public static function HarmonicSeries($number)
      {
          $v;
          $sum=0.0;
          for($i=1;$i<=$number;$i++)
          {
            $v="1/".$i;
            if($i<$number)
            echo $v."  + ";
             //$sum=$sum+1/$i;
            //echo "\n harmonic series is ".$sum;
          }
      }
      public static function primeFactors ($number)
      {
          echo "Prime factors of number are: ";
          $i=2;
          while($i<=$number)
          {
              if($number %$i==0)
             {
            echo "\n".$i;
            $number=$number/$i;
             }
              elseif($number %$i!=0)
             {
            $i++;
              }
           }
       }//No 7 Gambler Program 
        public static function Gambler($stake,$goal,$number)
        {
           

            $win =0;
            $bets=0;
            $loss=0;

            for($i=0;$i<=$number;$i++)
            {
                $cash=$stake;
                while($cash >0 && $cash< $goal)
			   {
			      $bets++;
                  if((rand(0,1))<0.5)
				   {
					$cash++;
				    }
				    else
				   {
					$cash--;
				   }
				
		        if($cash==$goal)
		          {
			        $win++;
					
                  }     
		    }
            }
               echo "wininng percentage is \n ".(($win*100)/$number);
               echo "\n loosing  percentage is \n ".(100-(($win*100)/$number));
        }
        //No  8 Program for Coupoun Number 
    public static function findCoupon($number)
    {
        static $count=0;
        $coupennumber=[];
      
      while($number!=$count)
        {
            $randnumber=rand(1,$number);
            array_push($coupennumber,$randnumber);
            $count=count(array_unique($coupennumber));
        }
        print_r(array_unique($coupennumber));
         
    }

    // No 11 program for Distance program 
     public static function Distance($x,$y)
     {
         $distance=sqrt($x*$x+$y*$y);
         echo "distance of point :".$distance ;
     }
     //No 15 program of Quadratic Equation 
     public static function QuaraticEq($a,$b,$c)
     {
         $root1;$root2;
		$delta= $b*$b -4*$a*$c;
		if($delta >0)
		{
			echo " \n roots are real and unequal";
			$root1=(-$b+sqrt($delta))/(2*$a);
			$root2=($b-sqrt($delta))/(2*$a);
			echo "\n First root is".$root1;
			echo"\n Second root is".$root2;
			
		}
		else if($delta==0)
		{
			echo"\n roots are real and equal";
			$root1=(-$b+sqrt($delta));
			echo "root:".root1;
			
		}
		else
		{
			echo "\n Roots are imaginary";
		}	
    }
    // No 16 Program for WindChill
    public static function Windchill($t,$v)
    {
        $w=35.74+0.6215*$t+(0.4275*$t-35.75)*pow($v, 0.6);
         print_r($w);
    }
    // No Prgram for sum of integer equals to zero
     public static function Sumofthree($size,$elem)
     {
         $i;
         $j;$k; $count=0;
		for( $i=0;$i<$size;$i++)
		{
			for($j=$i+1;$j<$size;$j++)
			{
				for($k=$j+1;$k<$size;$k++)
				{
					if($elem[$i]+$elem[$j]+$elem[$k]==0)
					{
                        echo "\n".$elem[$i] ;
                         echo "\n".$elem[$j] ;
                         echo "\n".$elem[$k] ;
						echo "\n".$count;
						
					}
				}
			}
		}
     }
     //No 9 Program for permutation of a string
    //  public static function permutation($str ,$low,$high)
    //  {
    //      if($low==$high)
    //          echo "$str";
    //      else
    //      {
    //         for($i=$low;$i<$high;$i++)
    //         {
    //                 $str1=swap($str,$low,$high);
    //                 permutation($str,$low,$high);
    //                 $str1=swap($str,$low+1,$high);

    //         }
    //      }

    //      }
        public static function swap($str1,$i,$j)
        {
             $array=[];
             $array=explode(" ",$str1);
             echo $array;
        }
    // program for 2D array 
    public static function integerArray($row,$col,$a1)
    {
    for ($i = 0; $i < $row; $i++)
     {
        for ($j = 0; $j < $col; $j++) 
        {
            echo "Enter the Number in array" . "[" . $i . "]" . "[" . $j . "]" . "\n";
            $k = getString();
            if (filter_var($k, FILTER_VALIDATE_INT)) {
                $a1[$i][$j] = $k;
            } else {
                echo "Please enter again the positive whole number \n";
                $j--;
            }
        }
    }
    }

    // No 2 program for prime number range
    public static function PrimeRange($i)
    {
       
    }
  }
     
     
        
    

    


