<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("frontend/meta_links"); ?>
    <link href="<?php echo ROOT_URL; ?>themes/css/theme-home.css" rel="stylesheet" />
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
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P89XNK');</script>
</head>  
    <?php $this->load->view("frontend/header_home"); ?>
    
       <section class="svgwaves_outer">
            <div class="bg-animation home_banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="font30 pb-2 text-blue bold600">Decide with Confidence</h1>
                        <form class="form-inline sbox"  action="<?php echo ROOT_URL; ?>search" method="GET" >
                            <div class="input-group">
                                <input type="text"  id="s" name="query" class="form-control" placeholder="Search Report By Keyword" autocomplete="off" required="" minlength="3" maxlength="255">
                                <div class="input-group-btn">
                                    <button class="btn btnSearch" type="submit" title="Search">
                                        <img src="<?php echo ROOT_URL; ?>themes/image/search-icon.svg" alt="search Icon" width="20px" height="20px">
                                    </button>
                                </div>
                            </div>
                            <div class="suggestionsBox px-3 pb-3 pt-2 d-none" id="suggestionsBox">
                                <div id="suggestionsList"></div>
                            </div>
                        </form>
                        
                    </div>
                    <div class="col-md-6 text-right">
                            <img src="<?php echo ROOT_URL; ?>themes/image/home/pmr-hero.webp" width="100%" height="" alt="Growth Chart By Market Research" title="Growth Chart By Market Research">
                    </div>
                </div>
            </div>
        </div>
        </section>
        <div class="mc-row">
            <a class="mc-link" href="<?php echo ROOT_URL; ?>media-citations.asp">
                <img src="<?php echo ROOT_URL; ?>themes/image/home/mc-logos.webp" width="100%" height="" alt="Media Citations logos" title="Media Citations logos">
            </a>
        </div>
        <section class="second-section py-5" style="position: relative;background: #fff;">
            <div class="container">
                <h2 class="secHeading text-center">Make Well Informed Decisions</h2>
                <p class="font18 my-4 text-center">Our focus is to create market research studies, that act as a growth enabler to drive your business strategy with maximum efficiency. We are a balanced pack of researchers, we have an old school approach to market research, while using the modern research tools to help us consistently create the most comprehensive, dependable research studies and solutions to suit the business needs of our client partners.
                </p>
                <p class="font18 text-center">Our decade-long association with participants across the value chain ensures we have access to hard-to-find information. In a data-first world, finding data is only half the job done, Deriving relevant insights on what it means for your business is key. Early movers have a strategic advantage as they identify the opportunities quickly. Our real-time market intelligence keeps you ahead.</p>
                <p class="font18 text-center">
                Our clients include some of the leading global and top multinational corporations, big 4 consulting firms, investment funds, consultants and investment bankers, business leaders, governments departments, universities, investors and startups.</p>
                
            </div>
        </section>
        <section class="section5 text-center">
            <div class="container">
                    <h2 class="mb-5 text-black" ><span style="font-size:2.8rem;">Inspiring Confidence Since <strong style="text-shadow: 2px 3px 5px #d8a117;color: #026800;">2012</strong></span></h2>
                    <ul class="mb-0 list-inline list-unstyled mt-2">
                        <li class="list-inline-item mr-0 ">
                            <span class="headIcon"></span>
                            <p class="lineheight32 font30 text-blue mb-0 bold500">
                                <span class="font60 bold400">6300+</span><br>Reports
                            </p>
                        </li>
                        <li class="list-inline-item mr-0">
                            <span class="headIcon"></span>
                            <p class="lineheight32 font30 text-blue mb-0 bold500"><span class="font60 bold400">2000+</span><br>Clients</p>
                        </li>
                        <li class="list-inline-item mr-0">
                            <span class="headIcon"></span>
                            <p class="lineheight32 font30 text-blue mb-0 bold500"><span class="font60 bold400">50+</span><br>Countries</p>
                        </li>
                        <li class="list-inline-item mr-0">
                            <span class="headIcon"></span>
                            <p class="lineheight32 font30 text-blue mb-0 bold500"><span class="font60 bold400">12+</span><br>Verticals</p>
                        </li>
                    </ul>
            </div>
        </section>
        <section class="second-section py-5">
            <div class="container">
                <h2 class="secHeading pt-4 pb-5 text-center">Our Services</h2>
                <div class="row">
                    <div class="col-md-3">
                        <a class="s-box" href="<?php echo ROOT_URL; ?>industry-research.asp">
                            <img src="<?php echo ROOT_URL; ?>assets/images/pmr-industry-reports.webp" width="255" height="136" alt="Image representing Industry Research Reports" title="Industry Research Reports" class="service-img">
                            <h2 class="s-title">
                                Industry Research Reports
                            </h2>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="s-box" href="<?php echo ROOT_URL; ?>services/custom-research.asp">
                            <img src="<?php echo ROOT_URL; ?>assets/images/engagement-model.webp" width="255" height="136" alt="Custom Research Services" title="Image representing Custom Research Services" class="service-img">
                            <h2 class="s-title">
                                    Custom Research Services
                            </h2>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="s-box" href="<?php echo ROOT_URL; ?>services/consulting-services.asp">
                            <img src="<?php echo ROOT_URL; ?>assets/images/pmr-consulting-services.webp" width="255" height="136" alt="Image representing Consulting Services" title="Consulting Services" class="service-img">
                            <h2 class="s-title">
                                    Consulting Services
                            </h2>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="s-box" href="<?php echo ROOT_URL; ?>services/subscription-services.asp">
                            <img src="<?php echo ROOT_URL; ?>assets/images/pmr-subscription-services.webp" width="255" height="136" alt="Image representing Subscription Services" title="Subscription Services" class="service-img">
                            <h2 class="s-title">
                                    Subscription Services
                            </h2>
                        </a>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="home-testimonial bg-lgray">
            <div class="container-fluid pt-4 pb-5">
                <h2 class="secHeading pt-4 text-center pb-5">Client Endorsements</h2>
                <section class="home-testimonial-bottom mb-4">
                    <div class="container testimonial-inner">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font18">“Persistence Market Research has helped us immensely in compiling a sound database. Our expectations were exceeded by their research team.”</div>
                                        
                                        <div class="link-name d-flex justify-content-end pt-4">– Fortune 500 Telecom Company, USA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font18">“The market numbers supplied by Persistence Market Research helped us successfully conclude our ongoing project and we are pleased with this purchase.” </div>
                                        
                                        <div class="link-name d-flex justify-content-end pt-4">– Multinational Chemical Company, USA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex mt-4 justify-content-center">
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font18 pb-4">“The customer service provided by Persistence Market Research was great. We got our report well in time and customized to suit our business requirements.” </div>
                                        
                                        <div class="link-name d-flex justify-content-end pt-4"> – Multinational Electronics Company, Japan</div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font18 pb-2">“Thank you for supplying the report in time for our project to go through. Commendable customer service.”</div><br>
                                        <div class="link-name d-flex justify-content-end pt-5">– Leading Global Healthcare Fortune 500 Company, USA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex mt-4 justify-content-center">
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font18">“The precise information given in Persistence Market Research’s reports has been priceless to us. We are very happy with this purchase, since the analysis in the report has been important in formulating our strategies.” </div>
                                        <div class="link-name d-flex justify-content-end pt-4">– Global Consulting Firm, USA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font18 pb-4">“The way Persistence Market Research handled the entire transaction, right from customization to after-sales queries, has been very impressive.”</div>
                                        <div class="link-name d-flex justify-content-end pt-4">– Leading Semiconductors Company, Taiwan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <?php   if(!empty($latest_reports)){ ?>
        <section class="second-section section3 pt-4">
            <div class="container">
                <h2 class="secHeading h2 text-center py-4">Industry Research Reports</h2>
            </div>
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
                    <div class="col-md-4 rt-card">
                        <div class="categeries bg-lgray">
                               <h3 class="rt-h3"><a href="<?php echo ROOT_URL."market-research/".$latest_report['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>"><?php echo $keyword; ?></a>
                                </h3>
                        <p class="report-desc"><?php echo $latest_report['rep_name']; ?>
                        </p>
                        <a class="rmlink" href="<?php echo ROOT_URL."market-research/".$latest_report['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>">Read More →</a>
                        </div>
                     
                    </div>
                    <?php 
                    
                        $cnt++; } 
                        ?>


                  
                </div>
                <div class="row">
                      <div class="col-12 btn-viewall-middle text-center py-5">
                        <a href="<?php echo ROOT_URL."market-reports.asp"; ?>" class=" btn btn-viewall font18" title="View All Report"> View All Reports</a>
                    </div>
                </div>
              
            </div>
            
        </section>
        <?php } ?>
        <section class="second-section bg-lgray">
            <div class="container py-4">
                <h2 class="secHeading text-center">Business Applications</h2>
                <p class="font20 text-center pb-3">Right Market Information helps you to Focus on your Business Goal!</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="ba-card">
                               <h3>Business Development</h3>
                                <ul>
                                    <li>Marketing Market Insights & Competitive Intelligence</li>
                                    <li>Grow Business & Gain Market Share</li>
                                    <li>Business Development & Market Expansion</li>
                                    <li>Product & Pricing Decisions</li>
                                    <li>Marketing, Promotion, Media & Advertising Strategy</li>
                                    <li>Market Entry & New Product Strategy</li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ba-card">
                               <h3>Accounts & Finance</h3>
                                <ul>
                                    <li>Annual Budget Planning  </li>
                                    <li>Cost Savings & Performance Monitoring</li>
                                    <li>Capital Budgeting & Investing</li>
                                    <li>Lower Cost of Financing</li>
                                    <li>Improving Working Capital Cycle</li>
                                    <li>Improving Return of Capital Employed</li>
                                    <li>Improve Profitability & Sustainability</li>
                                    <li>Increase Shareholder Return</li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="ba-card">
                               <h3>Operations & Production Planning</h3>
                                <ul>
                                    <li>Improving Operational Efficiency & Margins</li>
                                    <li>Manufacturing Planning & Strategy</li>
                                    <li>Improving Vendor & Procurement Strategy</li>
                                    <li>Better Terms & Negotiating Power</li>
                                    <li>Investment in Technology Innovation</li>
                                    <li>Investment in Research and Development</li>
                                    <li>Supply Chain & Logistics Planning</li>
                                    <li>Reducing Wastage & Losses</li>
                                </ul>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="ba-card">
                               <h3>Investment Banking, Strategic Management & Consulting</h3>
                                <ul>
                                    <li>Commercial Due Diligence & Opportunity Assessment</li>
                                    <li>Acquisitions, Mergers & Strategic Transactions</li>
                                    <li>Deal Negotiations, Valuations & Fund Raising</li>
                                    <li>Private Equity & Venture Capital</li>
                                    <li>Investment Banking & Equity Research</li>
                                    <li>Management Consulting & Problem Solving</li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-md-6">
                        <div class="ba-card">
                               <h3>Human Resource</h3>
                                <ul>
                                    <li>Save Time, Money & Effort</li>
                                    <li>Efficient Resource Utilisation</li>
                                    <li>Strategic Hiring & Team Building</li>
                                    <li>HR Policy & Performance Culture</li>
                                    <li>Reward & Compensation Planning</li>
                                    <li>Reduce Attrition & Managing Team Morale</li>
                                    <li>Employee Professional Growth</li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ba-card">
                               <h3>Society, Government & Education</h3>
                                <ul>
                                    <li>Government Industry Development Policy</li>
                                    <li>Attracting Investment for Growth</li>
                                    <li>Promoting Industry & Commerce</li>
                                    <li>Education, Health & Public Policy</li>
                                    <li>Investment in Infrastructure</li>
                                    <li>Socio Economic Stability & Prosperity</li>
                                    <li>University & Academic Research</li>
                                </ul>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        <div class="container">
                <h2 class="text-center my-4">If it’s Market Research, we’ve got you covered!  <a href="<?php echo ROOT_URL."contact-us.asp"; ?>" class="btn btn-viewall font18 ml-3" title="Contact Us">Contact Us</a></h2>
        </div>
      
   	<?php $this->load->view("frontend/footer_home"); ?>
   	
     <a href="#" id="scrollToTop" title="Back to top" class="">
     <img src="<?php echo ROOT_URL; ?>themes/image/totop-icon.svg" alt="Scroll To Top" width="24px" height="24px">
    </a>
        <link href="<?php echo ROOT_URL; ?>themes/css/home.css" rel="stylesheet" />
        <script src="<?php echo ROOT_URL; ?>themes/js/home.min.js" defer></script>
</body>
</html>
