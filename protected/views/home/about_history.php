<section class="inside-cover">
  <div class="text">
    <h4>ABOUT US</h4>
    <h3>Company History</h3>
  </div>
</section>


<section class="breadcrumb-det">
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
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Our-Mission')); ?>">Our Mission</a></li>
          <li class="active"><a href="<?php echo CHtml::normalizeUrl(array('/home/abouthistory')); ?>">Company History</a></li>
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutquality')); ?>">Quality Statement</a></li>
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutlocations')); ?>">Locations</a></li>
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutcareer')); ?>">Career</a></li>
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/faq')); ?>">FAQ</a></li>
        </ol>
      </div>
      </div>
      <div class="col-md-45">
        <h4>How it all began</h4>
        <h3>Company History</h3>
        <div class="row">
          <div class="col-md-30">
            <p>It was all started with a small houseware store on Surabaya at 1975. 25 years later, it has become one of the plastic manufacturing company group to be reckoned.
              <br><br>
              The trust that given to our small business established a reputation that drives our expansion in the plastic manufacturing industry. We are known as a company that’s flexible and reliable, dedicated to manufacture the highest quality products for houseware to food industry. We began producing plastic bottles for mineral water packaging, supplying our customers with the goal of establishing a long term business relationship with each and every customer.
              <br><br>
              Now we are a fully fledged international plastic manufacturing group operating from Surabaya - East Java and Cibitung - Jakarta. We have the ability to create and produce practical to sophisticated solutions and approach on innovative product design to even smallest home industry business until the the major player in the retail business of Food & Beverage, healthcare and so much more.
              <br><br>
              Our group comprise of PT Suryasukses Abadi Prima & PT Suryasukses Adi Perkasa which run the production of Thermoforming PP Cup & HDPE Cap, PT Multiplast Indo Makmur that produces and distributes Plastic Housewares and last but not least PT Suryasukses Mekar Makmur that produces Nonwoven Spunbond. Our combined capacity has made us one of the biggest player in the industry, in the Java island region.
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
                            <a href="#"><img src="<?php echo $this->assetBaseurl; ?>btn-playsvideo.png" alt="" class="img img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
