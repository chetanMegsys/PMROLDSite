 <!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("frontend/meta_links"); ?>
     <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL; ?>themes/css/theme-sample-mobile.css">
    <?php $this->load->view("frontend/header_mobile"); ?>
 <style>.sampleform-section .form-section form .sampleFormBtn{position: relative;}</style>
       <section class="sampleFirst-section bg-grey1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent p-0 my-0">
                                <li class="breadcrumb-item" style="margin-top: -4px;">
                                    <a href="<?php echo ROOT_URL; ?>" class="text-blue-new" title="Persistence Market Report" style="margin-top:-2px;">
                                    <img src="<?php echo ROOT_URL; ?>assets/icons/home-icon.svg" width="16px" height="16px" alt="Home">
                                    </a>
                                </li>
                                <li class="breadcrumb-item text-black">
                                    <a href="<?php echo WEBSITE_URL."market-research.asp"; ?>" class="text-black" title="Persistence Market Report">
                                        <span>Market Research</span>
                                    </a>
                                </li>
                                <li   class="breadcrumb-item text-black" aria-current="page">
                                    <a href="<?php echo WEBSITE_URL."market-research/".$reportData[0]['rep_url'].".asp"; ?>" class="text-black" ><span><?php echo $reportData[0]['rep_keyword']; ?></span></a>
                                </li>
                                <li    class="breadcrumb-item text-black" aria-current="page">
                                    <span><?php echo $pageHeading; ?></span>
                                </li>
                            </ol>
                        </nav>
                    </div>                    
                </div>
            </div>
        </section>
        <!-- First Section Ends Here -->

        <!-- second Form Section -->
        <section class="sampleform-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="bg-grey1 radius15 py-3 px-3 mt-4 mb-3 form-section">
                            <div class="text-center">
                                 <?php if($enqType == 'S'){ ?>
                                        
                                         <h1 class="text-blue2 font18"> <?php echo $pageHeadingnew; ?> </h1>
                                    <?php } else { ?>
                                          <h1 class="text-blue2 font18"> <?php echo $pageHeading; ?> </h1>
                                    <?php } ?>

                               
                                <?php if($enqType == 'ASK'){ ?>
                                    <p class="font12 bold200 mb-2"><?php echo $pageSubHeading; ?></p>
                                <?php } else { ?>
                                <p class="font12 bold200 mb-2">In-depth report coverage is now just a few seconds away</p>
                            <?php } ?>
                            </div>
                            <form action=""   method="post" name="" onsubmit="return validateForm();" >
                                 <?php
                                    $name = $this->security->get_csrf_token_name(); 
                                    $hash = $this->security->get_csrf_hash();
                                    $_SESSION[$name] = $hash;
                                ?>
                                <input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;background: transparent;" class="fname" value="">
                                <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
                                <input type="hidden" name="source" value="FM" /> 
                                <input type="hidden" name="repId" value="<?php echo $reportData[0]['rep_id']; ?>">
                                <input type="hidden" name="type" value="<?php echo $enqType; ?>">
                                <div class="">
                                    <div class="firstFormDiv bg-white p-3 mb-3 radius10">
                                         <div class="form-group position-relative">
                                            <input type="text" name="name" id="idName1" class="form-control name" placeholder="Full Name*"  >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                            </svg>
                                            <span class="text-danger font12" id="errorName"></span>
                                        </div>

                                        <div class="form-group position-relative">
                                            <input type="email" name="emailId" id="idFctMREmailId1" class="form-control emailId" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                            </svg>
                                            <span class="text-danger font12" id="errorFullName"></span>
                                        </div>
                                       
                                    </div>
                                    <div class="secondFormDiv bg-white p-3 mb-0 radius10">
                                        <div class="form-group position-relative">
                                            <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" required="required" placeholder="Phone Number*" maxlength="14"  onblur="checksubmit(this.value);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                            </svg>
                                            <span class="text-danger font12 errorPhoneNo" id="errorPhoneNo"></span>
                                        </div>
                                        <div class="form-group position-relative">
                                            <input type="text" name="company" id="idCompanyName" class="form-control company" placeholder="Company Name*" >
                                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                            </svg>
                                            
                                            <span class="text-danger font12" id="errorCompanyName"></span>
                                        </div>
                                       
                                        <div class="form-group">
                                            <textarea id="message1" name="message" class="form-control" rows="3"  placeholder="Describe your interest to the analyst in a few sentences"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                            <div class="text-center">
                                <div class="sampleFormBtn">
                                    <button type="submit" class="btn sampleFormSubmitBtn text-black5 radius100 bold500" name="btnSubmit" style="background:#282C7D !important;border: 1px solid #282C7D;color:#fff;">
                                    

                                     <?php if(isset($enqType) && $enqType !='' && $enqType == 'ASK' ){
                                                ?>
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-headset align-middle mr-1" viewBox="0 0 16 16">  <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/></svg>
                                                <?php
                                            }
                                            else{

                                                ?>
                                                

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
        </section>



<script src="<?php echo WEBSITE_URL; ?>themes/js/jquery-3.6.0.min.js"></script>
        <script src="<?php echo WEBSITE_URL; ?>themes/js/bootstrap.bundle.min.js"></script>
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
            $(document).ready(function(){
				
				$('.toggle_search').click(function() {
					$(this).toggleClass('active');
					$("#s").focus();
					$('.toggle_search_container').toggleClass('open');

					$('#toggle').removeClass('active');
					$('#overlay').removeClass('open');
					$('#toggle_menu').removeClass('rotateMenuLines');
				});

                // Show hide Top menu on menu button clicked
                $(document).on("click", function(event){
                    var $trigger = $('#navbarToggleExternalContent, .navbar-toggler');
                    // var $trigger1 = $('#searching, #dropdownsearch,.search');
                    if($trigger !== event.target && !$trigger.has(event.target).length){
                        $('#navbarToggleExternalContent').removeClass('show');
                        $('#toggle_menu').removeClass('rotateMenuLines');
                    }

                });
                // Rotate Menu Lines
                $("#navbar-toggler").on("click",function(){
                    $("#toggle_menu").toggleClass("rotateMenuLines");
                });
                
                
                $("body").on("focus",".emailId,.phNo,.company,.name",function(){
                    if($(this).hasClass("border-green")){
                        $(this).removeClass("border-red");
                        $(this).parent().find(".bi-info-circle").hide();
                    }else{
                        $(this).addClass("border-red");
                        $(this).parent().find(".bi-info-circle").show();
                    }
                });
                $("body").on("keyup",".emailId,.phNo,.company,.name",function(){
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
 <?php $this->load->view("frontend/search_footer"); ?>
 