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
                                    <span>Sitemap</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
            </div>
        </div>
        </div>
        <section class="siteMapTable py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                       <h1 class="siteMapMainHead">Sitemap</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <ul class="siteMapList list-unstyled">
                                            <li>
                                                <a class="siteMapHead" href="<?php echo WEBSITE_URL; ?>" title="Home">
                                                    <span>
                                                        Home
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                         <ul class="siteMapList list-unstyled">
                                            <li>
                                                <a class="siteMapHead" href="<?php echo WEBSITE_URL; ?>services.asp" title="Services">
                                                    <span>
                                                        Services
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <ul class="siteMapList list-unstyled">
                                            <li>
                                                <a class="siteMapHead" href="<?php echo WEBSITE_URL; ?>about-us.asp" title="About PMR">
                                                    <span>
                                                        About
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="siteMapList list-unstyled">
                                            <li>
                                                <a class="siteMapHead" href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact">
                                                    <span >
                                                       Contact
                                                    </span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul class="siteMapList list-unstyled">
                                    <li>
                                        
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="<?php echo WEBSITE_URL; ?>market-research.asp" title="Market Research">
                                                    Market Research
                                                </a>
                                            </li>
                                             <li><a href="<?php echo WEBSITE_URL; ?>faq.asp" title="FAQ's">FAQ's</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                         
                            <div class="col-md-4 col-sm-6">
                                <ul class="siteMapList list-unstyled">
                                    <li>
                                        <span class="siteMapHead">
                                            Help
                                        </span>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-6">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="<?php echo WEBSITE_URL; ?>how-to-order.asp" title="How To Order">How To Order</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo WEBSITE_URL; ?>disclaimer.asp" title="Disclaimer">Disclaimer</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo WEBSITE_URL; ?>privacy-policy.asp" title="Privacy Policy">Privacy Policy</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-6">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="<?php echo WEBSITE_URL; ?>terms-and-conditions.asp" title="Terms and Conditions">Terms and Conditions</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo WEBSITE_URL; ?>return-policy.asp" title="Return Policy">Return Policy</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php $this->load->view("frontend/footer"); ?>
</body>
</html>