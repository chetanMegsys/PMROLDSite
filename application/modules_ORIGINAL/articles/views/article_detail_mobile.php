<!DOCTYPE html>
<html>
<head>

	<?php $this->load->view("partials/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static-mobile.css" rel="stylesheet" />

    <?php $this->load->view("partials/header_mobile"); ?>

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
                        <a href="<?php echo WEBSITE_URL."articles.asp"; ?>" title="Articles">
                            <span>Articles</span>
                        </a>
                    </li>
                    <li>
                        <h1><?php echo $keyword; ?></h1>
                    </li>
                </ol>
            </div>
        </div>
        <section class="pressRelDetailsBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-xs-12 text-white">
                        <h2 class="mb-4 secHeadingLeft">
                            <?php echo $get_articles->name; ?>
                        </h2>
                        <p>
                            Published On : <?php echo date("M d, Y",$get_articles->creation); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgGrey prDetailContent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="bg-white px-5 py-4">
                            <?php 
                            $image_url = "";
                            echo $get_articles->full_desc; 
                            preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $get_articles->full_desc, $url);
                            if($image_url == "")
                                $image_url = isset($url[1][0])?$url[1][0]:"";
                            ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 prrightSide">
                        <?php if($get_articles->rep_url!=''){ ?>
                        <div class="bgLightGreen text-center p-5 text-white">
                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-earmark-ruled mb-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5 10H3V9h10v1H6v2h7v1H6v2H5v-2H3v-1h2v-2z" />
                                <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                            </svg>
                            <p class="mt-3 mb-4 viewReportText">
                                <?php echo $get_articles->rep_name; ?>
                            </p>
                            <a href="<?php echo WEBSITE_URL."market-research/".$get_articles->rep_url.".asp"; ?>" class="btn btnOutline mt-4" title="View Reports">
                                View Report
                            </a>
                        </div>
                        <?php } ?>
                        <div class="bg-white mt-5 resReportList">
                            <p class="secHeading text-center">
                                Latest Reports
                            </p>
                            <ul class="list-unstyled">
                                <?php
                                if(!empty($latest_reports)){
                                    foreach($latest_reports as $latest_report){
                                    ?>
                                    <li>
                                        <h4>
                                            <a href="<?php echo WEBSITE_URL."market-research/".$latest_report['rep_url'].".asp"; ?>" title="<?php echo $latest_report['rep_name']; ?>">
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
                </div>
            </div>
        </section>
        <?php if($get_articles->rep_url!=''){ ?>
        <section class="getInTouchSec">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-12 col-sm-12 text-white bgLightGreen getInTouchBox text-center">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <p class="h2 mt-0"><?php echo ucwords(str_replace("-"," ",$get_articles->rep_url)); ?></p>
                                <p class="mb-0">Research Designed to Meet your Specific Needs</p>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="contactBtn">
                                    <a class="btn btnOutline" href="<?php echo WEBSITE_URL."request-customization/".$get_articles->rep_id; ?>" title="conatct Us">
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
    
    <?php $this->load->view("partials/footer_mobile"); ?>

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