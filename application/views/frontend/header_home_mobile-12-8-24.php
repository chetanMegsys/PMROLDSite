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
                <nav class="navbar navbar-expand-lg navbar-light px-4">
                    <a class="navbar-brand p-0" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research Company">
                        <img class="img-fluid" width="160" height="52" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo-m.webp" alt="Persistence Market Research Company" title="Persistence Market Research Company" loading="lazy">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mb-2 mr-3">
                        <li class="nav-item">
                            <a class="nav-link font18" href="<?php echo WEBSITE_URL; ?>">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle font18 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>market-research.asp" role="button" data-toggle="dropdown" aria-expanded="false" title="Market Research">Market Research</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item font18" href="<?php echo WEBSITE_URL; ?>market-research.asp">Industry Research</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item font18" href="<?php echo WEBSITE_URL; ?>services/custom-research.asp">Custom Research Services</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item font18" href="<?php echo WEBSITE_URL; ?>services/consulting-services.asp">Consulting Services</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item font18" href="<?php echo WEBSITE_URL; ?>services/subscription-services.asp">Subscription Services</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle font18 text-black bold500 mt-0" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            About Us
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item font18 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>about-us.asp" title="About Us">About Company</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item font18 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>media-citations.asp" title="Media Citation">Media Citation</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item font18 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>articles.asp" title="Blog">Blog</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item font18 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>research-methodology.asp" title="Blog">Research Methodology</a>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link font18 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact Us">Contact Us</a>
                        </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>


 
 