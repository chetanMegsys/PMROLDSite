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
$route['page_gone'] = 'pages/page_gone';
$route['translate_uri_dashes'] = FALSE;

$route['amp'] = 'home/index_amp';

$route['about-us.asp'] = 'pages/about_us';
$route['amp/about-us.asp'] = 'pages/about_us_amp';
$route['media-citations.asp'] = 'pages/media_citations';
$route['research-methodology.asp'] = 'pages/research_methodology';
$route['help-a-journalist.asp'] = 'pages/help_a_journalist';
$route['solutions-by-clients.asp'] = 'redirection/redirect_on_service';

$route['services.asp'] = 'pages/services';
$route['industry-research.asp'] = 'pages/industry_research';
$route['amp/services.asp'] = 'pages/services_amp';
$route['services/custom-research.asp'] = 'pages/custom_research';
$route['services/consulting-services.asp'] = 'pages/consulting_services';
$route['services/subscription-services.asp'] = 'pages/subscription_services';
$route['services/subscription-services.asp'] = 'pages/subscription_services';
$route['services/full-time-engagement.asp'] = 'pages/full_time_engagement';
$route['services/primary-research-capabilties.asp'] = 'pages/primary_research_capabilties';
$route['services/syndicate-market-research.asp'] = 'pages/syndicate_market_research';
$route['services/commercial-due-diligence.asp'] = 'pages/commercial_due_diligence_research';
$route['services/competitive-intelligence.asp'] = 'pages/competitive_intelligence_research';

$route['client-endorsement-and-engagement.asp'] = 'redirection/redirect_on_service';


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
$route['careers.asp'] = 'redirection/redirect_on_aboutus';

$route['recent-development-in-top-sectors.asp'] = 'redirection/redirect_on_report_listing';

$route['newsroom.asp'] = 'redirection/redirect_on_report_listing';
$route['pmr-in-the-news.asp'] = 'redirection/redirect_on_report_listing';

$route['elastic_search'] = 'search/elastic_search';

$route['market-research-report'] = 'categories/index';
$route['amp/market-research-report'] = 'categories/index_amp';

$route['news'] = 'redirection/redirect_on_report_listing';
$route['news/category/(:any)'] = 'redirection/redirect_on_report_listing';
$route['news/(:num)/(:any)']        = "redirection/redirect_on_report_listing";
$route['news/(:num)']        = "redirection/redirect_on_report_listing";
$route['news/(:num)/(:any)/(:any)'] = 'redirection/redirect_news_on_report_details/$1/$2/$3';


$route['media-releases.asp'] = 'redirection/redirect_on_report_listing';
$route['mediarelease/(:any).asp'] = 'redirection/redirect_media_on_report_details/$1';

$route['mediarelease'] = 'redirection/redirect_on_report_listing';

$route['press-releases'] = 'mediarelease/index';
$route['press-release/(:any).asp'] = 'mediarelease/mediarelease_details/$1';

//$route['articles.asp'] = 'redirection/redirect_on_report_listing';
//$route['article/(:any).asp'] = 'redirection/redirect_articles_on_report_details/$1';
$route['articles.asp'] = 'redirection/redirect_on_report_listing';
$route['article/(:any).asp'] = 'redirection/redirect_articles_on_report_details/$1';

$route['blog'] = 'articles/index';
$route['blog/(:any).asp'] = 'articles/article_details/$1';
$route['amp/blog/(:any).asp'] = 'articles/article_details_amp/$1';

$route['author/(:num).asp'] = 'author/author_details/$1';

$route['market-research.asp'] = 'reports/market_research_list';
$route['market-reports.asp'] = 'reports/published_report_list';
//$route['forthcoming-reports.asp'] = 'reports/upcoming_report_list';
$route['forthcoming-reports.asp'] = 'reports/market_research_upcoming_list';

$route['category/(.*)\.asp'] = 'reports/category_redirect/$1';

