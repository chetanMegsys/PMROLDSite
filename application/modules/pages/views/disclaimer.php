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
                <div class="col-lg-12 col-md-12 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent p-0 my-0">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo WEBSITE_URL; ?>" class="text-black" title="Persistence Market Report">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item" class="text-black" aria-current="page">
                                    <span>Disclaimer</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
            </div>
        </div>
        </div>
        <section class="staticPageSec disclaimerSec py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <p class="secHeadingLeft w-100">“Run of the Mill” Disclaimers</p>
                        <p>
                            Every bit of content on <a href="<?php echo WEBSITE_URL; ?>" target="_blank" title="www.persistencemarketresearch.com">www.persistencemarketresearch.com</a> comes out of understanding of that particular market by our research analysts. It may/may not necessarily mean that Persistence Market Research has that language to speak. 
                        </p>
                        <p>
                            All clients need to focus on is the aptness of our market forecast analysis. Moreover, Persistence Market Research won’t be holding the responsibility for any loss arising out of them investing on forecast or market research analysis provided by it. In other words, our market research reports should not be looked upon as a talisman to your profit/loss.
                        </p>
                        <p>
                            Persistence Market Research moves ahead with its market analysis based on information obtained through primary and secondary research. We are not accountable for the transparency or accuracy of information that we lay our hands on.
                        </p>
                        <p class="mb-0">
                            The recommendations that we provide are based on macros and micros available through public domain along with market assessment on the whole. While giving these recommendations, we are under the impression that no major deviation will be there in the market asked for (barring unforeseen circumstances).
                        </p>

                        <p class="secHeadingLeft w-100 mt-4">“Coming of the age” Disclaimers</p>
                        <p>
                            Though adhering to internet security guidelines is one of our top priorities, providing guarantee about any file downloaded from our website being free from malware/viruses is beyond our scope. As such, it is advisable to have checkpoints like data recovery and anti-virus software in place. Persistence Market Research is nowhere into picture if you end up losing any data on downloading file from our website/external website that directs you to Persistence Market Research. Moreover, any warranty is not superseded over here that can’t be excluded accordingly to laws applicable.
                        </p>
                        <p>
                            At the same time, Persistence Market Research, in spite of being open to feedback from the readers to enhance users’ experience or regarding content, is not pressed for acting as per feedback received. Also, it is not binding for us to offer compensation for suggestions and feedback. We do have the authority of revealing source of feedback as it legally becomes Persistence Market Research’s possession.
                        </p>
                        <p>
                            Persistence Market Research does make use of 3rd-party online payment gateways. Though online privacy as well as security are taken care of, it’s not Persistence Market Research’s responsibility to warrant precision of these payment gateways. So, inability/disruption/failure of any transaction does not bring Persistence Market Research under scrutiny.
                        </p>
                        <p>
                            These payments (payments through online gateways) usually get reflected on our internal records within 24 to 48 hours. We would deem the payment to be complete only when we receive it through online payment gateway, and not when you are done with the transaction at your end.
                        </p>
                        <p class="mb-0">
                            Persistence Market Research advises the readers to be doubly careful while going through our content on any of the 3rd party platforms, as we don’t hold any editorial independence regarding content published on any external websites. These websites do redirect users to us. The only purpose of these links is to delve deep into the information. They are not meant to be seen as an advice/recommendation by Persistence Market Research regarding any service/product/content on website.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="staticConatctSec py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 bgGrey">
                        <div class="row">
                            <div class="col-md-8 col-md-push-4 p-5">
                                <p class="h2 borderBlue mb-5">
                                    Talk to our team on how we can help you.
                                </p>
                                <a class="btnStatic" href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact Us">
                                    Contact Us
                                </a>
                            </div>
                            <div class="col-md-4 col-md-pull-8 pt-4">
                                <img src="<?php echo WEBSITE_URL; ?>assets/images/static-conatct.webp" alt="Contact Us" title="Contact Us" width="266" height="235" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
   	
   	<?php $this->load->view("frontend/footer"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/static.css" rel="stylesheet" />

</body>
</html>