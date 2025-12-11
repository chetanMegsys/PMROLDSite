<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Purchase Report - <?php echo $report_data[0]['rep_keyword']; ?></title>
    <meta name="description" content="Purchase report with secured transaction - <?php echo $report_data[0]['rep_keyword']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo WEBSITE_URL; ?>themes/image/fevicon-pmr.svg">    
    <meta name="robots" content="NOINDEX">
    <link href="<?php echo WEBSITE_URL; ?>themes/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo WEBSITE_URL; ?>assets/css/checkout.css" rel="stylesheet" />
</head>
<body>
    <header class="headerBar checkoutHeader">
        <nav class="navbar navbar-default">
            <div class="container d-block">
               <div class="row">
                    <div class="col-md-3 col-sm-2 col-6">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
                                <img class="img-fluid" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg" alt="Persistence Market Research" title="Persistence Market Research" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8 d-none d-sm-block">
                        <div id="navbar" class="navbar-collapse checkOutList text-center">
                            <ul class="nav navbar-nav flex-row justify-content-center">
                                <li>
                                    <a href="javascript:void(0)" title="Summary">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:void(0)" title="Register">
                                        <span>Register</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Thank you">
                                        <span>Thank you</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-2 col-6">
                        <div class="secureText">
                            <p class="mb-0">
                                <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-shield-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
                                    <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                  </svg>
                                  100% Secure</p>
                        </div>
                    </div>
               </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="py-0 orderDetailsSecMob">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 orderDetailsColMob1">
                                <div class="orderDetailsDivMob1 mb-2">
                                    <p class="fs-16 txt-black2 mb-1 orderP pl-2">Order Summary</p>
                                    <div class="details d-flex">
                                        
                                        <div class="detailText pl-2">
                                            <p class="fs-16 txt-black1 m-0"><?php echo $report_data[0]['rep_keyword']; ?></p>
                                            <div class="rDeatils d-flex mt-0">
                                                <p class="m-0 pr-3 fs-11 txt-grey2 d-flex flex-column rborder-right">
                                                    
                                                    <span>PMRREP<?php echo $report_data[0]['rep_id']; ?></span>
                                                </p>  <?php if(isset($report_data[0]['cat_name']) && $report_data[0]['cat_name'] != '' ) {
                                                    ?>
                                                <p class="m-0 pl-3 fs-12 txt-grey2 d-flex flex-column">
                                                    
                                                    <span><?php echo $report_data[0]['cat_name']; ?></span>
                                                </p>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-0 mb-2 txt-grey2 fs-10 orderP pl-2">Format*: <em>PPT, PDF, WORD, EXCEL</em></p>
                                    <div class="licenseDetails licenseDetailsMob">
                                        <p class="fs-14 txt-black3 mt-4 mb-2 d-none">Selected License</p>
                                        <div class="licenseType1 d-none">
                                            <p class="p2 fs-13 txt-grey2 m-0 py-3 d-flex justify-content-between">
                                            <span class="spnLicense">Single User license</span>
                                            <span class="pr-5 spnPrice">$<?php echo $report_data[0]['rep_price_sul']; ?></span>
                                            </p>
                                        </div>
                                        <div class="pmr-discount promo_frm_apply d-none pl-2">
                                            <p class="fs-13 txt-grey2 m-0 py-3 d-flex justify-content-between">
                                                <span class="">Discount:</span>
                                                <span class="pr-5 spnDiscount">- $0</span>
                                            </p>
                                            <p class="couponText my-2 py-2 px-3 bg-white radius4 fs-14 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="mr-2 align-text-top" fill="#42a43d" viewBox="0 0 16 16">
                                                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                                </svg>
                                                Promo Code: <span class="txt-red txtPromoSpn"></span> Applied*
                                            </p>    
                                        </div>                                         
                                        <div class="licenseTotal d-none">
                                            <p class="p3 fs-14 txt-grey2 m-0 py-3 d-flex justify-content-between">
                                                <span class="">Total <span class="fs-11">(Inclusive of all taxes) :</span></span>
                                                <span class="pr-5 txt-blue spnTotal">$<?php echo $report_data[0]['rep_price_sul']; ?></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pl-2 promo_frm <?php echo isset($_GET['custom']) && $_GET['custom']!='' ? 'd-none' : ''; ?>">
                                        <h6 class="txt-black3 fs-14 mt-0 mb-2">Apply Promo Code</h6>
                                        <input type="text" name="PromoCode" class="form-control d-inline-block mr-2 align-top txtPromo"   value="<?php echo isset($_GET['promo']) && $_GET['promo']!='' ? $_GET['promo'] : ''; ?>">
                                        <input type="button" class="btn btn-primary align-top btnPromo" value="Apply">
                                        <p class="fs-14 ml-1 text-danger ErrorPromo"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                            	<form action="" method="POST">
                                    <?php
                                        $name = $this->security->get_csrf_token_name(); 
                                        $hash = $this->security->get_csrf_hash();
                                        $_SESSION[$name] = $hash;
                                    ?>
                                      
                                    <input type="hidden" class="hdnCsrf" name="<?=$name;?>" value="<?=$hash;?>" /> 
	                                <p class="px-4 mb-2 fs-18 bold500">Select License Type</p>
	                                <div class="col-md-12 selectLicenseType">
	                                    <div class="row py-3 bgLicenseType bgLicenseType1 greenborder active">
                                            <div class="col-lg-12 col-12">
                                                <label class="contRedio contRedioCheckout">
                                                    <span class="row">
                                                        <div class="col-md-8 col-sm-8 col-8">
                                                            
                                                                Single User License
                                                                <input type="radio" checked="checked" name="radLicense" class="payment_type" value="S" data-name="Single User license" data-val="<?php echo $report_data[0]['rep_price_sul']; ?>">
                                                                <span class="checkmark"></span>
                                                           
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-4">
                                                            $<?php echo $report_data[0]['rep_price_sul']; ?>
                                                        </div>
                                                    </span>
                                                </label>
                                            </div>
	                                        
	                                    </div>
	                                    <div class="row py-3 bgLicenseType bgLicenseType2 border-T-B-none">
                                            <div class="col-lg-12 col-12">
                                                <label class="contRedio contRedioCheckout">
                                                    <span class="row">
                                                        <div class="col-8">
                                                            
                                                                Multi User License
                                                                <input type="radio" name="radLicense" class="payment_type" value="M" data-name="Multi User license" data-val="<?php echo $report_data[0]['rep_price_el']; ?>">
                                                                <span class="checkmark"></span>
                                                            
                                                        </div>
                                                        <div class="col-4">
                                                            $<?php echo $report_data[0]['rep_price_el']!=''&&$report_data[0]['rep_price_el']!=0 ? $report_data[0]['rep_price_el'] : $report_data[0]['rep_price_sul']; ?>
                                                        </div>
                                                    </span>
                                                </label>
                                            </div>
	                                        
	                                    </div>
	                                    <div class="row py-3 bgLicenseType bgLicenseType3">
                                            <div class="col-lg-12 col-12">
                                                <label class="contRedio contRedioCheckout">
                                                    <span class="row">
                                                        <div class="col-md-8 col-sm-8 col-8">
                                                            
                                                                Corporate License
                                                                <input type="radio" name="radLicense"  value="C" class="payment_type"  data-name="Corporate license" data-val="<?php echo $report_data[0]['rep_price_cul']; ?>">
                                                                <span class="checkmark"></span>
                                                           
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-4">
                                                            $<?php echo $report_data[0]['rep_price_cul']!=''&&$report_data[0]['rep_price_cul']!=0 ? $report_data[0]['rep_price_cul'] : $report_data[0]['rep_price_sul']; ?>
                                                        </div>
                                                    </span>
                                                </label>
                                            </div>
	                                        
	                                    </div>
	                                </div>
	                                <div class="col-md-12 buyNowSec py-5 text-center">
	                                    <button class="btn btnBuyNow" type="submit" name="proceed_to_register" value="proceed_to_register">
	                                        Proceed To Register
	                                    </button>
	                                </div>
                                    <input type="hidden" name="hdnPromoCode" class="hdnPromoCode" value="">
	                        	</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sectionFooter orderDetailsColMob1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="quickContact right-boxes my-3 ml-5">
                            <p class="fs-13 txt-black contactList bold500 m-0">Quick Contact</p>
                            <div class="QuickContactList">
                                <div class="whatsapp qContactList text-left pr-2 pl-1">
                                    <a href="https://api.whatsapp.com/send?phone=919511705688" class="text-black3 fs-12 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">Chat on Whatsapp</span></a>
                                </div>
                                <div class="contact1 qContactList text-left pr-2 pl-1">
                                    <a href="tel:+18009610353" class="text-black3 fs-12 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">+1 800-961-0353</span></a>
                                </div>
                                <div class="contact2 qContactList text-left pr-2 pl-1">
                                    <a href="tel:+16465687751" class="text-black3 fs-12 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">+1-646-568-7751</span></a>
                                </div>
                                <div class="contact3 qContactList text-left pr-2 pl-1">
                                    <a href="tel:+18888634084" class="text-black3 fs-12 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">+1 888-863-4084</span></a>
                                </div>
                                <div class="contact4 qContactList text-left pr-2 pl-1">
                                    <a href="mailto:sales@persistencemarketresearch.com" class="text-black3 fs-12 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">Email Us</span></a>
                                </div>
                            </div> 
                            <p class="text-left p-0 m-0 fs-10">
                                *Terms & Conditions Apply
                            </p> 
                        </div>
                        <div class="paymentOption pt-2 mb-3">
                             
                            <p><small>We accept all major credit cards</small></p>
                            <div class="text-center">
                                <img class="img-fluid mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/payment-img.png" alt="Payment Option" title="Payment Option" />
                            </div>
                            <div class="footerList text-center">
                            <ul class="list-unstyled list-inline mb-0 mt-4">
                                <li>
                                    <a href="<?php echo WEBSITE_URL."disclaimer.asp"; ?>" target="_bank" title="Disclaimer">Disclaimer</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL."privacy-policy.asp"; ?>" target="_bank" title="Privacy Policy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL."terms-and-conditions.asp"; ?>" target="_bank" title="Terms and Conditions">Terms and Conditions</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL."return-policy.asp"; ?>" target="_bank" title="Return Policy">Return Policy</a>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0 py-2"><small>Copyright © Persistence Market Research</small></p>
                </div>
            </div>
        </div>
    </footer>

        <!-- Exit popup start -->
<div class="modal fade pmr-exit-Modal" id="pmr-exit-Modal" tabindex="-1" role="dialog" data-keyboard="false" aria-modal="true" data-backdrop="static" style="display: none;">
    <div class="modal-dialog pmrPopupModal" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 z-index-high">
                <button type="button" class="close p-2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x-lg txt-black" viewBox="0 0 16 16">
                      <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg></span>
                </button>
            </div>
            <div class="modal-body pmrPopUpBG text-center p-0">
                <div class="modal_Header pb-5 px-5">
                    <h1 class="popupTitle">Wait, we have a <br><span class="txt-christmas-red">Special</span> offer for you!</h1>
                    <p class="text-center popupSubTitle mb-3">Get Your <span>20% Discount</span> Now!</p>
                    <div class="yesBtnDivMob mb-3">
                        <a href="<?php echo WEBSITE_URL; ?>checkout/<?php echo $id; ?>?promo=P20">
                        <button class="btn">
                                <div class="btnDiv d-flex align-items-center">
                                    <div class="btnDiv1">
                                        <p class="btnDiv1-p1 m-0"><span>YES</span></p>
                                    </div>
                                    <div class="btnDiv2 pl-2 pt-1">
                                        <p class="btnDiv2-p2 m-0">Get my 20% off</p>
                                    </div>
                                </div>
                            
                        </button>
                        </a>
                    </div>
                    <div class="noBtnDivMob d-inline-block">
                        <a href="#" class="close" data-dismiss="modal">No Thanks,I'd rather pay full price.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="<?php echo WEBSITE_URL; ?>themes/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo WEBSITE_URL; ?>themes/js/bootstrap.bundle.min.js"></script>
     <script>
var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $(".btnPromo").click(function(){
        var promo = $('.txtPromo').val();
        $(".ErrorPromo").html('');

        if(promo!=''){ validatePromo();
            
        }else{
            $(".ErrorPromo").html('* Please enter correct promo code');
            $('.txtPromo').focus();
        }
    });

        

        $(".selectLicenseType .bgLicenseType").click(function(){
        $(".bgLicenseType").removeClass("active greenborder");
        $(this).addClass("active greenborder");
    });
    $(".bgLicenseType2").click(function(){
        $(".bgLicenseType1").css('border-bottom','2px solid #fff');
        $(".bgLicenseType3").css('border-top','2px solid #fff');
    }); 
    $(".bgLicenseType1").click(function(){
        $(".bgLicenseType3").css('border-top','2px solid #e5e5e5');
    }); 
    $(".bgLicenseType3").click(function(){
        $(".bgLicenseType1").css('border-bottom','2px solid #e5e5e5');
    });


function validatePromo(){ 
    var promo = $('.txtPromo').val();
  
    $(".ErrorPromo").html('');

    if(promo!=''){
        var price = $('.payment_type:checked').attr('data-val');
        var license_type = $('.payment_type:checked').val(); 
        $.ajax({
            type: "POST",
            url: '<?php echo WEBSITE_URL."validate_promo"; ?>',
            data:{'promo': promo, 'license_type':license_type, [csrfName]: csrfHash},
            dataType:"json",
            success: function(content){ //alert(content);
                csrfName = content['csrfName'];
                csrfHash = content['csrfHash'];

                if(content['flag']){
                    $('.hdnPromoCode').val(promo);

                   $('.promo_frm_apply').removeClass('d-none');
                 
                    $('.txtPromoSpn').html(promo);
                   var discountPrice =  (price*content['discount'])/100;
                    var totalDiscuntedPrice = price-discountPrice;

                    $(".spnDiscount").html("- $"+discountPrice);
                    $(".spnTotal").html(" $"+totalDiscuntedPrice);
                    $('.promo_frm').addClass('d-none');
                     $('.pmr-exit-Modal').hide();
                    $('#pmr-exit-Modal').removeClass('pmr-exit-Modal');
                    
                }else{
                    $(".ErrorPromo").html('* Please enter correct promo code');
                    $('.txtPromo').val('');
                    $('.txtPromo').focus();
                }

                $('.hdnCsrf').val(csrfHash);
            }   
        });
    }
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

<script type="text/javascript">
     $(document).ready(function(){

   var custom = GetURLParameter('custom');
    if(custom == null){
        var promo = GetURLParameter('promo');
        if(promo != null){
            validatePromo();
        }
    }
    else{
         $('.pmr-exit-Modal').hide();
                    $('#pmr-exit-Modal').removeClass('pmr-exit-Modal');
    }
    
    
    $(".payment_type").change(function(){
        var price = $(this).attr("data-val");
        $(".spnPrice").html("$"+price);
        $(".spnTotal").html("$"+price);
        
        var paymentType = $(this).val();
        switch(paymentType){
            case 'S':
                $('.spnLicense').html('Single User License');
                break;

            case 'M':
                $('.spnLicense').html('Multi User License');
                break;

            case 'C':
                $('.spnLicense').html('Corporate License');
                break;
        }
        validatePromo();
    });

     

   

});


function GetURLParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++)
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam)
        {
            return decodeURIComponent(sParameterName[1]);
        }
    }
}    
</script>
</body>
</html>
