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
                <h2>Frequently Asked Questions</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="/">Home </a></li>
                    <li>FAQ</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- FAQ Section Start -->
    <div class="faq-wrap style1 ptb-100">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="faq-img">
                        <img src="{{ asset('home-assets/assets/img/about/faq-shape-1.png') }}" alt="Image" class="faq-shape-one ">
                        <img src="{{ asset('home-assets/assets/img/about/faq-img-1.png') }}" alt="Image" class="moveHorizontal">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-content">
                        <div class="content-title style1 mb-30">
                            <span>FAQ</span>
                            <p>The Financial Conduct Authority is a financial regulatory body in the United Kingdom, but
                                operates independently of the UK Government, and is financed by charging fees to members
                                of the financial services industry. We are NOT required to be regulated by The Financial
                                Conduct Authority as a result we are NOT regulated by the Financial Conduct Authority.
                                We are an educational company who provides insights into the Forex Markets.

                                Trade ideas (Signals) that we send are not intended for the purpose of live investment.
                                They are intended for you to use as part of your analysis so you can understand forex
                                better. Choosing to place a trade that we have commentated over is your own choice and
                                we suggest speaking to a financial advisor before placing any trades on a live account.
                                We are NOT financial Advisors, we ARE Educators and are regulated as a business by
                                Companies House-HMRC.

                            </p>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>
                                            <i class="ri-add-line plus"></i>
                                            <i class="ri-subtract-line minus"></i>
                                        </span>
                                        What is Forex?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="single-product-text">
                                            <p>The foreign exchange market (forex, FX, or currency market) is a
                                                worldwide decentralized over-the-counter financial market for the
                                                trading of currencies. The foreign exchange market is the largest and
                                                most liquid financial market in the world. Traders include large banks,
                                                central banks, currency speculators, corporations, governments, and
                                                other financial institutions. The average daily volume in the global
                                                foreign exchange and related markets is continuously growing. Daily
                                                turnover was reported to be over US $3.98 trillion in April 2010 by the
                                                Bank for International Settlements</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>
                                            <i class="ri-add-line plus"></i>
                                            <i class="ri-subtract-line minus"></i>
                                        </span>
                                        How long does it take for funds to appear?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>If you send funds from your Bitcoin wallet then typically the funds will
                                            credit when they reach 6 confirmations, a process that can take up to 6
                                            hours. You can check the progress here of your deposit using the Bitcoin
                                            address that was provided to you upon making the deposit request on the
                                            following website: www.blockchain.com Once the funds reach our accounts
                                            these are instantly and automatically credited to your vault.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span>
                                            <i class="ri-add-line plus"></i>
                                            <i class="ri-subtract-line minus"></i>
                                        </span>
                                        Are there fees for depositing?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>There are no fees for depositing with either Credit/Debit card or even Wire
                                            Transfer. When depositing or withdrawing via Bitcoin, NitroPrime Innovation
                                            markets will not charge a fee, however, there is a standard networking fee
                                            of 0.0005 BTC when allocating funds through the Blockchain network.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefour" aria-expanded="true"
                                        aria-controls="collapsefour">
                                        <span>
                                            <i class="ri-add-line plus"></i>
                                            <i class="ri-subtract-line minus"></i>
                                        </span>
                                        How do I know that the funds have reached us?
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse "
                                    aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="single-product-text">
                                            <p>These will be credited to your vault automatically, once the funds have
                                                been received. You will also receive an email notification once the
                                                funds have been received.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Section End -->

    </div>
    <!-- Content Wrapper End -->



    </div>
    <!-- Page Wrapper End -->
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