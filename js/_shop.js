document.addEventListener("DOMContentLoaded", function () {
    let inputsNumber = document.getElementsByClassName("shop__product__counter__value");
    let btnsPos = document.getElementsByClassName("shop__product__counter__pos");
    let btnsNeg = document.getElementsByClassName("shop__product__counter__neg");
    let productCarts = document.getElementsByClassName("shop__product");

    let errorValue = document.createElement('span');
    errorValue.classList.add('error-message');
    errorValue.textContent = '* Извините, на данный момент у нас на складе больше нет данного товара';
    errorValue.style.color = '#5A3F2E';
    errorValue.style.fontSize = '15px';
    errorValue.style.fontFamily = "'Roboto Slab', sans-serif";
    errorValue.style.marginTop = '15px';

    for (let i = 0; i < inputsNumber.length; i++) {
        btnsPos[i].onmousedown = () => {
            if (inputsNumber[i].value < Number(inputsNumber[i].dataset.maxValue)) {
                btnsPos[i].style.boxShadow = "inset 0 0 3px 1px #5A3F2E";
                inputsNumber[i].value = Number(inputsNumber[i].value) + 1;
            }
            if (inputsNumber[i].value == inputsNumber[i].dataset.maxValue) {
                productCarts[i].append(errorValue);
            }
        }
        btnsPos[i].onmouseup = () => {
            btnsPos[i].style.boxShadow = "none";
        }

        btnsNeg[i].onmousedown = () => {
            btnsNeg[i].style.boxShadow = "inset 0 0 3px 1px #5A3F2E";
            if (Number(inputsNumber[i].value) > 0) {
                inputsNumber[i].value = Number(inputsNumber[i].value) - 1;
            }
        }

        btnsNeg[i].onmouseup = () => {
            btnsNeg[i].style.boxShadow = "none";
            if (document.getElementsByClassName('error-message')[i]) {
                document.getElementsByClassName('error-message')[i].remove();
            }
        }
    }

});