$route['market-research-report/(:any).asp'] = 'reports/category_reports/$1';
$route['market-research/(:any).asp'] = 'reports/report_detail/$1';
$route['custom-report/(:any).asp'] = 'reports/report_detail_custom/$1';
$route['amp/market-research/(:any).asp'] = 'reports/report_detail_amp/$1';
$route['market-research/(:any)/toc'] = 'reports/report_toc/$1';
$route['market-research/(:any)/research-methodology'] = 'reports/report_rm/$1';

$route['methodology/(:num)'] = 'sample/index/$1';
$route['ask-an-expert/(:num)'] = 'sample/index/$1';
$route['samples/(:num)'] = 'sample/index/$1';
$route['request-advisory/(:num)'] = 'sample/index/$1';
$route['request-customization/(:num)'] = 'sample/index/$1';
$route['toc/(:num)'] = 'sample/index/$1';
$route['research-methodology/(:num)'] = 'sample/index/$1';
$route['enquiry/(:num)'] = 'sample/index/$1';

$route['thanks/checkout'] = 'checkout/purchase_status';
$route['thanks/(:any)/(:num)'] = 'sample/thankyou/$1/$2';

$route['checkout/(:num)'] = 'checkout/index/$1'; 

$route['validate_promo'] = 'checkout/validate_promo'; 

$route['checkout/paypal/(:num)'] = 'checkout/paypal_checkout/$1';
$route['checkout/paypal/finalOrder22'] = 'checkout/finalOrder22';
$route['checkout/paypal/CapturePaypalOrder22'] = 'checkout/CapturePaypalOrder22';
$route['checkout/paypal/thankyou'] = 'checkout/thankyou/';
 
 
$route['checkout/razorpay/thanks-razorpay'] = 'checkout/razorpaysuccess';
$route['checkout/razorpay/(:num)'] = 'checkout/razorpay_checkout/$1';
$route['checkout/razorpay/razorpaycallback'] = 'checkout/razorpaycallback';
$route['checkout/razorpay/razorpayfailed'] = 'checkout/razorpayfailed';
 
$route['checkout/stripe/thanks-stripe'] = 'checkout/stripesuccess';
$route['checkout/stripe/(:num)'] = 'checkout/stripe_checkout/$1';
$route['checkout/stripe/stripecallback'] = 'checkout/stripecallback';
$route['checkout/stripe/stripefailed'] = 'checkout/stripefailed';
$route['checkout/stripe/stripe_order'] = 'checkout/stripe_order';
$route['checkout/stripe/thankyou'] = 'checkout/thankyou';
$route['checkout/stripe/stripe_status'] = 'checkout/stripe_status';

$route['sitemap.html'] = 'sitemap/html_sitemap';

//Sitemap URL
$route['sitemap.xml'] = 'sitemap/xml_sitemap';
$route['sitemap-published-reports.xml'] = 'sitemap/xml_sitemap_published_reports';
$route['sitemap-upcoming-reports.xml'] = 'sitemap/xml_sitemap_upcoming_reports';
$route['sitemap-pages.xml'] = 'sitemap/xml_sitemap_pages';
$route['sitemap-blogs.xml'] = 'sitemap/sitemap_article';
$route['sitemap-press-releases.xml'] = 'sitemap/sitemap_press_releases';
$route['sitemap-industries.xml'] = 'sitemap/sitemap_industries';
$route['noindex_reports.xml'] = 'sitemap/reports_noindex'; 
//$route['feed/feed.xml'] = 'sitemap/xml_feed'; 

//URL Redirections
$route['category/(:any).asp'] = 'categories/old_url_redirection/$1';
$route['insights-hub.asp'] = 'reports/old_url_redirection/';
$route['page/(:any).asp'] = 'redirection/redirect_page_url/$1';
$route['sample/(:num)'] = 'redirection/sample/$1';
$route['article/(:any)'] = 'redirection/article_details/$1';

$route['feedback/(:num)'] = 'feedback/index/$1';

// API's
$route['apis/exportreports'] = 'apis/export_pmr_reports/';
$route['apis/exportreports/(:any)/(:any)'] = 'apis/export_pmr_reports/$1/$2';