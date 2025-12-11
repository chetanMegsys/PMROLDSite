<?php
    $search_text = $_GET['query'];
?>
<!DOCTYPE html>
<html>
<head>
    
    <?php $this->load->view("frontend/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-listing-mobile.css" rel="stylesheet" />

    <?php $this->load->view("frontend/header_mobile"); ?>

    <main role="main">
        <div class="breadCrumbSection">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent p-0 my-0">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo WEBSITE_URL; ?>" class="text-black" title="Persistence Market Report">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item" class="text-black" aria-current="page">
                                    <span><?php echo "Search Result For - ".$search_text; ?></span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="listingBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 col-md-offset-2">
                        <h1 class="text-center mb-0 secHeading"><?php echo "Search Result For - ".$search_text; ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="reportListSec pt-0">
            <div class="container">
                <div class="row">
                	<?php  
                    if($total_records > 0){
                        ?>
                    	<div class="col-xs-12 col-lg-10 col-lg-offset-1 reportListBox">
                        <div class="reportListContainer">
                    	<?php
                            if(!empty($reports)){
                                foreach($reports as $report){
                                    /*$keyword = ucwords(str_replace("-", " ", $report['rep_url']));*/
                                    $report_id_arr = $report['rep_id'];
                                ?>
		                        <div class="row reportListing">
		                            <!-- <div class="col-xs-12 col-md-3 col-sm-4">
		                                <div class="iconBox text-center">
		                                    <?php if(isset($report['rep_type']) && $report['rep_type']=='M'){
                                                ?><img src="<?php echo WEBSITE_URL; ?>assets/images/upcoming-report-cover.jpg" alt="<?php echo $report['rep_keyword']; ?>" title="<?php echo $report['rep_keyword']; ?>" /><?php
                                            }else{
                                                ?><img src="<?php echo WEBSITE_URL; ?>assets/images/publish-report-cover.jpg" alt="<?php echo $report['rep_keyword']; ?>" title="<?php echo $report['rep_keyword']; ?>" /><?php
                                            } ?>
		                                    <div class="mt-4 repDate">
		                                        <?php if($report['rep_type']=='N'){ ?>
                                                    <span><?php echo date("M Y", strtotime($report['rep_pub_date'])); ?></span>
                                                <?php }else{ ?>
                                                    <span><?php echo "Ongoing"; ?></span>
                                                    <span>|</span>
                                                    <span><?php echo "TOC Available"; ?></span>
                                                <?php } ?>
		                                    </div>
		                                </div>
		                            </div> -->
		                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
		                                <div class="contentBox py-0">
		                                    <h3 class="mt-0"><a class="listTitle secHeadingLeft" href="<?php echo WEBSITE_URL."market-research/".$report['rep_url'].".asp"; ?>" title="<?php echo $report['rep_keyword']; ?>"><?php echo $report['rep_keyword']; ?></a></h3>
		                                    <p class="mt-2"><?php echo $report['rep_name']; ?></p>
		                                   <!--  <div class="actionBtn">
		                                        <a href="<?php echo WEBSITE_URL."market-research/".$report['rep_url'].".asp"; ?>" class="btn btnPrimary" title="Read More">
		                                            Read More
		                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
		                                            </svg>
		                                        </a>
		                                        
                                                <?php if($report['rep_type']['raw']=='N'){ ?>
                                                    <a href="<?php echo WEBSITE_URL; ?>samples/<?php echo $report_id_arr; ?>" class="btn btnGreen" title="Request Sample">Request Sample</a>
                                                <?php }else{ ?>
                                                    <a href="<?php echo WEBSITE_URL; ?>toc/<?php echo $report_id_arr; ?>" class="btn btnGreen" title="Request TOC">Request TOC</a>
                                                <?php } ?>
		                                    </div> -->
		                                </div>
		                            </div>
		                        </div>
                        		<?php
                                }
                            }
                            ?>
                            </div>
	                        <?php
	                    }else{
	                        echo '<div class="col-lg-12 mt-4"><p class="text-center"><b>No Reports Found.</b></p></div>';
	                    }
                    	?>
                    </div>
                </div>
            </div>
        </section>
        <section class="keyBenifitSec text-center pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="secHeading mb-4">The Persistence Market Research Benefits</h2>
                    </div>
                    <div class="col-md-12 col-lg-12 keyBox">
                        <div class="keyBoxTitle">
                            <span class="keyIcon"></span>
                            <h4>Precision and Quality</h4>
                        </div>
                        <p>
                            Precision drives the quality of reports offered by PMR.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-12 keyBox">
                        <div class="keyBoxTitle">
                            <span class="keyIcon"></span>
                            <h4>Customer Satisfaction</h4>
                        </div>

                        <p>
                            We are committed to abide by our businesses’ inquisitiveness by providing best-in-line, customized solutions.
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-12 keyBox">
                        <div class="keyBoxTitle">
                            <span class="keyIcon"></span>
                            <h4>360-degree Analysis</h4>
                        </div>
                        <p>
                            An eagle eye-view of market intelligence is provided by our analysts/consultants
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php $this->load->view("frontend/footer_mobile"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/listing-mobile.css" rel="stylesheet" />

</body>
</html>