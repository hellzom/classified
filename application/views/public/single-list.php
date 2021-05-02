



<?php foreach($biz as $biz): ?>
<div class="bg-ho text-light p-0" style="background-image: url(<?= base_url();?>/assets/image1.jpeg);">
        <div class="black-bg p-5">
            <div class="container">
            <div class="row">
            	<div class="col-lg-3 col-sm-12 col-md-12">
                    <div class="card">
                        <img src="<?= base_url();?>/assets/bizimg/<?= $biz->biz_img;?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12 col-md-12">
                     <div class="row mt-2">
                <div class="col-12">
                    <h5 class="badge badge-secondary float-left"><?= $biz->cat_name;?></h5>
                </div>
                <div class="col-12">
                    <h1 class="title-text float-left"><b class=""><?= $biz->biz_title;?></b></h1>
                </div>
                <div class="col-12">                    
                    <h6 class="float-left mt-2"><i class="fas fa-map-marker-alt"> </i>&nbsp;&nbsp; <?= $biz->biz_address;?>,</h6>
                </div>
                <div class="col-12">                    
                    <h6 class="float-left ml-4"><?= $biz->biz_street;?>, <?= $biz->biz_city;?>,</h6>
                </div>
                <div class="col-12">                    
                    <h6 class="float-left ml-4"> <?= $biz->biz_state;?></h6>
                </div>
                </div>
                </div>
       
            </div>
        </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-9 mt-2">
                <div class="card">
                    <div class="card-header">
                        <img src="<?= base_url();?>/assets/profile.svg" alt="" width="3%"><b class="ml-3">ABOUT</b>
                    </div>
                    <div class="card-body">
                        <p><?= $biz->biz_desc;?></p>
                        <hr>
                        <div class="row">
                            
                            
                            <div class="col mt-2">
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-dark"><i class="fas fa-user"></i></button>
                                    <a href="" class="btn btn-warning align-center"><?= $biz->biz_user;?></a>
                                  </div>
                            </div>
                            
                            <div class="col mt-2">
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-dark"><i class="fas fa-phone"></i></button>
                                    <a href="tel:<?= $biz->biz_contact;?>" class="btn btn-warning align-center"><?= $biz->biz_contact;?></a>
                                  </div>
                            </div>
                            
                            <div class="col mt-2">
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-dark"><i class="fas fa-envelope"></i></button>
                                    <a href="mailto:<?= $biz->biz_email; ?>" class="btn btn-warning align-center"><?= $biz->biz_email;?></a>
                                  </div>
                            </div>

                        </div>
                        
                    </div>
                </div>
                <?php endforeach;?>
              




<h2 class="myh2">Related <b>Listings</b></h2>
        <div class="row mt-0 mb-5">

            <?php foreach($rel_biz as $rbiz): ?>
    <div class="col-lg-6">
      <div class="home-list-pop h-100">
        <div class="col-md-4 float-left"> <img src="<?= base_url().'/assets/bizimg/'.$rbiz->biz_img;?>" class="rounded" alt="" /> </div>
        <div class="col-md-8 float-left mt-1 home-list-pop-desc">
          <p class="badge badge-info font-weight-light mb-2">
            <?= $rbiz->cat_name;?>
          </p>
          <a href="<?= base_url('Home/business/').$rbiz->cat_slug.'/'.$rbiz->biz_slug;?>">
            <h3 class="text-capitalize">
              <?= $rbiz->biz_title;?>
            </h3>
          </a>

          <h4 class="mb-0">
            <?= $rbiz->biz_address;?>
          </h4>
          <p>
            <?= $rbiz->biz_city;?>,&nbsp;
              <?= $rbiz->biz_state;?>
          </p>
          <!--<span class="home-list-pop-rat">4.2</span>-->
        </div>
      </div>
    </div>
    <?php endforeach;?>
        </div>









            </div>
            <div class="col-lg-3 p-1">
                <div class="card mt-2">
                    <img src="<?= base_url();?>/assets/file/adbanner.png" alt="" class="img-fluid">
                </div>
                
            </div>
        </div>
    </div>
