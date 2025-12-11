 <!DOCTYPE html>
 <html lang="en">

 <head>
     <?php $this->load->view("frontend/meta_links_reports"); ?>

     <link href="<?php echo WEBSITE_URL; ?>themes/css/theme-report-details.css" rel="stylesheet" />
     <?php $report_keyword = $report_detail[0]['rep_keyword']; ?>

     

     <?php $this->load->view("frontend/header_report"); ?>

     <div class="fixed-header stickyHeader p-2">
         <div class="container report-details-tabs d-flex justify-content-between">
             <div class="">
                 <a class="navbar-brand p-0" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research Company">
                     <img class="img-fluid" width="120" height="32" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg" alt="Persistence Market Research Company" title="Persistence Market Research Company">
                 </a>
             </div>
             <div>
                 <ul class="nav nav-tabs" id="myTab">
                     <li class="nav-item">
                         <a class="nav-link active font14 text-black2 myactiveFloatclass" id="MarketBytes-tab1" data-toggle="tab" href="#MarketBytes" title="Market Bytes">Description</a>
                     </li>
                     <?php if ($report_detail[0]['rep_type'] == 'N') {  ?>
                         <li class="nav-item ml-3">
                             <a class="nav-link font14 text-black2 myactiveFloatclass" id="companies-tab1" data-toggle="tab" href="#companies" title="Companies">Companies</a>
                         </li>
                     <?php }
                        if (!empty($faqs)) { ?>
                         <li class="nav-item ml-3">
                             <a class="nav-link font14 text-black2 myactiveFloatclass" id="faq-tab1" data-toggle="tab" href="#faq" title="FAQ">FAQ</a>
                         </li>
                     <?php }
                        if ($report_detail[0]['rep_type'] == 'N') {
                        ?>
                         <li class="nav-item ml-3">
                             <a class="nav-link font14 text-black2" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>/toc" title="View ToC">Table of Content</a>
                         </li>
                     <?php } else if ($report_detail[0]['rep_type'] == 'M') {

                        ?> <li class="nav-item ml-3">
                             <a class="nav-link font14 text-black2" href="<?php echo WEBSITE_URL; ?>toc/<?php echo $report_detail[0]['rep_id']; ?>" title="Request ToC">Request ToC</a>
                             
                         </li>
                     <?php } ?>
                 </ul>
             </div>
             <div class="sample-btn">
                <a href="javascript::void(0)" class="btn request_popup mr-4" data-name="Get Discount" data-prop="RC" data-btn="Submit" title="Request Discount" data-toggle="modal" data-target="#talk-to-author" data-class="btn-green" style="color: #026800;padding: 0;display: inline;font-size: 16px !important;margin: 0px;border: solid 3px #d0d000;border-radius: 5px;padding: 7px 18px;text-decoration: none;">Promotional Offer</a>
                 <a class="btn btn-free-sample text-black2" title="Get Report Sample" href="<?php echo WEBSITE_URL; ?>samples/<?php echo $report_detail[0]['rep_id']; ?>">
                     Get Report Sample
                 </a>
             </div>
         </div>
     </div>
     <section class="report-details-topsec report-details">
         <div class="container py-3">
             <div class="row">
                 <div class="col-md-12">
                     <nav>
                         <ol class="breadcrumb bg-transparent p-0 my-0">
                             <li class="breadcrumb-item">
                                 <a href="<?php echo WEBSITE_URL; ?>" class="text-blue-new" title="Persistence Market Report">
                                     <span>Home</span>
                                 </a>
                             </li>
                             <li class="breadcrumb-item">
                                 <a href="<?php echo WEBSITE_URL; ?>market-research.asp" class="text-blue-new" title="Persistence Market Research">
                                     <span>Market Research</span>
                                 </a>
                             </li>
                             <li class="breadcrumb-item">
                                 <span><?php echo $report_keyword; ?></span>
                             </li>
                         </ol>
                     </nav>
                 </div>
             </div>
             <div class="row align-items-center">
                 <div class="col-md-9">
                     <div class="report-heading">
                         <h1 class="font28 bold600 text-blue-new my-3"><?php echo $report_keyword; ?></h1>
                         <h2 class="font16  bold400 lineheight24"><?php echo $report_detail[0]['rep_name']; ?></h2>
                         <p class="font16  bold400 mt-2 lineheight24"><?php echo $report_detail[0]['rep_subtitle'] != '' ? $report_detail[0]['rep_subtitle'] : ''; ?></p>
                         <div class="row">
                            <div class="col-md-4">  
                                <p class="m-0 font16">
                                    Report ID: <span class="date-mm bold600"> PMRREP<?php echo $report_detail[0]['rep_id']; ?> </span>
                                </p>
                                <p class="m-0 font16">
                                 <span class="txt-black1 bold600"><?php echo isset($report_detail[0]['rep_type']) && $report_detail[0]['rep_type'] == 'N' ? '<span class="bold400">Number of Pages: </span>' .$report_detail[0]['rep_pages'] . " " : '<span class="bold400">Report Type: </span>'.' Ongoing '; ?> </span>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p class="m-0 font16">
                                Format: <span class="txt-black1 bold600">PPT*, PDF, EXCEL </span>
                                </p>
                                <p class="m-0 font16">
                                    Industry: <span class="date-mm bold600"><?php echo $report_detail[0]['cat_name']; ?></span>
                                </p>
                            </div>
                            <div class="col-md-4">
                            <?php if (isset($report_detail[0]['rep_type']) && $report_detail[0]['rep_type'] == 'N') {
                                            ?>
                                <p class="m-0 font16">Published Date: <span class="date-mm bold600"> <?php echo $report_detail[0]['rep_type'] == 'N' ? date("F-Y", strtotime($report_detail[0]['update_date'])) : date('F-Y', strtotime(date('Y-m-d') . ' + 50 days')); ?> </span>
                                </p>
                            <?php
                                } ?>
                                
                            </div>
                         </div>
                        
                     </div>
                 </div>
                 <div class="col-md-3">
                    <div class="get-started-box right-boxes pb-4 pt-0 px-3 mt-3 text-center">
                            <p class="font18 text-blue-new m-0 text-center">
                            Report Price <?php $su_report_price = isset($report_detail[0]['rep_price_sul'])? "$". $report_detail[0]['rep_price_sul'].'*' :'';?>
                            </p>
                             <p class="font24 txt-black pb-3 m-0 bold400 text-center"><?php echo $su_report_price;?> </p>
                             <a class="btn bold500 btn-free-sample btn-block font18" href="<?php echo WEBSITE_URL . "checkout/" . $report_detail[0]['rep_id']; ?>" title="<?php echo $report_detail[0]['rep_type'] == 'N' ? 'Buy Now' : 'Pre Book'; ?>" style="border-radius: 10px; box-shadow: 3px 4px 5px #bfbfbf;background-color:#282C7D;color:#fff;">
                                 <?php echo $report_detail[0]['rep_type'] == 'N' ? 'Buy Now' : 'Pre Book'; ?></a>
                    </div>
                    <div class="sample-btn px-3 mb-3">
                        <a href="javascript::void(0)" class="btn btn-Customization btn-custo bold500 request_popup font18 btn-block" data-name="Request for Customization" data-prop="RC" data-btn="Get Customized Report" title="Request Customization" data-toggle="modal" data-target="#talk-to-author" data-class="btn-green" style="border:2px solid #026800;padding: 10px;color: #fff;border-radius: 10px;background-color:#026800;box-shadow: 3px 4px 5px #bfbfbf;"> Get Customisation
                    </a>
                    </div>
                 </div>
             </div>
         </div>
     </section>
     <div class="backgroundgray"></div>
     <section class="report-details-tabs" >
        <div class="container-fluid  py-2" style="background: #282C7D;">
            <div class="container">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="nav-item">
                        <a class="nav-link active font16 text-black2 triggerMarketbyte" id="MarketBytes-tab" data-toggle="tab" href="#MarketBytes" title="Market Bytes" onclick="getFloatClick('MarketBytes-tab1');">Description</a>
                    </li>
                    <?php if ($report_detail[0]['rep_type'] == 'N') {  ?>
                        <li class="nav-item ml-3">
                            <a class="nav-link font16 text-black2 tiggerCompanies" id="companies-tab" data-toggle="tab" href="#companies" title="Companies" onclick="getFloatClick('companies-tab1');">Companies</a>
                        </li>
                    <?php }
                    if (!empty($faqs)) { ?>
                        <li class="nav-item ml-3">
                            <a class="nav-link font16 text-black2 triggerfaq" id="faq-tab" data-toggle="tab" href="#faq" title="FAQ" onclick="getFloatClick('faq-tab1');">FAQ</a>
                        </li>
                    <?php } ?>

                    <?php if ($report_detail[0]['rep_type'] == 'N') {

                    ?>
                        <li class="nav-item ml-3">
                            <a class="nav-link font16 text-black2 triggerToc" title="View ToC" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>/toc">Table of Content</a>
                        </li>
                    <?php
                    } else  if ($report_detail[0]['rep_type'] == 'M') {
                    ?>
                        <li class="nav-item ml-3">
                            <a class="nav-link font16 text-black2" href="<?php echo WEBSITE_URL; ?>toc/<?php echo $report_detail[0]['rep_id']; ?>" title="Request ToC">Request Table of Content</a>
                        </li>

                    <?php
                    } ?>
                    <li class="nav-item">
                        <a href="javascript::void(0)" class="btn request_popup" data-name="Get Discount" data-prop="RC" data-btn="Submit" title="Request Discount" data-toggle="modal" data-target="#talk-to-author" data-class="btn-green" style="color: #fff;width: 100%;display: inline-block;font-size: 16px !important;margin: 0px;border: solid 3px #d0d000;border-radius: 10px;padding: 7px 12px;text-decoration: none;font-weight:bold;margin-left:15px;">Promotional Offer
                                    </a>
                    </li>
                </ul>
            </div>
        </div>
         <div class="container">
             <div class="row">
                 <div class="col-md-9 mt-3 mb-3" style="background: #fff;border-radius: 10px;">
                     
                     <div class="tab-content" id="myTabContent">

                         <div class="tab-pane fade show active mt-4" id="MarketBytes">
                             <?php
                                $image_url = "";
                                if (!empty($report_description)) {
                                    $section_counter = 1;
                                    foreach ($report_description as $report_desc) {


                                        $arrString = array('http:');
                                        $arrReplacement = array('https:');
                                        $report_description1 =  str_replace("<img", '<img width="620" height="424"  ', stripcslashes(str_replace($arrString, $arrReplacement, $report_desc['description'])));


                                        $image_with_title = "";

                                        preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $report_description1, $url);
                                        if ($image_url == "") {
                                            $image_url = isset($url[1][0]) ? $url[1][0] : "";
                                            if (!empty($url[1])) {
                                                preg_match_all('/(alt)=("[^"]*")/i', $url[0][0], $img_content);
                                                $image_with_title = str_replace("<img", "<img title=" . $img_content[2][0] . " ", $url[0][0]);
                                            }
                                        }
                                ?> <h2 class="text-blue-new font20 "> <?php echo  $report_desc['title']; ?> </h2>
                                     <?php
                                        if ($image_with_title != '') {
                                            $rep_desc = str_replace($url[0][0], $image_with_title, $report_description1);
                                            echo str_replace("<img", "<img class='img-fluid mx-auto' loading='lazy'", $rep_desc);
                                        } else {
                                            echo str_replace("<img", "<img class='img-fluid mx-auto' loading='lazy'", $report_description1);
                                        }


                                        $action_type = $report_desc['action_type'];
                                        switch ($action_type) {
                                            case "S":
                                        ?>
                                             <div class="CTA-banner1">
                                                 <div class="row">
                                                     <div class="col-md-4 text-center">
                                                         <img loading="lazy" src="<?php echo WEBSITE_URL; ?>themes/image/report-sample-latest1.png" width="100" height="140" alt="Sample Report" title="Sample Report">
                                                     </div>
                                                     <div class="col-md-8 text-center">
                                                         <p class="text-black2 font23 bold500 mb-0"> Report Sample is Available</p>
                                                         <p class="text-black2 font14 bold500 my-2">In-depth report coverage is now just a few seconds away</p>
                                                         <a href="javascript::void(0)" class="btn btn-freeReportSample bold500 text-black2" title="Get Report Sample" data-toggle="modal" data-target="#cta-banner-1"> Get Report Sample</a>
                                                     </div>
                                                 </div>
                                                 <svg viewbox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
                                                     <defs>
                                                         <path id='sineWave' fill="#ccc" fill-opacity="0.2" d="M0,160 C320,300,420,300,740,160 C1060,20,1120,20,1440,160 V0 H0" />
                                                     </defs>
                                                     <use class="wave" href="#sineWave" />
                                                     <use class="wave" x="-100%" href="#sineWave" />
                                                     <use class="wave1" href="#sineWave" />
                                                     <use class="wave1" x="-100%" href="#sineWave" />
                                                     <use class="wave2" href="#sineWave" />
                                                     <use class="wave2" x="-100%" href="#sineWave" />
                                                 </svg>
                                             </div>
                                         <?php
                                                break;
                                            case "CR":
                                            ?>
                                             <div class="CTA-banner4">
                                                 <div class="row">
                                                     <div class="col-md-3 text-center">
                                                         <img loading="lazy" src="<?php echo WEBSITE_URL; ?>themes/image/custom-report-cover.png" width="106" height="142" alt="Custom Report Cover" title="Custom Report Cover" class="custom-cover">
                                                     </div>
                                                     <div class="col-md-9 text-center">
                                                         <p class="text-black2 font23 bold500 mb-0">Make This Report Your Own</p>
                                                         <p class="text-black2 font16 bold500 my-2">Take Advantage of Intelligence Tailored to your Business Objective</p>
                                                         <a href="javascript::void(0)" class="btn btn-customizeRep bold500 font14" title="Get a Customized Version" data-toggle="modal" data-target="#cta-banner-4">Get a Customized Version</a>
                                                     </div>
                                                 </div>
                                                 <div class="banner4-animation">
                                                     <div class="bg"></div>
                                                     <div class="bg bg2"></div>
                                                     <div class="bg bg3"></div>
                                                 </div>
                                             </div>



                                         <?php
                                                break;
                                            case "RM":
                                            ?>

                                             <div class="CTA-banner2 text-center">
                                                 <div class="cta-box">
                                                     <div class="bg-all">
                                                         <div class="row align-items-center" style="position:relative;z-index:1">
                                                             <div class="col-md-6 text-center">
                                                                 <img src="<?php echo WEBSITE_URL; ?>themes/image/Cover-02.jpg" width="103px" height="145px" alt="Market Research Methodology" title="Market Research Methodology" loading="lazy">
                                                             </div>
                                                             <div class="col-md-6">
                                                                 <p class="text-black2 font23 bold500 mb-0">Market Research Methodology </p>
                                                                 <p class="text-black2 font16 bold500 my-2">-Perfect through Years of Diligence</p>
                                                                 <a href="javascript::void(0)" class="btn btn-customizeRep bold500 font14" title="Check Research Methodology" data-toggle="modal" data-target="#cta-banner-2">Check Research Methodology</a>
                                                             </div>
                                                         </div>
                                                         <div class="culd"></div>

                                                     </div>
                                                 </div>
                                             </div>

                                         <?php
                                                break;
                                        }
                                    }
                                }
                                ?>
                            <p class="py-2">We make every effort to deliver the reports as soon as possible. Most reports are delivered within 1 to 2 weeks from order confirmation, though some may take longer depending on the scope.</p>
                         </div>
                         <div class="tab-pane fade mt-4" id="companies">
                             <h2 class="text-blue-new font20 ">Companies Covered in This Report</h2>
                             <p> <?php echo $report_detail[0]['company']; ?> </p>
                         </div>
                         <div class="tab-pane fade mt-4" id="faq">
                             <?php if (!empty($faqs)) { ?>
                                 <!-- faq section start -->
                                 <div class="reportFaqs pb-4">
                                 <h2 class="text-blue-new font20 pb-2">Frequently Asked Questions</h2>
                                     <div id="faqAccordion">

                                         <?php $counter = 1;
                                            foreach ($faqs as $faq) { ?>
                                             <div class="card mb-3">
                                                 <div class="card-header p-0" id="heading<?php echo $counter; ?>">
                                                     <h5 class="mb-0 <?php if ($counter == 1) {
                                                                            echo '';
                                                                        } else {
                                                                            echo 'collapsed';
                                                                        } ?>" data-toggle="collapse" data-target="#collapse<?php echo $counter; ?>">
                                                         <button class="btn w-100 text-left"><?php echo $faq['question']; ?>
                                                             <span class="faqArrow float-right px-2">
                                                                 <span width="25" height="25" fill="currentColor" class="bi bi-plus">+</span>
                                                                 <span width="25" height="25" fill="currentColor" class="bi bi-dash">-</span>
                                                             </span>
                                                         </button>
                                                     </h5>
                                                 </div>
                                                 <div id="collapse<?php echo $counter; ?>" class="collapse <?php if ($counter == 1) {
                                                                                                                echo 'show';
                                                                                                            } ?>" data-parent="#faqAccordion">
                                                     <div class="card-body">
                                                         <p><?php echo $faq['answer']; ?></p>
                                                     </div>
                                                 </div>
                                             </div>
                                         <?php $counter++;
                                            } ?>




                                     </div>
                                 </div>
                                 <!-- faq section end -->
                             <?php } ?>
                         </div>
                     </div>
                 </div>
                 <!--------- Col-3 -------->
                 <div class="col-md-3">
                     <aside class="right-side-section">
                         <div class="sample-btn">
                             <a class="btn bold500 btn-free-sample  d-none" href="<?php echo WEBSITE_URL . "samples/" . $report_detail[0]['rep_id']; ?>" title="Get Report Sample">
                                 Get Report Sample
                             </a>
                         </div>

                         <div class="PremiumReportInfo right-boxes pb-4 mb-2 pt-2 mt-5" style="background-color:#e3eeff;">
                             <p class="font18 text-blue-new py-2 m-0 text-center" style="font-weight:600;">Request Report Sample</p>
                             <div class="d-flex flex-row px-lg-3">
                            <form class="mt-2 sampleForm" name="" action="" method="POST" onsubmit="return validateForm();" style="width:100%;">
                            <?php
                                $name = $this->security->get_csrf_token_name(); 
                                $hash = $this->security->get_csrf_hash();
                                $_SESSION[$name] = $hash;
                            ?>
                            <input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;background: transparent;" class="fname sr-only" value="">
                            <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
                            <input type="hidden" name="source" value="RRS" />
                            <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                            <input type="hidden" name="type" class="hdnType" value="S">
                            <div class="form-group position-relative">
                                <!-- <label>Full Name*</label> -->
                                <input type="text" name="name" id="idName" class="form-control name" placeholder="Full Name*" required="required">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                </svg>
                            </div>
                            <div class="form-group position-relative">
                                <input type="email" name="emailId" id="idFctMREmailId" class="form-control emailId sampleForm" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                </svg>
                                <span class="text-danger font12" id="errorFullName"></span>
                            </div>
                            <div class="form-group position-relative">
                                <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone Number"  maxlength="14"  onblur="checksubmit(this.value);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                </svg>
                                <span class="text-danger font11 errorPhoneNo" id="errorPhoneNo"></span>
                            </div>
                            
                            <div class="form-group position-relative">
                                <input type="text" name="company" id="idName" class="form-control company" placeholder="Company*" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                </svg>
                            </div>
                            <div class="form-group position-relative">
                                <input type="text" name="country" id="country" class="form-control company" placeholder="Country*" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                </svg>
                            </div>
                            
                            <div class="form-group position-relative">
                            <textarea type="text" name="message" id="idName" class="form-control message" rows="4" placeholder="Message" maxlength="200" ></textarea>

                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                </svg>
                            
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-12 mb-2">
                                    <div class="form-field">
                                        <span id="captcha" class="captcha"></span>
                                        <input type="text" name="captcha" class="captcha-input form-control captcha txtCaptcha" placeholder = "Security Code*" id="captcha-form" maxlength="3" size="3" tabindex="0" required />
                                        <input type="hidden" class="hdnCaptcha" name="hdnCaptcha" value="">
                                        <span id="captachacode"   class="errormsgs"></span>
                                        <span class="text-danger captchaError"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn requestFreeSample font18" name="btnSubmit" style="background: #282C7D;padding: 9px 37px;width: 100%;border: 2px solid #282C7D;border-radius: 10px;color: #fff;font-weight: 600;"> Submit</button>
                            </form>
                                 
                             </div>
                         </div>

                         <div class="get-started-box right-boxes pb-4 pt-0 mt-4 px-3 text-center">
                            <p class="font18 text-blue-new py-2 mb-0 text-center">
                                Report Price
                            </p>
                             <p class="font24 txt-black pb-3 m-0 bold400 text-center"> <?php echo $su_report_price;?></p>
                             <a class="btn btn-purchesReport text-black font18" href="<?php echo WEBSITE_URL . "checkout/" . $report_detail[0]['rep_id']; ?>" title="<?php echo $report_detail[0]['rep_type'] == 'N' ? 'Buy Now' : 'Pre Book'; ?>">
                                 <?php echo $report_detail[0]['rep_type'] == 'N' ? 'Buy Now' : 'Pre Book'; ?></a>
                         </div>

                         <div class="Customization-box right-boxes pb-4 pt-0 px-3 mt-4 text-center">
                             <p class="font18 text-blue-new py-3 m-0 bold400 text-center"> Customisation</p>
                             <p class="font16 bold400">Get our research tailor-made to suit your business requirement
                             </p>
                             <div class="btn-container">
                                 <a href="javascript::void(0)" class="btn btn-Customization btn-custo bold500 request_popup font18" data-name="Request for Customization" data-prop="RC" data-btn="Get Customized Report" title="Request Customization" data-toggle="modal" data-target="#talk-to-author" data-class="btn-green">
                                    Request Customisation</a>
                             </div>
                         </div>
                         <div class="Our-clients right-boxes pb-4 pt-0 mt-4 text-center">
                             <p class="font18 text-blue-new py-3 m-0 bold400 text-center">Our Media Trust</p>
                             <img src="<?php echo WEBSITE_URL; ?>themes/image/pmr-media-citations-logos.webp" loading="lazy" title="<?php echo $report_detail[0]['cat_name']; ?>" width="220" height="122" alt="PMR Media Citations">
                         </div>
                         <div class="Customization-box right-boxes pb-4 pt-0 px-3 mt-4 text-center">
                             <p class="font18 text-blue-new py-3 m-0 bold400 text-center"> Delivery Timeline </p>
                             <p class="font16 bold400">Kindly get in touch with our sales representative for information on delivery timeline of this report.
                             </p>
                             <div class="btn-container">
                                 <a href="javascript::void(0)" class="btn btn-Customization btn-custo bold500 request_popup font18" data-name="Enquire" data-prop="RC" data-btn="SUBMIT" title="Enquire" data-toggle="modal" data-target="#talk-to-author" data-class="btn-green" style="width: 100%;">
                                 Enquire</a>
                             </div>
                         </div>
                        
                        <div class="slider-section mt-4 right-boxes" style="position: relative;background: #e3eeff;border-radius:10px;">
                        <p class="font18 text-blue-new pt-3 pb-2 m-0 bold400 text-center"> Testimonials</p>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators ">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carosel-box">
                                            <div class="tour-item ">
                                                <div class="tour-desc ">
                                                    <div class="font16">“Persistence Market Research has helped us immensely in compiling a sound database. Our expectations were exceeded by their research team.”</div>
                                                    
                                                    <div class="link-name d-flex justify-content-end font15 bold600 pt-3">– Fortune 500 Telecom Company, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item ">
                                                <div class="tour-desc">
                                                    <div class="font16">“The market numbers supplied by Persistence Market Research helped us successfully conclude our ongoing project and we are pleased with this purchase.” </div>
                                                    
                                                    <div class="link-name d-flex justify-content-end font15 bold600 pt-3">– Multinational Chemical Company, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item ">
                                                <div class="tour-desc">
                                                    <div class="font16">“The customer service provided by Persistence Market Research was great. We got our report well in time and customized to suit our business requirements.”</div>
                                                    
                                                    <div class="link-name d-flex justify-content-end font15 bold600 pt-3">– Multinational Electronics Company, Japan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item">
                                                <div class="tour-desc">
                                                    <div class="font16 pb-4">“The way Persistence Market Research handled the entire transaction, right from customization to after-sales queries, has been very impressive.”</div>
                                                    <div class="link-name d-flex justify-content-end font15 bold600">– Leading Semiconductors Company, Taiwan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev right-pre" href="#carouselExampleIndicators" role="button" data-slide="prev" title="Previous">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next left-next" href="#carouselExampleIndicators" role="button" data-slide="next" title="Next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                        </div>
                        <div class="Customization-box right-boxes pb-4 pt-0 px-3 mt-4 text-center">
                             <p class="font18 text-blue-new py-3 m-0 bold400 text-center"> Research Methodology</p>
                             <p class="font16 bold400">Get Data-Driven Research Methodology for Accurate Insights
                             </p>
                             <div class="btn-container">
                                 <a href="javascript::void(0)" class="btn btn-Customization btn-custo bold500 request_popup font18" data-name="Get Research Methodology" data-prop="RC" data-btn="Get Research Methodology" title="Get Research Methodology" data-toggle="modal" data-target="#talk-to-author" data-class="btn-green">
                                 Get Methodology</a>
                             </div>
                         </div>
                         <?php
                            if (!empty($related_reports)) {
                            ?>
                             <div class="relatedReportslist px-2 pt-0 pb-4 mt-4 mb-4 right-boxes">
                                 <p class="font18 text-blue-new py-3 m-0 bold400 text-center"> Related Reports</p>
                                 <ul class="relatedReports-ul px-2 m-0" style="list-style:none;line-height: 26px;">
                                     <?php
                                        foreach ($related_reports as $related_report) {
                                        ?>
                                         <li class="mb-2"><a href="<?php echo WEBSITE_URL . "market-research/" . $related_report['rep_url'] . ".asp"; ?>" class="text-black font16" style="" title="<?php echo $related_report['rep_keyword']; ?>"><?php echo $related_report['rep_keyword']; ?></a></li>
                                     <?php
                                        }
                                        ?>
                                 </ul>
                             </div>
                         <?php
                            }
                            ?>

                     </aside>

                 </div>
             </div>
         </div>
     </section>

     <?php $this->load->view("frontend/footer"); ?>
     <link href="<?php echo WEBSITE_URL; ?>themes/css/report-details.css" rel="stylesheet" />
     <!-- google translater start -->
     <div class="fixTranslator">
         <a class="float-left mr-4" href="javascript::void(0)">
             <img loading="lazy" src="<?php echo WEBSITE_URL; ?>themes/image/translator.png" alt="Google translate" title="Google translate" height="32" width="32">
         </a>
         <div id="google_translate_element"></div>
     </div>

     <a href="javascript::void(0)" id="scrollToTop" title="Back to top" class="">
         <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-up text-white mt-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
             <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"></path>
         </svg>
     </a>
     <?php 
     $messagePlaceholder = "Message"; //Please explain your research goal in brief for us to serve you better.
     $this->load->view("cta_popup_web"); ?>


     <!-- talk to author popup -->
     <div class="modal fade cta-modal cta-b1-modal reportform" id="talk-to-author" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-body">
                     <div class="row m-0">
                         <style>
                            .carousel-control-next, .carousel-control-prev{
                                padding-bottom: 50px;
                            }
                            .relatedReports-ul li {
                                border-top: dotted 2px #ccc;
                            }
                            @media (min-width: 576px) {
                                .reportform .modal-dialog{
                                    max-width: 400px;
                                    margin: 50px auto;
                                }
                            }
                        </style>
                         <div class="col-lg-12 p-0">
                             <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close" style="outline:0">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                             <p class="text-center mt-3 mb-2 modalHead"><span class="bold700 requestPopupTitle"> Talk To Athour</span></p>
                             <form class="mt-4 gc_sampleForm" name="" action="<?php echo $submit_url; ?>" method="POST" onsubmit="return gc_validateForm();">
                                 <?php
                                    $name = $this->security->get_csrf_token_name();
                                    $hash = $this->security->get_csrf_hash();
                                    $_SESSION[$name] = $hash;
                                    ?>
                                <input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;background: transparent;" class="fname sr-only" value="">
                                 <input type="hidden" name="<?= $name; ?>" value="<?= $hash; ?>" />
                                 <input type="hidden" name="source" value="FWP" />
                                 <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                                 <input type="hidden" name="type" class="hdnType" value="ASK">

                                 <div class="form-group position-relative">
                                     <input type="text" name="name" id="idName" class="form-control name" placeholder="Full Name*" >
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                 </div>
                                 <div class="form-group position-relative">
                                     <input type="email" name="emailId" id="idFctMREmailId" class="form-control emailId sampleForm2" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" >
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                     <span class="text-danger font11 sampleForm2Error" id="errorFullName"></span>
                                 </div>
                                 <div class="form-group position-relative">
                                     <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone Number"  maxlength="14"  onblur="checksubmit(this.value);">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                     <span class="text-danger font11 errorPhoneNo" id="errorPhoneNo"></span>
                                 </div>
                                 <div class="form-group position-relative" style="margin-bottom: 30px;">
                                     <input type="text" name="company" id="idCompany" class="form-control company" placeholder="Company*" >
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                 </div>
                                 <div class="form-group position-relative" >
                                     <input type="text" name="country" id="idCountry" class="form-control company" placeholder="Country*" >
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                 </div>
                                 <div class="form-group position-relative" style="margin-bottom: 30px;">
                                     <textarea type="text" name="message" id="idMessage" class="form-control message" rows="2" placeholder="<?php echo $messagePlaceholder; ?>" maxlength="200" required></textarea>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                        </svg>

                                 </div>
                                 <div class="row">
                                    <div class="col-xs-12 col-md-12 mb-2">
                                        <div class="form-field" style="padding: 0px 48px;">
                                            <span id="gc_captcha" class="captcha"></span>
                                            <input type="text" name="captcha" class="captcha-input form-control captcha gc_txtCaptcha" placeholder = "Security Code*" id="gc_captcha-form" maxlength="3" size="3" tabindex="0" required />
                                            <input type="hidden" class="gc_hdnCaptcha" name="hdnCaptcha" value="">
                                            <span id="gc_captachacode"   class="errormsgs"></span>
                                            <span class="text-danger captchaError"></span>
                                        </div>
                                    </div>
                                </div>
                                 <button type="submit" class="buttonMyclass btn requestFreeSample" name="btnSubmit"> <span class=" requestFormButton"> Talk To Athor </span> </button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

     <script type="text/javascript">
         function googleTranslateElementInit() {
             new google.translate.TranslateElement({
                 pageLanguage: 'en',
                 includedLanguages: 'ar,zh-CN,zh-TW,cs,da,nl,en,eo,et,fi,fr,de,iw,hu,it,ja,ko,la,lb,no,pl,pt,ro,ru,sr,sk,es,th,tr'
             }, 'google_translate_element');
         }
     </script>

     <script>
         $(document).ready(function() {


            

             $(".expertPopup").click(function() {

                $('input[type=text]').each(function() {
                     $(this).val('');
                     $(this).removeClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").hide();
                 });

                 $('input[type=email]').each(function() {
                     $(this).val('');
                     $(this).removeClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").hide();
                 });
                 
                 var btnclass = $(this).attr("data-class");
                 var btnname = $(this).attr("data-btn");
                 var formType = $(this).attr("data-prop");


                 if (formType == 'ASK') {
                     $(".myclassName").removeClass('btn requestFreeSample');
                     $(".myclassName").addClass('btn requestFreeSample');
                 } else {
                     $(".myclassName").removeClass('btn requestFreeSample');
                     $(".myclassName").addClass('btn requestFreeSample');
                 }



             });


             $(".request_popup").click(function() {

                 
                $('input[type=text]').each(function() {
                     $(this).val('');
                     $(this).removeClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").hide();
                 });

                 $('input[type=email]').each(function() {
                     $(this).val('');
                     $(this).removeClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").hide();
                 });

                 var ctatype = $(this).attr("data-name");
                 var btnclass = $(this).attr("data-class");
                 var btnname = $(this).attr("data-btn");
                 var formType = $(this).attr("data-prop");
                 //    alert(formType);

                 if (formType == 'ASK') {
                     $(".buttonMyclass").removeClass('btn requestFreeSample');
                     $(".buttonMyclass").addClass('buttonMyclass btn requestFreeSample');
                 } else {
                     $(".buttonMyclass").removeClass('btn requestFreeSample');
                     $(".buttonMyclass").addClass('buttonMyclass btn requestFreeSample');
                 }
                 //  alert(ctatype);  alert(btnname);
                 $('.requestPopupTitle').html(ctatype);
                 $(".hdnType").val($(this).attr("data-prop"));

                 $(".requestFormButton").html(btnname);

             });

             $('#myTab li a').on('click', function(e) {
                 // $('#myTab li a').eq($(this).val()).tab('show');
                 $('html,body').animate({
                         scrollTop: $("header").offset().top
                     },
                     'slow');
             })
             // $(".search-btn").on("click",function(){

             // });


             $("#faq-tab1").on("click", function() {
                 $(".triggerfaq").trigger("click");

             });
             $("#MarketBytes-tab1").on("click", function() {
                 $(".triggerMarketbyte").trigger("click");


             });
             $("#companies-tab1").on("click", function() {
                 $(".tiggerCompanies").trigger("click");

             });
             $("#TOC-tab").on("click", function() {
                 $(".triggerToc").trigger("click");
             });

             var topScrollPosition = $(".PremiumReportInfo").offset().top;
             $(window).scroll(function() {
                 var a = $(window).scrollTop();
                 var b = $(window).scrollTop();
                 if (a >= topScrollPosition) {
                     $(".stickyHeader").addClass("showStickyheader");
                 } else {
                     $(".stickyHeader").removeClass("showStickyheader");
                 }


             });


             $("body").on("focus", ".emailId,.phNo,.name,.company, .message, .jobTitle", function() {
                 if ($(this).hasClass("border-green")) {
                     $(this).removeClass("border-red");
                     $(this).parent().find(".bi-info-circle").hide();
                 } else {
                     $(this).addClass("border-red");
                     $(this).parent().find(".bi-info-circle").show();
                 }
             });
             $("body").on("keyup", ".emailId,.phNo,.name,.company, .message, .jobTitle", function() {
                 if (!($(this).is(":invalid"))) {
                     $(this).removeClass("border-red");
                     $(this).addClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").show();
                     $(this).parent().find(".bi-info-circle").hide();
                 } else {
                     $(this).addClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").show();
                 }
             });

             $("table").addClass("table table-bordered");
         });


         function getFloatClick(value) {
             $(".myactiveFloatclass").removeClass("active");
             $("#" + value).addClass("active");
         }
     </script>
     <script type="text/javascript">
         function getEmailValidation(email, className) {

            var email = email.toLowerCase().trim();
             if ( email.includes('hotmail.com') || email.includes('gmail.com') || email.includes('yahoo.com') || email.includes('outlook.com') || email.includes('icloud.com') || email.includes('mail.com') || email.includes('gmx.com') || email.includes('zohomail.com') || email.includes('zohomail.in') || email.includes('inbox.com') || email.includes('zohomail.co.uk') || email.includes('aol.com') || email.includes('hotmail.fr') || email.includes('msn.com') || email.includes('yahoo.fr') || email.includes('yahoo.co.uk') || email.includes('yahoo.co.in') || email.includes('live.com') || email.includes('rediffmail.com') || email.includes('yandex.ru') || email.includes('ymail.com') || email.includes('mail.ru') || email.includes('hotmail.it') || email.includes('googlemail.com') || email.includes('yahoo.es') || email.includes('hotmail.es') || email.includes('yahoo.it') || email.includes('rocketmail.com') || email.includes("yahoo.ca") || email.includes("yahoo.in") || email.includes("yahoo.com.au") || email.includes("hotmail.de") || email.includes("yahoo.co.jp") || email.includes("yahoo.com.ar") || email.includes("yahoo.com.mx") || email.includes("yahoo.com.sg") || email.includes("spam.com") || email.includes("junk.com")) {
                 document.getElementsByClassName(className)[0].value = "";


                 $('.' + className).addClass("border-red");
                 $('.' + className).removeClass("border-green");
                 $('.' + className).parent().find(".bi-check-circle-fill").hide();
                 $('.' + className).parent().find(".bi-info-circle").show();
                 $('.' + className + 'Error').html('Please Enter Business Email');
             } else {

                 $('.' + className + 'Error').html('');
             }
         }
     </script>
     <script type="text/javascript">
         function checksubmit(phoneNumber) {

             var err = '';

             var allowChar = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 +_-()";
             var inputPhoneNumber = phoneNumber;
             var allCharValidate = true;
             var allNumbers = "";
             for (p = 0; p < inputPhoneNumber.length; p++) {
                 snchar = inputPhoneNumber.charAt(p);
                 for (k = 0; k < allowChar.length; k++)
                     if (snchar == allowChar.charAt(k))
                         break;
                 if (k == allowChar.length) {
                     allCharValidate = false;
                     break;
                 }
                 if (snchar != ",")
                     allNumbers += snchar;
             }

             if (allCharValidate) {
                 err += '';
                 var phonenovaluere = phoneNumber.replace(/\s/g, '');
                 $('.phNo').val(phonenovaluere);
                 $('.errorPhoneNo').html('');


             } else {
                 err += 'error';

                 $('.phNo').val('');

                 $('.errorPhoneNo').html('Invalid Phone Number');
                 $('.phNo').addClass("border-red");
                 $('.phNo').removeClass("border-green");
                 $('.phNo').parent().find(".bi-check-circle-fill").hide();
                 $('.phNo').parent().find(".bi-info-circle").show();

             }

         }
     </script>

     

     <script>
         $(document).ready(function() {

             var url = window.location.href;

             var index = url.indexOf("#");
             if (index !== -1) {
                 var hash = url.substring(index + 1);

                 switch (hash) {

                     case 'faq':
                         $(".triggerfaq").trigger("click");
                         parent.location.hash = ''
                         break;

                     case 'Companies':
                         $(".tiggerCompanies").trigger("click");
                         parent.location.hash = ''
                         break;
                 }
             }
         });
     </script>

     <script>
         document.oncontextmenu = function() {
             return false;
         };

         $(document).mousedown(function(e) {
             if (e.button == 2) {
                 return false;
             }
             return true;
         });

         var ctrlDown = false,
             ctrlKey = 17,
             cmdKey = 91,
             vKey = 86,
             cKey = 67;



         $(document).keydown(function(e) {
             if (e.keyCode == ctrlKey || e.keyCode == cmdKey) ctrlDown = true;
         }).keyup(function(e) {
             if (e.keyCode == ctrlKey || e.keyCode == cmdKey) ctrlDown = false;
         });



         $(".no-copy-paste").keydown(function(e) {
             if (ctrlDown && (e.keyCode == vKey || e.keyCode == cKey)) return false;
         });




         $(document).ready(function() {
             $('body').bind('cut copy paste', function(event) {
                 event.preventDefault();
             });
         });


         document.onkeypress = function(event) {
             event = (event || window.event);
             if (event.keyCode == 123) {
                 //return false;  
             }
         }
         document.onmousedown = function(event) {
             event = (event || window.event);
             if (event.keyCode == 123) {
                 //return false;  
             }
         }
         document.onkeydown = function(event) {
             event = (event || window.event);
             if (event.keyCode == 123) {
                 //return false;  
             }
         }


         window.ondragstart = function() {
             return false;
         }

         document.addEventListener('keyup', (e) => {
             if (e.key == 'PrintScreen') {
                 navigator.clipboard.writeText('');

             }
         });


         document.addEventListener('keydown', (e) => {
             if ((e.ctrlKey) && (e.key == 'i' || e.key == 'p' || e.key == 'u' || e.key == 'P' || e.key == 'U')) {

                 e.cancelBubble = true;
                 e.preventDefault();
                 e.stopImmediatePropagation();
             }

         });


         $(window).on('keydown', function(event) {
             if (event.keyCode == 123) {

                 //return false;
             } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {

                 /// return false;   
             } else if (event.ctrlKey && event.keyCode == 73) {

                 //return false;   
             }
         });
     </script>
 
    <script>
        // Request Sample form
            function captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#captcha span").remove(); $("#captcha input").remove(); $("#captcha").append("<span id='code'>" + Code + "</span><input type='button' onclick='captchaCode();' aria-label='Generate Captcha Code'>"); $(".hdnCaptcha").val(Code); }
            $(function () {
                captchaCode(); $('.sampleForm').submit(function () {
                    var captchaVal = $("#code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });

            function validateForm(){
                var flag = true;

                var captcha = $(".txtCaptcha").val();
                var hdnCaptcha = $(".hdnCaptcha").val();
                $(".captchaError").val("");

                if(hdnCaptcha != captcha){
                    flag = false;
                    $(".captchaError").html("* Please Enter Valid Captcha");
                }

                return flag;
            }
            // Get Customization
            function gc_captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#gc_captcha span").remove(); $("#gc_captcha input").remove(); $("#gc_captcha").append("<span id='gc_code'>" + Code + "</span><input type='button' onclick='gc_captchaCode();' aria-label='Generate Captcha Code'>"); $(".gc_hdnCaptcha").val(Code); }
            $(function () {
                gc_captchaCode(); $('.gc_sampleForm').submit(function () {
                    var captchaVal = $("#gc_code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });

            function gc_validateForm(){
                var flag = true;
                var captcha = $(".gc_txtCaptcha").val();
                var hdnCaptcha = $(".gc_hdnCaptcha").val();
                $(".captchaError").val("");

                if(hdnCaptcha != captcha){
                    flag = false;
                    $(".captchaError").html("* Please Enter Valid Captcha");
                }

                return flag;
            }

             // Report Sample Popup
             function rs_captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#rs_captcha span").remove(); $("#rs_captcha input").remove(); $("#rs_captcha").append("<span id='gc_code'>" + Code + "</span><input type='button' onclick='rs_captchaCode();' aria-label='Generate Captcha Code'>"); $(".rs_hdnCaptcha").val(Code); }
            $(function () {
                rs_captchaCode(); $('.rs_sampleForm').submit(function () {
                    var captchaVal = $("#rs_code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });

            function rs_validateForm(){
                var flag = true;
                var captcha = $(".rs_txtCaptcha").val();
                var hdnCaptcha = $(".rs_hdnCaptcha").val();
                $(".captchaError").val("");

                if(hdnCaptcha != captcha){
                    flag = false;
                    $(".captchaError").html("* Please Enter Valid Captcha");
                }

                return flag;
            }

             // Custom Report Popup
             function cr_captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#cr_captcha span").remove(); $("#cr_captcha input").remove(); $("#cr_captcha").append("<span id='cr_code'>" + Code + "</span><input type='button' onclick='cr_captchaCode();' aria-label='Generate Captcha Code'>"); $(".cr_hdnCaptcha").val(Code); }
            $(function () {
                cr_captchaCode(); $('.cr_sampleForm').submit(function () {
                    var captchaVal = $("#cr_code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });

            function cr_validateForm(){
                var flag = true;
                var captcha = $(".cr_txtCaptcha").val();
                var hdnCaptcha = $(".cr_hdnCaptcha").val();
                console.log(captcha+" = "+hdnCaptcha);
                $(".captchaError").val("");

                if(hdnCaptcha != captcha){
                    flag = false;
                    $(".captchaError").html("* Please Enter Valid Captcha");
                }

                return flag;
            }

             // Research Methodology Popup
             function rm_captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#rm_captcha span").remove(); $("#rm_captcha input").remove(); $("#rm_captcha").append("<span id='rm_code'>" + Code + "</span><input type='button' onclick='rm_captchaCode();' aria-label='Generate Captcha Code'>"); $(".rm_hdnCaptcha").val(Code); }
            $(function () {
                rm_captchaCode(); $('.rm_sampleForm').submit(function () {
                    var captchaVal = $("#rm_code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });

            function rm_validateForm(){
                var flag = true;
                var captcha = $(".rm_txtCaptcha").val();
                var hdnCaptcha = $(".rm_hdnCaptcha").val();
                console.log(captcha+" = "+hdnCaptcha);
                $(".captchaError").val("");

                if(hdnCaptcha != captcha){
                    flag = false;
                    $(".captchaError").html("* Please Enter Valid Captcha");
                }

                return flag;
            }

            $(".requestform .form-control").on("blur .form-control focus", function() {
            if (this.value) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
           
        });
    </script>
     </body>

 </html>