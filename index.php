<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Rededge</title>
</head>
<body>
    <header class="header">
        <div class="container header-container">
            <div class="header-container-left">
                <div class="header-menu"><span></span></div>
                <div class="header-menu-section">
                    <div class="header-menu-section-top">
                        <ul class="header-menu-section-nav">
                            <li class="header-menu-section-item"><a href="#" class="header-menu-section-link">Услуги</a></li>
                            <li class="header-menu-section-item"><a href="#" class="header-menu-section-link">Портфолио</a></li>
                            <li class="header-menu-section-item"><a href="#" class="header-menu-section-link">Отзывы</a></li>
                            <li class="header-menu-section-item"><a href="#" class="header-menu-section-link">Вакансии</a></li>
                            <li class="header-menu-section-item"><a href="#" class="header-menu-section-link">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="header-menu-section-bottom">
                        <address class="header-city-menu">Ростов-на-Дону, Ленина, 21</address>
                        <a href="tel:+78632431510" class="header-tel-menu">8(863)243-15-10</a>
                    </div>
                </div>
                <script>
                    document.querySelector('.header-menu').addEventListener('click', function(){
                    document.querySelector('.header-menu span').classList.toggle('active');
                    document.querySelector('.header-menu-section').classList.toggle('animate');
                  })
                </script>
                <img src="logo.svg" alt="Rededge" class="header-logo">
                <nav class="header-nav">
                    <ul class="header-nav-list">
                        <li class="header-nav-list-item"><a href="#" class="header-nav-link">Услуги</a></li>
                        <li class="header-nav-list-item"><a href="#" class="header-nav-link">Портфолио</a></li>
                        <li class="header-nav-list-item"><a href="#" class="header-nav-link">Отзывы</a></li>
                        <li class="header-nav-list-item"><a href="#" class="header-nav-link">Вакансии</a></li>
                        <li class="header-nav-list-item"><a href="#" class="header-nav-link">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-container-right">
                <a href="tel:+78632431510" class="header-tel">8(863)243-15-10</a>
                <address class="header-city">Ростов-на-Дону</address>
            </div>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <h1 class="hero-heading">Рекламно-информационное агентство</h1>
            <p class="hero-description">Будем рады, если Вы обратитесь в наше Агентство. Мы готовы предложить Вам передовые решения для продвижения Вашего бизнеса.</p>
            <form id="form" class="hero-form">
                <input type="tel" name="phone" required placeholder="Номер телефона" class="hero-form-input">
                <button type="submit" class="hero-form-button">Обратный звонок</button>
            </form>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="/common.js"></script>
            <script src="../../inputmask.min.js"></script>
            <script>
                var selector = document.querySelector("input[type='tel']");
                var im = new Inputmask("+7 (999)-999-99-99");
                im.mask(selector);
            </script>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <h2 class="news-heading">Новости</h2>
            <div class="news-container">
                <div class="square-left"></div>
                <div class="square-right"></div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="news-block-container">
                                <div class="news-block">
                                    <div class="news-block-date">15.10.2020</div>
                                    <h3 class="news-block-heading">Акции на размещение баннерного панно 20% до конца июля</h3>
                                    <a href="#" class="news-block-button">Подробнее</a>
                                </div>
                                <div class="news-block">
                                    <div class="news-block-date">10.10.2020</div>
                                    <h3 class="news-block-heading">Мы работаем в обычном режиме
                                        с 15 июня!</h3>
                                    <a href="#" class="news-block-button">Подробнее</a>
                                </div>
                                <div class="news-block">
                                    <div class="news-block-date">8.10.2020</div>
                                    <h3 class="news-block-heading">Как правильно подобрать рекламный канал?</h3>
                                    <a href="#" class="news-block-button">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="news-block-container">
                                <div class="news-block">
                                    <div class="news-block-date">15.10.2020</div>
                                    <h3 class="news-block-heading">Акции на размещение баннерного панно 20% до конца июля</h3>
                                    <a href="#" class="news-block-button">Подробнее</a>
                                </div>
                                <div class="news-block">
                                    <div class="news-block-date">10.10.2020</div>
                                    <h3 class="news-block-heading">Мы работаем в обычном режиме
                                        с 15 июня!</h3>
                                    <a href="#" class="news-block-button">Подробнее</a>
                                </div>
                                <div class="news-block">
                                    <div class="news-block-date">8.10.2020</div>
                                    <h3 class="news-block-heading">Как правильно подобрать рекламный канал?</h3>
                                    <a href="#" class="news-block-button">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="news-block-container">
                                <div class="news-block">
                                    <div class="news-block-date">15.10.2020</div>
                                    <h3 class="news-block-heading">Акции на размещение баннерного панно 20% до конца июля</h3>
                                    <a href="#" class="news-block-button">Подробнее</a>
                                </div>
                                <div class="news-block">
                                    <div class="news-block-date">10.10.2020</div>
                                    <h3 class="news-block-heading">Мы работаем в обычном режиме
                                        с 15 июня!</h3>
                                    <a href="#" class="news-block-button">Подробнее</a>
                                </div>
                                <div class="news-block">
                                    <div class="news-block-date">8.10.2020</div>
                                    <h3 class="news-block-heading">Как правильно подобрать рекламный канал?</h3>
                                    <a href="#" class="news-block-button">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <script>
                    const swiper = new Swiper('.swiper', {
                        loop: true,
                        pagination: {
                            el: '.swiper-pagination',
                        }
                    });
                </script>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container footer-container">
            <img src="logo.svg" alt="Rededge" class="header-logo footer-logo">
            <nav class="footer-nav">
                <ul class="footer-nav-list">
                    <li class="footer-nav-list-item"><a href="#" class="footer-nav-link">Услуги</a></li>
                    <li class="footer-nav-list-item"><a href="#" class="footer-nav-link">Портфолио</a></li>
                    <li class="footer-nav-list-item"><a href="#" class="footer-nav-link">Отзывы</a></li>
                    <li class="footer-nav-list-item"><a href="#" class="footer-nav-link">Вакансии</a></li>
                    <li class="footer-nav-list-item"><a href="#" class="footer-nav-link">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>