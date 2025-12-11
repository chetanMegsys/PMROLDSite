<!DOCTYPE html>
<html lang="en">
<head>

	<?php $this->load->view("frontend/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />

    <?php $this->load->view("frontend/header"); ?>
    <style>
   
    .media-citations a{color: #2358a8 !important;}
     img.media-citation-logo {width: 100%;padding: 10px;} .aboutListSec p{font-size:18px;} .secHeading{margin:20px 0px; color:#2358a8; font-weight:600;}.p-title{font-size:2rem;font-weight:600;}</style>
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
                                    <span>Primary Research Capabilities</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
            </div>
        </div>
        </div>
        <section class="p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 font18 pt-1" >
                        <nav class="slinks">
                            <ul>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/syndicate-market-research.asp">Syndicated Market Research</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/custom-research.asp">Customized Research</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/consulting-services.asp">Consulting Business Advisory</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/full-time-engagement.asp">Full-time Engagement</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/subscription-services.asp">Annual Subcription Services</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/primary-research-capabilties.asp">Primary Research Capabilties</a>
                                </li>
                                 <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/competitive-intelligence.asp">Competitive Intelligence</a>
                                </li>
                                 <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/commercial-due-diligence.asp">Commercial Due Diligence</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-9 font18" >
                        <h1 class="mb-2 p-title">Primary Research Capabilities</h1>
                        <p>
                            <strong>In today's fiercely competitive business environment, staying ahead is crucial for success. Conducting primary market research is one of the most effective ways to achieve this.</strong>
                        </p>
                        <p>
                          Persistence Market Research is committed to delivering actionable insights through our extensive primary research capabilities. We collaborate with both global and regional brands, alongside consulting firms, to drive market penetration, enhance customer experience, develop innovative products and services, and refine brand placement and communication strategies.
                        </p>
                        <p>
                           Collecting firsthand data directly from potential customers, clients, and stakeholders enables companies to gain profound insights into their needs, preferences, and behaviors. This critical information equips businesses to identify new opportunities, manage risks effectively, and make well-informed decisions.
                        </p>
                        <p>
                            We possess a keen understanding of the unique dynamics and challenges across industries. Our tailored approach to every project allows us to adapt methodologies and deliverables that align with your specific objectives, unlocking the insights necessary for you to maintain a competitive edge and achieve business success.
                        </p>
                        <p>
                            Our expertise spans comprehensive B2B and B2C market research on a global and domestic scale. With a strategic blend of qualitative and quantitative methodologies customized for your business needs, we ensure that you remain competitive.
                        </p>
                        <p>
                            We excel in conducting a broad range of Quantitative and Qualitative research, as well as pinpointing niche audiences through:
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="pmr-services mb-4">
                                    <ul>
                                        <li>Depth Interviews</li>
                                        <li>Surveys </li>
                                        <li>Focus Groups </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="pmr-services mb-4">
                                    <ul>
                                        <li>Online Communities </li>
                                        <li>Observation Studies </li>
                                        <li>B2B and Evaluation Studies</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo WEBSITE_URL; ?>assets/images/quantitative_and_qualitative_research_services_1.webp" alt="Quantitative and Qualitative Research Services" width="100%" height="auto">
                        <p class="pt-4">
                           Let us partner with you to propel your business forward. 
                        </p>
                        
                    </div>
                    
                </div>
            </div>
        </section>
    </main>

    <?php $this->load->view("frontend/footer"); ?>
    
    <link href="<?php echo WEBSITE_URL; ?>assets/css/static.css" rel="stylesheet" />
    <script>
            function captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#captcha span").remove(); $("#captcha input").remove(); $("#captcha").append("<span id='code'>" + Code + "</span><input type='button' onclick='captchaCode();'>"); $(".hdnCaptcha").val(Code); }
            $(function () {
                captchaCode(); $('.sampleForm').submit(function () {
                    var captchaVal = $("#code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });

            function validateForm(){
                var flag = true;
                
                var captcha = $(".txtCaptcha").val();
                var hdnCaptcha = $(".hdnCaptcha").val();
                $(".captchaError").val("");
                //alert(captcha);
                if(hdnCaptcha != captcha){
                    flag = false;
                    $(".captchaError").html("* Please Enter Valid Captcha");
                }

                return flag;
            }
            $(".requestform .form-control").on("blur .form-control focus", function() {
            if (this.value) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
           
        });
    </script>
    <script>
        // Wait until the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Get all the links in the navigation
            var links = document.querySelectorAll('.slinks a');
            
            // Iterate through each link
            links.forEach(function(link) {
                // Check if the link's href matches the current page URL
                if (link.href === window.location.href) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });

        // Optional: You can still allow the active class change on click if you want
        function makeActive(element) {
            var links = document.querySelectorAll('.slinks a');
            links.forEach(function(link) {
                link.classList.remove('active');
            });
            element.classList.add('active');
        }

    </script>
</body>
</html>