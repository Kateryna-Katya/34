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
            <span class="section-tag">Payment & Refunds</span>
            <h1>Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent">
                    <div class="hero-card-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <p>
                        Мы стремимся к максимальной прозрачности во взаимоотношениях с нашими клиентами. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена процедура возврата, основанная на защите прав потребителей ЕС и стандартах качества.
                    </p>
                </div>

                <h2>Условия для оформления возврата</h2>
                <div class="refund-grid">
                    <div class="refund-card">
                        <i class="fas fa-file-contract"></i>
                        <h3>Несоответствие</h3>
                        <p>Если содержание консультаций существенно отличается от заявленного на платформе <?= $domainTitle ?>.</p>
                    </div>
                    <div class="refund-card">
                        <i class="fas fa-tools"></i>
                        <h3>Технические сбои</h3>
                        <p>Критические ошибки инфраструктуры <?= $fullDomain ?>, не устраненные в течение 48 часов.</p>
                    </div>
                    <div class="refund-card">
                        <i class="fas fa-hourglass-half"></i>
                        <h3>Период 14 дней</h3>
                        <p>Право на «период охлаждения» при условии, что основные материалы еще не были изучены.</p>
                    </div>
                </div>

                <div class="procedure-block">
                    <h2>Процедура запроса</h2>
                    <p>Для инициации возврата на <?= $domainTitle ?> выполните следующие шаги:</p>
                    <div class="steps-mini-container">
                        <div class="step-mini-item">
                            <span class="step-num">01</span>
                            <p>Письмо на <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></p>
                        </div>
                        <div class="step-mini-item">
                            <span class="step-num">02</span>
                            <p>Укажите тему: «Refund Request»</p>
                        </div>
                        <div class="step-mini-item">
                            <span class="step-num">03</span>
                            <p>Приложите чек и опишите причину</p>
                        </div>
                    </div>
                </div>

                <div class="legal-block accent-grey">
                    <h2>Сроки и способ возврата</h2>
                    <p>
                        После одобрения возврат производится в течение <strong>7–14 рабочих дней</strong>. 
                        Средства возвращаются тем же способом, которым была совершена оплата. 
                        Срок зачисления зависит от регламента вашего банка во Франции или ЕС.
                    </p>
                </div>

                <div class="warning-alert-box">
                    <h3><i class="fas fa-info-circle"></i> Исключения</h3>
                    <ul class="check-list">
                        <li>Запрос подан позже 14 дней с момента транзакции.</li>
                        <li>Изучено более 50% предоставленных материалов или методологий.</li>
                        <li>Нарушение правил использования платформы <?= $domainTitle ?>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy">
                    <h2>Свяжитесь с нами</h2>
                    <p>Служба поддержки во Франции готова помочь:</p>
                    <div class="policy-contact-card">
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+33189480934" class="policy-mail">+33 1 89 48 09 34</a>
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