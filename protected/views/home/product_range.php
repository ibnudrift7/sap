<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item"><a href="#">Packaging</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Preforms</a></li>
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
        'title' => 'Bottle Preforms 1',
        'subtitle' => 'Standard single wall jars are available from 1.5oz to 34oz, with finishes ranging from 48mm to 120mm. Heavy Wall jars include 2oz, 3oz, and 6oz sizes, all with 70mm finishes. We also offer light weight expanded jars that uniquely provide a flush silhouette with the closure in a single wall design. These are available in six sizes, from 3oz to 16oz.',
    ],
    [
        'images' => 'product2.jpg',
        'title' => 'Bottle Preforms 2',
        'subtitle' => 'Standard single wall jars are available from 1.5oz to 34oz, with finishes ranging from 48mm to 120mm. Heavy Wall jars include 2oz, 3oz, and 6oz sizes, all with 70mm finishes. We also offer light weight expanded jars that uniquely provide a flush silhouette with the closure in a single wall design. These are available in six sizes, from 3oz to 16oz.',        
    ],
    [
        'images' => 'product2.jpg',
        'title' => 'Bottle Preforms 3',
        'subtitle' => 'Standard single wall jars are available from 1.5oz to 34oz, with finishes ranging from 48mm to 120mm. Heavy Wall jars include 2oz, 3oz, and 6oz sizes, all with 70mm finishes. We also offer light weight expanded jars that uniquely provide a flush silhouette with the closure in a single wall design. These are available in six sizes, from 3oz to 16oz.',        
    ]
];
?>

<section class="product-range-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
      <div class="box-konten-kiri">
        <h5>Products</h5>
        <ol>Packaging
          <li>Preforms</li>
          <li>Bottles</li>
          <li>Closures</li>
          <li>Drinking Cups</li>
          <li>Lids</li>
          <li>Containers</li>
        </ol>
        <ol>Specialty Nonwoven</ol>
        <ol>Housewares</ol>
        <ol>Roofing</ol>
        <ol>Our Brands</ol>
      </div>
      </div>
      <div class="col-md-45">
        <h3>Blue Bottle Studio</h3>
        <div class="row">
          <div class="col-md-60">
            <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>product1.jpg" alt=""> 
            <p>Suryasukses packaging products are world class and have been certified by bsi ISO 9001 - FSSC 22000. Our facilities ranging from injection and blow molding to thermoforming, ready to cater to all our customer’s need with exceptional quality that exceeds expectations. Suryasukses will bring out the best innovative results to bring greate achievement for our customers .</p>
          </div>
        </div>
        <div class="row">
        <?php foreach($products as $key => $value): ?>
            <div class="col-md-20">
                <div class="box-content-kiri">
                    <div class="image"><img class="img img-fluid w-100"src="<?php echo $this->assetBaseurl; ?><?php echo $value['images'] ?>" alt=""></div>
                </div>
            </div>
            <div class="col-md-40">
                <div class="box-content-kanan">
                    <div class="title">
                        <p><?php echo $value['title']?></p>
                    </div>
                    <div class="subtitle">
                        <p><?php echo $value['subtitle']?></p>
                    </div>
                    <div class="klik">
                        <a href=""><p>Click to enlarge</p></a>
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