<?php

class queue{
	public $total = 5;
    public $pointer = 0;
    public $queue = array();
    
    public function push($item){
    	if($this->pointer>=$this->total)
        {
        	echo "max limit has been reached!";
        }
        else
        {
        	$this->queue[$this->pointer] = $item;
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
        	array_shift($this->queue);
            $this->pointer--;
        }
    }
}

$queue = new queue();

$queue->push(2);
$queue->push(6);
$queue->push(14);
$queue->push(30);
$queue->push(8);
$queue->pop();
$queue->push(100);
$queue->pop();
$queue->pop();
$queue->push(99);

echo '<pre>'; print_r($queue->queue); 
?>
