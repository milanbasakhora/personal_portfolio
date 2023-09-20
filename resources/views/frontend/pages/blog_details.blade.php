<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website</title>

    <!--=============== CSS and CDN ===============-->
    @include('frontend.components.css')
</head>

<body>
    <!--=============== Style Switch ===============-->
    <input type="checkbox" id="day-night">

    <!--=============== Header ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <div class="nav__menu" id="nav__menu">
                <ul class="nav__list">
                    <li>
                        <a href="/" class="nav__link">Home</a>
                    </li>

                    <li>
                        <a href="#contact" class="nav__link">Contact</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav__close">
                    <i class="ri-close-fill"></i>
                </div>
            </div>
            <div class="nav__toggle" id="nav__toggle">
                <i class="ri-menu-fill"></i>
            </div>

            <!--=============== Style Switch ===============-->
            @include('frontend.components.styleswitcher')
        </nav>
    </header>

    <!--=============== Blog Details ===============-->
    <div class="blog__header"></div>

    <section class="container">
        <div class="blog__details">
            <a href="/" class="back__to-home text-xs"><i class="ri-arrow-left-line"></i> Back</a>

            <h3 class="post__details-title text-lg">HOW I ORGANIZE MY WORK WITH CODE</h3>
            <p class="post__details-date text-sm">April, 20, 2017</p>
            <p class="post__details text-lg">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                id est
                laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                dolores
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                amet,
                consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
                aliquam
                quaerat voluptatem.
            </p>

            <p class="post__details text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui:</p>

            <figure>
                <img src="assets/img/post-detail.jpg" alt="">
                <figcaption class="text-sm">This is how I organize my HTML, CSS and PHP files</figcaption>
            </figure>

            <p class="post__details text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>

            <div class="post__social-share">
                <span class="post__share text-lg">Share this post:</span>

                <div class="post__social-links">
                    <a href="" class="post__share-link"><i class="ri-linkedin-box-fill"></i></a>
                    <a href="" class="post__share-link"><i class="ri-facebook-box-fill"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!--=============== Contact ===============-->
    @include('frontend.sections.contact')

    <!--=============== Style Switcher ===============-->
    @include('frontend.components.styleswitcher')

    <!--=============== JS and CDN ===============-->
    @include('frontend.components.js')
</body>

</html>
