<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php $this->load->view("partials/meta_links"); ?>
	
     

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-home-mobile.css" rel="stylesheet" />

    <?php $this->load->view("partials/header_mobile"); ?>

    <main role="main">
        <section class="searchBanner py-0">
            <div class="searchBannerTop py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h1>
                               Market Research that Gives you the Tools to Drive your Strategy
                            </h1>
                            <p>
                                Thousands of hours of analyst experience, backed up our precise research methodology. Leverage our capabilities to see the big opportunity in your industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="multiClientSec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <span class="headIcon"></span>
                        <h2 class="borderGreenCenter secHeading mb-0">Comprehensive Repository of Market Research Reports</h2>
                        <p class="mb-5">
                           Persistence Market Research has been tracking a diverse set of industries since a decade. Our coverage goes beyond the usual and we have successfully analyzes niche segments and categories. Over time, we have successfully built a comprehensive repository and colossal database.
                        </p>
                    </div>
                    <?php
                    if(!empty($latest_reports)){
                        for($i = 0; $i < 2; $i ++){
                        $keyword = ucwords(str_replace("-"," ",$latest_reports[$i]['rep_url']));
                        ?>
	                    <div class="col-sm-6">
	                        <div class="multiClientBox">
	                            <span class="multiClientIcon cat-<?php echo $latest_reports[$i]['cat_id']; ?> ml-3"></span>
	                            <div class="ml-3">
	                                <h3 class="mt-0">
	                                    <a class="titleLink" href="<?php echo WEBSITE_URL."market-research/".$latest_reports[$i]['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>">
	                                        <?php echo $keyword; ?>
	                                    </a>
	                                </h3>
	                                <p><?php echo $latest_reports[$i]['rep_name']; ?></p>
	                            </div>
	                        </div>
	                    </div>
	                    <?php
	                	}
	                }	
	                ?>
                    
                    <div class="text-center col-xs-12">
                        <a href="<?php echo WEBSITE_URL."market-reports.asp"; ?>" class="btn btnPrimary" title="View All">View All</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="shapeRightTop"></div>
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
                    <div class="col-lg-12">
                        <div class="row nextGenRow">
                            <div class="col-xs-6">
                                <a href="<?php echo WEBSITE_URL."market-research-report/consumer-goods.asp"; ?>" class="colorBox colorBox-22" title="Consumer Goods">
                                    <span class="nextGenIcon cat-22">
                                    </span>
                                    <h3 class="mt-1">
                                        Consumer Goods
                                    </h3>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a href="<?php echo WEBSITE_URL."market-research-report/food-and-beverages.asp"; ?>" class="colorBox colorBox-23" title="Food Innovation">
                                    <span class="nextGenIcon cat-23">
                                    </span>
                                    <h3 class="mt-1">
                                        Food &amp; Beverages
                                    </h3>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a href="<?php echo WEBSITE_URL."market-research-report/automotive.asp"; ?>" class="colorBox colorBox-24" title="Automotive">
                                    <span class="nextGenIcon cat-24">
                                    </span>
                                    <h3 class="mt-1">
                                        Automotive
                                    </h3>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a href="<?php echo WEBSITE_URL."market-research-report/healthcare.asp"; ?>" class="colorBox colorBox-39" title="Healthcare">
                                    <span class="nextGenIcon cat-39">
                                    </span>
                                    <h3 class="mt-1">
                                        Healthcare
                                    </h3>
                                </a>
                            </div>
                            <div class="text-center col-xs-12 mt-4">
                                <a href="<?php echo WEBSITE_URL."market-research-report"; ?>" class="btn btnPrimary" title="View All">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="shapeRightBottom"></div>
        <section class="researchSec pt-0">
            <div class="container">
                <div class="row">
                    <div class="text-center col-lg-12">
                        <span class="headIcon"></span>
                        <h2 class="borderGreenCenter secHeading mb-0">Forthcoming Reports</h2>
                        <p class="mb-5">Customized research to grab the clients’ mindshare</p>
                    </div>
                    <div class="bgGrey col-lg-12 resDemandBox p-5">
                        <div class="row">
                            <div class="col-sm-12 bgGrey">
                                <div class="boxBlue text-white">
                                    <div class="p-4 text-left">
                                    	<?php $keyword = ucwords(str_replace("-"," ",$forthcoming_reports[0]['rep_url'])); ?>
                                        <h3 class="borderGreenLeft"><?php echo $keyword; ?></h3>
                                        <a class="text-white" href="<?php echo WEBSITE_URL."market-research/".$forthcoming_reports[0]['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>"><?php echo $forthcoming_reports[0]['rep_name']; ?></a>
                                        <div class="my-4">
                                            <a href="<?php echo WEBSITE_URL."market-research/".$forthcoming_reports[0]['rep_url'].".asp"; ?>" class="btn btnOutline" title="<?php echo $keyword; ?>">
                                                Read Report
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 bgGrey my-5">
                                <div class="boxGreen text-white">
                                    <div class="p-4 text-left">
                                    	<?php $keyword = ucwords(str_replace("-"," ",$forthcoming_reports[1]['rep_url'])); ?>
                                        <h3 class="borderGreenLeft"><?php echo $keyword; ?></h3>
                                        <a class="text-white" href="<?php echo WEBSITE_URL."market-research/".$forthcoming_reports[1]['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>"><?php echo $forthcoming_reports[1]['rep_name']; ?></a>
                                        <div class="my-4">
                                            <a href="<?php echo WEBSITE_URL."market-research/".$forthcoming_reports[1]['rep_url'].".asp"; ?>" class="btn btnOutline" title="<?php echo $keyword; ?>">
                                                Read Report
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center col-sm-12">
                                <a href="<?php echo WEBSITE_URL."forthcoming-reports.asp"; ?>" class="btn btnPrimary" title="View All">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="exploreSec bgGreen pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2 class="borderGreenCenter secHeading">
                            Make well-informed decisions with Persistence Market Research’s offbeat insights & invigorating strategies
                        </h2>
                        <ul class="mb-0">
                            <li class="mr-0">
                                <h3>5000 + Clients</h3>
                            </li>
                            <li class="mr-0">
                                <h3>5 Continents</h3>
                            </li>
                            <li class="mr-0">
                                <h3> 1500+ Reports</h3>
                            </li>
                            <li class="mr-0">
                                <h3>8 Next-generation Verticals Expertise</h3>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <p class="mb-0 mt-4">if it’s market research, we’ve got you covered.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="shapeTop"></div>
        <section class="mediaReleaseSec bgGrey py-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-sm-5">
                        <span class="headIcon mx-auto"></span>
                        <h2 class="borderGreenCenter secHeading">Media Releases</h2>
                    </div>
                    <?php
                    if(!empty($mediarelease)){
                        for($i = 0; $i < 2; $i ++){
                        ?>
	                    <div class="col-sm-6 mediaRelList my-5">
	                        <div class="card bg-white p-4">
	                            <div class="card-body">
	                                <h3>
	                                    <a class="txtLink borderGreen" href="<?php echo WEBSITE_URL."mediarelease/".$mediarelease[$i]['url'].".asp"; ?>" title="<?php echo $mediarelease[$i]['name']; ?>"><?php echo $mediarelease[$i]['name']; ?></a>
	                                </h3>
	                                <p><?php echo substr($mediarelease[$i]['short_desc'],0,250); ?></p>
	                            </div>
	                        </div>
	                    </div>
	                    <?php
	                	}
	                }
	                ?>
                    
                    <div class="text-center col-sm-12 mt-5">
                        <a href="<?php echo WEBSITE_URL."media-releases.asp"; ?>" class="btn btnPrimary" title="View All">View All</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="shapeBottom"></div>
        <section class="trustSec">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center mb-sm-5">
                        <span class="headIcon mx-auto"></span>
                        <h2 class="borderGreenCenter secHeading">
                        Instilling Trust and Inspiring Confidence with Insinuating research and investigative Approach </h2>
                    </div>
                </div>
                <div class="trustSecRow row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="trustBox p-4">
                            <span class="numb">1</span>
                            <p>
                                Persistence Market Research has helped us immensely in compiling a sound database. Our expectations were exceeded by Persistence Market Research.
                            </p>
                            <div class="text-right compName">
                                <span>Fortune 500 Telecom Company</span>
                            </div>
                        </div>
                        <div class="trustBox p-4">
                            <span class="numb">2</span>
                            <p>
                                The market numbers supplied by Persistence Market Research helped us successfully conclude our ongoing project and we are pleased with this purchase.
                            </p>
                            <div class="text-right compName">
                                <span>U.S.-based Chemical Company</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center col-sm-12 mt-4">
                        <a href="<?php echo WEBSITE_URL."client-endorsement-and-engagement.asp"; ?>" class="btn btnPrimary" title="View All">View All</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="shapeRightTop"></div>
        <section class="marketNewsSec bgGrey py-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 aboutContent text-center">
                        <span class="headIcon"></span>
                        <h2 class="borderGreenCenter d-inline-block secHeading">
                            About Persistence Market Research
                        </h2>
                        <p>
                           Persistence market Research (PMR) comes across as an incomparable provider of market intelligence from the other side of the fence. In other words, Persistence Market Research, with all its pragmatism, perseverance, and prudence, brings the nitty-gritties of market research for the clients, to the service of clients, and abides by the objective of guiding clients in profitable approach.
                        </p>
                        <a href="<?php echo WEBSITE_URL."about-us.asp"; ?>" class="btn btnPrimary" title="About PMR">About PMR</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="shapeRightBottom"></div>
       
    </main>
    
    <?php $this->load->view("partials/footer_mobile"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/home-mobile.css" rel="stylesheet" />

</body>
</html>