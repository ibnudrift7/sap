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
            <a href="#">Back</a>
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
        <?php echo $this->renderPartial('//layouts/_left_menu_products', array('product_resource'=> $product_resource)); ?>
        
      </div>
      </div>
      <div class="col-md-45">
        <h3><?php echo ucwords($n_model['name_category']) ?></h3>
        <div class="row feature-data">
          <div class="col-md-60">
            <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>product1.jpg" alt="<?php echo $_GET['slug'] ?>"> 
            <?php if ($n_model['desc'] != ''): ?>
            <?php echo $n_model['desc'] ?>
            <?php endif ?>
          </div>
        </div>

        <?php if ($n_model['lists']): ?>
        <div class="row default-data">
            <?php foreach ($n_model['lists'] as $key => $value): ?>
                <div class="col-md-20">
                    <div class="box-content">
                        <div class="image">
                            <a href="<?php echo CHtml::normalizeUrl(array('/home/product_range', 'parent'=> $_GET['id'], 'id' => $key, 'slug'=>Slug::Create($value['names']) )); ?>">
                                <img class="img img-fluid w-100"src="<?php echo $this->assetBaseurl; ?>product2.jpg" alt="">
                            </a>
                        </div>
                        <div class="title">
                            <p><?php echo ucwords($value['names']); ?></p>
                        </div>
                        <div class="subtitle">
                            <p><?php echo substr(strip_tags($value['info']), 0, 80).'...'; ?></p>
                        </div>
                        <div class="klik">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/product_range', 'parent'=> $_GET['id'], 'id' => $key, 'slug'=>Slug::Create($value['names']) )); ?>"><p>Learn More</p></a>
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
