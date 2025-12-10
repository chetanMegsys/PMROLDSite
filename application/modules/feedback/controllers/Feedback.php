<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Feedback extends MY_Controller{

        public function __construct(){
            $this->load->model("feedback_model");
        }

        public function index($id){

          //  $csrf_name = $this->security->get_csrf_token_name();
            //$csrf_value = $this->security->get_csrf_hash();
            //if($csrf_value == $_POST['csrf_test_name']){   echo "true"; exit;}
        	if (isset($_POST['useful']) && !$this->is_bot($_SERVER['HTTP_USER_AGENT']) ){ //echo "Wait"; exit();
               $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                unset($_POST['useful']);
                unset($_POST['csrf_test_name']);
              
                $postData = $_POST;
                $postData['user_ip'] = $ip_address = $this->getIpAddress();
                $postData['location'] = $this->getTheContryName(trim($ip_address));
                $postData['page_id'] = $_POST['page_id'];
                $postData['useful'] = 1;
        		
                //$postData['created_date'] = date("Y-m-d H:i:s");
                $rsContact = $this->feedback_model->saveRequest($postData);

            }
        }

    public function getIpAddress()
    {
        $ip = '';
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
         
        if(filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif(filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;   

    }

    public function getTheContryName($ip)
    {
        $country_name  = "Unknown";
        
            $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
            if($ip_data && $ip_data->geoplugin_countryName != null) {
                 $country_name = $ip_data->geoplugin_countryName;
            }
            else{
                    $ch = curl_init('http://ipwho.is/'.$ip);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_HEADER, false);
                    $ipwhois = json_decode(curl_exec($ch), true);
                    curl_close($ch);
                    $output =  $ipwhois['country'];
                     if($output != '' )
                     {
                        $country_name = $output;
                     }
            }
        return $country_name;
    }

    public function is_bot($user_agent) {
 
        $botRegexPattern = "(googlebot\/|Googlebot\-Mobile|Googlebot\-Image|Google favicon|Mediapartners\-Google|bingbot|slurp|java|wget|curl|Commons\-HttpClient|Python\-urllib|libwww|httpunit|nutch|phpcrawl|msnbot|jyxobot|FAST\-WebCrawler|FAST Enterprise Crawler|biglotron|teoma|convera|seekbot|gigablast|exabot|ngbot|ia_archiver|GingerCrawler|webmon |httrack|webcrawler|grub\.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|bibnum\.bnf|findlink|msrbot|panscient|yacybot|AISearchBot|IOI|ips\-agent|tagoobot|MJ12bot|dotbot|woriobot|yanga|buzzbot|mlbot|yandexbot|purebot|Linguee Bot|Voyager|CyberPatrol|voilabot|baiduspider|citeseerxbot|spbot|twengabot|postrank|turnitinbot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|blekkobot|ezooms|dotbot|Mail\.RU_Bot|discobot|heritrix|findthatfile|europarchive\.org|NerdByNature\.Bot|sistrix crawler|ahrefsbot|Aboundex|domaincrawler|wbsearchbot|summify|ccbot|edisterbot|seznambot|ec2linkfinder|gslfbot|aihitbot|intelium_bot|facebookexternalhit|yeti|RetrevoPageAnalyzer|lb\-spider|sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web\-archive\-net\.com\.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|seokicks\-robot|it2media\-domain\-crawler|ip\-web\-crawler\.com|webmeup\-crawler\.com|siteexplorer\.info|elisabot|proximic|changedetection|blexbot|arabot|WeSEE:Search|niki\-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|Lipperhey SEO Service|CC Metadata Scaper|g00g1e\.net|GrapeshotCrawler|urlappendbot|brainobot|fr\-crawler|binlar|SimpleCrawler|Livelapbot|Twitterbot|cXensebot|smtbot|bnf\.fr_bot|A6\-Indexer|ADmantX|Facebot|Twitterbot|OrangeBot|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive\.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|SemrushBot|yoozBot|lipperhey|y!j\-asr|Domain Re\-Animator Bot|AddThis|YisouSpider|BLEXBot|YandexBot|SurdotlyBot|AwarioRssBot|FeedlyBot|Barkrowler|Gluten Free Crawler|Cliqzbot|DataForSeoBot|InfoTigerBot|serpstatbot\.com)";
    
        return preg_match("/{$botRegexPattern}/", $user_agent);
    
    }
    public function data_filter_post($data) {
    $data = strip_tags($data);
    $data = preg_replace('/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '\1', str_replace("?","",$data));
    $data = trim($data);   
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data, ENT_NOQUOTES, 'UTF-8');    
    $data = preg_replace('/[\xF0-\xF7].../s', '',$data);
       
    $data = $this->removeSpecialChar2($data); 
    $data = $this->db->escape($data);   
    $data = $this->security->xss_clean($data);
    $data = str_replace("'", "",$data); 
    return $data;
    }

    public function removeSpecialChar2($str) {
        $res = str_replace( array( '\'', '"',',' , ';', '<', '>', '(', ')',   '%', '^', '#', '$', '`'), '', $str);
        return $res;
    }


    }
?>