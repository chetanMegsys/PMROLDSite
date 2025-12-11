<!doctype html>
<html amp lang="en">
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title><?php echo isset($meta_title) && $meta_title!='' ? $meta_title : 'PMR'; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) && $meta_description!='' ? $meta_description : ''; ?>">
    <meta name="DC.Description" content="<?php echo isset($meta_dc_desc) && $meta_dc_desc!='' ? $meta_dc_desc : ''; ?>" />
    <meta name="keywords" content="<?php echo isset($meta_keword) && $meta_keword!='' ? $meta_keword : ''; ?>">
    <link rel="canonical" href="<?php echo WEBSITE_URL.$amphtml; ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <style amp-custom>
      body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";font-size:1rem;font-weight:400;line-height:30px;color:#333;background-color:#fff}a{color:#337ab7;text-decoration:none}:focus{outline:0}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{line-height:30px;font-weight:500}.text-white{color:#fff}.text-center{text-align:center}.text-right{text-align:right}.text-left{text-align:left}.listUnstyled{list-style:none}.listLinline{display:inline-block}.breadCrumb,.breadCrumb h1{font-size:13px;line-height:20px}.breadCrumb .listLinline:last-child{font-weight:500}section{padding:40px 0}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.clearfix{clear:both}.col-50{width:50%;float:left}.mt-5{margin-top:2rem}.mb-5{margin-bottom:2rem}.mt-0,.my-0{margin-top:0}.mb-0,.my-0{margin-bottom:0}.px-2{padding:5px}.pl-0{padding-left:0}.bgBlue{background-color:#007cb7}.bgPurple{background-color:#435d82}.bgWhite{background-color:#fff}.bgGrey{background-color:#eee}.bgGreen{background-color:#40bb95}.btn.focus,.btn:focus,.btn:hover,.btn:active:focus{outline:0}.btn{text-decoration:none;padding:8px 30px;font-size:14px;font-weight:400;line-height:18px;box-shadow:12px 12px 24px rgba(15,60,91,0.18);transition:all .3s ease-in-out 0s;border-radius:0}.btnOutline{background-color:transparent;color:#fff;border:1px solid #fff}.btnOutline:hover{color:#00aae0;background-color:#fff}.btnPrimary{background-color:#00aae0;border:2px solid #00aae0;color:#fff}.btnPrimary:hover,.btnPrimary:focus{background-color:#fff;color:#00aae0}.btnGreen{background-color:#7abd49;border:2px solid #fff;color:#fff}.btnGreen:hover,.btnGreen:focus{background-color:#fff;border:2px solid #7abd49;color:#7abd49}#sidebar1{background-color:#4b5c83;color:#fff}.sidebar{padding:10px;margin:0}.sidebar>li{list-style:none;border-bottom:1px solid #2f4677;padding:10px 10px}.sidebar a{text-decoration:none;color:#fff}.close-sidebar{font-size:1.5em;padding-left:5px}.headerbar{padding:10px 15px;height:62px}.hamburger{text-align:right;padding:15px 0;font-size:30px}footer{background-color:#4a5c82;font-size:13px}footer li.listLinline{vertical-align:top;margin:0;float:left}footer ul{width:100%;border-bottom:1px solid #39496b;display:block;float:left;margin:0}footer .listLinline{text-align:center;min-height:75px;width:calc(100% / 2 - 2px)}footer .listLinline:not(:last-child){border-right:1px solid #39496b}.borderBlue::after,.borderBlueCenter::after,.borderWhiteCenter::after{content:"";background:#00aae0;height:2px;width:60px;display:block;margin:10px 0}.borderBlueCenter::after{margin:10px auto}.borderWhiteCenter::after{background:#fff;margin:10px auto}.listingList li{padding:10px 15px;margin-top:25px}.listingList h3{font-size:18px}.listingList a.text-white{color:#fff}.listingList a.text-white:hover{color:#eee}.listingList a{color:#333}.listingList a:hover{color:#435d82}.pageBanner{background-color:#4b5c83;padding:20px 0}.txtBlue{color:#4b8dc2;font-size:18px}.contentInfo p strong{font-size:18px}.contentInfo ul li{line-height:40px}.contentInfo a.btn{text-decoration:none}.contentInfo a{text-decoration:underline}.h3{font-size:24px}.h4{font-size:18px}.reportSubTitle{font-weight:400;font-size:1.15em}.reportInfoList ul li{padding:2px 10px 2px 36px;font-size:12px;line-height:20px;position:relative;margin:10px 0}.reportInfoList li{background-image:url(<?php echo WEBSITE_URL; ?>assets/images/report-icon-sprite.png);background-repeat:no-repeat;height:25px;display:inline-block}.reportInfoList li.repDate{background-position:0 0}.reportInfoList li.repID{background-position:0 -30px}.reportInfoList li.repType{background-position:0 -63px}.reportInfoList li.repCatName{background-position:0 -94px}.reportInfoList li.repFile{background-position:0 -127px}.reportrBtns{text-align:center;margin:10px;display:inline-block}.btnAskExpert{border-color:#006e9e;color:#fff;background-color:#006e9e}.btnAskExpert:hover,.btnAskExpert:focus{color:#006e9e;background-color:#fff}.btnScheduleCall{color:#006e9e;border-color:#006e9e}.btnScheduleCall:hover,.btnScheduleCall:focus{color:#fff;background-color:#006e9e}.btnReqSample{color:#fff;background-color:#60ac2d;border-color:#60ac2d}.btnReqSample:hover,.btnReqSample:focus{background-color:#fff;color:#60ac2d}.btnBuyNow{color:#fff;background-color:#fe4f00;border-color:#fe4f00}.btnBuyNow:hover,.btnBuyNow:focus{background-color:#fff;color:#fe4f00}.reportBannerBtns .btn{padding:7px 18px;display:inline-block;font-size:14px;font-weight:400;border:2px solid;}.sampleRequestSec{padding:20px 0;background-color:#05427e;background-image:repeating-linear-gradient(90deg,#1a3e5a,#0e3356 2px,#0e3356 3%)}.customRequestSec{padding:20px 0;background-color:#535e78;background-image:repeating-linear-gradient(90deg,#7a858e,#535e78 2px,#535e78 3%);background-blend-mode:multiply}.expertRequestSec{background:#60686b;padding:20px 0;}.actionContentBox,.actionContent{padding:15px}.reportDescSec table p strong{color:#0868ad}.reportDescSec p strong{color:#5062ce}.reportDescSec table{width:100%;max-width:100%;border-collapse:separate;margin:20px 0;background-color:#edfcff}.reportDescSec table td{padding:4px 10px;vertical-align:top;border:.5px solid #ccc}.reportDescSec table td ul{text-align:left}.reportDescSec .borderBlue{font-size:22px;color:#0f3469;}.sectionDivider{margin-bottom:30px}.recommendationsSec{margin-bottom:40px;padding:20px 0;background-color:#f5f5f5}.badgSuccess{background-color:#00aae0;color:#fff;padding:5px 10px;display:inline-block;font-size:12px;line-height:20px}.recommendationsSec h4,.recommendationsSec h3.h3{font-size:1em;margin:0;font-weight:400;color:#212529}.recommendationsSec h4 a{color:#212529}.recommendationsSec .pubDate{font-size:13px;color:#666}.relatedReportItem{margin-top:20px;padding:20px}.clearfix{clear:both;}
      .reportLink a.viewTopc{width:200px;margin:0 auto;border:2px solid #006e9e;background-color:#006e9e;color:#fff;font-weight:500;padding:4px 20px;margin-top:11px;display:block;text-align:center;}.reportLink a.viewTopc:hover{background-color:transparent;color:#006e9e}.reportDescSec p{font-size:1.1em;color:#000;}.reportDescSec p.text-white{color:#fff;font-weight:400;}.reportDescSec a{font-weight:500;}.reportDescSec p strong{color:#106382;}.h3.borderWhiteCenter{font-size:1.3em;}.methBtn{border:5px solid;}.methBtn:hover,.methBtn:focus{border:5px solid;}
    </style>
    <style amp-boilerplate>
      body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    </style>
    <noscript>
      <style amp-boilerplate>
        body{-webkit-animation: none;-moz-animation: none;-ms-animation: none; animation: none;}
      </style>
    </noscript>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  </head>
  <body>
    
    <?php $this->load->view("partials/header_amp"); ?>

    <div class="breadCrumb bgGrey">
      <div class="container">
        <ol class="listUnstyled my-0 pl-0">
          <li class="listLinline">
            <a href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
            <span>Home</span>
            </a>
          </li>
          <li class="listLinline px-2"><span>/</span></li>
          <li class="listLinline">
            <a href="<?php echo WEBSITE_URL."market-research.asp"; ?>" title="Market Research">
            <span>Market Research</span>
            </a>
          </li>
          <li class="listLinline px-2"><span>/</span></li>
          <li class="listLinline">
            <span>
            <?php echo $report_detail[0]['rep_breadcrumb']!=''?$report_detail[0]['rep_breadcrumb']:$report_detail[0]['rep_keyword']; ?>
            </span>
          </li>
        </ol>
      </div>
    </div>
    <?php $report_keyword = $report_detail[0]['rep_keyword']; ?>
    <section class="pageBanner text-white mb-0">
      <div class="container">
        <div class="reportMainInfo text-white">
          <h1 class="reportTitle mt-0"><?php echo $report_keyword; ?></h1>
          <h2 class="reportSubTitle"><?php echo $report_detail[0]['rep_name']; ?></h2>
        </div>
        <div class="reportInfoList d-inline-block ml-3">
          <ul class="list-unstyled mb-0 text-white pl-0">
            <?php if($report_detail[0]['rep_type']=='N'){ ?>
                <li class="repDate"><span><?php echo date("M-Y",strtotime($report_detail[0]['rep_pub_date'])); ?></span></li>
            <?php } ?>
            <li class="repID"><span>PMRREP<?php echo $report_detail[0]['rep_id']; ?></span></li>
            <li class="repType"><span><?php echo $report_detail[0]['rep_type']=='N' ? $report_detail[0]['rep_pages']." Pages" : 'Ongoing'; ?></span></li>
            <li class="repCatName">
              <a href="<?php echo WEBSITE_URL."market-research-report/".$report_detail[0]['seo_pagename'].".asp"; ?>" title="<?php echo $report_detail[0]['cat_name']; ?>" class="text-white" target="_blank">
              <span><?php echo $report_detail[0]['cat_name']; ?></span>
              </a>
            </li>
            <li class="repFile"><span>PPT, PDF, WORD, EXCEL</span></li>
          </ul>
        </div>
        <div class="reportBannerBtns col-md-12 col-lg-12 col-xs-12 mt-4">
          <ul class="list-unstyled pl-0 text-center my-0">
            <li class="reportrBtns">
              <a href="<?php echo WEBSITE_URL."checkout/".$report_detail[0]['rep_id']; ?>" class="btn btnBuyNow" title="<?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?>"><span><?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?></span></a>
            </li>
            <li class="reportrBtns">
              <?php if($report_detail[0]['rep_type']=='N'){ ?>
                  <a href="<?php echo WEBSITE_URL; ?>samples/<?php echo $report_detail[0]['rep_id']; ?>" class="btn btnReqSample" title="Request Sample">Request Sample</a>
              <?php }else{ ?>
                  <a href="<?php echo WEBSITE_URL; ?>toc/<?php echo $report_detail[0]['rep_id']; ?>" class="btn btnReqSample" title="Request TOC">Request TOC</a>
              <?php } ?>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <?php if($report_detail[0]['rep_type']=='N'){ ?>
    <section>
      <div class="container">
        <div class="reportLink">
        <a class="h4 viewTopc" target="_blank" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>/toc" title="View Table of Content">View TOC</a>
      </div>
    </div>
    </section>
    <?php } ?>
    <section class="reportDescSec">
      <div class="container">
        <div class="contentInfo">
          <p class="txtBlue h3 mt-0 mb-0">Market Bytes</p>
          <?php
	        if(!empty($report_description)){
	            $section_counter = 1;
	            foreach($report_description as $report_desc){
	            ?>

	            <?php
	            if($section_counter==3){
	            ?>
	            <div class="sectionDivider">
		            <h3 class="txtBlue">
		              Companies
		            </h3>
		            <?php echo $report_detail[0]['company']; ?>
		        </div>
		        <?php
	      		}
	            ?>

		        <div class="sectionDivider">
		            <h2 class="borderBlue"><?php echo $report_desc['title']; ?></h2>
		            <?php echo str_replace("<img","<amp-img height='200px' width='250px' class='img-responsive'",$report_desc['description']); ?>
		        </div>
 
		        <?php
	          $action_type = $report_desc['action_type'];
	          switch($action_type){
	            case "RM":
	            ?>
	            <div class="bgGrey actionContentBox">
		            <div class="bgWhite actionContent">
		              <h3 class="borderBlue">Market Research Methodology - Perfected through Years of Diligence</h3>
		              <p>A key factor for our unrivaled market research accuracy is our expert- and data-driven research methodologies. We combine an eclectic mix of experience, analytics, machine learning, and data science to develop research methodologies that result in a multi-dimensional, yet realistic analysis of a market.</p>
		            </div>
		            <div class="text-center mb-5 mt-5">
		              <a href="<?php echo WEBSITE_URL."methodology/".$report_detail[0]['rep_id']; ?>" target="_blank" class="btn btnGreen methBtn" title="Know Report Methodology">
		              Know Report Methodology
		              </a>
		            </div>
		        </div>
	            <?php
	          break;
	          
	          case "S":
	          ?>
		        <section class="sampleRequestSec text-center text-white">
		            <div class="container">
		              <p class="h3 mt-0 borderWhiteCenter text-white">
		                Find Out More about the Report Coverage
		              </p>
		              <p class="mt-5">
		                <a href="<?php echo WEBSITE_URL."samples/".$report_detail[0]['rep_id']; ?>" target="_blank" class="btn btnGreen" title="Request Sample">
		                Request Sample
		                </a>
		              </p>
		            </div>
		        </section>
		        <?php
		      break;
		      
		      case "CR":
		      ?>
		      <section class="customRequestSec text-center text-white">
	            <div class="container">
	              <p class="h3 mt-0 borderWhiteCenter text-white">
	                Customize this Report
	              </p>
	              <p class="text-white">Explore Intelligence Tailored to Your Business Goals.</p>
	              <p class="mt-5">
	                <a href="<?php echo WEBSITE_URL."request-customization/".$report_detail[0]['rep_id']; ?>" target="_blank" class="btn btnGreen" title="Request Customization">
	                Request Customization
	                </a>
	              </p>
	            </div>
	          </section>
		      <?php
	          break;
	          
	          case "ASK":
	          ?>
	          <section class="expertRequestSec text-center text-white">
	            <div class="container">
	              <p class="h3 mt-0 borderWhiteCenter text-white">
	                Explore Persistence Market Research’s expertise in promulgation of the business !
	              </p>
	              <p class="mt-5">
	                <a href="<?php echo WEBSITE_URL."ask-an-expert/".$report_detail[0]['rep_id']; ?>" target="_blank" class="btn btnGreen" title="Ask An Expert">
	                Ask An Expert
	                </a>
	              </p>
	            </div>
	          </section>
	          <?php
              break;
          	  }
          }
      }else{
      ?>

      	<div class="sectionDivider">
            <h2 class="secHeadingLeft">Description</h2>
            <?php echo str_replace("<img","<amp-img width='520' height='322'",$report_detail[0]['rep_desc']); ?>
        </div>
        <?php 
        }
        
        if($report_detail[0]['rep_type']=='N' && !empty($pressrelease)){
        ?>
        <div class="sectionDivider">
        <h2 class="secHeadingLeft">
          Media Release
        </h2>
        <ul>
            <?php
              foreach($pressrelease as $pr){ ?>
            <li><a href="<?php echo WEBSITE_URL."mediarelease/".$pr['url'].".asp"; ?>" target="_blank"><?php echo $pr['name']; ?></a></li>
            <?php } ?>
        </ul>
      </div>
      <?php
        }
        ?>
        </div>
      </div>
    </section>
    <?php if(!empty($related_reports)){ ?>
    <section class="recommendationsSec">
        <div class="container">
        	<?php
            foreach($related_reports as $related_report){
            ?>
            <div class="relatedReportItem bgWhite">
              <h5 class="badgSuccess"><?php echo $report_detail[0]['cat_name']; ?></h5>
              <h4>
                <a href="<?php echo WEBSITE_URL."market-research/".$related_report['rep_url'].".asp"; ?>" title="<?php echo $related_report['rep_name']; ?>"><?php echo $related_report['rep_name']; ?></a>
              </h4>
              <p class="pubDate">Published : <?php echo date("F Y",strtotime($related_report['rep_pub_date'])); ?></p>
            </div>
            <?php 
        	  }
             ?>
        </div>
    </section>
    <?php } ?>
    <footer class="text-white">
      <div class="container">
        <p class="text-center mt-0">Call Us</p>
        <ul class="listUnstyled pl-0">
          <li class="listLinline">
            <a class="text-white callInfo" href="tel:+1 800-961-0353" title="+1 800-961-0353">
              <span>U.S. Canada Toll-free</span>
              <p class="mt-0 mb-0">+1 800-961-0353</p>
            </a>
          </li>
          <li class="listLinline">
            <a class="text-white callInfo" href="tel:+1-646-568-7751" title="+1-646-568-7751">
              <span>U.S. Phone </span>
              <p class="mt-0">+1-646-568-7751</p>
            </a>
          </li>
        </ul>
        <div class="clearfix"></div>
        <p class="copyright mb-0 mt-0 text-center"><small>Copyright ©  Persistence Market Research. All Rights Reserved.</small></p>
      </div>
    </footer>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "<?php echo $report_keyword; ?>",
            "image": [
                "<?php echo $image_url; ?>"
            ],
            "description": "<?php echo substr(strip_tags($report_detail[0]['rep_desc']),0,160); ?>",
            "sku" : "PMRREP<?php echo $report_detail[0]['rep_id']; ?>",
            "mpn": "<?php echo $report_detail[0]['cat_name']; ?>",
            "brand": 
            {
                "@type": "Thing",
                "name": "Persistence Market Research"
            },
            "review": 
            {
                "@type": "Review",
                "reviewRating": 
                {
                    "@type": "Rating",
                    "ratingValue": "4",
                    "bestRating": "5"
                },
                "author": 
                {
                    "@type": "Organization",
                    "name": " Persistence Market Research "
                }
            },
            "aggregateRating": 
            {
                "@type": "AggregateRating",
                "ratingValue": " <?php echo $number; ?> ",
                "reviewCount": " <?php echo rand ( 10 , 40 ); ?> "
            },
            "offers": 
            {
                "@type": "Offer",
                "url": "<?php echo 'https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]'; ?>",
                "priceCurrency": "USD",
                "price": "<?php echo $report_detail[0]['rep_price_sul']; ?>",
                "priceValidUntil": "2022/3/31",
                "itemCondition": "NewCondition",
                "availability": "InStock",
                "seller": {
                    "@type": "Organization",
                    "name": " Persistence Market Research "
                }
            }
        }
    </script>

  </body>
</html>