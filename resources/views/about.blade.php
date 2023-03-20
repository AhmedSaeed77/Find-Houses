@extends('user.app')
@section('css')
<!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets2/css/search.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/owl.carousel.min.css')}}">



    <link rel="stylesheet" href="{{URL::asset('assets2/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{URL::asset('assets2/css/bootstrap.rtl.min.css')}}"> --}}
    <link rel="stylesheet" href="{{URL::asset('assets2/css/menu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/slider-search2.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/styles.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/maps.css')}}">
    <link rel="stylesheet" id="color" href="{{URL::asset('assets2/css/colors/darkblue.css')}}">

       <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="{{URL::asset('assets2/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/revolution/css/navigation.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/search-form.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/search.css')}}">

   
@endsection
@section('content')

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>{{ __('messages.About Our Company')}}</h1>
                    <h2><a href="index.html">{{ __('messages.Home')}} </a> &nbsp;/&nbsp; {{ __('messages.About Us')}}</h2>
                </div>
            </div>
        </section>

        <section class="about-us fh">
            <div class="container mt-5">
                <div class="row">
                @foreach( \App\Models\Setting::limit(1)->get() as $set)
                    <div class="col-lg-6 col-md-12 who-1">
                        <div>
                            <h2 class="text-left mb-4">{{ __('messages.About')}} <span>{{ $set->name }}</span></h2>
                        </div>
                        <div class="pftext" style="font-size: 26px;">
                            <p style="line-height: 1.7;">{{ $set->Brief }}</p>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="wprt-image-video w50">
                            <img alt="image" src="{{ URL::asset('images/home.jpg') }}">
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="how-it-works bg-white-2 mt-5">
            <div class="container ">
                <div class="sec-title">
                    <h2><span>{{ __('messages.Why')}} </span>{{ __('messages.Choose Us')}}</h2>
                    <p>{{ __('messages.We provide full service at every step')}}.</p>
                </div>
                <div class="row service-1">
                @foreach( \App\Models\Setting::limit(1)->get() as $set)
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="{{ URL::asset('images/brief.jpeg') }}" alt="">
                                <h3>{{ __('messages.AF Properity Goals')}}</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">{{ $set->goals }}</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="{{ URL::asset('images/message.jpeg') }}" alt="">
                                <h3>{{ __('messages.AF Properity Message')}}</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">{{ $set->message }}</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="{{ URL::asset('images/vision.jpeg') }}" alt="">
                                <h3>{{ __('messages.AF Properity Vision')}}</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">{{ $set->vision }}</p>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="counterup" style="background:url('images/home.jpg') no-repeat;background-size:cover; ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">300</p>
                                <h3>{{ __('messages.Sold Houses')}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">400</p>
                                <h3>{{ __('messages.Daily Listings')}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr mb-0">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">250</p>
                                <h3>{{ __('messages.Expert Agents')}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr mb-0 last">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">200</p>
                                <h3>{{ __('messages.Won Awars')}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <div class="partners bg-white-2">
            <div class="container">
                <div class="sec-title">
                    <h2><span> {{ __('messages.Our Partners') }} </h2>

                </div>
                <div class="owl-carousel style2">
                    @foreach (\App\Models\Developer::all() as $dev)
                    <div class="owl-item"><img  src="{{ url('/') . '/images/dev/' . $dev->image }}" alt=""></div>
                    @endforeach
                </div>
            </div>
        </div>

        @endsection
@section('js')

        <script src="{{URL::asset('assets2/js/jquery-ui.js')}}"></script>
        <script src="{{URL::asset('assets2/js/tether.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/moment.js')}}"></script>
        <script src="{{URL::asset('assets2/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.js')}}"></script>
        <script src="{{URL::asset('assets2/js/slick.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/fitvids.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.counterup.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/smooth-scroll.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/lightcase.js')}}"></script>
        <script src="{{URL::asset('assets2/js/search.js')}}"></script>
        <script src="{{URL::asset('assets2/js/owl.carousel.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/ajaxchimp.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/newsletter.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.form.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.validate.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/searched.js')}}"></script>
        <script src="{{URL::asset('assets2/js/forms-2.js')}}"></script>
        <script src="{{URL::asset('assets2/js/color-switcher.js')}}"></script>
        <script src="{{URL::asset('assets2/js/search.js')}}"></script>


        <!-- Slider Revolution scripts -->
        <script src="{{URL::asset('assets2/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        @yield('js')

@endsection
