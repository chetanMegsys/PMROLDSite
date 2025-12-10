<!DOCTYPE html>
<html>
<head>

	<?php // $this->load->view("partials/meta_links"); ?>
    <?php $this->load->view("frontend/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static-mobile.css" rel="stylesheet" />

    <?php // $this->load->view("partials/header_mobile"); ?>
    <?php $this->load->view("frontend/header_mobile"); ?>

    <?php $keyword = ucwords(str_replace("-"," ",$get_articles->url)); ?>

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
                        <a href="<?php echo WEBSITE_URL."market-research.asp"; ?>" title="Market Research">
                            <span>Market Research</span>
                        </a>
                    </li>
                    <li>
                       <?php echo $get_authors->author_name; ?>
                    </li>
                </ol>
            </div>
        </div>
        <section class="pressRelDetailsBanner">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12 col-xs-12">
                        <h1 class="mb-2 secHeadingLeft">
                            <?php echo $get_authors->author_name; ?>
                        </h1>
                        <p><?php echo $get_authors->author_experts; ?></p>
                        <!-- <p>
                            Published On : <?php //echo date("M d, Y",$get_authors->creation); ?>
                        </p> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="bgGrey prDetailContent">
            <div class="container">
                <div class="row">
                   <div class="col-md-8 col-sm-12">
                       <div class="bg-white px-4 py-4">
                           <?php 
                            $image_url = "";
                           ?>
                           <div class="row">
                                <div class="col-md-3 col-sm-3 mb-4">
                                    <img src="<?php echo ROOT_URL.'assets/images/author/'.$get_authors->author_image;?>" width="150" height="150" alt="<?php echo $get_authors->author_name;?>">
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <h2 class="mb-2 secHeadingLeft">
                                        <?php echo $get_authors->author_name; ?>
                                    </h2>
                                    <p><?php echo $get_authors->author_experts; ?></p>
                                    <style>
                                        .social-icons {
                                            list-style: none;
                                            padding-left: 0;
                                        }
                                        .social-icons li a svg{
                                            fill: #282C7D;
                                        }
                                    </style>
                                    <!-- <ul class="social-icons">
                                        <li>
                                            <a href="#" title="Linkedin">
                                            <svg class="linkedin-icon" height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310" xml:space="preserve"><path d="M72.16 99.73H9.927a5 5 0 0 0-5 5v199.928a5 5 0 0 0 5 5H72.16a5 5 0 0 0 5-5V104.73a5 5 0 0 0-5-5zM41.066.341C18.422.341 0 18.743 0 41.362 0 63.991 18.422 82.4 41.066 82.4c22.626 0 41.033-18.41 41.033-41.038C82.1 18.743 63.692.341 41.066.341zM230.454 94.761c-24.995 0-43.472 10.745-54.679 22.954V104.73a5 5 0 0 0-5-5h-59.599a5 5 0 0 0-5 5v199.928a5 5 0 0 0 5 5h62.097a5 5 0 0 0 5-5V205.74c0-33.333 9.054-46.319 32.29-46.319 25.306 0 27.317 20.818 27.317 48.034v97.204a5 5 0 0 0 5 5H305a5 5 0 0 0 5-5V194.995c0-49.565-9.451-100.234-79.546-100.234z"/></svg>
                                            </a>
                                        </li>
                                    </ul> -->
                                </div>
                           </div>
                           <p>
                            <?php echo $get_authors->author_bio;  ?>
                           </p>
                       </div>
                       <h2 class=" mt-3">
                            Latest Reports
                        </h2>
                       <div class="bg-white resReportList">
                            
                            <ul class="list-unstyled">

                                <?php
                                if(!empty($latest_reports)){
                                    foreach($latest_reports as $latest_report){
                                    ?>
                                    <li>
                                        <h4>
                                            <a href="<?php echo WEBSITE_URL."market-research/".$latest_report['rep_url'].".asp"; ?>" title="<?php echo $latest_report['rep_name']; ?>" class="pmr-report-title">
                                                <?php echo $latest_report['rep_name']; ?>
                                            </a>
                                            
                                        </h4>
                                    </li>
                                    <?php
                                    }
                                }
                                ?>
                                
                            </ul>
                        </div>
                   </div>
                    <div class="col-md-4 col-sm-12 prrightSide">
                        <div class="Customization-box right-boxes p-3 pb-5 mb-4 mt-0 text-center bg-white ">
                             <p class="font18 text-blue-new py-3 m-0 bold500 text-center">Research Methodology</p>
                             <p class="font16 bold400">Data-Driven Research Methodology for Accurate Insights
                             </p>
                             <div class="btn-container">
                                 <a href="<?php echo WEBSITE_URL."research-methodology.asp"; ?>" class="btn btnOutline text-dark bg-brown" data-name="Get Research Methodology"  title="Get Research Methodology" data-class="btn-green">
                                 Read More</a>
                             </div>
                        </div>
                       
                        <div class="PremiumReportInfo Our-clients right-boxes pb-4 pt-0 mt-5 text-center">
                             <h2 class="font18 text-blue-new py-3 m-0 bold400 text-center">Our Media Trust</h2>
                             <a href="<?php echo ROOT_URL; ?>media-citations.asp">
                                <img src="<?php echo ROOT_URL; ?>themes/image/pmr-media-citations-logos.webp" loading="lazy" title="PMR Media Trust" width="330px" height="184px" alt="PMR Media Citations">
                             </a>
                        </div>
                        
                    </div>
                 </div>
            </div>
        </section>
        <?php if($get_authors->rep_url!=''){ ?>
        <section class="getInTouchSec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 text-white bgLightGreen getInTouchBox">
                        <div class="row">
                            <div class="col-md-6 col-sm-8 col-xs-12">
                                <p class="h2 mt-0"><?php echo ucwords(str_replace("-"," ",$get_authors->rep_url)); ?></p>
                                <p class="mb-0">Research Designed to Meet your Specific Needs</p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-12">
                                <div class="py-4">
                                    <a class="btn btnOutline" href="<?php echo WEBSITE_URL."request-customization/".$get_authors->rep_id; ?>" title="conatct Us">
                                        Request Customization
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
    </main>
    
    <?php // $this->load->view("partials/footer_mobile"); ?>
    <?php $this->load->view("frontend/footer_mobile"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/media-mobile.css" rel="stylesheet" />

    <?php
    if($image_url==""){
        $image_url = WEBSITE_URL."assets/images/persistence-market-research-report.jpg";
    }
    $schema_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "<?php echo $schema_url; ?>"
            },
            "headline": "<?php echo $get_articles->name; ?>",
            "image": [
                "<?php echo $image_url; ?>"
            ],
            "datePublished": "<?php echo date('M d, Y',$get_articles->creation); ?>",
            "dateModified": "<?php echo date('M d, Y',$get_articles->creation); ?>",
            "author": {
                "@type": "Person",
                "name": "Team PMR"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Persistence Market Research",
                "logo": {
                    "@type": "ImageObject",
                    "url": "<?php echo WEBSITE_URL.'assets/images/pmr-logo.png'; ?>"
                }
            },
            "description": "<?php echo substr(strip_tags($get_articles->full_desc),0,160); ?>"
        }
    </script>

</body>
</html>