<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="TvInACard" sizes="106x85" href="{{ asset('img/logo.png')}}">
    <link rel="icon" type="image/png" sizes="106x85" href="{{ asset('img/logo.png')}}">
    <link rel="icon" type="image/png" sizes="106x85" href="{{ asset('img/logo.png')}}">
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
                        <a class="link link--active" href="/">
                            Home
                        </a>
                    </li>
                    <li class="list__item">
                        <a class="link" href="#aboutus">
                            About us
                        </a>
                    </li>
                    <li class="list__item">
                        <a class="link" href="blogs">
                            Blogs
                        </a>
                    </li>
                    <li class="list__item">
                        <a class="link" href="contact">
                            Contact us
                        </a>
                    </li>

                    <li class="list__item">
                        <a class="link" href="#order">
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
                                Our work
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
        <section class="video-motion video-motion--out js-video-motion u-lg-mb-2">
            <div ref="screen" class="video-motion__inner" data-motion-type="paneOut">
                <picture>
                    <source srcset="https://www.sqcircle.com/img/frame.webp" type="image/webp">
                    <img class="video-motion__frame u-landscape" src="img/frame.png" alt="frame" />
                </picture>
                <picture>
                    <source srcset="https://www.sqcircle.com/img/frame-sm.webp" type="image/webp">
                    <img class="video-motion__frame u-portrait" src="img/frame-sm.png" alt="frame" />
                </picture>
                <video ref="video" class="video-motion__video" loop muted playsinline autoplay>
                    <source ref="source" data-portrait="https://www.sqcircle.com/video/about-hero-sm.mp4" src="https://www.sqcircle.com/video/about-hero.mp4" type="video/mp4" />
                </video>
            </div>
            <div ref="controls" class="video-motion__controls">
                <button ref="mute" class="button video-motion__mute"></button>
                <div ref="scrollIcon" class="video-motion__scroll-down"></div>
            </div>
        </section>
        <section class="section" id ="aboutus">
            <div class="section__inner">
                <div class="named-content js-animation-toggle-point">
                    <div class="named-content__inner" style="max-width: none !important;">
                        <h2 class="heading" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="100" style="color:#1e81b0 ">
                            Launch. <em>Entice.</em> Educate.<em> Sell!</em>
                        </h2>
                        <p class="paragraph" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">

                        <p style="color:#1e81b0">Experience:</p>For nearly a decade,<b> TV in a Card the inventor of video brochure</b> has led a paradigm shift in direct marketing by blending the attention-grabbing power of printed brochures with the audiovisual impact of HD video into the Video Brochure.
                            That’s also why 90% of our global clients become repeated  customers.
                        <p><em>Expertise:</em></p>With TV in a Card’s targeted video brochures, those important messages are delivered to customers to stimulate the decision-making process immediately.
                            Our team of experts help a business look at its very best – to make that first impression last. This is why our client list already includes many of the leading international brands representing the most successful companies in the world.
                        <br/>
                        <p style="color:#1e81b0">Quality:</p>Whether it’s in the form of a<b> video brochure, video business card, video book, video portfolio or video point of sale display</b>, the quality and reliability of TV in a Card is evident. We use only new high definition full-viewing-angle screens and Grade A electronics and materials; our printing is top notch offset; and our products are hand assembled and inspected two separate times – at our factory and at our local USA offices – for quality assurance.
                        <br/>
                        <p><em>Service:</em></p>We firmly believe you won’t find a better-quality product or better customer service at a comparable price anywhere.From conception to completion, we work together with you to guarantee your satisfaction.
                        <b> TV in a Card will boost your SALES AND ATTENTION.</b>

                        </p>

                        <h2 class="heading" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250" style=" color:#1e81b0 ">
                            Designing the <em>future</em>
                        </h2>
                        <p class="paragraph" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                            In 2009, the founder of TV in a Card, Ltd. had the brilliant idea of placing <b>powered LCD screens</b>into brochures.
                            <b>The innovation of TV in a Card brand</b> of “Targeted Video Brochures” has found its way into the hands of the top leading companies of ever industry … and their prospects and clients.
                            <br/><b>Imagine you can </b>sell your customized clothing brand and send a video of how it got designed to your costumer.
                            <br/><b> Imagine you can </b>give your customers the information they need exactly when they need it.
                            <br/><b> Imagine you can </b>be in all the places you want to be - all at the same time.
                            <br/> With TV in a Card, you no longer have to imagine.
                        </p>

                    </div>
                </div>
                <div class="features">
                    <div class="features__item feature">
                        <h3 class="feature__heading" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250" style="color: #1e81b0">
                            We Make
                        </h3>
                        <ul class="feature__list" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                            <li> Your message unforgettable to your audience </li>
                            <li> Your message get undivided attention </li>
                            <li> Your audience will live an immersive experience </li>
                            <li> Your customer will receive a VIP gift </li>
                            <li> You will Stand out from the crowd for more recognition </li>

                        </ul>
                    </div>
                    <div class="features__item feature">
                            <h3 class="feature__heading" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250" style="color: #1e81b0">
                            <em>First</em>
                            </h3>
                            <ul class="feature__list" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                                <li> EDUCATION </li>
                                <li> VIDEO BUSINESS CARDS </li>
                                <li> SPORTS </li>
                                <li> Real Estate </li>
                                <li> Automotive </li>
                                <li> Entertainment & LifeStyle </li>
                                <li> Technology & Telecom </li>
                                <li> Medical & PHARMACEUTICAL </li>
                                <li> Banking & Finance </li>
                                <li> Media Companies </li>
                                <li> Clothing Brands </li>
                            </ul>
                        </div>
                    <div class="features__item feature">
                        <h3 class="feature__heading" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250" style="color: #1e81b0">
                            Impressions...
                        </h3>
                        <ul class="feature__list" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                            <li> COSTUMER OR EMPLOYEE FEELING SPECIAL </li>
                            <li> LESS INTENSIVE NEGOTIATIONS </li>
                            <li> EFFECTS COSTUMER DECISION INTO BUYING YOUR VISION </li>
                            <li> LONG LASTING IMPRESSION </li>
                        </ul>
                    </div>
                    <div class="features__item feature">
                        <h3 class="feature__heading" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250" style="color: #f87329">
                            Last
                        </h3>
                        <ul class="feature__list" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                            <li> WE WILL BRAND YOU IN THE BEST WAY POSSIBLE </li>
                            <li> WE WILL CREATE CREATIVE STRATEGY TO MAKE OUR VIDEO BROCHURE THE MOST EFFECTIVE SOLUTION FOR YOUR BRAND  </li>
                            <li> WE WILL GROW LOYALTY TO YOUR BRAND OR COMPANY </li>
                            <li> WE WILL BOOST YOUR LAUNCHING PRODUCT WITH OUR BEST SOLUTION TECHNOLOGY </li>
                            <li> FIRST TO OFFER HIGH DEFINITION DIRECT MAIL </li>
                        </ul>
                    </div>
                 </div>
                <div class="named-content__inner" style="max-width: none !important;">
                <h2 class="heading" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250" style=" color:#1e81b0 ">
                        WHAT <em>WE OFFER </em>
                    </h2>
                    <ul class="feature__list" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                        <li> 24/7 COSTUMER SERVICES </li>
                        <li> FREE PRIZES AFTER EVERY PURCHASE</li>
                        <li> OUR TEAM EXPERTS ARE ONLINE FOR ANY CONSULTING </li>
                        <li> Rewarding points for friends and family on future purchases </li>
                        <li> Advise on the technology platforms that best support your initiative </li>
                        <li> Assist in developing a creative strategy to maximise your outcomes </li>
                        <li> Build your Brand awareness and retention </li>
                        <li> Boosting your sales </li>
                        <li> WE DONATE 1$ FOR EVERY VIDEO BROCHURE BOUGHT TO HUNGRY CHILDREN</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="cta-list" >
            <div class="cta-list__item" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <div class="cta-list__column" id="exnprod">
                    <div id ="rotated" style="visibility: hidden;">0</div>
                    <img class="cta-list__illustration" src="{{ asset('img/exp.jpg')}}" alt="Exemple 1" />
                </div>
                <div class="cta-list__column">
                    <h2 class="cta-list__heading">Products & Experience </h2>
                    <p class="cta-list__text">
                        People are bombarded with advertising. Most companies are doing the same thing running interrupted video ads in front of the content they want.
                       <br/> <b>86% of consumers</b> suffer from banner blindness and 40% of people can’t tell you why they clicked on an ad.
                        <br/>This is a waste of <b>your time, money & efforts.</b>
                        <br/>Isn’t it time you change your strategy?
                        <br/><b>52% of marketers </b>across the globe report that video is their highest ROI marketing tool.
                        <br/>With <b>80-90% of direct mail</b> reportedly getting opened daily, it’s easy to see why video-in-print is proven to deliver <b>marketing success</b>.</li>
                    </p>
                    <a class="button button--primary" onclick="rotateExper(this)"><span>Explore</span></a>
                </div>
            </div>
            <div class="cta-list__item" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <div class="cta-list__column">
                    <img class="cta-list__illustration" src="{{ asset('img/exp.jpg')}}" alt="Exemple 2" />
                </div>
                <div class="cta-list__column">
                    <h2 class="cta-list__heading">Branding & Identity </h2>
                    <p class="cta-list__text">
                        TvinaCard is all about effective communication.
                        <br/>Our uniquely portable video tools make sure that your message is seen, heard and spread by your target audience.
                        <br/>We help support and guide the world’s leading brands because they trust us. And we invented it.
                    </p>

                </div>
            </div>
        </section>
        <section class="project-carousel">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" style="background-image: none">
                <div class="project-carousel__row">
                    <a class="project-carousel__slide" href="https://www.google.com/">
                        <picture>
                            <source class="project-carousel__image" srcset="img/adidas.png" type="image/png">
                            <img class="project-carousel__image" src="img/adidas.png" alt="1up" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide" href="https://www.google.com/">
                        <picture>
                            <source class="project-carousel__image" srcset="img/bentley.png" type="image/png">
                            <img class="project-carousel__image" src="img/bentley.png" alt="1up" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide" href="https://www.google.com/">
                        <picture>
                            <source class="project-carousel__image" srcset="img/blackberry.png" type="image/webp">
                            <img class="project-carousel__image" src="img/blackberry.png" alt="1up" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide" href="https://www.google.com/">
                        <picture>
                            <source class="project-carousel__image" srcset="img/burberry.png" type="image/webp">
                            <img class="project-carousel__image" src="img/burberry.png" alt="1up" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide" href="https://www.google.com/">
                        <picture>
                            <source class="project-carousel__image" srcset="img/calvin.png" type="image/webp">
                            <img class="project-carousel__image" src="img/calvin.png" alt="1up" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide" href="https://www.google.com/">
                        <picture>
                            <source class="project-carousel__image" srcset="img/liverpool.png" type="image/webp">
                            <img class="project-carousel__image" src="img/liverpool.png" alt="1up" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/mastercard.png" type="image/png">
                            <img class="project-carousel__image" src="img/mastercard.png" alt="Dugout" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/dewalt.png" type="image/png">
                            <img class="project-carousel__image" src="img/dewalt.png" alt="Dugout" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/xerox.png" type="image/png">
                            <img class="project-carousel__image" src="img/xerox.png" alt="Dugout" />
                        </picture>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <div class="project-carousel__row">
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/jackdaniel.png" type="image/png">
                            <img class="project-carousel__image" src="img/jackdaniel.png" alt="Cox International" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/canon.png" type="image/png">
                            <img class="project-carousel__image" src="img/canon.png" alt="Cox International" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/ciroc.png" type="image/png">
                            <img class="project-carousel__image" src="img/ciroc.png" alt="Cox International" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/infosys.png" type="image/png">
                            <img class="project-carousel__image" src="img/infosys.png" alt="Cox International" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/disney.png" type="image/png">
                            <img class="project-carousel__image" src="img/disney.png" alt="Cox International" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/Kaspesky.png" type="image/png">
                            <img class="project-carousel__image" src="img/Kaspesky.png" alt="Cox International" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/manunited.png" type="image/png">
                            <img class="project-carousel__image" src="img/manunited.png" alt="Cox International" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/oracle.png" type="image/png">
                            <img class="project-carousel__image" src="img/oracle.png" alt="Cox International" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/sony.png" type="image/png">
                            <img class="project-carousel__image" src="img/sony.png" alt="Dugout" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/youtube.png" type="image/png">
                            <img class="project-carousel__image" src="img/youtube.png" alt="Dugout" />
                        </picture>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <div class="project-carousel__row">
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/emaar.png" type="image/png">
                            <img class="project-carousel__image" src="img/emaar.png" alt="Dugout" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/JPMorgan.png" type="image/png">
                            <img class="project-carousel__image" src="img/JPMorgan.png" alt="Cox International" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/etihadairlines.png" type="image/png">
                            <img class="project-carousel__image" src="img/etihadairlines.png" alt="Dugout" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/experian.png" type="image/png">
                            <img class="project-carousel__image" src="img/experian.png" alt="Dugout" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/ferrari.png" type="image/png">
                            <img class="project-carousel__image" src="img/ferrari.png" alt="Dugout" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/financialtimes.png" type="image/png">
                            <img class="project-carousel__image" src="img/financialtimes.png" alt="Dugout" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/givenchy.png" type="image/png">
                            <img class="project-carousel__image" src="img/givenchy.png" alt="Dugout" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/lenovo.png" type="image/png">
                            <img class="project-carousel__image" src="img/lenovo.png" alt="Dugout" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/samsung.png" type="image/png">
                            <img class="project-carousel__image" src="img/samsung.png" alt="Dugout" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/riyadhpublic.png" type="image/png">
                            <img class="project-carousel__image" src="img/riyadhpublic.png" alt="Dugout" />
                        </picture>
                    </a>
                    <a class="project-carousel__slide">
                        <picture>
                            <source class="project-carousel__image" srcset="img/skynews.png" type="image/png">
                            <img class="project-carousel__image" src="img/skynews.png" alt="Dugout" />
                        </picture>
                    </a>

                </div>
            </div>
        </section>
        <section class="section">
            <div class="section__inner">
                <div class="section__background section__background--7">
                    <picture>
                        <source srcset="https://www.sqcircle.com/img/shapes/circle.webp" type="image/webp">
                        <img src="img/shapes/circle.png" alt="circle" />
                    </picture>
                    <picture>
                        <source srcset="https://www.sqcircle.com/img/shapes/square.webp" type="image/webp">
                        <img src="img/shapes/square.png" alt="square" />
                    </picture>
                </div>
                <div class="partners u-lg-mt-14" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="250">
                    <h2 class="partners__heading u-lg-mb-0"> Our Clients </h2>
                    <ul class="partners__list" style="max-width: none !important;">
                        <li class="col-md-3"><picture>
                                <source srcset="{{ asset('img/redbull.png')}}" type="image/webp">
                                <img src="{{ asset('img/redbull.png')}}" alt="redbull" />
                                <picture></li>
                        <li class="col-md-3"><picture>
                                <source srcset="{{ asset('img/sony.png')}}" type="image/webp">
                                <img src="{{ asset('img/sony.png')}}" alt="sony" />
                                <picture></li>
                        <li class="col-md-3"><picture>
                                <source srcset="{{ asset('img/visa.png')}}" type="image/webp">
                                <img src="{{ asset('img/visa.png')}}" alt="visa" />
                                <picture></li>
                        <li class="col-md-3"><picture>
                                <source srcset="{{ asset('img/unilever.png')}}" type="image/webp">
                                <img src="{{ asset('img/unilever.png')}}" alt="sony" />
                                <picture></li>
                        <li class="col-md-3"><picture>
                                <source srcset="{{ asset('img/bentley.png')}}" type="image/webp">
                                <img src="{{ asset('img/bentley.png')}}" alt="bentley" />
                                <picture></li>
                        <li><picture>
                                <source srcset="{{ asset('img/pfizer.png')}}" type="image/webp">
                                <img src="{{ asset('img/pfizer.png')}}" alt="pfizer" />
                                <picture></li>
                        <li><picture>
                                <source srcset="{{ asset('img/twitter.png')}}" type="image/webp">
                                <img src="{{ asset('img/twitterpng')}}" alt="twitter" />
                                <picture></li>
                        <li><picture>
                                <source srcset="{{ asset('img/calvin.png')}}" type="image/webp">
                                <img src="{{ asset('img/calvin.png')}}" alt="calvin" />
                                <picture></li>
                        <li><picture>
                                <source srcset="{{ asset('img/mancity.png')}}" type="image/webp">
                                <img src="{{ asset('img/mancity.png')}}" alt="mancity" />
                                <picture></li>
                        <li><picture>
                                <source srcset="{{ asset('img/mercedes.png')}}" type="image/webp">
                                <img src="{{ asset('img/mercedes.png')}}" alt="mercedes" />
                                <picture></li>
                        <li><picture>
                                <source srcset="{{ asset('img/givenchy.png')}}" type="image/webp">
                                <img src="{{ asset('img/givenchy.png')}}" alt="givenchy" />
                                <picture></li>
                        <li><picture>
                                <source srcset="{{ asset('img/ibm.png')}}" type="image/webp">
                                <img src="{{ asset('img/ibm.png')}}" alt="ibm" />
                                <picture></li>
                        <li><picture>
                                <source srcset="{{ asset('img/emaar.png')}}" type="image/webp">
                                <img src="{{ asset('img/emaar.png')}}" alt="emaar" />
                                <picture></li>
                        <li><picture>
                                <source srcset="{{ asset('img/fitnessfirst.png')}}" type="image/webp">
                                <img src="{{ asset('img/fitnessfirst.png')}}" alt="fitnessfirst" />
                                <picture></li>
                        <li><picture>
                                <source srcset="{{ asset('img/InterContinental.png')}}" type="image/webp">
                                <img src="{{ asset('img/InterContinental.png')}}" alt="nterContinental" />
                                <picture></li>
                        <li><picture>
                                <source srcset="{{ asset('img/JPMorgan.png')}}" type="image/webp">
                                <img src="{{ asset('img/JPMorgan.png')}}" alt="JPMorgan" />
                                <picture></li>
                    </ul>
                </div>
                <div class="named-content u-lg-mb-0">
                    <div class="named-content__name" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                        Testimonies
                    </div>
                    <div class="named-content__inner named-content__inner--wider">
                        <h2 class="heading" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                            What our clients say
                        </h2>
                        <div class="testimonials">
                            <div class="testimonials__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                                <p class="testimonials__quote">
                                    “A superb product, which has landed a recent campaign to clients in a professional, innovative, yet fun way. The service we received from start to finish has been great and I would highly recommend TV in a Card.”
                                </p>
                                <span class="testimonials__author">- Princess Cruises</span>
                            </div>
                            <div class="testimonials__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                                <p class="testimonials__quote">
                                    “TV in a card is a great innovative product and we were very happy with the final result”
                                </p>
                                <span class="testimonials__author">- Calvin Klein</span>
                            </div>
                            <div class="testimonials__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                                <p class="testimonials__quote">
                                    TV in a Card were really helpful and the end product was fantastic – we got some amazing feedback from our staff and clients.”
                                </p>
                                <span class="testimonials__author">- Experian</span>
                            </div>
                            <div class="testimonials__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                                <p class="testimonials__quote">
                                    “TV in a card are professional, caring and hardworking. They provided us with great ideas for the design work and fantastic looking video cards which delighted our clients.”
                                </p>
                                <span class="testimonials__author">- nacked eye</span>
                            </div>
                            <div class="testimonials__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                                <p class="testimonials__quote">
                                    “Thanks very much for delivering the items on time. They look great and they’re going straight out to our dealers now to give to customers. I’m sure they’ll go down a treat.”
                                </p>
                                <span class="testimonials__author">- Bentley </span>
                            </div>
                            <div class="testimonials__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                                <p class="testimonials__quote">
                                    “We have used the video cards for a number of high profile events here. They create a great impact among our guests and are an ideal way for us to convey complicated information easily in a manner that ensures our message gets understood and passed around. It’s a great concept and has been highly appreciated by our top clients and customers!”
                                </p>
                                <span class="testimonials__author">- Xerox </span>
                            </div>
                            <div class="testimonials__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                                <p class="testimonials__quote">
                                    “TV in a Card provided us with an innovative and eye-catching way to communicate the launch of a new campaign to a range of stakeholders, including media, football clubs and key influencers. Their solution allowed us to bring our campaign ambassadors to life for a wider target audience and even delivered some pre-launch social media buzz. They totally understood the need to deliver under pressure and to tight timelines and we would not hesitate to work with the team again.”
                                </p>
                                <span class="testimonials__author">- M&CSAATCHI </span>
                            </div>
                            <div class="testimonials__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                                <p class="testimonials__quote">
                                    “I wanted my guests to retain a memory of our event and our brand that would be innovative, informative and memorable; the solution provided by TV in a Card answered all those criteria.”
                                </p>
                                <span class="testimonials__author">- What Car? </span>
                            </div>
                            <div class="testimonials__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                                <p class="testimonials__quote">
                                    “TV in a card is great innovative product. Fast turn around, very high quality results and superb market intelligence and strategic thinking from the team. The best value for money marketing product by a long, long way.”
                                </p>
                                <span class="testimonials__author">- Ricoh </span>
                            </div>
                            <div class="testimonials__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                                <p class="testimonials__quote">
                                    “In a globally competitive market it’s vital to have evocative marketing materials that steal the attention of your audience – TV in a Card does just that and for us, it’s an integral part of our strategy for winning new business”
                                </p>
                                <span class="testimonials__author">- Middlesex University </span>
                            </div>
                            <div class="testimonials__item" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-delay="250">
                                <p class="testimonials__quote">
                                    “Apart from the exemplary customer service and sales approach, I found the offering from TV in a card to be highly innovative and effective with our retailers. The use of TV in POS introduces a myriad of opportunities to connect with the shopper and retailer alike. I look forward to future POS solutions from TV in a card.
                                </p>
                                <span class="testimonials__author">- Siemens </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="section__inner">
                    <div id="contactFormWrapper" class="2">
                        <div style="text-align: center;">
                            <h2 id = "order" class="heading" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" style="color:#2b5797 ">
                            PRICE <em>CALCULATOR</em>
                        </h2>
                        </div>
                        <div>
                            <form  method="POST" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" action="contact.html">
                            <div id="ff">
                                    <div class="sections">
                                            <div class="section">
                                                <label>Sceen Size</label><br>
                                                <select>
                                                    <option>Select</option>
                                                    <option>3inch </option>
                                                    </select><br>
                                                <label>Quantity</label><br>
                                                <select>
                                                    <option>Select</option>
                                                    <option>50</option>
                                                    <option>100</option>
                                                    <option>200</option>
                                                    <option>300</option>
                                                    <option>400</option>
                                                    <option>500</option>
                                                    <option>1000</option>
                                                </select><br>
                                                <br><br>
                                                    <div class="btnn">
                                                        <span>
                                                        <label>Touch Screen +6£</label><br>
                                                        <input type="checkbox" class="switch">
                                                        </span>
                                                    </div>
                                            </div>
                                            <div class="section dsec">
                                                <label>Cover</label><br>
                                                    <select>
                                                        <option>Select</option>
                                                        <option>Hard Cover+2£</option>

                                                    </select><br>
                                                <label>Memory Storage</label><br>
                                                    <select>
                                                        <option>Select</option>
                                                        <option>512MB</option>
                                                        <option>1GB+1£</option>
                                                        <option>2GB+2£</option>
                                                        <option>3GB+3£</option>
                                                        <option>4GB+4£</option>
                                                    </select><br>
                                                <br><br>

                                                    <div class="btnn">
                                                        <span>
                                                        <label class="t5">Buiness Card Slip+1£</label><br>
                                                        <input type="checkbox" class="switch s2">
                                                        </span>
                                                </div>
                                            </div>
                                    </div><br>

                                            <div class="total"><span>Total</span></div>
                                            <input type="button" value="NEXT">

                            </div>


                          </form>
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
