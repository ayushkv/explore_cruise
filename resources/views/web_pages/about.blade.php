@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(2); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

   <!-- About Section -->
<section class="section about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image mb-4 mb-lg-0">
                    <div class="about-img">
                        <img src="assets/img/cruise_n.png" alt="about">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content mb-4">
                    <h6 class="text-primary fs-14 fw-medium mb-2">About Explor Cruise</h6>
                    <h2 class="display-6 mb-2">Your Gateway to Unforgettable Cruise Experiences!</h2>
                    <p class="mb-4">At Explor Cruise, we are passionate about making your cruise vacation extraordinary. Whether you're looking for a relaxing getaway or an adventure at sea, we provide a seamless online booking experience to help you find the perfect cruise that suits your needs and preferences.</p>
                    <div class="d-flex align-items-center mb-4">
                        <span class="avatar avatar-xl bg-primary rounded-circle flex-shrink-0 me-3">
                            <i class="isax isax-map5 fs-24"></i>
                        </span>
                        <p>Our customers primarily book cruises to various popular destinations around the world, with a special focus on the Caribbean, Mediterranean, and Asia.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="avatar avatar-xl bg-secondary rounded-circle flex-shrink-0 me-3">
                            <i class="isax isax-trade5 fs-24 text-gray-9"></i>
                        </span>
                        <p>We partner with leading cruise lines to offer the best prices and exclusive packages for a wide range of cruises, from luxury liners to family-friendly adventures.</p>
                    </div>
                </div>
                <div class="about-mission">
                    <h6 class="text-primary fs-14 fw-medium mb-3">Our Mission</h6>
                    <p class="fs-16 text-gray-6">Our mission is to make booking cruises as easy and enjoyable as the cruise itself. We strive to offer an intuitive platform with personalized recommendations, ensuring you have a stress-free booking process and an unforgettable journey at sea.</p>
                </div>
            </div>
        </div>
        <div class="about-bg d-none d-md-block">
            <img src="assets/img/bg/about-bg.png" alt="img" class="about-bg-01">
        </div>
        <div class="about-bg-1 d-none d-md-block">
            <img src="assets/img/bg/about-arrow.png" alt="img" class="about-bg-01">
        </div>
    </div>
</section>
<!-- /About Section -->

<!-- Why Choose Us -->
<section class="section choose-us-section">
    <div class="container">
        <div class="choose-title">
            <h2>Why Choose <span class="text-primary">Explor Cruise?</span></h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-3">
                <div class="choose-card">
                    <div class="choose-icon mb-3">
                        <span class="rounded-circle d-flex align-items-center justify-content-center"><i
                                class="isax isax-archive-tick text-white"></i></span>
                    </div>
                    <div class="card-content">
                        <h6 class="mb-2">Convenience</h6>
                        <p class="fs-16 text-gray-6">Book your entire cruise vacation from one platform, saving you time and effort. No need to visit multiple websites, we have it all covered.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="choose-card">
                    <div class="choose-icon mb-3">
                        <span class="rounded-circle d-flex align-items-center justify-content-center"><i
                                class="isax isax-dollar-square text-white"></i></span>
                    </div>
                    <div class="card-content">
                        <h6 class="mb-2">Best Price Guarantee</h6>
                        <p class="fs-16 text-gray-6">We work with top cruise lines to offer the best deals and exclusive discounts on your next cruise, ensuring you get the best value for your money.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="choose-card">
                    <div class="choose-icon mb-3">
                        <span class="rounded-circle d-flex align-items-center justify-content-center"><i
                                class="isax isax-headphone text-white"></i></span>
                    </div>
                    <div class="card-content">
                        <h6 class="mb-2">Customer Support</h6>
                        <p class="fs-16 text-gray-6">Our expert cruise consultants are available 24/7 to assist you with any questions or special requests to make your cruise booking experience smooth and stress-free.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="choose-card">
                    <div class="choose-icon mb-3">
                        <span class="rounded-circle d-flex align-items-center justify-content-center"><i
                                class="isax isax-map text-white"></i></span>
                    </div>
                    <div class="card-content">
                        <h6 class="mb-2">Tailored Cruise Experiences</h6>
                        <p class="fs-16 text-gray-6">Whether you're looking for a luxury cruise, family vacation, or an adventure at sea, we offer personalized recommendations to suit every traveler's needs.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose-bg-01">
            <img src="assets/img/bg/about-bg-stars-bottom.png" alt="image" class="img-fluid">
        </div>
        <div class="choose-bg-01">
            <img src="assets/img/bg/about-bg-stars-bottom.png" alt="image" class="img-fluid">
        </div>
        <div class="choose-bg-02">
            <img src="assets/img/bg/about-bg-stars-top.png" alt="image" class="img-fluid">
        </div>
    </div>
</section>
<!-- /Why Choose Us -->

    @include('includes.reviews')
@endsection
