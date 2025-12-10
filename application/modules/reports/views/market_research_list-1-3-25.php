<!DOCTYPE html>
<html  lang="en">
<head>

    <?php $this->load->view("frontend/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-listing.css" rel="stylesheet" />
    <?php $this->load->view("frontend/header_home"); ?>
	<main role="main">
        
        <div class="breadCrumb-Section">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent p-0 my-0">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo WEBSITE_URL; ?>" class="text-black" title="Persistence Market Report">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item" class="text-black" aria-current="page">
                                    <span><?php echo $page_heading; ?></span>
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
                    <div class="col-lg-12 col-md-12 col-12 text-white">
                        <h1 class="text-center mb-0 secHeading"> Market Research Reports<?php // echo $page_heading; ?></h1>
                    </div>
                </div>
            </div>
        </section>
      
        <section class="reportListSec">
            <div class="container">
                <div class="row py-3">
                    <?php  
                    if($total_records > 0){
                        ?>
                        
                        <div class="col-xs-12 col-lg-9 reportListBox">
                            <form class="form-inline mb-4"  action="<?php echo WEBSITE_URL; ?>search" method="GET" style="margin-left: -15px;margin-right: -15px;">
                                <div class="input-group" style="width: 100%;">
                                    <input type="text"  id="s" name="query" class="form-control" placeholder="Search Report" autocomplete="off" required="" minlength="3" maxlength="255">
                                    <div class="input-group-btn">
                                        <button class="btn btnSearch" type="submit" title="Search">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2155A4" class="bi bi-search mt-1" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="suggestionsBox px-3 pb-3 pt-2 d-none" id="suggestionsBox">
                                    <div id="suggestionsList"></div>
                                </div>
                            </form>
                            
                            <div class="reportListContainer">
                            <?php
                            if(!empty($reports)){
                                foreach($reports as $report){
                                    $keyword = $report['rep_keyword'];
                                ?>
                                <div class="row reportListing border-radius">
                                   
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <div class="contentBox py-0">
                                            <h2 class="mt-0"><a class="listTitle secHeadingLeft" href="<?php echo WEBSITE_URL."market-research/".$report['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>"><?php echo $keyword; ?></a></h2>
                                            
                                            <p class="mt-2 mb-0"><?php echo $report['rep_name']; ?></p>
                                             
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
                                <p class="btn btn-loadmore loadmore-spiner" title="More Reports" href=" " onclick="getLoadData();">More Reports
                                    <span class="loadMore-ring"></span>
                                </p>
                            </div>
                        </div>
                        
                        <?php
                    }else{
                        echo "No Reports Found !!";
                    }
                   // var_dump($categorytree);
                    ?>
                    <div class="col-xs-12 col-md-3 filterboxes">
                    	<!-- <div class="filterReset">
							<span class="txt-black font15">Refine Search </span>
							<a href="<?php// echo "https://". $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="txt-black font12" title="Reset all">Reset all</a>
						</div> -->
						<div class="colloapse-menu">
							<div class="card border-radius">
								<div class="card-header p-0 px-4 py-2 border-0" id="headingOne">
									<div class="mb-0 text-white text-center">
										<span>Select Industry</span>
									</div>
								</div>
								<div id="collapseOne" class="">
									<div class="pl-3 pr-2">
                                        <?php
                                            if(!empty($categorytree)){
                                                foreach($categorytree as $category){
                                        ?>
										<div class="form-check d-flex align-items-center my-2">
											<input type="checkbox" class="form-check-input searchBySector category_filter searchBySel" id="<?php echo $category['category_id']; ?>" name="categories[]" value="<?php echo $category['category_id']; ?>"   >
											<label class="form-check-label  txt-red" for="<?php echo $category['category_id']?>"><?php echo $category['cat_name']?></label>
                                        </div>
                                        
                                            <?php
                                                if(!empty($category['subcategories'])){
                                                    foreach($category['subcategories'] as $sub_cat){?>
                                                    <div class="form-check d-flex align-items-center my-2 ml-3">
                                                        <input type="checkbox" class="form-check-input searchBySector category_filter searchBySel" id="<?php echo $sub_cat['category_id']; ?>" name="categories[]" value="<?php echo $sub_cat['category_id']; ?>"   >
                                                        <label style="font-size:14px;" class="form-check-label  txt-red" for="<?php echo $sub_cat['category_id']?>"><?php echo $sub_cat['cat_name']?></label>
                                                    </div>
                                                        <?php 
                                                    }
                                                }
                                            ?>
										
                                        <?php } }?>
										
										
									</div>
								</div>
							</div>
						</div>
                        <div class="totalCount" style="text-align: left;">
                        
                            <label for="per_page" class="dropselect d-inline-block font13 txt-black mr-1 mb-0">Show : </label>
                            <select name="per_page" id="per_page" class="font13 searchBySel selectBoxList mr-1">
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <span class="font13">Total Records</span><span class="font13 blueText rptRecordCount">(<?php echo $total_records; ?>)</span>
                        </div>
                        <div class="Our-clients right-boxes mt-4 pb-2 pt-0  text-center border-radius">
                            <p class="font18 text-blue-new pt-3 pb-2 m-0 bold400 text-center">Our Media Trust</p>
                             
                             <img src="<?php echo WEBSITE_URL; ?>themes/image/home/pmr-media-citations.webp" title="<?php echo $report_detail[0]['cat_name']; ?>" class="mt-2" width="260" height="150" alt="<?php echo $report_detail[0]['cat_name']; ?>">
                        </div>
                        <div class="slider-section mt-4 right-boxes border-radius bg-lbrown" style="position: relative;border-radius:10px;">
                            <p class="font18 text-blue-new pt-3 pb-2 m-0 bold400 text-center">Testimonials</p>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators ">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carosel-box">
                                            <div class="tour-item ">
                                                <div class="tour-desc ">
                                                    <div class="font16">“Persistence Market Research has helped us immensely in compiling a sound database. Our expectations were exceeded by their research team.”</div>
                                                    
                                                    <div class="link-name d-flex text-right font15 bold600 pt-3">Fortune 500 Telecom Company, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item ">
                                                <div class="tour-desc">
                                                    <div class="font16">“The market numbers supplied by Persistence Market Research helped us successfully conclude our ongoing project and we are pleased with this purchase.” </div>
                                                    
                                                    <div class="link-name d-flex text-right font15 bold600 pt-3">Multinational Chemical Company, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item ">
                                                <div class="tour-desc">
                                                    <div class="font16">“The customer service provided by Persistence Market Research was great. We got our report well in time and customized to suit our business requirements.”</div>
                                                    
                                                    <div class="link-name d-flex text-right font15 bold600 pt-3">Multinational Electronics Company, Japan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item">
                                                <div class="tour-desc">
                                                    <div class="font16 pb-4">“The way Persistence Market Research handled the entire transaction, right from customization to after-sales queries, has been very impressive.”</div>
                                                    <div class="link-name d-flex text-right font15 bold600">Leading Semiconductors Company, Taiwan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item">
                                                <div class="tour-desc">
                                                    <div class="font16 pb-4">“Thank you for supplying the report in time for our project to go through. Commendable customer service.”</div>
                                                    <div class="link-name d-flex text-right font15 bold600">Leading Global Healthcare Fortune 500 Company, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item">
                                                <div class="tour-desc">
                                                    <div class="font16 pb-1">“The precise information given in Persistence Market Research’s reports has been priceless to us. We are very happy with this purchase, since the analysis in the report has been important in formulating our strategies.”</div>
                                                    <div class="link-name text-right font15 bold600">Global Consulting Firm, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a class="carousel-control-prev right-pre" href="#carouselExampleIndicators" role="button" data-slide="prev" title="Previous">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next left-next" href="#carouselExampleIndicators" role="button" data-slide="next" title="Next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a> -->
                              </div>
                        </div>
                        <div class="Customization-box right-boxes pb-4 pt-0 px-3 mt-4 text-center border-radius">
                             <p class="font18 text-blue-new py-3 m-0 bold400 text-center"> Research Methodology</p>
                             <p class="font16 bold400">Get Data-Driven Research Methodology for Accurate Insights
                             </p>
                             <div class="btn-container">
                                 <a href="<?php echo WEBSITE_URL."research-methodology.asp"; ?>" class="btn btn-cta bold500 font18" data-name="Get Research Methodology"  data-btn="Submit" title="Get Research Methodology" style="width:100%;">
                                 Read More</a>
                             </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
        <section class="keyBenifitSec py-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h3 class="secHeading mb-4">The Persistence Market Research Benefits</h3>
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
    <?php $this->load->view("frontend/footer"); ?>
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
        $('.loadMore-ring').css('display','inline-block');
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
				// $(".loadmore-spiner").removeClass("d-none");
			},
	 contentType: "", // content type sent to server
	 dataType: "html", //Expected data format from server
	 processdata: true, //True or False
	 success: function(htmldata) { //On Successful service call
		if(htmldata!=''){
			$("#LoadData"+page).append(htmldata);
			$("#page").val(next);
            $('.loadMore-ring').css('display','none');
			
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