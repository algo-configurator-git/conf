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
    <link rel="stylesheet" href="<?= base_url('assets/style/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/style/style-landing.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/style/style-adaptive.css') ?>">
    <script src="<?= base_url('scripts/script.js') ?>"></script>
</head>

<body>
<div class="container">
    <div class="breadcrumb">
        <a href="#" class="breadcrumb-item">Главная</a>
        <span class="breadcrumb-item">Конфигуратор ПК</span>
    </div>
    <section class="cards-configurator">
        <h1 class="headline-h1">Конфигуратор ПК</h1>
        <span class="subtitle">Создайте свою сборку комплектующих ПК с учетом совместимости</span>
        <div class="configs">
            <a href="<?= base_url('/config') ?>" class="config-card-main">
                <div class="config-button-shadow">
                    <div class="config-button">Начать сборку</div>
                </div>
            </a>
            <div class="configs-list">
                <a href="<?= base_url('catalog/office') ?>" class="config-card office">Для офиса</a>
                <a href="<?= base_url('catalog/gamer') ?>" class="config-card game">Для игр</a>
                <a href="<?= base_url('catalog/developer') ?>" class="config-card dev">Разработчику</a>
                <a href="<?= base_url('catalog/designer') ?>" class="config-card design">Дизайнеру</a>
            </div>
        </div>
    </section>
    <section class="popular-cards-config">
        <h2 class="headline-h2">Популярные сборки</h2>
        <div class="slider-arrow prev-btn hidden">
            <img src="<?= base_url('assets/images/buttons/Button - prev.svg') ?>" alt="prev"/>
        </div>
        <div class="slider-arrow next-btn">
            <img src="<?= base_url('assets/images/buttons/Button - Next.svg') ?>" alt="next"/>
        </div>
        <div class="popular-list">
            <?php foreach($assemblies as $assembly): ?>
                <div class="popular-card">
                    <div class="card-img">
                        <div class="card-img-main">
                            <img src="<?= $assembly['items']['case'][0]['image'] ?? '' ?>" alt="" />
                        </div>
                        <div class="card-img-sec">
                            <div class="card-img-sec-main">
                                <img src="<?= $assembly['items']['cpu'][0]['image'] ?? '' ?>" alt="" />
                            </div>
                            <div class="card-img-btn-cont">
                                <div class="card-img-btn">
                                    <img src="<?= $assembly['items']['gpu'][0]['image'] ?? '' ?>" alt="" />
                                </div>
                                <div class="card-img-btn">
                                    <a href="/">
                                        <img src="<?= base_url('assets/images/icons/svg.svg') ?>" alt="" />
                                        <span>Еще</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-descr">
                        <h3 class="card-title"><?= $assembly["name"] ?></h3>
                        <div class="card-tags-cont">
                            <div class="card-tag">lorem ipsum</div>
                            <div class="card-tag">lorem ipsum</div>
                            <div class="card-tag">lorem ipsum</div>
                        </div>
                        <div class="cont-price">
                            <p class="new-price"><?= number_format($assembly["total_price"], 2, '.', '') / 1 ?><span>.<?= number_format($assembly["total_price"], 2, '.', '') % 1 ?> руб</span></p>
                            <?php if($assembly["total_discount_price"] > $assembly["total_price"]): ?>
                                <p class="old-price"><?= number_format($assembly["total_discount_price"], 2, '.', '') / 1 ?><span>.<?= number_format($assembly["total_discount_price"], 2, '.', '') % 1 ?> руб</span></p>
                            <?php endif; ?>
                        </div>
                        <div class="button-cont">
                            <button class="primary-btn">В корзину</button>
                            <button class="secondary-btn">В конфигуратор</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="primary-btn" onclick="location.href='<?= base_url('catalog/all') ?>'">Перейти в каталог</button>
    </section>
    <section class="free-consultation">
        <div class="banners" id="banner1">
            <div class="main-content-banner">
                <h3 class="headline-h3-banner">Подберём три <br />конфигурации</h3>
                <h2 class="headline-h2-banner mob-head">Бесплатная консультация</h2>
                <div class="tags-banner">
                    <a class="item-tag banner-1 active" href="/">Подбор сборки</a>
                    <a class="item-tag banner-2" href="/">Рекомендации</a>
                    <a class="item-tag banner-3" href="/">Оценка сборки</a>
                    <a class="item-tag banner-4" href="/">Консультация</a>
                </div>
            </div>
            <div class="form-content-banner">
                <h2 class="headline-h2-banner">Бесплатная консультация</h2>
                <div class="contacts-us-cont">
                    <div class="contacts">
                        <div class="robot-phone">
                            <img src="<?= base_url('assets/images/logo-company/mts.png') ?>" alt="mts" />
                            <p>+375 29 <span>778-60-60</span></p>
                        </div>
                        <div class="robot-phone">
                            <img src="<?= base_url('assets/images/logo-company/a1.png') ?>" alt="a1" />
                            <p>+375 44 <span>778-60-60</span></p>
                        </div>
                    </div>
                    <div class="cont-btn">
                        <a href="/" class="telegram-btn">
                            <img src="<?= base_url('assets/images/buttons/tg.svg') ?>" alt="tg">
                            Telegram
                        </a>
                        <a href="/" class="whatsapp-btn">
                            <img src="<?= base_url('assets/images/buttons/whatsapp.svg') ?>" alt="whatsapp">
                            WhatsApp
                        </a>
                    </div>
                    <button class="primary-btn open-form">Задать вопрос</button>
                </div>
            </div>
        </div>
        <div class="banners" id="banner2">
            <div class="main-content-banner">
                <h3 class="headline-h3-banner">Дадим рекомендации под Ваши задачи</h3>
                <h2 class="headline-h2-banner mob-head">Бесплатная консультация</h2>
                <div class="tags-banner">
                    <a class="item-tag banner-1" href="/">Подбор сборки</a>
                    <a class="item-tag banner-2 active" href="/">Рекомендации</a>
                    <a class="item-tag banner-3" href="/">Оценка сборки</a>
                    <a class="item-tag banner-4" href="/">Консультация</a>
                </div>
            </div>
            <div class="form-content-banner">
                <h2 class="headline-h2-banner">Бесплатная консультация</h2>
                <div class="contacts-us-cont">
                    <div class="contacts">
                        <div class="robot-phone">
                            <img src="<?= base_url('assets/images/logo-company/mts.png') ?>" alt="mts"/>
                            <p>+375 29 <span>778-60-60</span></p>
                        </div>
                        <div class="robot-phone">
                            <img src="<?= base_url('assets/images/logo-company/a1.png') ?>" alt="a1"/>
                            <p>+375 44 <span>778-60-60</span></p>
                        </div>
                    </div>
                    <div class="cont-btn">
                        <a href="/" class="telegram-btn">
                            <img src="<?= base_url('assets/images/buttons/tg.svg') ?>" alt="">
                            Telegram
                        </a>
                        <a href="/" class="whatsapp-btn">
                            <img src="<?= base_url('assets/images/buttons/whatsapp.svg') ?>" alt="">
                            WhatsApp
                        </a>
                    </div>
                    <button class="primary-btn open-form">Задать вопрос</button>
                </div>
            </div>
        </div>
        <div class="banners" id="banner3">
            <div class="main-content-banner">
                <h3 class="headline-h3-banner">Оценим Вашу сборку и проверим совместимость комплектующих </h3>
                <h2 class="headline-h2-banner mob-head">Бесплатная консультация</h2>
                <div class="tags-banner">
                    <a class="item-tag banner-1" href="/">Подбор сборки</a>
                    <a class="item-tag banner-2" href="/">Рекомендации</a>
                    <a class="item-tag banner-3 active" href="/">Оценка сборки</a>
                    <a class="item-tag banner-4" href="/">Консультация</a>
                </div>
            </div>
            <div class="form-content-banner">
                <h2 class="headline-h2-banner">Бесплатная консультация</h2>
                <div class="contacts-us-cont">
                    <div class="contacts">
                        <div class="robot-phone">
                            <img src="<?= base_url('assets/images/logo-company/mts.png') ?>" alt="mts"/>
                            <p>+375 29 <span>778-60-60</span></p>
                        </div>
                        <div class="robot-phone">
                            <img src="<?= base_url('assets/images/logo-company/a1.png') ?>" alt="a1"/>
                            <p>+375 44 <span>778-60-60</span></p>
                        </div>
                    </div>
                    <div class="cont-btn">
                        <a href="/" class="telegram-btn">
                            <img src="<?= base_url('assets/images/buttons/tg.svg') ?>" alt="">
                            Telegram
                        </a>
                        <a href="/" class="whatsapp-btn">
                            <img src="<?= base_url('assets/images/buttons/whatsapp.svg') ?>" alt="">
                            WhatsApp
                        </a>
                    </div>
                    <button class="primary-btn open-form">Задать вопрос</button>
                </div>
            </div>
        </div>
        <div class="banners" id="banner4">
            <div class="main-content-banner">
                <h3 class="headline-h3-banner">Проконсультируем по&nbsp;другим вопросам</h3>
                <h2 class="headline-h2-banner mob-head">Бесплатная консультация</h2>
                <div class="tags-banner">
                    <a class="item-tag banner-1" href="/">Подбор сборки</a>
                    <a class="item-tag banner-2" href="/">Рекомендации</a>
                    <a class="item-tag banner-3" href="/">Оценка сборки</a>
                    <a class="item-tag banner-4 active" href="/">Консультация</a>
                </div>
            </div>
            <div class="form-content-banner">
                <h2 class="headline-h2-banner">Бесплатная консультация</h2>
                <div class="contacts-us-cont">
                    <div class="contacts">
                        <div class="robot-phone">
                            <img src="<?= base_url('assets/images/logo-company/mts.png') ?>" alt="mts"/>
                            <p>+375 29 <span>778-60-60</span></p>
                        </div>
                        <div class="robot-phone">
                            <img src="<?= base_url('assets/images/logo-company/a1.png') ?>" alt="a1"/>
                            <p>+375 44 <span>778-60-60</span></p>
                        </div>
                    </div>
                    <div class="cont-btn">
                        <a href="/" class="telegram-btn">
                            <img src="<?= base_url('assets/images/buttons/tg.svg') ?>" alt="">
                            Telegram
                        </a>
                        <a href="/" class="whatsapp-btn">
                            <img src="<?= base_url('assets/images/buttons/whatsapp.svg') ?>" alt="">
                            WhatsApp
                        </a>
                    </div>
                    <button class="primary-btn open-form">Задать вопрос</button>
                </div>
            </div>
        </div>
    </section>
    <section class="review">
        <div class="review-headline">
            <h2 class="headline-h2">Отзывы наших клиентов</h2>
            <a href="<?= base_url('reviews') ?>" class="all-review">Смотреть все отзывы</a>
        </div>
        <div class="slider-arrow prev-btn hidden">
            <img src="<?= base_url('assets/images/buttons/Button - prev.svg') ?>" alt="prev"/>
        </div>
        <div class="slider-arrow next-btn">
            <img src="<?= base_url('assets/images/buttons/Button - Next.svg') ?>" alt="next"/>
        </div>
        <div class="review-list">
            <?php foreach ($reviews as $review) : ?>
                <div class="review-item">
                    <div class="top-review">
                        <span class="name-review"><?= esc($review['name']) ?></span>
                        <span class="date-review"><?= esc($review['created_at']) ?></span>
                    </div>
                    <div class="rating-review">
                        <?php $rating = (int) esc($review['rating']); ?>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <?php
                            if ($i < $rating) {
                                echo ('<img src="' . base_url('assets/images/stars/star-bg.svg') . '" alt="star">');
                            } else {
                                echo ('<img src="' . base_url('assets/images/stars/star-no-bg.svg') . '" alt="star">');
                            }
                            ?>
                        <?php endfor; ?>
                    </div>
                    <p class="info-review"><?= esc($review['message']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="primary-btn review-modal-open">Добавить отзыв
            <img src="<?= base_url('assets/images/buttons/plus-review.svg') ?>" alt="">
        </button>
    </section>


    <section class="faq">
        <h2 class="headline-h2">Часто задаваемые вопросы</h2>
        <div class="faq-cont">
            <div class="faq-column">
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up" src="<?= base_url('assets/images/icons/arrow-up.svg') ?>" alt="">
                            <img class="arrow-down" src="<?= base_url('assets/images/icons/arrow-down.svg') ?>" alt="">
                        </div>
                    </div>
                    <p class="answer-faq">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер два lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up" src="<?= base_url('assets/images/icons/arrow-up.svg') ?>" alt="">
                            <img class="arrow-down" src="<?= base_url('assets/images/icons/arrow-down.svg') ?>" alt="">
                        </div>
                    </div>
                    <p class="answer-faq">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up" src="<?= base_url('assets/images/icons/arrow-up.svg') ?>" alt="">
                            <img class="arrow-down" src="<?= base_url('assets/images/icons/arrow-down.svg') ?>" alt="">
                        </div>
                    </div>
                    <p class="answer-faq">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up" src="<?= base_url('assets/images/icons/arrow-up.svg') ?>" alt="">
                            <img class="arrow-down" src="<?= base_url('assets/images/icons/arrow-down.svg') ?>" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <div class="faq-column">
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер два lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up" src="<?= base_url('assets/images/icons/arrow-up.svg') ?>" alt="">
                            <img class="arrow-down" src="<?= base_url('assets/images/icons/arrow-down.svg') ?>" alt="">
                        </div>
                    </div>
                    <p class="answer-faq">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="<?= base_url('assets/images/icons/arrow-up.svg') ?>" alt="">
                            <img class="arrow-down" src="<?= base_url('assets/images/icons/arrow-down.svg') ?>" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="<?= base_url('assets/images/icons/arrow-up.svg') ?>" alt="">
                            <img class="arrow-down" src="<?= base_url('assets/images/icons/arrow-down.svg') ?>" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="<?= base_url('assets/images/icons/arrow-up.svg') ?>" alt="">
                            <img class="arrow-down" src="<?= base_url('assets/images/icons/arrow-down.svg') ?>" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <div class="faq-column">
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер два lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="<?= base_url('assets/images/icons/arrow-up.svg') ?>" alt="">
                            <img class="arrow-down" src="<?= base_url('assets/images/icons/arrow-down.svg') ?>" alt="">
                        </div>
                    </div>
                    <p class="answer-faq ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="<?= base_url('assets/images/icons/arrow-up.svg') ?>" alt="">
                            <img class="arrow-down" src="<?= base_url('assets/images/icons/arrow-down.svg') ?>" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="<?= base_url('assets/images/icons/arrow-up.svg') ?>" alt="">
                            <img class="arrow-down" src="<?= base_url('assets/images/icons/arrow-down.svg') ?>" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="faq-item">
                    <div class="name-item-faq">
                        <span>Вопрос номер один lorem ipsum</span>
                        <div class="btn-arr-faq">
                            <img class="arrow-up  " src="<?= base_url('assets/images/icons/arrow-up.svg') ?>" alt="">
                            <img class="arrow-down" src="<?= base_url('assets/images/icons/arrow-down.svg') ?>" alt="">
                        </div>
                    </div>
                    <p class="answer-faq  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
        </div>
        <button class="primary-btn open-form">Задать вопрос
            <img src="<?= base_url('assets/images/icons/plus.svg') ?>" alt="">
        </button>
    </section>

    <section class="our-brands">
        <h2 class="headline-h2">Наши бренды</h2>
        <div class="brand-cont">
            <div class="item-brand">
                <img src="<?= base_url('assets/images/logo-company/intel.svg') ?>" alt="">
            </div>
            <div class=" item-brand">
                <img src="<?= base_url('assets/images/logo-company/ryzen 1.svg') ?>" alt="">
            </div>
            <div class="item-brand">
                <img src="<?= base_url('assets/images/logo-company/logitech-2-1 1.svg') ?>" alt="">
            </div>
            <div class="item-brand">
                <img src="<?= base_url('assets/images/logo-company/asus-logo 1.svg') ?>" alt="">
            </div>
            <div class="item-brand">
                <img src="<?= base_url('assets/images/logo-company/kingston-technology 1.svg') ?>" alt="">
            </div>
        </div>
    </section>
</div>
<div class="cont-modal">
    <div class="modal form-modal">
        <form id="form-modal" method="post" novalidate>
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
                    <button type="submit" class="submit-button" disabled>Отправить</button>
                </div>
            </div>
            <div class="thanks-screen">
                <h2 class="headline-h2">Спасибо!</h2>
                <p class="subtitle-thanks">Сообщение отправлено</p>
                <img src="<?= base_url('assets/images/thn1.png') ?>" alt="Сообщение отправлено">
            </div>
            <div class="error-screen">
                <h2 class="headline-h2">Ошибка!</h2>
                <p class="subtitle-thanks">Что-то пошло не так.
                    Пожалуйста, повторите попытку позже.</p>
                <img src="<?= base_url('assets/images/error.png') ?>" alt="Сообщение отправлено">
            </div>
        </form>
        <div class="close-modal"></div>
    </div>
</div>

<div class="review-cont-modal">
    <div class="modal contact-form">
        <form action="<?= base_url('reviews/create') ?>" method="post" novalidate>
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
            <!-- <div class="form-group full-width category-group">

              <label>Выберите категорию для отзыва <span class="required">*</span></label>
              <div class="category-options">
                <button type="button" class="category-option">Качество конфигураций</button>
                <button type="button" class="category-option">Работа сборщика</button>
                <button type="button" class="category-option">Оценка сборки</button>
                <button type="button" class="category-option">Консультация</button>
              </div>
              <span class="error-message">Выберите хотя бы одну категорию</span>
            </div> -->

            <div class="form-group full-width category-group">
                <label>Выберите категорию для отзыва <span class="required">*</span></label>
                <div class="category-options">
                    <label class="category-option">
                        <input type="radio" name="category" value="Качество конфигураций" required>
                        Качество конфигураций
                    </label>
                    <label class="category-option">
                        <input type="radio" name="category" value="Работа сборщика">
                        Работа сборщика
                    </label>
                    <label class="category-option">
                        <input type="radio" name="category" value="Оценка сборки">
                        Оценка сборки
                    </label>
                    <label class="category-option">
                        <input type="radio" name="category" value="Консультация">
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
                <button type="submit" class="submit-button">Отправить</button>
            </div>
            <div class="thanks-screen">
                <h2 class="headline-h2">Спасибо!</h2>
                <p class="subtitle-thanks">Сообщение отправлено</p>
                <img src="<?= base_url('assets/images/thn2.png') ?>" alt="Сообщение отправлено">
            </div>
            <div class="error-screen">
                <h2 class="headline-h2">Ошибка!</h2>
                <p class="subtitle-thanks">Что-то пошло не так.
                    Пожалуйста, повторите попытку позже.</p>
                <img src="<?= base_url('assets/images/error.png') ?>" alt="Сообщение отправлено">
            </div>
        </form>
        <div class="close-modal"></div>
    </div>
</div>
</body>

</html>
