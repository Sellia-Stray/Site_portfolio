<?php
// test email template
$commonDomain = Helpers::urlEnsureProtocol(Yii::app()->params['commonHttp'], 'auto');
$images = $commonDomain . '/mail';

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aficha</title>
    <link href="<?= $images ?>/website/css/site.new.2.css" rel="stylesheet"/>
    <script src="<?= $images ?>/website/js/site.new.2.js"></script>
</head>
<body>

<header class="header">

    <div class="wrapper">
        <div class="header_wrapper">

            <!-- sity -->

            <div class="heider_sity">
                <div id="mySityTest" class="header_link_sity">Псков</div>

            </div>


            <!-- header_menu -->


            <nev class="header_nev">
                <ul class="header_list">
                    <li class="header_item">
                        <a href="https://console.orbitalsoft.ru/mailTest?template=website/site.new.2.php" class="header_link_list">АФИША</a>
                    </li>
                    <li class="header_item">
                        <a href="#!" class="header_link_list">НОВОСТИ</a>
                    </li>
                    <li class="header_item">
                        <a href="https://console.orbitalsoft.ru/mailTest?template=website/help_site2.php#!" class="header_link_list">ПОМОЩЬ</a>
                    </li>
                    <li class="header_item">
                        <a href="#!" class="header_link_list">БИЛЕТНАЯ СИСТЕМА</a>
                    </li>
                    <li class="header_item">
                        <a href="#!" class="header_link_list">КОНТАКТЫ</a>
                    </li>
                </ul>
                <div class="header__nev-close">
                    <span class="header__nev-close-line"></span>
                    <span class="header__nev-close-line"></span>
                </div>
            </nev>

            <div class="heider_personalac_entrance"> <!-- вход в ЛК -->
                <img src="<?= $images ?>/website/img/svg/vhod.svg" style="width: 20px; height: 20px">

                <a href="#!" class="header_link_entrance"> Войти</a>
            </div>

            <div class="header__burger burger">
                <span class="burger__line burger__line_one"></span>
                <span class="burger__line burger__line_two"></span>
                <span class="burger__line burger__line_three"></span>
            </div>

        </div>


        <!-- вторая строка хейдера -->
        <div class="container_wrapper">

            <!-- лого -->
            <div class="heider_logo">
                <a href="/" class="haider_logo-link">
                    <img src="<?= $images ?>/website/img/svg/OrBilet.ru.logo.png" alt="orbilet.logo"
                         class="haider_logo-pic"/>
                </a>
            </div>



            <!-- поисковая форма -->

            <form class="search-form">
                <fieldset class="search-form_wrap">
                    <p class="search-form_info">

                        <input type="text" name="name-event" class="search-form_field" placeholder="Что вы ищите?">

                    </p>
                </fieldset>
            </form>


            <div class="block_heider_number_heider_support">
                <!-- картинки номер техподдержки и почта-->
                <span class="img_logo_nomber_mail">
                    <p>
                        <img src="<?= $images ?>/website/img/svg/tel.email.svg" style="width: 50px; height: 50px">
                    </p>
                </span>

                <!-- номер техподдержки и почта-->
                <div class="heider_number_heider_support">
                    <div class="heider_number">
                        <p>
                            8-800-600-47-44
                        </p>
                    </div>

                    <!-- header_support -->
                    <div class="heider_support">
                        <a href="#!" class="header_link_support">support@orbilet.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="main">
    <section class="intro">
        <div class="wrapper">
            <div class="container_wrapper_filter">
                <div class="tags_set">

                    <nev class="intro_nev">
                        <ul class="intro_list">
                            <li class="intro_item">
                                <a href="#!" class="intro_link_list">КОНЦЕРТЫ</a>
                            </li>
                            <li class="intro_item">
                                <a href="#!" class="intro_link_list">ТЕАТР</a>
                            </li>
                            <li class="intro_item">
                                <a href="#!" class="intro_link_list_pk">ПУШКИНСКАЯ КАРТА</a>
                            </li>

                            <li class="intro_item">
                                <a href="#!" class="intro_link_list">КИНО</a>
                            </li>
                            <li class="intro_item">
                                <a href="#!" class="intro_link_list">ТАНЦЫ</a>
                            </li>
                            <li class="intro_item">
                                <a href="#!" class="intro_link_list">ФЕСТИВАЛИ</a>
                            </li>
                            <li class="intro_item">
                                <a href="#!" class="intro_link_list">ТРЕНИНГИ</a>
                            </li>
                            <li class="intro_item">
                                <a href="#!" class="intro_link_list">ДЛЯ ДЕТЕЙ</a>
                            </li>
                            <li class="intro_item">
                                <a href="#!" class="intro_link_list">МУЗЕИ</a>
                            </li>
                        </ul>
                    </nev>

                </div>
            </div>

        </div>
    </section>

    <!-- календарь -->
    <section class="calendar">
        <div class="wrapper">
            <!-- контейнер для даты, дня, стрелок, месяца -->
            <div class="calendar_container">
                <!-- контейнер для даты, дня, стрелок-->
                <div class="calendar_container_day">
                    <!-- стрелка левая -->
                    <button class="arrow_ikon_left">
                        <img src="<?= $images ?>/website/img/svg/ikon_w.svg" style="width: 10px">
                    </button>
                    <!-- месяц -->
                    <span class="month_calendar">май</span>

                    <div class="horizontal-scroll">
                        <!-- флекс контейнер с датами -->
                        <ul class="calendar_line">
                            <li class="data_slide">
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <div class="date-selector_name">1</div>
                                    <div class="date-selector-day_of_week">ср</div>
                                </button>
                                </span>
                                <!-- кнопка с датой и днем недели-->
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">2</span>
                                    </div>
                                    <span class="date-selector-day_of_week">чт</span>
                                </button>
                                </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">3</span>
                                    </div>
                                    <span class="date-selector-day_of_week">пт</span>
                                </button>
                                </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели. выходной-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">4</span>
                                    </div>
                                    <span class="date-selector-day_of_week_r">сб</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели. выходной-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">5</span>
                                    </div>
                                    <span class="date-selector-day_of_week_r">вс</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">6</span>
                                    </div>
                                    <span class="date-selector-day_of_week">пн</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">7</span>
                                    </div>
                                    <span class="date-selector-day_of_week">вт</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">8</span>
                                    </div>
                                    <span class="date-selector-day_of_week">ср</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">9</span>
                                    </div>
                                    <span class="date-selector-day_of_week">чт</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">10</span>
                                    </div>
                                    <span class="date-selector-day_of_week">пт</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели. выходной-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">11</span>
                                    </div>
                                    <span class="date-selector-day_of_week_r">сб</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели. выходной-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">12</span>
                                    </div>
                                    <span class="date-selector-day_of_week_r">вс</span>
                                </button>
                                    </span>
                                <!-- НОВАЯ НЕДЕЛЯ -->
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">13</span>
                                    </div>
                                    <span class="date-selector-day_of_week">пн</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">14</span>
                                    </div>
                                    <span class="date-selector-day_of_week">вт</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">15</span>
                                    </div>
                                    <span class="date-selector-day_of_week">ср</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">16</span>
                                    </div>
                                    <span class="date-selector-day_of_week">чт</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">17</span>
                                    </div>
                                    <span class="date-selector-day_of_week">пт</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели. выходной-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">18</span>
                                    </div>
                                    <span class="date-selector-day_of_week_r">сб</span>
                                </button>
                                    </span>
                                <span class="data_day-wrapper">
                                <button class="data_day">
                                    <!-- блок с датой и днем недели. выходной-->
                                    <div class="date-selector">
                                        <span class="date-selector_name">19</span>
                                    </div>
                                    <span class="date-selector-day_of_week_r">вс</span>
                                </button>
                                    </span>
                            </li>
                        </ul>
                    </div>
                    <!-- стрелка правая -->
                    <button class="arrow_ikon_right">
                        <img src="<?= $images ?>/website/img/svg/icon_w_r.svg" style="width: 10px;">
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script>

        document.addEventListener("DOMContentLoaded", function () {
            const leftArrow = document.querySelector(".arrow_ikon_left");
            const rightArrow = document.querySelector(".arrow_ikon_right");
            const horizontalScroll = document.querySelector(".horizontal-scroll");

            const scrollStep = 300; // Шаг прокрутки

            // Прокрутка вправо
            rightArrow.addEventListener("click", () => {
                const maxScroll = horizontalScroll.scrollWidth - horizontalScroll.clientWidth;
                console.log(`Перед прокруткой вправо: scrollLeft = ${horizontalScroll.scrollLeft}, maxScroll = ${maxScroll}`);

                if (horizontalScroll.scrollLeft < maxScroll) {
                    horizontalScroll.scrollBy({
                        left: scrollStep,
                        behavior: "smooth"
                    });

                    console.log(`После прокрутки вправо: scrollLeft = ${horizontalScroll.scrollLeft}`);
                }
            });

            // Прокрутка влево
            leftArrow.addEventListener("click", () => {
                console.log(`Перед прокруткой влево: scrollLeft = ${horizontalScroll.scrollLeft}`);

                if (horizontalScroll.scrollLeft > 0) {
                    horizontalScroll.scrollBy({
                        left: -scrollStep,
                        behavior: "smooth"
                    });

                    console.log(`После прокрутки влево: scrollLeft = ${horizontalScroll.scrollLeft}`);
                }
            });
        });
    </script>
    <!-- конец блока календарь -->

    <!-- фильтры сегодня -->
    <section class="lower_filters">
        <div class="wrapper">
            <div class="link_filters">
                <div class="institution_filters">
                    <img src="<?= $images ?>/website/img/svg/zavedenie.svg" style="width: 24px;">
                    <p class="institution_filters_txt">
                        <a class="institution_filters_txt_a" href="https://console.orbitalsoft.ru/mailTest?template=website%2Fvenue_site2.php">заведения</a>
                    </p>
                </div>
                <div class="event_filter">
                    <div class="recommend">
                        рекомендуемое
                    </div>

                    <div class="today">
                        сегодня
                    </div>
                    <div class="tomorrow">
                        завтра
                    </div>
                    <div class="weekends">
                        выходные
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- блок мероприятий -->
    <section class="block_of_events">
        <div class="wrapper">
            <!-- для всех строк и столбцов -->
            <div class="block_of_events_container">
                <!-- блок мероприятия по вертикали 1 -->
                <div class="block_of_events">

                    <!-- карточка мероприятия 1 -->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha3.jpg">
                                </a>
                            </div>

                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Название мероприятия

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">20 апр.</p>
                                <p class="day_event">сб</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">БКЗ Филармонии</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">1000р - 3500р</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- карточка мероприятия 2 -->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha5.jpg">
                                </a>
                            </div>
                            <!-- надпись отмена мероприятия-->
                            <div class="card_cancellation">
                                ОТМЕНА
                            </div>
                            <!-- пушшкарта-->
                            <div class="PK_icon3">
                                <img src="<?= $images ?>/website/img/pk4.png" width="40px" height="40px">
                            </div>
                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Название мероприятия
                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">15 мая</p>
                                <p class="day_event">пт</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">Дом офицеров</a>
                            </div>
                            <!-- Кнопка Купить ОТМЕНА -->
                            <div class="button_container5">
                                <button class="button_buy5">
                                    <p class="button_txt5">ОТМЕНА</p>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- карточка мероприятия 3-->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha2.jpg">
                                </a>
                            </div>

                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Название мероприятия

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">11 окт.</p>
                                <p class="day_event">пт</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">БКЗ Филармонии</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container5">
                                <button class="button_buy5">
                                    <p class="button_txt5">БИЛЕТЫ ЗАКОНЧИЛИСЬ</p>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- карточка мероприятия 4-->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha5.jpg">
                                </a>
                            </div>

                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Название мероприятия

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">11 окт.</p>
                                <p class="day_event">пт</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">БКЗ Филармонии</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- блок мероприятия по вертикали 2-->
                <div class="block_of_events">
                    <!-- карточка мероприятия 1 -->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha10.jpg">
                                </a>
                            </div>

                            <!-- цена которая заходит на афишу-->
                            <!--                            <div class="card_price">от 600 ₽</div>-->
                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> ДИСКОТЕКА 90х

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">17 дек.</p>
                                <p class="day_event">ср</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">Дом Офицеров Офицеров </a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">600р - 3800р</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- карточка мероприятия 2 -->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha2.jpg">
                                </a>
                            </div>

                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Название мероприятия

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">11 окт.</p>
                                <p class="day_event">пт</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">Ледовый дворец Псков</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- карточка мероприятия 3-->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha6.jpg">
                                </a>
                            </div>

                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Название мероприятия

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">11 окт.</p>
                                <p class="day_event">пт</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">БКЗ Филармонии</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- карточка мероприятия 4-->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha6.jpg">
                                </a>
                            </div>

                            <!-- цена которая заходит на афишу-->
                            <div class="card_price">от 1000 ₽</div>
                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Название мероприятия

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">11 окт.</p>
                                <p class="day_event">пт</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">БКЗ Филармонии</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- блок мероприятия по вертикали  3-->
                <div class="block_of_events">
                    <!-- карточка мероприятия 1 -->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha6.jpg">
                                </a>
                            </div>

                            <!-- цена которая заходит на афишу-->
                            <!--                            <div class="card_price">от 1000 ₽</div>-->
                            <!-- ПК которая заходит на афишу-->
                            <div class="PK_icon3">
                                <img src="<?= $images ?>/website/img/pk4.png" width="40px" height="40px">
                            </div>
                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Планеты

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">21 авг.</p>
                                <p class="day_event">ср</p>
                                <p class="time_event">11:00</p>

                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">Планетарий</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">50р - 350р</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- карточка мероприятия 2-->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha10.jpg">
                                </a>
                            </div>

                            <!-- цена которая заходит на афишу-->
                            <div class="card_price">от 1000 ₽</div>
                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Название мероприятия

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">11 окт.</p>
                                <p class="day_event">пт</p>
                                <p class="time_event">19:00</p>
                            </div>

                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">БКЗ Филармонии</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- карточка мероприятия 3 -->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha4.jpg">
                                </a>
                            </div>

                            <!-- цена которая заходит на афишу-->
                            <div class="card_price">от 1000 ₽</div>
                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Название мероприятия

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">11 окт.</p>
                                <p class="day_event">пт</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">БКЗ Филармонии</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- карточка мероприятия 4 -->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha10.jpg">
                                </a>
                            </div>

                            <!-- цена которая заходит на афишу-->
                            <div class="card_price">от 1000 ₽</div>
                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Название мероприятия

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">11 окт.</p>
                                <p class="day_event">пт</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">БКЗ Филармонии</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- блок мероприятия по вертикали 4-->
                <div class="block_of_events">
                    <!-- карточка мероприятия 1 -->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha2.jpg">
                                </a>
                            </div>

                            <!-- цена которая заходит на афишу-->
                            <!--                            <div class="card_price">от 1000 ₽</div>-->
                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> СТАС ПЬЕХА

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">11 окт.</p>
                                <p class="day_event">пт</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">БКЗ Филармонии</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">2000р - 5000р</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- карточка мероприятия 2-->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha6.jpg">
                                </a>
                            </div>

                            <!-- цена которая заходит на афишу-->
                            <div class="card_price">от 1000 ₽</div>
                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Название мероприятия

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">11 окт.</p>
                                <p class="day_event">пт</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">БКЗ Филармонии</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- карточка мероприятия 3-->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha3.jpg">
                                </a>
                            </div>

                            <!-- цена которая заходит на афишу-->
                            <div class="card_price">от 1000 ₽</div>
                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Название мероприятия

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">11 окт.</p>
                                <p class="day_event">пт</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">БКЗ Филармонии</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- карточка мероприятия 4-->
                    <div class="card_event">
                        <!-- Верхняя часть -->
                        <div class="card_top">
                            <!-- Изображение-ссылка мероприятия -->
                            <div class="card_image">
                                <a href="#" class="card_image_event">
                                    <img src="<?= $images ?>/website/img/aficha6.jpg">
                                </a>
                            </div>

                            <!-- цена которая заходит на афишу-->
                            <div class="card_price">от 1000 ₽</div>
                        </div>
                        <!-- Нижняя часть -->
                        <div class="card_bottom">
                            <!-- название-ссылка мероприятия-->
                            <div class="name_events">
                                <a href="#" class="card_title_event"> Название мероприятия

                                </a>
                            </div>
                            <!-- дата мероприятия -->
                            <div class="data_event">
                                <p class="data_title_event">11 окт.</p>
                                <p class="day_event">пт</p>
                                <p class="time_event">19:00</p>
                            </div>


                            <!-- заведение-ссыла где будет проходить мероприятие -->
                            <div class="institution_event">
                                <img src="<?= $images ?>/website/img/svg/icon.sity.svg">
                                <a href="#" class="institution_title_event">БКЗ Филармонии</a>
                            </div>
                            <!-- Кнопка Купить -->
                            <div class="button_container4">
                                <div class="button_buy4" id="button-4">
                                    <div id="circle"></div>
                                    <a class="button_txt4" href="#">КУПИТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Показать еще мероприятия -->
            <div class="dop_event">
                <button class="dop_event_button">
                    <p class="dop_event_txt">
                        Показать еще
                    </p>
                </button>
            </div>

    </section>
