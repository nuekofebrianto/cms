<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="When active, the navigation will slide over the top of the content.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>POS ARSY</title>

    {{-- CSS --}}

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Ubuntu:wght@400;500;700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ url('/nifty/css/color-schemes/all-headers/orange/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ url('/nifty/css/color-schemes/all-headers/orange/nifty.min.css') }}">

    <link rel="stylesheet"
        href="{{ url('nifty/pages/loader.css.9fc01ff357276e0c64df02b9480f36ddc50837d4a7a0c37a6f6676ebbb7468b6.css') }}">

    <link rel="stylesheet" href="{{ url('nifty/pages/themify-icons.db99d0420b40095390f1cf3b606ab918c19c79ed9062722b5f722ccdeddcc09c.css') }}">

    <link rel="stylesheet" href="{{ url('/custom/css/custom.css') }}">
    <link href="{{url('/nifty')}}/premium/icon-sets/icons/line-icons/premium-line-icons.min.css" rel="stylesheet">
    <link href="{{url('/nifty')}}/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{url('/nifty')}}/css/select2.min.css" rel="stylesheet" />

</head>

<body class="jumping">

    <div class="loader">
        <div class="loader-inner ball-rotate">
            <div></div>
        </div>
    </div>

    <div id="root" class="root mn--slide hd--sticky mn--sticky hd--fair hd--expanded">
        <section id="content" class="content">
            @include('base.head')
            @yield('main')
        </section>
        @include('base.header')
        @include('base.leftbar')
    </div>

    <div class="scroll-container">
        <a href="#root" class="scroll-page rounded-circle ratio ratio-1x1" aria-label="Scroll button"></a>
    </div>

    {{-- <script src="{{ asset('nifty/js/jquery.min.js') }}"></script> --}}
    <script src="{{url('/nifty')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('/nifty')}}/js/jquery.validate.min.js"></script>
    <script src="{{url('/nifty')}}/js/additional-methods.min.js?t={{date('YmdHis')}}"></script>
    <script src="{{url('/nifty')}}/js/sweetalert2.all.min.js"></script>

    <script
        src="{{ url('nifty/js/bootstrap.min.bdf649e4bf3fa0261445f7c2ed3517c3f300c9bb44cb991c504bdc130a6ead19.js') }}"
        defer></script>
    <script src="{{ url('nifty/js/nifty.min.b53472f123acc27ffd0c586e4ca3dc5d83c0670a3a5e120f766f88a92240f57b.js') }}"
        defer></script>
    
    <script src="{{url('/nifty')}}/js/litepicker.js"></script>
    <script src="{{url('/nifty')}}/js/jquery.dataTables.min.js"></script>
    <script src="{{url('/nifty')}}/js/dataTables.fixedColumns.min.js"></script>
    <script src="{{url('/nifty')}}/js/select2.min.js"></script>
    
    @include('base.js')
    @yield('js')

</body>

</html>
