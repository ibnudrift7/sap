<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="#">Market</a></li> 
                    <?php if ( !isset($_GET['parent']) ): ?>
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
        <h5>Market</h5>
        <?php 
        // echo $this->renderPartial('//layouts/_left_menu_market', array('market_resource'=> $market_resource)); 
        echo $this->renderPartial('//layouts/_left_menu_market'); 
        ?>
        
      </div>
      </div>
      <div class="col-md-45 rights_cont_def">
        <h6>Markets</h6>
        <div class="clear clearfix"></div>
        <div class="py-1"></div>
        <div class="clear clearfix"></div>
        <h3><?php echo ucwords($category_one->description->name) ?></h3>
        <div class="row feature-data mb-0 mt-0">
          <div class="col-md-60">
            
            <?php 
            $full_stslide[] = $category_one->image;
            if (isset($category_one->image2) && $category_one->image2 != '') {
                $full_stslide[] = $category_one->image2;
            }
            if (isset($category_one->image3) && $category_one->image3 != '') {
                $full_stslide[] = $category_one->image3;
            }
            if (isset($category_one->image4) && $category_one->image4 != '') {
                $full_stslide[] = $category_one->image4;
            }
            if (isset($category_one->image5) && $category_one->image5 != '') {
                $full_stslide[] = $category_one->image5;
            }
            if (isset($category_one->image6) && $category_one->image6 != '') {
                $full_stslide[] = $category_one->image6;
            }

            ?>


            <div class="featured_car_detail">
                <div id="carouselEx_gallery" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators d-none">
                    <li data-target="#carouselEx_gallery" data-slide-to="0" class="active"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                       <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl.'../../images/category/'; ?><?php echo $category_one->image ?>" alt="<?php echo $_GET['slug'] ?>">
                    </div>
                  </div>
                </div>
            </div>

            <?php // if ($n_model['desc'] != ''): ?>
            <?php // echo $n_model['desc'] ?>
            <?php // endif ?>
          </div>
        </div>

        <?php if (count($n_model) > 0): ?>
        <div class="row default-data">
            <?php foreach ($n_model as $key => $value): ?>
                <div class="col-md-20">
                    <div class="box-content">
                        <div class="image">
                            <img class="img img-fluid w-100"src="<?php echo $this->assetBaseurl.'../../images/brand/'; ?><?php echo $value->image ?>" alt="">
                            <a href="<?php // echo CHtml::normalizeUrl(array('/home/product_range', 'parent'=> $_GET['id'], 'id' => $key, 'slug'=>Slug::Create($value['names']) )); ?>">
                            </a>
                        </div>
                        <div class="title">
                            <p><?php echo ucwords($value->description->title); ?></p>
                        </div>
                        <div class="subtitle">
                            <?php echo $value->description->content ?>
                        </div>
                        <?php if (isset($_GET['slug']) && $_GET['slug'] == 'household'): ?>
                        <div class="klik">
                        <a class="btn btn-danger" target="_blank" href="https://drive.google.com/open?id=1B_IKaDCw8XR_H61tv5OFOOepdSOKKHEn"><p>Download Product Catalogue</p></a>
                        </div>
                        <?php else: ?>
                        <div class="klik">
                        <a class="btn btn-danger" href="<?php echo CHtml::normalizeUrl(array('/home/contact')); ?>"><p>Inquire</p></a>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <?php endif ?>

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
    section.product-sec-1 .box-konten-kiri{
        min-height: 600px;
    }

    section.product-sec-1 .box-content .klik a{
        font-size: 14px;
    }
    section.product-sec-1 .box-content .klik a p{
        color: #ffff;
        font-size: 14px;
    }
</style>