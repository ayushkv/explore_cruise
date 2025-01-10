@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(7); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <div class="breadcrumb-bar breadcrumb-bg-02 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Terms & Conditions</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
    <div class="container">
        <h3>Terms & Conditions</h3><br/>
        <p>
            Welcome to Explor Cruise! By accessing or using our website and services, you agree to comply with and
            be bound by the following terms and conditions. Please read these carefully.
        </p>
        <h6 class="mb-2">1. Acceptance of Terms</h6>
        <p>
            By using our services, you confirm that you are at least 18 years old and have the legal capacity to enter
            into agreements. If you are using the site on behalf of an organization, you represent that you have the authority to bind that organization to these terms.
        </p>
        <h6 class="mb-2">2. Services Offered</h6>
        <p>
            Explor Cruise provides a platform for booking travel-related services, including cruise bookings, hotels, transportation, and other travel experiences. All bookings are subject to availability and specific terms of service as provided by the individual service providers.
        </p>
        <h6 class="mb-2">3. Pricing and Payments</h6>
        <div class="mb-4">
            <p class="mb-1">
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> Prices displayed on our website are subject to change and may not include taxes, port fees, or other additional charges.
            </p>
            <p class="mb-1">
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> Payment must be made in full at the time of booking unless otherwise stated. We accept various payment methods as specified on our site.
            </p>
            <p>
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> You are responsible for ensuring that your payment information is accurate, and that sufficient funds are available to cover the booking costs.
            </p>
        </div>
        <h6 class="mb-2">4. Booking Modifications and Cancellations</h6>
        <div class="mb-4">
            <p class="mb-1">
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> Any modifications to bookings must be requested through customer support and are subject to applicable fees, availability, and service provider policies.
            </p>
            <p>
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> Cancellations are governed by the cancellation policies of the respective service providers (cruise lines, hotels, etc.). Please review their policies carefully before booking. Any cancellations may incur penalties as per the provider's policy.
            </p>
        </div>
        <h6 class="mb-2">5. User Responsibilities</h6>
        <div>
            <p class="mb-1">
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> You agree to provide accurate and complete information during the booking process, including personal and payment details.
            </p>
            <p>
                <i class="ti ti-square-rotated-filled text-primary me-2"></i> You are responsible for ensuring that you have the necessary travel documents (e.g., passports, visas) and comply with all relevant regulations related to your trip.
            </p>
        </div>
        </br>
        <h6 class="mb-2">6. Travel Insurance</h6>
        <p>
            We strongly recommend purchasing travel insurance to cover unexpected events, such as trip cancellations, medical emergencies, or lost baggage. Travel insurance is not included in the cost of your booking unless otherwise specified.
        </p>
        <h6 class="mb-2">7. Limitation of Liability</h6>
        <p>
            Explor Cruise acts only as an intermediary between the customer and the service providers. We are not responsible for any loss, injury, or damage arising from the use of services provided by third parties, including but not limited to cruise lines, hotels, airlines, or ground transportation providers.
        </p>
        
        <h6 class="mb-2">8. Force Majeure</h6>
        <p>
            Explor Cruise is not liable for any failure or delay in performing our obligations under these terms if such failure is due to causes beyond our reasonable control, including but not limited to natural disasters, strikes, wars, government regulations, or technical failures.
        </p>

        <h6 class="mb-2">9. Indemnification</h6>
        <p>
            You agree to indemnify, defend, and hold harmless Explor Cruise, its affiliates, partners, and employees from any claims, losses, liabilities, damages, or expenses (including legal fees) arising from your violation of these terms or your use of our services.
        </p>

        <h6 class="mb-2">10. Governing Law and Dispute Resolution</h6>
        <p>
            These terms are governed by the laws of the jurisdiction in which Explor Cruise is based. Any disputes arising from or in connection with these terms shall be resolved through binding arbitration in accordance with the rules of the applicable arbitration association.
        </p>

        <h6 class="mb-2">11. Changes to Terms</h6>
        <p>
            Explor Cruise reserves the right to update these Terms and Conditions at any time. Any changes will be posted on this page with the updated date. You are encouraged to review this page periodically for any updates.
        </p>
    </div>
</div>

@endsection
