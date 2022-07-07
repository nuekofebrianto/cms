<header class="header">
    <div class="header__inner">

        <!-- Brand -->
        <div class="header__brand">
            <div class="brand-wrap">

                <!-- Brand logo -->
                <a href="#" class="brand-img stretched-link">
                    <img src="{{ asset('nifty/img/logo.svg') }}" alt="Nifty Logo" class="Nifty logo" width="40"
                        height="40">
                </a>

                <!-- Brand title -->
                <div class="brand-title">ARSY</div>

                <!-- You can also use IMG or SVG instead of a text element. -->

            </div>
        </div>
        <!-- End - Brand -->

        <div class="header__content">

            <!-- Content Header - Left Side: -->
            <div class="header__content-start">
                <button type="button" class="nav-toggler header__btn btn btn-icon btn-sm" aria-label="Nav Toggler">
                    <i class="demo-psi-view-list"></i>
                </button>
            </div>
            <!-- End - Content Header - Left Side -->

            <!-- Content Header - Right Side: -->
            <div class="header__content-end">

                <!-- Notification Dropdown -->
                <div class="dropdown">

                    <!-- Toggler -->
                    <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown"
                        aria-label="Notification dropdown" aria-expanded="false">
                        <span class="d-block position-relative">
                            <i class="ti-user"></i>
                        </span>
                    </button>

                    <!-- Notification dropdown menu -->
                    <div class="dropdown-menu dropdown-menu-end w-md-300px">
                        <div class="border-bottom px-3 py-2 mb-3">
                            <h5>Akun</h5>
                        </div>

                        <div class="list-group list-group-borderless">

                            <!-- List item -->
                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ti-id-badge text-primary fs-2"></i>
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#"
                                        class="h6 d-block mb-0 stretched-link text-decoration-none">Profile</a>
                                    {{-- <small class="text-muted">Local storage is nearly full.</small> --}}
                                </div>
                            </div>

                            <!-- List item -->
                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ti-unlock text-primary fs-2"></i>
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Ubah
                                        Password
                                    </a>
                                    {{-- <small class="text-muted">Wrote a news article for the John Mike</small> --}}
                                </div>
                            </div>

                            <!-- List item -->
                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ti-power-off text-danger fs-2"></i>
                                </div>
                                <div class="flex-grow-1 ">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <a href="#" class="h6 mb-0 stretched-link text-decoration-none">Logout</a>
                                        {{-- <span class="badge bg-info rounded ms-auto">NEW</span> --}}
                                    </div>
                                    {{-- <small class="text-muted">You have 1,256 unsorted comments.</small> --}}
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- End - Notification dropdown -->

                <!-- User dropdown -->

                <!-- End - User dropdown -->


            </div>
        </div>
    </div>
</header>
