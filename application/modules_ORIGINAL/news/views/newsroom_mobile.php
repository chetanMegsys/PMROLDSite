<!DOCTYPE html>
<html>
<head>
	
	<?php $this->load->view("partials/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static-mobile.css" rel="stylesheet" />

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
                        <span>Newsroom</span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="newsRoomBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 col-md-offset-2 text-center text-white">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-newspaper" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                        </svg>
                        <h1 class="mb-4 secHeading">Newsroom</h1>
                        <p class="text-center">How about tapping the latest happenings in market of your concern? Look through Persistence Market Research's newsroom!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="newsRoomListSec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h2 class="text-center secHeading borderBlueCenter">Media Releases</h2>
                    </div>
                    <div class="col-md-12 col-xs-12 newsListBox">
                        <div class="mb-5 newsUpper">
                            <small class="pubDate">
                                <?php echo date("M d, Y",$get_mediarelease[0]['upload_date']); ?>
                            </small>
                            <h3 class="borderBlue mt-0">
                                <a href="<?php echo WEBSITE_URL."mediarelease/".$get_mediarelease[0]['url'].".asp"; ?>" title="<?php echo $get_mediarelease[0]['name']; ?>">
                                    <?php echo $get_mediarelease[0]['name']; ?>
                                </a>
                            </h3>
                            <p>
                                <?php echo substr($get_mediarelease[0]['short_desc'],0,250); ?> ...
                            </p>
                            <div class="reportListing">
                                <a class="btn btnPrimary" href="<?php echo WEBSITE_URL."mediarelease/".$get_mediarelease[0]['url'].".asp"; ?>" title="Read More">
                                Read More
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 lightBlue py-4">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 newsImg">
                                    <img src="<?php echo WEBSITE_URL; ?>assets/images/pmr-logo-white.png" alt="Media Releases" title="Media Releases" />
                                    <img src="<?php echo WEBSITE_URL; ?>assets/images/news-room-1.png" width="292"  height="217" alt="Media Releases" title="Media Releases" />
                                </div>
                                <div class="col-md-12 col-xs-12 text-white newsInfo">
                                    <p class="lead">
                                        Media Releases
                                    </p>
                                    <p>
                                        No more pressing for time! Persistence Market Research offers press releases with updated bites!
                                    </p>
                                    <a class="btn btnOutline" href="<?php echo WEBSITE_URL."media-releases.asp"; ?>" title="Read All Media Releases">
                                        Read All Media Releases
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-md-12 col-xs-12 mt-5">
                        <h2 class="text-center secHeading borderBlueCenter">Article</h2>
                    </div>
                    <div class="col-md-12 col-xs-12 newsListBox">
                        <div class="mb-5 newsUpper">
                            <small class="pubDate">
                                <?php echo date("M d, Y",$get_articles[0]['upload_date']); ?>
                            </small>
                            <h3 class="borderBlue mt-0">
                                <a href="<?php echo WEBSITE_URL."article/".$get_articles[0]['url'].".asp"; ?>" title="<?php echo $get_articles[0]['name']; ?>">
                                    <?php echo $get_articles[0]['name']; ?>
                                </a>
                            </h3>
                            <p>
                                <?php echo substr($get_articles[0]['short_desc'],0,250); ?> ...
                            </p>
                            <div class="reportListing">
                                <a class="btn btnPrimary" href="<?php echo WEBSITE_URL."article/".$get_articles[0]['url'].".asp"; ?>" title="Read More">
                                    Read More
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 lightRed py-4">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 newsImg">
                                    <img src="<?php echo WEBSITE_URL; ?>assets/images/pmr-logo-white.png" alt="Article" title="Article" />
                                    <img src="<?php echo WEBSITE_URL; ?>assets/images/news-room-3.png"  width="265" height="213" alt="Article" title="Article" />
                                </div>
                                <div class="col-md-12 col-xs-12 text-white newsInfo">
                                    <p class="lead">
                                        Article
                                    </p> 
                                    <p>
                                        Make your Strategizing “definite” with Persistence Market Research’s Authentic Articles!
                                    </p>
                                    <a class="btn btnOutline" href="<?php echo WEBSITE_URL."articles.asp"; ?>" title="Read All Article">
                                        Read All Article
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                     
                </div>
            </div>
        </section>
    </main>
    
    <?php $this->load->view("partials/footer_mobile"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/media-mobile.css" rel="stylesheet" />
    
</body>
</html>