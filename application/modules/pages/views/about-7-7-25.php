<!DOCTYPE html>
<html lang="en">
<head>

	<?php $this->load->view("frontend/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />

    <?php $this->load->view("frontend/header"); ?>
    <style></style>
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
                                    <span>About Us</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
            </div>
        </div>
        </div>
        <section class="staticBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 text-white">
                        <h1 class="text-center mb-2 p-title">About Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="aboutListSec pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <h2 class="secHeading text-left">Overview</h2>
                        <p>At <strong>Persistence Market Research</strong> we strive to create research studies that acts as a tool to drive your business strategy and deliver growth. Persistence Market Research is a trade name of Persistence Research & Consultancy Services Ltd a company registered in England & Wales in 2023. Persistence Market Research started as a proprietary firm in 2012. The website was created in 2013 and a formal company registered with registrar of companies in India in the year 2014 by the name of Persistence Market Research Pvt. Ltd.
                        </p>
                        <p>
                        In its initial years it mainly engaged in creating research as a white label research vendor partner and took on assignments from leading market research companies at the time. Since its inception it has completed and delivered over 3600 custom and syndicate market research studies and projects for its clients, at the same time has also been associated with a few leading market research companies and delivered over 2700 projects for their end clients.
                        </p>
                        <p>Our decade-long association with participants across the value chain ensures we have access to hard-to-find information. In a data-first world, finding data is only half the job done, Deriving relevant insights on what it means for your business is key. Early movers have a strategic advantage as they identify the opportunities quickly. Our real-time market intelligence keeps you ahead.</p>
                        <style>
                        .profile-img{ 
                            max-width:100%; width:155px; 
                            /* border-top-right-radius: 10px;
                            border-top-left-radius: 10px; */
                            border-radius:50%;
                        } 
                        .name-title{color:#2358a8;font-weight:600;font-size:20px;} 
                        .p-info-box h3, .p-info-box p{text-align:center;}
                        .p-info-box {
                            /* background: #e3eeff; */
                            padding: 0.5rem 1rem;
                            border-bottom-right-radius: 10px;
                            border-bottom-left-radius: 10px;
                            }
                    </style>
                        <h2 class="secHeading mt-4 mb-4 text-center">Team</h2>
                        <div class="row">
                            <div class="col-md-2">
                              
                              </div>
                            <div class="col-md-4 text-center">
                                <img src="<?php echo WEBSITE_URL; ?>assets/images/utkarsh-koregaonkar.webp" width="100%" alt="Utkarsh koregaonkar photo" title="Utkarsh koregaonkar" class="profile-img">
                                <div class="p-info-box mb-4">
                                    <h3 class="name-title my-2">
                                    Utkarsh Koregaonkar
                                    </h3>
                                    <p> Founder and CEO<br>
                                        Over 24 Years of Market Research <br>and Industry Experience<br>
                                        London, UK
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="<?php echo WEBSITE_URL; ?>assets/images/raghu-siddavaram1.webp" width="100%" alt="Raghu Siddavaram photo" title="Raghu Siddavaram" class="profile-img">
                                <div class="p-info-box mb-4">
                                    <h3 class="name-title my-2">
                                    Raghu Siddavaram
                                    </h3>
                                    <p> Research Head<br>
                                        Over 28 Years Market Research <br>and Industry Experience<br>
                                        Pune and Hyderabad, India
                                    </p>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                              
                            </div>
                        </div>
                
                        <p>
                        We are a balanced pack of researchers, we have an old school approach to market research, while using the modern research tools to help us consistently create the most comprehensive research studies and solutions to suit the business needs of our client partners.
                        </p>
                        <p>
                        Over the period we have had rich experience and learnings while working on some very interesting market research studies and consulting assignments.
                        </p>
                       
                        <h2 class="secHeading mt-4 mb-4 text-center">Clients</h2>
                        <p>
                        Our clients include leading global and top multinational corporations, big 4 consulting firms, investment funds, consultants, investment bankers, business leaders, governments departments, universities, and startups.
                        We take a lot of pride in the fact that most of our sales are from our existing clients.
                        </p>
                        <h2 class="secHeading mt-4 mb-4 text-center">Values</h2>
                        <p>We value our employees, our work ethics, our clients' trust and their privacy, we strive for sustainable growth and betterment of our environment.
                        </p>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php $this->load->view("frontend/footer"); ?>
    
    <link href="<?php echo WEBSITE_URL; ?>assets/css/static.css" rel="stylesheet" />

</body>
</html>