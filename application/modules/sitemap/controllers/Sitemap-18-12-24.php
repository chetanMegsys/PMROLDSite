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


        public function xml_sitemap(){
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

        

        public function xml_sitemap_reports(){
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
                     if($i<20) {
                    $sitemap .= "<url><loc>".strtolower(WEBSITE_URL."blog/".$article->url).".asp</loc> <changefreq>daily</changefreq><priority>0.8</priority></url>";
                    $i = $i +1;
                     } else {
                        $sitemap .= "<url><loc>".strtolower(WEBSITE_URL."blog/".$article->url).".asp</loc> <lastmod>" . date('Y-m-d',strtotime($modify_date)) . "T11:11:11+00:00</lastmod><priority>0.8</priority></url>";
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