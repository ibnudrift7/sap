<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Policies</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a href="#">Quality Policy</a></li>
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


<section class="about-location-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
      <div class="box-konten-kiri">
        <h5>Policies</h5>
            <ul class="list-unstyled lefts_submenu_product">
            	<li class="dropdown"><a href="<?php echo CHtml::normalizeUrl(array('/home/cerf_iso')); ?>">ISO 9001 Certification</a>
            	</li>
            	<li class="dropdown"><a href="<?php echo CHtml::normalizeUrl(array('/home/cerf_fssc')); ?>">FSSC 22000 Certification</a>
            	</li>
            	<li class="dropdown active"><a href="<?php echo CHtml::normalizeUrl(array('/home/quality')); ?>">Quality Policy</a>
            	</li>
            </ul>
      </div>
      </div>
      <div class="col-md-45">
		  <h3><?php echo $this->setting['policies_title']; ?></h3>
			<div class="content">
				<?php echo $this->setting['policies_content']; ?>
				<div class="content-inner-quality">
					<?php echo $this->setting['policies_content2']; ?>

          <div class="clearfix clear"></div>
				</div>
				<div class="content-inner-quality">
					<h4>Our quality certifications: (Click to read more)</h4>
					<ul>
						<li><a href="<?php echo CHtml::normalizeUrl(array('/home/cerf_iso')); ?>">ISO 90001 Certification</a></li>
						<li><a href="<?php echo CHtml::normalizeUrl(array('/home/cerf_fssc')); ?>">FSSC 22000 Certification</a></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>
</section>

<style>
    section.about-location-sec-1{
        padding-top: 0 !important;
    }
    section.about-location-sec-1 .box-konten-kiri{
        min-height:470px !important;
    }
    section.about-location-sec-1 .content-inner-quality ul li a{
        font-size: 16px;
        color: #6a6a6a;
        font-weight: 400;
    }
</style>

<script type="text/javascript">
  $(window).load(function(){
    
    if( $(window).width() > 800 ){
      var xheight_cont =  $('section.about-location-sec-1 .row .col-md-45, section.about-location-sec-1 .row .col-md-45').height();
      $('section.about-location-sec-1 .row .box-konten-kiri, section.about-location-sec-1 .row .box-konten-kiri').css('height', xheight_cont+'px');
    } 

  });
</script>
