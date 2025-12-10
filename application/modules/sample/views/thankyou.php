<!DOCTYPE html>
<html>
<head>
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <?php $this->load->view("frontend/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />
    

	<?php $this->load->view("frontend/header"); ?>

	<style>
		.collapse.show{display:block!important}
	</style>
        <style>.pmr-industry{ background: #fff;padding:0.5rem; border-radius:10px;box-shadow: 4px 3px 5px #ccc;} .aboutListSec p{font-size:18px;} .secHeading{margin:20px 0px; color:#282C7D; font-weight:600;}.p-title{font-size:2rem;font-weight:600;}
        .cat-title{
            font-size: 24px;
            font-weight: 400;
            line-height: 32px;
            color:#000;
        }
        .sec-title{color: #282C7D;}
        .bold600{font-weight:600;}
        .right-boxes{
            border: solid 1px #ccc;
            border-radius: 10px;
        }
        .text-blue-new {
        color: #282C7D;
        font-weight: 600;
        }
        /* Testimonials */
        .tour-desc {
            padding: .5rem;
        }
        .carousel-item{
            min-height:270px;
        }
        .carousel-control-next, .carousel-control-prev{
            width: 5%;
        }
        .carousel-control-prev{
            margin-left: 5px;
        }
        .carousel-control-next{
            margin-right: 5px;
        }
        .carosel-box {
            padding: 0 1rem 0 1rem;
        }
        .carousel-indicators li{
            background-color: rgba(0, 0, 0, 0.4);
        }
        .carousel-indicators .active{
            background-color: rgb(0, 0, 0);
        }
        .carousel-indicators li {
            width: 10px ;
            height: 10px;
        }
    </style>
    <?php $fname = isset($_SESSION['fname'])? $_SESSION['fname']: '';?>
    <main role="main">
        <section class="thankYouSec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 mt-4 text-center">
                        <p style="font-size: 28px;font-weight: bold;text-align: left;margin-left: 10rem;color: #282c7d;">Dear <?php if(''!=$fname){ echo $fname."!";}?><br></p>
                        <img class="img-responsive mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/thank-you.png" width="300" height="157" alt="Thank You" title="Thank You" />
                        <p class="mb-2 mt-4 font18"><em>Thanks for choosing, <strong>Persistence Market Research</strong><br> 
                        Your request is in good hand.<br>Our team is reviewing your request and we will get back to you within one business day.</em></p>
                         <div class="row mt-4">
                            <div class="col-md-6 mt-4">
                            </div>
                            <div class="col-md-3 mt-4 text-right" >
                                <img class="img-responsive mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/raghu-siddavaram.webp" width="80" height="80" alt="Research Head at PMR - Raghu Siddavaram" title="Research Head at PMR - Raghu Siddavaram" />
                            </div>
                             <div class="col-md-3 mt-4 text-left">
                                 Raghu Siddavaram<br>
                                <strong>Research Head.</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php $this->load->view("frontend/footer"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/static.css" rel="stylesheet" />
	 
</body>
</html>