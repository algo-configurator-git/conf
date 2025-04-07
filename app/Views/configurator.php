<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('css/style-config_page.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style-adaptive.css') ?>">
    <script src="<?= base_url('scripts/configurator/clear.js') ?>"></script>
    <script src="<?= base_url('scripts/script.js') ?>"></script>
    <script src="<?= base_url('scripts/config_page.js') ?>"></script>
</head>

<body>
<?php dd($assembly); ?>
<div class="container">
    <header>
        <div class="breadcrumb">
            <a href="<?= base_url('/') ?>" class="breadcrumb-item">Конфигуратор ПК</a>
            <a href="<?= base_url('catalog') ?>" class="breadcrumb-item">Каталог конфигураций</a>
            <span class="breadcrumb-item">Характеристика товара</span>
        </div>
        <div class="header-title">
            <h1 class="headline-h1">Сборка ПК</h1>
            <label class="toggle-container-config">
                <span>Учитывать совместимость</span>
                <input type="checkbox" id="toggle">
                <div class="toggle"></div>
            </label>
        </div>
    </header>

    <main>
        <section class="configurator">
            <div class="configurator-text-block">
                <div class="parts-btns">
                    <div class="toggle-btns-container">
                        <div class="toggle-btn">
                            <button class="toggle-option active" data-value="list">Список комплектующих</button>
                            <button class="toggle-option" data-value="selected">Выбранные</button>
                        </div>
                    </div>
                    <button class="help-btn open-form">Помочь со сборкой</button>
                </div>

                <div class="content-container">
                    <div id="component-list-content">
                        <div class="categories-wrapper">
                            <div class="category">
                                <div class="part-category">
                                    <h3>Системный блок</h3>
                                    <div>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                        <span>Обязательные
                            комплектующие</span>
                                    </div>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/cpu_img.svg" alt="cpu-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Процессор</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/cooler_img.svg" alt="cooler-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Кулер</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component-list-container">
                                    <div class="component-list"></div>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/motherboard__img.svg"
                                             alt="motherboard-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Материнская плата</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component-list-container">
                                    <div class="component-list"></div>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/ram_img.svg" alt="ram-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Оперативная память</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component-list-container">
                                    <div class="component-list"></div>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/videocard_img.svg"
                                             alt="videocard_img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Видеокарта</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/hdd_img.svg" alt="hdd-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Жёсткий диск</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/ssd_img.svg" alt="ssd-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">SSD</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/case_img.svg" alt="case-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Корпус</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/powerunit_img.svg"
                                             alt="powerunit-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Блок питания</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <button class="component-hide-btn">Скрыть всё</button>
                            </div>
                            <div class="category">
                                <div class="part-category">
                                    <h3>Периферийные устройства</h3>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/cpu_img.svg" alt="cpu-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Процессор</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/cooler_img.svg" alt="cooler-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Кулер</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component-list-container">
                                    <div class="component-list"></div>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/motherboard__img.svg"
                                             alt="motherboard-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Материнская плата</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component-list-container">
                                    <div class="component-list"></div>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/ram_img.svg" alt="ram-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Оперативная память</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component-list-container">
                                    <div class="component-list"></div>
                                </div>
                                <button class="component-hide-btn">Скрыть всё</button>
                            </div>
                            <div class="category">
                                <div class="part-category">
                                    <h3>Дополнительно</h3>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/cpu_img.svg" alt="cpu-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Процессор</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/cooler_img.svg" alt="cooler-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Кулер</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <div class="component">
                                    <div class="component-part component-img">
                                        <img src="./assets/images/icons/config_page/motherboard__img.svg"
                                             alt="motherboard-img"/>
                                    </div>
                                    <div class="component-part component-info">
                                        <span class="component-name">Материнская плата</span>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                    </div>
                                    <div class="component-part component-product-count">353 товара</div>
                                    <button class="component-part primary-btn select-button">Выбрать
                                        <img src="./assets/images/buttons/plus-review.svg" alt="">
                                    </button>
                                </div>
                                <button class="component-hide-btn">Скрыть всё</button>
                            </div>
                        </div>
                    </div>

                    <div id="selected-content">
                        <div class="categories-wrapper">
                            <div class="category">
                                <div class="part-category">
                                    <h3>Системный блок</h3>
                                    <div>
                                        <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                        <span>Обязательные
                            комплектующие</span>
                                    </div>
                                </div>
                                <div class="component-choosen">
                                    <div class="component-choosen-part info-choosen">
                                        <div class="choosen-img">
                                            <img src="./assets/images/card-4.png" alt="cpu-img"/>
                                        </div>
                                        <div class="choosen-info">
                                            <div>
                                                <span>Материнская плата</span>
                                                <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory"/>
                                            </div>
                                            <div>ASUS Prime B760M-K D4</div>
                                            <div>Код товара: 934841</div>
                                        </div>
                                    </div>
                                    <div class="component-choosen-part categories-tags">
                                        <span> 4xDDR5</span>
                                        <span>Intel B760</span>
                                    </div>
                                    <div class="component-choosen-part choosen-price">
                                        <div class="new-price">1256.<span>7 руб</span></div>
                                        <div class="old-price">7015.<span>30 руб</span></div>
                                    </div>
                                    <div class="component-choosen-part choosen-btns">
                                        <button class="component-list-btn-change">
                                            <img src="./assets/images/icons/change.svg">
                                            <span>заменить</span>
                                        </button>
                                        <button class="component-list-btn-delete">
                                            <img src="./assets/images/icons/delete.svg">
                                            <span>удалить</span>
                                        </button>
                                    </div>

                                </div>
                                <div class="component-choosen">
                                    <div class="component-choosen-part info-choosen">
                                        <div class="choosen-img">
                                            <img src="./assets/images/card-4.png" alt="cpu-img"/>
                                        </div>
                                        <div class="choosen-info">
                                            <div>
                                                <span>Материнская плата</span>
                                                <img src="./assets/images/icons/config_page/warning_img.svg"
                                                     alt="obligatory"/>
                                            </div>
                                            <div>ASUS Prime B760M-K D4</div>
                                            <div>Код товара: 934841</div>
                                        </div>
                                    </div>
                                    <div class="component-choosen-part categories-tags">
                                        <span> 4xDDR5</span>
                                        <span>Intel B760</span>
                                    </div>
                                    <div class="component-choosen-part choosen-price">
                                        <div class="new-price">1256.<span>7 руб</span></div>
                                        <div class="old-price">7015.<span>30 руб</span></div>
                                    </div>
                                    <div class="component-choosen-part choosen-btns">
                                        <button class="component-list-btn-change">
                                            <img src="./assets/images/icons/change.svg">
                                            <span>заменить</span>
                                        </button>
                                        <button class="component-list-btn-delete">
                                            <img src="./assets/images/icons/delete.svg">
                                            <span>удалить</span>
                                        </button>
                                    </div>

                                </div>
                                <div class="component-choose-item">
                                    <div>Выбрать ещё</div>
                                    <button class="component-part primary-btn select-button">Выбрать</button>
                                </div>


                            </div>

                            <div class="category">
                                <div class="part-category">
                                    <h3>Периферийные устройства</h3>
                                </div>
                                <div class="component-choose-item">
                                    <div>Ничего не выбрано</div>
                                    <button class="component-part primary-btn select-button">Выбрать</button>
                                </div>


                            </div>

                            <div class="category">
                                <div class="part-category">
                                    <h3>Дополнительно</h3>
                                </div>
                                <div class="component-choose-item">
                                    <div>Ничего не выбрано</div>
                                    <button class="component-part primary-btn select-button">Выбрать</button>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="configurator-illustative-block">
                <div class="hint-text">
                    <span>Нажмите +, чтобы выбрать комплектующую</span>
                    <img src="./assets/images/icons/config_page/question.svg"/>
                </div>
                <div class="illustative-block">
                    <div class="base-img">
                        <img class="background-img" src="./assets/images/icons/config_page/case-constructor.svg"/>

                        <div class="motherboard-block">
                            <img class="highlight-part part-motherboard"
                                 src="./assets/images/icons/config_page/motherboard_noadd.svg"/>
                            <button class="add-part-btn motherboard-btn" data-modal="motherboard">Материнская плата <img
                                        src="./assets/images/icons/config_page/plus.svg"/>
                            </button>
                        </div>
                        <div class="videocard-block">
                            <img class="highlight-part part-videocard"
                                 src="./assets/images/icons/config_page/videocard__noadd.svg"/>
                            <button class="add-part-btn videocard-btn" data-modal="videocard">Видеокарта <img
                                        src="./assets/images/icons/config_page/plus.svg"/>
                            </button>
                        </div>
                        <div class="cooler-block">
                            <img class="highlight-part part-cooler"
                                 src="./assets/images/icons/config_page/cooler_noadd.svg"/>
                            <button class="add-part-btn cooler-btn" data-modal="cooler" data-category-id="18">Кулер <img
                                        src="./assets/images/icons/config_page/plus.svg"/>
                            </button>
                        </div>
                        <div class="cpu-block">
                            <img class="highlight-part part-cpu" src="./assets/images/icons/config_page/cpu_noadd.svg"/>
                            <button class="add-part-btn cpu-btn" data-modal="cpu" data-category-id="8">Процессор <img
                                        src="./assets/images/icons/config_page/plus.svg"/>
                            </button>
                        </div>
                        <div class="powerunit-block">
                            <img class="highlight-part part-powerunit"
                                 src="./assets/images/icons/config_page/powerunit_noadd.svg"/>
                            <button class="add-part-btn powerunit-btn" data-modal="powerunit" data-category-id="54">Блок питания <img
                                        src="./assets/images/icons/config_page/plus.svg"/>
                            </button>
                        </div>
                        <div class="ram-unit">
                            <img class="highlight-part part-ram" src="./assets/images/icons/config_page/ram_noadd.svg"/>
                            <button class="add-part-btn ram-btn" data-modal="ram" data-category-id="17">Оперативная память <img
                                        src="./assets/images/icons/config_page/plus.svg"/>
                            </button>
                        </div>
                        <div class="ssd-block">
                            <img class="highlight-part part-ssd"
                                 src="./assets/images/icons/config_page/ssd__noadd.svg"/>
                            <button class="add-part-btn ssd-btn" data-modal="ssd" data-category-id="253">SSD <img
                                        src="./assets/images/icons/config_page/plus.svg"/>
                            </button>

                        </div>
                        <div class="hhd-block">
                            <img class="highlight-part part-hdd" src="./assets/images/icons/config_page/hdd_noadd.svg"/>
                            <button class="add-part-btn hdd-btn" data-modal="hdd" data-category-id="90">Жёский диск<img
                                        src="./assets/images/icons/config_page/plus.svg"/>
                            </button>
                        </div>
                        <div class="case-block">
                            <button class="add-part-btn case-btn" data-modal="case" data-category-id="53">Корпус <img
                                        src="./assets/images/icons/config_page/plus.svg"/>
                            </button>
                        </div>


                    </div>
                    <div class="illustative-block_btns">
                        <button class="clear-btn" id="clear-btn">Очистить</button>
                        <button class="in-cart-btn">
                            <span class="price">14256.<span class="price-cents">7 руб</span></span>
                            <span class="cart-text">В корзину</span></button>
                    </div>
                </div>
                <div class="btn-row">
                    <button id="print" class="product-btn">
                        <img src="./assets/images/icons/print.svg" alt=""/>
                        <span>печать</span>
                    </button>
                    <button id="download" class="product-btn">
                        <img src="./assets/images/icons/download.svg" alt=""/>
                        <span>скачать</span>
                    </button>
                    <button id="link" class="product-btn">
                        <img src="./assets/images/icons/link.svg" alt=""/>
                        <span>ссылка</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="categories-page">
            <button class="primary-btn review-btn review-modal-open">Оставить отзыв
                <img src="./assets/images/buttons/plus-review.svg" alt="">
            </button>
            <div class="categories page">
                <button>Для дома</button>
                <button>Для офиса</button>
                <button>Для игр</button>
                <button>Разработчику</button>
                <button>Дизайнеру</button>
            </div>
        </section>
    </main>

    <div class="cont-modal">
        <div class="modal form-modal wider-modal">
            <form id="form-modal" method="post" novalidate>
                <div class="contact-for-question">
                    <div class="contacts">
                        <div class="phone-nums">
                            <div class="robot-phone">
                                <img src="./assets/images/logo-company/mts.png"/>
                                <p>+375 29 <span>778-60-60</span></p>
                            </div>
                            <div class="robot-phone">
                                <img src="./assets/images/logo-company/a1.png"/>
                                <p>+375 44 <span>778-60-60</span></p>
                            </div>
                        </div>
                        <div class="contacts-buttons">
                            <a href="/" class="whatsapp-btn">
                                <img src="./assets/images/buttons/whatsapp.svg" alt="">
                                WhatsApp
                            </a>
                            <a href="/" class="telegram-btn">
                                <img src="./assets/images/buttons/tg.svg" alt="">
                                Telegram
                            </a>
                        </div>
                    </div>
                    <div class="main-content-form">
                        <h2 class="name-review ">Задать вопрос</h2>
                        <span class="subtitle-form">Отправим ответ на ваш e-mail сегодня или завтра<span>, подготовим 3
                      варианта
                      конфигураций
                      под ваши задачи </span></span>
                        <div class="cont-input">
                            <div class="form-group">
                                <label for="name">Имя <span class="required">*</span></label>
                                <input type="text" id="name" name="name" placeholder="Фёдор Владимирович" required>
                                <span class="error-message">Напишите своё имя</span>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail <span class="required">*</span></label>
                                <input type="email" id="email" name="email" placeholder="mail@gmail.com" required>
                                <span class="error-message">Введите корректный E-mail</span>
                            </div>
                            <div class="form-group full-width">
                                <label for="message">Сообщение <span class="required">*</span></label>
                                <textarea id="message" name="message" placeholder="Напишите свой вопрос"
                                          required></textarea>
                                <span class="error-message">Задайте вопрос</span>
                            </div>
                            <button type="submit" class="submit-button disabled">Отправить</button>
                        </div>
                    </div>
                </div>
                <div class="thaks-screen">
                    <h2 class="hedline-h2">Спасибо!</h2>
                    <p class="subtitle-thanks">Сообщение отправлено</p>
                    <img src="./assets/images/thn1.png" alt="Сообщение отправлено">
                </div>
                <div class="error-screen">
                    <h2 class="hedline-h2">Ошибка!</h2>
                    <p class="subtitle-thanks">Что-то пошло не так.
                        Пожалуйста, повторите попытку позже.</p>
                    <img src="./assets/images/error.png" alt="Сообщение отправлено">
                </div>
            </form>
            <div class="close-modal"></div>
        </div>
    </div>

    <div class="review-cont-modal">
        <div class="modal contact-form">
            <form action="#" method="post" novalidate>
                <h2 class="name-review " style="margin-bottom: 20px;">Оставьте отзыв</h2>
                <div class="cont-input">
                    <div class="form-group">
                        <label for="name">Имя <span class="required">*</span></label>
                        <input type="text" id="name" name="name" placeholder="Фёдор Владимирович" required>
                        <span class="error-message">Напишите своё имя</span>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail <span class="required">*</span></label>
                        <input type="email" id="email" name="email" placeholder="mail@mail.com" required>
                        <span class="error-message">Введите корректный E-mail</span>
                    </div>
                </div>
                <div class="form-group full-width category-group">
                    <label>Выберите категорию для отзыва <span class="required">*</span></label>
                    <div class="category-options">
                        <label class="category-option">
                            <input type="radio" name="category" value="Качество конфигураций" required>
                            Качество конфигураций
                        </label>
                        <label class="category-option">
                            <input type="radio" name="category" value="Работа сборщика" required>
                            Работа сборщика
                        </label>
                        <label class="category-option">
                            <input type="radio" name="category" value="Оценка сборки" required>
                            Оценка сборки
                        </label>
                        <label class="category-option">
                            <input type="radio" name="category" value="Консультация" required>
                            Консультация
                        </label>
                    </div>
                    <span class="error-message">Выберите хотя бы одну категорию</span>
                </div>
                <div class="form-group full-width">
                    <label for="message">Сообщение</label>
                    <textarea id="message" name="message" placeholder="Напишите свой отзыв"></textarea>
                    <span class="error-message">Напишите свой отзыв</span>
                </div>
                <div class="cont-input rating-inp">
                    <div class="form-group rating-group">
                        <label>Выбранo звёзд: <span id="rating-value">0</span> из 5</label>
                        <div class="star-rating" data-selected="0">
                            <span class="star" data-value="1"></span>
                            <span class="star" data-value="2"></span>
                            <span class="star" data-value="3"></span>
                            <span class="star" data-value="4"></span>
                            <span class="star" data-value="5"></span>
                        </div>
                    </div>
                    <button type="submit" class="submit-button" disabled>Отправить</button>
                </div>
                <div class="thaks-screen">
                    <h2 class="hedline-h2">Спасибо!</h2>
                    <p class="subtitle-thanks">Сообщение отправлено</p>
                    <img src="./assets/images/thn2.png" alt="Сообщение отправлено">
                </div>
                <div class="error-screen">
                    <h2 class="hedline-h2">Ошибка!</h2>
                    <p class="subtitle-thanks">Что-то пошло не так.
                        Пожалуйста, повторите попытку позже.</p>
                    <img src="./assets/images/error.png" alt="Сообщение отправлено">
                </div>
            </form>
            <div class="close-modal"></div>
        </div>
    </div>

    <div class="modal-overlay" id="modal-overlay">
        <div class="modal-frame">
            <div class="modal-header">
                <h2 class="modal-title" id="modal-title">Заголовок</h2>
                <div class="filter">
                    <div class="filter-search">
                        <img src="./assets/images/icons/search.svg" class="search-icon"/>
                        <input type="text" placeholder="Найти товар"/>
                    </div>
                </div>
                <button class="close-modal-btn">&times;</button>
            </div>
            <div class="modal-content">

                <aside>
                    <div class="filter-container" id="filter-container">
                        <div class="filter-buttons">
                            <button class="clear-btn">Очистить</button>
                            <button class="show-btn">Показать <span>212</span></button>
                        </div>
                    </div>
                </aside>
                <div class="main-content">
                    <div class="search-row-opts">
                        <label class="toggle-container">
                            <span>Акции</span>
                            <input type="checkbox" id="toggle">
                            <div class="toggle"></div>
                        </label>
                        <select class="categories-dropdown">
                            <option>По популярности</option>
                            <option>По новизне</option>
                            <option>По цене</option>
                        </select>

                        <div class="categories">
                            <button class="active">DeepCool</button>
                            <button>ExeGate</button>
                            <button>ID-CCOLING</button>
                            <button>Zalman</button>
                        </div>

                        <div class="view-switcher">
                            <span>Вид:</span>
                            <button class="view-btn active" data-view="list">
                                <span></span>
                            </button>
                            <button class="view-btn" data-view="grid">
                                <span></span>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </button>
                        </div>

                    </div>

                    <div class="products-container list-view" id="list-view">
                        <div class="product-card list-style desktop-only">
                            <div class="product-card-img list-style">
                                <div class="card-img-main-product list-style">
                                    <img src="assets/images/card-3.png" alt="Компьютер">
                                </div>

                            </div>
                            <div class="info">
                                <h3 class="product-title list-style">Cooler Master MasterLiquid PL240 Flux White Edition
                                    MLY-D24M-A23PZ-RW</h3>
                                <div class="more-data">
                                    <div class="product-code">Код товара: 2002850</div>
                                    <div class="details">
                                        <a href="">
                                            <span class="full-text">Смотреть подробнее</span>
                                            <span class="short-text">Подробнее</span>
                                            <img src="./assets/images/icons/view-detaitls.svg"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-characterictic-tags">
                                    <span>алюминий</span>
                                    <span>шум 32 дБ</span>
                                    <span>2300 об/мин</span>
                                    <span>PWM</span>
                                </div>
                            </div>
                            <div class="cashflow-options list-style">
                                <div class="buy-options">
                                    <div class="cont-price list-style">
                                        <p class="new-price">1256<span>.7 руб</span></p>
                                        <p class="old-price list-style">7015<span>.30 руб</span></p>
                                    </div>
                                    <div class="payment-options">
                                        <div class="payment-option green">от <span>42</span> руб/мес</div>
                                        <div class="payment-desc">картой рассрочки <br> или в кредит</div>
                                    </div>
                                </div>
                                <div class="buttons-for-deal">
                                    <button class="buy-btn">Добавить</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="products-container grid-view hidden" id="grid-view">
                        <div class="product-card grid-style">
                            <div class="product-card-img grid-style">
                                <div class="card-img-main-product grid-style">
                                    <img src="./assets/images/card-3.png" alt="Компьютер">
                                </div>
                            </div>
                            <div class="info">
                                <div class="product-title-rate">
                                    <h3 class="product-title grid-style">Cooler Master MasterLiquid PL240 Flux White
                                        Edition
                                        MLY-D24M-A23PZ-RW</h3>
                                </div>
                                <div class="info-details">
                                    <div class="product-code grid-style">Код товара: 2002850</div>
                                    <div class="details">
                                        <a href="">
                                            <span class="full-text">Смотреть подробнее</span>
                                            <span class="short-text">Подробнее</span>
                                            <img src="./assets/images/icons/view-detaitls.svg"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-characterictic-tags">
                                    <span>алюминий</span>
                                    <span>шум 32 дБ</span>
                                    <span>2300 об/мин</span>
                                </div>
                                <div class="product-price">
                                    <div class="cont-price grid-style">
                                        <p class="new-price grid-style">1256<span>.7 руб</span></p>
                                        <p class="old-price grid-style">7015<span>.30 руб</span></p>
                                    </div>
                                    <div class="payment-option green grid-style desktop-only">от &nbsp;<span>42</span>
                                        руб/мес
                                    </div>
                                </div>
                                <div class="button-cont">
                                    <button class="buy-btn">Добавить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal-overlay" id="modal-overlay">
        <div class="modal-frame">
            <div class="modal-header">
                <h2 class="modal-title" id="modal-title">Заголовок</h2>

                <button class="close-modal-btn">&times;</button>
            </div>
            <div class="modal-content">
                <div class="modal-item-main-info">
                    <div class="modal-item-title">
                        <h3>
                            Кулер для процессора Cooler Master MasterLiquid PL240 Flux White Edition MLY-D24M-A23PZ-RW
                        </h3>
                        <div>Код товара:</div>
                    </div>
                    <div class="modal-item-info">
                        <div class="modal-item-img"></div>
                        <div class="modal-item-about">
                            <h2>О товаре</h2>
                            <div class="modal-item-tags">
                                <spnan></spnan>
                                <spnan></spnan>
                                <spnan></spnan>
                                <spnan></spnan>
                                <spnan></spnan>
                                <spnan></spnan>
                            </div>
                            <a> Все характеристики</a>
                            <div>
                                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Видеообзор этого
                                    товара</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="popular-cards-config">
        <h2 class="hedline-h2">Популярные сборки</h2>
        <div class="slider-arrow prev-btn hidden">
            <img src="./assets/images/buttons/Button - prev.svg"/>
        </div>
        <div class="slider-arrow next-btn">
            <img src="./assets/images/buttons/Button - Next.svg"/>
        </div>
        <div class="popular-list">
            <div class="popular-card">
                <div class="card-img">
                    <div class="card-img-main">
                        <img src="./assets/images/card-1.png" alt=""/>
                    </div>
                    <div class="card-img-sec">
                        <div class="card-img-sec-main">
                            <img src="./assets/images/card-2.png" alt=""/>
                        </div>
                        <div class="card-img-btn-cont">
                            <div class="card-img-btn">
                                <img src="./assets/images/card-3.png" alt=""/>
                            </div>
                            <div class="card-img-btn">
                                <a href="/">
                                    <img src="./assets/images/icons/svg.svg" alt=""/>
                                    <span>Еще</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-descr">
                    <h3 class="card-title">Игровой компьютер серии Prologic [2006326]</h3>
                    <div class="card-tags-cont">
                        <div class="card-tag">lorem ipsum</div>
                        <div class="card-tag">lorem ipsum</div>
                        <div class="card-tag">lorem ipsum</div>
                    </div>
                    <div class="cont-price">
                        <p class="new-price">6100<span>.26 руб</span></p>
                        <p class="old-price">7015<span>.30 руб</span></p>
                    </div>
                    <div class="button-cont">
                        <button class="primary-btn">В корзину</button>
                        <button class="secondary-btn">В конфигуратор</button>
                    </div>
                </div>
            </div>
            <div class="popular-card">
                <div class="card-img">
                    <div class="card-img-main">
                        <img src="./assets/images/card-1.png" alt=""/>
                    </div>
                    <div class="card-img-sec">
                        <div class="card-img-sec-main">
                            <img src="./assets/images/card-2.png" alt=""/>
                        </div>
                        <div class="card-img-btn-cont">
                            <div class="card-img-btn">
                                <img src="./assets/images/card-3.png" alt=""/>
                            </div>
                            <div class="card-img-btn">
                                <a href="/">
                                    <img src="./assets/images/icons/svg.svg" alt=""/>
                                    <span>Еще</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-descr">
                    <h3 class="card-title">Игровой компьютер серии Prologic [2006326]</h3>
                    <div class="card-tags-cont">
                        <div class="card-tag">lorem ipsum</div>
                        <div class="card-tag">lorem ipsum</div>
                        <div class="card-tag">lorem ipsum</div>
                    </div>
                    <div class="cont-price">
                        <p class="new-price">6100<span>.26 руб</span></p>
                        <p class="old-price">7015<span>.30 руб</span></p>
                    </div>
                    <div class="button-cont">
                        <button class="primary-btn">В корзину</button>
                        <button class="secondary-btn">В конфигуратор</button>
                    </div>
                </div>
            </div>
            <div class="popular-card">
                <div class="card-img">
                    <div class="card-img-main">
                        <img src="./assets/images/card-1.png" alt=""/>
                    </div>
                    <div class="card-img-sec">
                        <div class="card-img-sec-main">
                            <img src="./assets/images/card-2.png" alt=""/>
                        </div>
                        <div class="card-img-btn-cont">
                            <div class="card-img-btn">
                                <img src="./assets/images/card-3.png" alt=""/>
                            </div>
                            <div class="card-img-btn">
                                <a href="/">
                                    <img src="./assets/images/icons/svg.svg" alt=""/>
                                    <span>Еще</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-descr">
                    <h3 class="card-title">Игровой компьютер серии Prologic [2006326]</h3>
                    <div class="card-tags-cont">
                        <div class="card-tag">lorem ipsum</div>
                        <div class="card-tag">lorem ipsum</div>
                        <div class="card-tag">lorem ipsum</div>
                    </div>
                    <div class="cont-price">
                        <p class="new-price">6100<span>.26 руб</span></p>
                        <p class="old-price">7015<span>.30 руб</span></p>
                    </div>
                    <div class="button-cont">
                        <button class="primary-btn">В корзину</button>
                        <button class="secondary-btn">В конфигуратор</button>
                    </div>
                </div>
            </div>
            <div class="popular-card">
                <div class="card-img">
                    <div class="card-img-main">
                        <img src="./assets/images/card-1.png" alt=""/>
                    </div>
                    <div class="card-img-sec">
                        <div class="card-img-sec-main">
                            <img src="./assets/images/card-2.png" alt=""/>
                        </div>
                        <div class="card-img-btn-cont">
                            <div class="card-img-btn">
                                <img src="./assets/images/card-3.png" alt=""/>
                            </div>
                            <div class="card-img-btn">
                                <a href="/">
                                    <img src="./assets/images/icons/svg.svg" alt=""/>
                                    <span>Еще</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-descr">
                    <h3 class="card-title">Игровой компьютер серии Prologic [2006326]</h3>
                    <div class="card-tags-cont">
                        <div class="card-tag">lorem ipsum</div>
                        <div class="card-tag">lorem ipsum</div>
                        <div class="card-tag">lorem ipsum</div>
                    </div>
                    <div class="cont-price">
                        <p class="new-price">6100<span>.26 руб</span></p>
                        <p class="old-price">7015<span>.30 руб</span></p>
                    </div>
                    <div class="button-cont">
                        <button class="primary-btn">В корзину</button>
                        <button class="secondary-btn">В конфигуратор</button>
                    </div>
                </div>
            </div>
            <div class="popular-card">
                <div class="card-img">
                    <div class="card-img-main">
                        <img src="./assets/images/card-1.png" alt=""/>
                    </div>
                    <div class="card-img-sec">
                        <div class="card-img-sec-main">
                            <img src="./assets/images/card-2.png" alt=""/>
                        </div>
                        <div class="card-img-btn-cont">
                            <div class="card-img-btn">
                                <img src="./assets/images/card-3.png" alt=""/>
                            </div>
                            <div class="card-img-btn">
                                <a href="/">
                                    <img src="./assets/images/icons/svg.svg" alt=""/>
                                    <span>Еще</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-descr">
                    <h3 class="card-title">Игровой компьютер серии Prologic [2006326]</h3>
                    <div class="card-tags-cont">
                        <div class="card-tag">lorem ipsum</div>
                        <div class="card-tag">lorem ipsum</div>
                        <div class="card-tag">lorem ipsum</div>
                    </div>
                    <div class="cont-price">
                        <p class="new-price">6100<span>.26 руб</span></p>
                        <p class="old-price">7015<span>.30 руб</span></p>
                    </div>
                    <div class="button-cont">
                        <button class="primary-btn">В корзину</button>
                        <button class="secondary-btn">В конфигуратор</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<?= var_dump(session()->get('assembly')); ?>
</body>
<script>
    document.getElementById('clear-btn').addEventListener('click', () => {
        fetch('/configurator/clear', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest', // необязательно, но CI4 часто любит это
            },
            body: JSON.stringify({}) // можно пустой, если контроллер ничего не ждёт
        })
            .then(res => {
                if (res.ok) {
                    location.reload();
                }
            });
    });
</script>
</html>