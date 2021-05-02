<div class="container p-2 text-center">
  <h1 class="mt-5">Browse our categories</h1>
  <h5>Explore some of the best business from the categories</h5>
</div>
<div class="container px-3">
  <div class="row mb-5">
    <?php foreach($cat as $cat): ?>
    <div class="col-lg-3 col-6 p-1 mt-2">
      <a href="<?= base_url('Home/category/'.$cat->cat_id."/".$cat->cat_slug);?>" class="card-link text-dark">
        <div class="card text-center h-100" title="<?= $cat->cat_name;?>">
          <div class="card-body icon-hover"><img style="width:70px; height:70px;" class="rounded-circle" src="<?= base_url();?>/assets/bizimg/<?= $cat->cat_banner;?>">
            <h6 class="my-auto mt-3">
              <?= $cat->cat_name;?>
            </h6>
          </div>
        </div>
      </a>
    </div>
    <?php endforeach;?>
  </div>
</div>