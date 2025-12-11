<!DOCTYPE html>
<html>
<head>

    <?php //$this->load->view("partials/meta_links"); ?>
    <?php $this->load->view("frontend/meta_links_reports"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-listing.css" rel="stylesheet" />
    <?php //$this->load->view("partials/header"); ?>
    <?php $this->load->view("frontend/header_report"); ?>

	<main role="main">
        <div class="breadCrumb mb-0">
            <div class="container">
                <ol class="list-inline mb-0">
                    <li>
                        <a href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
                            <span>Home</span>
                        </a>
                    </li>
                    <?php
                    if(empty($categories)){
                        ?>
                        <li>
                            <a href="<?php echo WEBSITE_URL; ?>market-research-report" title="Next-Gen Sectors">
                                <span>Market Research Report</span>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                    <li>
                        <span><?php echo $page_heading; ?></span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="listingBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-white">
                        <h1 class="text-center mb-0 secHeading"><?php echo $page_heading; ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="listingInfoSec">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-12">
                        <?php echo isset($page_short_desc) && $page_short_desc != '' ? $page_short_desc : ''; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="reportListSec">
            <div class="container">
                <div class="row">
                    <?php  
                    if($total_records > 0){
                        ?>
                        <div class="col-xs-12 col-lg-10 col-lg-offset-1 reportListBox">
                            <div class="paginationBox row">
                                <nav class="col-xs-12 col-md-9 col-sm-8 paginationDiv">
                                    <?php echo $pagination; ?>
                                </nav>
                                <div class="totalCount col-xs-12 col-md-3 col-sm-4">
                                    <span>Total Records</span><span class="blueText rptRecordCount"> (<?php echo $total_records; ?>)</span>
                                </div>
                            </div>
                            <div class="reportListContainer">
                            <?php
                            if(!empty($reports)){
                                foreach($reports as $report){
                                $keyword = $report['rep_keyword'];
                                ?>
                                <div class="row reportListing">
                                    <div class="col-xs-12 col-md-3 col-sm-4">
                                        <div class="iconBox text-center">
                                            <?php if(isset($report['rep_type']) && $report['rep_type']=='M'){
                                                ?><img src="<?php echo WEBSITE_URL; ?>assets/images/upcoming-report-cover.jpg" width= "110" height = "137" alt="<?php echo $keyword; ?>" title="<?php echo $keyword; ?>" /><?php
                                            }else{
                                                ?><img src="<?php echo WEBSITE_URL; ?>assets/images/publish-report-cover.jpg" width= "110" height = "137" alt="<?php echo $keyword; ?>" title="<?php echo $keyword; ?>" /><?php
                                            } ?>
                                            <div class="mt-4 repDate">
                                                <?php if($report['rep_type']=='N'){ ?>
                                                    <span><?php echo date("M Y", strtotime($report['rep_pub_date'])); ?></span>
                                                    <span>|</span>
                                                    <span><?php echo $report['rep_pages']." pages"; ?></span>
                                                <?php }else{ ?>
                                                    <span><?php echo "Ongoing"; ?></span>
                                                    <span>|</span>
                                                    <span><?php echo "TOC Available"; ?></span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-9 col-sm-8">
                                        <div class="contentBox">
                                            <h3 class="mt-0"><a class="listTitle secHeadingLeft" href="<?php echo WEBSITE_URL."market-research/".$report['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>"><?php echo $keyword; ?></a></h3>
                                            <p class="mt-4"><?php echo $report['rep_name']; ?></p>
                                            <div class="actionBtn">
                                                <a href="<?php echo WEBSITE_URL."market-research/".$report['rep_url'].".asp"; ?>" class="btn btnPrimary" title="<?php echo $keyword; ?>">
                                                    Read More
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </a>
                                                <?php if($report['rep_type']=='N'){ ?>
                                                    <a href="<?php echo WEBSITE_URL; ?>samples/<?php echo $report['rep_id']; ?>" class="btn btnGreen" title="Request Sample">Request Sample</a>
                                                <?php }else{ ?>
                                                    <a href="<?php echo WEBSITE_URL; ?>toc/<?php echo $report['rep_id']; ?>" class="btn btnGreen" title="Request TOC">Request TOC</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                            }
                            ?>
                            </div>
                            <div class="paginationBox row">
                                <nav class="col-xs-12 col-md-9 col-sm-8 paginationDiv">
                                    <?php echo $pagination; ?>
                                </nav>
                                <div class="totalCount col-xs-12 col-md-3 col-sm-4">
                                    <span>Total Records</span><span class="blueText rptRecordCount"> (<?php echo $total_records; ?>)</span>
                                </div>
                            </div>
                        </div>
                    <div class="noReportsFound">
                        <?php
                    }else{
                        echo "No Reports Found.";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="keyBenifitSec">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h2 class="secHeading mb-5">The Persistence Market Research Benefits</h2>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xs-12 keyBox">
                        <div class="keyBoxTitle">
                            <span class="keyIcon"></span>
                            <h4>Precision and Quality</h4>
                        </div>
                        <p>
                            Precision drives the quality of reports offered by Persistence Market Research.
                        </p>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xs-12 keyBox">
                        <div class="keyBoxTitle">
                            <span class="keyIcon"></span>
                            <h4>Customer Satisfaction</h4>
                        </div>

                        <p>
                            We are committed to abide by our businesses’ inquisitiveness by providing best-in-line, customized solutions.
                        </p>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xs-12 keyBox">
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

    <input type="hidden" class="hdnSearchByType" name="searchByType" value="<?php echo isset($report_type) ? $report_type : ''; ?>">
    <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="<?php echo isset($hdn_cat_id) && $hdn_cat_id > 0 ? $hdn_cat_id : ''; ?>">
    <input type="hidden" class="hdnSearchByYear" name="searchByYear" value="">

    <link href="<?php echo WEBSITE_URL; ?>assets/css/listing.css" rel="stylesheet" />
    <?php $this->load->view("partials/footer"); ?>
    <script>
        $(document).ready(function(){
            $(".searchBySel").change(function(){
                var searchByYear = $(".searchByYear").val();
                var searchByType = "";
                var searchBySector = "";

                $(".hdnSearchByYear").val(searchByYear);

                <?php if(empty($categories)){ ?>
                searchByType = $(".searchByType").val();
                $(".hdnSearchByType").val(searchByType);
                <?php }else{ ?>
                searchBySector = $(".searchBySector").val();
                $(".hdnSearchBySector").val(searchBySector);
                <?php } ?>

                getAjaxPagination(1);
            });
        });

        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        function getAjaxPagination(page){

            var repType = $(".hdnSearchByType").val();
            var searchBySector = $(".hdnSearchBySector").val();
            var searchByYear = $(".hdnSearchByYear").val();
            var url = "<?php echo WEBSITE_URL; ?>reports/reports_by_ajax";
            
            $.ajax({
                type: "POST",
                url: url,
                data:{'searchBySector':searchBySector, 'searchByYear':searchByYear, 'page':page, 'repType':repType,[csrfName]: csrfHash},
                dataType:"json",
                success: function(content){
                    if(content['total_records']>0){
                        $(".reportListBox").show();
                        $(".noReportsFound").html("");
                        $(".reportListContainer").html(content['reports']);
                        $(".paginationDiv").html(content['pagination']);
                        $(".rptRecordCount").html(" ("+content['total_records']+")");
                    }else{
                        $(".reportListBox").hide();
                        $(".noReportsFound").html("No Reports Found.");
                    }
                    csrfName = content['csrf_name'];
                    csrfHash = content['csrf_value'];
                }
            }); 
        }
    </script>
    
</body>
</html>