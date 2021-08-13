

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('content/beranda/slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    <?php echo $__env->make('content/beranda/bidang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Grafik -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title wow fadeInUp">
                        <span class="title-bg">Grafik</span>
                        <h1>Rekapitulasi</h1>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Bar Chart -->
                <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.8s">
                    <div id="bar_chart"></div>
                </div>
                <!-- End Bar Chart -->

                <!-- Pie Chart -->
                <div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="0.6s">
                    <div id="pie_chart"></div>
                </div>
                <!-- End Pie Chart -->
            </div>
        </div>
    </section>
    <!--/ End Grafik -->

    <!-- Berita Terikini -->
    <section class="blogs-main section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="section-title">
                        <span class="title-bg">News</span>
                        <h1>Latest Blogs</h1>
                        <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum
                            aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin
                        <p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row blog-slider">
                        <div class="col-lg-4 col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="<?php echo e(assets_front); ?>images/blogs/blog1.jpg" alt="#">
                                </div>
                                <div class="blog-bottom">
                                    <div class="blog-inner">
                                        <h4><a href="blog-single.html">Recognizing the need is the primary</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac
                                            tincidunt tortor sedelon bond</p>
                                        <div class="meta">
                                            <span><i class="fa fa-bolt"></i><a href="#">Marketing</a></span>
                                            <span><i class="fa fa-calendar"></i>03 May, 2018</span>
                                            <span><i class="fa fa-eye"></i><a href="#">333k</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                        <div class="col-lg-4 col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="<?php echo e(assets_front); ?>images/blogs/blog2.jpg" alt="#">
                                </div>
                                <div class="blog-bottom">
                                    <div class="blog-inner">
                                        <h4><a href="blog-single.html">How to grow your business with blank table!</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac
                                            tincidunt tortor sedelon bond</p>
                                        <div class="meta">
                                            <span><i class="fa fa-bolt"></i><a href="#">Business</a></span>
                                            <span><i class="fa fa-calendar"></i>28 April, 2018</span>
                                            <span><i class="fa fa-eye"></i><a href="#">5m</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                        <div class="col-lg-4 col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="<?php echo e(assets_front); ?>images/blogs/blog3.jpg" alt="#">
                                </div>
                                <div class="blog-bottom">
                                    <div class="blog-inner">
                                        <h4><a href="blog-single.html">10 ways to improve your startup Business</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac
                                            tincidunt tortor sedelon bond</p>
                                        <div class="meta">
                                            <span><i class="fa fa-bolt"></i><a href="#">Brand</a></span>
                                            <span><i class="fa fa-calendar"></i>15 April, 2018</span>
                                            <span><i class="fa fa-eye"></i><a href="#">10m</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                        <div class="col-lg-4 col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="<?php echo e(assets_front); ?>images/blogs/blog4.jpg" alt="#">
                                </div>
                                <div class="blog-bottom">
                                    <div class="blog-inner">
                                        <h4><a href="blog-single.html">Recognizing the need is the primary</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac
                                            tincidunt tortor sedelon bond</p>
                                        <div class="meta">
                                            <span><i class="fa fa-bolt"></i><a href="#">Online</a></span>
                                            <span><i class="fa fa-calendar"></i>25 March, 2018</span>
                                            <span><i class="fa fa-eye"></i><a href="#">38k</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                        <div class="col-lg-4 col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="<?php echo e(assets_front); ?>images/blogs/blog5.jpg" alt="#">
                                </div>
                                <div class="blog-bottom">
                                    <div class="blog-inner">
                                        <h4><a href="blog-single.html">How to grow your business with blank table!</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac
                                            tincidunt tortor sedelon bond</p>
                                        <div class="meta">
                                            <span><i class="fa fa-bolt"></i><a href="#">Marketing</a></span>
                                            <span><i class="fa fa-calendar"></i>10 March, 2018</span>
                                            <span><i class="fa fa-eye"></i><a href="#">100k</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                        <div class="col-lg-4 col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="<?php echo e(assets_front); ?>images/blogs/blog6.jpg" alt="#">
                                </div>
                                <div class="blog-bottom">
                                    <div class="blog-inner">
                                        <h4><a href="blog-single.html">10 ways to improve your startup Business</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac
                                            tincidunt tortor sedelon bond</p>
                                        <div class="meta">
                                            <span><i class="fa fa-bolt"></i><a href="#">Website</a></span>
                                            <span><i class="fa fa-calendar"></i>21 February, 2018</span>
                                            <span><i class="fa fa-eye"></i><a href="#">320k</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Berita Terikini -->

    <!-- Services -->
    <section id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="section-title">
                        <span class="title-bg">Services</span>
                        <h1>What we provide</h1>
                        <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum
                            aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin
                        <p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="service-slider">
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-magic"></i>
                            <h2><a href="service-single.html">Consulting</a></h2>
                            <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-lightbulb-o"></i>
                            <h2><a href="service-single.html">Creative Idea</a></h2>
                            <p>Creative and erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat
                                classical Latin</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-wordpress"></i>
                            <h2><a href="service-single.html">Development</a></h2>
                            <p>just fine erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat classical
                                Latin</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-bullhorn "></i>
                            <h2><a href="service-single.html">Marketing</a></h2>
                            <p>Possible of erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat classical
                                Latin</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-magic"></i>
                            <h2><a href="service-single.html">Consulting</a></h2>
                            <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-lightbulb-o"></i>
                            <h2><a href="service-single.html">Creative Idea</a></h2>
                            <p>Creative and erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat
                                classical Latin</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-wordpress"></i>
                            <h2><a href="service-single.html">Development</a></h2>
                            <p>just fine erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat classical
                                Latin</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-bullhorn "></i>
                            <h2><a href="service-single.html">Marketing</a></h2>
                            <p>Possible of erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat classical
                                Latin</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-bullseye "></i>
                            <h2><a href="service-single.html">Direct Work</a></h2>
                            <p>Everything ien erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat Latin
                            </p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-cube"></i>
                            <h2><a href="service-single.html">Creative Plan</a></h2>
                            <p>Information sapien erat, non porttitor non, dignissim et enim Aenean ac enim feugiat
                                classical Latin</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Services -->

    <!-- Fun Facts -->
    <section id="fun-facts" class="fun-facts section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12 wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="text-content">
                        <div class="section-title">
                            <h1><span>Our achievements</span>With smooth animation numbering </h1>
                            <p>Pellentesque vitae gravida nulla. Maecenas molestie ligula quis urna viverra venenatis. Donec
                                at ex metus. Suspendisse ac est et magna viverra eleifend. Etiam varius auctor est eu
                                eleifend.</p>
                            <a href="contact.html" class="btn primary">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.6s">
                            <!-- Single Fact -->
                            <div class="single-fact">
                                <div class="icon"><i class="fa fa-clock-o"></i></div>
                                <div class="counter">
                                    <p><span class="count">35</span></p>
                                    <h4>years of success</h4>
                                </div>
                            </div>
                            <!--/ End Single Fact -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.8s">
                            <!-- Single Fact -->
                            <div class="single-fact">
                                <div class="icon"><i class="fa fa-bullseye"></i></div>
                                <div class="counter">
                                    <p><span class="count">88</span>K</p>
                                    <h4>Project Complete</h4>
                                </div>
                            </div>
                            <!--/ End Single Fact -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="1s">
                            <!-- Single Fact -->
                            <div class="single-fact">
                                <div class="icon"><i class="fa fa-dollar"></i></div>
                                <div class="counter">
                                    <p><span class="count">10</span>M</p>
                                    <h4>Total Earnings</h4>
                                </div>
                            </div>
                            <!--/ End Single Fact -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="1.2s">
                            <!-- Single Fact -->
                            <div class="single-fact">
                                <div class="icon"><i class="fa fa-trophy"></i></div>
                                <div class="counter">
                                    <p><span class="count">32</span></p>
                                    <h4>Winning Awards</h4>
                                </div>
                            </div>
                            <!--/ End Single Fact -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Fun Facts -->

    <!-- Why Choose Us -->
    <section id="why-choose" class="why-choose section">
        <div class="container-fluid fix">
            <div class="row fix">
                <div class="col-lg-6 col-md-6 col-12 fix">
                    <div class="why-video">
                        <!-- Video -->
                        <div class="video wow zoomIn">
                            <a href="https://www.youtube.com/watch?v=FZQPhrdKjow" class="btn video-popup mfp-fade"><i
                                    class="fa fa-play"></i></a>
                            <p>Watch this awesome video!</p>
                        </div>
                        <!--/ End Video -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 fix">
                    <!-- Choose Main -->
                    <div class="choose-main">
                        <div class="working-process">
                            <h2>Why Choose Us?</h2>
                            <p>We are Professional long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that it has
                                a more-or-less normal distribution of letters</p>
                        </div>
                        <div class="single-choose wow fadeInRight" data-wow-delay="0.2s">
                            <span class="number">01</span>
                            <h4><span>Planing</span>for every new project.</h4>
                        </div>
                        <div class="single-choose wow fadeInRight" data-wow-delay="0.4s">
                            <span class="number">03</span>
                            <h4><span>We Have</span>strong & creative team members.</h4>
                        </div>
                        <div class="single-choose wow fadeInRight" data-wow-delay="0.6s">
                            <span class="number">04</span>
                            <h4><span>24/7 Dedicated</span>Support ticket system.</h4>
                        </div>
                        <div class="single-choose wow fadeInRight" data-wow-delay="0.8s">
                            <span class="number">02</span>
                            <h4><span>We Build</span>Pixel perfect website theme.</h4>
                        </div>
                    </div>
                    <!--/ End Choose Main -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Why Choose Us -->

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="section-title">
                        <span class="title-bg">Projects</span>
                        <h1>Our Portfolio</h1>
                        <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum
                            aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin
                        <p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- portfolio Nav -->
                    <div class="portfolio-nav">
                        <ul class="tr-list list-inline" id="portfolio-menu">
                            <li data-filter="*" class="cbp-filter-item active">All Works<div class="cbp-filter-counter">
                                </div>
                            </li>
                            <li data-filter=".animation" class="cbp-filter-item">Animation<div class="cbp-filter-counter">
                                </div>
                            </li>
                            <li data-filter=".website" class="cbp-filter-item">Website<div class="cbp-filter-counter"></div>
                            </li>
                            <li data-filter=".package" class="cbp-filter-item">Package<div class="cbp-filter-counter"></div>
                            </li>
                            <li data-filter=".development" class="cbp-filter-item">Development<div
                                    class="cbp-filter-counter"></div>
                            </li>
                            <li data-filter=".printing" class="cbp-filter-item">Printing<div class="cbp-filter-counter">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--/ End portfolio Nav -->
                </div>
            </div>
            <div class="portfolio-inner">
                <div class="row">
                    <div class="col-12">
                        <div id="portfolio-item">
                            <!-- Single portfolio -->
                            <div class="cbp-item website animation printing">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo e(assets_front); ?>images/portfolio/p1.jpg" alt="#" />
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Creative Work</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim
                                        </p>
                                        <div class="button">
                                            <a class="primary" data-fancybox="gallery"
                                                href="<?php echo e(assets_front); ?>images/portfolio/p1.jpg"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->
                            <!-- Single portfolio -->
                            <div class="cbp-item website package development">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo e(assets_front); ?>images/portfolio/p2.jpg" alt="#" />
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Responsive Design</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim
                                        </p>
                                        <div class="button">
                                            <a href="https://www.youtube.com/watch?v=E-2ocmhF6TA"
                                                class="primary cbp-lightbox"><i class="fa fa-play"></i></a>
                                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->
                            <!-- Single portfolio -->
                            <div class="cbp-item website animation">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo e(assets_front); ?>images/portfolio/p3.jpg" alt="#" />
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Bootstrap Based</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim
                                        </p>
                                        <div class="button">
                                            <a class="primary" data-fancybox="gallery"
                                                href="<?php echo e(assets_front); ?>images/portfolio/p3.jpg"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->
                            <!-- Single portfolio -->
                            <div class="cbp-item development printing">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo e(assets_front); ?>images/portfolio/p4.jpg" alt="#" />
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Clean Design</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim
                                        </p>
                                        <div class="button">
                                            <a href="https://www.youtube.com/watch?v=E-2ocmhF6TA"
                                                class="primary cbp-lightbox"><i class="fa fa-play"></i></a>
                                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->
                            <!-- Single portfolio -->
                            <div class="cbp-item development package">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo e(assets_front); ?>images/portfolio/p5.jpg" alt="#" />
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Animation</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim
                                        </p>
                                        <div class="button">
                                            <a class="primary" data-fancybox="gallery"
                                                href="<?php echo e(assets_front); ?>images/portfolio/p5.jpg"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->
                            <!-- Single portfolio -->
                            <div class="cbp-item website animation printing">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo e(assets_front); ?>images/portfolio/p6.jpg" alt="#" />
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Parallax</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim
                                        </p>
                                        <div class="button">
                                            <a href="https://www.youtube.com/watch?v=E-2ocmhF6TA"
                                                class="primary cbp-lightbox"><i class="fa fa-play"></i></a>
                                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="button">
                            <a class="btn primary" href="portfolio-3-column.html">More Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End portfolio -->

    <!-- Consulting -->
    <section id="consulting" class="consulting section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="form-area">
                        <h2><i class="fa fa-phone"></i>Request A Call Back</h2>
                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim feugiat,
                            facilisis arcu vehicula</p>
                        <!-- Consult Form -->
                        <form class="form" action="#">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="nice-select form-control wide" tabindex="0"><span class="current">I
                                                would like to discuss about</span>
                                            <ul class="list">
                                                <li data-value="Starting a startup" class="option selected focus">Starting a
                                                    new business</li>
                                                <li data-value="1" class="option">Startup Consultation</li>
                                                <li data-value="2" class="option">Financial Consultation</li>
                                                <li data-value="3" class="option">Business Consultation</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="name" placeholder="Your Name" required="required" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" placeholder="Your Email" required="required" type="email">
                                    </div>
                                    <div class="form-group">
                                        <input name="phone" placeholder="Your Mobile" required="required" type="text">
                                    </div>
                                    <div class="form-group button">
                                        <button type="submit" class="btn primary">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--/ End Consult Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Consult Right -->
        <div class="consult-right wow fadeInRight" data-wow-delay="0.6s">
            <div class="text-content">
                <h2>We are Professional Business & Consulting Agency</h2>
                <p>We are Professional long established fact that a reader will be distracted by the readable content of a
                    page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters</p>
                <ul class="list">
                    <li><i class="fa fa-star"></i>Perfect guidance to build your start-up Business. </li>
                    <li><i class="fa fa-clock-o"></i>Save time, resource and money!</li>
                    <li><i class="fa fa-money"></i>Helping to increase the world economic growth!</li>
                    <li><i class="fa fa-clock-o"></i>We will help to improve your business!</li>
                    <li><i class="fa fa-star"></i>We provide startup, business & Financial consulting</li>
                </ul>
            </div>
        </div>
        <!--/ End Consult Right -->
    </section>
    <!--/ End Consulting -->

    <!-- Testimonials -->
    <section id="testimonials" class="testimonials section">
        <div class="container">
            <div class="col-12 wow fadeInUp">
                <div class="section-title">
                    <span class="title-bg">Review</span>
                    <h1>What Clients Says</h1>
                    <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum
                        aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin
                    <p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="testimonial-nav">
                        <div class="single-nav">
                            <img src="<?php echo e(assets_front); ?>images/client1.jpg" alt="#">
                        </div>
                        <div class="single-nav">
                            <img src="<?php echo e(assets_front); ?>images/client2.jpg" alt="#">
                        </div>
                        <div class="single-nav">
                            <img src="<?php echo e(assets_front); ?>images/client3.jpg" alt="#">
                        </div>
                        <div class="single-nav">
                            <img src="<?php echo e(assets_front); ?>images/client4.jpg" alt="#">
                        </div>
                        <div class="single-nav">
                            <img src="<?php echo e(assets_front); ?>images/client1.jpg" alt="#">
                        </div>
                        <div class="single-nav">
                            <img src="<?php echo e(assets_front); ?>images/client2.jpg" alt="#">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="testimonial-content">
                        <div class="single-content">
                            <p>condimentum augue volutpat, luctus tellus sit amet, feugiat ipsum. Proin sem augue, posuere
                                id turpis eget, semper feugiat mi. Cras semper risus at leo venenatis sagittis. In iaculis
                                eros ac eros maximus, ut bibendum tellus condimentum. Mauris massa nisl, accumsan sit amet
                                feugiat gravida, rhoncus at diam. Vestibulum ultricies eu nulla et maximus. Nullam eu nibh
                                turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <div class="testimonial-info">
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Lufia Rosan<span>Manager, Creative Ltd</span></h4>
                            </div>
                        </div>
                        <div class="single-content">
                            <p>condimentum augue volutpat, luctus tellus sit amet, feugiat ipsum. Proin sem augue, posuere
                                id turpis eget, semper feugiat mi. Cras semper risus at leo venenatis sagittis. In iaculis
                                eros ac eros maximus, ut bibendum tellus condimentum. Mauris massa nisl, accumsan sit amet
                                feugiat gravida, rhoncus at diam. Vestibulum ultricies eu nulla et maximus. Nullam eu nibh
                                turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <div class="testimonial-info">
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Josep Bamb<span>Founder, Graysoft LLC</span></h4>
                            </div>
                        </div>
                        <div class="single-content">
                            <p>condimentum augue volutpat, luctus tellus sit amet, feugiat ipsum. Proin sem augue, posuere
                                id turpis eget, semper feugiat mi. Cras semper risus at leo venenatis sagittis. In iaculis
                                eros ac eros maximus, ut bibendum tellus condimentum. Mauris massa nisl, accumsan sit amet
                                feugiat gravida, rhoncus at diam. Vestibulum ultricies eu nulla et maximus. Nullam eu nibh
                                turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <div class="testimonial-info">
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Trolia Ula<span>Ceo, Micromedia Ltd</span></h4>
                            </div>
                        </div>
                        <div class="single-content">
                            <p>condimentum augue volutpat, luctus tellus sit amet, feugiat ipsum. Proin sem augue, posuere
                                id turpis eget, semper feugiat mi. Cras semper risus at leo venenatis sagittis. In iaculis
                                eros ac eros maximus, ut bibendum tellus condimentum. Mauris massa nisl, accumsan sit amet
                                feugiat gravida, rhoncus at diam. Vestibulum ultricies eu nulla et maximus. Nullam eu nibh
                                turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <div class="testimonial-info">
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Siman Prodap<span>Developer, GoogleInc</span></h4>
                            </div>
                        </div>
                        <div class="single-content">
                            <p>condimentum augue volutpat, luctus tellus sit amet, feugiat ipsum. Proin sem augue, posuere
                                id turpis eget, semper feugiat mi. Cras semper risus at leo venenatis sagittis. In iaculis
                                eros ac eros maximus, ut bibendum tellus condimentum. Mauris massa nisl, accumsan sit amet
                                feugiat gravida, rhoncus at diam. Vestibulum ultricies eu nulla et maximus. Nullam eu nibh
                                turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <div class="testimonial-info">
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Esika Prua<span>Co-founder, Fashioncrown</span></h4>
                            </div>
                        </div>
                        <div class="single-content">
                            <p>condimentum augue volutpat, luctus tellus sit amet, feugiat ipsum. Proin sem augue, posuere
                                id turpis eget, semper feugiat mi. Cras semper risus at leo venenatis sagittis. In iaculis
                                eros ac eros maximus, ut bibendum tellus condimentum. Mauris massa nisl, accumsan sit amet
                                feugiat gravida, rhoncus at diam. Vestibulum ultricies eu nulla et maximus. Nullam eu nibh
                                turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <div class="testimonial-info">
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Lamana Drema<span>Freelancer</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Testimonials -->

    <!-- Start Team -->
    <section id="team" class="team section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-title">
                        <span class="title-bg">Team</span>
                        <h1>Our Leaders</h1>
                        <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum
                            aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin
                        <p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s" data-tilt>
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="t-head">
                            <img src="<?php echo e(assets_front); ?>images/t2.jpg" alt="#">
                            <div class="t-icon">
                                <a href="team-single.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <p>Founder</p>
                            <h2>Collis Molate</h2>
                            <ul class="t-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s" data-tilt>
                    <!-- Single Team -->
                    <div class="single-team">
                        <!-- Team Head -->
                        <div class="t-head">
                            <img src="<?php echo e(assets_front); ?>images/t1.jpg" alt="#">
                            <div class="t-icon">
                                <a href="team-single.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom">
                            <p>Co-Founder</p>
                            <h2>Domani Plavon</h2>
                            <ul class="t-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                        <!--/ End Team Bottom -->
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.8s" data-tilt>
                    <!-- Single Team -->
                    <div class="single-team">
                        <!-- Team Head -->
                        <div class="t-head">
                            <img src="<?php echo e(assets_front); ?>images/t3.jpg" alt="#">
                            <div class="t-icon">
                                <a href="team-single.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom">
                            <p>Developer</p>
                            <h2>John Mard</h2>
                            <ul class="t-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                        <!--/ End Team Bottom -->
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="1s" data-tilt>
                    <!-- Single Team -->
                    <div class="single-team">
                        <!-- Team Head -->
                        <div class="t-head">
                            <img src="<?php echo e(assets_front); ?>images/t4.jpg" alt="#">
                            <div class="t-icon">
                                <a href="team-single.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom">
                            <p>Marketer</p>
                            <h2>Amanal Frond</h2>
                            <ul class="t-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                        <!--/ End Team Bottom -->
                    </div>
                    <!-- End Single Team -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Team -->

    <!-- Call To Action -->
    <section class="call-to-action section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 wow fadeInUp">
                    <div class="call-to-main">
                        <h2>We have 35+ Years of experiences for creating creative website project.</h2>
                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim feugiat,
                            facilisis arcu vehicula, consequat sem. Cras et vulputate nisi, ac dignissim mi. Etiam laoreet
                        </p>
                        <a href="contact.html" class="btn">Buy This Theme</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call To Action -->

    <!-- Partners -->
    <section id="partners" class="partners section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="section-title">
                        <span class="title-bg">Clients</span>
                        <h1>Our Partners</h1>
                        <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum
                            aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin
                        <p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="partners-inner">
                        <div class="row no-gutters">
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="<?php echo e(assets_front); ?>images/partner-1.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="<?php echo e(assets_front); ?>images/partner-2.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="<?php echo e(assets_front); ?>images/partner-3.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="<?php echo e(assets_front); ?>images/partner-4.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="<?php echo e(assets_front); ?>images/partner-5.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="<?php echo e(assets_front); ?>images/partner-6.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="<?php echo e(assets_front); ?>images/partner-7.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="<?php echo e(assets_front); ?>images/partner-8.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="<?php echo e(assets_front); ?>images/partner-5.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="<?php echo e(assets_front); ?>images/partner-6.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="<?php echo e(assets_front); ?>images/partner-7.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="<?php echo e(assets_front); ?>images/partner-3.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Partners -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js_plugin'); ?>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
    <script>
        Highcharts.chart('bar_chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Monthly Average Rainfall'
            },
            subtitle: {
                text: 'Source: WorldClimate.com'
            },
            credits: {
                enabled: false
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Rainfall (mm)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Tokyo',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

            }, {
                name: 'New York',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

            }, {
                name: 'London',
                data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

            }, {
                name: 'Berlin',
                data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

            }]
        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
    <script>
        Highcharts.chart('pie_chart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Browser market shares in January, 2018'
            },
            credits: {
                enabled: false
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Chrome',
                    y: 61.41,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Internet Explorer',
                    y: 11.84
                }, {
                    name: 'Firefox',
                    y: 10.85
                }, {
                    name: 'Edge',
                    y: 4.67
                }, {
                    name: 'Safari',
                    y: 4.18
                }, {
                    name: 'Other',
                    y: 7.05
                }]
            }]
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\CODE IGNITER 4\epikir_new\app\Modules\Landing\Views/content/beranda/home.blade.php ENDPATH**/ ?>