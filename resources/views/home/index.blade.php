<!DOCTYPE html>
<html lang="zxx">

{{-- heead tag start --}}
@include('includes.home-head')
{{-- heead tag end --}}

<body data-spy="scroll" data-target=".navbar" data-offset="82">

    @include('includes.home-nav')

    <section class="" id="hero">
        <div class="banner burger  align-item-center parallax">
            <div class="container">
                <!-- container-start -->
                <div class="row align-item-center mt3">
                    <!-- row start -->
                    <div id="overlay"></div>
                    <div class="fullscreen-bg">
                        <img class="fullscreen-bg__video" src="{{ asset('home-assets/images/bg.jpg') }}"  alt="" srcset="">
                    </div>
                    <div class="col-sm-6 col-lg-6 ">
                        <!-- column start -->
                        <div class="banner-text">
                            <h1 data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                <strong class="template-color" style="text-transform: uppercase">TradersSecret
                                    <a href="javascript:void(0);" style="font-size: 25pt"><i
                                            class="fa fa-wallet"></i></a>
                                </strong> <br> THE SMARTEST WAY TO SECURE YOUR CRYPTO
                            </h1>
                            <div data-aos="fade-up" data-aos-delay="500">
                                <p class="big-pera"> TradersSecret: The Easiest and Most Powerful Crypto
                                    Ledger Remodelled </p>

                            </div>
                            <div class="mt3 banner-btn-group" data-aos="fade-up" data-aos-delay="600"
                                data-aos-duration="1000">
                                <a href="/register" class="btn-alpha">Open Account</a>
                                <a href="/login" class="btn-alpha">Login </a>

                                <br><br>
                            </div>
                        </div>
                    </div>
                    <!-- column end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <div
            style="height:62px; background-color: #1D2330; overflow:hidden; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; padding:1px;padding: 0px; margin: 0px; width: 100%;">
            <div style="height:40px; padding:0px; margin:0px; width: 100%;">
                <iframe
                    src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no"
                    width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0"
                    border="0" style="border:0;margin:0;padding:0;"></iframe>
            </div>
        </div>
        <!--================= banner-end ==================-->
    </section>

    <section id="about">
        <div class="pross-grid t-pross-grid dark-template-light-bg shapebg-left">
            <div class="b-burger">
                <div class="container">
                    <div class="row">
                        <!-- row-start -->
                        <div class="col-lg-12 mb6" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">
                            <!-- column start -->
                            <h2> TradersSecret: POWERING THE CRYPTOECONOMY!</h2>
                            <p class="big-pera"> TradersSecret is a full-stack crypto services
                                platform that works with crypto-native businesses and institutional clients on lending,
                                trading, and custody solutions tailored to your needs.</p>
                            <p class="big-pera">The world’s leading crypto finance house serving people, projects,
                                protocols and institutions since 2015.</p>
                        </div>
                        <div class="col-lg-12 mb6" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">
                            <h2>PROFESSIONALS ON BLOCKCHAIN DATA</h2>
                            <h4>What we are good at</h4>
                            <ul>
                                <li>Confirm transactions, analyze the market, or simply learn more about crypto.</li>
                                <li>Without any doubt, the main advantage of the Trovechains platform is the
                                    accessibility
                                    of our financial program. We are always open to any kinds of crypto investors,
                                    despite their
                                    nationality, country of residence or social status.</li>
                                <li>We’ve powered exchanges, data analysts, enthusiasts, and more.</li>
                                <li>From hashrate, to block details, to mining information, and more.</li>
                                <li>Get the latest prices and charts along with key market signals.</li>
                            </ul>
                        </div>
                        <!-- column end -->
                    </div>
                    <!-- row end -->

                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="pross-item col-sm-3" data-aos="fade-left" data-aos-delay="700"
                                data-aos-duration="1000">
                                <img src="{{ asset('home-assets/images/accepted-worldwide.svg') }}" alt="logo" width="70" />
                                <h3>Accepted Worldwide</h3>
                                <p class="mt2 big-pera">A worldwide trading platform with top level security.</p>
                            </div>
                            <div class="pross-item col-sm-3" data-aos="fade-left" data-aos-delay="800"
                                data-aos-duration="1000">
                                <img src="{{ asset('home-assets/images/decentralised-currency.svg') }}" alt="logo" width="70" />
                                <h3>Decentralised Currency</h3>
                                <p class="mt2 big-pera"> Transparency and decentralisation of our network currency.</p>
                            </div>
                            <div class="pross-item col-sm-3" data-aos="fade-left" data-aos-delay="900"
                                data-aos-duration="1000">
                                <img src="{{ asset('home-assets/images/safe-and-secure.svg') }}" alt="logo" width="70" />
                                <h3>Safe And Secure</h3>
                                <p class="mt2 big-pera"> World leading security team to secure your crypto assets.</p>
                                <p>We store the vast majority of the digital assets in secure offline storage</p>
                            </div>
                            <div class="pross-item col-sm-3" data-aos="fade-left" data-aos-delay="1000"
                                data-aos-duration="1000">
                                <img src="{{ asset('home-assets/images/payment-integration.svg') }}" alt="logo" width="70" />
                                <h3>Protected by insurance</h3>
                                <p class="mt2 big-pera"> TradersSecret maintains crypto insurance and all
                                    USD cash balances
                                    are covered by FDIC insurance, up to a maximum of $400,000.00</p>
                            </div>
                            <!-- column end -->
                        </div>
                        <!--col-lg-8-->
                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
            </div>
        </div>
        <!--========= why-cryptency-end====== -->
        <div class="about-cryptency burger dark-template-bg">
            <div class="container">
                <!-- container-start -->
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">

                    </div>
                </div>
                <div class="row">
                    <!-- row start -->
                    <div class="col-sm-5" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000">
                        <!-- column start -->
                        <div
                            style="height:333px; background-color: #1D2330; overflow:hidden; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; padding: 0px; margin: 0px; width: 100%;">
                            <div style="height:313px; padding:0px; margin:0px; width: 100%;">
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                            rel="noopener nofollow" target="_blank"><span class="blue-text"></span></a>
                                    </div>
                                    <script type="text/javascript"
                                        src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                        async>
                                        {
                                                "symbol": "FX:EURUSD",
                                                    "width": "100%",
                                                        "height": "100%",
                                                            "locale": "en",
                                                                "dateRange": "12M",
                                                                    "colorTheme": "dark",
                                                                        "isTransparent": false,
                                                                            "autosize": true,
                                                                                "largeChartUrl": ""
                                            }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-sm-6 col-sm-offset-1">
                        <!-- column start -->
                        <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                            <h2 class="text-center">ONE-CLICK EASY</h2>
                            <p class="big-pera mt0"> TradersSecret is designed for people who have never
                                used an
                                exchange.
                                Ready to exchange Bitcoin for another asset? TradersSecret hides the complex
                                details while
                                assets are exchanged behind the scenes in seconds!
                            </p>
                            <p class="big-pera "> TradersSecret is a software platform ONLY and does not
                                conduct any
                                independent diligence on or substantive review of any blockchain asset, digital
                                currency, cryptocurrency or associated funds.</p>

                            <p class="big-pera ">You are fully and solely responsible for evaluating your transaction,
                                for determining whether you will exchange blockchain assets based on your own, and for
                                all your decisions as to whether to exchange blockchain assets with the Trovechains
                                in-app exchange
                                feature.</p>
                        </div>
                        <div class="check-list mt2">
                            <div class="media" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                                <img src="{{ asset('home-assets/images/arrow-right.svg') }}" alt="cehck" width="30" class="pull-left">
                                <div class="media-body">
                                    <h3>Open an account.</h3>
                                </div>
                            </div>
                            <div class="media" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                                <img src="{{ asset('home-assets/images/arrow-right.svg') }}" alt="cehck" width="30" class="pull-left">
                                <div class="media-body">
                                    <h3>Make a quick and easy deposit.</h3>
                                </div>
                            </div>
                            <div class="media" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                                <img src="{{ asset('home-assets/images/arrow-right.svg') }}" alt="cehck" width="30" class="pull-left">
                                <div class="media-body">
                                    <h3>Start exchanging.</h3>
                                </div>
                            </div>
                            <div class="media" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                                <img src="{{ asset('home-assets/images/arrow-right.svg') }}" alt="cehck" width="30" class="pull-left">
                                <div class="media-body">
                                    <h3>Backup Wallet.</h3>
                                </div>
                            </div>
                        </div>
                        <a href="/register" class="btn mt3 btn-alpha" data-aos="fade-up" data-aos-delay="900"
                            data-aos-duration="1000">Open Account </a>
                    </div>
                    <!-- column end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!--=========== current-rates-end============= -->

        <div class="burger about-special  ">
            <div class="container">
                <!-- container-start -->
                <div class="row align-item-center">
                    <!-- row start -->
                    <div class="col-sm-12 col-lg-7">
                        <!-- column start -->
                        <div class="dark-template-bg">
                            <div class="benifit-contant">
                                <h2 class="mt0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                    What's
                                    special about TradersSecret</h2>
                                <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                                    <p class="big-pera">We’re TradersSecret, and our digital financial
                                        service makes it fast,
                                        safe and fun to transact digital currency, anywhere in the world. We believe
                                        that the future of money is one where we, the people, are in control of our own
                                        economy. <br> A future where there’s no place for middle-men, hidden fees and
                                        fine print.</p>
                                </div>
                                <a href="/register" class="mt2 btn-white" data-aos="fade-up" data-aos-delay="600"
                                    data-aos-duration="1000">Open Account</a>
                            </div>
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-sm-12 col-lg-5 ">
                        <!-- column start -->
                        <div class="benifit-box">
                            <div class="row">
                                <!-- row start -->
                                <div class="media-item col-sm-6" data-aos="fade-up" data-aos-delay="700"
                                    data-aos-duration="1000">
                                    <!-- column start -->
                                    <div class="media mb3">
                                        <img src="{{ asset('home-assets/images/accepted-worldwide.svg') }}" alt="secure" class="pull-left"
                                            width="50">
                                        <div class="media-body">
                                            <h3>Accepted Worldwide</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- column end -->
                                <div class="col-sm-6 media-item" data-aos="fade-up" data-aos-delay="800"
                                    data-aos-duration="1000">
                                    <!-- column start -->
                                    <div class="media mb3">
                                        <img src="{{ asset('home-assets/images/decentralised-currency.svg') }}" alt="secure" class="pull-left"
                                            width="50">
                                        <div class="media-body">
                                            <h3>Decentralised Currency</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- column end -->
                            </div>
                            <!-- row end -->
                            <div class="row">
                                <!-- row start -->
                                <div class="col-sm-6 media-item" data-aos="fade-up" data-aos-delay="900"
                                    data-aos-duration="1000">
                                    <!-- column start -->
                                    <div class="media ">
                                        <img src="{{ asset('home-assets/images/safe-and-secure.svg') }}" alt="secure" class="pull-left" width="50">
                                        <div class="media-body">
                                            <h3>Safe And Secure</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- column end -->
                                <div class="col-sm-6 media-item" data-aos="fade-up" data-aos-delay="1000"
                                    data-aos-duration="1000">
                                    <!-- column start -->
                                    <div class="media ">
                                        <img src="{{ asset('home-assets/images/payment-integration.svg') }}" alt="secure" class="pull-left"
                                            width="50">
                                        <div class="media-body">
                                            <h3>Guaranteed</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- column end -->
                            </div>
                            <!-- row end -->
                        </div>
                    </div>
                    <!-- column end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container start -->
        </div>
    </section>

    <section id="about">
        <div class="about-cryptency burger dark-template-light-bg">
            <div class="container">
                <!-- container-start -->
                <div class="row align-item-center">
                    <!-- row start -->
                    <div class="col-sm-5 col-sm-offset-1 col-sm-push-6">
                        <!-- column start -->
                        <div class="row" style="text-align: center">
                            <div class="col-sm-12" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">

                            </div>
                            <br><br>
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-sm-6 col-sm-pull-6">
                        <!-- column start -->
                        <h2 data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">Our services your
                            control
                        </h2>
                        <p class="big-pera" data-aos="fade-up" data-aos-delay="900">
                            With our ultra flexible speed in transacting, you always have full control of your funds at
                            your
                            fingertips.
                        </p>
                        <div class="check-list mt2">
                            <div class="media" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">
                                <img src="{{ asset('home-assets/images/checked.svg') }}" alt="cehck" width="30" class="pull-left">
                                <div class="media-body">
                                    <h3>Low transaction fees.</h3>
                                </div>
                            </div>
                            <div class="media" data-aos="fade-up" data-aos-delay="1100" data-aos-duration="1000">
                                <img src="{{ asset('home-assets/images/checked.svg') }}" alt="cehck" width="30" class="pull-left">
                                <div class="media-body">
                                    <h3>Real-time Update.</h3>
                                </div>
                            </div>
                            <div class="media" data-aos="fade-up" data-aos-delay="1200" data-aos-duration="1000">
                                <img src="{{ asset('home-assets/images/checked.svg') }}" alt="cehck" width="30" class="pull-left">
                                <div class="media-body">
                                    <h3>Live support system.</h3>
                                </div>
                            </div>
                        </div>
                        <a href="/register" class="btn mt3 btn-alpha" data-aos="fade-up" data-aos-delay="1300"
                            data-aos-duration="1000">Open Account</a>
                    </div>
                    <!-- column end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
    </section>

    <section id="buy-token">
        <div class="burger dark-template-bg buy-token shapebg-right">
            <div class="container-fluid">
                <div class="row">
                    <!-- row-start -->
                    <div class="col-lg-6 col-lg-offset-3  text-center mb5" data-aos="fade-up" data-aos-delay="400"
                        data-aos-duration="1000">
                        <!-- column start -->
                        <h2>Live cryptocurrency price</h2>
                        <p class="big-pera">Cryptocurrency live price widget. Monitor currency price changes.</p>
                    </div>
                    <!-- column end -->
                </div>
                <!-- row end -->
                <div class="row guter align-item-end">
                    <!-- row start -->
                    <div class="col-sm-6 col-xs-12" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
                        <!-- column start -->
                        <div
                            style="height:460px; background-color: #1D2330; overflow:hidden; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%;padding:1px;padding: 0px; margin: 0px; width: 100%;">
                            <div style="height:440px; padding:0px; margin:0px; width: 100%;">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                            rel="noopener nofollow" target="_blank"><span class="blue-text"></span></a>
                                    </div>
                                    <script type="text/javascript"
                                        src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-overview.js"
                                        async>
                                        {
                                                "symbols": [
                                                    [
                                                        "Apple",
                                                        "AAPL|1D"
                                                    ],
                                                    [
                                                        "Google",
                                                        "GOOGL|1D"
                                                    ],
                                                    [
                                                        "Microsoft",
                                                        "MSFT|1D"
                                                    ],
                                                    [
                                                        "BINANCE:BTCUSDT|1D"
                                                    ],
                                                    [
                                                        "BITSTAMP:BTCUSD|1D"
                                                    ]
                                                ],
                                                    "chartOnly": false,
                                                        "width": "100%",
                                                            "height": "100%",
                                                                "locale": "en",
                                                                    "colorTheme": "dark",
                                                                        "autosize": true,
                                                                            "showVolume": false,
                                                                                "showMA": false,
                                                                                    "hideDateRanges": false,
                                                                                        "hideMarketStatus": false,
                                                                                            "hideSymbolLogo": false,
                                                                                                "scalePosition": "right",
                                                                                                    "scaleMode": "Normal",
                                                                                                        "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                                                                                                            "fontSize": "10",
                                                                                                                "noTimeScale": false,
                                                                                                                    "valuesTracking": "1",
                                                                                                                        "changeMode": "price-and-percent",
                                                                                                                            "chartType": "area",
                                                                                                                                "maLineColor": "#2962FF",
                                                                                                                                    "maLineWidth": 1,
                                                                                                                                        "maLength": 9,
                                                                                                                                            "headerFontSize": "medium",
                                                                                                                                                "lineWidth": 2,
                                                                                                                                                    "lineType": 0,
                                                                                                                                                        "dateRanges": [
                                                                                                                                                            "1d|1",
                                                                                                                                                            "1m|30",
                                                                                                                                                            "3m|60",
                                                                                                                                                            "12m|1D",
                                                                                                                                                            "60m|1W",
                                                                                                                                                            "all|1M"
                                                                                                                                                        ]
                                            }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-sm-6 col-xs-12" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="1000">
                        <!-- column start -->
                        <div
                            style="height:460px; background-color: #1D2330; overflow:hidden; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; padding:1px;padding: 0px; margin: 0px; width: 100%;">
                            <div style="height:440px; padding:0px; margin:0px; width: 100%;">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                            rel="noopener nofollow" target="_blank"><span class="blue-text"></span></a>
                                    </div>
                                    <script type="text/javascript"
                                        src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js"
                                        async>
                                        {
                                                "width": "100%",
                                                    "height": "100%",
                                                        "defaultColumn": "overview",
                                                            "screener_type": "crypto_mkt",
                                                                "displayCurrency": "BTC",
                                                                    "colorTheme": "dark",
                                                                        "locale": "en"
                                            }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                    <!-- column end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- Distribution-section-end -->
    </section>

    <section class="burger dark-template-bg services" id="service">
        <div class="container">
            <!-- container-start -->
            <div class="row">
                <!-- row start -->
                <div class="col-sm-12 col-lg-8 col-lg-offset-2 text-center">
                    <!-- column start -->
                    <h2 data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">OUR MISSION</h2>
                    <p>SMART MISSION MANAGEMENT</p>
                    <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                        <p class="big-pera">In TradersSecret, our mission is to facilitate the global free
                            flow of
                            digital
                            value.</p>
                        <p class="big-pera"> TradersSecret believes that technological progress will
                            revolutionize the
                            way we
                            create and distribute value. One day, everyone will be involved with crypto</p>
                        <p class="big-pera">Technology-Driven Products: We are leveraging cutting-edge technologies to
                            create useful services to improve accessibility to the blockchain revolution.</p>
                    </div>
                </div> <!-- column end -->
            </div><!-- row end -->
            <div class="row align-item-center mt6">
                <!-- row start -->
                <div class="col-lg-8 col-sm-12 col-lg-offset-2">
                    <!-- column start -->
                    <div class="services-list">
                        <div class="service-box" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                            <img src="{{ asset('home-assets/images/investment.svg') }}" class="img-responsive" alt="cryptency">
                            <span>KYC</span>
                        </div>
                        <div class="service-box" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                            <img src="{{ asset('home-assets/images/digital-cash.svg') }}" class="img-responsive" alt="cryptency">
                            <span>Crypto Banking</span>
                        </div>
                        <div class="service-box" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                            <img src="{{ asset('home-assets/images/fast-transaction.svg') }}" class="img-responsive" alt="cryptency">
                            <span>Fast transaction</span>
                        </div>
                        <div class="service-box" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000">
                            <img src="{{ asset('home-assets/images/low-risk.svg') }}" class="img-responsive" alt="cryptency">
                            <span>Asset management</span>
                        </div>
                        <div class="service-box" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">
                            <img src="{{ asset('home-assets/images/payment-integration.svg') }}" class="img-responsive" alt="cryptency">
                            <span>Real Time Update guaranteed</span>
                        </div>
                        <div class="service-box" data-aos="fade-up" data-aos-delay="1100" data-aos-duration="1000">
                            <img src="{{ asset('home-assets/images/safe-and-secure.svg') }}" class="img-responsive" alt="cryptency">
                            <span>Asset security</span>
                        </div>
                    </div>
                </div>
                <!-- column end -->
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>


    <section class="burger dark-template-light-bg shapebg-right" id="contact">
        <div class="container">
            <!-- container-start -->
            <div class="row align-item-center">
                <!-- row start -->
                <div class="col-sm-7 col-sm-offset-1  ">
                    <!-- column start -->
                    <div class="contact-form">
                        <h2 class="text-center mb5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            Send a message </h2>
                        <form method="POST" action="#" id="contactForm"
                            data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000"> <input type="hidden"
                                name="_token" value="x9iC5cdNsSS9KbmHcUao9bDJ5pjO6M0wgGeMt42c">
                            <div id="form-messages" class="notification contact"></div>
                            <div class="row">
                                <!-- row-start -->
                                <div class="col-sm-12">
                                    <!-- column start -->
                                    <div class="form-group"> <input class="form-control" name="name" required=""
                                            type="text" required> <label for="fullname">Full Name:</label> </div>
                                </div>
                                <!-- column end -->
                            </div> <!-- row end -->
                            <div class="form-group"> <input class="form-control" name="email" required="" type="email"
                                    required> <label for="email">Email:</label> </div>
                            <div class="form-group"> <textarea class="form-control" name="message" rows="5"
                                    required></textarea> <label for="message">Message:</label> </div> <button
                                type="submit" class="btn-white" name="submit">SUBMIT</button>
                        </form>
                    </div>
                </div>
                <!-- column end -->
                <div class="col-sm-4 col-sm-pull-1" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                    <!-- column start -->
                    <div class="contact-info">
                        <h3 class="text-center mb3 mt0">Contact us </h3>

                        <div class="contact-item">
                            <img src="{{ asset('home-assets/images/mail.svg') }}" alt="dasasdfsdf" class="pull-left" width="55">
                            <a href="mailto: support@traderssecret.online" class="link-primary">
                                <span>support@traderssecret.online</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- column end -->
            </div>
            <!-- row-end -->
        </div>
        <!-- container-end -->
    </section>

    <!-- Footer Section Start -->
    @include('includes.home-footer')
    <!-- Footer Section End -->

    <!-- Footer Section end -->

    @include('includes.home-script')
</body>

</html>