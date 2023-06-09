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

<!-- <body class="inner-pages hd-white"> -->
    <!-- Wrapper -->
    <!-- <div id="wrapper"> -->
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Places </h1>
                    <h2><a href="{{ route('main')}}">{{ __('messages.Home') }}  </a> &nbsp;/&nbsp; Places</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION BLOG -->
        <section class="blog-section">
            <div class="container">
                <div class="news-wrap">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            @foreach( $places as $place )
                            <div class="news-item news-item-sm">
                                <a href="{{ route('place',$place->id) }}" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="resp-img" src="{{ asset('images/plc/'.$place->compimage ) }} " alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="{{ route('place',$place->id) }}"><h3>{{$place -> compname}}</h3></a>
                                    <div class="dates">
                                        <span class="date">{{ $place ->created_at }}</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr">
                                        <p>{{$place -> compname}}</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="{{route('place',['id'=>$place->id])}}" class="news-link">{{ __('messages.Read more...') }}</a>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        {{ $places->links('pagination::bootstrap-4') }}
            </div>
        </section>
        <!-- END SECTION BLOG -->

        

        <!-- ARCHIVES JS -->
        @endsection

        @section('js')
           <!-- ARCHIVES JS -->
        <script src="{{URL::asset('assets2/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/rangeSlider.js')}}"></script>
        <script src="{{URL::asset('assets2/js/tether.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.js')}}"></script>
        <script src="{{URL::asset('assets2/js/aos.js')}}"></script>
        <script src="{{URL::asset('assets2/js/aos2.js')}}"></script>
        <script src="{{URL::asset('assets2/js/smooth-scroll.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/lightcase.js')}}"></script>
        <script src="{{URL::asset('assets2/js/search.js')}}"></script>
        <script src="{{URL::asset('assets2/js/light.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/popup.js')}}"></script>
        <script src="{{URL::asset('assets2/js/searched.js')}}"></script>
        <script src="{{URL::asset('assets2/js/ajaxchimp.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/newsletter.js')}}"></script>
        <script src="{{URL::asset('assets2/js/inner.js')}}"></script>
        <script src="{{URL::asset('assets2/js/color-switcher.js')}}"></script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script>

@endsection
    <!-- </div> -->
    <!-- Wrapper / End -->
<!-- </body> -->

<!-- </html> -->
