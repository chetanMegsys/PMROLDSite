<!DOCTYPE html>
<html lang="en">
<head>

	<?php $this->load->view("frontend/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />

    <?php $this->load->view("frontend/header"); ?>
    <style>
    .spmr-icon {
        background: #282c7d;
        padding: 10px;
        border-radius: 50px;
        width: 50px;
        height: 50px;
        fill: #fff;
    }

    .tour-desc {
        padding: 1.8rem;
    }

    .carousel-control-next, .carousel-control-prev {
        width: 5%;
    }

    .carosel-box {
        padding: 0 1rem 0 1rem;
    }

    .carousel-indicators li {
        background-color: rgba(0, 0, 0, 0.4);
    }

    .carousel-indicators .active {
        background-color: rgb(0, 0, 0);
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    }

    .media-citations a {
        color: #2358a8 !important;
    }

    img.media-citation-logo {
        width: 100%;
        padding: 10px;
    }

    .aboutListSec p {
        font-size: 18px;
    }

    .secHeading {
        margin: 20px 0px;
        color: #000000;
        font-weight: 600;
        max-width: 100%;
    }

    .p-title {
        font-size: 2rem;
        font-weight: 600;
        border-bottom: solid 2px #ccc;
        padding-bottom: 20px;
    }

    .pmr-services {
        background: #fff;
        padding: 1rem;
        border-radius: 10px;
        /* box-shadow: 4px 3px 5px #ccc; */
    }
   
    ul.tick-b li {
        list-style: none;
    }

    ul.tick-b li::before {
        position: absolute;
        margin-top: 5px;
        margin-left: -30px;
        content: url('data:image/svg+xml,<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.6094 12.625C24.6094 19.3145 19.1406 24.7344 12.5 24.7344C5.81055 24.7344 0.390625 19.3145 0.390625 12.625C0.390625 5.98438 5.81055 0.515625 12.5 0.515625C19.1406 0.515625 24.6094 5.98438 24.6094 12.625ZM11.084 19.0703L20.0684 10.0859C20.3613 9.79297 20.3613 9.25586 20.0684 8.96289L18.9453 7.88867C18.6523 7.54688 18.1641 7.54688 17.8711 7.88867L10.5469 15.2129L7.08008 11.7949C6.78711 11.4531 6.29883 11.4531 6.00586 11.7949L4.88281 12.8691C4.58984 13.1621 4.58984 13.6992 4.88281 13.9922L9.96094 19.0703C10.2539 19.3633 10.791 19.3633 11.084 19.0703Z" fill="%23282c7d"/></svg>');
        width: 25px;
        height: 25px;
    }
</style>

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
                                    <span>Consulting Business Advisory</span>
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
                        <h1 class=" mb-4 p-title">Consulting Business Advisory</h1>
                        <p>
                            Persistence Market Research stands at the forefront of the consulting business advisory by delivering unparalleled market intelligence and strategic insights that empower organizations to excel in today’s competitive landscape. Our expertise lies in crafting tailored market strategies grounded in deep, data-driven research, enabling businesses to make informed decisions that drive sustainable growth and operational excellence.
                        </p>
                        <p>
                            With a strong focus on market strategy, business advisory, and market intelligence, Persistence Market Research supports consulting corporate clients in navigating complex market environments. We combine advanced analytics with industry expertise to uncover emerging trends, competitive dynamics, and customer behaviors, providing a comprehensive view that fuels strategic planning and execution.
                        </p>
                        <p>
                            Our consulting business advisory services are designed to help clients identify new market opportunities, optimize business models, and refine go-to-market approaches. By leveraging our syndicated and custom research capabilities, we deliver actionable insights that align with your business objectives and enhance your advisory outcomes. Whether it’s market entry, expansion, or transformation, our research-backed strategies ensure your business remains agile and competitive. 
                        </p>
                        <p>
                        Persistence Market Research remains committed to delivering high-value market intelligence. Our research solutions help bridge knowledge gaps, reduce risks, and maximize ROI, making us a trusted partner for companies seeking excellence in consulting and advisory services.
                        </p>
                        <p>
                        Choose Persistence Market Research to harness the power of expert market intelligence and strategic advisory services, transforming data into impactful business strategies that adds more mileage to your business.
                        </p>
                        
                        
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="pmr-services mb-4">
                                    <h2  class="py-2 font18 bold600">Research Quality</h2>
                                    <ul>
                                        <li>Transparent</li>
                                        <li>Ethical</li>
                                        <li>Empirical</li>
                                        <li>Critical</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="pmr-services mb-4">
                                    <h2  class="py-2 font18 bold600">Data Collection</h2>
                                    <ul>
                                        <li>Primary</li>
                                        <li>Secondary</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="pmr-services mb-4">
                                    <h2  class="py-2 bold600 font18">Reporting</h2>
                                    <ul>
                                        <li>Pre and Post-sale Consulting Support (24*5)</li>
                                        <li>Market assessment and evaluation</li>
                                        <li>Developing custom solutions </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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