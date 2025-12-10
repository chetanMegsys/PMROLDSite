<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("frontend/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>themes/css/theme-home.css" rel="stylesheet" />
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "<?php echo WEBSITE_URL; ?>",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "<?php echo WEBSITE_URL; ?>search?query={query}",
        "query-input": "required name=query"
      }
    }
</script>
<script type="application/ld+json">
  {
    "@context": "http://schema.org/",
    "@type": "ResearchOrganization",
    "name": "Persistence Market Research",
    "legalName": "Persistence Market Research",
    "url":"https://www.persistencemarketresearch.com/",
    "description": "Market Research Company",
    "sameAs":[
    "https://twitter.com/persistence_mkt",
    "https://www.linkedin.com/company/persistence-market-research-&amp;-consulting"
    ],
    "logo": "https://www.persistencemarketresearch.com/themes/image/pmr-logo.svg",
    "address": {
    "@type": "PostalAddress",
    "addressLocality": "Broadway",
    "addressRegion": "NY",
    "postalCode": "10007",
    "streetAddress": "305 Broadway,7th Floor New York City, NY 10007 United States"
  },
  "contactPoint": {
  "@type": "ContactPoint",
  "contactType": "sales",
  "telephone": "+1 800-259-0314",
  "email": "sales@persistencemarketresearch.com"
  }
}

