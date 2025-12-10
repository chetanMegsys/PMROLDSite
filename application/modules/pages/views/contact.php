<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">
    <?php $this->load->view("frontend/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />

    <?php $this->load->view("frontend/header"); ?>
    <style>
        .form-group {
        margin-bottom: 0.5rem;
        }
        .conatctBanner{
            padding: 0px 20px;
        }
        .loactionSec .secHeadingLeft {
            font-size: 18px;
        }
    </style>
    <main role="main">
       
        <div class="breadCrumb-Section">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent p-0 my-0">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo WEBSITE_URL; ?>" class="text-black" title="Persistence Market Report">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item" class="text-black" aria-current="page">
                                    <span>Contact Us</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
            </div>
        </div>
        </div>
        <section class="conatctBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12 text-center text-white">
                        <h1 class="my-2 secHeading" style="font-weight: 600;color:#282C7D">Contact Us</h1>
                    </div>
                </div>
            </div>  
        </section>
        <section class="loactionSec pt-1 text-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-6 positionRelative">
                        <div class="contact-form">
                            <div class="pl-5 pr-5 pt-4 pb-5 nform" role="document" style="border-radius: 10px;">
                                <div class="row m-0">
                                    <div class="col-lg-12 p-0">
                                        
                                        <form class="mt-2 sampleForm " name="" action="<?php echo WEBSITE_URL."contact-us.asp"; ?>" method="POST" onsubmit="return validateForm();">
                                            <?php
                                                $name = $this->security->get_csrf_token_name(); 
                                                $hash = $this->security->get_csrf_hash();
                                                $_SESSION[$name] = $hash;
                                            ?>
                                            <h2 class="text-black text-center font20 pb-2" style="font-weight:600;">Get In Touch</h2>
                                            <!-- <input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;background: transparent !important;" class="fname" value=""> -->
                                            <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
                                            <input type="hidden" name="source" value="FWP" />
                                            <input type="hidden" name="repId" value="<?php //echo $report_detail[0]['rep_id']; ?>">
                                            <input type="hidden" name="type" class="hdnType" value="C">
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
                                            
                                          
                                            <div class="row">
                                                <div class="col-md-6 pr-0">
                                                      <div class="form-group position-relative">
                                                        <input type="text" name="company" id="company" class="form-control company" placeholder="Company*" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
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
                                                </div>

                                            </div>
                                            
                                            
                                            <div class="form-group position-relative">
                                            <textarea type="text" name="message" id="message" class="form-control message" rows="2" placeholder="Your Requirements" maxlength="200" ></textarea>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                                </svg>
                                            
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-xs-7 col-md-7 mt-2">
                                                    <div class="form-field">
                                                        <span id="captcha" class="captcha"></span>
                                                        <input type="text" name="captcha" class="captcha-input form-control captcha txtCaptcha" placeholder = "Security Code*" id="captcha-form" maxlength="3" size="3" tabindex=3 required />
                                                        <input type="hidden" class="hdnCaptcha" name="hdnCaptcha" value="">
                                                        <input type="hidden" class="hdnerror" name="hdnerror" value="">
                                                        <span id="captachacode"   class="errormsgs"></span>
                                                        <span class="text-danger captchaError"></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-5 col-md-5 mb-2">
                                                    <button type="submit" class="btn requestFreeSample font18" name="btnSubmit" style="background: #fff;padding: 9px 37px;width: 170px;border: 2px solid #282C7D;color: #282C7D;font-weight: 600;border-radius:10px;"> Submit</button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 positionRelative pl-5">
                        <div class="d-flex justify-content-between align-items-center text-black" style="border-bottom: 2px solid #000;line-height: 26px;">
                            <p class="font24 text-black bold600 text-left mb-0">United Kingdom</p>
                            <div class="text-right">
                                <img src="<?php echo ROOT_URL.'assets/icons/uk-flag.svg';?>" alt="Uk flag icon" width="24" height="24">
                                <p class="font12 text-right mb-0">Corporate Office</p>
                            </div>
                        </div>
                        <div class="loacBoxAdd loacBoxAddLast">
                            <address class="pb-0">
                                <p class="secHeadingLeft" style="font-weight: 600;margin-bottom: 5px;color: #282c7d;">Persistence Research and Consultancy Services Limited.</p>
                                <p class="font16" style="margin: 0;line-height:22px;">Company Registration Number:<span> 15310893</span><br>
                                   Second Floor, 150 Fleet Street, London, EC4A 2DQ. 
                                </p>
                            </address>
                        </div>

                        <div class="d-flex justify-content-between align-items-center text-black" style="border-bottom: 2px solid #000;line-height: 26px;margin-top: -20px;">
                            <p class="font24 text-black bold600 text-left mb-0">United States</p>
                            <div class="text-right">
                                <img src="<?php echo ROOT_URL.'assets/icons/us-flag.svg';?>" alt="US flag icon" width="24" height="24">
                                <p class="font12 text-right mb-0">Sales Office</p>
                            </div>
                        </div>
                        <div class="loacBoxAdd loacBoxAddLast" style="min-height: 50px;">
                            <address class="pb-0">
                                <p class="font16" style="margin: 0;line-height:22px;margin-top: 10px;">
                                    108 W 39th Street, Ste 1006, PMB2219, New York, NY 10018. 
                                </p>
                            </address>
                        </div>
                        <div class="d-flex justify-content-between align-items-center text-black" style="border-bottom: 2px solid #000;line-height: 26px;margin-top: -20px;">
                            <p class="font24 text-black bold600 text-left mb-0">India</p>
                            <div class="text-right">
                                <img src="<?php echo ROOT_URL.'assets/icons/in-flag.svg';?>" alt="India flag icon" width="24" height="24">
                                <p class="font12 text-right mb-0">Global Research Center</p>
                            </div>
                        </div>
                        <div class="loacBoxAdd loacBoxAddLast " style="min-height: 80px;">
                            <address>
                                <p class="secHeadingLeft" style="margin-bottom: 5px;font-weight: 600;color: #282c7d;">Persistence Market Research Private Limited.</p>
                                <p class="font16" style="margin: 0;line-height: 22px;"><span> Company Incorporation Number:</span> U74900PN2014PTC153163<br>
                                IT Unit No. 504, 5th Floor, Icon Tower, Baner, Pune - 411045
                                </p>
                                
                            </address>
                        </div>
                        <!-- <h2 class="font20 text-black bold600" style="border-bottom: 2px solid #000;line-height: 50px;">Research Centre</h2> -->
                        <div class="loacBoxAdd loacBoxAddLast ">
                            <address>
                               
                                <a class="text-dark callInfo font16" href="tel:+442038375656" title="+44 203-837-5656">
                                    <img src="<?php echo ROOT_URL."themes/image/phone-iconb.svg";?>" alt="Uk phone icon" width="16" height="16" class="mr-2 mt-2" style="vertical-align: top;"><span class="d-inline-block bold600 font16">UK: +44 203-837-5656</span>
                                </a><br>
                                <a class="text-dark callInfo font16" href="tel:+16468786329" title="+1 646-878-6329"><img src="<?php echo ROOT_URL."themes/image/phone-iconb.svg";?>" alt="Uk phone icon" width="16" height="16" class="mr-2 mt-2" style="vertical-align: top;"><span class="d-inline-block bold600 font16">US: +1 646-878-6329</span>
                                </a><br>
                                <a class="text-dark callInfo font16" href="tel:+919067793500" title="+91 906 779 3500"><img src="<?php echo ROOT_URL."themes/image/phone-iconb.svg";?>" alt="Uk phone icon" width="16" height="16" class="mr-2 mt-2" style="vertical-align: top;"><span class="d-inline-block bold600 font16">APAC: +91 906 779 3500</span>
                                </a>
                                <br>
                                <a class="text-dark callInfo font16" href="mailto:sales@persistencemarketresearch.com" title="sales@persistencemarketresearch.com">
                                    <svg style="vertical-align: middle;" width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-envelope mb-0" fill="#000" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
                                    </svg><span class="d-inline-block bold600 font16 ml-2" >sales@persistencemarketresearch.com</span>
                                </a>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php $this->load->view("frontend/footer"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/static.css" rel="stylesheet" />
    <script>
            function captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#captcha span").remove(); $("#captcha input").remove(); $("#captcha").append("<span id='code'>" + Code + "</span><input type='button' onclick='captchaCode();'>"); $(".hdnCaptcha").val(Code); }
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
                var hdnerror = $(".hdnerror").val();
                $(".captchaError").val("");
                //alert(captcha);
                if(hdnCaptcha != captcha){
                    flag = false;
                    $(".captchaError").html("* Please Enter Valid Captcha");
                }

                if("" != hdnerror){
                    flag = false;
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