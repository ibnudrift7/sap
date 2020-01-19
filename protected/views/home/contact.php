<section class="inside-cover" style="background-image: url('<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['contact_hero_image']; ?>');">
  <div class="text">
    <h4><?php echo $this->setting['contact_hero_title'] ?></h4>
    <h3><?php echo $this->setting['contact_hero_subtitle'] ?></h3>
  </div>
</section>



<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Contact Us</a></li>
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


<section class="contact-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
        <div class="box-konten-kiri">
          <h5>Contact Us</h5>
        </div>
      </div>
      <div class="col-md-45">
        <div class="content-top">
          <?php echo $this->setting['contact_content'] ?>
          <!-- <h3>We’re here to help you</h3>
          <p>We provide a variety of resources to assist our customers and partners in configuring, designing, enhancing and upgrading products. Customers will receive support services and product consultancy support, technical asisstance and product sampling.</p> -->

          <div class="py-2"></div>
          <p>Please contact our help-line at these numbers</p>
          <div class="row">
            <?php for ($i=1; $i < 3; $i++) { ?>
            <div class="col-md-30">
              <div class="inner-content">
                <h3><?php echo $this->setting['contact_address_titles_'. $i] ?></h3>
                <h4><?php echo $this->setting['contact_address_phone_'. $i] ?></h4>
                <p><?php echo nl2br($this->setting['contact_address_cont_'. $i]) ?></p>
                <a target="_blank" href="<?php echo $this->setting['contact_address_maps_link_'. $i] ?>">Click here to view on Google Map <i class="fa fa-map-marker"></i></a>
              </div>
            </div>
            <?php } ?>
            <!-- <div class="col-md-30">
              <div class="inner-content">
                <h3>SURYASUKSES GROUP JAKARTA</h3>
                <h4>021 386 1333</h4>
                <p>Jl. Cideng Timur No. 70E dan F </p>
                <p>Jakarta Pusat - Indonesia</p>
                <a target="_blank" href="https://goo.gl/maps/RmAtJontTNyMtMuZ6">Click here to view on Google Map <i class="fa fa-map-marker"></i></a>
              </div>
            </div> -->
          </div>
          <div class="email pt-4">
                <p>Email your inquiry at <a href="mailto:cs@suryasukses.com">cs@suryasukses.com</a></p>
              </div>
              <div class="whatsapp pb-5 mb-3">
                <h5>Whatsapp <a target="_blank" href="http://wa.me/6285777303030"><img src="<?php echo $this->assetBaseurl; ?>WA-Logo-copy-2.png" alt=""> +62 857 7730 3030</a></h5>
              </div>
          </div>


          <!-- <div class="image-bottom">
            <div class="row no-gutters">
              <div class="col-md-60">
                <img src="<?php echo $this->assetBaseurl; ?>Layer-34.jpg" alt="">
              </div>
            </div>
          </div> -->
          <div class="content-bottom">
            <h5>Member of Suryasukses Group</h5>
            <div class="content-inner-bottom">
              <?php 
              $nx_list_address = Address::model()->findAll();
              ?>
              <div class="row">
                <?php foreach ($nx_list_address as $key => $value): ?>
                <div class="col-md-30">
                  <h3><?php echo $value->nama ?></h3>
                  <h4><?php echo $value->subtitle ?></h4>
                  <p><?php echo $value->address_1 ?></p>
                  <p><?php echo $value->address_2 ?></p>
                  <p>Tel. <?php echo $value->telp ?></p>
                  <p>Fax. <?php echo $value->fax ?></p>
                </div>
                <?php endforeach ?>
                <!-- <div class="col-md-30">
                  <h3>PT Suryasukses Mekar Makmur</h3>
                  <h4>Nonwoven Spunbond</h4>
                  <p>Jl. Raya Sedati 97 Ds. Wedi</p>
                  <p>Gedangan - Sidoarjo</p>
                  <p>Tel. +62 31 8011 888</p>
                  <p>Fax. +62 31 502 7624, 503 8934</p>
                </div>
                <div class="col-md-30">
                  <h3>PT Suryasukses Adi Perkasa</h3>
                  <h4>Thermoforming PP Cup & HDPE Cap</h4>
                  <p>Jl. Selayar Blok B3-1</p>
                  <p>Kawasan Industri MM 2100, Cikarang Barat, Bekasi</p>
                  <p>Jawa Barat - Indonesia</p>
                  <p>Tel. +62 21 8998 3777 / 8998 3999</p>
                  <p>Fax. +62 21 8998 4222</p>
                </div>
                <div class="col-md-30">
                  <h3>PT Multiplast Indo Makmur</h3>
                  <h4>Plastic Houseware</h4>
                  <p>Dusun Winong, Desa Winong</p>
                  <p>Kec Gempol - Pasuruan</p>
                  <p>Tel. +62 34 3656 329 (hunting)</p>
                </div>
                <div class="col-md-30">
                  <h3>PT. Suryasukses Inti Makmur</h3>
                  <h4>UPVC Roofing</h4>
                  <p>Jl. Raya Surabaya - Malang KM 40.8 Desa Kepulungan,</p>
                  <p>Kec Gempol - Pasuruan</p>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<style>
  a{
    text-decoration: none;
    color: #6a6a6a;
  }
  a:hover{
    color: #6a6a6a;
  }
</style>

<script type="text/javascript">
  $(window).load(function(){
    
    if( $(window).width() > 800 ){
      var xheight_cont =  $('section.contact-sec-1 .row .col-md-45, section.contact-sec-1 .row .col-md-45').height();
      $('section.contact-sec-1 .row .box-konten-kiri, section.contact-sec-1 .row .box-konten-kiri').css('height', xheight_cont+'px');
    } 

  });
</script>