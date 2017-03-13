@extends('layouts.applayout')

@section('css')

@endsection
@section('content')

    <!-- Slider Section -->
    <section id="banner_carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive sliderimge" src="{{asset('images/hero pic.png')}}" alt="...">

                <div class="carousel-caption">
                    <h2 class="animated fadeInLeft">Make The World <br/> Your Home</h2>
                    <p class="animated fadeInRight">Rent welcoming & affordable homes <br/> from amazing Muslims
                        worldwide</p>
                    <button class="btn btn-get-started btn-info animated fadeInLeft back-red text-16-b-30">GET STARTED -
                        SIGN UP
                    </button>
                    <div class="video_icon">
                        <a class=" video animated fadeInRight" href=""
                           data-video="https://www.youtube.com/embed/8L5PqL4ylIU" data-toggle="modal"
                           data-target="#videoModal">
                            <img src="{{asset('img/play-video-icon copy.png')}}" alt=""/>
                            <p>Watch Video</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Slider Section -->

    <!-- Select Box Area above Banner -->
    <section id="select_box">
        <div class="container-fluid">
            <div class="row">
                <form action="" id="banner_select_area">
                    <div class="col-md-11">
                        <div class="select_area">
                            <div class="col-lg-3 col-md-3 col-sm-6 single_select_box">

                                <div class="box_title">
                                    <label class="text-upper text-14-18-2 text-grayB3" for="country">WHERE</label>
                                </div>
                                <select name="country" id="country" class="text-14-18-2">
                                    <option value="0">Select a country</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AO">Angola</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="CF">Central African Republic
                                    </option>
                                </select>

                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 single_select_box">
                                <div class="box_title">
                                    <label class="text-upper text-14-18-2 text-grayB3" for="check_in_date">CHECK
                                        IN</label>
                                </div>
                                <input type="text" id="check_in_date" class="form-control datepicker"
                                       value="02 / 16 / 2012">
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 single_select_box">
                                <div class="box_title">
                                    <label class="text-upper text-14-18-2 text-grayB3" for="check_out_date">CHECK
                                        OUT</label>
                                </div>
                                <input type="text" id="check_out_date" class="form-control datepicker"
                                       value="02 / 16 / 2012">
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 single_select_box">
                                <div class="box_title">
                                    <label class="text-upper text-14-18-2 text-grayB3" for="guests">HOW MANY</label>
                                </div>
                                <select name="guests" id="guests" class="text-14-18-2">
                                    <option value="0">Guests Count</option>
                                    <option value="1">3 Guests</option>
                                    <option value="2">4 Guests</option>
                                    <option value="3">5 Guests></option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-info back-red text-14-500-18-2" id="select_go">GO</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Select Box -->


    <!---  Feature Section --->
    <section id="feature_section">
        <div class="container-fluid">
            <div class="row">
                <div class="section_title text-center">
                    <h2 class="text-53-b-64-m2 text-black">A Global Community Starting<br> a Travel Revolution</h2>
                    <p class="text-24-26 text-gray5F text-ff-pt">Join this growing community of travelers, hosts and
                        adventurers.</p>
                </div>
            </div>

            <div class="row">
                <div class="image_tile col-md-4" id="image_tile_1">
                    <img src="{{asset('images/traveler_color.png')}}" alt=""/>
                </div>
                <div class="image_tile col-md-4" id="image_tile_2">
                    <img src="{{asset('images/community.png')}}" alt=""/>
                    <div id="feature_carousel">
                        <div id="feature_owl" class="owl-carousel owl-theme">
                            <div class="item">
                                <p class="text-16-b-19-2 text-grayB3">MUZBNB IS FOR</p>
                                <h2 class="text-53-b-58-m2 text-red">
                                    <label>Travelers</label>
                                    <label class="text-black">who live for</label>
                                    <label>Adventure</label>
                                </h2>
                            </div>

                            <div class="item">
                                <p class="text-16-b-19-2 text-grayB3">MUZBNB IS FOR</p>
                                <h2 class="text-53-b-58-m2 text-red">
                                    <label>Travelers</label>
                                    <label class="text-black">who live for</label>
                                    <label>Adventure</label>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image_tile col-md-4" id="image_tile_3">
                    <img src="{{asset('images/hosts.png')}}" alt=""/>
                </div>
            </div>

        </div>
    </section>
    <!---  End Feature Section --->


    <!-- Full video section Start -->
    <section id="video_section">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-7 col-md-5">
                    <h2 class="text-36-b-44 text-black">Feel welcome & have <br/> fun when you travel</h2>
                    <p class="text-24-26 text-ff-pt subtitle">Create lasting experiences with family, friends or even
                        solo when you travel with
                        Muzbnb.</p>
                    <div class="video_icon">
                        <a class="video" href="" data-video="https://www.youtube.com/embed/8L5PqL4ylIU"
                           data-toggle="modal" data-target="#videoModal">
                            <p>
                                <span class="watch-icon"><i class="fa fa-play" aria-hidden="true"></i></span>
                                <span class="text-16-30 text-ff-pt text-black">Watch Video</span>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Full video section End -->


    <!---  Populer Destinations area Start --->
    <section id="destination_section">
        <div class="container">
            <div class="row">
                <div class="section_title text-center first_title">
                    <h2 class="text-53-b-64-m2 text-black">Visit The World <br/> Most Popular Destinations</h2>
                    <p class="text-24-26 text-ff-pt text-gray5F">Travel the globe experiencing each city like a
                        local.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row-fluid">
                        <div class=" tile col-xs-12" style="margin-bottom:30px;">
                            <img src="{{asset('images/paris.png')}}" alt=""/>
                            <span class="tile_title top_left_title">Paris</span>
                        </div>

                        <div class=" tile col-xs-12">
                            <img src="{{asset('images/morocco.png')}}" alt=""/>
                            <span class="tile_title bottom_right_title">Morocco</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row-fluid">
                        <div class=" tile col-xs-12" style="">
                            <img src="{{asset('images/dubai.png')}}" alt=""/>
                            <span class="tile_title top_right_title">Dubai</span>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class=" tile col-xs-6" style="padding: 33px 15px 0 0;">
                            <img src="{{asset('images/la.png')}}" alt=""/>
                            <span class="tile_title top_right_title" style="top: 51px; right: 52px;">L.A.</span>
                        </div>
                        <div class=" tile col-xs-6" style="padding: 33px 0 0 16px;">
                            <img src="{{asset('images/london.png')}}"
                                 alt=""/>
                            <span class="tile_title top_right_title" style="top: 51px;">London</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="text-center second_title">
                <h2 class="text-36-b-44 text-black">Open your home to the world and become a host.</h2>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="tile">
                        <img src="{{asset('images/newyork.png')}}" alt=""/>
                        <span class="tile_title top_right_title" style="max-width: 130px; top: 26px; line-height:48px;">New York</span>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tile">
                        <img src="{{asset('images/indonesia.png')}}" alt=""/>
                        <span class="tile_title bottom_right_title" style="">Indonesia</span>
                    </div>
                </div>
            </div>

            <div class="host text-center">
                <button class="btn btn-info btn-br-40 back-blue text-14-b-18-2">BECOME A HOST</button>
            </div>

        </div>
    </section>
    <!---  Populer Destinations area End --->

    <section id="mention_section">
        <div class="container">
            <div class="row">
                <div class="section_title text-center">
                    <h2 class="text-36-b-44 text-black">As mentioned in</h2>
                </div>

                <div id="metion_carousel" class="owl-carousel">

                    <div class="item">
                        <img src="{{ asset('images//Screen Shot 2017-02-12 at 9.03.38 PM.png')}}" alt=""/>
                    </div>

                    <div class="item">
                        <img src="{{ asset('images/splash_logo.png') }}" alt=""/>
                    </div>

                    <div class="item">
                        <img src="{{ asset('images/Screen Shot 2017-02-22 at 8.57.17 PM.png') }}" alt=""/>
                    </div>

                    <div class="item">
                        <img src="{{ asset('images/Screen Shot 2017-02-12 at 9.04.59 PM.png') }}" alt=""/>
                    </div>

                    <div class="item">
                        <img src="{{ asset('images/Screen Shot 2017-02-12 at 9.03.38 PM.png') }}" alt=""/>
                    </div>

                    <div class="item">
                        <img src="{{ asset('images/Screen Shot 2017-02-12 at 9.04.59 PM.png') }}" alt=""/>
                    </div>

                    <div class="item">
                        <img src="{{ asset('images/splash_logo.png') }}" alt=""/>
                    </div>

                    <div class="item">
                        <img src="{{ asset('images/Screen Shot 2017-02-22 at 8.57.17 PM.png') }}" alt=""/>
                    </div>

                    <div class="item">
                        <img src="{{ asset('images/Screen Shot 2017-02-12 at 9.21.32 PM.png') }}" alt=""/>
                    </div>

                    <div class="item">
                        <img src="{{ asset('images/Screen Shot 2017-02-12 at 9.03.38 PM.png') }}" alt=""/>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!--- Feedback Section -->
    <section id="feedback_section">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <label class="text-16-19-2 text-grayB3 section_title">FEEDBACK</label>
                    <h2 class="text-53-b-64-m2 text-black section_subtitle">See what community infulencers are
                        saying</h2>
                </div>
            </div>
            <div class="row">
                <div id="feedback_owl" class="owl-carousel owl-theme">
                    <div class="item text-center">
                        <img src="{{asset('img/testimonial-1.png')}}" alt=""/>
                        <h2 class="text-24-b-29 text-gray4D">
                            Imam Johari Abdul-Malik
                        </h2>
                        <h3 class="text-18-26 text-gray9B text-ff-pt">
                            Director of Outreach for Dar Al Hijrah Islamic Center of Northern Virginia
                        </h3>
                        <p class="text-20-26 text-ff-pt">
                            "Now is the perfect time for Muzbnb. We owe it to ourselves,
                            Muslims and other people of faith & moral conviction to open our hearts and our homes with
                            Muzbnb. <br>This venture is on the ball."
                        </p>
                    </div>

                    <div class="item text-center">
                        <img src="{{asset('img/testimonial-2.png')}}" alt=""/>
                        <h2 class="text-24-b-29 text-gray4D">
                            Amany Killawi
                        </h2>
                        <h3 class="text-18-26 text-gray9B text-ff-pt">
                            Co-founder & COO of LaunchGood
                        </h3>
                        <p class="text-20-26 text-ff-pt">
                            "Muzbnb offers frequent travellers like me an opportunity to future connect and support a
                            Burgeoning Islamic global ecosystem through the simple act of staying in a fellow Muslim's
                            home."
                        </p>
                    </div>

                    <div class="item text-center">
                        <img src="{{asset('img/testimonial-3.png')}}" alt=""/>
                        <h2 class="text-24-b-29 text-gray4D">
                            Khaled Hussein
                        </h2>
                        <h3 class="text-18-26 text-gray9B text-ff-pt">
                            Founder & CTO of Tilt
                        </h3>
                        <p class="text-20-26 text-ff-pt">
                            "Muzbnb is really innovative approach to a traditional Islamic principle-hospitality to ALL
                            guests. Ideas like this are what propels our communities forward. <br> I am a HUGE fan
                            already."
                        </p>
                    </div>

                    <div class="item text-center">
                        <img src="{{asset('img/testimonial-1.png')}}" alt=""/>
                        <h2 class="text-24-b-29 text-gray4D">
                            Imam Johari Abdul-Malik
                        </h2>
                        <h3 class="text-18-26 text-gray9B text-ff-pt">
                            Director of Outreach for Dar Al Hijrah Islamic Center of Northern Virginia
                        </h3>
                        <p class="text-20-26 text-ff-pt">
                            "Now is the perfect time for Muzbnb. We owe it to ourselves,
                            Muslims and other people of faith & moral conviction to open our hearts and our homes with
                            Muzbnb.<br> This venture is on the ball."
                        </p>
                    </div>

                    <div class="item text-center">
                        <img src="{{asset('img/testimonial-2.png')}}" alt=""/>
                        <h2 class="text-24-b-29 text-gray4D">
                            Amany Killawi
                        </h2>
                        <h3 class="text-18-26 text-gray9B text-ff-pt">
                            Co-founder & COO of LaunchGood
                        </h3>
                        <p class="text-20-26 text-ff-pt">
                            "Muzbnb offers frequent travellers like me an opportunity to future connect and support a
                            Burgeoning Islamic global ecosystem through the simple act of staying in a fellow Muslim's
                            home."
                        </p>
                    </div>

                    <div class="item text-center">
                        <img src="{{asset('img/testimonial-3.png')}}" alt=""/>
                        <h2 class="text-24-b-29 text-gray4D">
                            Khaled Hussein
                        </h2>
                        <h3 class="text-18-26 text-gray9B text-ff-pt">
                            Founder & CTO of Tilt
                        </h3>
                        <p class="text-20-26 text-ff-pt">
                            "Muzbnb is really innovative approach to a traditional Islamic principle-hospitality to ALL
                            guests. Ideas like this are what propels our communities forward.<br> I am a HUGE fan
                            already."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feedback section -->


    <!---  SignUp Section --->
    <section id="signup_section">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2 class="text-36-b-44 text-black">With Muzbnb <sup>TM,</sup> finding a welcomeing and
                        accoummodating space to rent when you
                        travel is a thing of the past.</h2>
                    <p class="text-24-26 text-black">Join us today as we revive the tradition of exceptional<br>
                        hospitality and adventurer.</p>
                    <button class="btn btn-info back-red text-14-b-18-2 text-white back-red btn-br-40">SIGN UP TODAY
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- End SignUp Section -->


    <!-- Coming Soon Area -->
    <section id="comming_soon">
        <div class="container">
            <div class="row" id="android_row">
                <h2 class="text-36-b-44 text-center">Coming soon to IOS, Android & Windows</h2>
                <div class="apps_list">
                    <ul>
                        <li><img src="{{asset('img/11.png')}}" alt=""/><a href="">App Store</a></li>
                        <li><img src="{{asset('img/12.png')}}" alt=""/><a href="">Google Play</a></li>
                        <li><img src="{{asset('img/13.png')}}" alt=""/><a href="">Windows</a></li>
                    </ul>
                </div>
            </div>
            <div class="row" id="social_row">
                <div class="social_list text-center">
                    <ul>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-rss"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Coming Soon Area -->

    <!--Video Modal-->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <iframe width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--End Video Modal-->
