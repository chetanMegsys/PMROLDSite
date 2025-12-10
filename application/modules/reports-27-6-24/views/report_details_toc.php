<!DOCTYPE html>
<html>
<head>

	<?php $this->load->view("partials/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-report-new.css" rel="stylesheet" />

    <?php $this->load->view("partials/header_report_detail"); ?>

    <?php $report_keyword = $report_detail[0]['rep_keyword']; ?>

    <main role="main">
        
        <section class="reportBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9 col-xs-12 reportMainInfoBox">
                        <div class="reportMainInfo text-white">
                            <h1 class="reportTitle mt-0"><?php echo $report_keyword; ?></h1>
                            <h2 class="reportSubTitle"><?php echo $report_detail[0]['rep_name']; ?></h2>
                            <p class="repDesContent"><?php echo $report_detail[0]['rep_breadcrumb']!=''?$report_detail[0]['rep_breadcrumb']:''; ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xs-12">
                        <div class="d-inline-block reportCover">
                            <div class="reportInfoList d-inline-block ml-3">
                                <ul class="list-unstyled mb-0 text-white">
                                    <li class="repDate"><span><?php echo date("F-Y",strtotime($report_detail[0]['rep_pub_date'])); ?></span></li>
                                    <li class="repID"><span>PMRREP<?php echo $report_detail[0]['rep_id']; ?></span></li>
                                    <li class="repType"><span><?php echo $report_detail[0]['rep_type']=='N' ? $report_detail[0]['rep_pages']." Pages" : 'Work In Progress'; ?></span></li>
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
                    <div class="reportBannerBtns col-md-12 col-lg-9 col-xs-12">
                        <div class="row">
                            <div class="col-sm-4 col-xs-6 reportrBtns">
                                <!-- <a href="<?php echo WEBSITE_URL."ask-an-expert/".$report_detail[0]['rep_id']; ?>" class="btn btnAskExpert" title="Ask An Expert"><span>Ask An Expert</span></a> -->
                                <a href="<?php echo WEBSITE_URL."market-research/".$report_detail[0]['rep_url'].".asp"; ?>" class="btn btnAskExpert" title="Report Description"><span>Report Description</span></a>
                                
                            </div>
                            <div class="col-sm-4 col-xs-6 reportrBtns">
                                <a href="<?php echo WEBSITE_URL."checkout/".$report_detail[0]['rep_id']; ?>" class="btn btnBuyNow" title="Purchase Report"><span><?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?></span></a>
                            </div>
                            <div class="col-sm-4 col-xs-12 reportrBtns">
                                <a href="<?php echo WEBSITE_URL."samples/".$report_detail[0]['rep_id']; ?>" class="btn btnReqSample" title="Request Sample"><span>Request Sample</span></a>
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
                        <a href="<?php echo WEBSITE_URL."market-research-report/".$report_detail[0]['seo_pagename'].".asp"; ?>" title="<?php echo $report_detail[0]['cat_name']; ?>" target="_blank">
                            <span><?php echo $report_detail[0]['cat_name']; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo WEBSITE_URL."market-research/".$report_detail[0]['rep_url'].".asp"; ?>" title="<?php echo $report_keyword; ?>" target="_blank">
                            <span><?php echo $report_keyword; ?></span>
                        </a>
                    </li>
                    <li>
                        <span>TOC</span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="reportDescSec pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9 col-xs-12">
                    	<section id="section-toc" class="reportDescBox">
                            <h3 class="secHeadingLeft">
								Table of Content
                            </h3>
                            <?php echo $report_detail[0]['rep_tab_content']; ?>
                        </section>
                        <div class="clearfix"></div>
                        <section class="cusButtonSec sampleRequestSec mb-0">
                          <div class="text-center cusBtnBox row">
                            <div class="col-sm-3 col-md-4 col-lg-3 sampleRequestImg">
                              <span class="sampleRequestIcon buttonIcon"></span>
                            </div>
                            <div class="col-sm-9 col-md-8 col-lg-9 cusButtoncontent">
                              <p class="secHeading text-white my-0">Find Out More about the Report Coverage</p>
                              <div class="mt-4 reqCustmBtn">
                               
                              <a class="btn" target="_blank" href="<?php echo WEBSITE_URL."samples/".$report_detail[0]['rep_id']; ?>">
                                <span>Request Sample</span>
                              </a>
                              
                              </div>
                            </div>
                          </div>
                        </section>
                        <section id="section-lot" class="reportDescBox">
                            <h3 class="secHeadingLeft">
								List of Tables
                            </h3>
                            <?php echo $report_detail[0]['rep_list_table']; ?>
                        </section>
                        <div class="clearfix"></div>
                        <section class="cusButtonSec expertRequestSec">
                          <div class="text-center cusBtnBox row">
                            <div class="col-sm-2 col-md-3 col-lg-2 sampleRequestImg">
                              <span class="askExpertIcon buttonIcon"></span>
                            </div>
                            <div class="col-sm-10 col-md-9 col-lg-10 cusButtoncontent">
                              <p class="secHeadingLeft text-white text-left mb-0 h4">Explore Persistence Market Research’s expertise in promulgation of the business !</p>
                              <div class="reqCustmBtn">
                                
                                <a class="btn" href="<?php echo WEBSITE_URL."ask-an-expert/".$report_detail[0]['rep_id']; ?>" target="_blank">
                                <span>Ask An Expert</span>
                                </a>
                                
                              </div>
                            </div>
                          </div>
                        </section>
                        <section id="section-loc" class="reportDescBox">
                            <h3 class="secHeadingLeft">
								List of Chart
                            </h3>
                            <?php echo $report_detail[0]['rep_list_chart']; ?>
                        </section>
                        <div class="clearfix"></div>
                        <section class="cusButtonSec customRequestSec">
                          <div class="text-center cusBtnBox row">
                            <div class="col-sm-12 col-md-12 col-lg-12 cusButtoncontent pt-4">
                              <p class="secHeadingLeft text-white text-left mb-0">Customize this Report</p>
                              <div class="row">
                                <div class="col-md-8">
                                    <p class="text-white text-left mb-0">Explore Intelligence Tailored to Your Business Goals.</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="mt-4 reqCustmBtn">
                                    
                                    <a class="btn" href="<?php echo WEBSITE_URL."request-customization/".$report_detail[0]['rep_id']; ?>" target="_blank">
                                    <span>Request Customization</span>
                                    </a>
                                    
                                      </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                        
                    </div>

                    <div class="col-md-4 col-lg-3 col-xs-12 reportListBoxFixed">
                        <aside class="reportDesLink">
                           <div class="reportLink">
                               <p class="txtBlue">Market Bytes</p>
                               <ul class="list-unstyled" id="reportLinkList">
	                               <li>
	                                    <a class="repLinkSapn active" data-target="section-toc">
	                                        <span class="marketBytNum">1</span>
	                                        <span>Table of Content</span>
	                                    </a>
	                               </li>
	                               <li>
	                                    <a class="repLinkSapn active" data-target="section-lot">
	                                        <span class="marketBytNum">2</span>
	                                        <span>List of Tables</span>
	                                    </a>
	                               </li>
	                               <li>
	                                    <a class="repLinkSapn active" data-target="section-loc">
	                                        <span class="marketBytNum">3</span>
	                                        <span>List of Chart</span>
	                                    </a>
	                               </li>
	                                
	                           </ul>
                           </div>

                            <div class="reportLink">
                                <a class="h4 viewTopc" target="_blank" href="<?php echo WEBSITE_URL."market-research/".$report_detail[0]['rep_url'].".asp"; ?>" title="Report Description">
                                	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
									  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
									  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
									</svg>
                                	<span>Report Description</span>
                                 </a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <div class="reqCustomSec"></div>
        <?php  if(!empty($related_reports)){ ?>
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
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 mb-5">
                        <div class="relatedReportItem">
                          <h4>
                            <a href="<?php echo WEBSITE_URL."market-research/".$related_report['rep_url'].".asp"; ?>" title="<?php echo $related_report['rep_keyword']; ?>"><?php echo $related_report['rep_keyword']; ?></a>
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
        <?php
        }
        ?>
        <section class="ourClient">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 text-center ourClientImg">
              <h4 class="secHeading">Our Clients</h4>
              <div>
                <img class="img-responsive mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/clients/client-cat-<?php echo $report_detail[0]['category_id']; ?>.jpg" alt="Our Clients" title="Our Clients" />
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

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
              <input type="hidden" name="source" value="FPW" /> 
              <div class="row">
                <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-field">
                    <input type="text" name="name" id="idPMRfullname" class="form-control name" required="required"
                    placeholder="*Full Name">
                    <span id="clientName" class="errormsgs nameError text-danger"></span>
                  </div>
                </div> -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-field">
                    <input type="email" name="emailId" id="idPMREmailId" class="form-control emailId" placeholder="*Work Email" required="required">
                    <span id="clientEmail" class="errormsgs emailIdError text-danger"></span>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-field">
                 
                    <input type="text" name="phoneNo" id="idPMRContactNo" class="form-control phoneNo" required="required" placeholder="*Phone Number with Country Code">
                    <span id="clientPhoneNo" class="errormsgs text-danger phoneNoError"></span>
                  </div>
                </div>
                <div class="col-md-12 col-xs-12">
                  <div class="form-field mb-4">
                    <input type="text" name="company" id="idCompanyName" class="form-control company" placeholder="Company Name">
                    <span id="clientCompany" class="errormsgs"></span>
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


         function validateForm(){

          var req_type = $(".hdnType").val();
      
          var flag = true;
      
          var name = $(".name").val();
          var emailId = $(".emailId").val();
          var countryCode = $(".countryCode").val();
          var phoneNo = $(".phoneNo").val();
         // var captcha = $(".txtCaptcha").val();
        //  var hdnCaptcha = $(".hdnCaptcha").val();
      
          $(".nameError").val("");
          $(".emailIdError").val("");
          $(".phoneNoError").val("");
        //  $(".captchaError").val("");
      
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
          
          /***if(req_type != 'S'){
              if(hdnCaptcha != captcha){
                  flag = false;
                  $(".captchaError").html("* Please Enter Valid Captcha");
              }
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
                  $(".cls_div_captcha").hide();
                  $(".requestFormTitle").html("Research Methodology");
                  break;
      
              case "S":
                  $(".cls_div_captcha").hide();
                  $(".requestFormTitle").html("Get Free Report Sample");
                  break;
      
              case "RC":
                  $(".cls_div_captcha").hide();
                  $(".requestFormTitle").html("Request Customization");
                  break; 
      
              case "ASK":
                  $(".cls_div_captcha").hide();
                  $(".requestFormTitle").html("Ask An Expert");
                  break;
          }
      }
      
    </script>

</body>
</html>