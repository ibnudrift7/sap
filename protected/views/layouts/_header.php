<?php
$e_activemenu = $this->action->id;
$controllers_ac = $this->id;
$session=new CHttpSession;
$session->open();
$login_member = $session['login_member'];

$active_menu_pg = $controllers_ac.'/'.$e_activemenu;
?>
<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
<div class="prelatife">
<header class="head headers <?php if ($active_menu_pg == 'home/index' or $active_menu_pg == 'home/abouthistory' or $active_menu_pg == 'home/aboutquality' or $active_menu_pg == 'home/aboutcareer'): ?>homes_head<?php endif ?> ">
  <div class="prelatife container d-none d-sm-block">
    <div class="inner-header">
      <div class="row">
        <div class="col-md-8">
          <div class="logo_heads"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>"><img src="<?php echo $this->assetBaseurl; ?>lgo-header.png" alt="" class="img img-fluid"></a></div>
        </div>
        <div class="col-md-32">
          <div class="bottoms_head_menu pt-4 text-left mt-2">
            <ul class="list-inline m-0">
              <li class="list-inline-item" data-id="products-menu"><a href="#">PRODUCTS&nbsp;<i class="fa fa-caret-down"></i></a></li>
              <li class="list-inline-item" data-id="market-menu"><a href="#">MARKETS&nbsp;<i class="fa fa-caret-down"></i></a></li>
              <li class="list-inline-item" data-id="solution-menu"><a href="#">SOLUTIONS&nbsp;<i class="fa fa-caret-down"></i></a></li>
              <li class="list-inline-item" data-id="about-menu"><a href="#">ABOUT US&nbsp;<i class="fa fa-caret-down"></i></a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/contact')); ?>">CONTACT US</i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-20">
          <div class="tops_iso text-right pt-3 mt-2">
            <div class="isols_headr"><img src="<?php echo $this->assetBaseurl; ?>iso-headers.png" alt="" class="img img-fluid"></div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>

  </div>
 
  <div class="d-block d-sm-none">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand" href="<?php echo CHtml::normalizeUrl(array('/home/index', 'page'=>'Contact')); ?>">
        <img src="<?php echo $this->assetBaseurl ?>lgo-header.png" alt="" class="img img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">HOME</a></li>
          <li class="nav-item dropdown">
            <?php 
            $n_resource = DataProducts::nex_resource();
            $kn_data = array(0, 1, 2, 3);
            ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PRODUCTS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php foreach ($kn_data as $k_kat => $nkat): ?>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product_landing', 'id'=> $k_kat, 'slug'=>Slug::Create($n_resource[$k_kat]['name_category']) )); ?>"><?php echo ucwords($n_resource[$k_kat]['name_category']) ?></a>
              <?php endforeach ?>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              MARKET
            </a>
            <?php 
            $datas = DataMarket::nex_resource();
            ?>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php foreach ($datas as $key => $value): ?>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/market_landing', 'id'=>$key, 'slug'=>Slug::Create($value['name_category']) )); ?>"><?php echo $value['name_category'] ?></a>
              <?php endforeach ?>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              SOLUTIONS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/sol_blue')); ?>">Suryasukses Studio</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/sol_capabilities')); ?>">Capabilities</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ABOUT US
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Our-Mission')); ?>">Our Mission</a> -->
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Company-History')); ?>">Company History</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/quality')); ?>">Quality Statement</a>
              <!--<a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Locations')); ?>">Locations</a>-->
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Career')); ?>">Career</a>
              <!-- <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/faq')); ?>">FAQ</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/cerf_fssc')); ?>">Certification</a> -->
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/contact')); ?>">CONTACT US</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>

  <div id="about-menu" class="blocks_bottom_menuDropdown back-about">
    <div class="prelatife container">
    <div class="inners_mndropdown">
      <div class="row">
        <div class="col-md-60">
            <span class="in_title">ABOUT US</span>
            <ul class="list-inline">
              <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Our-Mission')); ?>">Our Mission</a></li> -->
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/abouthistory')); ?>">Company History</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutquality')); ?>">Quality Statement</a></li>
              <!--<li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutlocations')); ?>">Locations</a></li>-->
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutcareer')); ?>">Career</a></li>
              <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/home/faq')); ?>">FAQ</a></li>
              <li><a href="<?php echo CHtml::normalizeUrl(array('/home/cerf_fssc')); ?>">Certification</a></li> -->
            </ul>
            <div class="clear"></div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div id="market-menu" class="blocks_bottom_menuDropdown back-about">
    <div class="prelatife container">
    <div class="inners_mndropdown">
      <div class="row">
        <div class="col-md-60">
            <span class="in_title">MARKETS</span>
            <?php 
            $datas = DataMarket::nex_resource();
            ?>
            <ul class="inline">
              <?php foreach ($datas as $key => $value): ?>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/market_landing', 'id'=>$key, 'slug'=>Slug::Create($value['name_category']) )); ?>"><?php echo $value['name_category'] ?></a></li>
              <?php endforeach ?>
            </ul>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="solution-menu" class="blocks_bottom_menuDropdown back-about">
    <div class="prelatife container">
    <div class="inners_mndropdown">
      <div class="row">
        <div class="col-md-60">
            <span class="in_title">SOLUTIONS</span>
            <ul class="inline">
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/sol_blue')); ?>">Suryasukses Studio</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/sol_capabilities')); ?>">Capabilities</a></li>
            </ul>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="products-menu" class="blocks_bottom_menuDropdown back-products">
    <div class="prelatife container">
      <div class="inners_mndropdown menu_small">
        <span class="in_title">PRODUCTS</span>
        <?php 
        $n_resource = DataProducts::nex_resource();
        $kn_data = array(0, 1, 2, 3);
        ?>
        <div class="row">
          <?php foreach ($kn_data as $k_kat => $nkat): ?>
          <div class="col-md-15">
              <ul class="list-unstyled">
                <li class="firsts"><a href="<?php echo CHtml::normalizeUrl(array('/home/product_landing', 'id'=> $k_kat, 'slug'=>Slug::Create($n_resource[$k_kat]['name_category']) )); ?>"><?php echo ucwords($n_resource[$k_kat]['name_category']) ?></a></li>
                <?php foreach ($n_resource[$k_kat]['lists'] as $key => $value): ?>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/home/product_range', 'parent'=> $k_kat, 'id' => $key, 'slug'=>Slug::Create($value['names']) )); ?>"><?php echo ucwords($value['names']) ?></a></li>
                <?php endforeach ?>
              </ul>
          </div>
          <?php endforeach ?>

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
      $('section.header-baru').addClass('opened');

      // $('#'+cs_active+'.blocks_bottom_menuDropdown').addClass('views');
      if ( $('#'+cs_active+'.blocks_bottom_menuDropdown').hasClass('open_m') ) {
        $('#'+cs_active+'.blocks_bottom_menuDropdown').slideUp();
        $('#'+cs_active+'.blocks_bottom_menuDropdown').removeClass('open_m');
      } else {
        $('#'+cs_active+'.blocks_bottom_menuDropdown').slideToggle(1200);
        $('#'+cs_active+'.blocks_bottom_menuDropdown').addClass('open_m');
      }
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
