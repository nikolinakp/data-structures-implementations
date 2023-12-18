function mySet(){

    this.dataStore=[];

    this.add = add;
    this.remove=remove;
    this.size=size;
    this.contains=contains;
    this.union=union;
    this.intersect=intersect;
    this.subset=subset;
    this.difference=difference;
    this.show=show;
}

function add(element){
    if(this.dataStore.indexOf(element)< 0){
        this.dataStore.push(element);
        return true;
    }
    else{
        return false;
    }
}
function remove(element){
    var position=this.dataStore.indexOf(element);
    if(position>-1)
    {
        this.dataStore.splice(position,1);
        return true;
    }
    else{
        return false;
    }
}
function show(){
    return this.dataStore;
}
function size(){
    return this.dataStore.length;
}

function contains(element){
    if(this.dataStore.indexOf(element)>-1){
        return true;
    }
    else{
        return false;
    }
}
function union(set){
    var temp=new mySet();
    for(let i=0; i<this.dataStore.length; i++){
        temp.add(this.dataStore[i]);
    }

    for(let i=0; i<set.dataStore.length; i++){
        if(!temp.contains(set.dataStore[i])){
            temp.dataStore.push(set.dataStore[i]);
        }
    }
    return temp;
}

function intersect(set){
    var tempSet=new mySet();
    for(let i=0; i<this.dataStore.length; i++){
            if(set.contains(this.dataStore[i])){
                tempSet.add(this.dataStore[i]);
            }
    }
    return tempSet;
}

function difference(set){
    var tempSet=new mySet();
    for(let i=0; i<this.dataStore.length; i++){
        if(!set.contains(this.dataStore[i]))
        {
            tempSet.add(this.dataStore[i]);
        }
    }
    return tempSet;
}

function subset(set){

    if(this.size()>set.size()){
        return false;
    }
    else{
       for(let i=0; i<this.dataStore; i++){
            if(!set.contains(this.dataStore[i]))
            {
                return false;
            }
       }
       return true;
    }
}


var set1=new mySet();
set1.add(1);
set1.add(2);

//console.log(set1.show());

var set2=new mySet();
set2.add(1);
set2.add(5);

//console.log(set2.show());

/*set1.add(1);
console.log(set.show());

set.remove(1);
console.log(set.show());*/

/*var it=new mySet();
it=set1.union(set2);
console.log(it.show());*/

/*var it=new mySet();
it=set1.subset(set2);
console.log(it.show());*/

//console.log(set1.subset(set2));