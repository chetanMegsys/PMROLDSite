<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("frontend/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static-mobile.css" rel="stylesheet" />

    <?php $this->load->view("frontend/header_mobile"); ?>
    <main>
        <section class="bg-grey py-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 my-5 text-center">
                        <img class="img-responsive mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/410-img-B.png" alt="Error 410-page Gone" title="Error 410-page Gone" width="288" height="201" />
                        <h3 class="textDanger">
                            Error 410-page Gone
                        </h3>
                        <p>The page you Requested could not be found.</p>
                        <div class="mt-4">
                            <a class="btnStatic" href="<?php echo WEBSITE_URL; ?>">Go To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php $this->load->view("frontend/footer_mobile"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/static-mobile.css" rel="stylesheet" />
</body>
</html>
