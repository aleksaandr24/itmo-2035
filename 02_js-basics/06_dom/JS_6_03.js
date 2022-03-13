"use strict";

function getForm() {
    let polInputs = document.getElementsByTagName("input");
    let polInputsStatus = {};
    let inputS = {}
    let index = 0;
    let messageText = "";
    for (let i = 0; i < polInputs.length; i++) {
        let input = polInputs[i];        
        if (input.type === "text") {
            polInputsStatus[input.id] = input.value;
            messageText += input.id + ": " + input.value + "\n";
        } else if (input.type === "radio") {
            inputS[index] = {"value": input.value, "status": input.checked ? "checked" : false};
            messageText += index + ": {value: " + input.value + ", status: " + (input.checked ? "checked" : false) + "}\n";
            index++;
        }
    }
    polInputsStatus["sex"] = inputS;
    alert(messageText); // Выведет сообщение со значениями формы и статусом checked
    console.log(polInputsStatus); // Выведет в консоль созданный объект со значениями формы и статусом checked
}