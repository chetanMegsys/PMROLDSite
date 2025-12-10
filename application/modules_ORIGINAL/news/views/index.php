<!DOCTYPE html>
<html>
<head>

	<?php $this->load->view("partials/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />

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
                        <span>News</span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="newsBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 col-md-offset-2 text-center text-white">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-newspaper" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                        </svg>
                        <h1 class="mb-4 secHeading">News</h1>
                        <p class="text-center">Get on to the ‘New’ gear with Persistence Market Research’s latest offering of “New Events with Service”</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 newsListPadding">
                        <ul class="list-unstyled inTheNewsList">
                            
	                       <?php
	                       if(!empty($allnews)){
	                       		foreach($allnews as $news){
	                       	   	?>
	                       	   <li class="row">
	                               <div class="col-md-5">
	                                   <small>Published : <?php echo date("d F Y",strtotime($news['publish_date'])); ?></small>
	                                   <p class="h3 mb-5">
	                                       <a href="<?php echo strtolower(WEBSITE_URL."news/".date("Y/F",strtotime($news['publish_date']))."/".$news['news_url']); ?>" class="text-dark" title="<?php echo $news['news_title']; ?>">
	                                           <?php echo $news['news_title']; ?>
	                                       </a>
	                                   </p>
	                               </div>
	                                <div class="col-md-4">
	                                    <p>
	                                        <?php echo substr($news['short_description'], 0, 150); ?> ...
	                                    </p>
	                                </div>
	                                <div class="col-md-3 newsReadMore">
	                                    <a class="btn btnPrimary py-2" href="<?php echo strtolower(WEBSITE_URL."news/".date("Y/F",strtotime($news['publish_date']))."/".$news['news_url']); ?>" title="Read More">
	                                        Read More
	                                    </a>
	                                </div>
	                    		</li>
	                    		<?php
	                    		}
	                    	}
	                    	?>
                            
                        </ul>
                        <div class="paginationBox row">
                            <nav class="col-xs-12 col-sm-8">
                                <?php echo $pagination; ?>
                            </nav>
                            <div class="totalCount col-xs-12 col-sm-4">
                                <span>Total Records</span><span class="blueText"> (<?php echo $total_records; ?>)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        
                        <div class="archivesBox text-center">
                            <h3 class="mt-0">Market Research Reports</h3>
                            <p class="mb-4 px-2">
                                Persistence Market Research’s
                                flexible, accurate, and superior
                                quality research offerings cater to
                                a wide range of client requests.
                            </p>
                            <div class="pb-5">
                                <a class="txtBlue" href="<?php echo WEBSITE_URL."market-reports.asp"; ?>" title="View All Report">View All Report</a>
                            </div>
                        </div>
                        <div class="archivesBox text-center">
                            <h3 class="mt-0">Solutions</h3>
                            <p class="mb-4 px-2">
                                Good leadership enables
                                seamless interaction of various
                                business aspects, such as labor,
                                land, capital, and entrepreneurship.
                            </p>
                            <div class="pb-5">
                                <a class="txtBlue" href="<?php echo WEBSITE_URL."solutions-by-clients.asp"; ?>" title="Persistence Market Research Solutions">Persistence Market Research Solutions</a>
                            </div>
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

    <?php $this->load->view("partials/footer"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/media.css" rel="stylesheet" />

    <script>
    	function getAjaxPagination(page){
            $(".hdnPagination").val(page);
            $(".searchForm").submit(); 
        }
    </script>
    
</body>
</html>