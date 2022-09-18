document.addEventListener("DOMContentLoaded", function () {
    let menu = document.getElementsByClassName("menu__block")[0];
    let menuLinks = document.getElementsByClassName("menu-prim__link");
    let menuItems = document.getElementsByClassName("menu-prim__item");
    let menuLinksBtn = document.getElementsByClassName("menu-btn__link");
    let menuItemsBtn = document.getElementsByClassName("menu-btn__item");
    let menuBtnClose = document.getElementsByClassName("menu-btn__button")[0];
    let menuButton = document.getElementsByClassName('menu-btn')[0];
    let menuBtnOpen = document.getElementsByClassName('menu__btn')[0];
    let menuBlock = document.getElementsByClassName('menu__block')[0];
    let menuBlock_1 = document.getElementsByClassName('menu__block-1')[0];
    let y = null;
    if (document.documentElement.clientWidth > 1024) {
        document.addEventListener("scroll", () => {
            if (!(y <= 88)) {

                menu.style.transitionDuration = "1s";
                menu.style.transitionProperty = "opacity";
                menu.style.opacity = ".3";
            } else { menu.style.opacity = "1"; }
        });
    }

    menu.addEventListener("mouseenter", () => {
        menu.style.transitionDuration = ".3s";
        menu.style.opacity = "1";
    });

    menu.addEventListener("mouseon", () => {
        menu.style.opacity = "1";
    });

    for (let i = 0; i < menuLinks.length; i++) {
        menuLinks[i].addEventListener("mouseenter", () => {
            menuItems[i].style.backgroundColor = "rgb(196, 180, 167)";
        })
        menuLinks[i].addEventListener("mouseout", () => {
            menuItems[i].style.backgroundColor = "#F3F6FB";
        })
    };

    for (let i = 0; i < menuLinks.length; i++) {
        menuLinks[i].addEventListener('click', function (e) {
            e.preventDefault();
            const id = menuLinks[i].getAttribute('href');

            document.querySelector(id).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    };

    for (let i = 0; i < menuLinksBtn.length; i++) {
        menuLinksBtn[i].addEventListener("mouseenter", () => {
            menuItemsBtn[i].style.backgroundColor = "rgb(196, 180, 167)";
        })
        menuLinksBtn[i].addEventListener("mouseout", () => {
            menuItemsBtn[i].style.backgroundColor = "#F3F6FB";
        })
    };

    for (let i = 0; i < menuLinksBtn.length; i++) {
        menuLinksBtn[i].addEventListener('click', function (e) {
            e.preventDefault();
            const id = menuLinksBtn[i].getAttribute('href');

            document.querySelector(id).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    };

    document.onmousemove = function (e) {
        y = e.clientY;
        x = e.clientX;
        if (document.documentElement.clientWidth > 1024) {
            if (y <= 88) {
                menu.style.opacity = "1";
            }
        }
        return y;
    }

    menuBtnClose.onmousedown = () => {
        menuBtnClose.style.boxShadow = "inset 0 0 3px 1px #5A3F2E";
    }
    menuBtnClose.onmouseup = () => {
        menuBlock.style.left = `0`;
        menuBtnClose.style.boxShadow = "none";
        menuBlock.style.width = "100%";
        menuBlock.style.height = "auto";
        menuBlock_1.style.display = "flex";
        menuButton.style.display = "none";
        menuBlock.style.alignItems = "center";
        menuBlock.style.padding = "10px";
    }

    menuBtnOpen.onclick = () => {
        menuBlock.style.transitionDuration = ".3s";
        menuBlock.style.transitionProperty = "width, height";
        menuBlock.style.width = "30%";
        menuBlock.style.height = "100%";
        menuBlock.style.left = `${(document.documentElement.clientWidth - Math.ceil(document.documentElement.clientWidth * .3)) + 1}px`;
        menuBlock_1.style.display = "none";
        menuButton.style.display = "block";
        menuBlock.style.alignItems = "start";
        menuBlock.style.padding = "0";
    }
});