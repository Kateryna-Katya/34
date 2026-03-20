document.addEventListener('DOMContentLoaded', () => {
    
    // === 0. РЕГИСТРАЦИЯ ПЛАГИНОВ ===
    gsap.registerPlugin(ScrollTrigger);

    // === 1. МОБИЛЬНОЕ МЕНЮ ===
    const burger = document.querySelector('.burger');
    const mobileOverlay = document.querySelector('.mobile-overlay');
    const mobileLinks = document.querySelectorAll('.mobile-menu a');

    if (burger && mobileOverlay) {
        const toggleMenu = () => {
            burger.classList.toggle('active');
            mobileOverlay.classList.toggle('active');
            document.body.style.overflow = mobileOverlay.classList.contains('active') ? 'hidden' : '';
        };
        burger.addEventListener('click', toggleMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));
    }

    // === 2. ГЛУБИННАЯ ПОДГРУЗКА (GSAP + SCROLL REVEAL) ===
    // Функция принудительной подготовки и анимации элементов
    const initScrollAnimations = () => {
        // Базовые секции (простое появление)
        const sections = ['.hero-content', '.section-head', '.contact-info'];
        sections.forEach(sec => {
            if (document.querySelector(sec)) {
                gsap.from(sec, {
                    scrollTrigger: {
                        trigger: sec,
                        start: "top 85%",
                    },
                    y: 40,
                    opacity: 0,
                    duration: 1,
                    ease: "power2.out"
                });
            }
        });

        // Списки и сетки (Stagger-эффект)
        const grids = [
            { parent: '.features-grid', child: '.feature-card' },
            { parent: '.timeline', child: '.timeline-item' },
            { parent: '.blog-grid', child: '.blog-card' },
            { parent: '.faq-container', child: '.faq-item' }
        ];

        grids.forEach(grid => {
            const children = document.querySelectorAll(grid.child);
            if (children.length > 0) {
                // Сначала делаем элементы невидимыми
                gsap.set(children, { opacity: 0, y: 50 });

                gsap.to(children, {
                    scrollTrigger: {
                        trigger: grid.parent,
                        start: "top 80%",
                        toggleActions: "play none none none"
                    },
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    stagger: 0.15,
                    ease: "power3.out"
                });
            }
        });
    };
    initScrollAnimations();

    // === 3. FAQ АККОРДЕОН (БЕЗ БАГОВ) ===
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Закрываем все
            faqItems.forEach(i => {
                i.classList.remove('active');
                const ans = i.querySelector('.faq-answer');
                if (ans) ans.style.maxHeight = null;
            });

            // Открываем текущий
            if (!isActive) {
                item.classList.add('active');
                const answer = item.querySelector('.faq-answer');
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
        });
    });

    // === 4. КАПЧА И ВАЛИДАЦИЯ ФОРМЫ ===
    const captchaLabel = document.getElementById('captcha-question');
    const mainForm = document.getElementById('main-form');
    let capA, capB, capResult;

    const refreshCaptcha = () => {
        capA = Math.floor(Math.random() * 9) + 1;
        capB = Math.floor(Math.random() * 9) + 1;
        capResult = capA + capB;
        if (captchaLabel) captchaLabel.textContent = `${capA} + ${capB}`;
    };
    refreshCaptcha();

    if (mainForm) {
        mainForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const userAns = parseInt(document.getElementById('captcha-answer').value);
            const successBox = document.getElementById('form-success');
            const submitBtn = mainForm.querySelector('button');

            if (userAns === capResult) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Отправка...';

                // Симуляция AJAX
                setTimeout(() => {
                    mainForm.reset();
                    submitBtn.style.display = 'none';
                    successBox.style.display = 'block';
                    refreshCaptcha();

                    setTimeout(() => {
                        successBox.style.display = 'none';
                        submitBtn.style.display = 'block';
                        submitBtn.disabled = false;
                        submitBtn.textContent = 'Запросить доступ';
                    }, 5000);
                }, 1500);
            } else {
                alert('Неверный результат капчи!');
                refreshCaptcha();
                document.getElementById('captcha-answer').value = '';
            }
        });
    }

    // === 5. COOKIE POPUP ===
    const cookieBox = document.getElementById('cookie-popup');
    const cookieBtn = document.getElementById('accept-cookies');

    if (cookieBox && !localStorage.getItem('gdpr_accepted')) {
        setTimeout(() => cookieBox.classList.add('show'), 3000);
    }

    if (cookieBtn) {
        cookieBtn.addEventListener('click', () => {
            localStorage.setItem('gdpr_accepted', 'true');
            cookieBox.classList.remove('show');
        });
    }

    // === 6. ПЛАВНЫЙ СКРОЛЛ И HEADER EFFECT ===
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 80) {
            header.style.padding = '10px 0';
            header.style.background = 'rgba(255, 255, 255, 0.98)';
            header.style.boxShadow = '0 10px 30px rgba(0,0,0,0.05)';
        } else {
            header.style.padding = '20px 0';
            header.style.background = 'rgba(255, 255, 255, 0.8)';
            header.style.boxShadow = 'none';
        }
    });

    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 70,
                    behavior: 'smooth'
                });
            }
        });
    });

    console.log('--- <?= $domainTitle ?> JS Engine Loaded Successfully ---');
});