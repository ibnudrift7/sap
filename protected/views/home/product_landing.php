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
        
      </div>
      </div>
      <div class="col-md-45">
        <h3><?php echo ucwords($category->description->name) ?></h3>
        <div class="row feature-data">
          <div class="col-md-60">
            
            <?php 
            $full_stslide[] = $category->image;
            if (isset($category->image2) && $category->image2 != '') {
                $full_stslide[] = $category->image2;
            }
            if (isset($category->image3) && $category->image3 != '') {
                $full_stslide[] = $category->image3;
            }
            if (isset($category->image4) && $category->image4 != '') {
                $full_stslide[] = $category->image4;
            }
            if (isset($category->image5) && $category->image5 != '') {
                $full_stslide[] = $category->image5;
            }
            if (isset($category->image6) && $category->image6 != '') {
                $full_stslide[] = $category_one->image6;
            }

            ?>

            <div class="featured_car_detail">
                <div id="carouselEx_gallery" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <?php if (count($full_stslide) > 0): ?>
                        <?php foreach ($full_stslide as $key => $value): ?>
                        <li data-target="#carouselEx_gallery" data-slide-to="<?php echo $key ?>" <?php if ($key == 0): ?>class="active"<?php endif ?>></li>
                        <?php endforeach ?>
                    <?php endif; ?>
                  </ol>

                  <div class="carousel-inner">
                    <?php if (count($full_stslide) > 0): ?>
                        <?php foreach ($full_stslide as $key => $value): ?>
                        <div class="carousel-item <?php if ($key == 0): ?>active<?php endif ?>">
                          <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl.'../../images/category/'; ?><?php echo $value ?>" alt="<?php echo $_GET['slug'] ?>"> 
                        </div>
                        <?php endforeach; ?>
                    <?php endif ?>
                  </div>
                </div>
            </div>

            <?php if ($category->description->desc != ''): ?>
            <?php echo $category->description->desc ?>
            <?php endif ?>
          </div>
        </div>

        <?php if (count($n_model) > 0): ?>
        <div class="row default-data">
            <?php foreach ($n_model as $key => $value): ?>
                <div class="col-md-20">
                    <div class="box-content">
                        <div class="image">
                            <a href="<?php echo CHtml::normalizeUrl(array('/home/product_range', 'parent'=> $category->id, 'id' => $value->id, 'slug'=>Slug::Create($value->description->name) )); ?>">
                                <img class="img img-fluid w-100"src="<?php echo $this->assetBaseurl.'../../images/product/'; ?><?php echo $value->image ?>" alt="">
                            </a>
                        </div>
                        <div class="title">
                            <p><?php echo ucwords($value->description->name); ?></p>
                        </div>
                        <div class="subtitle">
                            <p><?php echo substr(strip_tags($value->description->desc), 0, 80).'...'; ?></p>
                        </div>
                        <div class="klik">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/product_range', 'parent'=> $category->id, 'id' => $value->id, 'slug'=>Slug::Create($value->description->name) )); ?>"><p>Learn More</p></a>
                        </div>
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
