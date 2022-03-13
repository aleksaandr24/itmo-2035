"use strict"

$("#accordionQuestions").on("shown.bs.collapse", (event) => {
    event.target.parentNode.childNodes[1].className = "questions__item_open";
});

$("#accordionQuestions").on("hidden.bs.collapse", (event) => {
    event.target.parentNode.childNodes[1].className = "questions__item_closed";
});