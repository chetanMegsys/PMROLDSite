<!DOCTYPE html>
<html>
<head>
    
    <?php //$this->load->view("partials/meta_links"); ?>
    <?php $this->load->view("frontend/meta_links"); ?>
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
                        <a href="<?php echo WEBSITE_URL . 'market-research-report/' . $parent_category[0]['seo_pagename'].'.asp'; ?>" title="<?php echo $parent_category[0]['cat_name']; ?>">
                            <span><?php echo $parent_category[0]['cat_name']; ?></span>
                        </a>
                    </li>
                    <?php if( $page_heading !== $parent_category[0]['cat_name'] ){ ?>
                    <li>
                        <span><?php echo $page_heading; ?></span>
                    </li>
                    <?php } ?>
                </ol>
            </div>
        </div>
        <section class="listingBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 col-md-offset-2">
                        <h1 class="text-center secHeading"><?php echo $page_heading." Market Reports"; ?></h1>
                        <?php isset($page_heading_content) ? '<p class="text-center">'.$page_heading_content.'</p>' : ''; ?>
                        
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
                            <div class="reportListContainer mt-2">
                                <?php
                                if(!empty($reports)){
                                    foreach($reports as $report){
                                        $keyword = $report['rep_keyword'];
                                    ?>
                                    <div class="row reportListing">
                                        <div class="col-xs-12 col-md-9 col-sm-8">
                                            <div class="contentBox py-0">
                                                <h3 class="mt-0"><a class="listTitle secHeadingLeft" href="<?php echo WEBSITE_URL."market-research/".$report['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>"><?php echo $keyword; ?></a></h3>
                                                <p class="mt-2 mb-0"><?php echo $report['rep_name']; ?></p>
                                                <span class="report-meta"><?php echo date("j M Y", strtotime($report['rep_pub_date']));?> | Pages: <?php echo $report['rep_pages'];?> | Format: PPT*, PDF, EXCEL
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
        <?php
        $currentUrl = current_url(); // Get the current full URL
        $path = parse_url($currentUrl, PHP_URL_PATH); // Extract the path from the URL
        $slug = trim($path, '/'); // Remove leading and trailing slashes
        if (strpos($slug, 'consumer-goods') !== false) { ?>
            <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="22">
        <?php
        }elseif (strpos($slug, 'food-and-beverages') !== false) { ?>
            <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="23">
        <?php
        }elseif (strpos($slug, 'automotive') !== false) { ?>
            <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="24">
        <?php
        }elseif (strpos($slug, 'chemicals-and-materials') !== false) { ?>
            <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="29">
        <?php
        }elseif (strpos($slug, 'it-and-telecommunications') !== false) { ?>
            <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="31">
        <?php
        }elseif (strpos($slug, 'semiconductor-electronics') !== false) { ?>
            <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="33">
        <?php
        }elseif (strpos($slug, 'industrial-automation') !== false) { ?>
            <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="38">
        <?php
        }elseif (strpos($slug, 'healthcare') !== false) { ?>
            <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="39">
        <?php
        }elseif (strpos($slug, 'pharmaceuticals') !== false) { ?>
            <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="40">
        <?php
        }elseif (strpos($slug, 'medical-devices') !== false) { ?>
            <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="41">
        <?php
        }elseif (strpos($slug, 'energy') !== false) { ?>
            <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="42">
        <?php
        }elseif (strpos($slug, 'packaging') !== false) { ?>
            <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="43">
        <?php
        }else{
            ?>
            <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="<?php echo $hdn_cat_id; ?>">
        <?php
        }
    ?>
        <input type="hidden" class="hdnSearchByYear" name="searchByYear" value="">
        <input type="hidden" class="page" id="page" name="page" value="2">
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
                    "searchBySector": searchBySector,
                    "catid": searchBySector
                
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