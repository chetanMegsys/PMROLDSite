<!DOCTYPE html>
<html>
<head>

    <?php $this->load->view("partials/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />

    <?php $this->load->view("partials/header"); ?>

    <main role="main">
        <section class="bgGrey thankYouSec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 text-center">
                        <h3 class="borderBlueCenter">
                            Purchase Status: <?php echo isset($_GET['order_status']) ? $_GET['order_status'] : ''; ?>
                        </h3>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php $this->load->view("partials/footer"); ?>

</body>
</html>