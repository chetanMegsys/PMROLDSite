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
                        <span>Persistence Market Research In The News</span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="pressReleaseBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 col-md-offset-2 text-center text-white">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-newspaper" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                        </svg>
                        <h1 class="mb-4 secHeading">Persistence Market Research In The News</h1>
                        <p class="text-center">Get the news in store for your market in question with Persistence Market Research’s no-latency “news”</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <ul class="list-unstyled inTheNewsList">
                            <?php
                            if(!empty($pmr_in_the)){
                                foreach($pmr_in_the as $pin){
                                ?>
                                <li class="row">
                                   <div class="col-md-8">
                                       <p class="h3 mb-5">
                                           <?php echo $pin['title']; ?>
                                       </p>
                                       <a class="btn btnPrimary py-2" href="<?php echo $pin['link']; ?>" rel="nofollow" target="_blank" title="Read More">
                                           Read More
                                       </a>
                                   </div>
                                   <div class="col-md-4 newsListImg">
                                    <img class="img-responsive" src="<?php echo WEBSITE_URL; ?>assets/images/pmr-in-the-news.jpg" width="160" height="53" alt="<?php echo $pin['title']; ?>">
                                </div>
                                </li>
                                <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="paginationBox row">
                    <nav class="col-xs-12 col-sm-8">
                        <?php echo $pagination; ?>
                    </nav>
                    <div class="totalCount col-xs-12 col-sm-4">
                        <span>Total Records</span><span class="blueText"> (<?php echo $total_records; ?>)</span>
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