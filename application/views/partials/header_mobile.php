<?php //$this->load->view("partials/check_logged_in"); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P89XNK');</script>

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
    <div class="container nav-container p-0">
        <nav class="navbar navbar-light">
            <a class="navbar-brand p-0" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research Company">
                <img class="img-fluid" width="120" height="39" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg" alt="Persistence Market Research Company" title="Persistence Market Research Company">
            </a>
            <a href="#"  class="text-black search-btn toggle_search align-text-top mr-3" title="Search"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2155A4" class="bi bi-search mt-1" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                    </svg>
                </a>
            <div>
            <button id="pmr-toggleSidebar" class="btn btn-primary pmr-toggle-btn">☰</button>
            <div id="pmr-sidebar" class="hidden">
                <div class="d-flex justify-content-between align-items-center p-2">
                        <img class="img-fluid" width="120" height="39" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg" alt="Persistence Market Research Company" title="Persistence Market Research Company">
                </div>
                <ul>
                    <li>
                        <a href="<?php echo ROOT_URL; ?>market-research.asp" class="pmr-submenu-toggle" title="Market Research">Market Research ▾</a>
                        <ul class="pmr-submenu">
                            <li><a href="<?php echo ROOT_URL; ?>market-research-report/consumer-goods.asp">Consumer Goods</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>market-research-report/food-and-beverages.asp">Food & Beverages</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>market-research-report/automotive.asp">Automotive & Transportation</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>market-research-report/healthcare.asp">Healthcare</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>market-research-report/it-and-telecommunications.asp">IT & Telecommunication</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>market-research-report/semiconductor-electronics.asp">Semiconductor Electronics</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>market-research-report/industrial-automation.asp">Industrial Automation</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>market-research-report/chemicals-and-materials.asp">Chemicals & Materials</a></li>
                            <li><a href="<?php  echo ROOT_URL; ?>market-research-report/energy.asp">Energy & Utilities</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>market-research-report/packaging.asp">Packaging</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="pmr-submenu-toggle" title="Services">Services ▾</a>
                        <ul class="pmr-submenu">
                            <li><a href="<?php echo ROOT_URL; ?>market-research.asp">Industry Research Reports</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>services/syndicate-market-research.asp">Syndicated Market Research</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>services/custom-research.asp">Customized Research Services</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>services/consulting-services.asp">Consulting Business Advisory</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>services/full-time-engagement.asp">Full-time Engagement</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>services/subscription-services.asp">Annual Subcription Servicess</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>services/primary-research-capabilties.asp">Primary Research Capabilties</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="pmr-submenu-toggle" title="Media">Media ▾</a>
                        <ul class="pmr-submenu">
                            <li><a href="<?php echo ROOT_URL; ?>press-releases" title="Press Release">Press Release</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>blog" title="Blog">Blog</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>media-citations.asp" title="Media Citation">Media Citation</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>help-a-journalist.asp" title="Help a Journalist ">Help a Journalist </a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo ROOT_URL; ?>about-us.asp" title="About Us">About Us</a></li>
                    <li><a href="<?php echo ROOT_URL; ?>contact-us.asp" title="Contact Us">Contact Us</a></li>
                </ul>
                </div>
            </div>
        </nav>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2155A4" class="bi bi-search mt-1" viewBox="0 0 16 16">
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
<script>
    const pmrToggleBtn = document.getElementById('pmr-toggleSidebar');
    const pmrSidebar = document.getElementById('pmr-sidebar');

    // Toggle sidebar and change button icon
    pmrToggleBtn.addEventListener('click', function () {
        pmrSidebar.classList.toggle('hidden');
    // pmrContent.classList.toggle('full');
        this.textContent = pmrSidebar.classList.contains('hidden') ? '☰' : '×';
    });

    // Submenu toggle
    document.querySelectorAll('.pmr-submenu-toggle').forEach(function (el) {
        el.addEventListener('click', function (e) {
        e.preventDefault();
        const submenu = this.nextElementSibling;
        submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        });
    });
</script>