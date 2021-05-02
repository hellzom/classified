<div class="col-lg-12 mt-4">
  <div class="col">
    <div class="com-title text-center">
      <h2 class="text-center">Our <span>Businesses</span></h2>
      <p>Explore some of the best business from around the city from our partners and friends.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3">
      <div class="list-group mt-3">
        <?php foreach($cat as $cat_key): ?>
        <a href="" class="list-group-item list-group-item-action">
          <b>Related Category in <?= $cat_key->cat_name; ?></b>
        </a>
        <?php foreach($scat as $scat_key): ?>
        <?php if( $cat_key->cat_id == $scat_key->cat_parent_id){ ?>
        <a href="<?= base_url('Home/listing/').$cat_key->cat_slug."/".$scat_key->cat_slug;?>" class="list-group-item list-group-item-action"><img src="<?= base_url();?>/assets/bizimg/<?= $scat_key->cat_banner;?>" class="rounded-circle" width="40px;" alt=""> &nbsp;<?= $scat_key->cat_name; ?></a>
       <?php } endforeach; ?>
       <?php endforeach; ?>
      </div>
    </div>
    <div class="col-lg-7">
      <?php foreach($biz as $biz): ?>
      <div class="home-list-pop list-spac row">
        <!--LISTINGS IMAGE-->
        <div class="col-md-3 list-ser-img"> <img src="<?= base_url();?>/assets/bizimg/<?= $biz->biz_img;?>" alt="<?= $biz->biz_title;?>"> </div>
        <!--LISTINGS: CONTENT-->
        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc">
          <a href="<?= base_url("home/business/".$biz->cat_slug."/".$biz->biz_slug); ?>">
            <h3>
              <?= $biz->biz_title;?>
            </h3>
          </a>
          <p class="badge badge-info">
            <?= $biz->cat_name;?>
          </p>
          <div class="list-number">
            <ul>
              <li><i class="fas fa-lg fa-home"></i>
                <?= $biz->biz_address;?>,
                  <?= $biz->biz_street;?>,
                    <?= $biz->biz_city;?>
              </li>
              <li><i class="fas fa-lg fa-phone"></i>
                <?= $biz->biz_contact;?>
              </li>
            </ul>
          </div>
          <br>

        </div>
      </div>

      <?php endforeach;?>

    </div>
    <div class="col-lg-2 pl-1 pt-1">
                <div class="card mt-3">
                    <img src="<?= base_url();?>/assets/file/adbanner.png" alt="" class="img-fluid">
                </div>
                
            </div>
  </div>
</div>