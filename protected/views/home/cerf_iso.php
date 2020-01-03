<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Policies</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">ISO 9001 Certification</a></li>
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

<section class="cerf-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
        <div class="title">
          <h5>Policies</h5>
            <ul class="list-unstyled lefts_submenu_product">
            	<li class="dropdown active"><a href="https://richmore.co/sap/home/cerf_iso">ISO 9001 Certification</a>
            	</li>
            	<li class="dropdown"><a href="https://richmore.co/sap/home/cerf_fssc">FSSC 22000 Certification</a>
            	</li>
            	<li class="dropdown"><a href="https://richmore.co/sap/home/quality">Quality Policy</a>
            	</li>
            </ul>
        </div>
      </div>
      <div class="col-md-45">
        <div class="box-content">
          <h3>ISO 9001 Certification</h3>
          <p>ISO 9001 is the internationally recognized standard for Quality Management Systems (QMS). ISO 9001 certification provides the basis for effective processes and effective people to deliver an effective product or service time after time. </p>
			<a data-fancybox="gallery" href="<?php echo $this->assetBaseurl; ?>sertfikat-iso-sap.jpg"><img style="border: 1px solid #ccc;" class="img img-fluid" src="<?php echo $this->assetBaseurl; ?>sertfikat-iso-sap.jpg" alt=""></a>
        </div>
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


<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<style>
    section.cerf-sec-1 .title{
        min-height:450px;
    }
</style>


<script type="text/javascript">
  $(window).load(function(){
    
    if( $(window).width() > 800 ){
      var xheight_cont =  $('section.cerf-sec-1 .row .col-md-45, section.cerf-sec-1 .row .col-md-45').height();
      $('section.cerf-sec-1 .row .title, section.cerf-sec-1 .row .title').css('height', xheight_cont+'px');
    } 

  });
</script>