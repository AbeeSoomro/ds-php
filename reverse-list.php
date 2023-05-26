<?php

class node{
	public $data;
    public $before;
    public $next;
}

class linkedList{

	public $head;	
    public $tail;
    
    public function __construct()
    {
    	$this->head = null;
        $this->tail = null;
    }
    
    //display the content of the list
  	public function PrintList() 
    {
      $temp = $this->tail;
      if($temp != null)
      {
          echo "The list contains : ";
          while($temp != null)
          {
              echo $temp->data." ";
              $temp = $temp->before;
          }
      }
      else
      {
          echo "The list is empty";
      }
  	}   
}


$myList = new linkedList();

$first = new node();
$first->data = 10;
$first->before = null;
$first->next = null;
$myList->head = $first;

$second = new node(); 
$second->data = 20;
$second->before = $first;
$second->next = null;
$first->next = $second;

$third = new node(); 
$third->data = 30;
$third->before = $second;
$third->next = null;
$second->next = $third;
$myList->tail = $third;

//print the content of list
$myList->PrintList();  

?>