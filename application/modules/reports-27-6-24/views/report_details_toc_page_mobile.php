 <!DOCTYPE html>
 <html lang="en">

 <head>
     <?php $this->load->view("frontend/meta_links"); ?>
     <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL; ?>themes/css/theme-report-details-mobile.css">


     <?php $report_keyword = $report_detail[0]['rep_keyword']; ?>
     <?php $this->load->view("frontend/header_mobile"); ?>

     <section class="report-details-topsec report-details">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb bg-transparent p-0 my-0">
                             <li class="breadcrumb-item">
                                 <a href="<?php echo WEBSITE_URL; ?>" class="text-black" title="Persistence Market Report">
                                     <span>Home</span>
                                 </a>
                             </li>
                             <li class="breadcrumb-item text-black">
                                 <a href="<?php echo WEBSITE_URL; ?>market-research.asp" class="text-black" title="Persistence Market Report">
                                     <span>Market research</span>
                                 </a>
                             </li>
                             <li class="breadcrumb-item" class="text-black" aria-current="page">
                                 <a href="<?php echo WEBSITE_URL . "market-research/" . $report_detail[0]['rep_url']; ?>.asp" class="text-black" title="<?php echo $report_keyword; ?>">
                                     <span><?php echo $report_keyword; ?></span>
                                 </a>
                             </li>
                             <li class="breadcrumb-item" class="text-black">
                                 <span>ToC</span>
                             </li>
                         </ol>
                     </nav>
                 </div>
                 <div class="col-12">
                     <div class="report-heading">
                         <h1 class="font27 text-black2 bold400 my-3"><?php echo $report_keyword; ?></h1>
                         <h2 class="font15 text-black3 bold300 lineheight24"><?php echo $report_detail[0]['rep_name']; ?></h2>
                         <p class="font14 text-black3 bold300 mt-2 lineheight24"><?php echo $report_detail[0]['rep_subtitle'] != '' ? $report_detail[0]['rep_subtitle'] : ''; ?> </p>

                         <div class="sample-btn text-center mb-3">
                             <a class="btn btn-free-sample" href="javascript::void(0);" title="Get FREE Report Sample" data-toggle="modal" data-target="#cta-banner-1">
                                 <img src="<?php echo WEBSITE_URL; ?>themes/image/pdf-icon-latest.svg" width="22" height="22" title="Download PDF" alt="Download PDF" class="mr-2 img-fluid">
                                 Get FREE Report Sample
                             </a>
                         </div>
                         <div class="text-center">
                             <a href="javascript::void(0)" class="btn btn-connect-Auth bold300 expertPopup" data-name="Ask An Expert " data-prop="ASK" data-btn="Ask An Expert " title="Ask An Expert " data-toggle="modal" title="Ask An Expert " data-toggle="modal" data-target="#cta-banner-3" data-class="btn-orange"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-headset align-middle mr-1" viewBox="0 0 16 16">
                                     <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                                 </svg> Ask An Expert </a>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </section>


     <!-- <div class="fixed-tabs"></div> -->
     <section class="report-details-tabs">
         <div class="backgroundgray"></div>
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <ul class="nav nav-tabs" id="myTab">
                         <li class="nav-item">
                             <a class="nav-link  font14 text-black2" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp" title="Market Bytes">Market Bytes</a>
                         </li>

                         <?php if ($report_detail[0]['rep_type'] == 'N') {  ?>
                             <li class="nav-item">
                                 <a class="nav-link font14 text-black2" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp#Companies" title="Companies">Companies</a>
                             </li>
                         <?php  }
                            if (!empty($faqs)) { ?>
                             <li class="nav-item">
                                 <a class="nav-link font14 text-black2" href="<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp#faq" title="FAQ">FAQ</a>
                             </li>
                         <?php } ?>
                         <?php if ($report_detail[0]['rep_type'] == 'N') {  ?>
                             <li class="nav-item">
                                 <a class="nav-link active font14 text-black2" id="TOC-tab" data-toggle="tab" href="#TOC" title="ToC"> ToC</a>
                             </li>
                         <?php } else if ($report_detail[0]['rep_type'] == 'M') {
                                redirect(WEBSITE_URL . "toc/" . $report_detail[0]['rep_id'], 301);
                            } ?>
                     </ul>
                     <div class="tab-content" id="myTabContent">

                         <div class="tab-pane fade  mt-4" id="MarketBytes">

                         </div>
                         <div class="tab-pane fade mt-4" id="companies">
                         </div>
                         <div class="tab-pane fade mt-4" id="faq">

                         </div>
                         <div class="tab-pane fade mt-4 show active " id="TOC">
                             <div class="mb-5">
                                 <h3 class="txt-black text-center mb-4 font18">- Table Of Content -</h3>
                                 <p> <?php echo $report_detail[0]['rep_tab_content']; ?> </p>
                                 <div class="CTA-report-sample my-3">
                                     <div class="text-center">
                                         <p class="text-black2 bold500 font20"><span class="bold700"><u>FREE</u></span> Report Sample is Available</p>
                                         <p class="text-black2 font14">In-depth report coverage is now just a <br>few seconds away</p>
                                         <a href="javascript::void(0)" class="btn btn-freeReportSample bold500 text-black2" title="Get FREE Report Sample" data-toggle="modal" data-target="#cta-banner-1"><img src="<?php echo WEBSITE_URL; ?>themes/image/pdf-icon-latest.svg" width="22" height="22" title="Download PDF" alt="Download PDF" class="mr-2 img-fluid"> Get FREE Report Sample</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="mb-5">
                                 <h4 class="txt-black text-center mb-4">- List Of Table -</h4>
                                 <p> <?php echo $report_detail[0]['rep_list_table']; ?> </p>
                                 <div class="CTA-customizeRep my-3">
                                     <div class="text-center">
                                         <p class=" bold500 font20 text-black">Make This Report Your Own</p>
                                         <p class="font14 text-black">Take Advantage of Intelligence Tailored to your Business Objective</p>
                                         <a href="javascript::void(0)" class="btn btn-customizeRep bold500 font14" title="Get a Customized Version" data-toggle="modal" data-target="#cta-banner-4">
                                             <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.12 28.12" class="align-middle mr-1" fill="currentColor" stroke="5" width="22" height="22">&gt;<path class="cls-1" d="m23.28,19.96c.43.43.86.86,1.29,1.3.58.59.64,1.4.09,2.03-.43.49-.89.95-1.38,1.38-.63.55-1.43.48-2.02-.1-.42-.42-.84-.84-1.26-1.25-.01-.01-.03-.02.02,0-.84.37-1.64.74-2.45,1.08-.3.13-.62.2-.94.27-.18.04-.24.12-.23.3.01.51-.02,1.03,0,1.54.05,1.03-.74,1.56-1.51,1.59-.56.02-1.13.02-1.69,0-.76-.03-1.54-.57-1.49-1.57.03-.52.01-1.05,0-1.57,0-.09-.08-.24-.15-.26-1.2-.29-2.32-.77-3.4-1.44-.4.41-.8.81-1.2,1.21-.76.76-1.58.76-2.35,0-.34-.33-.67-.68-1.01-1.01-.55-.53-.82-1.54.02-2.27.43-.38.82-.8,1.25-1.22-.09-.16-.18-.3-.26-.44-.52-.89-.91-1.84-1.14-2.85-.06-.24-.16-.29-.38-.29-.49.01-.99-.02-1.48,0-1.05.06-1.58-.78-1.59-1.54,0-.53,0-1.07,0-1.6.01-.77.54-1.6,1.58-1.55.52.03,1.05.01,1.57,0,.09,0,.24-.08.26-.15.29-1.2.77-2.32,1.44-3.4-.41-.41-.83-.82-1.24-1.23-.72-.72-.73-1.56-.01-2.29.35-.36.71-.71,1.07-1.07.53-.53,1.52-.78,2.23.02.39.44.81.83,1.24,1.26.21-.12.4-.23.6-.34.86-.48,1.76-.84,2.72-1.06.19-.04.26-.12.25-.31-.01-.51.02-1.03,0-1.54-.06-1.04.76-1.56,1.51-1.58.55-.02,1.11-.02,1.66,0,.77.02,1.57.56,1.52,1.58-.03.52-.01,1.05,0,1.57,0,.09.08.24.15.26,1.2.28,2.32.77,3.39,1.44.42-.42.86-.82,1.25-1.26.71-.8,1.7-.56,2.23-.03.37.37.74.74,1.11,1.11.11.11.21.24.29.38.3.53.27.65-.22,1-1.82,1.29-3.65,2.58-5.47,3.87-.07.05-.15.1-.27.19-.05-.08-.1-.16-.17-.23-1.78-1.86-3.94-2.52-6.4-1.8-2.43.71-3.9,2.41-4.39,4.89-.67,3.42,1.82,6.82,5.27,7.26,3.18.4,6.01-1.45,6.9-4.52.04-.14.14-.28.26-.37,1.64-1.17,3.29-2.34,4.93-3.5.06-.05.14-.11.2-.11.54,0,1.1-.04,1.62.06.59.11.99.73,1.01,1.42.02.56.02,1.13,0,1.69-.03.77-.56,1.55-1.57,1.5-.52-.03-1.05,0-1.57,0-.14,0-.24,0-.28.18-.27,1.18-.74,2.27-1.37,3.29-.02.02-.02.06-.03.1Z"></path>
                                                 <path class="cls-1" d="m15.24,13.76c.57-.4,1.11-.78,1.65-1.16,2.87-2.03,5.74-4.06,8.61-6.1.79-.56,1.4-.45,1.97.34.13.18.25.35.38.53.44.65.33,1.33-.31,1.79-1.59,1.13-3.18,2.25-4.76,3.37-2.42,1.71-4.84,3.43-7.26,5.14-.73.52-1.26.43-1.79-.29-.94-1.3-1.89-2.61-2.84-3.91-.55-.75-.45-1.4.31-1.96.16-.12.32-.23.48-.35.71-.51,1.34-.41,1.87.3.56.75,1.12,1.51,1.7,2.3Z"></path>
                                             </svg> Get a Customized Version</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="mb-5">
                                 <h4 class="txt-black text-center mb-4">- List Of Chart -</h4>
                                 <p> <?php echo $report_detail[0]['rep_list_chart']; ?> </p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--------- Col-3 -------->
                 <div class="col-12">
                     <aside class="right-side-section">
                         <div class="onlineUser">
                             <p class="font12 mx-2 text-center mb-1 bold300">
                                 <img src="<?php echo WEBSITE_URL; ?>themes/image/onlineUserSvg.png" alt="Professionals" class="img-fluid userIcon" width="15" height="15"> <span class="bold500"><u><?php echo rand(200, 250); ?></u></span> Users Online
                             </p>
                         </div>

                         <div class="PremiumReportInfo right-boxes pb-4 pt-0 mt-2">
                             <p class="font16 txt-black py-3 m-0 bold300 text-center">- Premium Report Details -</p>
                             <div class="d-flex px-lg-3">
                                 <div class="w-50 pl-4">
                                     <img src="<?php echo WEBSITE_URL; ?>themes/image/report-sample-latest1.png" width="95" height="134" class="img-fluid" title="Europe Mini Scrap Metal Shredder Market" alt="Europe Mini Scrap Metal Shredder Market">
                                 </div>
                                 <div>
                                     <ul class="list-unstyled mb-1">
                                         <li class="txt-black1 font10 pb-2"><span class="date-mm"> PMRREP<?php echo $report_detail[0]['rep_id']; ?> </span></li>
                                         <?php if (isset($report_detail[0]['rep_type']) && $report_detail[0]['rep_type'] == 'N') {
                                            ?>
                                             <li class="txt-black1 font10 pb-2"><span class="date-mm"> <?php echo date("F-Y", strtotime($report_detail[0]['update_date'])); ?> </span> </li>
                                         <?php } ?>
                                         <li class="txt-black1 font10 pb-2"><span class="date-mm"><?php echo $report_detail[0]['cat_name']; ?></span></li>
                                         <li class="txt-black1 font10 pb-2"><span class="txt-black1"><?php echo $report_detail[0]['rep_type'] == 'N' ? $report_detail[0]['rep_pages'] . " Pages" : 'Ongoing'; ?></span></li>
                                         <li class="txt-black1 font10 pb-2 "><span class="txt-black1">PPT, PDF, WORD, EXCEL </span></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>

                         <div class="get-started-box right-boxes pb-4 pt-0 px-3 mt-4 text-center">
                             <p class="font16 txt-black py-3 m-0 bold300 text-center">- Get Started -</p>
                             <p class="font12 bold300">Get insights that lead to new growth opportunities</p>
                             <a class="btn btn-purchesReport bold500 text-black" href="<?php echo WEBSITE_URL . "checkout/" . $report_detail[0]['rep_id']; ?>" title=" <?php echo $report_detail[0]['rep_type'] == 'N' ? 'Purchase Report' : 'Pre Book'; ?>">
                                 <img src="<?php echo WEBSITE_URL; ?>themes/image/purchase-report-icon.png" width="20" height="26" alt="Purchase Report" title="Purchase Report" class="mr-2 align-bottom"> <?php echo $report_detail[0]['rep_type'] == 'N' ? 'Purchase Report' : 'Pre Book'; ?></a>
                         </div>
                         <div class="let-connect mb-3 mt-4  d-none">
                             <div class="analyst-img">
                                 <p class="font16 txt-black pt-2 mb-0 bold300 text-center">- Analyst Speak -</p>
                             </div>
                             <div class="analyst-info d-flex">
                                 <div class="px-2">
                                     <img src="<?php echo WEBSITE_URL; ?>themes/image/Mohit-lets-connect.png" width="95px" height="95px" alt="Talk To an Expert Today" class="img-fluid" title="Mohit Loshali">
                                 </div>
                                 <div class="analyst-name ml-2">
                                     <p class="mb-0 font15 bold300 text-blue">Mohit Loshali</p>
                                     <p class="mb-0 designation font11">Principal Consultant</p>
                                     <p class="mb-0"><a href="https://www.linkedin.com/in/mohit-loshali-2aa77023/" title="Mohit Loshali" target="_blank"><span class="linkedin"></span></a></p>
                                 </div>
                             </div>
                             <div class="text-center">
                                 <a href="<?php echo WEBSITE_URL . "ask-an-expert/" . $report_detail[0]['rep_id']; ?>" class="btn btn-connect-Auth  bold500" title="Talk To Author"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-headset align-middle mr-1" viewBox="0 0 16 16">
                                         <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                                     </svg> Talk To Author</a>
                             </div>

                         </div>

                         <div class="Customization-box right-boxes pb-4 pt-0 px-3 mt-4 text-center">
                             <p class="font16 txt-black py-3 m-0 bold300 text-center">- Customization -</p>
                             <p class="font12 bold300 mb-3 pb-2">Explore Intelligence Tailored to Your Business Goals.</p>
                             <div class="btn-container mt-2">
                                 <a href="javascript::void(0)" class="btn btn-Customization btn-custo bold500 request_popup" data-class="btn-orange" data-name="Request for Customization" data-prop="RC" data-btn="Get Customized Report" title="Request Customization" data-toggle="modal" data-target="#talk-to-author" title="Request Customization" title="Request Customization"><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.12 28.12" class="align-middle mr-1" fill="currentColor" stroke="5" width="22" height="22">&gt;<path class="cls-1" d="m23.28,19.96c.43.43.86.86,1.29,1.3.58.59.64,1.4.09,2.03-.43.49-.89.95-1.38,1.38-.63.55-1.43.48-2.02-.1-.42-.42-.84-.84-1.26-1.25-.01-.01-.03-.02.02,0-.84.37-1.64.74-2.45,1.08-.3.13-.62.2-.94.27-.18.04-.24.12-.23.3.01.51-.02,1.03,0,1.54.05,1.03-.74,1.56-1.51,1.59-.56.02-1.13.02-1.69,0-.76-.03-1.54-.57-1.49-1.57.03-.52.01-1.05,0-1.57,0-.09-.08-.24-.15-.26-1.2-.29-2.32-.77-3.4-1.44-.4.41-.8.81-1.2,1.21-.76.76-1.58.76-2.35,0-.34-.33-.67-.68-1.01-1.01-.55-.53-.82-1.54.02-2.27.43-.38.82-.8,1.25-1.22-.09-.16-.18-.3-.26-.44-.52-.89-.91-1.84-1.14-2.85-.06-.24-.16-.29-.38-.29-.49.01-.99-.02-1.48,0-1.05.06-1.58-.78-1.59-1.54,0-.53,0-1.07,0-1.6.01-.77.54-1.6,1.58-1.55.52.03,1.05.01,1.57,0,.09,0,.24-.08.26-.15.29-1.2.77-2.32,1.44-3.4-.41-.41-.83-.82-1.24-1.23-.72-.72-.73-1.56-.01-2.29.35-.36.71-.71,1.07-1.07.53-.53,1.52-.78,2.23.02.39.44.81.83,1.24,1.26.21-.12.4-.23.6-.34.86-.48,1.76-.84,2.72-1.06.19-.04.26-.12.25-.31-.01-.51.02-1.03,0-1.54-.06-1.04.76-1.56,1.51-1.58.55-.02,1.11-.02,1.66,0,.77.02,1.57.56,1.52,1.58-.03.52-.01,1.05,0,1.57,0,.09.08.24.15.26,1.2.28,2.32.77,3.39,1.44.42-.42.86-.82,1.25-1.26.71-.8,1.7-.56,2.23-.03.37.37.74.74,1.11,1.11.11.11.21.24.29.38.3.53.27.65-.22,1-1.82,1.29-3.65,2.58-5.47,3.87-.07.05-.15.1-.27.19-.05-.08-.1-.16-.17-.23-1.78-1.86-3.94-2.52-6.4-1.8-2.43.71-3.9,2.41-4.39,4.89-.67,3.42,1.82,6.82,5.27,7.26,3.18.4,6.01-1.45,6.9-4.52.04-.14.14-.28.26-.37,1.64-1.17,3.29-2.34,4.93-3.5.06-.05.14-.11.2-.11.54,0,1.1-.04,1.62.06.59.11.99.73,1.01,1.42.02.56.02,1.13,0,1.69-.03.77-.56,1.55-1.57,1.5-.52-.03-1.05,0-1.57,0-.14,0-.24,0-.28.18-.27,1.18-.74,2.27-1.37,3.29-.02.02-.02.06-.03.1Z"></path>
                                         <path class="cls-1" d="m15.24,13.76c.57-.4,1.11-.78,1.65-1.16,2.87-2.03,5.74-4.06,8.61-6.1.79-.56,1.4-.45,1.97.34.13.18.25.35.38.53.44.65.33,1.33-.31,1.79-1.59,1.13-3.18,2.25-4.76,3.37-2.42,1.71-4.84,3.43-7.26,5.14-.73.52-1.26.43-1.79-.29-.94-1.3-1.89-2.61-2.84-3.91-.55-.75-.45-1.4.31-1.96.16-.12.32-.23.48-.35.71-.51,1.34-.41,1.87.3.56.75,1.12,1.51,1.7,2.3Z"></path>
                                     </svg> Request Customization</a>
                             </div>
                         </div>

                         <div class="quickContact right-boxes px-2 pt-0 pb-0 mt-4 text-center">
                             <p class="fs-16 txt-black contactList py-3 bold300 m-0">- Quick Contact -</p>
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
                             <p class="font16 txt-black py-3 m-0 bold300 text-center">- Prestigious Clients -</p>
                             <img src="<?php echo WEBSITE_URL; ?>themes/image/clients-<?php echo $report_detail[0]['category_id']; ?>.svg" title="<?php echo $report_detail[0]['cat_name']; ?>" alt="<?php echo $report_detail[0]['cat_name']; ?>" width="100px" height="146px">
                         </div>

                         <div class="member-of right-boxes pb-4 pt-0 mt-4 text-center">

                             <p class="font16 txt-black py-3 m-0 bold300 text-center">- Member Of -</p>
                             <a href="https://www.dnb.com/business-directory/company-profiles.persistence_market_research_private_limited.9abc6bce674200f850b02f07995c6f97.html" title="Duns Registered" target="_blank">
                                 <img class="" width="104" height="85" src="<?php echo WEBSITE_URL; ?>themes/image/dun-logo-new.png" alt="Duns Registered" title="Duns Registered">

                             </a>

                             <p class="font16 txt-black py-3 m-0 bold300 text-center">- Secured Payment -</p>
                             <img class="" width="156px" height="49" src="<?php echo WEBSITE_URL; ?>themes/image/secureTrust-logo.png" alt="Secure Trust" title="Secure Trust">

                             <p class="font16 txt-black py-3 m-0 bold300 text-center">- Policy Compliance -</p>
                             <img class="" src="<?php echo WEBSITE_URL; ?>themes/image/lms-logo.png" width="72px" height="63px" alt="GDPR" title="GDPR" height="63px" width="72px">
                             <p class="font12 lineheight20 mb-0 ml-3 mt-2">We are GDPR compliant! We protect your transactions & personal information.</p>
                         </div>
                         <?php
                            if (!empty($related_reports)) {
                            ?>
                             <div class="relatedReportslist px-2 pt-3 pb-4 mt-4 mb-4 right-boxes">
                                 <p class="text-center h6 bold300">- Related Reports -</p>
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


     <!-- <div class="stickyWhatsapp flex-grow-1">
         <a href="https://api.whatsapp.com/send?phone=919511705688">
             <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#fff" class="bi bi-whatsapp mt-1" viewBox="0 0 16 16">
                 <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
             </svg>
         </a>
     </div> -->
     <?php $this->load->view("frontend/footer_mobile"); ?>

     <div class="fixedBottomButton d-flex">
         <a class="btn btn-Email-send text-black2 bold300 w-25" href="mailto:sales@persistencemarketresearch.com" title="Sales PMR">
             <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-envelope mb-0 mt-2" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                 <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
             </svg>
         </a>
         <a class="btn btn-free-sample w-75" href="javascript::void(0);" title="Get FREE Report Sample" data-toggle="modal" data-target="#cta-banner-1">
             <img src="<?php echo WEBSITE_URL; ?>themes/image/pdf-icon-latest.svg" width="22" height="22" title="Download PDF" alt="Download PDF" class="mr-2 img-fluid">
             Get FREE Report Sample
         </a>

     </div>


     <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL; ?>themes/css/report-details-mobile.css">
     <?php $this->load->view("cta_popup_mobile"); ?>
    <?php  $messagePlaceholder = "Describe your interest to the analyst in a few sentences"; ?>
     <!-- talk to author popup -->
     <div class="modal fade cta-modal cta-b1-modal" id="talk-to-author" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-body">
                     <div class="row m-0">
                         <div class="col-lg-8 p-0">
                             <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close" style="outline:0">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                             <p class="text-center mt-4 mb-2 modalHead requestPopupTitle"><span class="bold700"><u>FREE</u></span> Report Sample is Available</p>
                             <form class="mt-4" name="" action="<?php echo $submit_url; ?>" method="POST">
                                 <?php
                                    $name = $this->security->get_csrf_token_name();
                                    $hash = $this->security->get_csrf_hash();
                                    $_SESSION[$name] = $hash;
                                    ?>

                                 <input type="hidden" name="<?= $name; ?>" value="<?= $hash; ?>" />
                                 <input type="hidden" name="source" value="FMP" />
                                 <input type="hidden" name="repId" value="<?php echo $report_detail[0]['rep_id']; ?>">
                                 <input type="hidden" name="type" class="hdnType" value="S">
                                 <div class="form-group position-relative">
                                     <input type="text" name="name" id="idName" class="form-control name" placeholder="Full Name*" required="required" pattern="^$|^\S+.*">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                 </div>
                                 <div class="form-group position-relative">
                                     <input type="email" name="emailId" id="idFctMREmailId" class="form-control sampleForm2 emailId" required="required" placeholder="Business Email*" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" >
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
                                     <input type="text" name="phoneNo" id="idFctMRContactNo" class="form-control phNo" placeholder="Phone Number*" required="required" maxlength="14" pattern="^$|^\S+.*" onblur="checksubmit(this.value);">
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
                                     <input type="text" name="company" id="idCompany" class="form-control company" placeholder="Company*" required="required" pattern="^$|^\S+.*">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#5dbb2d" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="display:none">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                     </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f53131" class="bi bi-info-circle" viewBox="0 0 16 16" style="display:none">
                                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                         <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                     </svg>
                                 </div>
                                 <div class="form-group position-relative">
                                     <textarea type="text" name="message" id="idMessage" class="form-control message" placeholder="<?php echo $messagePlaceholder ?>" maxlength="200" required></textarea>

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
                                 <button type="submit" class="buttonMyclass btn requestFreeSample requestFormButton" name="btnSubmit">Yes! Send a <span class="bold700"><u>FREE</u></span> Copy</button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
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

                 $('.requestPopupTitle').html(ctatype);
                 $(".hdnType").val($(this).attr("data-prop"));

                 $(".requestFormButton").html(btnname);

                 if (formType == 'ASK') {
                     $(".buttonMyclass").removeClass(' btn requestFreeSample requestFormButton btn-green');
                     $(".buttonMyclass").addClass('buttonMyclass btn requestFreeSample requestFormButton btn-orange');
                 } else {
                     $(".buttonMyclass").removeClass(' btn requestFreeSample requestFormButton btn-orange');
                     $(".buttonMyclass").addClass('buttonMyclass btn requestFreeSample requestFormButton btn-green');
                 }

             });
         });


         var topScrollPosition = $("header").offset().top + 400;
         $(window).scroll(function() {
             var a = $(window).scrollTop();
             // footer sticky code
             if (a >= topScrollPosition) {
                 $("#scrollToTop").addClass("show");
                 $(".stickyWhatsapp").addClass("showStickyWhatsapp");
             } else {
                 $("#scrollToTop").removeClass("show");
                 $(".stickyWhatsapp").removeClass("showStickyWhatsapp");
             }
         });

         $("#scrollToTop").click(function() {
             $('html,body').animate({
                     scrollTop: $("header").offset().top
                 },
                 'slow');
         });
         $("body").on("focus", ".emailId,.phNo,.name,.company, .jobTitle, .message", function() {
             if ($(this).hasClass("border-green")) {
                 $(this).removeClass("border-red");
                 $(this).parent().find(".bi-info-circle").hide();
             } else {
                 $(this).addClass("border-red");
                 $(this).parent().find(".bi-info-circle").show();
             }
         });


         $("body").on("keyup", ".emailId,.phNo,.name,.company, .jobTitle, .message", function() {
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

         var fixmeTop = $('#myTab').offset().top;

         $(window).scroll(function() {

             var currentScroll = $(window).scrollTop();
             if (currentScroll >= fixmeTop) {
                 $('#myTab').addClass('fixedMarketByteBar');
                 $('.backgroundgray').addClass('fixedMarketByteBar');
                 $('.fixed-bottom-btn').addClass('fixedMarketByteBar');

                 $('.fixedBottomButton').addClass('active');
             } else {
                 $('#myTab').removeClass('fixedMarketByteBar');
                 $('.backgroundgray').removeClass('fixedMarketByteBar');
                 $('.fixed-bottom-btn').removeClass('fixedMarketByteBar');
                 $('.fixedBottomButton').removeClass('active');
             }

         });

         $("table").addClass("table table-bordered");
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

                 //   $('.phNo1').parent().find(".bi-check-circle-fill").hide();
                 //   $(".phNo1").removeClass("border-green");

             } else {
                 err += 'error';

                 $('.phNo').val('');
                 // $(".phNo1").removeClass("border-green");
                 $('.errorPhoneNo').html('Invalid Phone Number');
                 $('.phNo').addClass("border-red");
                 $('.phNo').removeClass("border-green");
                 $('.phNo').parent().find(".bi-check-circle-fill").hide();
                 $('.phNo').parent().find(".bi-info-circle").show();
             }

         }
     </script>

     <?php if (isset($faqs) && !empty($faqs)) {

        ?>
         <script type="application/ld+json">
             {
                 "@context": "https://schema.org",
                 "@type": "FAQPage",
                 "mainEntity": [
                     <?php for ($i = 0; $i < count($faqs); $i++) { ?> {
                             "@type": "Question",
                             "name": "<?php echo strip_tags($faqs[$i]['question']); ?>",
                             "acceptedAnswer": {
                                 "@type": "Answer",
                                 "text": "<?php echo strip_tags($faqs[$i]['answer']); ?>"
                             }
                         }
                         <?php if ((count($faqs) - 1) > $i) { ?>, <?php } ?>
                     <?php } ?>
                 ]
             }
         </script>
     <?php } ?>

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