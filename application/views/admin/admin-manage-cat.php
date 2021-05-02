<div class="container">
  <?php $alert =  $this->session->flashdata('icon_error');  ?>
  <?php foreach($scat as $scat): ?>
  <?= form_open_multipart('A/manage_cat/'.$this->uri->segment(3));?>
  <h3 class="mb-4">UPDATE <b class="text-warning text-uppercase"> <?= $scat->cat_name;?></b></h3>
  
  <div class="row">
    <div class="col-lg-3 text-center">
      <img class="p-2 mr-3" src="<?= base_url()?>/assets/bizimg/<?= $scat->cat_banner;?>" width="128px" alt="Generic placeholder image">
      <br>

      <button type="button" id="submit" style="cursor: pointer;" class="badge badge-danger" data-toggle="modal" data-target="#UpdateIcon">Change Icon</button>

      
    </div>
    <div class="col-lg-9 pl-5">
      <div class="row form-group mt-3">
        <div class="col col-md-3">
          <label for="hf-email" class=" form-control-label">Title</label>
        </div>
        <div class="col-12 col-md-9">
          <input type="text" name="cat_name" value="<?= $scat->cat_name;?>" class="form-control form-control-sm">
          <?= form_error('cat_name');?>
        </div>
      </div>
      
      <div class="row form-group">
        <div class="col col-md-3">
          <label for="hf-email" class=" form-control-label">Status</label>
        </div>
        <div class="col-12 col-md-9">
          <select name="cat_status" id="selectSm" class="form-control form-control-sm">
            <option selected value="<?= $scat->cat_status;?>"><?= $scat->cat_status;?></option>
            <option disabled>---------</option>
            <option value="Active">Active</option>
            <option value="Not-Active">Not Active</option>
          </select>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-12 col-md-3"></div>
        <div class="col-12 col-md-9">
          <input type="submit" class="btn btn-warning btn-sm" value="UPDATE">
          <a href="<?= base_url('A/all_cat');?>" class="btn btn-info btn-sm">BACK</a>
        </div>
      </div>
    </div>
  </div>
  <hr class="bg-info">
  <h4>Subcategory List</h4>
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
      <?php foreach($subcat as $subcat): ?>
      <tr>
        <th scope="row"><img src="<?= base_url();?>/assets/bizimg/<?= $subcat->cat_banner;?>" class="all_biz_img" alt=""></th>
        <td><?=$subcat->cat_name;?></td>
        
        <td><span class="badge badge-pill badge-primary"><?=$subcat->cat_status;?></span></td>
        <td>
          <div role="group" class="btn-group">
          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">
          Remove
          </button>
            <a href="<?= base_url('A/manage_cat');?>/<?=$subcat->cat_id;?>" class="btn btn-sm btn-warning">Update</a>
            </div>
        </div>
        
      </td>
    </tr>
    <?php endforeach; ?>
    
  </tbody>
</table>
</form>
<?php endforeach;?>
</div>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content text-danger">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    Sorry! This feature is disabled due to security reasons for now. :)
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- modalend -->
<!-- icon update -->
<div class="modal fade" id="UpdateIcon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content text-danger">
  <?= form_open_multipart('A/cat_icon_update/'.$this->uri->segment(3).'/'.$this->uri->segment(4)); ?>
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Change Icon</h5>
    
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="form-group">
      <label for="Change icon"></label>
      <input type="file" name="cat_banner" class="border border-muted p-1 w-100">
      <div class="small">
        <?php echo $alert; ?>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
    <input type="submit" class="btn btn-success btn-sm" value="Update">
  </div>
  <?= form_close(); ?>
</div>
</div>
</div>
<!-- icon update end -->