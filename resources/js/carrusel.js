const btnLeft = document.querySelector(".btn-left");
const btnRight = document.querySelector(".btn-right");
const slider = document.getElementById("slider");
const sliderSection = document.querySelectorAll(".slider-section");

btnLeft.addEventListener("click", e => moverAIzquierda())
btnRight.addEventListener("click", e => moverADerecha())

let operacion = 0;
let counter = 0;
let widthImg = 100 / sliderSection.length;

function moverADerecha(){
    if (counter >) {

    } else {

    }
    operacion = operacion + widthImg
    slider.style.transform = `translate(-${operacion}%)`
    slider.style.transition = "all ease .6s"
}

function moverAIzquierda(){
    operacion = operacion - widthImg
    slider.style.transform = `translate(-${operacion}%)`
    slider.style.transition = "all ease .6s"
}
