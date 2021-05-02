<?= $this->session->flashdata('biz_add'); ?>
<?= $this->session->flashdata('biz_edit'); ?>
<span class="font-weight-bold h3">All Business</span><a href="<?= base_url('A/add_biz');?>" class="btn btn-info m-1 float-right">Add Business</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Type</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($biz as $biz): ?>
    <tr>
      <th scope="row"><img src="<?= base_url();?>/assets/bizimg/<?=$biz->biz_img;?>" class="all_biz_img" alt=""></th>
      <td><?= $biz->biz_title; ?> <br>
        <span class="text-muted"><?= $biz->biz_address.', '.$biz->biz_street.', '.$biz->biz_city; ?></span>
      </td>
      <td>
        <span class="badge badge-primary"><?= $biz->cat_name; ?></span>
      </td>
      <td>
        <span class="badge badge-info"><?= $biz->biz_type; ?></span>
      </td>
      <td><span class="badge badge-pill badge-success"><?=$biz->biz_status;?></span></td>
      <td><div class="btn-group"><a href="<?= base_url('A/gallery');?>/<?=$biz->biz_slug;?>" class="btn btn-sm btn-success">Gallery</a> <a href="<?= base_url('A/view_biz');?>/<?=$biz->biz_slug;?>" class="btn btn-sm btn-primary">View</a> <a href="<?= base_url('A/edit_biz');?>/<?=$biz->biz_slug;?>" class="btn btn-sm btn-warning">Edit</a></div></td>
      
    </tr>
  <?php endforeach; ?>
    
  </tbody>
</table>