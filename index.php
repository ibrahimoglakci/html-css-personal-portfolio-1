<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== LINE ICONS ===============-->
    <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Home | TeamSoft Devs</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <!-- nav -->
        <nav class="nav container padd-15">
            <!-- nav logo -->
            <a href="#" class="nav-logo">
                <img src="assets/img/logo/tsd-dark.png" width="60px;" height="auto;" alt="Team Software Development">
            </a>
            <!-- nav menu -->
            <div class="nav-menu" id="nav-menu">
                <!-- nav list -->
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#experience" class="nav-link">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pricing" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#login" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <i class="fas fa-globe"></i>

                    </li>
                </ul>
                <!-- nav close -->
                <div class="nav-close" id="nav-close">
                    <i class="lni lni-close"></i>
                </div>

            </div>
            <!-- nav btn -->
            <div class="nav-btns">
                <!-- theme change btn -->
                <i class="lni lni-pallet change-theme" id="theme-button"></i>
                <!-- toggle btn -->
                <div class="nav-toggle" id="nav-toggle">
                    <i class="lni lni-grid-alt"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main-content">
        <!--<audio id="dinoaudio" src="assets/music/dino.mp3"></audio>-->
        <!--=============== HOME ===============-->
        <section class="home" id="home">
            <div class="container">
                <!-- intro -->
                <div class="intro">
                    <!-- avatar image -->
                    <img src="assets/img/avatar-1.svg" alt="Bolby">
                    <!-- info -->
                    <h1>TeamSoft Devs</h1>
                    <span>We're <span class="info-text">Developer and Designer</span></span>
                    <!-- social icons -->
                    <ul class="social-icons">
                        <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://wa.me/message/5WCVNALUY7B7E1" target="_blank"><i
                                    class="fab fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="lni lni-behance-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-dribbble"></i></a></li>
                        <li><a href="#"><i class="lni lni-pinterest"></i></a></li>

                    </ul>
                    <!-- button -->
                    <div>
                        <a href="#" class="btn btn-default">Hire me</a>
                    </div>
                    <!-- scroll down mouse wheel -->
                    <div class="scroll-down">
                        <a href="#" class="mouse-wrapper">
                            <span>Scroll Down</span>
                            <span class="mouse">
                                <span class="wheel"></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--=============== About ===============-->
        <section class="about section" id="about">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">About Us</h2>
                <div class="row">
                    <div class="about-img padd-15">
                        <!-- avatar img -->
                        <img src="assets/img/avatar-2.svg" alt="">
                    </div>
                    <div class="about-content padd-15">
                        <div class="rounded">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <!-- about text -->
                                    <p>We're TeamSoft Devs from Turkey. We have high experience in website design and
                                        back-end coding and customization.</p>
                                    <div>
                                        <a href="#" class="btn btn-default">Download CV</a>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <!-- skill item -->
                                        <div class="skill-item">
                                            <h4>Development</h4>
                                            <div class="progress">
                                                <div class="progress-in"
                                                    style="width: 100%; background: rgb(255,209,92);"></div>
                                                <div class="skill-percent">100%</div>
                                            </div>
                                        </div>
                                        <!-- skill item -->
                                        <div class="skill-item">
                                            <h4>Graphic Design</h4>
                                            <div class="progress">
                                                <div class="progress-in"
                                                    style="width: 80%; background: rgb(255,76,96);"></div>
                                                <div class="skill-percent">80%</div>
                                            </div>
                                        </div>
                                        <!-- skill item -->
                                        <div class="skill-item">
                                            <h4>UI/UX design</h4>
                                            <div class="progress">
                                                <div class="progress-in"
                                                    style="width: 50%; background: rgb(108,108,229);"></div>
                                                <div class="skill-percent">50%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- fact item -->
                    <div class="fact-item padd-15">
                        <i class="lni lni-thumbs-up"></i>
                        <div class="details">
                            <h3>3</h3>
                            <p>Project done</p>
                        </div>
                    </div>
                    <!-- fact item -->
                    <div class="fact-item padd-15">
                        <i class="lni lni-coffee-cup"></i>
                        <div class="details">
                            <h3>6798</h3>
                            <p>Cup of coffee</p>
                        </div>
                    </div>
                    <!-- fact item -->
                    <div class="fact-item padd-15">
                        <i class="lni lni-users"></i>
                        <div class="details">
                            <h3>428</h3>
                            <p>Satisfied clients</p>
                        </div>
                    </div>
                    <!-- fact item -->
                    <div class="fact-item padd-15">
                        <i class="lni lni-cup"></i>
                        <div class="details">
                            <h3>28</h3>
                            <p>Nominiees winner</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============== Services ===============-->
        <section class="services section">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Services</h2>
                <div class="row">
                    <!-- service item -->
                    <div class="service-item padd-15">
                        <div class="service-item-inner" style="background: rgb(108,108,229);">
                            <img src="assets/img/service-1.svg" alt="">
                            <h3>UI/UX design</h3>
                            <p>Our customer's happy to choose us </p>
                        </div>
                    </div>
                    <!-- service item -->
                    <div class="service-item padd-15">
                        <div class="service-item-inner" style="background: rgb(249,215,76);">
                            <img src="assets/img/service-2.svg" alt="">
                            <h3>Web Development</h3>
                            <p>We are making creative and responsive web design.</p>
                        </div>
                    </div>
                    <!-- service item -->
                    <div class="service-item padd-15">
                        <div class="service-item-inner" style="background: rgb(249,123,139);">
                            <img src="assets/img/service-3.svg" alt="">
                            <h3>Graphic Design</h3>
                            <p>We are making logos,graphic design and anythink you find it .</p>
                        </div>
                    </div>
                </div>
                <div class="text padd-15">
                    <p>Looking for a custom job? <a href="#">Click here</a> to contact me! 👋</p>
                </div>
            </div>
        </section>
        <!--=============== Experience ===============-->
        <section class="section" id="experience">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Experience</h2>
                <div class="row">
                    <!-- education -->
                    <div class="education padd-15">
                        <div class="row">
                            <div class="timeline-box">
                                <div class="timeline">
                                    <!-- timeline item -->
                                    <div class="timeline-item">
                                        <i class="lni lni-graduation timeline-icon"></i>
                                        <h3 class="timeline-date">
                                            <i class="lni lni-calendar"></i> 2019 - present
                                        </h3>
                                        <h3 class="timeline-title">Academic Degree</h3>
                                        <p class="timeline-text">Akdeniz University Software Development</p>
                                    </div>
                                    <!-- timeline item -->
                                    <div class="timeline-item">
                                        <i class="lni lni-graduation timeline-icon"></i> 2014-2018
                                        <h3 class="timeline-date">
                                            <i class="lni lni-calendar"></i>
                                        </h3>
                                        <h3 class="timeline-title">Manavgat High School</h3>
                                        <p class="timeline-text">




                                        </p>
                                    </div>
                                    <!-- timeline item -->
                                    <div class="timeline-item">
                                        <i class="lni lni-graduation timeline-icon"></i>
                                        <h3 class="timeline-date">
                                            <i class="lni lni-calendar"></i>
                                        </h3>
                                        <h3 class="timeline-title">Google Digital Workshop </h3>

                                        <p> E-commerce</p>
                                        <p class="timeline-text"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- experience -->
                    <div class="experience padd-15">
                        <div class="row">
                            <div class="timeline-box">
                                <div class="timeline">
                                    <!-- timeline item -->
                                    <div class="timeline-item">
                                        <i class="lni lni-briefcase timeline-icon"></i>
                                        <h3 class="timeline-date">
                                            <i class="lni lni-calendar"></i> 2019 - present
                                        </h3>
                                        <h3 class="timeline-title">Web Designer</h3>
                                        <p class="timeline-text">Creative and responsive web design
                                            <!-- timeline item -->
                                        <div class="timeline-item">
                                            <i class="lni lni-briefcase timeline-icon"></i>
                                            <h3 class="timeline-date">
                                                <i class="lni lni-calendar"></i> 2017 - 2013
                                            </h3>
                                            <h3 class="timeline-title">Front-End Developer</h3>
                                            <p class="timeline-text"></p>
                                        </div>
                                        <!-- timeline item -->
                                        <div class="timeline-item">
                                            <i class="lni lni-briefcase timeline-icon"></i>
                                            <h3 class="timeline-date">
                                                <i class="lni lni-calendar"></i> 2013 - 2009
                                            </h3>
                                            <h3 class="timeline-title">Back-End Developer</h3>
                                            <p class="timeline-text"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--=============== Pricing ===============-->
        <section class="section pricing" id="pricing">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Pricing Plans</h2>
                <div class="row">
                    <!-- prices -->
                    <div class="prices">
                        <div class="price-item">
                            <img src="assets/img/price-1.svg" alt="">
                            <h3 class="plan">Basic</h3>
                            <p>A Simple option but powerful to manage your business</p>
                            <p>Email support</p>
                            <h3 class="price"><em>$</em>9<span>Month</span></h3>
                            <a href="#" class="btn btn-default">Get Started</a>
                        </div>
                    </div>
                    <!-- prices -->
                    <div class="prices">
                        <div class="price-item best">
                            <span class="badge">Recommended</span>
                            <img src="assets/img/price-2.svg" alt="">
                            <h3 class="plan">Premium</h3>
                            <p>Unlimited product including app integration and more features</p>
                            <p>Email support</p>
                            <h3 class="price"><em>$</em>49<span>Month</span></h3>
                            <a href="#" class="btn btn-default">Get Started</a>
                        </div>
                    </div>
                    <!-- prices -->
                    <div class="prices">
                        <div class="price-item">
                            <img src="assets/img/price-3.svg" alt="">
                            <h3 class="plan">Basic</h3>
                            <p>A wise option for large companies and individuals</p>
                            <p>24/7 support</p>
                            <h3 class="price"><em>$</em>99<span>Month</span></h3>
                            <a href="#" class="btn btn-default">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============== Portfolio ===============-->
        <section class="portfolio section" id="portfolio">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Portfolio</h2>
                <div class="row">
                    <div class="portfolio-filter padd-15">
                        <div class="portfolio-filter-inner">
                            <button type="button" class="active" data-filter="all">Everything</button>
                            <button type="button" data-filter="art">Art</button>
                            <button type="button" data-filter="creative">Creative</button>
                            <button type="button" data-filter="design">Design</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- portfolio item -->
                    <div class="portfolio-item padd-15" data-category="art">
                        <div class="portfolio-item-inner">
                            <div class="portfolio-item-thumbnail">
                                <img src="assets/img/1.svg" alt="">
                                <div class="mask"></div>
                            </div>
                            <span class="term">Art , design</span>
                            <h3 class="portfolio-item-title">Project Management Illustration</h3>
                            <span class="more-button">&hellip;</span>
                        </div>
                    </div>
                    <!-- portfolio item -->
                    <div class="portfolio-item padd-15" data-category="creative">
                        <div class="portfolio-item-inner">
                            <div class="portfolio-item-thumbnail">
                                <img src="assets/img/2.svg" alt="">
                                <div class="mask"></div>
                            </div>
                            <span class="term">Creative</span>
                            <h3 class="portfolio-item-title">Onboaeding Motivation</h3>
                            <span class="more-button">&hellip;</span>
                        </div>
                    </div>
                    <!-- portfolio item -->
                    <div class="portfolio-item padd-15" data-category="design">
                        <div class="portfolio-item-inner">
                            <div class="portfolio-item-thumbnail">
                                <img src="assets/img/3.svg" alt="">
                                <div class="mask"></div>
                            </div>
                            <span class="term">Art , design</span>
                            <h3 class="portfolio-item-title">iMac Mockup Design</h3>
                            <span class="more-button">&hellip;</span>
                        </div>
                    </div>
                    <!-- portfolio item -->
                    <div class="portfolio-item padd-15" data-category="creative">
                        <div class="portfolio-item-inner">
                            <div class="portfolio-item-thumbnail">
                                <img src="assets/img/4.svg" alt="">
                                <div class="mask"></div>
                            </div>
                            <span class="term">Creative</span>
                            <h3 class="portfolio-item-title">Game Store App Concept</h3>
                            <span class="more-button">&hellip;</span>
                        </div>
                    </div>
                    <!-- portfolio item -->
                    <div class="portfolio-item padd-15" data-category="art">
                        <div class="portfolio-item-inner">
                            <div class="portfolio-item-thumbnail">
                                <img src="assets/img/5.svg" alt="">
                                <div class="mask"></div>
                            </div>
                            <span class="term">Creative</span>
                            <h3 class="portfolio-item-title">Guest App Walkthrough Screens</h3>
                            <span class="more-button">&hellip;</span>
                        </div>
                    </div>
                    <!-- portfolio item -->
                    <div class="portfolio-item padd-15" data-category="creative">
                        <div class="portfolio-item-inner">
                            <div class="portfolio-item-thumbnail">
                                <img src="assets/img/6.svg" alt="">
                                <div class="mask"></div>
                            </div>
                            <span class="term">Design</span>
                            <h3 class="portfolio-item-title">Delivery App Wireframe</h3>
                            <span class="more-button">&hellip;</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============== Testimonial ===============-->
        <section class="section">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Our Teammates</h2>
                <!-- testimonial wrapper -->
                <div class="swiper testimonial-wrapper">
                    <div class="swiper-wrapper">
                        <!-- testimonial item -->
                        <div class="testimonial-item swiper-slide">
                            <div class="thumb">
                                <img src="assets/img/avatar-3.svg" alt="">
                            </div>
                            <h3>İbrahim Halil Oğlakcı</h3>
                            <span class="subtitle">Software Engineer & Owner</span>
                            <div class="comment">I enjoy working with the theme and learn so much. You guys make the
                                process fun and interesting. Good luck! 👍</div>
                        </div>
                        <!-- testimonial item -->
                        <div class="testimonial-item swiper-slide">
                            <div class="thumb">
                                <img src="assets/img/avatar-1.svg" alt="">
                            </div>
                            <h3>Mecit Ersen Yılmaz</h3>
                            <span class="subtitle">Software Engineer & Graphic Designer</span>
                            <div class="comment">I enjoy working with the theme and learn so much. You guys make the
                                process fun and interesting. Good luck! 🔥</div>
                        </div>
                        <div class="testimonial-item swiper-slide">
                            <div class="thumb">
                                <img src="assets/img/avatar-1.svg" alt="">
                            </div>
                            <h3>Halil Haydar Ay</h3>
                            <span class="subtitle">Software Engineer & Graphic Designer</span>
                            <div class="comment">I enjoy working with the theme and learn so much. You guys make the
                                process fun and interesting. Good luck! 🔥</div>
                        </div>
                        <div class="testimonial-item swiper-slide">
                            <div class="thumb">
                                <img src="assets/img/avatar-1.svg" alt="">
                            </div>
                            <h3>Özgür Barış Çiçek</h3>
                            <span class="subtitle">Software Engineer & Graphic Designer</span>
                            <div class="comment">I enjoy working with the theme and learn so much. You guys make the
                                process fun and interesting. Good luck! 🔥</div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!--=============== Blog ===============-->
        <section class="section">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Latest Posts</h2>
                <div class="row">
                    <!-- blog item -->
                    <div class="blog-item padd-15">
                        <div class="inner">
                            <div class="thumb">
                                <a href="#"><span class="category">Reviews</span></a>
                                <a href="#"><img src="assets/img/1.svg" alt=""></a>
                            </div>
                            <div class="details">
                                <h3 class="title"><a href="#">5 Best App Development Tool for Your Projects</a></h3>
                                <ul class="meta">
                                    <li>09 February, 2021</li>
                                    <li>Bolby</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- blog item -->
                    <div class="blog-item padd-15">
                        <div class="inner">
                            <div class="thumb">
                                <a href="#"><span class="category">Tutorial</span></a>
                                <a href="#"><img src="assets/img/2.svg" alt=""></a>
                            </div>
                            <div class="details">
                                <h3 class="title"><a href="#">Common Misconceptions About Payment</a></h3>
                                <ul class="meta">
                                    <li>07 February, 2021</li>
                                    <li>Bolby</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- blog item -->
                    <div class="blog-item padd-15">
                        <div class="inner">
                            <div class="thumb">
                                <a href="#"><span class="category">Business</span></a>
                                <a href="#"><img src="assets/img/1.svg" alt=""></a>
                            </div>
                            <div class="details">
                                <h3 class="title"><a href="#">3 Things to know about startup business</a></h3>
                                <ul class="meta">
                                    <li>09 February, 2021</li>
                                    <li>Bolby</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============== Contact ===============-->
        <section class="contact section" id="contact">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title padd-15">Contact us</h2>
                <div class="row">
                    <!-- contact box -->
                    <div class="contact-box padd-15">
                        <div class="contact-data">
                            <!-- contact information -->
                            <div class="contact-information">
                                <h3 class="contact-subtitle">Call us for instant support</h3>
                                <span class="contact-description">
                                    <i class="lni lni-phone contact-icon"></i>
                                    <a href="tel:+905380293758">+905380293758</a>
                                </span>
                            </div>
                            <!-- contact information -->
                            <div class="contact-information">
                                <h3 class="contact-subtitle">Write us by mail</h3>
                                <span class="contact-description">
                                    <i class="lni lni-user contact-icon"></i>
                                    info@teamsoftdevs.com
                                </span>
                            </div>

                        </div>
                    </div>
                    <!-- contact form -->
                    <form action="" class="contact-form padd-15">
                        <div class="contact-inputs">
                            <!-- contact content -->
                            <div class="contact-content">
                                <input type="email" class="contact-input">
                                <label for="" class="contact-label">Email</label>
                                <span></span>
                            </div>
                            <!-- contact content -->
                            <div class="contact-content">
                                <input type="text" class="contact-input">
                                <label for="" class="contact-label">Subject</label>
                                <span></span>
                            </div>
                            <!-- contact content -->
                            <div class="contact-content contact-area">
                                <textarea name="" id="" cols="30" rows="10" class="contact-input"></textarea>
                                <label for="" class="contact-label">Message</label>
                                <span></span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-default">Send Message</a>
                    </form>
                </div>
            </div>
        </section>
        <!--=============== Footer ===============-->
        <footer class="footer">
            <div class="container">
                <div class="footer-text padd-15">
                    <p> Copyright © 2022 <a href="javascript:void(0)">TSD-Portfolio3</a>. Tasarlayan ve hazırlayan <span
                            class="fa fa-heart text-danger"></span> <a href="javascript:void(0)"> TeamSoft Devs </a>
                        Bütün hakları saklıdır.</p>
                </div>
            </div>
        </footer>
    </main>
    <!--=============== Theme Customize ===============-->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p>Manage your font size, color, and background</p>
            <!-- font size -->
            <div class="font-size">
                <h3>Font Size</h3>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2"></span>
                        <span class="font-size-3 active"></span>
                        <span class="font-size-4"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>
            <!-- color -->
            <div class="color">
                <h3>Color</h3>
                <div class="choose-color">
                    <span class="color-1"></span>
                    <span class="color-2"></span>
                    <span class="color-3 active"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>
            <!-- background -->
            <div class="background">
                <h3>background</h3>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5 for="bg-2">Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Dark</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=============== SWIPER JS ===============-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!--=============== JS ===============-->
    <script src="assets/js/main.js"></script>

 



</body>

</html>
