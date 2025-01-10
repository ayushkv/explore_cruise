
<footer class="footer-five">
    <div class="container">
        <div class="footer-top">
            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1">
                <div class="col-lg-4">
                    <div class="footer-about">
                        <span class="d-block mb-2 footer-logo-light"><img src="assets/img/logo/logo.png" alt="Img"></span>
                        <span class="mb-2 footer-logo-dark"><img src="assets/img/logo/logo.png" alt="Img"></span>
                        <p class="mt-4">At ExplorCruise, we make booking your dream cruise effortless, offering a seamless and user-friendly experience. Explore breathtaking destinations, enjoy exceptional service, and embark on unforgettable journeys across the world’s most beautiful oceans.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Navigation</h5>
                        <ul class="footer-menu">
                            <li>
                                <a href="{{route("index")}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route("about")}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{route("cruise_listing")}}">Cruise</a>
                            </li>
                            <li>
                                <a href="{{route("cruise_booking")}}">Cruise Booking</a>
                            </li>
                            <li>
                                <a href="{{route("contact")}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h5>Policy</h5>
                        <ul class="footer-menu">
                            <li>
                                <a href="{{route("privacy_policy")}}">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="{{route("terms_condition")}}">Terms & Condition</a>
                            </li>
                            <li>
                                <a href="{{route("refund_policy")}}">Refund Policy</a>
                            </li>
                            <li>
                                <a href="{{route("disclaimer")}}">Disclaimer</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h5>Contact Info</h5>
                        <div class="customer-info">
                            <div class="customer-info-icon">
                                <span><i class="isax isax-call5"></i></span>
                            </div>
                            <div class="customer-info-content">
                                <span>Toll Free</span>
                                <h6><a href="tel:{{ $company_info->comp_contact2 }}">{{ $company_info->comp_contact1 }}</a></h6>
                            </div>
                        </div>
                        <div class="customer-info">
                            <div class="customer-info-icon">
                                <span><i class="isax isax-sms5"></i></span>
                            </div>
                            <div class="customer-info-content">
                                <span>Drop Us an Email</span>
                                <h6><a href="mailto:{{ $company_info->comp_email1 }}" class="__cf_email__">{{ $company_info->comp_email1 }}</a></h6>
                            </div>
                        </div>
                        <div class="customer-info">
                            <div class="customer-info-icon">
                                <span><i class="isax isax-location5"></i></span>
                            </div>
                            <div class="customer-info-content">
                                <span>location</span>
                                <h6><a href="javascript:void(0);" class="__cf_email__">{{ $company_info->comp_address }}</a></h6>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <p class="fs-14">Copyright &copy; 2025. All Rights Reserved, <a href="javascript:void(0);" class="text-primary fw-medium">Advology</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</footer>

<div class="modal fade" id="register-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="index.html">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Sign Up</h5>
                        <p class="mb-3">Create your DreamsTour Account</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Name</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-user"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg" placeholder="Enter Full Name">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Password</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-lock"></i>
                            </span>
                            <input type="password" class="form-control form-control-lg pass-input" placeholder="Enter Password">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Confirm Password</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-lock"></i>
                            </span>
                            <input type="password" class="form-control form-control-lg pass-input" placeholder="Enter Password">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mt-3 mb-3">
                        <div class="d-flex">
                            <div class="form-check d-flex align-items-center mb-2">
                                <input class="form-check-input mt-0" type="checkbox" value="" id="agree">
                                <label class="form-check-label ms-2 text-gray-9 fs-14" for="agree">
                                    I agree with the.<a href="javascript:void(0);" class="link-primary fw-medium">Terms Of Service.</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">Register<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                    <div class="login-or mb-3">
                        <span class="span-or">Or</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <a href="javascript:void(0);" class="btn btn-light flex-fill d-flex align-items-center justify-content-center me-2">
                            <img src="assets/img/icons/google-icon.svg" class="me-2" alt="Img">Google
                        </a>
                        <a href="javascript:void(0);" class="btn btn-light flex-fill d-flex align-items-center justify-content-center">
                            <img src="assets/img/icons/fb-icon.svg" class="me-2" alt="Img">Facebook
                        </a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fs-14">Already have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="change-password">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Change Password</h5>
                        <p class="mb-3">Enter Details to Change Password</p>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Password</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-lock"></i>
                            </span>
                            <input type="password" class="form-control form-control-lg pass-input" placeholder="Enter Password">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-lock"></i>
                            </span>
                            <input type="password" class="form-control form-control-lg pass-input" placeholder="Enter Password">
                            <span class="input-icon-addon toggle-password">
                                <i class="isax isax-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-0">
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#login-password">Change Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="forgot-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x fs-20"></i></a>
            </div>
            <div class="modal-body p-4 pt-0">
                <form action="#">
                    <div class="text-center border-bottom mb-3">
                        <h5 class="mb-1">Forgot Password</h5>
                        <p>Reset Your DreamsTour Password</p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Email</label>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="isax isax-message"></i>
                            </span>
                            <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#change-password">Reset Password<i class="isax isax-arrow-right-3 ms-2"></i></button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="fs-14">Remember Password ? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="xb-cursor tx-js-cursor">
    <div class="xb-cursor-wrapper">
        <div class="xb-cursor--follower xb-js-follower"></div>
    </div>
</div>
<div class="back-to-top">
    <a class="back-to-top-icon align-items-center justify-content-center d-flex" href="#top"><i class="fa-solid fa-arrow-up"></i></a>
</div>
<div class="Thanku-alert">
    <div class="close_model close"><svg stroke="currentColor" fill="#000" stroke-width="0" viewBox="0 0 16 16"
            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path fill="#000" fill-rule="evenodd" clip-rule="evenodd"
                d="M7.116 8l-4.558 4.558.884.884L8 8.884l4.558 4.558.884-.884L8.884 8l4.558-4.558-.884-.884L8 7.116 3.442 2.558l-.884.884L7.116 8z">
            </path>
        </svg></div>
    <figure><img src="{{ asset('/assets/img/logo/ec_logo2.png') }}" alt=""></figure>
    <div class="inner-wrap" id="success_msg">
        {{-- message from session will be print here --}}
    </div>
</div>
<div class="overlay"></div>



<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.meanmenu.min.js?v10"></script>
<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/plugins/moment/moment.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/script.js?v25"></script>
