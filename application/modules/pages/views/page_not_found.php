<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex">
    <?php $this->load->view("frontend/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />
    <?php //$this->load->view("frontend/header"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-listing.css" rel="stylesheet" />
    <?php $this->load->view("frontend/header_home"); ?>
    <main>
        <section class="bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 my-5">
                        <!-- <img class="img-responsive mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/404-img.png" alt="Error 404-page Not Found" title="Error 404-page Not Found" width="288" height="201" /> -->
                        <h3 class="textDanger text-center">
                            We’re fine-tuning the details to bring you the perfect page.
                        </h3>
                        <p class="text-center">In the meantime, search by related keyword below</p>
                        <form class="form-inline mb-4"  action="<?php echo WEBSITE_URL; ?>search" method="GET" style="margin-left: -15px;margin-right: -15px;">
                            <div class="input-group" style="width: 100%;">
                                <input type="text"  id="s" name="query" class="form-control" placeholder="Rearch report by related keyword" autocomplete="off" required="" minlength="3" maxlength="255">
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
                        <p class="text-left bold600"> Popular Industries:</p>
                        <div class="container text-left">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <div class="pmr-industry">
                                            <a class="cat-title" href="<?php echo WEBSITE_URL; ?>market-research-report/consumer-goods.asp">
                                            Consumer Goods
                                            </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pmr-industry">
                                            <a class="cat-title" href="<?php echo WEBSITE_URL; ?>market-research-report/food-and-beverages.asp">
                                            Food & Beverages
                                            </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pmr-industry">
                                            <a class="cat-title" href="<?php echo WEBSITE_URL; ?>market-research-report/automotive.asp">
                                            Automotive & Transportation
                                            </a>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="pmr-industry">
                                            <a class="cat-title" href="<?php echo WEBSITE_URL; ?>market-research-report/healthcare.asp">
                                            Healthcare
                                            </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pmr-industry">
                                            <a class="cat-title" href="<?php echo WEBSITE_URL; ?>market-research-report/it-and-telecommunications.asp">
                                            IT & Telecommunication
                                            </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pmr-industry">
                                            <a class="cat-title" href="<?php echo WEBSITE_URL; ?>market-research-report/semiconductor-electronics.asp">
                                            Semiconductor Electronics
                                            </a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="pmr-industry">
                                            <a class="cat-title" href="<?php echo WEBSITE_URL; ?>market-research-report/industrial-automation.asp">
                                            Industrial Automation
                                            </a>
                                    </div>
                                </div>
                                <div class="col-md-4 " >
                                    <div class="pmr-industry">
                                            <a class="cat-title" href="<?php echo WEBSITE_URL; ?>market-research-report/chemicals-and-materials.asp">
                                            Chemicals & Materials
                                            </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pmr-industry">
                                            <a class="cat-title" href="<?php  echo WEBSITE_URL; ?>market-research-report/energy.asp">
                                            Energy & Utilities
                                            </a>
                                    </div>
                                </div>
                                <div class="col-md-4 " >
                                    <div class="pmr-industry">
                                            <a class="cat-title" href="<?php echo WEBSITE_URL; ?>market-research-report/packaging.asp">
                                            Packaging
                                            </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </section>
    </main>
    <?php $this->load->view("frontend/footer"); ?>
    <style>
        .f-cta{display:none;} .text-black.search-btn.toggle_search.align-text-top.mr-4{display:none;}
        .cat-title{color: #282c7d;} .suggestionsBox{height: 40vh;background: #fff;}
    </style>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/static.css" rel="stylesheet" />

    <?php //$this->load->view("frontend/search_footer"); 
    ?>
</body>
</html>
