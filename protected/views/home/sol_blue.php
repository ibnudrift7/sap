<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Solution</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Suryasukses Studio</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-15">
          <div class="block-back-link text-right">
            <a href="#">Back</a>
          </div>
        </div>
      </div>
      <div class="py-2"></div>
    </div>
</section>

<?php
$solblue = [
	1 => [
        'images' => 'solblue1.jpg'
	    ],
	    [
		    'images' => 'solblue2.jpg'
      ],
      [
        'images' => 'solblue3.jpg'
      ],
      [
        'images' => 'solblue4.jpg'
      ],
      [
        'images' => 'solblue5.jpg'
      ],
      [
        'images' => 'solblue6.jpg'
      ]
  ];
?>

<section class="sol_blue-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
      <div class="box-konten-kiri">
        <h5>Solutions</h5>
        <ol>
          <li class="active"><a href="<?php echo CHtml::normalizeUrl(array('/home/sol_blue')); ?>">Suryasukses Studio</a></li>
          <li><a href="<?php echo CHtml::normalizeUrl(array('/home/sol_capabilities')); ?>">Capabilities</a></li>
        </ol>
      </div>
      </div>
      <div class="col-md-45">
        <h4>Your partner in design</h4>
        <h3>Suryasukses Studio</h3>
        <div class="row">
          <div class="col-md-60">
            <div class="pb-4">
              <img src="<?php echo $this->assetBaseurl.'sbl-sap.jpg' ?>" alt="" class="img img-fluid">
            </div>

            <div class="contents_text">
              <p>Whether you’re looking for a specific cap or or designing a revolutionary bottle/cup shape, our teams will work together to develop a product your consumers are sure to enjoy, guaranteed by our many years of experience and well-established networks around the world.</p>
              
              <p>Our decoration options includes:</p>
              <ul>
                  <li>Emboss cap</li>
                  <li>Emboss bottle</li>
                  <li>Print logo on Houseware products</li>
              </ul>
                
                <p>Contact us and discuss your project with us now. <br>
                Email your inquiry at <a href="mailto:cs@suryasukses.com">cs@suryasukses.com</a></p>
                
                <div class="whatsapp">
                  <h5>Whatsapp <a target="_blank" href="http://wa.me/6285777303030"><img src="<?php echo $this->assetBaseurl; ?>WA-Logo-copy-2.png" alt=""> +62 857 7730 3030</a></h5>
                </div>
              </div>

          </div>
          <?php /*
          <div class="col-md-30">
            <div class="row no-gutters">
            <?php foreach($solblue as $key => $value): ?>
              <div class="col-md-30 col-30">
                <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?><?php echo $value['images'] ?>" alt="">  
              </div>
              <?php endforeach  ?>
            </div>
          </div>*/ ?>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="home-sec-3 py-5 my-auto d-none">
    <div class="prelative container">
        <div class="row py-5">
            <div class="col-md-60">
                <div class="py-3"></div>
                <div class="box-content ">
                    <div class="our-corporation">
                    </div>
                    <div class="py-3"></div>
                </div>
            </div>
            <div class="col-md-60">
                <div class="box-content inners_listcompany">
                    <ul class="list-inline text-center justify-content-center">
                        <li class="list-inline-item">
                            <img src="<?php echo $this->assetBaseurl; ?>small_logo_companys_1.png" alt="" class="img img-fluid">
                        </li>
                        <li class="list-inline-item">
                            <img src="<?php echo $this->assetBaseurl; ?>small_logo_companys_2.png" alt="" class="img img-fluid">
                        </li>
                        <li class="list-inline-item">
                            <img src="<?php echo $this->assetBaseurl; ?>small_logo_companys_3.png" alt="" class="img img-fluid">
                        </li>
                    </ul>
                </div>
                <div class="py-3"></div>
            </div>

        </div>
    </div>
</section>

<style type="text/css">
  section.sol_blue-sec-1 p{
    max-width: inherit;
  }
</style>