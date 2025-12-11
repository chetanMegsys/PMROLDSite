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
                    <div class="col-md-8 col-xs-12 col-md-offset-2 text-white">
                        <h1 class="text-center mb-4 secHeading"><?php echo $page_heading; ?></h1>
                        <p class="text-center"><?php echo isset($page_heading_content) && $page_heading_content != '' ? $page_heading_content : ''; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="listingInfoSec">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                        <?php echo isset($page_short_desc) && $page_short_desc != '' ? $page_short_desc : ''; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="searchFilter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                        <p class="secHeading text-center mb-5 text-white">Search filters</p>
                        <form class="form-inline">
                            <?php
                            if(!empty($categories)){
                            ?>
                            <div class="col-sm-6 text-center <?php if($page_heading == 'Forthcoming Reports'){ ?>col-sm-offset-3<?php } ?>">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                          <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                          <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                        </svg>
                                    </span>
                                    <select class="form-control searchBySector searchBySel" title="Sort by Sector" name="searchBySector">
                                        <option value="">Sort by Sector</option>
                                        <?php
                                        if(!empty($categories)){
                                            foreach($categories as $category){
                                                ?>
                                                <option value="<?php echo $category['category_id']; ?>" <?php echo isset($_POST['searchBySector']) && $_POST['searchBySector']==$category['category_id'] ? 'selected' : ''; ?>><?php echo $category['cat_name']; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <?php
                            }else{
                                ?>
                                <div class="col-sm-6 text-center <?php if(empty($categories)){ ?>col-sm-offset-3<?php } ?>">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                            </svg>
                                        </span>
                                        <select class="form-control searchByType searchBySel" title="Sort by Sector" name="searchByType">
                                            <option value="">Sort by Report Type</option>
                                            <option value="M" <?php echo isset($_POST['searchByType']) && $_POST['searchByType']=='M' ? 'selected' : ''; ?>>Upcoming</option>
                                            <option value="N" <?php echo isset($_POST['searchByType']) && $_POST['searchByType']=='N' ? 'selected' : ''; ?>>Published</option>
                                        </select>
                                    </div>
                                </div>
                                <?php
                            }

                            if($page_heading != 'Forthcoming Reports' && !empty($categories)){
                            ?>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-week" viewBox="0 0 16 16">
                                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                                          <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                        </svg>
                                    </span>
                                    <select class="form-control searchByYear searchBySel" title="Sort by Year" name="searchByYear">
                                        <option value="">Sort by Year</option>
                                        <option value="2022" <?php echo isset($_POST['searchByYear']) && $_POST['searchByYear']=='2022' ? 'selected' : ''; ?>>2022</option>
                                        <option value="2021" <?php echo isset($_POST['searchByYear']) && $_POST['searchByYear']=='2021' ? 'selected' : ''; ?>>2021</option>
                                        <option value="2020" <?php echo isset($_POST['searchByYear']) && $_POST['searchByYear']=='2020' ? 'selected' : ''; ?>>2020</option>
                                        <option value="2019" <?php echo isset($_POST['searchByYear']) && $_POST['searchByYear']=='2019' ? 'selected' : ''; ?>>2019</option>
                                        <option value="2018" <?php echo isset($_POST['searchByYear']) && $_POST['searchByYear']=='2018' ? 'selected' : ''; ?>>2018</option>
                                        <option value="2017" <?php echo isset($_POST['searchByYear']) && $_POST['searchByYear']=='2017' ? 'selected' : ''; ?>>2017</option>
                                        <option value="2016" <?php echo isset($_POST['searchByYear']) && $_POST['searchByYear']=='2016' ? 'selected' : ''; ?>>2016</option>
                                        <option value="2015" <?php echo isset($_POST['searchByYear']) && $_POST['searchByYear']=='2015' ? 'selected' : ''; ?>>2015</option>
                                    </select>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </form>
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