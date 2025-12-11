<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("frontend/meta_links"); ?>     
<link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>themes/css/theme-sample1.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php $this->load->view("frontend/header"); ?>
   
        <section class="sampleFirst-section sampleform-section position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
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
                                <li    class="breadcrumb-item text-black" aria-current="page">
                                   <a href="<?php echo WEBSITE_URL."market-research/".$reportData[0]['rep_url'].".asp"; ?>" class="text-black"> <span><?php echo $reportData[0]['rep_keyword']; ?></span></a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="onlineUser">
                            <p class="font12 mx-2 text-right mb-1 bold300">
                                <img src="<?php echo WEBSITE_URL; ?>themes/image/onlineUserSvg.png" alt="Professionals" class="img-fluid userIcon" width="15" height="15"> <span class="bold500"><u><?php echo $users_count = rand(200,250); ?> </u></span> Users Online
                            </p>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-9">
                        <div class="report-heading">
                            <h1 class="font27 text-black2 bold300 my-3"><?php echo $reportData[0]['rep_keyword']; ?></h1>
                            <h2 class="font15 text-black3 bold300"><?php echo $reportData[0]['rep_name']; ?></h2>
                            <!-- <p class="font14 text-black3 bold300 mt-2 lineheight24">Cloud Collaboration Market Segmented By Unified, Document Management System, Project and Team Management, Enterprise Social Cloud 
                                Collaboration Solution for Training, Consulting & Integration, Support and Maintenance Services with Private, Public and Hybrid Type</p> -->
                        </div>
                        <div class="row px-5">
                            <div class="col-lg-12 col-md-12">
                                <div class="bg-grey1 radius15 py-3 px-5 mt-4 mb-3 mx-5 form-section">
                                    <div class="text-center">
                                        <h3 class="font24 mb-4 bold400 text-black4"><?php echo $pageHeading; ?></h3>
                                        <!-- <p class="font14 bold200 mb-2">The most complete guide to Suppositories Market in 2022</p> -->
                                    </div>
                                    <form action="" method="post" name="" onsubmit="">
                                         <?php
                                            $name = $this->security->get_csrf_token_name(); 
                                            $hash = $this->security->get_csrf_hash();
                                            $_SESSION[$name] = $hash;
                                        ?>
                                         <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> <input type="hidden" name="source" value="FW" /> 



                                        <div class="row">
                                            <div class="form-group col-md-6 position-relative">
                                                <input type="email" name="emailId" id="idFctMREmailId1" class="form-control emailId" required="required" placeholder="Business Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                                </svg>
                                                <span class="text-danger font12" id="errorFullName"></span>
                                            </div>
                                            <div class="form-group col-md-6 position-relative">
                                                <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" required="required" placeholder="Phone Number*">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                                </svg>
                                                <span class="text-danger font12" id="errorPhoneNo"></span>
                                            </div>
                                        <div class="form-group col-md-12 position-relative">
                                            <input type="text" name="name" id="idName1" class="form-control name" placeholder="Full Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" name="company" id="idCompanyName" class="form-control company" placeholder="Company Name">
                                            <span class="text-danger font12" id="errorCompanyName"></span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" name="jobTitle" id="idJobTitle" class="form-control jobTitle" placeholder="Job Title">
                                            <span class="text-danger font12" id="errorJobTitle"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="message1" name="message" class="form-control" rows="2" maxlength="200" placeholder="Share your specific area of interest for our analyst to help"></textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="hidden" name="repId" value="<?php echo $reportData[0]['rep_id']; ?>">
                                        <input type="hidden" name="type" value="S">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn sampleFormSubmitBtn text-black5 radius100 bold500" name="btnSubmit">
                                            <img src="<?php echo WEBSITE_URL; ?>themes/image/pdf-icon-latest.svg" width="22" height="22" title="Download PDF" alt="Download PDF" class="mr-2 img-fluid">
                                           <?php echo isset($ButtonHeading) && $ButtonHeading!= '' ?  $ButtonHeading : 'Get It Now' ; ?>
                                    </button>
                                    <p class="font12 mx-2 text-center mb-1 bold300">
                                        <img src="<?php echo WEBSITE_URL; ?>themes/image/userSVG.svg" alt="Professionals" class="img-fluid userIcon" width="18" height="18"> From <?php echo $users_count; ?>  active users, <span class="bold500"><u><?php echo rand(200,250); ?> </u></span> have submitted this form
                                        </p>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <p class="font12 text-center text-grey1 pb-5">Your personal details are safe with us.
                                <a href="<?php echo WEBSITE_URL; ?>privacy-policy.asp" title="Privacy Policy" target="_blank" class="text-blue3"> Privacy Policy</a>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <div class="let-connect mb-3">
                            <div class="analyst-img">
                                <p class="font16 txt-black pt-2 m-0 bold300 text-center">- Let's Connect -</p>
                            </div>
                            <div class="analyst-info d-flex">
                                <div class="px-2">
                                    <img src="<?php echo WEBSITE_URL; ?>themes/image/Mohit-lets-connect.png" alt="Talk To an Expert Today" class="img-fluid" width="65" height="65" title="Talk To an Expert Today" style="position: relative;top: -25px;left: 3px;">
                                </div>
                                <div class="analyst-name ml-2">
                                    <p class="mb-0 font15 bold300 text-blue">Mohit Loshali </p>
                                    <p class="mb-0 designation font11">Principal Consultant</p>
                                    <p class="my-2"><span><a href="#"><span class="linkedin"></span></a> </span></p>
                                </div>
                            </div>
                            <a class="btn btn-connect-Auth btn-block bold300" href="<?php echo WEBSITE_URL."ask-an-expert/".$reportData[0]['rep_id']; ?>" title="Connect with Author" ><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-headset align-middle mr-1" viewBox="0 0 16 16">  <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/></svg> Connect with Author</a>
                        </div>
                        <aside class="right-side-section">                            
                            <!-- <div class="get-started-box right-boxes pb-4 pt-0 mt-4 px-3 text-center">
                                <p class="font16 txt-black py-3 m-0 bold300 text-center">- Get Started -</p>
                                <p class="font12 bold300 m-0">Get insights that lead to new growth opportunities</p>
                                <a class="btn btn-primary btn-purchesReport bold500 text-black" href="#" title="Purchase Report"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill align-middle" viewBox="0 0 16 16">  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg> Purchase Report</a>
                            </div> -->

                            <!-- <div class="Customization-box right-boxes pb-4 pt-0 mt-4 px-3 text-center">
                                <p class="font16 txt-black py-3 m-0 bold300 text-center">- Customization -</p>
                                <p class="font12 bold300 m-0">Explore Intelligence Tailored to Your Business Goals.</p>
                                <div class="btn-container">
                                    <a class=" btn-Customization btn-custo bold500" href="#" title="Request Customization">Request Customization</a>
                                </div>
                            </div> -->

                            <div class="quickContact right-boxes px-2 pt-0 pb-0 mt-5 text-center">
                                <p class="font16 txt-black contactList py-3 bold300 m-0">- Quick Contact -</p>
                                <div class="QuickContactList">
                                    <div class="whatsapp contactList text-left pr-2 pl-3">
                                        <a href="https://api.whatsapp.com/send?phone=918956047464" class="text-black3 font14 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">Chat on Whatsapp</span></a>
                                    </div>
                                    <div class="contact1 contactList text-left pr-2 pl-3">
                                        <a href="tel:+1(628)251-1583" class="text-black3 font14 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">+1 (628) 251-1583</span></a>
                                    </div>
                                    <div class="contact2 contactList text-left pr-2 pl-3">
                                        <a href="tel:+353-1-4434-232" class="text-black3 font14 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">+353-1-4434-232 (D)</span></a>
                                    </div>
                                    <div class="contact3 contactList text-left pr-2 pl-3">
                                        <a href="tel:+1(888)863-5616" class="text-black3 font14 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">+1 (888) 863-5616</span></a>
                                    </div>
                                    <div class="contact4 contactList text-left pr-2 pl-3">
                                        <a href="mailto:sales@pmr.com" class="text-black3 font14 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">sales@pmr.com</span></a>
                                    </div>
                                </div>  
                            </div>
                            <!-- <div class="googleReview right-boxes pt-4 mt-4 px-3 d-flex justify-content-around text-center">
                                <div class="g-Img">
                                    <img src="<?php echo WEBSITE_URL; ?>themes/image/googleLogo.png" height="56px" width="55px" title="Dun &amp; Bradstreet" alt="Dun &amp; Bradstreet">
                                </div>
                                <div class="reviewTextDiv">
                                    <p class="font18 txt-black m-0 bold300 text-center">GOOGLE REVIEWS</p>
                                    <div class="g-rating d-flex justify-content-between">
                                        <div class="gRatingNumber">
                                            <p class="m-0 bold500">4.8</p>
                                        </div>
                                        <div class="gRatingStar">
                                            <div class="starImg">
                                                <img src="<?php echo WEBSITE_URL; ?>themes/image/starSvg.svg" width="15" height="15" alt="GOOGLE REVIEWS" class="img-fluid">
                                                <img src="<?php echo WEBSITE_URL; ?>themes/image/starSvg.svg" width="15" height="15" alt="GOOGLE REVIEWS" class="img-fluid">
                                                <img src="<?php echo WEBSITE_URL; ?>themes/image/starSvg.svg" width="15" height="15" alt="GOOGLE REVIEWS" class="img-fluid">
                                                <img src="<?php echo WEBSITE_URL; ?>themes/image/starSvg.svg" width="15" height="15" alt="GOOGLE REVIEWS" class="img-fluid">
                                                <img src="<?php echo WEBSITE_URL; ?>themes/image/starSvg.svg" width="15" height="15" alt="GOOGLE REVIEWS" class="img-fluid">
                                            </div>
                                            <p class="font14">100 reviews</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="greatplace-certi right-boxes  px-2 pt-0 pb-0 mt-4">
                                <div class="d-flex">
                                    <div>
                                        <img src="<?php echo WEBSITE_URL; ?>themes/image/greatplace-certi.png" class="ml-3 mb-3" alt="Great place Certificate" width="60px" height="102px">
                                    </div>
                                    <p class="font16 mt-4 ml-4 pt-2 bold500">Great place to Work Certification</p> 
                                </div>
                            </div> -->
                            <div class="member-of right-boxes pb-4 pt-0 mt-4 px-3 text-center">
                                <!-- <p class="font16 txt-black py-3 m-0 bold300 text-center">- Accreditation -</p> -->
                                <p class="font16 txt-black py-3 m-0 bold300 text-center">- Secured Payment -</p>
                                <!-- <img src="<?php echo WEBSITE_URL; ?>themes/image/dun-logo.png" height="76px" width="98px" title="Dun &amp; Bradstreet" alt="Dun &amp; Bradstreet"> -->
                                 <div class="secureTrustDiv">
                                     <img class="" width="156px" height="49" src="<?php echo WEBSITE_URL; ?>themes/image/secureTrust-logo.png" alt="Secure Trust" title="Secure Trust">
                                 </div>
                                 <p class="font16 txt-black py-3 m-0 bold300 text-center">- Policy Compliance -</p>
                                  <div class="gdprDiv">
                                      <img class="" src="<?php echo WEBSITE_URL; ?>themes/image/lms-logo.png" width="72px" height="63px" alt="Lorem ipsum" title="Lorem ipsum">
                                    <p class="font12 lineheight20 mb-0 ml-3 mt-2">We are GDPR and CCPA compliant! Your transaction &amp; personal information is protected from unauthorized use.</p>
                                  </div>   
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- First Section Ends Here -->

        <!-- second Form Section -->
        <!-- <section class="sampleform-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        
                    </div>
                    <div class="col-lg-3 col-md-3">
                        
                    </div>
                </div>
            </div>
        </section> -->

        <section class="bottom-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-9">
                        <div class="ourClientBox p-4">
                            <p class="text-center font18">- Prestigious Clients -</p>
                            <div class="ourClientImg text-center">
                                <img src="<?php echo WEBSITE_URL; ?>themes/image/client-<?php echo $reportData[0]['cat_id']; ?>.jpg" alt="Our prestigious clients" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        
                    </div>
                </div>
            </div>
        </section>

