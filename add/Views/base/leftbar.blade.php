<nav id="mainnav-container" class="mainnav">
    <div class="mainnav__inner">
        
        <div class="mainnav__top-content scrollable-content pb-5">
            
            <div class="mainnav__profile mt-3 d-flex3">

                <div class="mt-2 d-mn-max"></div>
                
                <div class="mininav-toggle text-center py-2">
                    <img class="mainnav__avatar img-md rounded-circle border"
                        src="{{ asset('nifty/img/profile-photos/1.png') }}" alt="Profile Picture">
                </div>

                <div class="mininav-content d-mn-max">
                    <div class="d-grid">
                        <button class="d-block btn shadow-none ">
                            <span class="d-flex justify-content-center align-items-center">
                                <h6 class="mb-0 ">Martin Dez</h6>
                            </span>
                            <small class="text-muted">Developer</small>
                        </button>
                    </div>
                </div>

            </div>
            
            <div class="mainnav__categoriy mt-3">
                <h6 class="mainnav__caption mt-0 px-3 fw-bold">Navigation</h6>
                <ul class="mainnav__menu nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link mininav-toggle"><i class="ti-home fs-5 me-2"></i>

                            <span class="nav-label mininav-content ms-1">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mainnav__categoriy mt-3">
                <h6 class="mainnav__caption mt-0 px-3 fw-bold">Referensi</h6>
                <ul class="mainnav__menu nav flex-column">
                    <li class="nav-item">
                        <a href="{{ url('hakakses') }}" class="nav-link mininav-toggle {{ (request()->is('hakakses')) ? 'active' : '' }}">
                            <i class="pli-arrow-through fs-5 me-2"></i>
                            <span class="nav-label mininav-content ms-1">Hak Akses</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mainnav__categoriy mt-3">
                <h6 class="mainnav__caption mt-0 px-3 fw-bold">Main</h6>
                <ul class="mainnav__menu nav flex-column">
                    <li class="nav-item">
                        <a href="{{ url('user') }}" class="nav-link mininav-toggle {{ (request()->is('user')) ? 'active' : '' }}">
                            <i class="pli-user fs-5 me-2"></i>
                            <span class="nav-label mininav-content ms-1">User</span>
                        </a>
                    </li>
                </ul>
                <ul class="mainnav__menu nav flex-column">
                    <li class="nav-item">
                        <a href="{{ url('invoice') }}" class="nav-link mininav-toggle {{ (request()->is('invoice')) ? 'active' : '' }}">
                            <i class="pli-file-bookmark fs-5 me-2"></i>
                            <span class="nav-label mininav-content ms-1">Invoice</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('transaksi') }}" class="nav-link mininav-toggle {{ (request()->is('transaksi')) ? 'active' : '' }}">
                            <i class="pli-file-bookmark fs-5 me-2"></i>
                            <span class="nav-label mininav-content ms-1">Transaksi</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mainnav__categoriy mt-3">
                <h6 class="mainnav__caption mt-0 px-3 fw-bold">Tracking</h6>
                <ul class="mainnav__menu nav flex-column">
                    <li class="nav-item">
                        <a href="{{ url('tracking') }}" class="nav-link mininav-toggle {{ (request()->is('tracking')) ? 'active' : '' }}">
                            <i class="pli-window-2 fs-5 me-2"></i>
                            <span class="nav-label mininav-content ms-1">Mutiple</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="mainnav__categoriy mt-3">
                <h6 class="mainnav__caption mt-0 px-3 fw-bold">More</h6>
                <ul class="mainnav__menu nav flex-column">
                    
                    <li class="nav-item has-sub">

                        <a href="#" class="mininav-toggle nav-link collapsed"><i
                                class="demo-pli-tactic fs-5 me-2"></i>
                            <span class="nav-label ms-1">Menu Levels</span>
                        </a>
                        
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
                    </li>
                </ul>
            </div>

        </div>

    </div>
</nav>
