<?php
$pages = '';
if(isset($_GET['page']) and $_GET['page'] != ''){
  $pages = ucwords( str_replace('-', ' ', $_GET['page']) );
}

?>

<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#"><?php echo $pages ?></a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-15">
          <div class="block-back-link text-right">
            <a onclick="window.history.back();" href="#">Back</a>
          </div>
        </div>
      </div>
      <div class="py-2"></div>
    </div>
</section>

<section class="sol_blue-sec-1">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-15">
				<div class="box-konten-kiri">
					<h5>About Us</h5>
					<ol>
						<li class="active"><a href="<?php echo CHtml::normalizeUrl(array('/home/pages', 'page'=>'Our-Mission')); ?>">Our Mission</a></li>
						<li><a href="<?php echo CHtml::normalizeUrl(array('/home/abouthistory')); ?>">Company History</a></li>
						<li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutquality')); ?>">Quality Statement</a></li>
						<li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutlocations')); ?>">Locations</a></li>
						<li><a href="<?php echo CHtml::normalizeUrl(array('/home/aboutcareer')); ?>">Career</a></li>
<!--						<li><a href="--><?php //echo CHtml::normalizeUrl(array('/home/faq')); ?><!--">FAQ</a></li>-->
					</ol>
				</div>
			</div>
			<div class="col-md-45">
				<h4>How it all began</h4>
				<h3>Our Mission</h3>
				<div class="row">
					<div class="col-md-30">
						<p>It was all started with a small houseware store on Surabaya at 1975. 25 years later, it has become one of the plastic manufacturing company group to be reckoned.
							<br><br>
							The trust that given to our small business established a reputation that drives our expansion in the plastic manufacturing industry. We are known as a company that’s flexible and reliable, dedicated to manufacture the highest quality products for houseware to food industry. We began producing plastic bottles for mineral water packaging, supplying our customers with the goal of establishing a long term business relationship with each and every customer.
							<br><br>
							Now we are a fully fledged international plastic manufacturing group operating from Surabaya - East Java and Cibitung - Jakarta. We have the ability to create and produce practical to sophisticated solutions and approach on innovative product design to even smallest home industry business until the the major player in the retail business of Food & Beverage, healthcare and so much more.
							<br><br>
							Our group comprise of PT Suryasukses Abadi Prima & PT Suryasukses Adi Perkasa which run the production of Thermoforming PP Cup & HDPE Cap, PT Multiplast Indo Makmur that produces and distributes Plastic Housewares and last but not least PT Suryasukses Mekar Makmur that produces Nonwoven Spunbond. Our combined capacity has made us one of the biggest player in the industry, in the Java island region.
					</div>
					<div class="col-md-30">
						<div class="row no-gutters">
<!--							--><?php //foreach($solblue as $key => $value): ?>
								<div class="col-md-30 col-30">
									<img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?><?php echo $value['images'] ?>" alt="">
								</div>
<!--							--><?php //endforeach  ?>
						</div>
					</div>
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
