<!DOCTYPE html>
<html lang="en">
<head>

    <?php $this->load->view("frontend/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />

    <?php $this->load->view("frontend/header"); ?>

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
                        <h1 class="my-2 secHeading" style="font-weight: 600;">Contact Us</h1>
                    </div>
                </div>
            </div>  
        </section>
        <section class="loactionSec text-white">
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
                                            <h2 class="text-black text-center font20 pb-2" style="font-weight:600;">Get In Touch With Us</h2><input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;" class="fname" value="">
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
                                            <textarea type="text" name="message" id="message" class="form-control message" rows="2" placeholder="Your Requirements" maxlength="200" ></textarea>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                                </svg>
                                            
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-7 col-md-7 mb-2">
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
                                                    <button type="submit" class="btn requestFreeSample font18" name="btnSubmit" style="background: #655639;padding: 9px 37px;width: 170px;border: 2px solid #655639;color: #fff;font-weight: 600;border-radius:10px;"> Submit</button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 positionRelative">
                        <h2 class="font20 text-black bold600">Corporate Office</h2>
                        <div class="loacBoxAdd loacBoxAddLast">
                            <address>
                                <p class="secHeadingLeft" style="font-weight: 600;margin-bottom: 5px;">Persistence Research and Consultancy Services Limited.</p>
                                <p class="font18" style="margin: 0;">Company Registration Number:<span> 15310893</span></p><p class="font18">
                                    G04 Golden Mile House,
                                    Clayponds Lane, Brentford,
                                    London TW8 0GU <br><span style="font-size:20px;">United Kingdom</span>
                                </p>
                                <a class="text-dark callInfo" href="tel:+442038375656" title="+44 203-837-5656">
                                    <img src="<?php echo ROOT_URL."themes/image/phone-iconb.svg";?>" alt="Uk phone icon" width="20" height="20" class="mr-2 mt-2" style="vertical-align: top;"><span class="d-inline-block bold600">+44 203-837-5656</span>
                                </a>
                            </address>
                            
                        </div>
                        <h2 class="font20 text-black bold600 pt-5">Research Centre</h2>
                        <div class="loacBoxAdd loacBoxAddLast ">
                            <address>
                                <p class="secHeadingLeft" style="margin-bottom: 5px;font-weight: 600;">Persistence Market Research Private Limited.</p>
                                <p class="font18" style="margin: 0;"><span> Company Incorporation Number:</span> U74900PN2014PTC153163</p><p class="font18">
                                IT Unit No. 504, 5th Floor, Icon Tower, Plot No.B of S.No.114/5/1 +114/6/3+115/1/1+115/2, Baner, Pune – 411008<br><span style="font-size:20px;">India</span>
                                </p>
                               
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