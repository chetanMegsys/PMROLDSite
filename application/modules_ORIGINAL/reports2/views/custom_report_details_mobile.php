<!DOCTYPE html>
<html>
  <head>

  	<?php $this->load->view("partials/meta_links"); ?>
    
    <?php $report_keyword = ucwords(str_replace("-"," ",$report_detail[0]['rep_url'])); ?>

  	<?php $this->load->view("partials/header_report_detail_mobile"); ?>

    <main role="main">
      <section class="reportBanner">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 reportMainInfoBox">
              <div class="reportMainInfo text-white">
                <h1 class="reportTitle my-0"><?php echo $report_keyword; ?></h1>
                <h2 class="reportSubTitle"><?php echo $report_detail[0]['rep_name']; ?></h2>
              </div>
            </div>
            <div class="reportBannerBtns col-md-12 col-lg-12 col-xs-12 mt-4">
              <ul class="list-unstyled pl-0 text-center">
                <li class="reportrBtns">
                  <a href="<?php echo WEBSITE_URL."checkout/".$report_detail[0]['rep_id']; ?>?custom=1" class="btn btnBuyNow" title="<?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?>"><span><?php echo $report_detail[0]['rep_type']=='N' ? 'Purchase Report' : 'Pre Book'; ?></span></a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </section>
      <div class="breadCrumb py-3">
        <div class="container">
          <ol class="list-inline mb-0">
            <li>
              <a href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
              <span>Home</span>
              </a>
            </li>
            <li>
              <a href="<?php echo WEBSITE_URL."market-research.asp"; ?>" title="Market Research" target="_blank">
              <span>Market Research</span>
              </a>
            </li>
            <li>
              <span><?php echo $report_detail[0]['rep_name']; ?></span>
            </li>
          </ol>
        </div>
      </div>
      
    </main>
    
    <?php $this->load->view("partials/footer_mobile"); ?>
   
    <link href="<?php echo WEBSITE_URL; ?>assets/css/repoet-details-mobile.css" rel="stylesheet" />
    <script src="<?php echo WEBSITE_URL; ?>assets/js/jquery.easing.min.js"></script>
    <script>
      var fixmeTop = $('.marketByteBar').offset().top;
      
      $(window).scroll(function () {
      
         var currentScroll = $(window).scrollTop();
         if (currentScroll >= fixmeTop) {
             $('.marketByteBar').addClass('fixedMarketByteBar');
             $('.fixedBottomButton').addClass('active');
         } else {
             $('.marketByteBar').removeClass('fixedMarketByteBar');
             $('.fixedBottomButton').removeClass('active');
         }
      
      });
      (function($) {
         "use strict"; 
         $('.marketByteBar a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
             if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
             var target = $(this.hash);
             target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
             if (target.length) {
                 $('html, body').animate({
                 scrollTop: (target.offset().top - 56)
                 }, 1000, "easeInOutExpo");
                 return false;
             }
             }
         });
         $('.marketByteBar .js-scroll-trigger').click(function() {
             $('.navbar-collapse').collapse('hide');
         });
         $('body').scrollspy({
             target: '#mainNav',
             offset: 56
         });
      
         })(jQuery); 
        $(window).scroll(function() {
            var scrollDistance = $(window).scrollTop();
                $('.reportDescBox').each(function(i) {
                if ($(this).position().top <= scrollDistance) {
                    $('.marketByteBar .js-scroll-trigger.active').removeClass('active');
                    $('.marketByteBar .js-scroll-trigger').eq(i).addClass('active');
                }
            });
        }).scroll();

</script>
  </body>
</html>