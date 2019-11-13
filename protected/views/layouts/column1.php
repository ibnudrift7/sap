<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<?php echo $this->renderPartial('//layouts/_header', array()); ?>

<div class="fcs-wrapper outers_fcs_wrapper prelatife wrapper-slide">
    <div id="banner-home" class="banner-home banner-video">
      <!-- <div class="cover" style="background-image: url('./addons/shared_addons/themes/gunungsewu/img/video/manufacturing.jpg')"></div> -->
      <video width="100%" autoplay="" muted="" loop="" plays-inline="" class="hidden-md-down" poster=""> 
        <source src="<?php echo Yii::app()->baseUrl.'/images/videoplayback.webm'; ?>" type="video/webm"> 
        Your browser doesn't support HTML5 video tag. 
        </video>
    </div>

    <div class="carousel-caption caption-slider-home mx-auto">
      <div class="prelatife container">
        <div class="bxsl_tx_fcs">
          <div class="row no-gutters">
            <div class="col-md-60 mx-auto pt-3 text-left">
              <h3><b>Suryasukses</b> Group,</h3>
              <p>A reputation in the premium plastic related products.</p>
            </div>
            <div class="col-md-60 d-block text-left pt-3">
              <a href="<?php echo CHtml::normalizeUrl(array('/home/abouthistory')); ?>" class="btn btn-info btns_morefcs">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php /*
    <div id="myCarousel_home" class="carousel carousel-fade" data-ride="carousel" data-interval="4500">
        <div class="carousel-inner">
          <div class="carousel-item active home-slider-new">
              <img class="w-100 d-none d-sm-block" src="<?php echo $this->assetBaseurl; ?>slide-1.jpg" alt="">
              <img class="w-100 d-block d-sm-none" src="<?php echo $this->assetBaseurl; ?>slide-1-mob.jpg" alt="">
              <div class="carousel-caption caption-slider-home mx-auto">
                <div class="prelatife container">
                  <div class="bxsl_tx_fcs">
                    <div class="row no-gutters">
                      <div class="col-md-60 mx-auto pt-3 text-left">
                        <h3><b>Suryasukses</b> Group,</h3>
                        <p>A reputation in the premium plastic related products.</p>
                      </div>
                      <div class="col-md-60 d-block text-left pt-3">
                        <a href="#" class="btn btn-info btns_morefcs">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
         </div>
         </div>
         <div class="posn_bottoms_carousel_indicat">
             <div class="prelatife container">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel_home" data-slide-to="0" class="active"></li>
                </ol>
             </div>
         </div>
    </div>
    */ ?>

</div>

<?php echo $content ?>
<script type="text/javascript">
    $(document).ready(function(){
        
        if ($(window).width() >= 768) {
            var $item = $('#myCarousel_home.carousel .carousel-item'); 
            var $wHeight = $(window).height();
            $item.eq(0).addClass('active');
            $item.height($wHeight); 
            $item.addClass('full-screen');

            $('#myCarousel_home.carousel img.d-none.d-sm-block').each(function() {
              var $src = $(this).attr('src');
              var $color = $(this).attr('data-color');
              $(this).parent().css({
                'background-image' : 'url(' + $src + ')',
                'background-color' : $color
              });
              $(this).remove();
            });

            $(window).on('resize', function (){
              $wHeight = $(window).height();
              $item.height($wHeight);
            });

            $('#myCarousel_home.carousel').carousel({
              interval: 4000,
              pause: "false"
            });
        }

    });
</script>
<?php echo $this->renderPartial('//layouts/_footer', array()); ?>
<?php $this->endContent(); ?>
