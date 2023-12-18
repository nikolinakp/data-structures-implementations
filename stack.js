function myStack(){

    this.dataStore=[];
    this.top=0;

    this.push=push;
    this.pop=pop;
    this.peek=peek;
    this.clear=clear;
    this.length=length;

}

function push(element){
    this.dataStore[this.top]=element;
    this.top++;
}
function pop(){
    return this.dataStore[--this.top];
}
function peek(){
    return this.dataStore[this.top-1];
}
function length(){
    return this.top;
}
function clear(){
    this.top=0;
}

var stack=new myStack();
stack.push(1);
stack.push(2);
stack.push(3);
stack.push(4);

var len=stack.length();
console.log(len);

var element=stack.pop();
console.log(element);

len=stack.length();
console.log(len);

element=stack.peek();
console.log(element);

stack.clear();
len=stack.length();
console.log(len);