</main>

<!-- подвал-->
<footer class="footer">
    <div class="wrapper">
        <div class="footer__item">
            <div class="footer__addr">
                <h1 class="footer__logo">Orbilet.ru</h1> <br>

                <address>
                    <p>Нужна помощь пишите на: </p>
                    <a href="#!" class="footer_link_support">support@orbilet.ru</a>
                </address>

                <div class="legal">
                    <p>ООО «ОрбитальСофт», 2012 - 2024</p>
                </div>

            </div>


            <div class="footer__nav">
                <ul class="footer__nav_buyer_org">
                    <li class="menu__item_buyer">
                        <h2 class="menu__title_buyer">Покупателям</h2>

                        <ul class="menu__ul">
                            <li>
                                <a href="#">Возврат билетов</a>
                            </li>

                            <li>
                                <a href="#">Помощь</a>
                            </li>

                            <li>
                                <a href="#">Публичная оферта</a>
                            </li>

                            <li>
                                <a href="#">Политика обработки<br> персональных данных</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu__item_org">
                        <h2 class="menu__title_organizer">Организаторам</h2>

                        <ul class="menu__ul">
                            <li>
                                <a href="#">Сотрудничество</a>
                            </li>

                            <li>
                                <a href="#">Билетная система Orbilet.ru</a>
                            </li>

                        </ul>
                    </li>
                </ul>

                <div class="card__img">
                    <img class="card__img-icon" src="<?= $images ?>/website/img/svg/mir-logo.svg.svg">
                    <img class="card__img-icon" src="<?= $images ?>/website/img/svg/visa-logo.svg.svg">
                    <img class="card__img-icon" src="<?= $images ?>/website/img/svg/masterCard-logo.svg">
                </div>

            </div>


        </div>
    </div>
