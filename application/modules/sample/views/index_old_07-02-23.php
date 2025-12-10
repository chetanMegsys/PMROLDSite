<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("frontend/meta_links"); ?>     
<link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>themes/css/theme-sample1.css">
<?php $this->load->view("frontend/header"); ?>
   
        <section class="sampleFirst-section sampleform-section position-relative lineHeight32">
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
                                <li    class="breadcrumb-item text-black" aria-current="page">
                                    <span><?php echo $pageHeading; ?></span>
                                </li>
                               
                                
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="onlineUser">
                            <p class="font12 mx-2 text-right mb-1 bold400">
                                <img src="<?php echo WEBSITE_URL; ?>themes/image/onlineUserSvg.png" alt="Professionals" class="img-fluid userIcon" width="15" height="15"> <span class="bold500"><u><?php echo $users_count = rand(200,250); ?> </u></span> Users Online
                            </p>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-9">
                        <div class="report-heading">
                            <h1 class="font27 text-black2 bold400 my-3"><?php echo $reportData[0]['rep_keyword']; ?></h1>
                            <h2 class="font15 text-black3 bold400"><?php echo $reportData[0]['rep_name']; ?></h2>
                        </div>
                        <div class="row px-5">
                            <div class="col-lg-12 col-md-12">
                                <div class="bg-grey1 radius15 py-3 px-5 my-3 mx-5 form-section">
                                    <div class="text-center">
                                         <?php if($enqType == 'S'){ ?>
                                        <h3 class="font24 mb-2 bold400 text-black4"><?php echo $pageHeadingnew; ?></h3>
                                    <?php } else { ?>
                                         <h3 class="font24 mb-2 bold400 text-black4"><?php echo $pageHeading; ?></h3>
                                    <?php } ?>

                                       
                                    <?php if($enqType == 'ASK'){ ?>
                                         <p class="font14 bold200 mb-2"><?php echo $pageSubHeading; ?></p>
                                    <?php } else { ?>
                                         <p class="font14 bold200 mb-2">In-depth report coverage is now just a few seconds away</p>
                                    <?php } ?>
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
                                        <input type="hidden" name="type" value="<?php echo isset($enqType) && $enqType != '' ? $enqType : 'S'; ?>">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn sampleFormSubmitBtn text-black5 radius100 bold500" name="btnSubmit">
                                            <?php if(isset($enqType) && $enqType !='' && $enqType == 'ASK' ){
                                                ?>
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-headset align-middle mr-1" viewBox="0 0 16 16">  <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/></svg>
                                                <?php
                                            }
                                            else{

                                                ?>
                                                <img src="<?php echo WEBSITE_URL; ?>themes/image/pdf-icon-latest.svg" width="22" height="22" title="Download PDF" alt="Download PDF" class="mr-2 img-fluid">

                                                <?php
                                            }
                                            ?>
                                            
                                           <?php echo isset($ButtonHeading) && $ButtonHeading!= '' ?  $ButtonHeading : 'Get It Now' ; ?>
                                    </button>
                                    <p class="font12 mx-2 text-center mb-1 bold400">
                                        <img src="<?php echo WEBSITE_URL; ?>themes/image/userSVG.svg" alt="Professionals" class="img-fluid userIcon" width="18" height="18"> From <?php echo $users_count; ?>  active users, <span class="bold500"><u><?php echo rand(20,50); ?> </u></span> have submitted this form
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
                        <!-- Premium report details -->
                        <div class="PremiumReportInfo right-boxes pb-4 pt-0 mt-0 mb-4">
                            <p class="font16 txt-black py-3 m-0 bold400 text-center">- Premium Report Details -</p>
                            <div class="d-flex flex-row px-lg-3">
                                <div class="w-50 pr-3">
                                    <!-- <img src="<?php echo WEBSITE_URL; ?>themes/image/cover-img.png" width="85" height="112" class="img-fluid" title="" alt=""> -->
                                    <img src="<?php echo WEBSITE_URL; ?>themes/image/report-sample-latest1.svg" width="85" height="112" class="img-fluid" title="" alt="">
                                </div>
                                <div>
                                    <ul class="list-unstyled mb-1">
                                        <li class="txt-black1 font10 pb-2"><span class="date-mm">  PMRREP<?php echo $reportData[0]['rep_id']; ?> </span></li>
                            
                            <?php if(isset($reportData[0]['rep_type']) && $reportData[0]['rep_type']=='N'){  ?>

                                                   <li class="txt-black1 font10 pb-2"><span class="date-mm"> <?php echo $reportData[0]['rep_type']=='N' ? date("F-Y",strtotime($reportData[0]['update_date'])) : date('F-Y', strtotime(date('Y-m-d'). ' + 50 days')); ?>  </span> </li>
                            <?php } ?>
                                                  <li class="txt-black1 font10 pb-2"><span class="date-mm"><?php echo $reportData[0]['cat_name']; ?></span></li>

                                        <li class="txt-black1 font10 pb-2"><span class="txt-black1"><?php echo isset($reportData[0]['rep_type']) && $reportData[0]['rep_type']=='N' ? $reportData[0]['rep_pages']." Pages" : 'Ongoing'; ?> </span></li>
                                        <li class="txt-black1 font10 pb-2 "><span class="txt-black1">PPT, PDF, WORD, EXCEL </span></li>
                                    </ul>
                               </div>
                           </div>
                       </div>
                       <div class="get-started-box right-boxes pb-4 pt-0 px-3 mt-3 text-center">
                            <p class="font16 txt-black py-3 m-0 bold400 text-center">- Get Started -</p>
                            <p class="font12 bold400">Get insights that lead to new growth opportunities</p>
                            <a class="btn btn-purchesReport bold500 text-black" href="<?php echo WEBSITE_URL."checkout/".$reportData[0]['rep_id']; ?>" title="<?php echo $reportData[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?>">
                             <img src="<?php echo WEBSITE_URL;?>themes/image/purchase-report-icon.png" width="20" height="26" alt="Purchase Report" title="Purchase Report" class="mr-2 align-bottom">
                             <?php echo $reportData[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?></a>
                         </div>
                         
                        <aside class="right-side-section">
                           <div class="quickContact right-boxes px-2 pt-0 pb-0 mt-4 text-center">
                            <p class="fs-16 txt-black contactList py-3 bold400 m-0">- Quick Contact -</p>
                            <div class="QuickContactList">
                                <div class="whatsapp contactList text-left pr-2 pl-3">
                                    <a href="https://api.whatsapp.com/send?phone=919545518105" class="text-black3 font14 d-flex"title="Chat on Whatsapp"><span class="quickContactIMG"></span> <span class="quickContactText">Chat on Whatsapp</span></a>
                                </div>
                                <div class="contact1 contactList text-left pr-2 pl-3">
                                    <a href="tel:+18009610353" class="text-black3 font14 d-flex" title="+1 800-961-0353"><span class="quickContactIMG"></span> <span class="quickContactText">+1 800-961-0353</span></a>
                                </div>
                                <div class="contact2 contactList text-left pr-2 pl-3">
                                    <a href="tel:+16465687751" class="text-black3 font14 d-flex" title="+1-646-568-7751"><span class="quickContactIMG"></span> <span class="quickContactText">+1-646-568-7751</span></a>
                                </div>
                                <div class="contact3 contactList text-left pr-2 pl-3">
                                    <a href="tel:+18888634084" class="text-black3 font14 d-flex" title="+1 888-863-4084"><span class="quickContactIMG"></span> <span class="quickContactText">+1 888-863-4084</span></a>
                                </div>
                                <div class="contact4 contactList text-left pr-2 pl-3">
                                    <a href="mailto:sales@persistencemarketresearch.com" class="text-black3 font14 d-flex" title="Email Us"><span class="quickContactIMG"></span> <span class="quickContactText">Email Us</span></a>
                                </div>
                            </div>  
                        </div>
                            <div class="member-of right-boxes pb-4 pt-0 mt-4 px-3 text-center">
                                <p class="font16 txt-black py-3 m-0 bold400 text-center">- Member Of -</p>
                                
                                 <div class="secureTrustDiv">
                                    <a href="https://www.dnb.com/business-directory/company-profiles.persistence_market_research_private_limited.9abc6bce674200f850b02f07995c6f97.html" title="Duns Registered" target="_blank">
                                        <img src="<?php echo WEBSITE_URL; ?>themes/image/dun-logo.png" height="86" width="104" title="Dun &amp; Bradstreet" alt="Dun &amp; Bradstreet">
                                    </a>
                                 </div>
                                <p class="font16 txt-black py-3 m-0 bold400 text-center">- Secured Payment -</p>
                                 <div class="secureTrustDiv">
                                     <img class="" width="156" height="49" src="<?php echo WEBSITE_URL; ?>themes/image/secureTrust-logo.png" alt="Secure Trust" title="Secure Trust">
                                 </div>
                                 <p class="font16 txt-black py-3 m-0 bold400 text-center">- Policy Compliance -</p>
                                  <div class="gdprDiv">
                                      <img class="" src="<?php echo WEBSITE_URL; ?>themes/image/lms-logo.png" width="72" height="63" alt="GDPR" title="GDPR">
                                    <p class="font12 lineheight20 mb-0 ml-3 mt-2">We are GDPR compliant! We protect your transactions & personal information.</p>
                                  </div>   
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- First Section Ends Here -->

        <!-- second Form Section -->

        <section class="bottom-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-9">
                        <div class="ourClientBox p-4">
                            <p class="text-center font18">- Prestigious Clients -</p>
                            <div class="ourClientImg text-center">
                                <img src="<?php echo WEBSITE_URL; ?>themes/image/client-<?php echo $reportData[0]['cat_id']; ?>.jpg" alt="Our prestigious clients" width="646" height="80" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        
                    </div>
                </div>
            </div>
        </section>

<?php $this->load->view("frontend/footer"); ?>

<!-- Exit popup start -->
<div class="modal fade pmr-exit-Modal" id="pmr-exit-Modal" tabindex="-1" data-keyboard="false" data-backdrop="static" style="display: none;" aria-hidden="true">
    <div class="modal-dialog pmrPopupModal" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 z-index-high">
                <button type="button" class="close p-2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x-lg txt-black" viewBox="0 0 16 16">
                      <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"></path>
                    </svg></span>
                </button>
            </div>
            <div class="modal-body pmrPopUpBG text-center p-0">
                <div class="modal_Header pb-4 px-5">
                    <h1 class="font-weight-bold popupTitle">Wait, We have a <br><span class="txt-christmas-red">New Year</span> offer for you!</h1>
                    <p class="text-center popupSubTitle mb-0">Get Your <del>20%</del> <span>30% Discount</span> Now!</p>
                </div>
                <div class="modal_Footer pt-4 pb-4 px-5 d-flex justify-content-around">
                    <div class="noBtnDiv">
                        <button class="close btn" data-dismiss="modal" aria-label="Close">
                            <div class="btnDiv d-flex">
                                <div class="btnDiv1 pr-2">
                                    <p class="btnDiv1-p1 m-0"><span>NO</span><br> Thanks,</p>
                                </div>
                                <div class="btnDiv2 pl-1 pt-1 text-left">
                                    <p class="btnDiv2-p2 m-0">I'd rather <br> pay full price.</p>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="yesBtnDiv">
                        <a href="<?php echo WEBSITE_URL; ?>checkout/<?php echo $reportData[0]['rep_id']; ?>?promo=P30">
                        <button class="btn">
                                <div class="btnDiv d-flex align-items-center">
                                    <div class="btnDiv1">
                                        <p class="btnDiv1-p1 m-0"><span>YES</span></p>
                                    </div>
                                    <div class="btnDiv2 pl-2 pt-1">
                                        <p class="btnDiv2-p2 m-0">Get my 30% off</p>
                                    </div>
                                </div>
                            
                        </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
		<script>
           
			$(document).ready(function(){
                


				 
				
				
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
    </body>
</html>