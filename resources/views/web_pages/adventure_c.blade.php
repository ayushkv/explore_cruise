@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(12); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Adventure Cruise</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Adventure Cruise</li>
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
                <h6 class="text-primary fs-14 fw-medium mb-2">Adventure Cruises</h6>
                <h2 class="display-6 mb-2">Explore the World Like Never Before</h2>
                <p class="mb-4">Adventure cruises offer an exciting and immersive way to explore some of the most remote and awe-inspiring destinations on Earth. Perfect for thrill-seekers and those who love to discover new horizons, these cruises are designed to take you off the beaten path and into the heart of nature’s most breathtaking landscapes. Whether you want to trek through rainforests, kayak along rugged coastlines, or witness incredible wildlife up close, an adventure cruise provides the perfect mix of excitement and exploration.</p>
                <div class="d-flex align-items-center mb-4">
                    </span>
                    <p>On an adventure cruise, you’ll experience the thrill of exploring wild and untamed destinations while enjoying the comforts and amenities of a modern cruise ship. With itineraries that take you to places few have the opportunity to visit, such as Antarctica, the Galapagos Islands, and the Amazon River, you’ll have the chance to engage in exhilarating activities that challenge both your mind and body. From snorkeling in crystal-clear waters to hiking glaciers, every day brings new adventures and opportunities for discovery.</p>
                </div>
                <div class="d-flex align-items-center">
                    </span>
                    <p>Adventure cruises cater to the intrepid traveler, offering a range of thrilling excursions and activities. You might find yourself kayaking through remote fjords, biking through ancient landscapes, or exploring hidden caves on a guided expedition. For those who crave a more active experience, there are often onboard experts, such as naturalists, historians, or geologists, who offer insightful talks and guided adventures, enhancing your understanding of the places you visit and making your journey even more rewarding.</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                    </span>
                    <p>While adventure is at the heart of these cruises, comfort is never compromised. You’ll have access to comfortable, well-appointed cabins with stunning views, giving you the perfect place to relax after an exciting day of exploration. Enjoy hearty meals that fuel your adventures, and unwind with relaxing onboard amenities like spas, fitness centers, and cozy lounges. Adventure cruises combine the best of both worlds—adventure on land and luxury at sea.</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                    </span>
                    <p>One of the most exciting aspects of adventure cruises is the opportunity for genuine cultural immersion. Whether you're visiting indigenous communities in the Arctic, sailing along the coastlines of Southeast Asia, or discovering the vibrant ecosystems of remote islands, these cruises provide an up-close look at the local cultures and environments. Engage with locals, enjoy authentic experiences, and take part in conservation efforts aimed at preserving these unique and precious places.</p>
                </div>
            </div>
            <div class="about-mission">
                <p class="fs-16 text-gray-6">Adventure cruises are more than just vacations—they are life-changing journeys. These cruises are for those who want to push their boundaries, experience the raw beauty of nature, and create memories that will last a lifetime. Whether you’re an experienced explorer or a first-time adventurer, there is no better way to discover the world than aboard an adventure cruise. Let Explor Cruise guide you to the perfect adventure cruise that will leave you with unforgettable stories to tell.</p>
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