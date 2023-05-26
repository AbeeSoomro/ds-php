<?php

class stack{
	public $total = 5;
    public $pointer = 0;
    public $stack = array();
    
    public function push($item){
    	if($this->pointer>=$this->total)
        {
        	echo "max limit has been reached!";
        }
        else
        {
        	$this->stack[$this->pointer] = $item;
            $this->pointer++;
        }
    }
    
    public function pop(){
    	if($this->pointer <= 0)
        {
        	echo "min limit has been reached!";
        }
        else
        {
        	array_pop($this->stack);
            $this->pointer--;
        }
    }
}

$stack = new stack();

$stack->push(2);
$stack->push(6);
$stack->push(14);
$stack->push(30);
$stack->push(8);
$stack->pop();
$stack->push(100);
$stack->pop();
$stack->pop();
$stack->push(99);

echo '<pre>'; print_r($stack->stack); 
?>
