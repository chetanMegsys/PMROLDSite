<meta charset="utf-8">
<title><?php echo isset($meta_title) && $meta_title!='' ? $meta_title : 'PMR'; ?></title>
<meta name="description" content="<?php echo isset($meta_description) && $meta_description!='' ? $meta_description : ''; ?>">
<?php if(in_array("index",$meta)){  ?>
<meta name="robots" content="index, follow">
<?php }?>
<link rel="preload" href="<?php echo ROOT_URL; ?>themes/image/pmr-logo.svg" as="image" type="image/svg+xml">
<link rel="preload" href="<?php echo ROOT_URL; ?>themes/image/pmr-logo.png" as="image" type="image/png">
<?php if(isset($meta_keword) && $meta_keword!='' ){ ?><meta name="keywords" content="<?php echo isset($meta_keword) && $meta_keword!='' ? $meta_keword : ''; ?>"><?php } ?>   
<link rel="preload" href="<?php echo ROOT_URL; ?>themes/fonts/open-sans-v43-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo ROOT_URL; ?>themes/fonts/open-sans-v43-latin-600.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo ROOT_URL; ?>themes/fonts/open-sans-v43-latin-800.woff2" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="<?php echo ROOT_URL; ?>themes/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://www.googletagmanager.com">
<link rel="dns-prefetch" href="//www.google-analytics.com">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php if(isset($meta)){ if(in_array("language",$meta)){ ?>
<meta name="language" content="English" />
<?php } if(in_array("noindex",$meta) && in_array("nofollow",$meta)){ ?>
<meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">
<?php }else if(in_array("noindex",$meta)){ ?>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
<?php }else if(in_array("nofollow",$meta)){ ?>
<meta name="robots" content="noindex">
<?php }else if(in_array("copyright",$meta)){ ?>
<meta name="copyright" content="Persistence Market Research" />
<?php } if(in_array("classification",$meta)){ ?>
<meta name="classification" content="market research report" />
<?php } if(in_array("document-classification",$meta)){ ?>
<meta name="document-classification" content="Market Research Company" />
<?php } if(in_array("distribution",$meta)){ ?>
<meta name="distribution" content="global" />
<?php } if(in_array("coverage",$meta)){ ?>
<meta name="coverage" content="worldwide" />
<?php } if(in_array("rating",$meta)){ ?>
<meta name="rating" content="general" />
<?php } if(in_array("abstract",$meta)){ ?>
<meta name="abstract" content="Market Research Reports, Market Size, Share, Forecast,Industry Analysis " />
<?php } 
  if (isset($get_authors) && !empty($get_authors->author_name)){
    echo '<meta name="author" content="'.$get_authors->author_name.'"/>';
  }else {
    echo '<meta name="author" content="Persistence Market Research"/>';
  }
 if(in_array("document-type",$meta)){ ?>
<meta name="document-type" content="Public" />
<?php } if(in_array("Page-Topic",$meta)){ ?>
<meta name="Page-Topic" content="Market Research Reports" />
<?php } if(in_array("Audience",$meta)){ ?>
<meta name="Audience" content="All Market Reports, Business, Research" />
<?php } if(in_array("robots",$meta) && !in_array("sample",$meta)){ ?>
<meta name="robots" content="NOODP" />
<?php } if(in_array("revisit-after",$meta)){ ?>
<meta name="revisit-after" content="2 days" />
<?php } if(in_array("identifier-url",$meta)){ ?>
<meta name="identifier-url" content="<?php echo WEBSITE_URL; ?>" />
<?php } if(in_array("base_url",$meta)){ ?>
<base href="<?php echo WEBSITE_URL; ?>" />
<?php } if(in_array("X-UA-Compatible",$meta)){ ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> <?php } } if(isset($meta) && !in_array("sample",$meta)){ ?> <meta name="google-site-verification" content="GBIAZYJg2c-7lR0gPI4WaVETjNDGzf-i6J7v9d45zXw" />
<meta name="msvalidate.01" content="9A30DAEE96E2B8053C6C2B04B318BDBD" />
<meta name="naver-site-verification" content="naver0e0f1924efa6800ab2f5021d9027a5be" /><?php } if(isset($meta) && in_array("report_detail",$meta)  && !in_array("noindex",$meta) && !in_array("nofollow",$meta) ){ ?> 
<meta property="og:locale" content="en_US">
<meta property="og:site_name" content="Persistence Market Research">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo isset($actual_canonical_url) && $actual_canonical_url!='' ? $actual_canonical_url :  "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">


<meta property="og:title" content="<?php echo isset($meta_title) && $meta_title!='' ? $meta_title : 'PMR'; ?>">
<meta property="og:description" content="<?php echo isset($meta_description) && $meta_description!='' ? $meta_description : ''; ?>" >
<?php
  $report_image_url = "";
  if (!empty($report_description)) {
    $section_counter = 1;
    foreach ($report_description as $report_desc) {
        $arrString = array('http:');
        $arrReplacement = array('https:');
        $report_description1 =  str_replace("<img", '<img width="620" height="424"  ', stripcslashes(str_replace($arrString, $arrReplacement, $report_desc['description'])));
        preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $report_description1, $url);
        if ($report_image_url == "") {
            $report_image_url = isset($url[1][0]) ? $url[1][0] : "";

            if(!empty($report_image_url)){
              break;
            }
        }
      }
    }
    if(empty($report_image_url)){
       $report_image_url = WEBSITE_URL.'themes/image/pmr-logo.png';
    }
