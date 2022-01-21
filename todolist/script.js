var button = document.getElementById("enter");
var input = document.getElementById("userinput");
var ul = document.querySelector("ul");
var li = document.querySelector("li");


function inputLength() {
	return input.value.length;
}

function createListElement() {
	var li = document.createElement("li");
	var div = document.createElement("div");
	var delButton =document.createElement("button");
	div.classList.add("wrapper");
	ul.appendChild(div);
	div.append(li, delButton);
	

	li.appendChild(document.createTextNode(input.value));

	input.value = "";
	delButton.classList.add("delClass");
	delButton.innerHTML="Del";
}

function addListAfterClick() {
	if (inputLength() > 0) {
		createListElement();
	}
}

function addListAfterKeypress(event) {
	if (inputLength() > 0 && event.keyCode === 13) {
		createListElement();
	}
}

function deleteListElement(element){
	if(element.target.className === "delClass"){
		element.target.parentElement.remove();
	}
}

function doneTask(task){
	if (task.target.tagName === "LI"){
		task.target.classList.toggle("done");
	}

}

function handdleUlClick (element){
	doneTask(element);
	deleteListElement(element);
}
ul.addEventListener("click", handdleUlClick);

button.addEventListener("click", addListAfterClick);

input.addEventListener("keypress", addListAfterKeypress);











function deletebutton() {
	button.classList.add("delete");
	ul.appendChild(button);
}


button.addEventListener("click", deletebutton);
