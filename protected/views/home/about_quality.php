
<section class="breadcrumb-det" style="padding-top:145px;">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">About Us</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Quality Statement</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-15">
          <div class="block-back-link text-right">
            <a href="#" onclick="window.history.back();">Back</a>
          </div>
        </div>
      </div>
      <div class="py-2"></div>
    </div>
</section>


<section class="about-location-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
      <div class="box-konten-kiri">
        <h5>About Us</h5>
        <ol>
          <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Our-Mission')); ?>">Our Mission</a></li> -->
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/abouthistory')); ?>">Who We Are</a></li>
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutvalue')); ?>">Our Values</a></li>
          <li class="active"><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutquality')); ?>">Quality Statement</a></li>
          <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutlocations')); ?>">Locations</a></li> -->
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutcareer')); ?>">Career</a></li>
<!--          <li><a href="--><?php //echo CHtml::normalizeUrl(array('/home/faq')); ?><!--">FAQ</a></li>-->
        </ol>
      </div>
      </div>
      <div class="col-md-45">

        <h4><?php echo $this->setting['quality_hero_title'] ?></h4>
        <h3><?php echo $this->setting['quality_hero_subtitle'] ?></h3>
        <img src="<?php echo Yii::app()->baseUrl .'/images/static/'. $this->setting['quality_hero_cover']; ?>" alt="" class="img img-fluid pb-4 mt-1">

  		  <!-- <p>Quality products and on time delivery are the things that made us different. With hairline precision production and exceptional discipline in time management, Suryasukses Group has managed to be on top when it comes to quality.</p>
        <img class="w-100 py-4" src="<?php echo $this->assetBaseurl; ?>quality.jpg" alt="">
        <p>The Suryasukses Group puts strong emphasis on quality. The best manufacturing practice in Suryasukses Group is centrally coordinated and implemented at each plant to ensure superior quality. The best manufacturing practice is continuously pushed up to lift the quality level further. All Suryasukses Group plants are ISO 9000 certified and following the intense and strict interntional safety standard regulation.</p> -->

        <?php echo $this->setting['quality1_content'] ?>

        <div class="row no-gutters py-4">
          <div class="col-md-30">
            <div class="content">
              <div class="content-inner">
                <div class="title">
                  <p><?php echo $this->setting['quality2_title_t1'] ?></p>
                </div>
                <div class="isi">
                  <p><?php echo $this->setting['quality2_content_t1'] ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-30">
            <img class="w-100" src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['quality2_pictures_t1'] ?>" alt="">
          </div>
        </div>

        <div class="row no-gutters py-4">
          <div class="col-md-30">
            <img class="w-100" src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['quality2_pictures_t2'] ?>" alt="">
          </div>
          <div class="col-md-30">
            <div class="content pl-4">
              <div class="content-inner">
                <div class="title">
                  <p><?php echo $this->setting['quality2_title_t2'] ?></p>
                </div>
                <div class="isi">
                  <p><?php echo $this->setting['quality2_content_t2'] ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hr-garis-about-quality"></div>


        <div class="our-cerf-logo">
          <div class="title-logosss">
            <h3>Our Quality Certfications</h3>
          </div>
          <img src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['quality3_pictures_sertifikat'] ?>" class="img img-fluid" alt="">
        </div>
      </div>

      </div>
    </div>
  </div>
</section>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<?php $str_alink = '<a data-fancybox href="https://www.youtube.com/watch?v=Aj2C4Xp-GMM">'; ?>
<div class="prelative container2">
    <section class="home-sec-2">
            <div class="row">
                <div class="col-md-60">
                    <div class="box-content">
                        <div class="title">
                            <h3><?php echo $this->setting['home4_titles'] ?></h3>
                        </div>
                        <div class="subtitle">
                            <p><?php echo $this->setting['home4_subtitles'] ?></p>
                        </div>
                        <div class="blocks_btn text-center pt-1">
                            <a data-fancybox href="<?php echo $this->setting['home4_links_t5'] ?>"><img src="<?php echo $this->assetBaseurl; ?>btn-playsvideo.png" alt="Video Title link" class="img img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