@endsection

@section('script')
    <script>
        (function ($) {
            "use strict";

            $('.carousel').carousel({
                interval: 3000
            });


            $("#feature_owl").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds
                navigation: true, // Show next and prev buttons
                // navigationText: ["prev","next"],
                navigationText: [
                    "<i class='fa fa-long-arrow-left'></i>",
                    "<i class='fa fa-long-arrow-right'></i>"
                ],
                pagination: false,
                items: 1,
                itemsDesktop: [1199, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                itemsTabletSmall: false,
                itemsMobile: [479, 1],
                singleItem: false,
                itemsScaleUp: false,

            });

            $("#metion_carousel").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds
                pagination: false,
                items: 5,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]

            });


            $("#feedback_owl").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]

            });


            $(".video").click(function () {
                var theModal = $(this).data("target"),
                        videoSRC = $(this).attr("data-video"),
                        videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
                $(theModal + ' iframe').attr('src', videoSRCauto);
                $(theModal + ' button.close').click(function () {
                    $(theModal + ' iframe').attr('src', videoSRC);
                });
            });


            $('.datepicker').datepicker({
                format: 'mm/dd/yyyy',
                startDate: '-3d'
            });


        })(jQuery);
    </script>
    <script>
        $(document).ready(function () {

            $('.tile').mouseover(function () {
                var title = $(this).find('.tile_title');
                title.fadeIn();
            });

            $('.tile').mouseout(function () {
                var title = $(this).find('.tile_title');
                title.fadeOut();
            });
        });
    </script>
@endsection
