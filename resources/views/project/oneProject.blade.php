@extends('user.app')

@section('css')

 <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/jquery-ui.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:500,600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{URL::asset('assets2/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/font-awesome.min.css')}}">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{URL::asset('assets2/css/leaflet.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/leaflet-gesture-handling.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/leaflet.markercluster.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/leaflet.markercluster.default.cs')}}s">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets2/css/timedropper.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/datedropper.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/menu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{URL::asset('assets2/css/default.css')}}">

@endsection


@section('content')
    <!-- START SECTION PROPERTIES LISTING -->
        <section class="single-proper blog details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="headings-2 pt-0">
                                    <div class="pro-wrapper">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h3>{{ $project->compound }} <span class="mrg-l-5 category-tag"></span></h3>
                                                <div class="mt-0">
                                                    <a href="" class="listing-address">
                                                        <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i> {{ $place->compname }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single detail-wrapper mr-2">
                                            <div class="detail-wrapper-body">
                                                <div class="listing-title-bar">
                                                    <h4> {{ $cat->name }}Category</h4>
                                                    <div class="mt-0">
                                                        <p>{{ $project->year }} YEARS</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single detail-wrapper mr-2">
                                            <div class="detail-wrapper-body">
                                                <div class="listing-title-bar">
                                                    <h4> Developer </h4>
                                                    <div class="mt-0">
                                                        <p>{{ $dev->name }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- main slider carousel items -->
                                <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                    <h5 class="mb-4">{{ __('messages.Gallery') }}</h5>
                                    <div class="carousel-inner">
                                        @foreach ($proImg as $i)
                                            <div class=" @if($loop->index == 0)active  @endif item carousel-item" data-slide-number="{{ $i->id}}">
                                            <img src="{{  asset('/images/pros/' . $i->name )}}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        @endforeach
                                        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="single homes-content details mb-30">
                            <!-- title -->
                            <h5 class="mb-4">{{ __('messages.Property Details') }}</h5>
                            <ul class="homes-list clearfix">
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Property ID') }}:</span>
                                    <span class="det">{{$project->id}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Property Size') }}:</span>
                                    <span class="det">{{ $project->size }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Property Floors') }}:</span>
                                    <span class="det">{{ $project->floors }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Property Occupation') }}:</span>
                                    <span class="det">$ {{ $project->occupation }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Maintanence Fee') }}:</span>
                                    <span class="det"> {{ $project->maintanence_fee }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Prking Fee') }}:</span>
                                    <span class="det">{{ $project->parking_fee }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Delivery Date') }}:</span>
                                    <span class="det"> {{ $project->delivery_date }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Down Paynment') }}:</span>
                                    <span class="det"> {{ $project->downpaynment }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Delivery') }}:</span>
                                    <span class="det"> {{ $project->delivery }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Offers') }}:</span>
                                    <span class="det"> {{ $project->offers }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Cash Discount') }}:</span>
                                    <span class="det"> {{ $project->cash_discount }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Politics') }}:</span>
                                    <span class="det"> {{ $project->politics }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Year') }}:</span>
                                    <span class="det"> {{ $project->year }}</span>
                                </li>
                            </ul>
                            <!-- cars List -->
                            <ul class="homes-list clearfix">
                               {{-- @foreach ($project->amenitie as  $r)
                                    <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>{{ $r->amenitie->name() }}</span>
                                </li>
                                @endforeach --}}

                                
                                
                            </ul>
                        </div>
                       
                        <div class="property wprt-image-video w50 pro">
                            <h5>{{ __('messages.Property Video') }}</h5>
                                
                                <div class="wprt-image-video w50">
                                    <img alt="image" src="{{  asset('/images/pro/'.$project->image)}}" >
                                    <a class="icon-wrap popup-video popup-youtube" href="{{ $project->link2 }}">
                                        <i class="fa fa-play"></i>
                                    </a>
                                    <div class="iq-waves">
                                        <div class="waves wave-1"></div>
                                        <div class="waves wave-2"></div>
                                        <div class="waves wave-3"></div>
                                    </div>
                                </div>
                        </div>

                        
                        
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            <!-- Start: Schedule a Tour -->

                            <!-- End: Schedule a Tour -->
                            <!-- end author-verified-badge -->
                            <div class="sidebar">
                                <div class="widget-boxed mt-33 mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>{{ __('messages.Company Information') }}</h4>
                                    </div>
                                    @foreach( \App\Models\Setting::limit(1)->get() as $set)
                                    <div class="widget-boxed-body">
                                        <div class="sidebar-widget author-widget2">
                                            <div class="author-box clearfix">
                                            <img src="{{ asset('images/home.jpg') }}" alt="author-image" class="author__img">
                                                <h4 class="author__title"> {{ $set->name }}</h4>
                                            </div>
                                            <ul class="author__contact">
                                                <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true">{{ $set->whatsapp }}</i></span> </li>
                                                <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true">{{ $set->email }}</i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- START SIMILAR PROPERTIES -->
                <section class="similar-property featured portfolio p-0 bg-white-inner">
                    <div class="container">
                        <h5>{{ __('messages.Similar Properties') }}</h5>
                        <div class="row portfolio-items">
                        @foreach (\App\Models\Project::where( 'place_id', $project->place_id)->orderByDesc('created_at')->limit(3)->get() as $pro )
                            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured" style="width: fit-content !important">{{ $pro->size }}</div>
                                                <div class="homes-tag button alt sale" style="width: fit-content !important">{{ $pro->size }}</div>
                                                <div class="homes-price">{{ $pro->size }}</div>
                                               
                                                <div style="
                                                        height: 350px;
                                                        background-repeat: no-repeat !important;
                                                        background-position: center;
                                                        background-size: cover;
                                                        background:url({{  url('/') . '/images/pro/' . $pro->image }})" ></div>
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="" class="btn"><i class="fa fa-link"></i></a>
                                           
                                            <a href="" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a  href="{{ route('project',$pro->id) }}">{{ $pro->compound }}</a></h3>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span> {{ $pro->size }}{{ __('messages.Bedrooms') }} </span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span> {{ $pro->size }}{{ __('messages.Bathrooms') }} </span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span> {{ $pro->size }} {{ __('messages.sq ft') }}</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>{{ $pro->size }} {{ __('messages.Garages') }}</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </section>
                <!-- END SIMILAR PROPERTIES -->
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->
        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
@endsection

@section('js')


        <!-- ARCHIVES JS -->
        <script src="{{URL::asset('assets2/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery-ui.js')}}"></script>
        <script src="{{URL::asset('assets2/js/range-slider.js')}}"></script>
        <script src="{{URL::asset('assets2/js/tether.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.js')}}"></script>
        <script src="{{URL::asset('assets2/js/slick.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/slick4.js')}}"></script>
        <script src="{{URL::asset('assets2/js/fitvids.js')}}"></script>
        <script src="{{URL::asset('assets2/js/smooth-scroll.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/popup.js')}}"></script>
        <script src="{{URL::asset('assets2/js/ajaxchimp.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/newsletter.js')}}"></script>
        <script src="{{URL::asset('assets2/js/timedropper.js')}}"></script>
        <script src="{{URL::asset('assets2/js/datedropper.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jqueryadd-count.js')}}"></script>
        <script src="{{URL::asset('assets2/js/leaflet.js')}}"></script>
        <script src="{{URL::asset('assets2/js/leaflet-gesture-handling.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/leaflet-providers.js')}}"></script>
        <script src="{{URL::asset('assets2/js/leaflet.markercluster.js')}}"></script>
        <script src="{{URL::asset('assets2/js/map-single.js')}}"></script>
        <script src="{{URL::asset('assets2/js/color-switcher.js')}}"></script>
        <script src="{{URL::asset('assets2/js/inner.js')}}"></script>

        <!-- Date Dropper Script-->
        <script>
            $('#reservation-date').dateDropper();

        </script>
        <!-- Time Dropper Script-->
        <script>
            this.$('#reservation-time').timeDropper({
                setCurrentTime: false,
                meridians: true,
                primaryColor: "#e8212a",
                borderColor: "#e8212a",
                minutesInterval: '15'
            });

        </script>

        <script>
            $(document).ready(function() {
                $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            });

        </script>

        <script>
            $('.slick-carousel').each(function() {
                var slider = $(this);
                $(this).slick({
                    infinite: true,
                    dots: false,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0'
                });

                $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                    slider.slick('slickPrev');
                });
                $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                    slider.slick('slickNext');
                });
            });

        </script>

@endsection
