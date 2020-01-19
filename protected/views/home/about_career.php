<!-- <section class="inside-cover">
  <div class="text">
    <h4>ABOUT US</h4>
    <h3>Career</h3>
  </div>
</section>
 -->

<section class="breadcrumb-det" style="padding-top:145px;">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">About Us</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Career</a></li>
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

<section class="about-location-sec-1 contents_abouts_sec1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
      <div class="box-konten-kiri">
        <h5>About Us</h5>
        <ol>
          <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Our-Mission')); ?>">Our Mission</a></li> -->
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/abouthistory')); ?>">Who We Are</a></li>
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutvalue')); ?>">Our Values</a></li>
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutquality')); ?>">Quality Statement</a></li>
          <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutlocations')); ?>">Locations</a></li> -->
          <li class="active"><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutcareer')); ?>">Career</a></li>
          <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/home/faq')); ?>">FAQ</a></li> -->
        </ol>
      </div>
      </div>
      <div class="col-md-45">
            <div class="content-top cont_career">
                <h3><?php echo $this->setting['career_hero_title'] ?></h3>
                <img src="<?php echo Yii::app()->baseUrl .'/images/static/'. $this->setting['career_hero_cover']; ?>" alt="" class="img img-fluid pb-4 mb-2">

                <?php echo $this->setting['career1_content'] ?>

                <a class="btn btn-primary pl-3 pr-3" target="_blank" href="https://www.jobstreet.co.id/en/companies/749600-surya-sukses">Join Our Team</a>

                <div class="clear clearfix"></div>
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

<style type="text/css">
    section.about-location-sec-1 .box-konten-kiri, 
    section.cerf-sec-1.block_section_faq .box-konten-kiri{
        min-height: 410px;
    }
</style>