<!DOCTYPE html>
<html>
<head>

	<?php // $this->load->view("partials/meta_links"); ?>
    <?php $this->load->view("frontend/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static-mobile.css" rel="stylesheet" />

    <?php //$this->load->view("partials/header_mobile"); ?>
    <?php $this->load->view("frontend/header_mobile"); ?>

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
        <section class="articlesBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 col-md-offset-2 text-center">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-journal-text mb-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                            <path fill-rule="evenodd" d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <h1 class="mb-4 secHeading">Market Research Blogs</h1>
                        <p class="text-left">Looking for Gist of the market you are in? Persistence Market Research brings it to you at just one click !</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgGrey pressReleaseList">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                    	<?php
                    	if(!empty($articles)){
                    		for($i = 0; $i < count($articles); $i ++){
	                    	?>
	                        <div class="mb-2 prListBox bg-white">
	                            <small class="pubDate">
	                                <?php echo date("j M Y",$articles[$i]['creation']); ?>
	                            </small>
	                            <h3 class="mt-0">
	                                <a href="<?php echo WEBSITE_URL."blog/".$articles[$i]['url'].".asp"; ?>" title="<?php echo $articles[$i]['name']; ?>">
	                                    <?php echo $articles[$i]['name']; ?>
	                                </a>
	                            </h3>
	                            <?php $mr_desc = explode("\n",$articles[$i]['short_desc']); echo '<div class="pmr-article-desc">'.$mr_desc[0].'</div>'; ?>
	                            <a class="txtBlue" href="<?php echo WEBSITE_URL."blog/".$articles[$i]['url'].".asp"; ?>" title="Read More">
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
                    <div class="col-md-12 col-sm-12">
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
	                                        <a href="<?php echo WEBSITE_URL."market-research/".$lastest_report['rep_url'].".asp"; ?>" title="<?php echo $lastest_report['rep_name']; ?>">
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
    
    <?php // $this->load->view("partials/footer_mobile"); ?>
    <?php $this->load->view("frontend/footer_mobile"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/media-mobile.css" rel="stylesheet" />

    <script>
    	function getAjaxPagination(page){
            $(".hdnPagination").val(page);
            $(".searchForm").submit(); 
        }
    </script>

</body>
</html>