?>
<meta property="og:image" content="<?php echo $report_image_url; ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@persistence_mkt">
<meta name="twitter:creator" content="@persistence_mkt">
<meta name="twitter:title" content="<?php echo isset($meta_title) && $meta_title!='' ? $meta_title : 'PMR'; ?>">
<meta name="twitter:description" content="<?php echo isset($meta_description) && $meta_description!='' ? $meta_description : ''; ?>">
<meta name="twitter:image" content="<?php echo $report_image_url; ?>">
<?php } ?>
<?php if(isset($amphtml)){ ?>

<link rel="canonical" href="<?php echo WEBSITE_URL.$amphtml; ?>">
<link rel="amphtml" href="<?php echo WEBSITE_URL."amp/".$amphtml; ?>">
<?php }else if(isset($meta) && !in_array("sample",$meta)  && !in_array("noindex",$meta) && !in_array("nofollow",$meta) ){ 
    $final_canonical_url = '';
    if (isset($actual_canonical_url) && $actual_canonical_url != '') {
        $final_canonical_url = $actual_canonical_url;
    } else {
        $final_canonical_url = "https://" . $_SERVER['HTTP_HOST'] . strtolower($_SERVER['REQUEST_URI']);
    }
?>
<link rel="canonical" href="<?php echo htmlspecialchars($final_canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
<?php } ?>
<link rel="icon" href="<?php echo WEBSITE_URL; ?>favicon.ico" type="image/x-icon" sizes="16x16">
<script type="application/ld+json">
    {
                "@context": "https://schema.org",
                "@type": "WebPage",
                "name": "<?php echo $report_detail[0]['rep_keyword']; ?> - Persistence Market Research",
                "description": "<?php echo $meta_description?>",
                "keywords": "<?php echo $meta_keword?>",
                "url":"<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp",
                "image": "<?php echo $report_image_url;?>",
                "publisher":{
                        "@type":"Organization",
                        "name":"Persistence Market Research",
                        "url":"<?php echo WEBSITE_URL; ?>",
                        "logo":{
                              "@type":"ImageObject",
                              "url":"<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.png"
                            }
                }
    }
  </script>

     <?php if (isset($faqs) && !empty($faqs)) {
      // Build up the structured array
      $faqEntities = [];
      $readMore  =" <a href='" 
               . WEBSITE_URL 
               . "market-research/" 
               . $report_detail[0]['rep_url'] 
               . ".asp'>Read More</a>";

      foreach ($faqs as $faq) {
          $faqEntities[] = [
              "@type"           => "Question",
              "name"            => strip_tags($faq['question']),
              "acceptedAnswer"  => [
                  "@type" => "Answer",
                  "text"  => str_replace("\r\n", "", strip_tags($faq['answer'])) . $readMore
              ]
          ];
      }

      $faqSchema = [
          "@context"   => "https://schema.org",
          "@type"      => "FAQPage",
          "mainEntity" => $faqEntities
      ];

      // Output it pretty-printed (optional) and unescaped slashes/unicode
      echo '<script type="application/ld+json">' . "\n"
        . json_encode(
              $faqSchema,
              JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
          )
        . "\n" . '</script>';
      ?>

<?php } ?>