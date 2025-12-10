<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Sitemap extends MY_Controller{
        
        public function __construct(){
            $this->load->model("sitemap_model");
        }

        public function html_sitemap(){

            $data['meta_title'] = 'Sitemap - Navigation | Persistence Market Research (PMR)';
            $data['meta_keyword'] = '';
            $data['meta_description'] = 'This webpage provides the listing of all the vital content on our website. This will help you find desired content piece on Persistence Market Research (PMR) at an ease';

            $data['category'] = $this->sitemap_model->getcategoryList();

            $data['meta'] = array('viewport');

            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("sitemap_mobile",$data);
            }else{
                $this->load->view("sitemap",$data);
            }
        }


        public function xml_sitemap_181224(){
            $sitemap = "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>";
            $sitemap .= "<url><loc>".WEBSITE_URL."</loc><changefreq>daily</changefreq><priority>1.0</priority></url>";
             $result = $this->sitemap_model->getReports();
         
            foreach($result as $value)
            {
                 
                $added_date = $value->update_date != '0000-00-00 00:00:00' ? $value->update_date : $value->added_date;
                $sitemap .= "<url><loc>".WEBSITE_URL."market-research/".$value->rep_url.".asp</loc>
                    <changefreq>daily</changefreq><priority>1.0</priority>
                    </url>";
            }
            
            $sitemap .= "<url><loc>".WEBSITE_URL."market-research.asp</loc><changefreq>daily</changefreq><priority>0.5</priority></url>";
           

            $sitemap .= "<url><loc>".WEBSITE_URL."contact-us.asp</loc><changefreq>daily</changefreq><priority>0.5</priority></url>";
            $sitemap .= "<url><loc>".WEBSITE_URL."about-us.asp</loc><changefreq>daily</changefreq><priority>0.5</priority></url>";
            
         
           
     
            $sitemap .= "<url><loc>".WEBSITE_URL."services.asp</loc><changefreq>daily</changefreq><priority>0.6</priority></url>";
       
            $sitemap .= "<url><loc>".WEBSITE_URL."disclaimer.asp</loc><changefreq>daily</changefreq><priority>0.5</priority></url>";
            $sitemap .= "<url><loc>".WEBSITE_URL."how-to-order.asp</loc><changefreq>daily</changefreq><priority>0.5</priority></url>";
            $sitemap .= "<url><loc>".WEBSITE_URL."privacy-policy.asp</loc><changefreq>daily</changefreq><priority>0.5</priority></url>";
            $sitemap .= "<url><loc>".WEBSITE_URL."terms-and-conditions.asp</loc><changefreq>daily</changefreq><priority>0.5</priority></url>";
            $sitemap .= "<url><loc>".WEBSITE_URL."return-policy.asp</loc><changefreq>daily</changefreq><priority>0.5</priority></url>";
            $sitemap .= "<url><loc>".WEBSITE_URL."faq.asp</loc><changefreq>daily</changefreq><priority>0.5</priority></url>";
            $sitemap .= "<url><loc>".WEBSITE_URL."sitemap.html</loc><changefreq>daily</changefreq><priority>0.5</priority></url>";
            
            $sitemap .= "</urlset>";  
            header( "Content-type: text/xml;charset=UTF-8" );        
            echo $sitemap;
        }

        public function xml_sitemap_published_reports(){

            $result = $this->sitemap_model->getPublishedReports();
            $total_results = count($result);

          //  $sitemap = '<!-- Total links:' . $total_results .' -->';

            $sitemap = "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>";
            
            
            foreach($result as $value)
            {
                 
                $added_date = $value->update_date != '0000-00-00 00:00:00' ? $value->update_date : $value->added_date;

                if ($added_date && strtotime($added_date)) {
                    $formatted_date = date('Y-m-d\TH:i:sP', strtotime($added_date)); // Correct format for Google sitemap
                } else {
                    $formatted_date = date('Y-m-d\TH:i:sP'); // Fallback to the current date/time
                }

                $sitemap .= "<url><loc>".WEBSITE_URL."market-research/".$value->rep_url.".asp</loc><lastmod>".$formatted_date."</lastmod><changefreq>daily</changefreq><priority>0.9</priority></url>";
            }
            
            $sitemap .= "</urlset>";  
            header( "Content-type: text/xml;charset=UTF-8" );        
            echo $sitemap;
        }

        public function xml_sitemap_upcoming_reports(){

            $result = $this->sitemap_model->getUpcomingReports();
            $total_results = count($result);

          //  $sitemap = '<!-- Total links:' . $total_results .' -->';
            $sitemap = "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>";
             
            foreach($result as $value)
            {
                 
                $added_date = $value->update_date != '0000-00-00 00:00:00' ? $value->update_date : $value->added_date;

                if ($added_date && strtotime($added_date)) {
                    $formatted_date = date('Y-m-d\TH:i:sP', strtotime($added_date)); // Correct format for Google sitemap
                } else {
                    $formatted_date = date('Y-m-d\TH:i:sP'); // Fallback to the current date/time
                }
                $sitemap .= "<url><loc>".WEBSITE_URL."market-research/".$value->rep_url.".asp</loc><lastmod>".$formatted_date. "</lastmod><changefreq>daily</changefreq><priority>0.9</priority></url>";
            }
            $sitemap .= "</urlset>";  
            header( "Content-type: text/xml;charset=UTF-8" );        
            echo $sitemap;
        }

        public function xml_sitemap_pages(){
            $sitemap = "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>";
            
            // Static URLs
            $static_urls = [
                WEBSITE_URL . "media-citations.asp",
                WEBSITE_URL . "industry-research.asp",
                WEBSITE_URL . "services/custom-research.asp",
                WEBSITE_URL . "services/consulting-services.asp",
                WEBSITE_URL . "services/subscription-services.asp",
                WEBSITE_URL . "research-methodology.asp",
                WEBSITE_URL . "help-a-journalist.asp",
                WEBSITE_URL . "contact-us.asp", 
                WEBSITE_URL . "about-us.asp", 
                WEBSITE_URL . "services.asp",
                WEBSITE_URL . "disclaimer.asp", 
                WEBSITE_URL . "how-to-order.asp", 
                WEBSITE_URL . "privacy-policy.asp", 
                WEBSITE_URL . "terms-and-conditions.asp", 
                WEBSITE_URL . "return-policy.asp", 
                WEBSITE_URL . "faq.asp", 
                WEBSITE_URL . "sitemap.html"
            ];

              // Home Page
              $sitemap .= "<url>";
              $sitemap .= "<loc>" . WEBSITE_URL . "</loc>";
              $sitemap .= "<lastmod>" . date('Y-m-d') . "</lastmod>"; // Last modified date 
              $sitemap .= "<changefreq>daily</changefreq>";
              $sitemap .= "</url>";
  
              // Market Research Page
              $sitemap .= "<url>";
              $sitemap .= "<loc>" . WEBSITE_URL . "market-research.asp</loc>";
              $sitemap .= "<lastmod>" . date('Y-m-d') . "</lastmod>"; // Last modified date
              $sitemap .= "<changefreq>daily</changefreq>";
              $sitemap .= "</url>";

            foreach ($static_urls as $static_url) {
                $sitemap .= "<url>";
                $sitemap .= "<loc>" . $static_url . "</loc>";
                $sitemap .= "<changefreq>Weekly</changefreq>";
                $sitemap .= "</url>";
            }
            
            $sitemap .= "</urlset>";  
            header( "Content-type: text/xml;charset=UTF-8" );        
            echo $sitemap;
        }

        public function xml_sitemap(){

            $sitemap = "<?xml version='1.0' encoding='UTF-8'?>";
            $sitemap .= "<sitemapindex xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>";

            // Published Report Sitemap
            $sitemap .= "<sitemap>";
            $sitemap .= "<loc>" . WEBSITE_URL . "sitemap-published-reports.xml</loc>";
            $sitemap .= "</sitemap>";

            // Upcoming Report Sitemap
            $sitemap .= "<sitemap>";
            $sitemap .= "<loc>" . WEBSITE_URL . "sitemap-upcoming-reports.xml</loc>";
            $sitemap .= "</sitemap>";

            // Blog Sitemap
            $sitemap .= "<sitemap>";
            $sitemap .= "<loc>" . WEBSITE_URL . "sitemap-blogs.xml</loc>";
            $sitemap .= "</sitemap>";

            // Press Releases Sitemap
            $sitemap .= "<sitemap>";
            $sitemap .= "<loc>" . WEBSITE_URL . "sitemap-press-releases.xml</loc>";
            $sitemap .= "</sitemap>";

            // Page Sitemap
            $sitemap .= "<sitemap>";
            $sitemap .= "<loc>" . WEBSITE_URL . "sitemap-pages.xml</loc>";
            $sitemap .= "</sitemap>";

            
           
        
            // Close the index sitemap XML
            $sitemap .= "</sitemapindex>"; 
            header( "Content-type: text/xml;charset=UTF-8" );        
            echo $sitemap;
        }

        public function xml_sitemap_backwisecode() {
            // Define the batch size for reports
            $batch_size = 1000;
        
            // Start the XML for the index sitemap (sitemap.xml)
            $index_sitemap = "<?xml version='1.0' encoding='UTF-8'?>";
            $index_sitemap .= "<sitemapindex xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>";
        
            // Get all reports from the database
            $result = $this->sitemap_model->getReports();
            $total_reports = count($result);
        
            // Static URLs that always appear in the sitemap (but will only be added to the index sitemap)
            $static_urls = [
                WEBSITE_URL . "media-citations.asp",
                WEBSITE_URL . "industry-research.asp",
                WEBSITE_URL . "services/custom-research.asp",
                WEBSITE_URL . "services/consulting-services.asp",
                WEBSITE_URL . "services/subscription-services.asp",
                WEBSITE_URL . "research-methodology.asp",
                WEBSITE_URL . "help-a-journalist.asp",
                WEBSITE_URL . "contact-us.asp", 
                WEBSITE_URL . "about-us.asp", 
                WEBSITE_URL . "services.asp",
                WEBSITE_URL . "disclaimer.asp", 
                WEBSITE_URL . "how-to-order.asp", 
                WEBSITE_URL . "privacy-policy.asp", 
                WEBSITE_URL . "terms-and-conditions.asp", 
                WEBSITE_URL . "return-policy.asp", 
                WEBSITE_URL . "faq.asp", 
                WEBSITE_URL . "sitemap.html"
            ];
            // Home Page
            $index_sitemap .= "<sitemap>";
            $index_sitemap .= "<loc>" . WEBSITE_URL . "</loc>";
            $index_sitemap .= "<lastmod>" . date('Y-m-d') . "</lastmod>"; // Last modified date for static URLs
            $index_sitemap .= "<changefreq>daily</changefreq>";
            $index_sitemap .= "</sitemap>";

            // Market Research Page
            $index_sitemap .= "<sitemap>";
            $index_sitemap .= "<loc>" . WEBSITE_URL . "market-research.asp</loc>";
            $index_sitemap .= "<lastmod>" . date('Y-m-d') . "</lastmod>"; // Last modified date for static URLs
            $index_sitemap .= "<changefreq>daily</changefreq>";
            $index_sitemap .= "</sitemap>";
        
            // Process each batch of reports
            $num_batches = ceil($total_reports / $batch_size);
        
            for ($batch_num = 1; $batch_num <= $num_batches; $batch_num++) {
                $report_data = [];
        
                // Collect URLs for the current batch of reports
                for ($i = ($batch_num - 1) * $batch_size; $i < min($batch_num * $batch_size, $total_reports); $i++) {
                    $value = $result[$i];
                    $added_date = $value->update_date != '0000-00-00 00:00:00' ? $value->update_date : $value->added_date;
                    // Build URL for the report
                    $url = WEBSITE_URL . "market-research/" . $value->rep_url . ".asp";
                    $report_data[] = [
                        'added_date' => $added_date,
                        'url' => $url,
                    ];
                    
                }
        
                // Generate the sitemap for this batch (sitemap-1.xml, sitemap-2.xml, etc.)
                $this->generate_sitemap_batch($report_data, $batch_num);
                
                // Add the sitemap file reference to the index sitemap
                $index_sitemap .= "<sitemap>";
                $index_sitemap .= "<loc>" . WEBSITE_URL . "sitemap-" . $batch_num . ".xml</loc>";
                $index_sitemap .= "<lastmod>" . date('Y-m-d') . "</lastmod>"; // Last modified date
                $index_sitemap .= "</sitemap>";
            }
        
            // Add static URLs only to the index sitemap (not to the individual batch files)
            foreach ($static_urls as $static_url) {
                $index_sitemap .= "<sitemap>";
                $index_sitemap .= "<loc>" . $static_url . "</loc>";
                $index_sitemap .= "<lastmod>" . date('Y-m-d') . "</lastmod>"; // Last modified date for static URLs
                $index_sitemap .= "<changefreq>Weekly</changefreq>";
                $index_sitemap .= "</sitemap>";
            }
        
            // Close the index sitemap XML
            $index_sitemap .= "</sitemapindex>";
            
             // Write the index sitemap to a file
            $index_sitemap_file = 'sitemap.xml';

            // Write the index sitemap to a file
            if (file_put_contents($index_sitemap_file, $index_sitemap)) {
               // echo "Index sitemap generated successfully!";
            } else {
               // echo "Error writing sitemap.xml!";
            }
        
            // Ping Google and Bing to notify them about the updated sitemap
            $this->ping_search_engines();
        }
        
        public function generate_sitemap_batch($report_data, $batch_num) {
            // Start the XML for the batch sitemap
            $sitemap = "<?xml version='1.0' encoding='UTF-8'?>";
            $sitemap .= "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>";
            
            // Add report URLs (with higher priority)
            foreach ($report_data as $rdata) {
               // var_dump($rdata); exit();
                $sitemap .= "<url><loc>" . $rdata['url'] . "</loc><lastmod>".$rdata['added_date']."</lastmod><changefreq>daily</changefreq><priority>1.0</priority></url>";
            }
        
            // Close the sitemap XML
            $sitemap .= "</urlset>";
        
            // Write the batch sitemap to a file (e.g., sitemap-1.xml, sitemap-2.xml, etc.)
            $sitemap_filename = "sitemap-" . $batch_num . ".xml";
            if (file_put_contents($sitemap_filename, $sitemap)) {
                echo "Batch sitemap $sitemap_filename generated successfully!";
            } else {
                echo "Error writing batch sitemap $sitemap_filename!";
            }
        }
        
        public function ping_search_engines() {
            // Ping Google to notify it about the new sitemap
            $google_url = "http://www.google.com/webmasters/tools/ping?sitemap=" . urlencode(WEBSITE_URL . '/sitemap.xml');
            file_get_contents($google_url);  // Or use cURL for more control
        
            // Ping Bing to notify it about the new sitemap
            $bing_url = "http://www.bing.com/webmaster/ping.aspx?siteMap=" . urlencode(WEBSITE_URL . '/sitemap.xml');
            file_get_contents($bing_url);    // Or use cURL for more control
        }


        public function xml_sitemap234324(){
            $date = date('Y-m-d');
            $last_report_date = $this->sitemap_model->getLatestReportDate();

            $sitemap = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
                    <url>
                        <loc>' . WEBSITE_URL . 'sitemapmain.xml</loc>
                        <lastmod>' . date('Y-m-d', strtotime('-3 day', strtotime($date))) . 'T11:11:11+00:00</lastmod>
                    </url>
                    <url>
                        <loc>' . WEBSITE_URL . 'sitemap-reports.xml</loc>
                        <lastmod>' . date('Y-m-d',strtotime($last_report_date[0]['added_date'])) . 'T11:11:11+00:00</lastmod>
                    </url>
                    <url>
                        <loc>' . WEBSITE_URL . 'sitemap-mediarelease.xml</loc>
                        <lastmod>' . date('Y-m-d', strtotime('-1 day', strtotime($date))) . 'T11:11:11+00:00</lastmod>
                    </url>
                   
                    
                ';

            $sitemap.= "</urlset>";
            header("Content-type: text/xml;charset=UTF-8");
            echo $sitemap;

        }

        

        public function xml_sitemap_reports1(){
            $sitemap = "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>";

            $result = $this->sitemap_model->getReports();
            foreach($result as $value)
            {
                //M means upcoming
               /* if($value->rep_type == "M")
                {
                     $added_date = $value->update_date != '0000-00-00 00:00:00' ? $value->update_date : $value->added_date;
                     if(strtotime($added_date) > strtotime(date('Y-m-d')))
                     {
                         $added_date =  date('Y-m-d')."T11:11:11+00:00";
                     }
                }
                else{
                     $added_date = $value->update_date != '0000-00-00 00:00:00' ? $value->update_date : $value->added_date;
                }*/
                $added_date = $value->update_date != '0000-00-00 00:00:00' ? $value->update_date : $value->added_date;
                $sitemap .= "<url><loc>".WEBSITE_URL."market-research/".$value->rep_url.".asp</loc>
                    <lastmod>" . date('Y-m-d',strtotime($added_date)) . "T11:11:11+00:00</lastmod><priority>0.9</priority>
                    </url>";
            }
            $sitemap .= "</urlset>";  
            header( "Content-type: text/xml;charset=UTF-8" );        
            echo $sitemap;
        }

        public function reports_noindex(){
            $sitemap = "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>";

            $result = $this->sitemap_model->getNoindexReports();
            foreach($result as $value)
            {
                $added_date = $value->update_date != '0000-00-00 00:00:00' ? $value->update_date : $value->added_date;
                $sitemap .= "<url><loc>".WEBSITE_URL."market-research/".$value->rep_url.".asp</loc>
                    <lastmod>" . date('Y-m-d',strtotime($added_date)) . "T11:11:11+00:00</lastmod><priority>0.9</priority>
                    </url>";
            }
            $sitemap .= "</urlset>";  
            header( "Content-type: text/xml;charset=UTF-8" );        
            echo $sitemap;
        }

        public function sitemap_mediarelease(){
            $sitemap = "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>";
            $result = $this->sitemap_model->getMediaRelease();
            foreach($result as $value)
            {
				 $modify_date = $value->modify_date; //$value->modify_date != '0000-00-00 00:00:00' ? $value->modify_date : date('Y-m-d');
                $sitemap .= "<url><loc>".WEBSITE_URL."mediarelease/".$value->url.".asp</loc>  <lastmod>" . date('Y-m-d',strtotime($modify_date)) . "T11:11:11+00:00</lastmod><priority>0.8</priority></url>";
            }
            $sitemap .= "</urlset>";  
            header( "Content-type: text/xml;charset=UTF-8" );        
            echo $sitemap;
        }

        public function sitemap_news(){
            $sitemap = "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>";

            $allnews = $this->sitemap_model->getNews();
            if(!empty($allnews)){
                foreach($allnews as $news){
                    $sitemap .= "<url><loc>".strtolower(WEBSITE_URL."news/".date("Y/F",strtotime($news->publish_date))."/".$news->news_url)."</loc><changefreq>daily</changefreq><priority>0.8</priority></url>";
                }
            }

            $sitemap .= "</urlset>";  
            header( "Content-type: text/xml;charset=UTF-8" );        
            echo $sitemap; 
        }

        public function sitemap_article(){
            $sitemap = "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>";

            $articles = $this->sitemap_model->getArticles();
            if(!empty($articles)){
                $i=0;
                foreach($articles as $article){
					 $modify_date = $article->modify_date != '0000-00-00 00:00:00' ? $article->modify_date : date('Y-m-d');

                     if ($modify_date && strtotime($modify_date)) {
                        $formatted_date = date('Y-m-d\TH:i:sP', strtotime($modify_date)); // Correct format for Google sitemap
                    } else {
                        $formatted_date = date('Y-m-d\TH:i:sP'); // Fallback to the current date/time
                    }
                     if($i<20) {
                    $sitemap .= "<url><loc>".strtolower(WEBSITE_URL."blog/".$article->url).".asp</loc> <changefreq>daily</changefreq><priority>0.8</priority></url>";
                    $i = $i +1;
                     } else {
                        $sitemap .= "<url><loc>".strtolower(WEBSITE_URL."blog/".$article->url).".asp</loc> <lastmod>" . $formatted_date . "</lastmod><priority>0.8</priority></url>";
                     }
                }
            }

            $sitemap .= "</urlset>";  
            header( "Content-type: text/xml;charset=UTF-8" );        
            echo $sitemap;
        }
        public function sitemap_press_releases(){
            $sitemap = "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>";

            $articles = $this->sitemap_model->getMediaRelease();
            if(!empty($articles)){
                $i=0;
                foreach($articles as $article){
					 $modify_date = $article->modify_date != '0000-00-00 00:00:00' ? $article->modify_date : date('Y-m-d');

                     if ($modify_date && strtotime($modify_date)) {
                        $formatted_date = date('Y-m-d\TH:i:sP', strtotime($modify_date)); // Correct format for Google sitemap
                    } else {
                        $formatted_date = date('Y-m-d\TH:i:sP'); // Fallback to the current date/time
                    }
                     if($i<20) {
                    $sitemap .= "<url><loc>".strtolower(WEBSITE_URL."press-release/".$article->url).".asp</loc> <changefreq>daily</changefreq><priority>0.8</priority></url>";
                    $i = $i +1;
                     } else {
                        $sitemap .= "<url><loc>".strtolower(WEBSITE_URL."press-release/".$article->url).".asp</loc> <lastmod>" . $formatted_date . "</lastmod><priority>0.8</priority></url>";
                     }
                }
            }

            $sitemap .= "</urlset>";  
            header( "Content-type: text/xml;charset=UTF-8" );        
            echo $sitemap;
        }

        public function xml_feed(){
            $feed = '<?xml version="1.0" encoding="UTF-8"?><rss version="2.0"><channel>';

            $feed .= "<title>Persistence Market Research - Where 'Persistent Intelligence' governs Market Research</title>
                        <link>".WEBSITE_URL."</link>
                        <description>Persistence Market Research XML Feed</description>
                        <language>en-us</language>
                        <copyright>Copyright Persistence Market Research</copyright>
                        <pubDate>".date("m-d-Y")." 5:17:37 AM GMT </pubDate>
                        <lastBuildDate>".date("m-d-Y")." 5:17:37 AM GMT</lastBuildDate>";

            $feed .= "<item>
                          <title>Persistence Market Research - Where 'Persistent Intelligence' governs Market Research</title>
                          <link>".WEBSITE_URL."</link>
                          <description>Persistence market Research (PMR) comes across as an incomparable provider of market intelligence from the other side of the fence. In other words, PMR, with all its pragmatism, perseverance, and prudence, brings the nitty-gritties of market research for the clients, to the service of clients, and abides by the objective of guiding clients in profitable approach.</description>
                          <pubDate>".date("m-d-Y")." 5:17:37 GMT</pubDate>
                    </item>";

            $result = $this->sitemap_model->getFeedReports();

            if(!empty($result)){
                foreach($result as $report){
                    $title = $report->meta_title!='' ? $report->meta_title : $report->rep_name;
                    $feed .= "<item>
                                <title>".preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $title)."</title>
                                <link>".WEBSITE_URL."market-research/".$report->rep_url.".asp</link>
                                <pubDate>".date("m-d-Y",strtotime($report->update_date))." GMT</pubDate>
                            </item>";
                }
            }

            $feed .= "</channel></rss>";

            header( "Content-type: text/xml;charset=UTF-8" ); 
            echo $feed;
        }
    }
?>