<!DOCTYPE html>
<html  lang="en">
<head>

    <?php $this->load->view("frontend/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-listing.css" rel="stylesheet" />
    <?php $this->load->view("frontend/header_home"); ?>
	<main role="main">
        
        <div class="breadCrumb-Section">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent p-0 my-0">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo WEBSITE_URL; ?>" class="text-black" title="Persistence Market Report">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item" class="text-black" aria-current="page">
                                    <span><?php echo $page_heading; ?></span>
                                </li>
                            </ol>
                        </nav>
                    </div>
            </div>
        </div>
        </div>
        <section class="listingBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 text-white">
                        <h1 class="text-center mb-0 secHeading"> <?php echo $page_heading; ?></h1>
                    </div>
                </div>
            </div>
        </section>
      
        <section class="reportListSec">
            <div class="container">
                <div class="row py-3">
                    <?php  
                    if($total_records > 0){
                        ?>
                        
                        <div class="col-xs-12 col-lg-9 reportListBox">
                            <form class="form-inline mb-4"  action="<?php echo WEBSITE_URL; ?>search" method="GET" style="margin-left: -15px;margin-right: -15px;">
                                <div class="input-group" style="width: 100%;">
                                    <input type="text"  id="s" name="query" class="form-control" placeholder="Search Report" autocomplete="off" required="" minlength="3" maxlength="255">
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
                            
                            <div class="reportListContainer">
                            <?php
                            if(!empty($reports)){
                                foreach($reports as $report){
                                    $keyword = $report['rep_keyword'];
                                   // var_dump($report);exit();
                                ?>
                                <div class="row reportListing border-radius">
                                   
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <div class="contentBox py-0">
                                            <h2 class="mt-0"><a class="listTitle secHeadingLeft" href="<?php echo WEBSITE_URL."market-research/".$report['rep_url'].".asp"; ?>" title="<?php echo $keyword; ?>"><?php echo $keyword; ?></a></h2>
                                            <p class="report-desc"><?php echo $report['rep_name']; ?></p>
                                            <span class="report-meta"><?php echo date("j M Y", strtotime($report['update_date']));?> | Pages: <?php echo $report['rep_pages'];?> | Format: PPT*, PDF, EXCEL
                                            </span>
                                            <a class="rmlink" href="<?php echo WEBSITE_URL."market-research/".$report['rep_url'].".asp"; ?>" title="<?php echo $at_keyword; ?>">Read More →</a>
                                             
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                            }
                            ?>

                            
                              <div class="nextdiv" id="LoadData2">
                             </div>
                            </div>
                          
                            
                            <div class="text-center"> 
                                <p class="btn btn-loadmore loadmore-spiner" title="More Reports" href=" " onclick="getLoadData();">More Reports
                                    <span class="loadMore-ring"></span>
                                </p>
                            </div>
                        </div>
                        
                        <?php
                    }else{
                        echo "No Reports Found !!";
                    }
                   // var_dump($categorytree);
                    ?>
                    <div class="col-xs-12 col-md-3 filterboxes">
                        <script>
                                function toggleCategory(id, element) {
                                    var content = document.getElementById(id);
                                    var icon = element.querySelector(".chevron-icon");

                                    if (content.classList.contains("show")) {
                                        content.classList.remove("show");
                                        icon.classList.remove("rotate");
                                    } else {
                                        content.classList.add("show");
                                        icon.classList.add("rotate");
                                    }
                                }
                        </script>
                        <div class="card mt-0 border-0 category-card">
                            <nav id="category-links">
                                <div class="card-header p-0 px-4 py-2 border-0" onclick="toggleCategory('consumer-goods', this)">
                                    <div class="mb-0 d-flex justify-content-between align-items-center">
                                        <span>Consumer Goods</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1 chevron-icon" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="consumer-goods" class="collapse show">
                                    <div class="card-body">
                                        <ul>
                                        <li><a href="<?php echo ROOT_URL."market-research-report/home-appliances.asp";?>" title="Home Appliances">Home Appliances</a></li>
                                        <li><a href="<?php echo ROOT_URL."market-research-report/beauty-and-personal-care.asp";?>" title="Beauty & Personal Care">Beauty & Personal Care</a></li>
                                        <li><a href="<?php echo ROOT_URL."market-research-report/clothing-footwear-and-accessories.asp";?>" title="Clothing, Footwear, & Accessories">Clothing, Footwear, & Accessories</a></li>
                                        <li><a href="<?php echo ROOT_URL."market-research-report/home-care-and-utilities.asp";?>" title="Home Care & Utilities">Home Care & Utilities</a></li>
                                        <li><a href="<?php echo ROOT_URL."market-research-report/sporting-goods-and-equipment.asp";?>" title="Sporting Goods & Equipment">Sporting Goods & Equipment</a></li>
                                        <li><a href="<?php echo ROOT_URL."market-research-report/baby-care-and-accessories.asp";?>" title="Baby Care & Accessories">Baby Care & Accessories</a></li>
                                        <li><a href="<?php echo ROOT_URL."market-research-report/retail.asp";?>" title="Retail">Retail</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-header p-0 px-4 py-2 border-0" onclick="toggleCategory('food', this)">
                                    <div class="mb-0 d-flex justify-content-between align-items-center">
                                        <span>Food and Beverages</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1 chevron-icon" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="food" class="collapse">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/nutraceuticals-and-functional-foods.asp";?>" title="Nutraceuticals & Functional Foods">Nutraceuticals & Functional Foods</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/food-ingredients-and-additives.asp";?>" title="Food Ingredients & Additives">Food Ingredients & Additives</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/processed-food.asp";?>" title="Processed Food">Processed Food</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/beverages.asp";?>" title="Beverages">Beverages</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/animal-feed-and-additives.asp";?>" title="Animal Feed & Additives">Animal Feed & Additives</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-header p-0 px-4 py-2 border-0" onclick="toggleCategory('chemicals', this)">
                                    <div class="mb-0 d-flex justify-content-between align-items-center">
                                        <span>Chemicals and Materials</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1 chevron-icon" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="chemicals" class="collapse">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/advanced-materials.asp";?>" title="Advanced Materials">Advanced Materials</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/agrochemicals.asp";?>" title="Agrochemicals">Agrochemicals</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/bulk-chemicals.asp";?>" title="Bulk Chemicals">Bulk Chemicals</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/plastics-polymers-and-resins.asp";?>" title="Plastics, Polymers & Resins">Plastics, Polymers & Resins</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/specialty-and-fine-chemicals.asp";?>" title="Specialty & Fine Chemicals">Specialty & Fine Chemicals</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/inks-coatings-adhesives-and-sealants-icas.asp";?>" title="Inks, Coatings, Adhesives & Sealants (ICAS)">Inks, Coatings, Adhesives & Sealants (ICAS)</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/metals-and-minerals.asp";?>" title="Metals & Minerals">Metals & Minerals</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-header p-0 px-4 py-2 border-0" onclick="toggleCategory('telecommunication', this)">
                                    <div class="mb-0 d-flex justify-content-between align-items-center">
                                        <span>IT and Telecommunication </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1 chevron-icon" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="telecommunication" class="collapse">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/technology.asp";?>" title="Technology">Technology</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/hardware-and-software-it-services.asp";?>" title="Hardware & Software IT Services">Hardware & Software IT Services</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/media-and-entertainment.asp";?>" title="Media & Entertainment">Media & Entertainment</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/telecommunications.asp";?>" title="Telecommunications">Telecommunications</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/communication-infrastructure-and-services.asp";?>" title="Communication Infrastructure & Services">Communication Infrastructure & Services</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/testing-inspection-and-certification.asp";?>" title="Testing, Inspection, & Certification">Testing, Inspection, & Certification</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-header p-0 px-4 py-2 border-0" onclick="toggleCategory('semiconductor', this)">
                                    <div class="mb-0 d-flex justify-content-between align-items-center">
                                        <span>Semiconductor Electronics</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1 chevron-icon" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="semiconductor" class="collapse">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/semiconductor-materials-and-components.asp";?>" title="Semiconductor Materials & Components">Semiconductor Materials & Components</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/display-technologies.asp";?>" title="Display Technologies">Display Technologies</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/sensors-and-controls.asp";?>" title="Sensors & Controls">Sensors & Controls</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/chipsets-and-processors.asp";?>" title="Chipsets & Processors">Chipsets & Processors</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/led-and-lighting-optoelectronics.asp";?>" title="LED & Lighting (Optoelectronics)">LED & Lighting (Optoelectronics)</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-header p-0 px-4 py-2 border-0" onclick="toggleCategory('automation', this)">
                                    <div class="mb-0 d-flex justify-content-between align-items-center">
                                        <span>Industrial Automation</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1 chevron-icon" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="automation" class="collapse">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/automation-and-robotics.asp";?>" title="Automation & Robotics">Automation & Robotics</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/off-road-equipment-and-machinery.asp";?>" title="Off-Road Equipment & Machinery">Off-Road Equipment & Machinery</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/electrical-equipment-and-services.asp";?>" title="Electrical Equipment & Services">Electrical Equipment & Services</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/metalworking-and-fabrication.asp";?>" title="Metalworking & Fabrication">Metalworking & Fabrication</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/industrial-goods-and-service.asp";?>" title="Industrial Goods & Service">Industrial Goods & Service</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/industrial-machinery.asp";?>" title="Industrial Machinery">Industrial Machinery</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/hvac.asp";?>" title="HVAC">HVAC</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/construction-and-engineering.asp";?>" title="Construction & Engineering">Construction & Engineering</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-header p-0 px-4 py-2 border-0" onclick="toggleCategory('healthcare', this)">
                                    <div class="mb-0 d-flex justify-content-between align-items-center">
                                        <span>Healthcare</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1 chevron-icon" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="healthcare" class="collapse">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/pharmaceuticals.asp";?>" title="Pharmaceuticals">Pharmaceuticals</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/medical-devices.asp";?>" title="Medical Devices">Medical Devices</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/healthcare-it.asp";?>" title=" Healthcare IT"> Healthcare IT</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/biotechnology.asp";?>" title="Biotechnology">Biotechnology</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/animal-health.asp";?>" title="Animal Health">Animal Health</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/healthcare-services.asp";?>" title="Healthcare Services">Healthcare Services</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-header p-0 px-4 py-2 border-0" onclick="toggleCategory('energy', this)">
                                    <div class="mb-0 d-flex justify-content-between align-items-center">
                                        <span>Energy & Utilities</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1 chevron-icon" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="energy" class="collapse">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/energy-storage-solutions.asp";?>" title="Energy Storage Solutions">Energy Storage Solutions</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/renewable-energy.asp";?>" title="Renewable Energy">Renewable Energy</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/power-generation-transmission-and-distribution.asp";?>" title="Power Generation, Transmission, & Distribution">Power Generation, Transmission, & Distribution</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/oil-and-gas.asp";?>" title="Oil & Gas">Oil & Gas</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/carbon-capture-and-storage.asp";?>" title="Carbon Capture & Storage">Carbon Capture & Storage</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/mining-and-services.asp";?>" title="Mining & Services">Mining & Services</a></li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="card-header p-0 px-4 py-2 border-0" onclick="toggleCategory('packaging', this)">
                                    <div class="mb-0 d-flex justify-content-between align-items-center">
                                        <span>Packaging</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1 chevron-icon" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="packaging" class="collapse">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/food-packaging.asp";?>" title="Food Packaging">Food Packaging</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/non-food-packaging.asp";?>" title="Non-food Packaging">Non-food Packaging</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/smart-packaging.asp";?>" title="Smart Packaging">Smart Packaging</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-header p-0 px-4 py-2 border-0" onclick="toggleCategory('automotive', this)">
                                    <div class="mb-0 d-flex justify-content-between align-items-center">
                                        <span>Automotive & Transportation </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-up float-right mt-1 chevron-icon" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="automotive" class="collapse">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/automotive.asp";?>" title="Automotive">Automotive</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/automotive-components-and-materials.asp";?>" title="Automotive Components & Materials">Automotive Components & Materials</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/electric-mobility.asp";?>" title="Electric Mobility">Electric Mobility</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/marine.asp";?>" title="Marine">Marine</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/aerospace-and-defense.asp";?>" title="Aerospace & Defense">Aerospace & Defense</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/rail.asp";?>" title="Rail">Rail</a></li>
                                            <li><a href="<?php echo ROOT_URL."market-research-report/transportation-and-logistics.asp";?>" title="Transportation & Logistics">Transportation & Logistics</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <!-- <div class="totalCount" style="text-align: left;">
                        
                            <label for="per_page" class="dropselect d-inline-block font13 txt-black mr-1 mb-0">Show : </label>
                            <select name="per_page" id="per_page" class="font13 searchBySel selectBoxList mr-1">
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <span class="font13">Total Records</span><span class="font13 blueText rptRecordCount">(<?php echo $total_records; ?>)</span>
                        </div> -->
                        <input type="hidden" id="per_page" name="per_page" value="30">
                        <div class="Our-clients right-boxes mt-4 pb-2 pt-0  text-center border-radius">
                            <p class="font18 text-blue-new pt-3 pb-2 m-0 bold400 text-center">Our Media Trust</p>
                             
                             <img src="<?php echo WEBSITE_URL; ?>themes/image/home/pmr-media-citations.webp" title="<?php echo $report_detail[0]['cat_name']; ?>" class="mt-2" width="260" height="150" alt="<?php echo $report_detail[0]['cat_name']; ?>">
                        </div>
                        <div class="slider-section mt-4 right-boxes border-radius bg-white" style="position: relative;border-radius:10px;">
                            <p class="font18 text-blue-new pt-3 pb-2 m-0 bold400 text-center">Testimonials</p>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators ">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carosel-box">
                                            <div class="tour-item ">
                                                <div class="tour-desc ">
                                                    <div class="font16">“Persistence Market Research has helped us immensely in compiling a sound database. Our expectations were exceeded by their research team.”</div>
                                                    
                                                    <div class="link-name d-flex text-right font15 bold600 pt-3">Fortune 500 Telecom Company, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item ">
                                                <div class="tour-desc">
                                                    <div class="font16">“The market numbers supplied by Persistence Market Research helped us successfully conclude our ongoing project and we are pleased with this purchase.” </div>
                                                    
                                                    <div class="link-name d-flex text-right font15 bold600 pt-3">Multinational Chemical Company, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item ">
                                                <div class="tour-desc">
                                                    <div class="font16">“The customer service provided by Persistence Market Research was great. We got our report well in time and customized to suit our business requirements.”</div>
                                                    
                                                    <div class="link-name d-flex text-right font15 bold600 pt-3">Multinational Electronics Company, Japan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item">
                                                <div class="tour-desc">
                                                    <div class="font16 pb-4">“The way Persistence Market Research handled the entire transaction, right from customization to after-sales queries, has been very impressive.”</div>
                                                    <div class="link-name d-flex text-right font15 bold600">Leading Semiconductors Company, Taiwan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item">
                                                <div class="tour-desc">
                                                    <div class="font16 pb-4">“Thank you for supplying the report in time for our project to go through. Commendable customer service.”</div>
                                                    <div class="link-name d-flex text-right font15 bold600">Leading Global Healthcare Fortune 500 Company, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carosel-box">
                                            <div class="tour-item">
                                                <div class="tour-desc">
                                                    <div class="font16 pb-1">“The precise information given in Persistence Market Research’s reports has been priceless to us. We are very happy with this purchase, since the analysis in the report has been important in formulating our strategies.”</div>
                                                    <div class="link-name text-right font15 bold600">Global Consulting Firm, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a class="carousel-control-prev right-pre" href="#carouselExampleIndicators" role="button" data-slide="prev" title="Previous">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next left-next" href="#carouselExampleIndicators" role="button" data-slide="next" title="Next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a> -->
                              </div>
                        </div>
                        <div class="Customization-box right-boxes pb-4 pt-0 px-3 mt-4 text-center border-radius">
                             <p class="font18 text-blue-new py-3 m-0 bold400 text-center"> Research Methodology</p>
                             <p class="font16 bold400">Get Data-Driven Research Methodology for Accurate Insights
                             </p>
                             <div class="btn-container">
                                 <a href="<?php echo WEBSITE_URL."research-methodology.asp"; ?>" class="btn btn-cta bold500 font18" data-name="Get Research Methodology"  data-btn="Submit" title="Get Research Methodology" style="width:100%;">
                                 Read More</a>
                             </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
        <section class="keyBenifitSec py-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h3 class="secHeading mb-4">The Persistence Market Research Benefits</h3>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xs-12 keyBox">
                        <div class="keyBoxTitle">
                            <span class="keyIcon"></span>
                            <h4>Precision and Quality</h4>
                        </div>
                        <p>
                            Precision drives the quality of reports offered by Persistence Market Research.
                        </p>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xs-12 keyBox">
                        <div class="keyBoxTitle">
                            <span class="keyIcon"></span>
                            <h4>Customer Satisfaction</h4>
                        </div>

                        <p>
                            We are committed to abide by our businesses’ inquisitiveness by providing best-in-line, customized solutions.
                        </p>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xs-12 keyBox">
                        <div class="keyBoxTitle">
                            <span class="keyIcon"></span>
                            <h4>360-degree Analysis</h4>
                        </div>
                        <p>
                            An eagle eye-view of market intelligence is provided by our analysts/consultants
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <input type="hidden" class="hdnSearchByType" name="searchByType" value="M">
    <input type="hidden" class="hdnSearchBySector" name="searchBySector" value="">
    <input type="hidden" class="hdnSearchByYear" name="searchByYear" value="">
    <input type="hidden" class="page" id="page" name="page" value="2">

    <link href="<?php echo WEBSITE_URL; ?>assets/css/listing.css" rel="stylesheet" />
    <?php $this->load->view("frontend/footer"); ?>
    <script>
        
        $(document).ready(function(){
            // Handle checkbox selection logic
            $(".searchBySel").change(function(){
                var categoryId = $(this).attr("id");

                if ($(this).is(":checked")) {
                    $("input[data-parent='"+categoryId+"']").prop("checked", true);
                } else {
                    $("input[data-parent='"+categoryId+"']").prop("checked", false);
                }

                checkParentStatus($(this));
                updateFilters();
            });

            function checkParentStatus(childCheckbox) {
                var parentId = childCheckbox.attr("data-parent");
                
                if (parentId) {
                    var allSiblingsChecked = true;
                    var anySiblingChecked = false;

                    $("input[data-parent='"+parentId+"']").each(function(){
                        if ($(this).is(":checked")) {
                            anySiblingChecked = true;
                        } else {
                            allSiblingsChecked = false;
                        }
                    });

                    if (!allSiblingsChecked) {
                        $("#" + parentId).prop("checked", false);
                    }
                    if (anySiblingChecked && allSiblingsChecked) {
                        $("#" + parentId).prop("checked", true);
                    }
                }
            }

            function updateFilters() {
                var searchBySector = "";
                $(".category_filter:checked").each(function(){
                    searchBySector += ","+$(this).val();
                });

                if (searchBySector) searchBySector = searchBySector.substring(1);
                $(".hdnSearchBySector").val(searchBySector);
                getAjaxPagination(1);
            }

            // Make first category active on page load
            $(".collapse:first").collapse("show");
        });


        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        function getAjaxPagination(page){
                $("#page").val(2);
        		var per_page = $("#per_page").val();
            var repType = $(".hdnSearchByType").val();
            var searchBySector = $(".hdnSearchBySector").val();
            var searchByYear = $(".hdnSearchByYear").val();
            var url = "<?php echo WEBSITE_URL; ?>reports/reports_by_ajax";
            
            

            $.ajax({
                type: "GET",
                url: url,
                data:{'searchBySector':searchBySector, 'page':page,'per_page' :per_page, 'repType':repType, 'searchByYear':searchByYear, [csrfName]: csrfHash},
                dataType:"json",
                success: function(content){
                    $(".reportListContainer").html(content['reports']);
                   
                    $(".rptRecordCount").html("("+content['total_records']+")");
                    csrfName = content['csrf_name'];
                    csrfHash = content['csrf_value'];
                }
            }); 
        }
    </script>
    
<script>   



function getLoadData()
{
	
	var per_page = $("#per_page").val();
    var repType = 'M';//$(".hdnSearchByType").val();
    var searchBySector = $(".hdnSearchBySector").val();
    var searchByYear = $(".hdnSearchByYear").val();
	
	 var page = $('#page').val(); 
	 var per_page = $('#per_page').val();
	 var next = parseInt(page) + 1;

 //alert('page'+page+"per page "+per_page+" type" + repType + "cat "+ searchBySector + "year" + searchByYear);
        $('.loadMore-ring').css('display','inline-block');
	 var ajaxUrl = "<?php echo WEBSITE_URL . 'reports/getReportListingData'; ?>";
	$.ajax({
			 type: "GET", //GET or POST or PUT or DELETE verb
			 url: ajaxUrl, // Location of the service
			 data: {					 
					"page": page,
					"per_page": per_page,
					"searchbytype": repType,
					"searchByYear": searchByYear,
					"searchBySector": searchBySector
				
			},
			befoeSend:function(){
				// $(".loadmore-spiner").removeClass("d-none");
			},
	 contentType: "", // content type sent to server
	 dataType: "html", //Expected data format from server
	 processdata: true, //True or False
	 success: function(htmldata) { //On Successful service call
		if(htmldata!=''){
			$("#LoadData"+page).append(htmldata);
			$("#page").val(next);
            $('.loadMore-ring').css('display','none');
			
		}
		else{
			 								
		}
		
	},
	 
});
		
}
    	 
    $(document).ready(function(){
        var url = window.location.href;
       // var index = url.indexOf("#");
       var index = url.includes("forthcoming");
        if (index !== -1)
        {
            var hash = url.substring(index + 1);  
            if(hash != '' &&  hash == 'forthcoming-reports' )
            {              
                 $("#forthcoming-report").attr('checked','checked');                 
                 $(".hdnSearchByType").val('M');
            }
            else if(hash != '' &&  hash == 'published-reports' )
            {
                 
                 $("#published-report").attr('checked','checked');
                  $(".hdnSearchByType").val('N');
            }
            else if(hash != ''){          


            var url = "<?php echo WEBSITE_URL; ?>reports/getTheCatIdByURL";
            
            $.ajax({
                type: "GET",
                url: url,
                data:{'category_url':hash},
                dataType:"json",
                success: function(content){

                    $("#collapseOne").addClass('in');
                    $("#"+content).attr('checked','checked')
                    $(".hdnSearchBySector").val(content);
                    
                }
            });

            }   
            getAjaxPagination(1);  
         
        }
    });

    	
</script>
</body>
</html>