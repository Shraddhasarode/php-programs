<?php 

class Element
{
  public $value;
  public $next;
  
}

class Queue
{
  private $front = null;
  private $back = null; 
  public   $size;
  
  
  function __construct()
  {
    $this->size=0;
  }
  public function isEmpty()
  {
    return $this->front == null;
  }
  
  
  public function enqueue($value)
  {
     $oldBack = $this->back;
     $this->back = new Element(); 
     $this->back->value = $value;
     if($this->isEmpty())
     {
       $this->front = $this->back; 
      $this->size++;
     }else
     {
       $oldBack->next = $this->back;
       $this->size++;
     }
  }
  
  public function dequeue()
  {
    if($this->isEmpty())
    {
      return null; 
    }
    $removedValue = $this->front->value;
    $this->front = $this->front->next;
    $this->size--;
    return $removedValue;
  }

  public function Noofpeople() 
  {
    
    //$result= $this->back - $this->font;
    return $this->size;
  }
  
 
}