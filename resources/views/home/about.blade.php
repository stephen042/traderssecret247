<!DOCTYPE html>
<html lang="zxx">

{{-- heead tag start --}}
@include('includes.home-head')
{{-- heead tag end --}}

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
                <h2>About Us</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="/">Home </a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Partner Section Start -->
    <div class="partner-wrap ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="section-title text-center mb-40">
                        <h2>Trust the Professionals</h2>
                    </div>
                </div>
            </div>

        </div>
        <!-- Partner Section End -->
        <!-- About Us Section Start -->
        <section class="about-wrap style1 pb-100">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-6 about-img-wrap">
                                <img src="{{ asset('home-assets/assets/img/about/about-shape-4.png') }}" alt="Image"
                                    class="about-shape-one bounce">
                                <div class="about-img">
                                    <img src="{{ asset('home-assets/assets/img/about/about-img-1.jpg') }}" alt="Image">
                                </div>
                                <div class="about-img">
                                    <img src="{{ asset('home-assets/assets/img/about/about-img-2.jpg') }}" alt="Image">
                                </div>
                            </div>
                            <div class="col-6 about-img-wrap lgm-70">
                                <img src="{{ asset('home-assets/assets/img/shape-1.png') }}" alt="Image" class="about-shape-two moveHorizontal">
                                <div class="about-img">
                                    <img src="{{ asset('home-assets/assets/img/about/about-img-3.jpg') }}" alt="Image">
                                </div>
                                <div class="about-img">
                                    <img src="{{ asset('home-assets/assets/img/about/about-img-4.jpg') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="content-title style1">
                                <span>ABOUT US</span>
                                <h2>Who We Are</h2>
                                <p>TradersSecret 247 LTD is a successful online trading and investment platform for
                                    brokers interested in Foreign Exchange, Stock Market Trading, and Cryptocurrency
                                    Trading. We give our users the potential to generate financial returns on both
                                    rising and falling prices across indices, FX, commodities, shares and
                                    cryptocurrencies.</p>

                                <p>We strive to help our clients make the most out of online trading by assisting them
                                    to access liquidity and manage risk effectively. Our comprehensive technology,
                                    state-of-the-art security encryption, and unparalleled network allow us to deliver
                                    an unforgettable trading experience.</p>
                            </div>
                            <div class="feature-item-wrap">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-hand-pointer-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Diversification</h3>
                                        <p>This is the main idea in general terms. We do not focus on mining one
                                            cryptocurrency. By analyzing future prices, we always choose the best way
                                            out</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-alarm-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Cloud Mining</h3>
                                        <p>The techniques we use to crypto-cloud mining give excellent results that we
                                            can pass on to our investors who do not have to do it themselves.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-settings-2-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Proven Infrastructure</h3>
                                        <p>We use the latest equipment, which, with a professionally selected
                                            configuration, allows you to achieve even higher results with a relatively
                                            low level of investment</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Section End -->


        <!-- Why Choose Section Start -->
        <section class="wh-wrap style3 ptb-100">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-1 order-md-2 order-2">
                        <div class="wh-content">
                            <div class="content-title style1">
                                <span>WHY CHOOSE US</span>
                                <h2>We are always ready for a challenge.</h2>
                                <p>TradersSecret 247 LTD is a successful online trading and investment platform for
                                    brokers interested in Foreign Exchange, Stock Market Trading, and Cryptocurrency
                                    Trading. We give our users the potential to generate financial returns on both
                                    rising and falling prices across indices, FX, commodities, shares and
                                    cryptocurrencies.</p>
                                <p>We strive to help our clients make the most out of online trading by assisting them
                                    to access liquidity and manage risk effectively. Our comprehensive technology,
                                    state-of-the-art security encryption, and unparalleled network allow us to deliver
                                    an unforgettable trading experience.</p>
                            </div>
                            <div class="feature-item-wrap">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-checkbox-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Experience</h3>
                                        <p>A wide selection of investment product to help build diversified portfolio.
                                        </p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-checkbox-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Wealth management</h3>
                                        <p>Dedicated financial consultant to help reach your own specific goals</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-checkbox-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Investment advisory</h3>
                                        <p>A wide selection of investing strategies from seasoned portfolio managers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-md-1 order-1">
                        <div class="wh-img-wrap">
                            <img src="{{ asset('home-assets/assets/img/shape-6.png') }}" alt="Image" class="wh-shape-one animationFramesTwo">
                            <img src="{{ asset('home-assets/assets/img/why-choose-us/wh-img-7.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Section End -->

        <!-- Counter Section start -->
        <div class="counter-wrap style1 pb-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-2">
                        <div class="section-title style1 text-center mb-40">
                            <span>SOME FUN FACTS</span>
                            <h2>We Always Try To Understand Customer's Expectation</h2>
                        </div>
                    </div>
                </div>
                <div class="counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-text">
                            <h2 class="counter-num">
                                <span class="odometer" data-count="170"></span>
                                <span class="target">K+</span>
                            </h2>
                            <p>Downloaded</p>
                        </div>
                    </div>
                    <div class="counter-card">
                        <div class="counter-text">
                            <h2 class="counter-num">
                                <span class="odometer" data-count="10"></span>
                                <span class="target">K+</span>
                            </h2>
                            <p>Feedback</p>
                        </div>
                    </div>
                    <div class="counter-card">
                        <div class="counter-text">
                            <h2 class="counter-num">
                                <span class="odometer" data-count="800"></span>
                                <span class="target">K+</span>
                            </h2>
                            <p>Workers</p>
                        </div>
                    </div>
                    <div class="counter-card">
                        <div class="counter-text">
                            <h2 class="counter-num">
                                <span class="odometer" data-count="20"></span>
                                <span class="target">+</span>
                            </h2>
                            <p>Years Of Ecperience</p>
                        </div>
                    </div>
                    <div class="counter-card">
                        <div class="counter-text">
                            <h2 class="counter-num">
                                <span class="odometer" data-count="30"></span>
                                <span class="target">K+</span>
                            </h2>
                            <p>Contributors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->


    </div>
    <!-- Content Wrapper End -->

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