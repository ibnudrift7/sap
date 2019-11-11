<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Products</a></li> 
                    <!-- <li class="breadcrumb-item active" aria-current="page"><a href="#">Packaging</a></li> -->
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
$products = [
    1 => [
        'images' => 'product2.jpg',
        'title' => 'Preforms',
        'subtitle' => 'We’re always ahead on innovation and always promoting creativity all in the purpose of giving successful approach on our customers’ end, to win their market.',
    ],
    [
        'images' => 'product2.jpg',
        'title' => 'Bootles',
        'subtitle' => 'Through the latest technology and design we aim to be a resourceful partner that can accommodate the latest trend and moreover to pioneer the style.',        
    ],
    [
        'images' => 'product2.jpg',
        'title' => 'Closures',
        'subtitle' => 'We believe well crafted and flawless products not just elevate our group, but giving a strong impact to the very end of our consumer chain.',        
    ],
    [
        'images' => 'product2.jpg',
        'title' => 'Drinking Cups',
        'subtitle' => 'We’re always ahead on innovation and always promoting creativity all in the purpose of giving successful approach on our customers’ end, to win their market.',
    ],
    [
        'images' => 'product2.jpg',
        'title' => 'Lids',
        'subtitle' => 'Through the latest technology and design we aim to be a resourceful partner that can accommodate the latest trend and moreover to pioneer the style.',   
    ],
    [
        'images' => 'product2.jpg',
        'title' => 'Containers',
        'subtitle' => 'We believe well crafted and flawless products not just elevate our group, but giving a strong impact to the very end of our consumer chain.',        
    ]
];
?>

<section class="product-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
      <div class="box-konten-kiri">
        <h5>Products</h5>
        <?php echo $this->renderPartial('//layouts/_left_menu_products', array()); ?>
        
      </div>
      </div>
      <div class="col-md-45">
        <h3>Packaging</h3>
        <div class="row feature-data">
          <div class="col-md-60">
            <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>product1.jpg" alt=""> 
            <p>Suryasukses packaging products are world class and have been certified by bsi ISO 9001 - FSSC 22000. Our facilities ranging from injection and blow molding to thermoforming, ready to cater to all our customer’s need with exceptional quality that exceeds expectations. Suryasukses will bring out the best innovative results to bring greate achievement for our customers .</p>
          </div>
        </div>
        <div class="row default-data">
        <?php foreach($products as $key => $value): ?>
            <div class="col-md-20">
                <div class="box-content">
                    <div class="image">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/productrange')); ?>"><img class="img img-fluid w-100"src="<?php echo $this->assetBaseurl; ?><?php echo $value['images'] ?>" alt="">
                        </a></div>
                    <div class="title">
                        <p><?php echo $value['title']?></p>
                    </div>
                    <div class="subtitle">
                        <p><?php echo $value['subtitle']?></p>
                    </div>
                    <div class="klik">
						<?php if($key==1){ ?>
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/productrange')); ?>"><p>Learn More</p></a>
						<?php } ?>
						<?php if($key>1){?>
							<a href="#"><p>Learn More</p></a>
						<?php } ?>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
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
