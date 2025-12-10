 <!DOCTYPE html>
 <html lang="en">

 <head>
     <?php $this->load->view("frontend/meta_links_reports"); ?>

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
                         <a class="nav-link active font14 text-black2 myactiveFloatclass" id="MarketBytes-tab1" data-toggle="tab" href="#MarketBytes" title="Market Bytes">Market Bytes</a>
                     </li>
                     <?php if ($report_detail[0]['rep_type'] == 'N') {  ?>
                         <li class="nav-item ml-3">
                             <a class="nav-link font14 text-black2 myactiveFloatclass" id="companies-tab1" data-toggle="tab" href="#companies" title="Companies">Companies</a>
                         </li>
                     <?php }
                        if (!empty($faqs)) { ?>
                         <li class="nav-item ml-3">
                             <a class="nav-link font14 text-black2 myactiveFloatclass" id="faq-tab1" data-toggle="tab" href="#faq" title="FAQ">FAQ</a>
                         </li>
                     <?php }
                        if ($report_detail[0]['rep_type'] == 'N') {
                        ?>
                         <li class="nav-item ml-3">
                             <a class="nav-link font14 text-black2" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>/toc" title="View ToC">View ToC</a>
                         </li>
                     <?php } else if ($report_detail[0]['rep_type'] == 'M') {

                        ?> <li class="nav-item ml-3">
                             <a class="nav-link font14 text-black2" href="<?php echo WEBSITE_URL; ?>toc/<?php echo $report_detail[0]['rep_id']; ?>" title="Request ToC">Request ToC</a>
                         </li>
                     <?php } ?>

                 </ul>
             </div>
             <div class="sample-btn">
                 <a class="btn btn-free-sample text-black2 bold500" title="Get FREE Report Sample" href="<?php echo WEBSITE_URL; ?>samples/<?php echo $report_detail[0]['rep_id']; ?>">
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
                                 <span><?php echo $report_keyword; ?></span>
                             </li>
                         </ol>
                     </nav>
                 </div>
                 <div class="col-md-3">
                     <div class="onlineUser">
                         <p class="fs-12 mx-2 text-right mb-1 bold400">
                             <img src="<?php echo WEBSITE_URL; ?>themes/image/onlineUserSvg.png" alt="Professionals" class="img-fluid userIcon" width="15" height="15"> <span class="bold500"><u><?php echo rand(200, 250); ?></u></span> Users Online
                         </p>
                     </div>
                 </div>
             </div>
             <div class="row align-items-center">
                 <div class="col-md-9">
                     <div class="report-heading">
                         <h1 class="font27 bold400 my-3"><?php echo $report_keyword; ?></h1>
                         <h2 class="font15 text-black3 bold400"><?php echo $report_detail[0]['rep_name']; ?></h2>
                         <p class="font14 text-black3 bold400 mt-2 lineheight24"><?php echo $report_detail[0]['rep_subtitle'] != '' ? $report_detail[0]['rep_subtitle'] : ''; ?></p>
                     </div>
                 </div>
                 <div class="col-md-3">

                     <div class="sample-btn">
                         <a class="btn bold500 btn-free-sample btn-block" href="<?php echo WEBSITE_URL . "samples/" . $report_detail[0]['rep_id']; ?>" title="Get FREE Report Sample">
                             <img src="<?php echo WEBSITE_URL; ?>themes/image/pdf-icon-latest.svg" width="22" height="22" title="Download PDF" alt="Download PDF" class="mr-2 img-fluid">
                             Get FREE Report Sample
                         </a>
                     </div>
                     <div class="talkauthorbutton mt-3">
                         <!--     <a href="javascript:void(0)" title="Talk To Author" class="btn btn-connect-Auth btn-block bold500 request_popup" data-btn="Talk To Author" data-name="Talk To Author" data-class="btn-orange" data-prop="ASK" data-toggle="modal" data-target="#talk-to-author"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-headset align-middle mr-1" viewBox="0 0 16 16">  <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/></svg> Talk To Author</a>
 -->

                         <a href="javascript::void(0)" title="Ask An Expert" class="btn btn-connect-Auth btn-block bold500 expertPopup" data-prop="ASK" title="Ask An Expert" data-toggle="modal" data-target="#cta-banner-3"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-headset align-middle mr-1" viewBox="0 0 16 16">
                                 <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                             </svg> Ask An Expert</a>


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
                             <a class="nav-link active font16 text-black2 triggerMarketbyte" id="MarketBytes-tab" data-toggle="tab" href="#MarketBytes" title="Market Bytes" onclick="getFloatClick('MarketBytes-tab1');">Market Bytes</a>
                         </li>
                         <?php if ($report_detail[0]['rep_type'] == 'N') {  ?>
                             <li class="nav-item ml-3">
                                 <a class="nav-link font16 text-black2 tiggerCompanies" id="companies-tab" data-toggle="tab" href="#companies" title="Companies" onclick="getFloatClick('companies-tab1');">Companies</a>
                             </li>
                         <?php }
                            if (!empty($faqs)) { ?>
                             <li class="nav-item ml-3">
                                 <a class="nav-link font16 text-black2 triggerfaq" id="faq-tab" data-toggle="tab" href="#faq" title="FAQ" onclick="getFloatClick('faq-tab1');">FAQ</a>
                             </li>
                         <?php } ?>

                         <?php if ($report_detail[0]['rep_type'] == 'N') {

                            ?>
                             <li class="nav-item ml-3">
                                 <a class="nav-link font16 text-black2 triggerToc" title="View ToC" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>/toc">View ToC</a>
                             </li>
                         <?php
                            } else  if ($report_detail[0]['rep_type'] == 'M') {
                            ?>
                             <li class="nav-item ml-3">
                                 <a class="nav-link font16 text-black2" href="<?php echo WEBSITE_URL; ?>toc/<?php echo $report_detail[0]['rep_id']; ?>" title="Request ToC">Request ToC</a>
                             </li>

                         <?php
                            } ?>

                     </ul>
                     <div class="tab-content" id="myTabContent">

                         <div class="tab-pane fade show active mt-4" id="MarketBytes">
                             <?php
                                $image_url = "";
                                if (!empty($report_description)) {
                                    $section_counter = 1;
                                    foreach ($report_description as $report_desc) {


                                        $arrString = array('http:');
                                        $arrReplacement = array('https:');
                                        $report_description1 =  str_replace("<img", '<img width="620" height="424"  ', stripcslashes(str_replace($arrString, $arrReplacement, $report_desc['description'])));


                                        $image_with_title = "";

                                        preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $report_description1, $url);
                                        if ($image_url == "") {
                                            $image_url = isset($url[1][0]) ? $url[1][0] : "";
                                            if (!empty($url[1])) {
                                                preg_match_all('/(alt)=("[^"]*")/i', $url[0][0], $img_content);
                                                $image_with_title = str_replace("<img", "<img title=" . $img_content[2][0] . " ", $url[0][0]);
                                            }
                                        }
                                ?> <h2 class="text-blue-new font20 "> <?php echo  $report_desc['title']; ?> </h2>
                                     <?php
                                        if ($image_with_title != '') {
                                            $rep_desc = str_replace($url[0][0], $image_with_title, $report_description1);
                                            echo str_replace("<img", "<img class='img-fluid mx-auto'", $rep_desc);
                                        } else {
                                            echo str_replace("<img", "<img class='img-fluid mx-auto'", $report_description1);
                                        }


                                        $action_type = $report_desc['action_type'];
                                        switch ($action_type) {
                                            case "S":
                                        ?>
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
                                         <?php
                                                break;
                                            case "CR":
                                            ?>
                                             <div class="CTA-banner4">
                                                 <div class="row">
                                                     <div class="col-md-3 text-center">
                                                         <img src="<?php echo WEBSITE_URL; ?>themes/image/custom-report-cover.png" width="106" height="142" alt="Custom Report Cover" title="Custom Report Cover" class="custom-cover">
                                                     </div>
                                                     <div class="col-md-9 text-center">
                                                         <p class="text-black2 font23 bold500 mb-0">Make This Report Your Own</p>
                                                         <p class="text-black2 font16 bold500 my-2">Take Advantage of Intelligence Tailored to your Business Objective</p>
                                                         <a href="javascript::void(0)" class="btn btn-customizeRep bold500 font14" title="Get a Customized Version" data-toggle="modal" data-target="#cta-banner-4">
                                                             <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.12 28.12" class="align-middle mr-1" fill="currentColor" stroke="5" width="22" height="22">>
                                                                 <path class="cls-1" d="m23.28,19.96c.43.43.86.86,1.29,1.3.58.59.64,1.4.09,2.03-.43.49-.89.95-1.38,1.38-.63.55-1.43.48-2.02-.1-.42-.42-.84-.84-1.26-1.25-.01-.01-.03-.02.02,0-.84.37-1.64.74-2.45,1.08-.3.13-.62.2-.94.27-.18.04-.24.12-.23.3.01.51-.02,1.03,0,1.54.05,1.03-.74,1.56-1.51,1.59-.56.02-1.13.02-1.69,0-.76-.03-1.54-.57-1.49-1.57.03-.52.01-1.05,0-1.57,0-.09-.08-.24-.15-.26-1.2-.29-2.32-.77-3.4-1.44-.4.41-.8.81-1.2,1.21-.76.76-1.58.76-2.35,0-.34-.33-.67-.68-1.01-1.01-.55-.53-.82-1.54.02-2.27.43-.38.82-.8,1.25-1.22-.09-.16-.18-.3-.26-.44-.52-.89-.91-1.84-1.14-2.85-.06-.24-.16-.29-.38-.29-.49.01-.99-.02-1.48,0-1.05.06-1.58-.78-1.59-1.54,0-.53,0-1.07,0-1.6.01-.77.54-1.6,1.58-1.55.52.03,1.05.01,1.57,0,.09,0,.24-.08.26-.15.29-1.2.77-2.32,1.44-3.4-.41-.41-.83-.82-1.24-1.23-.72-.72-.73-1.56-.01-2.29.35-.36.71-.71,1.07-1.07.53-.53,1.52-.78,2.23.02.39.44.81.83,1.24,1.26.21-.12.4-.23.6-.34.86-.48,1.76-.84,2.72-1.06.19-.04.26-.12.25-.31-.01-.51.02-1.03,0-1.54-.06-1.04.76-1.56,1.51-1.58.55-.02,1.11-.02,1.66,0,.77.02,1.57.56,1.52,1.58-.03.52-.01,1.05,0,1.57,0,.09.08.24.15.26,1.2.28,2.32.77,3.39,1.44.42-.42.86-.82,1.25-1.26.71-.8,1.7-.56,2.23-.03.37.37.74.74,1.11,1.11.11.11.21.24.29.38.3.53.27.65-.22,1-1.82,1.29-3.65,2.58-5.47,3.87-.07.05-.15.1-.27.19-.05-.08-.1-.16-.17-.23-1.78-1.86-3.94-2.52-6.4-1.8-2.43.71-3.9,2.41-4.39,4.89-.67,3.42,1.82,6.82,5.27,7.26,3.18.4,6.01-1.45,6.9-4.52.04-.14.14-.28.26-.37,1.64-1.17,3.29-2.34,4.93-3.5.06-.05.14-.11.2-.11.54,0,1.1-.04,1.62.06.59.11.99.73,1.01,1.42.02.56.02,1.13,0,1.69-.03.77-.56,1.55-1.57,1.5-.52-.03-1.05,0-1.57,0-.14,0-.24,0-.28.18-.27,1.18-.74,2.27-1.37,3.29-.02.02-.02.06-.03.1Z" />
                                                                 <path class="cls-1" d="m15.24,13.76c.57-.4,1.11-.78,1.65-1.16,2.87-2.03,5.74-4.06,8.61-6.1.79-.56,1.4-.45,1.97.34.13.18.25.35.38.53.44.65.33,1.33-.31,1.79-1.59,1.13-3.18,2.25-4.76,3.37-2.42,1.71-4.84,3.43-7.26,5.14-.73.52-1.26.43-1.79-.29-.94-1.3-1.89-2.61-2.84-3.91-.55-.75-.45-1.4.31-1.96.16-.12.32-.23.48-.35.71-.51,1.34-.41,1.87.3.56.75,1.12,1.51,1.7,2.3Z" />
                                                             </svg>
                                                             Get a Customized Version</a>
                                                     </div>
                                                 </div>
                                                 <div class="banner4-animation">
                                                     <div class="bg"></div>
                                                     <div class="bg bg2"></div>
                                                     <div class="bg bg3"></div>
                                                 </div>
                                             </div>



                                         <?php
                                                break;
                                            case "RM":
                                            ?>

                                             <div class="CTA-banner2 text-center">
                                                 <div class="cta-box">
                                                     <div class="bg-all">
                                                         <div class="row align-items-center" style="position:relative;z-index:1">
                                                             <div class="col-md-6 text-center">
                                                                 <img src="<?php echo WEBSITE_URL; ?>themes/image/Cover-02.jpg" width="103px" height="145px" alt="Market Research Methodology" title="Market Research Methodology">
                                                             </div>
                                                             <div class="col-md-6">
                                                                 <p class="text-black2 font23 bold500 mb-0">Market Research Methodology </p>
                                                                 <p class="text-black2 font16 bold500 my-2">-Perfect through Years of Diligence</p>
                                                                 <a href="javascript::void(0)" class="btn btn-customizeRep bold500 font14" title="Check Research Methodology" data-toggle="modal" data-target="#cta-banner-2"><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.88 39.29" width="22" height="22" fill="currentColor" class="align-middle mr-1">
                                                                         <path class="cls-1" d="m16.57,0h3.72c1.36,0,2.48,1.12,2.48,2.48v2.05c.85.27,1.66.6,2.43,1l1.45-1.45c.96-.96,2.54-.96,3.51,0l2.63,2.63c.96.96.96,2.54,0,3.51l-1.45,1.45c.4.77.75,1.58,1,2.43h2.05c1.36,0,2.48,1.12,2.48,2.48v3.72c0,1.36-1.12,2.48-2.48,2.48h-2.05c-.27.85-.6,1.66-1,2.43l1.45,1.45c.96.96.96,2.54,0,3.51l-2.63,2.63c-.96.96-2.54.96-3.51,0l-1.45-1.45c-.36.19-.72.37-1.1.52.36-.59.56-1.27.57-1.97.03-.42.06-.85.07-1.27.01-.36.02-.77.11-1.12,2.83-2.01,4.68-5.32,4.68-9.06,0-6.12-4.96-11.1-11.1-11.1s-11.1,4.96-11.1,11.1c0,3.8,1.92,7.16,4.83,9.16.06.29.03.69.03.97v1.28c0,.71.19,1.41.55,2.02-.37-.16-.72-.32-1.08-.51l-1.45,1.45c-.96.96-2.54.96-3.5,0l-2.63-2.63c-.96-.96-.96-2.54,0-3.51l1.45-1.45c-.4-.77-.75-1.58-1-2.43h-2.05c-1.36,0-2.48-1.12-2.48-2.48v-3.72c0-1.36,1.12-2.48,2.48-2.48h2.05c.27-.85.6-1.66,1-2.43l-1.45-1.45c-.96-.96-.96-2.54,0-3.51l2.63-2.63c.96-.96,2.54-.96,3.5,0l1.45,1.45c.77-.4,1.58-.75,2.43-1v-2.05C14.1,1.14,15.21.02,16.57.02h0v-.02Zm1.86,9c2.63,0,5.02,1.07,6.75,2.8s2.8,4.12,2.8,6.75c0,1.27-.25,2.49-.7,3.59-.47,1.15-1.16,2.2-2.01,3.07h-.01c-1.45,1.42-1.47,2.02-1.53,3.37-.01.39-.03.83-.07,1.27,0,.8-.35,1.55-.88,2.09-.54.55-1.28.89-2.11.89h-4.47c-.83,0-1.56-.33-2.11-.87-.54-.54-.87-1.28-.87-2.11h0v-1.26c.02-1.39.02-1.72-1.52-3.28-.88-.88-1.59-1.93-2.09-3.1-.47-1.13-.72-2.36-.72-3.66,0-2.63,1.07-5.02,2.8-6.75s4.12-2.8,6.75-2.8h-.01Zm-.59,2.72c1.99,0,3.79.8,5.1,2.11,1.3,1.3,2.11,3.1,2.11,5.1,0,.69-1.13.57-1.13,0,0-1.68-.68-3.2-1.78-4.3-1.1-1.1-2.62-1.78-4.3-1.78-.95,0-.88-1.15,0-1.13h.01Zm4.66,26.23c0,.75-.39,1.35-.86,1.35h-6.42c-.47,0-.85-.6-.86-1.35h8.14Zm-7.28-2.23h6.42c.47,0,.86.38.86.86h0c0,.47-.38.86-.86.86h-6.42c-.47,0-.86-.38-.86-.86h0c0-.47.38-.86.86-.86h0Zm0-2.3h6.42c.47,0,.86.38.86.86h0c0,.47-.38.86-.86.86h-6.42c-.47,0-.86-.38-.86-.86h0c0-.47.38-.86.86-.86h0Zm8.91-20.55c-1.46-1.46-3.47-2.36-5.7-2.36s-4.24.9-5.7,2.36c-1.46,1.46-2.36,3.47-2.36,5.7,0,1.09.22,2.14.61,3.09.41.99,1.01,1.87,1.76,2.62h0c1.99,2.01,1.97,2.45,1.95,4.35v1.23h0c0,.42.17.79.43,1.07.27.27.65.43,1.05.43h4.47c.4,0,.78-.17,1.05-.45.28-.28.45-.66.45-1.08v-.06c.04-.51.07-.9.08-1.24.08-1.76.11-2.54,1.97-4.35.71-.74,1.29-1.62,1.7-2.59.38-.94.59-1.96.59-3.03,0-2.22-.9-4.24-2.36-5.7h.01Z" />
                                                                     </svg> Check Research Methodology</a>
                                                             </div>
                                                         </div>
                                                         <div class="culd"></div>

                                                     </div>
                                                 </div>
                                             </div>

                                         <?php
                                                break;
                                            case "ASK":
                                                $connectName = "Sales Team";
                                                $connectImageName = WEBSITE_URL . "themes/image/ask-expert.png";
                                                $connectHeading = "Client Partner";
                                               // $connectLinkedIn = "https://www.linkedin.com/in/zaid-mubarak-shaikh-l-i-o-n";

                                                /**if ($report_detail[0]['category_id'] == "23" || $report_detail[0]['category_id'] == "23" || $report_detail[0]['category_id'] == "39") {
                                                    $connectName = "Prerna Shiv";
                                                    $connectImageName = WEBSITE_URL . "themes/image/prearna_Shiv.png";
                                                    $connectHeading = "Client Partner";
                                                    $connectLinkedIn = "https://www.linkedin.com/in/prerna-shiv-368b78110";
                                                }**/


                                            ?>

                                             <div class="CTA-banner3">
                                                 <div class="cta-box  CTA4-bg">
                                                     <div class="row" style="position: relative; z-index: 1">
                                                         <div class="col-md-6 d-flex lineheight118">
                                                             <div class="">
                                                                 <img src="<?php echo $connectImageName; ?>" title="<?php echo $connectName; ?>" alt="<?php echo $connectName; ?>" width="95px" height="95px" class="img-fluid">
                                                             </div>
                                                             <div class="ml-3 mt-1">
                                                                 <p class="font18 text-black lineheight24"><?php echo $connectName; ?><br><span class="font14"><?php echo $connectHeading; ?></span>
                                                                     <!--<a href="<?php echo $connectLinkedIn; ?>" target="_blank" title="<?php echo $connectName; ?>"><span class="linkedin"></span></a>-->
                                                                 </p>
                                                             </div>
                                                         </div>
                                                         <div class="col-md-6 text-center">
                                                             <p class=" text-black font23 bold500 mt-1 mb-0">Let's Connect</p>
                                                             <p class="text-black font16 bold500 mb-0 my-2">Connect me to identify winning opportunities</p>
                                                             <a href="javascript::void(0)" class="btn btn-askexpert bold500 font14 expertPopup" title="Ask An Expert" data-toggle="modal" data-target="#cta-banner-3"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-headset align-middle mr-1" viewBox="0 0 16 16">
                                                                     <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"></path>
                                                                 </svg> Ask An Expert</a>
                                                         </div>
                                                         <div class="txt-available">
                                                             <span class="ExpertAvailability">I'm Available</span>
                                                         </div>
                                                     </div>
                                                     <div id="particle-container">
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                         <div class="particle"></div>
                                                     </div>
                                                 </div>
                                             </div>

                             <?php
                                                break;
                                        }
                                    }
                                }
                                ?>
                         </div>
                         <div class="tab-pane fade mt-4" id="companies">
                             <h3 class="txt-black text-center mb-4 font18">- Companies Covered in This Report -</h3>
                             <p> <?php echo $report_detail[0]['company']; ?> </p>
                         </div>
                         <div class="tab-pane fade mt-4" id="faq">
                             <?php if (!empty($faqs)) { ?>
                                 <!-- faq section start -->
                                 <div class="reportFaqs pb-4">
                                     <h3 class="txt-black text-center mb-4 font18">- Frequently Asked Questions -</h3>
                                     <div id="faqAccordion">

                                         <?php $counter = 1;
                                            foreach ($faqs as $faq) { ?>
                                             <div class="card mb-3">
                                                 <div class="card-header p-0" id="heading<?php echo $counter; ?>">
                                                     <h5 class="mb-0 <?php if ($counter == 1) {
                                                                            echo '';
                                                                        } else {
                                                                            echo 'collapsed';
                                                                        } ?>" data-toggle="collapse" data-target="#collapse<?php echo $counter; ?>">
                                                         <button class="btn w-100 text-left"><?php echo $faq['question']; ?>
                                                             <span class="faqArrow float-right px-2">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                                     <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                                 </svg>
                                                                 <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                                     <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                                                 </svg>
                                                             </span>
                                                         </button>
                                                     </h5>
                                                 </div>
                                                 <div id="collapse<?php echo $counter; ?>" class="collapse <?php if ($counter == 1) {
                                                                                                                echo 'show';
                                                                                                            } ?>" data-parent="#faqAccordion">
                                                     <div class="card-body">
                                                         <p><?php echo $faq['answer']; ?></p>
                                                     </div>
                                                 </div>
                                             </div>
                                         <?php $counter++;
                                            } ?>




                                     </div>
                                 </div>
                                 <!-- faq section end -->
                             <?php } ?>
                         </div>
                     </div>
                 </div>
                 <!--------- Col-3 -------->
                 <div class="col-md-3">
                     <aside class="right-side-section">
                         <div class="sample-btn marginTop70">
                             <a class="btn bold500 btn-free-sample  d-none" href="<?php echo WEBSITE_URL . "samples/" . $report_detail[0]['rep_id']; ?>" title="Get FREE Report Sample">
                                 <img src="<?php echo WEBSITE_URL; ?>themes/image/pdf-icon-latest.svg" width="22" height="22" title="Download PDF" alt="Download PDF" class="mr-2 img-fluid">
                                 Get FREE Report Sample
                             </a>
                         </div>

                         <div class="PremiumReportInfo right-boxes pb-4  mb-2  mt-4">
                             <p class="font16 txt-black py-3 m-0 bold400 text-center">- Premium Report Details -</p>
                             <div class="d-flex flex-row px-lg-3">
                                 <div class="w-50 pr-3">
                                     <!-- <img src="<?php echo WEBSITE_URL; ?>themes/image/cover-img.png" width="85" height="112" class="img-fluid" title="<?php echo $report_keyword; ?>" alt="<?php echo $report_keyword; ?>"> -->
                                     <img src="<?php echo WEBSITE_URL; ?>themes/image/report-sample-latest1.png" width="85" height="112" class="img-fluid" title="<?php echo $report_keyword; ?>" alt="<?php echo $report_keyword; ?>">
                                 </div>
                                 <div>
                                     <ul class="list-unstyled mb-1">
                                         <li class="txt-black1 font10 pb-2"><span class="date-mm"> PMRREP<?php echo $report_detail[0]['rep_id']; ?> </span></li>
                                         <?php if (isset($report_detail[0]['rep_type']) && $report_detail[0]['rep_type'] == 'N') {
                                            ?>
                                             <li class="txt-black1 font10 pb-2"><span class="date-mm"> <?php echo $report_detail[0]['rep_type'] == 'N' ? date("F-Y", strtotime($report_detail[0]['update_date'])) : date('F-Y', strtotime(date('Y-m-d') . ' + 50 days')); ?> </span> </li>
                                         <?php
                                            } ?>
                                         <li class="txt-black1 font10 pb-2"><span class="date-mm"><?php echo $report_detail[0]['cat_name']; ?></span></li>

                                         <li class="txt-black1 font10 pb-2"><span class="txt-black1"><?php echo isset($report_detail[0]['rep_type']) && $report_detail[0]['rep_type'] == 'N' ? $report_detail[0]['rep_pages'] . " Pages" : 'Ongoing'; ?> </span></li>
                                         <li class="txt-black1 font10 pb-2 "><span class="txt-black1">PPT, PDF, WORD, EXCEL </span></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>

                         <div class="get-started-box right-boxes pb-4 pt-0 px-3 mt-3 text-center">
                             <p class="font16 txt-black py-3 m-0 bold400 text-center">- Get Started -</p>
                             <p class="font12 bold400">Get insights that lead to new growth opportunities</p>
                             <a class="btn btn-purchesReport bold500 text-black" href="<?php echo WEBSITE_URL . "checkout/" . $report_detail[0]['rep_id']; ?>" title="<?php echo $report_detail[0]['rep_type'] == 'N' ? 'Purchase Report' : 'Pre Book'; ?>">
                                 <img src="<?php echo WEBSITE_URL; ?>themes/image/purchase-report-icon.png" width="20" height="26" alt="Purchase Report" title="Purchase Report" class="mr-2 align-bottom">
                                 <?php echo $report_detail[0]['rep_type'] == 'N' ? 'Purchase Report' : 'Pre Book'; ?></a>
                         </div>


                         <div class="Customization-box right-boxes pb-4 pt-0 px-3 mt-4 text-center">
                             <p class="font16 txt-black py-3 m-0 bold400 text-center">- Customization -</p>
                             <p class="font12 bold400">Explore Intelligence Tailored to Your Business Goals.</p>
                             <div class="btn-container">
                                 <a href="javascript::void(0)" class="btn btn-Customization btn-custo bold500 request_popup" data-name="Request for Customization" data-prop="RC" data-btn="Get Customized Report" title="Request Customization" data-toggle="modal" data-target="#talk-to-author" data-class="btn-green">
                                     <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.12 28.12" class="align-middle mr-1" fill="currentColor" stroke="5" width="22" height="22">&gt;<path class="cls-1" d="m23.28,19.96c.43.43.86.86,1.29,1.3.58.59.64,1.4.09,2.03-.43.49-.89.95-1.38,1.38-.63.55-1.43.48-2.02-.1-.42-.42-.84-.84-1.26-1.25-.01-.01-.03-.02.02,0-.84.37-1.64.74-2.45,1.08-.3.13-.62.2-.94.27-.18.04-.24.12-.23.3.01.51-.02,1.03,0,1.54.05,1.03-.74,1.56-1.51,1.59-.56.02-1.13.02-1.69,0-.76-.03-1.54-.57-1.49-1.57.03-.52.01-1.05,0-1.57,0-.09-.08-.24-.15-.26-1.2-.29-2.32-.77-3.4-1.44-.4.41-.8.81-1.2,1.21-.76.76-1.58.76-2.35,0-.34-.33-.67-.68-1.01-1.01-.55-.53-.82-1.54.02-2.27.43-.38.82-.8,1.25-1.22-.09-.16-.18-.3-.26-.44-.52-.89-.91-1.84-1.14-2.85-.06-.24-.16-.29-.38-.29-.49.01-.99-.02-1.48,0-1.05.06-1.58-.78-1.59-1.54,0-.53,0-1.07,0-1.6.01-.77.54-1.6,1.58-1.55.52.03,1.05.01,1.57,0,.09,0,.24-.08.26-.15.29-1.2.77-2.32,1.44-3.4-.41-.41-.83-.82-1.24-1.23-.72-.72-.73-1.56-.01-2.29.35-.36.71-.71,1.07-1.07.53-.53,1.52-.78,2.23.02.39.44.81.83,1.24,1.26.21-.12.4-.23.6-.34.86-.48,1.76-.84,2.72-1.06.19-.04.26-.12.25-.31-.01-.51.02-1.03,0-1.54-.06-1.04.76-1.56,1.51-1.58.55-.02,1.11-.02,1.66,0,.77.02,1.57.56,1.52,1.58-.03.52-.01,1.05,0,1.57,0,.09.08.24.15.26,1.2.28,2.32.77,3.39,1.44.42-.42.86-.82,1.25-1.26.71-.8,1.7-.56,2.23-.03.37.37.74.74,1.11,1.11.11.11.21.24.29.38.3.53.27.65-.22,1-1.82,1.29-3.65,2.58-5.47,3.87-.07.05-.15.1-.27.19-.05-.08-.1-.16-.17-.23-1.78-1.86-3.94-2.52-6.4-1.8-2.43.71-3.9,2.41-4.39,4.89-.67,3.42,1.82,6.82,5.27,7.26,3.18.4,6.01-1.45,6.9-4.52.04-.14.14-.28.26-.37,1.64-1.17,3.29-2.34,4.93-3.5.06-.05.14-.11.2-.11.54,0,1.1-.04,1.62.06.59.11.99.73,1.01,1.42.02.56.02,1.13,0,1.69-.03.77-.56,1.55-1.57,1.5-.52-.03-1.05,0-1.57,0-.14,0-.24,0-.28.18-.27,1.18-.74,2.27-1.37,3.29-.02.02-.02.06-.03.1Z"></path>
                                         <path class="cls-1" d="m15.24,13.76c.57-.4,1.11-.78,1.65-1.16,2.87-2.03,5.74-4.06,8.61-6.1.79-.56,1.4-.45,1.97.34.13.18.25.35.38.53.44.65.33,1.33-.31,1.79-1.59,1.13-3.18,2.25-4.76,3.37-2.42,1.71-4.84,3.43-7.26,5.14-.73.52-1.26.43-1.79-.29-.94-1.3-1.89-2.61-2.84-3.91-.55-.75-.45-1.4.31-1.96.16-.12.32-.23.48-.35.71-.51,1.34-.41,1.87.3.56.75,1.12,1.51,1.7,2.3Z"></path>
                                     </svg> Request Customization</a>
                             </div>
                         </div>

                         <div class="quickContact right-boxes px-2 pt-0 pb-0 mt-4 text-center">
                             <p class="fs-16 txt-black contactList py-3 bold400 m-0">- Quick Contact -</p>
                             <div class="QuickContactList">
                                 <!-- <div class="whatsapp contactList text-left pr-2 pl-3">
                                     <a href="https://api.whatsapp.com/send?phone=919511705688" class="text-black3 font14 d-flex" title="Chat on Whatsapp"><span class="quickContactIMG"></span> <span class="quickContactText">Chat on Whatsapp</span></a>
                                 </div>
                                 <div class="contact1 contactList text-left pr-2 pl-3">
                                     <a href="tel:+18009610353" class="text-black3 font14 d-flex" title="+1 800-961-0353"><span class="quickContactIMG"></span> <span class="quickContactText">+1 800-961-0353</span></a>
                                 </div> -->
                                 <div class="contact2 contactList text-left pr-2 pl-3">
                                     <a href="tel:+18002590314" class="text-black3 font14 d-flex" title="+1-1 800-259-0314"><span class="quickContactIMG"></span> <span class="quickContactText">+1 800-259-0314</span></a>
                                 </div>
                                 <div class="contact3 contactList text-left pr-2 pl-3">
                                     <a href="tel:+442038375656" class="text-black3 font14 d-flex" title="+44 203-837-5656"><span class="quickContactIMG"></span> <span class="quickContactText">+44 203-837-5656</span></a>
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
                            if (!empty($related_reports)) {
                            ?>
                             <div class="relatedReportslist px-2 pt-0 pb-4 mt-0 mb-4 right-boxes">
                                 <p class="font16 txt-black py-3 m-0 bold400 text-center">- Related Reports -</p>
                                 <ul class="relatedReports-ul pl-4 m-0">
                                     <?php
                                        foreach ($related_reports as $related_report) {
                                        ?>
                                         <li><a href="<?php echo WEBSITE_URL . "market-research/" . $related_report['rep_url'] . ".asp"; ?>" class="text-black font14" title="<?php echo $related_report['rep_keyword']; ?>"><?php echo $related_report['rep_keyword']; ?></a></li>
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
     <link href="<?php echo WEBSITE_URL; ?>themes/css/report-details.css" rel="stylesheet" />
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
     <?php 
     $messagePlaceholder = "Describe your interest to the analyst in a few sentences";
     $this->load->view("cta_popup_web"); ?>


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
                             <form class="mt-4" name="" action="<?php echo $submit_url; ?>" method="POST">
                                 <?php
                                    $name = $this->security->get_csrf_token_name();
                                    $hash = $this->security->get_csrf_hash();
                                    $_SESSION[$name] = $hash;
                                    ?>

                                 <input type="hidden" name="<?= $name; ?>" value="<?= $hash; ?>" />
                                 <input type="hidden" name="source" value="FWP" />
                                 <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                                 <input type="hidden" name="type" class="hdnType" value="ASK">

                                 <div class="form-group position-relative">
                                     <input type="text" name="name" id="idName" class="form-control name" placeholder="Full Name*" >
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                 </div>
                                 <div class="form-group position-relative">
                                     <input type="email" name="emailId" id="idFctMREmailId" class="form-control emailId sampleForm2" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" >
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                     <span class="text-danger font11 sampleForm2Error" id="errorFullName"></span>
                                 </div>
                                 <div class="form-group position-relative">
                                     <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone Number*" required="required" maxlength="14"  onblur="checksubmit(this.value);">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                     <span class="text-danger font11 errorPhoneNo" id="errorPhoneNo"></span>
                                 </div>
                                 <div class="form-group position-relative">
                                     <input type="text" name="company" id="idCompany" class="form-control company" placeholder="Company*" >
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                 </div>

                                 <div class="form-group position-relative">
                                     <textarea type="text" name="message" id="idMessage" class="form-control message" rows="2" placeholder="<?php echo $messagePlaceholder; ?>" maxlength="200" required></textarea>
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
                                 <button type="submit" class="buttonMyclass btn requestFreeSample btn-orange" name="btnSubmit"> <span class=" requestFormButton"> Talk To Athor </span> </button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

     <script type="text/javascript">
         function googleTranslateElementInit() {
             new google.translate.TranslateElement({
                 pageLanguage: 'en',
                 includedLanguages: 'ar,zh-CN,zh-TW,cs,da,nl,en,eo,et,fi,fr,de,iw,hu,it,ja,ko,la,lb,no,pl,pt,ro,ru,sr,sk,es,th,tr'
             }, 'google_translate_element');
         }
     </script>

     <script>
         $(document).ready(function() {


            

             $(".expertPopup").click(function() {

                $('input[type=text]').each(function() {
                     $(this).val('');
                     $(this).removeClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").hide();
                 });

                 $('input[type=email]').each(function() {
                     $(this).val('');
                     $(this).removeClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").hide();
                 });
                 
                 var btnclass = $(this).attr("data-class");
                 var btnname = $(this).attr("data-btn");
                 var formType = $(this).attr("data-prop");


                 if (formType == 'ASK') {
                     $(".myclassName").removeClass('btn requestFreeSample');
                     $(".myclassName").addClass('btn requestFreeSample btn-orange');
                 } else {
                     $(".myclassName").removeClass('btn requestFreeSample btn-orange');
                     $(".myclassName").addClass('btn requestFreeSample');
                 }



             });


             $(".request_popup").click(function() {

                 
                $('input[type=text]').each(function() {
                     $(this).val('');
                     $(this).removeClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").hide();
                 });

                 $('input[type=email]').each(function() {
                     $(this).val('');
                     $(this).removeClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").hide();
                 });

                 var ctatype = $(this).attr("data-name");
                 var btnclass = $(this).attr("data-class");
                 var btnname = $(this).attr("data-btn");
                 var formType = $(this).attr("data-prop");
                 //    alert(formType);

                 if (formType == 'ASK') {
                     $(".buttonMyclass").removeClass('btn requestFreeSample btn-green');
                     $(".buttonMyclass").addClass('buttonMyclass btn requestFreeSample btn-orange');
                 } else {
                     $(".buttonMyclass").removeClass('btn requestFreeSample btn-orange');
                     $(".buttonMyclass").addClass('buttonMyclass btn requestFreeSample btn-green');
                 }
                 //  alert(ctatype);  alert(btnname);
                 $('.requestPopupTitle').html(ctatype);
                 $(".hdnType").val($(this).attr("data-prop"));

                 $(".requestFormButton").html(btnname);

             });

             $('#myTab li a').on('click', function(e) {
                 // $('#myTab li a').eq($(this).val()).tab('show');
                 $('html,body').animate({
                         scrollTop: $("header").offset().top
                     },
                     'slow');
             })
             // $(".search-btn").on("click",function(){

             // });


             $("#faq-tab1").on("click", function() {
                 $(".triggerfaq").trigger("click");

             });
             $("#MarketBytes-tab1").on("click", function() {
                 $(".triggerMarketbyte").trigger("click");


             });
             $("#companies-tab1").on("click", function() {
                 $(".tiggerCompanies").trigger("click");

             });
             $("#TOC-tab").on("click", function() {
                 $(".triggerToc").trigger("click");
             });

             var topScrollPosition = $(".PremiumReportInfo").offset().top;
             $(window).scroll(function() {
                 var a = $(window).scrollTop();
                 var b = $(window).scrollTop();
                 if (a >= topScrollPosition) {
                     $(".stickyHeader").addClass("showStickyheader");
                 } else {
                     $(".stickyHeader").removeClass("showStickyheader");
                 }


             });


             $("body").on("focus", ".emailId,.phNo,.name,.company, .message, .jobTitle", function() {
                 if ($(this).hasClass("border-green")) {
                     $(this).removeClass("border-red");
                     $(this).parent().find(".bi-info-circle").hide();
                 } else {
                     $(this).addClass("border-red");
                     $(this).parent().find(".bi-info-circle").show();
                 }
             });
             $("body").on("keyup", ".emailId,.phNo,.name,.company, .message, .jobTitle", function() {
                 if (!($(this).is(":invalid"))) {
                     $(this).removeClass("border-red");
                     $(this).addClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").show();
                     $(this).parent().find(".bi-info-circle").hide();
                 } else {
                     $(this).addClass("border-red");
                     $(this).removeClass("border-green");
                     $(this).parent().find(".bi-check-circle-fill").hide();
                     $(this).parent().find(".bi-info-circle").show();
                 }
             });

             $("table").addClass("table table-bordered");
         });


         function getFloatClick(value) {
             $(".myactiveFloatclass").removeClass("active");
             $("#" + value).addClass("active");
         }
     </script>
     <script type="text/javascript">
         function getEmailValidation(email, className) {

            var email = email.toLowerCase().trim();
             if ( email.includes('hotmail.com') || email.includes('gmail.com') || email.includes('yahoo.com') || email.includes('outlook.com') || email.includes('icloud.com') || email.includes('mail.com') || email.includes('gmx.com') || email.includes('zohomail.com') || email.includes('zohomail.in') || email.includes('inbox.com') || email.includes('zohomail.co.uk') || email.includes('aol.com') || email.includes('hotmail.fr') || email.includes('msn.com') || email.includes('yahoo.fr') || email.includes('yahoo.co.uk') || email.includes('yahoo.co.in') || email.includes('live.com') || email.includes('rediffmail.com') || email.includes('yandex.ru') || email.includes('ymail.com') || email.includes('mail.ru') || email.includes('hotmail.it') || email.includes('googlemail.com') || email.includes('yahoo.es') || email.includes('hotmail.es') || email.includes('yahoo.it') || email.includes('rocketmail.com') || email.includes("yahoo.ca") || email.includes("yahoo.in") || email.includes("yahoo.com.au") || email.includes("hotmail.de") || email.includes("yahoo.co.jp") || email.includes("yahoo.com.ar") || email.includes("yahoo.com.mx") || email.includes("yahoo.com.sg") || email.includes("spam.com") || email.includes("junk.com")) {
                 document.getElementsByClassName(className)[0].value = "";


                 $('.' + className).addClass("border-red");
                 $('.' + className).removeClass("border-green");
                 $('.' + className).parent().find(".bi-check-circle-fill").hide();
                 $('.' + className).parent().find(".bi-info-circle").show();
                 $('.' + className + 'Error').html('Please Enter Business Email');
             } else {

                 $('.' + className + 'Error').html('');
             }
         }
     </script>
     <script type="text/javascript">
         function checksubmit(phoneNumber) {

             var err = '';

             var allowChar = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 +_-()";
             var inputPhoneNumber = phoneNumber;
             var allCharValidate = true;
             var allNumbers = "";
             for (p = 0; p < inputPhoneNumber.length; p++) {
                 snchar = inputPhoneNumber.charAt(p);
                 for (k = 0; k < allowChar.length; k++)
                     if (snchar == allowChar.charAt(k))
                         break;
                 if (k == allowChar.length) {
                     allCharValidate = false;
                     break;
                 }
                 if (snchar != ",")
                     allNumbers += snchar;
             }

             if (allCharValidate) {
                 err += '';
                 var phonenovaluere = phoneNumber.replace(/\s/g, '');
                 $('.phNo').val(phonenovaluere);
                 $('.errorPhoneNo').html('');


             } else {
                 err += 'error';

                 $('.phNo').val('');

                 $('.errorPhoneNo').html('Invalid Phone Number');
                 $('.phNo').addClass("border-red");
                 $('.phNo').removeClass("border-green");
                 $('.phNo').parent().find(".bi-check-circle-fill").hide();
                 $('.phNo').parent().find(".bi-info-circle").show();

             }

         }
     </script>

     

     <script>
         $(document).ready(function() {

             var url = window.location.href;

             var index = url.indexOf("#");
             if (index !== -1) {
                 var hash = url.substring(index + 1);

                 switch (hash) {

                     case 'faq':
                         $(".triggerfaq").trigger("click");
                         parent.location.hash = ''
                         break;

                     case 'Companies':
                         $(".tiggerCompanies").trigger("click");
                         parent.location.hash = ''
                         break;
                 }
             }
         });
     </script>

     <script>
         document.oncontextmenu = function() {
             return false;
         };

         $(document).mousedown(function(e) {
             if (e.button == 2) {
                 return false;
             }
             return true;
         });

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


         document.onkeypress = function(event) {
             event = (event || window.event);
             if (event.keyCode == 123) {
                 //return false;  
             }
         }
         document.onmousedown = function(event) {
             event = (event || window.event);
             if (event.keyCode == 123) {
                 //return false;  
             }
         }
         document.onkeydown = function(event) {
             event = (event || window.event);
             if (event.keyCode == 123) {
                 //return false;  
             }
         }


         window.ondragstart = function() {
             return false;
         }

         document.addEventListener('keyup', (e) => {
             if (e.key == 'PrintScreen') {
                 navigator.clipboard.writeText('');

             }
         });


         document.addEventListener('keydown', (e) => {
             if ((e.ctrlKey) && (e.key == 'i' || e.key == 'p' || e.key == 'u' || e.key == 'P' || e.key == 'U')) {

                 e.cancelBubble = true;
                 e.preventDefault();
                 e.stopImmediatePropagation();
             }

         });


         $(window).on('keydown', function(event) {
             if (event.keyCode == 123) {

                 //return false;
             } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {

                 /// return false;   
             } else if (event.ctrlKey && event.keyCode == 73) {

                 //return false;   
             }
         });
     </script>
 

     </body>

 </html>