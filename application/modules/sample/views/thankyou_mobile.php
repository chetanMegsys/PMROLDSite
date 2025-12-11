<!DOCTYPE html>
<html>
<head>
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
	<?php $this->load->view("frontend/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static-mobile.css" rel="stylesheet" />

    <?php $this->load->view("frontend/header_mobile"); ?>
    <?php $fname = isset($_SESSION['fname'])? $_SESSION['fname']: '';?>
    <main role="main">
        <section class="bgGrey thankYouSec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 text-center">
                        <p style="font-size: 22px;font-weight: bold;text-align: left;color: #282c7d;">Dear <?php if(''!=$fname){ echo $fname."!";}?><br></p>
                        <img class="img-responsive mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/thank-you.png" alt="Thank You" title="Thank You" />
                        <p class="mb-2 mt-4 font18"><em>Thanks for choosing, <strong>Persistence Market Research</strong><br> 
                        Your request is in good hand.<br>Our team is reviewing your request and we will get back to you within one business day.</em></p>
                        <p class="borderBlueCenter" style="font-weight:600;line-height: 22px;">
                        <img class="img-responsive mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/raghu-siddavaram.webp" alt="Research Head at PMR - Raghu Siddavaram" title="Research Head at PMR - Raghu Siddavaram" />
                            <br>
                            Sincerely,<br>
                            Raghu Siddavaram<br>
                            Research Head.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php $this->load->view("frontend/footer_mobile"); ?>
     <link href="<?php echo WEBSITE_URL; ?>assets/css/static.css" rel="stylesheet" />
	  
</body>
</html>