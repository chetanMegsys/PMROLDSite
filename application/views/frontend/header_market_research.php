<?php //$this->load->view("partials/check_logged_in"); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P89XNK');</script>
<!-- End Google Tag Manager -->

</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P89XNK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

 <header class="header">
    <div class="container nav-container p-0 p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-md-2">
            <a class="navbar-brand p-0" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research Company">
                <img class="img-fluid" width="160" height="70" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.webp" alt="Persistence Market Research Company" title="Persistence Market Research Company" loading="lazy">
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mr-3">
                <li class="nav-item">
                    <a class="nav-link font18" href="<?php echo WEBSITE_URL; ?>">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle font18 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>market-research.asp" role="button" data-toggle="dropdown" aria-expanded="false" title="Market Research">Market Research</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item font18" href="<?php echo WEBSITE_URL; ?>industry-research.asp">Industry Research
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font18" href="<?php echo WEBSITE_URL; ?>market-research.asp">Reports</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font18" href="<?php echo WEBSITE_URL; ?>services/custom-research.asp">Custom Research Services</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font18" href="<?php echo WEBSITE_URL; ?>services/consulting-services.asp">Consulting Services</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font18" href="<?php echo WEBSITE_URL; ?>services/subscription-services.asp">Subscription Services</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font18 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>research-methodology.asp" title="Blog">Research Methodology</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle font18 text-black bold500 mt-0" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Media
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item font18 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>media-citations.asp" title="Media Citation">Media Citation</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font18 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>blog" title="Blog">Blog</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link font18" href="<?php echo WEBSITE_URL; ?>about-us.asp" title="About Us">About Us <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font18 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact Us">Contact Us</a>
                </li>
                </ul>
                <!-- <a href="#" class="text-black search-btn toggle_search align-text-top mr-4" title="Search" style="background: #f8f8f8;padding: 10px 15px 5px 15px;margin-right: 0px !important;border-radius: 10px;"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0079ae" class="bi bi-search mt-1" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                    </svg>
                </a> -->
            </div>
        </nav>
    </div>
    </div>
    <div class="container">
        <div class="overlayTwo text-black toggle_search_container top100" id="overlayTwo">
            <div class="container">
                <div class="row">
                <div class="TopSearch">
                    <div class="offset-md-1 col-md-10 ">
                    <div class="row">
                        <div class="position-relative serach-bg col-12">
                        <form class="form-group position-relative" id="topSearchMenu" action="<?php echo WEBSITE_URL; ?>search" method="GET">
                            <input type="search" name="query" id="s" class="form-control SearchInput" placeholder="Search Report Keywords" autocomplete="off" maxlength="100" required="" minlength="3">
                            <button type="submit" class="btn position-absolute btnSearch" title="Search" aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0079ae" class="bi bi-search mt-1" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg>
                            </button>
                        </form>
                    </div>
            
                    <div class="position-relative col-12">
                        <div id="suggestionsList">
                            
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</header>
