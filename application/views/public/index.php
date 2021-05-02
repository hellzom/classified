
<div class="main-head">
<section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url();?>/assets/file/1.png" class="d-block w-100" style="height: 80vh;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>/assets/file/2.png" class="d-block w-100" style="height: 80vh;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>/assets/file/3.png" class="d-block w-100" style="height: 80vh;" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Search this amazing city... ">
                        </div>
                        
                        <div class="col-lg-3 col-md-3 col-sm-3 p-0">
                            <button type="button" class="btn btn-warning wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
</div>


<div class="card m-0 p-0">
  <img src="<?= base_url();?>/assets/file/5.png" class="img-fluid" alt="">
</div>
<div class="container p-2 text-center mb-4">
  <h1 class="mt-5">Discover</h1>
  <h5>Your city like never before!</h5>
</div>
<!-- category biz start -->
<div class="index-cat-bg" style="background-image: url(<?= base_url();?>assets/file/bck2.jpg);">
  <div class="black-bg">
    <h4 class="h4 text-white px-5 py-4"><b>Top Listings</b> <a href="" class="btn btn-sm btn-info border-none ml-auto float-right">VIEW MORE</a></h4>
  </div>
</div>
<div class="jumbtron p-5 bg-cry">
  <div class="row">
    <div class="owl-carousel owl-theme">
    <?php foreach($adbiz as $adbiz): ?>
    <div class="col-lg-12">
      <div class="home-list-pop h-100">
        <div class="ribbon"><span class="text-uppercase"><?= $adbiz->biz_type;?></span></div>
        <div class="col-md-4 float-left"> <img src="<?= base_url().'/assets/bizimg/'.$adbiz->biz_img;?>" class="rounded" alt="" /> </div>
        <div class="col-md-8 float-left mt-1 home-list-pop-desc">
          <p class="badge badge-info font-weight-light mb-2">
            <?= $adbiz->cat_name;?>
          </p>
          <a href="<?= base_url('Home/business/').$adbiz->cat_slug.'/'.$adbiz->biz_slug;?>">
            <h3 class="text-capitalize">
              <?= $adbiz->biz_title;?>
            </h3>
          </a>

          <h4 class="mb-0">
            <?= $adbiz->biz_address;?>
          </h4>
          <p>
            <?= $adbiz->biz_city;?>,&nbsp;
              <?= $adbiz->biz_state;?>
          </p>
          <!--<span class="home-list-pop-rat">4.2</span>-->
        </div>
      </div>
    </div>
    <?php endforeach;?>
    </div>

  </div>
</div>
<!-- category biz end -->



<!-- category biz start -->
<div class="index-cat-bg" style="background-image: url(<?= base_url();?>assets/file/schoolbg.jpg);">
  <div class="black-bg">
    <h4 class="h4 text-white px-5 py-4"><b>Schools</b> <a href="" class="btn btn-sm btn-info border-none ml-auto float-right">VIEW MORE</a></h4>
  </div>
</div>
<div class="jumbtron p-5 bg-cry">
  <div class="row">
    <?php foreach($schoolbiz as $schoolbiz): ?>
    <div class="col-lg-4 mb-3">
      <div class="home-list-pop h-100">
        <div class="col-md-4 float-left"> <img src="<?= base_url().'/assets/bizimg/'.$schoolbiz->biz_img;?>" class="rounded" alt="" /> </div>
        <div class="col-md-8 float-left mt-1 home-list-pop-desc">
          <p class="badge badge-info font-weight-light mb-2">
            <?= $schoolbiz->cat_name;?>
          </p>
          <a href="<?= base_url('Home/business/').$schoolbiz->cat_slug.'/'.$schoolbiz->biz_slug;?>">
            <h3 class="text-capitalize">
              <?= $schoolbiz->biz_title;?>
            </h3>
          </a>

          <h4 class="mb-0">
            <?= $schoolbiz->biz_address;?>
          </h4>
          <p>
            <?= $schoolbiz->biz_city;?>,&nbsp;
              <?= $schoolbiz->biz_state;?>
          </p>
          <!--<span class="home-list-pop-rat">4.2</span>-->
        </div>
      </div>
    </div>
    <?php endforeach;?>

  </div>
</div>
<!-- category biz end -->

<!-- category biz start -->
<div class="index-cat-bg" style="background-image: url(<?= base_url();?>assets/file/event.jpg);">
  <div class="black-bg">
    <h4 class="h4 text-white px-5 py-4"><b>Event Managers</b> <a href="" class="btn btn-sm btn-info border-none ml-auto float-right">VIEW MORE</a></h4>
  </div>
