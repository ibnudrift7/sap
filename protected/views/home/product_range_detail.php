<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="#">Products</a></li> 
                    <?php if ( !isset($_GET['parent']) ): ?>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#"><?php echo ucwords($_GET['slug']) ?></a></li>
                    <?php else: ?>
                    <li class="breadcrumb-item" aria-current="page"><a href="#"><?php echo ucwords($n_parent->description->name) ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#"><?php echo ucwords($_GET['slug']) ?></a></li>
                    <?php endif ?>
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

<section class="product-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
      <div class="box-konten-kiri">
        <h5>Products</h5>
        <?php echo $this->renderPartial('//layouts/_left_menu_products'); ?>

        <div class="clearfix clear"></div>
      </div>
      </div>
      <div class="col-md-45 rights_cont_def">

        <h6><?php echo ucwords($n_parent->description->name) ?></h6>
        <div class="clear clearfix py-1"></div>
        <h3><?php echo ucwords($n_child->description->name) ?></h3>

        <div class="row feature-data">
          <div class="col-md-60">
            <div class="featured_car_detail">
                <div id="carouselEx_gallery" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselEx_gallery" data-slide-to="0" class="active"></li>
                    <?php if (count($n_child->alternateImage) > 0): ?>
                      <?php foreach ($n_child->alternateImage as $key => $value): ?>
                      <?php $key = $key + 1; ?>
                      <li data-target="#carouselEx_gallery" data-slide-to="<?php echo $key ?>"></li>
                      <?php endforeach ?>
                    <?php endif ?>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl.'../../images/product/'; ?><?php echo $n_child->image ?>" alt="<?php echo $_GET['slug'] ?>"> 
                      </div>
                    <?php if (count($n_child->alternateImage) > 0): ?>
                      <?php foreach ($n_child->alternateImage as $key => $value): ?>
                      <div class="carousel-item">
                        <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl.'../../images/product/'; ?><?php echo $value->image ?>" alt="<?php echo $_GET['slug'] ?>"> 
                      </div>
                      <?php endforeach ?>
                    <?php endif ?>
                  </div>
                </div>
            </div>

            <?php if ($n_child->description->desc != ''): ?>
            <?php echo $n_child->description->desc ?>
            <?php endif ?>
          </div>
        </div>

        <div class="clearfix clear"></div>
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


<style type="text/css">
    section.product-sec-1 p a.btn{
        color: #fff !important;
        font-weight: 400;
    }

    .featured_car_detail .carousel ol.carousel-indicators li{
      cursor: pointer;
    }
</style>