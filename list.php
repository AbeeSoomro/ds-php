<?php

class node{
	public $data;
    public $next;
    public $newfetureproperty; // this property belongs to new feature
}

class linkedList{

	public $head,$end; // property end added by new-feature
    
    public function __construct()
    {
    	$this->head = null;
    }
    
    //display the content of the list
  	public function PrintList() 
    {
      $temp = $this->head;
      if($temp != null)
      {
          echo "The list contains : ";
          while($temp != null)
          {
              echo $temp->data." ";
              $temp = $temp->next;
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
$first->next = null;
$myList->head = $first;

$second = new node(); 
$second->data = 20;
$second->next = null;
$first->next = $second;

$third = new node(); 
$third->data = 30;
$third->next = null;
$second->next = $third;

//print the content of list
$myList->PrintList();  

?>