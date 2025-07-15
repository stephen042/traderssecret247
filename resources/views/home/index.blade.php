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
            <input type="checkbox" onchange="toggleTheme()" id="slider" />
            <span class="slider round"></span>
        </label>
    </div>
    <!-- Theme Switcher End -->

    <!-- Page Wrapper End -->
    <div class="page-wrapper">
        <!-- Header Section Start -->
        <!-- Header Section Start -->
        @include('includes.home-nav')
        <!-- Header Section End -->
        <!-- Header Section End -->

        <div id="google_translate_element"></div>

        <script type="text/javascript">
            function googleTranslateElementInit() {
          new google.translate.TranslateElement(
            { pageLanguage: "en" },
            "google_translate_element"
          );
        }
        </script>

        <!-- Hero Section Start -->
        <section class="hero-wrap style2">
            <div class="container">
                <div class="hero-shape" data-speed="0.06" data-revert="true">
                    <img src="{{ asset('home-assets/assets/img/hero/hero-shape-4.png') }}" alt="Image"
                        class="hero-shape-one" />
                    <img src="{{ asset('home-assets/assets/img/hero/hero-shape-5.png') }}" alt="Image"
                        class="hero-shape-two" />
                    <img src="{{ asset('home-assets/assets/img/hero/hero-shape-6.png') }}" alt="Image"
                        class="hero-shape-three" />
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <span data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">SIMPLE, QUICK,
                                SECURED</span>
                            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                The Trading Platform Of The Future
                            </h1>
                            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                Industry-leading prices Get ultra-competitive spreads and
                                commissions across all asset classes. Receive even better
                                rates as your volume increases.
                            </p>
                            <div class="hero-btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                <a href="/login" class="btn style1">login account<i
                                        class="ri-arrow-right-s-line"></i></a>
                                <a class="play-video" data-fancybox=""
                                    href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                    <span class="play-now icon">
                                        <i class="ri-play-fill"></i>
                                    </span>
                                    <span class="link-text">Watch Video</span>
                                </a>
                            </div>
                            <div class="hero-contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <div class="hero-contact-img">
                                    <a href="/contact">
                                        <img src="{{ asset('home-assets/assets/img/testimonials/client-1.jpg') }}"
                                            alt="Image" />
                                    </a>
                                    <a href="/contact">
                                        <img src="{{ asset('home-assets/assets/img/testimonials/client-2.jpg') }}"
                                            alt="Image" />
                                    </a>
                                    <a href="/contact">
                                        <img src="{{ asset('home-assets/assets/img/testimonials/client-3.jpg') }}"
                                            alt="Image" />
                                    </a>
                                </div>
                                <div class="hero-contact-text">
                                    <p>
                                        Need Help? Contact our
                                        <a href="/contact" class="link style1">TradersSecret 247 LTD Support</a>
                                        &amp; tell us about your query.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-img-wrap">
                            <div class="hero-promo-text bounce">
                                <span><i class="flaticon-group"></i></span>
                                <h6>20M+ <span>Active Users</span></h6>
                            </div>
                            <div class="hero-img-one">
                                <img src="{{ asset('home-assets/assets/img/hero/hero-img-2.jpg') }}" alt="Image" />
                            </div>
                            <div class="hero-img-two">
                                <img src="{{ asset('home-assets/assets/img/hero/hero-img-3.jpg') }}" alt="Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->
        <!-- About Us Section Start -->
        <section class="about-wrap style2 pb-100 mt-100">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                        <div class="about-img-wrap">
                            <!--<img src="assets/img/shape-1.png" alt="Image" class="about-shape-one">
                                <div class="about-img-one">
                                     <img src="assets/img/about/about-img-5.jpg" alt="Image">
                                 </div>
                                 <div class="about-img-two">
                                    <img src="assets/img/about/about-img-6.jpg" alt="Image">
                                </div>-->
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <div class="about-content">
                            <div class="content-title style1">
                                <span>ABOUT US</span>
                                <h2>Market analysis and trade inspiration</h2>
                                <p>
                                    With a thriving network of experts, being a client of The
                                    TradersSecret 247 LTD opens doors to many opportunities.
                                    Powerful market insight and the top trade setups in the
                                    industry. You will have extensive connections to
                                    professional traders.
                                </p>
                            </div>
                            <div class="feature-item-wrap">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-customer-service-2-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>24/7 Support</h3>
                                        <p>
                                            The TradersSecret 247 LTD support team are on hand 24/7
                                            to support you through Live Chat, Email or Phone when
                                            you need it most.
                                        </p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-exchange-dollar-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Same Day Withdrawals</h3>
                                        <p>
                                            TradersSecret 247 LTD prides itself on processing
                                            withdrawals within the same day to ensure you have rapid
                                            access to your funds.
                                        </p>
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
        <section class="wh-wrap style2 ptb-100">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-1 order-md-2 order-2" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="200">
                        <div class="wh-content">
                            <div class="content-title style1">
                                <span>WHY CHOOSE US</span>
                                <h2>Join a club of more than 480,000 traders</h2>
                                <p>
                                    The internet has taken the world by a storm in a positively
                                    unimaginable way. The business world is completely toppled
                                    by having all the resources it requires for the successful
                                    initiation of an enterprise.
                                </p>
                            </div>
                            <div class="feature-item-wrap">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-award-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Best reputation</h3>
                                        <p>
                                            Licensed and regulated across multiple jurisdictions, we
                                            serve clients in over 150 countries worldwide.
                                        </p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-code-s-slash-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Advanced tools</h3>
                                        <p>
                                            Once you have selected your package you will receive an
                                            instant invitation to join the group chat.
                                        </p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="ri-map-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Worldwide office</h3>
                                        <p>
                                            Knowing well that we are opened to investors we have
                                            added a multi currency support system for investors far
                                            and wide.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-md-1 order-1" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="300">
                        <div class="row align-items-end">
                            <div class="col-6 wh-img-wrap">
                                <img src="{{ asset('home-assets/assets/img/shape-2.png') }}" alt="Image" class="wh-shape-one moveHorizontal" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Section End -->
        <!-- Feature Section Start -->
        <div class="feature-wrap style1 pt-100 pb-75 bg-whisper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                        <div class="section-title style1 text-center mb-40">
                            <span>MOST POPULAR CURRENCY TOOLS</span>
                            <h2>Set Up &amp; Exchange Money From Your Cards In A Minute</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="200">
                        <div class="feature-card style1">
                            <div class="feature-icon">
                                <i class="ri-hand-coin-line"></i>
                            </div>
                            <h3>
                                <a href="#">Forex</a>
                            </h3>
                            <p>
                                Trade 40+ major, minor, and exotic currency pairs.Trade 182 FX
                                spot pairs and 140 forwards across majors, minors, exotics and
                                metals.
                            </p>
                            <a href="#" class="link style1"><i class=""></i></a>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="300">
                        <div class="feature-card style1">
                            <div class="feature-icon">
                                <i class="ri-pie-chart-line"></i>
                            </div>
                            <h3>
                                <a href="#">Crypto</a>
                            </h3>
                            <p>
                                Trade and invest confidently in top performing
                                Cryptocurrencies with our timely Trading signals that ensure
                                your profitability from day one..
                            </p>
                            <a href="#" class="link style1"><i class=""></i></a>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="400">
                        <div class="feature-card style1">
                            <div class="feature-icon">
                                <i class="ri-notification-3-line"></i>
                            </div>
                            <h3>
                                <a href="#">Stocks</a>
                            </h3>
                            <p>
                                £3 on US stocks Access 19,000+ stocks across core and emerging
                                markets on 36 exchanges worldwide.
                            </p>
                            <a href="#" class="link style1"><i class=""></i></a>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="500">
                        <div class="feature-card style1">
                            <div class="feature-icon">
                                <i class="ri-building-line"></i>
                            </div>
                            <h3>
                                <a href="/register">Real Estate</a>
                            </h3>
                            <p>
                                £100 per slot Simplified Real Estate investment for relatively
                                small amounts through our crowdfunding model.
                            </p>
                            <a href="/register" class="link style1"><i class=""></i></a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="feature-card style1">
                                <div class="feature-icon">
                                    <i class="ri-money-exchange-line"></i>
                                </div>
                                <h3>
                                    <a href="#">Blockchain Technology</a>
                                </h3>
                                <p>
                                    Exploring Blockchain Investments: Unleashing Opportunities
                                    Blockchain technology is no longer confined to the realm of
                                    cryptocurrencies. Its decentralized, secure, and transparent
                                    nature is transforming industries.
                                </p>
                                <a href="#" class="link style1"><i class=""></i></a>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up"
                                data-aos-duration="1000" data-aos-delay="200">
                                <div class="feature-card style1">
                                    <div class="feature-icon">
                                        <i class="ri-application-line"></i>
                                    </div>
                                    <h3>
                                        <a href="#">AI Investment</a>
                                    </h3>
                                    <p>
                                        Capitalizing on Innovation navigating the realm of AI
                                        Investment opportunities.
                                    </p>
                                    <a href="#" class="link style1"><i class=""></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Section End -->
        <!-- Feature Section End -->
        <style>
            /* Container for the table */
            .table-container {
                width: 90%;
                margin: 20px auto;
                overflow-x: auto;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                border-radius: 8px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                font-family: Arial, sans-serif;
            }

            th,
            td {
                padding: 12px;
                text-align: center;
                border: 1px solid #dddddd;
            }

            th {
                background-color: #f4f4f4;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            .status-approved {
                color: green;
                border: 2px solid green;
                padding: 5px;
                border-radius: 5px;
                display: inline-flex;
                align-items: center;
            }

            .status-approved::before {
                content: "✔";
                margin-right: 5px;
            }

            .status-pending {
                color: orange;
                border: 2px solid orange;
                padding: 5px;
                border-radius: 5px;
                display: inline-flex;
                align-items: center;
            }

            .status-pending::before {
                content: "⚠";
                margin-right: 5px;
            }

            /* Responsive adjustments */
            @media screen and (max-width: 600px) {

                th,
                td {
                    padding: 8px;
                    font-size: 14px;
                }
            }
        </style>
        <h1 style="text-align: center">DAILY DEPOSITS</h1>
        <div class="table-container">
            <table id="table2">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Amount ($)</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Gateway</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- JavaScript will insert rows here -->
                </tbody>
            </table>
        </div>
        <h1 style="text-align: center">LATEST WITHDRAWAL</h1>
        <div class="table-container">
            <table id="table1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Amount ($)</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Gateway</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- JavaScript will insert rows here -->
                </tbody>
            </table>
        </div>

        <script>
            // Sample data with more unique names
        const names = [
          "Zephyr Hawthorne",
          "Luna Everhart",
          "Orion Skye",
          "Seraphina Wilder",
          "Caspian Thorn",
          "Elara Nightshade",
          "Finnian Vale",
          "Isolde Ravenwood",
          "Talon Blackwood",
          "Arwen Frost",
          "Sable Winters",
          "Magnus Stormrider",
          "Lyra Moonstone",
          "Dorian Greywood",
          "Rhea Starling",
          "Axel Steel",
          "Valeria Ashen",
          "Nova Quinn",
          "Evangeline Frost",
          "Cyrus Nightshade",
        ];

        const otherNames = [
          "Thane Grey",
          "Vera Locke",
          "Gideon Vex",
          "Mira Dawn",
          "Ronan Vance",
          "Selene Ember",
          "Thorn Wilder",
          "Nina Storm",
          "Elias Quill",
          "Jade Fury",
          "Blaze Ash",
          "Kira Shade",
          "Sterling Vale",
          "Lysandra Shade",
          "Cassius Night",
          "Dahlia Thorn",
          "Phoenix Blaze",
          "Astrid Nova",
          "Ryder Steel",
          "Wren Frost",
        ];

        const gateways = ["Bitcoin", "Ethereum", "Bank Transfer", "Usdt"];

        function getRandomName(nameList) {
          return nameList[Math.floor(Math.random() * nameList.length)];
        }

        function getRandomAmount() {
          const min = 3000;
          const max = 90000;
          return `$${(Math.random() * (max - min) + min).toFixed(2)}`;
        }

        function getCurrentDate() {
          const today = new Date();
          return today.toLocaleDateString(); // Formats the date as MM/DD/YYYY or similar based on locale
        }

        function getStatus() {
          return Math.random() < 0.3 ? "Pending" : "Approved"; // 30% Pending, 70% Approved
        }

        function getRandomGateway() {
          return gateways[Math.floor(Math.random() * gateways.length)];
        }

        function addRow(tableId, name, amount, date, status, gateway) {
          const table = document.querySelector(`#${tableId} tbody`);
          const row = document.createElement("tr");

          const nameCell = document.createElement("td");
          nameCell.textContent = name;
          nameCell.setAttribute("data-label", "Name");
          row.appendChild(nameCell);

          const amountCell = document.createElement("td");
          amountCell.textContent = amount;
          amountCell.setAttribute("data-label", "Amount");
          row.appendChild(amountCell);

          const dateCell = document.createElement("td");
          dateCell.textContent = date;
          dateCell.setAttribute("data-label", "Date");
          row.appendChild(dateCell);

          const statusCell = document.createElement("td");
          statusCell.textContent = status;
          statusCell.className =
            status === "Approved" ? "status-approved" : "status-pending";
          statusCell.setAttribute("data-label", "Status");
          row.appendChild(statusCell);

          const gatewayCell = document.createElement("td");
          gatewayCell.textContent = gateway;
          gatewayCell.setAttribute("data-label", "Gateway");
          row.appendChild(gatewayCell);

          table.appendChild(row);
        }

        // Function to generate a table with random data
        function generateTable(tableId, nameList) {
          for (let i = 0; i < 10; i++) {
            addRow(
              tableId,
              getRandomName(nameList),
              getRandomAmount(),
              getCurrentDate(),
              getStatus(),
              getRandomGateway()
            );
          }
        }

        // Generate two tables with different names
        generateTable("table1", names);
        generateTable("table2", otherNames);
        </script>


        <!-- Feature Section Start -->
        <div class="feature-wrap style1 ptb-100 bg-whisper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                        <div class="section-title style1 text-center mb-40">
                            <span>24/7 Support</span>
                            <h5>
                                If you didn’t find the answers you were looking for on our
                                Frequently Asked Questions page
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="feature-slider-one owl-carousel">
                    <div class="feature-card style3">
                        <div class="feature-title">
                            <h3>
                                <a href="#">Live Chat</a>
                            </h3>
                        </div>
                        <p>
                            This is the fastest way to reach us and have general queries
                            resolved in real time. Our average response time is instant
                        </p>
                        <a href="#" class="link style1"><i class=""></i></a>
                    </div>
                    <div class="feature-card style3">
                        <div class="feature-title">
                            <h3>
                                <a href="/login">Submit a ticket</a>
                            </h3>
                        </div>
                        <p>
                            If you don’t have time to chat, feel free to send us an email
                            and we’ll get back to you on average within 15 minutes..
                        </p>
                        <a href="#" class="link style1"><i class=""></i></a>
                    </div>
                    <div class="feature-card style3">
                        <div class="feature-title">
                            <h3>
                                <a href="#">Request Call</a>
                            </h3>
                        </div>
                        <p>
                            If you prefer to speak to someone over the phone, we will be
                            happy to give you a call. Average response time is 4 hours.
                        </p>
                        <a href="#" class="link style1"><i class=""></i></a>
                    </div>
                    <div class="feature-card style3">
                        <div class="feature-title">
                            <h3>
                                <a href="/register.">Professionals</a>
                            </h3>
                        </div>
                        <p>
                            We are a group of passionate, independent thinkers who never
                            stop exploring new ways to improve trading for the self-directed
                            investor.
                        </p>
                        <a href="/register" class="link style1"><i class=""></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Section End -->

        <!-- Exchange Table Start -->
        <section class="exchange-table-wrap pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="section-title style1 text-center mb-40">
                            <span>LIVE EXCHANGE RATES</span>
                            <h2>
                                Exchange Money Across The World In Real Time With Lowest Fees
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="exchange-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <div class="inverse">
                                        <span>Inverse</span>
                                        <input type="checkbox" id="switch" />
                                        <label for="switch">Toggle</label>
                                    </div>
                                </th>
                                <th scope="col">Amount</th>
                                <th scope="col">Change(24h)</th>
                                <th scope="col">Chart(24h)</th>
                                <th scope="col">
                                    <span class="action"><i class="ri-edit-line"></i>Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="country-flag">
                                        <img src="{{ asset('home-assets/assets/img/flag/usa.png') }}" alt="Image" />
                                        US Dollar
                                    </div>
                                </td>
                                <td>120.54</td>
                                <td>
                                    <span class="text-green">+0.50%</span>
                                </td>
                                <td>
                                    <img src="{{ asset('home-assets/assets/img/chart-img/chart-1.png') }}" alt="Image" />
                                </td>
                                <td>
                                    <button class="btn style1" type="button">
                                        <i class="ri-send-plane-line"></i>Send
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="country-flag">
                                        <img src="{{ asset('home-assets/assets/img/flag/japan.png') }}" alt="Image" />
                                        Japanese Yen
                                    </div>
                                </td>
                                <td>134.76</td>
                                <td>
                                    <span class="text-green">+0.24%</span>
                                </td>
                                <td>
                                    <img src="{{ asset('home-assets/assets/img/chart-img/chart-2.png') }}" alt="Image" />
                                </td>
                                <td>
                                    <button class="btn style1" type="button">
                                        <i class="ri-send-plane-line"></i>Send
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="country-flag">
                                        <img src="{{ asset('home-assets/assets/img/flag/uk.png') }}" alt="Image" />
                                        British Pound
                                    </div>
                                </td>
                                <td>245.10</td>
                                <td>
                                    <span class="text-red">-0.30%</span>
                                </td>
                                <td>
                                    <img src="{{ asset('home-assets/assets/img/chart-img/chart-3.png') }}" alt="Image" />
                                </td>
                                <td>
                                    <button class="btn style1" type="button">
                                        <i class="ri-send-plane-line"></i>Send
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="country-flag">
                                        <img src="{{ asset('home-assets/assets/img/flag/newzland.png') }}" alt="Image" />
                                        New Zealand Dollar
                                    </div>
                                </td>
                                <td>0.7564</td>
                                <td>
                                    <span class="text-red">-0.063%</span>
                                </td>
                                <td>
                                    <img src="{{ asset('home-assets/assets/img/chart-img/chart-4.png') }}" alt="Image" />
                                </td>
                                <td>
                                    <button class="btn style1" type="button">
                                        <i class="ri-send-plane-line"></i>Send
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="country-flag">
                                        <img src="{{ asset('home-assets/assets/img/flag/canada.png') }}" alt="Image" />
                                        Canadian Dollar
                                    </div>
                                </td>
                                <td>1.2741</td>
                                <td>
                                    <span class="text-red">-0.76%</span>
                                </td>
                                <td>
                                    <img src="{{ asset('home-assets/assets/img/chart-img/chart-5.png') }}" alt="Image" />
                                </td>
                                <td>
                                    <button class="btn style1" type="button">
                                        <i class="ri-send-plane-line"></i>Send
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="country-flag">
                                        <img src="{{ asset('home-assets/assets/img/flag/france.png') }}" alt="Image" />
                                        Swiss Franc
                                    </div>
                                </td>
                                <td>15.063</td>
                                <td>
                                    <span class="text-green">+0.26%</span>
                                </td>
                                <td>
                                    <img src="{{ asset('home-assets/assets/img/chart-img/chart-6.png') }}" alt="Image" />
                                </td>
                                <td>
                                    <button class="btn style1" type="button">
                                        <i class="ri-send-plane-line"></i>Send
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <button type="button" class="add-currency">
                            <span><i class="ri-add-circle-line"></i></span>Add Currency
                        </button>
                    </div>
                    <div class="col-sm-6 text-sm-end">
                        <p class="update-status">Last Updated Jan 20, 2022</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Exchange Table End -->

        <!-- Feature Section Start -->
        <div class="feature-wrap style1 pt-100 pb-75 bg-whisper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="section-title style1 text-center mb-40">
                            <span>YOUR BENIFITS</span>
                            <h2>
                                The Most Trusted Currency Exchange Is Here For Giving Services
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="200">
                        <div class="feature-card style4">
                            <div class="feature-icon">
                                <i class="ri-earth-line"></i>
                            </div>
                            <div class="feature-info">
                                <h3><a href="#">Global Coverage</a></h3>
                                <p>
                                    Secure, affordable & accessible payment systems and services
                                    promote development, support financial stability, and help
                                    expand financial inclusion
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="300">
                        <div class="feature-card style4">
                            <div class="feature-icon">
                                <i class="ri-cash-line"></i>
                            </div>
                            <div class="feature-info">
                                <h3><a href="#">Easy Deposit Method</a></h3>
                                <p>
                                    Fund your account using a wide range of funding methods.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="400">
                        <div class="feature-card style4">
                            <div class="feature-icon">
                                <i class="ri-earth-line"></i>
                            </div>
                            <div class="feature-info">
                                <h3><a href="#">Global 24/7 Support</a></h3>
                                <p>
                                    This is the fastest way to reach us and have general queries
                                    resolved in real time. Our average response time is instant.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="500">
                        <div class="feature-card style4">
                            <div class="feature-icon">
                                <i class="ri-emotion-happy-line"></i>
                            </div>
                            <div class="feature-info">
                                <h3><a href="#">Lowest Fee</a></h3>
                                <p>
                                    A simple, maker-taker fee model that starts with an
                                    introductory tier that’s lower than most exchanges. The more
                                    you trade, the less you pay.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="600">
                        <div class="feature-card style4">
                            <div class="feature-icon">
                                <i class="ri-exchange-dollar-line"></i>
                            </div>
                            <div class="feature-info">
                                <h3><a href="#">Instant Processing</a></h3>
                                <p>
                                    Verify your identity, add a payment method — like a debit
                                    card or bank account — and you’re good to go.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="700">
                        <div class="feature-card style4">
                            <div class="feature-icon">
                                <i class="ri-wallet-3-line"></i>
                            </div>
                            <div class="feature-info">
                                <h3><a href="#">Depth of protection</a></h3>
                                <p>
                                    Defense-in-depth is an information assurance strategy that
                                    provides multiple, redundant defensive measures in case a
                                    security control fails or a vulnerability is exploited.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Section End -->

        <!-- App Section Start -->
        <section class="app-wrap ptb-100">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                        <div class="app-img-wrap"></div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <div class="app-content">
                            <div class="content-title style1">
                                <h2>Trusted for more than 7 years</h2>
                                <p>
                                    The TradersSecret 247 LTD is an online Forex and
                                    cryptocurrency STP broker providing CFD trading on hundreds
                                    of assets and optimal trading conditions within the
                                    award-winning MT4 platform. The TradersSecret 247 LTD offers
                                    deep liquidity, generous leverage up to 1:500, and some of
                                    the best spreads in the industry. As part of our commitment
                                    to our client’s satisfaction, we offer 24/7 live customer
                                    service, charge no deposit or withdrawal fees, and process
                                    withdrawals within 30-minutes or less. We feel that these,
                                    along with many other advantages, help to set us apart from
                                    the rest.
                                </p>
                            </div>
                            <h5>Multi-award winner</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- App Section End -->

    <!-- Currency Secton Start -->
    <section class="currency-wrap pt-100 pb-75 bg-whisper">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title style1 text-center mb-40">
                        <span>CURRENCY PROFILE</span>
                        <h2>Get These Local Account Details Just Like Pay A Local</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="currency-card">
                        <div class="currency-flag">
                            <img src="{{ asset('home-assets/assets/img/flag/usa.png') }}" alt="Image" />
                        </div>
                        <div class="currency-info">
                            <h3>USD - US Dollar</h3>
                            <p>
                                Officially used by the United States of America and its
                                unincorporated organized territories including Puerto Rico,
                                Northern Mariana Islands, Virgin Islands of the United States
                                , Guam , American Samoa and its unincorporated unorganized
                                territories of United States Minor Outlying Islands.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="currency-card">
                        <div class="currency-flag">
                            <img src="{{ ('home-assets/assets/img/flag/eu.png') }}" alt="Image" />
                        </div>
                        <div class="currency-info">
                            <h3>EUR - Euro</h3>
                            <p>
                                Eurozone members (17 of the 27 member states of the European
                                Union) - Austria, Belgium, Cyprus, Estonia, Finland, France,
                                Germany, Greece, Ireland, Italy, Luxembourg, Malta, the
                                Netherlands, Portugal, Slovakia, Slovenia, and Spain.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="currency-card">
                        <div class="currency-flag">
                            <img src="{{ ('home-assets/assets/img/flag/uk.png') }}" alt="Image" />
                        </div>
                        <div class="currency-info">
                            <h3>GBP - British Pound</h3>
                            <p>
                                Certain British Overseas Territories: South Georgia and the
                                South Sandwich Islands; British Antarctic Territory, Tristan
                                da Cunha, and British Indian Ocean Territory. Notes: British
                                Indian Ocean Territory uses Pound Sterling (GBP) as official
                                currency, but U.S. dollars are used more often than not.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="currency-card">
                        <div class="currency-flag">
                            <img src="{{ ('home-assets/assets/img/flag/canada.png') }}" alt="Image" />
                        </div>
                        <div class="currency-info">
                            <h3>CAD - Canadian Dollar</h3>
                            <p>
                                You will find more currencies and exchange rate conversions at
                                currency7 website: amd currency, Polish zloty currency, East
                                Caribbean currency, czk currency, Netherlands Antillean
                                guilder currency, UK currency, eur conversion, Swiss Franc
                                conversion, sek money rate, Danish Krone money rate, exchange
                                rate Peter I Island, convert Icelandic krona
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="currency-card">
                        <div class="currency-flag">
                            <img src="{{ ('home-assets/assets/img/flag/australia.png') }}" alt="Image" />
                        </div>
                        <div class="currency-info">
                            <h3>AUD - Aus Dollar</h3>
                            <p>
                                The Australian dollar is the currency of Austria (officially
                                Commonwealth of Australia) and its certain territories of
                                Christmas Island, Cocos (Keeling) Islands, Norfolk Island.
                                Austria also has other four external territories of Ashmore
                                and Cartier Islands, Coral Sea Islands, Heard Island and
                                McDonald Islands, Australian Antarctic Territory which are
                                generally uninhabited islands. The Australian dollar is also
                                used by three independent Pacific Island states of Kiribati,
                                Nauru and Tuvalu.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="currency-card">
                        <div class="currency-flag">
                            <img src="{{ ('home-assets/assets/img/flag/japan.png') }}" alt="Image" />
                        </div>
                        <div class="currency-info">
                            <h3>JPY - Japaneese Yen</h3>
                            <p>
                                The Japanese yen is the third most traded currency in the
                                foreign exchange market after the United States dollar and
                                euro. As a reliable and stable store of value, it is also
                                regarded as a hard currency. Currently hard currencies are the
                                United States dollar (USD), Euro (EUR), Swiss franc (CHF),
                                British pound sterling (GBP), Japanese yen (JPY), Canadian
                                dollar
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="currency-card">
                        <div class="currency-flag">
                            <img src="{{ ('home-assets/assets/img/flag/india.png') }}" alt="Image" />
                        </div>
                        <div class="currency-info">
                            <h3>INR - Indian Rupee</h3>
                            <p>
                                The Indian rupee is the official currency of India (officially
                                the Republic of India) which is a country in South Asia. The
                                Indian rupee is also accepted in Bhutan and Nepal but if
                                taking in India rupee, better not taking with bigger
                                denominations like 500 and 1000 rupee which are rarely
                                accepted.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="currency-card">
                        <div class="currency-flag">
                            <img src="{{ ('home-assets/assets/img/flag/newzland.png') }}" alt="Image" />
                        </div>
                        <div class="currency-info">
                            <h3>NZD - NZ Dollar</h3>
                            <p>
                                The New Zealand dollar is the currency of New Zealand and its
                                territories of Tokelau, Cook Islands, Niue. It’s also used by
                                British overseas territory of Pitcairn Island and country of
                                Nauru.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="currency-card">
                        <div class="currency-flag">
                            <img src="{{ asset('home-assets/assets/img/flag/france.png') }}" alt="Image" />
                        </div>
                        <div class="currency-info">
                            <h3>CHF - Swiss Franc</h3>
                            <p>
                                Swiss franc is official of Switzerland, Liechtenstein and
                                Italy exclave Campione d'Italla. It is also widely used in
                                German exclave Büsingen whose sole legal currency is the euro.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Currency Secton End -->

    <!-- Testimonial Section Start -->
    <section class="testimonial-wrap ptb-100">
        <div class="container">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="section-title style1 text-center mb-40">
                    <span>OUR REVIEWS</span>
                    <h2>More Than 20,000+ Happy Customers Trust Our Services</h2>
                </div>
            </div>
            <div class="testimonial-slider-two owl-carousel">
                <div class="testimonial-card style3">
                    <div class="client-info-area">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="{{ ('home-assets/wp-admin/uploads/testimony_9b5a48f4325a0fe16936763d187bb05a.jpeg') }}"
                                    alt="Image" />
                            </div>
                            <div class="client-info">
                                <h3>Macos Luis</h3>
                                <span></span>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <i class="flaticon-quotation-mark"></i>
                        </div>
                    </div>
                    <p class="client-quote">
                        Just when I think its good enough, its just keeps getting better.
                        Made over 4 withdrawals and I must confess that this is the best
                        service i've ever recieved.
                    </p>
                </div>
                <div class="testimonial-card style3">
                    <div class="client-info-area">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="{{ asset('home-assets/wp-admin/uploads/testimony_b09a203e2fd092f8b3df98dce99b0f89.jpeg') }}"
                                    alt="Image" />
                            </div>
                            <div class="client-info">
                                <h3>Matins Bake</h3>
                                <span></span>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <i class="ri-double-quotes-l"></i>
                        </div>
                    </div>
                    <p class="client-quote">
                        I have my normal monthly pay before Mr. Hassen introduced me to
                        Auto stock trade. I never had a doubt because of the personality
                        that got me into it, so today am earning good with auto stock
                        trade. I urge you guys to give it a trial.
                    </p>
                </div>
                <div class="testimonial-card style3">
                    <div class="client-info-area">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="{{ asset('home-assets/wp-admin/uploads/testimony_8f976ead09fcdb5bff95b9fa24ab6a27.jpeg') }}"
                                    alt="Image" />
                            </div>
                            <div class="client-info">
                                <h3>Alexander</h3>
                                <span></span>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <i class="ri-double-quotes-r"></i>
                        </div>
                    </div>
                    <p class="client-quote">
                        My name is Alexander. Few weeks I have traded with Auto Stock
                        Trading, i made enough profit of 2.8tc and my withdrawal was
                        processed instantly. Auto Stock Trading is the best
                    </p>
                </div>
                <div class="testimonial-card style3">
                    <div class="client-info-area">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="{{ asset('home-assets/wp-admin/uploads/testimony_e9c279c2434c06a1ba5569c5fb85a672.jpeg') }}"
                                    alt="Image" />
                            </div>
                            <div class="client-info">
                                <h3>Mr. Raymond Harvey</h3>
                                <span></span>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <i class="ri-double-quotes-l"></i>
                        </div>
                    </div>
                    <p class="client-quote">
                        Trading with a professional broker: solves a lot of stress and
                        hassle, Auto Stock Trading is the best!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Blog Section Start -->
    <section class="blog-wrap pt-100 pb-75 bg-whisper">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title style1 text-center mb-40">
                        <span>OUR BLOG</span>
                        <h2>Keep Up To Date With Global Content From Our Trusted Team</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="400">
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="{{ asset('home-assets/assets/img/blog/blog-1.jpg') }}" alt="Image" />
                            <a href="#"
                                class="blog-cat">Corporate</a>
                        </div>
                        <div class="blog-info">
                            <ul class="blog-metainfo list-style">
                                <li>
                                    <i class="ri-calendar-2-line"></i><a
                                        href="#">May 22, 2022</a>
                                </li>
                                <li><i class="ri-chat-3-line"></i>No Comment</li>
                            </ul>
                            <h3>
                                <a href="#">5 Things You
                                    Need To Know Before Starting Business</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="500">
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="{{ asset('home-assets/assets/img/blog/blog-2.jpg') }}" alt="Image" />
                            <a href="#" class="blog-cat">Consumer</a>
                        </div>
                        <div class="blog-info">
                            <ul class="blog-metainfo list-style">
                                <li>
                                    <i class="ri-calendar-2-line"></i><a
                                        href="#">May 13, 2022</a>
                                </li>
                                <li><i class="ri-chat-3-line"></i>No Comment</li>
                            </ul>
                            <h3>
                                <a href="#">Effect Of
                                    Inflation On Our Daily Expenditure</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="{{ asset('home-assets/assets/img/blog/blog-3.jpg') }}" alt="Image" />
                            <a href="#" class="blog-cat">Finance</a>
                        </div>
                        <div class="blog-info">
                            <ul class="blog-metainfo list-style">
                                <li>
                                    <i class="ri-calendar-2-line"></i><a
                                        href="#">Apr 15, 2022</a>
                                </li>
                                <li><i class="ri-chat-3-line"></i>No Comment</li>
                            </ul>
                            <h3>
                                <a href="#">7 Tips To Get
                                    Best Exchange Rate In Currency</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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