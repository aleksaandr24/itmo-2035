"use strict";

function buildNames(namesList, className) {
    
    let parentNode = document.getElementsByClassName(className)[0];
    let elmLi;
    if (parentNode != undefined) {        
        namesList.forEach(item => {            
            elmLi = document.createElement("li");
            elmLi.innerText = item;
            parentNode.append(elmLi);
        });
        return true;
    } 
    return false;
}

function addNames() {
    let userNamesList = document.getElementById("namesForm").value.split(", ");
    let userClassName = document.getElementById("classForm").value;
    alert(buildNames(userNamesList, userClassName) ? "Имена добавлены" : "Родительский элемент не найден");
}