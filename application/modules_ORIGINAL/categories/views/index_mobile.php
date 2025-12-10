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
                        <span>Market Research Report</span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="nextGenBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 col-md-offset-2 text-white text-center">
                        <h1 class="mb-4 secHeading">Market Research Report</h1>
                        <p> Rummage your Market in question with Persistence Market Research’s “Next Gen Expertise”</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <p class="text-center borderBlueCenter h3">Next-Gen Sectors</p>
                    </div>
                </div>
                <?php
                if(!empty($categories)){
                	$counter = 1;
                	foreach($categories as $category){
                		if($counter == 1){
                			$counter = 2;
			                ?>
			                <div class="row mt-5">
			                    <div class="col-md-12 col-sm-12 greenBox catBox py-4">
			                        <span class="nextGenIcon cat-<?php echo $category['category_id']; ?>"></span>
			                        <h2 class="mt-0">
			                            <a href="<?php echo WEBSITE_URL."market-research-report/".$category['seo_pagename'].".asp"; ?>" title="<?php echo $category['cat_name']; ?>">
			                                <?php echo $category['cat_name']; ?>
			                            </a>
			                        </h2>
			                        <p>
			                            <?php $cat_home_descr = explode("\n",$category['cat_home_descr']); echo substr($cat_home_descr[0],0,650); ?>
			                        </p>
			                        <div class="my-2">
		                                <a class="btn btnBlue" href="<?php echo WEBSITE_URL."market-research-report/".$category['seo_pagename'].".asp"; ?>" title="<?php echo ucwords(str_replace("-"," ",$category['rep_url'])); ?>" class="" title="View All Reports">
		                                    View All Reports
		                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
		                                    </svg>
		                                </a>
		                            </div>
			                    </div>
			                    <div class="col-md-12 col-sm-12 reportListing bgGrey py-4">
			                        <div class="contentBox px-0">
			                            <h3 class="mt-0">
			                                <a class="listTitle secHeadingLeft borderBlue" href="<?php echo WEBSITE_URL."market-research/".$category['rep_url'].".asp"; ?>" title="<?php echo ucwords(str_replace("-"," ",$category['rep_url'])); ?>"><?php echo ucwords(str_replace("-"," ",$category['rep_url'])); ?></a>
			                            </h3>
			                            <p class="mt-4"><?php echo $category['rep_name']; ?></p>
			                            <a href="<?php echo WEBSITE_URL."market-research/".$category['rep_url'].".asp"; ?>" class="btn btnPrimary" title="Read More">
                                            Read More
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                            </svg>
                                        </a>
			                        </div>
			                    </div>
			                </div>
			                <?php
			            }else{
			            	$counter = 1;
			                ?>
			                <div class="row mt-5">
			                    <div class="col-md-12 col-sm-12 brownBox catBox py-4">
			                        <span class="nextGenIcon cat-<?php echo $category['category_id']; ?>"></span>
			                        <h2 class="mt-0">
			                            <a href="<?php echo WEBSITE_URL."market-research-report/".$category['seo_pagename'].".asp"; ?>" title="<?php echo $category['cat_name']; ?>">
			                                <?php echo $category['cat_name']; ?>
			                            </a>
			                        </h2>
			                        <p>
			                            <?php $cat_home_descr = explode("\n",$category['cat_home_descr']); echo substr($cat_home_descr[0],0,650); ?>
			                        </p>
			                        <div class="my-2">
		                                <a class="btn btnBlue" href="<?php echo WEBSITE_URL."market-research-report/".$category['seo_pagename'].".asp"; ?>" title="<?php echo ucwords(str_replace("-"," ",$category['rep_url'])); ?>" class="" title="View All Reports">
		                                    View All Reports
		                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
		                                    </svg>
		                                </a>
		                            </div>
			                    </div>
			                    <div class="col-md-12 col-sm-12 reportListing bgGrey py-4">
			                        <div class="contentBox px-0">
			                            <h3 class="mt-0">
			                                <a class="listTitle secHeadingLeft borderBlue" href="<?php echo WEBSITE_URL."market-research/".$category['rep_url'].".asp"; ?>" title="<?php echo ucwords(str_replace("-"," ",$category['rep_url'])); ?>"><?php echo ucwords(str_replace("-"," ",$category['rep_url'])); ?></a>
			                            </h3>
			                            <p class="mt-4"><?php echo $category['rep_name']; ?></p>
			                            <a href="<?php echo WEBSITE_URL."market-research/".$category['rep_url'].".asp"; ?>" class="btn btnPrimary" title="Read More">
                                            Read More
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                            </svg>
                                        </a>
			                        </div>
			                    </div>
			                </div>
                			<?php
                		}
                	}
                }	
                ?>
            </div>
        </section>
    </main>
     
    <?php $this->load->view("partials/footer_mobile"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/listing-mobile.css" rel="stylesheet" />

</body>
</html>