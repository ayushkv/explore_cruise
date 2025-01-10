@extends('layouts.web_layout')
<?php $seo_data = App\Http\Controllers\HomeController::meta_info(9); ?>
@section('title')
    {{ $seo_data->oth_seo_title }}
@endsection
@section('content')
    <div class="breadcrumb-bar breadcrumb-bg-02 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Disclaimer</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Disclaimer</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
    <div class="container">
        <h3>Disclaimer</h3><br/>
        <p>
            Welcome to Explor Cruise! By accessing or using our website, you acknowledge and agree to the following disclaimer. Please read it carefully before using our services.
        </p>
        
        <h6 class="mb-2">1. General Disclaimer</h6>
        <p>
            The information provided on the Explor Cruise website is intended for general informational purposes only. We strive to ensure that the information provided is accurate, but we make no representations or warranties of any kind, either express or implied, regarding the completeness, accuracy, reliability, or availability of the content on our website.
        </p>

        <h6 class="mb-2">2. Travel Information</h6>
        <p>
            While we endeavor to provide up-to-date information on the destinations, itineraries, and travel services offered through our platform, travel details such as availability, prices, schedules, and terms are subject to change without notice. We recommend checking directly with the service providers for the most current information.
        </p>

        <h6 class="mb-2">3. Third-Party Websites</h6>
        <p>
            Our website may contain links to third-party websites that are not controlled by Explor Cruise. We are not responsible for the content, terms, or practices of any third-party websites. Accessing these links is at your own risk, and we encourage you to review the terms and privacy policies of any third-party websites you visit.
        </p>

        <h6 class="mb-2">4. Limitation of Liability</h6>
        <p>
            Explor Cruise shall not be liable for any loss, damage, injury, or inconvenience arising from your use of our website or the services provided through it, including any third-party services. This includes, but is not limited to, direct or indirect losses, damages resulting from booking errors, cancellations, or changes made by service providers.
        </p>

        <h6 class="mb-2">5. No Guarantees or Warranties</h6>
        <p>
            Explor Cruise makes no guarantees regarding the availability of services or the suitability of the services for your specific needs. All services provided by third parties (such as cruises, airlines, hotels, etc.) are subject to their own terms and conditions, and we are not responsible for the actions or omissions of third-party service providers.
        </p>

        <h6 class="mb-2">6. Accuracy of Content</h6>
        <p>
            Although we take reasonable steps to ensure the accuracy of the content on our website, errors or omissions may occur. Explor Cruise does not guarantee that the website will be free from errors, viruses, or interruptions. We are not responsible for any issues that may arise from the use of our website.
        </p>

        <h6 class="mb-2">7. User Responsibilities</h6>
        <p>
            As a user of our website, you are responsible for ensuring that the information you provide is accurate and up-to-date. You are also responsible for ensuring that you meet all travel requirements, such as necessary documentation (e.g., passports, visas), and comply with any laws and regulations related to your travel.
        </p>

        <h6 class="mb-2">8. Changes to the Disclaimer</h6>
        <p>
            Explor Cruise reserves the right to update, modify, or remove parts of this disclaimer at any time without prior notice. Any changes will be posted on this page, and the revised disclaimer will apply to all use of the website after the date of the update.
        </p>

        <h6 class="mb-2">9. Governing Law</h6>
        <p>
            This disclaimer is governed by and construed in accordance with the laws of the jurisdiction in which Explor Cruise operates. Any disputes arising from the use of the website will be subject to the exclusive jurisdiction of the courts in that jurisdiction.
        </p>

        <h6 class="mb-2">10. Contact Us</h6>
        <p>
            If you have any questions or concerns regarding this disclaimer, please contact us.
        </p>
    </div>
</div>

@endsection
