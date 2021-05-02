
<?php foreach($biz as $biz): ?>
<div class="bg-ho text-light p-0" style="background-image: url(<?= base_url();?>/assets/workplace-1245776_1280.jpg);">
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
                        <div class="row text-left">
                            <div class="col mt-2">
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-dark"><i class="fas fa-phone"></i></button>
                                    <a href="" class="btn btn-warning align-center"><?= $biz->biz_contact;?></a>
                                  </div>
                            </div>
                            
                            <div class="col mt-2">
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-dark"><i class="fas fa-user"></i></button>
                                    <a href="" class="btn btn-warning align-center"><?= $biz->biz_user;?></a>
                                  </div>
                            </div>
                            <div class="col mt-2">
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-dark"><i class="fas fa-envelope"></i></button>
                                    <a href="" class="btn btn-warning align-center"><?= $biz->biz_email;?></a>
                                  </div>
                            </div>

                        </div>
                        
                    </div>
                </div>
               
              
            </div>
            <div class="col-lg-3 mt-2">
                <a href="<?= base_url('A/edit_biz/'.$biz->biz_slug);?>" class="btn btn-lg btn-danger">Edit <?= $biz->biz_title;?></a>
            </div>
            
        </div>
    </div>
     <?php endforeach;?>
