@extends('base.app')
@section('main')

<div class="content__boxed">
    <div class="content__wrap">
        <div class="row">
            <div class="col-xl-12 mb-3">

                <div class="card h-100">
                    <div class="card-header d-flex align-items-center border-0">
                        <div class="me-auto">
                            <h3 class="h4 m-0">Network</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                        </div>
                        <div class="toolbar-end">
                            <button type="button" class="btn btn-icon btn-sm btn-hover btn-light" aria-label="Refresh Network Chart">
                                <i class="demo-pli-repeat-2 fs-5"></i>
                            </button>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-sm btn-hover btn-light" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Network dropdown">
                                    <i class="demo-pli-dot-horizontal fs-4"></i>
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item">
                                            <i class="demo-pli-file-csv fs-5 me-2"></i> Save as CSV
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-body mt-4">
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

@section('js')
@endsection
