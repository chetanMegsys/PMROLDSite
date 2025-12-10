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
                                    <span>How to Order</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
            </div>
        </div>
        </div>
        <section class="staticPageSec howToOrder py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <p class="secHeadingLeft w-100">How to Order</p>
                        <p>
                            Persistence market Research moves ahead with helping you in every aspect – RQ (Research Quotient), CQ (Content Quotient), and OQ (Output Quotient). Accessing the collaterals to research reports provided by Persistence Market Research is merely a click away. However, wanting to move deeper into the market concerned needs a bit of more attention. 
                        </p>
                        <p class="mb-0">
                            In the fast-paced world of today, you don’t have to strive much to lay your hands on historic data and future-oriented insights. You could either order our report through call or through mail.
                        </p>

                        <!--<p class="secHeadingLeft w-100 mt-4">Through Call:</p>
                        <p class="mb-0">
                            <ul class="mb-0">
                                <li>
                                    Call us on our US-Canada toll-free line at 
                                    <a class="" href="tel:+16468786329" title="+1 646-878-6329">
                                        +1 646-878-6329
                                    </a>
                                </li>
                                <li>
                                    If you happen to be an international caller, dial 
                                    <a class="" href="tel:+442038375656" title="+44-203-837-5656">
                                        +44-203-837-5656
                                    </a>
                                </li>
                                <li>
                                   On following any of the above-mentioned steps, customer representative from Persistence Market Research will help you with the order.
                                </li>
                            </ul>
                        </p>--> 

                        <p class="secHeadingLeft w-100 mt-4">Through Mail:</p>
                        <p class="mb-0">
                            <ul class="mb-0">
                                <li>You could state your requirement/queries through 
                                    <a href="mailto:sales@persistencemarketresearch.com" title="sales@persistencemarketresearch.com">
                                        sales@persistencemarketresearch.com
                                    </a>
                                </li>
                                <li>
                                    Make sure to have your essential details like delivery and billing address, expected data of delivery, and mode of payment preferred.
                                </li>
                                <li>
                                    A sales/business development executive will revert within 24 hours.
                                </li>
                            </ul>
                        </p>

                        <p class="secHeadingLeft w-100 mt-4">Point to be Noted:</p>
                        <p class="mb-0">
                            If you are placing order (s) on the behalf of your company, we would prefer seeing proof of authorization for this purchase.
                        </p>

                        <p class="secHeadingLeft w-100 mt-4">In a Nutshell</p>
                        <p class="mb-0">
                            On the whole, just dropping an email or getting through call exposes you to the arena of insights with regards to the bygone, trending, and upcoming things for the market of your interest. In other words, the very “idea” of showing your interest in Persistence Market Research regarding the market concerning you would work wonders going forward with your business. 
                        </p>

                        <p class="secHeadingLeft w-100 mt-4">What’s more?</p>
                        <p class="mb-0">
                            Once Persistence Market Research renders the services you ask for, you could go further with asking for customization regarding that market. The one-on-one foray on our part into customer satisfaction is bound to go a long way in strengthening our cordiality. So, we look forward for a fruitful association herein. Do you?
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
                                <a class="btn btnStatic" href="<?php echo WEBSITE_URL."contact-us.asp"; ?>" title="Contact Us">
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