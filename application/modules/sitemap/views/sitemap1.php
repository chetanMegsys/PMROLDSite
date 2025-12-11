<!DOCTYPE html>
<html>
<head>

	<?php $this->load->view("partials/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />

    <?php $this->load->view("partials/header"); ?>

    <main role="main">
        <div class="breadCrumb mb-0">
            <div class="container">
                <ol class="list-inline mb-0">
                    <li>
                        <a href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <span>Sitemap</span>
                    </li>
                </ol>
            </div>
        </div>
        <section class="siteMapTable">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="table-responsive">          
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>URL</th>
                                  <th>Last Modified	</th>
                                  <th>Change Frequency</th>
                                  <th>Priority</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
									<td><a target="_blank" href="<?php echo WEBSITE_URL; ?>"><?php echo WEBSITE_URL; ?></a></td>
									<td>2016-08-04T03:56:57+00:00</td>
									<td>daily</td>
									<td>0.64</td>
								</tr>
								<tr>
									<td><a target="_blank" href="<?php echo WEBSITE_URL; ?>market-reports.asp" ><?php echo WEBSITE_URL; ?>market-reports.asp</a></td>
									<td>2016-08-04T03:56:57+00:00</td>
									<td>daily</td>
									<td>0.64</td>
								</tr>

								<tr>
									<td><a target="_blank" href="<?php echo WEBSITE_URL; ?>forthcoming-reports.asp" ><?php echo WEBSITE_URL; ?>forthcoming-reports.asp</a></td>
									<td>2016-08-04T03:56:57+00:00</td>
									<td>daily</td>
									<td>0.64</td>
								</tr>
								
								<tr>
									<td><a target="_blank" href="<?php echo WEBSITE_URL; ?>market-research-report" ><?php echo WEBSITE_URL; ?>market-research-report</a></td>
									<td>2016-08-04T03:56:57+00:00</td>
									<td>daily</td>
									<td>0.64</td>
								</tr>

								<tr>
									<td><a target="_blank" href="<?php echo WEBSITE_URL; ?>about-us.asp" ><?php echo WEBSITE_URL; ?>about-us.asp</a></td>
									<td>2016-08-04T03:56:57+00:00</td>
									<td>daily</td>
									<td>0.64</td>
								</tr>

								<tr>
									<td><a target="_blank" href="<?php echo WEBSITE_URL; ?>solutions-by-clients.asp" ><?php echo WEBSITE_URL; ?>solutions-by-clients.asp</a></td>
									<td>2016-08-04T03:56:57+00:00</td>
									<td>daily</td>
									<td>0.64</td>
								</tr>

								<tr>
									<td><a target="_blank" href="<?php echo WEBSITE_URL; ?>services.asp" ><?php echo WEBSITE_URL; ?>services.asp</a></td>
									<td>2016-08-04T03:56:57+00:00</td>
									<td>daily</td>
									<td>0.64</td>
								</tr>

								<tr>
									<td><a target="_blank" href="<?php echo WEBSITE_URL; ?>client-endorsement-and-engagement.asp" ><?php echo WEBSITE_URL; ?>client-endorsement-and-engagement.asp</a></td>
									<td>2016-08-04T03:56:57+00:00</td>
									<td>daily</td>
									<td>0.64</td>
								</tr>

								<tr>
									<td><a target="_blank" href="<?php echo WEBSITE_URL; ?>newsroom.asp" ><?php echo WEBSITE_URL; ?>newsroom.asp</a></td>
									<td>2016-08-04T03:56:57+00:00</td>
									<td>daily</td>
									<td>0.64</td>
								</tr>

								<tr>
									<td><a target="_blank" href="<?php echo WEBSITE_URL; ?>contact-us.asp" ><?php echo WEBSITE_URL; ?>contact-us.asp</a></td>
									<td>2016-08-04T03:56:57+00:00</td>
									<td>daily</td>
									<td>0.64</td>
								</tr>

								<tr>
									<td><a target="_blank" href="<?php echo WEBSITE_URL; ?>career.asp" ><?php echo WEBSITE_URL; ?>career.asp</a></td>
									<td>2016-08-04T03:56:57+00:00</td>
									<td>daily</td>
									<td>0.64</td>
								</tr>

								<?php
								if(!empty($category)){
									foreach($category as $cat){
										?>
										<tr>
											<td><a target="_blank" href="<?php echo WEBSITE_URL; ?>market-research-report/<?php echo $cat['seo_pagename']; ?>.asp" ><?php echo WEBSITE_URL; ?>market-research-report/<?php echo $cat['seo_pagename']; ?>.asp</a></td>
											<td>2016-08-04T03:56:57+00:00</td>
											<td>daily</td>
											<td>0.64</td>
										</tr>
										<?php
									}
								}
								?>

                              </tbody>
                            </table>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php $this->load->view("partials/footer"); ?>

</body>
</html>