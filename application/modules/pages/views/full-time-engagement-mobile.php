<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("frontend/meta_links"); ?>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static-mobile.css" rel="stylesheet" />
	<?php $this->load->view("frontend/header_mobile"); ?>
    <main role="main">
        <div class="breadCrumbSection">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent p-0 my-0">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo WEBSITE_URL; ?>" class="text-black" title="Persistence Market Report">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item" class="text-black" aria-current="page">
                                    <span>Full-time Engagement</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <h1 class="text-center mb-2 p-title">Full-time Engagement</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 font18 pt-1" >
                        <nav class="slinks">
                            <ul>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/syndicate-market-research.asp">Syndicated Market Research</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/custom-research.asp">Customized Research</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/consulting-services.asp">Consulting Business Advisory</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/full-time-engagement.asp">Full-time Engagement</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/subscription-services.asp">Annual Subcription Services</a>
                                </li>
                                <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/primary-research-capabilties.asp">Primary Research Capabilties</a>
                                </li>
                                 <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/competitive-intelligence.asp">Competitive Intelligence</a>
                                </li>
                                 <li>
                                    <a href="<?php echo WEBSITE_URL; ?>services/commercial-due-diligence.asp">Commercial Due Diligence</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-9 font18" >
                        <p>
                            Persistence Market Research offers dedicated Full-time Engagement services designed to provide clients with continuous, expert support through skilled analysts who become an integral part of your team. Our <strong>FTAEC (Full Time Analyst Engagement and Consultation)</strong> program ensures deep collaboration, enabling our analysts to fully understand your business goals, and challenges. With the ease of access to these teams, our clients can avail full support 24*5, ensuring high turnaround and urgent response during business hours. By opting for the FTAEC program, clients get easy access to customized support, which generally includes consultation through subject matter experts, team leaders, research managers, and data analysts.
                        </p>
                        <p>Prime Benefits of associating with the FTAEC program:</p>
                        <ul>
                            <li>A dedicated team of seasoned professionals to facilitate your needs</li>
                            <li>Access to Analyst hours through on-call support</li>
                            <li>Assured flexibility to customize solutions</li>
                            <li>Assured analyst-client research partnership throughout the year.</li>
                        </ul>
                       <p>
                        By engaging our analysts on a full-time basis, clients benefit from consistent access to market intelligence and ongoing analysis that adapts to evolving business needs. This continuous engagement fosters stronger communication and trust, allowing quicker response times and proactive identification of new opportunities or risks. Our analysts work closely with your internal teams, providing real-time data interpretation and actionable insights that support informed decision-making across all levels of your organization.
                       </p>
                       <p>
                        The full-time engagement approach also enhances efficiency by eliminating delays often associated with project-based research. Analysts embedded in your workflow can anticipate information needs, streamline reporting, and customize research efforts to align precisely with your strategic priorities. This results in more relevant, timely, and impactful market intelligence that directly supports your business growth and competitive positioning.
                       </p>
                        <p>
                            Moreover, our commitment to client engagement means we prioritize transparency, collaboration, and responsiveness. We maintain regular communication channels, including meetings, progress updates, and feedback loops, ensuring that our services evolve in sync with your objectives. 
                            <strong>This partnership approach empowers clients to leverage our expertise as an extension of their team rather than an external vendor.</strong>
                        </p>
                        <p>
                            Persistence Market Research’s Full-time Engagement service delivers unmatched value by combining expert analyst support with seamless client collaboration. This program drives continuous market insight, faster decision-making, and a stronger alignment between research and business strategy, ultimately helping your organization with the true consulting support it requires.
                        </p>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    
    <?php $this->load->view("frontend/footer_mobile"); ?>
    <script>
        // Wait until the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Get all the links in the navigation
            var links = document.querySelectorAll('.slinks a');
            
            // Iterate through each link
            links.forEach(function(link) {
                // Check if the link's href matches the current page URL
                if (link.href === window.location.href) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });

        // Optional: You can still allow the active class change on click if you want
        function makeActive(element) {
            var links = document.querySelectorAll('.slinks a');
            links.forEach(function(link) {
                link.classList.remove('active');
            });
            element.classList.add('active');
        }

    </script>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/static-mobile.css" rel="stylesheet" />
</body>
</html>