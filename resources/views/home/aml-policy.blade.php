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

    <!-- Page Wrapper End -->
    <div class="page-wrapper">


        <!-- Content Wrapper Start -->


        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f br-1">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>AML policy</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="/">Home </a></li>
                        <li>AML policy</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Terms Section start -->
        <section class="terms-wrap pt-100 pb-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="single-terms">
                            <h2>Anti-Money Laundering Policy</h2>
                            <h4>Introduction</h4>
                            <p> TradersSecret 247 LTD is wholly committed to the fight against money laundering. As part
                                of our commitment to combat and eliminate money laundering, we have implemented an
                                educational program for all personnel to complete during their initial training. This
                                program focuses on the fundamentals of Anti-Money Laundering (AML) and our internal
                                Compliance Procedures.</p>
                            <p>Having successfully completed the internal program, all clients are required to read,
                                acknowledge and act in accordance with TradersSecret 247 LTD’s “Anti-Money Laundering &
                                Compliance Procedures Manual.<br>
                            <h4>Definition</h4>
                            <p>Money laundering is the term used for the concealment of illegally obtained money,
                                typically by means of transfers involving foreign banks and legitimate financial
                                institutions.
                            <h4>Principles</h4>
                            <p>The key principles of the “Anti-Money Laundering Statement” are that:<br>
                            <p>* TradersSecret 247 LTD will maintain a written document of AML policy and procedures and
                                a system of internal controls to ensure ongoing AML compliance by a designated person(s)
                                and to take appropriate action, once suspicious activity is detected.<br>
                            <p>* TradersSecret 247 LTD will comply with applicable anti-money laundering & terrorist
                                financing laws and regulations wherever possible.<br>
                            <p>* TradersSecret 247 LTD’s anti-money laundering policies apply to all business units and
                                departments.<br>
                            <p>* TradersSecret 247 LTD will cooperate fully with law enforcement and regulatory agencies
                                to the extent that it can do so under all applicable laws in the event that there is
                                cause to believe that a breach in AML procedures has occurred.<br>
                            <p>*Should you have any further questions regarding the Anti-Money Laundering policy, email
                                our support team or contact us via our online chat for further clarification or
                                assistance.<br>


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Terms Section end -->

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