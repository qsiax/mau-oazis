<header class="header">
        <div class="header__container main_container">
            <div class="header__body">
                <ul class="header__navigation">
                    <li><a href="/documents">Документы</a></li>
                    <li><a href="/history">История</a></li>
                    <li><a href="/news">Новости</a></li>
                </ul>
                <div class="header__logo ">
                    <a href="/">ОАЗИС</a>
                </div>
                <ul class="header__navigation">
                    <li><a href="/contact">Контакты</a></li>
                    <li><a href="/about">О нас</a></li>
                    <li><a href="/media">Медия</a></li>
                </ul>
                <div class="header__logo-active">ОАЗИС</div>
                <div class="header__title">
                    МУНИЦИПАЛЬНОЕ АВТОНОМНОЕ УЧРЕЖДЕНИЕ <br>
                    "ОБСЛУЖИВАНИЕ АДМИНИСТРАТИВНЫХ ЗДАНИЙ И СООРУЖЕНИЙ"
                </div>
                <div class="header__gerb"></div>
            </div>
        </div>
    </header>


<section class="main">
        <div class="main__container main_container">
            <div class="main__body">
                <div class="main__heading">Мау "ОБСЛУЖИВАНИЕ АДМИНИСТРАТИВНЫХ ЗДАНИЙ И СООРУЖЕНИЙ"</div>
                <div class="main__image"></div>
            </div>
        </div>
    </section>

    <section class="greetings">
        <div class="greetings__container _container">
            <div class="greetings__body">
                <div class="greetings__block">
                    <div class="greetings__title">Дорогие друзья! Мы рады приветствовать Вас на официальном сайте!</div>
                    <div class="greetings__text">Уверены, что Найдете максимум полезной информации, узнаете больше о нас. Нашей деятельности, и, в дальнейшем станете нашими постоянными посетителями. 
                        На данном сайте Узнаете последние новости о жизни клуба. О новых открытиях и достижениях. О прошлом, настоящем и будущем.</div>
                    <div class="greetings__btn btn">Перейти</div>
                </div>
                <div class="greetings__block">
                    <div class="greetings__img"></div>
                    <div class="greetings__name">Гаврильев Альберт Константинович</div>
                    <div class="greetings__role">Директор</div>
                </div>
            </div>
        </div>
    </section>

    <section class="activity">
        <div class="activity__container _container">
            <div class="activity__body">
                <div class="activity__block">
                    <div class="activity__head">
                        <div class="activity__title title">деятельность</div>
                        <div class="activity__text undertitle">нашей компании</div>
                    </div>
                    <div class="activity__item-wrapper">
                        <div class="activity__item-block">
                            <div class="activity__item">
                                <div class="activity__item-icon _icon-activity-01"></div>
                                <div class="activity__item-title">Обслуживание</div>
                                <div class="activity__item-text">Давно выяснено, что при оценке дизайна и композиции читаемый текст использует для сайтов</div>
                            </div>
                            <div class="activity__item">
                                <div class="activity__item-icon _icon-activity-02"></div>
                                <div class="activity__item-title">Ремонт</div>
                                <div class="activity__item-text">Давно выяснено, что при оценке дизайна и композиции читаемый текст использует для сайтов</div>
                            </div>
                        </div>
                        <div class="activity__item-block">
                            <div class="activity__item">
                                <div class="activity__item-icon _icon-activity-03"></div>
                                <div class="activity__item-title">Эксплуатация</div>
                                <div class="activity__item-text">Давно выяснено, что при оценке дизайна и композиции читаемый текст использует для сайтов</div>
                            </div>
                            <div class="activity__item">
                                <div class="activity__item-icon _icon-activity-04"></div>
                                <div class="activity__item-title">Поддержка</div>
                                <div class="activity__item-text">Давно выяснено, что при оценке дизайна и композиции читаемый текст использует для сайтов</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="activity__block">
                    <div class="activity__panel-wrapper">
                        <div class="activity__panel">
                            <div class="activity__panel-head panel-head">погода</div>
                            <div class="activity__panel-head-underline panel-head-underline"></div>
                            <div class="activity__weather">
                                <div class="activity__weather-icon _icon-weather-cloud"></div>
                                <div class="activity__weather-block">
                                    <div class="activity__weather-title">Верхневилюйск</div>
                                    <div class="activity__weather-text">Декабрь, 12</div>
                                </div>
                                <div class="activity__weather-num">-30°</div>
                            </div>

                            <div class="activity__panel-head panel-head">новости</div>
                            <div class="activity__panel-head-underline panel-head-underline"></div>
                            <?php if (empty($list)): ?>
                                <h1>Новостная лента в данное время пуста</h1>
                            <?php else: ?>
                                <?php foreach ($list as $val): ?>
                                <a href="/post/<?php echo $val['id']; ?>">
                                    <div class="activity__news">
                                        <div class="activity__news-block">
                                            <div class="activity__news-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></div>
                                        </div>
                                        <div class="activity__news-block">
                                            <div class="activity__news-date">Пост: <?php echo $val['id']; ?></div>
                                            <a href="news"><div class="activity__news-text">Узнать больше</div></a>
                                        </div>
                                    </div>
                                </a>
                                <?php endforeach; ?>
                            <div class="activity__news-btn">Читать дальше</div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="services__container _container">
            <div class="services__body">
                <div class="services__head">
                    <div class="services__head-block">
                        <div class="services__title title">Услуги</div>
                        <div class="services__undertitle undertitle">Компании</div>
                    </div>
                    <div class="services__num num">02</div>
                </div>
                <div class="services__line"></div>
                <div class="services__item-wrapper">
                    <div class="services__item">
                        <div class="services__item-block">
                            <div class="services__item-num">01</div>
                            <div class="services__item-block">
                                <div class="services__item-title">Капитальный ремонт</div>
                                <div class="services__item-text">Давно выяснено, что при оценке дизайна и композиции читаемый текст использует для сайтов</div>
                            </div>
                        </div>
                        <div class="services__item-price">
                            от 45000
                            до 70000
                        </div>
                    </div>
                    <div class="services__item">
                        <div class="services__item-block">
                            <div class="services__item-num">02</div>
                            <div class="services__item-block">
                                <div class="services__item-title">Реконструкция</div>
                                <div class="services__item-text">Давно выяснено, что при оценке дизайна и композиции читаемый текст использует для сайтов</div>
                            </div>
                        </div>
                        <div class="services__item-price">
                            от 45000
                            до 70000
                        </div>
                    </div>
                    <div class="services__item">
                        <div class="services__item-block">
                            <div class="services__item-num">03</div>
                            <div class="services__item-block">
                                <div class="services__item-title">Эксплутация</div>
                                <div class="services__item-text">Давно выяснено, что при оценке дизайна и композиции читаемый текст использует для сайтов</div>
                            </div>
                        </div>
                        <div class="services__item-price">
                            от 45000
                            до 70000
                        </div>
                    </div>
                    <div class="services__item">
                        <div class="services__item-block">
                            <div class="services__item-num">04</div>
                            <div class="services__item-block">
                                <div class="services__item-title">Техническое перевооружение</div>
                                <div class="services__item-text">Давно выяснено, что при оценке дизайна и композиции читаемый текст использует для сайтов</div>
                            </div>
                        </div>
                        <div class="services__item-price">
                            от 45000
                            до 70000
                        </div>
                    </div>
                </div>
                <div class="services__line"></div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about__container _container">
            <div class="about__slide-arrow-next"></div>
            <div class="about__slide-arrow-prev"></div>
            <div class="about__body">
                <div class="about__head">
                   <div class="about__head-block">
                        <div class="about__title title">Коллектив</div>
                        <div class="about__undertitle undertitle">о нас</div>
                   </div>
                   <div class="about__num num">03</div>
                </div>
                <div class="about__item-wrapper swiper">
                    <div class="about__item-block swiper-wrapper">
                        <div class="about__item swiper-slide">
                            <div class="about__item-img"></div>
                            <div class="about__item-name">Александров Николай Михайлович</div>
                            <div class="about__item-role">Начальник</div>
                        </div>
                        <div class="about__item swiper-slide">
                            <div class="about__item-img"></div>
                            <div class="about__item-name">Шестакова Варвара Петровна</div>
                            <div class="about__item-role">Булгахтер</div>
                        </div>
                        <div class="about__item swiper-slide">
                            <div class="about__item-img"></div>
                            <div class="about__item-name">Николаева Диана Дмитрьевна</div>
                            <div class="about__item-role">Специалист по кадрам</div>
                        </div>
                        <div class="about__item swiper-slide">
                            <div class="about__item-img"></div>
                            <div class="about__item-name">Захарова Галина Григорьевна</div>
                            <div class="about__item-role">Экономист</div>
                        </div>
                        <div class="about__item swiper-slide">
                            <div class="about__item-img"></div>
                            <div class="about__item-name">Васильев Айтал Иннокентьевич</div>
                            <div class="about__item-role">Директор</div>
                        </div>
                        <div class="about__item swiper-slide">
                            <div class="about__item-img"></div>
                            <div class="about__item-name">Салашина Надежда Николаевна</div>
                            <div class="about__item-role">Завхоз</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="contact__container _container">
            <div class="contact__body">
                <div class="contact__head">
                    <div class="contact__head-block">
                        <div class="contact__head-title title">где нас найти</div>
                        <div class="contact__head-undertitle undertitle">контакты</div>
                    </div>
                    <div class="contact__num num">04</div>
                </div>
                <div class="contact__form">
                    <div class="contact__form-wrapper">
                        <div class="contact__form-block">
                            <div class="contact__form-nav">
                                <div class="contact__form-title">Адрес</div>
                                <div class="contact__form-text mb30">Республика Саха (Якутия), 677000 Якутск, ул.Крупской, 13</div>
                            </div>
                            <div class="contact__form-nav">
                                <div class="contact__form-title">Почта</div>
                                <div class="contact__form-text">qwerty@gmail.com</div>
                            </div>
                        </div>
                        <div class="contact__form-block">
                            <div class="contact__form-nav">
                                <div class="contact__form-title">Соц сети</div>
                                <div class="contact__form-text">instagram</div>
                                <div class="contact__form-text">telegram</div>
                                <div class="contact__form-text mb30">whatsapp</div>
                            </div>
                            <div class="contact__form-nav">
                                <div class="contact__form-title">Номер</div>
                                <div class="contact__form-text">+79142348423</div>
                            </div>
                        </div>
                    </div>
                    <div class="contact__form-wrapper">
                        <div class="contact__form-map">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af6a8105c4d2873b3902075ad016a136aba79c457a31a32b87971935f70e88fc7&amp;source=constructor" width="468" height="320" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer__container _container">
            <div class="footer__body">
                <div class="footer__wrapper">
                    <div class="footer__block">
                        <div class="footer__logo">ОАЗИС</div>
                        <div class="footer__title">МУНИЦИПАЛЬНОЕ АВТОНОМНОЕ УЧРЕЖДЕНИЕ 
                            "ОБСЛУЖИВАНИЕ АДМИНИСТРАТИВНЫХ ЗДАНИЙ И СООРУЖЕНИЙ"</div>
                    </div>
                    <div class="footer__block">
                        <div class="footer__item-wrapper">
                            <div class="footer__item">
                                <div class="footer__item-icon _icon-email"></div>
                                <div class="footer__item-title">qwerty@gmail.com</div>
                            </div>
                            <div class="footer__item">
                                <div class="footer__item-icon _icon-phone"></div>
                                <div class="footer__item-title">+79142348423</div>
                            </div>
                            <div class="footer__item">
                                <div class="footer__item-icon _icon-location"></div>
                                <div class="footer__item-title">Республика Саха (Якутия), 677000 Якутск, ул.Крупской, 13</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__wrapper">
                    <ul class="footer__navigation">
                        <li><a href="/documents">Документы</a></li>
                        <li><a href="/history">История</a></li>
                        <li><a href="/news">Новости</a></li>
                        <li><a href="/contact">Контакты</a></li>
                        <li><a href="/about">О нас</a></li>
                        <li><a href="/media">Медиа</a></li>
                    </ul>
                </div>
                <div class="footer__wrapper">
                    <div class="footer__social">
                        <div class="footer__social-item _icon-insta"></div>
                        <div class="footer__social-item _icon-facebook"></div>
                        <div class="footer__social-item _icon-whatsapp"></div>
                    </div>
                    <div class="footer__copyright">© 2022 - 2023, МАУ “оАЗиС”</div>
                </div>
            </div>
        </div>
    </footer>