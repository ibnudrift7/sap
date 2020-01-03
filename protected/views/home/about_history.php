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
        <h4>About Us</h4>
        <h3>Who We Are</h3>
		  <img src="<?php echo $this->assetBaseurl; ?>_OPS6362.jpg" alt="" class="img img-fluid pb-5">
		  <div class="row">
          <div class="col-md-30">
            <p>At Suryasukses, we take pride in our heritage and the company we’ve become today. Throughout our history, it has been the dedication of our team members that has allowed us to grow into a leading plastic manufacturing company.</p>
            <p>Our history is rich in product innovation, customer focus, and strategic growth. With roots as a small, hometown company based in Surabaya, Indonesia, Suryasukses Group has come a long way since it was established in 1985 under the name Multindo Plastics. Starting with few injection machines, and now we have over 10,000 international and local customers</p>
            <p>From houseware manufacturer we diversify our business to rigid plastic packaging, starting from thermoforming cups to printing, then preform, bottles, and closures, serving home industries to well established food and beverage companies. We further expand our market with nonwoven products to cater hygiene, agriculture, and industrial markets. Lastly, with deep knowledge of breakthrough materials and backed with professionals with decades of experience, Amari Upvc Roofing will surely satisfies the market with strong, consistent, unique and competitive products.</p>
            <p>We take great pride in the company we have developed and the products and services we offer. Our ability to support our customers at every stage of the product development process—including expertise in consumer insights, ideation and design, manufacturing and research and development—is what has allowed us to become a leader in the industry.</p>
          </div>
          <div class="col-md-30">
            <div class="row no-gutters">
            <?php foreach($solblue as $key => $value): ?>
              <div class="col-md-30 col-30">
                <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?><?php echo $value['images'] ?>" alt="">  
              </div>
              <?php endforeach  ?>
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
                            <h3>SAP Corporate Profile Video</h3>
                        </div>
                        <div class="subtitle">
                            <p>Sharing our passion, realizing your ideas and visions.</p>
                        </div>
                        <div class="blocks_btn text-center pt-1">
                            <?php echo $str_alink ?><img src="<?php echo $this->assetBaseurl; ?>btn-playsvideo.png" alt="" class="img img-fluid"></a>
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
