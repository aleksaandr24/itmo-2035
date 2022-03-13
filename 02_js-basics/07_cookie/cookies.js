"use strict";

function setcookie(name, value, expire) {
    let exp = new Date();
    let cookieExpire = exp.getTime() + expire;
    exp.setTime(cookieExpire);
    document.cookie = name + "=" + value + ";expires=" + exp.toUTCString();
}

function getcookie(name) {
    let search = name + "=";
    if (document.cookie.length > 0) {
        let offset = document.cookie.indexOf(search);
        if (offset != -1) {
            offset += search.length;
            let end = document.cookie.indexOf(";", offset);
            if (end == -1) {
                end = document.cookie.length;
            }
            return (document.cookie.substring(offset, end));
        }
    }
}