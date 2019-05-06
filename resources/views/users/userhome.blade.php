@extends('layouts.default')
@section('content')
    <br>
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            @foreach($home_events as $home_event)
            <div class="carousel-inner">
                <div class="carousel-item active" style="width: auto; margin: 5.5% 15% 0% 15%;">
                    <img src="{{asset($home_event->image_bg)}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <button type="submit" class="btn confer-btn" >Readmore<i class="zmdi zmdi-long-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            @endforeach
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <section class="contact-our-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <h4>Contact us</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-sm-3">
                    <div class="contact-information mb-100">
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Address:</p>
                            <h6>184 Main Collins Street</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Phone:</p>
                            <h6>(226) 446 9371</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Email:</p>
                            <h6>ticketwent@gmail.com</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Website:</p>
                            <h6>www.ticketwent.com</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8">
                    <!-- Contact Form -->
                    <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                        <div class="contact_form">
                            <form action="#" method="post" id="main_contact_form">
                                <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name2" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Your Number">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Your Message *"></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn">Send Message <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Footer Logo -->

                            <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain.</p>

                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Contact</h5>

                            <!-- Contact Area -->
                            <div class="footer-contact-info">
                                <p><i class="zmdi zmdi-map"></i> 184 Main Collins Street</p>
                                <p><i class="zmdi zmdi-phone"></i> (226) 446 9371</p>
                                <p><i class="zmdi zmdi-email"></i> confer@gmail.com</p>
                                <p><i class="zmdi zmdi-globe"></i> www.confer.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Workshops</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#">OSHA Compliance</a></li>
                                <li><a href="#">Microsoft Excel Basics</a></li>
                                <li><a href="#">Forum Speaker Series</a></li>
                                <li><a href="#">Tedx Moscow Conference</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Gallery</h5>

                            <!-- Footer Gallery -->
                            <div class="footer-gallery">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="img/bg-img/21.jpg" class="single-gallery-item"><img src="img/bg-img/21.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/22.jpg" class="single-gallery-item"><img src="img/bg-img/22.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/23.jpg" class="single-gallery-item"><img src="img/bg-img/23.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/24.jpg" class="single-gallery-item"><img src="img/bg-img/24.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/25.jpg" class="single-gallery-item"><img src="img/bg-img/25.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/26.jpg" class="single-gallery-item"><img src="img/bg-img/26.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div class="col-12 col-md-6">
                        <div class="footer-menu">
                            <ul class="nav">
                                <li><a href="#"><i class="zmdi zmdi-circle"></i> Terms of Service</a></li>
                                <li><a href="#"><i class="zmdi zmdi-circle"></i> Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>
@endsection
