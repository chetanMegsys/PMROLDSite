<!DOCTYPE html>
<html>
<head>
    
    <?php $this->load->view("frontend/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-listing.css" rel="stylesheet" />
    <?php $this->load->view("frontend/header"); ?>

    <?php $keyword = ucwords(str_replace("-"," ",$get_articles->url));?>

    <main role="main">
        <div class="breadCrumb mb-0">
            <div class="container">
                <ol class="list-inline mb-0">
                   <li class="breadcrumb-item" style="margin-top: -4px;">
                        <a href="<?php echo ROOT_URL; ?>" class="text-blue-new" title="Home" style="margin-top:-2px;"><img src="<?php echo ROOT_URL; ?>assets/icons/home-icon.svg" width="16px" height="16px" alt="Home"></a>
                    </li>
                    <li>
                        <a href="<?php echo WEBSITE_URL."blog"; ?>" title="blog">
                            <span>Blog</span>
                        </a>
                    </li>
                    <li>
                        <span><?php echo $keyword; ?></span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="pressRelDetailsBanner py-3 bgGrey">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 mt-2">
                        <h1 class="mb-2 secHeadingLeft" style="color: #000;">
                            <?php echo $get_articles->name; ?>
                        </h1>
                        <p>
                            Published On : <?php echo date("j M Y",$get_articles->creation); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgGrey prDetailContent" style="padding-top: 0px;">
            <div class="container">
                <div class="row">
                   <div class="col-md-8 col-sm-12">
                       <div class="bg-white px-4 py-4 radius-10">
                           <?php 
                            $image_url = "";
                            echo $get_articles->full_desc; 
                            preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $get_articles->full_desc, $url);
                            if($image_url == "")
                                $image_url = isset($url[1][0])?$url[1][0]:"";
                           ?>
                       </div>
                   </div>
                    <div class="col-md-4 col-sm-12 prrightSide">
                    	
                        <?php if($get_articles->rep_url!=''){ ?>
                        <div class="text-center p-3 py-4 mb-3 bg-white radius-10">
                            <p class="font18 text-blue-new text-center mb-2 bold600">
                                Industry Report
                            </p>
                            <div class="d-flex flex-row ri-inner">
                                <div class="w-40 pr-1">
                                    <img src="<?php echo ROOT_URL; ?>themes/image/sample_report.svg" style="border-radius:10px;" width="90" height="" alt="Market Growth and Regional Outlook Report by Persistence Market Research">
                                </div>
                                <div class="pl-1">
                                    <p class="font18 text-blue-new  bold600" style="margin-bottom: 0;margin-left: 18px;padding-left: 0;text-align: left;color: #0e659e;"><?php echo ucwords(str_replace("-"," ",$get_articles->rep_url)); ?></p><?php if (isset($report_detail[0]['rep_type']) &&  $report_detail[0]['rep_type'] == 'N') {
                                        ?><?php  echo $report_detail[0]['rep_type'] == 'N' ? date("j M Y", strtotime($report_detail[0]['update_date'])) : date('j M Y', strtotime(date('Y-m-d') . ' + 50 days')); ?></br>
                                        <?php } ?>
                                    <p style="text-align: left;line-height: 20px;font-size: 14px;margin-left: 18px;margin-bottom: 10px;"><?php echo $get_articles->rep_name; ?>
                                    </p>
                                    <a href="<?php echo WEBSITE_URL."market-research/".$get_articles->rep_url.".asp"; ?>" class="btn mt-2 btn-bcolor" title=" Read More">
                                        Read More
                                    </a>
                                </div>
                            </div>
                           
                        </div>
                        <?php } ?>

                        <div class="text-center p-3 py-4 mb-3 bg-white radius-10">
                            <p class="font18 text-blue-new text-center mb-2 bold600">
                                Get A Report Sample
                            </p>
                            <form class="mt-2 sampleForm" name="" action="" method="POST" onsubmit="return validateForm();" style="width:100%;">
                                <?php
                                    $name = $this->security->get_csrf_token_name(); 
                                    $hash = $this->security->get_csrf_hash();
                                    $_SESSION[$name] = $hash;
                                ?>
                                <input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;background: transparent;" class="fname sr-only" value="">
                                <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
                                <input type="hidden" name="source" value="RRS" />
                                <input type="hidden" name="repId" value="<?php echo $get_articles->rep_id;?>">
                                <input type="hidden" name="type" class="hdnType" value="S">
                                <div class="form-group position-relative">
                                    <!-- <label>Full Name*</label> -->
                                    <input type="text" name="name" id="idName" class="form-control name" placeholder="Full Name*" required="required">
                                    <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="check icon" width="18" height="18" style="display:none">
                                    <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="info icon" width="18" height="18" style="display:none">
                                </div>
                                <div class="form-group position-relative">
                                    <input type="email" name="emailId" id="idFctMREmailId" class="form-control emailId sampleForm" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
                                    <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="check icon" width="18" height="18" style="display:none">
                                    <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="info icon" width="18" height="18" style="display:none">
                                    <span class="text-danger font12" id="errorFullName"></span>
                                </div>
                                <div class="form-group position-relative">
                                    <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone +1 123 456 7890"  maxlength="14"  onblur="checksubmit(this.value);">
                                    <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="check icon" width="18" height="18" style="display:none">
                                    <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="info icon" width="18" height="18" style="display:none">
                                    <span class="text-danger font11 errorPhoneNo" id="errorPhoneNo"></span>
                                </div>
                                
                                <div class="form-group position-relative">
                                    <input type="hidden" name="company" id="idName" class="form-control company" placeholder="Company*" >
                                    <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="check icon" width="18" height="18" style="display:none">
                                    <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="info icon" width="18" height="18" style="display:none">
                                </div>
                                <div class="form-group position-relative">
                                    <input type="hidden" name="country" id="country" class="form-control company" placeholder="Country*" >
                                    <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="check icon" width="18" height="18" style="display:none">
                                    <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="info icon" width="18" height="18" style="display:none">
                                </div>
                                
                                <div class="form-group position-relative">
                                <textarea type="text" name="message" id="idName" class="form-control message" rows="2" placeholder="Message" maxlength="200" ></textarea>

                                <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="check icon" width="18" height="18" style="display:none">
                                <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="info icon" width="18" height="18" style="display:none">
                                
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12 mb-2">
                                        <div class="form-field">
                                            <span id="captcha" class="captcha"></span>
                                            <input type="text" name="captcha" class="captcha-input form-control captcha txtCaptcha" placeholder = "Captcha Code*" id="captcha-form" maxlength="3" size="3" tabindex="0" required />
                                            <input type="hidden" class="hdnCaptcha" name="hdnCaptcha" value="">
                                            <span id="captachacode"   class="errormsgs"></span>
                                            <span class="text-danger captchaError"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn requestFreeSample rrs-btn btn-bcolor" name="btnSubmit">Submit</button>
                            </form>
                        </div>
                        <div class="bg-white resReportList radius-10">
                            <p class="font18 text-blue-new text-center bold600">
                                Latest Reports
                            </p>
                            <ul class="list-unstyled">

                                <?php
                                if(!empty($latest_reports)){
                                    foreach($latest_reports as $latest_report){
                                    ?>
                                    <li>
                                        <h4>
                                            <a href="<?php echo WEBSITE_URL."market-research/".$latest_report['rep_url'].".asp"; ?>" title="<?php echo $latest_report['rep_name']; ?>" class="pmr-report-title">
                                                <?php echo $latest_report['rep_name']; ?>
                                            </a>
                                            
                                        </h4>
                                    </li>
                                    <?php
                                    }
                                }
                                ?>
                                
                            </ul>
                        </div>
                        <div class="Customization-box right-boxes p-3 pb-5 mb-3 mt-3 text-center bg-white radius-10">
                             <p class="font18 text-blue-new py-3 m-0 bold600 text-center">Research Methodology</p>
                             <p class="font16 bold400">Data-Driven Research Methodology for Accurate Insights
                             </p>
                             <div class="btn-container">
                                 <a href="<?php echo WEBSITE_URL."research-methodology.asp"; ?>" class="btn btn-bcolor" data-name="Get Research Methodology"  title="Get Research Methodology" data-class="btn-green">
                                 Read More</a>
                             </div>
                        </div>

                        <div class="right-boxes p-3 pb-5 mb-3 mt-3 text-center bg-white radius-10">
                            <p class="font18 text-blue-new py-3 m-0 bold600 text-center">Contact Us</p>
                            <ul class="contactList list-unstyled mb-2" style="text-align: left;padding-left: 55px;">
                                <li> 
                                    <a class="text-dark callInfo font12 ml-4" href="tel:+442038375656" title="+44 203-837-5656">
                                    <img src="<?php echo ROOT_URL; ?>themes/image/phone-iconb.svg" alt="Uk phone icon" width="16" height="16" class="mr-2 mt-2" style="vertical-align: top;"><span class="d-inline-block bold600 font14">UK: +44 203-837-5656</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark callInfo font12 ml-4" href="tel:+16468786329" title="+91 906 779 3500"><img src="<?php echo ROOT_URL; ?>themes/image/phone-iconb.svg" alt="Uk phone icon" width="16" height="16" class="mr-2 mt-2" style="vertical-align: top;"><span class="d-inline-block bold600 font14">US: +1 646-878-6329</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark callInfo font12 ml-4" href="tel:+919067793500" title="+91 906 779 3500"><img src="<?php echo ROOT_URL; ?>themes/image/phone-iconb.svg" alt="Uk phone icon" width="16" height="16" class="mr-2 mt-2" style="vertical-align: top;"><span class="d-inline-block bold600 font14">APAC: +91 906 779 3500</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="text-center" style="margin-left: -10px;">
                                <a rel="nofollow" 
                            href="mailto:sales@persistencemarketresearch.com" title="sales@persistencemarketresearch.com"
                                class="w-100 fw-bold font14 py-2 text-dark" style="font-weight:600;">
                                sales@persistencemarketresearch.com
                                </a>
                            </div>
                        </div>
                        <div class="Our-clients right-boxes mt-3 pb-4 pt-0 bg-white text-center radius-10">
                             <p class="font18 text-blue-new py-3 m-0 bold600 text-center">Our Media Trust</p>
                             <a href="<?php echo ROOT_URL; ?>media-citations.asp">
                                <img src="<?php echo ROOT_URL; ?>themes/image/pmr-media-trust.webp" loading="lazy" title="PMR Media Trust" width="235px" height="264px" alt="PMR Media Citations">
                             </a>
                        </div>
                    </div>
                 </div>
            </div>
        </section>
        
    </main>

    <?php //$this->load->view("partials/footer"); ?>
    <?php $this->load->view("frontend/footer"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/static.css" rel="stylesheet" />

   
    <link href="<?php echo WEBSITE_URL; ?>assets/css/media.css" rel="stylesheet" />

    <?php
    if($image_url==""){
        $image_url = WEBSITE_URL."assets/images/persistence-market-research-report.jpg";
    }

    $schema_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "<?php echo $schema_url; ?>"
            },
            "headline": "<?php echo $get_articles->name; ?>",
            "image": [
                "<?php echo $image_url; ?>"
            ],
            "datePublished": "<?php echo date('M d, Y',$get_articles->creation); ?>",
            "dateModified": "<?php echo date('M d, Y',$get_articles->creation); ?>",
            "author": {
                "@type": "Person",
                "name": "Team PMR"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Persistence Market Research",
                "logo": {
                    "@type": "ImageObject",
                    "url": "<?php echo WEBSITE_URL.'assets/images/pmr-logo.png'; ?>"
                }
            },
            "description": "<?php echo substr(strip_tags($get_articles->full_desc),0,160); ?>"
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

                 $('.errorPhoneNo').html('Invalid Phone: +1 123 456 7890');
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