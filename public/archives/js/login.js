var btnSignup = document.querySelector("#signup");
var btnNext = document.querySelector("#next");

var body = document.querySelector("body");


btnSignup.addEventListener("click", function(){
    body.className = "sign-up-js";
});

btnNext.addEventListener("click", function(){
    body.className = "next-js";
})


var addCardapio = document.querySelector("#addCardapio");
var body = document.querySelector("body");

addCardapio.addEventListener("click", function(){
    body.className = "openCardapio";
})