</footer>
<!-- конец подвала-->


<!-- modal_sity модельное окно города-->


<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3 class="modal-title">Выберите город</h3>

        <span class="sity_search_modal">

            <!-- поисковая форма -->
            <form class="search-form_modal">
                <fieldset class="search-form_wrap_modal">
                    <p class="search-form_info_modal">
                        <input type="text" name="name-event" class="search-form_field_modal">
                    </p>
                </fieldset>
            </form>

            <p class="sity_select_txt">
                <img src="<?= $images ?>/website/img/svg/icon.sity.svg" width="12px"> Псков
            </p>
       </span>
        <div class="model_sity_blok">
        <div class="modal_txt">
            <div class="sity_colymn2">
                <ul class="sity_list">
                    <li><p class="li_sity_txt">A</p>
                        <ul class="sity_list_link">
                            <li><a class="sity_list_link_a" href="#">Алушта</a></li>
                            <li><a class="sity_list_link_a" href="#">Архангельск</a></li>
                        </ul>
                    </li>
                </ul>
                <br>
                <ul class="main-item">
                    <li><p class="li_sity_txt">Б</p>
                        <ul class="sity_list_link">
                            <li><a class="sity_list_link_a" href="#">Балахна</a></li>
                            <li><a class="sity_list_link_a" href="#">Боровичи</a></li>
                        </ul>
                    </li>
                </ul>
                <br>
                <ul class="main-item">
                    <li><p class="li_sity_txt">В</p>
                        <ul class="sity_list_link">
                            <li><a class="sity_list_link_a" href="#">Великие Луки</a></li>
                            <li><a class="sity_list_link_a" href="#">Вологда</a></li>
                            <li><a class="sity_list_link_a" href="#">Выборг</a></li>
                        </ul>
                    </li>
                </ul>
                <br>
                <ul class="main-item">
                    <li><p class="li_sity_txt">В</p>
                        <ul class="sity_list_link">
                            <li><a class="sity_list_link_a" href="#">Великие Луки</a></li>
                            <li><a class="sity_list_link_a" href="#">Вологда</a></li>
                            <li><a class="sity_list_link_a" href="#">Выборг</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="sity_colymn">
                <ul class="sity_list">
                    <li><p class="li_sity_txt">Г</p>
                        <ul class="sity_list_link">
                            <li><a class="sity_list_link_a" href="#">Гатчина</a></li>

                        </ul>
                    </li>
                </ul>
                <br>
                <ul class="main-item">
                    <li><p class="li_sity_txt">Д</p>
                        <ul class="sity_list_link">
                            <li><a class="sity_list_link_a" href="#">Деревня</a></li>

                        </ul>
                    </li>
                </ul>
                <br>
                <ul class="main-item">
                    <li><p class="li_sity_txt">Е</p>
                        <ul class="sity_list_link">
                            <li><a class="sity_list_link_a" href="#">Елки</a></li>

                        </ul>
                    </li>
                </ul>
                <br>
                <ul class="main-item">
                    <li><p class="li_sity_txt">Е</p>
                        <ul class="sity_list_link">
                            <li><a class="sity_list_link_a" href="#">Елки</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
            <div class="sity_colymn">
                <ul class="sity_list">
                    <li><p class="li_sity_txt">Ж</p>
                        <ul class="sity_list_link">
                            <li><a class="sity_list_link_a" href="#">Железноводск</a></li>

                        </ul>
                    </li>
                </ul>
                <br>
                <ul class="main-item">
                    <li><p class="li_sity_txt">З</p>
                        <ul class="sity_list_link">
                            <li><a class="sity_list_link_a" href="#">Балахна</a></li>
                            <li><a class="sity_list_link_a" href="#">Боровичи</a></li>
                        </ul>
                    </li>
                </ul>
                <br>
                <ul class="main-item">
                    <li><p class="li_sity_txt">И</p>
                        <ul class="sity_list_link">
                            <li><a class="sity_list_link_a" href="#">Великие Луки</a></li>

                        </ul>
                    </li>
                </ul>
                <br>
                <ul class="main-item">
                    <li><p class="li_sity_txt">И</p>
                        <ul class="sity_list_link">
                            <li><a class="sity_list_link_a" href="#">Великие Луки</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("mySityTest");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


</body>
</html>
<script>
    import Form from "../../../../client/features/console/promoCodeForm/Form";
    import Button from "../../../../client/features/console/kkt/components/Button";

    export default {
        components: {Button, Form}
    }
</script>


