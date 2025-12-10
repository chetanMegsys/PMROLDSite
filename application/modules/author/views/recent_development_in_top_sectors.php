<!DOCTYPE html>
<html>
<head>
    
    <?php $this->load->view("partials/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-listing.css" rel="stylesheet" />
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
                        <span>Recent Development In Top Sectors</span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="listingBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 col-md-offset-2 text-white text-center">
                        <h1 class="mb-4 secHeading">Recent Development In Top Sectors</h1>
                        <p>Take Secured “Baby Steps” with Persistence Market Research’s facts and figures regarding “Impact of Covid-19” on the market in question</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="recDevlopmentSec">
            <div class="container">
                <?php
                if(!empty($recent_development_in_top_sectors)){
                    $counter = 1;
                    foreach($recent_development_in_top_sectors as $top_sectors){

                        $reports = get_multiple_reports($top_sectors->id);

                        if($counter==1){
                        ?>
                        <div class="row mb-5 recDevlEvenRow">
                            <div class="col-md-12 bgGrey py-5">
                                <div class="row">
                                    <div class="col-md-3 col-lg-2 col-sm-3 col-xs-12">
                                        <div class="imgRecDevBox">
                                            <img class="img-responsive"  src="<?php echo WEBSITE_URL; ?>assets/images/news/<?php echo $top_sectors->image; ?>"  width="157" height="157" alt="<?php echo $top_sectors->heading; ?>" title="<?php echo $top_sectors->heading; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-10 col-sm-9 col-xs-12">
                                        <h2 class="mt-5"><?php echo $top_sectors->heading; ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-3 col-lg-10 col-lg-offset-2">
                                <?php
                                if(!empty($reports)){
                                    foreach($reports as $rep){
                                        ?>
                                        <div class="recDevlopmentInfo py-4">
                                            <h3>
                                                <a href="<?php echo WEBSITE_URL."market-research/".$rep['rep_url'].".asp"; ?>" title="<?php echo $rep['rep_name']; ?>">
                                                    <?php echo $rep['rep_keyword']; ?>
                                                </a>
                                            </h3>
                                            <p class="dateNcat">
                                                <span class="mr-4">Date : <?php echo date("M d, Y",strtotime($rep['rep_pub_date'])); ?></span>  <span>Category: <?php echo $rep['cat_name']; ?></span>
                                            </p>
                                            <p><?php echo $rep['meta_desc']; ?></p>
                                            <div class="mb-4">
                                                <a class="readLink" href="<?php echo WEBSITE_URL."market-research/".$rep['rep_url'].".asp"; ?>" title="Read More">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        $counter = 2;
                        }else{
                        ?>
                        <div class="row recDevlOddRow mb-5">
                            <div class="col-md-12 bgGrey py-5">
                                <div class="row">
                                    <div class="col-md-3 col-lg-2 col-sm-3 col-xs-12 col-lg-push-10 col-sm-push-9">
                                        <div class="imgRecDevBox">
                                            <img class="img-responsive"  src="<?php echo WEBSITE_URL; ?>assets/images/news/<?php echo $top_sectors->image; ?>" width="157" height="157" alt="<?php echo ucwords(str_replace("-"," ",$top_sectors->news_url)); ?>" title="<?php echo ucwords(str_replace("-"," ",$top_sectors->news_url)); ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-10 col-sm-9 col-xs-12 col-sm-pull-3 col-lg-pull-2">
                                        <h2 class="mt-5 pl-4">
                                            <?php echo $top_sectors->heading; ?>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-lg-10 col-xs-12 col-sm-12">
                                <?php
                                if(!empty($reports)){
                                    foreach($reports as $rep){
                                        ?>
                                        <div class="recDevlopmentInfo py-4">
                                            <h3>
                                                <a href="<?php echo WEBSITE_URL."market-research/".$rep['rep_url'].".asp"; ?>" title="<?php echo $rep['rep_name']; ?>">
                                                    <?php echo $rep['rep_keyword']; ?>
                                                </a>
                                            </h3>
                                            <p class="dateNcat">
                                                <span class="mr-4">Date : <?php echo date("M d, Y",strtotime($rep['rep_pub_date'])); ?></span>  <span>Category: <?php echo $rep['cat_name']; ?></span>
                                            </p>
                                            <p><?php echo $rep['meta_desc']; ?></p>
                                            <div class="mb-4">
                                                <a class="readLink" href="<?php echo WEBSITE_URL."market-research/".$rep['rep_url'].".asp"; ?>" title="Read More">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    $counter = 1;
                    }
                }
            }
            ?>
            </div>
        </section>
    </main>
    <?php $this->load->view("partials/footer"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/listing.css" rel="stylesheet" />
</body>
</html>