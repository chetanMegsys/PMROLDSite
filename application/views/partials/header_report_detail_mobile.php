<link href="<?php echo WEBSITE_URL; ?>assets/css/theme-report-details-mobile.css" rel="stylesheet" />
<?php //$this->load->view("partials/check_logged_in"); ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P89XNK');</script>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P89XNK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header class="headerBar">
      <?php if(!isset($_COOKIE['privacyPolicyCookie'])) { ?>
      <div class="cookiesHeader">
          <div class="cookiesInfo">
              <span>
                  <small>This site uses cookies</small>
              </span>
              <span>
                  <a class="mx-xl-3 mx-2" href="<?php echo WEBSITE_URL; ?>privacy-policy.asp" target="_blank" title="Privacy Policy">
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
          </button></span>
      </div>
      <?php
      }
      ?>
      <div id="search">
        <div class="container">
          <button type="button" class="close" name="close" title="Close">×</button>
          <form class="form-inline" action="<?php echo WEBSITE_URL; ?>search">
            <input type="search" id="s" name="query" value="" placeholder="Search Report Keyword" autocomplete="off" required maxlength="255"/>
            <button type="submit" class="btn btn-primary" >
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
              </svg>
            </button>
          </form>
        </div>
        <div class="suggestionsBox" id="suggestionsBox">
            <div class="col-12">
                <div id="suggestionsList">
                </div>
            </div>
        </div>
      </div>
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed bg-white" title="Menu">
            <span class="menuIcon" onclick="openNav()">&#9776;</span>
            </button>
            <a class="navbar-brand" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
            <img class="img-responsive" style="padding:10px;" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg" width="160" height="52"  alt="Persistence Market Research" title="Persistence Market Research" />
            </a>
            <a href="#search" class="serachIcon">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"></path>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"></path>
              </svg>
            </a>
          </div>
        </div>
      </nav>
      <div id="mySidenav" class="sidenav">
        <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading">
              <a class="collapsed" href="<?php echo WEBSITE_URL; ?>" title="Home">
              Home
              </a>
            </div>
          </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <a  href="<?php echo WEBSITE_URL; ?>market-research.asp" title="Market Research">
                    Market Research
                </a>
            </div>
          </div>

          <div class="panel panel-default">
              <div class="panel-heading">
                  <a href="<?php echo WEBSITE_URL; ?>services.asp" title="Services">
                      Services
                  </a>
              </div>
          </div>
          
          <div class="panel panel-default">
              <div class="panel-heading">
                  <a href="<?php echo WEBSITE_URL; ?>about-us.asp" title="About PMR">
                      About
                  </a>
              </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <a href="#" title="Contact">
              Contact
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>