@extends('base.app')
@section('main')
<section id="content" class="content">
    

    <div class="content__boxed">
        <div class="content__wrap">
            <div class="card text-center mb-4 col-xl-8 offset-xl-2">
                <div class="card-header">Header</div>
                <div class="card-body" style="height: 2000px;">

                    <h5 class="card-title">Card Title Here</h5>

                    <p class="mb-5">Start putting content on grids or panels, you can also use different combinations of grids.
                        <br>Please check out the dashboard and other pages.
                    </p>

                    <button class="nav-toggler btn btn-warning btn-lg mb-3">Toggle Navigation</button>
                    <button class="sidebar-toggler btn btn-danger btn-lg mb-3">Toggle Sidebar</button><br>
                    <button class="btn btn-light" onclick="disableRoundedHeader()">Rounded header</button>
                    <button class="btn btn-primary" onclick="changeContentHeader()">Overlapping</button>

                </div>
            </div>

        </div>
    </div>


</section>
@endsection

@section('js')
@endsection
