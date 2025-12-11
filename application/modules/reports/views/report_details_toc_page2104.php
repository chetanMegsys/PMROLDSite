 <!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("frontend/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>themes/css/theme-report-details.css" rel="stylesheet" />
    <?php $report_keyword = $report_detail[0]['rep_keyword']; ?> 
    <?php $this->load->view("frontend/header_report"); ?>
    
    <div class="fixed-header stickyHeader p-2">
        <div class="container-fluid report-details-tabs d-flex justify-content-between">
            <div class="">
                <a class="navbar-brand p-0" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research Company">
                    <img class="img-fluid" width="120" height="32" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg" alt="Persistence Market Research Company" title="Persistence Market Research Company">
                </a>
            </div>
            <div>
                <ul class="nav nav-tabs" id="myTab">
                <li class="nav-item">
                    <a class="nav-link  font16 text-black2"  href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp" title="Market Bytes">Market Bytes</a>
                </li>
                    <?php if($report_detail[0]['rep_type']=='N') {  ?>
                <li class="nav-item ml-3">
                    <a class="nav-link font16 text-black2" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp#Companies" title="Companies">Companies</a>
                </li>
                    <?php } if(!empty($faqs)){ ?>
                <li class="nav-item ml-3">
                    <a class="nav-link font16 text-black2" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp#faq" title="FAQ">FAQ</a>
                </li>
                    <?php } if($report_detail[0]['rep_type']=='N') {                         
                     ?>        
                <li class="nav-item ml-3">
                    <a class="nav-link active font16 text-black2" data-toggle="tab" href="#TOC" title="View ToC" >View ToC</a>
                </li>
                    <?php } else if($report_detail[0]['rep_type']=='M') {  
                             redirect(WEBSITE_URL."toc/".$report_detail[0]['rep_id'],301);
                         } ?>  
                                                            
            </ul>
            </div>
            <div class="sample-btn">
                <a class="btn  btn-free-sample text-black2 bold500" href="<?php echo WEBSITE_URL; ?>samples/<?php echo $report_detail[0]['rep_id']; ?>" title="Get FREE Report Sample">
                <img src="<?php echo WEBSITE_URL; ?>themes/image/pdf-icon-latest.svg" width="22" height="22" title="Download PDF" alt="Download PDF" class="mr-2 img-fluid">
                    Get FREE Report Sample
                </a>
                 <a href="https://appoint.ly/s/Persistence/introduction" target="_blank" class="btn btn-scheduleCall text-uppercase btn-2 hover-slide-right bold400 animated-button victoria-one" title="Book a 15 min"><span>SCHEDULE A CALL</span> </a> 
            </div>
        </div>
    </div>
     <section class="report-details-topsec report-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <nav>
                            <ol class="breadcrumb bg-transparent p-0 my-0">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo WEBSITE_URL; ?>" class="text-black" title="Persistence Market Report">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item text-black">
                                    <a href="<?php echo WEBSITE_URL; ?>market-research.asp" class="text-black" title="Persistence Market Research">
                                        <span>Market Research</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item" class="text-black">
                                     <a href="<?php echo WEBSITE_URL."market-research/".$report_detail[0]['rep_url']; ?>.asp" class="text-black" title="<?php echo $report_keyword; ?>">
                                    <span><?php echo $report_keyword; ?></span>
                                    </a>
                                </li>
                                 <li class="breadcrumb-item" class="text-black">
                                    <span>ToC</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
					<div class="col-md-3">
						<div class="onlineUser">
							<p class="fs-12 mx-2 text-right mb-1 bold400">
								<img src="<?php echo WEBSITE_URL; ?>themes/image/onlineUserSvg.png" alt="Professionals" class="img-fluid userIcon" width="15" height="15"> <span class="bold500"><u><?php echo rand(200,250); ?></u></span> Users Online</p>
						</div>
					</div>
				</div>
				<div class="row align-items-center">
                    <div class="col-md-9">
                        <div class="report-heading">
                            <h1 class="font27 bold400 my-3"><?php echo $report_keyword; ?></h1>
                            <h2 class="font15 text-black3 bold400"><?php echo $report_detail[0]['rep_name']; ?></h2>
                            <p class="font14 text-black3 bold400 mt-2 lineheight24"><?php echo $report_detail[0]['rep_breadcrumb']!=''?$report_detail[0]['rep_breadcrumb']:''; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                <div class="sample-btn">
                    <a class="btn bold500 btn-free-sample btn-block" href="<?php echo WEBSITE_URL."samples/".$report_detail[0]['rep_id']; ?>" title="Get FREE Report Sample">
                    <img src="<?php echo WEBSITE_URL; ?>themes/image/pdf-icon-latest.svg" width="22" height="22" title="Download PDF" alt="Download PDF" class="mr-2 img-fluid">
                    Get FREE Report Sample
                    </a>
                </div>
                <div class="talkauthorbutton mt-3">
                    <a href="javascript::void(0)" title="Talk To Author" class="btn btn-connect-Auth btn-block bold500 expertPopup" title="Ask An Expert" data-prop="ASK" data-toggle="modal" data-target="#cta-banner-3"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-headset align-middle mr-1" viewBox="0 0 16 16">  <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/></svg> Ask An Expert</a>
                </div> 

					 
                    </div>
                </div>
            </div>
        </section>
        <div class="backgroundgray"></div>
        <section class="report-details-tabs">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="nav-item">
                                <a class="nav-link  font16 text-black2 triggerMarketbyte" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp" title="Market Bytes">Market Bytes</a>
                            </li>
                             <?php if($report_detail[0]['rep_type']=='N') {  ?>
                            <li class="nav-item ml-3">
                                <a class="nav-link font16 text-black2 tiggerCompanies" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp#Companies" title="Companies">Companies</a>
                            </li>
                               <?php } if(!empty($faqs)){ ?>
                            <li class="nav-item ml-3">
                                <a class="nav-link font16 text-black2 triggerfaq" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp#faq" title="FAQ">FAQ</a>
                            </li>
                            <?php } ?>

                            <?php if($report_detail[0]['rep_type']=='N') {

                                ?>
                                <li class="nav-item ml-3">
                                    <a class="nav-link font16 text-black2 triggerToc active show"   id="TOC-tab" data-toggle="tab" href="#TOC" title="View ToC" >View ToC</a>
                                </li>
                                <?php
                            }else  if($report_detail[0]['rep_type']=='M'){
                                ?>
                                 <li class="nav-item ml-3">
                                    <a class="nav-link font16 text-black2"   href="<?php echo WEBSITE_URL; ?>toc/<?php echo $report_detail[0]['rep_id']; ?>" title="Request ToC">Request ToC</a>
                                </li>

                                <?php
                            } ?>
                            
                        </ul>
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade  mt-4" id="MarketBytes">
                                  
                            </div>
							<div class="tab-pane fade mt-4" id="companies">
                                 
                            </div>
                            <div class="tab-pane fade mt-4" id="faq">
                                 
                            </div>
                            <div class="tab-pane fade show active  mt-4" id="TOC">
                                <div class="mb-5">
                                    <h3 class="txt-black text-center font18 mb-4">- Table of Content -</h3>
                                    <p>  <?php echo $report_detail[0]['rep_tab_content']; ?> </p>
                                
                                    <div class="CTA-banner1">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <img src="<?php echo WEBSITE_URL; ?>themes/image/report-sample-latest1.png" width="100" height="140" alt="Sample Report" title="Sample Report">
                                        </div>
                                        <div class="col-md-8 text-center">
                                            <p class="text-black2 font23 bold500 mb-0"><span class="bold700"><u>FREE</u></span> Report Sample is Available</p>
                                            <p class="text-black2 font14 bold500 my-2">In-depth report coverage is now just a few seconds away</p>
                                            <a href="javascript::void(0)" class="btn btn-freeReportSample bold500 text-black2" title="Get FREE Report Sample" data-toggle="modal" data-target="#cta-banner-1"><img src="<?php echo WEBSITE_URL; ?>themes/image/pdf-icon-latest.svg" width="22" height="22" title="Download PDF" alt="Download PDF" class="mr-2 img-fluid"> Get FREE Report Sample</a>
                                        </div>
                                    </div>
                                    <svg viewbox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path id='sineWave' fill="#ccc" fill-opacity="0.2" d="M0,160 C320,300,420,300,740,160 C1060,20,1120,20,1440,160 V0 H0" />
                                        </defs>
                                        <use class="wave" href="#sineWave" />
                                        <use class="wave" x="-100%" href="#sineWave" />
                                        <use class="wave1" href="#sineWave" />
                                        <use class="wave1" x="-100%" href="#sineWave" />
                                        <use class="wave2" href="#sineWave" />
                                        <use class="wave2" x="-100%" href="#sineWave" />
                                    </svg>
                                </div>

                                </div>
                                <div class="mb-5">
                                    <h3 class="txt-black text-center mb-4 font18 ">- List Of Table -</h3>
                                    <p>  <?php echo $report_detail[0]['rep_list_table']; ?> </p>
                                
                                    <div class="CTA-banner4">
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                          <img src="<?php echo WEBSITE_URL;?>themes/image/custom-report-cover.png" width="106px" height="142px" alt="Custom Report Cover" title="Custom Report Cover" class="custom-cover">
                                        </div>
                                        <div class="col-md-9 text-center">
                                              <p class="text-black2 font23 bold500 mb-0">Make This Report Your Own</p>
                                              <p class="text-black2 font16 bold500 my-2">Take Advantage of Intelligence Tailored to your Business Objective</p>
                                            <a href="javascript::void(0)" class="btn btn-customizeRep bold500 font14" title="Get a Customized Version" data-toggle="modal" data-target="#cta-banner-4">
                                            <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.12 28.12" class="align-middle mr-1" fill="currentColor"  stroke="5" width="22" height="22" >><path class="cls-1" d="m23.28,19.96c.43.43.86.86,1.29,1.3.58.59.64,1.4.09,2.03-.43.49-.89.95-1.38,1.38-.63.55-1.43.48-2.02-.1-.42-.42-.84-.84-1.26-1.25-.01-.01-.03-.02.02,0-.84.37-1.64.74-2.45,1.08-.3.13-.62.2-.94.27-.18.04-.24.12-.23.3.01.51-.02,1.03,0,1.54.05,1.03-.74,1.56-1.51,1.59-.56.02-1.13.02-1.69,0-.76-.03-1.54-.57-1.49-1.57.03-.52.01-1.05,0-1.57,0-.09-.08-.24-.15-.26-1.2-.29-2.32-.77-3.4-1.44-.4.41-.8.81-1.2,1.21-.76.76-1.58.76-2.35,0-.34-.33-.67-.68-1.01-1.01-.55-.53-.82-1.54.02-2.27.43-.38.82-.8,1.25-1.22-.09-.16-.18-.3-.26-.44-.52-.89-.91-1.84-1.14-2.85-.06-.24-.16-.29-.38-.29-.49.01-.99-.02-1.48,0-1.05.06-1.58-.78-1.59-1.54,0-.53,0-1.07,0-1.6.01-.77.54-1.6,1.58-1.55.52.03,1.05.01,1.57,0,.09,0,.24-.08.26-.15.29-1.2.77-2.32,1.44-3.4-.41-.41-.83-.82-1.24-1.23-.72-.72-.73-1.56-.01-2.29.35-.36.71-.71,1.07-1.07.53-.53,1.52-.78,2.23.02.39.44.81.83,1.24,1.26.21-.12.4-.23.6-.34.86-.48,1.76-.84,2.72-1.06.19-.04.26-.12.25-.31-.01-.51.02-1.03,0-1.54-.06-1.04.76-1.56,1.51-1.58.55-.02,1.11-.02,1.66,0,.77.02,1.57.56,1.52,1.58-.03.52-.01,1.05,0,1.57,0,.09.08.24.15.26,1.2.28,2.32.77,3.39,1.44.42-.42.86-.82,1.25-1.26.71-.8,1.7-.56,2.23-.03.37.37.74.74,1.11,1.11.11.11.21.24.29.38.3.53.27.65-.22,1-1.82,1.29-3.65,2.58-5.47,3.87-.07.05-.15.1-.27.19-.05-.08-.1-.16-.17-.23-1.78-1.86-3.94-2.52-6.4-1.8-2.43.71-3.9,2.41-4.39,4.89-.67,3.42,1.82,6.82,5.27,7.26,3.18.4,6.01-1.45,6.9-4.52.04-.14.14-.28.26-.37,1.64-1.17,3.29-2.34,4.93-3.5.06-.05.14-.11.2-.11.54,0,1.1-.04,1.62.06.59.11.99.73,1.01,1.42.02.56.02,1.13,0,1.69-.03.77-.56,1.55-1.57,1.5-.52-.03-1.05,0-1.57,0-.14,0-.24,0-.28.18-.27,1.18-.74,2.27-1.37,3.29-.02.02-.02.06-.03.1Z"/><path class="cls-1" d="m15.24,13.76c.57-.4,1.11-.78,1.65-1.16,2.87-2.03,5.74-4.06,8.61-6.1.79-.56,1.4-.45,1.97.34.13.18.25.35.38.53.44.65.33,1.33-.31,1.79-1.59,1.13-3.18,2.25-4.76,3.37-2.42,1.71-4.84,3.43-7.26,5.14-.73.52-1.26.43-1.79-.29-.94-1.3-1.89-2.61-2.84-3.91-.55-.75-.45-1.4.31-1.96.16-.12.32-.23.48-.35.71-.51,1.34-.41,1.87.3.56.75,1.12,1.51,1.7,2.3Z"/></svg>
                                             Get a Customized Version</a>
                                        </div>
                                    </div>
                                    <div class="banner4-animation">
                                        <div class="bg"></div>
                                        <div class="bg bg2"></div>
                                        <div class="bg bg3"></div>
                                    </div>
                                </div>
                                
                                </div>
                                <div class="mb-5">
                                <h3 class="txt-black text-center mb-4 font18 ">- List Of Chart -</h3>
                                    <p>  <?php echo $report_detail[0]['rep_list_chart']; ?> </p>
                                </div>
                             </div>
                        </div>
                    </div>
                    <!--------- Col-3 -------->
                    <div class="col-md-3">
                        <aside class="right-side-section marginTop70">
                            <div class="sample-btn d-none" >
                                <a class="btn bold500 btn-free-sample" href="<?php echo WEBSITE_URL."samples/".$report_detail[0]['rep_id']; ?>" title="Get FREE Report Sample">
                                    <img src="<?php echo WEBSITE_URL; ?>themes/image/pdf-icon-latest.svg" width="22" height="22" title="Download PDF" alt="Download PDF" class="mr-2 img-fluid">
                                    Get FREE Report Sample
                                </a>
                            </div>
                            
                             <div class="PremiumReportInfo right-boxes pb-4 pt-0 mt-0 mb-2">
                                <p class="font16 txt-black py-3 m-0 bold400 text-center">- Premium Report Details -</p>
                                <div class="d-flex flex-row px-lg-3">
                                    <div class="w-50 pr-3">
                                        <!-- <img src="<?php echo WEBSITE_URL; ?>themes/image/cover-img.png" width="85" height="112" class="img-fluid" title="<?php echo $report_keyword; ?>" alt="<?php echo $report_keyword; ?>"> -->
                                        <img src="<?php echo WEBSITE_URL; ?>themes/image/report-sample-latest1.png" width="85" height="112" class="img-fluid" title="<?php echo $report_keyword; ?>" alt="<?php echo $report_keyword; ?>">
                                    </div>
                                    <div>
                                        <ul class="list-unstyled mb-1">
                                            <li class="txt-black1 font10 pb-2"><span class="date-mm">  PMRREP<?php echo $report_detail[0]['rep_id']; ?> </span></li>
                                                <?php if(isset($report_detail[0]['rep_type']) && $report_detail[0]['rep_type']=='N'){ 
                                            ?>
                                            <li class="txt-black1 font10 pb-2"><span class="date-mm"> <?php echo date("F-Y",strtotime($report_detail[0]['update_date'])); ?> </span> </li>
                                                <?php } ?>
                                            <li class="txt-black1 font10 pb-2"><span class="date-mm"><?php echo $report_detail[0]['cat_name']; ?></span></li>
                                            <li class="txt-black1 font10 pb-2"><span class="txt-black1"><?php echo $report_detail[0]['rep_type']=='N' ? $report_detail[0]['rep_pages']." Pages" : 'Ongoing'; ?> </span></li>
                                            <li class="txt-black1 font10 pb-2 "><span class="txt-black1">PPT, PDF, WORD, EXCEL </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="get-started-box right-boxes pb-4 pt-0 px-3 mt-3 text-center">
                                <p class="font16 txt-black py-3 m-0 bold400 text-center">- Get Started -</p>
                                <p class="font12 bold400">Get insights that lead to new growth opportunities</p>
                                <a class="btn btn-purchesReport bold500 text-black" href="<?php echo WEBSITE_URL."checkout/".$report_detail[0]['rep_id']; ?>" title="<?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?>">
									<img src="<?php echo WEBSITE_URL;?>themes/image/purchase-report-icon.png" width="20" height="26" alt="Purchase Report" title="Purchase Report" class="mr-2 align-bottom">
                                    <?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?></a>
                            </div>
                            

                            <div class="Customization-box right-boxes pb-4 pt-0 px-3 mt-4 text-center">
                                <p class="font16 txt-black py-3 m-0 bold400 text-center">- Customization -</p>
                                <p class="font12 bold400">Explore Intelligence Tailored to Your Business Goals.</p>
                                <div class="btn-container">
                                     <a href="javascript::void(0)" class="btn btn-Customization btn-custo bold500 request_popup" data-name="Request For Customization" data-prop="RC" data-btn="Get Customized Report" title="Request Customization" data-toggle="modal" data-target="#talk-to-author" data-class="btn-green">
                                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.12 28.12" class="align-middle mr-1" fill="currentColor" stroke="5" width="22" height="22">&gt;<path class="cls-1" d="m23.28,19.96c.43.43.86.86,1.29,1.3.58.59.64,1.4.09,2.03-.43.49-.89.95-1.38,1.38-.63.55-1.43.48-2.02-.1-.42-.42-.84-.84-1.26-1.25-.01-.01-.03-.02.02,0-.84.37-1.64.74-2.45,1.08-.3.13-.62.2-.94.27-.18.04-.24.12-.23.3.01.51-.02,1.03,0,1.54.05,1.03-.74,1.56-1.51,1.59-.56.02-1.13.02-1.69,0-.76-.03-1.54-.57-1.49-1.57.03-.52.01-1.05,0-1.57,0-.09-.08-.24-.15-.26-1.2-.29-2.32-.77-3.4-1.44-.4.41-.8.81-1.2,1.21-.76.76-1.58.76-2.35,0-.34-.33-.67-.68-1.01-1.01-.55-.53-.82-1.54.02-2.27.43-.38.82-.8,1.25-1.22-.09-.16-.18-.3-.26-.44-.52-.89-.91-1.84-1.14-2.85-.06-.24-.16-.29-.38-.29-.49.01-.99-.02-1.48,0-1.05.06-1.58-.78-1.59-1.54,0-.53,0-1.07,0-1.6.01-.77.54-1.6,1.58-1.55.52.03,1.05.01,1.57,0,.09,0,.24-.08.26-.15.29-1.2.77-2.32,1.44-3.4-.41-.41-.83-.82-1.24-1.23-.72-.72-.73-1.56-.01-2.29.35-.36.71-.71,1.07-1.07.53-.53,1.52-.78,2.23.02.39.44.81.83,1.24,1.26.21-.12.4-.23.6-.34.86-.48,1.76-.84,2.72-1.06.19-.04.26-.12.25-.31-.01-.51.02-1.03,0-1.54-.06-1.04.76-1.56,1.51-1.58.55-.02,1.11-.02,1.66,0,.77.02,1.57.56,1.52,1.58-.03.52-.01,1.05,0,1.57,0,.09.08.24.15.26,1.2.28,2.32.77,3.39,1.44.42-.42.86-.82,1.25-1.26.71-.8,1.7-.56,2.23-.03.37.37.74.74,1.11,1.11.11.11.21.24.29.38.3.53.27.65-.22,1-1.82,1.29-3.65,2.58-5.47,3.87-.07.05-.15.1-.27.19-.05-.08-.1-.16-.17-.23-1.78-1.86-3.94-2.52-6.4-1.8-2.43.71-3.9,2.41-4.39,4.89-.67,3.42,1.82,6.82,5.27,7.26,3.18.4,6.01-1.45,6.9-4.52.04-.14.14-.28.26-.37,1.64-1.17,3.29-2.34,4.93-3.5.06-.05.14-.11.2-.11.54,0,1.1-.04,1.62.06.59.11.99.73,1.01,1.42.02.56.02,1.13,0,1.69-.03.77-.56,1.55-1.57,1.5-.52-.03-1.05,0-1.57,0-.14,0-.24,0-.28.18-.27,1.18-.74,2.27-1.37,3.29-.02.02-.02.06-.03.1Z"></path><path class="cls-1" d="m15.24,13.76c.57-.4,1.11-.78,1.65-1.16,2.87-2.03,5.74-4.06,8.61-6.1.79-.56,1.4-.45,1.97.34.13.18.25.35.38.53.44.65.33,1.33-.31,1.79-1.59,1.13-3.18,2.25-4.76,3.37-2.42,1.71-4.84,3.43-7.26,5.14-.73.52-1.26.43-1.79-.29-.94-1.3-1.89-2.61-2.84-3.91-.55-.75-.45-1.4.31-1.96.16-.12.32-.23.48-.35.71-.51,1.34-.41,1.87.3.56.75,1.12,1.51,1.7,2.3Z"></path></svg> Request Customization</a>
                                </div>
                            </div>

                            <div class="quickContact right-boxes px-2 pt-0 pb-0 mt-4 text-center">
                                <p class="fs-16 txt-black contactList py-3 bold400 m-0">- Quick Contact -</p>
                                <div class="QuickContactList">
                                    <div class="whatsapp contactList text-left pr-2 pl-3">
                                        <a href="https://api.whatsapp.com/send?phone=919511705688" class="text-black3 font14 d-flex" title="Chat on Whatsapp"><span class="quickContactIMG"></span> <span class="quickContactText">Chat on Whatsapp</span></a>
                                    </div>
                                    <div class="contact1 contactList text-left pr-2 pl-3">
                                        <a href="tel:+1(628)251-1583" class="text-black3 font14 d-flex" title="+1 800-961-0353"><span class="quickContactIMG"></span> <span class="quickContactText">+1 800-961-0353</span></a>
                                    </div>
                                    <div class="contact2 contactList text-left pr-2 pl-3">
                                        <a href="tel:+16465687751" class="text-black3 font14 d-flex" title="+1-646-568-7751"><span class="quickContactIMG"></span> <span class="quickContactText">+1-646-568-7751</span></a>
                                    </div>
                                    <div class="contact3 contactList text-left pr-2 pl-3">
                                        <a href="tel:+18888634084" class="text-black3 font14 d-flex" title="+1 888-863-4084"><span class="quickContactIMG"></span> <span class="quickContactText">+1 888-863-4084</span></a>
                                    </div>
                                    <div class="contact4 contactList text-left pr-2 pl-3">
                                        <a href="mailto:sales@persistencemarketresearch.com" class="text-black3 font14 d-flex" title="Email Us"><span class="quickContactIMG"></span> <span class="quickContactText">Email Us</span></a>
                                    </div>
                                </div>  
                            </div>

                           

                            <div class="Our-clients right-boxes pb-4 pt-0 mt-4 text-center">
                                <p class="font16 txt-black py-3 m-0 bold400 text-center">- Prestigious Clients -</p>
                                <img src="<?php echo WEBSITE_URL; ?>themes/image/clients-<?php echo $report_detail[0]['category_id']; ?>.svg" title="<?php echo $report_detail[0]['cat_name']; ?>" width="143" height="109" alt="<?php echo $report_detail[0]['cat_name']; ?>">
                            </div>
                            <div class="member-of right-boxes pb-4 pt-0 mt-4 mb-4 px-3 text-center">
                                
                                <p class="font16 txt-black py-3 m-0 bold400 text-center">- Member Of -</p>
                                 <a href="https://www.dnb.com/business-directory/company-profiles.persistence_market_research_private_limited.9abc6bce674200f850b02f07995c6f97.html" title="Duns Registered" target="_blank">
                                      <img class="" width="104" height="85" src="<?php echo WEBSITE_URL; ?>themes/image/dun-logo-new.png" alt="Duns Registered" title="Duns Registered">

                                 </a>
                                
                                <p class="font16 txt-black py-3 m-0 bold400 text-center">- Secured Payment -</p>
                                <img class="" width="156px" height="49" src="<?php echo WEBSITE_URL; ?>themes/image/secureTrust-logo.png" alt="Secure Trust" title="Secure Trust">
                            
                                <p class="font16 txt-black py-3 m-0 bold400 text-center">- Policy Compliance -</p>
                                <img class="" src="<?php echo WEBSITE_URL; ?>themes/image/lms-logo.png" width="72px" height="63px" alt="GDPR" title="GDPR" height="63px" width="72px">
                                <p class="font12 lineheight20 mb-0 mt-2">We are GDPR compliant! We protect your transactions & personal information.</p>
                            </div>

                             <?php
                              if(!empty($related_reports)){
                              ?>
                            <div class="relatedReportslist px-2 pt-0 pb-4 mt-0 mb-4 right-boxes">
                                <p class="font16 txt-black py-3 m-0 bold400 text-center">- Related Reports -</p>
                                <ul class="relatedReports-ul pl-4 m-0">
                                    <?php
                                    foreach($related_reports as $related_report){
                                    ?>
                                    <li><a href="<?php echo WEBSITE_URL."market-research/".$related_report['rep_url'].".asp"; ?>" class="text-black font14" title="<?php echo $related_report['rep_keyword']; ?>"><?php echo $related_report['rep_keyword']; ?></a></li>
                                   <?php 
                                    }  
                                    ?>
                                </ul>
                            </div>
                            <?php 
                            }  
                            ?>

                        </aside>
                       
                    </div>
                </div>
            </div>
        </section>

    <?php $this->load->view("frontend/footer"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL; ?>themes/css/report-details.css">
	<!-- google translater start -->
	<div class="fixTranslator">
		<a class="float-left mr-4" href="javascript::void(0)">
			<img src="<?php echo WEBSITE_URL; ?>themes/image/translator.png" alt="Google translate" title="Google translate" height="32" width="32">
		</a>
		<div id="google_translate_element"></div>
	</div>
	
    <a href="javascript::void(0)" id="scrollToTop" title="Back to top" class="">
        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-up text-white mt-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"></path>
        </svg>
    </a>
    <?php $this->load->view("cta_popup_web"); ?>
 
 <!-- talk to author popup -->
<div class="modal fade cta-modal cta-b1-modal" id="talk-to-author" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row m-0">
                    <div class="col-lg-4 p-0">
                        <div class="modal-report d-flex align-items-center justify-content-center flex-column h-100">
                            <img src="<?php echo WEBSITE_URL; ?>themes/image/custome-report-new.png" width="121" height="170" alt="CTA Banner" title="CTA Banner">
                            <div class="mt-3">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 p-0">
                        <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close" style="outline:0">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p class="text-center mt-3 mb-2 modalHead"><span class="bold700 requestPopupTitle"> Talk To Athour</span></p>
                        <form class="" name="" action="<?php echo $submit_url; ?>" method="POST">
                            <?php
                                $name = $this->security->get_csrf_token_name(); 
                                $hash = $this->security->get_csrf_hash();
                                $_SESSION[$name] = $hash;
                            ?>

                            <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
                            <input type="hidden" name="source" value="FWP" />
                            <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                            <input type="hidden" name="type" class="hdnType" value="ASK">

                              <div class="form-group position-relative">
                                <label>Business email*</label>
                                <input type="email" name="emailId" id="idFctMREmailId" class="form-control emailId" required="required" placeholder=""  pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                </svg>
                                <span class="text-danger fs-12" id="errorFullName"></span>
                              </div>
                              <div class="form-group position-relative">
                                <label>Phone Number*</label>
                                <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="" required="required" maxlength="14">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                </svg>
                                <span class="text-danger fs-12" id="errorPhoneNo"></span>
                              </div>
                              <div class="form-group position-relative mb-2">
                                <label>Full Name*</label>
                                <input type="text" name="name" id="idName" class="form-control name" placeholder="" required="required">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                </svg>
                              </div>
                              <div class="text-center">
                                <p class="text-grey mb-0 font10">Your personal details are safe with us. 
                                  <a href="<?php echo WEBSITE_URL; ?>privacy-policy.asp" target="_blank">Privacy Policy*</a>
                                </p>
                              </div>
                              <button type="submit" class="buttonMyclass btn requestFreeSample btn-orange" name="btnSubmit">  <span class=" requestFormButton"> Talk To Athor </span> </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 
<script type="text/javascript">
function googleTranslateElementInit() { new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages : 'ar,zh-CN,zh-TW,cs,da,nl,en,eo,et,fi,fr,de,iw,hu,it,ja,ko,la,lb,no,pl,pt,ro,ru,sr,sk,es,th,tr'}, 'google_translate_element'); }
</script>

    <script>
        $( document ).ready(function() {
            


  $(".expertPopup").click(function(){
             
            var btnclass = $(this).attr("data-class");
            var btnname = $(this).attr("data-btn");
            var formType =  $(this).attr("data-prop");
        
         
            if(formType == 'ASK' )
            {
                $(".myclassName").removeClass('btn requestFreeSample');
                 $(".myclassName").addClass('btn requestFreeSample btn-orange');
            }
            else{  
              $(".myclassName").removeClass('btn requestFreeSample btn-orange');
                 $(".myclassName").addClass('btn requestFreeSample');
            }
            
             
           
        });

 
                $(".request_popup").click(function(){
            var ctatype = $(this).attr("data-name");
            var btnclass = $(this).attr("data-class");
            var btnname = $(this).attr("data-btn");
            var formType =  $(this).attr("data-prop");
         //    alert(formType);
         
            if(formType == 'ASK' )
            {
                $(".buttonMyclass").removeClass('btn requestFreeSample btn-green');
                 $(".buttonMyclass").addClass('buttonMyclass btn requestFreeSample btn-orange');
            }
            else{
              $(".buttonMyclass").removeClass('btn requestFreeSample btn-orange');
                 $(".buttonMyclass").addClass('buttonMyclass btn requestFreeSample btn-green');
            }
            //  alert(ctatype);  alert(btnname);
             $('.requestPopupTitle').html(ctatype);
            $(".hdnType").val($(this).attr("data-prop"));
            
            $(".requestFormButton").html(btnname);
           
        });


                $("#faq-tab").on("click",function(){
                    $(".triggerfaq").trigger("click");
                });
                $("#MarketBytes-tab").on("click",function(){
                    $(".triggerMarketbyte").trigger("click");
                });
                $("#companies-tab").on("click",function(){
                    $(".tiggerCompanies").trigger("click");
                });
                 $("#TOC-tab").on("click",function(){
                    $(".triggerToc").trigger("click");
                });

                 // var scrollToTop = $("#scrollToTop"); $(window).scroll(function () { if ($(window).scrollTop() > 300) { scrollToTop.addClass("show") } else { scrollToTop.removeClass("show") } }); scrollToTop.on("click", function (a) { a.preventDefault(); $("html, body").animate({ scrollTop: 0 }, "300") });
                    
       // $(function () {
       //       $('[data-toggle="tooltip"]').tooltip()
       //  });
          var topScrollPosition = $(".PremiumReportInfo").offset().top;
         $(window).scroll(function () {
                  var a = $(window).scrollTop();
                  var b = $(window).scrollTop();
                  if (a >= topScrollPosition) {
                      $(".stickyHeader").addClass("showStickyheader");
                  } else {
                      $(".stickyHeader").removeClass("showStickyheader");
                  }

                  
              });

        $("body").on("focus",".emailId,.phNo,.name",function(){
                    if($(this).hasClass("border-green")){
                        $(this).removeClass("border-red");
                        $(this).parent().find(".bi-info-circle").hide();
                    }else{
                        $(this).addClass("border-red");
                        $(this).parent().find(".bi-info-circle").show();
                    }
                });
                $("body").on("keyup",".emailId,.phNo,.name",function(){
                    if(!($(this).is(":invalid"))) {
                        $(this).removeClass("border-red");
                        $(this).addClass("border-green");
                        $(this).parent().find(".bi-check-circle-fill").show();
                        $(this).parent().find(".bi-info-circle").hide();
                    }else{
                        $(this).addClass("border-red");
                        $(this).removeClass("border-green");
                        $(this).parent().find(".bi-check-circle-fill").hide();
                        $(this).parent().find(".bi-info-circle").show();
                    }
                });
				
				$("table").addClass("table table-bordered");
});




    </script>
    <script>
    
