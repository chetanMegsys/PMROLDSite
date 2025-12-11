<!DOCTYPE html>
<html>
<head>

    <?php $this->load->view("partials/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />
    <?php $this->load->view("partials/header"); ?>

    <main role="main">
        <div class="breadCrumb mb-0">
            <div class="container">
                <ol class="list-inline mb-0">
                    <li>
                        <a href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <span>Sitemap</span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="siteMapTable">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                       <h1 class="siteMapMainHead">Sitemap</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
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
                                        <a class="siteMapHead" href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact">
                                            <span >
                                               Contact
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <ul class="siteMapList list-unstyled">
                                    <li>
                                        <span class="siteMapHead">
                                            Insights-hub
                                        </span>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="<?php echo WEBSITE_URL; ?>market-research.asp" title="Market Research">
                                                    Market Research
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <ul class="siteMapList list-unstyled">
                                    <li>
                                        <span class="siteMapHead">
                                            About
                                        </span>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="<?php echo WEBSITE_URL; ?>about-us.asp" title="About PMR">
                                                    About PMR
                                                </a>
                                            </li>
                                            <li><a href="<?php echo WEBSITE_URL; ?>services.asp" title="Services">Services</a></li>
                                            <li><a href="<?php echo WEBSITE_URL; ?>faq.asp" title="FAQ's">FAQ's</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <ul class="siteMapList list-unstyled">
                                    <li>
                                        <span class="siteMapHead">
                                            Help
                                        </span>
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
                                            <li>
                                                <a href="<?php echo WEBSITE_URL; ?>terms-and-conditions.asp" title="Terms and Conditions">Terms and Conditions</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo WEBSITE_URL; ?>return-policy.asp" title="Return Policy">Return Policy</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php $this->load->view("partials/footer"); ?>
</body>
</html>