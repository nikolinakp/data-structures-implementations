<?php
    class mySet{

        public $dataStore= array();
       
        function __construct()
        {
           // $dataStore=[0,"false"];
        }

        public function size(){
            $size=count($this->dataStore);
            return $size;
        }

        public function print(){
           foreach( $this->dataStore as $key => $value){
                echo $key."=>".$value."\n";
           }
        }

        public function getData(){

            $newArr=array_keys($this->dataStore);
            return $newArr;
        }

       public function isContain($element)
        {
            $isExist=array_key_exists($element,$this->dataStore);
            if($isExist==true) {
                return true;
            }else{
                return false;
            }
        }
        public function add($element){

                if($this->isContain($element)==true)
                {
                   return false;
                }
                else{
                    $new = $this->dataStore[$element]="true";
                }
            }

       public function union($set){
            $temp= new mySet();
            $data2=$set->getdata();

            $data1=$this->getData();
            foreach($data1 as $y => $value){
                $temp->add($value);
            }

           foreach($data2 as $x => $val){
                $temp->add($val);
           }

            return $temp;
        }

        public function intersect($set){
            
            $temp=new mySet();
            $setData=$set->getData();
            $data=$this->getData();

            foreach($this->dataStore as $key => $val)
            {
                $temp=array_intersect($data,$setData);
            }
            return $temp;
        }

        public function difference($set){
            
            $temp=new mySet();
            $setData=$set->getData();
            $data=$this->getData();

            foreach($this->dataStore as $key => $val)
            {
                $temp=array_diff($data,$setData);
            }
            return $temp;
        }
        
        public function remove($element){
            unset($this->dataStore[$element]);
        }

    }

    $set1 = new mySet();
    $set1->add(1);
    $set1->add(2);
    $set1->add(4);
    //$set1->print();
    //echo $set1->size();

    $set2 = new mySet();
    $set2->add(2);
    $set2->add(4);
    //$set2->print();

   //$result=$set1->union($set2);
   //$result->print();

    //$result=$set1->intersect($set2);
    //print_r($result);
    
    //$result=$set1->difference($set2);
    //print_r($result);

   // $set1->remove(4);
   // $set1->print();
?>
