<?= $this->session->flashdata('cat_add'); ?>
<?= $this->session->flashdata('subcat_add'); ?>
<?= $this->session->flashdata('cat_updated'); ?>
<span class="font-weight-bold h3">All Categories</span><a href="<?= base_url('A/cat');?>" class="btn btn-info m-1 float-right">Add Category</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($cat as $cat): ?>
    <tr>
      <th scope="row"><img src="<?= base_url();?>/assets/bizimg/<?= $cat->cat_banner;?>" class="all_biz_img" alt=""></th>
      <td><?=$cat->cat_name;?></td>
      <?php 
      $status = $cat->cat_status;
      if($status == "Active"){
          $st = "<span class='badge badge-pill badge-primary'>Active</span>";
      }
      else{
          $st = "<span class='badge badge-pill badge-danger'>Not-Active</span>";
      }
      ?>
      <td><?= $st; ?></td>
      <td>
  

  <div class="btn-group" role="group">
  <a href="<?= base_url('A/manage_cat');?>/<?=$cat->cat_id;?>" class="btn btn-sm btn-info">View</a>
  <a href="<?= base_url('A/add_subcat');?>/<?=$cat->cat_id;?>" class="btn btn-sm btn-success">Add Subcat</a>

  </div>

</div>
        
      </td>
    </tr>
  <?php endforeach; ?>
    
  </tbody>
</table>