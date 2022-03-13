"use strict";

function getCookies() {
    let tmp = "";
    if (typeof Cookies.get("login") !== "undefined") {
        tmp = tmp + "login: " + Cookies.get("login") + "<br>";
    }
    if (typeof Cookies.get("password") !== "undefined") {
        tmp = tmp + "password: " + Cookies.get("password") + "<br>";
    }
    document.getElementsByClassName("saveCookie")[0].innerHTML = tmp;
}

let login = async () => {
    let userLogin = document.getElementById("login").value;
    let userPassword = document.getElementById("password").value;

    Cookies.set("login", userLogin);
    Cookies.set("password", userPassword);

    await getCookies();
};