@extends('layouts.main')
@section('content')
<div id="wrapper">
    <div class="hero-wrap fl-wrap full-height">
        <div class="media-container">

            <div class="video-container">
                <video playsinline autoplay loop muted class="bgvid">
                    <source src="video/1.mp4" type="video/mp4">
                </video>
            </div>
            <!--
                                Vimeo code

                                    <div class="video-holder">
                                        <div  class="background-vimeo" data-vim="34741214"> </div>
                                    </div>
                            <!--
                                Youtube code

                                 <div  class="background-youtube-wrapper" data-vid="Hg5iNVSp2z8" data-mv="1"> </div> -->
            <div class="overlay"></div>
        </div>
        <div class="hero-title-wrap fl-wrap">
            <div class="container">
                <div class="hero-title">
                    <h4>Top Services and Premium Cuisine </h4>
                    <h2>Welcome to Turvec Food Republic</h2>
                    <a href="menu.html" class="hero_btn">Check out our Menu <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <!--hero_promo-wrap-->
        <div class="hero_promo-wrap bot-element2">
            <div class="hero_promo-button">
                <a href="https://vimeo.com/10322316" class="image-popup"><i class="fas fa-play"></i></a>
            </div>
            <div class="hero_promo-title">
                <h4>View Promo Video</h4>
            </div>
        </div>
        <!--hero_promo-wrap end-->
        <!--hero-social-->
        <div class="hero-social">
            <ul>
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
            </ul>
        </div>
        <!--hero-social end-->
        <!-- hero-bottom-container -->
        <div class="hero-bottom-container">
            <div class="container">
                <div class="scroll-down-wrap">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                    <span>Scroll down to Discover</span>
                </div>
                <a href="#sec2" class="sd_btn custom-scroll-link"><i class="fal fa-chevron-double-down"></i></a>
            </div>
        </div>
        <!-- hero-bottom-container -->
        <div class="hero-dec_top"></div>
        <div class="hero-dec_bottom"></div>
        <div class="brush-dec"></div>
    </div>
    <!-- hero-wrap  end -->
    <!-- content  -->
    <div class="content">
        <section class="hidden-section big-padding" data-scrollax-parent="true" id="sec2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title text-align_left">
                            <h4>Our Story</h4>
                            <h2>Few words about us</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="text-block ">
                            <p>
                               " Our food is best described as a continental journey through the flavours of the world. We take pride in providing meals prepared with only the freshest, most natural ingredients.
                                Let us host you!
                            </p>
                            <p> Situated in the heart of Uniport on a serene cul-de-sac, with breath-taking views of Turvec event park we offer great food and friendly attentive service in a laid back environment."</p>
                            <a href="{{route('about')}}" class="btn fl-btn">More About Us?<i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-collge-wrap fl-wrap">
                            <div class="main-iamge">
                                <img src="images/all/3.jpg" alt="">
                            </div>
                            <div class="images-collage-item" style="width:65%" data-position-left="68"
                                data-position-top="-15" data-zindex="2" data-opacity="1.0"><img src="images/all/8.jpg"
                                    alt=""></div>
                            <div class="images-collage-item col_par" style="width:120px" data-position-left="-23"
                                data-position-top="-17" data-zindex="9"
                                data-scrollax="properties: { translateY: '150px' }"><img src="images/cube.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-dec sec-dec_top"></div>
                <div class="wave-bg" data-scrollax="properties: { translateY: '-150px' }"></div>
            </div>
        </section>
        <!--  section end  -->
        <!-- section   -->
        <section class="column-section no-padding hidden-section" data-scrollax-parent="true">
            <div class="column-wrap-bg right-wrap">
                <div class="bg par-elem " data-bg="images/bg/10.jpg" data-scrollax="properties: { translateY: '30%' }">
                </div>
                <div class="overlay"></div>
                <div class="column-wrap-bg-text">
                    <h3>Event Booking</h3>
                    <h4>Have an Event?</h4>
                    <a href="{{route('contact')}}" class="btn  ajax">Contact Us <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="column-section-wrap left-column-section dark-bg">
                <div class="container">
                    <div class="column-text">
                        <div class="section-title">
                            <h4>Book a table</h4>
                            <h2>Upcoming Events</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <!-- events-carousel-wrap -->
                        <div class="events-carousel-wrap fl-wrap">
                            <div class="events-carousel fl-wrap">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach ($events as $event)
                                        <!-- swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="event-carousel-item">
                                                <h4>{{$event->name}}</h4>
                                                <span class="event-date">{{$event->date}}</span>
                                                <p>{{$event->description}}
                                                </p>
                                            </div>
                                        </div>
                                        <!-- swiper-slide end -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="ec-button ec-button-prev"><i class="fas fa-caret-left"></i></div>
                            <div class="ec-button ec-button-next"><i class="fas fa-caret-right"></i></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="bold-separator"><span></span></div>
                        <!-- events-carousel-wrap end -->
                        <a href="#" class="hero_btn no-align show-rb">Book Table Now<i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="illustration_bg">
                    <div class="bg" data-bg="images/bg/dec/6.png"></div>
                </div>
            </div>
        </section>
        <!-- section end -->
        <!--  section    -->
        <section data-scrollax-parent="true">
            <div class="container">
                <div class="section-title">
                    <h4>Why people choose us</h4>
                    <h2>Prepare for first-class service</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
                <div class="cards-wrap fl-wrap">
                    <div class="row">
                        <!--card item -->
                        <div class="col-md-4">
                            <div class="content-inner fl-wrap">
                                <div class="content-front">
                                    <div class="cf-inner">
                                        <div class="bg " data-bg="images/services/1.jpg"></div>
                                        <div class="overlay"></div>
                                        <div class="inner">
                                            <h2>Quality in Tasty Meals and Delicases</h2>
                                            <h4>Quality is the heart</h4>
                                        </div>
                                        <div class="serv-num">01.</div>
                                    </div>
                                </div>
                                <div class="content-back">
                                    <div class="cf-inner">
                                        <div class="inner">
                                            <div class="dec-icon">
                                                <i class="fal fa-utensils-alt"></i>
                                            </div>
                                            <p>"Not all delicious foods but best quality foods to the satisfaction of all"
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--card item end -->
                        <!--card item -->
                        <div class="col-md-4">
                            <div class="content-inner fl-wrap">
                                <div class="content-front">
                                    <div class="cf-inner">
                                        <div class="bg " data-bg="images/services/2.jpg"></div>
                                        <div class="overlay"></div>
                                        <div class="inner">
                                            <h2>Extraordinary Drinks</h2>
                                            <h4>Start drinking better</h4>
                                        </div>
                                        <div class="serv-num">02.</div>
                                    </div>
                                </div>
                                <div class="content-back">
                                    <div class="cf-inner">
                                        <div class="inner">
                                            <div class="dec-icon">
                                                <i class="fal fa-carrot"></i>
                                            </div>
                                            <p>“Anything but ordinary drinks, each offering surprises and delights with familiarity and serendipity in equal measure”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--card item end -->
                        <!--card item -->
                        <div class="col-md-4">
                            <div class="content-inner fl-wrap">
                                <div class="content-front">
                                    <div class="cf-inner">
                                        <div class="bg " data-bg="images/services/3.jpg"></div>
                                        <div class="overlay"></div>
                                        <div class="inner">
                                            <h2>Exclusive Dinning & Relaxation Spot</h2>
                                            <h4>Mega Comfort</h4>
                                        </div>
                                        <div class="serv-num">03.</div>
                                    </div>
                                </div>
                                <div class="content-back">
                                    <div class="cf-inner">
                                        <div class="inner">
                                            <div class="dec-icon">
                                                <i class="fal fa-fish"></i>
                                            </div>
                                            <p>"Relax and go with the flow, good food and a warm kitchen are what makes a house a home"</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--card item end -->
                    </div>
                    <div class="section-dec sec-dec_top"></div>
                    <div class="section-dec sec-dec_bottom"></div>
                </div>
            <a href="{{route('menu')}}" class="btn fl-btn border-btn">Explore The Food Menu <i
                        class="fal fa-long-arrow-right"></i></a>
                <div class="images-collage-item col_par" style="width:120px" data-position-left="83"
                    data-position-top="87" data-zindex="1" data-scrollax="properties: { translateY: '150px' }">
                    <img src="images/cube.png" alt=""></div>
            </div>
            <div class="section-bg">
                <div class="bg" data-bg="images/bg/dec/section-bg.png"></div>
            </div>
        </section>
        <!--  section end  -->
        <!--  section  -->
        <section class="parallax-section dark-bg hidden-section" data-scrollax-parent="true">
            <div class="brush-dec2"></div>
            <div class="brush-dec"></div>
            <div class="bg par-elem bg_tabs" data-bg="images/bg/4.jpg"
                data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="cd-tabs-layer" data-frame="10">
                <div class="tabs-layer"></div>
            </div>
            <div class="overlay op7"></div>
            <div class="container">
                <div class="section-title">
                    <h4>Special menu offers.</h4>
                    <h2>Enjoy Restaurants Specialties</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
                <!--  hero-menu_header  end-->
                <div class="hero-menu tabs-act fl-wrap">
                    <div class="row">
                        <!--  hero-menu_header-->
                        <div class="col-md-3">
                            <div class="hero-menu_header fl-wrap">
                                <ul class="tabs-menu     no-list-style change_bg">
                                    <li class="current"><a href="#tab-1"
                                            data-bgtab="images/bg/4.jpg"><span>01.</span>Main dishes</a></li>
                                    <li><a href="#tab-2" data-bgtab="images/bg/7.jpg"><span>03.</span>Desserts</a></li>
                                    <li><a href="#tab-3" data-bgtab="images/bg/9.jpg"><span>05.</span>Drinks</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  hero-menu_header  end-->
                        <!--  hero-menu_content   -->
                        <div class="col-md-9">
                            <div class="hero-menu_content fl-wrap">
                                <div class="tabs-container">
                                    <div class="tab">
                                        <!--tab -->
                                        <div id="tab-1" class="tab-content first-tab">
                                            @foreach ($main_dishes as $dish)
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>01.</span>{{$dish->title}}</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">${{$dish->price}}</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>{{$dish->description}}</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                            @endforeach
                                        </div>
                                        <!--tab end -->
                                        <!--tab 2-->
                                        <div class="tab">
                                            <div id="tab-2" class="tab-content">
                                                @foreach ($pizzas as $dish)
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>01.</span>{{$dish->title}}</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">${{$dish->price}}</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>{{$dish->description}}</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                            @endforeach
                                            </div>
                                        </div>
                                        <!--tab end -->
                                        <!--tab 3-->
                                        <div class="tab">
                                            <div id="tab-3" class="tab-content">
                                                @foreach ($desserts as $dish)
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>01.</span>{{$dish->title}}</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">${{$dish->price}}</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>{{$dish->description}}</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->
                                                @endforeach
                                            </div>
                                        </div>
                                        <!--tab end -->
                                    </div>
                                    <!--tabs end -->
                                </div>
                            </div>
                        </div>
                        <!--  hero-menu_content end  -->
                        <div class="clearfix"></div>
                    <a href="{{route('menu')}}" class="hero_btn" style="margin-left:30px;">View Full Menu <i
                                class="fal fa-long-arrow-right"></i></a>
                        <a href="#" class="pdf-link">Dowload PDF</a>
                    </div>
                </div>
                <!--  hero-menu  end-->
            </div>
        </section>
        <!--  section  end-->

        <!-- section end  -->
        <!-- section   -->
        <section class="column-section no-padding hidden-section" data-scrollax-parent="true" id="sec4">
            <div class="column-wrap-bg left-wrap">
                <div class="bg par-elem " data-bg="images/bg/founder.jpg" data-scrollax="properties: { translateY: '30%' }">
                </div>
                <div class="overlay"></div>
                <div class="quote-box">
                    <i class="fal fa-quote-right"></i>
                    <p>"good food and a warm kitchen are what makes a house a home"</p>
                    <div class="signature"><img src="images/signature.png" alt=""></div>
                    <h4>Turvec Okafor - Food Republic�s Founder & Web Programmer </h4>
                </div>
            </div>
            <div class="column-section-wrap dark-bg">
                <div class="container">
                    <div class="column-text">
                        <div class="section-title">
                            <h4>Call For Reservations</h4>
                            <h2>Opening Hours</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="work-time fl-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Sunday to Tuesday</h3>
                                    <div class="hours">
                                        09:00<br>
                                        22:00
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3>Friday to Saturday</h3>
                                    <div class="hours">
                                        11:00<br>
                                        19:00
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="bold-separator"><span></span></div>
                        <div class="big-number"><a href="#">+234-7047792486</a></div>
                    </div>
                </div>
                <div class="illustration_bg">
                    <div class="bg" data-bg="images/bg/dec/7.png"></div>
                </div>
            </div>
        </section>
        <!-- section end  -->
        <!-- section   -->
        <section>
            <div class="brush-dec2 brush-dec_bottom"></div>
            <div class="container">
                <div class="section-title">
                    <h4>What said about us</h4>
                    <h2>Customer Reviews</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="testimonilas-carousel-wrap fl-wrap">
                <div class="tc-button tc-button-next"><i class="fas fa-caret-right"></i></div>
                <div class="tc-button tc-button-prev"><i class="fas fa-caret-left"></i></div>
                <div class="testimonilas-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($reviews as $review)
                            <!--testi-item-->
                            <div class="swiper-slide">
                                <div class="testi-item fl-wrap">
                                    <div class="testi-avatar"><img src="/reviewsimage/{{$review->image}}" alt="no image"></div>
                                    <div class="testimonilas-text fl-wrap">
                                        <h3>{{$review->name}}</h3>
                                        <div class="star-rating" data-starrating="{{$review->star_rating}}"> </div>
                                        <p>"{{$review->comment}}. "
                                        </p>
                                        <span class="testi-number">0{{$review->id}}.</span>
                                    </div>
                                </div>
                            </div>
                            <!--testi-item end-->
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tc-pagination"></div>
            </div>
        </section>
        <!-- section end  -->
    </div>
    <!--content end -->
     <!-- footer -->
     <div class="height-emulator fl-wrap"></div>
     <footer class="fl-wrap dark-bg fixed-footer">
         <div class="container">
             <div class="footer-top fl-wrap">
             <a href="{{route('home')}}" class="footer-logo"><img src="images/mylogo.jpg" alt=""></a>
                 <div class="lang-wrap"><a href="#" class="act-lang">En</a><span>/</span><a href="#">Fr</a></div>
                 <div class="footer-social">
                     <span class="footer-social-title">Follow us :</span>
                     <ul>
                         <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                         <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                         <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                     </ul>
                 </div>
             </div>
             <!-- footer-widget-wrap -->
             <div class="footer-widget-wrap fl-wrap">
                 <div class="row">
                     <!-- footer-widget -->
                     <div class="col-md-6">
                         <div class="footer-widget">
                             <div class="footer-widget-title">About us</div>
                             <div class="footer-widget-content">
                                 <p> "Our food is best described as a continental journey through the flavours of the world. We take pride in providing meals prepared with only the freshest, most natural ingredients.
                                    Let us host you!" </p>
                                 <a href="about.html" class="footer-widget-content-link">Read more</a>
                             </div>
                         </div>
                     </div>
                     <!-- footer-widget  end-->
                     <!-- footer-widget -->
                     <div class="col-md-6">
                         <div class="footer-widget">
                             <div class="footer-widget-title">Contact info </div>
                             <div class="footer-widget-content">
                                 <div class="footer-contacts footer-box fl-wrap">
                                     <ul>
                                         <li><span>Call :</span><a href="#">07047792486</a> </li>
                                         <li><span>Write :</span><a href="#">okaforturvec@gmail.com</a></li>
                                         <li><span>Find us : </span><a href="#">AGIP, Port Harcourt city. Nigeria</a></li>
                                     </ul>
                                 </div>
                                 <a href="contacts.html" class="footer-widget-content-link">Get in Touch</a>
                             </div>
                         </div>
                     </div>
                     <!-- footer-widget  end-->
                 </div>
             </div>
             <!-- footer-widget-wrap end-->
             <div class="footer-bottom fl-wrap">
                 <div class="copyright">&#169; Turvec 2022 . All rights reserved. </div>
                 <div class="to-top"><span>Back To Top </span><i class="fal fa-angle-double-up"></i></div>
             </div>
         </div>
     </footer>
     <!-- footer end-->
</div>
@endsection
