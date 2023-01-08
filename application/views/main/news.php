<header class="header">
        <div class="header__container main_container">
            <div class="header__body">
                <ul class="header__navigation">
                    <li><a href="/documents">Документы</a></li>
                    <li><a href="/history">История</a></li>
                    <li><a href="/news"  class="active">Новости</a></li>
                </ul>
                <div class="header__logo">
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

    <section class="news">
            <div class="news__container main_container">
                <div class="news__body">
                    <div class="news__head">
                        <div class="news__title title-page">новостная лента</div>
                        <div class="news__underline undertitle-page">публикации</div>
                    </div>
                    <div class="news__content">
                        <div class="news__item-wrapper">
                            <?php if (empty($list)): ?>
                            <div class="news__error">
                                OOPS!<br>
                                Новостная лента в данное время пуста
                            </div>
                            <?php else: ?>
                            <?php foreach ($list as $val): ?>
                            <a href="/post/<?php echo $val['id']; ?>">
                                <div class="news__item">
                                    <div class="news__item-img" style="background: url('/public/materials/<?php echo $val['id']; ?>.jpg') !important; background-size: cover !important;
                                        background-repeat: no-repeat !important;"></div>
                                    <div class="news__item-block">
                                        <div class="news__item-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></div>
                                        <div class="news__item-des"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></div>
                                        <div class="news__item-text"><?php echo htmlspecialchars($val['text'], ENT_QUOTES); ?></div>
                                    </div>
                                    <div class="news__btn">Перейти</div>
                                </div>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <footer class="footer mt150">
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