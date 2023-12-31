<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== CSS and CDN ===============-->
    @include('frontend.components.css')

    <title>Milan Basakhora - Fullstack Web Developer, Software Engineer</title>
</head>

<body>
    <!--=============== Style Switch ===============-->
    <input type="checkbox" id="day-night">

    <!--=============== Header ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="#home" class="nav__link active-link">Hello</a>
                    </li>

                    <li>
                        <a href="#services" class="nav__link">Serveices</a>
                    </li>

                    <li>
                        <a href="#resume" class="nav__link">Resume</a>
                    </li>

                    <li>
                        <a href="#portfolio" class="nav__link">Portfolio</a>
                    </li>

                    <li>
                        <a href="#blog" class="nav__link">Blog</a>
                    </li>

                    <li>
                        <a href="#contact" class="nav__link">Contact</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-fill"></i>
                </div>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-fill"></i>
            </div>

            <!--=============== Style Switch ===============-->
            @include('frontend.components.styleswitcher')
        </nav>
    </header>

    <!--=============== Main ===============-->
    <main class="main">
        <!--=============== Home ===============-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <img src="/frontend/assets/img/profile1color.png" alt="" class="home__img">

                <div class="home__data">
                    <h1 class="home__name">Milan Basakhora_</h1>
                    <p class="home__work">Fullstack Web Developer, Software Engineer</p>
                    <dl class="home__list">
                        <dt>AGE:</dt>
                        <dd>23</dd>
                        <dt>PHONE:</dt>
                        <dd>+977 9819003860</dd>
                        <dt>EMAIL:</dt>
                        <dd>milanbasakhora@gmail.com</dd>
                        <dt>ADDRESS:</dt>
                        <dd>Dharan, Nepal</dd>
                    </dl>
                    <div class="home__socials">
                        <a href="https://github.com/milanbasakhora" target="_blank" class="home__social-link">
                            <i class="ri-github-fill"></i>
                        </a>
                        <a href="https://linkedin.com/milanbasakhora" target="_blank" class="home__social-link">
                            <i class="ri-linkedin-box-fill"></i>
                        </a>
                        <a href="https://facebook.com/milanbasakhora" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== Hello ===============-->
        <section class="hello section container">
            <h2 class="section__title">Hi_</h2>
            <p class="hello__details text-lg">I am Junior Web developer able to build a Web presence from the ground up
                - from
                concept, navigation, layout and programming to UX and SEO. Skilled at writing well-designed, testable
                and
                efficient code using current best practices in Web development. Fast learner, hard worker and team
                player who is
                proficient in an array of scripting languages and multimedia Web tools.</p>
            <a href="/frontend/assets/img/John-Cv.pdf" class="button button--flex text-sm"><i
                    class="ri-download-line"></i> DOWNLOAD
                CV</a>
        </section>

        <!--=============== Services ===============-->
        <section class="services section container" id="services">
            <h2 class="section__title">Services_</h2>

            <div class="services__container grid">
                <div class="services__item">
                    <div class="icon__box">
                        <img src="/frontend/assets/img/web-design.png" alt="" class="services__icon">
                        <div class="services__dot">
                            <span class="dot"></span>
                        </div>
                    </div>
                    <h3 class="services__title text-lg">WEB DESIGN</h3>
                    <p class="services__detail">am an expert web designer and developer. Contrary to popular belief,
                        Lorem Ipsum
                        is not simply random text. It has</p>
                </div>

                <div class="services__item">
                    <div class="icon__box">
                        <img src="/frontend/assets/img/laptop.png" alt="" class="services__icon">
                        <div class="services__dot">
                            <span class="dot"></span>
                        </div>
                    </div>
                    <h3 class="services__title text-lg">WEB DEVELOPMENT</h3>
                    <p class="services__detail">am an expert web designer and developer. Contrary to popular belief,
                        Lorem Ipsum
                        is not simply random text. It has</p>
                </div>

                <div class="services__item">
                    <div class="icon__box">
                        <img src="/frontend/assets/img/paint-palette.png" alt="" class="services__icon">
                        <div class="services__dot">
                            <span class="dot"></span>
                        </div>
                    </div>
                    <h3 class="services__title text-lg">CREATIVE DESIGN</h3>
                    <p class="services__detail">am an expert web designer and developer. Contrary to popular belief,
                        Lorem Ipsum
                        is not simply random text. It has</p>
                </div>

                <div class="services__item">
                    <div class="icon__box">
                        <img src="/frontend/assets/img/smartphone-call.png" alt="" class="services__icon">
                        <div class="services__dot">
                            <span class="dot"></span>
                        </div>
                    </div>
                    <h3 class="services__title text-lg">RESPONSIVE DESIGN</h3>
                    <p class="services__detail">am an expert web designer and developer. Contrary to popular belief,
                        Lorem Ipsum
                        is not simply random text. It has</p>
                </div>

                <div class="services__item">
                    <div class="icon__box">
                        <img src="/frontend/assets/img/verified.png" alt="" class="services__icon">
                        <div class="services__dot">
                            <span class="dot"></span>
                        </div>
                    </div>
                    <h3 class="services__title text-lg">BRANDING IDENTITY</h3>
                    <p class="services__detail">am an expert web designer and developer. Contrary to popular belief,
                        Lorem Ipsum
                        is not simply random text. It has</p>
                </div>

                <div class="services__item">
                    <div class="icon__box">
                        <img src="/frontend/assets/img/operator.png" alt="" class="services__icon">
                        <div class="services__dot">
                            <span class="dot"></span>
                        </div>
                    </div>
                    <h3 class="services__title text-lg">24/7 SUPPORT</h3>
                    <p class="services__detail">am an expert web designer and developer. Contrary to popular belief,
                        Lorem Ipsum
                        is not simply random text. It has</p>
                </div>
            </div>
        </section>

        <!--=============== Resume ===============-->
        <section class="section container" id="resume">
            <h2 class="section__title">Resume_</h2>

            <div class="resume__container grid">
                <div class="resume__data">
                    <h3 class="resume__title text-sm">EDUCATION</h3>

                    <div class="resume__item">
                        <h3 class="resume__subtitle text-sm">TRIBHUWAN UNIVERSITY</h3>
                        <p class="resume__date text-sm">2017 - Current</p>
                        <p class="resume__description text-lg">Bachelor in Computer Science and Information Technology
                        </p>
                    </div>

                    <div class="resume__item">
                        <h3 class="resume__subtitle text-sm">HIGHER SECONDARY EDUCATION BOARD (NEPAL)</h3>
                        <p class="resume__date text-sm">2015 - 2017</p>
                        <p class="resume__description text-lg">During my higher secondary education, I enrolled in the
                            science faculty, with a specialization in physics, chemistry, and mathematics as my core
                            subjects.
                        </p>
                    </div>

                    <div class="resume__item">
                        <h3 class="resume__subtitle text-sm">SCHOOL LEAVING CERTIFICATE (SLC)</h3>
                        <p class="resume__date text-sm">2013 - 2015</p>
                        <p class="resume__description text-lg">I successfully obtained my School Leaving Certificate
                            (SLC) from a reputable public high school, marking an important educational milestone.</p>
                    </div>
                </div>

                <div class="resume__data">
                    <h3 class="resume__title text-sm">EMPLOYMENT</h3>

                    <div class="resume__item">
                        <h3 class="resume__subtitle text-sm">CODE IT</h3>
                        <p class="resume__date text-sm">2023 - Current</p>
                        <p class="resume__description text-lg">Full Stack Web Developer</p>
                    </div>

                    <div class="resume__item">
                        <h3 class="resume__subtitle text-sm">TECH UNIVERSITY</h3>
                        <p class="resume__date text-sm">2004 - 2005</p>
                        <p class="resume__description text-lg">Awesome developer, lorem ipsum dolor sit amet, conse
                            ctetur
                            adipisicing elit, sed do eius- mod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim
                            veniam, quis</p>
                    </div>

                    <div class="resume__item">
                        <h3 class="resume__subtitle text-sm">MOLLYS STUDIO</h3>
                        <p class="resume__date text-sm">2003 - 2006</p>
                        <p class="resume__description text-lg">Programmer Lorem ipsum dolor sit amet, consecte tur
                            adipisicing elit,
                            sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== Skills ===============-->
        <section class="section container">
            <h2 class="section__title">Skills_</h2>

            <div class="skills__container grid">
                <div class="skills__content">
                    <h3 class="skills__title text-sm">FRONTEND</h3>

                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <p class="skills__name text-sm">HTML</p>
                                <span class="skills__number text-sm">90%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width: 90%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <p class="skills__name text-sm">CSS</p>
                                <span class="skills__number text-sm">80%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width: 80%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <p class="skills__name text-sm">JavaScript</p>
                                <span class="skills__number text-sm">60%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width: 60%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <p class="skills__name text-sm">React</p>
                                <span class="skills__number text-sm">85%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width: 85%;"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skills__content">
                    <h3 class="skills__title text-sm">BACKEND</h3>

                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <p class="skills__name text-sm">PHP</p>
                                <span class="skills__number text-sm">90%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width: 90%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <p class="skills__name text-sm">Node JS</p>
                                <span class="skills__number text-sm">80%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width: 80%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <p class="skills__name text-sm">Python</p>
                                <span class="skills__number text-sm">60%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width: 60%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <p class="skills__name text-sm">MySQL</p>
                                <span class="skills__number text-sm">85%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width: 85%;"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== Projects ===============-->
        <section class="work section container" id="portfolio">`
            <h2 class="section__title">Work_</h2>

            <div class="project__categories">
                <button class="category__btn text-xs active-work" data-filter="all">ALL</button>
                <button class="category__btn text-xs" data-filter=".app">MOBILE APPS</button>
                <button class="category__btn text-xs" data-filter=".web">WEB-SITES</button>
                <button class="category__btn text-xs" data-filter=".landing">LANDING PAGES</button>
            </div>

            <div class="projects__container grid">
                <div class="project__item grid mix app">
                    <img src="/frontend/assets/img/project-1.png" alt="" class="project__img">

                    <div class="project__data">
                        <h3 class="project__title text-lg">MOBILE AND DESKTOP APP FOR LONDON HOSTEL STORE</h3>
                        <p class="project__description">Do answered bachelor occasion in of offended no concerns.
                            Supply worthy
                            warmth branch of no ye. Voice tried known to as my to. Though wished merits or be. Alone
                            visit use these
                            smart rooms ham.</p>
                        <h4 class="project__stack text-xs">USED STACK:</h4>
                        <ul class="tags text-sm">
                            <li>html5</li>
                            <li>css3</li>
                            <li>JavaScript</li>
                            <li>BEM</li>
                            <li>bower</li>
                            <li>grunt</li>
                        </ul>

                        <a href="" class="project__link text-sm">www.superapp.com</a>
                    </div>
                </div>

                <div class="project__item grid mix web">
                    <img src="/frontend/assets/img/project-2.png" alt="" class="project__img">

                    <div class="project__data">
                        <h3 class="project__title text-lg">WEB APP PAGE FOR TRAVEL COMPANY</h3>
                        <p class="project__description">Do answered bachelor occasion in of offended no concerns.
                            Supply worthy
                            warmth branch of no ye. Voice tried known to as my to. Though wished merits or be. Alone
                            visit use these
                            smart rooms ham.</p>
                        <h4 class="project__stack text-xs">USED STACK:</h4>
                        <ul class="tags text-sm">
                            <li>html5</li>
                            <li>css3</li>
                            <li>JavaScript</li>
                            <li>BEM</li>
                            <li>bower</li>
                            <li>grunt</li>
                        </ul>

                        <a href="" class="project__link text-sm">www.superapp.com</a>
                    </div>
                </div>

                <div class="project__item grid mix landing">
                    <img src="/frontend/assets/img/project-3.png" alt="" class="project__img">

                    <div class="project__data">
                        <h3 class="project__title text-lg">ADMIN TEMPLATE FOR PHOTO SERVICE</h3>
                        <p class="project__description">Do answered bachelor occasion in of offended no concerns.
                            Supply worthy
                            warmth branch of no ye. Voice tried known to as my to. Though wished merits or be. Alone
                            visit use these
                            smart rooms ham.</p>
                        <h4 class="project__stack text-xs">USED STACK:</h4>
                        <ul class="tags text-sm">
                            <li>html5</li>
                            <li>css3</li>
                            <li>JavaScript</li>
                            <li>BEM</li>
                            <li>bower</li>
                            <li>grunt</li>
                        </ul>

                        <a href="" class="project__link text-sm">www.superapp.com</a>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== Testimonials ===============-->
        <section class="testimonials section">
            <div class="testimonial__bg">
                <div class="testimonial__icon">
                    <i class="ri-double-quotes-r"></i>
                </div>

                <div class="swiper testimonial__container container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide testimonial__item">
                            <h3 class="author__name text-lg">Antonio Anderson</h3>
                            <p class="author__project">Project: Landin page for travel company</p>
                            <div class="ruler"></div>
                            <p class="testimonial__description text-lg">Up or well must less rent read walk so be. Easy
                                sold at do
                                hour sing spot. Any meant has cease too the decay. Since party burst am it match. By or
                                blushes between
                                besides offices noisier as. Sending do brought winding compass in. Easy sold at do hour
                                sing spot less
                                rent read walk so be. Any meant has cease too the decay.</p>
                        </div>

                        <div class="swiper-slide testimonial__item">
                            <h3 class="author__name text-lg">Antonio Anderson</h3>
                            <p class="author__project">Project: Landin page for travel company</p>
                            <div class="ruler"></div>
                            <p class="testimonial__description text-lg">Up or well must less rent read walk so be. Easy
                                sold at do
                                hour sing spot. Any meant has cease too the decay. Since party burst am it match. By or
                                blushes between
                                besides offices noisier as. Sending do brought winding compass in. Easy sold at do hour
                                sing spot less
                                rent read walk so be. Any meant has cease too the decay.</p>
                        </div>

                        <div class="swiper-slide testimonial__item">
                            <h3 class="author__name text-lg">Antonio Anderson</h3>
                            <p class="author__project">Project: Landin page for travel company</p>
                            <div class="ruler"></div>
                            <p class="testimonial__description text-lg">Up or well must less rent read walk so be. Easy
                                sold at do
                                hour sing spot. Any meant has cease too the decay. Since party burst am it match. By or
                                blushes between
                                besides offices noisier as. Sending do brought winding compass in. Easy sold at do hour
                                sing spot less
                                rent read walk so be. Any meant has cease too the decay.</p>
                        </div>
                    </div>

                    <div class="swiper-button-next">
                        <img src="/frontend/assets/img/arrow-next.svg" alt="">
                    </div>
                    <div class="swiper-button-prev">
                        <img src="/frontend/assets/img/arrow-prev.svg" alt="">
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!--=============== Blog ===============-->
        <section class="blog section container" id="blog">
            <h2 class="section__title">Latest Posts_</h2>

            <div class="posts__container grid">
                <a href="/blog_details" class="post__card">
                    <img src="/frontend/assets/img/blog-1.png" alt="" class="post__img">

                    <div class="post__content">
                        <p class="post__date text-xs">October 22, 2017</p>
                        <h3 class="post__title text-sm">HOW TO USE CSS-PREPROCESSOR</h3>
                        <p class="post__description text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do
                            eiusmod tempr incididu...</p>
                    </div>
                </a>

                <div class="post__card">
                    <img src="/frontend/assets/img/blog-2.png" alt="" class="post__img">

                    <div class="post__content">
                        <p class="post__date text-xs">October 22, 2017</p>
                        <h3 class="post__title text-sm">HOW I ORGANIZE MY WORK WITH CODE</h3>
                        <p class="post__description text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do
                            eiusmod tempr incididu...</p>
                    </div>
                </div>

                <div class="post__card">
                    <img src="/frontend/assets/img/blog-3.png" alt="" class="post__img">

                    <div class="post__content">
                        <p class="post__date text-xs">October 22, 2017</p>
                        <h3 class="post__title text-sm">SVG SPRITES VS ICON FONT</h3>
                        <p class="post__description text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do
                            eiusmod tempr incididu...</p>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== Contact ===============-->
        @include('frontend.sections.contact')
    </main>

    <!--=============== Style Switcher ===============-->
    @include('frontend.components.styleswitcher')

    <!--=============== JS and CDN ===============-->
    @include('frontend.components.js')
</body>

</html>
