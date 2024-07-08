// VAMOS A DECLARAR LAS VARIABLES PARA LA SIMBOLOGÍA DE LAS CARTAS...

let cards = ['♥', '♠', '♦️', '♣']; // SE DEFINEN LOS PALOS DE CARTAS MEDIANTE UN ARREGLO.
let numbers = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K']; // SE DEFINEN LOS NÚMEROS DE CARTAS MEDIANTE UN ARREGLO.

function displayCard()
{
    let singleCard = cards[Math.floor(Math.random() * cards.length)];
    let singleNumber = numbers[Math.floor(Math.random() * numbers.length)];
    let showCard = `${singleNumber}   ${singleCard}`;
    document.getElementById("mostrando").style.background = '#0accff';
    document.getElementById("mostrando").innerHTML = showCard;
}