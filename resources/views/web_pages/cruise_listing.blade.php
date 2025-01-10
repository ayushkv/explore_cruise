@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(4); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <div class="breadcrumb-bar breadcrumb-bg-06 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Cruise</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cruise</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="banner-form">
                        @include('includes.lead-form')
                    </div>
                </div>
            </div>
            <!-- /Cruise Search -->

            <!-- Cruise Types -->
            <div class="mb-2">
                <div class="mb-3">
                    <h5 class="mb-2">Choose type of Cruise you are interested</h5>
                </div>
                <div class="row">
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{route("luxury_cruise")}}" class="avatar avatar-lg">
                                <img src="assets/img/cruise/cruise-04.jpg" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{route("luxury_cruise")}}">Luxury Cruise</a></h6>
                                <p class="fs-14">216 Cruises</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{route("adventure_cruise")}}" class="avatar avatar-lg">
                                <img src="assets/img/cruise/cruise-02.jpg" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{route("adventure_cruise")}}">Adventure Cruise</a></h6>
                                <p class="fs-14">569 Cruises</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{route("river_cruise")}}" class="avatar avatar-lg">
                                <img src="assets/img/cruise/cruise-03.jpg" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{route("river_cruise")}}">River Cruise</a></h6>
                                <p class="fs-14">129 Cruises</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="#" class="avatar avatar-lg">
                                <img src="assets/img/cruise/cruise-04.jpg" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{route("family_cruise")}}">Family Cruise</a></h6>
                                <p class="fs-14">150 Cruises</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{route("sailing_cruise")}}" class="avatar avatar-lg">
                                <img src="assets/img/cruise/cruise-05.jpg" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{route("sailing_cruise")}}">Sailing Cruises</a></h6>
                                <p class="fs-14">200 Cruises</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{route("world_cruise")}}" class="avatar avatar-lg">
                                <img src="assets/img/cruise/cruise-06.jpg" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{route("world_cruise")}}">World Cruises</a></h6>
                                <p class="fs-14">320 Cruises</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Cruise Types -->

            <div class="row">
                <div class="col-xl-12 col-lg-12 theiaStickySidebar">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
                                <div class="place-img">
                                    <a href="{{ route('cruise_details') }}">
                                        <img src="assets/img/lux_c.webp" class="img-fluid" alt="img">
                                    </a>
                                </div>
                                <div class="place-content">
                                    <h5 class="mb-1 text-truncate"><a href="{{route("luxury_cruise")}}">Luxury Cruise</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
                                <div class="place-img">
                                    <a href="{{ route('adventure_cruise') }}">
                                        <img src="assets/img/adv_c.webp" class="img-fluid" alt="img">
                                    </a>
                                </div>
                                <div class="place-content">
                                    <h5 class="mb-1 text-truncate"><a href="{{ route('adventure_cruise') }}">Adventure Cruise</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
                                <div class="place-img">
                                    <a href="{{ route('river_cruise') }}">
                                        <img src="assets/img/riv_c.webp" class="img-fluid" alt="img">
                                    </a>
                                </div>
                                <div class="place-content">
                                    <h5 class="mb-1 text-truncate"><a href="{{ route('river_cruise') }}">River Cruise</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
                                <div class="place-img">
                                    <a href="{{ route('family_cruise') }}">
                                        <img src="assets/img/fam_c.webp" class="img-fluid" alt="img">
                                    </a>
                                </div>
                                <div class="place-content">
                                    <h5 class="mb-1 text-truncate"><a href="{{ route('family_cruise') }}">Family Cruise</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
                                <div class="place-img">
                                    <a href="{{ route('sailing_cruise') }}">
                                        <img src="assets/img/cruise/cruise-12.jpg" class="img-fluid" alt="img">
                                    </a>
                                </div>
                                <div class="place-content">
                                    <h5 class="mb-1 text-truncate"><a href="{{ route('sailing_cruise') }}">Sailing Cruises</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
                                <div class="place-img">
                                    <a href="{{ route('world_cruise') }}">
                                        <img src="assets/img/cruise/cruise-09.jpg" class="img-fluid" alt="img">
                                    </a>
                                </div>
                                <div class="place-content">
                                    <h5 class="mb-1 text-truncate"><a href="{{ route('world_cruise') }}">World Cruises</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
