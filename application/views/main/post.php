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

<section class="post">
        <div class="post__container main_container">
            <div class="post__body">
                <div class="post__head">
                    <div class="post__title title-page">Публикация</div>
                    <div class="post__undertitle undertitle-page">Новости</div>
                </div>
                <div class="post__content">
                    <div class="post__wrapper">
                        <div class="post__heading"><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></div>
                        <div class="post__block">
                            <div class="post__image" style="background-image: url('/public/materials/<?php echo $data['id']; ?>.jpg'); background-repeat: no-repeat; background-size: cover;"></div>
                            <div class="post__box">
                                <div class="post__box-title"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></div>
                                <div class="post__box-text"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="post__wrapper">
                        <div class="post__panel">
                            <div class="post__panel-head">
                                <div class="post__panel-head-title">последние новости</div>
                                <div class="post__panel-head-line"></div>
                            </div>
                            <?php if (empty($list)): ?>
                                <p class="post__box-title">Список новостей пуст</p>
                            <?php else: ?>
                                <?php foreach ($list as $val): ?>
                            <a href="/post/<?php echo $val['id']; ?>">
                                <div class="post__panel-item">
                                    <div class="post__panel-item-text"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></div>
                                </div>
                            </a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
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