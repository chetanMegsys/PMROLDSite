<!DOCTYPE html>
<html lang="en">
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
                    <div class="col-md-8 col-xs-12 col-md-offset-2 text-white">
                        <h1 class="text-center mb-4 secHeading"><?php echo $page_heading; ?></h1>
                        <p class="text-center"><?php echo isset($page_heading_content) && $page_heading_content != '' ? $page_heading_content : ''; ?></p>
                    </div>
                </div>
            </div>
        </section>
               
        <section class="reportListSec pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-12 filterboxes">
                        <div class="filterReset">
                            <span class="txt-black font15">Refine Search </span>
                            <a href="<?php echo "https://". $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="txt-black font12">Reset all</a>
                        </div>
                        <div class="colloapse-menu pb-4">
                            
                            <div class="card mt-3 border-0">
                                <div class="card-header p-0 px-4 py-2 border-0 " id="headingTwo">
                                    <div class="mb-0 text-white collapsedMenu" data-toggle="collapse" data-target="#collapseTwo">
                                        <span>Report Type</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
                                        </svg>
                                    </div>
                                </div>
                                
                                <div id="collapseTwo" class="collapse show">
                                    <div class="card-body">
                                        <div class="form-check d-flex align-items-center my-2">
                                            <input type="radio" class="form-check-input report_type_filter searchBySel" id="view-all" name="rep_type" value="" checked>
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
                                            <label class="form-check-label  txt-red" for="<?php echo $category['category_id']?>"><?php echo $category['cat_name']?></label>
                                        </div>
                                       <?php } } ?>    
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
                                        <?php for($i = date("Y"); $i >= 2014; $i --) { ?>
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
                	<?php  
                    if($total_records > 0){
                        ?>
                    	<div class="col-xs-12 col-lg-10 col-lg-offset-1 reportListBox">
                            <div class="paginationBox row">
                                <!-- <nav class="col-xs-12 col-md-9 col-sm-8 paginationDiv">
                                    <?php echo $pagination; ?>
                                </nav> -->
                                <div class="col-xs-6 col-6 col-md-9 col-sm-8 paginationDiv">
                                    <label for="per_page" class="dropselect d-inline-block font13 txt-black mr-1 mb-0">Show : </label>
                                    <select name="per_page" id="per_page" class="font13 searchBySel selectBoxList mr-3">
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <div class="totalCount col-xs-6 col-6 col-md-3 col-sm-4">
                                    <span class="font13">Total Records</span><span class="font13 blueText rptRecordCount"> (<?php echo $total_records; ?>)</span>
                                </div>
                            </div>
                            <div class="reportListContainer mt-2">
                        	<?php
                            if(!empty($reports)){
                                foreach($reports as $report){
                                    $keyword = $report['rep_keyword'];
                                ?>
		                        <div class="row reportListing">
		                            <!-- <div class="col-xs-12 col-md-3 col-sm-4">
		                                <div class="iconBox text-center">
		                                    <?php if(isset($report['rep_type']) && $report['rep_type']=='M'){
                                                ?><img src="<?php echo WEBSITE_URL; ?>assets/images/upcoming-report-cover.jpg" width="110" height="137"  alt="<?php echo $keyword; ?>" title="<?php echo $keyword; ?>" /><?php
                                            }else{
                                                ?><img src="<?php echo WEBSITE_URL; ?>assets/images/publish-report-cover.jpg" width="110" height="137"  alt="<?php echo $keyword; ?>" title="<?php echo $keyword; ?>" /><?php
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
		                            </div> -->
		                            <div class="col-xs-12 col-md-9 col-sm-8">
		                                <div class="contentBox py-0">
		                                    <h2 class="mt-0"><a class="listTitle secHeadingLeft" href="<?php echo WEBSITE_URL."market-research/".$report['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>"><?php echo $keyword; ?></a></h2>
                                            <!-- <div class="mt-2 repDate">
                                                <?php if($report['rep_type']=='N'){ ?>
                                                    <span><?php echo date("M Y", strtotime($report['rep_pub_date'])); ?></span>
                                                    <span>|</span>
                                                    <span><?php echo $report['rep_pages']." pages"; ?></span>
                                                <?php }else{ ?>
                                                    <span><?php echo "Ongoing"; ?></span>
                                                    <span>|</span>
                                                    <span><?php echo "TOC Available"; ?></span>
                                                <?php } ?>
                                            </div> -->
		                                    <p class="mt-2 mb-0"><?php echo $report['rep_name']; ?></p>
		                                    <!-- <div class="actionBtn">
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
		                                    </div> -->
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
	                        <div class="text-center mt-4"> 
                                <p class="btn btn-loadmore loadmore-spiner" href=" " onclick="getLoadData();" >Load More
                                    <span class="loadMore-ring"></span>
                                </p>
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
        <section class="keyBenifitSec py-0 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3 class="secHeading mb-4">The Persistence Market Research Benefits</h3>
                    </div>
                    <div class="col-md-12 col-lg-12 keyBox">
                        <div class="keyBoxTitle">
                            <span class="keyIcon"></span>
                            <h4>Precision and Quality</h4>
                        </div>
                        <p>
                            Precision drives the quality of reports offered by Persistence Market Research.
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

    <input type="hidden" class="hdnSearchByType" name="searchByType" value="">
    <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="">
    <input type="hidden" class="hdnSearchByYear" name="searchByYear" value="">
    <input type="hidden" class="page" id="page" name="page" value="2">

    <?php $this->load->view("frontend/footer_mobile"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/listing-mobile.css" rel="stylesheet" />

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
                $(".loadmore-spiner").removeClass("d-none");
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
            else if(hash != '' )
            {
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
                    getAjaxPagination(1);
                }
            });

            }     
         
        }
    });

    </script>

</body>
</html>