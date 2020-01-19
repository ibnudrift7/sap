<section class="breadcrumb-det">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-45">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Solution</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#">Capabilities</a></li>
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

<section class="sol-cap-sec-1">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-15">
                <div class="box-konten-kiri">
                    <h5>Solutions</h5>
                    <ol>
                        <li><a href="<?php echo CHtml::normalizeUrl(array('/home/sol_blue')); ?>">Suryasukses Studio</a></li>
                        <li class="active"><a href="<?php echo CHtml::normalizeUrl(array('/home/sol_capabilities')); ?>">Capabilities</a></li>
                    </ol>
                </div>
            </div>
            <div class="col-md-45">
                <h4><?php echo $this->setting['capabilities_hero_title'] ?></h4>
                <h3><?php echo $this->setting['capabilities_hero_subtitle'] ?></h3>

                <?php for ($i=1; $i < 8; $i++) { ?>
                <div class="row no-gutters pt-4">
                    <div class="col-md-20">
                        <img class="img img-fluid w-100" src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['capabilities2_pictures_t'. $i]; ?>" alt="">
                    </div>
                    <div class="col-md-40">
                        <div class="content-inner">
                            <div class="innersssss">
                                <h5><?php echo $this->setting['capabilities2_title_t'. $i] ?></h5>
                                <p><?php echo ($this->setting['capabilities2_content_t'. $i]) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                    <?php /*
                    <div class="row no-gutters pt-4">
                        <div class="col-md-20">
                            <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>injection.jpg" alt="">
                        </div>
                        <div class="col-md-40">
                            <div class="content-inner">
                                <div class="innersssss">
                                    <h5>Injection Molding</h5>
                                    <p>We have over 1000 products variations and over 30 years of experience and expertise necessary to provide the highest quality results for large and small scale manufacturing.</p>
                                    <p>Applications: Packaging, preform, bottle caps, storage containers, household products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters pt-4">
                        <div class="col-md-20">
                            <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>blow.jpg" alt="">
                        </div>
                        <div class="col-md-40">
                            <div class="content-inner">
                                <div class="innersssss">
                                    <h5>Blow Molding</h5>
                                    <p>As a long-standing name in the blow molding space, we serve a multitude of markets ranging from beverages to automotive.We currently manufacture a range of sizes from some of the smallest to largest bottles.</p>
                                    <p>Applications: Bottles, </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters pt-4">
                        <div class="col-md-20">
                            <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>CCJ_9900.jpg" alt="">
                        </div>
                        <div class="col-md-40">
                            <div class="content-inner">
                                <div class="innersssss">
                                    <h5>Thermoforming</h5>
                                    <p>As a pioneer for thermoformed drink cups, we lead the way for innovation. We are continuously expanding our expertise to include new thermoformed products. </p>
                                    <p>Applications: disposable cups, containers, lids, trays</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters pt-4">
                        <div class="col-md-20">
                            <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>CCJ_0062.jpg" alt="">
                        </div>
                        <div class="col-md-40">
                            <div class="content-inner">
                                <div class="innersssss">
                                    <h5>Offset Printing</h5>
                                    <p>The Dry Offset Printing process provides the most efficient method for high speed, large volume printing of multi-colored line copy, half-tones and full process art on preformed plastic parts. This option is widely used and can be completed at very high speeds.</p>
                                    <p>Applications: Round containers, drink cups, jars</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters pt-4">
                        <div class="col-md-20">
                            <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>10(1).jpg" alt="">
                        </div>
                        <div class="col-md-40">
                            <div class="content-inner">
                                <div class="innersssss">
                                    <h5>Spunbond Machine</h5>
                                    <p>A versatile product that can be printed or luminated. Its naturally porous, light-weight and eco-friendly characteristics make spunbond a multipurpose product that can support various industries. It is commonly used for shopping/goodies bags, clothes & shoes cover, masks, medical cap/gown, fruit covers and many other things.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters pt-4">
                        <div class="col-md-20">
                            <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>extrusion.jpg" alt="">
                        </div>
                        <div class="col-md-40">
                            <div class="content-inner">
                                <div class="innersssss">
                                    <h5>Spunmelt Machine</h5>
                                    <p>The extremely fine fibers differ from other extrusions,particularly spun bond, in that they have low intrinsic strength but much smaller size offering key properties. Often melt blown is added to spun bond to form SM or SMS webs, which are strong and offer the intrinsic benefits of fine fibers such as fine filtration, low pressure drop as used in face masks or filters and physical benefits such as acoustic insulation as used in dishwashers. One of the largest users of SM and SMS materials is the disposable diaper and feminine care.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters pt-4">
                        <div class="col-md-20">
                            <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>spunmelt2.jpg" alt="">
                        </div>
                        <div class="col-md-40">
                            <div class="content-inner">
                                <div class="innersssss">
                                    <h5>Extrusion Machine</h5>
                                    <p>Extrusion of roofing sheets, manufactured from UPVC, are designed to suit a diverse range of applications in various markets: DIY, factories, construction, architectural projects, agricultural, manufacturing and fabrication.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    */ ?>

                    <div class="row">
                        <div class="col-md-30 pt-4">
                                <div class="email">
                                    <p>Email your inquiry at <a href="mailto:cs@suryasukses.com">cs@suryasukses.com</a></p>
                                </div>
                                <div class="whatsapp">
                                    <h5>Whatsapp <a target="_blank" href="http://wa.me/6285777303030"><img src="<?php echo $this->assetBaseurl; ?>WA-Logo-copy-2.png" alt=""> +62 857 7730 3030</a></h5>
                                </div>
                            </div>
                    </div>

                    <div class="clear clearfix"></div>
                </div>
            </div>
        </div>
</section>

<section class="home-sec-3 py-5 my-auto d-none">
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

<style>
    section.sol-cap-sec-1 .content-inner .innersssss h5 {
        margin-bottom: 7px !important;
    }
    
    section.sol-cap-sec-1 .content-inner .innersssss p {
        font-size: 12px !important;
    }
</style>

<script type="text/javascript">
    $(window).load(function() {

        if ($(window).width() > 800) {
            var xheight_cont = $('section.sol-cap-sec-1 .row .col-md-45, section.sol-cap-sec-1 .row .col-md-45').height();
            $('section.sol-cap-sec-1 .row .box-konten-kiri, section.sol-cap-sec-1 .row .box-konten-kiri').css('height', xheight_cont + 'px');
        }

    });
</script>
