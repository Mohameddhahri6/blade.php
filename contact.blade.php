<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="TvInACard" sizes="180x180" href="{{ asset('img/logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo.png')}}">
    <link rel="manifest" href="{{asset('site.webmanifest.txt')}}">
    <link rel="mask-icon" href="{{asset('img/logo.png')}}" color="#1e81b0">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#2b5797">
    <title>TV in a Card - About </title>
    <link href="{{ asset('css/app-v=1.0.css')}}" rel="stylesheet">
    <link href="{{ asset('css/dropdown.css')}}" rel="stylesheet">
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-162868929-1');
    </script>
</head>
<body>

<div class="js-scroll-wrapper">
    <header class="header     header--white">
        <div class="header__inner">
            <a class="header__logo"></a>
            <nav class="navigation js-menu">
                <button ref="openTrigger"    class="navigation__toggle button"></button>
                <ul class="navigation__bar list list--horizontal">
                    <li class="list__item">
                        <a class="link link" href="/">
                            Home
                        </a>
                    </li>
                    <li class="list__item">
                        <a class="link " href="/#aboutus">
                            About us
                        </a>
                    </li>
                   
                    <li class="list__item">
                        <a class="link" href="blogs">
                            Blogs
                        </a>
                    </li>
                    <li class="list__item">
                        <a class="link link--active" href="contact">
                            Contact us
                        </a>
                    </li>
                    <li class="list__item">
                        <a class="link" href="/#order">
                            Order Now
                        </a>
                    </li>
                </ul>
                <div ref="menuPane" class="navigation__menu menu-panel" style="display: none;">
                    <div class="menu-panel__background">
                        <picture>
                            <source srcset="{{ asset('img/tv.png')}}" type="image/webp">
                            <img src="{{ asset('img/tv.png')}}" alt="circle" />
                        </picture>
                        <picture>
                            <source srcset="{{ asset('img/tv.png')}}" type="image/webp">
                            <img src="{{ asset('img/tv.png')}}" alt="square" />
                        </picture>
                    </div>
                    <div class="menu-panel__header">
                        <a class="menu-panel__logo"></a>
                        <button ref="closeTrigger" class="menu-panel__toggle button"></button>
                    </div>
                    <ul class="menu-panel__main list list--emphasis">
                        <li class="list__item">
                            <a class="link link--active" href="">
                                Home
                            </a>
                        </li>
                        <li class="list__item">
                            <a class="link" href="">
                                Blogs
                            </a>
                        </li>
                        <li class="list__item">
                            <a class="link" href="">
                                About us
                            </a>
                        </li>
                        <li class="list__item">
                            <a class="link" href="">
                                Contact us
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>

    <section class="section">
            <div class="section__inner">
                <div class="named-content js-animation-toggle-point">
                        <div class="named-content__inner" style="max-width: none !important;">
                            <h2 class="heading" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250" style="color:#1e81b0 ">
                                Launch. <em>Entice.</em> Educate.<em> Sell!</em>
                            </h2>
                        </div>
                </div>
            </div>
    </section>
    </main>
    <footer class="footer">
        <div class="footer__inner">
            <div class="footer__social">
                <h2 class="footer__social-heading">THE WORLD’S #1 SUPPLIER Of VIDEO BROCHURES</h2>
                <ul class="footer__social-list list list--horizontal">
                    <li class="list__item">
                        <a class="link" href="https://www.youtube.com/user/TVBrochures" rel=”noreferrer” target="_blank">
                            <div class="icon">
                                <span class="icon__label">Follow us on YouTube</span>
                                <i class="icon__image icon__image--youtube"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<!--Start OF TIDIO Live Chat Script-->
<script type='text/javascript'>
    document.tidioChatCode = "y5fnsbgiq7hmgd93zyzqugoteoaahxgm";
    (function() {
        function asyncLoad() {
            var tidioScript = document.createElement("script");
            tidioScript.type = "text/javascript";
            tidioScript.async = true;
            tidioScript.src = "//code.tidio.co/y5fnsbgiq7hmgd93zyzqugoteoaahxgm.js";
            document.body.appendChild(tidioScript);
        }
        if (window.attachEvent) {
            window.attachEvent("onload", asyncLoad);
        } else {
            window.addEventListener("load", asyncLoad, false);
        }
    })();
</script>
<!--END OF TIDIO Live Chat Script-->
<script data-cfasync="false" src="{{ asset('js/email-decode.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.0.1/dist/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/app.js')}}"></script>
<script>
    function rotateExper(element) {
        lzx = $("#rotated").text();
        console.log(lzx);
        if (lzx == 1)
        {

            gsap.to("#exnprod",  {rotationY: 0, y: 0, duration: 1});
            $(this).delay(1000).queue(function() {
                $("#exnprod").delay(1000).html('<div id ="rotated" style="visibility: hidden;">0</div><img class="cta-list__illustration" src="{{ asset("img/exp.jpg")}}" alt="Exemple 1" />');
                $(this).dequeue();
            });
        }

        else
        {
            gsap.to("#exnprod",  {rotationY: 360, y: 0, duration: 1});
            $(this).delay(1000).queue(function() {
                $("#exnprod").delay(1000).html('<div id ="rotated"  style="visibility: hidden;">1</div><video ref="video" class="video-motion__video loop muted playsinline autoplay><source ref="source" data-portrait="https://www.sqcircle.com/video/about-hero-sm.mp4" src="https://www.sqcircle.com/video/about-hero.mp4" type="video/mp4" /></video>');
                $(this).dequeue();
            });
        }
    }

</script>
</body>
</html>
