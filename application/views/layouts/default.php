<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/main.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <title><?php echo $title; ?></title>
</head>
<body>

    <div class="overlay third"></div>
	<div class="overlay second"></div>
	<div class="overlay firts"></div>
	<div class="overlay four"></div>
	<div class="overlay five"></div>
	<div class="overlay six"></div>

    <div class="panel">
        <div class="panel__body">
            <div class="panel__head">
                <div class="panel__logo"><a href="/">ОА</a></div>
                <div class="panel__head-block">
                    <div class="panel__head-title">МАУ ОАЗиС</div>
                    <div class="panel__head-text">Верхневилюйск</div>
                </div>
            </div>

            <div class="panel__item-wrapper">
                <div class="panel__item">
                    <div class="panel__item-icon _icon-news-icon"></div>
                    <div class="panel__item-title"><a href="/news">Новости</a></div>
                </div>
                <div class="panel__item">
                    <div class="panel__item-icon _icon-contact-icon"></div>
                    <div class="panel__item-title"><a href="/contact">Контакты</a></div>
                </div>
                <div class="panel__item">
                    <div class="panel__item-icon _icon-media-icon"></div>
                    <div class="panel__item-title"><a href="/media">Медия</a></div>
                </div>
                <div class="panel__item">
                    <div class="panel__item-icon _icon-history-icon"></div>
                    <div class="panel__item-title"><a href="/history">История</a></div>
                </div>
                <div class="panel__item">
                    <div class="panel__item-icon _icon-document-icon"></div>
                    <div class="panel__item-title"><a href="/documents">Документы</a></div>
                </div>
                <div class="panel__item">
                    <div class="panel__item-icon _icon-about-icon"></div>
                    <div class="panel__item-title"><a href="/about">О нас</a></div>
                </div>
            </div>
        </div>
    </div>


    <div class="header__btn-panel" onclick="panelActive()">
        <div class="header__btn-panel-icon _icon-arrow-btn"></div>
    </div>

    <div class="wrapper" onclick="panelActive()"></div>


        <?php echo $content; ?>

    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"
		integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <script src="/public/scripts/app.js"></script>
</body>
</html>