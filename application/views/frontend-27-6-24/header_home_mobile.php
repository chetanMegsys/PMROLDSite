<?php //$this->load->view("partials/check_logged_in"); ?>   

  <body>    
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P89XNK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php if(!isset($_COOKIE['privacyPolicyCookie'])) { ?>
  <script>

   function acceptPolicy() {
      document.cookie = "privacyPolicyCookie=accept; path=/; max-age=" + 60 * 60 * 24 * 365 * 20;
      location.reload(true);

   }
    function declinePolicy() {
      document.cookie = "privacyPolicyCookie=decline; path=/; max-age=" + 60 * 60 * 24 * 2;
      location.reload(true);
    }
  </script>
<!-- End Google Tag Manager (noscript) -->
  
            <div class="cookiesHeader">
                <div class="cookiesInfo">
                    <span>
                        <small>This site uses cookies.</small>
                    </span>
                    <span>
                        <a class="" href="<?php echo WEBSITE_URL; ?>privacy-policy.asp" target="_blank" title="Privacy Policy">
                            <u>Privacy Policy</u>
                        </a>
                    </span>
                    <span>
                        <button class="btn btnPrimary mx-2" onclick="acceptPolicy();" name="I Agree" title="I Agree">I Agree</button>
                    </span>
                </div>
                    <span class="closeCookies">
                        <button type="button" class="close" onclick="declinePolicy();" name="Close Button" title="Close Button">
                            <span aria-hidden="true">×</span>
                        </button>
                    </span>
            </div>
            <?php } ?>
  <header class="header">
            <div class="container p-0">
                <nav class="navbar navbar-light">
                    <a class="navbar-brand p-0" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research Company">
                        <img class="img-fluid" width="120" height="32" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg" alt="Persistence Market Research Company" title="Persistence Market Research Company">
                    </a>
                    <div>
                        
                        <button class="navbar-toggler border-0 rounded-0" id="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <div class="menulines" id="toggle_menu">
                                <span class="top-line menu-line"></span>
                                <span class="middle-line menu-line"></span>
                                <span class="bottom-line menu-line"></span>
                            </div>
                        </button>
                    </div>
                </nav>
                <div class="position-relative">
                    <div class="position-absolute collapse w-100" id="navbarToggleExternalContent" style="z-index: 3;">
                        <div class="px-4 py-3" style="background:#ffff">
                            <div class="row">
                                <div class="col-12">
                                     <p><a class="font16 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>market-research.asp" title="Market Research">Market Research</a></p>
                                     <p><a class="font16 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>about-us.asp" titile="About">About Company</a></p>
                                    <p><a class="font16 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>services.asp" title="Services">Services</a></p>
                                    
                                    <p><a class="font16 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact">Contact</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


 
 