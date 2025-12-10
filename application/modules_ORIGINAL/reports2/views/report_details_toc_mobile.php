<?php
$ip_data = "";
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = $_SERVER['REMOTE_ADDR'];
$country_name  = "Unknown";
if(filter_var($client, FILTER_VALIDATE_IP)) {
    $ip = $client;
} elseif(filter_var($forward, FILTER_VALIDATE_IP)) {
    $ip = $forward;
} else {
    $ip = $remote;
}

if($ip_data && $ip_data->geoplugin_countryName != null) {
    $country_name = $ip_data->geoplugin_countryName;
}
?>
<!DOCTYPE html>
<html>
  <head>

  	<?php $this->load->view("partials/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    
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
                    <li class="repDate"><span><?php echo date("M-Y",strtotime($report_detail[0]['rep_pub_date'])); ?></span></li>
                    <li class="repID"><span>PMRREP<?php echo $report_detail[0]['rep_id']; ?> </span></li>
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
            <div class="reportBannerBtns col-md-12 col-lg-12 col-xs-12 mt-4">
              <ul class="list-unstyled pl-0 text-center">
                <li class="reportrBtns">
                  <a href="<?php echo WEBSITE_URL."checkout/".$report_detail[0]['rep_id']; ?>" class="btn btnBuyNow" title="<?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?>"><span><?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?></span></a>
                </li>
                <li class="reportrBtns">
                  <a href="#" data-toggle="modal" data-target="#customModal" onclick="requestForm('S')" class="btn btnReqSample" title="Get FREE Sample"><span>Get FREE Sample</span></a>
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
      <nav class="navbar marketByteBar" id="mainNav">
        <div class="container">
          <div>
            <a class="navbar-brand navbar-expand-lg js-scroll-trigger txtBlue" href="javascript:void(0)">
            Market Bytes
            </a>
             <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
              </svg>
            </span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav reportDesLink ">

              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#section-toc">
                    Table of Content
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#section-lot">
                    List of Tables
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#section-loc">
                    List of Chart
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#section-desc">
                    Description
                </a>
              </li>
            </ul>
            <div>
              <div class="reportLink">
                  <a class="h4 viewTopc reportPreview" target="_blank" href="<?php echo WEBSITE_URL."market-research/".$report_detail[0]['rep_url'].".asp"; ?>" title="Report Description">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                  </svg>
                  <span>Report Description</span></a>
                </div>
           </div>
          </div>
        </div>
      </nav>
      <section class="reportDescSec pt-0">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12">
		          <section id="section-0" class="reportDescBox">

		                <section id="section-toc" class="reportDescBox reportDescBoxPullLeft">
			                  <h3 class="txtBlue mt-0">
			                    Table of Content
			                  </h3>
			                  <?php echo $report_detail[0]['rep_tab_content']; ?>
			              </section>
                    <section class="cusButtonSec customeMethodologySec">
                        <div class="text-center cusBtnBox cusButtoncontent">
                          <p class="secHeading secHeading-title mb-0">PMR's Methodology perfected through Years of Diligence</p>
                            <div class="mt-4 cusButtonSec">
                              
                              <button class="btn" data-toggle="modal" data-target="#customModal" onclick="requestForm('RM')">
                              <span>Get Research Methodology</span>
                              </button>
                              </div>
                        </div>
                    </section>
                    <section id="section-lot" class="reportDescBox reportDescBoxPullLeft">
                        <h3 class="txtBlue mt-0">
                          List of Tables
                        </h3>
                        <?php echo $report_detail[0]['rep_list_table']; ?>
                    </section>
                    <section class="cusButtonSec customRequestSec">
                        <div class="text-center cusBtnBox cusButtoncontent">
                          <p class="secHeading text-white mb-0">Customize this Report</p>
                            <p class="text-white mb-0"> Explore Intelligence Tailored to Your Business Goals.</p>
                            <div class="mt-4 cusButtonSec">
                              
                              <button class="btn" data-toggle="modal" data-target="#customModal" onclick="requestForm('RC')">
                              <span>Get FREE Customization</span>
                              </button>
                              </div>
                        </div>
                    </section>
                    <section id="section-loc" class="reportDescBox reportDescBoxPullLeft">
                        <h3 class="txtBlue mt-0">
                          List of Chart
                        </h3>
                        <?php echo $report_detail[0]['rep_list_chart']; ?>
                    </section>
                    <section class="cusButtonSec expertRequestSec">
                        <div class="text-center cusBtnBox cusButtoncontent">
                          <p class="secHeading text-white mb-0">Explore PMR’s expertise in promulgation of the business !</p>
                          <div class="mt-4 reqCustmBtn">
                            
                            <button class="btn" data-toggle="modal" data-target="#customModal" onclick="requestForm('ASK')">
                            <span>Connect with Research Expert</span>
                            </button>
                          </div>
                        </div>
                    </section>
                    <section id="section-desc" class="reportDescBox reportDescBoxPullLeft">
                        <h3 class="txtBlue mt-0">
                          Description
                        </h3>
                        <?php echo $report_detail[0]['rep_desc']; ?>
                    </section>

              </section>
      <?php  if(!empty($related_reports)){ ?>
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
              <input type="hidden" id="country_name" name="country" value="<?php echo $country_name; ?>">
              
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-field">
                    <input type="text" name="name" id="idPMRfullname" class="form-control name">
                    <label for="idPMRfullname" class="form-label">Full Name</label>
                    <span id="clientName" class="errormsgs nameError text-danger"></span>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-field">
                    <input type="email" name="emailId" id="idPMREmailId" class="form-control emailId" required="required">
                    <label for="idPMREmailId" class="form-label">*Work Email</label>
                    <span id="clientEmail" class="errormsgs emailIdError text-danger"></span>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-field">
                    <input type="text" name="phoneNo" id="idPMRContactNo" class="form-control phoneNo" required="required">
                    <label for="idPMRContactNo" class="form-label phoneNumber">*Phone No.</label>
                    <span id="clientPhoneNo" class="errormsgs text-danger phoneNoError"></span>
                  </div>
                </div>
                 
                <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                <input type="hidden" name="type" class="hdnType" value="">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="text-center">
                    <button type="submit" name="btnSubmit" class="submit-btn-text">
                      <span>Get It Now</span>
                      <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-cursor" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"></path>
                      </svg>
                    </button>
                    <p class="mandatory">
                      <small>Your personal details are safe with us.</small>
                      <a href="<?php echo WEBSITE_URL."privacy-policy.asp"; ?>" target="_blank"><small>Privacy Policy</small></a>
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
    
    <?php $this->load->view("partials/footer_mobile"); ?>

    <div class="fixedBottomButton">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 px-0">
                    <a href="<?php echo WEBSITE_URL."checkout/".$report_detail[0]['rep_id']; ?>" class="btn btnBuyNow" title="<?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?>"><span><?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?></span></a>
                </div>
                 <div class="col-xs-6 px-0">
                    <a href="#" data-toggle="modal" data-target="#customModal" onclick="requestForm('S')" class="btn btnReqSample" title="Get FREE Sample"><span>Get FREE Sample</span></a>
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
      
      captchaCode();

      function validateForm(){
      
          var flag = true;

          var emailId = $(".emailId").val();
          var phoneNo = $(".phoneNo").val();

          $(".emailIdError").val("");
          $(".phoneNoError").val("");
      
          var emailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      
          if(emailId == ""){
              flag = false;
              $(".emailIdError").html("* Please Enter Email ID");
          }else if(!emailformat.test(emailId)){
              flag = false;
              $(".emailIdError").html("* Enter Valid Email ID");
          }
      
          if(phoneNo == ""){
              flag = false;
              $(".phoneNoError").html("* Please Enter Phone No");
          }
          
      
          return flag;
      
      }
      
      function requestForm(type){
          $(".hdnType").val(type);
      
          $(".name").val("");
          $(".emailId").val("");
          $(".phoneNo").val("");
      
          switch(type){
              case "RM":
          $(".cls_div_captcha").hide();
                  $(".requestFormTitle").html("Research Methodology");
                  $(".submit-btn-text span").text("Get It Now");
                  break;
      
              case "S":
        $(".cls_div_captcha").hide();
                  $(".requestFormTitle").html("Get <span style='color:#df9926'>FREE</span> Sample Report");
                  $(".submit-btn-text span").text("Get It Now");
                  break;
      
              case "RC":
        $(".cls_div_captcha").hide();
                  $(".requestFormTitle").html("Get started with a FREE Customization Report");
                  $(".submit-btn-text span").text("Get a Free Quote");
                  break; 
      
              case "ASK":
        $(".cls_div_captcha").hide();
                  $(".requestFormTitle").html("Connect with Research Expert");
                  $(".submit-btn-text span").text("Connect with Expert");
                  break;

              case "T":
                  $(".cls_div_captcha").hide();
                  $(".requestFormTitle").html("Get Table of Content in your Inbox");
                  $(".submit-btn-text span").text("Get It Now");
                  break;
          }
      }
</script>
  </body>
</html>