$(document).ready(function(){
  
    var url = window.location.href;
     
      var index = url.indexOf("#");      
      if (index !== -1)
      {
          var hash = url.substring(index + 1);
                   
          switch(hash){           

              case 'thankyou':
                 <?php if(isset($_SESSION['thankyou'])){ unset($_SESSION['thankyou']); ?>
                  $("#thank-you-modal").modal("show");
                  <?php unset($_SESSION['thankyou']); } ?>
                  break;
          }
      }
  });
</script>   

<script>
$(document).ready(function(){

    $("#s").keyup(function(){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        if(this.value!=""){
            $.ajax({
                url: "<?php echo WEBSITE_URL; ?>elastic_search",
                type:'GET',
                data:{'keyword': this.value},
                success: function(e){
                    var data =jQuery.parseJSON(e);
                    
                    rep_data = data['reports'];

                    $("#suggestionsList").empty();
                    var sug = "<ul class='list-unstyled suggested-searches-ul'><li><p><strong>Reports</strong></p></li>";
                    for(i=0;i<rep_data.length;i++){
                        sug += '<li><a href="<?php echo WEBSITE_URL; ?>market-research/' + rep_data[i]['rep_url'] + '.asp">' + rep_data[i]['rep_keyword'] + " in <strong>" + rep_data[i]['cat_name'] + "</strong></a> </li>";
                    }

                    sug += '</ul>';
                    $("#suggestionsList").html(sug);
                    $("#suggestionsBox").removeClass('d-none');
                    $(".deskSuggList").removeClass('d-none');
                }
            });
        }else{
            $("#suggestionsList").empty();
            $("#suggestionsBox").addClass('d-none');
            $(".deskSuggList").addClass('d-none');
        }
    }); 
});

