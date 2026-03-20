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
            <span class="section-tag">Privacy & Security</span>
            <h1>Политика обработки данных</h1>

            <div class="legal-content">
                <div class="policy-intro">
                    <div class="legal-block info-border">
                        <h2>1. Общие положения</h2>
                        <p>
                            Настоящая политика (далее — «Политика») определяет порядок обработки данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), согласно стандартам ЕС.
                        </p>
                        <p>
                            1.1. Важнейшей целью Оператора является защита прав Пользователя на неприкосновенность частной жизни и личную тайну при использовании инновационной инфраструктуры сайта.
                        </p>
                    </div>
                </div>

                <div class="policy-section">
                    <h2>2. Основные понятия</h2>
                    <div class="terminology-grid">
                        <div class="term-box">
                            <strong>Веб-сайт</strong>
                            <span>Ресурс <?= $fullDomain ?>.</span>
                        </div>
                        <div class="term-box">
                            <strong>Пользователь</strong>
                            <span>Посетитель платформы.</span>
                        </div>
                        <div class="term-box">
                            <strong>Персональные данные</strong>
                            <span>Любая информация о Вас.</span>
                        </div>
                    </div>
                </div>

                <div class="policy-section">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid">
                        <div class="data-item">
                            <div class="data-icon"><i class="fas fa-id-card"></i></div>
                            <div class="data-text">
                                <strong>Идентификационные данные:</strong>
                                <p>Имя, адрес электронной почты, контактный телефон.</p>
                            </div>
                        </div>
                        <div class="data-item">
                            <div class="data-icon"><i class="fas fa-microchip"></i></div>
                            <div class="data-text">
                                <strong>Технический след:</strong>
                                <p>Файлы cookie, IP-адрес, тип браузера и ОС.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section">
                    <h2>4. Цели обработки данных</h2>
                    <ul class="styled-list">
                        <li>Предоставление доступа к AI-инструментам платформы.</li>
                        <li>Обеспечение обратной связи по вопросам карьерного апгрейда.</li>
                        <li>Персонализация стратегии развития в рамках ЕС.</li>
                        <li>Улучшение передовой цифровой инфраструктуры проекта.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <div class="legal-block accent">
                        <h2>5. Безопасность и правовые основания</h2>
                        <p>Оператор обрабатывает данные только при наличии Вашего согласия. Мы применяем современные методы шифрования, чтобы обеспечить безопасность на уровне платформы года.</p>
                    </div>
                </div>

                <div class="contact-footer-policy">
                    <h2>6. Вопросы и отзывы</h2>
                    <p>Для реализации прав на удаление или изменение данных, напишите нам:</p>
                    <div class="policy-contact-card">
                        <i class="fas fa-paper-plane"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
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