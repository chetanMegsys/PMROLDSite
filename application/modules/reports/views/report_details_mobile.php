 <!DOCTYPE html>
 <html lang="en">

 <head>
   <?php $this->load->view("frontend/meta_links_reports"); ?>
   <link rel="preload" href="<?php echo WEBSITE_URL; ?>themes/css/theme-report-details-mobile.css" as="style">
   <link rel="preload" href="<?php echo WEBSITE_URL; ?>themes/css/report-details-mobile.css" as="style">
   
  <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL; ?>themes/css/theme-report-details-mobile.css">
 
  <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL; ?>themes/css/report-details-mobile.css">
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
                    <li class="breadcrumb-item">
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
                                    ?></span>
                    </li>
             </ol>
           </nav>
         </div>
         <div class="col-12 mt-3">
            <div class="report-heading">
                <h1 class="font18 text-blue-new bold600 my-3"><?php echo $report_keyword; ?></h1>
                <h2 class="font14 text-black3 lh22 bold500"><?php echo $report_detail[0]['rep_name']; ?></h2>
               
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
      </div>
     </div>
   </section>

   <section class="report-details-tabs">
     <div class="backgroundgray"></div>
     <div class="container">
       <div class="row">
         <div class="col-12">
           <ul class="nav nav-tabs" id="myTab">
             <li class="nav-item">
               <a class="nav-link active font14 text-black2 myactiveclass" id="summary-tab" data-toggle="tab" href="#summary" title="Summary">Summary</a>
             </li>

             <?php if ($report_detail[0]['rep_type'] == 'N') {  ?>
               <li class="nav-item">
                 <a class="nav-link font14 text-black2 myactiveclass" id="segmentation-tab" data-toggle="tab" href="#segmentation" title="CompanSegmentationies">Segments</a>
               </li>
             <?php } ?>
             <?php if ($report_detail[0]['rep_type'] == 'N') {  ?>
               <li class="nav-item">
                 <a class="nav-link font14 text-black2" title="ToC" rel="nofollow" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>/toc">ToC</a>
               </li>
             <?php } else if ($report_detail[0]['rep_type'] == 'M') {
              ?>
               <li class="nav-item ml-3">
                 <a class="nav-link font16 text-black2" rel="nofollow" href="<?php echo WEBSITE_URL; ?>toc/<?php echo $report_detail[0]['rep_id']; ?>" title="Request ToC">Request ToC</a>
               </li>
             <?php  } 
              if ($report_detail[0]['rep_type'] == 'N') {
                    ?>
                        <li class="nav-item" style="margin-right: -11px;">
                 <a class="nav-link font14 text-black2 myactiveclass" rel="nofollow" id="research-methodology-tab" href="<?php echo ROOT_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>/research-methodology" title="Research Methodology">Methodology</a>
               </li>
                <?php } ?>
           </ul>
           <div class="tab-content" id="myTabContent">

             <div class="tab-pane fade show active mt-4 mytab" id="summary">

               <?php
                $image_url = "";
                if (!empty($report_description)) {
                  $section_counter = 1;
                  foreach ($report_description as $report_desc) {
                    $arrString = array('http:');
                    $arrReplacement = array('https:');
                    $report_description1 =  str_replace("<img", '<img width="330" height="225"  ', stripcslashes(str_replace($arrString, $arrReplacement, $report_desc['description'])));


                    $image_with_title = "";

                    preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $report_description1, $url);
                    if ($image_url == "") {
                      $image_url = isset($url[1][0]) ? $url[1][0] : "";
                      if (!empty($url[1])) {
                        preg_match_all('/(alt)=("[^"]*")/i', $url[0][0], $img_content);
                        $image_with_title = str_replace("<img", "<img title=" . $img_content[2][0] . " ", $url[0][0]);
                      }
                    }

                     if (strpos($report_desc['title'], 'Report Scope') !== false) {
                                             if ($image_with_title != '') {
                                                $r_scope = str_replace($url[0][0], $image_with_title, $report_description1);
                                                $r_scope_title = $report_desc['title'];
                                                $r_scope_data = str_replace("<img", "<img class='img-fluid mx-auto' loading='lazy'", $r_scope);
                                            } else {
                                                $r_scope_title = $report_desc['title'];
                                               $r_scope_data = str_replace("<img", "<img class='img-fluid mx-auto' loading='lazy'", $report_description1);
                                            }

                                            continue;

                                        }

                                        if (
                                                strpos($report_desc['title'], 'Key Segments') !== false || 
                                                strpos($report_desc['title'], 'Market Segmentation') !== false || 
                                                strpos($report_desc['title'], 'Market Segment') !== false
                                            ) {
                                             if ($image_with_title != '') {
                                                $key_segment_title = $report_desc['title'];
                                                $key_segment = str_replace($url[0][0], $image_with_title, $report_description1);
                                                $key_segment_data = str_replace("<img", "<img class='img-fluid mx-auto' loading='lazy'", $key_segment);
                                            } else {
                                                $key_segment_title = $report_desc['title'];
                                               $key_segment_data = str_replace("<img", "<img class='img-fluid mx-auto' loading='lazy'", $report_description1);
                                            }
                                            continue;

                                        }
                ?>

                   <h2 class="text-blue-new font20 lineheight26"> <?php echo $report_desc['title']; ?></h2>
                   <?php
                    if ($image_with_title != '') {
                      $rep_desc = str_replace($url[0][0], $image_with_title, $report_description1);
                      echo str_replace("<img", "<img class='img-fluid mx-auto' loading='lazy'", $rep_desc);
                    } else {
                      echo str_replace("<img", "<img class='img-fluid mx-auto' loading='lazy'", $report_description1);
                    }
                    ?>

                   <?php
                    $action_type = $report_desc['action_type'];
                   
                  }
                }
                ?>

                <?php if (!empty($report_detail[0]['company'])) {?>
                <h2 class="text-blue-new font20 ">Companies Covered in <?php echo $report_keyword; ?></h2>
                <p> <?php echo $report_detail[0]['company']; ?> </p>
                <?php }?>
                
             </div>
             <div class="tab-pane fade mt-2" id="segmentation">
                  <?php if (!empty($r_scope_data)){
                    ?><h2 class="text-blue-new font20 "><?php echo $r_scope_title; ?></h2>
                    <?php echo $r_scope_data;
                  }
                ?> 
                  <?php if (!empty($key_segment_data)){
                    ?><h2 class="text-blue-new font20 "><?php echo $key_segment_title; ?></h2>
                    <?php echo $key_segment_data;
                  }
                ?> 
              </div>

           </div>
           <div class="tab-pane fade show mt-4 mytabactive" id="faq">
            <?php if (!empty($faqs)) { ?>
              <div class="reportFaqs pb-4">
                <h4 class="txt-black text-center mb-4 font18">Frequently Asked Questions -</h4>
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
                            <span class="faqArrow px-2">
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
            <?php } ?>
          </div>
           <?php 
            if(!empty($get_authors)){
            ?>
            <h2 class="text-blue-new font24  mt-2">About Author</h2>
            <div class="author-box">
                <div class="row">
                        <div class="col-4 mb-0">
                            <img src="<?php echo ROOT_URL.'assets/images/author/'.$get_authors->author_image;?>" width="100" height="100" loading="lazy" alt="<?php echo $get_authors->author_name;?>">
                        </div>
                        <div class="col-8">
                            <h3 class="text-blue-new font18 m-0">
                                <?php echo $get_authors->author_name; ?>
                            </h3>
                            <p class="mb-1"><?php echo $get_authors->author_experts; ?></p>
                            <p class="author-bio">
                                <?php echo $get_authors->author_bio;  ?>
                            </p>
                            <a class="rmlink" style="line-height: 30px;" href="<?php echo WEBSITE_URL."author/".$get_authors->author_id.".asp"; ?>">Read More →</a>
                        </div>
                </div>
            </div>
            <?php } ?>
         </div>
         
          
         <!--------- Col-3 -------->
         <div class="col-12">
           <aside class="right-side-section">
              <div class="PremiumReportInfo Our-clients right-boxes pb-4 pt-0 mt-5 text-center">
                    <p class="font18 text-blue-new py-3 m-0  text-center">Our Media Trust</p>
                    <img src="<?php echo WEBSITE_URL; ?>themes/image/pmr-media-citations-logos.webp" loading="lazy" title="<?php echo $report_detail[0]['cat_name']; ?>" width="300" height="168" alt="PMR Media Citations">
              </div>
              <div class="slider-section mt-4 right-boxes" style="position: relative;border-radius:10px;">
                  <p class="font18 text-blue-new pt-3 pb-2 m-0 text-center"> Testimonials</p>
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators ">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                      </ol>
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <div class="carosel-box">
                                  <div class="tour-item ">
                                      <div class="tour-desc ">
                                          <div class="font16">“Persistence Market Research has helped us immensely in compiling a sound database. Our expectations were exceeded by their research team.”</div>
                                          
                                          <div class="link-name d-flex text-right font15 bold600 pt-3">Fortune 500 Telecom Company, USA</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="carosel-box">
                                  <div class="tour-item ">
                                      <div class="tour-desc">
                                          <div class="font16">“The market numbers supplied by Persistence Market Research helped us successfully conclude our ongoing project and we are pleased with this purchase.” </div>
                                          
                                          <div class="link-name d-flex text-right font15 bold600 pt-3">Multinational Chemical Company, USA</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="carosel-box">
                                  <div class="tour-item ">
                                      <div class="tour-desc">
                                          <div class="font16">“The customer service provided by Persistence Market Research was great. We got our report well in time and customized to suit our business requirements.”</div>
                                          
                                          <div class="link-name d-flex text-right font15 bold600 pt-3">Multinational Electronics Company, Japan</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="carosel-box">
                                  <div class="tour-item">
                                      <div class="tour-desc">
                                          <div class="font16 pb-4">“The way Persistence Market Research handled the entire transaction, right from customization to after-sales queries, has been very impressive.”</div>
                                          <div class="link-name d-flex text-right font15 bold600">Leading Semiconductors Company, Taiwan</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="carosel-box">
                                  <div class="tour-item">
                                      <div class="tour-desc">
                                          <div class="font16 pb-4">“Thank you for supplying the report in time for our project to go through. Commendable customer service.”</div>
                                          <div class="link-name d-flex text-right font15 bold600">Leading Global Healthcare Fortune 500 Company, USA</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="carosel-box">
                                  <div class="tour-item">
                                      <div class="tour-desc">
                                          <div class="font16 pb-2">“The precise information given in Persistence Market Research’s reports has been priceless to us. We are very happy with this purchase, since the analysis in the report has been important in formulating our strategies.”</div>
                                          <div class="link-name text-right font15 bold600">Global Consulting Firm, USA</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                     
                    </div>
              </div>
             
             <div class="Customization-box right-boxes pb-4 pt-0 px-3 mt-4 text-center">
               <p class="font18 text-blue-new py-3 m-0  text-center">Customization</p>
               <p class="font16  mb-3 pb-2">Tailor-made research to suit your business growth.</p>
               <div class="btn-container mt-2">
                 <a href="javascript::void(0)" class="btn btn-Customization btn-custo bold500 request_popup" data-name="Request for Customization" data-prop="RC" data-btn="Get Customized Report" title="Request Customization" data-toggle="modal" data-target="#talk-to-author" title="Request Customization" data-class="btn-green">
                  Request Customization</a>
               </div>
             </div>
              <?php
                            if (!empty($related_reports_key)) {
                            ?>
                             <div class="relatedReportslist px-2 pt-0 pb-4 mt-4 mb-4 right-boxes">
                                 <p class="font18 text-blue-new py-3 m-0 text-center">Related Reports</p>
                                 <ul class="relatedReports-ul px-2 m-0" style="list-style:none;line-height: 26px;">
                                     <?php
                                        foreach ($related_reports_key as $related_report) {
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




   <div class="fixedBottomButton d-flex text-center" style="justify-content: center;">
     
     <a class="btn rfrs-btn w-100" href="javascript::void(0);" title="Free Report Sample" data-toggle="modal" data-target="#cta-banner-1">Get Free Report Sample
     </a>

   </div>
  
   <?php  $messagePlaceholder = "Describe your interest to the analyst in a few sentences"; ?>
  <?php $this->load->view("cta_popup_mobile"); ?>
  <?php $this->load->view("frontend/footer_mobile"); ?>
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
               <p class="text-center mt-4 mb-2 modalHead requestPopupTitle"> Free Report Sample</p>
               <form class="mt-4" name="" action="<?php echo $submit_url; ?>" method="POST" onsubmit="return cr_validateForm();">
                 <?php
                  $name = $this->security->get_csrf_token_name();
                  $hash = $this->security->get_csrf_hash();
                  $_SESSION[$name] = $hash;
                  ?>
                  <input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;background: transparent;" class="fname" value="">
                 <input type="hidden" name="<?= $name; ?>" value="<?= $hash; ?>" />
                 <input type="hidden" name="source" value="FMP" />
                 <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                 <input type="hidden" name="type" class="hdnType" value="S">

                 <div class="form-group position-relative">
                   <input type="text" name="name" id="idName" class="form-control name" placeholder="Full Name*" >
                   <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                     <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                   </svg>
                   <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                     <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                     <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                   </svg>
                 </div>

                 <div class="form-group position-relative">
                   <input type="email" name="emailId" id="idFctMREmailId" class="form-control emailId sampleForm2" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
                   <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                     <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                   </svg>
                   <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                     <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                     <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                   </svg>
                   <span class="text-danger font11" id="errorFullName"></span>
                 </div>
                 <div class="form-group position-relative">
                   <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone Number*" required="required" maxlength="14"  onblur="checksubmit(this.value);">
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
                   <input type="text" name="company" id="company" class="form-control company" placeholder="Company*" >
                   <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                     <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                   </svg>
                   <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                     <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                     <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                   </svg>
                 </div>


                 <div class="form-group position-relative">
                   <textarea name="message" id="message" class="form-control message" rows="2" placeholder="<?php echo $messagePlaceholder; ?>" maxlength="200" ></textarea>
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
                              <input type="text" name="captcha" class="captcha-input form-control captcha cr_txtCaptcha" placeholder = "Security Code*" id="cr_captcha-form" maxlength="3" size="3" tabindex="0" required />
                              <input type="hidden" class="cr_hdnCaptcha" name="hdnCaptcha" value="">
                              <span id="cr_captachacode"   class="errormsgs"></span>
                              <span class="text-danger captchaError"></span>
                          </div>
                      </div>
                  </div>
                 <button type="submit" class="buttonMyclass btn requestFreeSample " name="btnSubmit"><span class="requestFormButton">Yes! Send a Copy</span></button>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <script>
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
     $("body").on("focus", ".emailId,.phNo,.name,.company, .message, .jobTitle", function() {
       if ($(this).hasClass("border-green")) {
         $(this).removeClass("border-red");
         $(this).parent().find(".bi-info-circle").hide();
       } else {
         $(this).addClass("border-red");
         $(this).parent().find(".bi-info-circle").show();
       }
     });


     $('#myTab li a').on('click', function(e) {
      //  $('#myTab li a').eq($(this).val()).tab('show');
       $('html,body').animate({
           scrollTop: $("header").offset().top+600
         },
         'slow');
     })



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


     function getEmailValidation(email, className) {
      var email = email.toLowerCase().trim();
       if (email.includes('rocketmail.com') || email.includes('test.com') || email.includes('hotmail.com') || email.includes('gmail.com') || email.includes('yahoo.com') || email.includes('yahoo.com') || email.includes('outlook.com') || email.includes('icloud.com') || email.includes('mail.com') || email.includes('gmx.com') || email.includes('zohomail.com') || email.includes('zohomail.in') || email.includes('inbox.com') || email.includes('hotmail.it') || email.includes('googlemail.com') || email.includes('hotmail.es') || email.includes('hotmail.de') || email.includes('spam.com') || email.includes('junk.com') || email.includes('yahoo.fr') || email.includes('yahoo.co.uk') || email.includes('yahoo.co.in') || email.includes('yahoo.es') || email.includes('yahoo.it') || email.includes('yahoo.de') || email.includes('yahoo.in') || email.includes('yahoo.ca') || email.includes('yahoo.com.au') || email.includes('yahoo.co.jp') || email.includes('yahoo.com.ar') || email.includes('yahoo.com.br') || email.includes('yahoo.com.mx') || email.includes('yahoo.com.sg') || email.includes('hotmail.co.uk') || email.includes('hotmail.fr') || email.includes('msn.com') || email.includes('live.com') || email.includes('rediffmail.com') || email.includes('yandex.ru') || email.includes('ymail.com') || email.includes('mail.ru')) {

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

       var hash = window.location.hash;
        if (hash) {
            var $tabLink = $('a.nav-link[href="' + hash + '"]');
            if ($tabLink.length) {
                $tabLink.tab('show');
            }
        }

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
           $(".buttonMyclass").removeClass('btn requestFreeSample btn-green');
           $(".buttonMyclass").addClass('btn requestFreeSample btn-orange');
         } else {
           $(".buttonMyclass").removeClass('btn requestFreeSample btn-orange');
           $(".buttonMyclass").addClass('btn requestFreeSample btn-green');
         }
       });

       var url = window.location.href;

       var index = url.indexOf("#");
       if (index !== -1) {
         var hash = url.substring(index + 1);

         switch (hash) {

           case 'faq':

             $(".myactiveclass").removeClass("active");
             $(".mytabactive").removeClass("show active");
             $("#faq-tab").addClass("active");
             $("#faq").addClass("show active");
             parent.location.hash = ''
             break;
          
            case 'summary':

             $(".myactiveclass").removeClass("active");
             $(".mytabactive").removeClass("show active");
             $("#summary-tab").addClass("active");
             $("#summary").addClass("show active");
             parent.location.hash = ''
             break;

            case 'segmentation':

             $(".myactiveclass").removeClass("active");
             $(".mytabactive").removeClass("show active");
             $("#segmentation-tab").addClass("active");
             $("#segmentation").addClass("show active");
             parent.location.hash = ''
             break;

           case 'Companies':
             $(".myactiveclass").removeClass("active");
             $(".mytabactive").removeClass("show active");
             $("#companies-tab").addClass("active");
             $("#companies").addClass("show active");
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

  
  