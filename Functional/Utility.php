<?php
class Utility{
  //Taking input from user in string form
    public  static function inputString(){
          fscanf(STDIN ,"%s\n",$String);
          return $String;
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
    public static function inputNumber()
  {
    fscanf(STDIN ,"%d \n\n",$number);
    return $number;
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
          $sum=0.0;
          for($i=1;$i<=$number;$i++)
          {
             $sum=$sum+1/$i;
              echo "\n harmonic series is ".$sum;
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

            for($i=0;$i<=number;$i++)
            {
                $cash=$stake;
                while($cash >0 && $cash< goal)
			   {
			      $bets++;
				   if(Math.random()<0.5)
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
                 echo "";
                 
		    }
            }
        }
    }

    


