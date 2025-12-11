<!DOCTYPE html>
<html>
<head>
   
    <?php // $this->load->view("partials/meta_links"); ?>
    <?php $this->load->view("frontend/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-listing.css" rel="stylesheet" />
    <?php // $this->load->view("partials/header"); ?>
    <?php $this->load->view("frontend/header"); ?>

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
                        <span>Blog</span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="pressReleaseBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-md-offset-2 text-center text-white">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-newspaper" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                        </svg>
                        <h1 class="mb-4 secHeading">Market Research Blogs</h1>
                        <p class="text-center">Looking for Gist of the market you are in? Persistence Market Research brings it to you at just one click !</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-12 col-sm-12">
                        <p class="secHeading text-center mb-0">Recent Author</p>
                        <p class="text-center mb-5">The following is a compilation of Author published by Persistence Market Research.</p>
                    </div> -->
                    <div class="col-lg-12 col-sm-12 articleLatestBox">
                        <div class="row">
                        	<?php
                        	if(!empty($author)){
                        	?>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="articlesFirstImg bgColorBox">
                                            <div class="boxContentAbso text-white">
                                                <h3 class="mt-0 mb-2">
                                                    <a class="text-white" href="<?php echo isset($author[0]['url']) ? WEBSITE_URL."blog/".$author[0]['url'].".asp" : ''; ?>" title="<?php echo isset($author[0]['name']) ? $author[0]['name'] : ''; ?>">
                                                        <?php echo isset($author[0]['name']) ? $author[0]['name'] : ''; ?>
                                                    </a>
                                                </h3>
                                                <small>
                                                    Published On : <?php echo isset($author[0]['creation']) ? date("M d, Y",$author[0]['creation']) : ''; ?>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm-6 text-white artLeftGapBox">
                                               <div class="bgColorBox bgPurple" style="min-height: 202px;">
                                                   <div class="boxContent mt-0">
                                                       <h3 class="mt-0 mb-2">
                                                           <a href="<?php echo isset($author[1]['url']) ? WEBSITE_URL."blog/".$author[1]['url'].".asp" : ''; ?>" class="text-white" title="<?php echo isset($author[1]['name']) ? $author[1]['name'] : ''; ?>">
                                                               <?php echo isset($author[1]['name']) ? $author[1]['name'] : ''; ?>
                                                           </a>
                                                       </h3>
                                                       <small>
                                                           Published On : <?php echo isset($author[1]['creation']) ? date("M d, Y",$author[1]['creation']) : ''; ?>
                                                       </small>
                                                   </div>
                                               </div>
                                            </div>
                                            <div class="col-sm-6 text-white artRightGapBox">
                                                <div class="bgColorBox bgGreen" style="min-height: 202px;">
                                                    <div class="boxContent mt-0">
                                                        <h3 class="mt-0 mb-2">
                                                            <a class="text-white" href="<?php echo isset($author[2]['url']) ? WEBSITE_URL."blog/".$author[2]['url'].".asp" : ''; ?>" title="<?php echo isset($author[2]['name']) ? $author[2]['name'] : ''; ?>">
                                                                <?php echo isset($author[2]['name']) ? $author[2]['name'] : ''; ?>
                                                            </a>
                                                        </h3>
                                                        <small>
                                                            Published On : <?php echo isset($author[2]['creation']) ? date("M d, Y",$author[2]['creation']) : ''; ?>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 articleList">
                                <div class="prListBox bg-white py-3">
                                    
                                    <h3 class="mt-0">
                                        <a class="txtBlue" href="<?php echo isset($author[3]['url']) ? WEBSITE_URL."blog/".$author[3]['url'].".asp" : ''; ?>" title="<?php echo isset($author[3]['name']) ? $author[3]['name'] : ''; ?>">
                                            <?php echo isset($author[3]['name']) ? $author[3]['name'] : ''; ?>
                                        </a>
                                    </h3>
                                    <p class="mb-1">
                                        <!-- As per Persistence Market Research,the global sports nutrition
                                        ingredients market  -->
                                        <?php echo isset($author[4]['meta_description']) ? $author[4]['meta_description'] : ''; ?>
                                    </p>
                                    <small class="pubDate">
                                        Published On : <?php echo isset($author[3]['creation']) ? date("M d, Y",$author[3]['creation']) : ''; ?>
                                    </small>
                                </div>
                                <div class="prListBox bg-white py-3">
                                    <h3 class="mt-0">
                                        <a class="txtBlue" href="<?php echo isset($author[4]['url']) ? WEBSITE_URL."blog/".$author[4]['url'].".asp" : ''; ?>" title="<?php echo isset($author[4]['name']) ? $author[4]['name'] : ''; ?>">
                                            <?php echo isset($author[4]['name']) ? $author[4]['name'] : ''; ?>
                                        </a>
                                    </h3>
                                    <p class="mb-1">
                                    <?php echo isset($author[4]['meta_description']) ? $author[4]['meta_description'] : ''; ?>
                                    </p>
                                    <small class="pubDate">
                                        Published On : <?php echo isset($author[4]['creation']) ? date("M d, Y",$author[4]['creation']) : ''; ?>
                                    </small>
                                </div>
                                <div class="prListBox bg-white py-3">
                                    <h3 class="mt-0">
                                        <a class="txtBlue" href="<?php echo isset($author[5]['url']) ? WEBSITE_URL."blog/".$author[5]['url'].".asp" : ''; ?>" title="<?php echo isset($author[5]['name']) ? $author[5]['name'] : ''; ?>">
                                            <?php echo isset($author[5]['name']) ? $author[5]['name'] : ''; ?>
                                        </a>
                                    </h3>
                                    <p class="mb-1">
                                        <!-- As per Persistence Market Research,the global sports nutrition
                                        ingredients market -->
                                        <?php echo isset($author[5]['meta_description']) ? $author[5]['meta_description'] : ''; ?>
                                    </p>
                                    <small class="pubDate">
                                        Published On : <?php echo isset($author[5]['creation']) ? date("M d, Y",$author[5]['creation']) : ''; ?>
                                    </small>
                                </div>
                                <div class="prListBox bg-white py-3">
                                    <h3 class="mt-0">
                                        <a class="txtBlue" href="<?php echo isset($author[6]['url']) ? WEBSITE_URL."blog/".$author[6]['url'].".asp" : ''; ?>" title="<?php echo isset($author[5]['name']) ? $author[6]['name'] : ''; ?>">
                                            <?php echo isset($author[6]['name']) ? $author[6]['name'] : ''; ?>
                                        </a>
                                    </h3>
                                    <p class="mb-1">
                                        <!-- As per Persistence Market Research,the global sports nutrition
                                        ingredients market -->
                                        <?php echo isset($author[6]['meta_description']) ? $author[6]['meta_description'] : ''; ?>
                                    </p>
                                    <small class="pubDate">
                                        Published On : <?php echo isset($author[6]['creation']) ? date("M d, Y",$author[5]['creation']) : ''; ?>
                                    </small>
                                </div>
                            </div>
                            <?php
                        	}
                            ?>
                       </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgGrey pressReleaseList">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                    	<?php
                    	if(!empty($author)){
                    		for($i = 7; $i < count($author); $i ++){
	                    	?>
	                        <div class="mb-2 prListBox bg-white">
	                            <small class="pubDate">
	                                <?php echo date("M d, Y",$author[$i]['creation']); ?>
	                            </small>
	                            <h3 class="mt-0">
	                                <a href="<?php echo WEBSITE_URL."blog/".$author[$i]['url'].".asp"; ?>" title="<?php echo $author[$i]['name']; ?>">
	                                    <?php echo $author[$i]['name']; ?>
	                                </a>
	                            </h3>
	                            <?php $mr_desc = explode("\n",$author[$i]['short_desc']); echo '<div class="pmr-article-desc">'.$mr_desc[0].'</div>'; ?>
	                            <a class="txtBlue" href="<?php echo WEBSITE_URL."blog/".$author[$i]['url'].".asp"; ?>" title="Read More">
	                                Read More
	                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
	                                </svg>
	                            </a>
	                        </div>
                        	<?php
                        	}
                        }
                        ?>
                        <div class="paginationBox row">
                            <nav class="col-xs-12 col-sm-8">
                                <?php echo $pagination; ?>
                            </nav>
                            <div class="totalCount col-xs-12 col-sm-4">
                                <span>Total Records</span><span class="blueText"> (<?php echo $total_records; ?>)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mediaContact text-white text-center">
                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-telephone text-white mb-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                            </svg>
                            <p class="lead">Media Contact</p>
                            <p>Please drop a mail to the Global PR Team for your queries</p>
                            <div class="mt-4">
                                <a class="btn btnOutline" href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact Us">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                        <div class="bg-white mt-5 resReportList">
                            <p class="secHeading text-center">
                                Research Reports
                            </p>
                            <ul class="list-unstyled">
                            	<?php
                            	if(!empty($lastest_reports)){
                            		foreach($lastest_reports as $lastest_report){
	                            	?>
	                                <li>
	                                    <h4>
	                                        <a href="<?php echo WEBSITE_URL."market-research/".$lastest_report['rep_url'].".asp"; ?>" title="<?php echo $lastest_report['rep_name']; ?>" class="pmr-report-title">
	                                            <?php echo $lastest_report['rep_name']; ?>
	                                        </a>
	                                    </h4>
	                                </li>
	                                <?php
	                            	}
	                            }
	                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
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
        <input type="hidden" class="hdnPagination" name="page" value="">
    </form>

    <?php // $this->load->view("partials/footer"); ?>
    <?php $this->load->view("frontend/footer"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/static.css" rel="stylesheet" />


    <link href="<?php echo WEBSITE_URL; ?>assets/css/media.css" rel="stylesheet" />

    <script>
    	function getAjaxPagination(page){
            $(".hdnPagination").val(page);
            $(".searchForm").submit(); 
        }
    </script>

</body>
</html>