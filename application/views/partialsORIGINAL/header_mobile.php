<?php //$this->load->view("partials/check_logged_in"); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P89XNK');</script>

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
                    <small>Site uses cookies</small>
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
            </button></span>
        </div>
        <?php
        }
        ?>
        <div id="search">
            <div class="container">
                <button type="button" class="close">×</button>
                <form class="form-inline" action="<?php echo WEBSITE_URL; ?>search">
                    <input type="search" id="s" name="query" value="" placeholder="Search Report Keyword" autocomplete="off" required maxlength="255"/>
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
                    <button type="button" class="navbar-toggle collapsed bg-white">
                        <span class="menuIcon" onclick="openNav()">&#9776;</span>
                    </button>
                    <a class="navbar-brand" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
                        <img class="img-responsive" src="<?php echo WEBSITE_URL; ?>assets/images/pmr-logo.svg" width="104" height="63"  alt="Persistence Market Research" title="Persistence Market Research" />
                    </a>
                    <a href="#search" class="serachIcon" title="Search Reports">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"></path>
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a class="collapsed" href="<?php echo WEBSITE_URL; ?>" title="Home">
                            Home
                        </a>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headInsights">
                        <h4 class="panel-title">
                            <a title="Insights-hub" role="button" data-toggle="collapse" data-parent="#accordion" href="#colInsights" aria-expanded="true" aria-controls="colInsights">
                                Insights-hub
                                <b class="caret"></b>
                            </a>
                        </h4>
                    </div>
                    <div id="colInsights" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headInsights">
                        <div class="panel-body">
                            <ul class="list-unstyled subMenuList">
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>market-research.asp" title="Market Research">
                                        Market Research
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>forthcoming-reports.asp" title="Forthcoming Reports">
                                        Forthcoming Reports
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>market-reports.asp" title="Market Reports">
                                        Market Reports
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headExpertise">
                        <a title="Next-Gen Sectors" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#colExpertise" aria-expanded="false" aria-controls="colExpertise">
                            Next-Gen Sectors
                            <b class="caret"></b>
                        </a>
                    </div>
                    <div id="colExpertise" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headExpertise">
                        <div class="panel-body">
                        	
                            <ul class="list-unstyled subMenuList">
                                <li><a href="<?php echo WEBSITE_URL; ?>recent-development-in-top-sectors.asp" title="Recent Development In Top Sectors">Recent Development In Top Sectors</a></li>
                                <li><a href="<?php echo WEBSITE_URL; ?>market-research-report" title="Market Research Report">Market Research Report</a></li>
                                <li><a href="<?php echo WEBSITE_URL; ?>market-research-report/automotive.asp" title="Automotive">Automotive</a></li>
                                <li><a href="<?php echo WEBSITE_URL; ?>market-research-report/chemicals-and-materials.asp" title="Chemicals and Materials">Chemicals and Materials</a></li>
                                <li><a href="<?php echo WEBSITE_URL; ?>market-research-report/consumer-goods.asp" title="Consumer Goods">Consumer Goods</a></li>
                                <li><a href="<?php echo WEBSITE_URL; ?>market-research-report/food-and-beverages.asp" title="Food and Beverages">Food and Beverages</a></li>
                                <li><a href="<?php echo WEBSITE_URL; ?>market-research-report/healthcare.asp" title="Healthcare">Healthcare</a></li>
                                <li><a href="<?php echo WEBSITE_URL; ?>market-research-report/industrial-automation.asp" title="Industrial Automation">Industrial Automation</a></li>
                                <li><a href="<?php echo WEBSITE_URL; ?>market-research-report/it-and-telecommunications.asp" title="IT &amp; Telecommunications">IT &amp; Telecommunications</a></li>
                                <li><a href="<?php echo WEBSITE_URL; ?>market-research-report/semiconductor-electronics.asp" title="Semiconductor-Electronics">Semiconductor-Electronics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headNewsroom">
                        <a title="Media" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#colNewsroom" aria-expanded="false" aria-controls="colNewsroom">
                            Media
                            <b class="caret"></b>
                        </a>
                    </div>
                    <div id="colNewsroom" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headNewsroom">
                        <div class="panel-body">
                            <ul class='list-unstyled subMenuList'>
                                
                               
                                <li><a href="<?php echo WEBSITE_URL; ?>media-releases.asp" title="Press Release">Media Release</a></li>
                                <!-- <li><a href="<?php echo WEBSITE_URL; ?>articles.asp" title="Article">Article</a></li> -->
                                 
                                <li><a href="<?php echo WEBSITE_URL; ?>faq.asp" title="FAQ's">FAQ's</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headAbout">
                        <a title="About" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#colAbout" aria-expanded="false" aria-controls="colAbout">
                            About
                            <b class="caret"></b>
                        </a>
                    </div>
                    <div id="colAbout" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headAbout">
                        <div class="panel-body">
                            <ul class="list-unstyled subMenuList">
                                <li><a href="<?php echo WEBSITE_URL; ?>about-us.asp" title="About PMR">About PMR</a></li>
                                <li><a href="<?php echo WEBSITE_URL; ?>solutions-by-clients.asp" title="Solutions by Client">Solutions by Client</a></li>
                                <li><a href="<?php echo WEBSITE_URL; ?>services.asp" title="Services">Services</a></li>
                                <li><a href="<?php echo WEBSITE_URL; ?>client-endorsement-and-engagement.asp" title="Client Endorsement &amp; Engagement">Client Endorsement &amp; Engagement</a></li>
                                <li><a href="<?php echo WEBSITE_URL; ?>careers.asp" title="Careers">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact">
                            Contact
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>