function myQueue(){

    this.dataStore=[];

    this.enqueue=enqueue;
    this.dequeue=dequeue;
    this.front=front;
    this.back=back;
    this.toString=toString;
    this.empty=empty;
}

function enqueue(element)
{
    this.dataStore.push(element);
}
function dequeue(){
    return this.dataStore.shift();
}
function front(){
    return this.dataStore[0];
}
function back(){
    let len=this.dataStore.length-1;
    return this.dataStore[len];
}
function toString(){
   var text="";
   for(let i=0; i<this.dataStore.length; i++){
        text+=this.dataStore[i] + "/n";
   }
   return text;
}
function empty(){
    if(this.dataStore.length<=0){
        return true;
    }
    else{
        return false;
    }
}

var queue=new myQueue();
queue.enqueue(10);
queue.enqueue(20);

console.log(queue.toString());
queue.dequeue();
console.log(queue.toString());

queue.enqueue(30);
console.log(queue.front());
console.log(queue.back());
console.log(queue.empty());