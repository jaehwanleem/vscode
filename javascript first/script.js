/* function checkDriverAge(age){

    

    if (age>=20) {
        alert("yes you can drive");
        console.log(age);
    }
    else {
        alert("you cant drvie");
        console.log(age);
    }
}

var list = ["tiger", "cat", "bear", "bird"];



var booleans =  [true, false, true];



var mixedList = ["apple", 3, undefined, true, function apple() {console.log("apples")}];


var array = ["Bannana", "Apples", "Oranges", "Blueberries"];




var user = {
    name: "jaehwanleem",
    age: 28,
    hobby: "game",
    marrage: false,
    shout: function shoot(){
        console.log("Ahhhhhhh");
    
    },
};
 */













var facebookUser = [
    {
        username: "bob",
        password: "21342",
    },
    {
        username: "kate",
        password: "2442",
    },
    {
        username: "tim",
        password: "1111",
    },
    {
        username: "sara",
        password: "2345",
    },
];


var newsFeed = [
    {
        username: "leem",
        timeline:"cool!!!",
    },
    {
        username: "lisa",
        timeline:"hell ya!!!",
    },
    {
        username: "tim",
        timeline:"nice job!!!",
    },
];


function isUserValid(username,password)
{
    for(var i=0; i< facebookUser.length; i++){
        if (facebookUser[i].username === username  && facebookUser[i].password === password ){
        return true;
        }


       
    }

    return false;
}
    

function signIn(username, password) {

    console.log(isUserValid(username,password));

    if(isUserValid(username,password) === true)
    {
        alert("hello wellcome");
        console.log(newsFeed);
    }
    else{
        alert("give another id please");
    }

}





    /* var userNamePrompt = prompt("type your username here");
    
    var passwordPrompt = prompt("type your password here"); */




var todos= [

    "clean room",
    "brush teeth",
    "exercise",
    "study javascript",
    "eat healthy",


];


var todosImportant= [

    "clean room!",
    "brush teeth!",
    "exercise!",
    "study javascript!",
    "eat healthy!",


];




function logTodos(todo,i){
    console.log(todo,i);
}


/* todosImportant.forEach(logTodos); */


/* 
var counterOne = 10;

 while (counterOne >10) {
    console.log("whileloop", counterOne);
    counterOne --;
} 

var counterTwo = 10
do{

    console.log("dowhilellop", counterTwo);
    counterTwo--;
    
} while( counterTwo >10);

 */

var button = document.getElementById("enter");
var input = document.getElementById("userinput");
var ul = document.querySelector("ul");

function inputLength(){
    return input.value.length;
}

function createListElement() {
    var li = document.createElement("li");
        li.appendChild(document.createTextNode(input.value));/* li 한줄 추가하기 */
        ul.appendChild(li);
        input.value ="";

}



button.addEventListener("click", function(){
    console.log("click is working");
})


function addListAfterClick() {
    /* 클릭을 했을시 어떤 펑션을 하는지 정의 */
        console.log(input.value);
            if(inputLength() >0 ){
                createListElement();
            
    
        } 
        /* 윗줄에서 li에 추가하는 명령이지만 어느 ul에 감싸져있는 li 인지 모르기때문에 표기해준다 */
    
    
}

function addListAfterKeypress(event){
     /* 클릭을 했을시 어떤 펑션을 하는지 정의 */
        console.log(event);
        if(inputLength() >0  && event.keyCode === 13){
        createListElement();
     
    } 
    /* 윗줄에서 li에 추가하는 명령이지만 어느 ul에 감싸져있는 li 인지 모르기때문에 표기해준다 */
}
    




button.addEventListener("click", addListAfterClick );

input.addEventListener("keypress", addListAfterKeypress);


var li = document.createElement("li");

//li에 리스트 추가하는 펑션
function createListElement(){
    li.appendChild(document.createTextNode(input.value));
    ul.appendChild(li);
    input.value="";
    
}