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
                        <a href="<?php echo WEBSITE_URL; ?>market-research-report" title="Next-Gen Sectors">
                            <span>Market Research Report</span>
                        </a>
                    </li>
                    <li>
                        <span><?php echo $page_heading; ?></span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="subCatBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 col-md-offset-2 text-white">
                        <h1 class="text-center mb-4 secHeading"><?php echo $page_heading; ?></h1>
                        <p class="text-center"><?php echo isset($page_heading_content) && $page_heading_content != '' ? $page_heading_content : ''; ?></p>
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
                            
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-easel" viewBox="0 0 16 16">
                                          <path d="M8.5 6a.5.5 0 1 0-1 0h-2A1.5 1.5 0 0 0 4 7.5v2A1.5 1.5 0 0 0 5.5 11h.473l-.447 1.342a.5.5 0 1 0 .948.316L7.027 11H7.5v1a.5.5 0 0 0 1 0v-1h.473l.553 1.658a.5.5 0 1 0 .948-.316L10.027 11h.473A1.5 1.5 0 0 0 12 9.5v-2A1.5 1.5 0 0 0 10.5 6h-2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-2z"/>
                                          <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                        </svg>
                                    </span>
                                    <select class="form-control searchByType searchBySel" title="Sort by Report Type" name="searchByType">
                                        <option value="">Sort by Report Type</option>
                                        <option value="M">Upcoming</option>
                                        <option value="N">Published</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="reportListSec">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-10 col-lg-offset-1 reportListBox">
                	<?php  
	                if($total_records > 0){
	                    ?>
                        <div class="paginationBox row">
                            <nav class="col-xs-12 col-md-9 col-sm-8 paginationDiv">
                                <?php echo $pagination; ?>
                            </nav>
                            <div class="totalCount col-xs-12 col-md-3 col-sm-4">
                                <span>Total Records</span><span class="blueText"> (<?php echo $total_records; ?>)</span>
                            </div>
                        </div>
                    	<?php
                        if(!empty($reports)){
                            foreach($reports as $report){
                                $keyword = $report['rep_keyword'];
                                ?>
		                        <div class="row reportListing">
		                            <div class="col-xs-12 col-md-3 col-sm-4">
		                                <div class="iconBox text-center">
		                                    <?php if(isset($report['rep_type']) && $report['rep_type']=='M'){
                                                ?><img src="<?php echo WEBSITE_URL; ?>assets/images/upcoming-report-cover.jpg" width="110" height="137" alt="<?php echo $keyword; ?>" title="<?php echo $keyword; ?>" /><?php
                                            }else{
                                                ?><img src="<?php echo WEBSITE_URL; ?>assets/images/publish-report-cover.jpg" width="110" height="137" alt="<?php echo $keyword; ?>" title="<?php echo $keyword; ?>" /><?php
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
		                                    <h3 class="mt-0">
		                                        <h3 class="mt-0"><a class="listTitle secHeadingLeft" href="<?php echo WEBSITE_URL."market-research/".$report['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>"><?php echo $keyword; ?></a></h3>
		                                    </h3>
		                                    <p class="mt-4"><?php echo $report['rep_name']; ?></p>
		                                    <div class="actionBtn">
		                                        <a href="<?php echo WEBSITE_URL."market-research/".$report['rep_url'].".asp"; ?>" class="btn btnPrimary" title="Read More">
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
                        <div class="paginationBox row">
                            <nav class="col-xs-12 col-md-9 col-sm-8 text-center">
                                <?php echo $pagination; ?>
                            </nav>
                            <div class="totalCount col-xs-12 col-md-3 col-sm-4 text-center">
                                <span>Total Records</span><span class="blueText"> (<?php echo $total_records; ?>)</span>
                            </div>
                        </div>
                        <?php
                    }else{
                        echo "No Reports Found.";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="subCatSec pt-0">
            <div class="container">
                <?php
                if(!empty($sub_cat_content)){
                    $counter = 1;
                    foreach($sub_cat_content as $scc){
                        if($counter==1){
                            $counter = 2;
                            ?>
                            <div class="row mt-5">
                                <div class="col-md-12 greenBox catBox py-4">
                                    <h4 class="mt-0"><?php echo $scc['title']; ?></h4>
                                    <p>
                                        <?php echo $scc['description']; ?>
                                    </p>
                                </div>
                            </div>
                            <?php
                        }else{
                            $counter = 1;
                            ?>
                            <div class="row mt-5">
                                <div class="col-md-12 brownBox catBox py-4">
                                    <h4 class="mt-0"><?php echo $scc['title']; ?></h4>
                                    <p>
                                        <?php echo $scc['description']; ?>
                                    </p>
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

    <form method="POST" class="searchForm">
        <?php
            $name = $this->security->get_csrf_token_name(); 
            $hash = $this->security->get_csrf_hash();
            $_SESSION[$name] = $hash;
        ?>

        <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
        <input type="hidden" class="hdnSearchByType" name="searchByType" value="">
        <input type="hidden" class="hdnSearchByYear" name="searchByYear" value="">
        <input type="hidden" class="hdnPagination" name="page" value="">
    </form>
     
    <?php $this->load->view("partials/footer_mobile"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/listing-mobile.css" rel="stylesheet" />

    <script>
    	$(document).ready(function(){
            $(".searchBySel").change(function(){
                var searchByType = $(".searchByType").val();
                var searchBySector = $(".searchBySector").val();
                var searchByYear = $(".searchByYear").val();

                $(".hdnSearchByType").val(searchByType);
                $(".hdnSearchBySector").val(searchBySector);
                $(".hdnSearchByYear").val(searchByYear);
                $(".searchForm").submit(); 
            });
        });

        function getAjaxPagination(page){
            var searchBySector = $(".searchBySector").val();
            var searchByYear = $(".searchByYear").val();

            $(".hdnSearchBySector").val(searchBySector);
            $(".hdnSearchByYear").val(searchByYear);
            $(".hdnPagination").val(page);
            $(".searchForm").submit(); 
        }
    </script>

</body>
</html>