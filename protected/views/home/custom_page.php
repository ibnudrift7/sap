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

<section class="cerf-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
        <div class="title">
          <h5><?php echo $pages ?></h5>
        </div>
      </div>
      <div class="col-md-45">
        <div class="box-content">
          <h3><?php echo $pages ?></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro dolorum autem fuga illum, natus, rem ullam magnam atque saepe ipsum iste eius, optio officiis! Quam vero voluptatibus nobis laboriosam cum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, pariatur eum. Sed deserunt fuga tempore, dicta eius consequatur magnam unde. Dolores aut iure dolorum nam. Nemo repellat asperiores tenetur ut.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam reiciendis voluptatum similique sed, placeat commodi molestiae laborum odit! Harum vero repellat, dicta nobis placeat beatae totam, incidunt deserunt minus consequatur?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam perspiciatis earum aliquid, explicabo illo ipsam harum reprehenderit tempora sed a pariatur consequuntur ea facilis excepturi illum eaque temporibus voluptate.</p>
          <img class="img img-fluid" src="<?php echo $this->assetBaseurl; ?>image-FSSC.jpg" alt="">
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