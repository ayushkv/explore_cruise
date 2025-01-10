@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(6); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <div class="breadcrumb-bar breadcrumb-bg-02 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Privacy Policy</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
    <div class="container">
        <h3>Privacy Policy</h3><br/>
        <p>
            Welcome to Explor Cruise! By accessing or using our website and services, you agree to comply with and
            be bound by the following terms and conditions. Please read these carefully.
        </p>
        <h6 class="mb-2">1. Acceptance of Terms</h6>
        <p>
            By using our services, you confirm that you are at least 18 years old and have the legal capacity to enter
            into agreements.
        </p>
        <h6 class="mb-2">2. Services Offered</h6>
        <p>
            Explor Cruise provides a platform for booking travel-related services, including cruises, accommodations, and travel packages. All bookings are subject to availability.
        </p>
        <h6 class="mb-2">3. Pricing and Payments</h6>
        <div class="mb-4">
            <p class="mb-1">
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> Prices displayed on our website are
                subject to change and may not include taxes and fees.
            </p>
            <p class="mb-1">
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> Payment must be made in full at the time
                of booking. We accept various payment methods as specified on our site.
            </p>
            <p>
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> You are responsible for ensuring that your
                payment information is accurate.
            </p>
        </div>
        <h6 class="mb-2">4. Booking Modifications and Cancellations</h6>
        <div class="mb-4">
            <p class="mb-1">
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> Any modifications to bookings must be
                requested through customer support and are subject to applicable fees.
            </p>
            <p>
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> Cancellations are governed by the
                cancellation policies of the respective service providers (cruise lines, hotels, etc.). Please review their
                policies carefully before booking.
            </p>
        </div>
        <h6 class="mb-2">5. User Responsibilities</h6>
        <div>
            <p class="mb-1">
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> You agree to provide accurate and complete
                information during the booking process.
            </p>
            <p>
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> You are responsible for ensuring that you
                have the necessary travel documents (e.g., passports, visas) and comply with all relevant regulations.
            </p>
        </div>
        </br>
        <!-- Privacy Policy Section -->
        <h6 class="mb-2">6. Privacy Policy</h6>
        <p>
            Your privacy is important to us. This Privacy Policy outlines how Explor Cruise collects, uses, and protects your personal information when you visit our website and use our services.
        </p>
        <h6 class="mb-2">6.1 Information We Collect</h6>
        <p>
            We may collect personal information such as your name, email address, phone number, payment details, and travel preferences when you book services through our website.
        </p>
        <h6 class="mb-2">6.2 Use of Your Information</h6>
        <p>
            The information we collect is used to process bookings, communicate with you regarding your travel plans, and improve our services. We may also send you promotional emails or offers based on your preferences, which you can opt out of at any time.
        </p>
        <h6 class="mb-2">6.3 Data Security</h6>
        <p>
            We implement a variety of security measures to ensure the protection of your personal information. However, no method of data transmission over the internet is 100% secure, and we cannot guarantee its absolute security.
        </p>
        <h6 class="mb-2">6.4 Sharing Your Information</h6>
        <p>
            We do not sell or trade your personal information to third parties. However, we may share your information with trusted third-party service providers (such as cruise lines or hotels) to fulfill your booking requests or comply with legal requirements.
        </p>
        <h6 class="mb-2">6.5 Cookies and Tracking Technologies</h6>
        <p>
            Our website may use cookies to enhance your browsing experience. Cookies are small files stored on your device that help us understand your preferences and improve our services.
        </p>
        <h6 class="mb-2">6.6 Your Rights</h6>
        <p>
            You have the right to access, update, or delete the personal information we hold about you. To make any requests regarding your data, please contact our customer support team.
        </p>
        <h6 class="mb-2">6.7 Changes to the Privacy Policy</h6>
        <p>
            Explor Cruise reserves the right to update this Privacy Policy from time to time. Any changes will be posted on this page with the updated date. Please review this policy periodically to stay informed about how we are protecting your information.
        </p>
    </div>
</div>

@endsection
