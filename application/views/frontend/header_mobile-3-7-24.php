<?php //$this->load->view("partials/check_logged_in"); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P89XNK');</script>
<!-- End Google Tag Manager -->

</head>
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
                        This site uses cookies.
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

            <div class="container nav-container p-0">
                <nav class="navbar navbar-light">
                    <a class="navbar-brand p-0" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research Company">
                        <img class="img-fluid" width="120" height="32" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg" alt="Persistence Market Research Company" title="Persistence Market Research Company">
                    </a>
                    <div>
                        <a href="#"  class="text-black search-btn toggle_search align-text-top mr-3" title="Search"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0079ae" class="bi bi-search mt-1" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg>
                        </a>
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
                    <div class="position-absolute collapse w-100" id="navbarToggleExternalContent" style="z-index:3;">
                        <div class="px-4 py-3" style="background:#ffff">
                            <div class="row">
                                <div class="col-12">
                                    <p><a class="font16 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>market-research.asp" title="Market Research">Market Research</a></p>
                                    <p><a class="font16 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>about-us.asp" title="About Company">About Company</a></p>
                                    <p><a class="font16 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>services.asp" title="Services">Services</a></p>
                                    
                                    <p><a class="font16 text-black bold500 mt-0" href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact">Contact</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="overlayTwo text-black toggle_search_container top100" id="overlayTwo">
                    <div class="container">
                      <div class="row">
                        <div class="TopSearch">
                          <div class="offset-md-1 col-md-10 ">
                            <div class="row">
                              <div class="position-relative serach-bg col-12">
                                <form class="form-group position-relative" id="topSearchMenu" action="<?php echo WEBSITE_URL; ?>search" method="GET">
                                  <input type="search" name="query" id="s" class="form-control SearchInput" placeholder="Search Report Keywords" autocomplete="off" maxlength="100" required="" minlength="3">
                                  <button type="submit" class="btn position-absolute btnSearch" title="Search">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0079ae" class="bi bi-search mt-1" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                    </svg>
                                  </button>
                                </form>
                            </div>
                  
                            <div class="position-relative col-12">
                                <div id="suggestionsList">
                                
                                </div>
                            </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                </div>
            </div>
        </header>