<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Solution</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Blue Bottle Studio</a></li>
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
          <li>Blue Bottle Studio</li>
          <li>Capabilities</li>
        </ol>
      </div>
      </div>
      <div class="col-md-45">
        <h4>Your partner in design</h4>
        <h3>Blue Bottle Studio</h3>
        <div class="row">
          <div class="col-md-30">
            <p>Whether you’re looking for a specific cap or closure or designing a revolutionary bottle shape. Blue Bottle Studio at Suryasukses will work together with you to develop a product that your consumers will sure to enjoy.
              <br><br>
              For us, this solution will begin with an analysis of the customer portfolio and strategic marketing plan – regardless of whether we are tasked with developing new products or make existing ones better. At work, in interpersonal relations, in life – we are committed to function as a means of ensuring that our ideas really make a better experience.
              <br><br>
              Even though technical and design expertise is essential, intuition plays a decisive role at the application level – even more than brainstorming or product development. It's always best to try things out. Blue Bottle Studio design from Suryasukses will provide digital visualization or prototypes. These can be used to form a stable basis on which the key parameters in design and functionality can be discussed, evaluated and, if necessary, modified with the client for each project.
              <br><br>
              Contact us and discuss your project with us now.</p>
              <div class="email">
                <p>Email your inquiry at cs@suryasukses.com</p>
              </div>
              <div class="whatsapp">
                <h5>Whatsapp <img src="<?php echo $this->assetBaseurl; ?>WA-Logo-copy-2.png" alt=""> +62 857 7730 3030</h5>
              </div>
          </div>
          <div class="col-md-30">
            <div class="row no-gutters">
            <?php foreach($solblue as $key => $value): ?>
              <div class="col-md-30">
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

<section class="home-sec-3 py-5 my-auto">
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