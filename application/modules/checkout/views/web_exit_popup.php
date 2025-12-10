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
                    <h1 class="font-weight-bold popupTitle">Wait, We have a <br><span class="txt-christmas-red">Special</span> offer for you!</h1>
                    <p class="text-center popupSubTitle mb-0">Get Your <span>20% Discount</span> Now!</p>
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
                </div>
            </div>
        </div>
    </div>
</div>