<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> | Карьерный апгрейд и инновации</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='45' fill='none' stroke='%2300D2FF' stroke-width='8'/><path d='M30 50 L45 65 L70 35' fill='none' stroke='%2300D2FF' stroke-width='8' stroke-linecap='round'/></svg>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="./#hero" class="logo"><?= $domainTitle ?></a>
                <ul class="nav-menu">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#features">Преимущества</a></li>
                    <li><a href="./#strategy">Стратегия</a></li>
                    <li><a href="./#blog">Блог</a></li>
                    <li><a href="./#faq">Вопросы</a></li>
                </ul>
                <a href="./#contact" class="btn btn-primary">Связаться</a>
                <div class="burger">
                    <span></span><span></span><span></span>
                </div>
            </nav>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag">Центр поддержки</span>
            <h1>Контактная информация</h1>

            <p class="lead-text">
                Мы всегда открыты для новых проектов и профессиональных дискуссий. 
                Свяжитесь с командой <strong><?= $domainTitle ?></strong> любым удобным для вас способом. 
                Наши специалисты в Париже готовы ответить на ваши вопросы по будням с 09:00 до 18:00.
            </p>

            <div class="contact-cards">
                <div class="contact-card">
                    <div class="contact-card__icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h2>Пишите нам</h2>
                    <p>Для общих вопросов, предложений и запросов на консалтинг:</p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="contact-link">support@<?= $fullDomain ?></a>
                </div>

                <div class="contact-card">
                    <div class="contact-card__icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h2>Звоните</h2>
                    <p>Прямая линия поддержки клиентов и экспертных консультаций:</p>
                    <a href="tel:+33189480934" class="contact-link">+33 1 89 48 09 34</a>
                </div>

                <div class="contact-card">
                    <div class="contact-card__icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h2>Наш офис</h2>
                    <p>Главный офис компании <strong><?= $domainTitle ?></strong> расположен по адресу:</p>
                    <address class="contact-address">
                        25 Rue du Petit Musc,<br>
                        75004 Paris,<br>
                        France
                    </address>
                </div>
            </div>

            <div class="contact-extra">
                <p>
                    Предложение активно только в странах ЕС. Платформа уже доступна в Европе. Вы также можете воспользоваться формой обратной связи на 
                    <a href="./#contact">главной странице</a> для быстрой отправки запроса.
                </p>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <a href="./#hero" class="logo"><?= $domainTitle ?></a>
                    <p class="footer-desc">Решения, которые меняют правила игры в вашей карьере. Передовая цифровая инфраструктура для профессионального роста.</p>
                </div>
                <div class="footer-col">
                    <h4>Навигация</h4>
                    <ul class="footer-links">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#features">Преимущества</a></li>
                        <li><a href="./#strategy">Стратегия</a></li>
                        <li><a href="./#blog">Блог</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Юридическая информация</h4>
                    <ul class="footer-links">
                        <li><a href="./privacy.php">Privacy Policy</a></li>
                        <li><a href="./cookies.php">Cookie Policy</a></li>
                        <li><a href="./terms.php">Terms of Service</a></li>
                        <li><a href="./return.php">Return Policy</a></li>
                        <li><a href="./disclaimer.php">Disclaimer</a></li>
                        <li><a href="./contact.php">Contact Us</a></li>
                        <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Контакты</h4>
                    <ul class="footer-info">
                        <li><i class="fa-solid fa-phone"></i> <a href="tel:+33189480934">+33 1 89 48 09 34</a></li>
                        <li><i class="fa-solid fa-envelope"></i> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                        <li><i class="fa-solid fa-location-dot"></i> 25 Rue du Petit Musc, 75004 Paris, France</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 <?= $fullDomain ?>. Все права защищены.</p>
            </div>
        </div>
    </footer>
    <div class="mobile-overlay">
        <div class="mobile-nav-container">
            <ul class="mobile-menu">
                <li><a href="./#hero">Главная</a></li>
                <li><a href="./#features">Преимущества</a></li>
                <li><a href="./#strategy">Стратегия</a></li>
                <li><a href="./#blog">Блог</a></li>
                <li><a href="./#faq">Вопросы</a></li>
                <li><a href="./#contact" class="btn btn-primary">Связаться</a></li>
            </ul>
        </div>
    </div>
    
    <div id="cookie-popup" class="cookie-popup">
        <div class="cookie-content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="accept-cookies" class="btn btn-primary">Принять</button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>
</html>