</div>
<div class="jumbtron p-5 bg-cry">
  <div class="row">
    <?php foreach($eventbiz as $eventbiz): ?>
    <div class="col-lg-4 mb-3">
      <div class="home-list-pop h-100">
        <div class="col-md-4 float-left"> <img src="<?= base_url().'/assets/bizimg/'.$eventbiz->biz_img;?>" class="rounded" alt="" /> </div>
        <div class="col-md-8 float-left mt-1 home-list-pop-desc">
          <p class="badge badge-info font-weight-light mb-2">
            <?= $eventbiz->cat_name;?>
          </p>
          <a href="<?= base_url('Home/business/').$eventbiz->cat_slug.'/'.$eventbiz->biz_slug;?>">
            <h3 class="text-capitalize">
              <?= $eventbiz->biz_title;?>
            </h3>
          </a>

          <h4 class="mb-0">
            <?= $eventbiz->biz_address;?>
          </h4>
          <p>
            <?= $eventbiz->biz_city;?>,&nbsp;
              <?= $eventbiz->biz_state;?>
          </p>

          <!--<span class="home-list-pop-rat">4.2</span>-->
        </div>

      </div>
    </div>
    <?php endforeach;?>

  </div>
</div>
<!-- category biz end -->

<!-- category biz start -->
<div class="index-cat-bg" style="background-image: url(<?= base_url();?>assets/file/medical.jpg);">
  <div class="black-bg">
    <h4 class="h4 text-white px-5 py-4"><b>Medical & Fitness</b> <a href="" class="btn btn-sm btn-info border-none ml-auto float-right">VIEW MORE</a></h4>
  </div>
</div>
<div class="jumbtron p-5 bg-cry">
  <div class="row">
    <?php foreach($medbiz as $medbiz): ?>
    <div class="col-lg-4 mb-3">
      <div class="home-list-pop h-100">
        <div class="col-md-4 float-left"> <img src="<?= base_url().'/assets/bizimg/'.$medbiz->biz_img;?>" class="rounded" alt="" /> </div>
        <div class="col-md-8 float-left mt-1 home-list-pop-desc">
          <p class="badge badge-info font-weight-light mb-2">
            <?= $medbiz->cat_name;?>
          </p>
          <a href="<?= base_url('Home/business/').$medbiz->cat_slug.'/'.$medbiz->biz_slug;?>">
            <h3 class="text-capitalize">
              <?= $medbiz->biz_title;?>
            </h3>
          </a>

          <h4 class="mb-0">
            <?= $medbiz->biz_address;?>
          </h4>
          <p>
            <?= $medbiz->biz_city;?>,&nbsp;
              <?= $medbiz->biz_state;?>
          </p>

          <!--<span class="home-list-pop-rat">4.2</span>-->
        </div>

      </div>
    </div>
    <?php endforeach;?>

  </div>
</div>
<!-- category biz end -->

<!-- category biz start -->
<div class="index-cat-bg" style="background-image: url(<?= base_url();?>assets/file/manufacture.jpg);">
  <div class="black-bg">
    <h4 class="h4 text-white px-5 py-4"><b>Manufacturers</b> <a href="" class="btn btn-sm btn-info border-none ml-auto float-right">VIEW MORE</a></h4>
  </div>
</div>
<div class="jumbtron p-5 bg-cry">
  <div class="row">
    <?php foreach($manubiz as $manubiz): ?>
    <div class="col-lg-4 mb-3">
      <div class="home-list-pop h-100">
        
        <div class="col-md-4 float-left"> <img src="<?= base_url().'/assets/bizimg/'.$manubiz->biz_img;?>" class="rounded" alt="" /> </div>
        <div class="col-md-8 float-left mt-1 home-list-pop-desc">
          <p class="badge badge-info font-weight-light mb-2">
            <?= $manubiz->cat_name;?>
          </p>
          <a href="<?= base_url('Home/business/').$manubiz->cat_slug.'/'.$manubiz->biz_slug;?>">
            <h3 class="text-capitalize">
              <?= $manubiz->biz_title;?>
            </h3>
          </a>

          <h4 class="mb-0">
            <?= $manubiz->biz_address;?>
          </h4>
          <p>
            <?= $manubiz->biz_city;?>,&nbsp;
              <?= $manubiz->biz_state;?>
          </p>

          <!--<span class="home-list-pop-rat">4.2</span>-->
        </div>

      </div>
    </div>
    <?php endforeach;?>

  </div>
</div>
<!-- category biz end -->

<div class="container p-2 text-center">
  <h1 class="mt-5">Still Searching ?</h1>
  <h5>Explore some of the best business from around the city from our partners and friends.</h5>
  <a href="<?= base_url('Home/cat');?>" class="btn btn-lg btn-danger my-4">BROWSE CATEGORIES</a>
</div>
