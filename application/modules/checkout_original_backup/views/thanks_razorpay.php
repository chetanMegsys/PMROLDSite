<!DOCTYPE html>
<html>
<head>

    <?php $this->load->view("frontend/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />

    <?php $this->load->view("frontend/header"); ?>
<?php
session_destroy(); 
?>
    <main role="main">
        <section class="bgGrey thankYouSec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 text-center">
                        <img class="img-responsive mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/thank-you.png" alt="Thank You" title="Thank You" />
						
                        <p class="mb-2 mt-4"><?php echo $status; ?> Thank you. You’re one step closer to obtaining actionable insight and next-gen expertise from Persistence Market Research.</p>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php $this->load->view("frontend/footer"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/static.css" rel="stylesheet" />
</body>
</html>
