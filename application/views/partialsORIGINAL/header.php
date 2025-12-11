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
<!-- End Google Tag Manager (noscript) -->
    <header class="headerBar">
        
        <?php if(!isset($_COOKIE['privacyPolicyCookie'])) { ?>
        <div class="cookiesHeader">
            <div class="cookiesInfo">
                <span>
                    <small>This site uses cookies, including third-party cookies, that help us to provide and improve our services.</small>
                </span>
                <span>
                    <a class="mx-xl-3 mx-2" href="<?php echo WEBSITE_URL; ?>privacy-policy.asp" target="_blank" title="Privacy Policy">
                        <u>Privacy Policy</u>
                    </a>
                </span>
                <span>
                    <button class="btn btnPrimary mx-2" onclick="acceptPolicy();" name="I Agree" title="I Agree">I Agree</button>
                </span>
            </div>
            <span class="closeCookies">
                <button type="button" class="close" onclick="declinePolicy();" name="Close Button" title="Close Button">
                    <span aria-hidden="true">×</span>
                </button>
            </span>
        </div>
        <?php } ?>

        <div class="topHeader">
            <div class="container">
                <div class="row">
                    <ul class="list-unstyled list-inline conatctList col-xs-12 text-center mb-0">
                        <li>
                            <a class="text-white" href="tel:+1 800-961-0353" title="+1 800-961-0353">
                                <span>U.S.-Canada Toll-free Contact Us: </span>
                                <span class="phoneNumb">+1 800-961-0353</span>
                            </a>
                        </li>
                        <li>
                            <a class="text-white" href="tel:+1-646-568-7751" title="+1-646-568-7751">
                                <span>U.S. Phone Contact Us: </span>
                                <span class="phoneNumb">+1-646-568-7751</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="search">
            <div class="container">
                <button type="button" class="close">×</button>
                <form class="form-inline" action="<?php echo WEBSITE_URL; ?>search" method="GET">
                    <input type="search" value="" name="query" id="s" placeholder="Search Report Keyword" autocomplete="off" required maxlength="255"/>
                    <button type="submit" class="btn btn-primary">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        </svg>
                    </button>
                </form>
            </div>
            <div class="suggestionsBox" id="suggestionsBox">
                <div class="col-12">
                    <div id="suggestionsList">
                    </div>
                </div>
            </div>  
        </div>

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed">
                        <span class="menuIcon" onclick="openNav()">&#9776;</span>
                    </button>
                    <a class="navbar-brand" href="<?php echo WEBSITE_URL; ?>" title="<?php echo WEBSITE_URL; ?>">
                        <img class="img-responsive" src="<?php echo WEBSITE_URL; ?>assets/images/pmr-logo.svg" width="104" height="63"  alt="Persistence Market Research" title="Persistence Market Research" />
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Insights-hub
                                <b class="caret"></b>
                            </a>
                           <div class="dropdown-menu row">
                                <div class="col-sm-4">
                                    <p class="text-white">
                                        Get going with a plethora of our upcoming and published reports.
                                    </p>
                                    <div class="mt-4">
                                        <a href="<?php echo WEBSITE_URL; ?>market-research.asp" class="btn btnPrimary" title="Market Research">
                                            Market Research
                                        </a>
                                    </div>
                                </div>
                               <div class="col-sm-8">
                                   <ul class="subHeadMenuList list-unstyled">
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>forthcoming-reports.asp" title="Forthcoming Reports">Forthcoming Reports</a></li>
                                      <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>market-reports.asp" title="Multi-Client Services">Market Reports</a></li>
                                   </ul>
                               </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" title="Next-Gen Sectors" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Next-Gen Sectors
                                <b class="caret"></b>
                            </a>
                        
                             <div class="dropdown-menu row">
                                <div class="col-sm-4">
                                    <p class="text-white">
                                        Stay ahead on the “market research” curve of your business.
                                    </p>
                                    <div class="mt-4">
                                        <a href="<?php echo WEBSITE_URL; ?>market-research-report" class="btn btnPrimary px-4" title="Market Research Report">
                                            Market Research Report
                                        </a>
                                    </div>
                                </div>
                               <div class="col-sm-8">
                                   <ul class="subHeadMenuList list-unstyled">
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>recent-development-in-top-sectors.asp" title="Impact of Covid-19">Recent Development In Top Sectors</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>market-research-report/automotive.asp" title="Automotive">Automotive</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>market-research-report/chemicals-and-materials.asp" title="Chemicals and Materials">Chemicals and Materials</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>market-research-report/consumer-goods.asp" title="Consumer Goods">Consumer Goods</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>market-research-report/food-and-beverages.asp" title="Food and Beverages">Food and Beverages</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>market-research-report/healthcare.asp" title="Healthcare">Healthcare</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>market-research-report/industrial-automation.asp" title="Industrial Automation">Industrial Automation</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>market-research-report/it-and-telecommunications.asp" title="IT &amp; Telecommunications">IT &amp; Telecommunications</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>market-research-report/semiconductor-electronics.asp" title="Semiconductor-Electronics">Semiconductor-Electronics</a></li>
                                   </ul>
                               </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" title="Media" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Media
                                <b class="caret"></b>
                            </a>
                             <div class="dropdown-menu row">
                                <div class="col-sm-4">
                                    <p class="text-white">
                                        Cut through the “media-centric” market research with Persistence Market research’s latest information tabs.
                                    </p>
                                    
                                </div>
                               <div class="col-sm-8">
                                   <ul class="subHeadMenuList list-unstyled">
                                        
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>media-releases.asp" title="Press Release">Media Release</a></li>
                                        <!-- <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>articles.asp" title="Article">Article</a></li> -->
                                       
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>faq.asp" title="FAQ's">FAQ's</a></li>
                                   </ul>
                               </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" title="About" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                About
                                <b class="caret"></b>
                            </a>
                             <div class="dropdown-menu row">
                                <div class="col-sm-4">
                                    <p class="text-white">
                                        Identify your Business with the Market Visionary practices offered by Persistence Market research.
                                    </p>
                                    <div class="mt-4">
                                        <a href="<?php echo WEBSITE_URL; ?>about-us.asp" class="btn btnPrimary" title="About PMR">
                                            About PMR
                                        </a>
                                    </div>
                                </div>
                               <div class="col-sm-8">
                                   <ul class="subHeadMenuList list-unstyled">
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>solutions-by-clients.asp" title="Solutions by Client">Solutions by Client</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>services.asp" title="Services">Services</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>client-endorsement-and-engagement.asp" title="Client Endorsement &amp; Engagement">Client Endorsement &amp; Engagement</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>careers.asp" title="Careers">Careers</a></li>
                                   </ul>
                               </div>
                            </div>
                        </li>
                        <li>
                            <a href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact">Contact</a>
                        </li>
                    </ul>
                    <?php
                    if($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] != "https://www.persistencemarketresearch.com/staging/" && $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] != "https://persistencemarketresearch.com/staging/" && $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] != "www.persistencemarketresearch.com/staging/" && $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] != "persistencemarketresearch.com/staging/"){
                    ?>
                    <ul class="list-unstyled list-inline searchList col-xs-1 text-center mb-0 ml-4">
                        <li>
                            <a href="#search">
                                <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </nav>
    </header>