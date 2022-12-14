<!DOCTYPE html>
<html lang="en">

<?php
    include "server/connetion.php";
    include "server/addProduct.php";
    $result = mysqli_query($induction, "SELECT * FROM `product_shop`");
    $comment = mysqli_query($induction, "SELECT * FROM `comments`");
    $com = "SELECT * FROM `comments`";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style/index.css">
    <title>Shop</title>
</head>

<body>
    <header>
        <div class="menu__block">
            <div class="menu__block-1">
                <div class="menu__logo">
                    <span class="menu__logo__text">Мебель</span>
                </div>
                <div class="menu__btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
                    </svg>
                </div>
            </div>
            <div class="menu-prim">
                <div class="menu-prim__logo">
                    <img src="style/img/logo.png" alt="" class="menu-prim__logo__png">
                </div>
                <ul class="menu-prim__list">
                    <li class="menu-prim__item"><a href="#au" class="menu-prim__link">О нас</a></li>
                    <li class="menu-prim__item"><a href="#prod" class="menu-prim__link">Товары</a></li>
                    <li class="menu-prim__item"><a href="#contact" class="menu-prim__link">Связь</a></li>
                    <li class="menu-prim__item"><a href="#adres" class="menu-prim__link">Адрес</a></li>
                </ul>
                <div class="menu-prim__basket">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M171.7 191.1H404.3L322.7 35.07C316.6 23.31 321.2 8.821 332.9 2.706C344.7-3.409 359.2 1.167 365.3 12.93L458.4 191.1H544C561.7 191.1 576 206.3 576 223.1C576 241.7 561.7 255.1 544 255.1L492.1 463.5C484.1 492 459.4 512 430 512H145.1C116.6 512 91 492 83.88 463.5L32 255.1C14.33 255.1 0 241.7 0 223.1C0 206.3 14.33 191.1 32 191.1H117.6L210.7 12.93C216.8 1.167 231.3-3.409 243.1 2.706C254.8 8.821 259.4 23.31 253.3 35.07L171.7 191.1zM191.1 303.1C191.1 295.1 184.8 287.1 175.1 287.1C167.2 287.1 159.1 295.1 159.1 303.1V399.1C159.1 408.8 167.2 415.1 175.1 415.1C184.8 415.1 191.1 408.8 191.1 399.1V303.1zM271.1 303.1V399.1C271.1 408.8 279.2 415.1 287.1 415.1C296.8 415.1 304 408.8 304 399.1V303.1C304 295.1 296.8 287.1 287.1 287.1C279.2 287.1 271.1 295.1 271.1 303.1zM416 303.1C416 295.1 408.8 287.1 400 287.1C391.2 287.1 384 295.1 384 303.1V399.1C384 408.8 391.2 415.1 400 415.1C408.8 415.1 416 408.8 416 399.1V303.1z" />
                    </svg>
                </div>
            </div>
            
            <div class="menu-btn">
                <div class="menu-btn__button">
                    <span class="menu-btn__button__text">Закрыть меню</span>
                </div>
                <div class="menu-btn__basket">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M171.7 191.1H404.3L322.7 35.07C316.6 23.31 321.2 8.821 332.9 2.706C344.7-3.409 359.2 1.167 365.3 12.93L458.4 191.1H544C561.7 191.1 576 206.3 576 223.1C576 241.7 561.7 255.1 544 255.1L492.1 463.5C484.1 492 459.4 512 430 512H145.1C116.6 512 91 492 83.88 463.5L32 255.1C14.33 255.1 0 241.7 0 223.1C0 206.3 14.33 191.1 32 191.1H117.6L210.7 12.93C216.8 1.167 231.3-3.409 243.1 2.706C254.8 8.821 259.4 23.31 253.3 35.07L171.7 191.1zM191.1 303.1C191.1 295.1 184.8 287.1 175.1 287.1C167.2 287.1 159.1 295.1 159.1 303.1V399.1C159.1 408.8 167.2 415.1 175.1 415.1C184.8 415.1 191.1 408.8 191.1 399.1V303.1zM271.1 303.1V399.1C271.1 408.8 279.2 415.1 287.1 415.1C296.8 415.1 304 408.8 304 399.1V303.1C304 295.1 296.8 287.1 287.1 287.1C279.2 287.1 271.1 295.1 271.1 303.1zM416 303.1C416 295.1 408.8 287.1 400 287.1C391.2 287.1 384 295.1 384 303.1V399.1C384 408.8 391.2 415.1 400 415.1C408.8 415.1 416 408.8 416 399.1V303.1z" />
                    </svg>
                </div>
                <ul class="menu-btn__list">
                    <li class="menu-btn__item"><a href="#au" class="menu-btn__link">О нас</a></li>
                    <li class="menu-btn__item"><a href="#prod" class="menu-btn__link">Товары</a></li>
                    <li class="menu-btn__item"><a href="#contact" class="menu-btn__link">Связь</a></li>
                    <li class="menu-btn__item"><a href="#adres" class="menu-btn__link">Адрес</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section class="hero" id = "au">
        <div class="hero__filter">
            <div class="hero__block">
                <div class="hero__description">
                    <div class="hero__title">
                        <h2>О нас</h2>
                    </div>
                    <div class="hero__text">
                        <p>У нас собственное производство полного цикла, площадью 2000 кв. м. В техническом парке
                            современное немецкое и итальянское оборудование: форматно-раскроечные станки Altendorf,
                            кромкооблицовочные станки Flexa, присадочные станки Vitap, фрезерные станки с ЧПУ,
                            вакуумно-мембранные прессы для изготовления фасадов. На территории фабрики располагаются
                            основные цехи – от распиловочного цеха до цеха по изготовлению изделий из искусственного
                            камня. Мы снижаем затраты, не прибегаем к услугам посредников, и как следствие,
                            предлагаем привлекательную цену и разумные сроки исполнения заказа.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="positive-list">
        <div class="positive-list__block">
            <div class="positive-list__title-b">
                <h2>Почему именно мы?</h2>
            </div>
            <div class="positive-list__border">
                <div class="positive-list__item">
                    <div class="positive-list__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C201.7 512 151.2 495 109.7 466.1C95.2 455.1 91.64 436 101.8 421.5C111.9 407 131.8 403.5 146.3 413.6C177.4 435.3 215.2 448 256 448C362 448 448 362 448 256C448 149.1 362 64 256 64C202.1 64 155 85.46 120.2 120.2L151 151C166.1 166.1 155.4 192 134.1 192H24C10.75 192 0 181.3 0 168V57.94C0 36.56 25.85 25.85 40.97 40.97L74.98 74.98C121.3 28.69 185.3 0 255.1 0L256 0zM256 128C269.3 128 280 138.7 280 152V246.1L344.1 311C354.3 320.4 354.3 335.6 344.1 344.1C335.6 354.3 320.4 354.3 311 344.1L239 272.1C234.5 268.5 232 262.4 232 256V152C232 138.7 242.7 128 256 128V128z" />
                        </svg>
                    </div>
                    <div class="positive-list__title">
                        <h2>Готовность заказа в течении 24 часов</h2>
                    </div>
                    <div class="positive-list__text">
                        <span>Благодаря собственному производству полного цикла мы делаем качетсвенные товары в течении
                            24 часов.</span>
                    </div>
                </div>
            </div>
            <div class="positive-list__border">
                <div class="positive-list__item">
                    <div class="positive-list__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path
                                d="M368 0C394.5 0 416 21.49 416 48V96H466.7C483.7 96 499.1 102.7 512 114.7L589.3 192C601.3 204 608 220.3 608 237.3V352C625.7 352 640 366.3 640 384C640 401.7 625.7 416 608 416H576C576 469 533 512 480 512C426.1 512 384 469 384 416H256C256 469 213 512 160 512C106.1 512 64 469 64 416H48C21.49 416 0 394.5 0 368V48C0 21.49 21.49 0 48 0H368zM416 160V256H544V237.3L466.7 160H416zM160 368C133.5 368 112 389.5 112 416C112 442.5 133.5 464 160 464C186.5 464 208 442.5 208 416C208 389.5 186.5 368 160 368zM480 464C506.5 464 528 442.5 528 416C528 389.5 506.5 368 480 368C453.5 368 432 389.5 432 416C432 442.5 453.5 464 480 464z" />
                        </svg>
                    </div>
                    <div class="positive-list__title">
                        <h2>Быстрая доставка</h2>
                    </div>
                    <div class="positive-list__text">
                        <span>Наша компания имеет свою службу доставки, благодаря чего мы полностью контралируем процесс
                            транспортировки товаров.</span>
                    </div>
                </div>
            </div>
            <div class="positive-list__border">
                <div class="positive-list__item">
                    <div class="positive-list__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M512 80C512 98.01 497.7 114.6 473.6 128C444.5 144.1 401.2 155.5 351.3 158.9C347.7 157.2 343.9 155.5 340.1 153.9C300.6 137.4 248.2 128 192 128C183.7 128 175.6 128.2 167.5 128.6L166.4 128C142.3 114.6 128 98.01 128 80C128 35.82 213.1 0 320 0C426 0 512 35.82 512 80V80zM160.7 161.1C170.9 160.4 181.3 160 192 160C254.2 160 309.4 172.3 344.5 191.4C369.3 204.9 384 221.7 384 240C384 243.1 383.3 247.9 381.9 251.7C377.3 264.9 364.1 277 346.9 287.3C346.9 287.3 346.9 287.3 346.9 287.3C346.8 287.3 346.6 287.4 346.5 287.5L346.5 287.5C346.2 287.7 345.9 287.8 345.6 288C310.6 307.4 254.8 320 192 320C132.4 320 79.06 308.7 43.84 290.9C41.97 289.9 40.15 288.1 38.39 288C14.28 274.6 0 258 0 240C0 205.2 53.43 175.5 128 164.6C138.5 163 149.4 161.8 160.7 161.1L160.7 161.1zM391.9 186.6C420.2 182.2 446.1 175.2 468.1 166.1C484.4 159.3 499.5 150.9 512 140.6V176C512 195.3 495.5 213.1 468.2 226.9C453.5 234.3 435.8 240.5 415.8 245.3C415.9 243.6 416 241.8 416 240C416 218.1 405.4 200.1 391.9 186.6V186.6zM384 336C384 354 369.7 370.6 345.6 384C343.8 384.1 342 385.9 340.2 386.9C304.9 404.7 251.6 416 192 416C129.2 416 73.42 403.4 38.39 384C14.28 370.6 .0003 354 .0003 336V300.6C12.45 310.9 27.62 319.3 43.93 326.1C83.44 342.6 135.8 352 192 352C248.2 352 300.6 342.6 340.1 326.1C347.9 322.9 355.4 319.2 362.5 315.2C368.6 311.8 374.3 308 379.7 304C381.2 302.9 382.6 301.7 384 300.6L384 336zM416 278.1C434.1 273.1 452.5 268.6 468.1 262.1C484.4 255.3 499.5 246.9 512 236.6V272C512 282.5 507 293 497.1 302.9C480.8 319.2 452.1 332.6 415.8 341.3C415.9 339.6 416 337.8 416 336V278.1zM192 448C248.2 448 300.6 438.6 340.1 422.1C356.4 415.3 371.5 406.9 384 396.6V432C384 476.2 298 512 192 512C85.96 512 .0003 476.2 .0003 432V396.6C12.45 406.9 27.62 415.3 43.93 422.1C83.44 438.6 135.8 448 192 448z" />
                        </svg>
                    </div>
                    <div class="positive-list__title">
                        <h2>Хорошая цена</h2>
                    </div>
                    <div class="positive-list__text">
                        <span>Мы снижаем затраты, не прибегаем к услугам посредников, и как следствие,
                            предлагаем привлекательную цену и разумные сроки исполнения заказа.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shop" id = "prod">
        <div class="shop__title">
            <h2>Наши товары</h2>
        </div>
        <div class="shop__product__block">
            <?php
                while ($product = mysqli_fetch_assoc($result)){
                    
            ?>
            <div class="shop__product">
                <div class="shop__product__block-1">
                    <div class="shop__product__title">
                        <h2><?php echo $product['name'];?></h2>
                    </div>
                    <div class="shop__product__icon" style = "background-image: url('<?php echo $product['photo_product'];?>')">
                </div>
                </div>
                    <div class="shop__product__block-2">
                        <div class="shop__product__counter">
                            <input type="button" value=" - " class="shop__product__counter__neg">
                            <input type="number" data-id = "<?php echo $product['id']?>" data-max-value = "<?php echo $product['all_quantity']?>" name="" value="0" id="" readonly="readonly" class="shop__product__counter__value">
                            <input type="button" value="+" class="shop__product__counter__pos">
                        </div>
                        <div class="shop__product__price">
                            <span><?php echo $product['price'];?></span>
                        </div>
                        <input type="button" value="Добавить в корзину" name="buyProduct" class="shop__product__get-mb">
                    </div>
                    <input type="button" value="Добавить в корзину" name="buyProduct" class="shop__product__get-dt">
                </div>
            <?php }?>
        </div>
    </section>
    <section class="contact" id = "contact">
        <div class="contact__titile">
            <h2>Оставьте свой отзыв</h2>
        </div>
        <div class="contact__container">
            <div class="contact__block">
                <form action="" method="post" class = "contact__form">
                    <div class="contact__form__name">
                        <span class="contact__form__title">Имя</span>
                        <input type="text" class="contact__form__input">
                    </div>
                    <div class="contact__form__text">
                        <span class="contact__form__title">Ваш комментарий</span>
                        <textarea name="" id="" cols="30" rows="10" class="contact__form__textarea"></textarea>
                    </div>
                    <input type="button" value="Отправить" class = "contact__btn">
                </form>
            </div>
            <div class="comment__block">
                <?php
                        while ($comment__arr = mysqli_fetch_assoc($comment)){
                            
                    ?>
                <div class="comment">
                    <div class="comment__avatar">
                        <span class="comment__avatar__name"><?php echo $comment__arr['name']?></span>
                        <img src="<?php echo $comment__arr['photo']?>" alt="" class="comment__avatar__photo">
                    </div>
                    <p class="comment__text">
                    <?php echo $comment__arr['comment']?>
                    </p>
                </div>
                <?php } ?>
            </div>
            
            <div id="slider" class="comment__carusel" data-bs-ride="carousel">
                    <?php
                        $res = $induction->query($com);
                        foreach ($res as $arr) {
                        ?>
                            <div class="comment__carusel__block">
                                <div class="comment comment__carusel__item" data-bs-interval="3000">
                                    <div class="comment__avatar">
                                        <span class="comment__avatar__name"><?php echo $arr['name']?></span>
                                        <img src="<?php echo $arr['photo']?>" alt="" class="comment__avatar__photo">
                                    </div>
                                    <p class="comment__text">
                                    <?php echo $arr['comment']?>
                                    </p>
                                </div>
                            </div>
                    <?php } ?>
            </div>
        </div>
    </section>
    <section class="adress" id = "adres">
        <div class="adress__title">
            <h2>Наши контакты</h2>
        </div>
        <div class="adress__block">
            <div class="adress__path-1">
                <ul class="adress__list-tel">
                    <li class="adress__list__title">Номера телефонов</li>
                    <li class="adress__list__item">+7 915 234 23 32</li>
                    <li class="adress__list__item">+7 914 544 11 99</li>
                    <li class="adress__list__item">+7 800 235 53 52</li>
                    <li class="adress__list__item">+7 912 333 13 31</li>
                </ul>
                <span class="adress__list__links">
                    Так же вы есть в мессенджерах
                </span>
                <div class="adress__list__links__icons">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> 
                            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <path d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M444 49.9C431.3 38.2 379.9.9 265.3.4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9.4-85.7.4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9.4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9.6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4.7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5.9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9.1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7.5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1.8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z"/></svg>
                </div>
                <div class="adress__cart">
                    <h2 class="adress__cart__title">Наш адрес:</h2>
                    <span class="adress__cart__description">Россия, Московская область, Москва, ул. Пушкина 54, д.14</span>
                </div>
            </div>
            <div class="adress__path-2">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A086aded821297828f72b178e491148c5b3858667fd834ca4729c2b4db8a0b3f0&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
            </div>
        </div>
    </section>
    <script src="js/_menu.js"></script>
    <script src="js/_shop.js"></script>
    <script src="js/_contact.js"></script>
</body>

</html>