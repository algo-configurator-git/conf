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
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/style-add-reviews.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/style-adaptive.css') ?>" />
    <script src="<?= base_url('scripts/script.js') ?>"></script>
</head>

<body>
<div class="container">
    <div class="breadcrumb">
        <a href="<?= base_url('/') ?>" class="breadcrumb-item">Конфигуратор ПК</a>
        <span class="breadcrumb-item">Отзывы</span>
    </div>
    <section class="reviews-cont">
        <h1 class="headline-h1">Отзывы</h1>
        <div class="cont-contents">
            <div class="tabs-cards">
                <div class="category-options">
                    <button type="button" id="config" class="category-option">Качество конфигураций</button>
                    <button type="button" id="work" class="category-option">Работа сборщика</button>
                    <button type="button" id="sborka" class="category-option">Оценка сборки</button>
                    <button type="button" id="consultation" class="category-option">Консультация</button>
                </div>
                <div class="filters"></div>
                <div class="reviews-list-cont">
                    <div class="with-answer">
                        <div class="reviews-item">
                            <div class="top-line">
                                <div class="name-author">
                                    <div class="name-review">Анатолий</div>
                                    <div class="star-rating">
                                        <span class="star choose"></span>
                                        <span class="star choose"></span>
                                        <span class="star choose"></span>
                                        <span class="star choose"></span>
                                        <span class="star"></span>
                                    </div>
                                    <div class="date-review">12.10.2024</div>
                                </div>
                                <div class="tags-categories">
                                    <div type="button" class="category-option">Качество конфигураций</div>
                                    <div type="button" class="category-option">Работа сборщика</div>
                                </div>
                            </div>
                            <div class="info-review">Отзыв отзыв отзыв Отзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв
                                отзывОтзыв отзыв отзыв Отзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв
                                отзыв
                                отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв
                                отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв
                                отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв
                                отзывОтзыв </div>
                            <div class="like-review"><span class="count">1</span><span class="click-like"></span>
                            </div>
                        </div>
                        <div class="answer">
                            <div class="top-line">
                                <div class="name-author">
                                    <div class="logo-company">
                                        <img src="./assets/images/icons/logo-mini.svg" alt="logo-company">
                                    </div>
                                    <div class="name-review">Algo.by</div>
                                    <div class="date-review">15.10.2024</div>
                                </div>
                            </div>
                            <div class="info-review">Отзыв отзыв отзыв Отзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв
                                отзывОтзыв отзыв отзыв Отзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв
                                отзыв отзывОтзыв отзыв отзыв
                            </div>
                        </div>
                    </div>
                    <div class="reviews-item product">
                        <div class="top-line">
                            <div class="name-author">
                                <div class="name-review">Анатолий</div>
                                <div class="star-rating">
                                    <span class="star choose"></span>
                                    <span class="star choose"></span>
                                    <span class="star choose"></span>
                                    <span class="star choose"></span>
                                    <span class="star"></span>
                                </div>
                                <div class="date-review">12.10.2024</div>
                            </div>
                            <div class="tags-categories">
                                <div type="button" class="category-option">Качество конфигураций</div>
                                <div type="button" class="category-option">Работа сборщика</div>
                            </div>
                        </div>
                        <div class="review-info-product">
                            <div class="review-body">
                                <div class="info-review">Отзыв отзыв отзыв Отзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв
                                    отзывОтзыв отзыв отзыв Отзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв
                                    отзыв
                                    отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв
                                    отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв
                                    отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв отзывОтзыв отзыв
                                    отзывОтзыв </div>
                                <div class="like-review"><span class="count">1</span><span class="click-like"></span>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-card__left">
                                    <h2 class="product-card__title">
                                        Игровой компьютер серии Prologic [2006326]
                                    </h2>
                                    <div class="product-card__images">
                                        <img class="product-card__img--large" src="./assets/images/card-1.png"
                                             alt="Корпус игрового компьютера" />
                                        <img class="product-card__img--small" src="./assets/images/card-2.png" alt="Материнская плата" />
                                        <img class="product-card__img--small" src="./assets/images/card-3.png" alt="SSD-диск" />
                                    </div>
                                </div>
                                <div class="product-card__right">
                                    <div class="product-card__price">
                                        <span class="price-major">1256.</span><span class="price-minor">7 </span> руб
                                    </div>
                                    <div class="product-card__tags">
                                        <span class="tag">lorem ipsum</span>
                                        <span class="tag">lorem ipsum</span>
                                        <span class="tag">lorem ipsum</span>
                                        <span class="tag">lorem ipsum</span>
                                        <span class="tag">lorem ipsum</span>
                                        <span class="tag">lorem ipsum</span>
                                    </div>

                                    <button class="primary-btn">Подробнее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="aside-block">
                <div class="reviews-statistic">
                    <div class="reviews-statistic-info">
                        <div class="reviews-statistic-rating">
                            4.3
                        </div>
                        <div class="reviews-statistic-stars">
                            <span class="star choose"></span>
                            <span class="star choose"></span>
                            <span class="star choose"></span>
                            <span class="star choose"></span>
                            <span class="star"></span>
                        </div>
                        <div class="reviews-statistic-count">
                            725 оценок
                        </div>
                    </div>
                    <div class="ratings-list">
                        <div class="rating-row">
                            <span class="rating-text"><span class="rating-text-number">5</span> звёзд</span>
                            <div class="rating-bar-container">
                                <div class="rating-bar" style="width: 60%;"></div>
                            </div>
                            <span class="rating-value">270</span>
                        </div>
                        <div class="rating-row">
                            <span class="rating-text"><span class="rating-text-number">4</span> звезды</span>
                            <div class="rating-bar-container">
                                <div class="rating-bar" style="width: 50%;"></div>
                            </div>
                            <span class="rating-value">450</span>
                        </div>
                        <div class="rating-row">
                            <span class="rating-text"><span class="rating-text-number">3</span> звезды</span>
                            <div class="rating-bar-container">
                                <div class="rating-bar" style="width: 20%;"></div>
                            </div>
                            <span class="rating-value">3</span>
                        </div>
                        <div class="rating-row">
                            <span class="rating-text"><span class="rating-text-number">2</span> звезды</span>
                            <div class="rating-bar-container">
                                <div class="rating-bar" style="width: 10%;"></div>
                            </div>
                            <span class="rating-value">1</span>
                        </div>
                        <div class="rating-row">
                            <span class="rating-text"><span class="rating-text-number">1</span> звезда</span>
                            <div class="rating-bar-container">
                                <div class="rating-bar" style="width: 10%;"></div>
                            </div>
                            <span class="rating-value">1</span>
                        </div>
                    </div>
                    <button class="primary-btn review-modal-open">Написать отзыв</button>
                </div>
                <div class="reviews-statistic aside-help">
                    <button class="consult-btn open-form">Получить консультацию</button>
                    <button class="catalog-btn">
                        <div class="catalog-btn__icon"></div>Каталог конфигураций
                    </button>
                    <button class="primary-btn">Начать сборку</button>
                </div>
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
                        <div class="category-options-modal">
                            <label class="category-option-modal">
                                <input type="radio" name="category" value="Качество конфигураций" required>
                                Качество конфигураций
                            </label>
                            <label class="category-option-modal">
                                <input type="radio" name="category" value="Работа сборщика" required>
                                Работа сборщика
                            </label>
                            <label class="category-option-modal">
                                <input type="radio" name="category" value="Оценка сборки" required>
                                Оценка сборки
                            </label>
                            <label class="category-option-modal">
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

        <div class="cont-modal">
            <div class="modal form-modal wider-modal">
                <form id="form-modal" method="post" novalidate>
                    <div class="contact-for-question">
                        <div class="contants">
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
                            <span class="subtitle-form">Отправим ответ на ваш e-mail сегодня или завтра, подготовим 3 варианта
                  конфигураций
                  под ваши задачи </span>
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
    </section>
</div>
</body>

</html>
