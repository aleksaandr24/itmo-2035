"use strict";

let login = () => {
    let username = document.getElementById("formLogin").value;
    let password = document.getElementById("formPassword").value;

    if (username == "stanislav" && password == "pass") {
        Cookies.set("login", username);
        Cookies.set("password", password);
        checkStatus();
    } else {
        document.getElementsByClassName("info")[0].innerHTML = "<strong>Неверный логин или пароль!</strong>";
    }
};

let loginByPressEnter = (event) => {
    if (event.keyCode === 13) login();
};

let logout = async () => {
    Cookies.remove("login");
    Cookies.remove("password");
    checkStatus();
};

let checkStatus = () => {
    let username = Cookies.get("login");
    let password = Cookies.get("password");
    
    if (username == "stanislav" && password == "pass") {
        document.getElementsByClassName("formAuth")[0].style.display = "none";
        document.getElementsByClassName("greetings")[0].style.display = "block";
        document.querySelector(".greetings p span").innerText = username;
    } else {
        document.getElementsByClassName("formAuth")[0].style.display = "block";
        document.getElementsByClassName("greetings")[0].style.display = "none";
    }
    
    document.getElementsByClassName("info")[0].innerHTML = "";
    document.getElementById("formLogin").value = "";
    document.getElementById("formPassword").value = "";
};