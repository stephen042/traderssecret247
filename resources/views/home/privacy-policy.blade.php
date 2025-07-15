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
                    <h2>Privacy & Policy</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="/">Home </a></li>
                        <li>Privacy & Policy</li>
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
                            <h2>Privacy Policy</h2>
                            <p>Introduction</p>
                            <p>The same as most online companies, Momentum Markets LTD the importance of our client’s
                                privacy. As a financial services firm, we must obtain certain personal and financial
                                information from the client, in order to setup and service the client accounts.</p>
                            <p>Momentum Markets LTD makes use of the client’s personal and financial information
                                exclusively for the following purposes:
                                <br>
                                * Verification of the client’s identity<br>
                                * Account set up, maintenance and management of client accounts<br>
                                * Processing deposits into client’s trading accounts and facilitating of withdrawals to
                                the clients wallet or bank account<br>
                                * Informing the client about news, updates, promotions and additional products and
                                services that may be of interest and at times offered by third party providers unless
                                you have opted not to receive such information<br>
                                * Providing the client with the best quality of customer support<br>
                                Momentum Markets LTD will never use, disclose, sell, rent or lease the client’s personal
                                and financial information to any third parties except those stated in “Disclosure of
                                Client’s Personal Information”. Profits, transaction history, net worth or income
                                information will not be shared by the Company under any circumstances.
                            </p>
                            <p>Disclosure of client's personal information<br>

                                Momentum Markets LTD may disclose the client’s personal information to third-party
                                entities in the following cases:<br>

                                * to the Company’s affiliates according to the required extent, mainly for the
                                calculation of their compensation.<br>
                                * to the Company’s partner network offering third party withdrawal related services
                                given that they agree to the non-disclosure of your data.<br>
                                * to persons holding a legal or beneficial interest relating to the client’s trading
                                account.<br>
                                * to persons acting in a judiciary, representative, or attorney capacity in relation to
                                the client’s trading account, in order to protect against fraud, money laundering,
                                unauthorized transactions, claims or other liabilities.<br>
                                * to government, regulatory or law enforcement agencies to the extent permitted or
                                required by law, or to comply with applicable legal requirements.<br>
                                * to comply with civil, criminal or regulatory investigations, judicial process, summons
                                or warrant by appropriate authorities.</p>
                            <p>Information collected from the client<br>

                                The Company collects personal and financial information from the client under the
                                circumstances stated below:<br>

                                * When opening a Live trading account with the Company and filling in electronic
                                registration form.<br>
                                * When funding the trading account – such information is never stored or archived on the
                                Company’s servers.
                                * When withdrawing from the trading account.<br>

                                The information collected online may be transferred across national borders for the
                                purposes of data consolidation, storage and customer data management.<br>

                                The information collected may include: Full name, Email address/Phone Number, Address,
                                Date of Birth, ID Number, Copy of ID document, Social media handle, Occupation.<br>

                                The financial information may include the assets, investment experience, and monthly
                                income, in order to evaluate the client’s trading experience, understand his financial
                                needs and provide him with products and services suitable to his specific needs.</p>
                            <p>Changes to This Privacy Policy<br>

                                We may update this Privacy Policy from time to time. We will notify you of any changes
                                by posting the new Privacy Policy on this page. You are advised to review this Privacy
                                Policy periodically for any changes. Changes to this Privacy Policy are effective when
                                they are posted on this page. Your continued dealings with us subsequent to any changes
                                to this Privacy Policy will signify your consent to the collection, use, and disclosure
                                of your Personal Information in accordance with the changed Privacy Policy.<br>

                                Should you have any further questions regarding the Privacy Policy you may email our
                                support team for further clarification or assistance.</p>

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