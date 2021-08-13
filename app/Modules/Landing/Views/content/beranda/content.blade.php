@extends('template/master')

@section('content')
    <!-- Slider Content-->
    @include('content/beranda/slider')

    <!-- Divider-->
    {{-- <div class="pricing" style="padding: 15px">
    </div> --}}

    <!-- Bidang Content-->
    @include('content/beranda/bidang')

    <!-- Grafik Content-->
    @include('content/beranda/grafik')

    <!-- Berita Content-->
    @include('content/beranda/berita')

    <!-- Info Content-->
    @include('content/beranda/info')

    <!-- Galeri Content -->
    @include('content/beranda/galeri')

    {{-- <!-- Services -->
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
                            <img src="{{ assets_front }}images/client1.jpg" alt="#">
                        </div>
                        <div class="single-nav">
                            <img src="{{ assets_front }}images/client2.jpg" alt="#">
                        </div>
                        <div class="single-nav">
                            <img src="{{ assets_front }}images/client3.jpg" alt="#">
                        </div>
                        <div class="single-nav">
                            <img src="{{ assets_front }}images/client4.jpg" alt="#">
                        </div>
                        <div class="single-nav">
                            <img src="{{ assets_front }}images/client1.jpg" alt="#">
                        </div>
                        <div class="single-nav">
                            <img src="{{ assets_front }}images/client2.jpg" alt="#">
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
                            <img src="{{ assets_front }}images/t2.jpg" alt="#">
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
                            <img src="{{ assets_front }}images/t1.jpg" alt="#">
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
                            <img src="{{ assets_front }}images/t3.jpg" alt="#">
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
                            <img src="{{ assets_front }}images/t4.jpg" alt="#">
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
                                    <a href="#" target="_blank"><img src="{{ assets_front }}images/partner-1.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="{{ assets_front }}images/partner-2.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="{{ assets_front }}images/partner-3.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="{{ assets_front }}images/partner-4.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="{{ assets_front }}images/partner-5.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="{{ assets_front }}images/partner-6.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="{{ assets_front }}images/partner-7.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="{{ assets_front }}images/partner-8.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="{{ assets_front }}images/partner-5.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="{{ assets_front }}images/partner-6.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="{{ assets_front }}images/partner-7.png"
                                            alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="{{ assets_front }}images/partner-3.png"
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
    <!--/ End Partners --> --}}
@endsection