$(function() {
  $('#s').on('keydown', function(e) {
    console.log(this.value);
    if (e.which === 32 &&  e.target.selectionStart === 0) {
      return false;
    }  
  });
});

</script>

 <?php if(isset($faqs) && !empty($faqs)){ 
  //  $json_link = json_encode("<a href='".WEBSITE_URL.'market-research/'.$report_detail[0]['rep_url'].".asp'>Read More</a>");
    ?>
<script type="application/ld+json">

    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
<?php for($i = 0; $i < count($faqs); $i ++){ ?>
            {
                "@type": "Question",
                "name": "<?php echo strip_tags($faqs[$i]['question']); ?>",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<?php echo strip_tags($faqs[$i]['answer']); ?>"
                }
            }<?php if((count($faqs) - 1) > $i){ ?>,<?php } ?>
<?php } ?>
        ]
    }

</script>
<?php } ?>   
 
<script>
  

document.oncontextmenu = function() {return false;};

$(document).mousedown(function(e){ if( e.button == 2 ) { return false;  }  return true; });

var ctrlDown = false,
ctrlKey = 17,
cmdKey = 91,
vKey = 86,
cKey = 67;



$(document).keydown(function(e) {
if (e.keyCode == ctrlKey || e.keyCode == cmdKey) ctrlDown = true;
}).keyup(function(e) {
if (e.keyCode == ctrlKey || e.keyCode == cmdKey) ctrlDown = false;
});



