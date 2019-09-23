<?php
$e_activemenu = $this->action->id;
$controllers_ac = $this->id;
$session=new CHttpSession;
$session->open();
$login_member = $session['login_member'];

$active_menu_pg = $controllers_ac.'/'.$e_activemenu;
?>
<div class="prelatife">
<header class="head headers <?php if ($active_menu_pg == 'home/index'): ?>homes_head<?php endif ?>">
  <div class="prelatife container d-none d-sm-block">
    <div class="inner-header">
      <div class="row">
        <div class="col-md-20">
          <div class="logo_heads"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>"><img src="<?php echo $this->assetBaseurl; ?>lgo-header.png" alt="" class="img img-fluid"></a></div>
        </div>
        <div class="col-md-40">
          <div class="tops_iso text-right">
            <div class="isols_headr"><img src="<?php echo $this->assetBaseurl; ?>iso-headers.png" alt="" class="img img-fluid"></div>
          </div>
          <div class="clear clearfix"></div>
          <div class="py-1"></div>
          <div class="bottoms_head_menu pt-3 text-right">
            <ul class="list-inline m-0">
              <li class="list-inline-item" data-id="products-menu"><a href="#">PRODUCTS&nbsp;<i class="fa fa-caret-down"></i></a></li>
              <li class="list-inline-item" data-id="market-menu"><a href="#">MARKETS&nbsp;<i class="fa fa-caret-down"></i></a></li>
              <li class="list-inline-item" data-id="solution-menu"><a href="#">SOLUTIONS&nbsp;<i class="fa fa-caret-down"></i></a></li>
              <li class="list-inline-item" data-id="about-menu"><a href="#">ABOUT US&nbsp;<i class="fa fa-caret-down"></i></a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Contact')); ?>">CONTACT US&nbsp;<i class="fa fa-caret-down"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  
  <?php
  /*
  <div class="d-block d-sm-none">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">
        <img src="<?php echo $this->assetBaseurl ?>lgo-heads-lic.png" alt="" class="img img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">HOME</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PRODUCTS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Door & Window</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Slide & Fold Door</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Glass</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Aluminum</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Steel Door</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Furniture</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Electronic Lock</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Others</a>
            </div>
          </li>

          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/project')); ?>">PROJECT REFERENCES</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/brochures')); ?>">BROCHURE</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/showroom')); ?>">SHOWROOM</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/contact')); ?>">CONTACT US</a></li>
        </ul>
      </div>
    </nav>
  </div>
  */ ?>
</header>

  <div id="about-menu" class="blocks_bottom_menuDropdown back-about">
    <div class="prelatife container">
    <div class="inners_mndropdown">
      <div class="row">
        <div class="col-md-25">
            <span class="in_title">ABOUT US</span>
            <ul class="list-unstyled">
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Our-Mission')); ?>">Our Mission</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Company-History')); ?>">Company History</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/quality')); ?>">Quality Statement</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Locations')); ?>">Locations</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Career')); ?>">Career</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/faq')); ?>">FAQ</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/cerf_fssc')); ?>">Certification</a></li>
            </ul>
            <div class="clear"></div>
          </div>
        </div>
        <div class="col-md-35">
        </div>
      </div>
    </div>
  </div>

  <div id="market-menu" class="blocks_bottom_menuDropdown back-about">
    <div class="prelatife container">
    <div class="inners_mndropdown">
      <div class="row">
        <div class="col-md-25">
            <span class="in_title">MARKETS</span>
            <ul class="list-unstyled">
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'market-Beverages')); ?>">Beverages</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'market-Healthcare')); ?>">Healthcare</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'market-Household')); ?>">Household</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'market-Agriculture')); ?>">Agriculture</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'market-Industrial')); ?>">Industrial</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'market-Filtration')); ?>">Filtration</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'market-Building-Construction')); ?>">Building & Construction</a></li>
            </ul>
            <div class="clear"></div>
          </div>
        </div>
        <div class="col-md-35">
        </div>
      </div>
    </div>
  </div>

  <div id="solution-menu" class="blocks_bottom_menuDropdown back-about">
    <div class="prelatife container">
    <div class="inners_mndropdown">
      <div class="row">
        <div class="col-md-25">
            <span class="in_title">SOLUTIONS</span>
            <ul class="list-unstyled">
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/sol_blue')); ?>">Blue bottle Studios</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/sol_capabilities')); ?>">Capabilities</a></li>
            </ul>
            <div class="clear"></div>
          </div>
        </div>
        <div class="col-md-35">
        </div>
      </div>
    </div>
  </div>

  <div id="products-menu" class="blocks_bottom_menuDropdown back-products">
    <div class="prelatife container">
      <div class="inners_mndropdown menu_small">
        <span class="in_title">PRODUCTS</span>
        <div class="row">
          <div class="col-md-15">
              <ul class="list-unstyled">
                <li class="firsts"><a href="<?php echo CHtml::normalizeUrl(array('/home/products', 'name'=>'Packaging')); ?>">Packaging</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products', 'name'=>'Preforms')); ?>">Preforms</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products', 'name'=>'Bottles')); ?>">Bottles</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products', 'name'=>'Closures')); ?>">Closures</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products', 'name'=>'Drinking Cups')); ?>">Drinking Cups</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products', 'name'=>'Lids')); ?>">Lids</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products', 'name'=>'Containers')); ?>">Containers</a></li>
              </ul>
              <div class="py-3"></div>
              <ul class="list-unstyled">
                <li class="firsts"><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Our Brands</a></li>
                <li><a href="#">SAP</a></li>
                <li><a href="#">AMARI</a></li>
              </ul>
          </div>
          <div class="col-md-15">
            <ul class="list-unstyled">
              <li class="firsts"><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Specialty Nonwoven</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Spunbond Polypropylene</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Meltblown</a></li>
            </ul>
          </div>
          <div class="col-md-15">
            <ul class="list-unstyled">
              <li class="firsts"><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Housewares</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Storage</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Containers</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Racks</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Sealware</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Kitchenware</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Cleaning ware</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Bathroom</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Garden</a></li>
            </ul>
          </div>
          <div class="col-md-15">
            <ul class="list-unstyled">
              <li class="firsts"><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Roofing</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>">Twinwall corrugated roofing</a></li>
            </ul>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>

