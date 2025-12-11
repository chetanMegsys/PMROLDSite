<!DOCTYPE html>
<html>
<head>
	
	<?php $this->load->view("partials/meta_links"); ?>
	<link href="<?php echo WEBSITE_URL; ?>assets/css/theme-listing-mobile.css" rel="stylesheet" />
	<?php $this->load->view("partials/header_mobile"); ?>

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
                    <div class="col-sm-12 text-white text-center">
                        <h1 class="text-center mb-4 secHeading">Recent Development In Top Sectors</h1>
                        <p>Take Secured “Baby Steps” with PMR’s facts and figures regarding “Impact of Covid-19” on the market in question</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="recDevlopmentSec">
            <div class="container">
                <div class="row mb-5">
                    <?php
	                if(!empty($recent_development_in_top_sectors)){
	                    $counter = 1;
	                    foreach($recent_development_in_top_sectors as $top_sectors){

	                        $reports = get_multiple_reports($top_sectors->id);

	                        if($counter==1){
	                        ?>
		                    <div class="col-md-12 py-5">
		                        <div class="topRecDevBox bgGrey p-4">
		                            <div class="imgRecDevBox">
		                                <img class="img-responsive" width="120" src="<?php echo WEBSITE_URL; ?>assets/images/news/<?php echo $top_sectors->image; ?>" alt="<?php echo $top_sectors->heading; ?>" title="<?php echo $top_sectors->heading; ?>" />
		                            </div>
		                            <h2 class="mt-5 pt-4 text-center">
		                                <?php echo $top_sectors->heading; ?>
		                            </h2>
		                        </div>

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
		                    <?php
	                        $counter = 2;
	                        }else{
	                        ?>
		                    <div class="col-md-12 py-5">
		                        <div class="topRecDevBox bgGrey p-4">
		                            <div class="imgRecDevBox">
		                                <img class="img-responsive" width="120" src="<?php echo WEBSITE_URL; ?>assets/images/news/<?php echo $top_sectors->image; ?>" alt="<?php echo $top_sectors->heading; ?>" title="<?php echo $top_sectors->heading; ?>" />
		                            </div>
		                            <h2 class="mt-5 pt-4 text-center">
		                                <?php echo $top_sectors->heading; ?>
		                            </h2>
		                        </div>
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
		                    <?php
	                    	$counter = 1;
	                    }
	                }
	            }
	            ?>	
                    
                </div>
            </div>
        </section>
    </main>
    <?php $this->load->view("partials/footer_mobile"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/listing-mobile.css" rel="stylesheet" />
</body>
</html>