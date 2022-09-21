// document.addEventListener("DOMContentLoaded", function () {
let karusel = document.getElementsByClassName('comment__carusel')[0];
let karuselItems = document.getElementsByClassName('comment__carusel__block');
let leftStart = (document.documentElement.clientWidth - document.documentElement.clientWidth * 2) + 'px';
let leftShow = 0 + 'px';
let leftEnd = (document.documentElement.clientWidth * 2) + 'px';
let coords = [leftEnd, leftShow, leftStart];
let commentsText = [];
let commentsTextNoFull = [];
let startComment = 0;
let mouseDownResult = false;
let startSymbolLimit = getNumberOfSymbol(karuselItems[0].getElementsByClassName('comment__text')[0].textContent);
let commentBtns = document.getElementsByClassName('comment__full-com');
let resultShow = false;


karusel.style.width = document.documentElement.clientWidth + 'px';
karusel.style.height = (karuselItems[0].getBoundingClientRect().height + 20) + 'px';
karusel.style.transitionDuration = '.3s';
karusel.style.transitionProperty = 'height';
spawnComments();

for (let i = 0; i < karuselItems.length; i++) {
    karuselItems[i].style.transitionDuration = "1s";
    karuselItems[i].style.transitionProperty = "left";
    karuselItems[i].style.width = document.documentElement.clientWidth + 'px';
    karuselItems[i].style.width = document.documentElement.clientWidth + 'px';
    document.querySelectorAll('.comment__carusel__item')[i].style.transitionDuration = ".3s";
    document.querySelectorAll('.comment__carusel__item')[i].style.transitionProperty = "height";

    karusel.style.transitionProperty = "height";

    commentsText.push(karuselItems[i].getElementsByClassName('comment__text')[0].textContent.replace(/^ +| +$|( ) +/g, "$1"));

    karuselItems[i].onmousedown = () => {
        mouseDownResult = true;
    }
    karuselItems[i].onmouseup = () => {
        mouseDownResult = false;
    }
}

for (let i = 1; i < karuselItems.length; i++) {
    setLimitOfSymbol(karuselItems[i].getElementsByClassName('comment__text')[0], startSymbolLimit, i);
}

setInterval(() => {
    if ((mouseDownResult == false) && (resultShow == false)) {
        startComment = moveComments(startComment);
    }
}, 4000);

for (let k = 0; k < commentBtns.length; k++) {
    commentBtns[k].style.left = '0';
    commentBtns[k].style.top = (document.querySelectorAll('.comment__text__show')[k].getBoundingClientRect().height + 10) + 'px';
    commentBtns[k].style.transitionDuration = ".3s";
    commentBtns[k].style.transitionProperty = "top";
    document.querySelectorAll('#slider > div > div > p > span.comment__text__hidden')[k].style.transitionProperty = "opacity";
    document.querySelectorAll('.comment__carusel__item')[k + 1].style.height = (document.querySelector('.comment__text__show').getBoundingClientRect().height + 20 + commentBtns[0].getBoundingClientRect().height) + 'px';
    commentBtns[k].onclick = () => {
        if (document.querySelectorAll('.comment__full-com')[k].classList[1] == "comment__full--of") {
            resultShow = true;
            document.querySelectorAll('.comment__full-com')[k].classList.remove("comment__full--of");
            document.querySelectorAll('.comment__full-com')[k].classList.add("comment__full--on");
            document.querySelectorAll('#slider > div > div > p > span.comment__text__hidden')[k].style.transitionDuration = "2s";
            document.querySelectorAll('.comment__carusel__item')[k + 1].style.height = (document.querySelectorAll('.comment__text__show')[k].getBoundingClientRect().height + document.querySelectorAll('.comment__full-com')[k].getBoundingClientRect().height + document.querySelectorAll('.comment__text__hidden')[k].getBoundingClientRect().height + 20) + 'px';
            document.querySelector('.comment__carusel').style.height = (document.querySelectorAll('.comment__text__show')[k].getBoundingClientRect().height + document.querySelectorAll('.comment__full-com')[k].getBoundingClientRect().height + document.querySelectorAll('.comment__text__hidden')[k].getBoundingClientRect().height + 70) + 'px';
            document.querySelectorAll('.comment__text__show')[k].textContent = document.querySelectorAll('.comment__text__show')[k].textContent.split('...')[0].slice(0, document.querySelectorAll('.comment__text__show')[k].textContent.split('...')[0].length - 1);
            commentBtns[k].style.top = (document.querySelectorAll('.comment__text__show')[k].getBoundingClientRect().height + document.querySelectorAll('.comment__text__hidden')[k].getBoundingClientRect().height) + 'px';
            commentBtns[k].value = 'Скрыть текст';
            document.querySelectorAll('#slider > div > div > p > span.comment__text__hidden')[k].style.opacity = '1';
        } else if (document.querySelectorAll('.comment__full-com')[k].classList[1] == "comment__full--on") {
            resultShow = false;
            document.querySelectorAll('.comment__full-com')[k].classList.remove("comment__full--on");
            document.querySelectorAll('.comment__full-com')[k].classList.add("comment__full--of");
            document.querySelectorAll('#slider > div > div > p > span.comment__text__hidden')[k].style.transitionDuration = ".3s";
            document.querySelectorAll('.comment__carusel__item')[k + 1].style.height = document.querySelector('.comment__carusel__item').getBoundingClientRect().height + 'px';
            document.querySelector('.comment__carusel').style.height = (document.querySelector('.comment__carusel__item').getBoundingClientRect().height + 70) + 'px';
            document.querySelectorAll('.comment__text__show')[k].textContent = document.querySelectorAll('.comment__text__show')[k].textContent + "...";
            commentBtns[k].style.top = (document.querySelectorAll('.comment__text__show')[k].getBoundingClientRect().height + 20) + 'px';
            commentBtns[k].value = 'Читать текст';
            document.querySelectorAll('#slider > div > div > p > span.comment__text__hidden')[k].style.opacity = '0';
        }
    }
}

//function
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

function setLimitOfSymbol(str, numOfSymbol, i) {
    str = str.textContent.replace(/^ +| +$|( ) +/g, "$1");
    let str2 = str.split('');
    if (str2.length > numOfSymbol) {
        let str1 = '';
        for (let i = 0; i < numOfSymbol; i++) {
            if (!(str2[i] == "undefined")) {
                str1 = str1 + str2[i];
            }
        }
        karuselItems[i].getElementsByClassName('comment__text')[0].innerHTML = `<span class = 'comment__text__show'>${str1}...</span>
        <span class = 'comment__text__hidden'>${str.split(str1)[1]}</span>
        <input type = 'button' value = 'Читать далее' class = 'comment__full-com comment__full--of'>`;
        commentsTextNoFull.push(str1 + `<span class = 'comment__full-com comment__full--of'> Читать далее...</span>`);
    }
}
// });