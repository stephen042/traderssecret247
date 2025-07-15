<!DOCTYPE html>
<html lang="zxx">

{{-- head tag start --}}
@include('includes.home-head')
{{-- head tag end --}}

<body>
    <!--Preloader starts-->
    @include('includes.loader')
    <!--Preloader ends-->

    <!-- Theme Switcher Start -->
    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <!-- Theme Switcher End -->

    <!-- Header Section Start -->
    <!-- Header Section Start -->
    @include('includes.home-nav')
    <!-- Header Section End -->
    <!-- Header Section End -->

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Contact Us</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="/">Home </a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Us section Start -->
    <section class="contact-us-wrap ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="ri-map-pin-line"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Our Location</h3>
                            <p>207 Batchley Rd, Redditch, United Kingdom
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="ri-mail-send-line"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Email Us</h3>
                            <a href="mailto:support@traderssecret247.com">support@traderssecret247.com</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="contact-form">
                            <form class="form-wrap" id="contactForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name*" id="name" required=""
                                                data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" required="" placeholder="Email*"
                                                data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" placeholder="Phone*"
                                                id="phone_number" required=""
                                                data-error="Please enter your phone number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" placeholder="Subject*"
                                                id="msg_subject" required="" data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group v1">
                                            <textarea name="message" id="message" placeholder="Your Messages.."
                                                cols="30" rows="10" required=""
                                                data-error="Please enter your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check checkbox">
                                            <input name="gridCheck" value="I agree to the terms and privacy policy."
                                                class="form-check-input" type="checkbox" id="gridCheck" required="">
                                            <label class="form-check-label" for="gridCheck">
                                                I agree to the <a class="link style1" href="/terms">Terms
                                                    &amp; Conditions</a> and <a class="link style1"
                                                    href="/privacy-policy">Privacy Policy</a>
                                            </label>
                                            <div class="help-block with-errors gridCheck-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn style1">SEND MESSAGE<i
                                                class="ri-arrow-right-s-line"></i></button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="comp-map">
                            <iframe src="">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us section End -->

    <!-- Footer Section Start -->
    <!-- Footer Section Start -->
    @include('includes.home-footer')
    <!-- Footer Section End -->

    <!-- Footer Section end -->

    <!-- Page Wrapper End -->

    <!-- Back-to-top button Start -->
    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
    <!-- Back-to-top button End -->

    @include('includes.home-script')
</body>

</html>