<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="./assets/style/style.css" />
    <link rel="stylesheet" href="./assets/style/style-config_page.css">
    <link rel="stylesheet" href="./assets/style/style-adaptive.css">
    <script src="./assets/script/script.js"></script>
    <script src="./assets/script/config_page.js"></script>
</head>

<body>
<div class="container">
    <header>
        <div class="breadcrumb">
            <a href="#" class="breadcrumb-item">Конфигуратор ПК</a>
            <span class="breadcrumb-item">Каталог конфигураций</span>
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
                            <?php foreach ($componentListData as $category): ?>
                                <?= view('components/config_page/category', [
                                        ...$category,
                                    'categoryItemsCounts' => $categoryItemsCounts
                                ]) ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>



            <div class="configurator-illustative-block">
                <div class="hint-text">
                    <span>Нажмите +, чтобы выбрать комплектующую</span>
                    <img src="./assets/images/icons/config_page/question.svg" />
                </div>
                <div class="illustative-block">
                    <div class="base-img">
                        <div class="case-block">
                            <img class="highlight-part part-case" src="./assets/images/icons/config_page/case-constructor.svg" />
                            <img class="added-part part-case" src="./assets/images/icons/config_page/case_added.svg" />

                            <button class="add-part-btn case-btn" data-modal="53">Корпус <img
                                        src="./assets/images/icons/config_page/plus.svg" />
                            </button>
                        </div>
                        <div class="motherboard-block">
                            <img class="highlight-part part-motherboard"
                                 src="./assets/images/icons/config_page/motherboard_noadd.svg" />
                            <img class="added-part part-motherboard"
                                 src="./assets/images/icons/config_page/motherboard_added.svg" />
                            <button class="add-part-btn motherboard-btn" data-modal="9">Материнская плата <img
                                        src="./assets/images/icons/config_page/plus.svg" />
                            </button>
                        </div>
                        <div class="videocard-block">
                            <img class="highlight-part part-videocard"
                                 src="./assets/images/icons/config_page/videocard__noadd.svg" />
                            <img class="added-part part-videocard" src="./assets/images/icons/config_page/videocard__added.svg" />
                            <button class="add-part-btn videocard-btn" data-modal="15">Видеокарта <img
                                        src="./assets/images/icons/config_page/plus.svg" />
                            </button>
                        </div>
                        <div class="cooler-block">
                            <img class="highlight-part part-cooler" src="./assets/images/icons/config_page/cooler_noadd.svg" />
                            <img class="added-part part-cooler" src="./assets/images/icons/config_page/cooler_added.svg" />

                            <button class="add-part-btn cooler-btn" data-modal="18">Кулер <img
                                        src="./assets/images/icons/config_page/plus.svg" />
                            </button>
                        </div>
                        <div class="cpu-block">
                            <img class="highlight-part part-cpu" src="./assets/images/icons/config_page/cpu_noadd.svg" />
                            <img class="added-part part-cpu" src="./assets/images/icons/config_page/cpu_added.svg" />
                            <button class="add-part-btn cpu-btn" data-modal="8">Процессор <img
                                        src="./assets/images/icons/config_page/plus.svg" />
                            </button>
                        </div>
                        <div class="powerunit-block">
                            <img class="highlight-part part-powerunit"
                                 src="./assets/images/icons/config_page/powerunit_noadd.svg" />
                            <img class="added-part part-powerunit" src="./assets/images/icons/config_page/powerunit_added.svg" />
                            <button class="add-part-btn powerunit-btn" data-modal="54">Блок питания <img
                                        src="./assets/images/icons/config_page/plus.svg" />
                            </button>
                        </div>
                        <div class="ram-unit">
                            <img class="highlight-part part-ram" src="./assets/images/icons/config_page/ram_noadd.svg" />
                            <img class="added-part part-ram" src="./assets/images/icons/config_page/ram_added.svg" />
                            <button class="add-part-btn ram-btn" data-modal="17">Оперативная память <img
                                        src="./assets/images/icons/config_page/plus.svg" />
                            </button>
                        </div>
                        <div class="ssd-block">
                            <img class="highlight-part part-ssd" src="./assets/images/icons/config_page/ssd__noadd.svg" />
                            <img class="added-part part-ssd" src="./assets/images/icons/config_page/ssd_added.svg" />
                            <button class="add-part-btn ssd-btn" data-modal="253">SSD <img
                                        src="./assets/images/icons/config_page/plus.svg" />
                            </button>

                        </div>
                        <div class="hhd-block">
                            <img class="highlight-part part-hdd" src="./assets/images/icons/config_page/hdd_noadd.svg" />
                            <img class="added-part part-hdd" src="./assets/images/icons/config_page/hdd_added.svg" />
                            <button class="add-part-btn hdd-btn" data-modal="90">Жёский диск<img
                                        src="./assets/images/icons/config_page/plus.svg" />
                            </button>
                        </div>
                    </div>

                    <div class="illustative-block_btns">
                        <button class="clear-btn">Очистить</button>
                        <button class="in-cart-btn">
                            <span class="price">14256.<span class="price-cents">7 руб</span></span>
                            <span class="cart-text">В корзину</span></button>
                    </div>
                </div>
                <div class="btn-row">
                    <button id="print" class="product-btn">
                        <img src="./assets/images/icons/print.svg" alt="" />
                        <span>печать</span>
                    </button>
                    <button id="download" class="product-btn">
                        <img src="./assets/images/icons/download.svg" alt="" />
                        <span>скачать</span>
                    </button>
                    <button id="link" class="product-btn">
                        <img src="./assets/images/icons/link.svg" alt="" />
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

        <section class="popular-cards-config">
            <h2 class="hedline-h2">Популярные сборки</h2>
            <div class="slider-arrow prev-btn hidden">
                <img src="./assets/images/buttons/Button - prev.svg" />
            </div>
            <div class="slider-arrow next-btn">
                <img src="./assets/images/buttons/Button - Next.svg" />
            </div>
            <div class="popular-list">
                <div class="popular-card">
                    <div class="card-img">
                        <div class="card-img-main">
                            <img src="./assets/images/card-1.png" alt="" />
                        </div>
                        <div class="card-img-sec">
                            <div class="card-img-sec-main">
                                <img src="./assets/images/card-2.png" alt="" />
                            </div>
                            <div class="card-img-btn-cont">
                                <div class="card-img-btn">
                                    <img src="./assets/images/card-3.png" alt="" />
                                </div>
                                <div class="card-img-btn">
                                    <a href="/">
                                        <img src="./assets/images/icons/svg.svg" alt="" />
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
                            <img src="./assets/images/card-1.png" alt="" />
                        </div>
                        <div class="card-img-sec">
                            <div class="card-img-sec-main">
                                <img src="./assets/images/card-2.png" alt="" />
                            </div>
                            <div class="card-img-btn-cont">
                                <div class="card-img-btn">
                                    <img src="./assets/images/card-3.png" alt="" />
                                </div>
                                <div class="card-img-btn">
                                    <a href="/">
                                        <img src="./assets/images/icons/svg.svg" alt="" />
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
                            <img src="./assets/images/card-1.png" alt="" />
                        </div>
                        <div class="card-img-sec">
                            <div class="card-img-sec-main">
                                <img src="./assets/images/card-2.png" alt="" />
                            </div>
                            <div class="card-img-btn-cont">
                                <div class="card-img-btn">
                                    <img src="./assets/images/card-3.png" alt="" />
                                </div>
                                <div class="card-img-btn">
                                    <a href="/">
                                        <img src="./assets/images/icons/svg.svg" alt="" />
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
                            <img src="./assets/images/card-1.png" alt="" />
                        </div>
                        <div class="card-img-sec">
                            <div class="card-img-sec-main">
                                <img src="./assets/images/card-2.png" alt="" />
                            </div>
                            <div class="card-img-btn-cont">
                                <div class="card-img-btn">
                                    <img src="./assets/images/card-3.png" alt="" />
                                </div>
                                <div class="card-img-btn">
                                    <a href="/">
                                        <img src="./assets/images/icons/svg.svg" alt="" />
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
                            <img src="./assets/images/card-1.png" alt="" />
                        </div>
                        <div class="card-img-sec">
                            <div class="card-img-sec-main">
                                <img src="./assets/images/card-2.png" alt="" />
                            </div>
                            <div class="card-img-btn-cont">
                                <div class="card-img-btn">
                                    <img src="./assets/images/card-3.png" alt="" />
                                </div>
                                <div class="card-img-btn">
                                    <a href="/">
                                        <img src="./assets/images/icons/svg.svg" alt="" />
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
    </main>

    <div class="cont-modal">
        <div class="modal form-modal wider-modal">
            <form id="form-modal" method="post" novalidate>
                <div class="contact-for-question">
                    <div class="contacts">
                        <div class="phone-nums">
                            <div class="robot-phone">
                                <img src="./assets/images/logo-company/mts.png" />
                                <p>+375 29 <span>778-60-60</span></p>
                            </div>
                            <div class="robot-phone">
                                <img src="./assets/images/logo-company/a1.png" />
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
                                <textarea id="message" name="message" placeholder="Напишите свой вопрос" required></textarea>
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
                    <img src="./assets/images/th2.png" alt="Сообщение отправлено">
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

    <div class="modal-overlay" id="modal-catalog">
        <div class="modal-frame">
            <div class="modal-header">
                <h2 class="modal-title" id="modal-title">Заголовок</h2>
                <div class="filter">
                    <div class="filter-search">
                        <img src="./assets/images/icons/search.svg" class="search-icon" />
                        <input type="text" placeholder="Найти товар" />
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
                            <button class="view-btn active" data-view="list" onclick="handleViewSwitch(this)">
                                <span></span>
                            </button>
                            <button class="view-btn" data-view="grid" onclick="handleViewSwitch(this)">
                            <span>
                              <div></div>
                              <div></div>
                              <div></div>
                              <div></div>
                            </span>
                            </button>
                        </div>

                    </div>

                    <div class="products-container list-view" id="list-view">
                    </div>
                    <div class="products-container grid-view" id="grid-view">
                    </div>

                    <div class="pagination-container" id="pagination-container">
                        <div class="pagination-choice">
                            <div class="pagination" id="pagination">
                            </div>
                            <button class="show-more-btn">Показать ещё</button>
                        </div>

                        <div class="page-choice">
                            <span class="items-per-page-label">Товаров на странице по</span>
                            <div class="dropdown-wrapper">
                                <div class="dropdown-btn" id="dropdownToggle">
                                    <span id="dropdownValue">20</span>
                                    <img src="./assets/images/icons/arrow-down.svg" class="toggle-arrow" />
                                </div>
                                <ul class="dropdown-list hidden" id="dropdownList">
                                    <li onclick="handlePerPageChange(10)">10</li>
                                    <li onclick="handlePerPageChange(20)">20</li>
                                    <li onclick="handlePerPageChange(50)">50</li>
                                    <li onclick="handlePerPageChange(100)">100</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-overlay" id="modal-about-item">
        <div class="modal-frame">
            <div class="modal-item-header">
                <div class="catalog-back" id="back-to-catalog-block">
                    <div id="back-to-catalog">
                        <img src="./assets/images/icons/arrow-left.svg" />
                    </div>
                    <div>вернуться в каталог</div>
                </div>
                <button class="close-modal-btn">&times;</button>
            </div>
            <div class="modal-content">
                <div class="modal-item-main-info">
                    <div class="modal-item-title">
                        <div>
                            Кулер для процессора Cooler Master MasterLiquid PL240 Flux White Edition MLY-D24M-A23PZ-RW
                        </div>
                        <div>Код товара: 976013</div>
                    </div>
                    <div class="modal-item-info">

                        <div class="modal-gallery">
                            <div class="modal-preview">
                                <div class="modal-preview-img-wrapper" onclick="changeImage(this)" class="active">
                                    <img src="./assets/images/card-3.png" alt="detail">
                                </div>
                                <div class="modal-preview-img-wrapper" onclick="changeImage(this)" class="active">
                                    <img src="./assets/images/card-3.png" alt="detail">
                                </div>
                                <div class="modal-preview-img-wrapper" onclick="changeImage(this)" class="active">
                                    <img src="./assets/images/card-3.png">
                                </div>
                            </div>
                            <div class="modal-main-img" id="mainImg">
                                <img src="./assets/images/card-cooler.png" alt="main image">
                            </div>
                        </div>

                        <div class="modal-item-about">
                            <div class="modal-item-about-header">О товаре</div>
                            <div class="modal-item-tags">
                                <span>аллюминий</span>
                                <span>вентилятор 120 мм</span>
                                <span>PWM</span>
                                <span>шум 32дБ</span>
                                <span>2300 об/мин</span>
                                <span>жидкостное охлаждение</span>
                            </div>
                            <a class="link-characteristics" href="#all-characteristics">Все характеристики</a>
                            <div class="youtube-link">
                                <img src="./assets/images/icons/config_page/youtube.svg" />
                                <a class="link-video" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Видеообзор
                                    этого товара</a>
                            </div>
                        </div>
                        <div class="modal-price-block">
                            <div>
                                <div class="modal-content-price">
                                    <p class="new-price">1256<span>.7 руб</span></p>
                                    <p class="old-price">7015<span>.30 руб</span></p>
                                </div>
                            </div>

                            <div class="payment-options">

                                <div class="payment-option green">от 42 руб/мес</div>
                                <div class="payment-desc">картой рассрочки <br> или в кредит</div>


                                <div class="payment-option beige">24 мес</div>
                                <div class="payment-guarant">гарантия</div>

                            </div>
                            <button class="btn-cart" id="buy-item">Добавить</button>
                            <button class="btn-change" id="change-item">Заменить</button>

                            <div class="change-choice" id="change-choice">
                                <div class="quantity-control">
                                    <button class="qty-btn minus">−</button>
                                    <input type="number" value="1" min="1" class="qty-input">
                                    <button class="qty-btn plus">+</button>
                                </div>
                                <button class="modal-about-choosen">Выбрано</button>
                                <button class="btn-delete-modal-item">
                                    <img src="./assets/images/icons/delete.svg">
                                    <span>удалить</span>
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="modal-item-characteristics" id="all-characteristics">
                        <div class="modal-characteristics-head">Характеристики</div>
                        <div class="modal-characteristics-info">
                            <p>Информация</p>
                            <div>Armor A80 - защищенный внешний винчестер из линейки Silicon-Power. Помимо пыли, вибрации и ударов,
                                защищен от влаги и может работать даже под водой. Оснащен встраиваемым в корпус USB-кабелем. Основное
                                отличие от модели A70 - поддержка USB 3.0.</div>
                        </div>
                        <div class="modal-characteristics-block">
                            <div>
                                <div class="modal-characteristics-part">
                                    <p>Основные</p>
                                    <div class="modal-menu">
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Тип</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">кулер для процессора</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Монтаж в 19" стойку</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">нет</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Охлаждение</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">жидкостное</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Цвет</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">белый</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-characteristics-part">
                                    <p>Вентилятор</p>
                                    <div class="modal-menu">
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Диаметр вентилятора</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">120 мм</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Максимальная скорость вращения</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">2 300 об/мин</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Контроль скорости вращения (PWM)</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">да</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Тип подключения</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">4 pin</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Виброизоляция</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">да</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Количество вентиляторов</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">2</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Максимальный воздушный поток</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">72.37 CFM</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Термоконтроль</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">нет</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">LED-подсветка</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">да ARGB</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Максимальный уровень шума</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">32дБ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="modal-characteristics-part">
                                    <p>Технические характеристики</p>
                                    <div class="modal-menu">
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Сокет</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">AM5, AM4, LGA1700, LGA1200, LGA1151, LGA1150, LGA1155,
                          LGA2066,
                          LGA2011-3, LGA2011, TR4, FM2+, FM2, AM3+, AM3, AM2+, AM2, FM1, LGA1156</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Испарительные камеры</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">нет</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Материал радиатора</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">алюминий</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">тепловые трубки</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">нет</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-characteristics-part">
                                    <p>Помпа</p>
                                    <div class="modal-menu">
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Контроль скорости вращения (PWM)</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">нет</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">LED-подсветка</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">да ARGB</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Тип подключения</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">3 pin</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Максимальный уровень шума</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">15 дБ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-characteristics-part">
                                    <p>Размеры и вес</p>
                                    <div class="modal-menu">
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Ширина</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">277 мм</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Монтаж в 19" стойку</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">27.2 мм (радиатор)</span>
                                        </div>
                                        <div class="modal-menu-item">
                                            <span class="modal-menu-label">Глубина</span>
                                            <span class="modal-menu-dots"></span>
                                            <span class="characteristics-data">119.6 мм</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>

</body>

</html>
