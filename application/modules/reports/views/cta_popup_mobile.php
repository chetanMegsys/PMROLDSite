<?php  $messagePlaceholder = "This will help us to understand the business requirements."; ?>
<!-- CTA banner 1 modal -->
    <div class="modal fade cta-modal cta-b1-modal" id="cta-banner-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row m-0">
              <div class="col-lg-8 p-0">
                <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close" style="outline:0">
                      <span aria-hidden="true">&times;</span>
                  </button>
                <p class="text-center mt-4 mb-2 modalHead text-blue-new">Free Report Sample</p>
                <form class="mt-3" name="" action="<?php echo $submit_url; ?>" method="POST" onsubmit="return rs_validateForm();">
                  <?php
                      $name = $this->security->get_csrf_token_name(); 
                      $hash = $this->security->get_csrf_hash();
                      $_SESSION[$name] = $hash;
                  ?>
                  <input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;background: transparent;" class="fname" value="">
                  <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
                  <input type="hidden" name="source" value="FMP" />
                  <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                  <input type="hidden" name="type" class="hdnType" value="S">

                  <div class="form-group position-relative ">
                    <input type="text" name="name" id="idName" class="form-control name" placeholder="Full Name*" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                  </div>

                  <div class="form-group position-relative">
                    <input type="email" name="emailId" id="idFctMREmailId" class="form-control emailId first" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                    <span class="text-danger font11 emailId" id="idFctMREmailId"></span>
                  </div>
                  <div class="form-group position-relative">
                    <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone Number*"  required="required" maxlength="14"  onblur="checksubmit(this.value);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                    <span class="text-danger font11 errorPhoneNo" id="errorPhoneNo"></span>
                  </div>
                 

                  <div class="form-group position-relative ">
                    <input type="hidden" name="company" id="company" class="form-control company" placeholder="Company*" >
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
                    <textarea name="message" id="message" class="form-control message" rows="2" placeholder="<?php echo $messagePlaceholder; ?>" maxlength="200" ></textarea>
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
                          <div class="form-field" style="padding: 0px 25px;">
                              <span id="rs_captcha" class="captcha"></span>
                              <input type="text" name="captcha" class="captcha-input form-control captcha rs_txtCaptcha" placeholder = "Security Code*" id="rs_captcha-form" maxlength="3" size="3" tabindex=3 required />
                              <input type="hidden" class="rs_hdnCaptcha" name="hdnCaptcha" value="">
                              <span id="rs_captachacode"   class="errormsgs"></span>
                              <span class="text-danger captchaError"></span>
                          </div>
                      </div>
                  </div>
                  <button type="submit" class="btn requestFreeSample" name="btnSubmit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- CTA banner 2 modal -->
    <div class="modal fade cta-modal cta-b2-modal" id="cta-banner-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row m-0">
              <div class="col-lg-8 p-0">
                <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close" style="outline:0">
                      <span aria-hidden="true">&times;</span>
                  </button>
                <p class="text-center mt-4 mb-2 modalHead">Know our Research Methodology</p>
                <form class="mt-4" name="" action="<?php echo $submit_url; ?>" method="POST" onsubmit="return rm_validateForm();">
                   <?php
                      $name = $this->security->get_csrf_token_name(); 
                      $hash = $this->security->get_csrf_hash();
                      $_SESSION[$name] = $hash;
                  ?>
                  <input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;background: transparent;" class="fname" value="">
                  <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
                  <input type="hidden" name="source" value="FMP" />
                  <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                  <input type="hidden" name="type" class="hdnType" value="RRM">

                  <div class="form-group position-relative ">
                    <input type="text" name="name" id="idName" class="form-control name" placeholder="Full Name*"  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                  </div>

                  <div class="form-group position-relative">
                    <input type="email" name="emailId" id="idFctMREmailId" class="form-control emailId second" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                    <span class="text-danger font11 emailId secondError" id="idFctMREmailId"></span>
                  </div>
                  <div class="form-group position-relative">
                    <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone Number*" required="required" maxlength="14"  onblur="checksubmit(this.value);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                    <span class="text-danger font11 errorPhoneNo" id="errorPhoneNo"></span>
                  </div>

                 

                  <div class="form-group position-relative  ">
                    <input type="text" name="company" id="company" class="form-control company" placeholder="Company*"  >
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

                  <div class="form-group position-relative  ">
                    <input type="text" name="jobTitle" id="jobTitle" class="form-control jobTitle" placeholder="Job Title*" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                  </div>
                  <div class="col-xs-12 col-md-12 mb-2">
                      <div class="form-field" style="padding: 0px 10px;">
                          <span id="rm_captcha" class="captcha"></span>
                          <input type="text" name="captcha" class="captcha-input form-control captcha rm_txtCaptcha" placeholder = "Security Code*" id="rm_captcha-form" maxlength="3" size="3" tabindex=3 required />
                          <input type="hidden" class="rm_hdnCaptcha" name="hdnCaptcha" value="">
                          <span id="rm_captachacode"   class="errormsgs"></span>
                          <span class="text-danger captchaError"></span>
                      </div>
                  </div>
                  <button type="submit" class="btn requestFreeSample" name="btnSubmit">Yes! Share Research Methodology</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- CTA banner 3 modal -->
    <div class="modal fade cta-modal cta-b3-modal" id="cta-banner-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row m-0">
              <div class="col-lg-8 p-0">
                <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close" style="outline:0">
                      <span aria-hidden="true">&times;</span>
                  </button>
                <p class="text-center mt-4 mb-2 modalHead">Let's Connect</p>
                <form class="mt-4" name="" action="<?php echo $submit_url; ?>" method="POST" >
                   <?php
                      $name = $this->security->get_csrf_token_name(); 
                      $hash = $this->security->get_csrf_hash();
                      $_SESSION[$name] = $hash;
                  ?>
                  <input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;background: transparent;" class="fname" value="">
                  <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
                   <input type="hidden" name="source" value="FMP" /> 

                  <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                    <input type="hidden" name="type" value="ASK">


                    <div class="form-group position-relative ">
                    <input type="text" name="name" id="idName" class="form-control name" placeholder="Full Name*"  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                  </div>


                  <div class="form-group position-relative">
                    <input type="email" name="emailId" id="idFctMREmailId" class="form-control emailId third" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                    <span class="text-danger font11 thirdError" id="idFctMREmailId"></span>
                  </div>
                  <div class="form-group position-relative">
                    <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone Number*" required="required" maxlength="14"  onblur="checksubmit(this.value);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                    <span class="text-danger font11 errorPhoneNo" id="errorPhoneNo"></span>
                  </div>
                


                  <div class="form-group position-relative ">
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
                    <input type="text" name="JobTitle" id="JobTitle" class="form-control JobTitle jobTitle" placeholder="Job Title*" >
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
                  <button type="submit" class="myclassName btn requestFreeSample" name="btnSubmit">Ask An Expert</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- CTA banner 4 modal -->
    <div class="modal fade cta-modal cta-b4-modal" id="cta-banner-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row m-0">
              <div class="col-lg-8 p-0">
                <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close" style="outline:0">
                      <span aria-hidden="true">&times;</span>
                  </button>
                <p class="text-center mt-4 mb-2 modalHead">Get a Customized Report</p>
                <form class="mt-4" name="" action="<?php echo $submit_url; ?>" method="POST" onsubmit="return gc_validateForm();">
                   <?php
                      $name = $this->security->get_csrf_token_name(); 
                      $hash = $this->security->get_csrf_hash();
                      $_SESSION[$name] = $hash;
                  ?>
                  <input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;background: transparent;" class="fname" value="">
                  <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
                   <input type="hidden" name="source" value="FMP" /> 
                   <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                    <input type="hidden" name="type" value="RC">
                  
                <div class="form-group position-relative  ">
                    <input type="text" name="name" id="idName" class="form-control name" placeholder="Full Name*"  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                  </div>

                  <div class="form-group position-relative">
                    <input type="email" name="emailId" id="idFctMREmailId" class="form-control emailId fourth" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                    <span class="text-danger font11 fourthError" id="errorFullName"></span>
                  </div>
                  <div class="form-group position-relative">
                    <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone Number*"  required="required" maxlength="14"   onblur="checksubmit(this.value);">
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
                    <textarea name="message" id="message" class="form-control message" rows="2" placeholder="<?php echo $messagePlaceholder; ?>" maxlength="200" ></textarea>
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
                          <div class="form-field" style="padding: 0px 25px;">
                              <span id="gc_captcha" class="captcha"></span>
                              <input type="text" name="captcha" class="captcha-input form-control captcha gc_txtCaptcha" placeholder = "Security Code*" id="gc_captcha-form" maxlength="3" size="3" tabindex=3 required />
                              <input type="hidden" class="gc_hdnCaptcha" name="hdnCaptcha" value="">
                              <span id="gc_captachacode"   class="errormsgs"></span>
                              <span class="text-danger captchaError"></span>
                          </div>
                      </div>
                  </div>
                  
                  <button type="submit" class="btn requestFreeSample" name="btnSubmit">Yes! I want a Customized Report</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




 <!-- thank you modal -->
 <div class="modal fade thank-you-modal" id="thank-you-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <!-- Modal content-->
 <div class="modal-content">
 <div class="d-block">
 <button type="button" class="close position-absolute font-weight-lighter m-0" data-dismiss="modal">&times;</button>
 </div>
 <div class="modal-body px-4 mt-4">
 <div class="img mt-2">
 <!-- <img src="<?php// echo WEBSITE_URL;?>themes/image/thankyoumail.png" title="Thank You Mail" alt="Thank You Mail" class="img-fluid"> -->
 </div>
 <h5 class="h2 text-center txt-blue mb-0 mt-3">Thank you!</h5>
 <p class="text-center bold400 txt-black my-3">You will receive an email from our Business Development Manager. Please be sure to check your SPAM/JUNK folder too.</p>
 </div>
 </div>
 </div>
 </div>



