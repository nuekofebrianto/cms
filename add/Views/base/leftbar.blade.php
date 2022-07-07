<nav id="mainnav-container" class="mainnav">
    <div class="mainnav__inner">

        <!-- Navigation menu -->
        <div class="mainnav__top-content scrollable-content pb-5">

            <!-- Profile Widget -->
            <div class="mainnav__profile mt-3 d-flex3">

                <div class="mt-2 d-mn-max"></div>

                <!-- Profile picture  -->
                <div class="mininav-toggle text-center py-2">
                    <img class="mainnav__avatar img-md rounded-circle border"
                        src="{{ asset('nifty/img/profile-photos/1.png') }}" alt="Profile Picture">
                </div>

                <div class="mininav-content d-mn-max">
                    <div class="d-grid">

                        <!-- User name and position -->
                        <button class="d-block btn shadow-none ">
                            <span class="d-flex justify-content-center align-items-center">
                                <h6 class="mb-0 ">Martin Dez</h6>
                            </span>
                            <small class="text-muted">Developer</small>
                        </button>

                        <!-- Collapsed user menu -->


                    </div>
                </div>

            </div>
            <!-- End - Profile widget -->

            <!-- Navigation Category -->
            <div class="mainnav__categoriy py-3">
                <h6 class="mainnav__caption mt-0 px-3 fw-bold">Navigation</h6>
                <ul class="mainnav__menu nav flex-column">


                    <li class="nav-item">
                        <a href="#" class="nav-link mininav-toggle"><i class="ti-home fs-5 me-2"></i>

                            <span class="nav-label mininav-content ms-1">Dashboard</span>
                        </a>
                    </li>
                    <!-- END : Regular menu link -->

                </ul>
            </div>
            <!-- END : Navigation Category -->

            <!-- More Category -->
            <div class="mainnav__categoriy py-3">
                <h6 class="mainnav__caption mt-0 px-3 fw-bold">More</h6>
                <ul class="mainnav__menu nav flex-column">

                    <!-- Link with submenu -->
                    <li class="nav-item has-sub">

                        <a href="#" class="mininav-toggle nav-link collapsed"><i
                                class="demo-pli-tactic fs-5 me-2"></i>
                            <span class="nav-label ms-1">Menu Levels</span>
                        </a>

                        <!-- Menu Levels submenu list -->
                        <ul class="mininav-content nav collapse">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Menu Link</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Menu Link</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Menu Link</a>
                            </li>
                            <li class="nav-item has-sub">
                                <a href="#" class="mininav-toggle nav-link collapsed">Submenu</a>
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Menu Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Menu Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Menu Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Menu Link</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-sub">
                                <a href="#" class="mininav-toggle nav-link collapsed">Submenu</a>
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Menu Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Menu Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Menu Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Menu Link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END : Menu Levels submenu list -->

                    </li>
                    <!-- END : Link with submenu -->

                </ul>
            </div>
            <!-- END : More Category -->

      

        </div>
        <!-- End - Navigation menu -->

    </div>
</nav>
