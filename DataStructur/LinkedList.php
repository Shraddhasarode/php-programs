<?php
include ('Node.php');

class LinkedList
{
    public $head;
    public $last;
    public $size;

    public function __construct()
    {
        $this->head = new Node();
        $this->last = new Node();
        $this->size = 0;
    }

    public function insertdata($data)
    {  
        
        $node = new Node();
        $node->data = $data;

        if ($this->head->next == NULL) {
            $this->head->next = $node;
            $this->size++;
        } else {
            $temp = $this->head;
            while ($temp->next != NULL) {
                $temp = $temp->next;
            }
            $temp->next = $node;
            $this->size++;
        }
    }

    public function show()
    {
        $node = $this->head;
        while ($node->next != NULL) {
            echo $node->data . "\n";
            $node = $node->next;
        }
        echo $node->data . "\n";
    }

    public function removenode($element)
    {
        // $current = $this->firstNode;
        // $previous = $this->firstNode;
        $status = false;
        if (($this->head->data) == ($element)) {
            $this->head = $this->head->next;
            $status = true;
            $this->size--;
        } else if (($this->last->data) == ($element)) {
           
            $prev = new Node();
            $current = $this->head;
            while ($current->next != null) {
                $this->prev = $current;
                $current = $current->next;
                
            }
            $this->last = $this->prev;
            $this->last->next = null;
            $status = true;
            $this->size--;
        } else {
            
            $prev = new Node();
            $current = $this->head;
            while ($current != null && !($status = (($current->data) == ($element)))) {
                $this->prev = $current;
                $current = $current->next;
            }
            if ($status) {
                $this->prev->next = $current->next;
                $this->size--;
            }
        }
        return $status;
    }
    public function search($element)
    {   
        echo"\n in fun";
        $node = $this->head;

        while ($node != null)
         {
            if (($node->data) == ($element)) 
            {   echo"\n in if";
                return true;
            }
            $node = $node->next;
        }
        return false;
    }
    
}
