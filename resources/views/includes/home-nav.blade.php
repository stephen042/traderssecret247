<nav class="navbar wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1s" id="myNavbar"
    style="background-color: #242323; border-bottom: 1px solid #a7a6a6;">
    <div class="container">
        <!-- container-start -->
        <div class="navbar-header ">
            <button data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <!-- mobile toggle (hamburgur) -->
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top"></span>
                <span class="icon-bar mid"></span>
                <span class="icon-bar btm"></span>
            </button>
            <a href="/">
                <img src="{{ asset('home-assets/images/logo.png') }}" alt="Homepage" width="150" height="100"
                    class="img-responsive logo">
            </a>
        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav navbar-right " id="nav_bar">
                <li><a href="/">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#buy-token">Live price</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>