</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P89XNK');</script>
<!-- End Google Tag Manager -->

     </head>    
    <?php $this->load->view("frontend/header_home"); ?>
       <section class="first-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="font30 text-white bold300">Move ahead of your competition.<br>Grow with confidence!</h1>
                        <form class="form-inline my-5"  action="<?php echo WEBSITE_URL; ?>search" method="GET" >
                            <div class="input-group">
                                <input type="text"  id="s" name="query" class="form-control" placeholder="Search" autocomplete="off" required="" minlength="3" maxlength="255">
                                <div class="input-group-btn">
                                    <button class="btn btnSearch" type="submit" title="Search">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0079ae" class="bi bi-search mt-1" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                          </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="suggestionsBox px-3 pb-3 pt-2 d-none" id="suggestionsBox">
                                <div id="suggestionsList"></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-center"><a href="<?php echo WEBSITE_URL; ?>media-citations.asp" style="height:200px;display: inline-block;width: 100%;"><span class="screen-reader-text">Media Citations</span></a>
                       
                    </div>
                </div>
            </div>
        </section>
        <section class="second-section py-5">
            <div class="container">
                <h2 class="text-center">Make Well Informed Decisions</h2>
                <p class="font18 my-4 text-center">At Persistence Market Research we strive to create research studies that act as a tool to drive your business strategy and deliver growth. We are a balanced pack of researchers, we have an old school approach to market research, while using the modern research tools to help us consistently create the most comprehensive research studies and solutions to suit the business needs of our client partners. Our clients include leading global and top multinational corporations, big 4 consulting firms, investment funds, consultants and investment bankers, business leaders, governments departments, universities, and startups.</p>
                <p class="font18 text-center">Our decade-long association with participants across the value chain ensures we have access to hard-to-find information. In a data-first world, finding data is only half the job done, Deriving relevant insights on what it means for your business is key. Early movers have a strategic advantage as they identify the opportunities quickly. Our real-time market intelligence keeps you ahead.</p>
            </div>
        </section>
        <section class="section5 text-center">
            <div class="">
                    <!-- <h3 class="secHeading font30 text-white bold500 pt-3 mb-0" style="line-height:5rem;">Make well-informed decisions</h3> -->
                    <h2 class="mb-4" ><span style="font-size:2.8rem;color:#fff;">Inspiring Confidence Since <strong style="text-shadow: 2px 3px 5px #000;">2012</strong></span></h2>
                    <ul class="mb-0 list-inline list-unstyled mt-2">
                        <li class="list-inline-item mr-0 ">
                            <span class="headIcon"></span>
                            <p class="lineheight32 font30 text-white mb-0 bold500">
                                <span class="font40 bold600">6300+</span><br>Research Reports
                            </p>
                        </li>
                        <li class="list-inline-item mr-0">
                            <span class="headIcon"></span>
                            <p class="lineheight32 font30 text-white mb-0 bold500"><span class="font40 bold600">2000+</span><br>Clients</p>
                        </li>
                        <li class="list-inline-item mr-0">
                            <span class="headIcon"></span>
                            <p class="lineheight32 font30 text-white mb-0 bold500"><span class="font40 bold600">50+</span><br>Countries</p>
                        </li>
                        <li class="list-inline-item mr-0">
                            <span class="headIcon"></span>
                            <p class="lineheight32 font30 text-white mb-0 bold500"><span class="font40 bold600">8+</span><br>Verticals</p>
                        </li>
                    </ul>
            </div>
        </section>
        <section class="second-section py-5" style="background-color:#f8f8f8;">
            <div class="container">
                <h2 class="py-4 text-center">Our Services</h2>
                <div class="row">
                    <div class="col-md-3 text-center" >
                        <img src="<?php echo WEBSITE_URL; ?>assets/images/pmr-industry-reports.webp" width="100%" alt="Industry Research Reports" title="Industry Research Reports" class="service-img">
                        <div class="pmr-service mb-4">
                            <h2 class="text-center my-2">
                                <a class="service-title" href="<?php echo WEBSITE_URL; ?>market-research.asp">
                                    Industry Research Reports
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo WEBSITE_URL; ?>assets/images/engagement-model.webp" width="100%" alt=" Custom Research Services" title="Custom Research Services" class="service-img">
                        <div class="pmr-service mb-4">
                            <h2 class="text-center my-2">
                                <a class="service-title" href="<?php echo WEBSITE_URL; ?>services/custom-research.asp">
                                    Custom Research Services
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo WEBSITE_URL; ?>assets/images/pmr-consulting-services.webp" width="100%" alt="Consulting Services" title="Consulting Services" class="service-img">
                        <div class="pmr-service mb-4">
                            <h2 class="text-center m-2">
                                <a class="service-title" href="<?php echo WEBSITE_URL; ?>services/consulting-services.asp">
                                    Consulting Services
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo WEBSITE_URL; ?>assets/images/pmr-subscription-services.webp" width="100%" alt="Subscription Services" title="Subscription Services" class="service-img">
                        <div class="pmr-service mb-4">
                            <h2 class="text-center my-2">
                                <a class="service-title" href="<?php echo WEBSITE_URL; ?>services/subscription-services.asp">
                                    Subscription Services
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
         <!-- Client Endorsements & Engagement -->   
    <section class="home-testimonial" style="background-color:#e3eeff;">
        <div class="container-fluid py-4 ">
            <h2 class="pt-4 text-center pb-4">Client Endorsements</h2>
            <section class="home-testimonial-bottom mb-4">
                <div class="container testimonial-inner">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="font18">“Persistence Market Research has helped us immensely in compiling a sound database. Our expectations were exceeded by Persistence Market Research.”</div>
                                    
                                    <div class="link-name d-flex justify-content-end pt-4">– Fortune 500 Telecom Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="font18">“The market numbers supplied by Persistence Market Research helped us successfully conclude our ongoing project and we are pleased with this purchase.” </div>
                                    
                                    <div class="link-name d-flex justify-content-end pt-4">– U.S.-based Chemical Company</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex mt-4 justify-content-center">
                        <div class="col-md-6 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="font18 pb-4">“The customer service provided by Persistence Market Research was great. We got our report well in time and customized to our requirements.” </div>
                                    
                                    <div class="link-name d-flex justify-content-end pt-4"> – Head of Business Development, Leading Electronics Company</div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-6 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="font18 pb-4">“Thank you for supplying the report in time for our project to go through. Commendable customer service.”</div>
                                    <div class="link-name d-flex justify-content-end py-4">– Fortune 500 Company</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex mt-4 justify-content-center">
                        <div class="col-md-6 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="font18">“The precise information given in Persistence Market Research’s reports has been priceless to us. We are very happy with this purchase, since the analysis in the report has been important in formulating our strategies.” </div>
                                    <div class="link-name d-flex justify-content-end pt-4">– Consultant</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="font18 pb-4">“The way Persistence Market Research handled the entire transaction, right from customization to after-sales queries, has been very impressive.”</div>
                                    <div class="link-name d-flex justify-content-end pt-4">– Leading Semiconductors Company</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
        <div class="back-outline-270d"><img src="<?php echo WEBSITE_URL; ?>themes/image/home/outline-01.svg" height="100px" width="350px" alt="outline" title="outline"></div>
        <?php   if(!empty($latest_reports)){ ?>
        <section class="second-section section3 pt-4" style="background-color:#f8f8f8;">
            <div class="container">
                <h2 class="h2 text-center py-4">Comprehensive Repository of Industry Market Research Reports</h2>
            </div>
        <!-- </section>
        
        <section class="section3 pb-5" style="background-color:#f8f8f8;"> -->
            <div class="container">
                <div class="row">
                    <?php $cnt = 1; foreach($latest_reports as $latest_report){

                        $keyword = "";
                            if($latest_report['rep_keyword'] !='' && $latest_report['rep_keyword'] !=Null){
                                $keyword = $latest_report['rep_keyword'];
                            }else{
                                $keyword = ucwords(str_replace("-"," ",$latest_report['rep_url']));
                            }
                     ?>

                    <div class="col-md-4 col-lg-4 d-flex mt-4">
                        <div class="categeries" style="background-color:#fff;">
                               <h3 class="font20 bold500 text-black"><a class="font18 bold500 text-black" href="<?php echo WEBSITE_URL."market-research/".$latest_report['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>"><?php echo $keyword; ?></a>
                                </h3>
                        <p class="font16 mt-3 mb-0"><?php echo $latest_report['rep_name']; ?>
                        </p>
                        </div>
                     
                    </div>
                    <?php 
                    
                        $cnt++; } 
                        ?>


                  
                </div>
                <div class="row">
                      <div class="col-12 btn-viewall-middle text-center py-5">
                        <a href="<?php echo WEBSITE_URL."market-reports.asp"; ?>" class=" btn btn-viewall font18" title="View All Report"> View All Reports</a>
                    </div>
                </div>
              
            </div>
            
        </section>
        
        <?php } ?>
        
        <section class="second-section py-5" style="background-color:#e3eeff;">
            <div class="container mt-2 py-5" style="background-color: #fff;border-radius:5px;">
                <h2 class="pt-4 text-center">Business Applications</h2>
                <p class="font20 text-center pb-2">Right Market Information helps you to Focus on your Business Goal! </p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="font18 ml-5 pl-5">
                            <li>
                            Budgeting, Planning & Evaluation
                            </li><li>
                            Expansion & Growth Planning
                            </li><li>
                            New Product / Service 
                            </li><li>
                            Acquisitions, Mergers & Selling
                            </li><li>
                            Vendor & Partner Strategy
                            </li><li>
                            Material Sourcing Strategy
                            </li><li>
                            Consulting & Technology
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="font18 ml-5 pl-5">
                            <li>
                            Strategic Decision & Transactions
                            </li><li>
                          Strategic Deal Negotiations
                            </li><li>
                           Market Entry Strategy
                            </li><li>
                            Business Valuation
                            </li><li>
                           Supply Chain Strategy
                            </li><li>
                           Competitor & Market Intelligence
                            </li><li>
                           New Venture Fund Rasing
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
       
        
        
        
        <div class="container">
                <h2 class="text-center my-5">If it’s market research, we’ve got you covered!</h2>
        </div>
        <div class="back-outline-360d"><img src="<?php echo WEBSITE_URL; ?>themes/image/home/outline-01.svg" height="155px" width="458px" alt="outline" title="outline"></div>
      
   	<?php $this->load->view("frontend/footer_home"); ?>
   	
     <a href="#" id="scrollToTop" title="Back to top" class="">
        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-up text-white mt-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"></path>
        </svg>
    </a>
        <link href="<?php echo WEBSITE_URL; ?>themes/css/home.css" rel="stylesheet" />
        <script>
            $(document).ready(function(){

                // Show hide Top menu on menu button clicked
                $(document).on("click", function(event){
                    var $trigger = $('#navbarToggleExternalContent, .navbar-toggler');
                    // var $trigger1 = $('#searching, #dropdownsearch,.search');
                    if($trigger !== event.target && !$trigger.has(event.target).length){
                        $('#navbarToggleExternalContent').removeClass('show');
                        $('#toggle_menu').removeClass('rotateMenuLines');
                    }

                });
                // Rotate Menu Lines
                $("#navbar-toggler").on("click",function(){
                    $("#toggle_menu").toggleClass("rotateMenuLines");
                })

                 var scrollToTop = $("#scrollToTop"); $(window).scroll(function () { if ($(window).scrollTop() > 300) { scrollToTop.addClass("show") } else { scrollToTop.removeClass("show") } }); scrollToTop.on("click", function (a) { a.preventDefault(); $("html, body").animate({ scrollTop: 0 }, "300") });
            });
        </script> 

</body>
</html>
