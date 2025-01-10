@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(16); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">World Cruise</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">World Cruise</li>
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
                <h6 class="text-primary fs-14 fw-medium mb-2">World Cruises</h6>
                <h2 class="display-6 mb-2">Embark on the Ultimate Journey Around the World</h2>
                <p class="mb-4">A world cruise is the pinnacle of adventure, offering the opportunity to explore multiple continents, cultures, and landscapes in one unforgettable journey. For those with a passion for travel and discovery, world cruises provide an immersive experience that spans the globe. From the vibrant cities of Europe to the ancient wonders of Asia and the pristine beaches of the South Pacific, a world cruise gives you the chance to visit some of the world’s most iconic destinations, all while enjoying the luxurious comforts of a world-class cruise ship.</p>
                <div class="d-flex align-items-center mb-4">
                    </span>
                    <p>World cruises typically span several months, taking you on an epic voyage that visits diverse destinations across multiple regions. Imagine cruising through the Mediterranean, traversing the Suez Canal, exploring the rich cultures of Southeast Asia, or discovering the natural beauty of South America. These cruises are designed for those who want to experience the world in all its variety, with each stop offering the opportunity to explore new cultures, historic landmarks, and awe-inspiring landscapes.</p>
                </div>
                <div class="d-flex align-items-center">
                    </span>
                    <p>Onboard a world cruise, you’ll enjoy an exceptional level of comfort and service, with every aspect of your journey carefully crafted to ensure a relaxing and luxurious experience. From spacious suites with breathtaking views to world-class dining options and personalized service, every detail is designed to make your journey as enjoyable as the destinations you visit. Onboard amenities may include spas, fitness centers, multiple dining venues, entertainment options, and enrichment programs that keep you engaged throughout the journey.</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                    </span>
                    <p>The sheer scale of a world cruise allows for unparalleled experiences both onboard and ashore. Excursions at each port of call are often carefully curated to provide authentic and memorable experiences, whether you’re visiting ancient ruins, taking in spectacular wildlife, or immersing yourself in local cultures. Shore excursions might include guided tours, wildlife safaris, cultural experiences, or relaxing beach days, ensuring that every day offers a new adventure and the chance to connect with the destinations you visit.</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                    </span>
                    <p>One of the most unique aspects of a world cruise is the chance to meet like-minded travelers who are embarking on the same epic adventure. Whether you’re making new friends over dinner, enjoying cultural performances together, or exploring a destination in a group, the camaraderie and shared experiences create bonds that last long after the cruise has ended. Additionally, many world cruises offer special onboard events, lectures, and activities that further enhance your journey, providing a deep dive into the places you visit and the cultures you encounter.</p>
                </div>
            </div>
            <div class="about-mission">
                <p class="fs-16 text-gray-6">A world cruise offers the ultimate way to explore the globe, combining the luxury of a cruise with the adventure of international exploration. For those seeking a once-in-a-lifetime experience, there’s no better way to see the world than aboard a world cruise. Let Explor Cruise guide you on this extraordinary journey, helping you choose the perfect world cruise that will allow you to create lasting memories and experience the world like never before.</p>
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