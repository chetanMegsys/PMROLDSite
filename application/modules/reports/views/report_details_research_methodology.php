 <!DOCTYPE html>
 <html lang="en">

 <head>
     <?php $this->load->view("frontend/meta_links_reports"); ?>

     <link href="<?php echo ROOT_URL; ?>themes/css/theme-report-details.css" rel="stylesheet" />
     <?php $report_keyword = $report_detail[0]['rep_keyword']; ?>

     <?php $this->load->view("frontend/header_report"); ?>
     <div class="fixed-header stickyHeader p-2">
         <div class="container report-details-tabs d-flex justify-content-between">
             <div class="">
                 <a class="navbar-brand p-0" href="<?php echo ROOT_URL; ?>" title="Persistence Market Research Company">
                     <img class="img-fluid" width="120" height="32" src="<?php echo ROOT_URL; ?>themes/image/pmr-logo.svg" alt="Persistence Market Research Company" title="Persistence Market Research Company">
                 </a>
             </div>
             <div>
                 <ul class="nav nav-tabs" id="myTab">
                     <li class="nav-item">
                         <a class="nav-link font14 text-black2 myactiveFloatclass" id="summary-tab1"  href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp" title="Summary">Summary</a>
                     </li>
                     <?php if ($report_detail[0]['rep_type'] == 'N') {  ?>
                         <li class="nav-item ml-3">
                             <a class="nav-link font14 text-black2 myactiveFloatclass" id="segmentation-tab1" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp#segmentation" title="Segmentation"> Segmentation</a>
                         </li>
                     <?php }
                        if ($report_detail[0]['rep_type'] == 'N') {
                        ?>
                         <li class="nav-item ml-3">
                             <a class="nav-link font14 text-black2" rel="nofollow" href="<?php echo ROOT_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>/toc" title="View ToC">Table of Content</a>
                         </li>
                     <?php } else if ($report_detail[0]['rep_type'] == 'M') {

                        ?> <li class="nav-item ml-3">
                             <a class="nav-link font14 text-black2" rel="nofollow" href="<?php echo ROOT_URL; ?>toc/<?php echo $report_detail[0]['rep_id']; ?>" title="Request ToC">Request ToC</a>
                             
                         </li>
                     <?php } ?>
                     <li class="nav-item ml-3">
                            <a class="nav-link active font14 text-black2" rel="nofollow" title="Research Methodology" href="#">Methodology</a>
                    </li>
                 </ul>
             </div>
             <div class="sample-btn">
                <a rel="nofollow" href="<?php echo ROOT_URL; ?>request-customization/<?php echo $report_detail[0]['rep_id']; ?>" class="btn btn-enquire text-black2 mr-4" title="Customize Now" >Customize Now</a>
                 <a class="btn btn-fs" rel="nofollow" title="Get Report Sample" href="<?php echo ROOT_URL; ?>samples/<?php echo $report_detail[0]['rep_id']; ?>">
                     Report Sample
                 </a>
             </div>
         </div>
     </div>
     <section class="report-details-topsec report-details">
         <div class="container pt-1 pb-2">
             <div class="row">
                 <div class="col-md-12">
                     <nav>
                         <ol class="breadcrumb bg-transparent p-0 my-0">
                             <li class="breadcrumb-item" style="margin-top: -4px;">
                                 <a href="<?php echo ROOT_URL; ?>" class="text-blue-new" title="Home" style="margin-top:-2px;">
                                    <img src="<?php echo ROOT_URL; ?>assets/icons/home-icon.svg" width="16px" height="16px" alt="Home">
                                 </a>
                             </li>
                             <li class="breadcrumb-item">
                                 <a href="<?php echo ROOT_URL . 'market-research-report/' . $report_detail[0]['seo_pagename']; ?>.asp" class="text-blue-new" title="Persistence Market Research">
                                     <span><?php echo $report_detail[0]['cat_name']; ?></span>
                                 </a>
                             </li>
                             <li class="breadcrumb-item">
                                <a href="<?php echo WEBSITE_URL . "market-research/" . $report_detail[0]['rep_url']; ?>.asp" class="text-blue-new" title="<?php echo $report_keyword; ?>">
                                 <span><?php 
                                    $keyword = $report_keyword;
                                    $position = strpos($keyword, 'Market');
                                    if ($position !== false) {
                                        // Add length of 'Market' to include it in the substring
                                        echo substr($keyword, 0, $position + strlen('Market'));
                                    } else {
                                        // Fallback if 'Market' is not found
                                        echo $keyword;
                                    }
                                    ?>
                                </span>
                                </a>
                             </li>
                              <li class="breadcrumb-item text-black">
                                 <span>Research Methodology</span>
                             </li>
                         </ol>
                     </nav>
                 </div>
             </div>
             <div class="row align-items-center">
                 <div class="col-md-10">
                    <h1 class="rtitle"><?php  echo $report_keyword;?></h1> 
                    <h2 class="rstitle"><?php echo $report_detail[0]['rep_name']; ?></h2>
                    <p class="d-flex bold600 font15 txt-black1 m-0">
                        <span  class="pr-2"> ID: PMRREP<?php echo $report_detail[0]['rep_id']; ?></span>|
                        <span  class="pl-2 pr-2">
                            <?php if (isset($report_detail[0]['rep_type']) &&  $report_detail[0]['rep_type'] == 'N') {?>
                                <?php echo isset($report_detail[0]['rep_type']) && $report_detail[0]['rep_type'] == 'N' ? '' . $report_detail[0]['rep_pages'] . " Pages" : 'Upcoming'; ?>
                            <?php } ?>
                        </span>|
                        
                        <span class="pl-2 pr-2">
                            <?php if (isset($report_detail[0]['rep_type']) &&  $report_detail[0]['rep_type'] == 'N') {
                            ?><?php  echo $report_detail[0]['rep_type'] == 'N' ? date("j M Y", strtotime($report_detail[0]['update_date'])) : date('j M Y', strtotime(date('Y-m-d') . ' + 50 days')); ?>
                            <?php } 
                            if (isset($report_detail[0]['rep_type']) &&  $report_detail[0]['rep_type'] == 'M') {
                                echo 'Upcoming';
                            }
                            ?>
                        </span>|
                        <span class="pl-2 pr-2">
                            Format: PDF, Excel, PPT*
                        </span>|
                        <span class="pl-2">
                            <?php
                            if (isset($parent_category[0]['cat_name'])) {
                            ?>
                            <a href="<?php echo ROOT_URL . 'market-research-report/' .$parent_category[0]['seo_pagename'].".asp"; ?>"><?php echo $parent_category[0]['cat_name']; ?></a>
                        <?php
                            } ?>
                        </span>
                    </p>
                 </div>
                 <div class="col-md-2 text-right">
                    <img src="<?php echo ROOT_URL; ?>themes/image/sample_report.svg" style="border-radius:10px;margin-top:-20px;" width="120" height="" alt="Market Growth and Regional Outlook Report by Persistence Market Research">
                 </div>
             </div>
         </div>
     </section>
     <section class="report-details-tabs mt-2" >
        <div class="container-fluid rtab-row">
            <div class="container">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="nav-item ml-0">
                        <a class="nav-link  text-black2 " id="summary-tab" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp" title="Summary" onclick="getFloatClick('summary-tab1');">Report Summary</a>
                    </li>
                    <?php if ($report_detail[0]['rep_type'] == 'N') {  ?>
                        <li class="nav-item ">
                            <a class="nav-link  text-black2 "  href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp#segmentation" title="Segmentation" onclick="getFloatClick('segmentation-tab1');">Segmentation</a>
                        </li>
                    <?php } ?>
                    <?php if ($report_detail[0]['rep_type'] == 'N') {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link  text-black2 triggerToc" rel="nofollow" title="View ToC" href="<?php echo ROOT_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>/toc">Table of Content</a>
                        </li>
                    <?php
                    } else  if ($report_detail[0]['rep_type'] == 'M') {
                    ?>
                        <li class="nav-item">
                            <a rel="nofollow" class="nav-link  text-black2" href="<?php echo ROOT_URL; ?>toc/<?php echo $report_detail[0]['rep_id']; ?>" title="Request ToC">Table of Content</a>
                        </li>
                    <?php
                    } ?>
                    <li class="nav-item">
                            <a class="nav-link active text-black2 triggerToc"  rel="nofollow" title="Research Methodology" href="<?php echo ROOT_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>/research-methodology">Research Methodology</a>
                    </li>
                    <li class="nav-item rct-btn">
                        <a class="nav-link" rel="nofollow" title="Request Customization" href="<?php echo ROOT_URL; ?>request-customization/<?php echo $report_detail[0]['rep_id']; ?>">
                            Request Customization
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn rst-btn" rel="nofollow" title="Get a Report Sample" href="<?php echo ROOT_URL; ?>samples/<?php echo $report_detail[0]['rep_id']; ?>" style="padding-left: 28px;padding-right: 28px;">
                                Request Report Sample
                        </a>
                    </li>
                </ul>
            </div>
        </div>
         <div class="container">
             <div class="row report-tabs">
                 <div class="col-md-9 mt-3 mb-3 left-column" style="background: #fff;border-radius: 10px;">
                    <section id="overview" class="mb-4">
                        <h2 class="h2">Research Methodology Framework for Market Research Excellence</h2>
                        <p>At <strong>Persistence Market Research</strong>, we implement a <strong>comprehensive, validated, and multi-dimensional approach</strong> to market analysis that delivers actionable insights across complex market landscapes. Our methodology combines the analytical rigor of leading consulting firms with innovative research techniques, ensuring robust market assessments that guide strategic decision-making with confidence.</p>
                    </section>

                    <section id="core-philosophy" class="mb-4 section-card">
                        <h2 class="h2">Core Research Philosophy</h2>
                        <p>Our methodology is built on four foundational pillars:</p>
                        <p class="text-center py-2">
                            <img src="<?php echo WEBSITE_URL; ?>assets/images/research_philosophy.webp" width="100%" alt="Research Philosophy" title="Research Philosophy" >
                            <p>
                        <p>
                            At Persistence Market Research, our methodology is designed to transcend conventional market studies by combining analytical rigor, multi-source validation, and future-focused insights.
                        </p><p>
                            We integrate advanced research frameworks, robust data collection strategies, cutting-edge analytics, and innovative technologies to deliver a 360-degree view of complex markets. </p><p>
                            Each stage spanning from strategic scoping and hypothesis-building to competitive intelligence, quality validation, and actionable recommendations is engineered to provide clients with unmatched clarity, precision, and confidence in decision-making. </p><p>
                            By embedding innovation and technology at the core, our approach ensures that insights are not only comprehensive but also predictive, empowering businesses to seize opportunities, mitigate risks, and achieve sustainable growth.
                        </p>
                        <p class="text-center py-2">
                            <img src="<?php echo WEBSITE_URL; ?>assets/images/research_stages.webp" width="100%" alt="Research Stages" title="Research Stages" >
                        <p>
                    </section>

                    <section id="capturing-key-info" class="mb-4">
                        <h2 class="h2">Capturing Key Information and Events</h2>
                        <p>During this phase, key research objectives focus on essential information and data points for assessing the market, including:</p>

                        <p class="text-center py-2">
                            <img src="<?php echo WEBSITE_URL; ?>assets/images/capturing_key_information_and_events.webp" width="100%" alt="Overview of Market Dynamics and Landscape" title="Overview of Market Dynamics and Landscape" >
                        <p>
                    </section>

                    <section id="tam-sam-som" class="mb-4 section-card">
                        <h2 class="h2">TAM-SAM-SOM Framework Implementation</h2>
                        <p>We employ both <strong>top-down</strong> and <strong>bottom-up</strong> approaches to ensure accurate market sizing.</p>
                        <div class="row">
                            <div class="col-md-6">
                            <h3 class="h6">Top-Down Market Sizing</h3>
                            <ul>
                                <li>Universe Definition: Total global/regional market identification</li>
                                <li>Segmentation Filters: Geographic, demographic, and behavioral constraints</li>
                                <li>Market Share Analysis: Competitive landscape assessment and share allocation</li>
                                <li>Growth Rate Application: Historical trends and forward-looking growth assumptions</li>
                            </ul>
                            </div>
                            <div class="col-md-6">
                            <h3 class="h6">Bottom-Up Market Sizing</h3>
                            <ul>
                                <li>Unit Economics: Average transaction values, purchase frequencies, customer lifecycle</li>
                                <li>Customer Segmentation: Detailed buyer persona development and sizing</li>
                                <li>Penetration Analysis: Market penetration rates by segment and geography</li>
                                <li>Scaling Methodology: Extrapolation techniques with confidence intervals</li>
                            </ul>
                            </div>
                        </div>
                        <h4 class="mt-3 h2">Validation & Cross-Verification</h4>
                        <ul>
                            <li>Triangulation: Comparing top-down and bottom-up results for consistency</li>
                            <li>Sensitivity Analysis: Testing key assumptions and parameter variations</li>
                            <li>Peer Benchmarking: Comparison with analogous markets and industry benchmarks</li>
                            <li>Expert Review: External validation through industry specialist consultation</li>
                        </ul>
                        <p class="text-center py-2">
                                <img src="<?php echo WEBSITE_URL; ?>assets/images/validation_cross_verification.webp" width="100%" alt="Validation & Cross-Verification" title="Validation & Cross-Verification" >
                        <p>
                    </section>

                    <section id="forecasting" class="mb-4">
                        <h2 class="h2">Forecasting & Projection Modeling</h2>
                        <p>Our proprietary forecasting models incorporate multiple variables and scenarios.</p>
                        <h3 class="h6">Forecasting Components</h3>
                        <ul>
                            <li>Historical Trend Analysis: 10-year historical growth patterns and cyclical variations</li>
                            <li>Driver-Based Modeling: Economic indicators, demographic shifts, technology adoption</li>
                            <li>Scenario Planning: Base case, optimistic, and conservative projections</li>
                            <li>Monte Carlo Simulations: Probability-weighted outcomes and risk assessments</li>
                        </ul>

                        <h3 class="h6">Model Validation</h3>
                        <ul>
                            <li>Back-Testing: Historical accuracy assessment over 3–5-year periods</li>
                            <li>Cross-Validation: Multiple modeling approaches for result comparison</li>
                            <li>External Benchmarking: Comparison with established market forecasts</li>
                            <li>Continuous Calibration: Quarterly model updates based on new data</li>
                        </ul>
                    </section>

                    <section id="data-collection" class="mb-4 section-card">
                        <h2 class="h2">Comprehensive Data Collection Strategy</h2>
                        <p>Our secondary research phase establishes a robust knowledge base utilizing diverse, credible sources.</p>
                        <h3 class="h6">Secondary Data Sources</h3>
                        <ul>
                            <li>Industry Publications & Reports</li>
                            <li>Government & Regulatory Data</li>
                            <li>Financial Intelligence (filings & reports)</li>
                            <li>Academic Research & Digital Intelligence</li>
                        </ul>

                        <h3 class="h6">Quality Assurance Protocol</h3>
                        <ul>
                            <li>Source credibility assessment and publication date validation</li>
                            <li>Data consistency checks across multiple sources</li>
                            <li>Bias identification and neutralization techniques</li>
                            <li>Information gap tracking for primary research prioritization</li>
                        </ul>
                        <p class="text-center py-2">
                                <img src="<?php echo WEBSITE_URL; ?>assets/images/quality_assurance_protocol.webp" width="100%" alt="Data Collection Strategy" title="Data Collection Strategy" >
                        <p>
                    </section>

                    <section id="primary-research" class="mb-4">
                        <h2 class="h2">Primary Research Excellence</h2>
                        <p>Our primary research methodology employs best-in-class techniques to capture unique market insights.</p>

                        <h3 class="h6">Quantitative Research Methods</h3>
                        <ul>
                            <li>Large-Scale Surveys: Statistically representative samples with 95% confidence intervals</li>
                            <li>Survey Methodology: Multi-channel deployment (online, telephone, in-person)</li>
                            <li>Question Architecture and Response Optimization</li>
                        </ul>

                        <h3 class="h6">Qualitative Research Methods</h3>
                        <ul>
                            <li>Executive Interviews</li>
                            <li>Focus Groups</li>
                            <li>Expert Consultations</li>
                        </ul>
                    </section>

                    <section id="quality-assurance" class="mb-4 section-card">
                        <h2 class="h2">Quality Assurance & Validation Framework</h2>
                        <h3 class="h6">Multi-Stage Validation Process</h3>
                        <ul>
                            <li>Source Verification and Consistency Testing</li>
                            <li>Outlier Detection and Bias Assessment</li>
                            <li>Peer Review Process and External Validation</li>
                            <li>Sensitivity Analysis and Confidence Intervals</li>
                        </ul>
                        <p class="text-center py-2">
                                <img src="<?php echo WEBSITE_URL; ?>assets/images/multi_stage_validation_process.webp" width="100%" alt="Multi-Stage Validation Process" title="Multi-Stage Validation Process" >
                        <p>
                        </section>

                        <section id="validation" class="mb-4">
                        
                        <h2 class="h2">Methodology Validation & Credibility</h2>
                        <p>Our research methodology has been extensively validated through:</p>
                        <ul>
                            <li><strong>Academic Partnerships:</strong> Collaborations with top-tier business schools and research institutions</li>
                            <li><strong>Client Success Stories:</strong> Documented case studies demonstrating research impact and ROI</li>
                            <li><strong>Continuous Benchmarking:</strong> Performance comparison with leading global research firms</li>
                        </ul>
                        <p>
                            This comprehensive methodology framework positions Persistence Market Research at the forefront of market intelligence, combining the analytical sophistication of top-tier consulting firms with innovative research techniques. Our approach ensures that every market assessment delivers precise, actionable, and strategically valuable insights that drive business success in competitive market environments. </p><p>
                            Ready to unlock your market potential? Contact our research experts to discuss how our validated methodology can transform your strategic decision-making with data-driven market intelligence.

                        </p>
                        
                    </section>
                            
                 </div>
                 <!--------- Col-3 -------->
                 <div class="col-md-3 right-column">
                     <aside class="right-side-section">
                        <div class="call-to-action">
                            <div id="region" class="PremiumReportInfo sf-outer right-boxes pb-0 my-3">
                            </div>
                            <div class="sf-outer right-boxes px-3">
                                <a rel="nofollow" class="btn bnr-btn w-100" href="<?php echo WEBSITE_URL . "checkout/" . $report_detail[0]['rep_id']; ?>" title="<?php echo $report_detail[0]['rep_type'] == 'N' ? 'Buy Now' : 'Pre Book'; ?>">
                                <?php echo $report_detail[0]['rep_type'] == 'N' ? 'Buy Now' : 'Pre Book'; ?>
                            </a>
                            </div>
                            <div class="mt-3 sf-outer right-boxes">
                                <p class="h3 text-center mt-2 mb-0">Get In Touch</p>
                                <div class="d-flex flex-row px-lg-3">
                                    <form class="mt-2 sampleForm" name="" action="" method="POST" onsubmit="return validateForm();" style="width:100%;">
                                        <?php
                                            $name = $this->security->get_csrf_token_name(); 
                                            $hash = $this->security->get_csrf_hash();
                                            $_SESSION[$name] = $hash;
                                        ?>
                                        <input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;background: transparent;" class="fname sr-only" value="">
                                        <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
                                        <input type="hidden" name="source" value="RRS" />
                                        <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                                        <input type="hidden" name="type" class="hdnType" value="S">
                                        <div class="form-group position-relative">
                                            <!-- <label>Full Name*</label> -->
                                            <input type="text" name="name" id="idName" class="form-control name" placeholder="Full Name*" required="required">
                                            <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="check icon" width="18" height="18" style="display:none">
                                            <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="info icon" width="18" height="18" style="display:none">
                                        </div>
                                        <div class="form-group position-relative">
                                            <input type="email" name="emailId" id="idFctMREmailId" class="form-control emailId sampleForm" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
                                            <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="check icon" width="18" height="18" style="display:none">
                                            <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="info icon" width="18" height="18" style="display:none">
                                            <span class="text-danger font12" id="errorFullName"></span>
                                        </div>
                                        <div class="form-group position-relative">
                                            <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone +1 123 456 7890"  maxlength="14"  onblur="checksubmit(this.value);">
                                            <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="check icon" width="18" height="18" style="display:none">
                                            <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="info icon" width="18" height="18" style="display:none">
                                            <span class="text-danger font11 errorPhoneNo" id="errorPhoneNo"></span>
                                        </div>
                                        
                                        <div class="form-group position-relative">
                                            <input type="hidden" name="company" id="idName" class="form-control company" placeholder="Company*" >
                                            <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="check icon" width="18" height="18" style="display:none">
                                            <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="info icon" width="18" height="18" style="display:none">
                                        </div>
                                        <div class="form-group position-relative">
                                            <input type="hidden" name="country" id="country" class="form-control company" placeholder="Country*" >
                                            <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="check icon" width="18" height="18" style="display:none">
                                            <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="info icon" width="18" height="18" style="display:none">
                                        </div>
                                        
                                        <div class="form-group position-relative">
                                        <textarea type="text" name="message" id="idName" class="form-control message" rows="2" placeholder="Message" maxlength="200" ></textarea>

                                        <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="check icon" width="18" height="18" style="display:none">
                                        <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="info icon" width="18" height="18" style="display:none">
                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-12 mb-2">
                                                <div class="form-field">
                                                    <span id="captcha" class="captcha"></span>
                                                    <input type="text" name="captcha" class="captcha-input form-control captcha txtCaptcha" placeholder = "Captcha Code*" id="captcha-form" maxlength="3" size="3" tabindex="0" required />
                                                    <input type="hidden" class="hdnCaptcha" name="hdnCaptcha" value="">
                                                    <span id="captachacode"   class="errormsgs"></span>
                                                    <span class="text-danger captchaError"></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn requestFreeSample rrs-btn" name="btnSubmit" style="width: 100%;">Submit</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        <div class="slider-section mt-3 right-boxes" style="position: relative;border-radius:10px;">
                            <p class="h3 pt-3 pb-2 m-0 text-center"> Testimonials</p>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators ">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carosel-box">
                                            <div class="tour-item ">
                                                <div class="tour-desc ">
                                                    <div class="font16">“Persistence Market Research has helped us immensely in compiling a sound database. Our expectations were exceeded by their research team.”</div>
                                                    
                                                    <div class="link-name d-flex text-right font15 bold600 pt-3">Fortune 500 Telecom Company, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item ">
                                                <div class="tour-desc">
                                                    <div class="font16">“The market numbers supplied by Persistence Market Research helped us successfully conclude our ongoing project and we are pleased with this purchase.” </div>
                                                    
                                                    <div class="link-name d-flex text-right font15 bold600 pt-3">Multinational Chemical Company, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item ">
                                                <div class="tour-desc">
                                                    <div class="font16">“The customer service provided by Persistence Market Research was great. We got our report well in time and customized to suit our business requirements.”</div>
                                                    
                                                    <div class="link-name d-flex text-right font15 bold600 pt-3">Multinational Electronics Company, Japan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item">
                                                <div class="tour-desc">
                                                    <div class="font16 pb-4">“The way Persistence Market Research handled the entire transaction, right from Customization to after-sales queries, has been very impressive.”</div>
                                                    <div class="link-name d-flex text-right font15 bold600">Leading Semiconductors Company, Taiwan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item">
                                                <div class="tour-desc">
                                                    <div class="font16 pb-4">“Thank you for supplying the report in time for our project to go through. Commendable customer service.”</div>
                                                    <div class="link-name d-flex text-right font15 bold600">Leading Global Healthcare Fortune 500 Company, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item">
                                                <div class="tour-desc">
                                                    <div class="font16 pb-0">“The precise information given in Persistence Market Research’s reports has been priceless to us. We are very happy with this purchase, since the analysis in the report has been important in formulating our strategies.”</div>
                                                    <div class="link-name text-right font15 bold600">Global Consulting Firm, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="Our-clients right-boxes mt-3 pb-4 pt-0 text-center">
                             <p class="h3 py-3 m-0 text-center">Our Media Trust</p>
                             <a href="<?php echo ROOT_URL; ?>media-citations.asp">
                                <img src="<?php echo ROOT_URL; ?>themes/image/pmr-media-trust.webp" loading="lazy" title="PMR Media Trust" width="235px" height="264px" alt="PMR Media Citations">
                             </a>
                        </div>
                        <div class="right-boxes p-3 mt-3 d-flex align-items-center justify-content-between">
                            <div class="align-items-center">
                                <a href="<?php echo WEBSITE_URL; ?>about-us.asp#sustainability" title="GHG Emissions pdf Report" target="_blank" class="tm-name text-black">
                                <img class="img-fluid" src="<?php echo ROOT_URL; ?>themes/image/co2_neutral.webp" 
                                    width="100" height="100" loading="lazy" 
                                    alt="Persistence Market Research is Carbon Neutral Company" 
                                    title="Persistence Market Research is Carbon Neutral Company">
                                <p class="mb-0 ms-2 font12 text-center">Sustainability</p>
                                </a>
                            </div>
                            <div class="align-items-center">
                                <img class="img-fluid" src="<?php echo ROOT_URL; ?>themes/image/dunsicon.webp" 
                                    width="100" height="100" loading="lazy" 
                                    alt="DUNS Registered" title="DUNS Registered">
                                <p class="mb-0 ms-2 font12">No: 231234099</p>
                            </div>
                        </div>
                        <div class=" quick-contact right-boxes px-3 py-3 mt-3 shadow-sm" style="border-radius: 10px">
                            <p class="h3 pb-2 mb-2 text-center">For More Information</p>
                            <ul class="list-unstyled mb-3 cta-check-list">
                                <li>Market Dynamics & Insights</li>
                                <li>Growth Opportunities</li>
                                <li>Go to Market Strategy</li>
                                <li>Commercial Due Diligence</li>
                                <li>Competitive Insights</li>
                                <li>Delivery Timeline</li>
                            </ul>
                            <div class="text-center">
                                <a rel="nofollow" 
                                href="<?php echo ROOT_URL; ?>request-customization/<?php echo $report_detail[0]['rep_id']; ?>" 
                                class="btn btn-primary w-100 fw-bold px-4 py-2" 
                                title="Request customization for this report" style="background-color:#005C99;border-radius: 5px;border-color: #005C99;font-weight:600;">
                                    Talk to Us
                                </a>
                            </div>
                        </div>
                     </aside>
                 </div>
             </div>
         </div>
     </section>

     <?php $this->load->view("frontend/footer"); ?>
     <link href="<?php echo ROOT_URL; ?>themes/css/report-details.css" rel="stylesheet" />
     <!-- google translater start -->
     <div class="fixTranslator">
         <a class="float-left mr-4" href="javascript::void(0)">
             <img loading="lazy" src="<?php echo ROOT_URL; ?>themes/image/translator.png" alt="Google translate" title="Google translate" height="32" width="32">
         </a>
         <div id="google_translate_element"></div>
     </div>
     <?php 
     $messagePlaceholder = "Message"; //Please explain your research goal in brief for us to serve you better.
     //$this->load->view("cta_popup_web"); ?>

     <!-- talk to author popup -->
     <div class="modal fade cta-modal cta-b1-modal reportform" id="talk-to-author" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-body">
                     <div class="row m-0">
                         <div class="col-lg-12 p-0">
                             <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close" style="outline:0">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                             <p class="text-center mt-3 mb-2 modalHead"><span class="bold700 requestPopupTitle"> Talk To Athour</span></p>
                             <form class="mt-4 gc_sampleForm" name="" action="<?php echo $submit_url; ?>" method="POST" onsubmit="return gc_validateForm();">
                                 <?php
                                    $name = $this->security->get_csrf_token_name();
                                    $hash = $this->security->get_csrf_hash();
                                    $_SESSION[$name] = $hash;
                                    ?>
                                <input type="text" name="fname" style="height:0px;width:0px;border: none;display: inherit;background: transparent;" class="fname sr-only" value="">
                                 <input type="hidden" name="<?= $name; ?>" value="<?= $hash; ?>" />
                                 <input type="hidden" name="source" value="FWP" />
                                 <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                                 <input type="hidden" name="type" class="hdnType" value="ASK">

                                 <div class="form-group position-relative">
                                     <input type="text" name="name" id="idName" class="form-control name" placeholder="Full Name*" >
                                     <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="check icon" width="18" height="18" style="display:none">
                                     <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="info icon" width="18" height="18" style="display:none">
                                 </div>
                                 <div class="form-group position-relative">
                                     <input type="email" name="emailId" id="idFctMREmailId" class="form-control emailId sampleForm2" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" >
                                     <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="email check" width="18" height="18" style="display:none">
                                     <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="email info" width="18" height="18" style="display:none">
                                     <span class="text-danger font11 sampleForm2Error" id="errorFullName"></span>
                                 </div>
                                 <div class="form-group position-relative">
                                     <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone: +1 123 456 7890"  maxlength="14"  onblur="checksubmit(this.value);">
                                     <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="phone check" width="18" height="18" style="display:none">
                                     <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="phone info" width="18" height="18" style="display:none">
                                     <span class="text-danger font11 errorPhoneNo" id="errorPhoneNo"></span>
                                 </div>
                                 <div class="form-group position-relative" style="margin-bottom: 30px;">
                                     <input type="text" name="company" id="idCompany" class="form-control company" placeholder="Company*" >
                                     <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="company check" width="18" height="18" style="display:none">
                                     <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="company info" width="18" height="18" style="display:none">
                                 </div>
                                 <div class="form-group position-relative" >
                                     <input type="text" name="country" id="idCountry" class="form-control company" placeholder="Country*" >
                                     <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="country check" width="18" height="18" style="display:none">
                                     <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="country info" width="18" height="18" style="display:none">
                                 </div>
                                 <div class="form-group position-relative" style="margin-bottom: 30px;">
                                     <textarea type="text" name="message" id="idMessage" class="form-control message" rows="2" placeholder="<?php echo $messagePlaceholder; ?>" maxlength="200" required></textarea>
                                     <img class="bi bi-check-circle-fill" src="<?php echo ROOT_URL; ?>themes/image/check-icon.svg" alt="msg check" width="18" height="18" style="display:none">
                                     <img class="bi bi-info-circle" src="<?php echo ROOT_URL; ?>themes/image/info-icon.svg" alt="msg info" width="18" height="18" style="display:none">

                                 </div>
                                 <div class="row">
                                    <div class="col-xs-12 col-md-12 mb-2">
                                        <div class="form-field" style="padding: 0px 48px;">
                                            <span id="gc_captcha" class="captcha"></span>
                                            <input type="text" name="captcha" class="captcha-input form-control captcha gc_txtCaptcha" placeholder = "Security Code*" id="gc_captcha-form" maxlength="3" size="3" tabindex="0" required />
                                            <input type="hidden" class="gc_hdnCaptcha" name="hdnCaptcha" value="">
                                            <span id="gc_captachacode"   class="errormsgs"></span>
                                            <span class="text-danger captchaError"></span>
                                        </div>
                                    </div>
                                </div>
                                 <button type="submit" class="buttonMyclass btn requestFreeSample" name="btnSubmit"> <span class=" requestFormButton"> Talk To Athor </span> </button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

     <script type="text/javascript">
         function googleTranslateElementInit() {
             new google.translate.TranslateElement({
                 pageLanguage: 'en',
                 includedLanguages: 'ar,zh-CN,zh-TW,cs,da,nl,en,eo,et,fi,fr,de,iw,hu,it,ja,ko,la,lb,no,pl,pt,ro,ru,sr,sk,es,th,tr'
             }, 'google_translate_element');
         }
     </script>

     <script>
         $(document).ready(function() {


            

             $(".expertPopup").click(function() {

                $('input[type=text]').each(function() {
                     $(this).val('');
                     $(this).removeClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").hide();
                 });

                 $('input[type=email]').each(function() {
                     $(this).val('');
                     $(this).removeClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").hide();
                 });
                 
                 var btnclass = $(this).attr("data-class");
                 var btnname = $(this).attr("data-btn");
                 var formType = $(this).attr("data-prop");


                 if (formType == 'ASK') {
                     $(".myclassName").removeClass('btn requestFreeSample');
                     $(".myclassName").addClass('btn requestFreeSample');
                 } else {
                     $(".myclassName").removeClass('btn requestFreeSample');
                     $(".myclassName").addClass('btn requestFreeSample');
                 }



             });


             $(".request_popup").click(function() {

                 
                $('input[type=text]').each(function() {
                     $(this).val('');
                     $(this).removeClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").hide();
                 });

                 $('input[type=email]').each(function() {
                     $(this).val('');
                     $(this).removeClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").hide();
                 });

                 var ctatype = $(this).attr("data-name");
                 var btnclass = $(this).attr("data-class");
                 var btnname = $(this).attr("data-btn");
                 var formType = $(this).attr("data-prop");
                 //    alert(formType);

                 if (formType == 'ASK') {
                     $(".buttonMyclass").removeClass('btn requestFreeSample');
                     $(".buttonMyclass").addClass('buttonMyclass btn requestFreeSample');
                 } else {
                     $(".buttonMyclass").removeClass('btn requestFreeSample');
                     $(".buttonMyclass").addClass('buttonMyclass btn requestFreeSample');
                 }
                 //  alert(ctatype);  alert(btnname);
                 $('.requestPopupTitle').html(ctatype);
                 $(".hdnType").val($(this).attr("data-prop"));

                 $(".requestFormButton").html(btnname);

             });

             $('#myTab li a').on('click', function(e) {
                 // $('#myTab li a').eq($(this).val()).tab('show');
                 $('html,body').animate({
                         scrollTop: $("header").offset().top
                     },
                     'slow');
             })
             // $(".search-btn").on("click",function(){

             // });


             $("#faq-tab1").on("click", function() {
                 $(".triggerfaq").trigger("click");

             });
             $("#MarketBytes-tab1").on("click", function() {
                 $(".triggerMarketbyte").trigger("click");
             });
             $("#summary-tab1").on("click", function() {
                 $(".triggerSummary").trigger("click");
             });
             $("#segmentation-tab1").on("click", function() {
                 $(".tiggerSegmentation").trigger("click");

             });
             $("#TOC-tab").on("click", function() {
                 $(".triggerToc").trigger("click");
             });

             var topScrollPosition = $(".PremiumReportInfo").offset().top;
             $(window).scroll(function() {
                 var a = $(window).scrollTop();
                 var b = $(window).scrollTop();
                 if (a >= topScrollPosition) {
                     $(".stickyHeader").addClass("showStickyheader");
                 } else {
                     $(".stickyHeader").removeClass("showStickyheader");
                 }


             });


             $("body").on("focus", ".emailId,.phNo,.name,.company, .message, .jobTitle", function() {
                 if ($(this).hasClass("border-green")) {
                     $(this).removeClass("border-red");
                     $(this).parent().find(".bi-info-circle").hide();
                 } else {
                     $(this).addClass("border-red");
                     $(this).parent().find(".bi-info-circle").show();
                 }
             });
             $("body").on("keyup", ".emailId,.phNo,.name,.company, .message, .jobTitle", function() {
                 if (!($(this).is(":invalid"))) {
                     $(this).removeClass("border-red");
                     $(this).addClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").show();
                     $(this).parent().find(".bi-info-circle").hide();
                 } else {
                     $(this).addClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").show();
                 }
             });

             $("table").addClass("table table-bordered");
         });


         function getFloatClick(value) {
             $(".myactiveFloatclass").removeClass("active");
             $("#" + value).addClass("active");
         }

        //Sticky Sample Form
        window.addEventListener("load", matchHeights);
        window.addEventListener("resize", matchHeights);

        function matchHeights() {
            const left = document.querySelector('.left-column');
            const right = document.querySelector('.right-side-section');
            if (left && right) {
                right.style.minHeight = left.offsetHeight + 'px';
            }
        }
     </script>
     <script type="text/javascript">
         function getEmailValidation(email, className) {

            var email = email.toLowerCase().trim();
             if ( email.includes('hotmail.com') || email.includes('gmail.com') || email.includes('yahoo.com') || email.includes('outlook.com') || email.includes('icloud.com') || email.includes('mail.com') || email.includes('gmx.com') || email.includes('zohomail.com') || email.includes('zohomail.in') || email.includes('inbox.com') || email.includes('zohomail.co.uk') || email.includes('aol.com') || email.includes('hotmail.fr') || email.includes('msn.com') || email.includes('yahoo.fr') || email.includes('yahoo.co.uk') || email.includes('yahoo.co.in') || email.includes('live.com') || email.includes('rediffmail.com') || email.includes('yandex.ru') || email.includes('ymail.com') || email.includes('mail.ru') || email.includes('hotmail.it') || email.includes('googlemail.com') || email.includes('yahoo.es') || email.includes('hotmail.es') || email.includes('yahoo.it') || email.includes('rocketmail.com') || email.includes("yahoo.ca") || email.includes("yahoo.in") || email.includes("yahoo.com.au") || email.includes("hotmail.de") || email.includes("yahoo.co.jp") || email.includes("yahoo.com.ar") || email.includes("yahoo.com.mx") || email.includes("yahoo.com.sg") || email.includes("spam.com") || email.includes("junk.com")) {
                 document.getElementsByClassName(className)[0].value = "";


                 $('.' + className).addClass("border-red");
                 $('.' + className).removeClass("border-green");
                 $('.' + className).parent().find(".bi-check-circle-fill").hide();
                 $('.' + className).parent().find(".bi-info-circle").show();
                 $('.' + className + 'Error').html('Please Enter Business Email');
             } else {

                 $('.' + className + 'Error').html('');
             }
         }
     </script>
     <script type="text/javascript">
         function checksubmit(phoneNumber) {

             var err = '';

             var allowChar = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 +_-()";
             var inputPhoneNumber = phoneNumber;
             var allCharValidate = true;
             var allNumbers = "";
             for (p = 0; p < inputPhoneNumber.length; p++) {
                 snchar = inputPhoneNumber.charAt(p);
                 for (k = 0; k < allowChar.length; k++)
                     if (snchar == allowChar.charAt(k))
                         break;
                 if (k == allowChar.length) {
                     allCharValidate = false;
                     break;
                 }
                 if (snchar != ",")
                     allNumbers += snchar;
             }

             if (allCharValidate) {
                 err += '';
                 var phonenovaluere = phoneNumber.replace(/\s/g, '');
                 $('.phNo').val(phonenovaluere);
                 $('.errorPhoneNo').html('');


             } else {
                 err += 'error';

                 $('.phNo').val('');

                 $('.errorPhoneNo').html('Invalid Phone: +1 123 456 7890');
                 $('.phNo').addClass("border-red");
                 $('.phNo').removeClass("border-green");
                 $('.phNo').parent().find(".bi-check-circle-fill").hide();
                 $('.phNo').parent().find(".bi-info-circle").show();

             }

         }
     </script>

     

     <script>
         $(document).ready(function() {

             var url = window.location.href;

             var index = url.indexOf("#");
             if (index !== -1) {
                 var hash = url.substring(index + 1);

                 switch (hash) {

                     case 'faq':
                         $(".triggerfaq").trigger("click");
                         parent.location.hash = ''
                         break;

                     case 'Companies':
                         $(".tiggerCompanies").trigger("click");
                         parent.location.hash = ''
                         break;
                 }
             }
         });

         $(document).ready(function() {
            $('a.toc-link').on('click', function(event) {
                var targetId = $(this).attr('href');

                // Check if the target exists
                if ($(targetId).length) {
                    // If not already on MarketBytes tab, switch to it first
                    // if (!$('#MarketBytes').hasClass('active')) {
                    //     $('#myTab a[href="#MarketBytes"]').tab('show');
                    // }

                    if (!$('#summary').hasClass('active')) {
                        $('#myTab a[href="#summary"]').tab('show');
                    }

                    // Small delay to allow tab to become visible, then scroll
                    setTimeout(function() {
                        var target = $(targetId);
                        if (target.length) {
                            $('html, body').animate({
                                scrollTop: target.offset().top - 80 // Adjust offset for fixed header if any
                            }, 500);
                        }
                    }, 300);  // 300ms delay to let Bootstrap finish tab transition
                }
            });
        });
     </script>
 
    <script>
        // Request Sample form
            function captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#captcha span").remove(); $("#captcha input").remove(); $("#captcha").append("<span id='code'>" + Code + "</span><input type='button' onclick='captchaCode();' aria-label='Generate Captcha Code'>"); $(".hdnCaptcha").val(Code); }
            $(function () {
                captchaCode(); $('.sampleForm').submit(function () {
                    var captchaVal = $("#code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });

            function validateForm(){
                var flag = true;

                var captcha = $(".txtCaptcha").val();
                var hdnCaptcha = $(".hdnCaptcha").val();
                $(".captchaError").val("");

                if(hdnCaptcha != captcha){
                    flag = false;
                    $(".captchaError").html("* Please Enter Valid Captcha");
                }

                return flag;
            }
            // Get Customization
            function gc_captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#gc_captcha span").remove(); $("#gc_captcha input").remove(); $("#gc_captcha").append("<span id='gc_code'>" + Code + "</span><input type='button' onclick='gc_captchaCode();' aria-label='Generate Captcha Code'>"); $(".gc_hdnCaptcha").val(Code); }
            $(function () {
                gc_captchaCode(); $('.gc_sampleForm').submit(function () {
                    var captchaVal = $("#gc_code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });

            function gc_validateForm(){
                var flag = true;
                var captcha = $(".gc_txtCaptcha").val();
                var hdnCaptcha = $(".gc_hdnCaptcha").val();
                $(".captchaError").val("");

                if(hdnCaptcha != captcha){
                    flag = false;
                    $(".captchaError").html("* Please Enter Valid Captcha");
                }

                return flag;
            }

             // Report Sample Popup
             function rs_captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#rs_captcha span").remove(); $("#rs_captcha input").remove(); $("#rs_captcha").append("<span id='gc_code'>" + Code + "</span><input type='button' onclick='rs_captchaCode();' aria-label='Generate Captcha Code'>"); $(".rs_hdnCaptcha").val(Code); }
            $(function () {
                rs_captchaCode(); $('.rs_sampleForm').submit(function () {
                    var captchaVal = $("#rs_code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });

            function rs_validateForm(){
                var flag = true;
                var captcha = $(".rs_txtCaptcha").val();
                var hdnCaptcha = $(".rs_hdnCaptcha").val();
                $(".captchaError").val("");

                if(hdnCaptcha != captcha){
                    flag = false;
                    $(".captchaError").html("* Please Enter Valid Captcha");
                }

                return flag;
            }

             // Custom Report Popup
             function cr_captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#cr_captcha span").remove(); $("#cr_captcha input").remove(); $("#cr_captcha").append("<span id='cr_code'>" + Code + "</span><input type='button' onclick='cr_captchaCode();' aria-label='Generate Captcha Code'>"); $(".cr_hdnCaptcha").val(Code); }
            $(function () {
                cr_captchaCode(); $('.cr_sampleForm').submit(function () {
                    var captchaVal = $("#cr_code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });

            function cr_validateForm(){
                var flag = true;
                var captcha = $(".cr_txtCaptcha").val();
                var hdnCaptcha = $(".cr_hdnCaptcha").val();
                console.log(captcha+" = "+hdnCaptcha);
                $(".captchaError").val("");

                if(hdnCaptcha != captcha){
                    flag = false;
                    $(".captchaError").html("* Please Enter Valid Captcha");
                }

                return flag;
            }

             // Research Methodology Popup
             function rm_captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#rm_captcha span").remove(); $("#rm_captcha input").remove(); $("#rm_captcha").append("<span id='rm_code'>" + Code + "</span><input type='button' onclick='rm_captchaCode();' aria-label='Generate Captcha Code'>"); $(".rm_hdnCaptcha").val(Code); }
            $(function () {
                rm_captchaCode(); $('.rm_sampleForm').submit(function () {
                    var captchaVal = $("#rm_code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });

            function rm_validateForm(){
                var flag = true;
                var captcha = $(".rm_txtCaptcha").val();
                var hdnCaptcha = $(".rm_hdnCaptcha").val();
                console.log(captcha+" = "+hdnCaptcha);
                $(".captchaError").val("");

                if(hdnCaptcha != captcha){
                    flag = false;
                    $(".captchaError").html("* Please Enter Valid Captcha");
                }

                return flag;
            }

            $(".requestform .form-control").on("blur .form-control focus", function() {
            if (this.value) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
           
        });
    </script>
     <script>
document.addEventListener("DOMContentLoaded", function() {
    var contactForm = document.querySelector(".call-to-action");
    var sidebar = document.querySelector(".right-side-section");
    var offsetTop = 2000; // point where we make it sticky
    var offsetBottom = 300; // point where we stop sticky (from bottom)
    var sidebarWidth = sidebar.offsetWidth;
    
    window.addEventListener("scroll", function() {
        var scrollY = window.scrollY;
        var documentHeight = document.body.scrollHeight;
        var windowHeight = window.innerHeight;
        var stopPoint = documentHeight - windowHeight - offsetBottom;
        
        if (scrollY >= offsetTop && scrollY <= stopPoint) {
            // Normal sticky behavior
            contactForm.classList.add("sticky-right-form");
            contactForm.classList.remove("absolute-bottom");
            contactForm.style.width = sidebarWidth + "px";
        } else if (scrollY > stopPoint) {
            // Stop sticky and position absolutely
            contactForm.classList.remove("sticky-right-form");
            contactForm.classList.add("absolute-bottom");
            contactForm.style.width = sidebarWidth + "px";
        } else {
            // Before sticky point - normal position
            contactForm.classList.remove("sticky-right-form");
            contactForm.classList.remove("absolute-bottom");
            contactForm.style.width = "auto";
        }
    });
});
</script>
<script>
  const tz = Intl.DateTimeFormat().resolvedOptions().timeZone;

  const europeanZones = [
    "Europe/London", "Europe/Paris", "Europe/Berlin", "Europe/Rome",
    "Europe/Madrid", "Europe/Amsterdam", "Europe/Brussels", "Europe/Vienna",
    "Europe/Prague", "Europe/Warsaw", "Europe/Bucharest", "Europe/Helsinki",
    "Europe/Athens", "Europe/Copenhagen", "Europe/Stockholm", "Europe/Oslo", "Europe/Dublin",
    "Africa/Cairo", "Africa/Lagos", "Africa/Nairobi", "Africa/Johannesburg",
    "Africa/Casablanca", "Africa/Accra", "Africa/Algiers", "Africa/Tunis",
    "Asia/Dubai", "Asia/Riyadh", "Asia/Tehran", "Asia/Baghdad",
    "Asia/Kuwait", "Asia/Qatar", "Asia/Bahrain", "Asia/Muscat",
    "Asia/Jerusalem", "Asia/Amman", "Asia/Beirut",
    "America/New_York", "America/Chicago", "America/Denver", "America/Los_Angeles",
    "America/Toronto", "America/Vancouver", "America/Phoenix", "America/Mexico_City",
    "America/Sao_Paulo", "America/Buenos_Aires", "America/Lima", "America/Bogota",
    "America/Santiago", "America/Montevideo", "America/Caracas"
  ];

  document.getElementById("region").innerHTML =
    europeanZones.includes(tz) ? '<div class="d-flex flex-row"><div class="d-flex"><div class="text-center py-1 w-50"><img alt="Manager-Global Business Development" title="Ritika Khandelwal" src="https://www.persistencemarketresearch.com/assets/images/team/ritika-khandelwal_02.webp" width="130" height="135"></div><div class="text-left ms-3 w-50"><p class="font15" style="padding-top: 16px;margin-bottom:13px;color: #3e57d4;"><strong>Ritika</strong> Khandelwal</p><p class="font12 mb-2">Manager- Global Business Development</p><div class="text-center"><a class="" title="Email To Ritika Khandelwal" href="mailto:sales@persistencemarketresearch.com "><img src="<?php echo ROOT_URL; ?>assets/icons/mail-icon.svg" alt="Email icon" width="28" height="28" class="mr-3 mt-2" ></a><a href="https://www.linkedin.com/in/ritika-khandelwal-4186ab110/" target="_blank" title="Ritika Khandelwal"><img src="<?php echo ROOT_URL; ?>assets/icons/lin-icon.svg" alt="Linkedin Profile" width="28" height="28" class="mr-2 mt-2" ></a></div></div></div></div>' : '<div class="d-flex flex-row"><div class="d-flex"><div class="text-center py-1 w-50"><img alt="Manager- Global Business Development" title="Rachana Bastwadkar" src="https://www.persistencemarketresearch.com/assets/images/team/rachana-bastwadkar_02.webp" width="130" height="135"></div><div class="text-left ms-3 w-50"><p class="font15" style="padding-top: 16px;margin-bottom:13px;color: #3e57d4;"><strong>Rachana</strong> B.</p><p class="font12 mb-2">Consultant- Strategy and Growth</p><div class="text-center"><a class="" title="Email To Rachana Bastwadkar" href="mailto:sales@persistencemarketresearch.com "><img src="<?php echo ROOT_URL; ?>assets/icons/mail-icon.svg" alt="Email icon" width="28" height="28" class="mr-3 mt-2" ></a><a href="https://www.linkedin.com/in/rachana-bastwadkar-a98556338/" target="_blank" title="Rachana Rachana"><img src="<?php echo ROOT_URL; ?>assets/icons/lin-icon.svg" alt="Linkedin Profile" width="28" height="28" class="mr-2 mt-2" ></a></div></div></div></div>';
</script>
     </body>

 </html>