@extends('user.app')

@section('css')
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/search.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/menu.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/slider-search2.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/maps.css') }}">
    <link rel="stylesheet" id="color" href="{{ URL::asset('assets2/css/colors/darkblue.css') }}">
   
    <link rel="shortcut icon" text ="x-icon"  href="/assets/logoo.jpg">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('assets2/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/revolution/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/search-form.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/search.css') }}">
    
    
@endsection
@section('content')
<body class="homepage-10 homepage-9 homepage-4 hp-6 mh">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        
        <!-- Header Container / End -->

        <!-- STAR HEADER SEARCH -->
        <section id="hero-area" class=" position-relative parallax-searchs home15 overlay thome-6 thome-10" >
            <div class="overlay position-absolute w-100 h-50" style="background: #000;
    opacity: 0.3; z-index:99"></div>
            <div class="hero-main h-100" style="background:url('images/home2.jpeg') no-repeat;background-size:cover; ">
                <div class="container" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-12" style="z-index:1000; position:relative">
                            <div class="hero-inner">
                                <!-- Welcome Text -->
                                <div class="welcome-text" style=" margin-bottom: 65px; position: absolute;top: 74px; width: 100%;">
                                    <h1 class="h1">Find Your Dream House
                                    <br class="d-md-none">
                                </h1>
                                    <p class="mt-4">We Have Over Million Properties For You.</p>
                                </div>
                                <!--/ End Welcome Text -->
                                <!-- Search Form -->
                                <div class="col-12" style="top:-138px;">
                                    <div class="banner-search-wrap">
                                        
                                    <ul class="nav nav-tabs rld-banner-tab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Sale</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs_1">
                                        <div class="rld-main-search">
                                            <form action="{{ route('searchProperty') }}" method="post">
                                                @csrf
                                                <div class="row">

                                                    <div class="rld-single-input col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <input name="name" type="text" placeholder="Enter Keyword..." >
                                                    </div>
                                                    <div class="rld-single-select ml-22 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                        <select name="type" class="select single-select">
                                                            @foreach(\App\Models\Category::all() as $type)
                                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="rld-single-select col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                        <select name="location" class="select single-select mr-0">
                                                            @foreach( \App\Models\Place::all() as $location)
                                                                <option value="{{$location->id}}">{{$location->compname}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-3">
                                                        <input class="btn btn-yellow" type="submit" value="{{ __('messages.Search Now') }}">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <!--/ End Search Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HEADER SEARCH -->

        <!-- START SECTION PROPERTIES FOR SALE -->
        <section class="featured portfolio bg-white position-relative" style="z-index:2000">
            <div class="container">
                <div class="row">
                    <div class="section-title col-md-5">
                        <h3>Projects</h3>
                        <h2>For Sale</h2>
                    </div>
                </div>
                <div class="row portfolio-items">
                @foreach( \App\Models\Project::all() as $pro)
                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="zoom-in" data-aos-delay="150">
                            <div class="listing-item compact">
                                <a href="{{ route('project',$pro->id) }}" class="listing-img-container">
                                    <div class="listing-badges">
                                        
                                        <span>For Sale</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">{{ $pro->compound }} <i>  </i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Size <span>{{ $pro->size }}</span></li>
                                            <li>Floor<span>{{ $pro->floors }}</span></li>
                                            <li>Parking Fee <span>{{ $pro->parking_fee }}</span></li>
                                            <li>Cash Discount <span>{{ $pro->cash_discount }}</span></li>
                                        </ul>
                                    </div>
                                    <img src="{{ url('/') . '/images/pro/' . $pro->image }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
                <div class="bg-all">
                    <a href="{{ route('allproject') }}" class="btn btn-outline-light">View All</a>
                </div>
            </div>
        </section>
        <!-- END SECTION PROPERTIES FOR SALE -->
        
        <!-- START SECTION WHY CHOOSE US -->
        <section class="how-it-works bg-white-2">
            <div class="container">
               <div class="row">
                    <div class="section-title col-md-5">
                        <h3>Why</h3>
                        <h2>Choose Us</h2>
                    </div>
                </div>
                @foreach( \App\Models\Setting::limit(1)->get() as $set)
                <div class="row service-1">
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="{{ url('/') . '/images/message.jpeg' }}" alt="">
                                <h3>AF Properity  Message</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">{{ $set->message }}</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="{{ url('/') . '/images/brief.jpeg' }}" alt="">
                                <h3>AF Properity Brief</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">{{ $set->Brief }}</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="{{ url('/') . '/images/vision.jpeg' }}" alt="">
                                <h3>AF Properity Vision</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">{{ $set->vision }}</p>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </section>
        
        <section class="info-help" style="background:url('images/1.jpg'); no-repeat;background-size:cover; ">
            <div class="container">
                <div class="row info-head">
                    <div class="col-lg-4 col-md-6">
                        <div class="info-text" data-aos="fade-right">
                            <h2>TYPE OF CATEGORIES</h2>
                            <h2>Categories for sales</h2>
                            <div >
                                
                            </div>
                        </div>
                    </div>
                    <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30 col-lg-6 col-md-6">
                        <h5 class="mb-4">{{ __('messages.Gallery') }}</h5>
                        <div class="carousel-inner">
                            @foreach (\App\Models\Image::all() as $i)
                                <div class=" @if($loop->index == 0) active  @endif item carousel-item ms-0" data-slide-number="{{ $i->id}}">
                                <img src="{{  asset('/images/pros/'. $i->name )}}" class="img-fluid" alt="slider-listing">
                            </div>
                            @endforeach
                            <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION INFO-HELP -->

        <!-- START SECTION BLOG -->
        <section class="blog-section bg-white-2">
            <div class="container">
               <div class="row">
                    <div class="section-title col-md-5">
                        <h3>places &amp;</h3>
                        <h2>Tips</h2>
                    </div>
                </div>
                <div class="news-wrap">
                    <div class="row">
                    @foreach (\App\Models\Place::limit(3)->get() as $plc)
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up" data-aos-delay="150">
                                <a href="{{ route('place',$plc->id) }}" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="{{ url('/') . '/images/plc/' . $plc->compimage }}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="{{ route('place',$plc->id) }}"><h3>{{ $plc->compname }}</h3></a>
                                    <div class="dates">
                                        <span class="date">{{ $plc->created_at }} &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="news-item-bottom">
                                        <a href="{{ route('place',$plc->id) }}" class="news-link">Read more...</a>
                                        <div class="admin">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                   
                </div>
               
            </div>
            <div class="bg-all m-4">
                <a href="{{ route('allplace') }}" class="btn btn-outline-light">View All</a>
            </div>
        </section>
        <!-- END SECTION BLOG -->

        <!-- STAR SECTION PARTNERS -->
        <div class="partners bg-white">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Our </span>Partners</h2>
                    <p>The Companies That Represent Us.</p>
                </div>
                <div class="owl-carousel style2">
                @foreach (\App\Models\Developer::all() as $dev)
                    <div class="owl-item" data-aos="fade-up"><img src="{{ url('/') . '/images/dev/' . $dev->image }}" alt=""></div>
                    
                @endforeach    
                </div>
            </div>
        </div>
        
@endsection
        <!-- ARCHIVES JS -->
        <!-- <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/rangeSlider.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/moment.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/mmenu.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/aos2.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/lightcase.js"></script>
        <script src="js/search.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/ajaxchimp.min.js"></script>
        <script src="js/newsletter.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/searched.js"></script>
        <script src="js/forms-2.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet-gesture-handling.min.js"></script>
        <script src="js/leaflet-providers.js"></script>
        <script src="js/leaflet.markercluster.js"></script>
        <script src="js/map-style2.js"></script>
        <script src="js/range.js"></script>
        <script src="js/color-switcher.js"></script>
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            }); -->
<!--  -->
        <!-- </script> -->

        <!-- Slider Revolution scripts -->
        <!-- <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });

        </script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script> -->

        <!-- MAIN JS -->
        <!-- <script src="js/script.js"></script> -->

    <!-- </div> -->
    <!-- Wrapper / End -->

