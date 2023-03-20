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

<section class="request info-help"
                 id="quote" style="background:url('images/home2.jpeg') no-repeat;background-size:cover; ">
            <div class="container" >
                <div class="row" >
                    <div class="col-lg-7 col-md-12"
                         data-aos="fade-right">
                        <h3>Ready to get started?</h3>
                        <form  class="contact-form"  method="post" action="{{ route('sendmessage') }}">
                        @csrf
                            <div id="success"
                                 class="successform">
                                <p class="alert alert-success font-weight-bold"
                                   role="alert">Your message was sent successfully!</p>
                            </div>
                            <div id="error"
                                 class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <div class="form-group">
                                <input type="text"
                                       required
                                       v-model="name"
                                       class="form-control input-custom input-full"
                                       name="name"
                                       placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="number"
                                       required
                                       class="form-control input-custom input-full"
                                       name="phone"
                                       
                                       placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="email"
                                       class="form-control input-custom input-full"
                                       name="email"
                                      
                                       placeholder="Your Email">
                            </div>
                            <div class="form-group mb-1">
                                <textarea class="form-control textarea-custom input-full"
                                          
                                          name="message"
                                         
                                          required
                                          rows="1"
                                          placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">{{ __('messages.Send Message')}}</button>
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-12 bgc"
                         data-aos="fade-left" style="background:url('images/home.jpg') no-repeat;background-size:cover; ">
                        <div class="call-info">
                            <h3>Contact Details</h3>
                            @foreach( \App\Models\Setting::limit(1)->get() as $set)
                            <p class="mb-5">Please find below contact details and contact us today!</p>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker"
                                           aria-hidden="true"></i>                                        
                                        <p class="in-p">{{ $set->site }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-whatsapp"
                                           aria-hidden="true"></i>
                                        <p class="in-p">{{ $set->whatsapp }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope"
                                           aria-hidden="true"></i>
                                        <p class="in-p ti">{{ $set->email }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info cll">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p class="in-p ti">8:00 a.m - 9:00 p.m</p>
                                    </div>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </form>
                </div>
                <div style="background-image: url('{{ URL::asset('images/3.jpg') }}')"  class="col-lg-5 col-md-12 bgc" data-aos="fade-left">
                    <div class="call-info">
                    @foreach( \App\Models\Setting::limit(1)->get() as $set)
                        <h3>{{ __('messages.Please leave a message') }} </h3>

                        <p class="mb-5">{{ __('messages.Please find below contact details and contact us today!') }}</p>
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p class="in-p">{{ $set->site }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    <p class="in-p">{{ $set->whatsapp }} </p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="in-p ti">{{ $set->email }}</p>
                                </div>
                            </li>
                        </ul>
                        @endforeach
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