<?php $this->load->view("frontend/footer"); ?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       
		<script>
           
			$(document).ready(function(){
                 $('.toggle_search').click(function() {
                    $(this).toggleClass('active');
                    $("#s").focus();
                    $('.toggle_search_container').toggleClass('open');

                    $('#toggle').removeClass('active');
                    $('#overlay').removeClass('open');
                    $('#toggle_menu').removeClass('rotateMenuLines');
                    // $('.toggle_contact_container').removeClass('open');
                });


				// Show hide Top menu on menu button clicked
				$(document).on("click", function(event){
					var $trigger = $('#navbarToggleExternalContent, .navbar-toggler');
					var $trigger1 = $('.search-btn, .toggle_search_container');
					if($trigger !== event.target && !$trigger.has(event.target).length){
						$('#navbarToggleExternalContent').removeClass('show');
						$('#toggle_menu').removeClass('rotateMenuLines');
					}
                     if($trigger1 !== event.target && !$trigger1.has(event.target).length){
                            $('.toggle_search_container').removeClass('open');
                        }

				});
				// Rotate Menu Lines
				$("#navbar-toggler").on("click",function(){
					$("#toggle_menu").toggleClass("rotateMenuLines");
				});
				
				
				$("body").on("focus",".emailId,.phNo",function(){
					if($(this).hasClass("border-green")){
						$(this).removeClass("border-red");
						$(this).parent().find(".bi-info-circle").hide();
					}else{
						$(this).addClass("border-red");
						$(this).parent().find(".bi-info-circle").show();
					}
				});
				$("body").on("keyup",".emailId,.phNo",function(){
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
		</script>
    </body>
</html>