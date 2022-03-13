"use strict";

function getForm() {
    let polInputs = document.getElementsByName("pol");
    let polInputsStatus = {};
    let messageText = "";
    for (let i = 0; i < polInputs.length; i++) {
        let input = polInputs[i];
        let inputIsChecked = input.checked ? "checked" : false;
        polInputsStatus[input.value] = {status: inputIsChecked};
        messageText += input.value + ": {" + "status: " + inputIsChecked + "}\n";
    }
    alert(messageText); // Выведет сообщение со значениями формы и статусом checked
    console.log(polInputsStatus); // Выведет в консоль созданный объект со значениями формы и статусом checked
}