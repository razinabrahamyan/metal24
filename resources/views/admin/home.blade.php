@extends('admin.layouts.app')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">

                <section id="dashboard-ecommerce">
                    <div class="row match-height">

                        <!-- Statistics Card -->
                        <div class="col-xl-12 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Statistics</h4>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text font-small-2 mr-25 mb-0">Updated 1 month ago</p>
                                    </div>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="media">
                                                <div class="avatar bg-light-primary mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">230k</h4>
                                                    <p class="card-text font-small-3 mb-0">Sales</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="media">
                                                <div class="avatar bg-light-info mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="user" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">8.549k</h4>
                                                    <p class="card-text font-small-3 mb-0">Customers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="media">
                                                <div class="avatar bg-light-danger mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="box" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">1.423k</h4>
                                                    <p class="card-text font-small-3 mb-0">Products</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12">
                                            <div class="media">
                                                <div class="avatar bg-light-success mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">$9745</h4>
                                                    <p class="card-text font-small-3 mb-0">Revenue</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>

                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/extensions/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
@endpush
@push('scripts')
        <script src="{{asset('admin/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
@endpush
