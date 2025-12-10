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
                    <div class="col-md-8 col-xs-12 col-md-offset-2 ">
                        <h1 class="text-center mb-1 secHeading">Market Research Reports</h1>
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
                                <div class="card-header p-0 px-4 py-2 border-0" id="headingOne" style="background: #282C7D;">
                                    <div class="mb-0 text-white collapsed collapsedMenu" data-toggle="collapse" data-target="#collapseOne">
                                        <span>Sector</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse">
                                    <div class="card-body">
                                    <?php if (!empty($categorytree)) { 
                                        $first = true; // Flag to track the first parent category
                                        foreach ($categorytree as $category) { 
                                            $isFirst = $first ? 'show' : ''; // Show only the first category
                                            $first = false; // Set flag to false after first iteration
                                    ?>  
                                        <!-- Parent Category -->
                                        <div class="form-check d-flex align-items-center my-2">
                                            <input type="checkbox" class="form-check-input searchBySector category_filter searchBySel" 
                                                id="<?php echo $category['category_id']; ?>" 
                                                name="categories[]" 
                                                value="<?php echo $category['category_id']; ?>">
                                            <label class="form-check-label txt-red" 
                                                data-toggle="collapse" 
                                                data-target="#subcategories_<?php echo $category['category_id']; ?>" 
                                                aria-expanded="true" 
                                                for="<?php echo $category['category_id']; ?>">
                                                <?php echo $category['cat_name']; ?>
                                            </label>
                                        </div>

                                        <!-- Subcategories (Collapsible Section) -->
                                        <div id="subcategories_<?php echo $category['category_id']; ?>" class="collapse <?php echo $isFirst; ?> ml-3">
                                            <?php if (!empty($category['subcategories'])) {
                                                foreach ($category['subcategories'] as $sub_cat) { ?>
                                                <div class="form-check d-flex align-items-center my-2">
                                                    <input type="checkbox" class="form-check-input searchBySector category_filter searchBySel" 
                                                        id="<?php echo $sub_cat['category_id']; ?>" 
                                                        name="categories[]" 
                                                        value="<?php echo $sub_cat['category_id']; ?>" 
                                                        data-parent="<?php echo $category['category_id']; ?>">
                                                    <label style="font-size:14px;" class="form-check-label txt-red" 
                                                        for="<?php echo $sub_cat['category_id']; ?>">
                                                        <?php echo $sub_cat['cat_name']; ?>
                                                    </label>
                                                </div>
                                            <?php } } ?>
                                        </div>
                                    <?php } } ?>  
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                	<?php  
                    if($total_records > 0){
                        ?>
                    	<div class="col-xs-12 col-lg-10 col-lg-offset-1 reportListBox">
                            <div class="paginationBox row">
                                <input type="hidden" id="per_page" name="per_page" value="30">
                                <div class="totalCount col-xs-6 col-6 col-md-3 col-sm-4">
                                  
                                </div>
                            </div>
                            <div class="reportListContainer mt-2">
                                <?php
                                if(!empty($reports)){
                                    foreach($reports as $report){
                                        $keyword = $report['rep_keyword'];
                                    ?>
                                    <div class="row reportListing">
                                        <div class="col-xs-12 col-md-9 col-sm-8">
                                            <div class="contentBox py-0">
                                                <h2 class="mt-0"><a class="listTitle secHeadingLeft" href="<?php echo WEBSITE_URL."market-research/".$report['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>"><?php echo $keyword; ?></a></h2>
                                                <p class="mt-2 mb-0"><?php echo $report['rep_name']; ?></p>
                                                <span class="report-meta"><?php echo date("j M Y", strtotime($report['update_date']));?> | Pages: <?php echo $report['rep_pages'];?> | Format: PPT*, PDF, EXCEL
                                                </span>
                                                <a class="rmlink" href="<?php echo WEBSITE_URL."market-research/".$report['rep_url'].".asp"; ?>" title="<?php echo $at_keyword; ?>">Read More →</a>
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
            // Handle checkbox selection logic
            $(".searchBySel").change(function(){
                var categoryId = $(this).attr("id");

                if ($(this).is(":checked")) {
                    $("input[data-parent='"+categoryId+"']").prop("checked", true);
                } else {
                    $("input[data-parent='"+categoryId+"']").prop("checked", false);
                }

                checkParentStatus($(this));
                updateFilters();
            });

            function checkParentStatus(childCheckbox) {
                var parentId = childCheckbox.attr("data-parent");
                
                if (parentId) {
                    var allSiblingsChecked = true;
                    var anySiblingChecked = false;

                    $("input[data-parent='"+parentId+"']").each(function(){
                        if ($(this).is(":checked")) {
                            anySiblingChecked = true;
                        } else {
                            allSiblingsChecked = false;
                        }
                    });

                    if (!allSiblingsChecked) {
                        $("#" + parentId).prop("checked", false);
                    }
                    if (anySiblingChecked && allSiblingsChecked) {
                        $("#" + parentId).prop("checked", true);
                    }
                }
            }

            function updateFilters() {
                var searchBySector = "";
                $(".category_filter:checked").each(function(){
                    searchBySector += ","+$(this).val();
                });

                if (searchBySector) searchBySector = searchBySector.substring(1);
                $(".hdnSearchBySector").val(searchBySector);
                getAjaxPagination(1);
            }

            // Make first category active on page load
            $(".collapse:first").collapse("show");
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