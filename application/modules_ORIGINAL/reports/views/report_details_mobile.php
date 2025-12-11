<!DOCTYPE html>
<html lang="en">
  <head>

  	<?php $this->load->view("partials/meta_links"); ?>
    
    <?php $report_keyword = $report_detail[0]['rep_keyword']; ?>

  	<?php $this->load->view("partials/header_report_detail_mobile"); ?>

    <main role="main">
      <section class="reportBanner">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 reportMainInfoBox">
              <div class="reportMainInfo text-white">
                <h1 class="reportTitle my-0"><?php echo $report_keyword; ?></h1>
                <h2 class="reportSubTitle"><?php echo $report_detail[0]['rep_name']; ?></h2>
                <p class="repDesContent"><?php echo $report_detail[0]['rep_breadcrumb']!=''?$report_detail[0]['rep_breadcrumb']:''; ?></p>
              </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xs-12">
              <div class="d-inline-block reportCover">
                <div class="reportInfoList d-inline-block">
                  <ul class="list-unstyled mb-0 text-white">
                    <?php if($report_detail[0]['rep_type']=='N'){ ?>
                        <li class="repDate"><span><?php echo date("M-Y",strtotime($report_detail[0]['rep_pub_date'])); ?></span></li>
                    <?php } ?>
                    <li class="repID"><span>PMRREP<?php echo $report_detail[0]['rep_id']; ?> </span></li>
                    <li class="repType"><span><?php echo $report_detail[0]['rep_type']=='N' ? $report_detail[0]['rep_pages']." Pages" : 'Ongoing'; ?></span></li>
                    <li class="repCatName">
                      <a href="<?php echo WEBSITE_URL."market-research-report/".$report_detail[0]['seo_pagename'].".asp"; ?>" title="<?php echo $report_detail[0]['cat_name']; ?>" class="text-white" target="_blank">
                      <span><?php echo $report_detail[0]['cat_name']; ?></span>
                      </a>
                    </li>
                    <li class="repFile"><span>PPT, PDF, WORD, EXCEL</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="reportBannerBtns col-md-12 col-lg-12 col-xs-12 mt-4">
              <ul class="list-unstyled pl-0 text-center">
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
        </div>
      </section>
      <div class="breadCrumb py-3">
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
              <span><?php echo $report_keyword; ?></span>
            </li>
          </ol>
        </div>
      </div>
      <nav class="navbar marketByteBar" id="mainNav">
        <div class="container">
          <div>
            <a class="navbar-brand navbar-expand-lg js-scroll-trigger txtBlue" href="#">
            Market Bytes
            </a>
            <button class="navbar-toggler collapsed pr-0" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
              </svg>
            </span>
            </button>
          </div>
          <div class="collapse navbar-collapse mx-0" id="navbarResponsive">
            <ul class="navbar-nav reportDesLink ">
              <?php
              if(!empty($report_description)){
                  $section_counter = 1;
                  foreach($report_description as $report_desc){
                      ?>
		              <li class="nav-item">
		                <a class="nav-link js-scroll-trigger" href="#section-<?php echo $section_counter++; ?>">
		                <?php echo $report_desc['title']; ?>
		                </a>
		              </li>
      				  <?php
              	  }
              }else{
              ?>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#section-description">
                Introduction
                </a>
              </li>
              <?php
	          }
	         ?>
          
            </ul>
             <div>
             <?php
                  $toc_link = '';
                  $toc_link_title = '';
                  if($report_detail[0]['rep_type']=='N'){
                      $toc_link = WEBSITE_URL."market-research/".$report_detail[0]['rep_url']."/toc";
                      $toc_link_title = 'View TOC';
                  }else{
                      $toc_link = WEBSITE_URL.'toc/'.$report_detail[0]['rep_id'];
                      $toc_link_title = 'Request TOC';
                  }
                  ?>
                <div class="reportLink">
                  <a class="h4 viewTopc" target="_blank" href="<?php echo $toc_link; ?>" title="View ToC"><?php echo $toc_link_title; ?></a>
                </div>
           </div>
          </div>
        </div>
      </nav>
      <section class="reportDescSec pt-0">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12">
              <?php
                $image_url = "";
                if(!empty($report_description)){
                    $section_counter = 1;
                    foreach($report_description as $report_desc){
						$arrString = array('http:');
						$arrReplacement = array('https:');
						$report_description1 =  str_replace("<img",'<img width="408" height="276"  ',stripcslashes(str_replace($arrString,$arrReplacement,$report_desc['description'])));
					 
					 
                        $image_with_title = "";

                        preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $report_description1, $url);
                        if($image_url == ""){
                            $image_url = isset($url[1][0])?$url[1][0]:"";
                            if(!empty($url[1])){
                                preg_match_all('/(alt)=("[^"]*")/i',$url[0][0], $img_content);
                                $image_with_title = str_replace("<img","<img title=".$img_content[2][0]." ",$url[0][0]);
                            }
                        }
                    ?>
		              <section id="section-<?php echo $section_counter++; ?>" class="reportDescBox">

		              	  <?php
		                  if($section_counter==3 && $report_detail[0]['company']!=''){
		                  ?>
		                  <section id="section-companies" class="reportDescBox reportDescBoxPullLeft">
			                  <h3 class="txtBlue mt-0">
			                    Companies
			                  </h3>
			                  <?php echo $report_detail[0]['company']; ?>
			              </section>
		                  <?php
                  		  }
                          ?>
		                  <section>
		                  <h2 class="secHeadingLeft"><?php echo $report_desc['title']; ?></h2>
                      <?php 
                      if($image_with_title != ''){
                          $rep_desc = str_replace($url[0][0],$image_with_title,$report_description1);
                          echo str_replace("<img","<img class='img-responsive mx-auto'",$rep_desc);
                      }else{
                          echo str_replace("<img","<img class='img-responsive mx-auto'",$report_description1);
                      }
                      ?>
		             	  </section>

			              <div class="clearfix"></div>

			              <?php
				          $action_type = $report_desc['action_type'];
				          switch($action_type){
				            case "RM":
				            ?>
				            <div class="reportActionContentBlock bgGrey p-4 mt-5">
			                  <div class="row">
			                    <div class="col-xs-11 col-lg-11 bg-white methlogyBox">
			                      <div class="row">
			                        <div class="col-xs-12 col-lg-12">
			                          <div class="actionContentBox bg-white p-4">
			                            <h3 class="secHeadingLeft">Market Research Methodology - Perfected through Years of Diligence</h3>
			                            <p>A key factor for our unrivaled market research accuracy is our expert- and data-driven research methodologies. We combine an eclectic mix of experience, analytics, machine learning, and data science to develop research methodologies that result in a multi-dimensional, yet realistic analysis of a market.</p>
			                          </div>
			                        </div>
			                        <div class="col-xs-12 col-lg-12">
			                          <div class="actionContentBox bg-white p-4">
			                            <img src="<?php echo WEBSITE_URL; ?>assets/images/report-cta-graph.png"  width="314" height="231"  class="img-responsive" alt="Get actionable insights on Ship Repair And Maintenance Services Market" title="Get actionable insights on Ship Repair And Maintenance Services Market">
			                          </div>
			                        </div>
			                      </div>
			                    </div>
			                    <div class="text-center pb-4 col-xs-12 col-lg-12">
			                      <?php
                            if($report_detail[0]['rep_type']=='N'){
                            ?>
                            <button class="btn btnGreen" data-toggle="modal" data-target="#customModal" onclick="requestForm('RM')">
                            <span>Know Report Methodology</span>
                            </button>
                            <?php
                            }else{
                            ?>
                            <a class="btn btnGreen" data-toggle="modal" target="_blank" href="<?php echo WEBSITE_URL."methodology/".$report_detail[0]['rep_id']; ?>">
                            <span>Know Report Methodology</span>
                            </a>
                            <?php                      
                            }
                            ?>
			                    </div>
			                  </div>
			                </div>
				            <?php
				          break;
				          
				          case "S":
				          ?>
			              <section class="cusButtonSec sampleRequestSec mb-0">
			                  <div class="text-center cusButtoncontent">
			                    <p class="secHeading text-white my-0">Find Out More about the Report Coverage</p>
			                      <div class="mt-4 reqCustmBtn">
			                        <?php
                              if($report_detail[0]['rep_type']=='N'){
                              ?>
                              <button class="btn" data-toggle="modal" data-target="#customModal" onclick="requestForm('S')">
                              <span>Request Sample</span>
                              </button>
                              <?php
                              }else{
                              ?>
                              <a class="btn" target="_blank" href="<?php echo WEBSITE_URL."samples/".$report_detail[0]['rep_id']; ?>">
                                <span>Request Sample</span>
                              </a>
                              <?php                      
                              }
                              ?>
			                      </div>
			                  </div>
			              </section>
			              <?php
					      break;
					      
					      case "CR":
					      ?>
					      <section class="cusButtonSec customRequestSec">
			                  <div class="text-center cusBtnBox cusButtoncontent">
			                    <p class="secHeading text-white mb-0">Customize this Report</p>
			                      <p class="text-white mb-0"> Explore Intelligence Tailored to Your Business Goals.</p>
			                      <div class="mt-4 reqCustmBtn">
			                        <?php
                              if($report_detail[0]['rep_type']=='N'){
                              ?>
                              <button class="btn" data-toggle="modal" data-target="#customModal" onclick="requestForm('RC')">
                              <span>Request Customization</span>
                              </button>
                              <?php
                              }else{
                              ?>
                              <a class="btn" href="<?php echo WEBSITE_URL."request-customization/".$report_detail[0]['rep_id']; ?>" target="_blank">
                              <span>Request Customization</span>
                              </a>
                              <?php                      
                              }
                              ?>
  			                      </div>
			                  </div>
			              </section>
					      <?php
		                  break;
		                  
		                  case "ASK":
		                  ?>
		                  <section class="cusButtonSec expertRequestSec">
			                  <div class="text-center cusBtnBox cusButtoncontent">
			                    <p class="secHeading text-white mb-0">Explore Persistence Market Research’s expertise in promulgation of the business !</p>
			                    <div class="mt-4 reqCustmBtn">
			                      <?php
                            if($report_detail[0]['rep_type']=='N'){
                            ?>
                            <button class="btn" data-toggle="modal" data-target="#customModal" onclick="requestForm('ASK')">
                            <span>Ask An Expert</span>
                            </button>
                            <?php
                            }else{
                            ?>
                            <a class="btn" href="<?php echo WEBSITE_URL."ask-an-expert/".$report_detail[0]['rep_id']; ?>" target="_blank">
                            <span>Ask An Expert</span>
                            </a>
                            <?php                      
                            } 
                            ?>
			                    </div>
			                  </div>
			              </section>
		                  <?php
		                  break;
		                    }
		                  ?>

		              </section>
		              <?php
                	  }
                }else{
             	?>
             	<section id="section-m-desc" class="reportDescBox">
	                <h2 class="secHeadingLeft">Description</h2>
	                <?php
						$arrString = array('http:');
						$arrReplacement = array('https:');
						$report_description1 =  str_replace("<img",'<img width="408" height="276"  ',stripcslashes(str_replace($arrString,$arrReplacement,$report_detail[0]['rep_desc'])));
					 
					echo str_replace("<img","<img class='img-responsive'",$report_description1); ?>
	            </section>
	            <?php } ?>
      <?php if(!empty($faqs)){ ?>
      <section class="reportFAQ">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="sectionHead mt-0 mb-5 text-center">- FAQs -</h2>
              <div class="pt-4 accordFAQBox">
                <div class="panel-group" id="accordionFAQ" role="tablist" aria-multiselectable="true">
                    
                <?php $counter = 1; foreach($faqs as $faq){ ?>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headFAQ-<?php echo $counter; ?>">
                        <h3 class="panel-title">
                          <a data-toggle="collapse" class="<?php if($counter>1){ echo 'collapsed'; } ?>" data-parent="#accordionFAQ" href="#collapFAQ-<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapFAQ-<?php echo $counter; ?>">
                            <span><?php echo $faq['question']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                               <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                             </svg>
                          </a>
                        </h3>
                      </div>
                      <div id="collapFAQ-<?php echo $counter++; ?>" class="panel-collapse collapse <?php if($counter==2){ echo 'in'; } ?>" role="tabpanel" aria-labelledby="headFAQ-<?php echo $counter; ?>">
                        <div class="panel-body"><?php echo $faq['answer']; ?></div>
                      </div>
                    </div>
                <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </section>
      <?php } ?>
      
      <?php if(!empty($related_reports)){ ?>
      <section class="recommendationsSec bgGrey reqCustomSec">
        <div class="container">
          <div class="row">
            <div class="text-center col-12 mb-5">
              <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-award" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z"></path>
                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"></path>
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
		                <h4>
		                  <a href="<?php echo WEBSITE_URL."market-research/".$related_report['rep_url'].".asp"; ?>" title="<?php echo $related_report['rep_keyword']; ?></a>"><?php echo $related_report['rep_keyword']; ?></a></a>
		                </h4>
		                <p><?php echo $related_report['meta_desc']; ?>.</p>
		              </div>
		          </div>
		          <?php 
              	  
             }
             ?>
          </div>
        </div>
      </section>
      <?php } ?>
	  
	   
    </main>
    
    <?php $this->load->view("partials/footer_mobile"); ?>

    <div class="fixedBottomButton">
        <div class="container-fluid">
            <div class="row">
               
                <div class="col-xs-6 px-0">
                    <a href="<?php echo WEBSITE_URL."checkout/".$report_detail[0]['rep_id']; ?>" class="btn btnBuyNow" title="<?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?>"><span><?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?></span></a>
                </div>
                 <div class="col-xs-6 px-0">
                    <?php if($report_detail[0]['rep_type']=='N'){ ?>
                        <a href="<?php echo WEBSITE_URL; ?>samples/<?php echo $report_detail[0]['rep_id']; ?>" class="btn btnReqSample" title="Request Sample">Request Sample</a>
                    <?php }else{ ?>
                        <a href="<?php echo WEBSITE_URL; ?>toc/<?php echo $report_detail[0]['rep_id']; ?>" class="btn btnReqSample" title="Request TOC">Request TOC</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal -->
     <div class="modal fade modalCustom" id="customModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center requestFormTitle">Request Customization</h4>
          </div>
          <div class="requestform">
            <form action="" method="post" name="" onsubmit="return validateForm();">
              <?php
                  $name = $this->security->get_csrf_token_name(); 
                  $hash = $this->security->get_csrf_hash();
                  $_SESSION[$name] = $hash;
              ?>

              <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
              <input type="hidden" name="source" value="FPM" /> 
              
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-field">
                    <input type="text" name="name" id="idPMRfullname" class="form-control name" placeholder="*Full Name" required="required">
                    <span id="clientName" class="errormsgs nameError text-danger"></span>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-field">
                    <input type="email" name="emailId" id="idPMREmailId" class="form-control emailId" placeholder="*Work Email" required="required">
                    <span id="clientEmail" class="errormsgs emailIdError text-danger"></span>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-field">
                     
                    <input type="text" name="phoneNo" id="idPMRContactNo" class="form-control phoneNo" placeholder="*Phone Number with Country Code" required="required">
                    <span id="clientPhoneNo" class="errormsgs text-danger phoneNoError"></span>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-field">
                    <input type="text" name="company" id="idCompanyName" class="form-control company" placeholder="Company Name">
                    <span id="clientCompany" class="errormsgs"></span>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-field">
                    <input type="text" name="jobTitle" id="idJobTitle" class="form-control jobTitle" placeholder="Job Title">
                    <span id="clientJob" class="errormsgs"></span>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-field">
                    <label for="message" class="message-label">Share your objective and let our analysts design the right solutions</label>
                    <textarea id="message" name="message" class="form-control message" maxlength="200"></textarea>
                  </div>
                </div>
                 
                <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                <input type="hidden" name="type" class="hdnType" value="">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="text-center">
                    <button type="submit" name="btnSubmit">
                      <span>Get It Now</span>
                      <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-cursor" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"></path>
                      </svg>
                    </button>
                    <p class="mandatory">
                      <small>Your personal details are safe with us.</small>
                      <a href="<?php echo WEBSITE_URL."privacy-policy.asp"; ?>"><small>Privacy Policy</small></a>
                    </p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <link href="<?php echo WEBSITE_URL; ?>assets/css/repoet-details-mobile.css" rel="stylesheet" />
    <script src="<?php echo WEBSITE_URL; ?>assets/js/jquery.easing.min.js"></script>
    <script>
      var fixmeTop = $('.marketByteBar').offset().top;
      
      $(window).scroll(function () {
      
         var currentScroll = $(window).scrollTop();
         if (currentScroll >= fixmeTop) {
             $('.marketByteBar').addClass('fixedMarketByteBar');
             $('.fixedBottomButton').addClass('active');
         } else {
             $('.marketByteBar').removeClass('fixedMarketByteBar');
             $('.fixedBottomButton').removeClass('active');
         }
      
      });
      (function($) {
         "use strict"; 
         $('.marketByteBar a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
             if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
             var target = $(this.hash);
             target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
             if (target.length) {
                 $('html, body').animate({
                 scrollTop: (target.offset().top - 56)
                 }, 1000, "easeInOutExpo");
                 return false;
             }
             }
         });
         $('.marketByteBar .js-scroll-trigger').click(function() {
             $('.navbar-collapse').collapse('hide');
         });
         $('body').scrollspy({
             target: '#mainNav',
             offset: 56
         });
      
         })(jQuery); 
        $(window).scroll(function() {
            var scrollDistance = $(window).scrollTop();
                $('.reportDescBox').each(function(i) {
                if ($(this).position().top <= scrollDistance) {
                    $('.marketByteBar .js-scroll-trigger.active').removeClass('active');
                    $('.marketByteBar .js-scroll-trigger').eq(i).addClass('active');
                }
            });
        }).scroll();

        function captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#captcha span").remove(); $("#captcha input").remove(); $("#captcha").append("<span id='code'>" + Code + "</span><input type='button' onclick='captchaCode();'>"); $(".hdnCaptcha").val(Code); }
       $(function () {
                captchaCode(); $('.sampleForm').submit(function () {
                    var captchaVal = $("#code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });
            $(".requestform .form-control").on("blur .form-control focus", function() {
            if (this.value) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
        });

        $(".requestform .form-control").on("focus", function() {
            if (this) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
        });
      captchaCode();

      function validateForm(){
      
          var flag = true;
      
          var name = $(".name").val();
          var emailId = $(".emailId").val();
          var countryCode = $(".countryCode").val();
          var phoneNo = $(".phoneNo").val();
          //var captcha = $(".txtCaptcha").val();
         // var hdnCaptcha = $(".hdnCaptcha").val();
      
          $(".nameError").val("");
          $(".emailIdError").val("");
          $(".phoneNoError").val("");
          //$(".captchaError").val("");
      
          var nameformat = /^[a-zA-Z ]{2,30}$/;
          var emailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      
          if(emailId == ""){
              flag = false;
              $(".emailIdError").html("* Please Enter Email ID");
          }else if(!emailformat.test(emailId)){
              flag = false;
              $(".emailIdError").html("* Enter Valid Email ID");
          }
      
          if(name == ""){
              flag = false;
              $(".nameError").html("* Please Enter Name");
          }else if(!nameformat.test(name)){
              flag = false;
              $(".nameError").html("* Enter Correct Name");
          }
      
          if(countryCode == ""){
              flag = false;
              $(".phoneNoError").html("* Enter Valid Country Code");
          }
      
          if(phoneNo == ""){
              flag = false;
              $(".phoneNoError").html("* Please Enter Phone No");
          }
          
          /**if(hdnCaptcha != captcha){
              flag = false;
              $(".captchaError").html("* Please Enter Valid Captcha");
          }***/
      
          return flag;
      
      }
      
      function requestForm(type){
          $(".hdnType").val(type);
      
          $(".name").val("");
          $(".emailId").val("");
          $(".countryCode").val("");
          $(".phoneNo").val("");
          $(".company").val("");
          $(".jobTitle").val("");
          $(".message").val("");
      
          switch(type){
              case "RM":
                  $(".requestFormTitle").html("Research Methodology");
                  break;
      
              case "S":
                  $(".requestFormTitle").html("Get Free Report Sample");
                  break;
      
              case "RC":
                  $(".requestFormTitle").html("Request Customization");
                  break; 
      
              case "ASK":
                  $(".requestFormTitle").html("Ask An Expert");
                  break;
          }
      }

      $(document).ready(function(){
          $(".countryCode").change(function(){
              var country_name = $("#country_name").val();
              if(country_name=="Unknown"){
                  var country_html = $(".countryCode option:selected").text();
                  country_html = (country_html.split(" ("))[0];
                  $("#country_name").val(country_html);
              }
          });
      });
</script>
    
    <?php
    $min = 52;
    $max = 58;
    $number = number_format(mt_rand($min, $max) / 12, 1);

    if($image_url==""){
        $image_url = WEBSITE_URL."assets/images/persistence-market-research-report.jpg";
    }

    $schema_url = WEBSITE_URL."market-research/".$report_detail[0]['rep_url'].'.asp';
    
    if(isset($faqs) && !empty($faqs)){ 
    $json_link = json_encode("<a href='".WEBSITE_URL.'market-research/'.$report_detail[0]['rep_url'].".asp'>Read More</a>");
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            <?php for($i = 0; $i < count($faqs); $i ++){ ?>
            {
                "@type": "Question",
                "name": "<?php echo strip_tags($faqs[$i]['question']); ?>",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<?php echo strip_tags($faqs[$i]['answer']).trim($json_link,'"'); ?>"
                }
            }<?php if((count($faqs) - 1) > $i){ ?>,<?php } ?>
            <?php } ?>
        ]
    }
    </script>
    <?php } ?>
  </body>
</html>