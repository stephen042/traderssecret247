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
                    <h2>Terms &amp; Conditions</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="/">Home </a></li>
                        <li>Terms &amp; Conditions</li>
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
                            <h2>Terms & Conditions</h2>
                            <h4>1.Objectives</h4>
                            <p>It is the goal of TradersSecret 247 LTD, to help users enter and navigate the
                                cryptocurrency space, and provide tools to help users make their own sound decisions
                                relative to growing their wealth. Services are intended for medium- and long-term
                                investors.</p>
                            <h4>2.Activities</h4>
                            <h6>2.1 Account Creation</h6>
                            <p>TradersSecret 247 LTD will create the necessary crypto exchange accounts on behalf of, and
                                with permission of the user. Once account set-up is complete, users are provided with
                                the account credentials and password change instructions, at which point users will have
                                full control over their account. Users are the full and sole owner of their exchange
                                accounts and carry all responsibilities that come with opening, holding, and managing
                                such accounts.</p>
                            <h6>2.2 Asset allocation</h6>
                            <p>TradersSecret 247 LTD uses dynamic, proprietary algorithms to define and perform portfolio
                                allocation, based on user input. Manual trades or transactions conducted by users may
                                limit Crypto Time Finance Pro’s account monitoring and reporting ability.</p>
                            <h6>2.3 Fund deposits and withdrawals</h6>
                            <p>Users are responsible for depositing and withdrawing funds to/from their account, however
                                Crypto Time Finance Pro will provide clear instructions on how to do so.</p>
                            <h6>2.4 Account monitoring and reporting</h6>
                            <p>Crypto Time Finance Pro will continuously monitor user accounts and provide users with a
                                monthly dashboard with easy-to-understand portfolio and performance details.</p>
                            <h4>3.Fees</h4>
                            <h6>3.1 Fee structure</h6>
                            <p>TradersSecret 247 LTD offers different plans: freemium, and performance fee. The freemium
                                plan is totally free and offers limited functionality.

                                If you choose the performance fee plan, you pay a one-off set-up fee of Eur 59, after
                                which we won’t charge you anything until you hit 10% profit. The moment that happens
                                Crypto Time Finance Pro will charge you a 15% performance fee over the realized gains,
                                and the baseline is set to the portfolio value. For example: you invest Eur 5,000 and
                                after a while your portfolio is worth Eur 5,500 (10% profit). You will receive an
                                invoice for the amount of Eur 75 (500 profit * 15%), and the baseline is set to Eur
                                5,500. To hit 10% again, your portfolio needs to reach Eur 6,050 (5,500 + 10%).

                                Our customers especially like the no-profit-no-pay model as it means that Crypto Time
                                Finance Pro only gets paid if the customer wins. We like this also!

                            </p>
                            <h6>3.2 Promotions</h6>
                            <p>TradersSecret 247 LTD reserves the right to apply promotional discounts to the fees listed
                                under 3.1. This is completely at Crypto Time Finance Pro’s discretion.</p>
                            <h6>3.3 Other fees</h6>
                            <p>TradersSecret 247 LTD does not charge any additional or hidden fees. For any transaction
                                or trading fees that may be charged by cryptocurrency exchanges and/or banks, users
                                accept full responsibility.</p>

                            <h4>4.Risk</h4>
                            <p>TradersSecret 247 LTD does not charge any additional or hidden fees. For any transaction
                                or trading fees that may be charged by cryptocurrency exchanges and/or banks, users
                                accept full responsibility.</p>
                            <p>As with any market, for a transaction to happen it requires a seller, a buyer, and a
                                price agreement. Loss-limiting strategies such as stop-loss orders may not be effective
                                because market conditions or technological issues may make it impossible to execute
                                stop-loss orders. Crypto Time Finance Pro is not responsible for any losses incurred as
                                a result of using Crypto Time Finance Pro’s advisory services.</p>
                            <h4>5.Privacy</h4>
                            <p>TradersSecret 247 LTD is fully compliant with GDPR (General Data Protection Regulation),
                                an EU regulation enforceable as of May 25, 2018. Crypto Time Finance Pro stores the
                                minimum possible amount of user data necessary to deliver its services. Stored user data
                                includes: name, date of birth, country of residence, email address, and exchange API
                                keys (encrypted). User data will never be shared with any third party before explicit
                                user consent. Users have the right for their user data to be forgotten, which can be
                                requested over email.</p>

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