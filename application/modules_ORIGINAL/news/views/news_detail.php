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
                        <a href="<?php echo WEBSITE_URL."news"; ?>" title="News">
                            <span>News</span>
                        </a>
                    </li>
                    <li>
                        <h1><?php echo $news_data->news_title; ?></h1>
                    </li>
                </ol>
            </div>
        </div>
        <section class="newsDetailsBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 text-white text-center">
                        <h2 class="mb-4 secHeading"><?php echo $news_data->news_title; ?></h2>
                        <p class="newsPubslisDate">
                            <span class="pub-date">Date : <?php echo date("M d, Y",strtotime($news_data->publish_date)); ?></span>
                            <?php if(isset($news_data->author_name) && $news_data->author_name!=""){ ?>
                            <span class="pub-date">Author : <?php echo $news_data->author_name; ?></span> 
                            <?php } if(isset($news_data->cat_name) && $news_data->cat_name!=""){ ?>
                            <span class="pub-date">Category : <?php echo $news_data->cat_name; ?></span>
                            <?php } ?>
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
                           <p><?php 
                                $image_url = "";
                                echo $news_data->short_description;
                                preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $news_data->short_description, $url);
                                if($image_url == "")
                                    $image_url = isset($url[1][0])?$url[1][0]:""; 
                            ?></p>
                           <p><?php
                                echo $news_data->top_description; 
                                preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $news_data->top_description, $url);
                                if($image_url == "")
                                    $image_url = isset($url[1][0])?$url[1][0]:""; 
                            ?></p>

                           <blockquote><?php 
                                echo $news_data->middle_description; 
                                preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $news_data->middle_description, $url);
                                if($image_url == "")
                                    $image_url = isset($url[1][0])?$url[1][0]:"";
                            ?></blockquote>
                           <p><?php 
                                echo $news_data->bottom_description; 
                                preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $news_data->bottom_description, $url);
                                if($image_url == "")
                                    $image_url = isset($url[1][0])?$url[1][0]:"";
                            ?></p>
                       </div>
                   </div>
                    <div class="col-md-4 col-sm-12 prrightSide">
                        <?php 
                        if($news_data->rep_name!=''){ 
                        ?>
                        <div class="mediaContact text-center mb-5 p-5 text-white">
                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cursor mb-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z" />
                            </svg>
                            <p class="lead mt-3 mb-4">
                                <?php echo $news_data->rep_name; ?>
                            </p>
                            <a href="<?php echo WEBSITE_URL."samples/".$news_data->rep_id; ?>" class="btn btnOutline mt-4" title="Request Sample">
                                Request Sample
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="bg-white resReportList">
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
        
    </main>
    <?php $this->load->view("partials/footer"); ?>
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
            "headline": "<?php echo $news_data->news_title; ?>",
            "image": [
                "<?php echo $image_url; ?>"
            ],
            "datePublished": "<?php echo date('M d, Y',strtotime($news_data->publish_date)); ?>",
            "dateModified": "<?php echo date('M d, Y',strtotime($news_data->publish_date)); ?>",
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
            "description": "<?php echo substr(strip_tags($news_data->short_description),0,160); ?>"
        }
    </script>

</body>
</html>