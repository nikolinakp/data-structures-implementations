<?php

class myStack{
    public $dataStore=array();
    public $top;

    function __construct()
    {
        $this->top=-1;
    }

    public function isEmpty(){
        if($this->top==-1){
            echo "Stack is empty. \n";
        }else{
            echo "Stack is not empty. \n";
        }
    }

    public function size(){
        return $this->top;
    }
    
    public function push($element){
        $this->dataStore[++$this->top]=$element;
    }

    public function pop(){
        if($this->top<0){
            echo "Stack is empty.";
        }else{
            return $element=$this->dataStore[$this->top--];
        }
    }

    public function topElement(){
        if($this->top<0)
        {
            echo "Stack is empty";
        }else{
            return $this->dataStore[$this->top];
        }
    }
    
}

$stack=new myStack();
$stack->push(10);
$stack->push(20);
$stack->push(30);
$stack->push(40);

$len= $stack->size();
echo $len;

$stack->pop();
$stack->isEmpty();
echo $stack->pop();
echo $stack->topElement();

?>