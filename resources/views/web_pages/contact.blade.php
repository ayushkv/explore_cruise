@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(3); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <div class="breadcrumb-bar breadcrumb-bg-02 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row align-items-center row-gap-4">
                <div class="col-xl-7 col-lg-7">
                    <div class="mb-4 mb-lg-0">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="mb-3">Reach Out to Our Dedicated Support Team</h2>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h6 class="mb-2">Our team is ready to help. Your satisfaction is our priority</h6>
                            <p>Got a question, need advice, or looking for help? Our knowledgeable team is here to assist
                                you every step of the way. We’re just a message or call away, ready to provide the guidance
                                you need.</p>
                        </div>
                        <div class="border-bottom mb-4">
                            <div class="d-flex align-items-center mb-4">
                                <span class="avatar avatar-lg rounded-circle bg-light  text-gray-6 me-2"><i
                                        class="isax isax-sms5 fs-24"></i></span>
                                <div>
                                    <p class="fs-14 mb-0">Email Address</p>
                                    <h6 class="text-gray-6"><a href="mailto:{{ $company_info->comp_email1 }}">{{ $company_info->comp_email1 }}</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-4">
                            <div class="d-flex align-items-center mb-4">
                                <span class="avatar avatar-lg rounded-circle bg-light  text-gray-6 me-2"><i
                                        class="isax isax-call-calling5 fs-24"></i></span>
                                <div>
                                    <p class="fs-14 mb-0">Phone Number</p>
                                    <h6 class="text-gray-6"><a href="tel:{{ $company_info->comp_contact2 }}">{{ $company_info->comp_contact1 }}</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-lg rounded-circle bg-light  text-gray-6 me-2"><i
                                        class="isax isax-map-15 fs-24"></i></span>
                                <div>
                                    <p class="fs-14 mb-0">Our Location</p>
                                    <h6 class="text-gray-6"><a href="javascript:void(0);"
                                            class="__cf_email__">{{ $company_info->comp_address }}</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="card bg-light-200 shadow-none mb-0">
                        <div class="card-body">
                            <div class="mb-3">
                                <h2 class="mb-1">Get in Touch</h2>
                                <p class="text-gray-6 mb-1">How we can help you? Please write down your query</p>
                            </div>
                            @include('includes.contact_form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <?php //if(Session::get('contact_success')){ ?>
    <script>
        // $("#success_msg").html('{!! Session::get('contact_success') !!}');
        // $(".Thanku-alert").addClass('active');
        // $('.overlay').addClass('overlay_active');
        // $('body').addClass('overflow-hidden');
    </script>
    <?php //} ?>
@endsection
