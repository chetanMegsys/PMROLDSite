<!doctype html>
<html amp lang="en">
<head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title><?php echo isset($meta_title) && $meta_title!='' ? $meta_title : 'PMR'; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) && $meta_description!='' ? $meta_description : ''; ?>">
    <meta name="keywords" content="<?php echo isset($meta_keword) && $meta_keword!='' ? $meta_keword : ''; ?>">
    <link rel="canonical" href="<?php echo WEBSITE_URL.$amphtml; ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
   
    <style amp-custom>
     body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";font-size:1rem;font-weight:400;line-height:30px;color:#333;background-color:#fff}a{color:#337ab7;text-decoration:none}:focus{outline:0}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{line-height:30px;font-weight:500}.text-white{color:#fff}.text-center{text-align:center}.text-right{text-align:right}.text-left{text-align:left}.listUnstyled{list-style:none}.listLinline{display:inline-block}.breadCrumb,.breadCrumb h1{font-size:13px;line-height:20px;}.breadCrumb .listLinline:last-child{font-weight:500;}section{padding:30px 0;margin-bottom:20px}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.clearfix{clear:both}.col-50{width:50%;float:left}.mt-5{margin-top:2rem}.mb-5{margin-bottom:2rem}.mt-0,.my-0{margin-top:0}.mb-0,.my-0{margin-bottom:0}.px-2{padding:5px;}.pl-0{padding-left:0}.bgBlue{background-color:#007cb7}.bgPurple{background-color:#435d82}.bgWhite{background-color:#fff}.bgGrey{background-color:#eee}.btn.focus,.btn:focus,.btn:hover,.btn:active:focus{outline:0}.btn{padding:8px 30px;font-size:16px;font-weight:500;line-height:18px;box-shadow:12px 12px 24px rgba(15,60,91,0.18);transition:all .3s ease-in-out 0s;border-radius:0}.btnOutline{background-color:transparent;color:#fff;border:1px solid #fff}.btnOutline:hover{color:#fff;background-color:#00aae0;border:1px solid #00aae0}.btnPrimary{background-color:#00aae0;border:2px solid #00aae0;color:#fff}.btnPrimary:hover,.btnPrimary:focus{background-color:#fff;color:#00aae0}.btnGreen{background-color:#00a859;border:2px solid #00a859;color:#fff}.btnGreen:hover,.btnGreen:focus{background-color:#fff;color:#00a859}#sidebar1{background-color:#4b5c83;color:#fff}.sidebar{padding:10px;margin:0}.sidebar>li{list-style:none;border-bottom:1px solid #2f4677;padding:10px 10px}.sidebar a{text-decoration:none;color:#fff}.close-sidebar{font-size:1.5em;padding-left:5px}.headerbar{padding:10px 15px;height:62px}.hamburger{text-align:right;padding:15px 0;font-size:30px}footer{background-color:#4a5c82;font-size:13px}footer li.listLinline{vertical-align:top;margin:0;float:left}footer ul{width:100%;border-bottom:1px solid #39496b;display:block;float:left;margin:0}footer .listLinline{text-align:center;min-height:75px;width:calc(100% / 2 - 2px)}footer .listLinline:not(:last-child){border-right:1px solid #39496b}.borderBlueCenter::after,.borderBlue::after, .borderWhite::after{content:"";background:#00aae0;height:2px;width:60px;display:block;margin:10px auto;}.borderWhite::after{background:#fff;margin:10px 0;}.borderBlue::after{margin:7px 0;}.listingList li{padding:10px 15px;margin-top:25px}.listingList h3{font-size:18px}.listingList a.text-white{color:#fff}.listingList a.text-white:hover{color:#eee}.listingList a{color:#333}.listingList a:hover{color:#435d82}.pageBanner{background-color:#435d82;}.catBox{padding:20px;}.brownBox{background-color:#cfac8f;}.greenBox{background-color:#55cbb6;}.blueBox{background-color:#4fc0ec;}.orangeBox{background-color:#f8b238;}.redBox{background-color:#f47f54;}.lightGreenBox{background-color:#97ba30;}.h3, h3{font-size:20px;}.allCategoryList h2{font-size:24px;}.allCategoryList h2 a,.allCategoryList h3 a{color:#333;}.clearfix{clear:both;}.btnBlue{background-color:#24346c;border:2px solid #24346c;color:#fff;}.btnBlue:hover,.btnBlue:focus{background-color:#fff;color:#24346c;}.reportListing .btnPrimary{background-color:#fff;color:#00aae0;border:2px solid #00aae0;padding:6px 30px;}.reportListing .btnPrimary:hover,.reportListing .btnPrimary:focus{background-color:#00aae0;color:#fff;}
     .mt-4{margin-top:20px;}svg{vertical-align:middle;}.allCategoryList .h3{font-size:22px;}
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
                    <span>Market Research Report</span>
                </li>
            </ol>
        </div>
    </div>
    <section class="pageBanner text-center text-white mb-0">
        <div class="container">
            <div>
                <h1>
                    Market Research Report
                </h1>
                <p> Rummage your Market in question with Persistence Market Research’s “Next Gen Expertise”</p>
            </div>
        </div>
    </section>
    <section class="allCategoryList">
        <div class="container">
            <p class="borderBlueCenter text-center mt-0 h3">Next-Gen Sectors</p>
            <?php
                if(!empty($categories)){
                	$counter = 1;
                	foreach($categories as $category){
                		if($counter == 1){
                			$counter = 2;
			                ?>
				            <div class="greenBox catBox">
				                <h2 class="mt-0 borderWhite">
				                    <a href="<?php echo WEBSITE_URL."market-research-report/".$category['seo_pagename'].".asp"; ?>" title="<?php echo $category['cat_name']; ?>">
				                        <?php echo $category['cat_name']; ?>
				                    </a>
				                </h2>
				                <p class="mb-0">
				                    <?php $cat_home_descr = explode("\n",$category['cat_home_descr']); echo substr($cat_home_descr[0],0,650); ?>
				                </p>
                                <a class="btn btnBlue" href="<?php echo WEBSITE_URL."market-research-report/".$category['seo_pagename'].".asp"; ?>" class="" title="View All Reports">
                                    View All Reports
                                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                </a>
				            </div>
				            <div class="bgGrey catBox mb-5 reportListing">
				                <h3 class="my-0 borderBlue">
				                    <a href="<?php echo WEBSITE_URL.$category['rep_url'].".asp"; ?>" title="<?php echo ucwords(str_replace("-"," ",$category['rep_url'])); ?>"><?php echo ucwords(str_replace("-"," ",$category['rep_url'])); ?></a>
				                </h3>
				                <p class="mb-0"><?php echo $category['rep_name']; ?></p>
                                <div class="mt-4">
                                    <a href="<?php echo WEBSITE_URL."market-research/".$category['rep_url'].".asp"; ?>" class="btn btnPrimary" title="Read More">
                                    Read More
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                  </a>
                                </div>
				            </div>
				            <?php
			            }else{
			            	$counter = 1;
			                ?>
				            <div class="brownBox catBox">
				                <h2 class="mt-0 borderWhite">
				                    <a href="<?php echo WEBSITE_URL."market-research-report/".$category['seo_pagename'].".asp"; ?>" title="<?php echo $category['cat_name']; ?>">
				                        <?php echo $category['cat_name']; ?>
				                    </a>
				                </h2>
				                <p class="mb-0">
				                    <?php $cat_home_descr = explode("\n",$category['cat_home_descr']); echo substr($cat_home_descr[0],0,650); ?>
				                </p>
                                <a class="btn btnBlue" href="<?php echo WEBSITE_URL."market-research-report/".$category['seo_pagename'].".asp"; ?>" class="" title="View All Reports">
                                    View All Reports
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                </a>
				            </div>
				            <div class="bgGrey catBox mb-5 reportListing">
				                <h3 class="my-0 borderBlue">
				                    <a href="<?php echo WEBSITE_URL.$category['rep_url'].".asp"; ?>" title="<?php echo ucwords(str_replace("-"," ",$category['rep_url'])); ?>"><?php echo ucwords(str_replace("-"," ",$category['rep_url'])); ?></a>
				                </h3>
				                <p class="mb-0"><?php echo $category['rep_name']; ?></p>
                               <div class="mt-4">
                                    <a href="<?php echo WEBSITE_URL."market-research/".$category['rep_url'].".asp"; ?>" class="btn btnPrimary" title="Read More">
                                    Read More
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                  </a>
                                </div>
				            </div>
				            <?php
                		}
                	}
                }	
            ?>
        </div>
    </section>
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
</body>
</html>