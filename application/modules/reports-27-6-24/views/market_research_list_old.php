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
       <!--  <section class="listingInfoSec">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                        <?php echo isset($page_short_desc) && $page_short_desc != '' ? $page_short_desc : ''; ?>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- <section class="searchFilter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                        <p class="secHeading text-center mb-5 text-white">Search filters</p>
                        <form class="form-inline">
                            
                            <div class="col-sm-6 text-center">
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
                            
                            <div class="col-sm-6 text-center">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-easel" viewBox="0 0 16 16">
                                      <path d="M8.5 6a.5.5 0 1 0-1 0h-2A1.5 1.5 0 0 0 4 7.5v2A1.5 1.5 0 0 0 5.5 11h.473l-.447 1.342a.5.5 0 1 0 .948.316L7.027 11H7.5v1a.5.5 0 0 0 1 0v-1h.473l.553 1.658a.5.5 0 1 0 .948-.316L10.027 11h.473A1.5 1.5 0 0 0 12 9.5v-2A1.5 1.5 0 0 0 10.5 6h-2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-2z"/>
                                      <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                    </svg>
                                    </span>
                                    <select class="form-control searchByType searchBySel" title="Sort by Sector" name="searchByType">
                                        <option value="">Sort by Report Type</option>
                                        <option value="M" <?php echo isset($_POST['searchByType']) && $_POST['searchByType']=='M' ? 'selected' : ''; ?>>Upcoming</option>
                                        <option value="N" <?php echo isset($_POST['searchByType']) && $_POST['searchByType']=='N' ? 'selected' : ''; ?>>Published</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="reportListSec">
            <div class="container">
                <div class="row bg-gray">
                    <?php  
                    if($total_records > 0){
                        ?>
                        <div class="col-md-12 col-lg-12">
                            <div class="totalCount">
                                <label for="per_page" class="dropselect d-inline-block fs-13 txt-black mr-1 mb-0">Show : </label>
                                <select name="per_page" id="per_page" class="fs-13 searchBySel selectBoxList mr-3">
                                  <option value="20">20</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                </select>
                                <span>Total Records</span><span class="blueText rptRecordCount">(<?php echo $total_records; ?>)</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-9 reportListBox">
                            <!-- <div class="paginationBox row">
                                
                                
                            </div> -->
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

                            
                              <div class="nextdiv" id="LoadData2">
                             </div>
                            </div>
                          
                            
                            <div class="text-center"> 
                                <p class="btn btn-loadmore loadmore-spiner" href=" " onclick="getLoadData();">Load More</p>
                            </div>
                        </div>
                        
                        <?php
                    }else{
                        echo "No Reports Found.";
                    }
                    ?>
                    <div class="col-xs-12 col-md-3 filterboxes">
                    	<div class="filterReset">
							<span class="txt-black fs-15">Refine Search </span>
							<a href="<?php echo "https://". $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="txt-black fs-12">Reset all</a>
						</div>
						<div class="colloapse-menu">
							
							<div class="card mt-3 border-0">
								<div class="card-header p-0 px-4 py-2 border-0 " id="headingTwo">
									<div class="mb-0 text-white collapsedMenu" data-toggle="collapse" data-target="#collapseTwo">
										<span>Report Type</span>
										<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
										</svg>
									</div>
								</div>
								
								<div id="collapseTwo" class="collapse in">
									<div class="card-body">
										<div class="form-check d-flex align-items-center my-2">
											<input type="radio" class="form-check-input searchBySel report_type_filter" id="view-all" name="rep_type" value="" checked>
											<label class="form-check-label" for="view-all">View All</label>
										</div>
										<div class="form-check d-flex align-items-center my-2">
											<input type="radio" class="form-check-input report_type_filter searchBySel" id="forthcoming-report" name="rep_type" value="M"  >
											<label class="form-check-label" for="forthcoming-report">Forthcoming Report</label>
										</div>
										<div class="form-check d-flex align-items-center my-2">
											<input type="radio" class="form-check-input report_type_filter searchBySel" id="published-report" name="rep_type" value="N"  >
											<label class="form-check-label" for="published-report">Published Report</label>
										</div>
									</div>
								</div>
							</div>
							<div class="card mt-3 border-0">
								<div class="card-header p-0 px-4 py-2 border-0" id="headingOne">
									<div class="mb-0 text-white collapsed collapsedMenu" data-toggle="collapse" data-target="#collapseOne">
										<span>Sector</span>
										<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
										</svg>
									</div>
								</div>
								<div id="collapseOne" class="collapse">
									<div class="card-body">
                                        <?php
                                            if(!empty($categories)){
                                                foreach($categories as $category){
                                        ?>
										<div class="form-check d-flex align-items-center my-2">
											<input type="checkbox" class="form-check-input searchBySector category_filter searchBySel" id="<?php echo $category['category_id']; ?>" name="categories[]" value="<?php echo $category['category_id']; ?>"   >
											<label class="form-check-label  txt-red" for="<?php echo $category['cat_name']?>"><?php echo $category['cat_name']?></label>
										</div>
                                        <?php } }?>
										
										
									</div>
								</div>
							</div>
							<div class="card mt-3 border-0">
								<div class="card-header p-0 px-4 py-2 border-0" id="headingThree">
									<div class="mb-0 text-white collapsed collapsedMenu" data-toggle="collapse" data-target="#collapseThree">
										<span>Years</span>
										<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
										</svg>
									</div>
								</div>
								<div id="collapseThree" class="collapse" >
									<div class="card-body">
                                        <?php for($i = date("Y"); $i >= 2017; $i --) { ?>
										<div class="form-check d-flex align-items-center my-2">
											<input type="checkbox" class="form-check-input year_filter searchBySel" id="<?php echo $i; ?>" name="years[]" value="<?php echo $i; ?>">
											<label class="form-check-label" for="<?php echo $i; ?>"><?php echo $i; ?></label>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
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

    <input type="hidden" class="hdnSearchByType" name="searchByType" value="">
    <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="">
    <input type="hidden" class="hdnSearchByYear" name="searchByYear" value="">
    <input type="hidden" class="page" id="page" name="page" value="2">

    <link href="<?php echo WEBSITE_URL; ?>assets/css/listing.css" rel="stylesheet" />
    <?php $this->load->view("partials/footer"); ?>
    <script>
        $(document).ready(function(){
            $(".searchBySel").change(function(){

            
                var searchBySector = $(".searchBySector").val();
                var searchByType = $(".searchByType").val();
                var checkyear = document.getElementsByName('years[]');

                var searchBySector = "";
                $(".category_filter").each(function(){
                    if( $(this).is(":checked") ){
                        searchBySector += ","+$(this).val();
                    }
                });
                if (searchBySector) searchBySector = searchBySector.substring(1);
             
                BySector=searchBySector;
                
                var searchByType = "";
                $(".report_type_filter").each(function(){
                    if( $(this).is(":checked") ){
                        searchByType = $(this).val();
                    }
                });
                
                var year = "";
                for (var i=0, n=checkyear.length;i<n;i++) 
                {
                     if (checkyear[i].checked) 
                    {
                        year += ","+checkyear[i].value;
                    }
                }

                if (year) year = year.substring(1);
                years = year;

                // console.log(searchBySector);
                // console.log(searchByType);
                // console.log(years);

                $(".hdnSearchByType").val(searchByType);
                $(".hdnSearchBySector").val(searchBySector);
                $(".hdnSearchByYear").val(years);

                getAjaxPagination(1);
            });
        });

        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        function getAjaxPagination(page){
                $("#page").val(2);
        		var per_page = $("#per_page").val();
            var repType = $(".hdnSearchByType").val();
            var searchBySector = $(".hdnSearchBySector").val();
            var searchByYear = $(".hdnSearchByYear").val();
            var url = "<?php echo WEBSITE_URL; ?>reports/reports_by_ajax";
            
            

            $.ajax({
                type: "GET",
                url: url,
                data:{'searchBySector':searchBySector, 'page':page,'per_page' :per_page, 'repType':repType, 'searchByYear':searchByYear, [csrfName]: csrfHash},
                dataType:"json",
                success: function(content){
                    $(".reportListContainer").html(content['reports']);
                   
                    $(".rptRecordCount").html("("+content['total_records']+")");
                    csrfName = content['csrf_name'];
                    csrfHash = content['csrf_value'];
                }
            }); 
        }
    </script>
    
<script>   



function getLoadData()
{
	
	var per_page = $("#per_page").val();
    var repType = $(".hdnSearchByType").val();
    var searchBySector = $(".hdnSearchBySector").val();
    var searchByYear = $(".hdnSearchByYear").val();
	
	 var page = $('#page').val(); 
	 var per_page = $('#per_page').val();
	 var next = parseInt(page) + 1;

 //alert('page'+page+"per page "+per_page+" type" + repType + "cat "+ searchBySector + "year" + searchByYear);

	 var ajaxUrl = "<?php echo WEBSITE_URL . 'reports/getReportListingData'; ?>";
	$.ajax({
			 type: "GET", //GET or POST or PUT or DELETE verb
			 url: ajaxUrl, // Location of the service
			 data: {					 
					"page": page,
					"per_page": per_page,
					"searchByType": repType,
					"searchByYear": searchByYear,
					"searchBySector": searchBySector
				
			},
			befoeSend:function(){
				$(".loadmore-spiner").removeClass("d-none");
			},
	 contentType: "", // content type sent to server
	 dataType: "html", //Expected data format from server
	 processdata: true, //True or False
	 success: function(htmldata) { //On Successful service call
		if(htmldata!=''){
			$("#LoadData"+page).append(htmldata);
			$("#page").val(next);
			$(".loadmore-spiner").addClass("d-none");
			
		}
		else{
			 								
		}
		
	},
	 
});
		
}
    	 
    $(document).ready(function(){
        var url = window.location.href;
        var index = url.indexOf("#");
        if (index !== -1)
        {
            var hash = url.substring(index + 1);  
            if(hash != '' &&  hash == 'forthcoming-reports' )
            {              
                 $("#forthcoming-report").attr('checked','checked');                 
                 $(".hdnSearchByType").val('M');
            }
            else if(hash != '' &&  hash == 'published-reports' )
            {
                 
                 $("#published-report").attr('checked','checked');
                  $(".hdnSearchByType").val('N');
            }
            else if(hash != ''){          


            var url = "<?php echo WEBSITE_URL; ?>reports/getTheCatIdByURL";
            
            $.ajax({
                type: "GET",
                url: url,
                data:{'category_url':hash},
                dataType:"json",
                success: function(content){

                    $("#collapseOne").addClass('in');
                    $("#"+content).attr('checked','checked')
                    $(".hdnSearchBySector").val(content);
                    
                }
            });

            }   
            getAjaxPagination(1);  
         
        }
    });

    	
</script>
</body>
</html>