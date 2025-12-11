<body>    
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P89XNK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="header">
    <div class="container nav-container p-0 py-2">
        <nav class="navbar navbar-light">
            <a class="navbar-brand p-0" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research Company">
                <img class="img-fluid" width="120" height="39" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg" alt="Persistence Market Research Company" title="Persistence Market Research Company">
            </a>
            <!-- <a href="#"  class="text-black search-btn toggle_search align-text-top mr-3" title="Search"> 
                    <svg xmlns="https://www.w3.org/2000/svg" width="20" height="20" fill="#2155A4" class="bi bi-search mt-1" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                    </svg>
                </a> -->
            <div>
            <button id="pmr-toggleSidebar" class="btn btn-primary pmr-toggle-btn">☰</button>
            <div id="pmr-sidebar" class="hidden">
                <div class="d-flex justify-content-between align-items-center p-2">
                        <img class="img-fluid" width="120" height="39" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg" alt="Persistence Market Research Company" title="Persistence Market Research Company">
                </div>
                <ul>
                    <li>
                        <a href="<?php echo ROOT_URL; ?>market-research.asp" class="pmr-submenu-toggle" title="Market Research">Market Research Reports ▾</a>
                        <ul class="pmr-submenu">
                            <li><a href="<?php echo ROOT_URL; ?>market-research-report/consumer-goods.asp">Consumer Goods</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>market-research-report/food-and-beverages.asp">Food & Beverages</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>market-research-report/automotive.asp">Automotive & Transportation</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>market-research-report/healthcare.asp">Healthcare</a></li>
                            <li> <a href="<?php echo ROOT_URL; ?>market-research-report/it-and-telecommunications.asp">IT & Telecommunication</a></li>
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
                            <li><a href="<?php echo ROOT_URL; ?>services/syndicate-market-research.asp">Syndicated Market Research</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>services/custom-research.asp">Customized Research Services</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>services/consulting-services.asp">Consulting Business Advisory</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>services/full-time-engagement.asp">Full-time Engagement</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>services/subscription-services.asp">Annual Subcription Servicess</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>services/primary-research-capabilties.asp">Primary Research Capabilties</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>services/competitive-intelligence.asp">Competitive Intelligence</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>services/commercial-due-diligence.asp">Commercial Due Diligence</a></li>
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
                    <li>
                        <a href="#" class="pmr-submenu-toggle" title="About">About ▾</a>
                        <ul class="pmr-submenu">
                            <li><a href="<?php echo ROOT_URL; ?>about-us.asp" title="About Us">About Us</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>about-us.asp#our-company" title="Our Company">Our Company</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>about-us.asp#business-offering" title="Business Offerings">Business Offerings</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>about-us.asp#why-us" title="Why Choose Us">Why Choose Us</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>about-us.asp#research-process" title="Research Approach">Research Approach</a></li>
                            <li><a href="<?php echo ROOT_URL; ?>about-us.asp#our-team" title="Meet Our Team">Meet Our Team</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo ROOT_URL; ?>contact-us.asp" title="Contact Us">Contact Us</a></li>
                </ul>
                </div>
            </div>
        </nav>
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


 
 