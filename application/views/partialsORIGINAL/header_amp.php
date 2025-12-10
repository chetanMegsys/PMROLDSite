<?php //$this->load->view("partials/check_logged_in"); ?>
<header class="headerbar">
    <div class="logo col-50">
        <a href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
            <amp-img class="home-button" src="<?php echo WEBSITE_URL; ?>assets/images/pmr-logo.png" width="104" height="63" alt="Persistence Market Research" title="Persistence Market Research"></amp-img>
        </a>
    </div>
    <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger col-50">☰</div>
</header>
<amp-sidebar id="sidebar1" layout="nodisplay" side="right">
    <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0" class="close-sidebar">✕</div>
    <ul class="sidebar">
        <li><a href="<?php echo WEBSITE_URL; ?>" title="Home">Home</a></li>
        <li><a href="<?php echo WEBSITE_URL; ?>market-research.asp" title="Market Research">Insights-hub</a></li>
        <li><a href="<?php echo WEBSITE_URL; ?>market-research-report" title="Next-Gen Sectors">Next-Gen Sectors</a></li>
        <li><a href="<?php echo WEBSITE_URL; ?>about-us.asp" title="About">About</a></li>
        <li><a href="<?php echo WEBSITE_URL; ?>newsroom.asp" title="Newsroom">Newsroom</a></li>
        <li><a href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact">Contact</a></li>
    </ul>
</amp-sidebar>
<div class="clearfix"></div>