$(".no-copy-paste").keydown(function(e) {
if (ctrlDown && (e.keyCode == vKey || e.keyCode == cKey)) return false;
});


 

$(document).ready(function() {
$('body').bind('cut copy paste', function(event) {
event.preventDefault();
});
});


document.onkeypress = function (event) {  
event = (event || window.event);  
if (event.keyCode == 123) {  
//return false;  
}  
}  
document.onmousedown = function (event) {  
event = (event || window.event);  
if (event.keyCode == 123) {  
//return false;  
}  
}  
document.onkeydown = function (event) {  
event = (event || window.event);  
if (event.keyCode == 123) {  
//return false;  
}  
}  


window.ondragstart = function() { return false; } 

document.addEventListener('keyup', (e) => {
    if (e.key == 'PrintScreen') {
        navigator.clipboard.writeText('');
        
    }
});

 
document.addEventListener('keydown', (e) => {
    if ((e.ctrlKey) && ( e.key == 'i' || e.key == 'p' || e.key == 'u' || e.key == 'P' || e.key == 'U') ) {
         
        e.cancelBubble = true;
        e.preventDefault();
        e.stopImmediatePropagation();
    }

});


 $(window).on('keydown',function(event)
    {
    if(event.keyCode==123)
    {
         
        //return false;
    }
    else if(event.ctrlKey && event.shiftKey && event.keyCode==73)
    {
         
       /// return false;   
    }
    else if(event.ctrlKey && event.keyCode==73)
    {
        
        //return false;   
    }
});
</script>
 </body>
</html>