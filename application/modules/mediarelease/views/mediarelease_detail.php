<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view("frontend/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-listing.css" rel="stylesheet" />
    <?php $this->load->view("frontend/header"); ?>

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
                        <a href="<?php echo WEBSITE_URL."press-releases"; ?>" title="Press Releases">
                            <span>Press Release</span>
                        </a>
                    </li>
                    <li>
                        <span><?php echo ucwords(str_replace("-"," ",$get_mediarelease->url)); ?></span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="pressRelDetailsBanner py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h1 class="mb-2 secHeadingLeft">
                            <?php echo $get_mediarelease->name; ?>
                        </h1>
                        <p>
                            Published On : <?php echo date("j M Y",$get_mediarelease->creation); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgGrey prDetailContent">
            <div class="container">
                <div class="row">
                   <div class="col-md-8 col-sm-12">
                       <div class="bg-white px-5 py-4">
                           <?php
                            $image_url = "";
                            echo $get_mediarelease->full_desc;
                            preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $get_mediarelease->full_desc, $url);
                            if($image_url == "")
                                $image_url = isset($url[1][0])?$url[1][0]:"";

                           if(isset($get_mediarelease->rep_name) && $get_mediarelease->rep_name!=''){
                           ?>
                           <div class="" style="border-radius: 10px;">
                               <div class="row">
                                   <div class="col-sm-12 col-xs-12">
                                       <p class="lead secHeadingLeft">
                                           <?php echo ucwords(str_replace("-"," ",$get_mediarelease->rep_url)); ?>
                                       </p>
                                       <p>
                                           <?php echo $get_mediarelease->rep_name; ?>
                                       </p>
                                       <div class="mt-4">
                                           <a href="<?php echo WEBSITE_URL."samples/".$get_mediarelease->rep_id; ?>" class="btn mt-4" title="Request Sample" target="_blank">
                                               Request Sample
                                           </a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <?php
                           }
                           ?>
                       </div>
                   </div>
                    <div class="col-md-4 col-sm-12 prrightSide">
                        <?php
                        if(isset($get_mediarelease->rep_name) && $get_mediarelease->rep_name!=''){
                        ?>
                        <div class="pressRelDetailsBanner text-center p-5 mb-3">
                            <p class="secHeading text-center">
                                <?php echo ucwords(str_replace("-"," ",$get_mediarelease->rep_url)); ?></p>
                            <p>
                                <?php echo $get_mediarelease->rep_name; ?>
                            </p>
                            <a href="<?php echo WEBSITE_URL."market-research/".$get_mediarelease->rep_url.'.asp'; ?>" style="background-color: #282C7D;color:#fff;font-weight:600;border-radius:5px;" class="btn mt-4" title="View Report" target="_blank">
                                View Report
                            </a>
                        </div>
                        <?php
                        }

                        if(!empty($latest_reports)){
                        ?>
                        <div class="bg-white resReportList">
                            <p class="secHeading text-center">
                                Latest Reports
                            </p>
                            <ul class="list-unstyled">

                                <?php
                                
                                    foreach($latest_reports as $latest_report){
                                    ?>
                                    <li>
                                        <h4>
                                            <a href="<?php echo WEBSITE_URL."market-research/".$latest_report['rep_url'].".asp"; ?>"  title="<?php echo $latest_report['rep_name']; ?>">
                                                <?php echo $latest_report['rep_name']; ?>
                                            </a>
                                        </h4>
                                    </li>
                                    <?php
                                    }
                                
                                ?>
                                
                            </ul>
                        </div>

                    <?php } ?>

                        <div class="Customization-box right-boxes p-3 pb-5 mb-3 mt-3 text-center bg-white">
                             <p class="font18 text-blue-new py-3 m-0 bold500 text-center">Research Methodology</p>
                             <p class="font16 bold400">Data-Driven Research Methodology for Accurate Insights
                             </p>
                             <div class="btn-container">
                                 <a href="<?php echo WEBSITE_URL."research-methodology.asp"; ?>" style="background-color: #282C7D;" class="btn btnOutline" data-name="Get Research Methodology"  title="Get Research Methodology" data-class="btn-green">
                                 Read More</a>
                             </div>
                        </div>
                    </div>
                 </div>
            </div>
        </section>
        
    </main>

    <?php $this->load->view("frontend/footer"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/static.css" rel="stylesheet" />

   
    <link href="<?php echo WEBSITE_URL; ?>assets/css/media.css" rel="stylesheet" />

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
            "headline": "<?php echo $get_mediarelease->name; ?>",
            "image": [
                "<?php echo $image_url; ?>"
            ],
            "datePublished": "<?php echo date('M d, Y',$get_mediarelease->creation); ?>",
            "dateModified": "<?php echo date('M d, Y',$get_mediarelease->creation); ?>",
            "author": {
                "@type": "Person",
                "name": "Team PMR"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Persistence Market Research",
                "logo": {
                    "@type": "ImageObject",
                    "url": "<?php echo WEBSITE_URL.'themes/image/pmr-logo.svg'; ?>"
                }
            },
            "description": "<?php echo substr(strip_tags($get_mediarelease->full_desc),0,160); ?>"
        }
    </script>

</body>
</html>