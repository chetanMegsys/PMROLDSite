<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("partials/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-home.css" rel="stylesheet" />
    <?php $this->load->view("partials/header_home"); ?>   
    <main role="main">
        <section class="searchBanner pt-0">
            <div class="searchBannerTop py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="font23">
                               Market Research that Gives you the 
                                <br>
                                Tools to Drive your Strategy
                            </h1>
                            <form class="form-inline" action="<?php echo WEBSITE_URL; ?>search" method="GET">
                                <div class="input-group">
                                    <input type="text" id="s" name="query" class="form-control" placeholder="Search" autocomplete="off" required maxlength="255">
                                    <div class="input-group-btn">
                                        <button class="btn btnSearch" type="submit" >
                                            <svg width="1.7em" height="1.7em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="suggestionsBox" id="suggestionsBox">
                                    <div class="col-12">
                                        <div id="suggestionsList">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="mb-0">
                                Thousands of hours of analyst experience, backed up our precise research methodology. Leverage our capabilities to see the big opportunity in your industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
             
            <div class="shapeBottom searchshapeBottom"></div>

            <div class="multiClientSec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            
                            <h2 class="borderGreenCenter secHeading mb-0 font23"><span class="comprehensiveIcon"></span> Comprehensive Repository of Market Research Reports</h2>
                            <p class="mb-2 font15">
                               Persistence Market Research has been tracking a diverse set of industries since a decade. Our coverage goes beyond the usual and we have successfully analyzes niche segments and categories. Over time, we have successfully built a comprehensive repository and colossal database.
                            </p>
                        </div>
                        <?php
                        if(!empty($latest_reports)){
                            foreach($latest_reports as $latest_report){
                            $keyword = "";
                            if($latest_report['rep_keyword'] !='' && $latest_report['rep_keyword'] !=Null){
                                $keyword = $latest_report['rep_keyword'];
                            }else{
                                $keyword = ucwords(str_replace("-"," ",$latest_report['rep_url']));
                            }
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="multiClientBox">
                                    <span class="multiClientIcon cat-<?php echo $latest_report['cat_id']; ?> ml-3"></span>
                                    <div class="ml-3">
                                        <h3 class="mt-0">
                                            <a class="titleLink" href="<?php echo WEBSITE_URL."market-research/".$latest_report['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>">
                                                <?php echo $keyword; ?>
                                            </a>
                                        </h3>
                                        <p class="lilne-height23 font15"><?php echo $latest_report['rep_name']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>
                        
                        <div class="text-center col-xs-12 mt-3">
                            <a href="<?php echo WEBSITE_URL."market-reports.asp"; ?>" class="btn btnPrimary" title="View All">View All</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="searchBannerBottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 py-5 text-center">
                            <span class="borderSpan">
                                <span class="headIcon">
                                </span>
                            </span>
                            <p class="mb-0 h4">The PMR Advantage</p>
                            <p class="mb-0">
                                Our decade-long association with participants across the value chain ensures we have access to hard-to-find information
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-6 py-5 text-center">
                            <span class="borderSpan">
                                <span class="headIcon">
                                </span>
                            </span>
                            <p class="mb-0 h4">Relevant Insights from Colossal Data</p>
                            <p class="mb-0">
                                In a data-first world, finding data is only half the job done, Deriving relevant insights on what it means for your business is key
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-6 py-5 text-center">
                            <span class="borderSpan">
                                <span class="headIcon">
                                </span>
                            </span>
                            <p class="mb-0 h4">Capitalize on the Opportunities</p>
                            <p class="mb-0">
                               Early movers have a strategic advantage as they identify the opportunities quickly. Our real-time market intelligence keeps you ahead.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        
        <!-- <div class="shapeRightTop"></div>
        <section class="nextGenSec bgGrey py-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <span class="headIcon"></span>
                        <h2 class="borderGreenCenter secHeading mb-0">Next-Gen Sectors</h2>
                        <p>
                           Our research approach from future perspective with regards to technology has facilitated solving majority of complex problems of the clients.
                        </p>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="row nextGenRow">
                            <div class="col-md-4 col-xs-6">
                                <a href="<?php echo WEBSITE_URL."market-research-report/consumer-goods.asp"; ?>" class="colorBox colorBox-22" title="Consumer Goods">
                                    <span class="nextGenIcon cat-22">
                                    </span>
                                    <h3 class="mt-1">
                                        Consumer Goods
                                    </h3>
                                </a>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <a href="<?php echo WEBSITE_URL."market-research-report/food-and-beverages.asp"; ?>" class="colorBox colorBox-23" title="Food &amp; Beverages">
                                    <span class="nextGenIcon cat-23">
                                    </span>
                                    <h3 class="mt-1">
                                        Food &amp; Beverages
                                    </h3>
                                </a>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <a href="<?php echo WEBSITE_URL."market-research-report/automotive.asp"; ?>" class="colorBox colorBox-24" title="Automotive">
                                    <span class="nextGenIcon cat-24">
                                    </span>
                                    <h3 class="mt-1">
                                        Automotive
                                    </h3>
                                </a>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <a href="<?php echo WEBSITE_URL."market-research-report/healthcare.asp"; ?>" class="colorBox colorBox-39" title="Healthcare">
                                    <span class="nextGenIcon cat-39">
                                    </span>
                                    <h3 class="mt-1">
                                        Healthcare
                                    </h3>
                                </a>
                            </div>
                            <div class="col-md-8 col-xs-6">
                                <a href="<?php echo WEBSITE_URL."market-research-report/chemicals-and-materials.asp"; ?>" class="colorBox colorBox-29" title="Chemicals &amp; Materials">
                                    <span class="nextGenIcon cat-29">
                                    </span>
                                    <h3 class="mt-1">
                                        Chemicals &amp; Materials
                                    </h3>
                                </a>
                            </div>
                            <div class="col-md-8 col-xs-6">
                                <a href="<?php echo WEBSITE_URL."market-research-report/semiconductor-electronics.asp"; ?>" class="colorBox colorBox-33" title="Semiconductor-Electronics">
                                    <span class="nextGenIcon cat-33">
                                    </span>
                                    <h3 class="mt-1">
                                        Semiconductor - Electronics
                                    </h3> 
                                </a>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <a href="<?php echo WEBSITE_URL."market-research-report/it-and-telecommunications.asp"; ?>" class="colorBox colorBox-31" title="IT &amp; Telecommunication">
                                    <span class="nextGenIcon cat-31">
                                    </span>
                                    <h3 class="mt-1">
                                        IT &amp; Telecommunication
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                     <div class="text-center mt-5 col-xs-12">
                        <a href="<?php echo WEBSITE_URL."market-research-report"; ?>" class="btn btnPrimary" title="View All">View All</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="shapeRightBottom"></div> -->

        <section class="researchSec pt-0 pb-0">
            <div class="container">
                <div class="row">
                    <div class="text-center col-lg-12">
                        
                        <h2 class="borderGreenCenter secHeading mb-0"><span class="UpdatedIcon"></span> Updated Market Research Reports</h2>
                        <p class="mb-3 font15">Customized research to grab the clients’ mindshare</p>
                    </div>
                    <div class="bgGrey col-lg-10 col-lg-offset-1 resDemandBox">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 px-0">
                                <div class="reserachImg bgGrey p-4">
                                    <?php $keyword = ucwords(str_replace("-"," ",$forthcoming_reports[0]['rep_url'])); ?>
                                    <img class="" src="<?php echo WEBSITE_URL; ?>assets/images/research/research-cat-<?php echo $forthcoming_reports[0]['cat_id']; ?>.jpg" width="428" height="376" alt="<?php echo $keyword; ?>" title="<?php echo $keyword; ?>">
                                    <div class="imgText text-white">
                                        <div class="p-lg-5 p-4 m-2 text-left">
                                            <h3 class="borderGreenLeft"><?php echo $keyword; ?></h3>
                                            <a class="text-white font14" href="<?php echo WEBSITE_URL."market-research/".$forthcoming_reports[0]['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>"><?php echo $forthcoming_reports[0]['rep_name']; ?></a>
                                            <div class="mt-2">
                                                <a href="<?php echo WEBSITE_URL."market-research/".$forthcoming_reports[0]['rep_url'].".asp"; ?>" class="btn btnOutline" title="<?php echo $keyword; ?>">
                                                    Read Report
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 bgGrey pr-4 pl-lg-0 pl-4">
                                <div class="boxBlue text-white">
                                    <?php $keyword = ucwords(str_replace("-"," ",$forthcoming_reports[1]['rep_url'])); ?>
                                    <div class="p-4 text-left">
                                        <h3 class="borderGreenLeft"><?php echo $keyword; ?></h3>
                                        <a class="text-white font14" href="<?php echo WEBSITE_URL."market-research/".$forthcoming_reports[1]['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>">
                                            <?php echo $forthcoming_reports[1]['rep_name']; ?>
                                        </a>
                                        <div class="mt-2">
                                            <a href="<?php echo WEBSITE_URL."market-research/".$forthcoming_reports[1]['rep_url'].".asp"; ?>" class="btn btnOutline" title="<?php echo $keyword; ?>">
                                                Read Report
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="boxGreen text-white mt-4">
                                    <?php $keyword = ucwords(str_replace("-"," ",$forthcoming_reports[2]['rep_url'])); ?>
                                    <div class="p-4 m-2 text-left">
                                        <h3 class="borderGreenLeft"><?php echo $keyword; ?></h3>
                                        <a class="text-white font14" href="<?php echo WEBSITE_URL."market-research/".$forthcoming_reports[2]['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>">
                                            <?php echo $forthcoming_reports[2]['rep_name']; ?>
                                        </a>
                                        <div class="mt-2">
                                            <a href="<?php echo WEBSITE_URL."market-research/".$forthcoming_reports[2]['rep_url'].".asp"; ?>" class="btn btnOutline" title="<?php echo $keyword; ?>">
                                                Read Report
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 col-xs-12">
                        <a href="<?php echo WEBSITE_URL."forthcoming-reports.asp"; ?>" class="btn btnPrimary" title="View All">View All</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="shapeTop"></div>
        <section class="exploreSec bgGrey pt-5 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2 class="borderGreenCenter insightSec">
                            Make well-informed decisions with Persistence Market Research’s offbeat insights & invigorating strategies
                        </h2>
                        <ul class="mb-0 list-inline list-unstyled">
                            <li class="list-inline-item mr-0">
                                <span class="headIcon"></span>
                                <h3 class="lilne-height20 font15">5000 + Clients</h3>
                            </li>
                            <li class="list-inline-item mr-0">
                                <span class="headIcon"></span>
                                <h3 class="lilne-height20 font15">5 Continents</h3>
                            </li>
                            <li class="list-inline-item mr-0">
                                <span class="headIcon"></span>
                                <h3 class="lilne-height20 font15"> 1500+ Reports</h3>
                            </li>
                            <li class="list-inline-item mr-0">
                                <span class="headIcon"></span>
                                <h3 class="lilne-height20 font15">8 Next-generation Verticals Expertise</h3>
                            </li>
                        </ul>
                        <p class="mb-0">if it’s market research, we’ve got you covered.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="shapeBottom"></div>
       
       
        <!-- <div class="shapeTop"></div> -->
       <!--  <section class="mediaReleaseSec bgGrey py-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-sm-5">
                        <span class="headIcon mx-auto"></span>
                        <h2 class="borderGreenCenter secHeading">Media Releases</h2>
                    </div>
                    <?php
                    if(!empty($mediarelease)){
                        foreach($mediarelease as $media){
                        ?>
                        <div class="col-md-4 col-sm-6 mediaRelList my-4">
                            <div class="card bg-white p-4">
                                <div class="card-img">
                                    <img class="img-responsive" src="<?php echo WEBSITE_URL; ?>assets/images/media/media-release-<?php echo $media['category_id']; ?>.jpg"  width="330" height="193"  alt="<?php echo $media['name']; ?>" title="<?php echo $media['name']; ?>" />
                                </div>
                                <div class="card-body">
                                    <h3>
                                        <a class="txtLink borderGreen" href="<?php echo WEBSITE_URL."mediarelease/".$media['url'].".asp"; ?>" title="<?php echo $media['name']; ?>"><?php echo $media['name']; ?></a>
                                    </h3>
                                    <p><?php echo substr($media['short_desc'],0,250); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                    }
                    ?>
                    
                    <div class="text-center col-xs-12 mt-5">
                        <a href="<?php echo WEBSITE_URL."media-releases.asp"; ?>" class="btn btnPrimary" title="View All">View All</a>
                    </div>
                </div>
            </div>
        </section> -->
       <!--  <div class="shapeBottom"></div> -->
        <section class="trustSec py-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center mb-sm-5">
                        
                        <h2 class="borderGreenCenter secHeading">
                           <span class="headIcon"></span> Instilling Trust and Inspiring Confidence with Insinuating research and investigative Approach 
                        </h2>
                    </div>
                </div>
                <div class="trustSecRow row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="trustBox p-4">
                            <span class="numb">1</span>
                            <p class="font15 lilne-height23">
                                Persistence Market Research has helped us immensely in compiling a sound database. Our expectations were exceeded by Persistence Market Research.
                            </p>
                            <div class="font15 text-right compName">
                                <span>Fortune 500 Telecom Company</span>
                            </div>
                        </div>
                        <div class="trustBox p-4">
                            <span class="numb">2</span>
                            <p class="font15 lilne-height23">
                                The market numbers supplied by Persistence Market Research helped us successfully conclude our ongoing project and we are pleased with this purchase.
                            </p>
                            <div class="font15 text-right compName">
                                <span>U.S.-based Chemical Company</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trustSecRow row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="trustBox p-4">
                            <span class="numb">3</span>
                            <p class="font15 lilne-height23">
                                The customer service provided by Persistence Market Research was great. We got our report well in time and customized to our requirements.
                            </p>
                            <div class="font15 text-right compName">
                                <span>Head of Business Development, Leading Electronics Company</span>
                            </div>
                        </div>
                        <div class="trustBox p-4">
                            <span class="numb">4</span>
                            <p class="font15 lilne-height23">
                                Thank you for supplying the report in time for our project to go through. Commendable customer service.
                            </p>
                            <div class="font15 text-right compName">
                                <span>Fortune 500 Company</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="text-center col-xs-12 mt-md-5 mt-4">
                        <a href="<?php echo WEBSITE_URL."client-endorsement-and-engagement.asp"; ?>" class="btn btnPrimary" title="View All">View All</a>
                        <div>
                            <img class="img-responsive mt-5 mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/hand-icon.png"  width="207" height="155"  alt="Client testimonials for Persistence Market Research" title="Client testimonials for Persistence Market Research" />
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <div class="shapeRightTop"></div>
        <section class="marketNewsSec bgGrey py-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 aboutContent">
                        <img class="img-responsive" src="<?php echo WEBSITE_URL; ?>assets/images/about_us.png" width="300" height="268"  alt="About Persistence Market Research
" title="About Persistence Market Research" />
                    </div>
                    <div class="col-md-6 col-sm-6 aboutContent">
                        <h2 class="head-border-left d-inline-block borderGreen secHeading">
                          <span class="aboutIcon"></span>  About Persistence Market Research
                        </h2>
                        <p class="font15 lilne-height25">
                            Persistence market Research (PMR) comes across as an incomparable provider of market intelligence from the other side of the fence. In other words, Persistence Market Research, with all its pragmatism, perseverance, and prudence, brings the nitty-gritties of market research for the clients, to the service of clients, and abides by the objective of guiding clients in profitable approach.
                        </p>
                        <a href="<?php echo WEBSITE_URL."about-us.asp"; ?>" class="btn btnPrimary" title="About PMR">About PMR</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="shapeRightBottom"></div>
        <div class="searchBannerBottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 py-4 text-center">
                            <span class="borderSpan">
                                <span class="advIcon">
                                </span>
                            </span>
                            <p class="mb-0 h4">The PMR Advantage</p>
                            <p class="mb-0 font15 lilne-height23">
                                Our decade-long association with participants across the value chain ensures we have access to hard-to-find information
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-6 py-4 text-center">
                            <span class="borderSpan">
                                <span class="advIcon">
                                </span>
                            </span>
                            <p class="mb-0 h4">Relevant Insights from Colossal Data</p>
                            <p class="mb-0 font15 lilne-height23">
                                In a data-first world, finding data is only half the job done, Deriving relevant insights on what it means for your business is key
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-6 py-4 text-center">
                            <span class="borderSpan">
                                <span class="advIcon">
                                </span>
                            </span>
                            <p class="mb-0 h4">Capitalize on the Opportunities</p>
                            <p class="mb-0 font15 lilne-height23">
                               Early movers have a strategic advantage as they identify the opportunities quickly. Our real-time market intelligence keeps you ahead.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </main>
   	<link href="<?php echo WEBSITE_URL; ?>assets/css/home.css" rel="stylesheet" />
   	<?php $this->load->view("partials/footer"); ?>
</body>
</html>
