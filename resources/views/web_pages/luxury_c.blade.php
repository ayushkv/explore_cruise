@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(11); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Luxury Cruise</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Luxury Cruise</li>
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
                    <h6 class="text-primary fs-14 fw-medium mb-2">Luxury Cruises</h6>
                    <h2 class="display-6 mb-2">The Ultimate Cruise Experience</h2>
                    <p class="mb-4">Step aboard a luxury cruise and embark on a journey of unparalleled elegance and comfort. Luxury cruises offer more than just a vacation; they are a unique opportunity to explore the world in style, with exquisite service, world-class amenities, and unforgettable experiences at every port of call. Whether you're seeking relaxation, adventure, or cultural immersion, a luxury cruise provides an exceptional blend of sophistication and excitement that few other vacations can match.</p>
                    <div class="d-flex align-items-center mb-4">
                        </span>
                        <p>On a luxury cruise, every detail is designed to make you feel pampered and relaxed. From the moment you step on board, you’ll be surrounded by luxurious accommodations, gourmet dining, personalized service, and a host of exclusive amenities. Relax by the pool with a cocktail in hand, unwind at the spa, or indulge in private excursions tailored to your interests. Whether you’re enjoying a quiet evening in your suite, attending a world-class show, or exploring an exotic destination, you’ll be treated to an experience that is nothing short of extraordinary.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        </span>
                        <p>Luxury cruise ships are floating resorts, offering everything you need for an unforgettable vacation. With spacious staterooms and suites, many featuring private balconies, you can enjoy stunning ocean views in absolute comfort. Fine dining experiences, prepared by Michelin-star chefs, provide a culinary journey that rivals the world’s top restaurants. State-of-the-art facilities, such as fitness centers, swimming pools, and elegant lounges, ensure your time on board is filled with relaxation and entertainment.</p>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        </span>
                        <p>One of the most remarkable aspects of a luxury cruise is the exceptional level of service. With a crew-to-guest ratio that is among the highest in the industry, you can expect personalized attention at every turn. Whether you need assistance with planning shore excursions, have a special request, or simply want to enjoy your vacation without a care in the world, the dedicated staff will ensure your every need is met. The concierge service is available to help with everything from booking a private yacht to arranging a personalized shore experience in the most exotic locations.</p>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        </span>
                        <p>Luxury cruises also offer an array of enrichment programs and experiences, from cooking classes and wine tastings to art exhibitions and lectures by renowned experts. These activities allow you to expand your horizons while enjoying the finest amenities at sea. In addition, luxury cruise lines often partner with local experts to provide immersive cultural experiences during your shore excursions. Explore ancient ruins, visit vibrant local markets, or take a guided tour through historic cities—all while enjoying the comforts of luxury on board.</p>
                    </div>
                </div>
                <div class="about-mission">
                    <p class="fs-16 text-gray-6">A luxury cruise is more than just a way to see the world—it’s an experience that enriches the mind, body, and soul. With an emphasis on service, luxury, and exploration, every voyage offers something extraordinary. Let us take you on a journey where the ocean is your backdrop, the world is your destination, and luxury is at your fingertips. Choose Explor Cruise to find the perfect luxury cruise and set sail on a journey that will exceed your expectations.</p>
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