<meta charset="utf-8">
<title><?php echo isset($meta_title) && $meta_title!='' ? $meta_title : 'PMR'; ?></title>
<meta name="description" content="<?php echo isset($meta_description) && $meta_description!='' ? $meta_description : ''; ?>">
<?php if(isset($meta_keword) && $meta_keword!='' ){ ?><meta name="keywords" content="<?php echo isset($meta_keword) && $meta_keword!='' ? $meta_keword : ''; ?>"><?php } ?>

<script type="application/ld+json">
    {
                              "@context": "https://schema.org",
                              "@type": "WebPage",
                              "name": "<?php echo $report_detail[0]['rep_keyword']; ?> - Persistence Market Research",
                              "description": "<?php echo $meta_description?>",
                              "keywords": "<?php echo $meta_keword?>",
                              "url":"<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp",
                              "publisher":{
                                        "@type":"Organization",
                                        "name":"Persistence Market Research",
                                        "url":"<?php echo WEBSITE_URL; ?>",
                                        "logo":{
                                        "@type":"ImageObject",
                                        "contentUrl":"<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg"
                                            }
                                }
}
    </script>
    <script type="application/ld+json">

      {"@context": "http://schema.org/",
        "@type": "Product",
        "name": "<?php echo $report_detail[0]['rep_keyword']; ?> - Persistence Market Research",
        "image": "https://www.persistencemarketresearch.com/themes/image/pmr-logo.webp",
        "description": "Persistence Market Research: The leading publisher of high-growth market research, delivering actionable insights to over 10,000 clients worldwide.",
        "review":{
            "reviewBody":"Top Market Research Companies Worldwide",
            "author":"Persistence Market Research"
        },

        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5",
            "bestRating": "5",
            "reviewCount": "139"
        }
    }
</script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Dataset",
        "name": "<?php echo $report_detail[0]['rep_keyword']; ?> - Persistence Market Research",
        "description": "<?php echo isset($meta_description) && $meta_description!='' ? $meta_description : ''; ?>",
        "url": "<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp",
        "sameAs": "<?php echo WEBSITE_URL; ?>market-research/<?php echo $report_detail[0]['rep_url']; ?>.asp",
        "license": "<?php echo WEBSITE_URL . "privacy-policy.asp"; ?>",
        "keywords": ["<?php echo $meta_keword?>"],
        "temporalCoverage": "2024 - 2034",
        "dateModified": "<?php echo substr($report_detail[0]['update_date'], 0, 10); ?>",
        "isAccessibleForFree": "False",
        "creator": {
            "@type": "Organization",
            "name":"Persistence Market Research",
            "url":"<?php echo WEBSITE_URL; ?>",
            "logo": {
                "@type":"ImageObject",
                "contentUrl":"<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "Sales Team",
                "telephone": "+1 800 269 0314",
                "email": "sales@persistencemarketresearch.com"
            }
        },
        "spatialCoverage": "Worldwide",
        "distribution": [{
                "@type": "DataDownload",
                "contentUrl": "<?php echo WEBSITE_URL . "samples/" . $report_detail[0]['rep_id']; ?>",
                "name": "Sample Report",
                "encodingFormat": "pdf"
            },
            {
                "@type": "DataDownload",
                "requiresSubscription": true,
                "contentUrl": "<?php echo WEBSITE_URL . "checkout/" . $report_detail[0]['rep_id']; ?>",
                "description": "Complete Market Research Report and Data Sheet",
                "name": "Market Research Report",
                "encodingFormat": "csv"
            }
        ]
    }
</script>
     <?php if (isset($faqs) && !empty($faqs)) {

?>
 <script type="application/ld+json"> 
 {
         "@context": "https://schema.org",
         "@type": "FAQPage",
         "mainEntity": [
             <?php for ($i = 0; $i < count($faqs); $i++) { ?> {
                     "@type": "Question",
                     "name": "<?php echo strip_tags($faqs[$i]['question']); ?>",
                     "acceptedAnswer": {
                         "@type": "Answer",
                         "text": "<?php echo strip_tags($faqs[$i]['answer']); ?>"
                     }
                 }
                 <?php if ((count($faqs) - 1) > $i) { ?>, <?php } ?>
             <?php } ?>
         ]
     }
 </script>
<?php } ?>
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
<?php } if(in_array("copyright",$meta)){ ?>
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
<?php } if(in_array("author",$meta)){ ?>
<meta name="author" content="PersistenceMarketResearch,<?php echo WEBSITE_URL; ?>"/>
<?php } if(in_array("document-type",$meta)){ ?>
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
<meta property="og:image" content="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@persistence_mkt">
<meta name="twitter:creator" content="@persistence_mkt">
<meta name="twitter:title" content='<?php echo isset($meta_title) && $meta_title!='' ? $meta_title : 'PMR'; ?>'>
<meta name="twitter:description" content="<?php echo isset($meta_description) && $meta_description!='' ? $meta_description : ''; ?>">
<meta name="twitter:image" content="<?php echo WEBSITE_URL."themes/image/pmr-logo.svg"; ?>">
<?php } ?>
<?php if(isset($amphtml)){ ?>

<link rel="canonical" href="<?php echo WEBSITE_URL.$amphtml; ?>">
<link rel="amphtml" href="<?php echo WEBSITE_URL."amp/".$amphtml; ?>">
<?php }else if(isset($meta) && !in_array("sample",$meta)  && !in_array("noindex",$meta) && !in_array("nofollow",$meta) ){ ?>
<link rel="canonical" href="<?php echo isset($actual_canonical_url) && $actual_canonical_url!='' ? $actual_canonical_url : '' ; ?>">
<?php } ?>
<link rel="icon" href="<?php echo WEBSITE_URL; ?>themes/image/fevicon-pmr.svg">
<link rel="apple-touch-icon" href="<?php echo WEBSITE_URL; ?>themes/image/appleIcon.svg">
<link rel="stylesheet" href="<?php echo WEBSITE_URL; ?>themes/css/bootstrap.min.css">