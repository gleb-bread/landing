// document.addEventListener("DOMContentLoaded", function () {
let karusel = document.getElementsByClassName('comment__carusel')[0];
let karuselItems = document.getElementsByClassName('comment__carusel__item');
let leftStart = (document.documentElement.clientWidth - document.documentElement.clientWidth * 2) + 'px';
let leftShow = Math.floor(document.getElementsByClassName('shop__product')[3].getBoundingClientRect().left) + 'px';
let leftEnd = (document.documentElement.clientWidth * 2) + 'px';
let coords = [leftEnd, leftShow, leftStart];
let commentsText = [];
let startComment = 0;
let mouseDownResult = false;
let startSymbolLimit = getNumberOfSymbol(karuselItems[0].getElementsByClassName('comment__text')[0].textContent);


karusel.style.width = document.documentElement.clientWidth + 'px';
karusel.style.height = (karuselItems[0].getBoundingClientRect().height + 30) + 'px';
spawnComments();

for (let i = 0; i < karuselItems.length; i++) {
    karuselItems[i].style.transitionDuration = "1s";
    karuselItems[i].style.transitionProperty = "left";

    commentsText.push(karuselItems[i].getElementsByClassName('comment__text')[0].textContent);
}

let strForCom2 = setLimitOfSymbol(karuselItems[1].getElementsByClassName('comment__text')[0], startSymbolLimit);
let strForCom3 = setLimitOfSymbol(karuselItems[2].getElementsByClassName('comment__text')[0], startSymbolLimit);
karuselItems[1].getElementsByClassName('comment__text')[0].textContent = strForCom2;
karuselItems[2].getElementsByClassName('comment__text')[0].textContent = strForCom3;

for (let i = 0; i < karuselItems.length; i++) {
    karuselItems[i].onmousedown = () => {
        mouseDownResult = true;
    }
    karuselItems[i].onmouseup = () => {
        mouseDownResult = false;
    }
}

setInterval(() => {
    if (mouseDownResult == false) {
        startComment = moveComments(startComment);
    }
}, 4000)

function spawnComments() {
    karuselItems[0].style.left = leftEnd;
    karuselItems[1].style.left = leftShow;
    karuselItems[2].style.left = leftStart;
}

function moveComments(i) {
    i = (i == 3) ? 0 : i;
    if (i == 0) {
        karuselItems[1].style.transitionDuration = "1s";
        karuselItems[1].style.transitionProperty = "left";
        karuselItems[2].style.transitionDuration = "none";
        karuselItems[2].style.transitionProperty = "none";
    }
    karuselItems[0].style.left = coords[i];
    i += 1;
    i = (i == 3) ? 0 : i;
    if (i == 0) {
        karuselItems[2].style.transitionDuration = "1s";
        karuselItems[2].style.transitionProperty = "left";
        karuselItems[0].style.transitionDuration = "none";
        karuselItems[0].style.transitionProperty = "none";
    }
    karuselItems[1].style.left = coords[i];
    i += 1;
    i = (i == 3) ? 0 : i;
    if (i == 0) {
        karuselItems[0].style.transitionDuration = "1s";
        karuselItems[0].style.transitionProperty = "left";
        karuselItems[1].style.transitionDuration = "none";
        karuselItems[1].style.transitionProperty = "none";
    }
    karuselItems[2].style.left = coords[i];
    i = (i == 3) ? 0 : i;
    return i++;
}

function getNumberOfSymbol(str) {
    str = str.replace(/^ +| +$|( ) +/g, "$1");
    let str1 = str.split('');
    let j = 0;
    for (let i = 0; i < str1.length; i++) {
        j++
    }
    return j;
}

function setLimitOfSymbol(str, numOfSymbol) {
    str = str.textContent.replace(/^ +| +$|( ) +/g, "$1");
    str = str.split('');
    let str1 = '';
    for (let i = 0; i < numOfSymbol; i++) {
        if (!(str[i] == 'undefined')) {
            str1 = str1 + str[i];
        }
    }
    return str1;
}

function deleteFirst(str) {
    let i = 0;
    do {
        str.shift(i);
        i++;
    } while (str[i] == '\n' || str[i] == ' ');
    return str;
}
// });