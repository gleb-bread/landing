document.addEventListener("DOMContentLoaded", function () {
    let menu = document.getElementsByClassName("menu__block")[0];
    let menuLinks = document.getElementsByClassName("menu__link");
    let menuItems = document.getElementsByClassName("menu__item");
    let y = null;

    document.addEventListener("scroll", () => {
        if (!(y <= 88)) {

            menu.style.transitionDuration = "1s";
            menu.style.transitionProperty = "opacity";
            menu.style.opacity = ".3";
        } else { menu.style.opacity = "1"; }
    });

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

    document.onmousemove = function (e) {
        y = e.clientY;
        if (y <= 88) {
            menu.style.opacity = "1";
        }
        return y;
    }
});