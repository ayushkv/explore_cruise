@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(8); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <div class="breadcrumb-bar breadcrumb-bg-02 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Refund Policy</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Refund Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
    <div class="container">
        <h3>Refund Policy</h3><br/>
        <p>
            Welcome to Explor Cruise! We understand that plans can change, and we want to ensure that you are informed about our refund policies. Please read the following refund terms carefully.
        </p>
        <h6 class="mb-2">1. Refund Eligibility</h6>
        <p>
            Refunds may be available for certain bookings under specific circumstances. The eligibility for a refund depends on the service provider's cancellation policy and the timing of your cancellation request.
        </p>
        
        <h6 class="mb-2">2. Booking Cancellations</h6>
        <p>
            If you wish to cancel your booking, please contact our customer support team as soon as possible. Cancellations are subject to the terms and conditions of the respective service providers, such as cruise lines, hotels, and transportation services.
        </p>
        <p>
            In most cases, cancellations made after a certain period or within a non-refundable window will not be eligible for a refund. We strongly encourage you to review the service provider's cancellation policies at the time of booking.
        </p>

        <h6 class="mb-2">3. Non-Refundable Fees</h6>
        <p>
            Certain fees are non-refundable under all circumstances. These may include, but are not limited to, service fees, processing fees, or any other charges imposed by the service providers or our platform. Please ensure you are aware of these charges before confirming your booking.
        </p>

        <h6 class="mb-2">4. Refund Processing</h6>
        <p>
            If you are eligible for a refund, it will be processed according to the service provider’s refund policy. Please note that the processing time for refunds may vary depending on the provider. Refunds may take up to 30 business days to be processed and reflected in your account.
        </p>

        <h6 class="mb-2">5. Special Circumstances</h6>
        <p>
            In the event of special circumstances such as flight cancellations, health emergencies, or other unforeseen events, Explor Cruise will work with the service provider to process a refund or credit as applicable. Documentation may be required for such cases, and each situation will be assessed on a case-by-case basis.
        </p>

        <h6 class="mb-2">6. Refund Methods</h6>
        <p>
            Refunds will be issued using the same payment method used for the original booking, unless otherwise agreed upon. If the original payment method is no longer available, you will be contacted to arrange an alternative refund method.
        </p>

        <h6 class="mb-2">7. How to Request a Refund</h6>
        <p>
            To request a refund, please contact our customer support team with the following information:
        </p>
        <ul>
            <li>Booking reference number</li>
            <li>Your contact details</li>
            <li>Reason for cancellation/refund request</li>
        </ul>
        <p>
            Our team will review your request and assist you with the process. Please note that refunds are not guaranteed and are subject to the policies of the service providers.
        </p>

        <h6 class="mb-2">8. Changes to the Refund Policy</h6>
        <p>
            Explor Cruise reserves the right to update or modify this Refund Policy at any time. Any changes will be posted on this page, and the updated policy will apply to all bookings made after the date of the update. We encourage you to review this policy periodically.
        </p>

        <h6 class="mb-2">9. Contact Us</h6>
        <p>
            If you have any questions or concerns regarding our refund policy or need assistance with a refund request, please contact our customer support team.
        </p>
    </div>
</div>

@endsection
