<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>POS CMS</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <link href="{{ asset('nifty/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('nifty/css/nifty.min.css') }}" rel="stylesheet">
    <link href="{{ asset('nifty/css/demo/nifty-demo-icons.min.css') }}" rel="stylesheet">

    <link href="{{ asset('nifty/plugins/pace/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('nifty/plugins/pace/pace.min.js') }}"></script>

</head>

<body>
    <div id="container" class="effect aside-float aside-bright slide mainnav-out">

        @include('base.header')

        <div class="boxed">

            <div id="content-container">

                @include('base.head')

                <div id="page-content">


                    {{-- <hr class="new-section-sm bord-no"> --}}
                    @yield('main')

                </div>


            </div>

            @include('base.leftbar')

        </div>

    </div>

    <script src="{{ asset('nifty/js/jquery.min.js') }}"></script>
    <script src="{{ asset('nifty/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('nifty/js/nifty.min.js') }}"></script>

</body>

</html>
