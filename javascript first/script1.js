var userData =  [
    {
        id:"kate",
        password:"1234",
    },
    {
        id:"leem",
        password:"1111",
    },
    {
        id:"tim",
        password:"8599",
    },

]


function isUserValid(username, password) {
    for(var i=0; i<userData.length; i++){
        if(userData[i].id === username && userData[i].password === password){
            return true;
        }
        
    }
    return false;
}


function loginproccess(){
    

    while(1){
        var usernamePrompt = prompt("id:");
        var passwordPrompt = prompt("password:");
        
        console.log(isUserValid(usernamePrompt,passwordPrompt));

        if(isUserValid(usernamePrompt, passwordPrompt)=== true){
            
            alert("hello wellcome to facebook");
            return 0;
        }
        else{
            alert("wrong id or password login again");
            return 0;
        }
    }

}

loginproccess();
