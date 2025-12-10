<!DOCTYPE html>
<html lang="en">
<head>

	<?php $this->load->view("frontend/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />

    <?php $this->load->view("frontend/header"); ?>
    <style>.media-citations a{color: #2358a8 !important;} img.media-citation-logo {width: 100%;padding: 10px;} .aboutListSec p{font-size:18px;} .secHeading{margin:20px 0px; color:#2358a8; font-weight:600;}.p-title{font-size:2rem;font-weight:600;}</style>
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
                                    <span>Annual Subscription Services</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
            </div>
        </div>
        </div>
        <section class="p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 font18 pt-1" >
                        <nav class="slinks">
                            <ul>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/syndicate-market-research.asp">Syndicated Market Research</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/custom-research.asp">Customized Research</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/consulting-services.asp">Consulting Business Advisory</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/full-time-engagement.asp">Full-time Engagement</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/subscription-services.asp">Annual Subcription Services</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/primary-research-capabilties.asp">Primary Research Capabilties</a>
                                </li>
                                 <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/competitive-intelligence.asp">Competitive Intelligence</a>
                                </li>
                                 <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/commercial-due-diligence.asp">Commercial Due Diligence</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-9 font18" >
                        <h1 class=" mb-4 p-title">Annual Subscription Services</h1>
                        <p><strong>Persistence Market Research fully embraces the dynamic nature of the business landscape.</strong>
                        </p>
                        <p>
                            To empower you in navigating these changes with confidence, we proudly offer a suite of subscription services that grant you unlimited access to our comprehensive research studies. Before you subscribe, our analysts will engage with you to thoroughly understand your objectives and design a tailored plan that perfectly meets your needs.
                        </p>
                        <ul>
                            <li>Our sales team will develop a customized pricing structure for you, complete with exclusive competitive pricing, especially for start-ups and non-profits. Plus, you have the flexibility to adjust your subscription package at any time.</li>
                            <li>As a subscriber, you'll benefit from full access to our analysts for any support you may need.</li>
                            <li>Dive into our extensive library of over 6,000 industry research studies and receive timely market trends and news updates at no additional cost. You’ll have the freedom to utilize and distribute the data as you see fit and access our studies in a variety of convenient formats.</li>
                            <li>You will be paired with an assigned account manager who will ensure you maximize the value of your subscription.</li>
                        </ul>
                       
                        <p>
                        <strong>At our core, we provide critical matrices for your success. Our subscription services are meticulously designed to help you thrive and achieve your goals with confidence</strong>
                        </p>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>

    <?php $this->load->view("frontend/footer"); ?>
    
    <link href="<?php echo WEBSITE_URL; ?>assets/css/static.css" rel="stylesheet" />
    <script>
        // Wait until the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Get all the links in the navigation
            var links = document.querySelectorAll('.slinks a');
            
            // Iterate through each link
            links.forEach(function(link) {
                // Check if the link's href matches the current page URL
                if (link.href === window.location.href) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });

        // Optional: You can still allow the active class change on click if you want
        function makeActive(element) {
            var links = document.querySelectorAll('.slinks a');
            links.forEach(function(link) {
                link.classList.remove('active');
            });
            element.classList.add('active');
        }

    </script>
</body>
</html>