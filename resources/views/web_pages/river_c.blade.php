@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(13); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">River Cruise</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">River Cruise</li>
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
                <h6 class="text-primary fs-14 fw-medium mb-2">River Cruises</h6>
                <h2 class="display-6 mb-2">Sail Through the Heart of Beautiful Destinations</h2>
                <p class="mb-4">River cruises offer a serene and scenic way to explore the world's most iconic waterways. With the ability to glide through the heart of cities, towns, and landscapes that larger ocean ships cannot access, river cruises provide a unique, intimate, and enriching travel experience. Whether you are cruising along the Danube, the Nile, or the Mekong, a river cruise offers a front-row seat to some of the world’s most beautiful and culturally rich destinations, all while enjoying the comforts of a luxury cruise.</p>
                <div class="d-flex align-items-center mb-4">
                    </span>
                    <p>River cruises are perfect for travelers seeking a relaxing yet immersive journey, where each day brings new discoveries. From the romantic streets of Paris along the Seine to the ancient cities of Egypt along the Nile, these cruises provide unparalleled access to historic landmarks, charming villages, and lush landscapes. With smaller ships designed to navigate the narrow rivers, you’ll be able to explore places that are often inaccessible to larger vessels, offering an experience that’s personal, exclusive, and deeply connected to the destination.</p>
                </div>
                <div class="d-flex align-items-center">
                    </span>
                    <p>On a river cruise, you can enjoy spacious and beautifully designed cabins with panoramic views of the passing scenery. The onboard experience is designed to be both relaxing and enriching, with exceptional dining, wine tastings, and entertainment to complement your daily excursions. Whether you’re enjoying a gourmet dinner inspired by local cuisine, attending a cultural performance, or relaxing with a cocktail on the deck as you sail past stunning views, a river cruise offers a perfect balance of luxury and adventure.</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                    </span>
                    <p>Excursions are a major highlight of river cruises, with each stop offering opportunities to explore unique cultures and fascinating history. Visit quaint villages where time seems to stand still, explore UNESCO World Heritage sites, and experience the local flavors, crafts, and traditions. Many river cruise lines offer immersive shore excursions, such as guided city tours, wine tastings at local vineyards, and even cooking classes where you can learn to prepare regional dishes. Whether you’re discovering the medieval castles of Europe or the temples of Southeast Asia, every port of call promises a new adventure.</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                    </span>
                    <p>With a relaxed pace and more time spent in each port, river cruises allow you to truly immerse yourself in the places you visit. The smaller ships and close-knit atmosphere foster a sense of camaraderie and connection with fellow travelers, making it easy to forge new friendships while exploring the world’s most beautiful rivers. Whether you’re traveling alone, with a partner, or with family and friends, a river cruise offers an intimate and unforgettable way to see the world from a unique perspective.</p>
                </div>
            </div>
            <div class="about-mission">
                <p class="fs-16 text-gray-6">River cruises provide a perfect blend of relaxation, exploration, and cultural immersion. Whether you're sailing through Europe’s majestic waterways, cruising along the Amazon River, or discovering the rich history of Asia, each river cruise offers a one-of-a-kind journey. Let Explor Cruise guide you to the perfect river cruise that will take you through some of the most picturesque and historically rich locations in the world. Embark on a journey where every stop is an opportunity to discover something new and extraordinary.</p>
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