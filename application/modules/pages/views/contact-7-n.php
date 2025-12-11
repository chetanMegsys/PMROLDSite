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
                                    <span>Contact</span>
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
                        <h1 class="mb-4 secHeading">Contact</h1>
                        <p class="text-center mb-0">Would like to gain better insights to your market in question?</p>
                    </div>
                </div>
            </div>  
        </section>
        <section class="loactionSec text-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-6 positionRelative">
                        <div class="contact-form">
                            <div class="pl-5 pr-5 pt-4 pb-5" role="document" style="background: #e3eeff;border-radius: 10px;">
                                <div class="row m-0">
                                    <div class="col-lg-12 p-0">
                                        <h2 class="text-black font20 pb-2">Get in Touch with Our Research Team</h2>
                                        <form class="mt-2 sampleForm" name="" action="<?php echo WEBSITE_URL."contact-us.asp"; ?>" method="POST" onsubmit="return validateForm();">
                                            <?php
                                                $name = $this->security->get_csrf_token_name(); 
                                                $hash = $this->security->get_csrf_hash();
                                                $_SESSION[$name] = $hash;
                                            ?>

                                            <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
                                            <input type="hidden" name="source" value="FWP" />
                                            <input type="hidden" name="repId" value="<?php //echo $report_detail[0]['rep_id']; ?>">
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
                                                <div class="col-xs-12 col-md-12 mb-2">
                                                    <div class="form-field">
                                                        <span id="captcha" class="captcha"></span>
                                                        <input type="text" name="captcha" class="captcha-input form-control captcha txtCaptcha" placeholder = "Security Code*" id="captcha-form" maxlength="3" size="3" tabindex=3 required />
                                                        <input type="hidden" class="hdnCaptcha" name="hdnCaptcha" value="">
                                                        <span id="captachacode"   class="errormsgs"></span>
                                                        <span class="text-danger captchaError"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn requestFreeSample font18" name="btnSubmit" style="background: #2155A4;padding: 9px 37px;width: 221px;border: 2px solid #2155A4;color: #fff;font-weight: 600;border-radius:10px;"> Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 positionRelative">
                        <div class="loacBoxAdd loacBoxAddLast">
                            <address>
                                <p class="secHeadingLeft">UK Office Address</p>
                                <p>
                                    G04 Golden Mile House,
                                    Clayponds Lane, Brentford,
                                    London TW8 0GU United Kingdom
                                </p>
                                
                            </address>
                            
                        </div>
                        <div class="loacBoxAdd loacBoxAddLast">
                            <address>
                                <p class="secHeadingLeft">India Office Address</p>
                                <p>
                                    Teerth Technospace, Unit B-704,
                                    Survey Number - 103, Baner,
                                    Mumbai Banglore Highway, Pune 411045 India
                                </p>
                               
                            </address>
                        </div>
                        <div class="">
                            <address>
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                            </svg>
                            <a class="" href="mailto:sales@persistencemarketresearch.com" title="Contact Sales Team">
                            sales@persistencemarketresearch.com
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
                $(".captchaError").val("");
                //alert(captcha);
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