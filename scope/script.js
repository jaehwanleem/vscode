
var b = "can I access this?"

function bb() {
    b = "hello";
    console.log(a);
}


//root scope (window)


var fun = 5;

function funfunction(){
    //child scope
    var fun = "hellooo";
    console.log(1, fun);
}

function funnerFunction() {
    //child scope
    var fun = "byee";
    console.log(2, fun);
}

function funnestFunction() {
    //child scope
    fun = "Ahhhhh";
    console.log(3, fun);
}

console.log("window", fun);
funfunction();
funnerFunction();
funnestFunction(); 


function isUserValid(bool){
    return bool;
}

var answer = isUserValid(true) ? "you may enter" : "Access Denied";

