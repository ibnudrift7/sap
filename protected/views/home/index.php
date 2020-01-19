<?php
$link_slide = array(
	array(
		'picture' => 'bawah-slide1.png',
		'titles' => 'Bottles and Caps',
		'info' => 'Recyclable bottles that deliver pristine quality to fulfill customers` needs.',
		'link' => CHtml::normalizeUrl(array('/home/product_landing', 'id'=> 0, 'slug'=>Slug::Create('packaging') )),
        'covers'=>['bottle001-new.png', 'bottle002.jpg'],
	),

    array(
        'picture' => 'bawah-slide-5.png',
        'titles' => 'Drinking Cups & Lids',
        'info' => 'Our disposable cups are light-weight and cost efficient. We also offer multiple decoration options',
        'link' => CHtml::normalizeUrl(array('/home/product_landing', 'id'=> 0, 'slug'=>Slug::Create('packaging') )),
        'covers'=>['drinking-cups001-new.png','drinking-cups002.jpg'],
    ),
    
	array(
		'picture' => 'bawah-slide2.png',
		'titles' => 'Specialty Nonwoven',
		'info' => 'A versatile product that can be printed or luminated. Its naturally porous, light-weight and eco-friendly characteristics make spunbond a multipurpose product.',
		'link' => CHtml::normalizeUrl(array('/home/product_landing', 'id'=> 1, 'slug'=>Slug::Create('specialty-nonwoven') )),
        'covers'=>['cover-specialty.jpg'],
	),
	array(
		'picture' => 'bawah-slide3.png',
		'titles' => 'Housewares',
		'info' => 'We provide customers with qualified household products, innovative design, and prompt delivery at a very competitive price. Each products are designed to comfort and ease your life.',
		'link' => CHtml::normalizeUrl(array('/home/product_landing', 'id'=> 2, 'slug'=>Slug::Create('housewares') )),
        'covers'=>['cover-bathroom.jpg','cover-cleaningware.jpg','cover-garden.jpg','cover-kitchenware.jpg','cover-racks.jpg','cover-sealware.jpg'],
	),
	array(
		'picture' => 'bawah-slide4.png',
		'titles' => 'Roofing System',
		'info' => 'Roofing sheets manufactured from UPVC, designed to suit a diverse range of applications in various markets.',
		'link' => CHtml::normalizeUrl(array('/home/product_landing', 'id'=> 3, 'slug'=>Slug::Create('roofing') )),
        'covers'=>['cover-roofing-suryasukses.jpg'],
	),

);
?>
<script type="text/javascript">
    $(function(){
        $('section.bawah-slide .nx_item.nmenu_0').addClass('active');

        $('section.bawah-slide .nx_item').on('mouseenter', function(){
            var to_ons = $(this).attr('data-id');
            $('.others_description').addClass('d-none');
            $('section.bawah-slide .nx_item').removeClass('active');

            // console.log(to_ons);
            $('section.bawah-slide .nx_item.nmenu_'+ to_ons).addClass('active');
            $('.others_description.nactiv_'+ to_ons).removeClass('d-none');
            return false;
        });
    });

    // var sn_log_active = 0;
    // function rundownSlide() {
    //     $('.others_description').addClass('d-none');
    //     $('section.bawah-slide .nx_item').removeClass('active');

    //     $('section.bawah-slide .nx_item.nmenu_'+ sn_log_active).addClass('active');
    //     $('.others_description.nactiv_'+ sn_log_active).removeClass('d-none');
    // }

    // var time = 1;
    // var interval = setInterval(function() { 
    //    if (time <= 5) { 
    //       rundownSlide();

    //       console.log('log time = '+time);
    //       console.log('log active = '+sn_log_active);
    //       time++;
    //       sn_log_active++;
    //    } else { 
    //     time = 1;
    //     sn_log_active = 0;
    //    }
    // }, 3000);
</script>

<section class="bawah-slide d-none d-sm-block">
	<div class="prelative container ">
		<div class="row">
			<?php foreach ($link_slide as $key => $value): ?>
			<div class="col-30 col-md-12">
				<div class="box-content nx_item <?php if ($key == 0): ?>active<?php endif ?> nmenu_<?php echo $key ?>" data-id="<?php echo $key ?>">
					<a href="#">
						<div class="image">
							<div class="inners">
							<img src="<?php echo $this->assetBaseurl; ?><?php echo $value['picture'] ?>" alt="">
							</div>
						</div>
						<!-- <p><?php echo $value['titles'] ?></p> -->
					</a>
				</div>
			</div>
			<?php endforeach; ?>

		</div>
        <div class="py-4"></div>
        <?php foreach ($link_slide as $key => $value): ?>
        <div class="others_description <?php if ($key != 0): ?>d-none<?php endif ?> nactiv_<?php echo $key ?>" data-id="<?php echo $key ?>">
            <div class="row no-gutters back-white-def">
                <div class="col-md-38 back-white my-auto order-2 order-sm-1">
                    <div class="descriptions_info pt-4 pb-4 pl-4 pr-4">
                        <h3><?php echo $value['titles'] ?></h3>
                        <div class="py-1"></div>
                        <p><?php echo $value['info'] ?></p>
                        <div class="py-1"></div>
                        <div class="btns_click"><a href="<?php echo $value['link'] ?>" class="btn btn-link p-0">Learn more</a></div>
                        <div class="clear clearfix"></div>
                    </div>
                </div>
                <div class="col-md-22 back-grey my-auto order-1 order-sm-2">
                    <div class="pictures">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <?php foreach ($value['covers'] as $ke => $val): ?>
                            <div class="carousel-item <?php if ($ke == 0): ?>active<?php endif ?>">
                              <img src="<?php echo Yii::app()->baseUrl.'/images/products/'; ?><?php echo $val ?>" alt="" class="img img-fluid">
                            </div>
                            <?php endforeach ?>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="clearfix"></div>
	</div>
