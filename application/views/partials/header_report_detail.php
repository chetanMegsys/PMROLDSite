<?php //$this->load->view("partials/check_logged_in"); ?>
<?php $this->load->view("partials/inside_script"); ?>
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
	<div class="fixedReportHeader py-2">
        <div class="container-fluid">
            <div class="logo d-inline-block">
                <a href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
                    <img src="<?php echo WEBSITE_URL; ?>assets/images/pmr-logo.svg"  width="60" height="36"  alt="Persistence Market Research" title="Persistence Market Research" />
                </a>
            </div>
            <div class="repName d-inline-block ml-4">
                <p class="lead mb-0"><?php echo ucwords(str_replace("-"," ",$report_detail[0]['rep_url'])); ?></p>
            </div>
            <div class="text-right d-inline-block pull-right rightButton">
                <form action="" method="post" class="mr-4">
                    <a href="<?php echo WEBSITE_URL."checkout/".$report_detail[0]['rep_id']; ?>" title="Purchase Report" class="btn btnBuyNow" rel="nofollow"><span><?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?></span></a>
                </form>
                <?php if($report_detail[0]['rep_type']=='N'){ ?>
                    <a href="#" data-toggle="modal" data-target="#customModal" onclick="requestForm('S')" class="btn btnReqSample mr-4" title="Get FREE Sample">Get FREE Sample</a>
                <?php }else{ ?>
                    <a href="#" data-toggle="modal" data-target="#customModal" onclick="requestForm('B')" class="btn btnReqSample mr-4" title="Get FREE Brochure">Get FREE Brochure</a>
                <?php } ?>
                <a href="https://appoint.ly/s/Persistence/introduction" class="btn btnScheduleCall" title="Schedule a Call" target="_blank"><span>Schedule a Call</span></a>
            </div>
        </div>
        <progress value="0" max="1">
            <span class="progress-container">
                <span class="progress-bar"></span>
            </span>
        </progress>

    </div>
    
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
                <button type="button" class="close" name="Close" title="Close">×</button>
                <form class="form-inline" action="<?php echo WEBSITE_URL; ?>search" method="GET">
                    <input type="search" value="" name="query" id="s" placeholder="Search Report Keyword" autocomplete="off" required maxlength="255"/>
                    <button type="submit" class="btn btn-primary" >
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
                    <button type="button" class="navbar-toggle collapsed" title="Menu">
                        <span class="menuIcon" onclick="openNav()">&#9776;</span>
                    </button>
                    <a class="navbar-brand" href="<?php echo WEBSITE_URL; ?>" title="<?php echo WEBSITE_URL; ?>">
                        <img class="img-responsive" src="<?php echo WEBSITE_URL; ?>assets/images/pmr-logo.svg" width="80" height="48" alt="Persistence Market Research" title="Persistence Market Research" />
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo WEBSITE_URL; ?>market-research.asp" title="Market Research">
                                Market Research
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo WEBSITE_URL; ?>services.asp" title="Services">Services</a>
                        </li>
                        <li>
                            <a href="<?php echo WEBSITE_URL; ?>about-us.asp" title="About PMR">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact">Contact</a>
                        </li>
                    </ul>
                     <?php
                    if($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] != "www.persistencemarketresearch.com/staging/"){
                    ?>
                    <ul class="list-unstyled list-inline searchList col-xs-1 text-center mb-0 ml-4">
                        <li>
                            <a href="#search" title="Search Reports">
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