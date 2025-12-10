 <!DOCTYPE html>
 <html lang="en">

 <head>
     <?php $this->load->view("frontend/meta_links"); ?>
     <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL; ?>themes/css/theme-report-details-mobile.css">


     <?php $report_keyword = $report_detail[0]['rep_keyword']; ?>
     <?php $this->load->view("frontend/header_mobile"); ?>

     <section class="report-details-topsec report-details">
         <div class="container">
             <div class="row">
                 <div class="col-md-12" style="background: #f5f5f7;">
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb bg-transparent p-0 my-0">
                             <li class="breadcrumb-item" style="margin-top: -4px;">
                                <a href="<?php echo ROOT_URL; ?>" class="text-blue-new" title="Persistence Market Report" style="margin-top:-2px;">
                                <img src="<?php echo ROOT_URL; ?>assets/icons/home-icon.svg" width="16px" height="16px" alt="Home">
                                </a>
                            </li>
                             <li class="breadcrumb-item">
                                 <a href="<?php echo ROOT_URL . 'market-research-report/' . $report_detail[0]['seo_pagename']; ?>.asp" class="text-blue-new" title="<?php echo $report_detail[0]['cat_name']; ?>">
                                    <span><?php echo $report_detail[0]['cat_name']; ?></span>
                                </a>
                             </li>
                             <li class="breadcrumb-item" aria-current="page">
                                 <a href="<?php echo WEBSITE_URL . "market-research/" . $report_detail[0]['rep_url']; ?>.asp" class="text-black" title="<?php echo $report_keyword; ?>">
                                     <span><?php 
                                    $keyword = $report_keyword;
                                    $position = strpos($keyword, 'Market');
                                    if ($position !== false) {
                                        // Add length of 'Market' to include it in the substring
                                        echo substr($keyword, 0, $position + strlen('Market'));
                                    } else {
                                        // Fallback if 'Market' is not found
                                        echo $keyword;
                                    }
                                    ?>
                                </span>
                                 </a>
                             </li>
                             <li class="breadcrumb-item" class="text-black">
                                 <span>ToC</span>
                             </li>
                         </ol>
                     </nav>
                 </div>
                 <div class="col-12">
                     <div class="report-heading">
                     <h1 class="font18 text-blue-new bold600 my-3"><?php echo $report_keyword; ?></h1>
                    <h2 class="font14 text-black3 lh22"><?php echo $report_detail[0]['rep_name']; ?></h2>
                    <p class="d-flex bold600 mb-1" style="font-size:13px;">
                        <span  class="pr-2">ID: PMRREP<?php echo $report_detail[0]['rep_id']; ?></span>|
                        <span  class="pl-2 pr-2">
                            <?php if (isset($report_detail[0]['rep_type']) &&  $report_detail[0]['rep_type'] == 'N') {?>
                                <?php echo isset($report_detail[0]['rep_type']) && $report_detail[0]['rep_type'] == 'N' ? '' . $report_detail[0]['rep_pages'] . " Pages" : 'Upcoming'; ?>
                            <?php } ?>
                        </span>|
                        <span class="pl-2 pr-2">
                            <?php if (isset($report_detail[0]['rep_type']) &&  $report_detail[0]['rep_type'] == 'N') {
                            ?><?php  echo $report_detail[0]['rep_type'] == 'N' ? date("j M Y", strtotime($report_detail[0]['update_date'])) : date('j M Y', strtotime(date('Y-m-d') . ' + 50 days')); ?>
                            <?php } 
                            if (isset($report_detail[0]['rep_type']) &&  $report_detail[0]['rep_type'] == 'M') {
                                echo 'Upcoming';
                            }
                            ?>
                        </span>
                        </p>
                        <p class="d-flex bold600 mb-1" style="font-size:13px;">
                        <span class="pr-2">
                            Format: PDF, Excel, PPT*
                        </span>|
                        <span class="pl-2">
                            <?php
                            if (isset($parent_category[0]['cat_name'])) {
                            ?>
                            <a href="<?php echo ROOT_URL . 'market-research-report/' .$parent_category[0]['seo_pagename'].".asp"; ?>"><?php echo $parent_category[0]['cat_name']; ?></a>
                        <?php
                            } ?>
                        </span>
                    </p>
                    <div class="d-flex justify-content-center align-items-center my-3">
                      <a rel="nofollow" class="btn rc-btn" href="<?php echo WEBSITE_URL . "checkout/" . $report_detail[0]['rep_id']; ?>" title="<?php echo $report_detail[0]['rep_type'] == 'N' ? 'Buy Now' : 'Pre Book'; ?>">
                      <?php echo $report_detail[0]['rep_type'] == 'N' ? 'Buy Now' : 'Pre Book'; ?></a>
                      <a class="btn rs-btn" href="javascript::void(0);" title="Request Report Sample" data-toggle="modal" data-target="#cta-banner-1">
                        Free Report Sample
                      </a>
                  </div>
                 </div>
             </div>
          </div>
    </section>


     <!-- <div class="fixed-tabs"></div> -->
     <section class="report-details-tabs">
         <div class="backgroundgray"></div>
         <div class="container">
             <div class="row">
                 <div class="col-12">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="nav-item">
                            <a class="nav-link font14 text-black2" id="summary-tab" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp#summary" title="Summary">Summary</a>
                            </li>

                            <?php if ($report_detail[0]['rep_type'] == 'N') {  ?>
                            <li class="nav-item">
                                <a class="nav-link font14 text-black2" id="segmentation-tab" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp#segmentation" title="CompanSegmentationies">Segments</a>
                            </li>
                            <?php } ?>
                            <?php if ($report_detail[0]['rep_type'] == 'N') {  ?>
                            <li class="nav-item">
                                <a class="nav-link active font14 text-black2" title="ToC" rel="nofollow" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>/toc">ToC</a>
                            </li>
                            <?php } else if ($report_detail[0]['rep_type'] == 'M') {
                            ?>
                            <li class="nav-item ml-3">
                                <a class="nav-link active font16 text-black2" rel="nofollow" href="<?php echo WEBSITE_URL; ?>toc/<?php echo $report_detail[0]['rep_id']; ?>" title="Request ToC">Request ToC</a>
                            </li>
                            <?php  } ?>
                            <li class="nav-item">
                                <a class="nav-link  font14 text-black2 myactiveclass" rel="nofollow" id="research-methodology-tab" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>/research-methodology" title="Research Methodology">Methodology</a>
                            </li>
                        </ul>
                     <div class="tab-content" id="myTabContent">

                         <div class="tab-pane fade  mt-4" id="MarketBytes">

                         </div>
                         <div class="tab-pane fade mt-4" id="companies">
                         </div>
                         <div class="tab-pane fade mt-4" id="faq">

                         </div>
                         <div class="tab-pane fade mt-4 show active " id="TOC">
                         <style>
                                #TOC ol:first-of-type:not(ol ol) {
                                    padding-left: 0;
                                }
                                #TOC ol {
                                    counter-reset: item; 
                                    padding-left: 1.2rem;
                                    line-height: 2rem;
                                }
                                #TOC li {
                                    display: block;
                                    counter-increment: item;
                                }
                                #TOC > div > ol > li {
                                    font-weight: bold;
                                }

                                #TOC li::before {
                                    content: counters(item, ".") ". ";
                                }
                                #TOC > div > ol > li::before {
                                    font-weight: bold;
                                }
                                #TOC > div > ol > li > ol li,
                                #TOC > div > ol > li > ol li::before {
                                    font-weight: normal !important;
                                }
                            </style>
                             <div class="mb-5">
                                 <h3 class="txt-black text-center mb-4 font18">Table Of Content </h3>
                                 <p> <?php echo $report_detail[0]['rep_tab_content']; ?> </p>
                                 <div class="CTA-report-sample my-3">
                                     <div class="text-center">
                                         <p class="text-black2 bold500 font20">Report Sample is Available</p>
                                         <p class="text-black2 font14">In-depth report coverage is now just a <br>few seconds away</p>
                                         <a href="javascript::void(0)" class="btn btn-freeReportSample bold500 text-black2" title="Get FREE Report Sample" data-toggle="modal" data-target="#cta-banner-1">Request Sample</a>
                                         
                                     </div>
                                 </div>
                             </div>
                             <div class="mb-5">
                                <?php if(!empty($report_detail[0]['rep_list_table'])){?>
                                 <h4 class="txt-black text-center mb-4">List Of Table</h4>
                                 <p> <?php echo $report_detail[0]['rep_list_table']; ?> </p>
                                 <?php }?>
                                 <div class="CTA-customizeRep my-3">
                                     <div class="text-center">
                                         <p class=" bold500 font20 text-black">Make This Report Your Own</p>
                                         <p class="font14 text-black">Take Advantage of Intelligence Tailored to your Business Objective</p>
                                         <a href="javascript::void(0)" class="btn btn-customizeRep bold500 font14" title="Get a Customized Version" data-toggle="modal" data-target="#cta-banner-4">
                                              Request Customization</a>
                                     </div>
                                 </div>
                             </div>
                             <?php if(!empty($report_detail[0]['rep_list_chart'])){?>
                             <div class="mb-5">
                                 <h4 class="txt-black text-center mb-4">- List Of Chart -</h4>
                                 <p> <?php echo $report_detail[0]['rep_list_chart']; ?> </p>
                             </div>
                             <?php }?>
                         </div>
                     </div>
                 </div>
                 <!--------- Col-3 -------->
                 <div class="col-12">
                     <aside class="right-side-section">
                         <div class="PremiumReportInfo right-boxes pb-4 pt-0 mt-2">
                             <p class="font16 txt-black py-3 m-0 bold300 text-center">Report Details</p>
                             <div class="d-flex px-lg-3">
                                 <div class="w-50 pl-4">
                                     <img src="<?php echo WEBSITE_URL; ?>themes/image/sample_report.svg" width="95" height="134" class="img-fluid" title="Europe Mini Scrap Metal Shredder Market" alt="Europe Mini Scrap Metal Shredder Market">
                                 </div>
                                 <div>
                                     <ul class="list-unstyled mb-1">
                                         <li class="txt-black1 font10 pb-2"><span class="date-mm"> PMRREP<?php echo $report_detail[0]['rep_id']; ?> </span></li>
                                         <?php if (isset($report_detail[0]['rep_type']) && $report_detail[0]['rep_type'] == 'N') {
                                            ?>
                                             <li class="txt-black1 font10 pb-2"><span class="date-mm"> <?php echo date("F-Y", strtotime($report_detail[0]['update_date'])); ?> </span> </li>
                                         <?php } ?>
                                         <li class="txt-black1 font10 pb-2"><span class="date-mm"><?php echo $report_detail[0]['cat_name']; ?></span></li>
                                         <li class="txt-black1 font10 pb-2"><span class="txt-black1"><?php echo $report_detail[0]['rep_type'] == 'N' ? $report_detail[0]['rep_pages'] . " Pages" : 'Ongoing'; ?></span></li>
                                         <li class="txt-black1 font10 pb-2 "><span class="txt-black1">PPT*, PDF, WORD, EXCEL </span></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>

                         <div class="get-started-box right-boxes pb-4 pt-0 px-3 mt-4 text-center">
                             <p class="font16 txt-black py-3 m-0 bold300 text-center"> Get Started </p>
                             <p class="font12 bold300">Get insights that lead to new growth opportunities</p>
                             <a class="btn btn-purchesReport bold500 text-white" href="<?php echo WEBSITE_URL . "checkout/" . $report_detail[0]['rep_id']; ?>" title=" <?php echo $report_detail[0]['rep_type'] == 'N' ? 'Purchase Report' : 'Pre Book'; ?>">
                                  <?php echo $report_detail[0]['rep_type'] == 'N' ? 'Purchase Report' : 'Pre Book'; ?></a>
                         </div>
                         <div class="let-connect mb-3 mt-4  d-none">
                             <div class="analyst-img">
                                 <p class="font16 txt-black pt-2 mb-0 bold300 text-center">- Analyst Speak -</p>
                             </div>
                             <div class="analyst-info d-flex">
                                 <div class="px-2">
                                     <img src="<?php echo WEBSITE_URL; ?>themes/image/Mohit-lets-connect.png" width="95px" height="95px" alt="Talk To an Expert Today" class="img-fluid" title="Mohit Loshali">
                                 </div>
                                 <div class="analyst-name ml-2">
                                     <p class="mb-0 font15 bold300 text-blue">Mohit Loshali</p>
                                     <p class="mb-0 designation font11">Principal Consultant</p>
                                     <p class="mb-0"><a href="https://www.linkedin.com/in/mohit-loshali-2aa77023/" title="Mohit Loshali" target="_blank"><span class="linkedin"></span></a></p>
                                 </div>
                             </div>
                             <div class="text-center">
                                 <a href="<?php echo WEBSITE_URL . "ask-an-expert/" . $report_detail[0]['rep_id']; ?>" class="btn btn-connect-Auth  bold500" title="Talk To Author"><svg xmlns="https://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-headset align-middle mr-1" viewBox="0 0 16 16">
                                         <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                                     </svg> Talk To Author</a>
                             </div>

                         </div>

                         <div class="Customization-box right-boxes pb-4 pt-0 px-3 mt-4 text-center">
                             <p class="font16 txt-black py-3 m-0 bold300 text-center"> Customization</p>
                             <p class="font12 bold300 mb-3 pb-2">Explore Intelligence Tailored to Your Business Goals.</p>
                             <div class="btn-container mt-2">
                                 <a href="javascript::void(0)" class="btn btn-Customization btn-custo bold500 request_popup" data-class="btn-orange" data-name="Request for Customization" data-prop="RC" data-btn="Get Customized Report" title="Request Customization" data-toggle="modal" data-target="#talk-to-author" title="Request Customization" title="Request Customization">Request Customization</a>
                             </div>
                         </div>

                         <div class="quickContact right-boxes px-2 pt-0 pb-0 mt-4 text-center">
                             <p class="fs-16 txt-black contactList py-3 bold300 m-0">- Quick Contact -</p>
                             <div class="QuickContactList">
                                
                                 <div class="contact4 contactList text-left pr-2 pl-3">
                                     <a href="mailto:sales@persistencemarketresearch.com" class="text-black3 font14 d-flex" title="Email Us"><span class="quickContactIMG"></span> <span class="quickContactText">Email Us</span></a>
                                 </div>
                             </div>
                         </div>

                        

                         <div class="member-of right-boxes pb-4 pt-0 mt-4 text-center">

                             <p class="font16 txt-black py-3 m-0 bold300 text-center">- Member Of -</p>
                            
                                 <img class="" width="104" height="85" src="<?php echo WEBSITE_URL; ?>themes/image/dun-logo-new.png" alt="Duns Registered" title="Duns Registered">

                             
                         </div>
                         <?php
                            if (!empty($related_reports)) {
                            ?>
                             <div class="relatedReportslist px-2 pt-3 pb-4 mt-4 mb-4 right-boxes">
                                 <p class="text-center h6 bold300">- Related Reports -</p>
                                 <ul class="relatedReports-ul pl-4 m-0">

                                     <?php
                                        foreach ($related_reports as $related_report) {
                                        ?>

                                         <li><a href="<?php echo WEBSITE_URL . "market-research/" . $related_report['rep_url'] . ".asp"; ?>" class="text-black font14" title="<?php echo $related_report['rep_keyword']; ?>"><?php echo $related_report['rep_keyword']; ?></a></li>
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


    
     

      <div class="fixedBottomButton d-flex text-center" style="justify-content: center;">
     
     <a class="btn rfrs-btn w-100" href="javascript::void(0);" title="Free Report Sample" data-toggle="modal" data-target="#cta-banner-1">Get Free Report Sample
     </a>

   </div>


     <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL; ?>themes/css/report-details-mobile.css">
     <?php $this->load->view("cta_popup_mobile"); ?>
     <?php $this->load->view("frontend/footer_mobile"); ?>
    <?php  $messagePlaceholder = "Describe your interest to the analyst in a few sentences"; ?>
     <!-- talk to author popup -->
     <div class="modal fade cta-modal cta-b1-modal" id="talk-to-author" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-body">
                     <div class="row m-0">
                         <div class="col-lg-8 p-0">
                             <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close" style="outline:0">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                             <p class="text-center mt-4 mb-2 modalHead requestPopupTitle"> Report Sample is Available</p>
                             <form class="mt-4 cr_sampleForm" name="" action="<?php echo $submit_url; ?>" method="POST" onsubmit="return cr_validateForm();">
                                 <?php
                                    $name = $this->security->get_csrf_token_name();
                                    $hash = $this->security->get_csrf_hash();
                                    $_SESSION[$name] = $hash;
                                    ?>

                                 <input type="hidden" name="<?= $name; ?>" value="<?= $hash; ?>" />
                                 <input type="hidden" name="source" value="FMP" />
                                 <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                                 <input type="hidden" name="type" class="hdnType" value="S">
                                 <div class="form-group position-relative">
                                     <input type="text" name="name" id="idName" class="form-control name" placeholder="Full Name*" required="required" pattern="^$|^\S+.*">
                                     <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                 </div>
                                 <div class="form-group position-relative">
                                     <input type="email" name="emailId" id="idFctMREmailId" class="form-control sampleForm2 emailId" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" >
                                     <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                     <span class="text-danger font11 sampleForm2Error" id="errorFullName"></span>
                                 </div>
                                 <div class="form-group position-relative">
                                     <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone Number*" required="required" maxlength="14" pattern="^$|^\S+.*" onblur="checksubmit(this.value);">
                                     <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                     <span class="text-danger font11 errorPhoneNo" id="errorPhoneNo"></span>
                                 </div>
                                 <div class="form-group position-relative">
                                     <input type="text" name="company" id="idCompany" class="form-control company" placeholder="Company*" required="required" pattern="^$|^\S+.*">
                                     <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                 </div>
                                 <div class="form-group position-relative">
                                     <textarea type="text" name="message" id="idMessage" class="form-control message" placeholder="<?php echo $messagePlaceholder ?>" maxlength="200" required></textarea>

                                     <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>

                                 </div>

                                 <div class="row">
                                    <div class="col-xs-12 col-md-12 mb-2">
                                        <div class="form-field" style="padding: 0px 25px;">
                                            <span id="cr_captcha" class="captcha"></span>
                                            <input type="text" name="captcha" class="captcha-input form-control captcha cr_txtCaptcha" placeholder = "Security Code*" id="cr_captcha-form" maxlength="3" size="3" tabindex=3 required />
                                            <input type="hidden" class="cr_hdnCaptcha" name="hdnCaptcha" value="">
                                            <span id="cr_captachacode"   class="errormsgs"></span>
                                            <span class="text-danger captchaError"></span>
                                        </div>
                                    </div>
                                </div>
                                 <button type="submit" class="buttonMyclass btn requestFreeSample requestFormButton" name="btnSubmit">Yes! Send a Copy</button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
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
                     $(".myclassName").addClass('btn requestFreeSample btn-orange');
                 } else {
                     $(".myclassName").removeClass('btn requestFreeSample btn-orange');
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

                 $('.requestPopupTitle').html(ctatype);
                 $(".hdnType").val($(this).attr("data-prop"));

                 $(".requestFormButton").html(btnname);

                 if (formType == 'ASK') {
                     $(".buttonMyclass").removeClass(' btn requestFreeSample requestFormButton btn-green');
                     $(".buttonMyclass").addClass('buttonMyclass btn requestFreeSample requestFormButton btn-orange');
                 } else {
                     $(".buttonMyclass").removeClass(' btn requestFreeSample requestFormButton btn-orange');
                     $(".buttonMyclass").addClass('buttonMyclass btn requestFreeSample requestFormButton btn-green');
                 }

             });
         });


         var topScrollPosition = $("header").offset().top + 400;
         $(window).scroll(function() {
             var a = $(window).scrollTop();
             // footer sticky code
             if (a >= topScrollPosition) {
                 $("#scrollToTop").addClass("show");
                 $(".stickyWhatsapp").addClass("showStickyWhatsapp");
             } else {
                 $("#scrollToTop").removeClass("show");
                 $(".stickyWhatsapp").removeClass("showStickyWhatsapp");
             }
         });

         $("#scrollToTop").click(function() {
             $('html,body').animate({
                     scrollTop: $("header").offset().top
                 },
                 'slow');
         });
         $("body").on("focus", ".emailId,.phNo,.name,.company, .jobTitle, .message", function() {
             if ($(this).hasClass("border-green")) {
                 $(this).removeClass("border-red");
                 $(this).parent().find(".bi-info-circle").hide();
             } else {
                 $(this).addClass("border-red");
                 $(this).parent().find(".bi-info-circle").show();
             }
         });


         $("body").on("keyup", ".emailId,.phNo,.name,.company, .jobTitle, .message", function() {
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

         var fixmeTop = $('#myTab').offset().top;

         $(window).scroll(function() {

             var currentScroll = $(window).scrollTop();
             if (currentScroll >= fixmeTop) {
                 $('#myTab').addClass('fixedMarketByteBar');
                 $('.backgroundgray').addClass('fixedMarketByteBar');
                 $('.fixed-bottom-btn').addClass('fixedMarketByteBar');

                 $('.fixedBottomButton').addClass('active');
             } else {
                 $('#myTab').removeClass('fixedMarketByteBar');
                 $('.backgroundgray').removeClass('fixedMarketByteBar');
                 $('.fixed-bottom-btn').removeClass('fixedMarketByteBar');
                 $('.fixedBottomButton').removeClass('active');
             }

         });

         $("table").addClass("table table-bordered");
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

                 //   $('.phNo1').parent().find(".bi-check-circle-fill").hide();
                 //   $(".phNo1").removeClass("border-green");

             } else {
                 err += 'error';

                 $('.phNo').val('');
                 // $(".phNo1").removeClass("border-green");
                 $('.errorPhoneNo').html('Invalid Phone Number');
                 $('.phNo').addClass("border-red");
                 $('.phNo').removeClass("border-green");
                 $('.phNo').parent().find(".bi-check-circle-fill").hide();
                 $('.phNo').parent().find(".bi-info-circle").show();
             }

         }
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
    
    