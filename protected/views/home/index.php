<div class="py-1"></div>

<section class="home-sec-1">
    <div class="prelative container">
        <div class="row innsers_section">
            <?php 
            $arrs_nk = array(
                            array(
                                'picture' => 'homesec-1.jpg',
                                'titles' => 'Get to know SAP',
                                'info' => 'Being in the plastic business since 1975 has bring us so many things other couldn’t achieve.',
                                'link' => CHtml::normalizeUrl(array('/home/pages', 'page'=>'Company-History'))
                            ),
                            array(
                                'picture' => 'homesec-2.jpg',
                                'titles' => 'Our Markets',
                                'info' => 'With more than 4 decades of operations, our business has vastly expand to cover a bigger market.',
                                'link' => CHtml::normalizeUrl(array('/home/pages', 'page'=>'market-Beverages'))
                            ),
                            array(
                                'picture' => 'homesec-3.jpg',
                                'titles' => 'SAP Products',
                                'info' => 'We develop a variety of plastic products from food grade packagings, housewares, nonwovens and now UPVC roofings. ',
                                'link' => CHtml::normalizeUrl(array('/home/products'))
                            ),
                            array(
                                'picture' => 'homesec-4.jpg',
                                'titles' => 'SAP Solutions',
                                'info' => 'There’s so much capabilities and service solutions that we possess, in order to help you achieve your needs.',
                                'link' => CHtml::normalizeUrl(array('/home/sol_blue'))
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
    </div>
</section>

<div class="prelative container2">
    <section class="home-sec-2">
            <div class="row">
                <div class="col-md-60">
                    <div class="box-content">
                        <div class="title">
                            <h3>SAP Corporate Profile Video</h3>
                        </div>
                        <div class="subtitle">
                            <p>Sharing our passion, realizing your ideas and visions.</p>
                        </div>
                        <div class="blocks_btn text-center pt-1">
                            <a href="#"><img src="<?php echo $this->assetBaseurl; ?>btn-playsvideo.png" alt="" class="img img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>

<!--<section class="home-sec-3 py-5 my-auto">-->
<!--    <div class="prelative container">-->
<!--        <div class="row py-5">-->
<!--            <div class="col-md-60">-->
<!--                <div class="py-3"></div>-->
<!--                <div class="box-content ">-->
<!--                    <div class="our-corporation">-->
<!--                        <h4>OUR CORPORATION GROUP</h4>-->
<!--                    </div>-->
<!--                    <div class="py-3"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-60">-->
<!--                <div class="box-content inners_listcompany">-->
<!--                    <ul class="list-inline text-center justify-content-center">-->
<!--                        <li class="list-inline-item">-->
<!--                            <img src="--><?php //echo $this->assetBaseurl; ?><!--small_logo_companys_1.png" alt="" class="img img-fluid">-->
<!--                        </li>-->
<!--                        <li class="list-inline-item">-->
<!--                            <img src="--><?php //echo $this->assetBaseurl; ?><!--small_logo_companys_2.png" alt="" class="img img-fluid">-->
<!--                        </li>-->
<!--                        <li class="list-inline-item">-->
<!--                            <img src="--><?php //echo $this->assetBaseurl; ?><!--small_logo_companys_3.png" alt="" class="img img-fluid">-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="py-3"></div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