</div>

<script type="text/javascript">
  $(document).ready(function(){
    
    $('.bottoms_head_menu ul li').on('click', function(){
      var cs_active = $(this).attr("data-id");
      console.log(cs_active);

      $('.blocks_bottom_menuDropdown').slideUp();
      // $('.blocks_bottom_menuDropdown').removeClass('views');
      // $('section.header-baru').slideDown();
      $('section.header-baru').addClass('opened');

      // $('#'+cs_active+'.blocks_bottom_menuDropdown').addClass('views');
      $('#'+cs_active+'.blocks_bottom_menuDropdown').slideToggle(1200);
      // return false;
    });

    // $('.bottoms_head_menu ul li').hover(
    //   function(){
    //       var cs_active = $(this).attr("data-id");
    //       // console.log(cs_active);
    //       if (typeof cs_active === "undefined") {
    //         console.log('masuk cok');
    //         $('.blocks_bottom_menuDropdown').slideUp('fast');
    //         $('.blocks_bottom_menuDropdown').removeClass('opened');  
    //       } else {
    //         $('#'+cs_active+'.blocks_bottom_menuDropdown').slideDown();
    //         $('#'+cs_active+'.blocks_bottom_menuDropdown').addClass('opened');
    //       }
    //   }, function(){
    //     var cs_active = $(this).attr("data-id");
    //      setTimeout(function(){
    //       $('.blocks_bottom_menuDropdown').slideUp();
    //       $('.blocks_bottom_menuDropdown').removeClass('opened');
    //     }, 5000);
    //   }
    // );

  });
</script>

<!-- <section id="myAffix" class="header-affixs affix-top">
  <div class="clear height-15"></div>
  <div class="prelatife container">
    <div class="row">
      <div class="col-md-15 col-sm-15">
        <div class="lgo_web_headrs_wb">
          <a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">
            <img src="<?php echo $this->assetBaseurl; ?>lgo-heads-lic.png" alt="" class="img img-fluid">
          </a>
        </div>
      </div>
      <div class="col-md-45 col-sm-45">
        <div class="text-right"> 
          <div class="menu-taffix">
            <ul class="list-inline d-inline">
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">HOME</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">PRODUCTS</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/project')); ?>">PROJECT REFERENCES</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/brochures')); ?>">BROCHURE</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/showroom')); ?>">SHOWROOM</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/contact')); ?>">CONTACT US</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section> -->


<script type="text/javascript">
  $(document).ready(function() {

  var sn_width = $(window).width();

  // console.log($(document).scrollTop());
  if (sn_width > 1150) {
      $('body').scroll(function(){

        var sntop1 = $(this).scrollTop();
        // console.log(sntop1);

        if(sntop1 > 115){
          $('.header-affixs').removeClass('affix-top').addClass('affix');
          // $('.header-affixs').addClass('affix');
        }else{
          $('.header-affixs.affix').removeClass('affix').addClass('affix-top');
          // $('body').css('padding-top', '0px');
        }
      });

    }

  });
</script>
