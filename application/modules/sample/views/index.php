<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("frontend/meta_links"); ?>   
<link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>themes/css/theme-sample1.css">
<style> 
        header {
            position: sticky;
            top: 0px;
            background-color: #fff;
            width: 100%;
            z-index: 9;
            box-shadow: 0px 0px 2px 0px #5a5a5a;
        }
        .navbar-expand-lg .navbar-nav .nav-link{
            padding: .5rem 1rem !important; 
        }
        .form-control{
            background-color: #fff !important;
        }
        .form-section{
            border:solid 1px #ccc;
            background-color: #f5f5f7 !important;
        }
        .bold600{
            font-weight:600;
        }
        .sampleform-section .form-section form input, .sampleform-section .form-section form textarea{
            font-size: 18px;
        }
        .sampleform-section .form-section form textarea ::placeholder, #message1::placeholder{
            color: #888888;
        }
       
        .sampleform-section .form-section form button.sampleFormSubmitBtn{
            padding: 10px 42px;
            margin: 0px;
            width: 100%;
        }
        .sampleform-section .form-section form button.sampleFormSubmitBtn:hover{
            padding: 10px 42px;
            margin: 0px;
        }
       
</style>
<?php $this->load->view("frontend/header"); ?>
   
        <section class=" sampleform-section position-relative lineHeight32">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent p-0 my-0">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo WEBSITE_URL; ?>" class="text-black" title="Persistence Market Report">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item text-black">
                                    <a href="<?php echo WEBSITE_URL."market-research.asp"; ?>" class="text-black" title="Persistence Market Report">
                                        <span>Market Research</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item text-black" aria-current="page">
                                   <a href="<?php echo WEBSITE_URL."market-research/".$reportData[0]['rep_url'].".asp"; ?>" class="text-black"> <span><?php 
                                    $keyword = $reportData[0]['rep_keyword'];
                                    $position = strpos($keyword, 'Market');
                                    if ($position !== false) {
                                        // Add length of 'Market' to include it in the substring
                                        $keyword = substr($keyword, 0, $position + strlen('Market'));
                                    }
                                    echo $keyword;
                                    ?></span>
                                </a>
                                </li>
                                <li class="breadcrumb-item text-black" aria-current="page">
                                    <span>
                                        <?php if($enqType == 'S'){ ?>
                                       <?php echo $pageHeadingnew; ?>
                                    <?php } else { ?>
                                        <?php echo $pageHeading; ?>
                                    <?php } ?>
                                    <?php if($enqType == 'ASK'){ ?>
                                         <?php echo $pageSubHeading;?>
                                    <?php } ?>
                                    </span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                 <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="report-heading">
                            <h1 class="font24 text-black bold600 my-2"><?php echo $keyword; ?></h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="radius15 py-3 px-5 my-3 mx-2 form-section" >
                                    <div class="text-left">
                                         <?php if($enqType == 'S'){ ?>
                                        <h3 class="font24 mb-0 bold600 text-black"><?php echo $pageHeadingnew; ?></h3>
                                    <?php } else { ?>
                                         <h3 class="font24 mb-0 bold600 text-black"><?php echo $pageHeading; ?></h3>
                                    <?php } ?>
                                    <?php if($enqType == 'ASK'){ ?>
                                         <p class="font14 bold200 mb-0"><?php echo $pageSubHeading; ?></p>
                                    <?php } ?>
                                    </div>
                                    <form action="" method="post" name="" onsubmit="">
                                         <?php
                                            $name = $this->security->get_csrf_token_name(); 
                                            $hash = $this->security->get_csrf_hash();
                                            $_SESSION[$name] = $hash;
                                        ?>
                                        <!-- <input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;background: transparent;" class="fname" value=""> -->
                                        <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> <input type="hidden" name="source" value="FW" /> 

                                        <div class="row">
                                            <div class="form-group col-md-6  position-relative">
                                                <input type="text" name="name" id="idName1" class="form-control name name1" placeholder="Full Name*"  >
                                                <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                    </svg>
                                                    <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                                    </svg>
                                            </div>
                                            <div class="form-group col-md-6 position-relative">
                                                <input type="email" name="emailId" id="idFctMREmailId1" class="form-control emailId" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
                                                <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                                </svg>
                                                <span class="text-danger font12" id="errorFullName"></span>
                                            </div>
                                            <div class="form-group col-md-6 position-relative">
                                                <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone: +1 123 456 7890" maxlength="14" onblur="checksubmit(this.value);" >
                                                <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                                </svg>
                                                <span class="text-danger font12 errorPhoneNo" id="errorPhoneNo"></span>
                                            </div>
                                      
                                        <div class="form-group col-md-6">
                                            <input type="text" name="company" id="idCompanyName" class="form-control company" placeholder="Company Name*"  >
                                            <input type="hidden" name="jobTitle" id="jobTitle" class="form-control company" placeholder="jobTitle"  >
                                            
                                            <span class="text-danger font12" id="errorCompanyName"></span>
                                            <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                                </svg>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" name="country" id="country" class="form-control country" placeholder="Country">
                                            <span class="text-danger font12" id="errorcountry"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="message1" name="message" class="form-control" rows="2"   placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <input type="hidden" name="repId" value="<?php echo $reportData[0]['rep_id']; ?>">
                                            <input type="hidden" name="type" value="<?php echo isset($enqType) && $enqType != '' ? $enqType : 'S'; ?>">
                                        </div>
                                        <div class="row">
                                                    <div class="col-xs-8 col-md-8 mb-2">
                                                    <div class="form-field">
                                                        <span id="captcha" class="captcha"></span>
                                                        <input type="text" name="captcha" class="captcha-input form-control captcha txtCaptcha" placeholder = "Security Code*" id="captcha-form" maxlength="3" size="3" tabindex=3 required />
                                                        <input type="hidden" class="hdnCaptcha" name="hdnCaptcha" value="">
                                                        <input type="hidden" class="hdnerror" name="hdnerror" value="">
                                                        <span id="captachacode"   class="errormsgs"></span>
                                                        <span class="text-danger captchaError"></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-md-4">
                                                    <button type="submit" class="btn sampleFormSubmitBtn text-black5 radius100 bold600 font18" name="btnSubmit">
                                                        <?php if(isset($enqType) && $enqType !='' && $enqType == 'ASK' ){
                                                            ?>
                                                            <svg xmlns="https://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-headset align-middle mr-1" viewBox="0 0 16 16">  <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/></svg>
                                                            <?php
                                                        }
                                                        ?>
                                                        
                                                    <?php echo isset($ButtonHeading) && $ButtonHeading!= '' ?  $ButtonHeading : 'Get It Now' ; ?>
                                                    </button>
                                                </div>
                                            </div>
                                    
                                </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <!-- Premium report details -->
                        <div class="PremiumReportInfo right-boxes pb-2 pt-0 mt-0 mb-3">
                            <p class="font18 pl-3 py-2 m-0 bold600 text-left" style="color: #282c7d;"> Report Details </p>
                            <div class="d-flex flex-row px-lg-3">
                                <div class="w-40 pr-1">
                                    <img src="<?php echo ROOT_URL; ?>themes/image/sample_report.svg" style="border-radius:10px;" width="90" height="" alt="Market Research Report">
                                </div>
                                <div class="pl-3">
                                    <ul class="list-unstyled mb-1" style="font-size: 14px;">
                                        <li class="txt-black1 pb-1"><span class="date-mm">  PMRREP<?php echo $reportData[0]['rep_id']; ?> </span></li>
                                        <?php if(isset($reportData[0]['rep_type']) && $reportData[0]['rep_type']=='N'){  ?>

                                                   <li class="txt-black1 pb-1"><span class="date-mm"> <?php echo $reportData[0]['rep_type']=='N' ? date("j M Y",strtotime($reportData[0]['update_date'])) : date('j M Y', strtotime(date('Y-m-d'). ' + 50 days')); ?>  </span> </li>
                                        <?php } ?>
                                        <li class="txt-black1  pb-1"><span class="txt-black1"><?php echo isset($reportData[0]['rep_type']) && $reportData[0]['rep_type']=='N' ? $reportData[0]['rep_pages']." Pages" : 'Ongoing'; ?> </span></li>
                                        <li class="txt-black1  pb-1 "><span class="txt-black1">PPT*, PDF, EXCEL </span></li>
                                        <li><span class="date-mm"><?php echo $reportData[0]['cat_name']; ?></span></li>
                                    </ul>
                                </div>
                           </div>
                            <div class="d-flex flex-row px-lg-3">
                            
                            </div>
                       </div>
                        <aside class="right-side-section mb-3">
                           <div class="quickContact right-boxes px-2 pt-0 pb-0 mt-0 text-center">
                            <p class="font18 pl-3 py-2 m-0 bold600 text-left" style="color: #282c7d;">Why Choose Us?</p>
                            <div class="QuickContactList">
                                <div class="contact1 contactList text-left pr-2 pl-3">
                                    <span class="quickContactText"><img src="<?php echo ROOT_URL."assets/icons/tick-b.svg";?>" alt="Checkmark" width="20" height="20" class="mr-2">Get A Free Sample</span>
                                </div>
                                <div class="contact1 contactList text-left pr-2 pl-3">
                                    <span class="quickContactText"><img src="<?php echo ROOT_URL."assets/icons/tick-b.svg";?>" alt="Checkmark" width="20" height="20" class="mr-2">Customize Your Report</span>
                                    
                                </div>
                                <div class="contact1 contactList text-left pr-2 pl-3">
                                    <span class="quickContactText"><img src="<?php echo ROOT_URL."assets/icons/tick-b.svg";?>" alt="Checkmark" width="20" height="20" class="mr-2">Schedule An Analyst Call</span>
                                    
                                </div>
                                <div class="contact1 contactList text-left pr-2 pl-3">
                                    <span class="quickContactText"><img src="<?php echo ROOT_URL."assets/icons/tick-b.svg";?>" alt="Checkmark" width="20" height="20" class="mr-2">License Type Options</span>
                                </div><div class="contact1 contactList text-left pr-2 pl-3">
                                    <span class="quickContactText"><img src="<?php echo ROOT_URL."assets/icons/tick-b.svg";?>" alt="Checkmark" width="20" height="20" class="mr-2">Editable Report Options</span>
                                </div><div class="contact1 contactList text-left pr-2 pl-3">
                                   <span class="quickContactText"><img src="<?php echo ROOT_URL."assets/icons/tick-b.svg";?>" alt="Checkmark" width="20" height="20" class="mr-2">Post-Sale Service Support</span>
                                </div><div class="contact1 contactList text-left pr-2 pl-3">
                                    <span class="quickContactText"><img src="<?php echo ROOT_URL."assets/icons/tick-b.svg";?>" alt="Checkmark" width="20" height="20" class="mr-2">Country and Region Reports</span>
                                    
                                </div>
                            </div>  
                        </div>
                            
                        </aside>
                    </div>
                </div>
            </div>
        </section>
 
