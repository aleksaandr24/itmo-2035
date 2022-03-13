"use strict";

function changeItems() {
    let userFontColor = document.getElementById("fontColor").value;
    let userFontSize = document.getElementById("fontSize").value;
    setStyle(userFontColor, userFontSize);
}

function setStyle(fontColor, fontSize) {    
    let nodesLi = document.getElementsByClassName("listNumbers")[0].childNodes;    
    nodesLi.forEach(item => {
        if (item.nodeType == 1) {
            item.style.color = fontColor;
            item.style.fontSize = fontSize;
        }
    });
}