</section>


<div class="py-1"></div>



<section class="home-sec-1">
    <div class="prelative container">
        <div class="row innsers_section">
            <?php 
            $arrs_nk = array(
                            array(
                                'picture' => $this->setting['home2_pictures_t1'],
                                'titles' => $this->setting['home2_title_t1'],
                                'info' => $this->setting['home2_content_t1'],
                                'link' => $this->setting['home2_links_t1'],
                            ),
                            array(
                                'picture' => $this->setting['home2_pictures_t2'],
                                'titles' => $this->setting['home2_title_t2'],
                                'info' => $this->setting['home2_content_t2'],
                                'link' => $this->setting['home2_links_t2'],
                            ),
							array(
								'picture' => $this->setting['home2_pictures_t3'],
								'titles' => $this->setting['home2_title_t3'],
								'info' => $this->setting['home2_content_t3'],
								'link' => $this->setting['home2_links_t3'],
							),
                            array(
                                'picture' => $this->setting['home2_pictures_t4'],
                                'titles' => $this->setting['home2_title_t4'],
                                'info' => $this->setting['home2_content_t4'],
                                'link' => $this->setting['home2_links_t4'],
                            ),
                            
                        );
            ?>

            <?php foreach ($arrs_nk as $key => $value): ?>
            <div class="col-md-15">
                <div class="box-content">
                    <div class="image"><img src="<?php echo $this->assetBaseurl; ?><?php echo $value['picture'] ?>" alt=""></div>
                    <div class="inner">
                        <div class="paddings">
                            <h4><?php echo $value['titles'] ?></h4>
                            <p><?php echo $value['info'] ?></p>
                        </div>
                        <div class="buttons_read">
                            <p><a href="<?php echo $value['link'] ?>">READ MORE</a></p>
                            <a href="<?php echo $value['link'] ?>" class="rights"><img class="arrow" src="<?php echo $this->assetBaseurl; ?>right-arrow.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

        <?php 
        $arrs_blog = array(
                        array(
                            'picture' => 'homesec-1.jpg',
                            'titles' => 'Get to know SAP',
                            'link' => '#',
                        ),
                        
                    );

        $criteria = new CDbCriteria;
        $criteria->with = array('description');
        $criteria->addCondition('t.active = "1"');
        $criteria->addCondition('description.language_id = :language_id');
        $criteria->params[':language_id'] = $this->languageID;
        $criteria->order = 'date_input DESC';
        $criteria->limit  = 4;
        $model_blog = Blog::model()->findAll($criteria);
        ?>
        <?php if (count($model_blog) > 0): ?>
        <div class="py-5"></div>

        <div class="inners_block_shortcut">
            <div class="text-center tops pb-3">
                <h3>News and Articles</h3>
            </div>
            <div class="row innsers_section justify-content-center">
                <?php foreach ($model_blog as $key => $value): ?>
                <div class="col-md-15">
                    <div class="box-content">
                        <div class="image">
                            <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=> $value->id)); ?>">
                            <img style="height:185px;" class="w-100" src="<?php echo Yii::app()->baseUrl.'/images/blog/'; ?><?php echo $value->image ?>" alt="<?php echo $value->description->title ?>">
                            </a>
                        </div>
                        <div class="inner">
                            <div class="paddings">
                                <h4 style="height:110px;"><?php echo $value->description->title ?></h4>
                            </div>
                            <div class="buttons_read">
                                <p><a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=> $value->id)); ?>">READ MORE</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>        
        </div>
        <?php endif ?>


    </div>
</section>

<div class="prelative container2">
    <section class="home-sec-2">
            <div class="row">
                <div class="col-md-60">
                    <div class="box-content">
                        <div class="title">
                            <h3><?php echo $this->setting['home4_titles'] ?></h3>
                        </div>
                        <div class="subtitle">
                            <p><?php echo $this->setting['home4_subtitles'] ?></p>
                        </div>
                        <div class="blocks_btn text-center pt-1">
                            <a data-fancybox href="<?php echo $this->setting['home4_links_t5'] ?>"><img src="<?php echo $this->assetBaseurl; ?>btn-playsvideo.png" alt="Video Title link" class="img img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>