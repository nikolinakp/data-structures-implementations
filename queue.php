<?php

    class myQueue{

        public $front;
        public $rear;
        public $dataStore=array();

        function __construct(){
            $this->front=-1;
            $this->rear=-1;
        }

        public function isEmpty(){
            if( $this->front==$this->rear )
            {
                echo "Queue is empty";
            }else {
                echo "Queue is not empty";
            }
        }

        public function size(){
            return ($this->rear - $this->front);
        }

        public function enqueue($element){
            $this->dataStore[++$this->rear]=$element;
        }

        public function dequeue(){
            if($this->rear== $this->front){
                echo "Queue is empty.";
            }
            return $this->dataStore[++$this->front];
        }

        public function frontElement(){
            if($this->rear== $this->front){
                echo "Queue is empty.";
            }
            return  $this->dataStore[$this->front+1];
        }

        public function  rearElement(){
            if($this->rear== $this->front){
                echo "Queue is empty.";
            }
            return  $this->dataStore[$this->rear];
        }

    }

    $queue= new myQueue();
    //$queue->enqueue(10);
    //$queue->enqueue(20);
    //$queue->enqueue(30);

    echo $queue->size();
    //echo $queue->dequeue();
    //echo $queue->size();
    //echo $queue->frontElement();
    //echo $queue->rearElement();

    //$queue->isEmpty();

?>