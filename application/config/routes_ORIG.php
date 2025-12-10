<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'home';
$route['geoplugin_activation.html'] = 'home/geoplugin_activation.html';
$route['404_override'] = 'pages/page_not_fount';
$route['translate_uri_dashes'] = FALSE;

$route['amp'] = 'home/index_amp';

$route['about-us.asp'] = 'pages/about_us';
$route['amp/about-us.asp'] = 'pages/about_us_amp';
$route['solutions-by-clients.asp'] = 'pages/solutions_by_clients';
$route['amp/solutions-by-clients.asp'] = 'pages/solutions_by_clients_amp';
$route['services.asp'] = 'pages/services';
$route['amp/services.asp'] = 'pages/services_amp';
$route['client-endorsement-and-engagement.asp'] = 'pages/client_endorsement_and_engagement';
$route['amp/client-endorsement-and-engagement.asp'] = 'pages/client_endorsement_and_engagement_amp';
$route['contact-us.asp'] = 'pages/contact_us';
$route['amp/contact-us.asp'] = 'pages/contact_us_amp';
$route['faq.asp'] = 'pages/faq';
$route['amp/faq.asp'] = 'pages/faq_amp';
$route['disclaimer.asp'] = 'pages/disclaimer';
$route['amp/disclaimer.asp'] = 'pages/disclaimer_amp';
$route['how-to-order.asp'] = 'pages/how_to_order';
$route['amp/how-to-order.asp'] = 'pages/how_to_order_amp';
$route['privacy-policy.asp'] = 'pages/privacy_policy';
$route['amp/privacy-policy.asp'] = 'pages/privacy_policy_amp';
$route['terms-and-conditions.asp'] = 'pages/terms_and_conditions';
$route['amp/terms-and-conditions.asp'] = 'pages/terms_and_conditions_amp';
$route['return-policy.asp'] = 'pages/return_policy';
$route['amp/return-policy.asp'] = 'pages/return_policy_amp';
$route['careers.asp'] = 'pages/careers';
$route['amp/careers.asp'] = 'pages/careers_amp';
$route['recent-development-in-top-sectors.asp'] = 'articles/recent_development_in_top_sectors';

$route['newsroom.asp'] = 'news/newsroom';
$route['pmr-in-the-news.asp'] = 'news/pmr_in_the_news';

$route['elastic_search'] = 'search/elastic_search';

$route['market-research-report'] = 'categories/index';
$route['amp/market-research-report'] = 'categories/index_amp';
$route['news'] = 'news/index';
$route['news/category/(:any)'] = 'news/newsByCategory/$1';
$route['news/(:num)/(:any)']        = "news/newsByYearMonth/$1";
$route['news/(:num)']        = "news/newsByYearMonth/$1";
$route['news/(:num)/(:any)/(:any)'] = 'news/news_detail/$1/$2/$3';
$route['amp/news/(:num)/(:any)/(:any)'] = 'news/news_detail_amp/$1/$2/$3';
$route['media-releases.asp'] = 'mediarelease/index';
$route['mediarelease/(:any).asp'] = 'mediarelease/mediarelease_details/$1';
$route['amp/mediarelease/(:any).asp'] = 'mediarelease/mediarelease_details_amp/$1';
$route['articles.asp'] = 'articles/index';
$route['article/(:any).asp'] = 'articles/article_details/$1';
$route['amp/article/(:any).asp'] = 'articles/article_details_amp/$1';

$route['market-research.asp'] = 'reports/market_research_list';
$route['market-reports.asp'] = 'reports/published_report_list';
$route['forthcoming-reports.asp'] = 'reports/upcoming_report_list';
$route['market-research-report/(:any).asp'] = 'reports/category_reports/$1';
$route['market-research/(:any).asp'] = 'reports/report_detail/$1';
$route['custom-report/(:any).asp'] = 'reports/report_detail_custom/$1';
$route['amp/market-research/(:any).asp'] = 'reports/report_detail_amp/$1';
$route['market-research/(:any)/toc'] = 'reports/report_toc/$1';

$route['methodology/(:num)'] = 'sample/index/$1';
$route['ask-an-expert/(:num)'] = 'sample/index/$1';
$route['samples/(:num)'] = 'sample/index/$1';
$route['request-advisory/(:num)'] = 'sample/index/$1';
$route['request-customization/(:num)'] = 'sample/index/$1';
$route['toc/(:num)'] = 'sample/index/$1';

$route['thanks/checkout'] = 'checkout/purchase_status';
$route['thanks/(:any)/(:num)'] = 'sample/thankyou/$1/$2';

$route['checkout/(:num)'] = 'checkout/cart_table/$1'; 
$route['checkout/finalOrder/(:any)'] = 'checkout/finalOrder/(:any)';
$route['checkout/CapturePaypalOrder2/(:any)'] = 'checkout/CapturePaypalOrder2/(:any)';
$route['checkout/thankyou'] = 'checkout/thankyou/';
 


$route['checkout/razorpaycallback'] = 'checkout/razorpaycallback';
$route['thanks/thanks-razorpay'] = 'checkout/razorpaysuccess';
$route['checkout/razorpayfailed'] = 'checkout/razorpayfailed';
$route['checkout/razorPay/(:num)'] = 'checkout/razorPay/$1';


$route['sitemap.html'] = 'sitemap/html_sitemap';

//Sitemap URL
$route['sitemap.xml'] = 'sitemap/xml_sitemap';
$route['reports-noindex.xml'] = 'sitemap/reports_noindex';
$route['sitemapmain.xml'] = 'sitemap/xml_sitemapmain';
$route['sitemap-reports.xml'] = 'sitemap/xml_sitemap_reports';
$route['sitemap-mediarelease.xml'] = 'sitemap/sitemap_mediarelease';
$route['sitemap-news.xml'] = 'sitemap/sitemap_news'; 
$route['sitemap-article.xml'] = 'sitemap/sitemap_article'; 
$route['feed/feed.xml'] = 'sitemap/xml_feed'; 

//URL Redirections
$route['category/(:any).asp'] = 'categories/old_url_redirection/$1';
$route['insights-hub.asp'] = 'reports/old_url_redirection/';
$route['page/(:any).asp'] = 'redirection/redirect_page_url/$1';
$route['sample/(:num)'] = 'redirection/sample/$1';
$route['article/(:any)'] = 'redirection/article_details/$1';

// API's
$route['apis/exportreports'] = 'apis/export_pmr_reports/';
$route['apis/exportreports/(:any)/(:any)'] = 'apis/export_pmr_reports/$1/$2';