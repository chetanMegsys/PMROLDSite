<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view("partials/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-report-new.css" rel="stylesheet" />
    <?php $report_keyword = ucwords(str_replace("-"," ",$report_detail[0]['rep_url'])); ?>
</head>
<body>
    
    <header class="headerBar">
        <?php if(!isset($_COOKIE['privacyPolicyCookie'])) { ?>
        <div class="cookiesHeader">
            <div class="cookiesInfo">
                <span>
                    <small>This site uses cookies, including third-party cookies, that help us to provide and improve our services.</small>
                </span>
                <span>
                    <a class="mx-xl-3 mx-2" href="<?php echo WEBSITE_URL; ?>privacy-policy.asp" target="_blank" title="Read More">
                        <u>Read More</u>
                    </a>
                </span>
                <span>
                    <button class="btn btnPrimary mx-2" onclick="acceptPolicy();">I Agree</button>
                </span>
            </div>
            <span class="closeCookies">
                <button type="button" class="close" onclick="declinePolicy();">
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
                        <img class="img-responsive" src="<?php echo WEBSITE_URL; ?>assets/images/pmr-logo.png" alt="Persistence Market Research" title="Persistence Market Research" />
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
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
                            <a href="javascript:void(0)" title="Next-Gen Sectors" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>recent-development-in-top-sectors.asp" title="Recent Development In Top Sectors">Recent Development In Top Sectors</a></li>
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
                            <a href="javascript:void(0);" title="Media" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Media
                                <b class="caret"></b>
                            </a>
                             <div class="dropdown-menu row">
                                <div class="col-sm-4">
                                    <p class="text-white">
                                        Cut through the “media-centric” market research with Persistence Market research’s latest information tabs.
                                    </p>
                                    <div class="mt-4">
                                        <a href="<?php echo WEBSITE_URL; ?>newsroom.asp" class="btn btnPrimary" title="Newsroom">
                                         Newsroom
                                        </a>
                                    </div>
                                </div>
                               <div class="col-sm-8">
                                   <ul class="subHeadMenuList list-unstyled">
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>news" title="News">News</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>media-releases.asp" title="Press Release">Media Release</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>articles.asp" title="Article">Article</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>pmr-in-the-news.asp" title="PMR In The News">PMR In The News</a></li>
                                        <li><a class="text-white" href="<?php echo WEBSITE_URL; ?>faq.asp" title="FAQ's">FAQ's</a></li>
                                   </ul>
                               </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" title="About" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                    if($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] != "www.persistencemarketresearch.com/staging/"){
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
    <main role="main">
      <section class="reportBanner">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-9 col-xs-12 reportMainInfoBox">
              <div class="reportMainInfo text-white">
                <h1 class="reportTitle mt-0"><?php echo $report_keyword; ?></h1>
                <h2 class="reportSubTitle"><?php echo $report_detail[0]['rep_name']; ?></h2>
              </div>
            </div>
            <div class="reportBannerBtns col-md-12 col-lg-9 col-xs-12">
              <div class="row">
                <div class="col-sm-4 col-xs-6 reportrBtns">
                  <a href="<?php echo WEBSITE_URL."checkout/".$report_detail[0]['rep_id']; ?>?custom=1" class="btn btnBuyNow" title="<?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?>"><span><?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <div class="breadCrumb mb-0">
        <div class="container">
          <ol class="list-inline mb-0">
            <li>
              <a href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
              <span>Home</span>
              </a>
            </li>
            <li>
              <a href="<?php echo WEBSITE_URL."market-research.asp"; ?>" title="Market Research" target="_blank">
              <span>Market Research</span>
              </a>
            </li>
            <li>
              <span><?php echo $report_detail[0]['rep_name']; ?></span>
            </li>
          </ol>
        </div>
      </div>
      <div class="reqCustomSec"></div>
      <?php
      if(!empty($related_reports)){
      ?>
      <section class="recommendationsSec bgGrey">
        <div class="container">
          <div class="row">
            <div class="text-center col-12 mb-5">
              <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-award" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z" />
                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
              </svg>
              <h3 class="secHeading reportHeadingIcon">Recommendations</h3>
            </div>
          </div>
          <div class="row">
            <?php
            foreach($related_reports as $related_report){
                  ?>
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="relatedReportItem">
                      <h5 class="badgSuccess"><?php echo $report_detail[0]['cat_name']; ?></h5>
                      <h4>
                        <a href="<?php echo WEBSITE_URL."market-research/".$related_report['rep_url'].".asp"; ?>" title="<?php echo $related_report['rep_name']; ?>"><?php echo $related_report['rep_name']; ?></a>
                      </h4>
                      <p class="pubDate">Published : <?php echo date("F Y",strtotime($related_report['rep_pub_date'])); ?></p>
                    </div>
                  </div>
                  <?php 
            }  
            ?>
          </div>
        </div>
      </section>
      <?php
      }
      ?>
      <section class="ourClient">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 text-center ourClientImg">
              <h4 class="secHeading">Our Clients</h4>
              <div>
                <img class="img-responsive mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/clients/client-cat-22.jpg" alt="Our Clients" title="Our Clients" />
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php $this->load->view("partials/footer"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/report-details-new.css" rel="stylesheet" />
    <script>
      $(document).ready(function () {
      
          var getMax = function () { return $(document).height() - $(window).height() }; var getValue = function () { return $(window).scrollTop() }; if ("max" in document.createElement("progress")) { var progressBar = $("progress"); progressBar.attr({ max: getMax() }); $(document).on("scroll", function () { progressBar.attr({ value: getValue() }) }); $(window).resize(function () { progressBar.attr({ max: getMax(), value: getValue() }) }) } else { var progressBar = $(".progress-bar"), max = getMax(), value, width; var getWidth = function () { value = getValue(); width = (value / max) * 100; width = width + "%"; return width }; var setWidth = function () { progressBar.css({ width: getWidth() }) }; $(document).on("scroll", setWidth); $(window).on("resize", function () { max = getMax(); setWidth() }) };
      
          var fixmeTop = $(".reportDescSec").offset().top; var removeMe = $(".reqCustomSec").offset().top; $(window).scroll(function () { var a = $(window).scrollTop(); if (a >= fixmeTop) { $(".reportDesLink").addClass("fixed-box"); $(".fixedReportHeader").addClass("active") } else { $(".reportDesLink").removeClass("fixed-box"); $(".fixedReportHeader").removeClass("active") } if (a >= removeMe - 550) { $(".reportDesLink").addClass("bottom-fixed-box") } else { $(".reportDesLink").removeClass("bottom-fixed-box") }; });
          let mainNavLinks = document.querySelectorAll(".repLinkSapn");
          let mainSections = document.querySelectorAll(".reportDescSec .container");
          let lastId;
          let cur = [];
          $('.repLinkSapn').click(function () {
              var data = $(this).attr('data-target');
              document.getElementById(data).scrollIntoView({ behavior: "smooth" });
          });
      
          $(window).scroll(function () {
              let fromTop = $(window).scrollTop();
              mainNavLinks.forEach(function (item) {
                  let section = document.querySelector('#' + item.getAttribute('data-target'));
                  if (
                      section.offsetTop <= fromTop &&
                      section.offsetTop + section.offsetHeight > fromTop
                      ) {
                      item.classList.add("active");
                  } else {
                      item.classList.remove("active");
                  }
              });
      
          });
      
      });
      
    </script>

    </body>
</html>