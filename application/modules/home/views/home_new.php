<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("frontend/meta_links"); ?>
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>themes/css/home.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>themes/css/theme-home.css">
  <link rel="preload" as="image" href="<?php echo ROOT_URL; ?>themes/image/home/pmr-hero.webp" fetchpriority="high" type="image/webp">
    <style>
    
  </style>
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
  "alternateName": "PMR",
  "url": "https://www.persistencemarketresearch.com/",
  "description": "Market Research Company",
  "sameAs": [
    "https://twitter.com/persistence_mkt",
    "https://www.linkedin.com/company/persistence-market-research-&-consulting"
  ],
  "logo": "https://www.persistencemarketresearch.com/themes/image/pmr-logo.png",
  "founder": [{
                "@type": "Person",
                "name": "Utkarsh Koregaonkar",
                "disambiguatingDescription": "Founder and CEO of Persistence Market Research - Utkarsh is an entrepreneur with over 20 years of global experience in market research",
                "url": "https://www.linkedin.com/in/utkarsh-koregaonkar-27186129/",
                "sameAs": "https://www.linkedin.com/in/utkarsh-koregaonkar-27186129/"
            }
        ],
  "address": [
    {
      "@type": "PostalAddress",
      "streetAddress": "Second Floor, 150 Fleet Street",
      "addressLocality": "London",
      "postalCode": "EC4A 2DQ",
      "addressCountry": "GB"
    },
    {
      "@type": "PostalAddress",
      "streetAddress": "108 W 39th Street, Ste 1006, PMB2219",
      "addressLocality": "New York",
      "addressRegion": "NY",
      "postalCode": "10018",
      "addressCountry": "US"
    },
    {
      "@type": "PostalAddress",
      "streetAddress": "IT Unit No. 504, 5th Floor, Icon Tower, Baner",
      "addressLocality": "Pune",
      "postalCode": "411045",
      "addressRegion": "MH",
      "addressCountry": "IN"
    }
  ],
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "contactType": "customer service",
      "telephone": "+44 203-837-5656",
      "areaServed": "UK"
    },
    {
      "@type": "ContactPoint",
      "contactType": "customer service",
      "telephone": "+1 646-878-6329",
      "areaServed": "USA"
    },
    {
      "@type": "ContactPoint",
      "contactType": "customer service",
      "telephone": "+91 906 779 3500",
      "areaServed": "APAC"
    }
  ]
}
</script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P89XNK');</script>
</head>  
    <?php $this->load->view("frontend/header_home"); ?>
       <section class="hero py-4">
            <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div style="background: #fff1e5;padding: 20px;">
                                <h1 class="font30 pb-2 text-blue bold600">Decide with Confidence</h1>
                                <h2 style="font-size: 1.3rem;color: #000;font-weight: 600;">Independent and Unbiased Market Research</h2>
                                <p class="font16 text-left">
                                Identify market gaps, make well informed decisions.<br>Drive your business strategy with maximum efficiency.<br>Lead your market, don't just react to it.<br>Explore opportunities from our industry data and analysis.<br>Derive actionable and objective insights that drive your business performance, from our comprehensive market research studies.
                                <p>

                                <form class="form-inline mt-4"  action="<?php echo ROOT_URL; ?>search" method="GET" >
                                    <div class="input-group">
                                        <input type="text"  id="s" name="query" class="form-control" placeholder="Search Report By Industry Keywords" autocomplete="off" required="" minlength="3" maxlength="255">
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
                        </div>
                        <div class="col-md-6 text-right">
                            <img 
                                src="<?php echo ROOT_URL; ?>themes/image/home/pmr-hero.webp" 
                                alt="Growth Chart By Market Research" 
                                width="555" 
                                height="auto" 
                                fetchpriority="high" 
                                style="width: 536px; height: auto;"
                                >
                        </div>
                    </div>
                    
                </div>
        </section>
        <div class="container-fluid bg-lgray pt-3">
            <div class="container">
            <div class="row">
                <div class="col-sm-3 pt-2">
                    <p style="font-size: 40px;font-weight:600;font-family: Times;color:#0b57d0;">Estd. 2012</p>
                </div>
                <div class="col-sm-3">
                <p class="stat"><span>4000+</span><br>Reports Delivered</p>
                </div>
                <div class="col-sm-3">
                <p class="stat"><span>7920+</span><br>Research Titles</p>
                </div>
                <div class="col-sm-3">
                <p class="stat"><span>2200+</span><br>Client's Served</p>
                </div>
            </div>
            </div>
        </div>
        <div class="mc-row">
            <div class="container">
                <h2 class="secHeading h2 pt-4">Media Citations</h2>
            </div>
            <a class="mc-link" href="<?php echo ROOT_URL; ?>media-citations.asp">
                <img src="<?php echo ROOT_URL; ?>themes/image/home/mc-logos.webp" width="100%" height="auto" alt="Media Citations logos" title="Media Citations logos">
            </a>
            <div class="container" style="text-align:right;">
            <a class="mc-link bold600"  href="<?php echo ROOT_URL; ?>media-citations.asp">Read More ...</a>
            </div>
        </div>
         <section class="second-section py-5" style="position: relative;">
            <div class="container" id="toggleContent">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="secHeading text-left">Enhance Your Business Planning with Data-Driven Decision Making</h2>
                        <p class="font16 text-left">In today's fast-paced market, staying informed about the latest developments is crucial for successful business planning.
                        </p>
                        <p class="font16 text-left">
                        Effective leaders recognize the power of market research and seamlessly integrate its insights into their strategies. This approach strategically helps in adapting to market changes and enhancing competitiveness.
                        </p>
                        <span class="short-text">
                        <h3>The Value of Market Research</h3>
                        <p class="font16 text-left" style="display:inline;">
                            Market research provides the precise roadmap with a solid business plan enabling and empowering you to focus on growth opportunities and increasing your chances of success. With a cutting-edge approach, market research techniques provide the necessary data for informed decision-making.
                        </p>
                        <p class="font16 text-left pt-2">
                    Nonetheless, businesses can leverage data analysis techniques to uncover trends, patterns, understand market timing, and valuable insights without relying on assumptions.
                    </p>
                        </span>
                    </div>
                    <div class="col-md-5">
                        <img src="<?php echo ROOT_URL; ?>themes/image/home/data_driven_decision_making_img.webp" width="445" height="445" alt="Data Driven Decision Making" title="Image representing Data Driven Decision Making" class="dddm-img">
                        
                    </div>
                </div>
                <span class="hidden-content">
                    
                    <h3>Growth Opportunities</h3>
                    <p class="font16 text-left">
                        Market research effectively helps in recognizing the market gaps and uncovers emerging trends. This facilitates the businesses to seize new opportunities, drive innovation, add more success, and achieve sustainable growth.
                        Stay ahead in your industry by embracing data-driven decision-making. Carve your business planning with the insights and strategies derived from comprehensive market research.
                    </p>
                    <h3>Market Research Applications</h3>
                    <p class="font16 text-left">
                    <strong>Market Analysis:</strong> Gain a deep understanding of your industry, including upcoming trends, product segments, and market share of key players.<br>

                    <strong>Strategic Planning:</strong> Stay updated with insights for goal setting and developing effective marketing strategies to gain a strong foothold in the industry in the early stages.<br>

                    <strong>Operations Management:</strong> Inform procurement, production, inventory planning, and supply chain strategies and implement risk mitigation strategies.<br>

                    <strong>Resource Management:</strong> Improve hiring practices, appraisals, and performance evaluations to stay organized amidst fluctuations.<br>

                    <strong>Sales Strategy:</strong> Analyze sales channels, market expansion opportunities, and new product development to enhance your revenue model and stay ahead.<br>

                    <strong>Competitor Intelligence:</strong> Understand your competitors’ strategies to carve out your competitive advantage and add more mileage to your business.<br>
                    <strong>Commercial Due Diligence:</strong> Assess target companies’ market positions and growth potential for informed acquisition decisions.<br>
                    </p>
                    
                </span>
                <span class="show-more-link" onclick="toggleText()">Read More ...</span>
            </div>
          
        </section>
        
        
        <section class="second-section section3 pt-4">
            <div class="container">
                <h2 class="secHeading h2 py-4">Market Research Reports</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="latest-reports-tab" data-toggle="pill" href="#latest-reports" role="tab" aria-controls="latest-reports" aria-selected="false">Latest Reports</a>
                            <a class="nav-link" id="automotive-and-transportation-tab" data-toggle="pill" href="#automotive-and-transportation" role="tab" aria-controls="automotive-and-transportation" aria-selected="false">Automotive & Transportation</a>
                            <a class="nav-link" id="chemicals-and-materials-tab" data-toggle="pill" href="#chemicals-and-materials" role="tab" aria-controls="chemicals-and-materials " aria-selected="false">Chemicals & Materials</a>
                            
                            <a class="nav-link" id="consumer-goods-tab" data-toggle="pill" href="#consumer-goods" role="tab" aria-controls="consumer-goods" aria-selected="false">Consumer Goods</a>
                            <a class="nav-link" id="energy-tab" data-toggle="pill" href="#energy" role="tab" aria-controls="energy" aria-selected="false">Energy & Utilities</a>
                            <a class="nav-link" id="food-and-beverages-tab" data-toggle="pill" href="#food-and-beverages" role="tab" aria-controls="food-and-beverages" aria-selected="false">Food & Beverages</a>
                            <a class="nav-link" id="healthcare-tab" data-toggle="pill" href="#healthcare" role="tab" aria-controls="healthcare" aria-selected="false">Healthcare</a>
                            <a class="nav-link" id="industrial-automation-tab" data-toggle="pill" href="#industrial-automation" role="tab" aria-controls="industrial-automation" aria-selected="false">Industrial Automation</a>
                            <a class="nav-link" id="it-and-telecommunication-tab" data-toggle="pill" href="#it-and-telecommunication" role="tab" aria-controls="it-and-telecommunication" aria-selected="false">IT & Telecommunication</a>
                            <a class="nav-link" id="packaging-tab" data-toggle="pill" href="#packaging" role="tab" aria-controls="packaging" aria-selected="false">Packaging</a>
                            <a class="nav-link" id="semiconductor-electronics-tab" data-toggle="pill" href="#semiconductor-electronics" role="tab" aria-controls="semiconductor-electronics" aria-selected="false">Semiconductor Electronics</a>
                            
                        </div>
                    </div>
                    <div class="col-md-9" style="margin-top: -1.5rem;">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade active show" id="latest-reports" role="tabpanel" aria-labelledby="latest-reports-tab">
                                <div class="">
                                    <div class="row">
                                        <?php $cnt = 1; foreach($latest_reports as $lr_latest_report){
                                            $lr_keyword = "";
                                                if($lr_latest_report['rep_keyword'] !='' && $lr_latest_report['rep_keyword'] !=Null){
                                                    $lr_keyword = $lr_latest_report['rep_keyword'];
                                                }else{
                                                    $lr_keyword = ucwords(str_replace("-"," ",$lr_latest_report['rep_url']));
                                                }

                                                $update_date = "";
                                                if($lr_latest_report['update_date'] !='' && $lr_latest_report['update_date'] !=Null){
                                                    $update_date = date("j M Y", strtotime($lr_latest_report['update_date']));
                                                }
    
                                                $no_of_pages = "";
                                                if($lr_latest_report['rep_pages'] !='' && $lr_latest_report['rep_pages'] !=Null){
                                                    $no_of_pages = $lr_latest_report['rep_pages'];
                                                }
                                               
                                        ?>
                                        <div class="col-md-12 rt-card">
                                            <div class="categeries bg-lgray">
                                                <h3 class="rt-h3"><a href="<?php echo ROOT_URL."market-research/".$lr_latest_report['rep_url'].".asp"; ?>" title="<?php echo $lr_keyword; ?>"><?php echo $lr_keyword; ?></a>
                                                    </h3>
                                            <p class="report-desc"><?php echo $lr_latest_report['rep_name']; ?>
                                            </p>
                                            <p class="report-meta"><?php echo $update_date;?> <?php if( $lr_latest_report['rep_type']=='N' ){?> | Pages: <?php echo $no_of_pages;}?> | Format: PPT*, PDF, EXCEL
                                            </p>
                                            <a class="rmlink" href="<?php echo ROOT_URL."market-research/".$lr_latest_report['rep_url'].".asp"; ?>" title="<?php echo $lr_keyword; ?>">Read More ...</a>
                                            </div>
                                        
                                        </div>
                                        <?php 
                                            if($cnt> 3) break;
                                            $cnt++; } 
                                            ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 btn-viewall-middle text-right py-4">
                                            <a href="<?php echo ROOT_URL."market-research.asp"; ?>" class=" btn btn-viewall font18" title="View All Latest Reports"> View All Latest Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="tab-pane fade" id="automotive-and-transportation" role="tabpanel" aria-labelledby="automotive-and-transportation-tab">
                                <div class="">
                                    <div class="row">
                                        <?php $cnt = 1; foreach($at_latest_reports as $at_latest_report){
                                            $at_keyword = "";
                                                if($at_latest_report['rep_keyword'] !='' && $at_latest_report['rep_keyword'] !=Null){
                                                    $at_keyword = $at_latest_report['rep_keyword'];
                                                }else{
                                                    $at_keyword = ucwords(str_replace("-"," ",$at_latest_report['rep_url']));
                                                }

                                                $update_date = "";
                                                if($at_latest_report['update_date'] !='' && $at_latest_report['update_date'] !=Null){
                                                    $update_date = date("j M Y", strtotime($at_latest_report['update_date']));
                                                }
    
                                                $no_of_pages = "";
                                                if($at_latest_report['rep_pages'] !='' && $at_latest_report['rep_pages'] !=Null){
                                                    $no_of_pages = $at_latest_report['rep_pages'];
                                                }
                                               
                                        ?>
                                        <div class="col-md-12 rt-card">
                                            <div class="categeries bg-lgray">
                                                <h3 class="rt-h3"><a href="<?php echo ROOT_URL."market-research/".$at_latest_report['rep_url'].".asp"; ?>" title="<?php echo $at_keyword; ?>"><?php echo $at_keyword; ?></a>
                                                    </h3>
                                            <p class="report-desc"><?php echo $at_latest_report['rep_name']; ?>
                                            </p>
                                            <p class="report-meta"><?php echo $update_date;?> | Pages: <?php echo $no_of_pages;?> | Format: PPT*, PDF, EXCEL
                                            </p>
                                            <a class="rmlink" href="<?php echo ROOT_URL."market-research/".$at_latest_report['rep_url'].".asp"; ?>" title="<?php echo $at_keyword; ?>">Read More ...</a>
                                            </div>
                                        
                                        </div>
                                        <?php 
                                            if($cnt> 3) break;
                                            $cnt++; } 
                                            ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 btn-viewall-middle text-right py-4">
                                            <a href="<?php echo ROOT_URL."market-research-report/automotive-and-transportation.asp"; ?>" class=" btn btn-viewall font18" title="View All Automotive & Transportation Reports"> View All Automotive & Transportation Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="consumer-goods" role="tabpanel" aria-labelledby="consumer-goods-tab">
                                <div class="">
                                    <div class="row">
                                        <?php $cnt = 1; foreach($cg_latest_reports as $latest_report){
                                            $keyword = "";
                                                if($latest_report['rep_keyword'] !='' && $latest_report['rep_keyword'] !=Null){
                                                    $keyword = $latest_report['rep_keyword'];
                                                }else{
                                                    $keyword = ucwords(str_replace("-"," ",$latest_report['rep_url']));
                                                }
                                            $update_date = "";
                                            if($latest_report['update_date'] !='' && $latest_report['update_date'] !=Null){
                                                $update_date = date("j M Y", strtotime($latest_report['update_date']));
                                            }

                                            $no_of_pages = "";
                                            if($latest_report['rep_pages'] !='' && $latest_report['rep_pages'] !=Null){
                                                $no_of_pages = $latest_report['rep_pages'];
                                            }

                                        ?>
                                        <div class="col-md-12 rt-card">
                                            <div class="categeries bg-lgray">
                                                <h3 class="rt-h3"><a href="<?php echo ROOT_URL."market-research/".$latest_report['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>"><?php echo $keyword; ?></a>
                                                    </h3>
                                            <p class="report-desc"><?php echo $latest_report['rep_name']; ?>
                                            </p>
                                            
                                            <p class="report-meta"><?php echo $update_date;?> | Pages: <?php echo $no_of_pages;?> | Format: PPT*, PDF, EXCEL
                                            </p>
                                            <a class="rmlink" href="<?php echo ROOT_URL."market-research/".$latest_report['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>">Read More ...</a>
                                            </div>
                                        
                                        </div>
                                        <?php 
                                            if($cnt> 3) break;
                                            $cnt++; } 
                                            ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 btn-viewall-middle text-right py-4">
                                            <a href="<?php echo ROOT_URL."market-research-report/consumer-goods.asp"; ?>" class=" btn btn-viewall font18" title="View All Consumer Goods Reports"> View All Consumer Goods Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="food-and-beverages" role="tabpanel" aria-labelledby="food-and-beverages-tab">
                                <div class="">
                                    <div class="row">
                                        <?php $cnt = 1; foreach($fb_latest_reports as $fb_latest_report){
                                            $fb_keyword = "";
                                                if($fb_latest_report['rep_keyword'] !='' && $fb_latest_report['rep_keyword'] !=Null){
                                                    $fb_keyword = $fb_latest_report['rep_keyword'];
                                                }else{
                                                    $fb_keyword = ucwords(str_replace("-"," ",$fb_latest_report['rep_url']));
                                                }

                                                $update_date = "";
                                            if($fb_latest_report['update_date'] !='' && $fb_latest_report['update_date'] !=Null){
                                                $update_date = date("j M Y", strtotime($fb_latest_report['update_date']));
                                            }

                                            $no_of_pages = "";
                                            if($fb_latest_report['rep_pages'] !='' && $fb_latest_report['rep_pages'] !=Null){
                                                $no_of_pages = $fb_latest_report['rep_pages'];
                                            }
                                           
                                        ?>
                                        <div class="col-md-12 rt-card">
                                            <div class="categeries bg-lgray">
                                                <h3 class="rt-h3"><a href="<?php echo ROOT_URL."market-research/".$fb_latest_report['rep_url'].".asp"; ?>" title="<?php echo $fb_keyword; ?>"><?php echo $fb_keyword; ?></a>
                                                    </h3>
                                            <p class="report-desc"><?php echo $fb_latest_report['rep_name']; ?>
                                            </p>
                                            <p class="report-meta"><?php echo $update_date;?> | Pages: <?php echo $no_of_pages;?> | Format: PPT*, PDF, EXCEL
                                            </p>
                                            <a class="rmlink" href="<?php echo ROOT_URL."market-research/".$fb_latest_report['rep_url'].".asp"; ?>" title="<?php echo $fb_keyword; ?>">Read More ...</a>
                                            </div>
                                        
                                        </div>
                                        <?php 
                                            if($cnt> 3) break;
                                            $cnt++; } 
                                            ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 btn-viewall-middle text-right py-4">
                                            <a href="<?php echo ROOT_URL."market-research-report/food-and-beverages.asp"; ?>" class=" btn btn-viewall font18" title="View All Food & Beverages Reports"> View All Food & Beverages Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="chemicals-and-materials" role="tabpanel" aria-labelledby="chemicals-and-materials-tab">
                                <div class="">
                                    <div class="row">
                                        <?php $cnt = 1; foreach($cm_latest_reports as $cm_latest_report){
                                            $cm_keyword = "";
                                                if($cm_latest_report['rep_keyword'] !='' && $cm_latest_report['rep_keyword'] !=Null){
                                                    $cm_keyword = $cm_latest_report['rep_keyword'];
                                                }else{
                                                    $cm_keyword = ucwords(str_replace("-"," ",$cm_latest_report['rep_url']));
                                                }
                                        ?>
                                        <div class="col-md-12 rt-card">
                                            <div class="categeries bg-lgray">
                                                <h3 class="rt-h3"><a href="<?php echo ROOT_URL."market-research/".$cm_latest_report['rep_url'].".asp"; ?>" title="<?php echo $cm_keyword; ?>"><?php echo $cm_keyword; ?></a>
                                                    </h3>
                                            <p class="report-desc"><?php echo $cm_latest_report['rep_name']; ?>
                                            </p>
                                            <p class="report-meta"><?php echo date("j M Y", strtotime($cm_latest_report['update_date']));?> | Pages: <?php echo $cm_latest_report['rep_pages'];?> | Format: PPT*, PDF, EXCEL
                                            </p>
                                            <a class="rmlink" href="<?php echo ROOT_URL."market-research/".$cm_latest_report['rep_url'].".asp"; ?>" title="<?php echo $cm_keyword; ?>">Read More ...</a>
                                            </div>
                                        
                                        </div>
                                        <?php 
                                            if($cnt> 3) break;
                                            $cnt++; } 
                                            ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 btn-viewall-middle text-right py-4">
                                            <a href="<?php echo ROOT_URL."market-research-report/chemicals-and-materials.asp"; ?>" class=" btn btn-viewall font18" title="View All Chemicals and Materials Reports"> View All Chemicals and Materials Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="it-and-telecommunication" role="tabpanel" aria-labelledby="it-and-telecommunication-tab">
                                <div class="">
                                    <div class="row">
                                        <?php $cnt = 1; foreach($itt_latest_reports as $itt_latest_report){
                                            $itt_keyword = "";
                                                if($itt_latest_report['rep_keyword'] !='' && $itt_latest_report['rep_keyword'] !=Null){
                                                    $itt_keyword = $itt_latest_report['rep_keyword'];
                                                }else{
                                                    $itt_keyword = ucwords(str_replace("-"," ",$itt_latest_report['rep_url']));
                                                }
                                        ?>
                                        <div class="col-md-12 rt-card">
                                            <div class="categeries bg-lgray">
                                                <h3 class="rt-h3"><a href="<?php echo ROOT_URL."market-research/".$itt_latest_report['rep_url'].".asp"; ?>" title="<?php echo $itt_keyword; ?>"><?php echo $itt_keyword; ?></a>
                                                    </h3>
                                            <p class="report-desc"><?php echo $itt_latest_report['rep_name']; ?>
                                            </p>
                                            <p class="report-meta"><?php echo date("j M Y", strtotime($itt_latest_report['update_date']));?> | Pages: <?php echo $itt_latest_report['rep_pages'];?> | Format: PPT*, PDF, EXCEL
                                            </p>
                                            <a class="rmlink" href="<?php echo ROOT_URL."market-research/".$itt_latest_report['rep_url'].".asp"; ?>" title="<?php echo $itt_keyword; ?>">Read More ...</a>
                                            </div>
                                        
                                        </div>
                                        <?php 
                                            if($cnt> 3) break;
                                            $cnt++; } 
                                            ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 btn-viewall-middle text-right py-4">
                                            <a href="<?php echo ROOT_URL."market-research-report/it-and-telecommunications.asp"; ?>" class=" btn btn-viewall font18" title="View All IT & Telecommunication Reports"> View All IT & Telecommunication Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="semiconductor-electronics" role="tabpanel" aria-labelledby="semiconductor-electronics-tab">
                                <div class="">
                                    <div class="row">
                                        <?php $cnt = 1; foreach($se_latest_reports as $se_latest_report){
                                            $se_keyword = "";
                                                if($se_latest_report['rep_keyword'] !='' && $se_latest_report['rep_keyword'] !=Null){
                                                    $se_keyword = $se_latest_report['rep_keyword'];
                                                }else{
                                                    $se_keyword = ucwords(str_replace("-"," ",$se_latest_report['rep_url']));
                                                }
                                        ?>
                                        <div class="col-md-12 rt-card">
                                            <div class="categeries bg-lgray">
                                                <h3 class="rt-h3"><a href="<?php echo ROOT_URL."market-research/".$se_latest_report['rep_url'].".asp"; ?>" title="<?php echo $se_keyword; ?>"><?php echo $se_keyword; ?></a>
                                                    </h3>
                                            <p class="report-desc"><?php echo $se_latest_report['rep_name']; ?>
                                            </p>
                                            <p class="report-meta"><?php echo date("j M Y", strtotime($se_latest_report['update_date']));?> | Pages: <?php echo $se_latest_report['rep_pages'];?> | Format: PPT*, PDF, EXCEL
                                            </p>
                                            <a class="rmlink" href="<?php echo ROOT_URL."market-research/".$se_latest_report['rep_url'].".asp"; ?>" title="<?php echo $se_keyword; ?>">Read More ...</a>
                                            </div>
                                        
                                        </div>
                                        <?php 
                                            if($cnt> 3) break;
                                            $cnt++; } 
                                            ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 btn-viewall-middle text-right py-4">
                                            <a href="<?php echo ROOT_URL."market-research-report/semiconductor-electronics.asp"; ?>" class=" btn btn-viewall font18" title="View All Semiconductor Electronics Reports"> View All Semiconductor Electronics Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="industrial-automation" role="tabpanel" aria-labelledby="industrial-automation-tab">
                                <div class="">
                                    <div class="row">
                                        <?php $cnt = 1; foreach($ia_latest_reports as $ia_latest_report){
                                            $ia_keyword = "";
                                                if($ia_latest_report['rep_keyword'] !='' && $ia_latest_report['rep_keyword'] !=Null){
                                                    $ia_keyword = $ia_latest_report['rep_keyword'];
                                                }else{
                                                    $ia_keyword = ucwords(str_replace("-"," ",$ia_latest_report['rep_url']));
                                                }
                                        ?>
                                        <div class="col-md-12 rt-card">
                                            <div class="categeries bg-lgray">
                                                <h3 class="rt-h3"><a href="<?php echo ROOT_URL."market-research/".$ia_latest_report['rep_url'].".asp"; ?>" title="<?php echo $ia_keyword; ?>"><?php echo $ia_keyword; ?></a>
                                                    </h3>
                                            <p class="report-desc"><?php echo $ia_latest_report['rep_name']; ?>
                                            </p>
                                            <p class="report-meta"><?php echo date("j M Y", strtotime($ia_latest_report['update_date']));?> | Pages: <?php echo $ia_latest_report['rep_pages'];?> | Format: PPT*, PDF, EXCEL
                                            </p>
                                            <a class="rmlink" href="<?php echo ROOT_URL."market-research/".$ia_latest_report['rep_url'].".asp"; ?>" title="<?php echo $ia_keyword; ?>">Read More ...</a>
                                            </div>
                                        
                                        </div>
                                        <?php 
                                            if($cnt> 3) break;
                                            $cnt++; } 
                                            ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 btn-viewall-middle text-right py-4">
                                            <a href="<?php echo ROOT_URL."market-research-report/industrial-automation.asp"; ?>" class=" btn btn-viewall font18" title="View All Industrial Automation Reports"> View All Industrial Automation Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="healthcare" role="tabpanel" aria-labelledby="healthcare-tab">
                                <div class="">
                                    <div class="row">
                                        <?php $cnt = 1; foreach($hc_latest_reports as $hc_latest_report){
                                            $hc_keyword = "";
                                                if($hc_latest_report['rep_keyword'] !='' && $hc_latest_report['rep_keyword'] !=Null){
                                                    $hc_keyword = $hc_latest_report['rep_keyword'];
                                                }else{
                                                    $hc_keyword = ucwords(str_replace("-"," ",$hc_latest_report['rep_url']));
                                                }
                                        ?>
                                        <div class="col-md-12 rt-card">
                                            <div class="categeries bg-lgray">
                                                <h3 class="rt-h3"><a href="<?php echo ROOT_URL."market-research/".$hc_latest_report['rep_url'].".asp"; ?>" title="<?php echo $hc_keyword; ?>"><?php echo $hc_keyword; ?></a>
                                                    </h3>
                                            <p class="report-desc"><?php echo $hc_latest_report['rep_name']; ?>
                                            </p>
                                            <p class="report-meta"><?php echo date("j M Y", strtotime($hc_latest_report['update_date']));?> | Pages: <?php echo $hc_latest_report['rep_pages'];?> | Format: PPT*, PDF, EXCEL
                                            </p>
                                            <a class="rmlink" href="<?php echo ROOT_URL."market-research/".$hc_latest_report['rep_url'].".asp"; ?>" title="<?php echo $hc_keyword; ?>">Read More ...</a>
                                            </div>
                                        
                                        </div>
                                        <?php 
                                            if($cnt> 3) break;
                                            $cnt++; } 
                                            ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 btn-viewall-middle text-right py-4">
                                            <a href="<?php echo ROOT_URL."market-research-report/healthcare.asp"; ?>" class=" btn btn-viewall font18" title="View All Healthcare Reports"> View All Healthcare Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="energy" role="tabpanel" aria-labelledby="energy-tab">
                                <div class="">
                                    <div class="row">
                                        <?php $cnt = 1; foreach($eu_latest_reports as $eu_latest_report){
                                            $eu_keyword = "";
                                                if($eu_latest_report['rep_keyword'] !='' && $eu_latest_report['rep_keyword'] !=Null){
                                                    $eu_keyword = $eu_latest_report['rep_keyword'];
                                                }else{
                                                    $eu_keyword = ucwords(str_replace("-"," ",$eu_latest_report['rep_url']));
                                                }
                                        ?>
                                        <div class="col-md-12 rt-card">
                                            <div class="categeries bg-lgray">
                                                <h3 class="rt-h3"><a href="<?php echo ROOT_URL."market-research/".$eu_latest_report['rep_url'].".asp"; ?>" title="<?php echo $eu_keyword; ?>"><?php echo $eu_keyword; ?></a>
                                                    </h3>
                                            <p class="report-desc"><?php echo $eu_latest_report['rep_name']; ?>
                                            </p>
                                            <p class="report-meta"><?php echo date("j M Y", strtotime($eu_latest_report['update_date']));?> | Pages: <?php echo $eu_latest_report['rep_pages'];?> | Format: PPT*, PDF, EXCEL
                                            </p>
                                            <a class="rmlink" href="<?php echo ROOT_URL."market-research/".$eu_latest_report['rep_url'].".asp"; ?>" title="<?php echo $eu_keyword; ?>">Read More ...</a>
                                            </div>
                                        
                                        </div>
                                        <?php 
                                            if($cnt> 3) break;
                                            $cnt++; } 
                                            ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 btn-viewall-middle text-right py-4">
                                            <a href="<?php echo ROOT_URL."market-research-report/energy.asp"; ?>" class=" btn btn-viewall font18" title="View All Energy & Utilities Reports"> View All Energy & Utilities Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="packaging" role="tabpanel" aria-labelledby="packaging-tab">
                                <div class="">
                                    <div class="row">
                                        <?php $cnt = 1; foreach($p_latest_reports as $p_latest_report){
                                            $p_keyword = "";
                                                if($p_latest_report['rep_keyword'] !='' && $p_latest_report['rep_keyword'] !=Null){
                                                    $p_keyword = $p_latest_report['rep_keyword'];
                                                }else{
                                                    $p_keyword = ucwords(str_replace("-"," ",$p_latest_report['rep_url']));
                                                }
                                        ?>
                                        <div class="col-md-12 rt-card">
                                            <div class="categeries bg-lgray">
                                                <h3 class="rt-h3"><a href="<?php echo ROOT_URL."market-research/".$p_latest_report['rep_url'].".asp"; ?>" title="<?php echo $p_keyword; ?>"><?php echo $p_keyword; ?></a>
                                                    </h3>
                                            <p class="report-desc"><?php echo $p_latest_report['rep_name']; ?>
                                            </p>
                                            <p class="report-meta"><?php echo date("j M Y", strtotime($p_latest_report['update_date']));?> | Pages: <?php echo $p_latest_report['rep_pages'];?> | Format: PPT*, PDF, EXCEL
                                            </p>
                                            <a class="rmlink" href="<?php echo ROOT_URL."market-research/".$p_latest_report['rep_url'].".asp"; ?>" title="<?php echo $p_keyword; ?>">Read More ...</a>
                                            </div>
                                        
                                        </div>
                                        <?php 
                                            if($cnt> 3) break;
                                            $cnt++; } 
                                            ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 btn-viewall-middle text-right py-4">
                                            <a href="<?php echo ROOT_URL."market-research-report/packaging.asp"; ?>" class=" btn btn-viewall font18" title="View All Packaging Reports"> View All Packaging Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-testimonial bg-lgray">
            <div class="container-fluid pt-4 pb-5">
                
                <section class="home-testimonial-bottom mb-4">
                    <div class="container testimonial-inner">
                    <h2 class="secHeading pt-4  pb-5">Client Endorsements</h2>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font16">“Persistence Market Research has helped us immensely in compiling a sound database. Our expectations were exceeded by their research team.”</div>
                                        
                                        <div class="link-name d-flex justify-content-end pt-4">– Fortune 500 Telecom Company, USA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font16">“The market numbers supplied by Persistence Market Research helped us successfully conclude our ongoing project and we are pleased with this purchase.” </div>
                                        
                                        <div class="link-name d-flex justify-content-end pt-4">– Multinational Chemical Company, USA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex mt-4 justify-content-center">
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font16 pb-4">“The customer service provided by Persistence Market Research was great. We got our report well in time and customized to suit our business requirements.” </div>
                                        
                                        <div class="link-name d-flex justify-content-end"> – Multinational Electronics Company, Japan</div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font16 pb-2">“Thank you for supplying the report in time for our project to go through. Commendable customer service.”</div><br>
                                        <div class="link-name d-flex justify-content-end pt-3 text-right">– Leading Global Healthcare Fortune 500 Company, USA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex mt-4 justify-content-center">
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font16">“The precise information given in Persistence Market Research’s reports has been priceless to us. We are very happy with this purchase, since the analysis in the report has been important in formulating our strategies.” </div>
                                        <div class="link-name d-flex justify-content-end pt-1">– Global Consulting Firm, USA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font16 pb-4">“The way Persistence Market Research handled the entire transaction, right from customisation to after-sales queries, has been very impressive.”</div>
                                        <div class="link-name d-flex justify-content-end pt-1">– Leading Semiconductors Company, Taiwan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex mt-4 justify-content-center">
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font16">“Over the years, we find our association with Persistence extremely fruitful.  Things are moving forward in a positive direction and many projects are being implemented.” </div>
                                        <div class="link-name d-flex justify-content-end pt-2 text-right">– A leading Chinese Multinational Home Appliances Company from its European Division.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="font16 pb-4">“Thank you so much, this is awesome!”</div>
                                        <div class="link-name d-flex justify-content-end pt-4 pb-3 mb-3 text-right">– A consulting firm based in Boston, United States.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section class="second-section py-5" style="background-color: #ffffff;">
            <div class="container">
                <h2 class="secHeading pt-4 pb-3 text-left">Our Services</h2>
                <div class="row">
                     <div class="col-md-3">
                        <a class="s-box" href="<?php echo ROOT_URL; ?>services/syndicate-market-research.asp"">
                            <img src="<?php echo ROOT_URL; ?>themes/image/home/syndicated_research_reports_icon.webp" width="100" height="100" alt="Image representing Subscription Services" title="Subscription Services" class="service-img">
                            <h2 class="s-title">
                                Syndicated Research Reports
                            </h2>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="s-box" href="<?php echo ROOT_URL; ?>services/custom-research.asp">
                            <img src="<?php echo ROOT_URL; ?>themes/image/home/custom_research_icon.webp" width="100" height="100" alt="Customized Research Services" title="Image representing Custom Research Services" class="service-img">
                            <h2 class="s-title">
                                    Customized Research
                            </h2>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="s-box" href="<?php echo ROOT_URL; ?>services/consulting-services.asp">
                            <img src="<?php echo ROOT_URL; ?>themes/image/home/consulting_services_icon.webp" width="100" height="100" alt="Image representing Consulting Services" title="Consulting Services" class="service-img">
                            <h2 class="s-title">
                                    Consulting Business Advisory
                            </h2>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="s-box" href="<?php echo ROOT_URL; ?>services/competitive-intelligence.asp">
                            <img src="<?php echo ROOT_URL; ?>themes/image/home/competitive_intelligence_icon.webp" width="100" height="100" alt="Image representing Competitive Intelligence Reports" title="Competitive Intelligence Research Reports" class="service-img">
                            <h2 class="s-title">Competitive Intelligence</h2>
                        </a>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a class="s-box" href="<?php echo ROOT_URL; ?>services/commercial-due-diligence.asp">
                            <img src="<?php echo ROOT_URL; ?>themes/image/home/commercial_due_diligence_icon.webp" width="100" height="100" alt="Commercial Due Diligence Services" title="Image representing Commercial Due Diligence" class="service-img">
                            <h2 class="s-title">
                                Commercial Due Diligence
                            </h2>
                        </a>
                    </div>
                     <div class="col-md-3">
                        <a class="s-box" href="<?php echo ROOT_URL; ?>services/full-time-engagement.asp">
                            <img src="<?php echo ROOT_URL; ?>themes/image/home/consumer-insights-icon.webp" width="100" height="100" alt="Image representing Full-time Engagement Services" title="Full-time Engagement Services" class="service-img">
                            <h2 class="s-title">
                                    Full-time Engagement 
                            </h2>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="s-box" href="<?php echo ROOT_URL; ?>services/primary-research-capabilties.asp">
                            <img src="<?php echo ROOT_URL; ?>themes/image/home/primary_research.webp" width="100" height="100" alt="Image representing Primary Research Capabilities" title="Primary Research Capabilities" class="service-img">
                            <h2 class="s-title m-0">
                                    Primary Research Capabilities
                            </h2>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="s-box" href="<?php echo ROOT_URL; ?>services/subscription-services.asp">
                            <img src="<?php echo ROOT_URL; ?>themes/image/home/subscription_services_icon.webp" width="100" height="100" alt="Image representing Subscription Services" title="Subscription Services" class="service-img">
                            <h2 class="s-title">
                                    Subscription Services
                            </h2>
                        </a>
                    </div>
                    <!-- <div class="col-md-3">
                        <a class="s-box" href="#">
                            <img src="<?php echo ROOT_URL; ?>themes/image/home/consumer_insights_behavior_analysis_icon.webp" width="100" height="100" alt="Image representing Consumer Insights & Behavior Analysis" title="Consumer Insights & Behavior Analysis" class="service-img">
                            <h2 class="s-title">
                                Consumer Insights & Behavior Analysis
                            </h2>
                        </a>
                    </div> -->
                   
                </div>
            </div>
        </section>
        
        <div class="container">
                <h3 class="text-center my-4 bold600">If it’s Market Research, we’ve got you covered!  <a href="<?php echo ROOT_URL."contact-us.asp"; ?>" class="btn btn-viewall font18 ml-3" title="Contact Us">Contact Us</a></h2>
        </div>
      
   	<?php $this->load->view("frontend/footer_home"); ?>
   	
     <a href="#" id="scrollToTop" title="Back to top" class="">
     <img src="<?php echo ROOT_URL; ?>themes/image/totop-icon.svg" alt="Scroll To Top" width="24px" height="24px">
    </a>
    
        <link href="<?php echo ROOT_URL; ?>themes/css/home.css" rel="stylesheet" />
        <script>
        function toggleText() {
            const content = document.getElementById("toggleContent");
            const hiddenContent = content.querySelector(".hidden-content");
            const link = content.querySelector(".show-more-link");

            if (hiddenContent.style.display === "none" || hiddenContent.style.display === "") {
            hiddenContent.style.display = "inline";
            link.textContent = "... Show Less";
            } else {
            hiddenContent.style.display = "none";
            link.textContent = "Read More ...";
            }
        }
        </script>
        <script src="<?php echo ROOT_URL; ?>themes/js/home.min.js" defer></script>
</body>
</html>
