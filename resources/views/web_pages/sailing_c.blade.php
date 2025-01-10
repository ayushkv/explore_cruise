@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(15); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Sailing Cruise</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sailing Cruise</li>
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
            <div class="col-lg-12">
               <div class="card">
                <div class="card-body">
                    <div class="banner-form">
                        @include('includes.lead-form')
                    </div>
                </div>
            </div>
                <div class="about-content mb-4">
                    </br>
                <h6 class="text-primary fs-14 fw-medium mb-2">Sailing Cruises</h6>
                <h2 class="display-6 mb-2">Set Sail on a Classic Adventure</h2>
                <p class="mb-4">Sailing cruises offer a unique and timeless way to explore the seas, combining the romance of traditional sailing with the luxury of modern cruise experiences. For those who dream of feeling the wind in their hair and the saltwater breeze, sailing cruises provide an unforgettable way to discover hidden coves, secluded beaches, and charming coastal towns. Whether you are a seasoned sailor or a first-time cruiser, there is something incredibly special about exploring the world aboard a majestic sailing ship.</p>
                <div class="d-flex align-items-center mb-4">
                    </span>
                    <p>A sailing cruise offers an intimate and personalized experience, with smaller ships that can access destinations larger cruise liners cannot reach. Sail through beautiful and remote destinations, from the sparkling turquoise waters of the Caribbean to the rugged coastlines of the Mediterranean. The experience is enhanced by the artistry and adventure of sailing, giving you the opportunity to learn about traditional seafaring while enjoying the comforts and luxuries of a modern cruise.</p>
                </div>
                <div class="d-flex align-items-center">
                    </span>
                    <p>On a sailing cruise, you can enjoy the thrill of navigation as the crew hoists the sails, or simply relax and watch the world go by. Many sailing cruises offer a hands-on experience, where guests can participate in sailing activities, learning the ropes and techniques of traditional sailing. The smaller, more intimate nature of these cruises allows for a more personalized experience, with more attention to detail, exceptional service, and the opportunity to forge connections with fellow passengers. Whether you choose to relax on deck with a cocktail or get involved in the sailing process, every moment on board feels special.</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                    </span>
                    <p>Accommodation on sailing cruises is designed to blend comfort and style with the adventure of life at sea. Expect elegant cabins with ocean views, many featuring private balconies where you can enjoy the serene beauty of the sea. Dining is often a relaxed yet refined affair, with meals crafted using fresh, local ingredients and accompanied by a selection of fine wines. The onboard experience may also include special themed nights, cooking classes, and cultural performances that reflect the destinations you’ll be visiting.</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                    </span>
                    <p>Shore excursions on a sailing cruise are equally extraordinary. Because of the ship’s smaller size, you can access hidden gems—quaint villages, secret beaches, and picturesque coves—that are often untouched by mass tourism. Explore these destinations through intimate excursions like guided hikes, snorkeling trips, or leisurely strolls through local markets. Whether you’re swimming in crystal-clear waters, exploring historic towns, or simply soaking in the beauty of the coast, every stop promises a unique and unforgettable adventure.</p>
                </div>
            </div>
            <div class="about-mission">
                <p class="fs-16 text-gray-6">A sailing cruise offers a perfect blend of adventure, relaxation, and discovery. Experience the freedom of the open sea, the thrill of sailing, and the charm of exploring hidden destinations in a more intimate and personalized way. With the perfect balance of luxury and adventure, a sailing cruise provides an unforgettable voyage that appeals to travelers seeking a unique and authentic experience. Let Explor Cruise help you plan your next sailing adventure and set sail on a journey like no other.</p>
            </div>

            </div>
        </div>
        <div class="about-bg d-none d-md-block">
            <img src="assets/img/bg/about-bg.png" alt="img" class="about-bg-01">
        </div>
        <div class="about-bg-1 d-none d-md-block">
            <!--<img src="assets/img/bg/about-arrow.png" alt="img" class="about-bg-01">-->
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