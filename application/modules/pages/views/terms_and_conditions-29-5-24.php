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
                                    <span>Terms & Conditions</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
            </div>
        </div>
        </div>
        <section class="staticPageSec py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <p class="secHeadingLeft w-100">Terms & Conditions</p>
                        <p class="mb-0">
                          Customer has always been the top priority <strong>@PersistenceMarketResearch.</strong>
                          We always make sure that you get seamless data; that too, free from hassles. As such, we hereby lay down the terms and conditions pertaining to the same, but at our discretion to alter them as and when need be. The onus is on us to make our terms and conditions public, so that the customers could start/continue with us on a transparent note. This goes without saying that on placing an order with <strong>Persistence Market Research,</strong> you are in line with the terms and conditions put forth.
                        </p>
                        <p class="secHeadingLeft w-100 mt-4">Right to “Copyright”</p>
                        <p class="mb-0">
                            The data available on <strong>Persistence Market Research</strong> website as well as research reports, like images, graphics, audio clips, statistics, video material, analysis, insights, and others is subject to international copyright laws. Business transaction with us would mean that you will also abide by these copyright laws.
                        </p>
                        <p class="secHeadingLeft w-100 mt-4">Physical Delivery:</p>
                        <p class="mb-0">
                            The published report’s printed copy shall be couriered to your address within 3-5 working days from date of receipt of payment.
                        </p>

                        <p class="secHeadingLeft w-100 mt-4">Online Delivery:</p>
                        <p class="mb-0">
                            The published report will reach you by mail within 2-12 hours of payment received.
                        </p>

                        <p class="secHeadingLeft w-100 mt-4">Customization:</p>
                        <p class="mb-0">
                           <strong>Persistence Market Research </strong> does provide customization in the market reports as per your requirements. However, how soon could the customization reach you will be decided by our analysts keeping time deadlines, expected complexity, and specialties of customization asked for.  
                        </p>

                        <p class="secHeadingLeft w-100 mt-4">Annulment and Refund:</p>
                        <p>
                            As the market research are “confidential” in nature, annulment on the part of orders is unacceptable post payment. At the same time, refund could be initiated only if multiple payments are done. This refund would be initiated soon. If quality of report concerns you, we will make sure that it is addressed at the earliest by <strong>Persistence Market Research</strong>.
                        </p>
                        <p class="mb-0">
                            The price and currency displayed at checkout page will be matching with the price and currency printed on transaction receipt. The amount charged on card will be available in card currency. Refunds will take 10-45 days to process based on issuing bank of credit card. 
                        </p>
                        <p class="secHeadingLeft w-100 mt-4">Coverage:</p>
                        <p class="mb-0">
                            Any loss incurred by customer along the professional or personal lines is his/her/their responsibility on the whole. None from <strong>Persistence Market Research</strong> would be responsible in any form whatsoever herein and devoid of legal liabilities. 
                        </p>
                        <p class="secHeadingLeft w-100 mt-4">Law of the Land:</p>
                        <p class="mb-0">
                           By entering into a business agreement with us, you agree to be accountable and abide by the law and regulations laid down by the Government of India and Government of Maharashtra. Failing to abide by them may invite action according to the law of the land.
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
                                <img src="<?php echo WEBSITE_URL; ?>assets/images/static-conatct.png" alt="Contact Us" title="Contact Us" height="235" width="266" />
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