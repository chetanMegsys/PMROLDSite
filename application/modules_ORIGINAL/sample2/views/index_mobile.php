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
    <link href="<?php echo WEBSITE_URL; ?>assets/css/request-sample.css" rel="stylesheet" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K6SW4QF');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6SW4QF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <main role="main">
        <section class="sampleBanner text-white pt-0">
            <header class="shortheader mb-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 logoImg">
                            <a href="<?php echo WEBSITE_URL; ?>" title="<?php echo WEBSITE_URL; ?>">
                                <img class="img-responsive" src="<?php echo WEBSITE_URL; ?>assets/images/pmr-logo-white.png" width="80" height="57" alt="<?php echo WEBSITE_URL; ?>" title="<?php echo WEBSITE_URL; ?>" />
                            </a>
                        </div>
                        <div class="col-xs-6 text-right navLink">
                            <a href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact">
                                <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-telephone mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                            Contact</a>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                       <div class="reportHead">
                           <div class="d-table-cell">
                               <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-newspaper mr-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                   <path fill-rule="evenodd" d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                   <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                               </svg>
                           </div>
                           <div class="d-table-cell">
                               <h2 class="mb-4 mt-0">
                                <a class="text-white" href="<?php echo WEBSITE_URL."market-research/".$reportData[0]['rep_url'].".asp"; ?>" target="_blank" title="<?php echo ucwords(str_replace("-"," ",$reportData[0]['rep_url'])); ?>">
                                   <?php echo ucwords(str_replace("-"," ",$reportData[0]['rep_url'])); ?>
                               </a>
                           </h2>
                           </div>
                       </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <h1 class="reportTitle mt-0">
                            <a class="text-white" href="<?php echo WEBSITE_URL."market-research/".$reportData[0]['rep_url'].".asp"; ?>" target="_blank" title="<?php echo $reportData[0]['rep_name']; ?>">
                               <?php echo $reportData[0]['rep_name']; ?>
                           </a>
                        </h1>
                    </div>
                    <div class="col-lg-4 col-md-5 reportDetails">
                        <ul class="list-unstyled">
                            <li>
                                <span><?php echo $reportData[0]['rep_type']=='N' ? "Published On : ".date("F Y",strtotime($reportData[0]['rep_pub_date'])) : "Ongoing"; ?> </span> <span class="mx-2">|</span> <span>Industry : <a class="txtGrey" href="<?php echo WEBSITE_URL."market-research-report/".$reportData[0]['seo_pagename'].".asp"; ?>" title="<?php echo $reportData[0]['cat_name']; ?>"><?php echo $reportData[0]['cat_name']; ?></a></span>
                            </li>
                            <li>
                                <span>Report Code : PMRREP<?php echo $reportData[0]['rep_id']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="shapeBottom searchshapeBottom"></div>
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
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
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                        <h2 class="head-border mb-5"><?php echo $pageHeading; ?></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-field">
                                            <input type="text" name="name" id="idPMRfullname" class="form-control name">
                                            <label for="idPMRfullname" class="form-label">Full Name</label>
                                            <span id="clientName" class="errormsgs nameError"></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-field">
                                            <input type="email" name="emailId" id="idPMREmailId" class="form-control emailId" required="required">
                                            <label for="idPMREmailId" class="form-label">*Work Email</label>
                                            <span id="clientEmail" class="errormsgs emailIdError"></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-field">
                                            <input type="text" name="phoneNo" id="idPMRContactNo" class="form-control phoneNo" required="required">
                                            <label for="idPMRContactNo" class="form-label phoneNumber">*Phone No.</label>
                                            <span id="clientPhoneNo" class="errormsgs phoneNoError"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-field">
                                            <input type="text" name="company" id="idCompanyName" class="form-control company">
                                            <label for="idCompanyName" class="form-label">Company Name</label>
                                            <span id="clientCompany" class="errormsgs"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-field mb-4">
                                            <input type="text" name="jobTitle" id="idJobTitle" class="form-control jobTitle">
                                            <label for="idJobTitle" class="form-label">Job Title</label>
                                            <span id="clientJob" class="errormsgs"></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-field">
                                            <label for="message" class="message-label">Share your objective and let our analysts design the right solutions</label>
                                            <textarea id="message" name="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="hidden" name="repId" value="<?php echo $reportData[0]['rep_id']; ?>">
                                        <input type="hidden" name="type" value="<?php echo $enqType; ?>">
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="text-center">
                                            <button type="submit" name="btnSubmit">
                                                <span>Get It Now</span>
                                                <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-cursor" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z" />
                                                </svg>
                                            </button>
                                            <p class="mandatory"><small>Your personal details are safe with us.</small> 
                                                <a href="<?php echo WEBSITE_URL; ?>privacy-policy.asp" target="_blank"><small>Privacy Policy</small></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>     
                    </div>
                </div>
            </div>
        </section>
        <section class="keyBenifitSec">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 text-center">
                        <h2 class="head-border mb-5">The Persistence Market Research Benefits</h2>
                    </div>
                    <div class="col-sm-12 col-md-12 keyBox text-center">
                        <div class="keyBoxTitle">
                            <span class="keyIcon"></span>
                            <h4>Accuracy and Quality</h4>
                        </div>
                        <p>
                            Our reports strive to offer superior
                            quality reports based on authentic
                            and accurate findings.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-12 keyBox text-center">
                        <div class="keyBoxTitle">
                            <span class="keyIcon"></span>
                            <h4>Customer Satisfaction</h4>
                        </div>
                        
                        <p>
                            We aim to ensure that our client's research needs are met with customized, top-of-the-line solutions.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-12 keyBox text-center">
                        <div class="keyBoxTitle">
                            <span class="keyIcon"></span>
                            <h4>360-degree Analysis</h4>
                        </div>
                        <p>
                            We leave no stone unturned to give clients an exhaustive coverage of the industry.intelligence.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
   	
   	<?php $this->load->view("partials/footer_request_form"); ?>

    <a href="mailto:sales@persistencemarketresearch.com" class="sideEmailBtn callToActionBtn">
        <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-envelope mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
          </svg>
         <span>Email Us</span>
    </a>
    <a href="tel:+1-646-568-7751" class="sideCallBtn callToActionBtn">
        <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-telephone mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
        </svg>
         <span>Call Us</span>
    </a>
   
    <script>
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
</body>
</html>