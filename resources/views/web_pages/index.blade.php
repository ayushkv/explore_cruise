@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(1); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <section class="hero-section-five">
        <div class="container">
            <div class="hero-content">
                <div class="row align-items-center">
                    <div class="col-md-12 mx-auto">
                        <div>

                        </div>
                        <div class="banner-content wow fadeInUp" data-wow-delay="0.3">
                            <h1 class="text-white display-5">Discover the World's Most Breathtaking Cruises</h1>
                            <h6 class="text-white mx-auto">Explore stunning destinations and world-class experiences aboard
                                our award-winning ships</h6>
                        </div>
                        <div class="banner-form card mb-0 wow fadeInUp" data-wow-delay="1.5">
                            <div class="card-body">
                                <div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="Cruise">
                                            @include('includes.lead-form')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section destination-section place-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-2">Explore Our <span class="text-primary  text-decoration-underline">Cruise
                                Types</span> </h2>
                        <p class="sub-title">Find the perfect cruise experience tailored to your unique interests and travel
                            style.</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel cruise-slider nav-center wow fadeInUp">
                <div class="cruise-type">
                    <img src="assets/img/cruise/cruise-15.jpg" alt="img">
                    <h6><a href="{{route("luxury_cruise")}}">Luxury Cruise</a></h6>
                </div>
                <div class="cruise-type">
                    <img src="assets/img/cruise/cruise-18.jpg" alt="img">
                    <h6><a href="{{route("adventure_cruise")}}">Adventure Cruise</a></h6>
                </div>
                <div class="cruise-type">
                    <img src="assets/img/sailing_cruise.webp" alt="img">
                    <h6><a href="{{route("sailing_cruise")}}">Sailing Cruise</a></h6>
                </div>
                <div class="cruise-type">
                    <img src="assets/img/cruise/cruise-19.jpg" alt="img">
                    <h6><a href="{{route("family_cruise")}}">Family Cruise</a></h6>
                </div>
                <div class="cruise-type">
                    <img src="assets/img/cruise/cruise-16.jpg" alt="img">
                    <h6><a href="{{route("river_cruise")}}">River Cruises</a></h6>
                </div>
                <div class="cruise-type">
                    <img src="assets/img/cruise/cruise-20.jpg" alt="img">
                    <h6><a href="{{route("world_cruise")}}">World Cruises</a></h6>
                </div>
            </div>
            <div class="text-center view-all wow fadeInUp">
                <a href="{{route("cruise_listing")}}" class="btn btn-primary">More Categories<i
                        class="isax isax-arrow-right-3 ms-2"></i></a>
            </div>
        </div>
    </section>

    <section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="years-off wow fadeInUp">
                            <h4 class="text-light">Explore the Seas with Us</h4>
                        </div>
                        <div class="discover-set-img-left wow fadeInDown">
                            <img src="assets/img/cruise/cruise-22.jpg" alt="Cruise Experience">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="discover-set-img-right wow zoomIn">
                            <img src="assets/img/cruise/cruise-21.jpg" alt="Luxury Cruise">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-header mb-4 wow fadeInUp">
                    <h2 class="mb-2">Discover <span class="text-primary text-decoration-underline">Who We Are</span></h2>
                    <p class="sub-title">At Explor Cruise, we are dedicated to making your cruise experience unforgettable. With extensive expertise in the cruise industry, we offer personalized vacation options to match every desire—from exhilarating adventures to tranquil getaways, and family-friendly excursions.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-3 wow fadeInUp">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/icons/extensive.svg" alt="Wide Range of Cruises">
                                    <div class="ms-2">
                                        <h6 class="fs-16 mb-2">Wide Selection of Cruise Options</h6>
                                        <p>We collaborate with leading cruise lines to bring you a variety of routes, ships, and onboard experiences, ensuring you find your perfect journey.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3 wow fadeInUp">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/icons/trust.svg" alt="Reliable Expertise">
                                    <div class="ms-2">
                                        <h6 class="fs-16 mb-2">Trustworthy Expertise</h6>
                                        <p>With years of experience in the cruise industry, our team is committed to offering you expert guidance and seamless service, ensuring your vacation is nothing short of perfect.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp">
                        <a href="{{route('about')}}" class="btn btn-primary">Learn More About Us <i class="isax isax-arrow-right-3 ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="section place-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-2">Popular <span
                                class="text-primary  text-decoration-underline">Destinations</span></h2>
                        <p class="sub-title">Embark on unforgettable journeys to the world's most sought-after cruise ports
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 ">
                    <div class="destination-set  wow fadeInUp">
                        <div class="destination-img">
                            <img src="assets/img/destination/destination-07.jpg" alt="Img">
                        </div>
                        <div
                            class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                            <h5 class="text-white fs-20 fw-semibold mb-1">Caribbean</h5>
                            <h6 class="text-light fs-16 fw-normal">100 Cruises</h6>
                        </div>
                        <div class="destination-btn">
                            <a href="{{route('cruise_booking')}}"> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="destination-set  wow fadeInDown">
                        <div class="destination-img">
                            <img src="assets/img/destination/destination-08.jpg" alt="Img">
                        </div>
                        <div
                            class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                            <h5 class="text-white fs-20 fw-semibold mb-1"> Canary Islands</h5>
                            <h6 class="text-light fs-16 fw-normal">300 Cruises</h6>
                        </div>
                        <div class="destination-btn">
                            <a href="{{route('cruise_booking')}}"> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="destination-set wow fadeInUp">
                        <div class="destination-img">
                            <img src="assets/img/destination/destination-09.jpg" alt="Img">
                        </div>
                        <div
                            class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                            <h5 class="text-white fs-20 fw-semibold mb-1">Mediterranean</h5>
                            <h6 class="text-light fs-16 fw-normal">200 Cruises</h6>
                        </div>
                        <div class="destination-btn">
                            <a href="{{route('cruise_booking')}}"> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="destination-set wow fadeInDown">
                        <div class="destination-img">
                            <img src="assets/img/destination/destination-10.jpg" alt="Img">
                        </div>
                        <div
                            class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                            <h5 class="text-white fs-20 fw-semibold mb-1">Northern Europe</h5>
                            <h6 class="text-light fs-16 fw-normal">250 Cruises</h6>
                        </div>
                        <div class="destination-btn">
                            <a href="{{route('cruise_booking')}}"> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="destination-set wow fadeInUp">
                        <div class="destination-img">
                            <img src="assets/img/destination/destination-11.jpg" alt="Img">
                        </div>
                        <div
                            class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                            <h5 class="text-white fs-20 fw-semibold mb-1">Alaska</h5>
                            <h6 class="text-light fs-16 fw-normal">370 Cruises</h6>
                        </div>
                        <div class="destination-btn">
                            <a href="{{route('cruise_booking')}}"> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="destination-set wow fadeInDown">
                        <div class="destination-img">
                            <img src="assets/img/destination/destination-12.jpg" alt="Img">
                        </div>
                        <div
                            class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                            <h5 class="text-white fs-20 fw-semibold mb-1">Panama Canal</h5>
                            <h6 class="text-light fs-16 fw-normal">180 Cruises</h6>
                        </div>
                        <div class="destination-btn">
                            <a href="{{route('cruise_booking')}}"> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="destination-set wow fadeInUp">
                        <div class="destination-img">
                            <img src="assets/img/destination/destination-13.jpg" alt="Img">
                        </div>
                        <div
                            class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                            <h5 class="text-white fs-20 fw-semibold mb-1">Hawaiian Islands</h5>
                            <h6 class="text-light fs-16 fw-normal">400 Cruises</h6>
                        </div>
                        <div class="destination-btn">
                            <a href="{{route('cruise_booking')}}"> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="destination-set wow fadeInDown">
                        <div class="destination-img">
                            <img src="assets/img/destination/destination-14.jpg" alt="Img">
                        </div>
                        <div
                            class="destination-content d-flex align-items-center justify-content-center flex-column w-100">
                            <h5 class="text-white fs-20 fw-semibold mb-1">British Isles</h5>
                            <h6 class="text-light fs-16 fw-normal">120 Cruises</h6>
                        </div>
                        <div class="destination-btn">
                            <a href="{{route('cruise_booking')}}"> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section destination-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-2">Search by <span
                                class="text-primary  text-decoration-underline">Destinations</span> Around the World </h2>
                        <p class="sub-title">DreamsTour Marketplace is a platform designed to connect fans with exclusive
                            experiences related to a specific tour</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel destination-slider nav-center">
                <div class="destination-item mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/destination/destination-01.jpg" alt="img">
                    <div class="destination-info text-center">
                        <div class="destination-content">
                            <h5 class="mb-1 text-white">Turkey</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="rating d-flex align-items-center me-2">
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </div>
                                <p class="fs-14 text-white">452 Reviews</p>
                            </div>
                        </div>
                        <div class="destination-overlay bg-white mt-2">
                            <div class="d-flex">
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-indigo">
                                            <i class="isax isax-airplane"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">35 Flights</h6>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-cyan">
                                            <i class="isax isax-buildings"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">20 Hotels</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-success">
                                            <i class="isax isax-ship"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">17 Cruises</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route("cruise_booking")}}" class="overlay-circle-link"><i
                            class="isax isax-arrow-right-1"></i></a>
                </div>
                <div class="destination-item mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/destination/destination-02.jpg" alt="img">
                    <div class="destination-info text-center">
                        <div class="destination-content">
                            <h5 class="mb-1 text-white">Thailand</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="rating d-flex align-items-center me-2">
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </div>
                                <p class="fs-14 text-white">400 Reviews</p>
                            </div>
                        </div>
                        <div class="destination-overlay bg-white mt-2">
                            <div class="d-flex">
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-indigo">
                                            <i class="isax isax-airplane"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">40 Flights</h6>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-cyan">
                                            <i class="isax isax-buildings"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">25 Hotels</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-success">
                                            <i class="isax isax-ship"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">18 Cruises</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route("cruise_booking")}}" class="overlay-circle-link"><i
                            class="isax isax-arrow-right-1"></i></a>
                </div>
                <div class="destination-item mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/destination/destination-03.jpg" alt="img">
                    <div class="destination-info text-center">
                        <div class="destination-content">
                            <h5 class="mb-1 text-white">Australia</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="rating d-flex align-items-center me-2">
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </div>
                                <p class="fs-14 text-white">400 Reviews</p>
                            </div>
                        </div>
                        <div class="destination-overlay bg-white mt-2">
                            <div class="d-flex">
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-indigo">
                                            <i class="isax isax-airplane"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">30 Flights</h6>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-cyan">
                                            <i class="isax isax-buildings"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">20 Hotels</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-success">
                                            <i class="isax isax-ship"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">10 Cruises</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route("cruise_booking")}}" class="overlay-circle-link"><i
                            class="isax isax-arrow-right-1"></i></a>
                </div>
                <div class="destination-item mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/destination/destination-04.jpg" alt="img">
                    <div class="destination-info text-center">
                        <div class="destination-content">
                            <h5 class="mb-1 text-white">Brazil</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="rating d-flex align-items-center me-2">
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </div>
                                <p class="fs-14 text-white">422 Reviews</p>
                            </div>
                        </div>
                        <div class="destination-overlay bg-white mt-2">
                            <div class="d-flex">
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-indigo">
                                            <i class="isax isax-airplane"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">21 Flights</h6>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-cyan">
                                            <i class="isax isax-buildings"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">15 Hotels</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-success">
                                            <i class="isax isax-ship"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">06 Cruises</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route("cruise_booking")}}" class="overlay-circle-link"><i
                            class="isax isax-arrow-right-1"></i></a>
                </div>
                <div class="destination-item mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/destination/destination-05.jpg" alt="img">
                    <div class="destination-info text-center">
                        <div class="destination-content">
                            <h5 class="mb-1 text-white">Canada</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="rating d-flex align-items-center me-2">
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </div>
                                <p class="fs-14 text-white">370 Reviews</p>
                            </div>
                        </div>
                        <div class="destination-overlay bg-white mt-2">
                            <div class="d-flex">
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-indigo">
                                            <i class="isax isax-airplane"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">33 Flights</h6>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-cyan">
                                            <i class="isax isax-buildings"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">27 Hotels</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-success">
                                            <i class="isax isax-ship"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">21 Cruises</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route("cruise_booking")}}" class="overlay-circle-link"><i
                            class="isax isax-arrow-right-1"></i></a>
                </div>
            </div>
            <div class="text-center view-all wow fadeInUp">
                <a href="{{route("cruise_booking")}}" class="btn btn-dark d-inline-flex align-items-center">View All Locations<i
                        class="isax isax-arrow-right-3 ms-2"></i></a>
            </div>
        </div>
    </section>
    <section class="section place-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-2">Featured <span class="text-primary  text-decoration-underline">Cruises</span>
                        </h2>
                        <p class="sub-title">Discover our handpicked selection of top-rated cruises, offering exceptional
                            experiences and unbeatable deals.</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel place-slider nav-center  wow fadeInUp">
                <div class="place-item border mb-4">
                    <div class="place-img">
                        <div class="img-slider image-slide owl-carousel nav-center">
                            <div class="slide-images">
                                    <img src="assets/img/cruise/cruise-01.jpg" class="img-fluid" alt="img">
                            </div>
                            <div class="slide-images">
                                    <img src="assets/img/cruise/cruise-02.jpg" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon selected">
                                <i class="isax isax-heart5"></i>
                            </a>
                            <span class="badge bg-info d-inline-flex align-items-center"><i
                                    class="isax isax-ranking me-1"></i>Trending</span>
                        </div>
                    </div>
                    <div class="place-content">
                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                            <h6 class="d-flex align-items-center">
                                <i class="isax isax-wifi me-2"></i>
                                <i class="isax isax-scissor me-2 "></i>
                                <i class="isax isax-profile-2user me-2 "></i>
                                <i class="isax isax-wind-2 me-2 "></i>
                                <a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a>
                            </h6>
                            <h5 class="text-primary">$500 <span class="fs-14 fw-normal text-default">/ day</span></h5>
                        </div>
                    </div>
                </div>
                <!-- /Place Item-->

                <!-- Place Item-->
                <div class="place-item border mb-4">
                    <div class="place-img">
                        <div class="img-slider image-slide owl-carousel nav-center">
                            <div class="slide-images">
                                    <img src="assets/img/cruise/cruise-02.jpg" class="img-fluid" alt="img">
                            </div>
                            <div class="slide-images">
                                    <img src="assets/img/cruise/cruise-03.jpg" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="isax isax-heart5"></i>
                            </a>
                            <span class="badge bg-info d-inline-flex align-items-center"><i
                                    class="isax isax-ranking me-1"></i>Trending</span>
                        </div>
                    </div>
                    <div class="place-content">
                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                            <h6 class="d-flex align-items-center">
                                <i class="isax isax-wifi me-2"></i>
                                <i class="isax isax-scissor me-2 "></i>
                                <i class="isax isax-profile-2user me-2 "></i>
                                <i class="isax isax-wind-2 me-2 "></i>
                                <a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a>
                            </h6>
                            <h5 class="text-primary">$350 <span class="fs-14 fw-normal text-default">/ day</span></h5>
                        </div>
                    </div>
                </div>
                <!-- /Place Item-->

                <!-- Place Item-->
                <div class="place-item border mb-4">
                    <div class="place-img">
                        <div class="img-slider image-slide owl-carousel nav-center">
                            <div class="slide-images">
                                    <img src="assets/img/cruise/cruise-03.jpg" class="img-fluid" alt="img">
                            </div>
                            <div class="slide-images">
                                    <img src="assets/img/cruise/cruise-04.jpg" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="isax isax-heart5"></i>
                            </a>
                            <span class="badge bg-info d-inline-flex align-items-center"><i
                                    class="isax isax-ranking me-1"></i>Trending</span>
                        </div>
                    </div>
                    <div class="place-content">
                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                            <h6 class="d-flex align-items-center">
                                <i class="isax isax-wifi me-2"></i>
                                <i class="isax isax-scissor me-2 "></i>
                                <i class="isax isax-profile-2user me-2 "></i>
                                <i class="isax isax-wind-2 me-2 "></i>
                                <a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a>
                            </h6>
                            <h5 class="text-primary">$700 <span class="fs-14 fw-normal text-default">/ day</span></h5>
                        </div>
                    </div>
                </div>
                <!-- /Place Item-->

                <!-- Place Item-->
                <div class="place-item border mb-4">
                    <div class="place-img">
                        <div class="img-slider image-slide owl-carousel nav-center">
                            <div class="slide-images">
                                    <img src="assets/img/cruise/cruise-04.jpg" class="img-fluid" alt="img">
                            </div>
                            <div class="slide-images">
                                    <img src="assets/img/cruise/cruise-01.jpg" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="isax isax-heart5"></i>
                            </a>
                            <span class="badge bg-info d-inline-flex align-items-center"><i
                                    class="isax isax-ranking me-1"></i>Trending</span>
                        </div>
                    </div>
                    <div class="place-content">
                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                            <h6 class="d-flex align-items-center">
                                <i class="isax isax-wifi me-2"></i>
                                <i class="isax isax-scissor me-2 "></i>
                                <i class="isax isax-profile-2user me-2 "></i>
                                <i class="isax isax-wind-2 me-2 "></i>
                                <a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a>
                            </h6>
                            <h5 class="text-primary">$550 <span class="fs-14 fw-normal text-default">/ day</span></h5>
                        </div>
                    </div>
                </div>
                <!-- /Place Item-->

                <!-- Place Item-->
                <div class="place-item border mb-4">
                    <div class="place-img">
                        <div class="img-slider image-slide owl-carousel nav-center">
                            <div class="slide-images">
                                    <img src="assets/img/cruise/cruise-01.jpg" class="img-fluid" alt="img">
                            </div>
                            <div class="slide-images">
                                    <img src="assets/img/cruise/cruise-02.jpg" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon selected">
                                <i class="isax isax-heart5"></i>
                            </a>
                            <span class="badge bg-info d-inline-flex align-items-center"><i
                                    class="isax isax-ranking me-1"></i>Trending</span>
                        </div>
                    </div>
                    <div class="place-content">
                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                            <h6 class="d-flex align-items-center">
                                <i class="isax isax-wifi me-2"></i>
                                <i class="isax isax-scissor me-2 "></i>
                                <i class="isax isax-profile-2user me-2 "></i>
                                <i class="isax isax-wind-2 me-2 "></i>
                                <a href="javascript:void(0);" class="fs-14 fw-normal text-default d-inline-block">+2</a>
                            </h6>
                            <h5 class="text-primary">$500 <span class="fs-14 fw-normal text-default">/ day</span></h5>
                        </div>
                    </div>
                </div>
                <!-- /Place Item-->
            </div>
            <!-- /Cruise List -->

            <div class="text-center view-all wow fadeInUp">
                <a href="{{route("cruise_booking")}}" class="btn btn-primary">View All<i
                        class="isax isax-arrow-right-3 ms-2"></i></a>
            </div>
        </div>
    </section>
    <section class="section place-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rating-feedback  wow zoomIn">
                        <div class="bg-div">
                            <img src="assets/img/bg/bg-02.png" class="bg-2" alt="img">
                        </div>
                        <ul>
                            <li>
                                <h6><i class="isax isax-global me-2"></i>Destinations Worldwide</h6>
                                <h4><span class="counter">30</span>+</h4>
                            </li>
                            <li>
                                <h6><i class="isax isax-calendar-2  me-2"></i>Booking Completed</h6>
                                <h4><span class="counter">6000</span> +</h4>
                            </li>
                            <li>
                                <h6><i class="isax isax-tag-user me-2"></i>Client Globally</h6>
                                <h4><span class="counter">100</span> +</h4>
                            </li>
                            <li>
                                <h6><i class="isax isax-status-up me-2"></i>Providers Registered</h6>
                                <h4><span class="counter">80</span> +</h4>
                            </li>
                        </ul>
                        <div class="bg-div">
                            <img src="assets/img/bg/bg-01.png" class="bg-1" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section faq-secpath">
    <div class="bg-div">
        <img src="assets/img/bg/bg-03.png" class="bg-3" alt="img">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq-five wow zoomIn">
                    <img src="assets/img/faq/faq.png" alt="img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-xl-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="section-header mb-4">
                            <p class="mb-1">Frequently Asked Questions</p>
                            <h2>Specializing in dream destinations.</h2>
                        </div>
                    </div>
                </div>
                <div class="accordion accordion-flush faq-accordion-five" id="accordionFaq">
                    <div class="accordion-item show mb-3 wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-collapseOne" aria-expanded="false"
                                aria-controls="faq-collapseOne">
                                What types of cruises do you offer?
                            </button>
                        </h2>
                        <div id="faq-collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p class="mb-0">We offer a variety of cruises including scenic, adventure, luxury, and family-friendly options. Popular destinations include the Caribbean, Mediterranean, and Alaska.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-collapsetwo" aria-expanded="false"
                                aria-controls="faq-collapsetwo">
                                Can I customize my cruise itinerary?
                            </button>
                        </h2>
                        <div id="faq-collapsetwo" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>Yes, we offer a selection of customizable itineraries to suit your travel preferences, including shore excursions, dining options, and onboard activities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-collapsthree" aria-expanded="false"
                                aria-controls="faq-collapsthree">
                                What safety precautions are in place onboard?
                            </button>
                        </h2>
                        <div id="faq-collapsthree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>Our cruises prioritize safety with strict protocols, including lifeboat drills, 24/7 medical teams, and safety equipment throughout the ship.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay="0.8s"
                        style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-collapsefour" aria-expanded="false"
                                aria-controls="faq-collapsefour">
                                When is the best time to book a cruise?
                            </button>
                        </h2>
                        <div id="faq-collapsefour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>We recommend booking your cruise at least 6 months in advance to secure the best rates and cabin availability, especially for peak travel seasons.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-delay="1.0s"
                        style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-collapsefive" aria-expanded="false"
                                aria-controls="faq-collapsefive">
                                What is the cancellation policy for my cruise?
                            </button>
                        </h2>
                        <div id="faq-collapsefive" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <p>Our cancellation policy varies based on the cruise line and booking type. Generally, cancellations made more than 30 days before departure are fully refundable, subject to terms.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    @include('includes.reviews')
    <section class="section getintouch pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="getintouch-div bg-dark wow zoomIn">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="getintouch-content pe-0">
                                    <h2 class="text-white mb-2">Ready to Sail? Get in Touch!</h2>
                                    <p class="text-light mb-4">Have questions about destinations, onboard experiences, or
                                        special offers? Our team is here to guide you. Reach out and let's make your next
                                        adventure unforgettable!</p>
                                    <a href="{{route("contact")}}" class="btn btn-white">Contact Us<i
                                            class="isax isax-arrow-right-3 ms-2"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="getintouch-img">
                                    <img src="assets/img/cruise/cruise-23.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
