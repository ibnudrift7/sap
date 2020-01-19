<section class="breadcrumb-det" style="padding-top:145px;">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">About Us</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Company History</a></li>
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

<?php
$solblue = [
	1 => [
        'images' => 'about1.jpg'
	    ],
	    [
		    'images' => 'about2.jpg'
      ],
      [
        'images' => 'about3.jpg'
      ],
      [
        'images' => 'about4.jpg'
      ],
      [
        'images' => 'about5.jpg'
      ],
      [
        'images' => 'about6.jpg'
      ]
  ];
?>

<section class="sol_blue-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
      <div class="box-konten-kiri">
        <h5>About Us</h5>
        <ol>
          <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Our-Mission')); ?>">Our Mission</a></li> -->
          <li class="active"><a href="<?php echo CHtml::normalizeUrl(array('/home/abouthistory')); ?>">Who We Are</a></li>
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutvalue')); ?>">Our Values</a></li>
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutquality')); ?>">Quality Statement</a></li>
          <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutlocations')); ?>">Locations</a></li> -->
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutcareer')); ?>">Career</a></li>
<!--          <li><a href="--><?php //echo CHtml::normalizeUrl(array('/home/faq')); ?><!--">FAQ</a></li>-->
        </ol>
      </div>
      </div>
      <div class="col-md-45">
        <h4><?php echo $this->setting['who_hero_title'] ?></h4>
        <h3><?php echo $this->setting['who_hero_subtitle'] ?></h3>
		    <img src="<?php echo Yii::app()->baseUrl .'/images/static/'. $this->setting['who_hero_cover']; ?>" alt="" class="img img-fluid pb-5">

		  <div class="row">
          <div class="col-md-30">
            <?php echo $this->setting['who1_content']; ?>
          </div>
          <div class="col-md-30">
            <div class="row no-gutters">
            <?php // foreach($solblue as $key => $value): ?>
              <div class="col-md-60">
                <img class="img img-fluid w-100" src="<?php echo Yii::app()->baseUrl .'/images/static/'. $this->setting['who_right_picture']; ?>" alt="">
              </div>
              <?php // endforeach  ?>
            </div>
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

<script type="text/javascript">
  $(window).load(function(){
    
    if( $(window).width() > 800 ){
      var xheight_cont =  $('section.sol_blue-sec-1 .row .col-md-45, section.sol_blue-sec-1 .row .col-md-45').height();
      $('section.sol_blue-sec-1 .row .box-konten-kiri, section.sol_blue-sec-1 .row .box-konten-kiri').css('height', xheight_cont+'px');
    } 
  });
</script>

<style type="text/css">
  section.sol_blue-sec-1 p{
    margin-bottom: 14px;
  }  
</style>
