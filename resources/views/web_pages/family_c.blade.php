@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(14); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Family Cruise</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Family Cruise</li>
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
                <h6 class="text-primary fs-14 fw-medium mb-2">Family Cruises</h6>
                <h2 class="display-6 mb-2">Fun-Filled Adventures for the Whole Family</h2>
                <p class="mb-4">Family cruises are the perfect way to create lasting memories with your loved ones while enjoying a vacation that caters to all ages. Whether you’re planning a relaxing getaway or an adventurous voyage, family cruises are designed to provide something for everyone, from thrilling activities for kids to serene spaces for adults. These cruises offer a unique opportunity for families to bond, explore new destinations, and enjoy quality time together, all while experiencing exceptional service and amenities onboard.</p>
                <div class="d-flex align-items-center mb-4">
                    </span>
                    <p>On a family cruise, each member of the family can enjoy a wide range of activities and experiences that cater to their interests and needs. Kids can dive into fun-filled adventures at onboard kids' clubs, waterparks, and movie theaters, while teens can enjoy their own dedicated spaces for games, socializing, and entertainment. For adults, there are luxurious spa treatments, fine dining, and relaxing lounges where you can unwind while the children are occupied with exciting activities. Everyone gets to enjoy the best of both worlds—fun for the kids and relaxation for the adults.</p>
                </div>
                <div class="d-flex align-items-center">
                    </span>
                    <p>Family cruises are perfect for exploring new destinations with the entire family. From sandy beaches and tropical islands to bustling cities and ancient landmarks, there’s no shortage of exciting destinations to explore. Families can embark on shore excursions designed to be fun and educational for everyone, such as guided tours of historical sites, wildlife encounters, or family-friendly hiking adventures. With a family cruise, each port of call offers a chance to discover something new and exciting together as a family.</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                    </span>
                    <p>Onboard, families can enjoy spacious cabins and suites designed with comfort and convenience in mind. Many cruise lines offer family-friendly accommodations with additional space, separate sleeping areas for kids, and special perks like kids’ amenities and family packages. Meals are also family-friendly, with dining options that cater to all tastes, including kid-friendly menus and themed dining experiences that make mealtimes fun and engaging. Whether you’re dining together as a family or enjoying a romantic evening out, there are dining options to suit every need.</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                    </span>
                    <p>Many cruise lines also offer family-oriented entertainment, from Broadway-style shows and live music to interactive games and themed parties. You’ll never run out of things to do as a family, with activities like cooking classes, family trivia, or talent shows. For those who prefer a quieter experience, there are family movie nights under the stars, board games, or simply relaxing by the pool. Whatever your interests, family cruises ensure everyone has an exciting and enjoyable experience, together.</p>
                </div>
            </div>
            <div class="about-mission">
                <p class="fs-16 text-gray-6">A family cruise is the ultimate way to experience a vacation that’s tailored to everyone. Whether you're traveling with toddlers, teens, or grandparents, a family cruise offers activities, entertainment, and experiences for every member of your family to enjoy. Let Explor Cruise help you plan the perfect family vacation with a cruise that will create unforgettable memories and bring your family closer together.</p>
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