<?php $this->load->view("frontend/footer"); ?>
		<script>
           
			$(document).ready(function(){
				
				$("body").on("focus",".emailId,.phNo,.name,.company",function(){
					if($(this).hasClass("border-green")){
						$(this).removeClass("border-red");
						$(this).parent().find(".bi-info-circle").hide();
					}else{
						$(this).addClass("border-red");
						$(this).parent().find(".bi-info-circle").show();
					}
				});
				$("body").on("keyup",".emailId,.phNo,.name,.company",function(){
					if(!($(this).is(":invalid"))) {
						$(this).removeClass("border-red");
						$(this).addClass("border-green");
						$(this).parent().find(".bi-check-circle-fill").show();
						$(this).parent().find(".bi-info-circle").hide();
					}else{
						$(this).addClass("border-red");
						$(this).removeClass("border-green");
						$(this).parent().find(".bi-check-circle-fill").hide();
						$(this).parent().find(".bi-info-circle").show();
					}
				});
				
			});

            // PMR Exit popUp
            $(document).on('mouseleave', function(e){
            if(e.clientY < 0){
                $('.pmr-exit-Modal').modal('show');
                }
                });
                $("#pmr-exit-Modal .close").click(function(){
                    $('.pmr-exit-Modal').hide();
                    $('#pmr-exit-Modal').removeClass('pmr-exit-Modal');
            });
            setTimeout(function () {
                $('.pmr-exit-Modal').modal('show');
            }, 30000);
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