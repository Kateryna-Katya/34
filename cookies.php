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
            <span class="section-tag">Legal Documents</span>
            <h1>Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie.
                </p>

                <div class="legal-block">
                    <h2>Что такое файлы cookie?</h2>
                    <p>
                        Файл cookie — это небольшой фрагмент данных, который веб-сайт сохраняет на вашем устройстве. Это позволяет платформе 
                        <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                        (язык, регион Франция и другие параметры) в течение определенного времени.
                    </p>
                </div>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <div class="legal-grid">
                    <div class="legal-card">
                        <i class="fas fa-shield-alt"></i>
                        <h3>Строго необходимые</h3>
                        <p>Критически важны для функционирования. Позволяют безопасно перемещаться по страницам <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="legal-card">
                        <i class="fas fa-chart-line"></i>
                        <h3>Аналитические</h3>
                        <p>Сбор анонимной информации о том, как вы используете наш сайт для улучшения карьерных сервисов.</p>
                    </div>
                    <div class="legal-card">
                        <i class="fas fa-user-cog"></i>
                        <h3>Функциональные</h3>
                        <p>Позволяют запоминать ваш выбор для персонализированного опыта в рамках ваших консультаций.</p>
                    </div>
                    <div class="legal-card">
                        <i class="fas fa-ad"></i>
                        <h3>Маркетинговые</h3>
                        <p>Используются для доставки объявлений, соответствующих вашим интересам в сфере карьеры.</p>
                    </div>
                </div>

                <h2>Зачем мы используем файлы cookie?</h2>
                <ul class="styled-list">
                    <li>Обеспечение стабильной и безопасной работы платформы.</li>
                    <li>Анализ пользовательского поведения для оптимизации контента.</li>
                    <li>Персонализация предложений для пользователей в Европе (Франция).</li>
                    <li>Предоставление релевантных маркетинговых материалов.</li>
                </ul>

                <div class="legal-block accent">
                    <h2>Ваш выбор и управление</h2>
                    <p>
                        Вы имеете полный контроль над файлами cookie. Вы можете в любой
                        момент изменить свои настройки в браузере. Однако, обратите
                        внимание: отключение строго необходимых cookie может привести к
                        некорректной работе некоторых функций.
                    </p>
                </div>

                <div class="contact-info-block">
                    <h2>Свяжитесь с нами</h2>
                    <p>Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>:</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <strong>Email:</strong> 
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                        </div>
                        <div class="contact-item">
                            <strong>Телефон:</strong> 
                            <a href="tel:+33189480934">+33 1 89 48 09 34</a>
                        </div>
                        <div class="contact-item">
                            <strong>Адрес:</strong> 
                            <span>25 Rue du Petit Musc, 75004 Paris, France</span>
                        </div>
                    </div>
                </div>
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