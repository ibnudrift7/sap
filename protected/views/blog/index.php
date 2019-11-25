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
        <div class="clear clearfix"></div>

        <?php if ($dataBlog): ?>
        <div class="row default-data">
            <?php foreach ($dataBlog->getData() as $key => $value): ?>
                <div class="col-md-20">
                    <div class="box-content">
                        <div class="image">
                            <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id' => $value->id )); ?>"><img class="img img-fluid w-100"src="<?php echo $this->assetBaseurl.'../../images/blog/'; ?><?php echo $value->image ?>" alt=""></a>
                        </div>
                        <div class="title">
                            <p><?php echo ucwords($value->description->title); ?></p>
                        </div>
                        <div class="klik">
                        <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id' => $value->id )); ?>"><p>Read More</p></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <?php endif ?>
        <div class="py-4"></div>
        <div class="textaboveheader-landing page">
              <?php 
               $this->widget('CLinkPager', array(
                  'pages' => $dataBlog->getPagination(),
                  'header'=>'',
                  'footer'=>'',
                  'lastPageCssClass' => 'd-none',
                  'firstPageCssClass' => 'd-none',
                  'nextPageCssClass' => 'd-none',
                  'previousPageCssClass' => 'd-none',
                  'itemCount'=> $dataBlog->totalItemCount,
                  'htmlOptions'=>array('class'=>'pagination'),
                  'selectedPageCssClass'=>'active',
              ));
           ?>
          </div>

      </div>
    </div>
  </div>
</section>
<style type="text/css">
    section.product-sec-1 .box-konten-kiri{
        min-height: 500px;
    }
</style>

<?php
/*
<section class="blog-sec-1">
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
        <div class="title-blog-right">
          <div class="title-left">
            <p>Menampilkan: <span>Semua Artikel (<?php echo $dataBlog->getTotalItemCount(); ?> artikel)</span></p>
          </div>
          <div class="title-right">
            <p></p>
          </div>
          <hr>
        </div>
        <div class="row box-blog pt-3">
          <?php if ($dataBlog->getTotalItemCount() > 0): ?>
          <?php foreach ($dataBlog->getData() as $key => $value): ?>
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
          <?php endif ?>

        </div>
      </div>
    </div>
  </div>
</section>
*/ ?>