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
    <link rel="stylesheet" href="./assets/style/style-catalog.css">
    <link rel="stylesheet" href="./assets/style/style-adaptive.css">
    <script src="./assets/script/script.js"></script>
</head>

<body>
<div class="container catalog">

    <section class="product-header">
        <div class="breadcrumb">
            <a href="#" class="breadcrumb-item">Конфигуратор ПК</a>
            <span class="breadcrumb-item">Каталог конфигураций</span>
        </div>

        <h1 class="headline-h1">Каталог конфигураций </h1>
        <div class="subtitle">По цене от <span>867.86 руб </span> &nbsp;до <span>14155.61 руб.</span></div>
    </section>


    <section class="magazine">
        <aside>
            <div class="filter-container">
                <div class="filter-header">
                    <h2>Фильтр</h2>
                    <span>0</span>
                    <button id="close-filter" class="close-filter">×</button>
                </div>
                <div class="filter">
                    <div class="filter-search">
                        <input type="text" placeholder="Поиск по фильтру" />
                        <img src="./assets/images/icons/search.svg" class="search-icon" />
                    </div>
                </div>
                <div class="filter-section price dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Цена</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="filter-price-input">
                            <input type="number" class="input-min" step="0.01" value="239.57">
                            <input type="number" class="input-max" step="0.01" value="16325.36">
                        </div>
                        <div class="price-slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="20000" value="239.57" step="0.01">
                            <input type="range" class="range-max" min="0" max="20000" value="16352.36" step="0.01">
                        </div>
                    </div>
                </div>
                <div class="filter-section processor dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Процессор</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="filter-search inner-search">
                            <input type="text" class="search" placeholder="Поиск" />
                            <img src="./assets/images/icons/search.svg" class="search-icon" />
                        </div>
                        <div class="options">
                            <label><input type="checkbox"> Core i5 <span> (234)</span></label>
                            <label><input type="checkbox"> Core i5 <span> (234)</span></label>
                            <label><input type="checkbox"> Core i5 <span> (234)</span></label>
                            <label><input type="checkbox"> Core i5 <span> (234)</span></label>
                            <label><input type="checkbox"> Core i5 <span> (234)</span></label>
                            <label><input type="checkbox"> Core i5 <span> (234)</span></label>
                            <label><input type="checkbox"> Core i5 <span> (234)</span></label>
                            <label><input type="checkbox"> Core i5 <span> (234)</span></label>
                        </div>
                    </div>
                </div>
                <div class="filter-section memory-volume dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Объём памяти</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="options">
                            <label><input type="checkbox"> 4 ГБ <span>(234)</span></label>
                            <label><input type="checkbox"> 8 ГБ <span>(234)</span></label>
                            <label><input type="checkbox"> 16 ГБ <span>(234)</span></label>
                            <label><input type="checkbox"> 32 ГБ <span>(234)</span></label>
                            <label><input type="checkbox"> 48 ГБ <span>(234)</span></label>
                            <label><input type="checkbox"> 64 ГБ <span>(234)</span></label>
                            <label><input type="checkbox"> 96 ГБ <span>(234)</span></label>
                            <label><input type="checkbox"> 128 ГБ <span>(234)</span></label>
                        </div>
                    </div>
                </div>
                <div class="filter-section memory-type dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Тип памяти</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="options">
                            <label><input type="checkbox"> DDR2 <span>(234)</span></label>
                            <label><input type="checkbox"> DDR3 <span>(234)</span></label>
                            <label><input type="checkbox"> DDR4 <span>(234)</span></label>
                            <label><input type="checkbox"> DDR5 <span>(234)</span></label>
                        </div>
                    </div>
                </div>
                <div class="filter-section chip-set dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Чипсет</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="options">
                            <label><input type="checkbox"> AMD A320 <span>(234)</span></label>
                            <label><input type="checkbox"> AMD A320<span>(234)</span></label>
                            <label><input type="checkbox"> AMD A320 <span>(234)</span></label>
                            <label><input type="checkbox"> AMD A320 <span>(234)</span></label>
                            <label><input type="checkbox"> AMD A320 <span>(234)</span></label>
                            <label><input type="checkbox"> AMD A320 <span>(234)</span></label>
                            <label><input type="checkbox"> AMD A320 <span>(234)</span></label>
                            <label><input type="checkbox"> AMD A320 <span>(234)</span></label>
                        </div>
                    </div>
                </div>
                <div class="filter-section videocard dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Видеокарта</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="options extra-long">
                            <label><input type="checkbox"> GeForce RTX 4070 Super <span>(234)</span></label>
                            <label><input type="checkbox"> GeForce RTX 4070 Super<span>(234)</span></label>
                            <label><input type="checkbox"> GeForce RTX 4070 Super <span>(234)</span></label>
                            <label><input type="checkbox"> GeForce RTX 4070 Super <span>(234)</span></label>
                            <label><input type="checkbox"> GeForce RTX 4070 Super <span>(234)</span></label>
                            <label><input type="checkbox"> GeForce RTX 4070 Super <span>(234)</span></label>
                            <label><input type="checkbox"> GeForce RTX 4070 Super <span>(234)</span></label>
                            <label><input type="checkbox"> GeForce RTX 4070 Super <span>(234)</span></label>
                        </div>
                    </div>
                </div>
                <div class="filter-section hhd-type dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Жёсткий диск</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="options">
                            <label><input type="checkbox"> WD <span>(234)</span></label>
                            <label><input type="checkbox"> Dell<span>(234)</span></label>
                            <label><input type="checkbox"> HGST <span>(234)</span></label>
                            <label><input type="checkbox"> IBM <span>(234)</span></label>
                            <label><input type="checkbox"> Intel <span>(234)</span></label>
                            <label><input type="checkbox"> Lenovo <span>(234)</span></label>
                            <label><input type="checkbox"> RED <span>(234)</span></label>
                            <label><input type="checkbox"> HP <span>(234)</span></label>
                        </div>
                    </div>
                </div>
                <div class="filter-section ssd dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Твердотельный диск (SSD)</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="filter-price-input">
                            <input type="number" class="input-min" step="100" value="60">
                            <input type="number" class="input-max" step="100" value="12096">
                        </div>
                        <div class="price-slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="20000" value="60" step="100">
                            <input type="range" class="range-max" min="0" max="20000" value="12096" step="100">
                        </div>
                    </div>
                </div>
                <div class="filter-section hhd-volume dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Объём HHD (Гб)</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="filter-price-input">
                            <input type="number" class="input-min" step="0.01" value="500">
                            <input type="number" class="input-max" step="0.01" value="36000">
                        </div>
                        <div class="price-slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="20000" value="500" step="500">
                            <input type="range" class="range-max" min="0" max="20000" value="36000" step="500">
                        </div>
                    </div>
                </div>
                <div class="filter-section power dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Мощность, ВТ</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="filter-price-input">
                            <input type="number" class="input-min" step="0.01" value="300">
                            <input type="number" class="input-max" step="0.01" value="1600">
                        </div>
                        <div class="price-slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="20000" value="300" step="100">
                            <input type="range" class="range-max" min="0" max="20000" value="1600" step="100">
                        </div>
                    </div>
                </div>
                <div class="filter-section software">
                    <div class="filter-title dropdown-header">
                        <h3>Программное обеспечение</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="options extra-long">
                            <label><input type="checkbox"> Windows Server <span>(234)</span></label>
                            <label><input type="checkbox"> Windows Server<span>(234)</span></label>
                            <label><input type="checkbox"> Windows Server <span>(234)</span></label>
                            <label><input type="checkbox"> Windows Server <span>(234)</span></label>
                        </div>
                    </div>
                </div>
                <div class="filter-section colour dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Цвет корпуса</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="options">
                            <label>
                                <input type="checkbox">
                                <span class="color-box" style="background-color: black;"></span>
                                Чёрный <span>(234)</span>
                            </label>
                            <label>
                                <input type="checkbox">
                                <span class="color-box" style="background-color: silver;"></span>
                                Серебристый <span>(234)</span>
                            </label>
                            <label>
                                <input type="checkbox">
                                <span class="color-box" style="background-color: white; border: 1px solid #ccc;"></span>
                                Белый <span>(234)</span>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="filter-section height-prod dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Ширина,мм</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="filter-price-input">
                            <input type="number" class="input-min" step="0.01" value="36">
                            <input type="number" class="input-max" step="0.01" value="445">
                        </div>
                        <div class="price-slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="1000" value="36" step="5">
                            <input type="range" class="range-max" min="0" max="1000" value="445" step="5">
                        </div>
                    </div>
                </div>
                <div class="filter-section width-prod dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Высота,мм</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="filter-price-input">
                            <input type="number" class="input-min" step="0.01" value="6">
                            <input type="number" class="input-max" step="0.01" value="580">
                        </div>
                        <div class="price-slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="900" value="6" step="1">
                            <input type="range" class="range-max" min="0" max="900" value="580" step="1">
                        </div>
                    </div>
                </div>
                <div class="filter-section depth-prod dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Глубина,мм</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="filter-price-input">
                            <input type="number" class="input-min" step="0.01" value="17">
                            <input type="number" class="input-max" step="0.01" value="499">
                        </div>
                        <div class="price-slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="700" value="17" step="1">
                            <input type="range" class="range-max" min="0" max="700" value="499" step="1">
                        </div>
                    </div>
                </div>
                <div class="filter-section screen dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Монитор</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="options extra-long">
                            <label><input type="checkbox"> Xiomi Gaming <span>(234)</span></label>
                            <label><input type="checkbox"> Xiomi Gaming <span>(234)</span></label>
                            <label><input type="checkbox"> Xiomi Gaming <span>(234)</span></label>
                            <label><input type="checkbox"> Xiomi Gaming <span>(234)</span></label>
                            <label><input type="checkbox"> Xiomi Gaming <span>(234)</span></label>
                            <label><input type="checkbox"> Xiomi Gaming <span>(234)</span></label>
                        </div>
                    </div>
                </div>
                <div class="filter-section keyboard dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Клавиатура</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="options">
                            <label><input type="checkbox"> Bluetooth <span>(234)</span></label>
                            <label><input type="checkbox"> Logitech <span>(234)</span></label>
                            <label><input type="checkbox"> Logitech <span>(234)</span></label>
                            <label><input type="checkbox"> Logitech <span>(234)</span></label>
                            <label><input type="checkbox"> Logitech <span>(234)</span></label>
                            <label><input type="checkbox"> Logitech <span>(234)</span></label>
                        </div>
                    </div>
                </div>
                <div class="filter-section mouse dropdown">
                    <div class="filter-title dropdown-header">
                        <h3>Мышь</h3>
                        <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                    </div>
                    <div class="dropdown-content">
                        <div class="options">
                            <label><input type="checkbox"> Bluetooth <span>(234)</span></label>
                            <label><input type="checkbox"> Logitech <span>(234)</span></label>
                            <label><input type="checkbox"> Logitech <span>(234)</span></label>
                            <label><input type="checkbox"> Logitech <span>(234)</span></label>
                            <label><input type="checkbox"> Logitech <span>(234)</span></label>
                            <label><input type="checkbox"> Logitech <span>(234)</span></label>
                        </div>
                    </div>
                </div>
                <div class="filter-buttons">
                    <button class="clear-btn">Очистить</button>
                    <button class="show-btn">Показать <span>212</span></button>
                </div>
            </div>
        </aside>

        <div class="main-content">
            <!-- Top Bar -->
            <div class="top-bar desktop-only">
                <div class="first-line">

                    <div class="categories">
                        <button class="active">Все</button>
                        <button>Для дома</button>
                        <button>Для офиса</button>
                        <button>Для игр</button>
                        <button>Разработчику</button>
                        <button>Дизайнеру</button>
                    </div>

                    <div class="view-switcher" data-switcher-id="view1">
                        <span>Вид:</span>
                        <button class="view-btn active" data-view="list">
                            <span></span>
                        </button>
                        <button class="view-btn" data-view="grid">
                <span>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                </span>
                        </button>
                    </div>
                </div>

                <div class="second-line">
                    <label class="toggle-container">
                        <span>Акции</span>
                        <input type="checkbox" id="toggle">
                        <div class="toggle"></div>
                    </label>

                    <div class="popularity-dropdown">
                        <select name="" id="">
                            <option value="">По популярности</option>
                            <option value="">По новизне</option>
                            <option value="">По цене</option>
                        </select> <img src="./assets/images/icons/arrow-down.svg" class="toggle-arrow" />
                    </div>
                    <button class="advice">Посоветуйте сборку</button>
                </div>


            </div>

            <div class="top-bar mobile-only">
                <div class="first-line">
                    <button class="advice">Посоветуйте сборку</button>

                    <select class="categories-dropdown">
                        <option>Все</option>
                        <option>Для дома</option>
                        <option>Для офиса</option>
                        <option>Для игр</option>
                        <option>Разработчику</option>
                        <option>Дизайнеру</option>
                    </select>
                </div>
                <div class="second-line">


                    <button class="filter-toggle">Фильтр</button>

                    <div class="popularity-dropdown">
                        <select name="" id="">
                            <option value="">По популярности</option>
                            <option value="">По новизне</option>
                            <option value="">По цене</option>
                        </select> <img src="./assets/images/icons/arrow-down.svg" class="toggle-arrow" />
                    </div>

                    <div class="view-switcher mobile-switcher" data-switcher-id="view1">
                        <span>Вид:</span>
                        <button class="view-btn active" data-view="list">
                            <span></span>
                        </button>
                    </div>
                </div>


            </div>

            <!-- list of items. list -->
            <div class="products-container list-view" data-view-type="list" data-switcher-id="view1">
                <div class="product-card list-style desktop-only">
                    <div class="product-card-img list-style">
                        <div class="card-img-main-product list-style">
                            <img src="assets/images/card-1.png" alt="Компьютер">
                        </div>
                        <div class="card-img-sec-product">
                            <div class="sec-product-wrapper">
                                <img src="./assets/images/card-2.png" alt="Деталь">
                            </div>
                            <div class="sec-product-wrapper">
                                <img src="./assets/images/card-3.png" alt="Деталь">
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="product-title-rate">
                            <h3 class="product-title list-style">Игровой компьютер серии Prologic [2006326]</h3>
                            <div class="rating">
                                <img src="./assets/images/stars/star-bg.svg" alt="⭐">
                                <div class="reviews-statistic-rating-small">4.3</div>
                            </div>
                        </div>
                        <div class="about-product">
                            <div class="column">
                                <div class="column-item"><span class="column-item-header">Процессор</span> <span
                                        class="item-data">Intel Core i5</span></div>
                                <div class="column-item"><span class="column-item-header">Материнская плата</span><span
                                        class="item-data">Intel B760</span></div>
                                <div class="column-item"><span class="column-item-header">Корпус</span> <span
                                        class="item-data">1STPLAYER DK-3 White</span></div>
                                <div class="column-item"><span class="column-item-header">Видеокарта</span> <span
                                        class="item-data">Nvidia GTX 1650</span></div>

                            </div>
                            <div class="column">
                                <div class="column-item"><span class="column-item-header">Кулер</span> <span class="item-data">2300
                      об/мин</span></div>
                                <div class="column-item"><span class="column-item-header">SSD</span> <span class="item-data">240
                      Гб</span> </div>
                                <div class="column-item"><span class="column-item-header">Блок питания</span> <span
                                        class="item-data">600 Вт</span></div>
                                <div class="column-item"><span class="column-item-header">Оперативная память</span> <span
                                        class="item-data">32 ГБ</span></div>

                            </div>
                        </div>

                        <div class="more-data">
                            <div class="details">
                                <a href="">
                                    <span class="full-text">Смотреть подробнее</span>
                                    <span class="short-text">Подробнее</span>
                                    <img src="./assets/images/icons/view-detaitls.svg" />
                                </a>
                            </div>
                            <div class="product-code">Код товара: 2002850</div>
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
                            <button class="config-btn">В конфигуратор</button>
                            <button class="buy-btn">В корзину</button>
                        </div>
                    </div>
                </div>

                <div class="product-card list-style mobile-only">
                    <div class="mobile-card-part">
                        <div class="product-card-img list-style">
                            <div class="card-img-main-product list-style">
                                <img src="assets/images/card-1.png" alt="Компьютер">
                            </div>
                            <div class="card-img-sec-product">
                                <div class="sec-product-wrapper">
                                    <img src="./assets/images/card-2.png" alt="Деталь">
                                </div>
                                <div class="sec-product-wrapper">
                                    <img src="./assets/images/card-3.png" alt="Деталь">
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="product-title-rate">
                                <h3 class="product-title list-style">Игровой компьютер серии Prologic [2006326]</h3>
                                <div class="rating">
                                    <img src="./assets/images/stars/star-bg.svg" alt="⭐">
                                    <div class="reviews-statistic-rating-small">4.3</div>
                                </div>
                            </div>
                            <div class="product-characterictic-tags">
                                <span>Intel Core i5</span>
                                <span>Nvidia GTX 1650</span>
                                <span>Intel B760</span>
                                <span>3200 МГц,</span>
                                <span>1STPLAYER DK-3 White</span>
                                <span>SSD 240 Гб</span>
                                <span>600 Вт</span>
                                <span>Intel Core i5</span>
                            </div>
                        </div>
                    </div>

                    <div class="mobile-card-part">
                        <div class="cont-price list-style">
                            <p class="new-price">1256<span>.7 руб</span></p>
                            <p class="old-price list-style">7015<span>.30 руб</span></p>
                        </div>
                        <div class="mobile-card-info">
                            <div class="product-code">Код товара: 2002850</div>
                            <div class="details">
                                <a href="">
                                    <span class="short-text">Подробнее</span>
                                    <img src="./assets/images/icons/view-detaitls.svg" />
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="mobile-card-part buttons-for-deal">
                        <button class="config-btn">В конфигуратор</button>
                        <button class="buy-btn">В корзину</button>
                    </div>

                </div>
            </div>

            <!--List of items. Grid -->
            <div class="products-container grid-view hidden" data-view-type="grid" data-switcher-id="view1">
                <div class="product-card grid-style">
                    <div class="product-card-img grid-style">
                        <div class="card-img-main-product grid-style">
                            <img src="./assets/images/card-1.png" alt="Компьютер">
                        </div>
                        <div class="card-img-sec-product grid-style">
                            <div class="sec-product-wrapper grid-style">
                                <img src="./assets/images/card-2.png" alt="Деталь">
                            </div>
                            <div class="sec-product-wrapper grid-style">
                                <img src="./assets/images/card-3.png" alt="Деталь">
                            </div>
                        </div>
                    </div>

                    <div class="info">
                        <div class="product-title-rate">
                            <h3 class="product-title grid-style">Игровой компьютер серии Prologic [2006326]</h3>
                            <div class="rating">

                                <img src="./assets/images/stars/star-bg.svg" alt="⭐">

                                <div class="reviews-statistic-rating-small">4.3</div>
                            </div>
                        </div>
                        <div class="info-details">
                            <div class="details">
                                <a href="">
                                    <span class="full-text">Смотреть подробнее</span>
                                    <span class="short-text">Подробнее</span>
                                    <img src="./assets/images/icons/view-detaitls.svg" />
                                </a>
                            </div>
                            <div class="product-code grid-style">Код товара: 2002850</div>
                        </div>
                        <div class="product-characterictic-tags">
                            <span>Intel Core i5</span>
                            <span>Nvidia GTX 1650</span>
                            <span>Intel B760</span>
                            <span>3200 МГц,</span>
                            <span>1STPLAYER DK-3 White</span>
                            <span>SSD 240 Гб</span>
                            <span>600 Вт</span>
                            <span>Intel Core i5</span>
                        </div>
                        <div class="product-price">
                            <div class="cont-price grid-style">
                                <p class="new-price grid-style">1256<span>.7 руб</span></p>
                                <p class="old-price grid-style">7015<span>.30 руб</span></p>
                            </div>
                            <div class="payment-option green grid-style desktop-only">от &nbsp;<span>42</span> руб/мес</div>
                        </div>
                        <div class="button-cont">
                            <button class="config-btn">В конфигуратор</button>
                            <button class="buy-btn">В корзину</button>
                        </div>
                    </div>
                </div>
                <div class="product-card grid-style">
                    <div class="product-card-img grid-style">
                        <div class="card-img-main-product grid-style">
                            <img src="./assets/images/card-1.png" alt="Компьютер">
                        </div>
                        <div class="card-img-sec-product grid-style">
                            <div class="sec-product-wrapper grid-style">
                                <img src="./assets/images/card-2.png" alt="Деталь">
                            </div>
                            <div class="sec-product-wrapper grid-style">
                                <img src="./assets/images/card-3.png" alt="Деталь">
                            </div>
                        </div>
                    </div>

                    <div class="info">
                        <div class="product-title-rate">
                            <h3 class="product-title grid-style">Игровой компьютер серии Prologic [2006326]</h3>
                            <div class="rating">

                                <img src="./assets/images/stars/star-bg.svg" alt="⭐">

                                <div class="reviews-statistic-rating-small">4.3</div>
                            </div>
                        </div>
                        <div class="info-details">
                            <div class="details">
                                <a href="">
                                    <span class="full-text">Смотреть подробнее</span>
                                    <span class="short-text">Подробнее</span>
                                    <img src="./assets/images/icons/view-detaitls.svg" />
                                </a>
                            </div>
                            <div class="product-code grid-style">Код товара: 2002850</div>
                        </div>
                        <div class="product-characterictic-tags">
                            <span>Intel Core i5</span>
                            <span>Nvidia GTX 1650</span>
                            <span>Intel B760</span>
                            <span>3200 МГц,</span>
                            <span>1STPLAYER DK-3 White</span>
                            <span>SSD 240 Гб</span>
                            <span>600 Вт</span>
                            <span>Intel Core i5</span>
                        </div>
                        <div class="product-price">
                            <div class="cont-price grid-style">
                                <p class="new-price grid-style">1256<span>.7 руб</span></p>
                                <p class="old-price grid-style">7015<span>.30 руб</span></p>
                            </div>
                            <div class="payment-option green grid-style desktop-only">от &nbsp;<span>42</span> руб/мес</div>
                        </div>
                        <div class="button-cont">
                            <button class="config-btn">В конфигуратор</button>
                            <button class="buy-btn">В корзину</button>
                        </div>
                    </div>
                </div>
                <div class="product-card grid-style">
                    <div class="product-card-img grid-style">
                        <div class="card-img-main-product grid-style">
                            <img src="./assets/images/card-1.png" alt="Компьютер">
                        </div>
                        <div class="card-img-sec-product grid-style">
                            <div class="sec-product-wrapper grid-style">
                                <img src="./assets/images/card-2.png" alt="Деталь">
                            </div>
                            <div class="sec-product-wrapper grid-style">
                                <img src="./assets/images/card-3.png" alt="Деталь">
                            </div>
                        </div>
                    </div>

                    <div class="info">
                        <div class="product-title-rate">
                            <h3 class="product-title grid-style">Игровой компьютер серии Prologic [2006326]</h3>
                            <div class="rating">

                                <img src="./assets/images/stars/star-bg.svg" alt="⭐">

                                <div class="reviews-statistic-rating-small">4.3</div>
                            </div>
                        </div>
                        <div class="info-details">
                            <div class="details">
                                <a href="">
                                    <span class="full-text">Смотреть подробнее</span>
                                    <span class="short-text">Подробнее</span>
                                    <img src="./assets/images/icons/view-detaitls.svg" />
                                </a>
                            </div>
                            <div class="product-code grid-style">Код товара: 2002850</div>
                        </div>
                        <div class="product-characterictic-tags">
                            <span>Intel Core i5</span>
                            <span>Nvidia GTX 1650</span>
                            <span>Intel B760</span>
                            <span>3200 МГц,</span>
                            <span>1STPLAYER DK-3 White</span>
                            <span>SSD 240 Гб</span>
                            <span>600 Вт</span>
                            <span>Intel Core i5</span>
                        </div>
                        <div class="product-price">
                            <div class="cont-price grid-style">
                                <p class="new-price grid-style">1256<span>.7 руб</span></p>
                                <p class="old-price grid-style">7015<span>.30 руб</span></p>
                            </div>
                            <div class="payment-option green grid-style desktop-only">от &nbsp;<span>42</span> руб/мес</div>
                        </div>
                        <div class="button-cont">
                            <button class="config-btn">В конфигуратор</button>
                            <button class="buy-btn">В корзину</button>
                        </div>
                    </div>
                </div>
                <div class="product-card grid-style">
                    <div class="product-card-img grid-style">
                        <div class="card-img-main-product grid-style">
                            <img src="./assets/images/card-1.png" alt="Компьютер">
                        </div>
                        <div class="card-img-sec-product grid-style">
                            <div class="sec-product-wrapper grid-style">
                                <img src="./assets/images/card-2.png" alt="Деталь">
                            </div>
                            <div class="sec-product-wrapper grid-style">
                                <img src="./assets/images/card-3.png" alt="Деталь">
                            </div>
                        </div>
                    </div>

                    <div class="info">
                        <div class="product-title-rate">
                            <h3 class="product-title grid-style">Игровой компьютер серии Prologic [2006326]</h3>
                            <div class="rating">

                                <img src="./assets/images/stars/star-bg.svg" alt="⭐">

                                <div class="reviews-statistic-rating-small">4.3</div>
                            </div>
                        </div>
                        <div class="info-details">
                            <div class="details">
                                <a href="">
                                    <span class="full-text">Смотреть подробнее</span>
                                    <span class="short-text">Подробнее</span>
                                    <img src="./assets/images/icons/view-detaitls.svg" />
                                </a>
                            </div>
                            <div class="product-code grid-style">Код товара: 2002850</div>
                        </div>
                        <div class="product-characterictic-tags">
                            <span>Intel Core i5</span>
                            <span>Nvidia GTX 1650</span>
                            <span>Intel B760</span>
                            <span>3200 МГц,</span>
                            <span>1STPLAYER DK-3 White</span>
                            <span>SSD 240 Гб</span>
                            <span>600 Вт</span>
                            <span>Intel Core i5</span>
                        </div>
                        <div class="product-price">
                            <div class="cont-price grid-style">
                                <p class="new-price grid-style">1256<span>.7 руб</span></p>
                                <p class="old-price grid-style">7015<span>.30 руб</span></p>
                            </div>
                            <div class="payment-option green grid-style desktop-only">от &nbsp;<span>42</span> руб/мес</div>
                        </div>
                        <div class="button-cont">
                            <button class="config-btn">В конфигуратор</button>
                            <button class="buy-btn">В корзину</button>
                        </div>
                    </div>
                </div>



            </div>
            <div class="pagination-container">
                <div class="pagination-choice">
                    <div class="pagination" id="pagination">

                        <a href="#" class="page-link" data-page="1">1</a>
                        <a href="#" class="page-link" data-page="2">2</a>
                        <a href="#" class="page-link" data-page="3">3</a>
                        <a href="#" class="page-link" data-page="3">4</a>
                        <a href="#" class="page-link" data-page="">...</a>
                        <a href="#" class="page-link" data-page="">867</a>
                        <img src="./assets/images/icons/pagination-arrow.svg" />
                        <p id="page-numbers"> </p>
                    </div>
                    <button class="show-more-btn">Показать ещё</button>
                </div>

                <div class="page-choice">
                    <div class="items-per-page" id="dropdownBtn">Товаров на странице по</div>
                    <div class="dropdown-btn">9 <img src="./assets/images/icons/arrow-down.svg" class="toggle-arrow" /></div>
                </div>
            </div>
        </div>
    </section>

    <section class="ads-info">
        <div class="ads-pictures">
            <div class="ads-slide">
                <img src="./assets/images/choice-gr.png" alt="" />
            </div>
            <div class="ads-slide">
                <img src="./assets/images/price-gr.png" alt="" />
            </div>
            <div class="ads-slide">
                <img src="./assets/images/help-gr.png" alt="" />
            </div>
            <div class="ads-slide">
                <img src="./assets/images/delivery-gr.png" alt="" />
            </div>
        </div>
        <div class="dots-container">
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
        <button class="primary-btn">Перейти в каталог</button>
    </section>
</div>
</body>
