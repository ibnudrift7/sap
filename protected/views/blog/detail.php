<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="#">Blog</a></li> 
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
        <h5>Blog</h5>
        
      </div>
      </div>
      <div class="col-md-45 rights_cont_def">
        <h3><?php echo $dataBlog->description->title; ?></h3>
        <div class="clear clearfix"></div>
        <span class="dates"><small><i class="fa fa-calendar"></i> <?php echo date("d F Y", strtotime($dataBlog->date_input)) ?></small></span>
        <div class="clear clearfix"></div>
        <div class="py-3"></div>
        <div class="row feature-data mb-0 mt-0">
          <div class="col-md-60">
            
            <div class="featured_car_detail pb-2">
                <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl.'../../images/blog/'; ?><?php echo $dataBlog->image ?>" alt="<?php echo $dataBlog->description->title ?>">
            </div>
            <div class="contents_det_blog">
              <?php echo $dataBlog->description->content; ?>

              <?php if ($dataBlog->link): ?>
                <p>
                source: <?php echo $dataBlog->link ?>
                </p>
              <?php endif ?>

              <div class="py-3"></div>
              <p><a href="<?php echo CHtml::normalizeUrl(array('/blog/index')); ?>"><i class="fa fa-chevron-left"></i> Back</a></p>
              <div class="clear"></div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<style type="text/css">
    section.product-sec-1 .box-konten-kiri{
        min-height: 600px;
    }
    section.product-sec-1 h3{
      margin-bottom: 15px;
    }
    small, .small{
      font-size: 90%;
    }
</style>




<?php
/*
<section class="blog-detail">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
        <div class="title-blog">
          <div class="title">
            <p>Kategori blog arsimetris djaja</p>
            <hr>
            <ul>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/blog/index')); ?>">
                Semua
              </a> 
            </li>
            <?php 
            $res_product = array(
              1=>'Tips & Trik',
              2=>'Artikel',
              3=>'Berita',
              );
            ?>
            <?php foreach ($res_product as $key => $value): ?>
            <li>
                <a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'topik'=>$key)); ?>"><?php echo $value ?></a> 
            </li>
            <?php endforeach ?>
            </ul>
          </div>
        </div>
        <div class="py-4"></div>
      </div>  
      <div class="col-md-45">
        <div class="kategori-date">
          <div class="kategori-kanan">
            <p>- <?php echo $res_product[$dataBlog->topik_id] ?> | <span><?php echo date("d F Y", strtotime($dataBlog->date_input)); ?></span></p>
          </div>
        </div>
        <div class="title">
          <h1><?php echo $dataBlog->description->title ?></h1>
        </div>
        <div class="image pt-4">
          <img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/blog/'. $dataBlog->image ?>" alt="">
        </div>
        <div class="content-blog py-4 pb-5">
         <?php echo $dataBlog->description->content ?>
        </div>

        <div class="lainnya">
          <div class="kategori-bottom">
            <p>artikel blog arsimetris djaja lainnya</p>
          </div>
          <hr>
          <div class="blog-box-container pb-5">
            <div class="row">

            <?php foreach ($dataBlogs->getData() as $key => $value): ?>
            <div class="col-md-20">
              <div class="blog-box-container pb-5">
                <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=> $value->id)); ?>">
                  <img class="img w-100" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(342,235, '/images/blog/'. $value->image, array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                </a>
                <div class="kategori-blog pt-4">
                  <p>- <?php echo $res_product[$value->topik_id] ?></p>
                </div>
                <div class="title-blog">
                  <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=> $value->id)); ?>">
                  <h1><?php echo $value->description->title ?></h1>
                  </a>
                </div>
                <div class="baca-selanjutnya pt-2">
                  <p><a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=> $value->id)); ?>">BACA ARTIKEL</a></p>
                </div>
              </div>
            </div>
          <?php endforeach ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
*/ ?>