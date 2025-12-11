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
                        <span>Client Endorsements & Engagement </span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="staticBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 col-md-offset-2 text-white">
                        <h1 class="text-center mb-4 secHeading">Client Endorsements & Engagement </h1>
                        <p class="text-center">
                            Get walked through Persistence Market Research’s way of being servile through endorsements by clients and the engagement models.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clientEndorsementsSec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="headIcon mx-auto"></span>
                        <h2 class="secHeading text-center mb-5">
                            Client Endorsements
                        </h2>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <ul class="list-unstyled clientEndorsList">
                            <li>
                                <p>“Persistence Market Research has helped us immensely in compiling a sound database. Our expectations were exceeded by Persistence Market Research.”</p> 
                                <p class="text-right mb-0"><strong>– Fortune 500 Telecom Company</strong></p>
                            </li>
                            <li>
                                <p>“The market numbers supplied by Persistence Market Research helped us successfully conclude our ongoing project and we are pleased with this purchase.” </p>
                                <p class="text-right mb-0"><strong>– U.S.-based Chemical Company</strong></p>
                            </li>
                            <li>
                                <p>“The customer service provided by Persistence Market Research was great. We got our report well in time and customized to our requirements.” </p>
                                <p class="text-right mb-0"><strong> – Head of Business Development, Leading Electronics Company</strong></p>
                            </li>
                            <li>
                                <p>“Thank you for supplying the report in time for our project to go through. Commendable customer service.”</p>
                                <p class="text-right mb-0"><strong>– Fortune 500 Company</strong></p>
                            </li>
                            <li>
                                <p>“The precise information given in Persistence Market Research’s reports has been priceless to us. We are very happy with this purchase, since the analysis in the report has been important in formulating our strategies.”</p>
                                <p class="text-right mb-0"><strong>– Consultant</strong></p>
                            </li>
                            <li>
                                <p>“The way Persistence Market Research handled the entire transaction, right from customization to after-sales queries, has been very impressive.”</p>
                                <p class="text-right mb-0"><strong>– Leading Semiconductors Company</strong></p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 engagementModeBox">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-responsive" src="assets/images/engagement-model.png" alt="Engagement Model" title="Engagement Model" />
                            </div>
                            <div class="col-md-6">
                                <h2 class="borderBlue">Engagement Model</h2>
                                <p>
                                    The engagement model of Persistence Market Research follows the “client-first” approach, irrespective of it being on ongoing service engagement or an ad-hoc project. The aligning with your company’s structure on the part of Persistence Market Research is such that dynamism, flexibility, and customization – all are found under one roof, and that is – “The Think Tank of Persistence Market Research”.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 bgGrey threeEngagtModeBox">
                        <p class="text-center mb-5 h4">- The Engagement Models put forth by Persistence Market Research are -</p>
                        <div class="row">
                              <div class="col-md-4">
                                  <div class="bg-white p-4">
                                      <h3 class="borderBlue h4">Virtually Simulated Team-based Engagement</h3>
                                      <p>
                                          Persistence Market Research has transcended the barriers of geography by bringing to you its virtually-simulated team-based engagement model, wherein you could keep a tab on the latest market findings pertaining to your business in an all-pervading, comprehensive, flexible, and innovative manner by laying your hands on the 24/7 support provided by its analysts.
                                      </p>
                                  </div>
                              </div>
                            <div class="col-md-4">
                                <div class="bg-white p-4">
                                    <h3 class="borderBlue h4">Engagement based on Query Pointers</h3>
                                    <p>
                                        Persistence Market Research works on the dictum “Nothing Venture, Nothing Have”. In other words, if there are no queries, there is no way to progress.
                                    </p>
                                    <p>
                                        Inroads to the other perspectives towards business could be explored only after queries are raised in that regard and some insights are offered, so as to build a framework as the best foot forward.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-white p-4">
                                    <h3 class="borderBlue h4">Solution-based Engagement with Long-term Warranty</h3>
                                    <p>
                                        Longevity is the key to sustenance. As such, Persistence Market Research provides solution-based engagement model with a bigger vision that could help in sailing through good times as well the not-so-good times!
                                    </p>
                                    <p>
                                        Combination of two 180-degree approaches is meant to take your businesses at the highest pinnacle of glory with our retention-based valuation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="reportList pt-0">
           <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 reportListing">
                        <p class="text-center secHeading mb-5">Our Latest Publication</p>
                        <?php if(isset($latest_reports)){ 
                            foreach($latest_reports as $latest_report){ ?>
                                <div class="contentBox bgGrey">
                                    <h3 class="mt-0"><a class="listTitle secHeadingLeft" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $latest_report['rep_url']; ?>.asp" title="<?php echo ucwords(str_replace("-"," ",$latest_report['rep_url'])); ?>"><?php echo ucwords(str_replace("-"," ",$latest_report['rep_url'])); ?></a></h3>
                                    <p class="mt-4"><?php echo $latest_report['rep_name']; ?></p>
                                    <div class="actionBtn">
                                        <a href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $latest_report['rep_url']; ?>.asp" class="btn btnPrimary" title="Flavored Salt Market">
                                            Read More
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php $this->load->view("partials/footer"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/static.css" rel="stylesheet" />

</body>
</html>