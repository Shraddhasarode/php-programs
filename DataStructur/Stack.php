<?php
class Stack
{
    protected $stack;
    protected $size;
    
    public function __construct($size) {
        
        $this->stack = array();
        
        $this->size  = $size;
    }

    public function push($data) 
    {
        // checking for overflow
        if(count($this->stack) < $this->size)
         {
            
            //Inserts an element at the beginning
            array_unshift($this->stack, $data);
            
        } else 
        {
            
            // If stack is full then throw stack overflow exception
            echo "Stack overflow";
            
        }
    }
    
    public function pop()
     {
        
        if (empty($this->stack)) 
        {
            
            echo"Stack underflow";
            
        } else
        {
            
            return array_shift($this->stack);
        }
    }
    public function peek() 
    {
        return current($this->stack);
    }

    public function isEmpty() 
    {
        return empty($this->stack);
    }
}

?>