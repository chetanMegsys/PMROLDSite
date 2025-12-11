<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("frontend/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static-mobile.css" rel="stylesheet" />
	<?php $this->load->view("frontend/header_mobile"); ?>
    <main role="main">
        <div class="breadCrumbSection">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent p-0 my-0">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo WEBSITE_URL; ?>" class="text-black" title="Persistence Market Report">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item" class="text-black" aria-current="page">
                                    <span>Consulting Business Advisory</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <h1 class="text-center mb-2 p-title">Consulting Business Advisory</h1>
                    </div>
                </div>
            </div>
        </section>
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
                        
                        <p>
                            Persistence Market Research stands at the forefront of the consulting business advisory by delivering unparalleled market intelligence and strategic insights that empower organizations to excel in today’s competitive landscape. Our expertise lies in crafting tailored market strategies grounded in deep, data-driven research, enabling businesses to make informed decisions that drive sustainable growth and operational excellence.
                        </p>
                        <p>
                            With a strong focus on market strategy, business advisory, and market intelligence, Persistence Market Research supports consulting corporate clients in navigating complex market environments. We combine advanced analytics with industry expertise to uncover emerging trends, competitive dynamics, and customer behaviors, providing a comprehensive view that fuels strategic planning and execution.
                        </p>
                        <p>
                            Our consulting business advisory services are designed to help clients identify new market opportunities, optimize business models, and refine go-to-market approaches. By leveraging our syndicated and custom research capabilities, we deliver actionable insights that align with your business objectives and enhance your advisory outcomes. Whether it’s market entry, expansion, or transformation, our research-backed strategies ensure your business remains agile and competitive. 
                        </p>
                        <p>
                        Persistence Market Research remains committed to delivering high-value market intelligence. Our research solutions help bridge knowledge gaps, reduce risks, and maximize ROI, making us a trusted partner for companies seeking excellence in consulting and advisory services.
                        </p>
                        <p>
                        Choose Persistence Market Research to harness the power of expert market intelligence and strategic advisory services, transforming data into impactful business strategies that adds more mileage to your business.
                        </p>
                        
                        
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="pmr-services mb-4">
                                    <h2  class="py-2 font18 bold600">Research Quality</h2>
                                    <ul>
                                        <li>Transparent</li>
                                        <li>Ethical</li>
                                        <li>Empirical</li>
                                        <li>Critical</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="pmr-services mb-4">
                                    <h2  class="py-2 font18 bold600">Data Collection</h2>
                                    <ul>
                                        <li>Primary</li>
                                        <li>Secondary</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="pmr-services mb-4">
                                    <h2  class="py-2 bold600 font18">Reporting</h2>
                                    <ul>
                                        <li>Pre and Post-sale Consulting Support (24*5)</li>
                                        <li>Market assessment and evaluation</li>
                                        <li>Developing custom solutions </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    
    <?php $this->load->view("frontend/footer_mobile"); ?>
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
    <link href="<?php echo WEBSITE_URL; ?>assets/css/static-mobile.css" rel="stylesheet" />
</body>
</html>